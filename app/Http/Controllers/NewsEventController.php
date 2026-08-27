<?php

namespace App\Http\Controllers;

use App\Models\NewsEvent;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class NewsEventController extends Controller
{
    public function frontIndex()
    {
        $newsEvents = NewsEvent::orderBy('created_at', 'desc')->get();

        return response()
        ->view('front.index', compact('newsEvents')) // Replace with your actual view name
        ->header('Cache-Control', 'no-cache, no-store, max-age=0, must-revalidate')
        ->header('Pragma', 'no-cache')
        ->header('Expires', 'Sat, 01 Jan 1990 00:00:00 GMT');


        // return view('front.page.indexpage', compact('newsEvents'));
    }

    public function index()
    {
        $news = NewsEvent::latest()->paginate(10);
        return view('admin.news.index', compact('news'));
    }

    public function create()
    {
        return view('admin.news.create');
    }

    public function store(Request $request)
{
    $request->validate([
        'image' => 'required|image|mimes:jpg,jpeg,png,webp|max:2048',
        'type' => 'required|string|max:100',
        'title' => 'required|max:500',
        'description' => 'required',
        'link' => 'nullable|url',
        'button_text' => 'nullable|string|max:100',
    ]);

    $image = $request->file('image');

    $destinationPath = 'assets/images/news/';
    $imageName = time() . '_' . uniqid() . '.' . $image->getClientOriginalExtension();

    $image->move($destinationPath, $imageName);

    NewsEvent::create([
        'image' => $destinationPath . $imageName,
        'title' => $request->title,
        'description' => $request->description,
        'link' => $request->link,
        'type' => $request->type,
        'button_text' => $request->button_text,
    ]);

    return redirect()
        ->route('news-events.index')
        ->with('success', 'Created Successfully');
}



    public function edit(NewsEvent $news_event)
    {
        return view('admin.news.edit', compact('news_event'));
    }

public function update(Request $request, NewsEvent $news_event)
{
    $request->validate([
        'image' => 'nullable|image|mimes:jpg,jpeg,png,webp|max:2048',
        'type' => 'required|string|max:100',
        'title' => 'required|max:500',
        'description' => 'required',
        'link' => 'nullable|url',
        'button_text' => 'nullable|string|max:100',
    ]);

    if ($request->hasFile('image')) {

        // Delete old image
        if ($news_event->image && file_exists($news_event->image)) {
            unlink($news_event->image);
        }

        $image = $request->file('image');
        $destinationPath = 'assets/images/news/';
        $imageName = time() . '_' . uniqid() . '.' . $image->getClientOriginalExtension();

        $image->move($destinationPath, $imageName);
        $news_event->image = $destinationPath . $imageName;
    }

    $news_event->update([
        'title' => $request->title,
        'description' => $request->description,
        'link' => $request->link,
        'type' => $request->type,
        'button_text' => $request->button_text,
    ]);

    return redirect()
        ->route('news-events.index')
        ->with('success', 'Updated Successfully');
}



    public function destroy(NewsEvent $news_event)
    {
        $news_event->delete();
        return back()->with('success', 'Deleted Successfully');
    }
}
