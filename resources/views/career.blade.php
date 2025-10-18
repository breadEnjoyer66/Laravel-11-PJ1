<?php $title_1 = 'pb-2 bg-gradient-to-r from-orange-600 to-orange-500 text-transparent bg-clip-text mb-4 text-4xl lg:text-[2.7rem] font-extrabold'; ?>
<x-layout>
    <x-slot:title>{{ $title }}</x-slot:title>

    <div class="bg-gradient-to-b from-white to-slate-50">
        <section class="max-w-7xl mx-auto px-6 py-16 space-y-20">
            <!-- INTRO -->
            <div class="grid md:grid-cols-2 gap-10 items-center">
                <div>
                    <h1 class="{{ $title_1 }}">Career Opportunities</h1>
                    <p class="text-gray-600 leading-relaxed text-justify">
                        At <strong>PT. Primajaya Multi Technology</strong>, we believe that great people build great
                        companies. We are constantly seeking motivated, passionate individuals to join our growing
                        team and help shape the future of technology distribution in Indonesia.
                    </p>
                    <p class="text-gray-600 leading-relaxed text-justify mt-4">
                        If you’re driven, eager to learn, and ready to grow with us, explore our open positions below or
                        send your resume to
                        <a href="mailto:hr@primajaya.co.id" class="text-blue-600 font-medium hover:underline">
                            hr@primajaya.co.id
                        </a>.
                    </p>
                </div>
                <div class="relative">
                    <img src="{{ asset('img/career-hero.jpg') }}" alt="Career Illustration"
                        class="rounded-2xl shadow-lg w-full h-80 object-cover">
                    <div class="absolute inset-0 rounded-2xl bg-gradient-to-t from-black/20 to-transparent"></div>
                </div>
            </div>

            <!-- JOB APPLICATION FORM -->
            <section id="job-application"
                class="max-w-7xl mx-auto mt-20 px-6 py-10 bg-white border border-slate-100 rounded-2xl">
                <h2
                    class="text-3xl font-bold text-gray-800 mb-6 text-center bg-gradient-to-r from-orange-600 to-orange-500 text-transparent bg-clip-text">
                    Fill Application Form
                </h2>
                <p class="text-center text-sm text-gray-600"><span class="text-red-600 text-sm">*</span> menandakan
                    kolom harus diisi.</p>

                @if (session('success'))
                    <div class="mb-4 p-4 rounded-lg bg-green-100 text-green-700">
                        {{ session('success') }}
                    </div>
                @endif

                @if ($errors->any())
                    <div class="p-4 mb-6 text-red-800 bg-red-100 border border-red-300 rounded-lg">
                        <ul class="list-disc ml-5">
                            @foreach ($errors->all() as $error)
                                <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                @endif

                <form x-data="formStepper()" @submit.prevent="validateCurrentStep($event)" method="POST"
                    action="{{ route('career.store') }}" enctype="multipart/form-data" class="space-y-6">
                    @csrf

                    <div class="flex justify-between pt-6 mt-6">
                        <button type="button" x-show="step > 1" @click="step--"
                            class="px-6 py-2 bg-gray-200 hover:bg-gray-300 rounded-lg">
                            Previous
                        </button>

                        <button type="button" x-show="step < totalSteps" @click="validateCurrentStep($event)"
                            class="px-6 py-2 bg-blue-600 text-white rounded-lg hover:bg-blue-700">
                            Next
                        </button>

                        <button type="submit" x-show="step === totalSteps"
                            class="px-6 py-2 bg-green-600 text-white rounded-lg hover:bg-green-700">
                            Submit Application
                        </button>
                    </div>

                    <!-- Progress Bar -->
                    <div class="w-full bg-gray-200 h-3 rounded-full overflow-hidden mb-6">
                        <div class="h-3 bg-gradient-to-r from-primary-600 to-primary-500 rounded-full transition-all duration-500"
                            :style="`width: ${(step / totalSteps) * 100}%`"></div>
                    </div>

                    <!-- Step container -->
                    <div class="">
                        <x-job-application.page-1 />
                        <x-job-application.page-2 />
                        <x-job-application.page-3 />
                        <x-job-application.page-4 />
                    </div>

                </form>
                <script>
                    function formStepper() {
                        return {
                            step: 5,
                            totalSteps: 5,

                            validateCurrentStep(event) {
                                const form = event.target.closest('form');
                                // Select all inputs that are currently visible (in the active step)
                                const visibleInputs = form.querySelectorAll(`[x-show="step === ${this.step}"] [required]`);

                                let allValid = true;

                                // Temporarily disable other hidden fields so browser doesn’t validate them
                                visibleInputs.forEach(input => {
                                    if (!input.checkValidity()) {
                                        allValid = false;
                                    }
                                });

                                if (allValid) {
                                    if (this.step < this.totalSteps) {
                                        this.step++;
                                    } else {
                                        // Submit on last step
                                        form.submit();
                                    }
                                } else {
                                    // Trigger browser’s built-in validation pop-up
                                    form.reportValidity();
                                }
                            }
                        }
                    }
                </script>


            </section>


            <!-- OPEN POSITIONS -->
            <div class="space-y-8">
                <h2 class="text-2xl font-semibold text-gray-800">Current Openings</h2>

                <!-- JOB CARD EXAMPLE -->
                <div class="border rounded-2xl shadow-sm p-6 hover:shadow-md transition bg-white/50 backdrop-blur">
                    <div class="flex flex-col md:flex-row md:justify-between md:items-center gap-4">
                        <div>
                            <h3 class="text-xl font-semibold text-gray-800">Graphic Designer</h3>
                            <p class="text-gray-600 text-sm mt-1">Location: Tangerang • Department: Marketing</p>
                        </div>
                        <a href="#apply"
                            class="px-5 py-2 bg-orange-500 text-white rounded-xl font-medium hover:bg-orange-600 transition">
                            Apply Now
                        </a>
                    </div>
                    <div class="mt-4 text-gray-600 leading-relaxed">
                        We’re looking for a creative and detail-oriented Graphic Designer to produce engaging visuals
                        for digital and print media. The ideal candidate has a passion for branding and experience in
                        motion graphics or product marketing.
                        <ul class="list-disc ml-6 mt-3 space-y-1 text-sm">
                            <li>Proficient in Adobe Creative Suite (Photoshop, Illustrator, After Effects)</li>
                            <li>Strong sense of layout and typography</li>
                            <li>Minimum 2 years of experience in graphic design</li>
                        </ul>
                    </div>
                </div>

                <!-- JOB CARD -->
                <div class="border rounded-2xl shadow-sm p-6 hover:shadow-md transition bg-white/50 backdrop-blur">
                    <div class="flex flex-col md:flex-row md:justify-between md:items-center gap-4">
                        <div>
                            <h3 class="text-xl font-semibold text-gray-800">Sales Executive</h3>
                            <p class="text-gray-600 text-sm mt-1">Location: Jakarta • Department: Sales</p>
                        </div>
                        <a href="#apply"
                            class="px-5 py-2 bg-orange-500 text-white rounded-xl font-medium hover:bg-orange-600 transition">
                            Apply Now
                        </a>
                    </div>
                    <div class="mt-4 text-gray-600 leading-relaxed">
                        As a Sales Executive, you will be responsible for building and maintaining client relationships,
                        achieving sales targets, and representing our product brands with professionalism.
                        <ul class="list-disc ml-6 mt-3 space-y-1 text-sm">
                            <li>Excellent communication and negotiation skills</li>
                            <li>Experience in IT product sales is a plus</li>
                            <li>Goal-oriented and proactive</li>
                        </ul>
                    </div>
                </div>
            </div>

            <!-- JOIN US SECTION -->
            <div class="bg-slate-50 shadow-sm rounded-2xl p-10 text-center">
                <h2 class="text-2xl font-semibold text-gray-800 mb-3">Didn’t Find the Right Role?</h2>
                <p class="text-gray-600 mb-6">
                    We’re always open to meeting talented individuals. If you think you can make an impact at PT.
                    Primajaya
                    Multi Technology, send us your resume and tell us how you can contribute.
                </p>
                <a href="mailto:hr@primajaya.co.id"
                    class="inline-block px-6 py-3 bg-orange-500 text-white rounded-xl font-medium hover:bg-orange-600 transition">
                    Send Your Resume
                </a>
            </div>
        </section>
    </div>

</x-layout>
