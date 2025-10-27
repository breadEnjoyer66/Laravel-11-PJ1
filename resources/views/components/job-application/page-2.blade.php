<!-- STEP 2 -->
<div x-show="step === 2" x-transition.opacity.duration.10ms class="">
    <h2 class="text-xl font-semibold mb-4">Page 2 - Family Information</h2>
    <div class="space-y-8">


        <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-5 p-1">
            <div class="">
                <label for="nama_ayah" class="block mb-2 text-sm font-medium text-gray-900 dark:text-gray-300">Nama
                    Lengkap Ayah<span class="text-red-600 text-sm">*</span></label>
                <input type="text" id="nama_ayah" name="nama_ayah"
                    class="placeholder:text-gray-400 shadow-sm bg-gray-50 text-sm italic rounded-lg focus:ring-primary-500 focus:border-primary-500 block w-full p-2.5 {{ $errors->has('nama_ayah') ? 'border border-red-500' : 'border border-gray-300' }}"
                    placeholder="Nama Ayah" value="{{ old('nama_ayah') }}" required>
                @error('nama_ayah')
                    <p class="mt-1 text-sm text-red-600">{{ $message }}</p>
                @enderror
            </div>

            <div class="">
                <label for="usia_ayah" class="block mb-2 text-sm font-medium text-gray-900 dark:text-gray-300">Usia Ayah
                    <span class="text-red-600 text-sm">*</span></label>
                <input type="text" id="usia_ayah" name="usia_ayah"
                    class="placeholder:text-gray-400 shadow-sm bg-gray-50 text-sm italic rounded-lg focus:ring-primary-500 focus:border-primary-500 block w-full p-2.5 {{ $errors->has('usia_ayah') ? 'border border-red-500' : 'border border-gray-300' }}"
                    placeholder="Usia Ayah" value="{{ old('usia_ayah') }}" required>
                @error('usia_ayah')
                    <p class="mt-1 text-sm text-red-600">{{ $message }}</p>
                @enderror
            </div>

            <div class="">
                <label for="pekerjaan_ayah"
                    class="block mb-2 text-sm font-medium text-gray-900 dark:text-gray-300">Pekerjaan Ayah <span
                        class="text-red-600 text-sm">*</span></label>
                <input type="text" id="pekerjaan_ayah" name="pekerjaan_ayah"
                    class="placeholder:text-gray-400 shadow-sm bg-gray-50 text-sm italic rounded-lg focus:ring-primary-500 focus:border-primary-500 block w-full p-2.5 {{ $errors->has('pekerjaan_ayah') ? 'border border-red-500' : 'border border-gray-300' }}"
                    placeholder="Pekerjaan Ayah" value="{{ old('pekerjaan_ayah') }}" required>
                @error('pekerjaan_ayah')
                    <p class="mt-1 text-sm text-red-600">{{ $message }}</p>
                @enderror
            </div>
        </div>


        <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-5 p-1">
            <div class="">
                <label for="nama_ibu" class="block mb-2 text-sm font-medium text-gray-900 dark:text-gray-300">Nama
                    Lengkap Ibu<span class="text-red-600 text-sm">*</span></label>
                <input type="text" id="nama_ibu" name="nama_ibu"
                    class="placeholder:text-gray-400 shadow-sm bg-gray-50 text-sm italic rounded-lg focus:ring-primary-500 focus:border-primary-500 block w-full p-2.5 {{ $errors->has('nama_ibu') ? 'border border-red-500' : 'border border-gray-300' }}"
                    placeholder="Nama Ibu" value="{{ old('nama_ibu') }}" required>
                @error('nama_ibu')
                    <p class="mt-1 text-sm text-red-600">{{ $message }}</p>
                @enderror
            </div>

            <div class="">
                <label for="usia_ibu" class="block mb-2 text-sm font-medium text-gray-900 dark:text-gray-300">Usia
                    Ibu<span class="text-red-600 text-sm">*</span></label>
                <input type="text" id="usia_ibu" name="usia_ibu"
                    class="placeholder:text-gray-400 shadow-sm bg-gray-50 text-sm italic rounded-lg focus:ring-primary-500 focus:border-primary-500 block w-full p-2.5 {{ $errors->has('usia_ibu') ? 'border border-red-500' : 'border border-gray-300' }}"
                    placeholder="Usia Ibu" value="{{ old('usia_ibu') }}" required>
                @error('usia_ibu')
                    <p class="mt-1 text-sm text-red-600">{{ $message }}</p>
                @enderror
            </div>

            <div class="">
                <label for="pekerjaan_ibu"
                    class="block mb-2 text-sm font-medium text-gray-900 dark:text-gray-300">Pekerjaan Ibu<span
                        class="text-red-600 text-sm">*</span></label>
                <input type="text" id="pekerjaan_ibu" name="pekerjaan_ibu"
                    class="placeholder:text-gray-400 shadow-sm bg-gray-50 text-sm italic rounded-lg focus:ring-primary-500 focus:border-primary-500 block w-full p-2.5 {{ $errors->has('pekerjaan_ibu') ? 'border border-red-500' : 'border border-gray-300' }}"
                    placeholder="Pekerjaan Ibu" value="{{ old('pekerjaan_ibu') }}" required>
                @error('pekerjaan_ibu')
                    <p class="mt-1 text-sm text-red-600">{{ $message }}</p>
                @enderror
            </div>
        </div>



        <div class="">
            <div class="mt-6 mb-4">
                <h2 class="text-xl font-bold">Saudara Kandung (Termasuk Diri Sendiri)</h2>
            </div>
            <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-5 p-1 mb-4">

                <div class="">
                    <label for="nama_saudara_kandung_1"
                        class="block mb-2 text-sm font-medium text-gray-900 dark:text-gray-300">Nama
                        Sdr Kandung 1</label>
                    <input type="text" id="nama_saudara_kandung_1" name="nama_saudara_kandung_1"
                        class="placeholder:text-gray-400 shadow-sm bg-gray-50 text-sm italic rounded-lg focus:ring-primary-500 focus:border-primary-500 block w-full p-2.5 {{ $errors->has('nama_saudara_kandung_1') ? 'border border-red-500' : 'border border-gray-300' }}"
                        placeholder="Nama saudara kandung 1" value="{{ old('nama_saudara_kandung_1') }}">
                    @error('nama_saudara_kandung_1')
                        <p class="mt-1 text-sm text-red-600">{{ $message }}</p>
                    @enderror
                </div>

                <div class="">
                    <label for="usia_saudara_kandung_1"
                        class="block mb-2 text-sm font-medium text-gray-900 dark:text-gray-300">Usia Sdr Kandung
                        1</label>
                    <input type="text" id="usia_saudara_kandung_1" name="usia_saudara_kandung_1"
                        class="placeholder:text-gray-400 shadow-sm bg-gray-50 text-sm italic rounded-lg focus:ring-primary-500 focus:border-primary-500 block w-full p-2.5 {{ $errors->has('usia_saudara_kandung_1') ? 'border border-red-500' : 'border border-gray-300' }}"
                        placeholder="Usia saudara kandung 1" value="{{ old('usia_saudara_kandung_1') }}">
                    @error('usia_saudara_kandung_1')
                        <p class="mt-1 text-sm text-red-600">{{ $message }}</p>
                    @enderror
                </div>

                <div class="">
                    <label for="pekerjaan_saudara_kandung_1"
                        class="block mb-2 text-sm font-medium text-gray-900 dark:text-gray-300">Pekerjaan Sdr Kandung
                        1</label>
                    <input type="text" id="pekerjaan_saudara_kandung_1" name="pekerjaan_saudara_kandung_1"
                        class="placeholder:text-gray-400 shadow-sm bg-gray-50 text-sm italic rounded-lg focus:ring-primary-500 focus:border-primary-500 block w-full p-2.5 {{ $errors->has('pekerjaan_saudara_kandung_1') ? 'border border-red-500' : 'border border-gray-300' }}"
                        placeholder="Pekerjaan saudara kandung 1" value="{{ old('pekerjaan_saudara_kandung_1') }}">
                    @error('pekerjaan_saudara_kandung_1')
                        <p class="mt-1 text-sm text-red-600">{{ $message }}</p>
                    @enderror
                </div>
            </div>


            <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-5 p-1 mb-4">
                <div class="">
                    <label for="nama_saudara_kandung_2"
                        class="block mb-2 text-sm font-medium text-gray-900 dark:text-gray-300">Nama
                        Sdr Kandung 2</label>
                    <input type="text" id="nama_saudara_kandung_2" name="nama_saudara_kandung_2"
                        class="placeholder:text-gray-400 shadow-sm bg-gray-50 text-sm italic rounded-lg focus:ring-primary-500 focus:border-primary-500 block w-full p-2.5 {{ $errors->has('nama_saudara_kandung_2') ? 'border border-red-500' : 'border border-gray-300' }}"
                        placeholder="Nama saudara kandung 2" value="{{ old('nama_saudara_kandung_2') }}">
                    @error('nama_saudara_kandung_2')
                        <p class="mt-1 text-sm text-red-600">{{ $message }}</p>
                    @enderror
                </div>

                <div class="">
                    <label for="usia_saudara_kandung_2"
                        class="block mb-2 text-sm font-medium text-gray-900 dark:text-gray-300">Usia Sdr Kandung
                        2</label>
                    <input type="text" id="usia_saudara_kandung_2" name="usia_saudara_kandung_2"
                        class="placeholder:text-gray-400 shadow-sm bg-gray-50 text-sm italic rounded-lg focus:ring-primary-500 focus:border-primary-500 block w-full p-2.5 {{ $errors->has('usia_saudara_kandung_2') ? 'border border-red-500' : 'border border-gray-300' }}"
                        placeholder="Usia saudara kandung 2" value="{{ old('usia_saudara_kandung_2') }}">
                    @error('usia_saudara_kandung_2')
                        <p class="mt-1 text-sm text-red-600">{{ $message }}</p>
                    @enderror
                </div>

                <div class="">
                    <label for="pekerjaan_saudara_kandung_2"
                        class="block mb-2 text-sm font-medium text-gray-900 dark:text-gray-300">Pekerjaan Sdr Kandung
                        2</label>
                    <input type="text" id="pekerjaan_saudara_kandung_2" name="pekerjaan_saudara_kandung_2"
                        class="placeholder:text-gray-400 shadow-sm bg-gray-50 text-sm italic rounded-lg focus:ring-primary-500 focus:border-primary-500 block w-full p-2.5 {{ $errors->has('pekerjaan_saudara_kandung_2') ? 'border border-red-500' : 'border border-gray-300' }}"
                        placeholder="Pekerjaan saudara kandung 2" value="{{ old('pekerjaan_saudara_kandung_2') }}">
                    @error('pekerjaan_saudara_kandung_2')
                        <p class="mt-1 text-sm text-red-600">{{ $message }}</p>
                    @enderror
                </div>
            </div>


            <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-5 p-1 mb-4">
                <div class="">
                    <label for="nama_saudara_kandung_3"
                        class="block mb-2 text-sm font-medium text-gray-900 dark:text-gray-300">Nama
                        Sdr Kandung 3</label>
                    <input type="text" id="nama_saudara_kandung_3" name="nama_saudara_kandung_3"
                        class="placeholder:text-gray-400 shadow-sm bg-gray-50 text-sm italic rounded-lg focus:ring-primary-500 focus:border-primary-500 block w-full p-2.5 {{ $errors->has('nama_saudara_kandung_3') ? 'border border-red-500' : 'border border-gray-300' }}"
                        placeholder="Nama saudara kandung 3" value="{{ old('nama_saudara_kandung_3') }}">
                    @error('nama_saudara_kandung_3')
                        <p class="mt-1 text-sm text-red-600">{{ $message }}</p>
                    @enderror
                </div>

                <div class="">
                    <label for="usia_saudara_kandung_3"
                        class="block mb-2 text-sm font-medium text-gray-900 dark:text-gray-300">Usia Sdr Kandung
                        3</label>
                    <input type="text" id="usia_saudara_kandung_3" name="usia_saudara_kandung_3"
                        class="placeholder:text-gray-400 shadow-sm bg-gray-50 text-sm italic rounded-lg focus:ring-primary-500 focus:border-primary-500 block w-full p-2.5 {{ $errors->has('usia_saudara_kandung_3') ? 'border border-red-500' : 'border border-gray-300' }}"
                        placeholder="Usia saudara kandung 3" value="{{ old('usia_saudara_kandung_3') }}">
                    @error('usia_saudara_kandung_3')
                        <p class="mt-1 text-sm text-red-600">{{ $message }}</p>
                    @enderror
                </div>

                <div class="">
                    <label for="pekerjaan_saudara_kandung_3"
                        class="block mb-2 text-sm font-medium text-gray-900 dark:text-gray-300">Pekerjaan Sdr Kandung
                        3</label>
                    <input type="text" id="pekerjaan_saudara_kandung_3" name="pekerjaan_saudara_kandung_3"
                        class="placeholder:text-gray-400 shadow-sm bg-gray-50 text-sm italic rounded-lg focus:ring-primary-500 focus:border-primary-500 block w-full p-2.5 {{ $errors->has('pekerjaan_saudara_kandung_3') ? 'border border-red-500' : 'border border-gray-300' }}"
                        placeholder="Pekerjaan saudara kandung 3" value="{{ old('pekerjaan_saudara_kandung_3') }}">
                    @error('pekerjaan_saudara_kandung_3')
                        <p class="mt-1 text-sm text-red-600">{{ $message }}</p>
                    @enderror
                </div>
            </div>

            <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-5 p-1">
                <div class="">
                    <label for="nama_saudara_kandung_4"
                        class="block mb-2 text-sm font-medium text-gray-900 dark:text-gray-300">Nama
                        Sdr Kandung 4</label>
                    <input type="text" id="nama_saudara_kandung_4" name="nama_saudara_kandung_4"
                        class="placeholder:text-gray-400 shadow-sm bg-gray-50 text-sm italic rounded-lg focus:ring-primary-500 focus:border-primary-500 block w-full p-2.5 {{ $errors->has('nama_saudara_kandung_4') ? 'border border-red-500' : 'border border-gray-300' }}"
                        placeholder="Nama saudara kandung 4" value="{{ old('nama_saudara_kandung_4') }}">
                    @error('nama_saudara_kandung_4')
                        <p class="mt-1 text-sm text-red-600">{{ $message }}</p>
                    @enderror
                </div>

                <div class="">
                    <label for="usia_saudara_kandung_4"
                        class="block mb-2 text-sm font-medium text-gray-900 dark:text-gray-300">Usia Sdr Kandung
                        4</label>
                    <input type="text" id="usia_saudara_kandung_4" name="usia_saudara_kandung_4"
                        class="placeholder:text-gray-400 shadow-sm bg-gray-50 text-sm italic rounded-lg focus:ring-primary-500 focus:border-primary-500 block w-full p-2.5 {{ $errors->has('usia_saudara_kandung_4') ? 'border border-red-500' : 'border border-gray-300' }}"
                        placeholder="Usia saudara kandung 4" value="{{ old('usia_saudara_kandung_4') }}">
                    @error('usia_saudara_kandung_4')
                        <p class="mt-1 text-sm text-red-600">{{ $message }}</p>
                    @enderror
                </div>

                <div class="">
                    <label for="pekerjaan_saudara_kandung_4"
                        class="block mb-2 text-sm font-medium text-gray-900 dark:text-gray-300">Pekerjaan Sdr Kandung
                        4</label>
                    <input type="text" id="pekerjaan_saudara_kandung_4" name="pekerjaan_saudara_kandung_4"
                        class="placeholder:text-gray-400 shadow-sm bg-gray-50 text-sm italic rounded-lg focus:ring-primary-500 focus:border-primary-500 block w-full p-2.5 {{ $errors->has('pekerjaan_saudara_kandung_4') ? 'border border-red-500' : 'border border-gray-300' }}"
                        placeholder="Pekerjaan saudara kandung 4" value="{{ old('pekerjaan_saudara_kandung_4') }}">
                    @error('pekerjaan_saudara_kandung_4')
                        <p class="mt-1 text-sm text-red-600">{{ $message }}</p>
                    @enderror
                </div>
            </div>
        </div>

    </div>



</div>
