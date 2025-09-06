<x-layout>
    <x-slot:title>{{ $title }}</x-slot:title>


    <div class="grid max-w-screen-xl py-8 mx-auto lg:gap-8 xl:gap-0 lg:py-16 lg:grid-cols-12">
        <div class="mr-auto place-self-center lg:col-span-7">
            <h1 class="max-w-2xl mb-4 text-4xl font-extrabold leading-none md:text-4xl xl:text-5xl dark:text-white">
                Empowering Technology for Business</h1>
            <p class="max-w-2xl mb-6 font-light text-gray-500 lg:mb-8 md:text-lg lg:text-xl dark:text-gray-400">From
                Providing computers, laptops, servers, and network solutions for corporations, government, and
                institutions.</p>
            <a href="#"
                class="inline-flex items-center justify-center px-5 py-3 mr-3 text-base font-medium text-center text-white rounded-lg bg-primary-700 hover:bg-primary-800 focus:ring-4 focus:ring-primary-300 dark:focus:ring-primary-900">
                About us
                <svg class="w-5 h-5 ml-2 -mr-1 hover:ml-3 duration-200" fill="currentColor" viewBox="0 0 20 20"
                    xmlns="http://www.w3.org/2000/svg">
                    <path fill-rule="evenodd"
                        d="M10.293 3.293a1 1 0 011.414 0l6 6a1 1 0 010 1.414l-6 6a1 1 0 01-1.414-1.414L14.586 11H3a1 1 0 110-2h11.586l-4.293-4.293a1 1 0 010-1.414z"
                        clip-rule="evenodd"></path>
                </svg>
            </a>
            <a href="#"
                class="inline-flex items-center justify-center px-5 py-3 text-base font-medium text-center text-gray-900 border border-gray-300 rounded-lg hover:bg-gray-100 focus:ring-4 focus:ring-gray-100 dark:text-white dark:border-gray-700 dark:hover:bg-gray-700 dark:focus:ring-gray-800">
                Speak to Sales
            </a>
        </div>
        <div class="hidden lg:mt-0 lg:col-span-5 lg:flex">
            <img src="https://flowbite.s3.amazonaws.com/blocks/marketing-ui/hero/phone-mockup.png" alt="mockup">
        </div>
    </div>


    <!-- Why Choose Us Section -->

    <div class="py-8 mx-auto max-w-screen-xl sm:py-16">
        <div class="max-w-screen-lg mb-8 lg:mb-16">
            <h2 class="mb-4 text-4xl tracking-tight font-extrabold text-gray-900 dark:text-white">Your trusted
                technology partner</h2>
            <p class="text-gray-500 sm:text-xl dark:text-gray-400">Why choose us? With over 18 years of experience, we
                deliver reliable IT and communication solutions. Our strong network, certified expertise, and
                partnerships with leading brands ensure that we provide only the highest quality products and services.
            </p>
        </div>
        <div class="space-y-8 md:grid md:grid-cols-2 lg:grid-cols-3 md:gap-12 md:space-y-0">
            <div>
                <div
                    class="flex justify-center items-center mb-4 w-10 h-10 rounded-full bg-primary-100 lg:h-12 lg:w-12 dark:bg-primary-900">
                    <svg class="w-5 h-5 text-primary-600 lg:w-6 lg:h-6 dark:text-primary-300" fill="currentColor"
                        viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                        <path fill-rule="evenodd"
                            d="M3 3a1 1 0 000 2v8a2 2 0 002 2h2.586l-1.293 1.293a1 1 0 101.414 1.414L10 15.414l2.293 2.293a1 1 0 001.414-1.414L12.414 15H15a2 2 0 002-2V5a1 1 0 100-2H3zm11.707 4.707a1 1 0 00-1.414-1.414L10 9.586 8.707 8.293a1 1 0 00-1.414 0l-2 2a1 1 0 101.414 1.414L8 10.414l1.293 1.293a1 1 0 001.414 0l4-4z"
                            clip-rule="evenodd"></path>
                    </svg>
                </div>
                <h3 class="mb-2 text-xl font-bold dark:text-white">Trusted Company</h3>
                <p class="text-gray-500 dark:text-gray-400">Over 18 years of experience.

                </p>
            </div>
            <div>
                <div
                    class="flex justify-center items-center mb-4 w-10 h-10 rounded-full bg-primary-100 lg:h-12 lg:w-12 dark:bg-primary-900">
                    <svg class="w-5 h-5 text-primary-600 lg:w-6 lg:h-6 dark:text-primary-300" aria-hidden="true"
                        xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="currentColor"
                        viewBox="0 0 24 24">
                        <path fill-rule="evenodd"
                            d="M5 6a3 3 0 1 1 4 2.83V9a4 4 0 0 0 4 4h.17a3.001 3.001 0 1 1 0 2H13a5.978 5.978 0 0 1-4-1.528v1.699a3.001 3.001 0 1 1-2 0V8.829A3.001 3.001 0 0 1 5 6Z"
                            clip-rule="evenodd" />
                    </svg>

                </div>
                <h3 class="mb-2 text-xl font-bold dark:text-white">Widespread Network</h3>
                <p class="text-gray-500 dark:text-gray-400">A robust and extensive network.

                </p>
            </div>
            <div>
                <div
                    class="flex justify-center items-center mb-4 w-10 h-10 rounded-full bg-primary-100 lg:h-12 lg:w-12 dark:bg-primary-900">
                    <svg class="w-5 h-5 text-primary-600 lg:w-6 lg:h-6 dark:text-primary-300" aria-hidden="true"
                        xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="currentColor"
                        viewBox="0 0 24 24">
                        <path fill-rule="evenodd"
                            d="M12 2c-.791 0-1.55.314-2.11.874l-.893.893a.985.985 0 0 1-.696.288H7.04A2.984 2.984 0 0 0 4.055 7.04v1.262a.986.986 0 0 1-.288.696l-.893.893a2.984 2.984 0 0 0 0 4.22l.893.893a.985.985 0 0 1 .288.696v1.262a2.984 2.984 0 0 0 2.984 2.984h1.262c.261 0 .512.104.696.288l.893.893a2.984 2.984 0 0 0 4.22 0l.893-.893a.985.985 0 0 1 .696-.288h1.262a2.984 2.984 0 0 0 2.984-2.984V15.7c0-.261.104-.512.288-.696l.893-.893a2.984 2.984 0 0 0 0-4.22l-.893-.893a.985.985 0 0 1-.288-.696V7.04a2.984 2.984 0 0 0-2.984-2.984h-1.262a.985.985 0 0 1-.696-.288l-.893-.893A2.984 2.984 0 0 0 12 2Zm3.683 7.73a1 1 0 1 0-1.414-1.413l-4.253 4.253-1.277-1.277a1 1 0 0 0-1.415 1.414l1.985 1.984a1 1 0 0 0 1.414 0l4.96-4.96Z"
                            clip-rule="evenodd" />
                    </svg>

                </div>
                <h3 class="mb-2 text-xl font-bold dark:text-white">Well Certified</h3>
                <p class="text-gray-500 dark:text-gray-400">Authorized Distributor & Service Center.</p>
            </div>
            <div>
                <div
                    class="flex justify-center items-center mb-4 w-10 h-10 rounded-full bg-primary-100 lg:h-12 lg:w-12 dark:bg-primary-900">
                    <svg class="w-5 h-5 text-primary-600 lg:w-6 lg:h-6 dark:text-primary-300" aria-hidden="true"
                        xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="currentColor"
                        viewBox="0 0 24 24">
                        <path fill-rule="evenodd"
                            d="M8 4a4 4 0 1 0 0 8 4 4 0 0 0 0-8Zm-2 9a4 4 0 0 0-4 4v1a2 2 0 0 0 2 2h8a2 2 0 0 0 2-2v-1a4 4 0 0 0-4-4H6Zm7.25-2.095c.478-.86.75-1.85.75-2.905a5.973 5.973 0 0 0-.75-2.906 4 4 0 1 1 0 5.811ZM15.466 20c.34-.588.535-1.271.535-2v-1a5.978 5.978 0 0 0-1.528-4H18a4 4 0 0 1 4 4v1a2 2 0 0 1-2 2h-4.535Z"
                            clip-rule="evenodd" />
                    </svg>

                </div>
                <h3 class="mb-2 text-xl font-bold dark:text-white">Our Partner</h3>
                <p class="text-gray-500 dark:text-gray-400">HP, Asus, Lenovo, Brother, Cisco, Synology, Apple, and many
                    more.</p>
            </div>
            <div>
                <div
                    class="flex justify-center items-center mb-4 w-10 h-10 rounded-full bg-primary-100 lg:h-12 lg:w-12 dark:bg-primary-900">
                    <svg class="w-5 h-5 text-primary-600 lg:w-6 lg:h-6 dark:text-primary-300" fill="currentColor"
                        viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                        <path
                            d="M7 3a1 1 0 000 2h6a1 1 0 100-2H7zM4 7a1 1 0 011-1h10a1 1 0 110 2H5a1 1 0 01-1-1zM2 11a2 2 0 012-2h12a2 2 0 012 2v4a2 2 0 01-2 2H4a2 2 0 01-2-2v-4z">
                        </path>
                    </svg>
                </div>
                <h3 class="mb-2 text-xl font-bold dark:text-white">Focused On Soultion</h3>
                <p class="text-gray-500 dark:text-gray-400">Committed to providing the most efficient solutions.</p>
            </div>
            <div>
                <div
                    class="flex justify-center items-center mb-4 w-10 h-10 rounded-full bg-primary-100 lg:h-12 lg:w-12 dark:bg-primary-900">
                    <svg class="w-5 h-5 text-primary-600 lg:w-6 lg:h-6 dark:text-primary-300" aria-hidden="true"
                        xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none"
                        viewBox="0 0 24 24">
                        <path fill="currentColor"
                            d="M11 3c0-.55228-.4477-1-1-1-.55228 0-1 .44772-1 1 0 .35778-.09872.50986-.19828.61606-.14832.15821-.36754.28572-.7723.50159l-.04537.02415c-.34513.18363-.84839.45139-1.24483.87426C6.27628 5.50986 6 6.15778 6 7c0 .55228.44772 1 1 1 .55229 0 1-.44772 1-1 0-.35778.09873-.50986.19829-.61606.14832-.15821.36754-.28572.7723-.50159l.04536-.02415c.34514-.18363.8484-.45139 1.24485-.87426C10.7237 4.49014 11 3.84222 11 3Zm5 0c0-.55228-.4477-1-1-1s-1 .44772-1 1c0 .35778-.0987.50986-.1983.61606-.1483.15821-.3675.28572-.7723.50159l-.0453.02415c-.3452.18363-.8484.45139-1.2449.87426C11.2763 5.50986 11 6.15778 11 7c0 .55228.4477 1 1 1s1-.44772 1-1c0-.35778.0987-.50986.1983-.61606.1483-.15821.3675-.28572.7723-.50159l.0454-.02415c.3451-.18363.8484-.45139 1.2448-.87426C15.7237 4.49014 16 3.84222 16 3Z" />
                        <path fill="currentColor" fill-rule="evenodd"
                            d="M5 10c-.28252 0-.55187.1195-.74145.329-.18958.2095-.2817.4894-.25358.7705l.6398 6.398C4.90037 20.0535 7.0512 22 9.61995 22h.76015c2.3975 0 4.431-1.6957 4.8992-4H17c1.6569 0 3-1.3431 3-3s-1.3431-3-3-3h-1.095l.09-.9005c.0282-.2811-.064-.561-.2535-.7705-.1896-.2095-.459-.329-.7415-.329H5Zm12 6h-1.495l.2-2H17c.5523 0 1 .4477 1 1s-.4477 1-1 1Z"
                            clip-rule="evenodd" />
                    </svg>

                </div>
                <h3 class="mb-2 text-xl font-bold dark:text-white">High Quality Products
                </h3>
                <p class="text-gray-500 dark:text-gray-400">From authorized suppliers and professional team.</p>
            </div>
        </div>
    </div>
    <!-- end why choose us section -->

    <!-- About Our Company Briefly -->
    <div class="flex flex-col justify-center gap-8 mx-auto max-w-screen-xl lg:gap-16 lg:py-16 lg:grid lg:grid-cols-2">
        <div>

        </div>
        <div>
            <h2 class="text-4xl font-bold text-gray-900 dark:text-white mb-2">About us</h2>
            <p class="text-gray-600 dark:text-gray-300 text-base mb-2 leading-loose">
                <span class="font-semibold text-primary-700 dark:text-primary-400">PT Primajaya Multi Technology</span>
                adalah perusahaan yang didirikan pada tahun 2006 di Kota Medan, dengan fokus pada solusi teknologi
                informasi
                dan komunikasi.
            </p>
            <p class="text-gray-600 dark:text-gray-300 text-base mb-2 leading-loose">
                Kami memiliki pengalaman lebih dari <span class="font-semibold">19 tahun</span> dalam menyediakan
                berbagai
                produk dan layanan teknologi, baik untuk sektor Bisnis (B2B), Pemerintahan (B2G), maupun Distribusi ke
                berbagai wilayah.
            </p>
            <p class="text-gray-600 dark:text-gray-300 text-base leading-loose">
                Dengan tim profesional yang berkomitmen tinggi, kami hadir untuk menjadi mitra terpercaya dalam
                mendukung
                transformasi digital di era modern.
            </p>
        </div>
    </div>



</x-layout>
