<div class="container mx-auto px-4 py-10" x-data="{ darkMode: $darkMode }">
    <!-- Section Title with Count -->
    <div class="mb-10 pt-6">
        <h1 class="text-3xl font-extrabold ">
            <span class="text-blue-900 dark:text-blue-300">P</span><span class="text-indigo-600 dark:text-indigo-400">u</span><span class="text-blue-900 dark:text-blue-300">b</span><span class="text-indigo-600 dark:text-indigo-400">l</span><span class="text-blue-900 dark:text-blue-300">i</span><span class="text-indigo-600 dark:text-indigo-400">c</span><span class="text-blue-900 dark:text-blue-300">a</span><span class="text-indigo-600 dark:text-indigo-400">t</span><span class="text-blue-900 dark:text-blue-300">i</span><span class="text-indigo-600 dark:text-indigo-400">o</span><span class="text-blue-900 dark:text-blue-300">n</span><span class="text-indigo-600 dark:text-indigo-400">s</span>
        </h1>
    </div>

    @guest
        <!-- Authentication Required Alert (Only for Guest Users) -->
        <div class="text-center py-12">
            <div class="p-8 rounded-lg shadow-md mx-auto max-w-lg"
                :class="{ 'bg-gray-800 text-white border border-gray-700': darkMode, 'bg-white text-gray-900 border border-gray-200': !darkMode }">
                <svg class="w-16 h-16 mx-auto mb-4" :class="{ 'text-indigo-300': darkMode, 'text-indigo-600': !darkMode }" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 16h-1v-4h-1m1-4h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                </svg>
                <h3 class="text-xl font-semibold mb-2" :class="{ 'text-indigo-300': darkMode, 'text-indigo-600': !darkMode }">Authentication Required</h3>
                <p class="text-base mb-4" :class="{ 'text-gray-300': darkMode, 'text-gray-700': !darkMode }">
                    You need to be logged in to view publications.
                </p>
                <div class="flex justify-center space-x-4">
                    <a href="/login" class="px-4 py-2 bg-indigo-600 hover:bg-indigo-700 text-white rounded transition duration-300">
                        Login
                    </a>
                    <a href="/register" class="px-4 py-2 bg-gray-600 hover:bg-gray-700 text-white rounded transition duration-300">
                        Register
                    </a>
                </div>
            </div>
        </div>
    @else
        <!-- Publications Grid -->
        @if(count($publications) > 0)
            <div class="grid grid-cols-1 md:grid-cols-2 gap-8 py-4">
                @foreach($publications as $publication)
                    <div class="p-6 rounded-lg shadow-lg transition transform hover:scale-105 hover:shadow-xl"
                        :class="{ 'bg-gray-800 text-white border border-gray-700': darkMode, 'bg-white text-gray-900 border border-gray-200': !darkMode }">
                        <h3 class="text-xl font-semibold mb-4" :class="{ 'text-indigo-300': darkMode, 'text-indigo-600': !darkMode }">{{ $publication['titre'] }}</h3>
                        <p class="text-base mb-4" :class="{ 'text-gray-300': darkMode, 'text-gray-700': !darkMode }">{!! $publication['content'] !!}</p>
                        <em class="text-sm block mt-4" :class="{ 'text-gray-400': darkMode, 'text-gray-500': !darkMode }">{{ $publication['lien'] }}</em>
                    </div>
                @endforeach
            </div>
        @else
            <div class="text-center py-12">
                <div class="p-8 rounded-lg shadow-md mx-auto max-w-lg"
                    :class="{ 'bg-gray-800 text-white border border-gray-700': darkMode, 'bg-white text-gray-900 border border-gray-200': !darkMode }">
                    <svg class="w-16 h-16 mx-auto mb-4" :class="{ 'text-indigo-300': darkMode, 'text-indigo-600': !darkMode }" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 9v2m0 4h.01m-6.938 4h13.856c1.54 0 2.502-1.667 1.732-3L13.732 4c-.77-1.333-2.694-1.333-3.464 0L3.34 16c-.77 1.333.192 3 1.732 3z"></path>
                    </svg>
                    <h3 class="text-xl font-semibold mb-2" :class="{ 'text-indigo-300': darkMode, 'text-indigo-600': !darkMode }">No Publications Available</h3>
                    <p class="text-base" :class="{ 'text-gray-300': darkMode, 'text-gray-700': !darkMode }">There are currently no publications to display. Please check back later.</p>
                </div>
            </div>
        @endif
    @endguest
</div>
