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
                        If you’re driven, eager to learn, and ready to grow with us, fill out the application form
                        below.
                        We look forward to hearing from you!

                    </p>
                </div>
                <div class="relative">
                    <img src="{{ asset('img/man-in-suit.jpg') }}" alt="Career Illustration"
                        class="rounded-2xl shadow-lg w-full h-80 object-cover bg-top-center">
                    <div class="absolute inset-0 rounded-2xl bg-gradient-to-t from-black/20 to-transparent"></div>
                </div>
            </div>

            <!-- JOB APPLICATION FORM -->
            <section id="job-application" id="job-form"
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

                <form x-data="formStepper()" @submit="validateCurrentStep($event)" method="POST"
                    action="{{ route('career.store') }}" enctype="multipart/form-data" class="space-y-6">
                    @csrf


                    <!-- Progress Bar -->
                    <div class="w-full bg-gray-200 h-3 rounded-full overflow-hidden mb-6">
                        <div class="h-3 bg-gradient-to-r from-primary-600 to-primary-500 rounded-full transition-all duration-500"
                            :style="`width: ${(step / totalSteps) * 100}%`"></div>
                    </div>

                    <!-- Step container -->
                    <div class="">
                        <x-job-application.page-1 :open-positions="$open_positions" />
                        <x-job-application.page-2 />
                        <x-job-application.page-3 />
                        <x-job-application.page-4 />
                        <x-job-application.page-5 />
                        <x-job-application.page-6 />
                        <x-job-application.page-7 />
                        <x-job-application.page-8 />
                        <x-job-application.page-9 />
                        <x-job-application.page-10 />
                        <x-job-application.page-11 />
                    </div>

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

                </form>
                <script>
                    function formStepper() {
                        return {
                            step: 1,
                            totalSteps: 11,

                            // ✅ Helper function to check if any checkbox in a group is selected
                            validateCheckboxGroup(name) {
                                const checkboxes = document.querySelectorAll(`input[name="${name}[]"]`);
                                return Array.from(checkboxes).some(cb => cb.checked);
                            },

                            validateCurrentStep(event) {
                                const form = event.target.closest('form');
                                const visibleInputs = form.querySelectorAll(`[x-show="step === ${this.step}"] [required]`);

                                let allValid = true;

                                // Validate normal inputs
                                visibleInputs.forEach(input => {
                                    if (!input.checkValidity()) {
                                        allValid = false;
                                    }
                                });

                                // ✅ Add checkbox group validation (only on relevant step)
                                if (this.step === 11) { // replace 4 with the step where your checkbox is
                                    if (!this.validateCheckboxGroup('info_dari')) {
                                        allValid = false;
                                        alert('Pilih minimal satu sumber informasi.');
                                    }
                                }

                                if (allValid) {
                                    if (this.step < this.totalSteps) {
                                        this.step++;
                                    } else {
                                        form.submit();
                                    }
                                } else {
                                    form.reportValidity();
                                }
                            }
                        }
                    }
                </script>






            </section>

        </section>
    </div>

</x-layout>
