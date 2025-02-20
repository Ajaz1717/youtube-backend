<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Video; // Model ko import karein

class AdminController extends Controller
{
    public function dashboard()
    {
        return view('admin.dashboard');
    }

    public function videos()
    {
        // Database se pehli video entry fetch karein
        $videos = Video::all();

        // Agar koi video mili to view ke sath pass karein
        return view('admin.videos', compact('videos'));
    }

    public function storeVideo(Request $request)
    {
        // Validate the form data
        $request->validate([
            'name' => 'required|string|max:255',
            'video_url' => 'required|url',
            'author' => 'required|string|max:255',
        ]);

        // Insert into database
        Video::create([
            'name' => $request->name,
            'url' => $request->video_url,
            'author' => $request->author,
        ]);

        // Redirect back with success message
        return redirect()->route('admin.videos')->with('success', 'Video added successfully!');
    }

    public function login(Request $request)
    {
        $request->validate([
            'email' => 'required|email',
            'password' => 'required',
        ]);
    }

    public function signin(Request $request)
    {
        $request->validate(([
            'fullname' => 'required',
            'email' => 'required',
            'password' => 'required',
            'confirm_password' => 'required',
        ]));
        return redirect()->route('admin.dashboard')->with('success', 'Video added successfully!');
    }
}
