<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Navigation</title>
</head>
<body>
    <div x-data="{ isOpen: false }" class="bg-white shadow-md sticky top-0 z-50">
        <nav class="container mx-auto  px-4 py-4 flex items-center justify-between ">
            <!-- Logo -->
            <a wire:navigate href="/" class="text-2xl font-bold text-blue-600 hover:text-blue-800 ">
                <img src="{{ asset('storage/images/logo.png') }}" alt="Logo" class="w-25">
            </a>

            <!-- Desktop Menu -->
            <div class="hidden md:flex space-x-8 text-lg font-medium">
                <a wire:navigate href="/" class="{{ request()->routeIs('home') ? 'text-indigo-600 font-bold' : 'text-gray-700 hover:text-indigo-600' }} transition relative group">
                    Home
                    <span class="absolute bottom-0 left-0 w-0 h-1 bg-indigo-600 group-hover:w-full transition-all duration-300"></span>
                </a>
                <a wire:navigate href="/about-us" class="{{ request()->routeIs('about-us') ? 'text-indigo-600 font-bold' : 'text-gray-700 hover:text-indigo-600' }} transition relative group">
                    About Us
                    <span class="absolute bottom-0 left-0 w-0 h-1 bg-indigo-600 group-hover:w-full transition-all duration-300"></span>
                </a>
                <a wire:navigate href="/publications" class="{{ request()->routeIs('publications') ? 'text-indigo-600 font-bold' : 'text-gray-700 hover:text-indigo-600' }} transition relative group">
                    Publications
                    <span class="absolute bottom-0 left-0 w-0 h-1 bg-indigo-600 group-hover:w-full transition-all duration-300"></span>
                </a>
                <a wire:navigate href="/courses" class="{{ request()->routeIs('courses') ? 'text-indigo-600 font-bold' : 'text-gray-700 hover:text-indigo-600' }} transition relative group">
                    Courses
                    <span class="absolute bottom-0 left-0 w-0 h-1 bg-indigo-600 group-hover:w-full transition-all duration-300"></span>
                </a>
                <a wire:navigate href="/contact" class="{{ request()->routeIs('contact') ? 'text-indigo-600 font-bold' : 'text-gray-700 hover:text-indigo-600' }} transition relative group">
                    Contact
                    <span class="absolute bottom-0 left-0 w-0 h-1 bg-indigo-600 group-hover:w-full transition-all duration-300"></span>
                </a>
            </div>

            <!-- Mobile Menu Button -->
            <button @click="isOpen = !isOpen" class="md:hidden ">
                <img src="{{ asset('storage/images/menu.png') }}" class="h-12 w-12 cursor-pointer" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                </img>
            </button>
        </nav>

        <!-- Mobile Dropdown Menu -->
        <div x-show="isOpen" @click.away="isOpen = false" class="sm:hidden bg-gray-100 shadow-md">
            <ul class="flex flex-col items-center space-y-4 py-4 text-lg font-medium">
                <li><a wire:navigate href="/" class="{{ request()->routeIs('home') ? 'text-indigo-600 font-bold' : 'text-gray-700 hover:text-indigo-600' }}  transition relative group">Home
                 <span class="absolute bottom-0 left-0 w-0 h-1 bg-indigo-600 group-hover:w-full transition-all duration-300"></span></a></li>
                <li><a wire:navigate href="/about-us" class="{{ request()->routeIs('about-us') ? 'text-indigo-600 font-bold' : 'text-gray-700 hover:text-indigo-600' }}  transition relative group">About Us
                 <span class="absolute bottom-0 left-0 w-0 h-1 bg-indigo-600 group-hover:w-full transition-all duration-300"></span></a></li>
                <li><a wire:navigate href="/publications" class="{{ request()->routeIs('publications') ? 'text-indigo-600 font-bold' : 'text-gray-700 hover:text-indigo-600' }}  transition relative group">Publications
                  <span class="absolute bottom-0 left-0 w-0 h-1 bg-indigo-600 group-hover:w-full transition-all duration-300"></span></a></li>
                <li><a wire:navigate href="/courses" class="{{ request()->routeIs('courses') ? 'text-indigo-600 font-bold' : 'text-gray-700 hover:text-indigo-600' }}  transition relative group">Courses
                  <span class="absolute bottom-0 left-0 w-0 h-1 bg-indigo-600 group-hover:w-full transition-all duration-300"></span></a></li>
                <li><a wire:navigate href="/contact" class="{{ request()->routeIs('contact') ? 'text-indigo-600 font-bold' : 'text-gray-700 hover:text-indigo-600' }}  transition relative group">Contact
                <span class="absolute bottom-0 left-0 w-0 h-1 bg-indigo-600 group-hover:w-full transition-all duration-300"></span></a></li>
            </ul>
        </div>
    </div>
</body>
</html>
