<!-- STEP 2 -->
<div x-show="step === 2" x-transition.opacity.duration.10ms class="">
    <h2 class="text-xl font-semibold mb-4">Page 2 - Family Information</h2>
    <div class="space-y-8">


        <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-5 p-1">
            <div class="">
                <label for="nama_lengkap" class="block mb-2 text-sm font-medium text-gray-900 dark:text-gray-300">Nama
                    Lengkap Ayah<span class="text-red-600 text-sm">*</span></label>
                <input type="text" id="nama_ayah" name="nama_ayah"
                    class="placeholder:text-gray-400 shadow-sm bg-gray-50 border border-gray-300 text-sm italic rounded-lg focus:ring-primary-500 focus:border-primary-500 block w-full p-2.5"
                    placeholder="Nama Ayah" required>
            </div>

            <div class="">
                <label for="nama_lengkap" class="block mb-2 text-sm font-medium text-gray-900 dark:text-gray-300">Tempat
                    Lahir Ayah <span class="text-red-600 text-sm">*</span></label>
                <input type="text" id="tempat_lahir_ayah" name="tempat_lahir_ayah"
                    class="placeholder:text-gray-400 shadow-sm bg-gray-50 border border-gray-300 text-sm italic rounded-lg focus:ring-primary-500 focus:border-primary-500 block w-full p-2.5"
                    placeholder="Tempat Lahir Ayah" required>
            </div>

            <div class="">
                <label for="nama_lengkap"
                    class="block mb-2 text-sm font-medium text-gray-900 dark:text-gray-300">Pekerjaan Ayah <span
                        class="text-red-600 text-sm">*</span></label>
                <input type="text" id="pekerjaan_ayah" name="pekerjaan_ayah"
                    class="placeholder:text-gray-400 shadow-sm bg-gray-50 border border-gray-300 text-sm italic rounded-lg focus:ring-primary-500 focus:border-primary-500 block w-full p-2.5"
                    placeholder="Pekerjaan Ayah" required>
            </div>
        </div>


        <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-5 p-1">
            <div class="">
                <label for="nama_lengkap" class="block mb-2 text-sm font-medium text-gray-900 dark:text-gray-300">Nama
                    Lengkap Ibu<span class="text-red-600 text-sm">*</span></label>
                <input type="text" id="nama_ibu" name="nama_ibu"
                    class="placeholder:text-gray-400 shadow-sm bg-gray-50 border border-gray-300 text-sm italic rounded-lg focus:ring-primary-500 focus:border-primary-500 block w-full p-2.5"
                    placeholder="Nama Ibu" required>
            </div>

            <div class="">
                <label for="nama_lengkap" class="block mb-2 text-sm font-medium text-gray-900 dark:text-gray-300">Tempat
                    Lahir Ibu<span class="text-red-600 text-sm">*</span></label>
                <input type="text" id="tempat_lahir_ibu" name="tempat_lahir_ibu"
                    class="placeholder:text-gray-400 shadow-sm bg-gray-50 border border-gray-300 text-sm italic rounded-lg focus:ring-primary-500 focus:border-primary-500 block w-full p-2.5"
                    placeholder="Tempat Lahir Ibu" required>
            </div>

            <div class="">
                <label for="nama_lengkap"
                    class="block mb-2 text-sm font-medium text-gray-900 dark:text-gray-300">Pekerjaan Ibu<span
                        class="text-red-600 text-sm">*</span></label>
                <input type="text" id="pekerjaan_ibu" name="pekerjaan_ibu"
                    class="placeholder:text-gray-400 shadow-sm bg-gray-50 border border-gray-300 text-sm italic rounded-lg focus:ring-primary-500 focus:border-primary-500 block w-full p-2.5"
                    placeholder="Pekerjaan Ibu" required>
            </div>
        </div>


        <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-5 p-1">
            <div class="">
                <label for="nama_lengkap" class="block mb-2 text-sm font-medium text-gray-900 dark:text-gray-300">Nama
                    Sdr Kandung 1</label>
                <input type="text" id="nama_saudara_kandung_1" name="nama_saudara_kandung_1"
                    class="placeholder:text-gray-400 shadow-sm bg-gray-50 border border-gray-300 text-sm italic rounded-lg focus:ring-primary-500 focus:border-primary-500 block w-full p-2.5"
                    placeholder="Nama saudara kandung 1">
            </div>

            <div class="">
                <label for="nama_lengkap" class="block mb-2 text-sm font-medium text-gray-900 dark:text-gray-300">Tempat
                    Lahir Sdr Kandung 1</label>
                <input type="text" id="tempat_lahir_saudara_kandung_1" name="tempat_lahir_saudara_kandung_1"
                    class="placeholder:text-gray-400 shadow-sm bg-gray-50 border border-gray-300 text-sm italic rounded-lg focus:ring-primary-500 focus:border-primary-500 block w-full p-2.5"
                    placeholder="Tempat lahir saudara kandung 1">
            </div>

            <div class="">
                <label for="nama_lengkap"
                    class="block mb-2 text-sm font-medium text-gray-900 dark:text-gray-300">Pekerjaan Sdr Kandung
                    1</label>
                <input type="text" id="pekerjaan_saudara_kandung_2" name="pekerjaan_saudara_kandung_2"
                    class="placeholder:text-gray-400 shadow-sm bg-gray-50 border border-gray-300 text-sm italic rounded-lg focus:ring-primary-500 focus:border-primary-500 block w-full p-2.5"
                    placeholder="Pekerjaan saudara kandung 1">
            </div>
        </div>


        <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-5 p-1">
            <div class="">
                <label for="nama_lengkap" class="block mb-2 text-sm font-medium text-gray-900 dark:text-gray-300">Nama
                    Sdr Kandung 2</label>
                <input type="text" id="nama_saudara_kandung_2" name="nama_saudara_kandung_2"
                    class="placeholder:text-gray-400 shadow-sm bg-gray-50 border border-gray-300 text-sm italic rounded-lg focus:ring-primary-500 focus:border-primary-500 block w-full p-2.5"
                    placeholder="Nama saudara kandung 2">
            </div>

            <div class="">
                <label for="nama_lengkap" class="block mb-2 text-sm font-medium text-gray-900 dark:text-gray-300">Tempat
                    Lahir Sdr Kandung 2</label>
                <input type="text" id="tempat_lahir_saudara_kandung_2" name="tempat_lahir_saudara_kandung_2"
                    class="placeholder:text-gray-400 shadow-sm bg-gray-50 border border-gray-300 text-sm italic rounded-lg focus:ring-primary-500 focus:border-primary-500 block w-full p-2.5"
                    placeholder="Tempat lahir saudara kandung 2">
            </div>

            <div class="">
                <label for="nama_lengkap"
                    class="block mb-2 text-sm font-medium text-gray-900 dark:text-gray-300">Pekerjaan Sdr Kandung
                    2</label>
                <input type="text" id="pekerjaan_saudara_kandung_2" name="pekerjaan_saudara_kandung_2"
                    class="placeholder:text-gray-400 shadow-sm bg-gray-50 border border-gray-300 text-sm italic rounded-lg focus:ring-primary-500 focus:border-primary-500 block w-full p-2.5"
                    placeholder="Pekerjaan saudara kandung 2">
            </div>
        </div>


        <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-5 p-1">
            <div class="">
                <label for="nama_lengkap" class="block mb-2 text-sm font-medium text-gray-900 dark:text-gray-300">Nama
                    Sdr Kandung 3</label>
                <input type="text" id="nama_saudara_kandung_3" name="nama_saudara_kandung_3"
                    class="placeholder:text-gray-400 shadow-sm bg-gray-50 border border-gray-300 text-sm italic rounded-lg focus:ring-primary-500 focus:border-primary-500 block w-full p-2.5"
                    placeholder="Nama saudara kandung 3">
            </div>

            <div class="">
                <label for="nama_lengkap"
                    class="block mb-2 text-sm font-medium text-gray-900 dark:text-gray-300">Tempat
                    Lahir Sdr Kandung 3</label>
                <input type="text" id="tempat_lahir_saudara_kandung_3" name="tempat_lahir_saudara_kandung_3"
                    class="placeholder:text-gray-400 shadow-sm bg-gray-50 border border-gray-300 text-sm italic rounded-lg focus:ring-primary-500 focus:border-primary-500 block w-full p-2.5"
                    placeholder="Tempat lahir saudara kandung 3">
            </div>

            <div class="">
                <label for="nama_lengkap"
                    class="block mb-2 text-sm font-medium text-gray-900 dark:text-gray-300">Pekerjaan Sdr Kandung
                    3</label>
                <input type="text" id="pekerjaan_saudara_kandung_3" name="pekerjaan_saudara_kandung_3"
                    class="placeholder:text-gray-400 shadow-sm bg-gray-50 border border-gray-300 text-sm italic rounded-lg focus:ring-primary-500 focus:border-primary-500 block w-full p-2.5"
                    placeholder="Pekerjaan saudara kandung 3">
            </div>
        </div>

    </div>



</div>
