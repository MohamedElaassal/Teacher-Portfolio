<footer :class="{ 'bg-gray-900 text-white relative': darkMode, 'bg-indigo-700 text-gray-100 relative': !darkMode }"  x-data="{ darkMode: $darkMode }">
    <div class="max-w-screen-xl mx-auto px-4 sm:px-6 lg:px-8 py-12">
        <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
            <!-- About Section -->
            <div>
                <h3 :class="{ 'text-gray-200': darkMode, 'text-white': !darkMode }" class="text-lg font-semibold mb-4">
                    About Us
                </h3>
                <p :class="{ 'text-gray-400': darkMode, 'text-gray-300': !darkMode }" class="text-sm">
                    Dedicated to providing high-quality education and resources to help you achieve your goals.
                </p>
            </div>

            <!-- Quick Links -->
            <div>
                <h3 :class="{ 'text-gray-200': darkMode, 'text-white': !darkMode }" class="text-lg font-semibold mb-4">
                    Quick Links
                </h3>
                <ul class="space-y-2">
                    <li>
                        <a wire:navigate href="/" :class="{ 'hover:text-gray-400': darkMode, 'hover:text-white': !darkMode }"
                            class="hover:underline transition duration-300 ease-in-out">
                            Home
                        </a>
                    </li>
                    <li>
                        <a wire:navigate href="/about-us"
                            :class="{ 'hover:text-gray-400': darkMode, 'hover:text-white': !darkMode }"
                            class="hover:underline transition duration-300 ease-in-out">
                            About Me
                        </a>
                    </li>
                    <li>
                        <a wire:navigate href="/publications"
                            :class="{ 'hover:text-gray-400': darkMode, 'hover:text-white': !darkMode }"
                            class="hover:underline transition duration-300 ease-in-out">
                            Publications
                        </a>
                    </li>
                    <li>
                        <a wire:navigate href="/courses"
                            :class="{ 'hover:text-gray-400': darkMode, 'hover:text-white': !darkMode }"
                            class="hover:underline transition duration-300 ease-in-out">
                            Courses
                        </a>
                    </li>
                    <li>
                        <a wire:navigate href="/contact"
                            :class="{ 'hover:text-gray-400': darkMode, 'hover:text-white': !darkMode }"
                            class="hover:underline transition duration-300 ease-in-out">
                            Contact
                        </a>
                    </li>
                </ul>
            </div>

            <!-- Contact Section -->
            <div>
                <h3 :class="{ 'text-gray-200': darkMode, 'text-white': !darkMode }" class="text-lg font-semibold mb-4">
                    Contact Us
                </h3>
                <ul class="space-y-2">
                    <li :class="{ 'text-gray-400': darkMode, 'text-gray-200': !darkMode }" class="text-sm">
                        Office #13, NSTP, NUST University, Islamabad
                    </li>
                    <li :class="{ 'text-gray-400': darkMode, 'text-gray-200': !darkMode }" class="text-sm">
                        Email:
                        <a href="mailto:contact@portfolio.com"
                            :class="{ 'hover:text-gray-400': darkMode, 'hover:text-white': !darkMode }"
                            class="transition duration-300 ease-in-out">
                            contact@portfolio.com
                        </a>
                    </li>
                    <li :class="{ 'text-gray-400': darkMode, 'text-gray-200': !darkMode }" class="text-sm">
                        Phone:
                        <a href="tel:+921234567890"
                            :class="{ 'hover:text-gray-400': darkMode, 'hover:text-white': !darkMode }"
                            class="transition duration-300 ease-in-out">
                            +92 123 4567890
                        </a>
                    </li>
                </ul>
            </div>
        </div>

        <div class="mt-8 border-t pt-8 flex flex-col md:flex-row justify-between items-center"
            :class="{ 'border-gray-700': darkMode, 'border-gray-600': !darkMode }">
            <!-- Social Media Links -->
            <div class="flex space-x-4">
                <a href="#" class="transition duration-300 ease-in-out transform hover:scale-125"
                    :class="{ 'text-gray-400 hover:text-gray-200': darkMode, 'text-gray-300 hover:text-white': !darkMode }">
                    <svg class="w-6 h-6" fill="currentColor" viewBox="0 0 24 24">
                        <path
                            d="M22.46 6c-.77.35-1.6.58-2.46.69a4.3 4.3 0 001.88-2.37 8.59 8.59 0 01-2.72 1.04 4.28 4.28 0 00-7.29 3.9A12.14 12.14 0 013 4.79a4.28 4.28 0 001.32 5.71 4.27 4.27 0 01-1.94-.54v.05a4.28 4.28 0 003.43 4.2 4.3 4.3 0 01-1.93.07 4.28 4.28 0 004 2.97A8.6 8.6 0 012 19.54a12.14 12.14 0 006.56 1.92c7.88 0 12.2-6.53 12.2-12.2 0-.19 0-.38-.01-.57A8.72 8.72 0 0024 4.56a8.59 8.59 0 01-2.54.7z" />
                    </svg>
                </a>
            </div>

            <!-- Copyright -->
            <p class="text-sm mt-4 md:mt-0"
                :class="{ 'text-gray-400': darkMode, 'text-gray-300': !darkMode }">
                © 2025 Teacher Portfolio. All rights reserved.
            </p>
        </div>
    </div>

    <div class="absolute top-4 right-4">
        <button @click="scrollToTop()"
            class="p-3 rounded-full shadow-lg transition duration-300 ease-in-out"
            :class="{ 'bg-gray-700 hover:bg-gray-600': darkMode, 'bg-indigo-600 hover:bg-indigo-500': !darkMode }">
            <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 15l7-7 7 7" />
            </svg>
        </button>
    </div>

    <script>
        function scrollToTop() {
            window.scrollTo({ top: 0, behavior: 'smooth' });
        }
    </script>
</footer>
