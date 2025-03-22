<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Login</title>

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />
    <!-- @vite('resources/css/app.css') -->
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    <!-- @vite([secure_asset('build/assets/app-C_KKBAEc.css'), secure_asset('build/assets/app-CqflisoM.js')]) -->
</head>
<body class="bg-gray-100 h-screen flex justify-center items-center">

    <div class="w-full max-w-md p-10 md:p-6 bg-transparent md:bg-white rounded-lg md:shadow-lg">
        <h2 class="text-2xl font-semibold text-center mb-1 text-gray-800">Admin Panel</h2>
        <h2 class="text-2xl font-semibold text-center mb-6 text-gray-800">Login</h2>

        <!-- Login Form -->
        <form action="login" method="POST">
            @csrf
            <!-- Email -->
            <div class="h-[70px]">
                <label for="email" class="block text-sm font-medium text-gray-700">Email</label>
                <input type="email" id="text" name="email" placeholder="Enter your email"
                    class="w-full p-1.5 md:p-3 text-xs md:text-base border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-blue-500">
                    <span class="text-red-800 text-[9px] md:text-xs relative bottom-1.5">@error('email'){{$message}}@enderror</span>
            </div>

            <!-- Password -->
            <div class="h-[70px] md:mt-6 md:mb-6">
                <label for="password" class="block text-sm font-medium text-gray-700">Password</label>
                <input type="password" id="password" name="password" placeholder="Enter your password"
                    class="w-full p-1.5 md:p-3 text-xs md:text-base border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-blue-500">
                    <span class="text-red-800 text-[9px] md:text-xs relative bottom-1.5">@error('password'){{$message}}@enderror</span>
            </div>

            <!-- Submit Button -->
            <button type="submit" class="w-full bg-gray-700 text-white py-1.5 md:py-3 rounded-md hover:bg-gray-900 focus:outline-none focus:ring-2 focus:ring-blue-500">
                Login
            </button>

            <!-- Forgot Password & Sign Up Links -->
            <div class="mt-4 text-center text-sm text-gray-600">
                <a href="#" class="hover:text-blue-500">Forgot password?</a>
                <p class="mt-2">Don't have an account? <a href="/signin" class="text-blue-500 hover:underline">Sign Up</a></p>
            </div>

        </form>
    </div>

</body>

</html>