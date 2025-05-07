<div class="container mx-auto px-4" x-data="{ darkMode: $darkMode }">
    <!-- Section Title -->
    <h2 class="text-3xl font-extrabold text-indigo-500 mb-10" :class="{ 'text-white': darkMode, 'text-indigo-600': !darkMode }">
        Courses
    </h2>

    <!-- Courses Carousel -->
    <div x-data="{ courses: @js($courses), active: 0 }" class="relative">
        <!-- Carousel Items -->
        <template x-for="(course, index) in courses" :key="index">
            <div x-show="active === index" class="text-center">
                <!-- Course Title & Description -->
                <h3 class="text-xl font-bold" x-text="course.titre"></h3>
                <p class="mb-4" x-text="course.description"></p>
                <!-- PDF Preview -->
                <div class="mb-4">
                    <iframe :src="course.content" class="w-full h-96" frameborder="0"></iframe>
                </div>
                <!-- Download Button -->
                <a :href="course.content" download class="text-blue-600">Download PDF</a>
            </div>
        </template>

        <!-- Navigation Controls -->
        <button @click="active = active === 0 ? courses.length - 1 : active - 1" class="absolute left-0 top-1/2 transform -translate-y-1/2 bg-gray-200 p-2 rounded">Prev</button>
        <button @click="active = active === courses.length - 1 ? 0 : active + 1" class="absolute right-0 top-1/2 transform -translate-y-1/2 bg-gray-200 p-2 rounded">Next</button>
    </div>
</div>
