<div class="min-h-screen bg-gray-100 dark:bg-gray-900 text-gray-800 dark:text-gray-100">
    <section class="h-screen flex items-center justify-center bg-gradient-to-r from-blue-500 to-purple-600 text-white" :class="{ 'bg-gray-900 text-white': darkMode, 'bg-gradient-to-r from-blue-500 to-purple-600 text-white': !darkMode }">
        <div class="text-center">
            <h1 class="text-5xl font-bold mb-4" :class="{ 'text-white': darkMode, 'text-white': !darkMode }">Welcome to My Portfolio</h1>
            <p class="text-lg" :class="{ 'text-gray-200': darkMode, 'text-white': !darkMode }">Explore my work, publications, and courses.</p>
            <button class="cursor-pointer mt-6 px-6 py-3 bg-white dark:bg-gray-800 text-blue-600 dark:text-gray-200 font-semibold rounded-lg shadow-md hover:bg-gray-200 dark:hover:bg-gray-700">
                Get Started
            </button>
        </div>
    </section>

    <!-- About Us Section -->
    <section :class="{ 'py-16 bg-gray-900 text-white': darkMode, 'py-16 bg-white text-gray-900': !darkMode }" id="about-us">
        @livewire('about-us', ['darkMode' => 'darkMode'])
    </section>

    <!-- Publications Section -->
    <section :class="{ 'py-16 bg-gray-900 text-white': darkMode, 'py-16 bg-white text-gray-900': !darkMode }" id="publications">
        @livewire('publication', ['darkMode' => 'darkMode'])
    </section>

    <!-- Courses Section -->
    <section :class="{ 'py-16 bg-gray-900 text-white': darkMode, 'py-16 bg-white text-gray-900': !darkMode }" id="courses">
        @livewire('cours', ['darkMode' => 'darkMode'])
    </section>

    <!-- Contact Section -->
    <section :class="{ 'py-16 bg-gray-900 text-white': darkMode, 'py-16 bg-white text-gray-900': !darkMode }" id="contact">
        @livewire('contact', ['darkMode' => 'darkMode'])
    </section>
</div>
