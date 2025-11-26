<?php

namespace App\Http\Controllers;

use App\Models\GBMember;
use Illuminate\Http\Request;

class GBMemberController extends Controller
{
    /**
     * List all members
     */
    public function index()
    {
        $members = GBMember::orderByRaw("full_name = 'Bachera Aktar, PhD' DESC")->orderBy('full_name', 'ASC')->get();

        return view('front.page.gb_members.index', compact('members'));
    }

    /**
     * Show one member
     */
    public function show($id)
    {
        $member = GBMember::findOrFail($id);
        return view('front.page.gb_members.show', compact('member'));
    }

    /**
     * Show CSV Import Page
     */
    public function create()
    {
        return view('front.page.gb_members.import');
    }

    /**
     * CSV Import
     */
    public function importCsv(Request $request)
    {
        $request->validate([
            'csv_file' => 'required|mimes:csv,txt',
        ]);

        $file = fopen($request->csv_file->getRealPath(), 'r');

        $row = 0;

        while (($data = fgetcsv($file, 10000, ',')) !== false) {
            // Skip header row if exists
            if ($row == 0 && strtolower($data[0]) == 'full_name') {
                $row++;
                continue;
            }

            if (count($data) < 5) {
                continue; // Not enough columns
            }

            $full_name = trim($data[0]);

            // Generate photo filename from full_name
            $photo = strtolower($full_name);
            $photo = preg_replace('/[^a-z0-9]+/', '_', $photo); // replace non-alphanumeric with _
            $photo = trim($photo, '_'); // trim trailing underscores
            $photo .= '.jpg'; // add extension

            GBMember::create([
                'full_name' => $full_name,
                'role_ev_gb' => $data[1],
                'designatation_org' => $data[2],
                'email' => $data[3],
                'short_bio' => $data[4],
                'photo' => $photo,
            ]);

            $row++;
        }

        fclose($file);

        return redirect()->route('gb_members.index')->with('success', 'CSV Imported Successfully!');
    }

    /**
     * Delete a member
     */
    public function destroy($id)
    {
        $member = GBMember::findOrFail($id);

        // Delete stored photo if in storage folder
        if ($member->photo && Storage::exists("photos/$member->photo")) {
            Storage::delete("photos/$member->photo");
        }

        $member->delete();

        return back()->with('success', 'Member deleted successfully!');
    }
}
