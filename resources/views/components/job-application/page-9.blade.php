<!-- STEP 9 -->
<div x-show="step === 9" x-transition.opacity.duration.10ms class="">
    <h2 class="text-xl font-semibold mb-4">Page 9 - Sebutkan 2 Orang Bukan Keluarga Yang Dapat Memberikan Keterangan
        Tentang Anda (Referensi)</h2>
    <div class="space-y-8">

        <div>
            <h3 class="pl-1 text-xl font-bold">Kontak Referensi 1 <span class="text-red-600 text-sm">*</span></h3>
            <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-2 gap-5 p-1">
                <div class="">
                    <label for="nama_referensi_1"
                        class="block mb-2 text-sm font-medium text-gray-900 dark:text-gray-300">Nama Lengkap <span
                            class="text-red-600 text-sm">*</span></label>
                    <input type="text" id="nama_referensi_1" name="nama_referensi_1"
                        class="placeholder:text-gray-400 shadow-sm bg-gray-50 text-sm italic rounded-lg focus:ring-primary-500 focus:border-primary-500 block w-full p-2.5 {{ $errors->has('nama_referensi_1') ? 'border border-red-500' : 'border border-gray-300' }}"
                        placeholder="Nama lengkap referensi" value="{{ old('nama_referensi_1') }}" required>
                    @error('nama_referensi_1')
                        <p class="mt-1 text-sm text-red-600">{{ $message }}</p>
                    @enderror
                </div>

                <div class="">
                    <label for="no_telp_referensi_1"
                        class="block mb-2 text-sm font-medium text-gray-900 dark:text-gray-300">No. Telp/ Whatsapp <span
                            class="text-red-600 text-sm">*</span>
                    </label>
                    <input type="text" id="no_telp_referensi_1" name="no_telp_referensi_1"
                        class="placeholder:text-gray-400 shadow-sm bg-gray-50 text-sm italic rounded-lg focus:ring-primary-500 focus:border-primary-500 block w-full p-2.5 {{ $errors->has('no_telp_referensi_1') ? 'border border-red-500' : 'border border-gray-300' }}"
                        placeholder="Contoh: 08123456789" value="{{ old('no_telp_referensi_1') }}" required>
                    @error('no_telp_referensi_1')
                        <p class="mt-1 text-sm text-red-600">{{ $message }}</p>
                    @enderror
                </div>

                <div class="">
                    <label for="perusahaan_referensi_1"
                        class="block mb-2 text-sm font-medium text-gray-900 dark:text-gray-300">Perusahaan <span
                            class="text-red-600 text-sm">*</span></label>
                    <input type="text" id="perusahaan_referensi_1" name="perusahaan_referensi_1"
                        class="placeholder:text-gray-400 shadow-sm bg-gray-50 text-sm italic rounded-lg focus:ring-primary-500 focus:border-primary-500 block w-full p-2.5 {{ $errors->has('perusahaan_referensi_1') ? 'border border-red-500' : 'border border-gray-300' }}"
                        placeholder="Nama perusahaan" value="{{ old('perusahaan_referensi_1') }}" required>
                    @error('perusahaan_referensi_1')
                        <p class="mt-1 text-sm text-red-600">{{ $message }}</p>
                    @enderror
                </div>

                <div class="">
                    <label for="posisi_referensi_1"
                        class="block mb-2 text-sm font-medium text-gray-900 dark:text-gray-300">Posisi/ Jabatan <span
                            class="text-red-600 text-sm">*</span></label>
                    <input type="text" id="posisi_referensi_1" name="posisi_referensi_1"
                        class="placeholder:text-gray-400 shadow-sm bg-gray-50 text-sm italic rounded-lg focus:ring-primary-500 focus:border-primary-500 block w-full p-2.5 {{ $errors->has('posisi_referensi_1') ? 'border border-red-500' : 'border border-gray-300' }}"
                        placeholder="Posisi/jabatan di perusahaan" value="{{ old('posisi_referensi_1') }}" required>
                    @error('posisi_referensi_1')
                        <p class="mt-1 text-sm text-red-600">{{ $message }}</p>
                    @enderror
                </div>



            </div>
        </div>

        <div>
            <h3 class="pl-1 text-xl font-bold">Kontak Referensi 2 <span class="text-red-600 text-sm">*</span></h3>
            <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-2 gap-5 p-1">
                <div class="">
                    <label for="nama_referensi_2"
                        class="block mb-2 text-sm font-medium text-gray-900 dark:text-gray-300">Nama Lengkap <span
                            class="text-red-600 text-sm">*</span></label>
                    <input type="text" id="nama_referensi_2" name="nama_referensi_2"
                        class="placeholder:text-gray-400 shadow-sm bg-gray-50 text-sm italic rounded-lg focus:ring-primary-500 focus:border-primary-500 block w-full p-2.5 {{ $errors->has('nama_referensi_2') ? 'border border-red-500' : 'border border-gray-300' }}"
                        placeholder="Nama lengkap referensi" value="{{ old('nama_referensi_2') }}" required>
                    @error('nama_referensi_2')
                        <p class="mt-1 text-sm text-red-600">{{ $message }}</p>
                    @enderror
                </div>

                <div class="">
                    <label for="no_telp_referensi_2"
                        class="block mb-2 text-sm font-medium text-gray-900 dark:text-gray-300">No. Telp/ Whatsapp <span
                            class="text-red-600 text-sm">*</span>
                    </label>
                    <input type="text" id="no_telp_referensi_2" name="no_telp_referensi_2"
                        class="placeholder:text-gray-400 shadow-sm bg-gray-50 text-sm italic rounded-lg focus:ring-primary-500 focus:border-primary-500 block w-full p-2.5 {{ $errors->has('no_telp_referensi_2') ? 'border border-red-500' : 'border border-gray-300' }}"
                        placeholder="Contoh: 08123456789" value="{{ old('no_telp_referensi_2') }}" required>
                    @error('no_telp_referensi_2')
                        <p class="mt-1 text-sm text-red-600">{{ $message }}</p>
                    @enderror
                </div>

                <div class="">
                    <label for="perusahaan_referensi_2"
                        class="block mb-2 text-sm font-medium text-gray-900 dark:text-gray-300">Perusahaan <span
                            class="text-red-600 text-sm">*</span></label>
                    <input type="text" id="perusahaan_referensi_2" name="perusahaan_referensi_2"
                        class="placeholder:text-gray-400 shadow-sm bg-gray-50 text-sm italic rounded-lg focus:ring-primary-500 focus:border-primary-500 block w-full p-2.5 {{ $errors->has('perusahaan_referensi_2') ? 'border border-red-500' : 'border border-gray-300' }}"
                        placeholder="Nama perusahaan" value="{{ old('perusahaan_referensi_2') }}" required>
                    @error('perusahaan_referensi_2')
                        <p class="mt-1 text-sm text-red-600">{{ $message }}</p>
                    @enderror
                </div>

                <div class="">
                    <label for="posisi_referensi_2"
                        class="block mb-2 text-sm font-medium text-gray-900 dark:text-gray-300">Posisi/ Jabatan <span
                            class="text-red-600 text-sm">*</span></label>
                    <input type="text" id="posisi_referensi_2" name="posisi_referensi_2"
                        class="placeholder:text-gray-400 shadow-sm bg-gray-50 text-sm italic rounded-lg focus:ring-primary-500 focus:border-primary-500 block w-full p-2.5 {{ $errors->has('posisi_referensi_2') ? 'border border-red-500' : 'border border-gray-300' }}"
                        placeholder="Posisi/jabatan di perusahaan" value="{{ old('posisi_referensi_2') }}" required>
                    @error('posisi_referensi_2')
                        <p class="mt-1 text-sm text-red-600">{{ $message }}</p>
                    @enderror
                </div>



            </div>
        </div>

    </div>
</div>
