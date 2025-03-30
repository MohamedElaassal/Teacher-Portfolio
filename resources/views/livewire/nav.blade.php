<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Navigation</title>
    @vite('resources/css/app.css') <!-- Tailwind CSS -->
    <script src="//unpkg.com/alpinejs" defer></script> <!-- Alpine.js -->
</head>
<body>
    <div x-data="{ isOpen: false }" class="bg-white shadow-md">
        <nav class="container mx-auto px-4 py-4 flex items-center justify-between">
            <!-- Logo -->
            <a href="/" class="text-2xl font-bold text-blue-600 hover:text-blue-800">
                <img src="{{ asset('storage/images/logo.png') }}" alt="Logo" class="w-25">
            </a>

            <!-- Desktop Menu -->
            <div class="hidden sm:flex space-x-8 text-lg font-medium">
                <a href="/" class="text-gray-700 hover:text-blue-600 transition">Home</a>
                <a href="/about-us" class="text-gray-700 hover:text-blue-600 transition">About Us</a>
                <a href="/publications" class="text-gray-700 hover:text-blue-600 transition">Projects</a>
                <a href="/contact" class="text-gray-700 hover:text-blue-600 transition">Contact</a>
            </div>

            <!-- Mobile Menu Button -->
            <button @click="isOpen = !isOpen" class="sm:hidden focus:outline-none">
                <svg xmlns="http://www.w3.org/2000/svg" class="h-8 w-8 text-gray-700" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16m-7 6h7" />
                </svg>
            </button>
        </nav>

        <!-- Mobile Dropdown Menu -->
        <div x-show="isOpen" @click.away="isOpen = false" class="sm:hidden bg-gray-100 shadow-md">
            <ul class="flex flex-col items-center space-y-4 py-4 text-lg font-medium">
                <li><a href="/" class="text-gray-700 hover:text-blue-600 transition">Home</a></li>
                <li><a href="/about-us" class="text-gray-700 hover:text-blue-600 transition">About Us</a></li>
                <li><a href="/publications" class="text-gray-700 hover:text-blue-600 transition">Projects</a></li>
                <li><a href="/contact" class="text-gray-700 hover:text-blue-600 transition">Contact</a></li>
            </ul>
        </div>
    </div>
</body>
</html>
