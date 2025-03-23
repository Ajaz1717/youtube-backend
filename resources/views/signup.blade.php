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
    <!-- @vite(['resources/css/app.css', 'resources/js/app.js']) -->
    @vite([secure_asset('https://youtube-backend-qoi9.onrender.com/build/assets/app-C_KKBAEc.css'), secure_asset('https://youtube-backend-qoi9.onrender.com/build/assets/app-CqflisoM.js')])
</head>

<body class="bg-gray-100 h-screen flex justify-center items-center">

  <div class="w-full max-w-md p-10 md:p-6 bg-transparent md:bg-white rounded-lg md:shadow-lg">
    <h2 class="text-2xl font-semibold text-center mb-1 text-gray-800">Admin Panel</h2>
    <h2 class="text-2xl font-semibold text-center mb-6 text-gray-800">Sign Up</h2>
    
    <!-- Sign Up Form -->
    <form action="signin" method="POST">
      @csrf
      <!-- Full Name -->
      <div class="h-[70px]">
        <label for="fullname" class="block text-sm font-medium text-gray-700">Full Name</label>
        <input type="text" id="fullname" name="fullname" placeholder="Enter your full name" 
          class="w-full p-1.5 md:p-3 text-xs md:text-base border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-blue-500">
          <span class="text-red-800 text-[9px] md:text-xs relative bottom-1.5">@error('fullname'){{$message}}@enderror</span>
      </div>

      <!-- Email -->
      <div class="h-[70px] md:mb-4 md:mt-4">
        <label for="email" class="block text-sm font-medium text-gray-700">Email</label>
        <input type="email" id="email" name="email" placeholder="Enter your email" 
          class="w-full p-1.5 md:p-3 text-xs md:text-base border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-blue-500">
          <span class="text-red-800 text-[9px] md:text-xs relative bottom-1.5">@error('email'){{$message}}@enderror</span>
      </div>

      <!-- Password -->
      <div class="h-[70px] md:mb-4">
        <label for="password" class="block text-sm font-medium text-gray-700">Password</label>
        <input type="password" id="password" name="password" placeholder="Create a password" 
          class="w-full p-1.5 md:p-3 text-xs md:text-base border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-blue-500">
          <span class="text-red-800 text-[9px] md:text-xs relative bottom-1.5">@error('password'){{$message}}@enderror</span>
      </div>

      <!-- Confirm Password -->
      <div class="h-[70px] md:mb-6">
        <label for="confirm_password" class="block text-sm font-medium text-gray-700">Confirm Password</label>
        <input type="password" id="confirm_password" name="confirm_password" placeholder="Confirm your password" 
          class="w-full p-1.5 md:p-3 text-xs md:text-base border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-blue-500">
          <span class="text-red-800 text-[9px] md:text-xs relative bottom-1.5">@error('confirm_password'){{$message}}@enderror</span>
      </div>

      <!-- Sign Up Button -->
      <button type="submit" class="w-full bg-gray-700 text-white py-1 md:py-3 rounded-md hover:bg-gray-900 focus:outline-none focus:ring-2 focus:ring-blue-500">
        Sign Up
      </button>

      <!-- Already have an account? Login Link -->
      <div class="mt-4 text-center text-sm text-gray-600">
        <p>Already have an account? <a href="/" class="text-blue-500 hover:underline">Login</a></p>
      </div>

    </form>
  </div>

</body>

</html>