<!-- STEP 1 -->
<div x-show="step === 1" x-transition.opacity.duration.10ms class="">
    <h2 class="text-xl font-semibold mb-4">Page 1 - Personal Information</h2>
    <div class="space-y-8">
        <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-5 p-1">
            <div class="">
                <label for="pas_foto" class="block text-sm font-medium text-gray-900 dark:text-gray-300">Pas Foto <span
                        class="text-red-600 text-sm">*</span>
                    <label for="pas_foto"
                        class="mt-2 shadow-sm bg-gray-50 border-2 border-dashed border-slate-200 text-gray-400 text-sm italic rounded-lg focus:ring-primary-500 focus:border-primary-500 block w-full">

                        <input type="file" name="pas_foto" id="pas_foto" class="" placeholder="" required>
                    </label>
            </div>

            <div class="">
                <label for="nama_lengkap" class="block mb-2 text-sm font-medium text-gray-900 dark:text-gray-300">Nama
                    Lengkap <span class="text-red-600 text-sm">*</span></label>
                <input type="text" id="nama_lengkap" name="nama_lengkap"
                    class="placeholder:text-gray-400 shadow-sm bg-gray-50 border border-gray-300 text-sm italic rounded-lg focus:ring-primary-500 focus:border-primary-500 block w-full p-2.5 "
                    placeholder="John Doe Suyanto" required>
            </div>

            <div class="">
                <label for="email" class="block mb-2 text-sm font-medium text-gray-900 dark:text-gray-300">Alamat
                    Email <span class="text-red-600 text-sm">*</span></label>
                <input type="email" id="email" name="email"
                    class="placeholder:text-gray-400 shadow-sm bg-gray-50 border border-gray-300 text-sm italic rounded-lg focus:ring-primary-500 focus:border-primary-500 block w-full p-2.5 "
                    placeholder="johndoe@example.com" required>
            </div>

        </div>

        {{-- line2 --}}
        <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-5 p-1">
            <div class="">
                <label for="no_hp_whatsapp" class="block mb-2 text-sm font-medium text-gray-900 dark:text-gray-300">No.
                    HP/
                    Whatsapp <span class="text-red-600 text-sm">*</span></label>
                <input type="tel" id="no_hp_whatsapp" name="no_hp_whatsapp"
                    class="placeholder:text-gray-400 shadow-sm bg-gray-50 border border-gray-300 text-sm italic rounded-lg focus:ring-primary-500 focus:border-primary-500 block w-full p-2.5 "
                    placeholder="082246672617" required>
            </div>

            <div class="">
                <label for="jenis_kelamin" class="block mb-2 text-sm font-medium text-gray-900 dark:text-gray-300">Jenis
                    Kelamin <span class="text-red-600 text-sm">*</span></label>
                <select name="jenis_kelamin" id="jenis_kelamin"
                    class="shadow-sm bg-gray-50 border border-gray-300 text-sm italic rounded-lg focus:ring-primary-500 focus:border-primary-500 block w-full p-2.5 ">
                    <option disabled selected>Pilih jenis kelamin</option>
                    <option value="Laki-laki">Laki-laki</option>
                    <option value="Perempuan">Perempuan</option>
                </select>
            </div>

            <div class="">
                <label for="status_kawin" class="block mb-2 text-sm font-medium text-gray-900 dark:text-gray-300">Status
                    Kawin <span class="text-red-600 text-sm">*</span></label>
                <select name="status_kawin" id="status_kawin"
                    class="shadow-sm bg-gray-50 border border-gray-300 text-sm italic rounded-lg focus:ring-primary-500 focus:border-primary-500 block w-full p-2.5 ">
                    <option disabled selected>Pilih status kawin</option>
                    <option value="Menikah">Menikah</option>
                    <option value="Belum/Tidak Sedang Menikah">Belum/Tidak Sedang Menikah</option>
                </select>
            </div>
        </div>
        {{-- end of line 2 --}}

        {{-- line3 --}}
        <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-5 p-1">
            <div class="">
                <label for="agama" class="block mb-2 text-sm font-medium text-gray-900 dark:text-gray-300">Agama
                    <span class="text-red-600 text-sm">*</span></label>
                <select name="agama" id="agama"
                    class="placeholder:text-gray-400 shadow-sm bg-gray-50 border border-gray-300 text-sm italic rounded-lg focus:ring-primary-500 focus:border-primary-500 block w-full p-2.5 ">
                    <option disabled selected class="">Pilih agama</option>
                    <option value="Islam">Islam</option>
                    <option value="Katolik">Katolik</option>
                    <option value="Protestan">Protestan</option>
                    <option value="Budha">Budha</option>
                    <option value="Konghuchu">Konghuchu</option>
                </select>
            </div>
            <div class="">
                <label for="tempat_lahir" class="block mb-2 text-sm font-medium text-gray-900 dark:text-gray-300">Tempat
                    Lahir <span class="text-red-600 text-sm">*</span></label>
                <input type="tempat_lahir" id="tempat_lahir"
                    class="placeholder:text-gray-400 shadow-sm bg-gray-50 border border-gray-300 text-sm italic rounded-lg focus:ring-primary-500 focus:border-primary-500 block w-full p-2.5 "
                    placeholder="Kota kelahiran" required>
            </div>

            <div class="">
                <label for="tanggal_lahir"
                    class="block mb-2 text-sm font-medium text-gray-900 dark:text-gray-300">Tanggal Lahir <span
                        class="text-red-600 text-sm">*</span></label>

                <div class="relative">
                    <div class="absolute inset-y-0 start-0 flex items-center ps-3.5 pointer-events-none">
                        <svg class="w-4 h-4 text-gray-500 dark:text-gray-400" aria-hidden="true"
                            xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 20 20">
                            <path
                                d="M20 4a2 2 0 0 0-2-2h-2V1a1 1 0 0 0-2 0v1h-3V1a1 1 0 0 0-2 0v1H6V1a1 1 0 0 0-2 0v1H2a2 2 0 0 0-2 2v2h20V4ZM0 18a2 2 0 0 0 2 2h16a2 2 0 0 0 2-2V8H0v10Zm5-8h10a1 1 0 0 1 0 2H5a1 1 0 0 1 0-2Z" />
                        </svg>
                    </div>
                    <input datepicker id="tanggal_lahir" name="tanggal_lahir" type="text"
                        class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full ps-10 p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                        placeholder="Pilih tanggal lahir">
                </div>
            </div>

        </div>
        {{-- end of line 3 --}}

        {{-- line4 --}}
        <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-5 p-1">


            <div class="">
                <label for="golongan_darah"
                    class="block mb-2 text-sm font-medium text-gray-900 dark:text-gray-300">Golongan Darah <span
                        class="text-red-600 text-sm">*</span></label>
                <input type="text" name="golongan_darah" id="golongan_darah"
                    class="placeholder:text-gray-400 shadow-sm bg-gray-50 border border-gray-300 text-sm italic rounded-lg focus:ring-primary-500 focus:border-primary-500 block w-full p-2.5"
                    placeholder="Golongan darah">
            </div>

            <div class="">
                <label for="kondisi_kesehatan"
                    class="block mb-2 text-sm font-medium text-gray-900 dark:text-gray-300">Kondisi Kesehatan <span
                        class="text-red-600 text-sm">*</span></label>
                <select name="kondisi_kesehatan" id="kondisi_kesehatan"
                    class="shadow-sm bg-gray-50 border border-gray-300 text-sm italic rounded-lg focus:ring-primary-500 focus:border-primary-500 block w-full p-2.5 ">
                    <option disabled selected>Kondisi kesehatan anda</option>
                    <option value="Sehat">Sehat</option>
                    <option value="Tidak Sehat">Tidak Sehat</option>
                </select>
            </div>

            <div class="">
                <label for="berat_badan" class="block mb-2 text-sm font-medium text-gray-900 dark:text-gray-300">Berat
                    Badan (KG) <span class="text-red-600 text-sm">*</span></label>
                <input type="number" name="berat_badan" id="berat_badan"
                    class="placeholder:text-gray-400 shadow-sm bg-gray-50 border border-gray-300 text-sm italic rounded-lg focus:ring-primary-500 focus:border-primary-500 block w-full p-2.5"
                    placeholder="Berat badan (KG)">
            </div>

            <div class="">
                <label for="tinggi_badan"
                    class="block mb-2 text-sm font-medium text-gray-900 dark:text-gray-300">Tinggi
                    Badan (CM) <span class="text-red-600 text-sm">*</span></label>
                <input type="number" name="tinggi_badan" id="tinggi_badan"
                    class="placeholder:text-gray-400 shadow-sm bg-gray-50 border border-gray-300 text-sm italic rounded-lg focus:ring-primary-500 focus:border-primary-500 block w-full p-2.5"
                    placeholder="Tinggi badan (CM)">
            </div>
        </div>
        {{-- end of line 4 --}}
    </div>
</div>
