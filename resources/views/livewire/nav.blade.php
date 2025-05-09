<div x-data="{ isOpen: false, userDropdown: false }"
     :class="{ 'bg-gray-900 text-gray-100': darkMode, 'bg-white text-gray-900': !darkMode }"
     class="shadow-md sticky top-0 z-50">
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

        <!-- User Dropdown (Desktop) -->
        <div class="hidden md:block relative">
            <button @click="userDropdown = !userDropdown" class="flex items-center space-x-1 p-2 rounded-md border border-gray-300 dark:border-gray-600 hover:bg-indigo-50 dark:hover:bg-indigo-900 text-gray-700 dark:text-gray-50 dark:font-bold hover:text-indigo-600 dark:hover:text-indigo-400 transition">
                <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M16 7a4 4 0 11-8 0 4 4 0 018 0zM12 14a7 7 0 00-7 7h14a7 7 0 00-7-7z" />
                </svg>
                <span>Account</span>
                <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4 ml-1" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7" />
                </svg>
            </button>

            <!-- Dropdown Menu -->
            <div
                x-show="userDropdown"
                x-cloak
                @click.away="userDropdown = false"
                x-transition:enter="transition ease-out duration-200"
                x-transition:enter-start="opacity-0 scale-95"
                x-transition:enter-end="opacity-100 scale-100"
                x-transition:leave="transition ease-in duration-150"
                x-transition:leave-start="opacity-100 scale-100"
                x-transition:leave-end="opacity-0 scale-95"
                class="absolute right-0 mt-2 w-48 rounded-md shadow-lg py-1 bg-white dark:bg-gray-800 ring-1 ring-black ring-opacity-5 z-50"
            >
                <!-- Dark Mode Toggle -->
                <div class="px-4 py-2 border-b border-gray-100 dark:border-gray-700">
                    <div class="flex items-center justify-between">
                        <span class="text-sm text-gray-700 dark:text-gray-300">Dark Mode</span>
                        <button @click="darkMode = !darkMode" class="relative w-10 h-5 rounded-full bg-gray-300 dark:bg-gray-600 transition duration-300 ease-in-out">
                            <span :class="{'translate-x-5': darkMode, 'translate-x-0': !darkMode}" class="absolute top-0 left-0 w-5 h-5 bg-white dark:bg-gray-200 rounded-full shadow transform transition duration-300 ease-in-out"></span>
                        </button>
                    </div>
                </div>
                <!-- Authentication Links -->
                @auth
                    <a wire:navigate href="/auth/logout" class="block px-4 py-2 text-sm text-gray-700 dark:text-gray-300 hover:bg-gray-100 dark:hover:bg-gray-700 hover:text-indigo-600 dark:hover:text-indigo-400 transition">
                        Logout
                    </a>
                @else
                    <a wire:navigate href="/auth/login" class="block px-4 py-2 text-sm text-gray-700 dark:text-gray-300 hover:bg-gray-100 dark:hover:bg-gray-700 hover:text-indigo-600 dark:hover:text-indigo-400 transition">
                        Sign In
                    </a>
                @endauth
            </div>
        </div>


        <!-- Mobile Toggle (This button is visible only on mobile) -->
        <button @click="isOpen = !isOpen" class="md:hidden">
            <img src="{{ asset('storage/images/menu.png') }}" class="h-12 w-12 cursor-pointer" alt="Menu">
        </button>
    </nav>

    <!-- Mobile Dropdown Menu -->
    <div x-show="isOpen"
     x-cloak x-transition
     @click.away="isOpen = false"
     :class="{ 'bg-gray-800 text-gray-100': darkMode, 'bg-gray-100 text-gray-900': !darkMode }"
     class="sm:hidden shadow-lg rounded-b-lg relative">
        <!-- Redesigned Mobile Dropdown Menu -->
        <ul class="flex flex-col items-center space-y-4 py-4 text-lg font-medium">
            <!-- User Settings Section -->
            <li class="w-full px-6">
                <div class="rounded-lg shadow-sm border border-gray-200 dark:border-gray-700 overflow-hidden">
                    <!-- Dark Mode Toggle -->
                    <div class="flex items-center justify-between p-3 bg-white dark:bg-gray-800">
                        <span class="font-medium text-gray-700 dark:text-gray-300">Dark Mode</span>
                        <button @click="darkMode = !darkMode" class="relative w-12 h-6 bg-gray-300 dark:bg-gray-600 rounded-full transition duration-300 ease-in-out">
                            <span :class="{'translate-x-6': darkMode, 'translate-x-0': !darkMode}" class="absolute top-0 left-0 w-6 h-6 bg-white dark:bg-gray-200 rounded-full shadow transform transition duration-300 ease-in-out"></span>
                        </button>
                    </div>

                    <!-- Authentication Links -->
                    <div class="border-t border-gray-200 dark:border-gray-700">
                        @auth
                            <a wire:navigate href="/auth/logout" class="flex items-center px-4 py-3 bg-white dark:bg-gray-800 hover:bg-indigo-50 dark:hover:bg-indigo-900/50 transition">
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 text-indigo-600 dark:text-indigo-400 mr-3" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 16l4-4m0 0l-4-4m4 4H7m6 4v1a3 3 0 01-3 3H6a3 3 0 01-3-3V7a3 3 0 013-3h4a3 3 0 013 3v1" />
                                </svg>
                                <span class="text-gray-700 dark:text-gray-300 hover:text-indigo-600 dark:hover:text-indigo-400 font-medium">Logout</span>
                            </a>
                        @else
                            <a wire:navigate href="/auth/login" class="flex items-center px-4 py-3 bg-white dark:bg-gray-800 hover:bg-indigo-50 dark:hover:bg-indigo-900/50 transition">
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 text-indigo-600 dark:text-indigo-400 mr-3" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M11 16l-4-4m0 0l4-4m-4 4h14m-5 4v1a3 3 0 01-3 3H6a3 3 0 01-3-3V7a3 3 0 013-3h7a3 3 0 013 3v1" />
                                </svg>
                                <span class="text-gray-700 dark:text-gray-300 hover:text-indigo-600 dark:hover:text-indigo-400 font-medium">Sign In</span>
                            </a>
                        @endauth
                    </div>
                </div>
            </li>
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
