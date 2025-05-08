<div class="container mx-auto px-4 py-10" x-data="{ darkMode: $darkMode }">
    <!-- Section Title with Count -->
    <div class="mb-10 pt-6">
        <h1 class="text-3xl font-extrabold ">
            <span class="text-blue-900 dark:text-blue-300">P</span><span class="text-indigo-600 dark:text-indigo-400">u</span><span class="text-blue-900 dark:text-blue-300">b</span><span class="text-indigo-600 dark:text-indigo-400">l</span><span class="text-blue-900 dark:text-blue-300">i</span><span class="text-indigo-600 dark:text-indigo-400">c</span><span class="text-blue-900 dark:text-blue-300">a</span><span class="text-indigo-600 dark:text-indigo-400">t</span><span class="text-blue-900 dark:text-blue-300">i</span><span class="text-indigo-600 dark:text-indigo-400">o</span><span class="text-blue-900 dark:text-blue-300">n</span><span class="text-indigo-600 dark:text-indigo-400">s</span>
        </h1>
    </div>

    <!-- Publications Grid -->
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
</div>
