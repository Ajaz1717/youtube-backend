@extends('layouts.admin')

@section('content')

<!-- Main Content -->
<div class="flex-1 p-6">
    <h1 class="text-3xl font-semibold">Dashboard</h1>
    <!-- <div id="videoList" class="hidden mt-6 bg-white p-4 rounded shadow">
        <div class="flex justify-between items-center mb-4">
            <h2 class="text-xl font-bold">Video List</h2>
            <button class="bg-blue-500 text-white px-4 py-2 rounded">Add New</button>
        </div>
        <ul>
            <li class="py-2 border-b flex justify-between items-center">
                <span>Video 1</span>
                <button class="text-blue-500">Edit</button>
            </li>
            <li class="py-2 border-b flex justify-between items-center">
                <span>Video 2</span>
                <button class="text-blue-500">Edit</button>
            </li>
            <li class="py-2 border-b flex justify-between items-center">
                <span>Video 3</span>
                <button class="text-blue-500">Edit</button>
            </li>
        </ul>
    </div> -->
</div>

<script>
    document.getElementById('videoLink').addEventListener('click', function(event) {
        event.preventDefault();
        document.getElementById('videoList').classList.toggle('hidden');
    });
</script>
@endsection