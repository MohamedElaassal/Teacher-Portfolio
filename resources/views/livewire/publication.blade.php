<div class="container mx-auto px-4 py-8" x-data="{ darkMode: $darkMode }">
    <!-- Section Title with Count -->
    <div class="mb-6">
        <h2 class="text-3xl font-extrabold text-indigo-500" :class="{ 'text-white': darkMode, 'text-indigo-600': !darkMode }">
            Publications
        </h2>
    </div>

    <!-- Publications Grid -->
    <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
        @foreach($publications as $publication)
            <div class="p-6 rounded-lg shadow-lg transition transform hover:scale-105"
                 :class="{ 'bg-gray-800 text-white': darkMode, 'bg-white text-gray-900': !darkMode }">
                <h3 class="text-xl font-semibold mb-2">{{ $publication['titre'] }}</h3>
                <p class="text-gray-600 dark:text-gray-300">{!! $publication['content'] !!}</p>
                <em class="text-gray-600 dark:text-gray-300">{{ $publication['lien'] }}</em>
            </div>
        @endforeach
    </div>
</div>
