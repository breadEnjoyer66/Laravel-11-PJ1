<!-- STEP 8 -->
<div x-show="step === 8" x-transition.opacity.duration.10ms class="">
    <h2 class="text-xl font-semibold mb-4">Page 8 - Organization</h2>
    <div class="space-y-8">

        <div>

            <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-5 p-1">

                <div class="">
                    <label for="nama_organisasi"
                        class="block mb-2 text-sm font-medium text-gray-900 dark:text-gray-300">Nama Organisasi</label>
                    <input type="text" id="nama_organisasi" name="nama_organisasi"
                        class="placeholder:text-gray-400 shadow-sm bg-gray-50 text-sm italic rounded-lg focus:ring-primary-500 focus:border-primary-500 block w-full p-2.5 {{ $errors->has('nama_organisasi') ? 'border border-red-500' : 'border border-gray-300' }}"
                        placeholder="Contoh: Karang Taruna" value="{{ old('nama_organisasi') }}">
                    @error('nama_organisasi')
                        <p class="mt-1 text-sm text-red-600">{{ $message }}</p>
                    @enderror
                </div>

                <div class="">
                    <label for="alamat_organisasi"
                        class="block mb-2 text-sm font-medium text-gray-900 dark:text-gray-300">Alamat
                        Organisasi</label>
                    <input type="text" id="alamat_organisasi" name="alamat_organisasi"
                        class="placeholder:text-gray-400 shadow-sm bg-gray-50 text-sm italic rounded-lg focus:ring-primary-500 focus:border-primary-500 block w-full p-2.5 {{ $errors->has('alamat_organisasi') ? 'border border-red-500' : 'border border-gray-300' }}"
                        placeholder="Contoh: Jl. Contoh No. 123, Jakarta" value="{{ old('alamat_organisasi') }}">
                    @error('alamat_organisasi')
                        <p class="mt-1 text-sm text-red-600">{{ $message }}</p>
                    @enderror
                </div>

                <div class="">
                    <label for="posisi_organisasi"
                        class="block mb-2 text-sm font-medium text-gray-900 dark:text-gray-300">Posisi</label>
                    <input type="text" id="posisi_organisasi" name="posisi_organisasi"
                        class="placeholder:text-gray-400 shadow-sm bg-gray-50 text-sm italic rounded-lg focus:ring-primary-500 focus:border-primary-500 block w-full p-2.5 {{ $errors->has('posisi_organisasi') ? 'border border-red-500' : 'border border-gray-300' }}"
                        placeholder="Contoh: Ketua / Bendahara / Anggota" value="{{ old('posisi_organisasi') }}">
                    @error('posisi_organisasi')
                        <p class="mt-1 text-sm text-red-600">{{ $message }}</p>
                    @enderror
                </div>



            </div>
        </div>

    </div>
</div>
