<div class="container mx-auto px-4" x-data="{ darkMode: $darkMode }">
    <!-- Section Title -->
    <h2 class="text-3xl font-extrabold text-indigo-500 mb-10" :class="{ 'text-white': darkMode, 'text-indigo-600': !darkMode }">
        <span class="text-indigo-600 dark:text-indigo-400">C</span><span class="text-blue-900 dark:text-blue-300">o</span><span class="text-indigo-600 dark:text-indigo-400">u</span><span class="text-blue-900 dark:text-blue-300">r</span><span class="text-indigo-600 dark:text-indigo-400">s</span><span class="text-blue-900 dark:text-blue-300">e</span><span class="text-blue-900 dark:text-blue-300">s</span>
    </h2>

    <!-- Courses List -->
    <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">
        <!-- Course 1 -->
        <div class="p-4 rounded-lg shadow-md" :class="{ 'bg-gray-800 text-white': darkMode, 'bg-white text-gray-900': !darkMode }">
            <h3 class="text-xl font-semibold">Course Title 1</h3>
            <p class="text-gray-600 dark:text-gray-300">Description of the course.</p>
        </div>
        <!-- Course 2 -->
        <div class="p-4 rounded-lg shadow-md" :class="{ 'bg-gray-800 text-white': darkMode, 'bg-white text-gray-900': !darkMode }">
            <h3 class="text-xl font-semibold">Course Title 2</h3>
            <p class="text-gray-600 dark:text-gray-300">Description of the course.</p>
        </div>
    </div>
</div>
