<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Youtube') }}
        </h2>
    </x-slot>

    <div x-data="{ showForm: false }" class="py-4">
        <!-- Add Video Form -->
        <div x-show="showForm" class="mt-4 p-4 bg-white shadow-md rounded text-xs md:text-lg">
            <form action="{{ route('videos.store') }}" method="POST">
                @csrf
                <label class="block mb-2 text-gray-600">YouTube Video URL</label>
                <input type="text" name="name" class="w-full p-2 border rounded placeholder:text-xs" placeholder="Enter Video Name">
                <span class="text-red-800 text-[9px] md:text-xs relative bottom-1.5">@error('name'){{$message}}@enderror</span>
                <input type="text" name="video_url" class="w-full p-2 border rounded my-1 placeholder:text-xs" placeholder="Enter YouTube URL">
                <span class="text-red-800 text-[9px] md:text-xs relative bottom-1.5">@error('video_url'){{$message}}@enderror</span>
                <input type="text" name="author" class="w-full p-2 border rounded placeholder:text-xs" placeholder="Enter Author Name">
                <span class="text-red-800 text-[9px] md:text-xs relative bottom-1.5">@error('author'){{$message}}@enderror</span>
                <button @click="showForm = !showForm" type="submit" class="mt-2 px-4 py-2 bg-blue-600 text-white rounded">ADD VIDEO</button>
                <button @click="showForm = !showForm" class="mt-2 px-4 py-2 bg-red-600 text-white rounded">CANCEL</button>
            </form>
        </div>

        <!-- Video List -->
        <div class="mt-6">
            <div class="flex justify-between items-center px-4">
                <h3 class="text-xl font-semibold mb-3 dark:text-white">Uploaded Videos</h3>
                <x-secondary-button @click="showForm = !showForm" class="ms-3">
                    {{ __('Add New') }}
                </x-secondary-button>
            </div>
            <table class="w-full bg-white shadow-md rounded">
                <thead>
                    <tr class="bg-gray-200 text-xs dark:bg-gray-900 md:text-lg dark:text-white">
                        <th class="p-2 text-left">ID</th>
                        <th class="p-2 text-left">Name</th>
                        <th class="p-2 text-left hidden">URL</th>
                        <th class="p-2 text-left hidden md:block">Author</th>
                        <th class="p-2">Actions</th>
                    </tr>
                </thead>
                <tbody class="bg-white dark:bg-gray-800 dark:text-white text-black">
                    @foreach ($videos as $video)
                    <tr class="border-b text-xs md:text-lg">
                        <td class="p-2">{{ $video->id }}</td>
                        <td class="p-2">{{ $video->name }}</td>
                        <td class="p-2 hidden">{{ $video->url }}</td>
                        <td class="p-2 hidden md:block">{{ $video->author }}</td>
                        <td class="p-2 text-center">
                        <a href="{{ route('videos.edit', $video->id) }}" class="text-blue-500">Edit</a> |
                            <form action="{{ route('videos.delete', $video->id) }}" method="POST" style="display:inline;">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="text-red-500" onclick="return confirm('Are you sure you want to delete this video?');">Delete</button>
                            </form>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</x-app-layout>