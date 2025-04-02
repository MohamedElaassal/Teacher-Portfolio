<div class="min-h-screen bg-gray-100 dark:bg-gray-900 text-gray-800 dark:text-gray-100">
    <section class="h-screen flex items-center justify-center bg-gradient-to-r from-blue-500 to-purple-600 text-white">
        <div class="text-center">
            <h1 class="text-5xl font-bold mb-4">Welcome to My Portfolio</h1>
            <p class="text-lg">Explore my work, publications, and courses.</p>
            <button class="cursor-pointer mt-6 px-6 py-3 bg-white dark:bg-gray-800 text-blue-600 dark:text-gray-200 font-semibold rounded-lg shadow-md hover:bg-gray-200 dark:hover:bg-gray-700">
                Get Started
            </button>
        </div>
    </section>

    <!-- About Us Section -->
    <section id="about-us" class="py-16 bg-gray-100 dark:bg-gray-900">
        @livewire('about-us')
    </section>

    <!-- Publications Section -->
    <section id="publications" class="py-16 bg-gray-100 dark:bg-gray-900">
        @livewire('publication')
    </section>

    <!-- Courses Section -->
    <section id="courses" class="py-16 bg-gray-100 dark:bg-gray-900">
        @livewire('cours')
    </section>

    <!-- Contact Section -->
    <section id="contact" class="py-16 bg-gray-100 dark:bg-gray-900">
        @livewire('contact')
    </section>
</div>
