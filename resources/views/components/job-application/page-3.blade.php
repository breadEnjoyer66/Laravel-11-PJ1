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
                    class="placeholder:text-gray-400 shadow-sm bg-gray-50 border border-gray-300 text-sm italic rounded-lg focus:ring-primary-500 focus:border-primary-500 block w-full"></textarea>

            </div>
        </div>
        <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-5 p-1">
            <div class="">
                <label for="kota_kabupaten"
                    class="block mb-2 text-sm font-medium text-gray-900 dark:text-gray-300">Kota/Kabupaten <span
                        class="text-red-600 text-sm">*</span></label>
                <input type="text" id="kota_kabupaten" name="kota_kabupaten"
                    class="placeholder:text-gray-400 shadow-sm bg-gray-50 border border-gray-300 text-sm italic rounded-lg focus:ring-primary-500 focus:border-primary-500 block w-full p-2.5 "
                    placeholder="Kota domisili" required>
            </div>

            <div class="">
                <label for="kode_pos" class="block mb-2 text-sm font-medium text-gray-900 dark:text-gray-300">Kode Pos
                    <span class="text-red-600 text-sm">*</span></label>
                <input type="text" id="kode_pos" name="kode_pos"
                    class="placeholder:text-gray-400 shadow-sm bg-gray-50 border border-gray-300 text-sm italic rounded-lg focus:ring-primary-500 focus:border-primary-500 block w-full p-2.5 "
                    placeholder="Kode pos anda" required>
            </div>

            <div class="">
                <label for="tel_rumah" class="block mb-2 text-sm font-medium text-gray-900 dark:text-gray-300">Telepon
                    Rumah
                    <span class="text-red-600 text-sm">*</span></label>
                <input type="tel" id="tel_rumah" name="tel_rumah"
                    class="placeholder:text-gray-400 shadow-sm bg-gray-50 border border-gray-300 text-sm italic rounded-lg focus:ring-primary-500 focus:border-primary-500 block w-full p-2.5 "
                    placeholder="Telepon rumah" required>
            </div>

        </div>
    </div>
</div>
