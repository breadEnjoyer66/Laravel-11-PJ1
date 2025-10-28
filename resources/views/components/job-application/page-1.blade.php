<!-- STEP 1 -->
@props(['openPositions'])
<div x-show="step === 1" x-transition.opacity.duration.10ms class="">
    <div class="mb-6 text-gray-800">
        <p class="mb-6">Kepada Yth.<br>
            TIM HRD<br>
            PT. Primajaya Multi Technology</p>

        <p class="mb-6">Melalui formulir online dari website www.pj-tech.com ini, saya mengajukan lamaran ke perusahaan
            bapak. Di bawah
            ini adalah informasi dan pernyataan diri saya. Semua pernyataan yang ada pada formulir lamaran kerja ini
            adalah
            benar dan sesuai adanya, serta dapat dipertanggungjawabkan. Saya sadar bahwa kesalahan pada pemberian
            informasi
            di formulir lamaran kerja ini dapat menyebabkan saya menerima konsekuensi dari PT. Primajaya Multi
            Technology.
        </p>

        <p>Saya bersedia apabila foto dan dokumen yang saya sertakan tidak akan dikembalikan dan akan menjadi hak milik
            PT.
            Primajaya Multi Technology.</p>
    </div>



    <h2 class="text-xl font-semibold mb-4">Page 1 - Personal Information</h2>
    <div class="space-y-8">
        <div>
            <h2 class="text-lg text-gray-700 font-semibold">Posisi Yang Dilamar</h2>
            <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-5 p-1">
                <div>
                    <label for="posisi_prioritas"
                        class="block mb-2 text-sm font-medium text-gray-900 dark:text-gray-300">Prioritas <span
                            class="text-red-600 text-sm">*</span></label>

                    <select name="posisi_prioritas" id="posisi_prioritas"
                        class="shadow-sm bg-gray-50 text-sm italic rounded-lg focus:ring-primary-500 focus:border-primary-500 block w-full p-2.5 {{ $errors->has('posisi_prioritas') ? 'border border-red-500' : 'border border-gray-300' }}"
                        required>
                        <option value="">Pilih posisi prioritas</option>
                        @foreach ($openPositions as $open_position)
                            <option value="{{ $open_position->nama_posisi }}"
                                {{ old('posisi_prioritas') == $open_position->nama_posisi ? 'selected' : '' }}>
                                {{ $open_position->nama_posisi }}</option>
                        @endforeach

                    </select>
                    @error('posisi_prioritas')
                        <p class="mt-1 text-sm text-red-600">{{ $message }}</p>
                    @enderror
                </div>

                <div>
                    <label for="posisi_alternatif"
                        class="block mb-2 text-sm font-medium text-gray-900 dark:text-gray-300">Alternatif <span
                            class="text-red-600 text-sm">*</span></label>
                    <select name="posisi_alternatif" id="posisi_alternatif"
                        class="shadow-sm bg-gray-50 text-sm italic rounded-lg focus:ring-primary-500 focus:border-primary-500 block w-full p-2.5 {{ $errors->has('posisi_alternatif') ? 'border border-red-500' : 'border border-gray-300' }}"
                        required>
                        <option value="">Pilih posisi alternatif</option>
                        @foreach ($openPositions as $open_position)
                            <option value="{{ $open_position->nama_posisi }}"
                                {{ old('posisi_alternatif') == $open_position->nama_posisi ? 'selected' : '' }}>
                                {{ $open_position->nama_posisi }}</option>
                        @endforeach

                    </select>
                    @error('posisi_alternatif')
                        <p class="mt-1 text-sm text-red-600">{{ $message }}</p>
                    @enderror
                </div>

                <div>
                    <label for="keahlian" class="block mb-2 text-sm font-medium text-gray-900 dark:text-gray-300">Bidang
                        Keahlian Anda <span class="text-red-600 text-sm">*</span></label>
                    <select name="keahlian" id="keahlian"
                        class="shadow-sm bg-gray-50 text-sm italic rounded-lg focus:ring-primary-500 focus:border-primary-500 block w-full p-2.5 {{ $errors->has('keahlian') ? 'border border-red-500' : 'border border-gray-300' }}"
                        required>
                        <option value="">Pilih Bidang Keahlian Anda</option>
                        @foreach ($openPositions as $open_position)
                            <option value="{{ $open_position->nama_posisi }}"
                                {{ old('keahlian') == $open_position->nama_posisi ? 'selected' : '' }}>
                                {{ $open_position->nama_posisi }}</option>
                        @endforeach
                    </select>
                    @error('keahlian')
                        <p class="mt-1 text-sm text-red-600">{{ $message }}</p>
                    @enderror
                </div>
            </div>
        </div>
        <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-5 p-1">
            <div class="">
                <label for="pas_foto" class="block text-sm font-medium text-gray-900 dark:text-gray-300">Pas Foto <span
                        class="text-red-600 text-sm">*</span></label>
                <label for="pas_foto"
                    class="mt-2 shadow-sm bg-gray-50 border-2 border-dashed border-slate-200 text-gray-400 text-sm italic rounded-lg focus:ring-primary-500 focus:border-primary-500 block w-full">
                    <input type="file" name="pas_foto" id="pas_foto"
                        class="@error('pas_foto') border-red-500 @enderror" required>
                </label>
                <p class="text-xs mt-2 text-gray-400">File gambar pas foto 4x6 (JPG, JPEG, PNG maks. 2MB)</p>
                @error('pas_foto')
                    <p class="mt-1 text-sm text-red-600">{{ $message }}</p>
                @enderror
            </div>

            <div class="">
                <label for="nama_lengkap" class="block mb-2 text-sm font-medium text-gray-900 dark:text-gray-300">Nama
                    Lengkap <span class="text-red-600 text-sm">*</span></label>
                <input type="text" id="nama_lengkap" name="nama_lengkap"
                    class="placeholder:text-gray-400 shadow-sm bg-gray-50 text-sm italic rounded-lg focus:ring-primary-500 focus:border-primary-500 block w-full p-2.5 {{ $errors->has('nama_lengkap') ? 'border border-red-500' : 'border border-gray-300' }}"
                    placeholder="John Doe Suyanto" value="{{ old('nama_lengkap') }}" required>
                @error('nama_lengkap')
                    <p class="mt-1 text-sm text-red-600">{{ $message }}</p>
                @enderror
            </div>

            <div class="">
                <label for="email" class="block mb-2 text-sm font-medium text-gray-900 dark:text-gray-300">Alamat
                    Email <span class="text-red-600 text-sm">*</span></label>
                <input type="email" id="email" name="email"
                    class="placeholder:text-gray-400 shadow-sm bg-gray-50 text-sm italic rounded-lg focus:ring-primary-500 focus:border-primary-500 block w-full p-2.5 {{ $errors->has('email') ? 'border border-red-500' : 'border border-gray-300' }}"
                    placeholder="johndoe@example.com" value="{{ old('email') }}" required>
                @error('email')
                    <p class="mt-1 text-sm text-red-600">{{ $message }}</p>
                @enderror
            </div>

        </div>

        {{-- line2 --}}
        <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-5 p-1">
            <div class="">
                <label for="no_hp_whatsapp" class="block mb-2 text-sm font-medium text-gray-900 dark:text-gray-300">No.
                    HP/
                    Whatsapp <span class="text-red-600 text-sm">*</span></label>
                <input type="tel" id="no_hp_whatsapp" name="no_hp_whatsapp"
                    class="placeholder:text-gray-400 shadow-sm bg-gray-50 text-sm italic rounded-lg focus:ring-primary-500 focus:border-primary-500 block w-full p-2.5 {{ $errors->has('no_hp_whatsapp') ? 'border border-red-500' : 'border border-gray-300' }}"
                    placeholder="082246672617" value="{{ old('no_hp_whatsapp') }}" required>
                @error('no_hp_whatsapp')
                    <p class="mt-1 text-sm text-red-600">{{ $message }}</p>
                @enderror
            </div>

            <div class="">
                <label for="jenis_kelamin" class="block mb-2 text-sm font-medium text-gray-900 dark:text-gray-300">Jenis
                    Kelamin <span class="text-red-600 text-sm">*</span></label>
                <select name="jenis_kelamin" id="jenis_kelamin"
                    class="shadow-sm bg-gray-50 border text-sm italic rounded-lg focus:ring-primary-500 focus:border-primary-500 block w-full p-2.5 {{ $errors->has('jenis_kelamin') ? 'border border-red-500' : 'border border-gray-300' }}"
                    required>
                    <option value="">Pilih jenis kelamin</option>
                    <option value="Laki-laki" {{ old('jenis_kelamin') == 'Laki-laki' ? 'selected' : '' }}>Laki-laki
                    </option>
                    <option value="Perempuan" {{ old('jenis_kelamin') == 'Perempuan' ? 'selected' : '' }}>Perempuan
                    </option>
                </select>
                @error('jenis_kelamin')
                    <p class="mt-1 text-sm text-red-600">{{ $message }}</p>
                @enderror
            </div>

            <div class="">
                <label for="status_kawin" class="block mb-2 text-sm font-medium text-gray-900 dark:text-gray-300">Status
                    Kawin <span class="text-red-600 text-sm">*</span></label>
                <select name="status_kawin" id="status_kawin"
                    class="shadow-sm bg-gray-50 text-sm italic rounded-lg focus:ring-primary-500 focus:border-primary-500 block w-full p-2.5 {{ $errors->has('status_kawin') ? 'border border-red-500' : 'border border-gray-300' }}"
                    required>
                    <option value="">Pilih status kawin</option>
                    <option value="Menikah" {{ old('status_kawin') == 'Menikah' ? 'selected' : '' }}>Menikah</option>
                    <option value="Belum/Tidak Sedang Menikah"
                        {{ old('status_kawin') == 'Belum/Tidak Sedang Menikah' ? 'selected' : '' }}>Belum/Tidak Sedang
                        Menikah</option>
                </select>
                @error('status_kawin')
                    <p class="mt-1 text-sm text-red-600">{{ $message }}</p>
                @enderror
            </div>
        </div>
        {{-- end of line 2 --}}

        {{-- line3 --}}
        <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-5 p-1">
            <div class="">
                <label for="agama" class="block mb-2 text-sm font-medium text-gray-900 dark:text-gray-300">Agama
                    <span class="text-red-600 text-sm">*</span></label>
                <select name="agama" id="agama"
                    class="shadow-sm bg-gray-50 text-sm italic rounded-lg focus:ring-primary-500 focus:border-primary-500 block w-full p-2.5 {{ $errors->has('agama') ? 'border border-red-500' : 'border border-gray-300' }}"
                    required>
                    <option value="">Pilih agama</option>
                    <option value="Islam" {{ old('agama') == 'Islam' ? 'selected' : '' }}>Islam</option>
                    <option value="Katolik" {{ old('agama') == 'Katolik' ? 'selected' : '' }}>Katolik</option>
                    <option value="Protestan" {{ old('agama') == 'Protestan' ? 'selected' : '' }}>Protestan</option>
                    <option value="Budha" {{ old('agama') == 'Budha' ? 'selected' : '' }}>Budha</option>
                    <option value="Konghuchu" {{ old('agama') == 'Konghuchu' ? 'selected' : '' }}>Konghuchu</option>
                </select>
                @error('agama')
                    <p class="mt-1 text-sm text-red-600">{{ $message }}</p>
                @enderror
            </div>
            <div class="">
                <label for="tempat_lahir"
                    class="block mb-2 text-sm font-medium text-gray-900 dark:text-gray-300">Tempat
                    Lahir <span class="text-red-600 text-sm">*</span></label>
                <input type="text" name="tempat_lahir" id="tempat_lahir"
                    class="shadow-sm bg-gray-50 text-sm italic rounded-lg focus:ring-primary-500 focus:border-primary-500 block w-full p-2.5 {{ $errors->has('tempat_lahir') ? 'border border-red-500' : 'border border-gray-300' }}"
                    placeholder="Kota kelahiran" value="{{ old('tempat_lahir') }}" required>
                @error('tempat_lahir')
                    <p class="mt-1 text-sm text-red-600">{{ $message }}</p>
                @enderror
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
                    <input datepicker name="tanggal_lahir" id="tanggal_lahir" type="text"
                        class="bg-gray-50 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full ps-10 p-2.5 {{ $errors->has('tanggal_lahir') ? 'border border-red-500' : 'border border-gray-300' }}"
                        placeholder="Pilih tanggal lahir" value="{{ old('tanggal_lahir') }}" required>
                    @error('tanggal_lahir')
                        <p class="mt-1 text-sm text-red-600">{{ $message }}</p>
                    @enderror
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
                    class="placeholder:text-gray-400 shadow-sm bg-gray-50 text-sm italic rounded-lg focus:ring-primary-500 focus:border-primary-500 block w-full p-2.5 {{ $errors->has('golongan_darah') ? 'border border-red-500' : 'border border-gray-300' }}"
                    placeholder="Golongan darah" value="{{ old('golongan_darah') }}" required>
                @error('golongan_darah')
                    <p class="mt-1 text-sm text-red-600">{{ $message }}</p>
                @enderror
            </div>

            <div class="">
                <label for="kondisi_kesehatan"
                    class="block mb-2 text-sm font-medium text-gray-900 dark:text-gray-300">Kondisi Kesehatan <span
                        class="text-red-600 text-sm">*</span></label>
                <select name="kondisi_kesehatan" id="kondisi_kesehatan"
                    class="shadow-sm bg-gray-50 text-sm italic rounded-lg focus:ring-primary-500 focus:border-primary-500 block w-full p-2.5 {{ $errors->has('kondisi_kesehatan') ? 'border border-red-500' : 'border border-gray-300' }}"
                    required>
                    <option value="">Kondisi kesehatan anda</option>
                    <option value="Sehat" {{ old('kondisi_kesehatan') == 'Sehat' ? 'selected' : '' }}>Sehat</option>
                    <option value="Tidak Sehat" {{ old('kondisi_kesehatan') == 'Tidak Sehat' ? 'selected' : '' }}>
                        Tidak Sehat</option>
                </select>
                @error('kondisi_kesehatan')
                    <p class="mt-1 text-sm text-red-600">{{ $message }}</p>
                @enderror
            </div>

            <div class="">
                <label for="berat_badan" class="block mb-2 text-sm font-medium text-gray-900 dark:text-gray-300">Berat
                    Badan (KG) <span class="text-red-600 text-sm">*</span></label>
                <input type="number" name="berat_badan" id="berat_badan"
                    class="placeholder:text-gray-400 shadow-sm bg-gray-50 text-sm italic rounded-lg focus:ring-primary-500 focus:border-primary-500 block w-full p-2.5 {{ $errors->has('berat_badan') ? 'border border-red-500' : 'border border-gray-300' }}"
                    placeholder="Berat badan (KG)" value="{{ old('berat_badan') }}" required>
                @error('berat_badan')
                    <p class="mt-1 text-sm text-red-600">{{ $message }}</p>
                @enderror
            </div>

            <div class="">
                <label for="tinggi_badan"
                    class="block mb-2 text-sm font-medium text-gray-900 dark:text-gray-300">Tinggi
                    Badan (CM) <span class="text-red-600 text-sm">*</span></label>
                <input type="number" name="tinggi_badan" id="tinggi_badan"
                    class="placeholder:text-gray-400 shadow-sm bg-gray-50 text-sm italic rounded-lg focus:ring-primary-500 focus:border-primary-500 block w-full p-2.5 {{ $errors->has('tinggi_badan') ? 'border border-red-500' : 'border border-gray-300' }}"
                    placeholder="Tinggi badan (CM)" value="{{ old('tinggi_badan') }}" required>
                @error('tinggi_badan')
                    <p class="mt-1 text-sm text-red-600">{{ $message }}</p>
                @enderror
            </div>
        </div>
        {{-- end of line 4 --}}
    </div>
</div>
