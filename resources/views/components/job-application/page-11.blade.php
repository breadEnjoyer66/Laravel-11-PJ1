<!-- STEP 11 -->
<div x-show="step === 11" x-transition.opacity.duration.10ms class="">
    <h2 class="text-xl font-semibold mb-4">Page 11 - Questionnaire</h2>
    <div class="space-y-8">

        <div>

            <div class="grid grid-cols-1 gap-5 p-1">
                <div class="mb-4">
                    <label class="block mb-2 font-medium text-gray-900 dark:text-gray-300">1. Dari
                        mana anda mendapatkan informasi mengenai lowongan pekerjaan ini? <span
                            class="text-red-600 text-sm">*</span></label>

                    <div class="flex items-center gap-4 flex-wrap">
                        <label for="keluarga"
                            class="px-4 py-1.5 bg-slate-50 border rounded-full flex items-center gap-2 text-slate-700 {{ $errors->has('info_dari') ? 'border-red-500' : '' }}">
                            <input id="keluarga" type="checkbox" name="info_dari[]" value="Keluarga"
                                {{ is_array(old('info_dari')) && in_array('Keluarga', old('info_dari')) ? 'checked' : '' }} />Keluarga
                        </label>

                        <label for="teman"
                            class="px-4 py-1.5 bg-slate-50 border rounded-full flex items-center gap-2 text-slate-700 {{ $errors->has('info_dari') ? 'border-red-500' : '' }}">
                            <input id="teman" type="checkbox" name="info_dari[]" value="Teman"
                                {{ is_array(old('info_dari')) && in_array('Teman', old('info_dari')) ? 'checked' : '' }} />Teman
                        </label>

                        <label for="jobstreet"
                            class="px-4 py-1.5 bg-slate-50 border rounded-full flex items-center gap-2 text-slate-700 {{ $errors->has('info_dari') ? 'border-red-500' : '' }}">
                            <input id="jobstreet" type="checkbox" name="info_dari[]" value="JobStreet"
                                {{ is_array(old('info_dari')) && in_array('JobStreet', old('info_dari')) ? 'checked' : '' }} />JobStreet
                        </label>

                        <label for="website"
                            class="px-4 py-1.5 bg-slate-50 border rounded-full flex items-center gap-2 text-slate-700 {{ $errors->has('info_dari') ? 'border-red-500' : '' }}">
                            <input id="website" type="checkbox" name="info_dari[]" value="Website"
                                {{ is_array(old('info_dari')) && in_array('Website', old('info_dari')) ? 'checked' : '' }} />Website
                        </label>

                        <label for="app_pintarnya"
                            class="px-4 py-1.5 bg-slate-50 border rounded-full flex items-center gap-2 text-slate-700 {{ $errors->has('info_dari') ? 'border-red-500' : '' }}">
                            <input id="app_pintarnya" type="checkbox" name="info_dari[]" value="Aplikasi Pintarnya"
                                {{ is_array(old('info_dari')) && in_array('Aplikasi Pintarnya', old('info_dari')) ? 'checked' : '' }} />Aplikasi
                            Pintarnya
                        </label>

                        <label for="instagram"
                            class="px-4 py-1.5 bg-slate-50 border rounded-full flex items-center gap-2 text-slate-700 {{ $errors->has('info_dari') ? 'border-red-500' : '' }}">
                            <input id="instagram" type="checkbox" name="info_dari[]" value="Instagram"
                                {{ is_array(old('info_dari')) && in_array('Instagram', old('info_dari')) ? 'checked' : '' }} />Instagram
                        </label>

                        <label for="lain_lain"
                            class="px-4 py-1.5 bg-slate-50 border rounded-full flex items-center gap-2 text-slate-700 {{ $errors->has('info_dari') ? 'border-red-500' : '' }}">
                            <input id="lain_lain" type="checkbox" name="info_dari[]" value="Lain-lain"
                                {{ is_array(old('info_dari')) && in_array('Lain-lain', old('info_dari')) ? 'checked' : '' }} />Lain-lain
                        </label>
                    </div>
                    @error('info_dari')
                        <p class="mt-1 text-sm text-red-600">{{ $message }}</p>
                    @enderror
                </div>

                <div class="mb-4">
                    <label for="kenalan_yg_bekerja" class="block mb-2 font-medium text-gray-900 dark:text-gray-300">2.
                        Adakah kenalan/saudara
                        yang bekerja pada perusahaan kami? Jika ada, sebutkan nama dan posisinya <span
                            class="text-red-600 text-sm">*</span>
                    </label>
                    <input type="text" id="kenalan_yg_bekerja" name="kenalan_yg_bekerja"
                        class="placeholder:text-gray-400 shadow-sm bg-gray-50 text-sm italic rounded-lg focus:ring-primary-500 focus:border-primary-500 block w-full p-2.5 {{ $errors->has('kenalan_yg_bekerja') ? 'border border-red-500' : 'border border-gray-300' }}"
                        placeholder="Contoh: Surya Wicaksono - Telemarketing" value="{{ old('kenalan_yg_bekerja') }}"
                        required>
                    @error('kenalan_yg_bekerja')
                        <p class="mt-1 text-sm text-red-600">{{ $message }}</p>
                    @enderror
                    <p class="text-xs text-gray-500 mt-2 italic">*isi dengan "tidak ada" jika tidak ada</p>
                </div>

                <div class="mb-4">
                    <label for="apply_perusahaan_lain"
                        class="block mb-2 font-medium text-gray-900 dark:text-gray-300">3.
                        Selain diperusahaan ini, dimana lagi saudara melamar saat ini? <span
                            class="text-red-600 text-sm">*</span>
                    </label>
                    <input type="text" id="apply_perusahaan_lain" name="apply_perusahaan_lain"
                        class="placeholder:text-gray-400 shadow-sm bg-gray-50 text-sm italic rounded-lg focus:ring-primary-500 focus:border-primary-500 block w-full p-2.5 {{ $errors->has('apply_perusahaan_lain') ? 'border border-red-500' : 'border border-gray-300' }}"
                        placeholder="Contoh: PT. Sukses Bersama, Medan" value="{{ old('apply_perusahaan_lain') }}"
                        required>
                    @error('apply_perusahaan_lain')
                        <p class="mt-1 text-sm text-red-600">{{ $message }}</p>
                    @enderror
                    <p class="text-xs text-gray-500 mt-2 italic">*isi dengan "tidak ada" jika tidak ada</p>
                </div>

                <div class="mb-4">
                    <label for="pekerjaan_sampingan" class="block mb-2 font-medium text-gray-900 dark:text-gray-300">4.
                        Apakah saudara mempunyai pekerjaan sampingan? Jika ada, di mana dan sebagai apa? <span
                            class="text-red-600 text-sm">*</span>
                    </label>
                    <input type="text" id="pekerjaan_sampingan" name="pekerjaan_sampingan"
                        class="placeholder:text-gray-400 shadow-sm bg-gray-50 text-sm italic rounded-lg focus:ring-primary-500 focus:border-primary-500 block w-full p-2.5 {{ $errors->has('pekerjaan_sampingan') ? 'border border-red-500' : 'border border-gray-300' }}"
                        placeholder="Contoh: PT. Sukses Bersama, Graphic Designer"
                        value="{{ old('pekerjaan_sampingan') }}" required>
                    @error('pekerjaan_sampingan')
                        <p class="mt-1 text-sm text-red-600">{{ $message }}</p>
                    @enderror
                    <p class="text-xs text-gray-500 mt-2 italic">*isi dengan "tidak ada" jika tidak ada</p>
                </div>

                <div class="mb-4">
                    <label for="pernah_psikotes" class="block mb-2 font-medium text-gray-900 dark:text-gray-300">5.
                        Apakah saudara pernah menjalani pemeriksaan psikologis/psikotes? Bila pernah, kapan,
                        dan di mana? <span class="text-red-600 text-sm">*</span>
                    </label>
                    <input type="text" id="pernah_psikotes" name="pernah_psikotes"
                        class="placeholder:text-gray-400 shadow-sm bg-gray-50 text-sm italic rounded-lg focus:ring-primary-500 focus:border-primary-500 block w-full p-2.5 {{ $errors->has('pernah_psikotes') ? 'border border-red-500' : 'border border-gray-300' }}"
                        placeholder="Contoh: Maret 2019, PT. Sukses Bersama, Tes Masuk"
                        value="{{ old('pernah_psikotes') }}" required>
                    @error('pernah_psikotes')
                        <p class="mt-1 text-sm text-red-600">{{ $message }}</p>
                    @enderror
                    <p class="text-xs text-gray-500 mt-2 italic">*isi dengan "tidak pernah" jika tidak pernah</p>
                </div>

                <div class="mb-4">
                    <label for="riwayat_penyakit_kronis"
                        class="block mb-2 font-medium text-gray-900 dark:text-gray-300">6.
                        Apakah saudara pernah/sedang menderita sakit: keras/kronis/kecelakaan berat/operasi? Jika Ya,
                        kapan dan seperti apa? <span class="text-red-600 text-sm">*</span>
                    </label>
                    <input type="text" id="riwayat_penyakit_kronis" name="riwayat_penyakit_kronis"
                        class="placeholder:text-gray-400 shadow-sm bg-gray-50 text-sm italic rounded-lg focus:ring-primary-500 focus:border-primary-500 block w-full p-2.5 {{ $errors->has('riwayat_penyakit_kronis') ? 'border border-red-500' : 'border border-gray-300' }}"
                        placeholder="Contoh: 2009 Operasi cranial..." value="{{ old('riwayat_penyakit_kronis') }}"
                        required>
                    @error('riwayat_penyakit_kronis')
                        <p class="mt-1 text-sm text-red-600">{{ $message }}</p>
                    @enderror
                    <p class="text-xs text-gray-500 mt-2 italic">*isi dengan "tidak pernah" jika tidak pernah</p>
                </div>

                <div class="mb-4">
                    <label for="rekam_jejak_kriminal"
                        class="block mb-2 font-medium text-gray-900 dark:text-gray-300">7. Apakah saudara pernah
                        berurusan dengan polisi karena tindak kriminal? Bila pernah kapan dan apa kasusnya? <span
                            class="text-red-600 text-sm">*</span>
                    </label>
                    <input type="text" id="rekam_jejak_kriminal" name="rekam_jejak_kriminal"
                        class="placeholder:text-gray-400 shadow-sm bg-gray-50 text-sm italic rounded-lg focus:ring-primary-500 focus:border-primary-500 block w-full p-2.5 {{ $errors->has('rekam_jejak_kriminal') ? 'border border-red-500' : 'border border-gray-300' }}"
                        placeholder="jika pernah, sebutkan waktu dan kasusnya"
                        value="{{ old('rekam_jejak_kriminal') }}" required>
                    @error('rekam_jejak_kriminal')
                        <p class="mt-1 text-sm text-red-600">{{ $message }}</p>
                    @enderror
                    <p class="text-xs text-gray-500 mt-2 italic">*isi dengan "tidak pernah" jika tidak pernah</p>
                </div>

                <div class="mb-4">
                    <label for="sedia_ditempatkan_luar_kota"
                        class="block mb-2 font-medium text-gray-900 dark:text-gray-300">8. Bila diterima bersediakah
                        saudara ditempatkan di luar kota? Ya/Tidak. Bila tidak, beri alasan <span
                            class="text-red-600 text-sm">*</span>
                    </label>
                    <input type="text" id="sedia_ditempatkan_luar_kota" name="sedia_ditempatkan_luar_kota"
                        class="placeholder:text-gray-400 shadow-sm bg-gray-50 text-sm italic rounded-lg focus:ring-primary-500 focus:border-primary-500 block w-full p-2.5 {{ $errors->has('sedia_ditempatkan_luar_kota') ? 'border border-red-500' : 'border border-gray-300' }}"
                        placeholder="Contoh: Ya / Tidak (alasan)" value="{{ old('sedia_ditempatkan_luar_kota') }}"
                        required>
                    @error('sedia_ditempatkan_luar_kota')
                        <p class="mt-1 text-sm text-red-600">{{ $message }}</p>
                    @enderror
                </div>

                <div class="mb-4" x-data="{
                    rawValue: '{{ old('ekspektasi_gaji') }}',
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
                    <label for="ekspektasi_gaji" class="block mb-2 font-medium text-gray-900 dark:text-gray-300">9.
                        Bila diterima berapa gaji yang saudara harapkan (Rp)<span class="text-red-600 text-sm">*</span>
                    </label>
                    <input type="text" id="ekspektasi_gaji" placeholder="Contoh: 5000000"
                        @input="onInput($event)" @focus="onFocus($event)" @blur="onBlur($event)"
                        class="placeholder:text-gray-400 shadow-sm bg-gray-50 text-sm italic rounded-lg focus:ring-primary-500 focus:border-primary-500 block w-full p-2.5 {{ $errors->has('ekspektasi_gaji') ? 'border border-red-500' : 'border border-gray-300' }}"
                        required>
                    <input type="hidden" name="ekspektasi_gaji" :value="rawValue">
                    @error('ekspektasi_gaji')
                        <p class="mt-1 text-sm text-red-600">{{ $message }}</p>
                    @enderror
                    <p class="text-xs text-gray-500 mt-2 italic">Contoh tampilan: 5000000 akan ditampilkan sebagai
                        5.000.000</p>
                </div>

                <div class="mb-4">
                    <label for="dapat_mulai_bekerja"
                        class="block mb-2 font-medium text-gray-900 dark:text-gray-300">10.
                        Bila diterima, kapan saudara dapat mulai bekerja?<span class="text-red-600 text-sm">*</span>
                    </label>
                    <input type="text" id="dapat_mulai_bekerja" name="dapat_mulai_bekerja"
                        class="placeholder:text-gray-400 shadow-sm bg-gray-50 text-sm italic rounded-lg focus:ring-primary-500 focus:border-primary-500 block w-full p-2.5 {{ $errors->has('dapat_mulai_bekerja') ? 'border border-red-500' : 'border border-gray-300' }}"
                        placeholder="Contoh: Segera / 2 minggu setelah diterima"
                        value="{{ old('dapat_mulai_bekerja') }}" required>
                    @error('dapat_mulai_bekerja')
                        <p class="mt-1 text-sm text-red-600">{{ $message }}</p>
                    @enderror
                </div>

                <hr>
                <p class="text-gray-600">Demikian informasi dan pernyataan yang Saya buat pada lamaran kerja ini.
                    Terimakasih atas
                    perhatiannya.</p>


            </div>
        </div>


    </div>
</div>
