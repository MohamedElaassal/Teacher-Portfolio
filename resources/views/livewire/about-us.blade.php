<div class="bg-gray-50 py-16">
    <div class="container mx-auto px-4">
        <!-- Header Section -->
        <div class="mb-12">
            <h1 class="text-4xl  font-extrabold text-indigo-600">About Me</h1>
        </div>

        <!-- Main Content -->
        <div class="flex flex-wrap items-center justify-between">
            <!-- Teacher's Photo -->
            <div class="w-full lg:w-1/3 mb-8 lg:mb-0">
                <img src="{{ asset('storage/images/teacherImg.png') }}" alt="Teacher Photo" class="rounded-lg shadow-lg w-full">
            </div>

            <!-- Biography -->
            <div class="w-full lg:w-2/3 lg:pl-12">
                <h2 class="text-3xl font-bold text-gray-800 mb-4">Biography</h2>
                <p class="text-gray-600 leading-relaxed mb-6">
                    Hello! I'm John Doe, a passionate educator with over 10 years of experience in teaching and mentoring students. My mission is to inspire and empower learners to achieve their full potential through innovative teaching methods and personalized guidance.
                </p>
                <p class="text-gray-600 leading-relaxed">
                    I specialize in Computer Science and Software Development, with a strong background in both back-end and front-end technologies. Over the years, I have worked with diverse groups of students, helping them excel academically and personally.
                </p>
            </div>
        </div>

        <!-- Skills Section -->
        <div class="mt-16">
            <h2 class="text-3xl font-bold text-gray-800 text-center mb-8">Skills</h2>
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
                <div class="bg-white p-6 rounded-lg shadow-md text-center transform transition-transform duration-300 hover:scale-105 relative group">
                    <div class="absolute top-0 left-0 w-2 h-2 bg-indigo-600 group-hover:w-full group-hover:h-full transition-all duration-300 opacity-90"></div>
                    <div class="absolute bottom-0 right-0 w-2 h-2 bg-indigo-600 group-hover:w-full group-hover:h-full transition-all duration-300 opacity-30"></div>
                    <h3 class="text-xl font-semibold text-indigo-600 group-hover:text-white relative">Teamwork</h3>
                    <p class="text-gray-600 mt-2 group-hover:text-white relative">Collaborating effectively with others to achieve common goals.</p>
                </div>
                <div class="bg-white p-6 rounded-lg shadow-md text-center transform transition-transform duration-300 hover:scale-105 relative group">
                    <div class="absolute top-0 left-0 w-2 h-2 bg-indigo-600 group-hover:w-full group-hover:h-full transition-all duration-300 opacity-90"></div>
                    <div class="absolute bottom-0 right-0 w-2 h-2 bg-indigo-600 group-hover:w-full group-hover:h-full transition-all duration-300 opacity-30"></div>
                    <h3 class="text-xl font-semibold text-indigo-600 group-hover:text-white relative">Leadership</h3>
                    <p class="text-gray-600 mt-2 group-hover:text-white relative">Guiding and motivating teams to achieve success.</p>
                </div>
                <div class="bg-white p-6 rounded-lg shadow-md text-center transform transition-transform duration-300 hover:scale-105 relative group">
                    <div class="absolute top-0 left-0 w-2 h-2 bg-indigo-600 group-hover:w-full group-hover:h-full transition-all duration-300 opacity-90"></div>
                    <div class="absolute bottom-0 right-0 w-2 h-2 bg-indigo-600 group-hover:w-full group-hover:h-full transition-all duration-300 opacity-30"></div>
                    <h3 class="text-xl font-semibold text-indigo-600 group-hover:text-white relative">Problem-Solving</h3>
                    <p class="text-gray-600 mt-2 group-hover:text-white relative">Analyzing challenges and finding innovative solutions.</p>
                </div>
                <div class="bg-white p-6 rounded-lg shadow-md text-center transform transition-transform duration-300 hover:scale-105 relative group">
                    <div class="absolute top-0 left-0 w-2 h-2 bg-indigo-600 group-hover:w-full group-hover:h-full transition-all duration-300 opacity-90"></div>
                    <div class="absolute bottom-0 right-0 w-2 h-2 bg-indigo-600 group-hover:w-full group-hover:h-full transition-all duration-300 opacity-30"></div>
                    <h3 class="text-xl font-semibold text-indigo-600 group-hover:text-white relative">Back-End Technologies</h3>
                    <p class="text-gray-600 mt-2 group-hover:text-white relative">Proficient in PHP, Laravel, Node.js, and database management.</p>
                </div>
                <div class="bg-white p-6 rounded-lg shadow-md text-center transform transition-transform duration-300 hover:scale-105 relative group">
                    <div class="absolute top-0 left-0 w-2 h-2 bg-indigo-600 group-hover:w-full group-hover:h-full transition-all duration-300 opacity-90"></div>
                    <div class="absolute bottom-0 right-0 w-2 h-2 bg-indigo-600 group-hover:w-full group-hover:h-full transition-all duration-300 opacity-30"></div>
                    <h3 class="text-xl font-semibold text-indigo-600 group-hover:text-white relative">Front-End Technologies</h3>
                    <p class="text-gray-600 mt-2 group-hover:text-white relative">Experienced in HTML, CSS, JavaScript, React, and Tailwind CSS.</p>
                </div>
                <div class="bg-white p-6 rounded-lg shadow-md text-center transform transition-transform duration-300 hover:scale-105 relative group">
                    <div class="absolute top-0 left-0 w-2 h-2 bg-indigo-600 group-hover:w-full group-hover:h-full transition-all duration-300 opacity-90"></div>
                    <div class="absolute bottom-0 right-0 w-2 h-2 bg-indigo-600 group-hover:w-full group-hover:h-full transition-all duration-300 opacity-30"></div>
                    <h3 class="text-xl font-semibold text-indigo-600 group-hover:text-white relative">Mentorship</h3>
                    <p class="text-gray-600 mt-2 group-hover:text-white relative">Providing guidance and support to help students succeed.</p>
                </div>
            </div>
        </div>

        <!-- Call-to-Action -->
        <div class="mt-16 text-center">
            <h2 class="text-3xl font-bold text-gray-800 mb-4">Want to Learn More?</h2>
            <p class="text-gray-600 mb-6">Feel free to reach out to me for collaborations, mentorship, or any inquiries.</p>
            <button wire:click="redirectToContact" class="px-6 py-3 bg-indigo-600 text-white font-semibold rounded-lg shadow-md hover:bg-indigo-700 transform transition-transform duration-300 hover:scale-105">
                Contact
            </button>
        </div>
    </div>
</div>
