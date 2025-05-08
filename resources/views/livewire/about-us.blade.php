<div class="container mx-auto px-4" x-data="{ darkMode: $darkMode }">
    <!-- Header Section -->
    <div class="mb-12" :class="{ 'bg-gray-900 text-white': darkMode, 'bg-white text-gray-900': !darkMode }">
        <h1 class="text-4xl font-extrabold text-indigo-500 dark:text-indigo-300">
            <span class="text-blue-900 dark:text-blue-300">A</span><span class="text-indigo-600 dark:text-indigo-400">b</span><span class="text-blue-900 dark:text-blue-300">o</span><span class="text-indigo-600 dark:text-indigo-400">u</span><span class="text-blue-900 dark:text-blue-300">t</span>
            <span class="text-indigo-600 dark:text-indigo-400">M</span><span class="text-blue-900 dark:text-blue-300">e</span>
        </h1>
    </div>

    <!-- Main Content -->
    <div class="flex flex-wrap items-center justify-between" :class="{ 'bg-gray-900 text-gray-100': darkMode, 'bg-white text-gray-900': !darkMode }">
        <!-- Teacher's Photo -->
        <div class="w-full lg:w-1/3 mb-8 lg:mb-0">
            <img src="{{ asset('storage/images/teacherImg.png') }}" alt="Teacher Photo" class="rounded-lg shadow-lg w-full opacity-95 hover:opacity-100">
        </div>

        <!-- Biography -->
        <div class="w-full lg:w-2/3 lg:pl-12">
            <h2 class="text-3xl font-bold   mb-4">Biography</h2>
            <p class="text-gray-600 dark:text-gray-300 leading-relaxed mb-6">
                Hello! I'm {{ $admin->name }}  aka <span class="font-bold text-xl text-blue-800 dark:text-blue-300">L</span><span class="font-medium text-indigo-500 dark:text-indigo-300">Zz</span>, {{ $admin->biographie }}
            </p>

        </div>
    </div>

    <!-- Skills Section -->
    <div class="mt-16" :class="{ 'bg-gray-900 text-white': darkMode, 'bg-white text-gray-900': !darkMode }">
        <h2 class="text-3xl font-bold text-gray-800 dark:text-gray-200 text-center mb-8">Skills</h2>
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
            <!-- Skill cards -->
            <div class="bg-white dark:bg-gray-800 p-6 rounded-lg shadow-md text-center transform transition-transform duration-300 hover:scale-105 relative group">
                <div class="absolute top-0 left-0 w-2 h-2 bg-indigo-600 group-hover:w-full group-hover:h-full transition-all duration-300 opacity-90"></div>
                <div class="absolute bottom-0 right-0 w-2 h-2 bg-indigo-600 group-hover:w-full group-hover:h-full transition-all duration-300 opacity-30"></div>
                <h3 class="text-xl font-semibold text-indigo-600 dark:text-indigo-300 group-hover:text-white relative">Teamwork</h3>
                <p class="text-gray-600 dark:text-gray-300 mt-2 group-hover:text-white relative">Collaborating effectively with others to achieve common goals.</p>
            </div>
            <!-- Repeat the dark:bg-gray-800 and dark:text-* classes for all other skill cards -->
        </div>
    </div>

    <!-- Call-to-Action -->
    <div class="mt-16 text-center" :class="{ 'bg-gray-900 text-white': darkMode, 'bg-white text-gray-900': !darkMode }">
        <h2 class="text-3xl font-bold text-gray-800 dark:text-gray-200 mb-4">Get in touch 👇</h2>
        <p class="text-gray-600 dark:text-gray-300 mb-6">Feel free to reach out to me for collaborations, mentorship, or any inquiries.</p>
        <button wire:click="redirectToContact" class="cursor-pointer px-6 py-3 bg-indigo-600 dark:bg-indigo-500 text-white font-semibold rounded-lg shadow-md hover:bg-indigo-700 dark:hover:bg-indigo-600 transform transition-transform duration-300 hover:scale-105">
            Contact
        </button>
    </div>
</div>
