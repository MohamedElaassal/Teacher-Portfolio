<div class="py-12 lg:py-16 relative"
     :class="{ 'bg-gray-900 text-white': darkMode, 'bg-gray-100 text-gray-900': !darkMode }">
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

                <div class="w-full flex flex-col items-start relative z-20 xl:px-0 px-6 xl:py-0 py-6">
                    <div class="w-full 2xl:pl-48 xl:pt-1">
                        <h1 class="text-4xl md:text-5xl lg:text-6xl font-bold tracking-wider mb-6"
                            :class="{ 'text-white': darkMode, 'text-indigo-700': !darkMode }">
                            We're Here
                        </h1>
                        <div class="w-full md:w-10/12 mt-3">
                            <h2 class="text-base md:text-lg leading-8 tracking-wider mb-8"
                                :class="{ 'text-gray-300': darkMode, 'text-gray-600': !darkMode }">
                                We believe digital innovation is at the heart of every learning success
                            </h2>

                            <!-- Address -->
                            <div class="mt-8 p-5 rounded-lg" :class="{ 'bg-gray-800': darkMode, 'bg-white shadow-md': !darkMode }">
                                <h3 class="text-sm md:text-base font-semibold text-indigo-400 mb-3">Address</h3>
                                <p class="mt-2 text-base md:text-lg leading-7" :class="{ 'text-gray-300': darkMode, 'text-gray-700': !darkMode }">
                                    Office #13, NSTP, NUST University H-12 Sector, Islamabad
                                </p>
                            </div>

                            <!-- Contact -->
                            <div class="mt-6 p-5 rounded-lg" :class="{ 'bg-gray-800': darkMode, 'bg-white shadow-md': !darkMode }">
                                <h3 class="text-sm md:text-base font-semibold text-indigo-400 mb-3">Contact</h3>
                                <p class="mt-2 text-base md:text-lg leading-7" :class="{ 'text-gray-300': darkMode, 'text-gray-700': !darkMode }">+92 051 4567890 (Phone)</p>
                                <p class="mt-1 text-base md:text-lg leading-7" :class="{ 'text-gray-300': darkMode, 'text-gray-700': !darkMode }">+92 123 4567890 (Cell)</p>
                            </div>

                            <!-- Email -->
                            <div class="mt-6 p-5 rounded-lg" :class="{ 'bg-gray-800': darkMode, 'bg-white shadow-md': !darkMode }">
                                <h3 class="text-sm md:text-base font-semibold text-indigo-400 mb-3">Email</h3>
                                <p class="mt-2 text-base md:text-lg leading-7" :class="{ 'text-gray-300': darkMode, 'text-gray-700': !darkMode }">alphasquad@example.com</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Form Section -->
            <div class="w-full lg:w-1/2 xl:pt-10 lg:pl-12 px-6 lg:px-0">
                <div class="flex flex-col items-start xl:justify-start 2xl:justify-end xl:px-0">
                    <h1 class="text-4xl md:text-5xl lg:text-6xl font-bold tracking-wider text-indigo-500 dark:text-indigo-300 mb-6">
                        Let's Talk
                    </h1>
                    <div class="w-full 2xl:w-8/12 mt-4">
                        <p class="text-base md:text-lg leading-8 tracking-wider mb-8"
                           :class="{ 'text-gray-300': darkMode, 'text-gray-700': !darkMode }">
                            For enquiries, please email us using the form below
                        </p>

                        <!-- Success Message -->
                        @if($successMessage)
                        <div class="bg-green-100 border border-green-400 text-green-700 px-4 py-3 rounded mb-6 flex items-center justify-between" role="alert">
                            <div>
                                <span class="block sm:inline">{{ $successMessage }}</span>
                            </div>
                            <button wire:click="$set('successMessage', '')" class="text-green-700">
                                <span class="text-2xl">&times;</span>
                            </button>
                        </div>
                        @endif

                        <!-- Error Message -->
                        @if($errorMessage)
                        <div class="bg-red-100 border border-red-400 text-red-700 px-4 py-3 rounded mb-6 flex items-center justify-between" role="alert">
                            <div>
                                <span class="block sm:inline">{{ $errorMessage }}</span>
                            </div>
                            <button wire:click="$set('errorMessage', '')" class="text-red-700">
                                <span class="text-2xl">&times;</span>
                            </button>
                        </div>
                        @endif

                        <form wire:submit.prevent="submitForm">
                            <!-- Name Field -->
                            <div class="mt-6">
                                <label class="block text-sm font-medium mb-2"
                                      :class="{ 'text-gray-200': darkMode, 'text-gray-700': !darkMode }">Name</label>
                                <input wire:model="name" type="text"
                                       placeholder="Justin Timberlake"
                                       class="w-full border rounded-md py-3 px-4 focus:ring-2 focus:ring-indigo-500 focus:outline-none"
                                       :class="{
                                           'border-gray-500 bg-gray-800 text-white placeholder-gray-400': darkMode,
                                           'border-gray-300 bg-white text-gray-900 placeholder-gray-500': !darkMode
                                       }" />
                                @error('name') <span class="text-red-500 text-sm mt-1">{{ $message }}</span> @enderror
                            </div>

                            <!-- Email Field -->
                            <div class="mt-6">
                                <label class="block text-sm font-medium mb-2"
                                      :class="{ 'text-gray-200': darkMode, 'text-gray-700': !darkMode }">Email Address</label>
                                <input wire:model="email" type="email"
                                       placeholder="example@mail.com"
                                       class="w-full border rounded-md py-3 px-4 focus:ring-2 focus:ring-indigo-500 focus:outline-none"
                                       :class="{
                                           'border-gray-500 bg-gray-800 text-white placeholder-gray-400': darkMode,
                                           'border-gray-300 bg-white text-gray-900 placeholder-gray-500': !darkMode
                                       }" />
                                @error('email') <span class="text-red-500 text-sm mt-1">{{ $message }}</span> @enderror
                            </div>

                            <!-- Message Field -->
                            <div class="mt-6">
                                <label class="block text-sm font-medium mb-2"
                                      :class="{ 'text-gray-200': darkMode, 'text-gray-700': !darkMode }">Message</label>
                                <textarea wire:model="message" placeholder="Write us something..."
                                      class="w-full border rounded-md py-3 px-4 h-32 resize-none focus:ring-2 focus:ring-indigo-500 focus:outline-none"
                                      :class="{
                                          'border-gray-500 bg-gray-800 text-white placeholder-gray-400': darkMode,
                                          'border-gray-300 bg-white text-gray-900 placeholder-gray-500': !darkMode
                                      }"></textarea>
                                @error('message') <span class="text-red-500 text-sm mt-1">{{ $message }}</span> @enderror
                            </div>

                            <!-- Button -->
                            <div class="mt-8">
                                <button type="submit"
                                    class="bg-indigo-600 hover:bg-indigo-700 text-white font-semibold py-3 px-8 rounded-md transition duration-300 ease-in-out focus:ring-4 focus:ring-indigo-600 focus:ring-offset-2 focus:outline-none transform hover:scale-105">
                                    <span wire:loading.remove>Send Message</span>
                                    <span wire:loading>
                                        <svg class="animate-spin -ml-1 mr-3 h-5 w-5 text-white inline" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24">
                                            <circle class="opacity-25" cx="12" cy="12" r="10" stroke="currentColor" stroke-width="4"></circle>
                                            <path class="opacity-75" fill="currentColor" d="M4 12a8 8 0 018-8V0C5.373 0 0 5.373 0 12h4zm2 5.291A7.962 7.962 0 014 12H0c0 3.042 1.135 5.824 3 7.938l3-2.647z"></path>
                                        </svg>
                                        Sending...
                                    </span>
                                </button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
            <!-- End Right Section -->
        </div>
    </div>
</div>
