<div x-data="{ isOpen: false, darkMode: $darkMode }" :class="{ 'bg-gray-900 text-gray-100': darkMode, 'bg-white text-gray-900': !darkMode }" class="shadow-md sticky top-0 z-50">
    <nav class="container mx-auto px-4 py-4 flex items-center justify-between">
        <!-- Logo -->
        <a wire:navigate href="/" class="text-2xl font-bold text-blue-600 dark:text-blue-400 hover:text-blue-800 dark:hover:text-blue-300">
            <img src="{{ asset('storage/images/logo.png') }}" alt="Logo" class="w-25">
        </a>

        <!-- Desktop Menu -->
        <div class="hidden md:flex space-x-8 text-lg font-medium">
            <a wire:navigate href="/" class="{{ request()->routeIs('home') ? 'text-indigo-600 dark:text-indigo-400 font-bold' : 'text-gray-700 dark:text-gray-300 hover:text-indigo-600 dark:hover:text-indigo-400' }} transition relative group">
                Home
                <span class="absolute bottom-0 left-0 w-0 h-1 bg-indigo-600 dark:bg-indigo-400 group-hover:w-full transition-all duration-300"></span>
            </a>
            <a wire:navigate href="/about-us" class="{{ request()->routeIs('about-us') ? 'text-indigo-600 dark:text-indigo-400 font-bold' : 'text-gray-700 dark:text-gray-300 hover:text-indigo-600 dark:hover:text-indigo-400' }} transition relative group">
                About Us
                <span class="absolute bottom-0 left-0 w-0 h-1 bg-indigo-600 dark:bg-indigo-400 group-hover:w-full transition-all duration-300"></span>
            </a>
            <a wire:navigate href="/publications" class="{{ request()->routeIs('publications') ? 'text-indigo-600 dark:text-indigo-400 font-bold' : 'text-gray-700 dark:text-gray-300 hover:text-indigo-600 dark:hover:text-indigo-400' }} transition relative group">
                Publications
                <span class="absolute bottom-0 left-0 w-0 h-1 bg-indigo-600 dark:bg-indigo-400 group-hover:w-full transition-all duration-300"></span>
            </a>
            <a wire:navigate href="/courses" class="{{ request()->routeIs('courses') ? 'text-indigo-600 dark:text-indigo-400 font-bold' : 'text-gray-700 dark:text-gray-300 hover:text-indigo-600 dark:hover:text-indigo-400' }} transition relative group">
                Courses
                <span class="absolute bottom-0 left-0 w-0 h-1 bg-indigo-600 dark:bg-indigo-400 group-hover:w-full transition-all duration-300"></span>
            </a>
            <a wire:navigate href="/contact" class="{{ request()->routeIs('contact') ? 'text-indigo-600 dark:text-indigo-400 font-bold' : 'text-gray-700 dark:text-gray-300 hover:text-indigo-600 dark:hover:text-indigo-400' }} transition relative group">
                Contact
                <span class="absolute bottom-0 left-0 w-0 h-1 bg-indigo-600 dark:bg-indigo-400 group-hover:w-full transition-all duration-300"></span>
            </a>
        </div>

        <!-- Dark Mode Toggle -->
        <button @click="darkMode = !darkMode" class="p-2 rounded-md">
            <svg x-show="!darkMode" xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 text-yellow-400" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 3v1m0 16v1m9-9h-1M4 12H3m15.364 6.364l-.707-.707M6.343 6.343l-.707-.707m12.728 0l-.707.707M6.343 17.657l-.707.707M16 12a4 4 0 11-8 0 4 4 0 018 0z" />
            </svg>
            <svg x-show="darkMode" xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 text-gray-100" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M20.354 15.354A9 9 0 018.646 3.646 9.003 9.003 0 0012 21a9.003 9.003 0 008.354-5.646z" />
            </svg>
        </button>

        <!-- Mobile Menu Button -->
        <button @click="isOpen = !isOpen" class="md:hidden">
            <img src="{{ asset('storage/images/menu.png') }}" class="h-12 w-12 cursor-pointer" alt="Menu">
        </button>
    </nav>

    <!-- Mobile Dropdown Menu -->
    <div x-show="isOpen" x-cloak x-transition @click.away="isOpen = false" :class="{ 'bg-gray-800 text-gray-100': darkMode, 'bg-gray-100 text-gray-900': !darkMode }" class="sm:hidden shadow-md">
        <ul class="flex flex-col items-center space-y-4 py-4 text-lg font-medium">
            <li>
                <a wire:navigate href="/" class="{{ request()->routeIs('home') ? 'text-indigo-600 font-bold' : 'text-gray-700 hover:text-indigo-600' }} transition relative group">
                    Home
                    <span class="absolute bottom-0 left-0 w-0 h-1 bg-indigo-600 group-hover:w-full transition-all duration-300"></span>
                </a>
            </li>
            <li>
                <a wire:navigate href="/about-us" class="{{ request()->routeIs('about-us') ? 'text-indigo-600 font-bold' : 'text-gray-700 hover:text-indigo-600' }} transition relative group">
                    About Us
                    <span class="absolute bottom-0 left-0 w-0 h-1 bg-indigo-600 group-hover:w-full transition-all duration-300"></span>
                </a>
            </li>
            <li>
                <a wire:navigate href="/publications" class="{{ request()->routeIs('publications') ? 'text-indigo-600 font-bold' : 'text-gray-700 hover:text-indigo-600' }} transition relative group">
                    Publications
                    <span class="absolute bottom-0 left-0 w-0 h-1 bg-indigo-600 group-hover:w-full transition-all duration-300"></span>
                </a>
            </li>
            <li>
                <a wire:navigate href="/courses" class="{{ request()->routeIs('courses') ? 'text-indigo-600 font-bold' : 'text-gray-700 hover:text-indigo-600' }} transition relative group">
                    Courses
                    <span class="absolute bottom-0 left-0 w-0 h-1 bg-indigo-600 group-hover:w-full transition-all duration-300"></span>
                </a>
            </li>
            <li>
                <a wire:navigate href="/contact" class="{{ request()->routeIs('contact') ? 'text-indigo-600 font-bold' : 'text-gray-700 hover:text-indigo-600' }} transition relative group">
                    Contact
                    <span class="absolute bottom-0 left-0 w-0 h-1 bg-indigo-600 group-hover:w-full transition-all duration-300"></span>
                </a>
            </li>
        </ul>
    </div>
</div>
