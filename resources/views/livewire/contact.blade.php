<div class="py-4 lg:py-8 relative"
     :class="{ 'bg-gray-900 text-white': darkMode, 'bg-indigo-700 text-gray-100': !darkMode }">
    <!-- Background Image -->
    <img src="https://cdn.tuk.dev/assets/templates/radian/Back_Image.png"
         class="h-2/5 lg:h-full w-full lg:w-1/2 absolute inset-0 object-cover object-center xl:block hidden opacity-10"
         alt="map" />

    <div class="xl:mx-auto xl:container relative">
        <div class="flex flex-wrap xl:mx-auto xl:container">
            <!-- Contact Info Section -->
            <div class="w-full relative lg:w-1/2 xl:mt-10 mb-10 2xl:pr-24 2xl:pl-0 xl:pl-12 pl-0">
                <img src="https://cdn.tuk.dev/assets/templates/radian/Back_Image.png"
                     class="h-full w-full xl:w-1/2 absolute inset-0 bg-cover bg-center xl:hidden opacity-10"
                     alt="map" />

                <div class="w-full flex flex-col items-start relative z-20 xl:px-0 px-4 xl:py-0 py-4">
                    <div class="w-full 2xl:pl-48 xl:pt-1">
                        <h1 class="text-4xl md:text-5xl lg:text-6xl font-bold tracking-wider"
                            :class="{ 'text-white': darkMode, 'text-white': !darkMode }">
                            We’re Here
                        </h1>
                        <div class="w-full md:w-10/12 mt-3">
                            <h2 class="text-base md:text-lg leading-8 tracking-wider"
                                :class="{ 'text-gray-400': darkMode, 'text-gray-200': !darkMode }">
                                We believe digital innovation is at the heart of every learning success
                            </h2>

                            <!-- Address -->
                            <div class="mt-6">
                                <h3 class="text-sm md:text-base font-semibold text-indigo-400">Address</h3>
                                <p class="mt-2 text-base md:text-lg leading-7 text-gray-300">
                                    Office #13, NSTP, NUST University H-12 Sector, Islamabad
                                </p>
                            </div>

                            <!-- Contact -->
                            <div class="mt-6">
                                <h3 class="text-sm md:text-base font-semibold text-indigo-400">Contact</h3>
                                <p class="mt-2 text-base md:text-lg leading-7 text-gray-300">+92 051 4567890 (Phone)</p>
                                <p class="mt-1 text-base md:text-lg leading-7 text-gray-300">+92 123 4567890 (Cell)</p>
                            </div>

                            <!-- Email -->
                            <div class="mt-6">
                                <h3 class="text-sm md:text-base font-semibold text-indigo-400">Email</h3>
                                <p class="mt-2 text-base md:text-lg leading-7 text-gray-300">alphasquad@example.com</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Form Section -->
            <div class="w-full lg:w-1/2 xl:pt-10 lg:pl-24">
                <div class="flex flex-col items-start xl:justify-start 2xl:justify-end xl:px-0 px-4">
                    <h1 class="text-4xl md:text-5xl lg:text-6xl font-bold tracking-wider text-indigo-300">
                        Let’s Talk
                    </h1>
                    <div class="w-full 2xl:w-8/12 mt-4" role="form">
                        <p class="text-base md:text-lg leading-8 tracking-wider text-gray-300">
                            For enquiries, please email us using the form below
                        </p>

                        <!-- Name Field -->
                        <div class="mt-6">
                            <label class="block text-sm font-medium text-gray-200 mb-2">Name</label>
                            <input type="text"
                                   placeholder="Justin Timberlake"
                                   class="w-full border border-gray-500 bg-gray-800 text-white placeholder-gray-400 rounded-md py-3 px-4 focus:ring-2 focus:ring-indigo-500 focus:outline-none" />
                        </div>

                        <!-- Email Field -->
                        <div class="mt-6">
                            <label class="block text-sm font-medium text-gray-200 mb-2">Email Address</label>
                            <input type="email"
                                   placeholder="example@mail.com"
                                   class="w-full border border-gray-500 bg-gray-800 text-white placeholder-gray-400 rounded-md py-3 px-4 focus:ring-2 focus:ring-indigo-500 focus:outline-none" />
                        </div>

                        <!-- Message Field -->
                        <div class="mt-6">
                            <label class="block text-sm font-medium text-gray-200 mb-2">Message</label>
                            <textarea placeholder="Write us something..."
                                      class="w-full border border-gray-500 bg-gray-800 text-white placeholder-gray-400 rounded-md py-3 px-4 h-32 resize-none focus:ring-2 focus:ring-indigo-500 focus:outline-none"></textarea>
                        </div>

                        <!-- Button -->
                        <div class="mt-6">
                            <button
                                class="bg-indigo-500 hover:bg-indigo-400 text-white font-semibold py-3 px-6 rounded-md transition duration-300 ease-in-out focus:ring-4 focus:ring-indigo-600 focus:ring-offset-2 focus:outline-none">
                                Send Message
                            </button>
                        </div>
                    </div>
                </div>
            </div>
            <!-- End Right Section -->
        </div>
    </div>
</div>
