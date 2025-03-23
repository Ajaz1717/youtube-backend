<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Panel</title>
    <!-- @vite('resources/css/app.css') -->
    <!-- @vite(['resources/css/app.css', 'resources/js/app.js']) -->
    @vite([secure_asset('https://youtube-backend-qoi9.onrender.com/build/assets/app-C_KKBAEc.css'), secure_asset('https://youtube-backend-qoi9.onrender.com/build/assets/app-CqflisoM.js')])
</head>
<body class="bg-gray-100">
    <div class="flex">
        <!-- Sidebar -->
        <aside class="w-64 bg-gray-800 h-screen text-white p-4">
            <h1 class="text-2xl font-bold mb-4">Admin Panel</h1>
            <nav>
                <a href="{{ route('admin.dashboard') }}" class="block py-2 px-4 bg-gray-700 rounded mb-2">Dashboard</a>
                <a href="{{ route('admin.videos') }}" class="block py-2 px-4 bg-gray-700 rounded">Manage Videos</a>
            </nav>
        </aside>

        <!-- Content -->
        <main class="flex-1 p-6">
            @yield('content')
        </main>
    </div>
</body>
</html>
