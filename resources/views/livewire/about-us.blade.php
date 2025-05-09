<div class="container mx-auto px-4 py-10" x-data="{ darkMode: $darkMode }">
    <!-- Header Section -->
    <div class="mb-12 pt-8" :class="{ 'bg-gray-900 text-white': darkMode, 'bg-white text-gray-900': !darkMode }">
        <h1 class="text-4xl font-extrabold">
            <span class="text-blue-900 dark:text-blue-300">A</span><span class="text-indigo-600 dark:text-indigo-400">b</span><span class="text-blue-900 dark:text-blue-300">o</span><span class="text-indigo-600 dark:text-indigo-400">u</span><span class="text-blue-900 dark:text-blue-300">t</span>
            <span class="text-indigo-600 dark:text-indigo-400">M</span><span class="text-blue-900 dark:text-blue-300">e</span>
        </h1>
    </div>

    <!-- Main Content -->
    <div class="flex flex-wrap items-center justify-between py-8" :class="{ 'bg-gray-900 text-gray-100': darkMode, 'bg-white text-gray-900': !darkMode }">
        <!-- Teacher's Photo -->
        <div class="w-full lg:w-1/3 mb-8 lg:mb-0">
            <img src="{{ asset('storage/images/teacherImg.png') }}" alt="Teacher Photo" class="rounded-lg shadow-lg w-full opacity-95 hover:opacity-100 transition-opacity duration-300">
        </div>

        <!-- Biography -->
        <div class="w-full lg:w-2/3 lg:pl-12">
            <h2 class="text-3xl font-bold mb-6">Biography</h2>
            <p class="text-gray-600 dark:text-gray-300 leading-relaxed mb-6 text-lg">
                Hello! I'm {{ $admin->name }} aka <span class="font-bold text-xl text-blue-800 dark:text-blue-300">L</span><span class="font-medium text-indigo-500 dark:text-indigo-300">Zz</span>, {{ $admin->biographie }}
            </p>
        </div>
    </div>

    <!-- Skills Section -->
    <div class="mt-16 py-8" :class="{ 'bg-gray-900 text-white': darkMode, 'bg-white text-gray-900': !darkMode }">
        <h2 class="text-3xl font-bold text-gray-800 dark:text-gray-200 text-center mb-12">Skills</h2>
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
            @if($admin->skills && count($admin->skills) > 0)
                @foreach($admin->skills as $skill)
                    <div class="p-6 rounded-lg shadow-md text-center transform transition-all duration-300 hover:scale-105"
                        :class="{
                            'bg-gray-800 text-indigo-400 hover:bg-indigo-600 hover:text-white': darkMode,
                            'bg-white text-indigo-600 hover:bg-indigo-600 hover:text-white': !darkMode
                        }">
                        <h3 class="text-xl font-semibold mb-2">{{ $skill['title'] }}</h3>
                        <p :class="{ 'text-gray-300 group-hover:text-white': darkMode, 'text-gray-600 group-hover:text-white': !darkMode }">
                            {{ $skill['description'] }}
                        </p>
                    </div>
                @endforeach
            @else
                <div class="col-span-1 md:col-span-2 lg:col-span-3 p-6 rounded-lg shadow-md text-center"
                    :class="{
                        'bg-gray-800 text-gray-300': darkMode,
                        'bg-white text-gray-600': !darkMode
                    }">
                    <p class="text-lg font-medium">No skills available at the moment</p>
                    <p class="mt-2 text-sm" :class="{ 'text-gray-400': darkMode, 'text-gray-500': !darkMode }">
                        Skills information will be added soon.
                    </p>
                </div>
            @endif
        </div>
    </div>

    <!-- Call-to-Action -->
    <div class="mt-16 py-10 text-center" :class="{ 'bg-gray-900 text-white': darkMode, 'bg-white text-gray-900': !darkMode }">
        <h2 class="text-3xl font-bold text-gray-800 dark:text-gray-200 mb-4">Get in touch 👇</h2>
        <p class="text-gray-600 dark:text-gray-300 mb-6">Feel free to reach out to me for collaborations, mentorship, or any inquiries.</p>
        <button wire:click="redirectToContact" class="cursor-pointer px-6 py-3 mb-4 bg-indigo-600 dark:bg-indigo-500 text-white font-semibold rounded-lg shadow-md hover:bg-indigo-700 dark:hover:bg-indigo-600 transform transition-transform duration-300 hover:scale-105">
            Contact
        </button>
    </div>
</div>
