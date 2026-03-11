<?php $title_1 = 'pb-2 bg-gradient-to-r from-orange-600 to-orange-500 text-transparent bg-clip-text mb-4 text-4xl lg:text-[2.7rem] font-extrabold'; ?>
<x-layout>
    <x-slot:title>Fill Job Application Form</x-slot:title>

    <div class="bg-gradient-to-b from-white to-slate-50">
        <section class="max-w-7xl mx-auto px-6 py-16 space-y-20">
            <!-- INTRO -->
            <div class="grid md:grid-cols-2 gap-10 items-center">
                <div>
                    <h1 class="{{ $title_1 }}">Fill Job Application Form</h1>
                    <p class="text-gray-600 leading-relaxed text-justify">
                        Welcome to our job application portal! Please fill out the form below with complete and accurate
                        information. Your application will help us understand your qualifications and background better.
                    </p>
                    <p class="text-gray-600 leading-relaxed text-justify mt-4">
                        All fields marked with <span class="text-red-600 font-semibold">*</span> are required. Take your
                        time and provide detailed information to help us evaluate your candidacy.
                    </p>
                </div>
                <div class="relative">
                    <img src="{{ asset('img/man-in-suit.jpg') }}" alt="Application Form Illustration"
                        class="rounded-2xl shadow-lg w-full h-80 object-cover bg-top-center">
                    <div class="absolute inset-0 rounded-2xl bg-gradient-to-t from-black/20 to-transparent"></div>
                </div>
            </div>

            <!-- LIVEWIRE JOB APPLICATION FORM -->
            @livewire('job-application-form')
        </section>
    </div>
</x-layout>
