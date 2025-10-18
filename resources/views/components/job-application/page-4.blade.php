<!-- STEP 4 -->
<div x-show="step === 4" x-transition.opacity.duration.10ms class="">
    <h2 class="text-xl font-semibold mb-4">Page 4 - Education History</h2>
    <div class="space-y-8">
        <div>
            <h3 class="pl-1 text-xl font-bold">SMA/SMK/SLTA</h3>
            <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-5 p-1">
                <div class="">

                    <label for="sma_dari" class="block mb-2 text-sm font-medium text-gray-900 dark:text-gray-300">
                        Dari Tahun <span class="text-red-600 text-sm">*</span></label>

                    <div class="relative">
                        <div class="absolute inset-y-0 start-0 flex items-center ps-3.5 pointer-events-none">
                            <svg class="w-4 h-4 text-gray-500 dark:text-gray-400" aria-hidden="true"
                                xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 20 20">
                                <path
                                    d="M20 4a2 2 0 0 0-2-2h-2V1a1 1 0 0 0-2 0v1h-3V1a1 1 0 0 0-2 0v1H6V1a1 1 0 0 0-2 0v1H2a2 2 0 0 0-2 2v2h20V4ZM0 18a2 2 0 0 0 2 2h16a2 2 0 0 0 2-2V8H0v10Zm5-8h10a1 1 0 0 1 0 2H5a1 1 0 0 1 0-2Z" />
                            </svg>
                        </div>
                        <input required datepicker id="sma_dari" name="sma_dari" type="text"
                            class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full ps-10 p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                            placeholder="dari tahun">
                    </div>
                </div>

                <div class="">

                    <label for="sma_sampai" class="block mb-2 text-sm font-medium text-gray-900 dark:text-gray-300">
                        Sampai Tahun <span class="text-red-600 text-sm">*</span></label>

                    <div class="relative">
                        <div class="absolute inset-y-0 start-0 flex items-center ps-3.5 pointer-events-none">
                            <svg class="w-4 h-4 text-gray-500 dark:text-gray-400" aria-hidden="true"
                                xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 20 20">
                                <path
                                    d="M20 4a2 2 0 0 0-2-2h-2V1a1 1 0 0 0-2 0v1h-3V1a1 1 0 0 0-2 0v1H6V1a1 1 0 0 0-2 0v1H2a2 2 0 0 0-2 2v2h20V4ZM0 18a2 2 0 0 0 2 2h16a2 2 0 0 0 2-2V8H0v10Zm5-8h10a1 1 0 0 1 0 2H5a1 1 0 0 1 0-2Z" />
                            </svg>
                        </div>
                        <input required datepicker id="sma_sampai" name="sma_sampai" type="text"
                            class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full ps-10 p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                            placeholder="sampai tahun">
                    </div>
                </div>

                <div class="">
                    <label for="sma_nama" class="block mb-2 text-sm font-medium text-gray-900 dark:text-gray-300">Nama
                        Sekolah
                        <span class="text-red-600 text-sm">*</span></label>
                    <input type="text" id="sma_nama" name="sma_nama"
                        class="placeholder:text-gray-400 shadow-sm bg-gray-50 border border-gray-300 text-sm italic rounded-lg focus:ring-primary-500 focus:border-primary-500 block w-full p-2.5 "
                        placeholder="Nama sekolah - kota" required>
                </div>

                <div class="">
                    <label for="sma_jurusan"
                        class="block mb-2 text-sm font-medium text-gray-900 dark:text-gray-300">Jurusan
                        <span class="text-red-600 text-sm">*</span></label>
                    <input type="text" id="sma_jurusan" name="sma_jurusan"
                        class="placeholder:text-gray-400 shadow-sm bg-gray-50 border border-gray-300 text-sm italic rounded-lg focus:ring-primary-500 focus:border-primary-500 block w-full p-2.5 "
                        placeholder="Jurusan" required>
                </div>

                <div class="">
                    <label for="sma_status_lulus"
                        class="block mb-2 text-sm font-medium text-gray-900 dark:text-gray-300">Jurusan
                        <span class="text-red-600 text-sm">*</span></label>
                    <select name="sma_status_lulus" id="sma_status_lulus" required
                        class="shadow-sm bg-gray-50 border border-gray-300 text-sm italic rounded-lg focus:ring-primary-500 focus:border-primary-500 block w-full p-2.5 ">
                        <option disabled selected>Status Kelulusan</option>
                        <option value="Lulus">Lulus</option>
                        <option value="Tidak Lulus">Tidak Lulus</option>
                    </select>
                </div>

            </div>
        </div>

        <div>
            <h3 class="pl-1 text-xl font-bold">Diploma</h3>
            <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-5 p-1">
                <div class="">

                    <label for="diploma_dari" class="block mb-2 text-sm font-medium text-gray-900 dark:text-gray-300">
                        Dari Tahun</span></label>

                    <div class="relative">
                        <div class="absolute inset-y-0 start-0 flex items-center ps-3.5 pointer-events-none">
                            <svg class="w-4 h-4 text-gray-500 dark:text-gray-400" aria-hidden="true"
                                xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 20 20">
                                <path
                                    d="M20 4a2 2 0 0 0-2-2h-2V1a1 1 0 0 0-2 0v1h-3V1a1 1 0 0 0-2 0v1H6V1a1 1 0 0 0-2 0v1H2a2 2 0 0 0-2 2v2h20V4ZM0 18a2 2 0 0 0 2 2h16a2 2 0 0 0 2-2V8H0v10Zm5-8h10a1 1 0 0 1 0 2H5a1 1 0 0 1 0-2Z" />
                            </svg>
                        </div>
                        <input datepicker id="diploma_dari" name="diploma_dari" type="text"
                            class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full ps-10 p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                            placeholder="dari tahun">
                    </div>
                </div>

                <div class="">

                    <label for="diploma_sampai" class="block mb-2 text-sm font-medium text-gray-900 dark:text-gray-300">
                        Sampai Tahun</span></label>

                    <div class="relative">
                        <div class="absolute inset-y-0 start-0 flex items-center ps-3.5 pointer-events-none">
                            <svg class="w-4 h-4 text-gray-500 dark:text-gray-400" aria-hidden="true"
                                xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 20 20">
                                <path
                                    d="M20 4a2 2 0 0 0-2-2h-2V1a1 1 0 0 0-2 0v1h-3V1a1 1 0 0 0-2 0v1H6V1a1 1 0 0 0-2 0v1H2a2 2 0 0 0-2 2v2h20V4ZM0 18a2 2 0 0 0 2 2h16a2 2 0 0 0 2-2V8H0v10Zm5-8h10a1 1 0 0 1 0 2H5a1 1 0 0 1 0-2Z" />
                            </svg>
                        </div>
                        <input datepicker id="diploma_sampai" name="diploma_sampai" type="text"
                            class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full ps-10 p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                            placeholder="sampai tahun">
                    </div>
                </div>

                <div class="">
                    <label for="diploma_nama_univ"
                        class="block mb-2 text-sm font-medium text-gray-900 dark:text-gray-300">Nama
                        Univ/ Institusi
                        </span></label>
                    <input type="text" id="diploma_nama_univ" name="diploma_nama_univ"
                        class="placeholder:text-gray-400 shadow-sm bg-gray-50 border border-gray-300 text-sm italic rounded-lg focus:ring-primary-500 focus:border-primary-500 block w-full p-2.5 "
                        placeholder="Nama Univ/Institut - kota">
                </div>

                <div class="">
                    <label for="diploma_jurusan"
                        class="block mb-2 text-sm font-medium text-gray-900 dark:text-gray-300">Jurusan
                        </span></label>
                    <input type="text" id="diploma_jurusan" name="diploma_jurusan"
                        class="placeholder:text-gray-400 shadow-sm bg-gray-50 border border-gray-300 text-sm italic rounded-lg focus:ring-primary-500 focus:border-primary-500 block w-full p-2.5 "
                        placeholder="Jurusan diploma">
                </div>

                <div class="">
                    <label for="diploma_ipk"
                        class="block mb-2 text-sm font-medium text-gray-900 dark:text-gray-300">IPK Diploma
                        </span></label>
                    <input type="text" id="diploma_ipk" name="diploma_ipk"
                        class="placeholder:text-gray-400 shadow-sm bg-gray-50 border border-gray-300 text-sm italic rounded-lg focus:ring-primary-500 focus:border-primary-500 block w-full p-2.5 "
                        placeholder="IPK diploma">
                </div>

                <div class="">
                    <label for="diploma_status_lulus"
                        class="block mb-2 text-sm font-medium text-gray-900 dark:text-gray-300">Jurusan
                        </span></label>
                    <select name="diploma_status_lulus" id="diploma_status_lulus"
                        class="shadow-sm bg-gray-50 border border-gray-300 text-sm italic rounded-lg focus:ring-primary-500 focus:border-primary-500 block w-full p-2.5 ">
                        <option disabled selected>Status Kelulusan</option>
                        <option value="Lulus">Lulus</option>
                        <option value="Tidak Lulus">Tidak Lulus</option>
                    </select>
                </div>

            </div>
        </div>

        <div>
            <h3 class="pl-1 text-xl font-bold">Strata 1</h3>
            <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-5 p-1">
                <div class="">

                    <label for="s1_dari" class="block mb-2 text-sm font-medium text-gray-900 dark:text-gray-300">
                        Dari Tahun</span></label>

                    <div class="relative">
                        <div class="absolute inset-y-0 start-0 flex items-center ps-3.5 pointer-events-none">
                            <svg class="w-4 h-4 text-gray-500 dark:text-gray-400" aria-hidden="true"
                                xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 20 20">
                                <path
                                    d="M20 4a2 2 0 0 0-2-2h-2V1a1 1 0 0 0-2 0v1h-3V1a1 1 0 0 0-2 0v1H6V1a1 1 0 0 0-2 0v1H2a2 2 0 0 0-2 2v2h20V4ZM0 18a2 2 0 0 0 2 2h16a2 2 0 0 0 2-2V8H0v10Zm5-8h10a1 1 0 0 1 0 2H5a1 1 0 0 1 0-2Z" />
                            </svg>
                        </div>
                        <input datepicker id="s1_dari" name="s1_dari" type="text"
                            class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full ps-10 p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                            placeholder="dari tahun">
                    </div>
                </div>

                <div class="">

                    <label for="s1_sampai" class="block mb-2 text-sm font-medium text-gray-900 dark:text-gray-300">
                        Sampai Tahun</span></label>

                    <div class="relative">
                        <div class="absolute inset-y-0 start-0 flex items-center ps-3.5 pointer-events-none">
                            <svg class="w-4 h-4 text-gray-500 dark:text-gray-400" aria-hidden="true"
                                xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 20 20">
                                <path
                                    d="M20 4a2 2 0 0 0-2-2h-2V1a1 1 0 0 0-2 0v1h-3V1a1 1 0 0 0-2 0v1H6V1a1 1 0 0 0-2 0v1H2a2 2 0 0 0-2 2v2h20V4ZM0 18a2 2 0 0 0 2 2h16a2 2 0 0 0 2-2V8H0v10Zm5-8h10a1 1 0 0 1 0 2H5a1 1 0 0 1 0-2Z" />
                            </svg>
                        </div>
                        <input datepicker id="s1_sampai" name="s1_sampai" type="text"
                            class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full ps-10 p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                            placeholder="sampai tahun">
                    </div>
                </div>

                <div class="">
                    <label for="s1_nama_univ"
                        class="block mb-2 text-sm font-medium text-gray-900 dark:text-gray-300">Nama
                        Universitas
                        </span></label>
                    <input type="text" id="s1_nama_univ" name="s1_nama_univ"
                        class="placeholder:text-gray-400 shadow-sm bg-gray-50 border border-gray-300 text-sm italic rounded-lg focus:ring-primary-500 focus:border-primary-500 block w-full p-2.5 "
                        placeholder="Nama Univ/Institut - kota">
                </div>

                <div class="">
                    <label for="s1_jurusan"
                        class="block mb-2 text-sm font-medium text-gray-900 dark:text-gray-300">Jurusan
                        </span></label>
                    <input type="text" id="s1_jurusan" name="s1_jurusan"
                        class="placeholder:text-gray-400 shadow-sm bg-gray-50 border border-gray-300 text-sm italic rounded-lg focus:ring-primary-500 focus:border-primary-500 block w-full p-2.5 "
                        placeholder="Jurusan S1">
                </div>

                <div class="">
                    <label for="s1_ipk" class="block mb-2 text-sm font-medium text-gray-900 dark:text-gray-300">IPK
                        S1
                        </span></label>
                    <input type="text" id="s1_ipk" name="s1_ipk"
                        class="placeholder:text-gray-400 shadow-sm bg-gray-50 border border-gray-300 text-sm italic rounded-lg focus:ring-primary-500 focus:border-primary-500 block w-full p-2.5 "
                        placeholder="IPK S1">
                </div>

                <div class="">
                    <label for="s1_status_lulus"
                        class="block mb-2 text-sm font-medium text-gray-900 dark:text-gray-300">Status Kelulusan
                        </span></label>
                    <select name="s1_status_lulus" id="s1_status_lulus"
                        class="shadow-sm bg-gray-50 border border-gray-300 text-sm italic rounded-lg focus:ring-primary-500 focus:border-primary-500 block w-full p-2.5 ">
                        <option disabled selected>Status Kelulusan</option>
                        <option value="Lulus">Lulus</option>
                        <option value="Tidak Lulus">Tidak Lulus</option>
                    </select>
                </div>

            </div>
        </div>

        <div>
            <h3 class="pl-1 text-xl font-bold">Strata 2</h3>
            <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-5 p-1">
                <div class="">

                    <label for="s2_dari" class="block mb-2 text-sm font-medium text-gray-900 dark:text-gray-300">
                        Dari Tahun</span></label>

                    <div class="relative">
                        <div class="absolute inset-y-0 start-0 flex items-center ps-3.5 pointer-events-none">
                            <svg class="w-4 h-4 text-gray-500 dark:text-gray-400" aria-hidden="true"
                                xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 20 20">
                                <path
                                    d="M20 4a2 2 0 0 0-2-2h-2V1a1 1 0 0 0-2 0v1h-3V1a1 1 0 0 0-2 0v1H6V1a1 1 0 0 0-2 0v1H2a2 2 0 0 0-2 2v2h20V4ZM0 18a2 2 0 0 0 2 2h16a2 2 0 0 0 2-2V8H0v10Zm5-8h10a1 1 0 0 1 0 2H5a1 1 0 0 1 0-2Z" />
                            </svg>
                        </div>
                        <input datepicker id="s2_dari" name="s2_dari" type="text"
                            class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full ps-10 p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                            placeholder="dari tahun">
                    </div>
                </div>

                <div class="">

                    <label for="s2_sampai" class="block mb-2 text-sm font-medium text-gray-900 dark:text-gray-300">
                        Sampai Tahun</span></label>

                    <div class="relative">
                        <div class="absolute inset-y-0 start-0 flex items-center ps-3.5 pointer-events-none">
                            <svg class="w-4 h-4 text-gray-500 dark:text-gray-400" aria-hidden="true"
                                xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 20 20">
                                <path
                                    d="M20 4a2 2 0 0 0-2-2h-2V1a1 1 0 0 0-2 0v1h-3V1a1 1 0 0 0-2 0v1H6V1a1 1 0 0 0-2 0v1H2a2 2 0 0 0-2 2v2h20V4ZM0 18a2 2 0 0 0 2 2h16a2 2 0 0 0 2-2V8H0v10Zm5-8h10a1 1 0 0 1 0 2H5a1 1 0 0 1 0-2Z" />
                            </svg>
                        </div>
                        <input datepicker id="s2_sampai" name="s2_sampai" type="text"
                            class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full ps-10 p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                            placeholder="sampai tahun">
                    </div>
                </div>

                <div class="">
                    <label for="s2_nama_univ"
                        class="block mb-2 text-sm font-medium text-gray-900 dark:text-gray-300">Nama
                        Universitas
                        </span></label>
                    <input type="text" id="s2_nama_univ" name="s2_nama_univ"
                        class="placeholder:text-gray-400 shadow-sm bg-gray-50 border border-gray-300 text-sm italic rounded-lg focus:ring-primary-500 focus:border-primary-500 block w-full p-2.5 "
                        placeholder="Nama Univ/Institut - kota">
                </div>

                <div class="">
                    <label for="s2_jurusan"
                        class="block mb-2 text-sm font-medium text-gray-900 dark:text-gray-300">Jurusan
                        </span></label>
                    <input type="text" id="s2_jurusan" name="s2_jurusan"
                        class="placeholder:text-gray-400 shadow-sm bg-gray-50 border border-gray-300 text-sm italic rounded-lg focus:ring-primary-500 focus:border-primary-500 block w-full p-2.5 "
                        placeholder="Jurusan S2">
                </div>

                <div class="">
                    <label for="s2_ipk" class="block mb-2 text-sm font-medium text-gray-900 dark:text-gray-300">IPK
                        S2
                        </span></label>
                    <input type="text" id="s2_ipk" name="s2_ipk"
                        class="placeholder:text-gray-400 shadow-sm bg-gray-50 border border-gray-300 text-sm italic rounded-lg focus:ring-primary-500 focus:border-primary-500 block w-full p-2.5 "
                        placeholder="IPK S2">
                </div>

                <div class="">
                    <label for="s2_status_lulus"
                        class="block mb-2 text-sm font-medium text-gray-900 dark:text-gray-300">Status Kelulusan
                        </span></label>
                    <select name="s2_status_lulus" id="s2_status_lulus"
                        class="shadow-sm bg-gray-50 border border-gray-300 text-sm italic rounded-lg focus:ring-primary-500 focus:border-primary-500 block w-full p-2.5 ">
                        <option disabled selected>Status Kelulusan</option>
                        <option value="Lulus">Lulus</option>
                        <option value="Tidak Lulus">Tidak Lulus</option>
                    </select>
                </div>

            </div>
        </div>
    </div>
</div>
