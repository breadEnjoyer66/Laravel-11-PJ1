<!-- STEP 4 -->
<div x-show="step === 6" x-transition.opacity.duration.10ms class="">
    <h2 class="text-xl font-semibold mb-4">Page 6 - Language Proficiency</h2>
    <div class="space-y-8">

        <div>
            <h3 class="pl-1 text-xl font-bold">Bahasa Inggris</h3>
            <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-5 p-1">

                <div class="">
                    <label for="inggris_bicara"
                        class="block mb-2 text-sm font-medium text-gray-900 dark:text-gray-300">Berbicara <span
                            class="text-red-600 text-sm">*</span></label>
                    <select name="inggris_bicara" id="inggris_bicara" required
                        class="shadow-sm bg-gray-50 text-sm italic rounded-lg focus:ring-primary-500 focus:border-primary-500 block w-full p-2.5 {{ $errors->has('inggris_bicara') ? 'border border-red-500' : 'border border-gray-300' }}">
                        <option value="">Pilih</option>
                        <option value="Baik" {{ old('inggris_bicara') == 'Baik' ? 'selected' : '' }}>Baik</option>
                        <option value="Cukup" {{ old('inggris_bicara') == 'Cukup' ? 'selected' : '' }}>Cukup</option>
                        <option value="Kurang" {{ old('inggris_bicara') == 'Kurang' ? 'selected' : '' }}>Kurang</option>
                        <option value="Tidak Bisa" {{ old('inggris_bicara') == 'Tidak Bisa' ? 'selected' : '' }}>Tidak
                            Bisa</option>
                    </select>
                    @error('inggris_bicara')
                        <p class="mt-1 text-sm text-red-600">{{ $message }}</p>
                    @enderror
                </div>

                <div class="">
                    <label for="inggris_dengar"
                        class="block mb-2 text-sm font-medium text-gray-900 dark:text-gray-300">Mendengar <span
                            class="text-red-600 text-sm">*</span></label>
                    <select name="inggris_dengar" id="inggris_dengar" required
                        class="shadow-sm bg-gray-50 text-sm italic rounded-lg focus:ring-primary-500 focus:border-primary-500 block w-full p-2.5 {{ $errors->has('inggris_dengar') ? 'border border-red-500' : 'border border-gray-300' }}">
                        <option value="">Pilih</option>
                        <option value="Baik" {{ old('inggris_dengar') == 'Baik' ? 'selected' : '' }}>Baik</option>
                        <option value="Cukup" {{ old('inggris_dengar') == 'Cukup' ? 'selected' : '' }}>Cukup</option>
                        <option value="Kurang" {{ old('inggris_dengar') == 'Kurang' ? 'selected' : '' }}>Kurang</option>
                        <option value="Tidak Bisa" {{ old('inggris_dengar') == 'Tidak Bisa' ? 'selected' : '' }}>Tidak
                            Bisa</option>
                    </select>
                    @error('inggris_dengar')
                        <p class="mt-1 text-sm text-red-600">{{ $message }}</p>
                    @enderror
                </div>

                <div class="">
                    <label for="inggris_tulis"
                        class="block mb-2 text-sm font-medium text-gray-900 dark:text-gray-300">Menulis <span
                            class="text-red-600 text-sm">*</span></label>
                    <select name="inggris_tulis" id="inggris_tulis" required
                        class="shadow-sm bg-gray-50 text-sm italic rounded-lg focus:ring-primary-500 focus:border-primary-500 block w-full p-2.5 {{ $errors->has('inggris_tulis') ? 'border border-red-500' : 'border border-gray-300' }}">
                        <option value="">Pilih</option>
                        <option value="Baik" {{ old('inggris_tulis') == 'Baik' ? 'selected' : '' }}>Baik</option>
                        <option value="Cukup" {{ old('inggris_tulis') == 'Cukup' ? 'selected' : '' }}>Cukup</option>
                        <option value="Kurang" {{ old('inggris_tulis') == 'Kurang' ? 'selected' : '' }}>Kurang</option>
                        <option value="Tidak Bisa" {{ old('inggris_tulis') == 'Tidak Bisa' ? 'selected' : '' }}>Tidak
                            Bisa</option>
                    </select>
                    @error('inggris_tulis')
                        <p class="mt-1 text-sm text-red-600">{{ $message }}</p>
                    @enderror
                </div>

                <div class="">
                    <label for="inggris_baca"
                        class="block mb-2 text-sm font-medium text-gray-900 dark:text-gray-300">Membaca <span
                            class="text-red-600 text-sm">*</span></label>
                    <select name="inggris_baca" id="inggris_baca" required
                        class="shadow-sm bg-gray-50 text-sm italic rounded-lg focus:ring-primary-500 focus:border-primary-500 block w-full p-2.5 {{ $errors->has('inggris_baca') ? 'border border-red-500' : 'border border-gray-300' }}">
                        <option value="">Pilih</option>
                        <option value="Baik" {{ old('inggris_baca') == 'Baik' ? 'selected' : '' }}>Baik</option>
                        <option value="Cukup" {{ old('inggris_baca') == 'Cukup' ? 'selected' : '' }}>Cukup</option>
                        <option value="Kurang" {{ old('inggris_baca') == 'Kurang' ? 'selected' : '' }}>Kurang</option>
                        <option value="Tidak Bisa" {{ old('inggris_baca') == 'Tidak Bisa' ? 'selected' : '' }}>Tidak
                            Bisa</option>
                    </select>
                    @error('inggris_baca')
                        <p class="mt-1 text-sm text-red-600">{{ $message }}</p>
                    @enderror
                </div>

            </div>
        </div>

        <div>
            <h3 class="pl-1 text-xl font-bold">Bahasa Mandarin</h3>
            <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-5 p-1">

                <div class="">
                    <label for="mandarin_bicara"
                        class="block mb-2 text-sm font-medium text-gray-900 dark:text-gray-300">Berbicara</label>
                    <select name="mandarin_bicara" id="mandarin_bicara"
                        class="shadow-sm bg-gray-50 text-sm italic rounded-lg focus:ring-primary-500 focus:border-primary-500 block w-full p-2.5 {{ $errors->has('mandarin_bicara') ? 'border border-red-500' : 'border border-gray-300' }}">
                        <option value="">Pilih</option>
                        <option value="Baik" {{ old('mandarin_bicara') == 'Baik' ? 'selected' : '' }}>Baik</option>
                        <option value="Cukup" {{ old('mandarin_bicara') == 'Cukup' ? 'selected' : '' }}>Cukup</option>
                        <option value="Kurang" {{ old('mandarin_bicara') == 'Kurang' ? 'selected' : '' }}>Kurang
                        </option>
                        <option value="Tidak Bisa" {{ old('mandarin_bicara') == 'Tidak Bisa' ? 'selected' : '' }}>Tidak
                            Bisa</option>
                    </select>
                    @error('mandarin_bicara')
                        <p class="mt-1 text-sm text-red-600">{{ $message }}</p>
                    @enderror
                </div>

                <div class="">
                    <label for="mandarin_dengar"
                        class="block mb-2 text-sm font-medium text-gray-900 dark:text-gray-300">Mendengar</label>
                    <select name="mandarin_dengar" id="mandarin_dengar"
                        class="shadow-sm bg-gray-50 text-sm italic rounded-lg focus:ring-primary-500 focus:border-primary-500 block w-full p-2.5 {{ $errors->has('mandarin_dengar') ? 'border border-red-500' : 'border border-gray-300' }}">
                        <option value="">Pilih</option>
                        <option value="Baik" {{ old('mandarin_dengar') == 'Baik' ? 'selected' : '' }}>Baik</option>
                        <option value="Cukup" {{ old('mandarin_dengar') == 'Cukup' ? 'selected' : '' }}>Cukup</option>
                        <option value="Kurang" {{ old('mandarin_dengar') == 'Kurang' ? 'selected' : '' }}>Kurang
                        </option>
                        <option value="Tidak Bisa" {{ old('mandarin_dengar') == 'Tidak Bisa' ? 'selected' : '' }}>Tidak
                            Bisa</option>
                    </select>
                    @error('mandarin_dengar')
                        <p class="mt-1 text-sm text-red-600">{{ $message }}</p>
                    @enderror
                </div>

                <div class="">
                    <label for="mandarin_tulis"
                        class="block mb-2 text-sm font-medium text-gray-900 dark:text-gray-300">Menulis</label>
                    <select name="mandarin_tulis" id="mandarin_tulis"
                        class="shadow-sm bg-gray-50 text-sm italic rounded-lg focus:ring-primary-500 focus:border-primary-500 block w-full p-2.5 {{ $errors->has('mandarin_tulis') ? 'border border-red-500' : 'border border-gray-300' }}">
                        <option value="">Pilih</option>
                        <option value="Baik" {{ old('mandarin_tulis') == 'Baik' ? 'selected' : '' }}>Baik</option>
                        <option value="Cukup" {{ old('mandarin_tulis') == 'Cukup' ? 'selected' : '' }}>Cukup</option>
                        <option value="Kurang" {{ old('mandarin_tulis') == 'Kurang' ? 'selected' : '' }}>Kurang
                        </option>
                        <option value="Tidak Bisa" {{ old('mandarin_tulis') == 'Tidak Bisa' ? 'selected' : '' }}>Tidak
                            Bisa</option>
                    </select>
                    @error('mandarin_tulis')
                        <p class="mt-1 text-sm text-red-600">{{ $message }}</p>
                    @enderror
                </div>

                <div class="">
                    <label for="mandarin_baca"
                        class="block mb-2 text-sm font-medium text-gray-900 dark:text-gray-300">Membaca</label>
                    <select name="mandarin_baca" id="mandarin_baca"
                        class="shadow-sm bg-gray-50 text-sm italic rounded-lg focus:ring-primary-500 focus:border-primary-500 block w-full p-2.5 {{ $errors->has('mandarin_baca') ? 'border border-red-500' : 'border border-gray-300' }}">
                        <option value="">Pilih</option>
                        <option value="Baik" {{ old('mandarin_baca') == 'Baik' ? 'selected' : '' }}>Baik</option>
                        <option value="Cukup" {{ old('mandarin_baca') == 'Cukup' ? 'selected' : '' }}>Cukup</option>
                        <option value="Kurang" {{ old('mandarin_baca') == 'Kurang' ? 'selected' : '' }}>Kurang
                        </option>
                        <option value="Tidak Bisa" {{ old('mandarin_baca') == 'Tidak Bisa' ? 'selected' : '' }}>Tidak
                            Bisa</option>
                    </select>
                    @error('mandarin_baca')
                        <p class="mt-1 text-sm text-red-600">{{ $message }}</p>
                    @enderror
                </div>

            </div>
        </div>

        <div>
            <h3 class="pl-1 text-xl font-bold">Bahasa Asing Lainnya</h3>

            <div class="mb-4 p-1">
                <input type="text" id="bahasa_asing_lain" name="bahasa_asing_lain"
                    class="placeholder:text-gray-400 shadow-sm bg-gray-50 text-sm italic rounded-lg focus:ring-primary-500 focus:border-primary-500 block w-full p-2.5 {{ $errors->has('bahasa_asing_lain') ? 'border border-red-500' : 'border border-gray-300' }}"
                    placeholder="Sebutkan bahasa asing lain, misal: Jerman" value="{{ old('bahasa_asing_lain') }}">
                @error('bahasa_asing_lain')
                    <p class="mt-1 text-sm text-red-600">{{ $message }}</p>
                @enderror
            </div>

            <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-5 p-1">

                <div class="">
                    <label for="bahasa_asing_lain_bicara"
                        class="block mb-2 text-sm font-medium text-gray-900 dark:text-gray-300">Berbicara</label>
                    <select name="bahasa_asing_lain_bicara" id="bahasa_asing_lain_bicara"
                        class="shadow-sm bg-gray-50 text-sm italic rounded-lg focus:ring-primary-500 focus:border-primary-500 block w-full p-2.5 {{ $errors->has('bahasa_asing_lain_bicara') ? 'border border-red-500' : 'border border-gray-300' }}">
                        <option value="">Pilih</option>
                        <option value="Baik" {{ old('bahasa_asing_lain_bicara') == 'Baik' ? 'selected' : '' }}>Baik
                        </option>
                        <option value="Cukup" {{ old('bahasa_asing_lain_bicara') == 'Cukup' ? 'selected' : '' }}>
                            Cukup</option>
                        <option value="Kurang" {{ old('bahasa_asing_lain_bicara') == 'Kurang' ? 'selected' : '' }}>
                            Kurang</option>
                        <option value="Tidak Bisa"
                            {{ old('bahasa_asing_lain_bicara') == 'Tidak Bisa' ? 'selected' : '' }}>Tidak Bisa</option>
                    </select>
                    @error('bahasa_asing_lain_bicara')
                        <p class="mt-1 text-sm text-red-600">{{ $message }}</p>
                    @enderror
                </div>

                <div class="">
                    <label for="bahasa_asing_lain_dengar"
                        class="block mb-2 text-sm font-medium text-gray-900 dark:text-gray-300">Mendengar</label>
                    <select name="bahasa_asing_lain_dengar" id="bahasa_asing_lain_dengar"
                        class="shadow-sm bg-gray-50 text-sm italic rounded-lg focus:ring-primary-500 focus:border-primary-500 block w-full p-2.5 {{ $errors->has('bahasa_asing_lain_dengar') ? 'border border-red-500' : 'border border-gray-300' }}">
                        <option value="">Pilih</option>
                        <option value="Baik" {{ old('bahasa_asing_lain_dengar') == 'Baik' ? 'selected' : '' }}>Baik
                        </option>
                        <option value="Cukup" {{ old('bahasa_asing_lain_dengar') == 'Cukup' ? 'selected' : '' }}>
                            Cukup</option>
                        <option value="Kurang" {{ old('bahasa_asing_lain_dengar') == 'Kurang' ? 'selected' : '' }}>
                            Kurang</option>
                        <option value="Tidak Bisa"
                            {{ old('bahasa_asing_lain_dengar') == 'Tidak Bisa' ? 'selected' : '' }}>Tidak Bisa</option>
                    </select>
                    @error('bahasa_asing_lain_dengar')
                        <p class="mt-1 text-sm text-red-600">{{ $message }}</p>
                    @enderror
                </div>

                <div class="">
                    <label for="bahasa_asing_lain_tulis"
                        class="block mb-2 text-sm font-medium text-gray-900 dark:text-gray-300">Menulis</label>
                    <select name="bahasa_asing_lain_tulis" id="bahasa_asing_lain_tulis"
                        class="shadow-sm bg-gray-50 text-sm italic rounded-lg focus:ring-primary-500 focus:border-primary-500 block w-full p-2.5 {{ $errors->has('bahasa_asing_lain_tulis') ? 'border border-red-500' : 'border border-gray-300' }}">
                        <option value="">Pilih</option>
                        <option value="Baik" {{ old('bahasa_asing_lain_tulis') == 'Baik' ? 'selected' : '' }}>Baik
                        </option>
                        <option value="Cukup" {{ old('bahasa_asing_lain_tulis') == 'Cukup' ? 'selected' : '' }}>Cukup
                        </option>
                        <option value="Kurang" {{ old('bahasa_asing_lain_tulis') == 'Kurang' ? 'selected' : '' }}>
                            Kurang</option>
                        <option value="Tidak Bisa"
                            {{ old('bahasa_asing_lain_tulis') == 'Tidak Bisa' ? 'selected' : '' }}>Tidak Bisa</option>
                    </select>
                    @error('bahasa_asing_lain_tulis')
                        <p class="mt-1 text-sm text-red-600">{{ $message }}</p>
                    @enderror
                </div>

                <div class="">
                    <label for="bahasa_asing_lain_baca"
                        class="block mb-2 text-sm font-medium text-gray-900 dark:text-gray-300">Membaca</label>
                    <select name="bahasa_asing_lain_baca" id="bahasa_asing_lain_baca"
                        class="shadow-sm bg-gray-50 text-sm italic rounded-lg focus:ring-primary-500 focus:border-primary-500 block w-full p-2.5 {{ $errors->has('bahasa_asing_lain_baca') ? 'border border-red-500' : 'border border-gray-300' }}">
                        <option value="">Pilih</option>
                        <option value="Baik" {{ old('bahasa_asing_lain_baca') == 'Baik' ? 'selected' : '' }}>Baik
                        </option>
                        <option value="Cukup" {{ old('bahasa_asing_lain_baca') == 'Cukup' ? 'selected' : '' }}>Cukup
                        </option>
                        <option value="Kurang" {{ old('bahasa_asing_lain_baca') == 'Kurang' ? 'selected' : '' }}>
                            Kurang</option>
                        <option value="Tidak Bisa"
                            {{ old('bahasa_asing_lain_baca') == 'Tidak Bisa' ? 'selected' : '' }}>Tidak Bisa</option>
                    </select>
                    @error('bahasa_asing_lain_baca')
                        <p class="mt-1 text-sm text-red-600">{{ $message }}</p>
                    @enderror
                </div>

            </div>
        </div>

    </div>
</div>
