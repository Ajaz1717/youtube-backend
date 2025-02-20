@extends('layouts.admin')

@section('content')
    <h2 class="text-3xl font-semibold">Manage Videos</h2>

    <!-- Add Video Form -->
    <div class="mt-4 p-4 bg-white shadow-md rounded">
        <form action="{{ route('admin.videos.store') }}" method="POST">
            @csrf
            <label class="block mb-2 text-gray-600">YouTube Video URL</label>
            <input type="text" name="name" class="w-full p-2 border rounded" placeholder="Enter Video Name">
            <span class="text-red-800 text-[9px] md:text-xs relative bottom-1.5">@error('name'){{$message}}@enderror</span>
            <input type="text" name="video_url" class="w-full p-2 border rounded my-1" placeholder="Enter YouTube URL">
            <span class="text-red-800 text-[9px] md:text-xs relative bottom-1.5">@error('video_url'){{$message}}@enderror</span>
            <input type="text" name="author" class="w-full p-2 border rounded" placeholder="Enter Author Name">
            <span class="text-red-800 text-[9px] md:text-xs relative bottom-1.5">@error('author'){{$message}}@enderror</span>
            <button type="submit" class="mt-2 px-4 py-2 bg-blue-600 text-white rounded">Add Video</button>
        </form>
    </div>
    
    <!-- Video List -->
    <div class="mt-6">
        <h3 class="text-xl font-semibold mb-3">Uploaded Videos</h3>
        <table class="w-full bg-white shadow-md rounded">
            <thead>
                <tr class="bg-gray-200">
                    <th class="p-2 text-left">ID</th>
                    <th class="p-2 text-left">Name</th>
                    <th class="p-2 text-left">URL</th>
                    <th class="p-2 text-left">Author</th>
                    <th class="p-2">Actions</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($videos as $video)
                    <tr class="border-b">
                        <td class="p-2">{{ $video->id }}</td>
                        <td class="p-2">{{ $video->name }}</td>
                        <td class="p-2">{{ $video->url }}</td>
                        <td class="p-2">{{ $video->author }}</td>
                        <td class="p-2">
                            <a href="#" class="text-blue-500">Edit</a> |
                            <a href="#" class="text-red-500">Delete</a>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
@endsection
