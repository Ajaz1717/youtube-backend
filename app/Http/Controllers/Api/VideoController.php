<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Video;

class VideoController extends Controller
{
    public function getVideos()
    {
        return response()->json(Video::all(), 200);
    }

    public function getVideoById($id)
    {
        $video = Video::find($id);
        if (!$video) {
            return response()->json(['message' => 'Video not found'], 404);
        }
        return response()->json($video, 200);
    }
}