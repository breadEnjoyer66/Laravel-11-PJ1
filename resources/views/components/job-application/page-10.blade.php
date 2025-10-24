<!-- STEP 10 -->
<div x-show="step === 10" x-transition.opacity.duration.10ms class="">
    <h2 class="text-xl font-semibold mb-4">Page 10 - Emergency Contact Info</h2>
    <div class="space-y-8">

        <div>
            <h3 class="pl-1 text-xl font-bold">Informasi Kontak Darurat<span class="text-red-600 text-sm">*</span></h3>
            <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-2 gap-5 p-1">
                <div class="">
                    <label for="nama_kondar" class="block mb-2 text-sm font-medium text-gray-900 dark:text-gray-300">Nama
                        Lengkap <span class="text-red-600 text-sm">*</span></label>
                    <input type="text" id="nama_kondar" name="nama_kondar"
                        class="placeholder:text-gray-400 shadow-sm bg-gray-50 text-sm italic rounded-lg focus:ring-primary-500 focus:border-primary-500 block w-full p-2.5 {{ $errors->has('nama_kondar') ? 'border border-red-500' : 'border border-gray-300' }}"
                        placeholder="Nama lengkap kontak darurat" value="{{ old('nama_kondar') }}" required>
                    @error('nama_kondar')
                        <p class="mt-1 text-sm text-red-600">{{ $message }}</p>
                    @enderror
                </div>

                <div class="">
                    <label for="no_telp_kondar"
                        class="block mb-2 text-sm font-medium text-gray-900 dark:text-gray-300">No. Telp/ Whatsapp <span
                            class="text-red-600 text-sm">*</span>
                    </label>
                    <input type="text" id="no_telp_kondar" name="no_telp_kondar"
                        class="placeholder:text-gray-400 shadow-sm bg-gray-50 text-sm italic rounded-lg focus:ring-primary-500 focus:border-primary-500 block w-full p-2.5 {{ $errors->has('no_telp_kondar') ? 'border border-red-500' : 'border border-gray-300' }}"
                        placeholder="Contoh: 08123456789" value="{{ old('no_telp_kondar') }}" required>
                    @error('no_telp_kondar')
                        <p class="mt-1 text-sm text-red-600">{{ $message }}</p>
                    @enderror
                </div>

                <div class="">
                    <label for="alamat_kondar"
                        class="block mb-2 text-sm font-medium text-gray-900 dark:text-gray-300">Alamat <span
                            class="text-red-600 text-sm">*</span></label>
                    <input type="text" id="alamat_kondar" name="alamat_kondar"
                        class="placeholder:text-gray-400 shadow-sm bg-gray-50 text-sm italic rounded-lg focus:ring-primary-500 focus:border-primary-500 block w-full p-2.5 {{ $errors->has('alamat_kondar') ? 'border border-red-500' : 'border border-gray-300' }}"
                        placeholder="Alamat lengkap kontak darurat" value="{{ old('alamat_kondar') }}" required>
                    @error('alamat_kondar')
                        <p class="mt-1 text-sm text-red-600">{{ $message }}</p>
                    @enderror
                </div>

                <div class="">
                    <label for="hubungan_kondar"
                        class="block mb-2 text-sm font-medium text-gray-900 dark:text-gray-300">Hubungan <span
                            class="text-red-600 text-sm">*</span></label>
                    <input type="text" id="hubungan_kondar" name="hubungan_kondar"
                        class="placeholder:text-gray-400 shadow-sm bg-gray-50 text-sm italic rounded-lg focus:ring-primary-500 focus:border-primary-500 block w-full p-2.5 {{ $errors->has('hubungan_kondar') ? 'border border-red-500' : 'border border-gray-300' }}"
                        placeholder="Contoh: Orang tua / Suami / Istri / Saudara" value="{{ old('hubungan_kondar') }}"
                        required>
                    @error('hubungan_kondar')
                        <p class="mt-1 text-sm text-red-600">{{ $message }}</p>
                    @enderror
                </div>



            </div>
        </div>


    </div>
</div>
