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
        return view('front.page.index', compact('newsEvents'));
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
            'image' => 'required|image',
            'type' => 'required|string|max:100',
            'title' => 'required|max:500',
            'description' => 'required',
            'link' => 'nullable|url',
            'button_text' => 'nullable|string|max:100',
        ]);

        $imageName = time() . '.' . $request->image->extension();
        $request->image->move(public_path('assets/images/news'), $imageName);

        NewsEvent::create([
            'image' => 'assets/images/news/' . $imageName,
            'title' => $request->title,
            'description' => $request->description,
            'link' => $request->link,
            'type' => $request->type,
            'button_text' => $request->button_text,
        ]);

        return redirect()->route('news-events.index')->with('success', 'Created Successfully');
    }

    public function edit(NewsEvent $news_event)
    {
        return view('admin.news.edit', compact('news_event'));
    }

    public function update(Request $request, NewsEvent $news_event)
    {
        $request->validate([
            'image' => 'nullable|image|mimes:jpg,jpeg,png',
            'type' => 'required|string|max:100',
            'title' => 'required|max:500',
            'description' => 'required',
            'link' => 'nullable|url',
            'button_text' => 'nullable|string|max:100',
        ]);

        // Handle image upload
        if ($request->hasFile('image')) {
            // Delete old image if exists
            if ($news_event->image && file_exists(public_path($news_event->image))) {
                unlink(public_path($news_event->image));
            }

            $imageName = time() . '.' . $request->image->extension();
            $request->image->move(public_path('uploads/news'), $imageName);
            $news_event->image = 'assets/images/news' . $imageName;
        }

        // Update other fields
        $news_event->title = $request->title;
        $news_event->description = $request->description;
        $news_event->link = $request->link;
        $news_event->type = $request->type;
        $news_event->button_text = $request->button_text;

        $news_event->save();

        return redirect()->route('news-events.index')->with('success', 'Updated Successfully');
    }

    public function destroy(NewsEvent $news_event)
    {
        $news_event->delete();
        return back()->with('success', 'Deleted Successfully');
    }
}
