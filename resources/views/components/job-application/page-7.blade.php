<!-- STEP 7 -->
<div x-show="step === 7" x-transition.opacity.duration.10ms class="">
    <h2 class="text-xl font-semibold mb-4">Page 7 - Computer Skill</h2>
    <div class="space-y-8">

        <div>
            <h3 class="pl-1 text-xl font-bold">Microsoft Office <span class="text-red-600 text-sm">*</span></h3>
            <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-5 p-1">

                <div class="">
                    <label for="office_word"
                        class="block mb-2 text-sm font-medium text-gray-900 dark:text-gray-300">Office Word <span
                            class="text-red-600 text-sm">*</span></label>
                    <select name="office_word" id="office_word" required
                        class="shadow-sm bg-gray-50 text-sm italic rounded-lg focus:ring-primary-500 focus:border-primary-500 block w-full p-2.5 {{ $errors->has('office_word') ? 'border border-red-500' : 'border border-gray-300' }}">
                        <option value="">Pilih</option>
                        <option value="Baik" {{ old('office_word') == 'Baik' ? 'selected' : '' }}>Baik</option>
                        <option value="Cukup" {{ old('office_word') == 'Cukup' ? 'selected' : '' }}>Cukup</option>
                        <option value="Kurang" {{ old('office_word') == 'Kurang' ? 'selected' : '' }}>Kurang</option>
                    </select>
                    @error('office_word')
                        <p class="mt-1 text-sm text-red-600">{{ $message }}</p>
                    @enderror
                </div>

                <div class="">
                    <label for="office_excel"
                        class="block mb-2 text-sm font-medium text-gray-900 dark:text-gray-300">Office Excel <span
                            class="text-red-600 text-sm">*</span></label>
                    <select name="office_excel" id="office_excel" required
                        class="shadow-sm bg-gray-50 text-sm italic rounded-lg focus:ring-primary-500 focus:border-primary-500 block w-full p-2.5 {{ $errors->has('office_excel') ? 'border border-red-500' : 'border border-gray-300' }}">
                        <option value="">Pilih</option>
                        <option value="Baik" {{ old('office_excel') == 'Baik' ? 'selected' : '' }}>Baik</option>
                        <option value="Cukup" {{ old('office_excel') == 'Cukup' ? 'selected' : '' }}>Cukup</option>
                        <option value="Kurang" {{ old('office_excel') == 'Kurang' ? 'selected' : '' }}>Kurang</option>
                    </select>
                    @error('office_excel')
                        <p class="mt-1 text-sm text-red-600">{{ $message }}</p>
                    @enderror
                </div>

                <div class="">
                    <label for="office_power_point"
                        class="block mb-2 text-sm font-medium text-gray-900 dark:text-gray-300">Office Power
                        Point <span class="text-red-600 text-sm">*</span></label>
                    <select name="office_power_point" id="office_power_point" required
                        class="shadow-sm bg-gray-50 text-sm italic rounded-lg focus:ring-primary-500 focus:border-primary-500 block w-full p-2.5 {{ $errors->has('office_power_point') ? 'border border-red-500' : 'border border-gray-300' }}">
                        <option value="">Pilih</option>
                        <option value="Baik" {{ old('office_power_point') == 'Baik' ? 'selected' : '' }}>Baik
                        </option>
                        <option value="Cukup" {{ old('office_power_point') == 'Cukup' ? 'selected' : '' }}>Cukup
                        </option>
                        <option value="Kurang" {{ old('office_power_point') == 'Kurang' ? 'selected' : '' }}>Kurang
                        </option>
                    </select>
                    @error('office_power_point')
                        <p class="mt-1 text-sm text-red-600">{{ $message }}</p>
                    @enderror
                </div>


            </div>
        </div>

        <div>
            <h3 class="pl-1 text-xl font-bold">Skill Komputer Lainnya</h3>
            <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-2 p-1">
                <div class="p-2 border rounded-lg lg:mr-2 pb-6 px-4">
                    <label for="skill_com_lain_1"
                        class="mt-4 block mb-2 text-sm font-medium text-gray-900 dark:text-gray-300">Skill Komputer
                        1</label>
                    <input type="text" id="skill_com_lain_1" name="skill_com_lain_1"
                        class="placeholder:text-gray-400 shadow-sm bg-gray-50 text-sm italic rounded-lg focus:ring-primary-500 focus:border-primary-500 block w-full p-2.5 {{ $errors->has('skill_com_lain_1') ? 'border border-red-500' : 'border border-gray-300' }}"
                        placeholder="Cth. Photoshop, Corel Draw" value="{{ old('skill_com_lain_1') }}">
                    @error('skill_com_lain_1')
                        <p class="mt-1 text-sm text-red-600">{{ $message }}</p>
                    @enderror

                    <label for="skill_com_1_level"
                        class="mt-4 block mb-2 text-sm font-medium text-gray-900 dark:text-gray-300">Level
                        Kemampuan</label>
                    <select name="skill_com_1_level" id="skill_com_1_level"
                        class="shadow-sm bg-gray-50 text-sm italic rounded-lg focus:ring-primary-500 focus:border-primary-500 block w-full p-2.5 {{ $errors->has('skill_com_1_level') ? 'border border-red-500' : 'border border-gray-300' }}">
                        <option value="">Pilih</option>
                        <option value="Baik" {{ old('skill_com_1_level') == 'Baik' ? 'selected' : '' }}>Baik</option>
                        <option value="Cukup" {{ old('skill_com_1_level') == 'Cukup' ? 'selected' : '' }}>Cukup
                        </option>
                        <option value="Kurang" {{ old('skill_com_1_level') == 'Kurang' ? 'selected' : '' }}>Kurang
                        </option>
                    </select>
                    @error('skill_com_1_level')
                        <p class="mt-1 text-sm text-red-600">{{ $message }}</p>
                    @enderror
                </div>

                <div class="p-2 border rounded-lg lg:ml-2 pb-6 px-4">
                    <label for="skill_com_lain_2"
                        class="mt-4 block mb-2 text-sm font-medium text-gray-900 dark:text-gray-300">Skill Komputer
                        2</label>
                    <input type="text" id="skill_com_lain_2" name="skill_com_lain_2"
                        class="placeholder:text-gray-400 shadow-sm bg-gray-50 text-sm italic rounded-lg focus:ring-primary-500 focus:border-primary-500 block w-full p-2.5 {{ $errors->has('skill_com_lain_2') ? 'border border-red-500' : 'border border-gray-300' }}"
                        placeholder="Cth. Adobe After Effects, Adobe Premiere" value="{{ old('skill_com_lain_2') }}">
                    @error('skill_com_lain_2')
                        <p class="mt-1 text-sm text-red-600">{{ $message }}</p>
                    @enderror

                    <label for="skill_com_2_level"
                        class="mt-4 block mb-2 text-sm font-medium text-gray-900 dark:text-gray-300">Level
                        Kemampuan</label>
                    <select name="skill_com_2_level" id="skill_com_2_level"
                        class="shadow-sm bg-gray-50 text-sm italic rounded-lg focus:ring-primary-500 focus:border-primary-500 block w-full p-2.5 {{ $errors->has('skill_com_2_level') ? 'border border-red-500' : 'border border-gray-300' }}">
                        <option value="">Pilih</option>
                        <option value="Baik" {{ old('skill_com_2_level') == 'Baik' ? 'selected' : '' }}>Baik</option>
                        <option value="Cukup" {{ old('skill_com_2_level') == 'Cukup' ? 'selected' : '' }}>Cukup
                        </option>
                        <option value="Kurang" {{ old('skill_com_2_level') == 'Kurang' ? 'selected' : '' }}>Kurang
                        </option>
                    </select>
                    @error('skill_com_2_level')
                        <p class="mt-1 text-sm text-red-600">{{ $message }}</p>
                    @enderror
                </div>

            </div>
        </div>

    </div>
</div>
