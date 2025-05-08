<div class="container mx-auto px-4 py-8" x-data="{ darkMode: $darkMode }">
    <!-- Section Title -->
    <h2 class="text-3xl font-extrabold text-center mb-10" :class="{ 'text-white': darkMode, 'text-indigo-600': !darkMode }">
        <span class="text-indigo-600 dark:text-indigo-400">Courses</span>
    </h2>

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
    }" class="relative">
        <!-- Cards Container -->
        <div class="flex flex-wrap justify-center gap-6">
            <template x-for="(course, index) in getVisibleCourses()" :key="index">
                <div class="w-full md:w-1/3 lg:w-1/4 p-4 cursor-pointer transition transform hover:scale-105"
                    @click="selectedCourse = course; showModal = true"
                    :class="{ 'bg-gray-800 text-white': darkMode, 'bg-white text-gray-900': !darkMode }"
                    class="rounded-lg shadow-lg">
                    <!-- Card Content -->
                    <div class="h-full flex flex-col">
                        <div class="flex-1">
                            <h3 class="text-xl font-bold mb-2" x-text="course.titre"></h3>
                            <p class="text-sm mb-3" x-text="course.description"></p>
                        </div>
                        <div class="mt-auto">
                            <!-- PDF Thumbnail (small preview) -->
                            <div class="relative w-full h-24 mb-2 overflow-hidden rounded border border-gray-300">
                                <iframe :src="generatePdfUrl(course.content)" class="absolute inset-0 w-full h-full"></iframe>
                                <div class="absolute inset-0 bg-gradient-to-b from-transparent to-gray-800 bg-opacity-50 flex items-end justify-center">
                                    <p class="text-white text-sm p-1">Click to view</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </template>
        </div>

        <!-- Navigation Arrows (only show if we have multiple slides) -->
        <template x-if="totalSlides > 1">
            <div>
                <button @click="prevSlide"
                    class="absolute left-0 top-1/2 -translate-y-1/2 bg-indigo-600 text-white p-2 rounded-full shadow-lg z-10">
                    &larr;
                </button>
                <button @click="nextSlide"
                    class="absolute right-0 top-1/2 -translate-y-1/2 bg-indigo-600 text-white p-2 rounded-full shadow-lg z-10">
                    &rarr;
                </button>
            </div>
        </template>

        <!-- Pagination Dots -->
        <div class="flex justify-center mt-6 space-x-2">
            <template x-for="(_, i) in Array.from({ length: totalSlides })" :key="i">
                <button @click="activeSlide = i"
                    class="w-3 h-3 rounded-full transition-colors"
                    :class="{ 'bg-indigo-600': activeSlide === i, 'bg-gray-300': activeSlide !== i }">
                </button>
            </template>
        </div>

        <!-- Modal for PDF Viewer -->
        <div x-show="showModal" @click.away="showModal = false"
            class="fixed inset-0 z-50 flex items-center justify-center p-4 bg-black bg-opacity-60">
            <div :class="{ 'bg-gray-800 text-white': darkMode, 'bg-white text-gray-900': !darkMode }"
                class="w-full max-w-4xl max-h-[90vh] overflow-y-auto rounded-lg shadow-2xl p-6">
                <div class="flex justify-between items-center mb-4">
                    <h3 class="text-2xl font-bold" x-text="selectedCourse?.titre"></h3>
                    <button @click="showModal = false" class="text-gray-500 hover:text-gray-700">&times;</button>
                </div>
                <p class="mb-4" x-text="selectedCourse?.description"></p>
                <div class="w-full h-96 mb-4">
                    <iframe x-show="selectedCourse"
                        :src="selectedCourse ? generatePdfUrl(selectedCourse.content) : ''"
                        class="w-full h-full border-0 rounded"></iframe>
                </div>
                <div class="flex justify-end">
                    <a x-show="selectedCourse" :href="selectedCourse ? generatePdfUrl(selectedCourse.content) : ''"
                        download class="bg-indigo-600 text-white px-4 py-2 rounded hover:bg-indigo-700">
                        Download PDF
                    </a>
                </div>
            </div>
        </div>
    </div>
</div>
