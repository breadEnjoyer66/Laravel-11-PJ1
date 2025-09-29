<x-layout>
    <x-slot:title>{{ $title }}</x-slot:title>
    <div class="bg-gradient-to-b from-gray-50 to-white pb-20">
        <div class="text-center mx-auto max-w-7xl py-8 lg:pt-16 px-4 sm:px-6 lg:px-8">

            <div class="flex">
                <div>
                    <img src="{{ asset('img/b-to-b-hero.jpg') }}" alt="">
                </div>

                <div class="text-left max-w-2xl mx-auto z-2 p-8 rounded-lg">
                    <h1 class="text-4xl font-bold text-gray-900 sm:text-5xl lg:text-6xl">
                        Business to Business Services
                    </h1>

                    <p class="mt-6 text-xl leading-8 text-gray-600">
                        We provide a wide range of technology products and services to support the needs of private
                        enterprises. By upholding strong business ethics, we maintain long-term, mutually beneficial
                        relationships.
                    </p>
                </div>
            </div>

        </div>
    </div>
</x-layout>
