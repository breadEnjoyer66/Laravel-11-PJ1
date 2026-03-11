<!-- STEP 1 -->
<div x-show="step === 5" x-transition.opacity.duration.10ms class="">
    <h2 class="text-xl font-semibold mb-4">Page 5 - Job History</h2>
    <div class="space-y-8">
        <div>
            <h3 class="pl-1 text-xl font-bold">Riwayat Pekerjaan 1</h3>
            <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-5 p-1">

                <div class="">
                    <label for="nama_perusahaan_1"
                        class="block mb-2 text-sm font-medium text-gray-900 dark:text-gray-300">Nama
                        Perusahaan <span class="text-red-600 text-sm">*</span>
                    </label>
                    <input type="text" id="nama_perusahaan_1" name="nama_perusahaan_1"
                        class="placeholder:text-gray-400 shadow-sm bg-gray-50 text-sm italic rounded-lg focus:ring-primary-500 focus:border-primary-500 block w-full p-2.5 {{ $errors->has('nama_perusahaan_1') ? 'border border-red-500' : 'border border-gray-300' }}"
                        placeholder="Nama PT/ Perusahaan" value="{{ old('nama_perusahaan_1') }}" required>
                    @error('nama_perusahaan_1')
                        <p class="mt-1 text-sm text-red-600">{{ $message }}</p>
                    @enderror
                </div>

                <div class="">
                    <label for="jabatan_1"
                        class="block mb-2 text-sm font-medium text-gray-900 dark:text-gray-300">Jabatan/Posisi
                        <span class="text-red-600 text-sm">*</span></label>
                    <input type="text" id="jabatan_1" name="jabatan_1"
                        class="placeholder:text-gray-400 shadow-sm bg-gray-50 text-sm italic rounded-lg focus:ring-primary-500 focus:border-primary-500 block w-full p-2.5 {{ $errors->has('jabatan_1') ? 'border border-red-500' : 'border border-gray-300' }}"
                        placeholder="Jabatan/Posisi" value="{{ old('jabatan_1') }}" required>
                    @error('jabatan_1')
                        <p class="mt-1 text-sm text-red-600">{{ $message }}</p>
                    @enderror
                </div>

                <div class="" x-data="{
                    rawValue: '{{ old('gaji_terakhir_1') }}',
                    formatNumber(num) {
                        if (!num) return '';
                        return new Intl.NumberFormat('id-ID').format(num);
                    },
                    unformatNumber(str) {
                        return str.replace(/\D/g, '');
                    },
                    onInput(e) {
                        let val = e.target.value;
                        let unformatted = this.unformatNumber(val);
                        this.rawValue = unformatted || 0;
                        e.target.value = this.formatNumber(unformatted);
                    },
                    onFocus(e) {
                        e.target.value = this.rawValue || '';
                    },
                    onBlur(e) {
                        let unformatted = this.unformatNumber(e.target.value);
                        this.rawValue = unformatted || 0;
                        e.target.value = this.formatNumber(unformatted);
                    },
                    init() {
                        if (this.rawValue) {
                            this.$el.querySelector('input[type=text]').value = this.formatNumber(this.rawValue);
                        }
                    }
                }" x-init="init()">
                    <label for="gaji_terakhir_1"
                        class="block mb-2 text-sm font-medium text-gray-900 dark:text-gray-300">Nominal Gaji
                        Terakhir (Rp)
                        <span class="text-red-600 text-sm">*</span></label>
                    <input type="text" id="gaji_terakhir_1" placeholder="Nominal gaji terakhir"
                        @input="onInput($event)" @focus="onFocus($event)" @blur="onBlur($event)"
                        class="placeholder:text-gray-400 shadow-sm bg-gray-50 text-sm italic rounded-lg focus:ring-primary-500 focus:border-primary-500 block w-full p-2.5 {{ $errors->has('gaji_terakhir_1') ? 'border border-red-500' : 'border border-gray-300' }}"
                        required>
                    <input type="hidden" name="gaji_terakhir_1" :value="rawValue">
                    @error('gaji_terakhir_1')
                        <p class="mt-1 text-sm text-red-600">{{ $message }}</p>
                    @enderror
                </div>

                <div class="">
                    <label for="job_1_dari" class="block mb-2 text-sm font-medium text-gray-900 dark:text-gray-300">
                        Dari Tahun <span class="text-red-600 text-sm">*</span></label>
                    <div class="relative">
                        <div class="absolute inset-y-0 start-0 flex items-center ps-3.5 pointer-events-none">
                            <svg class="w-4 h-4 text-gray-500 dark:text-gray-400" aria-hidden="true"
                                xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 20 20">
                                <path
                                    d="M20 4a2 2 0 0 0-2-2h-2V1a1 1 0 0 0-2 0v1h-3V1a1 1 0 0 0-2 0v1H6V1a1 1 0 0 0-2 0v1H2a2 2 0 0 0-2 2v2h20V4ZM0 18a2 2 0 0 0 2 2h16a2 2 0 0 0 2-2V8H0v10Zm5-8h10a1 1 0 0 1 0 2H5a1 1 0 0 1 0-2Z" />
                            </svg>
                        </div>
                        <input datepicker id="job_1_dari" name="job_1_dari" type="text"
                            class="bg-gray-50 text-gray-900 text-sm rounded-lg block w-full ps-10 p-2.5 {{ $errors->has('job_1_dari') ? 'border border-red-500' : 'border border-gray-300' }}"
                            placeholder="dari tahun" value="{{ old('job_1_dari') }}" required>
                        @error('job_1_dari')
                            <p class="mt-1 text-sm text-red-600">{{ $message }}</p>
                        @enderror
                    </div>
                </div>

                <div class="">
                    <label for="job_1_sampai" class="block mb-2 text-sm font-medium text-gray-900 dark:text-gray-300">
                        Sampai Tahun <span class="text-red-600 text-sm">*</span></label>
                    <div class="relative">
                        <div class="absolute inset-y-0 start-0 flex items-center ps-3.5 pointer-events-none">
                            <svg class="w-4 h-4 text-gray-500 dark:text-gray-400" aria-hidden="true"
                                xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 20 20">
                                <path
                                    d="M20 4a2 2 0 0 0-2-2h-2V1a1 1 0 0 0-2 0v1h-3V1a1 1 0 0 0-2 0v1H6V1a1 1 0 0 0-2 0v1H2a2 2 0 0 0-2 2v2h20V4ZM0 18a2 2 0 0 0 2 2h16a2 2 0 0 0 2-2V8H0v10Zm5-8h10a1 1 0 0 1 0 2H5a1 1 0 0 1 0-2Z" />
                            </svg>
                        </div>
                        <input datepicker id="job_1_sampai" name="job_1_sampai" type="text"
                            class="bg-gray-50 text-gray-900 text-sm rounded-lg block w-full ps-10 p-2.5 {{ $errors->has('job_1_sampai') ? 'border border-red-500' : 'border border-gray-300' }}"
                            placeholder="sampai tahun" value="{{ old('job_1_sampai') }}" required>
                        @error('job_1_sampai')
                            <p class="mt-1 text-sm text-red-600">{{ $message }}</p>
                        @enderror
                    </div>
                </div>


                <div class="">
                    <label for="alasan_berhenti_1"
                        class="block mb-2 text-sm font-medium text-gray-900 dark:text-gray-300">Alasan
                        Berhenti <span class="text-red-600 text-sm">*</span></label>
                    <input type="text" id="alasan_berhenti_1" name="alasan_berhenti_1"
                        class="placeholder:text-gray-400 shadow-sm bg-gray-50 text-sm italic rounded-lg focus:ring-primary-500 focus:border-primary-500 block w-full p-2.5 {{ $errors->has('alasan_berhenti_1') ? 'border border-red-500' : 'border border-gray-300' }}"
                        placeholder="Alasan berhenti" value="{{ old('alasan_berhenti_1') }}" required>
                    @error('alasan_berhenti_1')
                        <p class="mt-1 text-sm text-red-600">{{ $message }}</p>
                    @enderror
                </div>


            </div>
            <div class="p-1 mt-3">
                <label for="jobdesk_pekerjaan_1"
                    class="block mb-2 text-sm font-medium text-gray-900 dark:text-gray-300">Deskripsi Jobdesk Pada
                    Posisi Terakhir <span class="text-red-600 text-sm">*</span>
                </label>
                <textarea name="jobdesk_pekerjaan_1" id="jobdesk_pekerjaan_1" cols="30" rows="4" maxlength="400"
                    class="placeholder:text-gray-400 shadow-sm bg-gray-50 text-sm italic rounded-lg focus:ring-primary-500 focus:border-primary-500 block w-full {{ $errors->has('jobdesk_pekerjaan_1') ? 'border border-red-500' : 'border border-gray-300' }}"
                    placeholder="Jelaskan secara singkat mengenai pekerjaan anda" required>{{ old('jobdesk_pekerjaan_1') }}</textarea>
                @error('jobdesk_pekerjaan_1')
                    <p class="mt-1 text-sm text-red-600">{{ $message }}</p>
                @enderror
            </div>

        </div>

        <div>
            <h3 class="pl-1 text-xl font-bold">Riwayat Pekerjaan 2</h3>
            <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-5 p-1">

                <div class="">
                    <label for="nama_perusahaan_2"
                        class="block mb-2 text-sm font-medium text-gray-900 dark:text-gray-300">Nama
                        Perusahaan
                    </label>
                    <input type="text" id="nama_perusahaan_2" name="nama_perusahaan_2"
                        class="placeholder:text-gray-400 shadow-sm bg-gray-50 text-sm italic rounded-lg focus:ring-primary-500 focus:border-primary-500 block w-full p-2.5 {{ $errors->has('nama_perusahaan_2') ? 'border border-red-500' : 'border border-gray-300' }}"
                        placeholder="Nama PT/ Perusahaan" value="{{ old('nama_perusahaan_2') }}">
                    @error('nama_perusahaan_2')
                        <p class="mt-1 text-sm text-red-600">{{ $message }}</p>
                    @enderror
                </div>

                <div class="">
                    <label for="jabatan_2"
                        class="block mb-2 text-sm font-medium text-gray-900 dark:text-gray-300">Jabatan/Posisi
                    </label>
                    <input type="text" id="jabatan_2" name="jabatan_2"
                        class="placeholder:text-gray-400 shadow-sm bg-gray-50 text-sm italic rounded-lg focus:ring-primary-500 focus:border-primary-500 block w-full p-2.5 {{ $errors->has('jabatan_2') ? 'border border-red-500' : 'border border-gray-300' }}"
                        placeholder="Jabatan/Posisi" value="{{ old('jabatan_2') }}">
                    @error('jabatan_2')
                        <p class="mt-1 text-sm text-red-600">{{ $message }}</p>
                    @enderror
                </div>

                <div class="" x-data="{
                    rawValue: '{{ old('gaji_terakhir_2') }}',
                    formatNumber(num) {
                        if (!num) return '';
                        return new Intl.NumberFormat('id-ID').format(num);
                    },
                    unformatNumber(str) {
                        return str.replace(/\D/g, '');
                    },
                    onInput(e) {
                        let val = e.target.value;
                        let unformatted = this.unformatNumber(val);
                        this.rawValue = unformatted || 0;
                        e.target.value = this.formatNumber(unformatted);
                    },
                    onFocus(e) {
                        e.target.value = this.rawValue || '';
                    },
                    onBlur(e) {
                        let unformatted = this.unformatNumber(e.target.value);
                        this.rawValue = unformatted || 0;
                        e.target.value = this.formatNumber(unformatted);
                    },
                    init() {
                        if (this.rawValue) {
                            this.$el.querySelector('input[type=text]').value = this.formatNumber(this.rawValue);
                        }
                    }
                }" x-init="init()">
                    <label for="gaji_terakhir_2"
                        class="block mb-2 text-sm font-medium text-gray-900 dark:text-gray-300">Nominal Gaji
                        Terakhir (Rp)
                    </label>
                    <input type="text" id="gaji_terakhir_2" placeholder="Nominal gaji terakhir"
                        @input="onInput($event)" @focus="onFocus($event)" @blur="onBlur($event)"
                        class="placeholder:text-gray-400 shadow-sm bg-gray-50 text-sm italic rounded-lg focus:ring-primary-500 focus:border-primary-500 block w-full p-2.5 {{ $errors->has('gaji_terakhir_2') ? 'border border-red-500' : 'border border-gray-300' }}">
                    <input type="hidden" name="gaji_terakhir_2" :value="rawValue">
                    @error('gaji_terakhir_2')
                        <p class="mt-1 text-sm text-red-600">{{ $message }}</p>
                    @enderror
                </div>

                <div class="">
                    <label for="job_2_dari" class="block mb-2 text-sm font-medium text-gray-900 dark:text-gray-300">
                        Dari Tahun</label>
                    <div class="relative">
                        <div class="absolute inset-y-0 start-0 flex items-center ps-3.5 pointer-events-none">
                            <svg class="w-4 h-4 text-gray-500 dark:text-gray-400" aria-hidden="true"
                                xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 20 20">
                                <path
                                    d="M20 4a2 2 0 0 0-2-2h-2V1a1 1 0 0 0-2 0v1h-3V1a1 1 0 0 0-2 0v1H6V1a1 1 0 0 0-2 0v1H2a2 2 0 0 0-2 2v2h20V4ZM0 18a2 2 0 0 0 2 2h16a2 2 0 0 0 2-2V8H0v10Zm5-8h10a1 1 0 0 1 0 2H5a1 1 0 0 1 0-2Z" />
                            </svg>
                        </div>
                        <input datepicker id="job_2_dari" name="job_2_dari" type="text"
                            class="bg-gray-50 text-gray-900 text-sm rounded-lg block w-full ps-10 p-2.5 {{ $errors->has('job_2_dari') ? 'border border-red-500' : 'border border-gray-300' }}"
                            placeholder="dari tahun" value="{{ old('job_2_dari') }}">
                        @error('job_2_dari')
                            <p class="mt-1 text-sm text-red-600">{{ $message }}</p>
                        @enderror
                    </div>
                </div>

                <div class="">
                    <label for="job_2_sampai" class="block mb-2 text-sm font-medium text-gray-900 dark:text-gray-300">
                        Sampai Tahun</label>
                    <div class="relative">
                        <div class="absolute inset-y-0 start-0 flex items-center ps-3.5 pointer-events-none">
                            <svg class="w-4 h-4 text-gray-500 dark:text-gray-400" aria-hidden="true"
                                xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 20 20">
                                <path
                                    d="M20 4a2 2 0 0 0-2-2h-2V1a1 1 0 0 0-2 0v1h-3V1a1 1 0 0 0-2 0v1H6V1a1 1 0 0 0-2 0v1H2a2 2 0 0 0-2 2v2h20V4ZM0 18a2 2 0 0 0 2 2h16a2 2 0 0 0 2-2V8H0v10Zm5-8h10a1 1 0 0 1 0 2H5a1 1 0 0 1 0-2Z" />
                            </svg>
                        </div>
                        <input datepicker id="job_2_sampai" name="job_2_sampai" type="text"
                            class="bg-gray-50 text-gray-900 text-sm rounded-lg block w-full ps-10 p-2.5 {{ $errors->has('job_2_sampai') ? 'border border-red-500' : 'border border-gray-300' }}"
                            placeholder="sampai tahun" value="{{ old('job_2_sampai') }}">
                        @error('job_2_sampai')
                            <p class="mt-1 text-sm text-red-600">{{ $message }}</p>
                        @enderror
                    </div>
                </div>


                <div class="">
                    <label for="alasan_berhenti_3"
                        class="block mb-2 text-sm font-medium text-gray-900 dark:text-gray-300">Alasan
                        Berhenti
                    </label>
                    <input type="text" id="alasan_berhenti_2" name="alasan_berhenti_2"
                        class="placeholder:text-gray-400 shadow-sm bg-gray-50 text-sm italic rounded-lg focus:ring-primary-500 focus:border-primary-500 block w-full p-2.5 {{ $errors->has('alasan_berhenti_2') ? 'border border-red-500' : 'border border-gray-300' }}"
                        placeholder="Alasan berhenti" value="{{ old('alasan_berhenti_2') }}">
                    @error('alasan_berhenti_2')
                        <p class="mt-1 text-sm text-red-600">{{ $message }}</p>
                    @enderror
                </div>


            </div>
            <div class="p-1 mt-3">
                <label for="jobdesk_pekerjaan_2"
                    class="block mb-2 text-sm font-medium text-gray-900 dark:text-gray-300">Deskripsi Jobdesk Pada
                    Posisi Terakhir
                </label>
                <textarea name="jobdesk_pekerjaan_2" id="jobdesk_pekerjaan_2" cols="30" rows="4" maxlength="400"
                    class="placeholder:text-gray-400 shadow-sm bg-gray-50 text-sm italic rounded-lg focus:ring-primary-500 focus:border-primary-500 block w-full {{ $errors->has('jobdesk_pekerjaan_2') ? 'border border-red-500' : 'border border-gray-300' }}"
                    placeholder="Jelaskan secara singkat mengenai pekerjaan anda">{{ old('jobdesk_pekerjaan_2') }}</textarea>
                @error('jobdesk_pekerjaan_2')
                    <p class="mt-1 text-sm text-red-600">{{ $message }}</p>
                @enderror
            </div>

        </div>

        {{-- riwayat pekerjaan 3 --}}
        <div>
            <h3 class="pl-1 text-xl font-bold">Riwayat Pekerjaan 3</h3>
            <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-5 p-1">

                <div class="">
                    <label for="nama_perusahaan_3"
                        class="block mb-2 text-sm font-medium text-gray-900 dark:text-gray-300">Nama
                        Perusahaan
                    </label>
                    <input type="text" id="nama_perusahaan_3" name="nama_perusahaan_3"
                        class="placeholder:text-gray-400 shadow-sm bg-gray-50 text-sm italic rounded-lg focus:ring-primary-500 focus:border-primary-500 block w-full p-2.5 {{ $errors->has('nama_perusahaan_3') ? 'border border-red-500' : 'border border-gray-300' }}"
                        placeholder="Nama PT/ Perusahaan" value="{{ old('nama_perusahaan_3') }}">
                    @error('nama_perusahaan_3')
                        <p class="mt-1 text-sm text-red-600">{{ $message }}</p>
                    @enderror
                </div>

                <div class="">
                    <label for="jabatan_3"
                        class="block mb-2 text-sm font-medium text-gray-900 dark:text-gray-300">Jabatan/Posisi
                    </label>
                    <input type="text" id="jabatan_3" name="jabatan_3"
                        class="placeholder:text-gray-400 shadow-sm bg-gray-50 text-sm italic rounded-lg focus:ring-primary-500 focus:border-primary-500 block w-full p-2.5 {{ $errors->has('jabatan_3') ? 'border border-red-500' : 'border border-gray-300' }}"
                        placeholder="Jabatan/Posisi" value="{{ old('jabatan_3') }}">
                    @error('jabatan_3')
                        <p class="mt-1 text-sm text-red-600">{{ $message }}</p>
                    @enderror
                </div>

                <div class="" x-data="{
                    rawValue: '{{ old('gaji_terakhir_3') }}',
                    formatNumber(num) {
                        if (!num) return '';
                        return new Intl.NumberFormat('id-ID').format(num);
                    },
                    unformatNumber(str) {
                        return str.replace(/\D/g, '');
                    },
                    onInput(e) {
                        let val = e.target.value;
                        let unformatted = this.unformatNumber(val);
                        this.rawValue = unformatted || 0;
                        e.target.value = this.formatNumber(unformatted);
                    },
                    onFocus(e) {
                        e.target.value = this.rawValue || '';
                    },
                    onBlur(e) {
                        let unformatted = this.unformatNumber(e.target.value);
                        this.rawValue = unformatted || 0;
                        e.target.value = this.formatNumber(unformatted);
                    },
                    init() {
                        if (this.rawValue) {
                            this.$el.querySelector('input[type=text]').value = this.formatNumber(this.rawValue);
                        }
                    }
                }" x-init="init()">
                    <label for="gaji_terakhir_3"
                        class="block mb-2 text-sm font-medium text-gray-900 dark:text-gray-300">Nominal Gaji
                        Terakhir (Rp)
                    </label>
                    <input type="text" id="gaji_terakhir_3" placeholder="Nominal gaji terakhir"
                        @input="onInput($event)" @focus="onFocus($event)" @blur="onBlur($event)"
                        class="placeholder:text-gray-400 shadow-sm bg-gray-50 text-sm italic rounded-lg focus:ring-primary-500 focus:border-primary-500 block w-full p-2.5 {{ $errors->has('gaji_terakhir_3') ? 'border border-red-500' : 'border border-gray-300' }}">
                    <input type="hidden" name="gaji_terakhir_3" :value="rawValue">
                    @error('gaji_terakhir_3')
                        <p class="mt-1 text-sm text-red-600">{{ $message }}</p>
                    @enderror
                </div>

                <div class="">
                    <label for="job_3_dari" class="block mb-2 text-sm font-medium text-gray-900 dark:text-gray-300">
                        Dari Tahun</label>
                    <div class="relative">
                        <div class="absolute inset-y-0 start-0 flex items-center ps-3.5 pointer-events-none">
                            <svg class="w-4 h-4 text-gray-500 dark:text-gray-400" aria-hidden="true"
                                xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 20 20">
                                <path
                                    d="M20 4a2 2 0 0 0-2-2h-2V1a1 1 0 0 0-2 0v1h-3V1a1 1 0 0 0-2 0v1H6V1a1 1 0 0 0-2 0v1H2a2 2 0 0 0-2 2v2h20V4ZM0 18a2 2 0 0 0 2 2h16a2 2 0 0 0 2-2V8H0v10Zm5-8h10a1 1 0 0 1 0 2H5a1 1 0 0 1 0-2Z" />
                            </svg>
                        </div>
                        <input datepicker id="job_3_dari" name="job_3_dari" type="text"
                            class="bg-gray-50 text-gray-900 text-sm rounded-lg block w-full ps-10 p-2.5 {{ $errors->has('job_3_dari') ? 'border border-red-500' : 'border border-gray-300' }}"
                            placeholder="dari tahun" value="{{ old('job_3_dari') }}">
                        @error('job_3_dari')
                            <p class="mt-1 text-sm text-red-600">{{ $message }}</p>
                        @enderror
                    </div>
                </div>

                <div class="">
                    <label for="job_3_sampai" class="block mb-2 text-sm font-medium text-gray-900 dark:text-gray-300">
                        Sampai Tahun</label>
                    <div class="relative">
                        <div class="absolute inset-y-0 start-0 flex items-center ps-3.5 pointer-events-none">
                            <svg class="w-4 h-4 text-gray-500 dark:text-gray-400" aria-hidden="true"
                                xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 20 20">
                                <path
                                    d="M20 4a2 2 0 0 0-2-2h-2V1a1 1 0 0 0-2 0v1h-3V1a1 1 0 0 0-2 0v1H6V1a1 1 0 0 0-2 0v1H2a2 2 0 0 0-2 2v2h20V4ZM0 18a2 2 0 0 0 2 2h16a2 2 0 0 0 2-2V8H0v10Zm5-8h10a1 1 0 0 1 0 2H5a1 1 0 0 1 0-2Z" />
                            </svg>
                        </div>
                        <input datepicker id="job_3_sampai" name="job_3_sampai" type="text"
                            class="bg-gray-50 text-gray-900 text-sm rounded-lg block w-full ps-10 p-2.5 {{ $errors->has('job_3_sampai') ? 'border border-red-500' : 'border border-gray-300' }}"
                            placeholder="sampai tahun" value="{{ old('job_3_sampai') }}">
                        @error('job_3_sampai')
                            <p class="mt-1 text-sm text-red-600">{{ $message }}</p>
                        @enderror
                    </div>
                </div>


                <div class="">
                    <label for="alasan_berhenti_3"
                        class="block mb-2 text-sm font-medium text-gray-900 dark:text-gray-300">Alasan
                        Berhenti
                    </label>
                    <input type="text" id="alasan_berhenti_3" name="alasan_berhenti_3"
                        class="placeholder:text-gray-400 shadow-sm bg-gray-50 text-sm italic rounded-lg focus:ring-primary-500 focus:border-primary-500 block w-full p-2.5 {{ $errors->has('alasan_berhenti_3') ? 'border border-red-500' : 'border border-gray-300' }}"
                        placeholder="Alasan berhenti" value="{{ old('alasan_berhenti_3') }}">
                    @error('alasan_berhenti_3')
                        <p class="mt-1 text-sm text-red-600">{{ $message }}</p>
                    @enderror
                </div>


            </div>
            <div class="p-1 mt-3">
                <label for="jobdesk_pekerjaan_3"
                    class="block mb-2 text-sm font-medium text-gray-900 dark:text-gray-300">Deskripsi Jobdesk Pada
                    Posisi Terakhir
                </label>
                <textarea name="jobdesk_pekerjaan_3" id="jobdesk_pekerjaan_3" cols="30" rows="4" maxlength="400"
                    class="placeholder:text-gray-400 shadow-sm bg-gray-50 text-sm italic rounded-lg focus:ring-primary-500 focus:border-primary-500 block w-full {{ $errors->has('jobdesk_pekerjaan_3') ? 'border border-red-500' : 'border border-gray-300' }}"
                    placeholder="Jelaskan secara singkat mengenai pekerjaan anda">{{ old('jobdesk_pekerjaan_3') }}</textarea>
                @error('jobdesk_pekerjaan_3')
                    <p class="mt-1 text-sm text-red-600">{{ $message }}</p>
                @enderror
            </div>

        </div>
    </div>
</div>
