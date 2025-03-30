<div class="bg-gray-50 py-16">
    <div class="container mx-auto px-4">
        <!-- Header Section -->
        <div class="text-center mb-12">
            <h1 class="text-4xl font-extrabold text-gray-800">About Me</h1>
            <p class="text-lg text-gray-600 mt-4">Learn more about my journey, skills, and achievements.</p>
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
                <div class="bg-white p-6 rounded-lg shadow-md text-center">
                    <h3 class="text-xl font-semibold text-indigo-600">Teamwork</h3>
                    <p class="text-gray-600 mt-2">Collaborating effectively with others to achieve common goals.</p>
                </div>
                <div class="bg-white p-6 rounded-lg shadow-md text-center">
                    <h3 class="text-xl font-semibold text-indigo-600">Leadership</h3>
                    <p class="text-gray-600 mt-2">Guiding and motivating teams to achieve success.</p>
                </div>
                <div class="bg-white p-6 rounded-lg shadow-md text-center">
                    <h3 class="text-xl font-semibold text-indigo-600">Problem-Solving</h3>
                    <p class="text-gray-600 mt-2">Analyzing challenges and finding innovative solutions.</p>
                </div>
                <div class="bg-white p-6 rounded-lg shadow-md text-center">
                    <h3 class="text-xl font-semibold text-indigo-600">Back-End Technologies</h3>
                    <p class="text-gray-600 mt-2">Proficient in PHP, Laravel, Node.js, and database management.</p>
                </div>
                <div class="bg-white p-6 rounded-lg shadow-md text-center">
                    <h3 class="text-xl font-semibold text-indigo-600">Front-End Technologies</h3>
                    <p class="text-gray-600 mt-2">Experienced in HTML, CSS, JavaScript, React, and Tailwind CSS.</p>
                </div>
                <div class="bg-white p-6 rounded-lg shadow-md text-center">
                    <h3 class="text-xl font-semibold text-indigo-600">Mentorship</h3>
                    <p class="text-gray-600 mt-2">Providing guidance and support to help students succeed.</p>
                </div>
            </div>
        </div>

        <!-- Achievements Section -->
        <div class="mt-16">
            <h2 class="text-3xl font-bold text-gray-800 text-center mb-8">Achievements</h2>
            <ul class="space-y-4">
                <li class="bg-white p-4 rounded-lg shadow-md">
                    <h3 class="text-xl font-semibold text-indigo-600">Award for Excellence in Teaching</h3>
                    <p class="text-gray-600 mt-2">Recognized for outstanding contributions to education.</p>
                </li>
                <li class="bg-white p-4 rounded-lg shadow-md">
                    <h3 class="text-xl font-semibold text-indigo-600">Published Research Papers</h3>
                    <p class="text-gray-600 mt-2">Authored multiple papers on software development and education.</p>
                </li>
                <li class="bg-white p-4 rounded-lg shadow-md">
                    <h3 class="text-xl font-semibold text-indigo-600">Mentored Successful Projects</h3>
                    <p class="text-gray-600 mt-2">Guided students in building award-winning software projects.</p>
                </li>
            </ul>
        </div>

        <!-- Call-to-Action -->
        <div class="mt-16 text-center">
            <h2 class="text-3xl font-bold text-gray-800 mb-4">Want to Learn More?</h2>
            <p class="text-gray-600 mb-6">Feel free to reach out to me for collaborations, mentorship, or any inquiries.</p>
            <a href="/contact" class="px-6 py-3 bg-indigo-600 text-white font-semibold rounded-lg shadow-md hover:bg-indigo-700 transition">
                Contact Me
            </a>
        </div>
    </div>
</div>
