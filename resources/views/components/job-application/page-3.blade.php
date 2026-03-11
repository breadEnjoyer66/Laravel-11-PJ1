<!-- STEP 3 -->
<div x-show="step === 3" x-transition.opacity.duration.10ms class="">
    <h2 class="text-xl font-semibold mb-4">Page 3 - Address Information</h2>
    <div class="space-y-8">
        <div class="grid grid-cols-1 gap-5 p-1">
            <div class="">
                <label for="alamat_domisili"
                    class="block mb-2 text-sm font-medium text-gray-900 dark:text-gray-300">Alamat Domisili <span
                        class="text-red-600 text-sm">*</span></label>
                <textarea name="alamat_domisili" id="alamat_domisili" cols="30" rows="4" required
                    class="placeholder:text-gray-400 shadow-sm bg-gray-50 text-sm italic rounded-lg focus:ring-primary-500 focus:border-primary-500 block w-full {{ $errors->has('alamat_domisili') ? 'border border-red-500' : 'border border-gray-300' }}"
                    placeholder="Alamat tempat tinggal saat ini">{{ old('alamat_domisili') }}</textarea>
                @error('alamat_domisili')
                    <p class="mt-1 text-sm text-red-600">{{ $message }}</p>
                @enderror
            </div>
        </div>
        <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-5 p-1">
            <div class="">
                <label for="kota_kabupaten"
                    class="block mb-2 text-sm font-medium text-gray-900 dark:text-gray-300">Kota/Kabupaten <span
                        class="text-red-600 text-sm">*</span></label>
                <input type="text" id="kota_kabupaten" name="kota_kabupaten"
                    class="placeholder:text-gray-400 shadow-sm bg-gray-50 text-sm italic rounded-lg focus:ring-primary-500 focus:border-primary-500 block w-full p-2.5 {{ $errors->has('kota_kabupaten') ? 'border border-red-500' : 'border border-gray-300' }}"
                    placeholder="Kota domisili" value="{{ old('kota_kabupaten') }}" required>
                @error('kota_kabupaten')
                    <p class="mt-1 text-sm text-red-600">{{ $message }}</p>
                @enderror
            </div>

            <div class="">
                <label for="kode_pos" class="block mb-2 text-sm font-medium text-gray-900 dark:text-gray-300">Kode Pos
                    <span class="text-red-600 text-sm">*</span></label>
                <input type="text" id="kode_pos" name="kode_pos"
                    class="placeholder:text-gray-400 shadow-sm bg-gray-50 text-sm italic rounded-lg focus:ring-primary-500 focus:border-primary-500 block w-full p-2.5 {{ $errors->has('kode_pos') ? 'border border-red-500' : 'border border-gray-300' }}"
                    placeholder="Kode pos anda" value="{{ old('kode_pos') }}" required>
                @error('kode_pos')
                    <p class="mt-1 text-sm text-red-600">{{ $message }}</p>
                @enderror
            </div>

            <div class="">
                <label for="tel_rumah" class="block mb-2 text-sm font-medium text-gray-900 dark:text-gray-300">Telepon
                    Rumah</label>
                <input type="text" id="tel_rumah" name="tel_rumah"
                    class="placeholder:text-gray-400 shadow-sm bg-gray-50 text-sm italic rounded-lg focus:ring-primary-500 focus:border-primary-500 block w-full p-2.5 {{ $errors->has('tel_rumah') ? 'border border-red-500' : 'border border-gray-300' }}"
                    placeholder="Telepon rumah" value="{{ old('tel_rumah') }}">
                @error('tel_rumah')
                    <p class="mt-1 text-sm text-red-600">{{ $message }}</p>
                @enderror
            </div>

        </div>
    </div>
</div>
