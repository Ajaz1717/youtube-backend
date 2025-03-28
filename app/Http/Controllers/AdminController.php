<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Video; // Model ko import karein

class AdminController extends Controller
{
    public function dashboard()
    {
        return view('dashboard');
    }

    public function videos()
    {
        // Database se pehli video entry fetch karein
        $videos = Video::all();

        // Agar koi video mili to view ke sath pass karein
        return view('videos', compact('videos'));
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
        return redirect()->route('videos')->with('success', 'Video added successfully!');
    }

    public function deleteVideo($id)
    {
        $video = Video::find($id);

        if (!$video) {
            return redirect()->route('videos')->with('error', 'Video not found.');
        }

        $video->delete();

        return redirect()->route('videos')->with('success', 'Video deleted successfully.');
    }

    public function editVideo($id)
    {
        $video = Video::find($id);

        if (!$video) {
            return redirect()->route('videos')->with('error', 'Video not found.');
        }

        return view('edit_video', compact('video'));
    }

    public function updateVideo(Request $request, $id)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'video_url' => 'required|url',
            'author' => 'required|string|max:255',
        ]);

        $video = Video::find($id);

        if (!$video) {
            return redirect()->route('videos')->with('error', 'Video not found.');
        }

        $video->update([
            'name' => $request->name,
            'url' => $request->video_url,
            'author' => $request->author,
        ]);

        return redirect()->route('videos')->with('success', 'Video updated successfully.');
    }

    // public function login(Request $request)
    // {
    //     $request->validate([
    //         'email' => 'required|email',
    //         'password' => 'required',
    //     ]);
    //     return redirect()->route('dashboard')->with('login success');
    // }

    // public function signin(Request $request)
    // {
    //     $request->validate(([
    //         'fullname' => 'required',
    //         'email' => 'required',
    //         'password' => 'required',
    //         'confirm_password' => 'required',
    //     ]));
    //     return redirect()->route('dashboard')->with('sign up success');
    // }
}
