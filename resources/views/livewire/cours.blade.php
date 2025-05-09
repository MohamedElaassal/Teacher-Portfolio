<div class="container mx-auto px-4 py-10" x-data="{ darkMode: $darkMode }">
    <!-- Section Title -->
    <h1 class="text-3xl font-extrabold mb-10 pt-6" :class="{ 'text-indigo-300': darkMode, 'text-indigo-600': !darkMode }">
        <span class="text-blue-900 dark:text-blue-300">C</span><span class="text-indigo-600 dark:text-indigo-400">o</span><span class="text-blue-900 dark:text-blue-300">u</span><span class="text-indigo-600 dark:text-indigo-400">r</span><span class="text-indigo-600 dark:text-indigo-400">s</span><span class="text-blue-900 dark:text-blue-300">e</span><span class="text-indigo-600 dark:text-indigo-400">s</span>
    </h1>

    <!-- Course Cards with Carousel -->
    <div x-data="{
        courses: @js($courses),
        activeSlide: 0,
        visibleCards: 3, // Number of cards visible at once
        generatePdfUrl(path) {
            const baseUrl = '{{ config('filesystems.disks.do.url') ?: config('filesystems.disks.do.endpoint') }}';
            return baseUrl && path ? `${baseUrl.replace(/\/$/, '')}/${path.replace(/^\//, '')}` : '';
        },
        get totalSlides() {
            return Math.ceil(this.courses.length / this.visibleCards);
        },
        getVisibleCourses() {
            const start = this.activeSlide * this.visibleCards;
            return this.courses.slice(start, start + this.visibleCards);
        },
        nextSlide() {
            this.activeSlide = (this.activeSlide + 1) % this.totalSlides;
        },
        prevSlide() {
            this.activeSlide = (this.activeSlide - 1 + this.totalSlides) % this.totalSlides;
        },
        selectedCourse: null,
        showModal: false
    }" class="relative my-4 py-6">
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
                        You need to be logged in to view course materials.
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
            <!-- No Courses Alert (Only for Authenticated Users with Empty Courses) -->
            <template x-if="courses.length === 0">
                <div class="text-center py-12">
                    <div class="p-8 rounded-lg shadow-md mx-auto max-w-lg"
                        :class="{ 'bg-gray-800 text-white border border-gray-700': darkMode, 'bg-white text-gray-900 border border-gray-200': !darkMode }">
                        <svg class="w-16 h-16 mx-auto mb-4" :class="{ 'text-indigo-300': darkMode, 'text-indigo-600': !darkMode }" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 9v2m0 4h.01m-6.938 4h13.856c1.54 0 2.502-1.667 1.732-3L13.732 4c-.77-1.333-2.694-1.333-3.464 0L3.34 16c-.77 1.333.192 3 1.732 3z"></path>
                        </svg>
                        <h3 class="text-xl font-semibold mb-2" :class="{ 'text-indigo-300': darkMode, 'text-indigo-600': !darkMode }">No Courses Available</h3>
                        <p class="text-base" :class="{ 'text-gray-300': darkMode, 'text-gray-700': !darkMode }">There are currently no courses to display. Please check back later.</p>
                    </div>
                </div>
            </template>

            <!-- Cards Container (Only shown to authenticated users with courses) -->
            <template x-if="courses.length > 0">
                <div class="flex flex-wrap justify-center gap-8">
                    <template x-for="(course, index) in getVisibleCourses()" :key="index">
                        <div class="w-full md:w-1/3 lg:w-1/4 p-4 cursor-pointer transition transform hover:scale-105 hover:shadow-xl"
                        @click="selectedCourse = course; showModal = true"
                        :class="{ 'bg-gray-800 text-white border border-gray-700': darkMode, 'bg-white text-gray-900 border border-gray-200': !darkMode }"
                        class="rounded-lg shadow-lg">
                        <!-- Card Content -->
                        <div class="h-full flex flex-col">
                            <div class="flex-1">
                                <h3 class="text-xl font-bold mb-3" x-text="course.titre" :class="{ 'text-indigo-300': darkMode, 'text-indigo-600': !darkMode }"></h3>
                                <p class="text-sm mb-3" x-text="course.description" :class="{ 'text-gray-300': darkMode, 'text-gray-600': !darkMode }"></p>
                            </div>
                            <div class="mt-auto">
                                <!-- PDF Thumbnail (small preview) -->
                                <div class="relative w-full h-28 mb-2 overflow-hidden rounded border"
                                    :class="{ 'border-gray-600': darkMode, 'border-gray-300': !darkMode }">
                                    <iframe :src="generatePdfUrl(course.content)" class="absolute inset-0 w-full h-full"></iframe>
                                    <div class="absolute inset-0 bg-gradient-to-b from-transparent via-transparent to-gray-800 bg-opacity-60 flex items-end justify-center">
                                        <p class="text-white text-sm p-2 bg-indigo-600 bg-opacity-80 rounded-t-md">Click to view</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    </template>
                </div>
            </template>

            <!-- Navigation Arrows (only show if we have multiple slides) -->
            <template x-if="courses.length > 0 && totalSlides > 1">
                <div>
                    <button @click="prevSlide"
                        class="absolute -left-4 top-1/2 -translate-y-1/2 bg-indigo-600 hover:bg-indigo-700 text-white p-3 rounded-full shadow-lg z-10 transition duration-300">
                        &larr;
                    </button>
                    <button @click="nextSlide"
                        class="absolute -right-4 top-1/2 -translate-y-1/2 bg-indigo-600 hover:bg-indigo-700 text-white p-3 rounded-full shadow-lg z-10 transition duration-300">
                        &rarr;
                    </button>
                </div>
            </template>

            <!-- Pagination Dots -->
            <template x-if="courses.length > 0">
                <div class="flex justify-center mt-8 space-x-3">
                    <template x-for="(_, i) in Array.from({ length: totalSlides })" :key="i">
                        <button @click="activeSlide = i"
                            class="w-3 h-3 rounded-full transition-colors duration-300"
                            :class="{ 'bg-indigo-600': activeSlide === i, 'bg-gray-300 dark:bg-gray-600': activeSlide !== i }">
                        </button>
                    </template>
                </div>
            </template>
        @endguest

        <!-- Modal for PDF Viewer -->
        <div x-show="showModal" @click.away="showModal = false"
            class="fixed inset-0 z-50 flex items-center justify-center p-4 bg-black bg-opacity-75">
            <div :class="{ 'bg-gray-800 text-white border border-gray-700': darkMode, 'bg-white text-gray-900 border border-gray-200': !darkMode }"
                class="w-full max-w-4xl max-h-[90vh] overflow-y-auto rounded-lg shadow-2xl p-6">
                <div class="flex justify-between items-center mb-6 border-b pb-4" :class="{ 'border-gray-700': darkMode, 'border-gray-200': !darkMode }">
                    <h3 class="text-2xl font-bold" x-text="selectedCourse?.titre" :class="{ 'text-indigo-300': darkMode, 'text-indigo-600': !darkMode }"></h3>
                    <button @click="showModal = false" class="text-3xl hover:opacity-75 transition duration-300">&times;</button>
                </div>
                <p class="mb-6 text-base" x-text="selectedCourse?.description" :class="{ 'text-gray-300': darkMode, 'text-gray-700': !darkMode }"></p>
                <div class="w-full h-96 mb-6">
                    <iframe x-show="selectedCourse"
                        :src="selectedCourse ? generatePdfUrl(selectedCourse.content) : ''"
                        class="w-full h-full border-0 rounded shadow-md"></iframe>
                </div>
                <div class="flex justify-end">
                    <a x-show="selectedCourse" :href="selectedCourse ? generatePdfUrl(selectedCourse.content) : ''"
                        download class="bg-indigo-600 hover:bg-indigo-700 text-white px-5 py-3 rounded font-medium transition duration-300">
                        Download PDF
                    </a>
                </div>
            </div>
        </div>
    </div>
</div>
