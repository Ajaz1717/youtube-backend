<x-app-layout>
  <x-slot name="header">
    <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
      {{ __('Edit Video') }}
    </h2>
  </x-slot>

  <body class="flex items-center justify-center h-screen bg-gray-100 dark:bg-gray-800 dark:text-white w-full">
    <div class="bg-white p-6 rounded-lg shadow-lg w-full">
      <form action="{{ route('videos.update', $video->id) }}" method="POST" class="w-full">
        @csrf
        @method('PUT')

        <label class="block mb-2">Name:</label>
        <input type="text" name="name" value="{{ $video->name }}" class="w-full p-2 border rounded mb-3">

        <label class="block mb-2">Video URL:</label>
        <input type="url" name="video_url" value="{{ $video->url }}" class="w-full p-2 border rounded mb-3">

        <label class="block mb-2">Author:</label>
        <input type="text" name="author" value="{{ $video->author }}" class="w-full p-2 border rounded mb-3">

        <div class="flex justify-between mt-4">
          <a href="{{ route('videos') }}" class="mt-2 px-4 py-2 bg-red-600 text-white rounded uppercase">Cancel</a>
          <button type="submit" class="mt-2 px-4 py-2 bg-blue-600 text-white rounded uppercase">Save Changes</button>
        </div>
      </form>
    </div>
  </body>
</x-app-layout>