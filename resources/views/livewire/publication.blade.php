<div class="container mx-auto px-4" x-data="{ darkMode: $darkMode }">
    <!-- Section Title -->
    <h2 class="text-3xl font-extrabold text-indigo-500 mb-10" :class="{ 'text-white': darkMode, 'text-indigo-600': !darkMode }">
        <span class="text-blue-900 dark:text-blue-300">P</span><span class="text-indigo-600 dark:text-indigo-400">u</span><span class="text-blue-900 dark:text-blue-300">b</span><span class="text-indigo-600 dark:text-indigo-400">l</span><span class="text-blue-900 dark:text-blue-300">i</span><span class="text-indigo-600 dark:text-indigo-400">c</span><span class="text-blue-900 dark:text-blue-300">a</span><span class="text-blue-900 dark:text-blue-300">t</span><span class="text-indigo-600 dark:text-indigo-400">i</span><span class="text-blue-900 dark:text-blue-300">o</span><span class="text-indigo-600 dark:text-indigo-400">n</span><span class="text-blue-900 dark:text-blue-300">s</span>
    </h2>

    <!-- Publications List -->
    <ul class="space-y-4">
        <!-- Publication 1 -->
        <li class="p-4 rounded-lg shadow-md" :class="{ 'bg-gray-800 text-white': darkMode, 'bg-white text-gray-900': !darkMode }">
            <h3 class="text-xl font-semibold">Publication Title 1</h3>
            <p class="text-gray-600 dark:text-gray-300">Description of the publication.</p>
        </li>
        <!-- Publication 2 -->
        <li class="p-4 rounded-lg shadow-md" :class="{ 'bg-gray-800 text-white': darkMode, 'bg-white text-gray-900': !darkMode }">
            <h3 class="text-xl font-semibold">Publication Title 2</h3>
            <p class="text-gray-600 dark:text-gray-300">Description of the publication.</p>
        </li>
    </ul>
</div>
