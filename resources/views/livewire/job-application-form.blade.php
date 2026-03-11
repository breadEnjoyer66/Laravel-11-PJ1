<div class="space-y-6">
    <div class="max-w-7xl mx-auto mt-20 px-6 py-10 bg-white border border-slate-100 rounded-2xl">
        <h2
            class="text-3xl font-bold text-gray-800 mb-6 text-center bg-gradient-to-r from-orange-600 to-orange-500 text-transparent bg-clip-text">
            Fill Application Form
        </h2>
        <p class="text-center text-sm text-gray-600"><span class="text-red-600 text-sm">*</span> menandakan kolom harus
            diisi.</p>

        @if (session('success'))
            <div class="mb-4 p-4 rounded-lg bg-green-100 text-green-700">
                {{ session('success') }}
            </div>
        @endif

        @if ($errors->any())
            <div class="p-4 mb-6 text-red-800 bg-red-100 border border-red-300 rounded-lg">
                <ul class="list-disc ml-5">
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif

        <form wire:submit="submitForm" enctype="multipart/form-data" class="space-y-6">
            <!-- Progress Bar -->
            <div class="w-full bg-gray-200 h-3 rounded-full overflow-hidden mb-6">
                <div class="h-3 bg-gradient-to-r from-orange-600 to-orange-500 rounded-full transition-all duration-500"
                    style="width: {{ ($step / $totalSteps) * 100 }}%"></div>
            </div>

            <!-- Step 1: Personal Information -->
            @if ($step === 1)
                <div class="space-y-8">
                    <div class="mb-6 text-gray-800">
                        <p class="mb-6">Kepada Yth.<br>
                            TIM HRD<br>
                            PT. Primajaya Multi Technology</p>

                        <p class="mb-6">Melalui formulir online dari website www.pj-tech.com ini, saya mengajukan
                            lamaran ke perusahaan
                            bapak. Di bawah ini adalah informasi dan pernyataan diri saya. Semua pernyataan yang ada
                            pada formulir lamaran kerja ini
                            adalah benar dan sesuai adanya, serta dapat dipertanggungjawabkan. Saya sadar bahwa
                            kesalahan pada pemberian
                            informasi di formulir lamaran kerja ini dapat menyebabkan saya menerima konsekuensi dari PT.
                            Primajaya Multi
                            Technology.</p>

                        <p>Saya bersedia apabila foto dan dokumen yang saya sertakan tidak akan dikembalikan dan akan
                            menjadi hak milik
                            PT. Primajaya Multi Technology.</p>
                    </div>

                    <h2 class="text-xl font-semibold mb-4">Page 1 - Personal Information</h2>

                    <div>
                        <h2 class="text-lg text-gray-700 font-semibold">Posisi Yang Dilamar</h2>
                        <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-5 p-1">
                            <div>
                                <label for="posisi_prioritas"
                                    class="block mb-2 text-sm font-medium text-gray-900">Prioritas <span
                                        class="text-red-600 text-sm">*</span></label>
                                <select wire:model="posisi_prioritas" id="posisi_prioritas"
                                    class="shadow-sm bg-gray-50 text-sm italic rounded-lg focus:ring-orange-500 focus:border-orange-500 block w-full p-2.5 border {{ $errors->has('posisi_prioritas') ? 'border-red-500' : 'border-gray-300' }}"
                                    required>
                                    <option value="">Pilih posisi prioritas</option>
                                    @foreach ($open_positions as $open_position)
                                        <option value="{{ $open_position->nama_posisi }}">
                                            {{ $open_position->nama_posisi }}</option>
                                    @endforeach
                                </select>
                                @error('posisi_prioritas')
                                    <p class="mt-1 text-sm text-red-600">{{ $message }}</p>
                                @enderror
                            </div>
                            <div>
                                <label for="posisi_alternatif"
                                    class="block mb-2 text-sm font-medium text-gray-900">Alternatif <span
                                        class="text-red-600 text-sm">*</span></label>
                                <select wire:model="posisi_alternatif" id="posisi_alternatif"
                                    class="shadow-sm bg-gray-50 text-sm italic rounded-lg focus:ring-orange-500 focus:border-orange-500 block w-full p-2.5 border {{ $errors->has('posisi_alternatif') ? 'border-red-500' : 'border-gray-300' }}"
                                    required>
                                    <option value="">Pilih posisi alternatif</option>
                                    @foreach ($open_positions as $open_position)
                                        <option value="{{ $open_position->nama_posisi }}">
                                            {{ $open_position->nama_posisi }}</option>
                                    @endforeach
                                </select>
                                @error('posisi_alternatif')
                                    <p class="mt-1 text-sm text-red-600">{{ $message }}</p>
                                @enderror
                            </div>
                            <div>
                                <label for="keahlian" class="block mb-2 text-sm font-medium text-gray-900">Keahlian
                                    <span class="text-red-600 text-sm">*</span></label>
                                <input wire:model="keahlian" type="text" id="keahlian"
                                    class="shadow-sm bg-gray-50 text-sm italic rounded-lg focus:ring-orange-500 focus:border-orange-500 block w-full p-2.5 border {{ $errors->has('keahlian') ? 'border-red-500' : 'border-gray-300' }}"
                                    required>
                                @error('keahlian')
                                    <p class="mt-1 text-sm text-red-600">{{ $message }}</p>
                                @enderror
                            </div>
                        </div>
                    </div>

                    <!-- Foto dan Nama -->
                    <div class="grid grid-cols-1 md:grid-cols-3 gap-5">
                        <div>
                            <label for="pas_foto" class="block mb-2 text-sm font-medium text-gray-900">Photo <span
                                    class="text-red-600 text-sm">*</span></label>
                            <input wire:model="pas_foto" type="file" id="pas_foto" accept="image/*"
                                class="shadow-sm bg-gray-50 text-sm italic rounded-lg focus:ring-orange-500 focus:border-orange-500 block w-full p-2.5 border {{ $errors->has('pas_foto') ? 'border-red-500' : 'border-gray-300' }}"
                                required>
                            @error('pas_foto')
                                <p class="mt-1 text-sm text-red-600">{{ $message }}</p>
                            @enderror
                        </div>
                        <div>
                            <label for="nama_lengkap" class="block mb-2 text-sm font-medium text-gray-900">Nama Lengkap
                                <span class="text-red-600 text-sm">*</span></label>
                            <input wire:model="nama_lengkap" type="text" id="nama_lengkap"
                                class="shadow-sm bg-gray-50 text-sm italic rounded-lg focus:ring-orange-500 focus:border-orange-500 block w-full p-2.5 border {{ $errors->has('nama_lengkap') ? 'border-red-500' : 'border-gray-300' }}"
                                required>
                            @error('nama_lengkap')
                                <p class="mt-1 text-sm text-red-600">{{ $message }}</p>
                            @enderror
                        </div>
                    </div>

                    <!-- Email and Phone -->
                    <div class="grid grid-cols-1 md:grid-cols-2 gap-5">
                        <div>
                            <label for="email" class="block mb-2 text-sm font-medium text-gray-900">Email <span
                                    class="text-red-600 text-sm">*</span></label>
                            <input wire:model="email" type="email" id="email"
                                class="shadow-sm bg-gray-50 text-sm italic rounded-lg focus:ring-orange-500 focus:border-orange-500 block w-full p-2.5 border {{ $errors->has('email') ? 'border-red-500' : 'border-gray-300' }}"
                                required>
                            @error('email')
                                <p class="mt-1 text-sm text-red-600">{{ $message }}</p>
                            @enderror
                        </div>
                        <div>
                            <label for="no_hp_whatsapp" class="block mb-2 text-sm font-medium text-gray-900">No.
                                HP/WhatsApp <span class="text-red-600 text-sm">*</span></label>
                            <input wire:model="no_hp_whatsapp" type="text" id="no_hp_whatsapp"
                                class="shadow-sm bg-gray-50 text-sm italic rounded-lg focus:ring-orange-500 focus:border-orange-500 block w-full p-2.5 border {{ $errors->has('no_hp_whatsapp') ? 'border-red-500' : 'border-gray-300' }}"
                                placeholder="+62..." required>
                            @error('no_hp_whatsapp')
                                <p class="mt-1 text-sm text-red-600">{{ $message }}</p>
                            @enderror
                        </div>
                    </div>

                    <!-- Personal Details -->
                    <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-5">
                        <div>
                            <label for="jenis_kelamin" class="block mb-2 text-sm font-medium text-gray-900">Jenis
                                Kelamin <span class="text-red-600 text-sm">*</span></label>
                            <select wire:model="jenis_kelamin" id="jenis_kelamin"
                                class="shadow-sm bg-gray-50 text-sm italic rounded-lg focus:ring-orange-500 focus:border-orange-500 block w-full p-2.5 border {{ $errors->has('jenis_kelamin') ? 'border-red-500' : 'border-gray-300' }}"
                                required>
                                <option value="">Pilih</option>
                                <option value="Laki-laki">Laki-laki</option>
                                <option value="Perempuan">Perempuan</option>
                            </select>
                            @error('jenis_kelamin')
                                <p class="mt-1 text-sm text-red-600">{{ $message }}</p>
                            @enderror
                        </div>
                        <div>
                            <label for="status_kawin" class="block mb-2 text-sm font-medium text-gray-900">Status
                                Perkawinan <span class="text-red-600 text-sm">*</span></label>
                            <select wire:model="status_kawin" id="status_kawin"
                                class="shadow-sm bg-gray-50 text-sm italic rounded-lg focus:ring-orange-500 focus:border-orange-500 block w-full p-2.5 border {{ $errors->has('status_kawin') ? 'border-red-500' : 'border-gray-300' }}"
                                required>
                                <option value="">Pilih</option>
                                <option value="Belum Menikah">Belum Menikah</option>
                                <option value="Menikah">Menikah</option>
                                <option value="Cerai">Cerai</option>
                            </select>
                            @error('status_kawin')
                                <p class="mt-1 text-sm text-red-600">{{ $message }}</p>
                            @enderror
                        </div>
                        <div>
                            <label for="agama" class="block mb-2 text-sm font-medium text-gray-900">Agama <span
                                    class="text-red-600 text-sm">*</span></label>
                            <select wire:model="agama" id="agama"
                                class="shadow-sm bg-gray-50 text-sm italic rounded-lg focus:ring-orange-500 focus:border-orange-500 block w-full p-2.5 border {{ $errors->has('agama') ? 'border-red-500' : 'border-gray-300' }}"
                                required>
                                <option value="">Pilih</option>
                                <option value="Islam">Islam</option>
                                <option value="Kristen">Kristen</option>
                                <option value="Katolik">Katolik</option>
                                <option value="Hindu">Hindu</option>
                                <option value="Buddha">Buddha</option>
                                <option value="Konghucu">Konghucu</option>
                            </select>
                            @error('agama')
                                <p class="mt-1 text-sm text-red-600">{{ $message }}</p>
                            @enderror
                        </div>
                        <div>
                            <label for="golongan_darah" class="block mb-2 text-sm font-medium text-gray-900">Golongan
                                Darah</label>
                            <select wire:model="golongan_darah" id="golongan_darah"
                                class="shadow-sm bg-gray-50 text-sm italic rounded-lg focus:ring-orange-500 focus:border-orange-500 block w-full p-2.5 border border-gray-300">
                                <option value="">Pilih</option>
                                <option value="A">A</option>
                                <option value="B">B</option>
                                <option value="AB">AB</option>
                                <option value="O">O</option>
                            </select>
                        </div>
                    </div>

                    <!-- Birth Info -->
                    <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-5">
                        <div>
                            <label for="tempat_lahir" class="block mb-2 text-sm font-medium text-gray-900">Tempat
                                Lahir <span class="text-red-600 text-sm">*</span></label>
                            <input wire:model="tempat_lahir" type="text" id="tempat_lahir"
                                class="shadow-sm bg-gray-50 text-sm italic rounded-lg focus:ring-orange-500 focus:border-orange-500 block w-full p-2.5 border {{ $errors->has('tempat_lahir') ? 'border-red-500' : 'border-gray-300' }}"
                                required>
                            @error('tempat_lahir')
                                <p class="mt-1 text-sm text-red-600">{{ $message }}</p>
                            @enderror
                        </div>
                        <div>
                            <label for="tanggal_lahir" class="block mb-2 text-sm font-medium text-gray-900">Tanggal
                                Lahir <span class="text-red-600 text-sm">*</span></label>
                            <input wire:model="tanggal_lahir" type="date" id="tanggal_lahir"
                                class="shadow-sm bg-gray-50 text-sm italic rounded-lg focus:ring-orange-500 focus:border-orange-500 block w-full p-2.5 border {{ $errors->has('tanggal_lahir') ? 'border-red-500' : 'border-gray-300' }}"
                                required>
                            @error('tanggal_lahir')
                                <p class="mt-1 text-sm text-red-600">{{ $message }}</p>
                            @enderror
                        </div>
                        <div>
                            <label for="kondisi_kesehatan"
                                class="block mb-2 text-sm font-medium text-gray-900">Kondisi Kesehatan</label>
                            <input wire:model="kondisi_kesehatan" type="text" id="kondisi_kesehatan"
                                class="shadow-sm bg-gray-50 text-sm italic rounded-lg focus:ring-orange-500 focus:border-orange-500 block w-full p-2.5 border border-gray-300">
                        </div>
                    </div>

                    <!-- Physical -->
                    <div class="grid grid-cols-1 md:grid-cols-2 gap-5">
                        <div>
                            <label for="berat_badan" class="block mb-2 text-sm font-medium text-gray-900">Berat Badan
                                (kg)</label>
                            <input wire:model="berat_badan" type="number" id="berat_badan" step="0.1"
                                class="shadow-sm bg-gray-50 text-sm italic rounded-lg focus:ring-orange-500 focus:border-orange-500 block w-full p-2.5 border border-gray-300">
                        </div>
                        <div>
                            <label for="tinggi_badan" class="block mb-2 text-sm font-medium text-gray-900">Tinggi
                                Badan (cm)</label>
                            <input wire:model="tinggi_badan" type="number" id="tinggi_badan" step="0.1"
                                class="shadow-sm bg-gray-50 text-sm italic rounded-lg focus:ring-orange-500 focus:border-orange-500 block w-full p-2.5 border border-gray-300">
                        </div>
                    </div>
                </div>
            @endif

            <!-- Step 2: Family Information -->
            @if ($step === 2)
                <div class="space-y-8">
                    <h2 class="text-xl font-semibold mb-4">Page 2 - Family Information</h2>

                    <div>
                        <h3 class="text-lg font-semibold mb-4">Orang Tua</h3>
                        <div class="grid grid-cols-1 md:grid-cols-3 gap-5">
                            <div>
                                <label for="nama_ayah" class="block mb-2 text-sm font-medium text-gray-900">Nama Ayah
                                    <span class="text-red-600 text-sm">*</span></label>
                                <input wire:model="nama_ayah" type="text" id="nama_ayah"
                                    class="shadow-sm bg-gray-50 text-sm italic rounded-lg focus:ring-orange-500 focus:border-orange-500 block w-full p-2.5 border {{ $errors->has('nama_ayah') ? 'border-red-500' : 'border-gray-300' }}"
                                    required>
                                @error('nama_ayah')
                                    <p class="mt-1 text-sm text-red-600">{{ $message }}</p>
                                @enderror
                            </div>
                            <div>
                                <label for="usia_ayah" class="block mb-2 text-sm font-medium text-gray-900">Usia Ayah
                                    <span class="text-red-600 text-sm">*</span></label>
                                <input wire:model="usia_ayah" type="text" id="usia_ayah"
                                    class="shadow-sm bg-gray-50 text-sm italic rounded-lg focus:ring-orange-500 focus:border-orange-500 block w-full p-2.5 border {{ $errors->has('usia_ayah') ? 'border-red-500' : 'border-gray-300' }}"
                                    required>
                                @error('usia_ayah')
                                    <p class="mt-1 text-sm text-red-600">{{ $message }}</p>
                                @enderror
                            </div>
                            <div>
                                <label for="pekerjaan_ayah"
                                    class="block mb-2 text-sm font-medium text-gray-900">Pekerjaan Ayah <span
                                        class="text-red-600 text-sm">*</span></label>
                                <input wire:model="pekerjaan_ayah" type="text" id="pekerjaan_ayah"
                                    class="shadow-sm bg-gray-50 text-sm italic rounded-lg focus:ring-orange-500 focus:border-orange-500 block w-full p-2.5 border {{ $errors->has('pekerjaan_ayah') ? 'border-red-500' : 'border-gray-300' }}"
                                    required>
                                @error('pekerjaan_ayah')
                                    <p class="mt-1 text-sm text-red-600">{{ $message }}</p>
                                @enderror
                            </div>
                        </div>

                        <div class="grid grid-cols-1 md:grid-cols-3 gap-5 mt-5">
                            <div>
                                <label for="nama_ibu" class="block mb-2 text-sm font-medium text-gray-900">Nama Ibu
                                    <span class="text-red-600 text-sm">*</span></label>
                                <input wire:model="nama_ibu" type="text" id="nama_ibu"
                                    class="shadow-sm bg-gray-50 text-sm italic rounded-lg focus:ring-orange-500 focus:border-orange-500 block w-full p-2.5 border {{ $errors->has('nama_ibu') ? 'border-red-500' : 'border-gray-300' }}"
                                    required>
                                @error('nama_ibu')
                                    <p class="mt-1 text-sm text-red-600">{{ $message }}</p>
                                @enderror
                            </div>
                            <div>
                                <label for="usia_ibu" class="block mb-2 text-sm font-medium text-gray-900">Usia Ibu
                                    <span class="text-red-600 text-sm">*</span></label>
                                <input wire:model="usia_ibu" type="text" id="usia_ibu"
                                    class="shadow-sm bg-gray-50 text-sm italic rounded-lg focus:ring-orange-500 focus:border-orange-500 block w-full p-2.5 border {{ $errors->has('usia_ibu') ? 'border-red-500' : 'border-gray-300' }}"
                                    required>
                                @error('usia_ibu')
                                    <p class="mt-1 text-sm text-red-600">{{ $message }}</p>
                                @enderror
                            </div>
                            <div>
                                <label for="pekerjaan_ibu"
                                    class="block mb-2 text-sm font-medium text-gray-900">Pekerjaan Ibu <span
                                        class="text-red-600 text-sm">*</span></label>
                                <input wire:model="pekerjaan_ibu" type="text" id="pekerjaan_ibu"
                                    class="shadow-sm bg-gray-50 text-sm italic rounded-lg focus:ring-orange-500 focus:border-orange-500 block w-full p-2.5 border {{ $errors->has('pekerjaan_ibu') ? 'border-red-500' : 'border-gray-300' }}"
                                    required>
                                @error('pekerjaan_ibu')
                                    <p class="mt-1 text-sm text-red-600">{{ $message }}</p>
                                @enderror
                            </div>
                        </div>
                    </div>

                    <!-- Siblings (Optional) -->
                    <div>
                        <h3 class="text-lg font-semibold mb-4">Saudara Kandung (Opsional)</h3>
                        <div class="space-y-5">
                            @for ($i = 1; $i <= 4; $i++)
                                <div class="grid grid-cols-1 md:grid-cols-3 gap-5">
                                    <div>
                                        <label for="nama_saudara_kandung_{{ $i }}"
                                            class="block mb-2 text-sm font-medium text-gray-900">Nama Saudara
                                            {{ $i }}</label>
                                        <input wire:model="nama_saudara_kandung_{{ $i }}" type="text"
                                            id="nama_saudara_kandung_{{ $i }}"
                                            class="shadow-sm bg-gray-50 text-sm italic rounded-lg focus:ring-orange-500 focus:border-orange-500 block w-full p-2.5 border border-gray-300">
                                    </div>
                                    <div>
                                        <label for="usia_saudara_kandung_{{ $i }}"
                                            class="block mb-2 text-sm font-medium text-gray-900">Usia</label>
                                        <input wire:model="usia_saudara_kandung_{{ $i }}" type="text"
                                            id="usia_saudara_kandung_{{ $i }}"
                                            class="shadow-sm bg-gray-50 text-sm italic rounded-lg focus:ring-orange-500 focus:border-orange-500 block w-full p-2.5 border border-gray-300">
                                    </div>
                                    <div>
                                        <label for="pekerjaan_saudara_kandung_{{ $i }}"
                                            class="block mb-2 text-sm font-medium text-gray-900">Pekerjaan</label>
                                        <input wire:model="pekerjaan_saudara_kandung_{{ $i }}"
                                            type="text" id="pekerjaan_saudara_kandung_{{ $i }}"
                                            class="shadow-sm bg-gray-50 text-sm italic rounded-lg focus:ring-orange-500 focus:border-orange-500 block w-full p-2.5 border border-gray-300">
                                    </div>
                                </div>
                            @endfor
                        </div>
                    </div>
                </div>
            @endif

            <!-- Step 3: Address -->
            @if ($step === 3)
                <div class="space-y-8">
                    <h2 class="text-xl font-semibold mb-4">Page 3 - Address Information</h2>

                    <div>
                        <label for="alamat_domisili" class="block mb-2 text-sm font-medium text-gray-900">Alamat
                            Domisili <span class="text-red-600 text-sm">*</span></label>
                        <textarea wire:model="alamat_domisili" id="alamat_domisili"
                            class="shadow-sm bg-gray-50 text-sm italic rounded-lg focus:ring-orange-500 focus:border-orange-500 block w-full p-2.5 border {{ $errors->has('alamat_domisili') ? 'border-red-500' : 'border-gray-300' }}"
                            rows="4" required></textarea>
                        @error('alamat_domisili')
                            <p class="mt-1 text-sm text-red-600">{{ $message }}</p>
                        @enderror
                    </div>

                    <div class="grid grid-cols-1 md:grid-cols-3 gap-5">
                        <div>
                            <label for="kota_kabupaten"
                                class="block mb-2 text-sm font-medium text-gray-900">Kota/Kabupaten <span
                                    class="text-red-600 text-sm">*</span></label>
                            <input wire:model="kota_kabupaten" type="text" id="kota_kabupaten"
                                class="shadow-sm bg-gray-50 text-sm italic rounded-lg focus:ring-orange-500 focus:border-orange-500 block w-full p-2.5 border {{ $errors->has('kota_kabupaten') ? 'border-red-500' : 'border-gray-300' }}"
                                required>
                            @error('kota_kabupaten')
                                <p class="mt-1 text-sm text-red-600">{{ $message }}</p>
                            @enderror
                        </div>
                        <div>
                            <label for="kode_pos" class="block mb-2 text-sm font-medium text-gray-900">Kode Pos <span
                                    class="text-red-600 text-sm">*</span></label>
                            <input wire:model="kode_pos" type="text" id="kode_pos"
                                class="shadow-sm bg-gray-50 text-sm italic rounded-lg focus:ring-orange-500 focus:border-orange-500 block w-full p-2.5 border {{ $errors->has('kode_pos') ? 'border-red-500' : 'border-gray-300' }}"
                                required>
                            @error('kode_pos')
                                <p class="mt-1 text-sm text-red-600">{{ $message }}</p>
                            @enderror
                        </div>
                        <div>
                            <label for="tel_rumah" class="block mb-2 text-sm font-medium text-gray-900">Telepon
                                Rumah</label>
                            <input wire:model="tel_rumah" type="text" id="tel_rumah" placeholder="+62..."
                                class="shadow-sm bg-gray-50 text-sm italic rounded-lg focus:ring-orange-500 focus:border-orange-500 block w-full p-2.5 border {{ $errors->has('tel_rumah') ? 'border-red-500' : 'border-gray-300' }}">
                            @error('tel_rumah')
                                <p class="mt-1 text-sm text-red-600">{{ $message }}</p>
                            @enderror
                        </div>
                    </div>
                </div>
            @endif

            <!-- Step 4: Education - SMA -->
            @if ($step === 4)
                <div class="space-y-8">
                    <h2 class="text-xl font-semibold mb-4">Page 4 - Education (SMA/SMK)</h2>

                    <div class="grid grid-cols-1 md:grid-cols-2 gap-5">
                        <div>
                            <label for="sma_dari" class="block mb-2 text-sm font-medium text-gray-900">Dari Tahun
                                <span class="text-red-600 text-sm">*</span></label>
                            <input wire:model="sma_dari" type="number" id="sma_dari"
                                class="shadow-sm bg-gray-50 text-sm italic rounded-lg focus:ring-orange-500 focus:border-orange-500 block w-full p-2.5 border {{ $errors->has('sma_dari') ? 'border-red-500' : 'border-gray-300' }}"
                                required>
                            @error('sma_dari')
                                <p class="mt-1 text-sm text-red-600">{{ $message }}</p>
                            @enderror
                        </div>
                        <div>
                            <label for="sma_sampai" class="block mb-2 text-sm font-medium text-gray-900">Sampai Tahun
                                <span class="text-red-600 text-sm">*</span></label>
                            <input wire:model="sma_sampai" type="number" id="sma_sampai"
                                class="shadow-sm bg-gray-50 text-sm italic rounded-lg focus:ring-orange-500 focus:border-orange-500 block w-full p-2.5 border {{ $errors->has('sma_sampai') ? 'border-red-500' : 'border-gray-300' }}"
                                required>
                            @error('sma_sampai')
                                <p class="mt-1 text-sm text-red-600">{{ $message }}</p>
                            @enderror
                        </div>
                    </div>

                    <div>
                        <label for="sma_nama" class="block mb-2 text-sm font-medium text-gray-900">Nama Sekolah <span
                                class="text-red-600 text-sm">*</span></label>
                        <input wire:model="sma_nama" type="text" id="sma_nama"
                            class="shadow-sm bg-gray-50 text-sm italic rounded-lg focus:ring-orange-500 focus:border-orange-500 block w-full p-2.5 border {{ $errors->has('sma_nama') ? 'border-red-500' : 'border-gray-300' }}"
                            required>
                        @error('sma_nama')
                            <p class="mt-1 text-sm text-red-600">{{ $message }}</p>
                        @enderror
                    </div>

                    <div class="grid grid-cols-1 md:grid-cols-2 gap-5">
                        <div>
                            <label for="sma_jurusan" class="block mb-2 text-sm font-medium text-gray-900">Jurusan
                                <span class="text-red-600 text-sm">*</span></label>
                            <input wire:model="sma_jurusan" type="text" id="sma_jurusan"
                                class="shadow-sm bg-gray-50 text-sm italic rounded-lg focus:ring-orange-500 focus:border-orange-500 block w-full p-2.5 border {{ $errors->has('sma_jurusan') ? 'border-red-500' : 'border-gray-300' }}"
                                required>
                            @error('sma_jurusan')
                                <p class="mt-1 text-sm text-red-600">{{ $message }}</p>
                            @enderror
                        </div>
                        <div>
                            <label for="sma_status_lulus" class="block mb-2 text-sm font-medium text-gray-900">Status
                                Lulus <span class="text-red-600 text-sm">*</span></label>
                            <select wire:model="sma_status_lulus" id="sma_status_lulus"
                                class="shadow-sm bg-gray-50 text-sm italic rounded-lg focus:ring-orange-500 focus:border-orange-500 block w-full p-2.5 border {{ $errors->has('sma_status_lulus') ? 'border-red-500' : 'border-gray-300' }}"
                                required>
                                <option value="">Pilih</option>
                                <option value="Sudah Lulus">Sudah Lulus</option>
                                <option value="Belum Lulus">Belum Lulus</option>
                            </select>
                            @error('sma_status_lulus')
                                <p class="mt-1 text-sm text-red-600">{{ $message }}</p>
                            @enderror
                        </div>
                    </div>
                </div>
            @endif

            <!-- Step 5: Higher Education (Diploma, S1, S2) -->
            @if ($step === 5)
                <div class="space-y-8">
                    <h2 class="text-xl font-semibold mb-4">Page 5 - Higher Education (Opsional)</h2>

                    <!-- Diploma -->
                    <div>
                        <h3 class="text-lg font-semibold mb-4">Diploma</h3>
                        <div class="grid grid-cols-1 md:grid-cols-2 gap-5">
                            <div>
                                <label for="diploma_dari" class="block mb-2 text-sm font-medium text-gray-900">Dari
                                    Tahun</label>
                                <input wire:model="diploma_dari" type="number" id="diploma_dari"
                                    class="shadow-sm bg-gray-50 text-sm italic rounded-lg focus:ring-orange-500 focus:border-orange-500 block w-full p-2.5 border border-gray-300">
                            </div>
                            <div>
                                <label for="diploma_sampai"
                                    class="block mb-2 text-sm font-medium text-gray-900">Sampai Tahun</label>
                                <input wire:model="diploma_sampai" type="number" id="diploma_sampai"
                                    class="shadow-sm bg-gray-50 text-sm italic rounded-lg focus:ring-orange-500 focus:border-orange-500 block w-full p-2.5 border border-gray-300">
                            </div>
                        </div>
                        <div class="grid grid-cols-1 md:grid-cols-2 gap-5 mt-5">
                            <div>
                                <label for="diploma_nama_univ"
                                    class="block mb-2 text-sm font-medium text-gray-900">Nama Universitas</label>
                                <input wire:model="diploma_nama_univ" type="text" id="diploma_nama_univ"
                                    class="shadow-sm bg-gray-50 text-sm italic rounded-lg focus:ring-orange-500 focus:border-orange-500 block w-full p-2.5 border border-gray-300">
                            </div>
                            <div>
                                <label for="diploma_jurusan"
                                    class="block mb-2 text-sm font-medium text-gray-900">Jurusan</label>
                                <input wire:model="diploma_jurusan" type="text" id="diploma_jurusan"
                                    class="shadow-sm bg-gray-50 text-sm italic rounded-lg focus:ring-orange-500 focus:border-orange-500 block w-full p-2.5 border border-gray-300">
                            </div>
                        </div>
                        <div class="grid grid-cols-1 md:grid-cols-2 gap-5 mt-5">
                            <div>
                                <label for="diploma_ipk"
                                    class="block mb-2 text-sm font-medium text-gray-900">IPK</label>
                                <input wire:model="diploma_ipk" type="number" id="diploma_ipk" step="0.01"
                                    min="0" max="4"
                                    class="shadow-sm bg-gray-50 text-sm italic rounded-lg focus:ring-orange-500 focus:border-orange-500 block w-full p-2.5 border border-gray-300">
                            </div>
                            <div>
                                <label for="diploma_status_lulus"
                                    class="block mb-2 text-sm font-medium text-gray-900">Status Lulus</label>
                                <select wire:model="diploma_status_lulus" id="diploma_status_lulus"
                                    class="shadow-sm bg-gray-50 text-sm italic rounded-lg focus:ring-orange-500 focus:border-orange-500 block w-full p-2.5 border border-gray-300">
                                    <option value="">Pilih</option>
                                    <option value="Sudah Lulus">Sudah Lulus</option>
                                    <option value="Belum Lulus">Belum Lulus</option>
                                </select>
                            </div>
                        </div>
                    </div>

                    <!-- S1 -->
                    <div>
                        <h3 class="text-lg font-semibold mb-4">S1</h3>
                        <div class="grid grid-cols-1 md:grid-cols-2 gap-5">
                            <div>
                                <label for="s1_dari" class="block mb-2 text-sm font-medium text-gray-900">Dari
                                    Tahun</label>
                                <input wire:model="s1_dari" type="number" id="s1_dari"
                                    class="shadow-sm bg-gray-50 text-sm italic rounded-lg focus:ring-orange-500 focus:border-orange-500 block w-full p-2.5 border border-gray-300">
                            </div>
                            <div>
                                <label for="s1_sampai" class="block mb-2 text-sm font-medium text-gray-900">Sampai
                                    Tahun</label>
                                <input wire:model="s1_sampai" type="number" id="s1_sampai"
                                    class="shadow-sm bg-gray-50 text-sm italic rounded-lg focus:ring-orange-500 focus:border-orange-500 block w-full p-2.5 border border-gray-300">
                            </div>
                        </div>
                        <div class="grid grid-cols-1 md:grid-cols-2 gap-5 mt-5">
                            <div>
                                <label for="s1_nama_univ" class="block mb-2 text-sm font-medium text-gray-900">Nama
                                    Universitas</label>
                                <input wire:model="s1_nama_univ" type="text" id="s1_nama_univ"
                                    class="shadow-sm bg-gray-50 text-sm italic rounded-lg focus:ring-orange-500 focus:border-orange-500 block w-full p-2.5 border border-gray-300">
                            </div>
                            <div>
                                <label for="s1_jurusan"
                                    class="block mb-2 text-sm font-medium text-gray-900">Jurusan</label>
                                <input wire:model="s1_jurusan" type="text" id="s1_jurusan"
                                    class="shadow-sm bg-gray-50 text-sm italic rounded-lg focus:ring-orange-500 focus:border-orange-500 block w-full p-2.5 border border-gray-300">
                            </div>
                        </div>
                        <div class="grid grid-cols-1 md:grid-cols-2 gap-5 mt-5">
                            <div>
                                <label for="s1_ipk" class="block mb-2 text-sm font-medium text-gray-900">IPK</label>
                                <input wire:model="s1_ipk" type="number" id="s1_ipk" step="0.01"
                                    min="0" max="4"
                                    class="shadow-sm bg-gray-50 text-sm italic rounded-lg focus:ring-orange-500 focus:border-orange-500 block w-full p-2.5 border border-gray-300">
                            </div>
                            <div>
                                <label for="s1_status_lulus"
                                    class="block mb-2 text-sm font-medium text-gray-900">Status Lulus</label>
                                <select wire:model="s1_status_lulus" id="s1_status_lulus"
                                    class="shadow-sm bg-gray-50 text-sm italic rounded-lg focus:ring-orange-500 focus:border-orange-500 block w-full p-2.5 border border-gray-300">
                                    <option value="">Pilih</option>
                                    <option value="Sudah Lulus">Sudah Lulus</option>
                                    <option value="Belum Lulus">Belum Lulus</option>
                                </select>
                            </div>
                        </div>
                    </div>

                    <!-- S2 -->
                    <div>
                        <h3 class="text-lg font-semibold mb-4">S2</h3>
                        <div class="grid grid-cols-1 md:grid-cols-2 gap-5">
                            <div>
                                <label for="s2_dari" class="block mb-2 text-sm font-medium text-gray-900">Dari
                                    Tahun</label>
                                <input wire:model="s2_dari" type="number" id="s2_dari"
                                    class="shadow-sm bg-gray-50 text-sm italic rounded-lg focus:ring-orange-500 focus:border-orange-500 block w-full p-2.5 border border-gray-300">
                            </div>
                            <div>
                                <label for="s2_sampai" class="block mb-2 text-sm font-medium text-gray-900">Sampai
                                    Tahun</label>
                                <input wire:model="s2_sampai" type="number" id="s2_sampai"
                                    class="shadow-sm bg-gray-50 text-sm italic rounded-lg focus:ring-orange-500 focus:border-orange-500 block w-full p-2.5 border border-gray-300">
                            </div>
                        </div>
                        <div class="grid grid-cols-1 md:grid-cols-2 gap-5 mt-5">
                            <div>
                                <label for="s2_nama_univ" class="block mb-2 text-sm font-medium text-gray-900">Nama
                                    Universitas</label>
                                <input wire:model="s2_nama_univ" type="text" id="s2_nama_univ"
                                    class="shadow-sm bg-gray-50 text-sm italic rounded-lg focus:ring-orange-500 focus:border-orange-500 block w-full p-2.5 border border-gray-300">
                            </div>
                            <div>
                                <label for="s2_jurusan"
                                    class="block mb-2 text-sm font-medium text-gray-900">Jurusan</label>
                                <input wire:model="s2_jurusan" type="text" id="s2_jurusan"
                                    class="shadow-sm bg-gray-50 text-sm italic rounded-lg focus:ring-orange-500 focus:border-orange-500 block w-full p-2.5 border border-gray-300">
                            </div>
                        </div>
                        <div class="grid grid-cols-1 md:grid-cols-2 gap-5 mt-5">
                            <div>
                                <label for="s2_ipk" class="block mb-2 text-sm font-medium text-gray-900">IPK</label>
                                <input wire:model="s2_ipk" type="number" id="s2_ipk" step="0.01"
                                    min="0" max="4"
                                    class="shadow-sm bg-gray-50 text-sm italic rounded-lg focus:ring-orange-500 focus:border-orange-500 block w-full p-2.5 border border-gray-300">
                            </div>
                            <div>
                                <label for="s2_status_lulus"
                                    class="block mb-2 text-sm font-medium text-gray-900">Status Lulus</label>
                                <select wire:model="s2_status_lulus" id="s2_status_lulus"
                                    class="shadow-sm bg-gray-50 text-sm italic rounded-lg focus:ring-orange-500 focus:border-orange-500 block w-full p-2.5 border border-gray-300">
                                    <option value="">Pilih</option>
                                    <option value="Sudah Lulus">Sudah Lulus</option>
                                    <option value="Belum Lulus">Belum Lulus</option>
                                </select>
                            </div>
                        </div>
                    </div>
                </div>
            @endif

            <!-- Step 6: Language & Computer Skills -->
            @if ($step === 6)
                <div class="space-y-8">
                    <h2 class="text-xl font-semibold mb-4">Page 6 - Language & Computer Skills</h2>

                    <!-- English Skills -->
                    <div>
                        <h3 class="text-lg font-semibold mb-4">English Skills</h3>
                        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-5">
                            <select wire:model="inggris_bicara"
                                class="shadow-sm bg-gray-50 text-sm italic rounded-lg focus:ring-orange-500 focus:border-orange-500 block w-full p-2.5 border {{ $errors->has('inggris_bicara') ? 'border-red-500' : 'border-gray-300' }}"
                                required>
                                <option value="">Bicara</option>
                                <option value="Sangat Baik">Sangat Baik</option>
                                <option value="Baik">Baik</option>
                                <option value="Cukup">Cukup</option>
                                <option value="Kurang">Kurang</option>
                            </select>
                            <select wire:model="inggris_dengar"
                                class="shadow-sm bg-gray-50 text-sm italic rounded-lg focus:ring-orange-500 focus:border-orange-500 block w-full p-2.5 border {{ $errors->has('inggris_dengar') ? 'border-red-500' : 'border-gray-300' }}"
                                required>
                                <option value="">Mendengar</option>
                                <option value="Sangat Baik">Sangat Baik</option>
                                <option value="Baik">Baik</option>
                                <option value="Cukup">Cukup</option>
                                <option value="Kurang">Kurang</option>
                            </select>
                            <select wire:model="inggris_tulis"
                                class="shadow-sm bg-gray-50 text-sm italic rounded-lg focus:ring-orange-500 focus:border-orange-500 block w-full p-2.5 border {{ $errors->has('inggris_tulis') ? 'border-red-500' : 'border-gray-300' }}"
                                required>
                                <option value="">Menulis</option>
                                <option value="Sangat Baik">Sangat Baik</option>
                                <option value="Baik">Baik</option>
                                <option value="Cukup">Cukup</option>
                                <option value="Kurang">Kurang</option>
                            </select>
                            <select wire:model="inggris_baca"
                                class="shadow-sm bg-gray-50 text-sm italic rounded-lg focus:ring-orange-500 focus:border-orange-500 block w-full p-2.5 border {{ $errors->has('inggris_baca') ? 'border-red-500' : 'border-gray-300' }}"
                                required>
                                <option value="">Membaca</option>
                                <option value="Sangat Baik">Sangat Baik</option>
                                <option value="Baik">Baik</option>
                                <option value="Cukup">Cukup</option>
                                <option value="Kurang">Kurang</option>
                            </select>
                        </div>
                    </div>

                    <!-- Mandarin Skills (Optional) -->
                    <div>
                        <h3 class="text-lg font-semibold mb-4">Mandarin Skills (Optional)</h3>
                        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-5">
                            <select wire:model="mandarin_bicara"
                                class="shadow-sm bg-gray-50 text-sm italic rounded-lg focus:ring-orange-500 focus:border-orange-500 block w-full p-2.5 border border-gray-300">
                                <option value="">Bicara</option>
                                <option value="Sangat Baik">Sangat Baik</option>
                                <option value="Baik">Baik</option>
                                <option value="Cukup">Cukup</option>
                                <option value="Kurang">Kurang</option>
                            </select>
                            <select wire:model="mandarin_dengar"
                                class="shadow-sm bg-gray-50 text-sm italic rounded-lg focus:ring-orange-500 focus:border-orange-500 block w-full p-2.5 border border-gray-300">
                                <option value="">Mendengar</option>
                                <option value="Sangat Baik">Sangat Baik</option>
                                <option value="Baik">Baik</option>
                                <option value="Cukup">Cukup</option>
                                <option value="Kurang">Kurang</option>
                            </select>
                            <select wire:model="mandarin_tulis"
                                class="shadow-sm bg-gray-50 text-sm italic rounded-lg focus:ring-orange-500 focus:border-orange-500 block w-full p-2.5 border border-gray-300">
                                <option value="">Menulis</option>
                                <option value="Sangat Baik">Sangat Baik</option>
                                <option value="Baik">Baik</option>
                                <option value="Cukup">Cukup</option>
                                <option value="Kurang">Kurang</option>
                            </select>
                            <select wire:model="mandarin_baca"
                                class="shadow-sm bg-gray-50 text-sm italic rounded-lg focus:ring-orange-500 focus:border-orange-500 block w-full p-2.5 border border-gray-300">
                                <option value="">Membaca</option>
                                <option value="Sangat Baik">Sangat Baik</option>
                                <option value="Baik">Baik</option>
                                <option value="Cukup">Cukup</option>
                                <option value="Kurang">Kurang</option>
                            </select>
                        </div>
                    </div>

                    <!-- Other Language (Optional) -->
                    <div>
                        <h3 class="text-lg font-semibold mb-4">Other Language (Optional)</h3>
                        <div>
                            <input wire:model="bahasa_asing_lain" type="text" placeholder="Language Name"
                                class="shadow-sm bg-gray-50 text-sm italic rounded-lg focus:ring-orange-500 focus:border-orange-500 block w-full p-2.5 border border-gray-300">
                        </div>
                        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-5 mt-5">
                            <select wire:model="bahasa_asing_lain_bicara"
                                class="shadow-sm bg-gray-50 text-sm italic rounded-lg focus:ring-orange-500 focus:border-orange-500 block w-full p-2.5 border border-gray-300">
                                <option value="">Bicara</option>
                                <option value="Sangat Baik">Sangat Baik</option>
                                <option value="Baik">Baik</option>
                                <option value="Cukup">Cukup</option>
                                <option value="Kurang">Kurang</option>
                            </select>
                            <select wire:model="bahasa_asing_lain_dengar"
                                class="shadow-sm bg-gray-50 text-sm italic rounded-lg focus:ring-orange-500 focus:border-orange-500 block w-full p-2.5 border border-gray-300">
                                <option value="">Mendengar</option>
                                <option value="Sangat Baik">Sangat Baik</option>
                                <option value="Baik">Baik</option>
                                <option value="Cukup">Cukup</option>
                                <option value="Kurang">Kurang</option>
                            </select>
                            <select wire:model="bahasa_asing_lain_tulis"
                                class="shadow-sm bg-gray-50 text-sm italic rounded-lg focus:ring-orange-500 focus:border-orange-500 block w-full p-2.5 border border-gray-300">
                                <option value="">Menulis</option>
                                <option value="Sangat Baik">Sangat Baik</option>
                                <option value="Baik">Baik</option>
                                <option value="Cukup">Cukup</option>
                                <option value="Kurang">Kurang</option>
                            </select>
                            <select wire:model="bahasa_asing_lain_baca"
                                class="shadow-sm bg-gray-50 text-sm italic rounded-lg focus:ring-orange-500 focus:border-orange-500 block w-full p-2.5 border border-gray-300">
                                <option value="">Membaca</option>
                                <option value="Sangat Baik">Sangat Baik</option>
                                <option value="Baik">Baik</option>
                                <option value="Cukup">Cukup</option>
                                <option value="Kurang">Kurang</option>
                            </select>
                        </div>
                    </div>

                    <!-- Computer Skills -->
                    <div>
                        <h3 class="text-lg font-semibold mb-4">Computer Skills</h3>
                        <div class="grid grid-cols-1 md:grid-cols-3 gap-5">
                            <select wire:model="office_word"
                                class="shadow-sm bg-gray-50 text-sm italic rounded-lg focus:ring-orange-500 focus:border-orange-500 block w-full p-2.5 border {{ $errors->has('office_word') ? 'border-red-500' : 'border-gray-300' }}"
                                required>
                                <option value="">Word</option>
                                <option value="Sangat Baik">Sangat Baik</option>
                                <option value="Baik">Baik</option>
                                <option value="Cukup">Cukup</option>
                                <option value="Kurang">Kurang</option>
                            </select>
                            <select wire:model="office_excel"
                                class="shadow-sm bg-gray-50 text-sm italic rounded-lg focus:ring-orange-500 focus:border-orange-500 block w-full p-2.5 border {{ $errors->has('office_excel') ? 'border-red-500' : 'border-gray-300' }}"
                                required>
                                <option value="">Excel</option>
                                <option value="Sangat Baik">Sangat Baik</option>
                                <option value="Baik">Baik</option>
                                <option value="Cukup">Cukup</option>
                                <option value="Kurang">Kurang</option>
                            </select>
                            <select wire:model="office_power_point"
                                class="shadow-sm bg-gray-50 text-sm italic rounded-lg focus:ring-orange-500 focus:border-orange-500 block w-full p-2.5 border {{ $errors->has('office_power_point') ? 'border-red-500' : 'border-gray-300' }}"
                                required>
                                <option value="">PowerPoint</option>
                                <option value="Sangat Baik">Sangat Baik</option>
                                <option value="Baik">Baik</option>
                                <option value="Cukup">Cukup</option>
                                <option value="Kurang">Kurang</option>
                            </select>
                        </div>

                        <!-- Other IT Skills (Optional) -->
                        <div class="grid grid-cols-1 md:grid-cols-2 gap-5 mt-5">
                            <div>
                                <input wire:model="skill_com_lain_1" type="text" placeholder="Skill 1"
                                    class="shadow-sm bg-gray-50 text-sm italic rounded-lg focus:ring-orange-500 focus:border-orange-500 block w-full p-2.5 border border-gray-300">
                            </div>
                            <div>
                                <select wire:model="skill_com_1_level"
                                    class="shadow-sm bg-gray-50 text-sm italic rounded-lg focus:ring-orange-500 focus:border-orange-500 block w-full p-2.5 border border-gray-300">
                                    <option value="">Level</option>
                                    <option value="Sangat Baik">Sangat Baik</option>
                                    <option value="Baik">Baik</option>
                                    <option value="Cukup">Cukup</option>
                                    <option value="Kurang">Kurang</option>
                                </select>
                            </div>
                        </div>

                        <div class="grid grid-cols-1 md:grid-cols-2 gap-5 mt-5">
                            <div>
                                <input wire:model="skill_com_lain_2" type="text" placeholder="Skill 2"
                                    class="shadow-sm bg-gray-50 text-sm italic rounded-lg focus:ring-orange-500 focus:border-orange-500 block w-full p-2.5 border border-gray-300">
                            </div>
                            <div>
                                <select wire:model="skill_com_2_level"
                                    class="shadow-sm bg-gray-50 text-sm italic rounded-lg focus:ring-orange-500 focus:border-orange-500 block w-full p-2.5 border border-gray-300">
                                    <option value="">Level</option>
                                    <option value="Sangat Baik">Sangat Baik</option>
                                    <option value="Baik">Baik</option>
                                    <option value="Cukup">Cukup</option>
                                    <option value="Kurang">Kurang</option>
                                </select>
                            </div>
                        </div>
                    </div>
                </div>
            @endif

            <!-- Step 7: Work Experience -->
            @if ($step === 7)
                <div class="space-y-8">
                    <h2 class="text-xl font-semibold mb-4">Page 7 - Work Experience (Optional)</h2>

                    @for ($i = 1; $i <= 3; $i++)
                        <div class="border-t pt-6">
                            <h3 class="text-lg font-semibold mb-4">Experience {{ $i }}</h3>
                            <div class="grid grid-cols-1 md:grid-cols-2 gap-5">
                                <input wire:model="nama_perusahaan_{{ $i }}" type="text"
                                    placeholder="Company Name"
                                    class="shadow-sm bg-gray-50 text-sm rounded-lg focus:ring-orange-500 focus:border-orange-500 block w-full p-2.5 border border-gray-300">
                                <input wire:model="jabatan_{{ $i }}" type="text"
                                    placeholder="Position"
                                    class="shadow-sm bg-gray-50 text-sm rounded-lg focus:ring-orange-500 focus:border-orange-500 block w-full p-2.5 border border-gray-300">
                            </div>
                            <div class="grid grid-cols-1 md:grid-cols-3 gap-5 mt-5">
                                <input wire:model="job_{{ $i }}_dari" type="number"
                                    placeholder="From Year"
                                    class="shadow-sm bg-gray-50 text-sm rounded-lg focus:ring-orange-500 focus:border-orange-500 block w-full p-2.5 border border-gray-300">
                                <input wire:model="job_{{ $i }}_sampai" type="number"
                                    placeholder="Till Year"
                                    class="shadow-sm bg-gray-50 text-sm rounded-lg focus:ring-orange-500 focus:border-orange-500 block w-full p-2.5 border border-gray-300">
                                <input type="text" placeholder="Last Salary" x-data="{
                                    rawValue: @entangle('gaji_terakhir_{{ $i }}'),
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
                                    }
                                }"
                                    @input="onInput($event)" @focus="onFocus($event)" @blur="onBlur($event)"
                                    class="shadow-sm bg-gray-50 text-sm rounded-lg focus:ring-orange-500 focus:border-orange-500 block w-full p-2.5 border border-gray-300">
                            </div>
                            <textarea wire:model="alasan_berhenti_{{ $i }}" placeholder="Reason for Leaving" rows="2"
                                class="shadow-sm bg-gray-50 text-sm rounded-lg focus:ring-orange-500 focus:border-orange-500 block w-full p-2.5 border border-gray-300 mt-5"></textarea>
                            <textarea wire:model="jobdesk_pekerjaan_{{ $i }}" placeholder="Job Desk" rows="3"
                                class="shadow-sm bg-gray-50 text-sm rounded-lg focus:ring-orange-500 focus:border-orange-500 block w-full p-2.5 border border-gray-300 mt-5"></textarea>
                        </div>
                    @endfor
                </div>
            @endif

            <!-- Step 8: Organization & References -->
            @if ($step === 8)
                <div class="space-y-8">
                    <h2 class="text-xl font-semibold mb-4">Page 8 - Organization & References</h2>

                    <!-- Organization (Optional) -->
                    <div>
                        <h3 class="text-lg font-semibold mb-4">Organization Experience (Optional)</h3>
                        <div class="space-y-5">
                            <input wire:model="nama_organisasi" type="text" placeholder="Organization Name"
                                class="shadow-sm bg-gray-50 text-sm rounded-lg focus:ring-orange-500 focus:border-orange-500 block w-full p-2.5 border border-gray-300">
                            <input wire:model="alamat_organisasi" type="text" placeholder="Organization Address"
                                class="shadow-sm bg-gray-50 text-sm rounded-lg focus:ring-orange-500 focus:border-orange-500 block w-full p-2.5 border border-gray-300">
                            <input wire:model="posisi_organisasi" type="text"
                                placeholder="Position in Organization"
                                class="shadow-sm bg-gray-50 text-sm rounded-lg focus:ring-orange-500 focus:border-orange-500 block w-full p-2.5 border border-gray-300">
                        </div>
                    </div>

                    <!-- References -->
                    <div>
                        <h3 class="text-lg font-semibold mb-4">Reference 1 <span class="text-red-600 text-sm">*</span>
                        </h3>
                        <div class="grid grid-cols-1 md:grid-cols-2 gap-5">
                            <input wire:model="nama_referensi_1" type="text" placeholder="Name" required
                                class="shadow-sm bg-gray-50 text-sm rounded-lg focus:ring-orange-500 focus:border-orange-500 block w-full p-2.5 border {{ $errors->has('nama_referensi_1') ? 'border-red-500' : 'border-gray-300' }}">
                            <input wire:model="no_telp_referensi_1" type="text" placeholder="+62..." required
                                class="shadow-sm bg-gray-50 text-sm rounded-lg focus:ring-orange-500 focus:border-orange-500 block w-full p-2.5 border {{ $errors->has('no_telp_referensi_1') ? 'border-red-500' : 'border-gray-300' }}">
                            <input wire:model="perusahaan_referensi_1" type="text" placeholder="Company" required
                                class="shadow-sm bg-gray-50 text-sm rounded-lg focus:ring-orange-500 focus:border-orange-500 block w-full p-2.5 border {{ $errors->has('perusahaan_referensi_1') ? 'border-red-500' : 'border-gray-300' }}">
                            <input wire:model="posisi_referensi_1" type="text" placeholder="Position" required
                                class="shadow-sm bg-gray-50 text-sm rounded-lg focus:ring-orange-500 focus:border-orange-500 block w-full p-2.5 border {{ $errors->has('posisi_referensi_1') ? 'border-red-500' : 'border-gray-300' }}">
                        </div>
                    </div>

                    <!-- Reference 2 (Optional) -->
                    <div>
                        <h3 class="text-lg font-semibold mb-4">Reference 2 (Optional)</h3>
                        <div class="grid grid-cols-1 md:grid-cols-2 gap-5">
                            <input wire:model="nama_referensi_2" type="text" placeholder="Name"
                                class="shadow-sm bg-gray-50 text-sm rounded-lg focus:ring-orange-500 focus:border-orange-500 block w-full p-2.5 border border-gray-300">
                            <input wire:model="no_telp_referensi_2" type="text" placeholder="+62..."
                                class="shadow-sm bg-gray-50 text-sm rounded-lg focus:ring-orange-500 focus:border-orange-500 block w-full p-2.5 border border-gray-300">
                            <input wire:model="perusahaan_referensi_2" type="text" placeholder="Company"
                                class="shadow-sm bg-gray-50 text-sm rounded-lg focus:ring-orange-500 focus:border-orange-500 block w-full p-2.5 border border-gray-300">
                            <input wire:model="posisi_referensi_2" type="text" placeholder="Position"
                                class="shadow-sm bg-gray-50 text-sm rounded-lg focus:ring-orange-500 focus:border-orange-500 block w-full p-2.5 border border-gray-300">
                        </div>
                    </div>
                </div>
            @endif

            <!-- Step 9: Emergency Contact -->
            @if ($step === 9)
                <div class="space-y-8">
                    <h2 class="text-xl font-semibold mb-4">Page 9 - Emergency Contact</h2>

                    <div>
                        <label for="nama_kondar" class="block mb-2 text-sm font-medium text-gray-900">Name <span
                                class="text-red-600 text-sm">*</span></label>
                        <input wire:model="nama_kondar" type="text" id="nama_kondar"
                            class="shadow-sm bg-gray-50 text-sm rounded-lg focus:ring-orange-500 focus:border-orange-500 block w-full p-2.5 border {{ $errors->has('nama_kondar') ? 'border-red-500' : 'border-gray-300' }}"
                            required>
                        @error('nama_kondar')
                            <p class="mt-1 text-sm text-red-600">{{ $message }}</p>
                        @enderror
                    </div>

                    <div class="grid grid-cols-1 md:grid-cols-2 gap-5">
                        <div>
                            <label for="no_telp_kondar" class="block mb-2 text-sm font-medium text-gray-900">Phone
                                <span class="text-red-600 text-sm">*</span></label>
                            <input wire:model="no_telp_kondar" type="text" id="no_telp_kondar"
                                placeholder="+62..."
                                class="shadow-sm bg-gray-50 text-sm rounded-lg focus:ring-orange-500 focus:border-orange-500 block w-full p-2.5 border {{ $errors->has('no_telp_kondar') ? 'border-red-500' : 'border-gray-300' }}"
                                required>
                            @error('no_telp_kondar')
                                <p class="mt-1 text-sm text-red-600">{{ $message }}</p>
                            @enderror
                        </div>
                        <div>
                            <label for="hubungan_kondar"
                                class="block mb-2 text-sm font-medium text-gray-900">Relationship <span
                                    class="text-red-600 text-sm">*</span></label>
                            <input wire:model="hubungan_kondar" type="text" id="hubungan_kondar"
                                class="shadow-sm bg-gray-50 text-sm rounded-lg focus:ring-orange-500 focus:border-orange-500 block w-full p-2.5 border {{ $errors->has('hubungan_kondar') ? 'border-red-500' : 'border-gray-300' }}"
                                required>
                            @error('hubungan_kondar')
                                <p class="mt-1 text-sm text-red-600">{{ $message }}</p>
                            @enderror
                        </div>
                    </div>

                    <div>
                        <label for="alamat_kondar" class="block mb-2 text-sm font-medium text-gray-900">Address <span
                                class="text-red-600 text-sm">*</span></label>
                        <textarea wire:model="alamat_kondar" id="alamat_kondar"
                            class="shadow-sm bg-gray-50 text-sm rounded-lg focus:ring-orange-500 focus:border-orange-500 block w-full p-2.5 border {{ $errors->has('alamat_kondar') ? 'border-red-500' : 'border-gray-300' }}"
                            rows="4" required></textarea>
                        @error('alamat_kondar')
                            <p class="mt-1 text-sm text-red-600">{{ $message }}</p>
                        @enderror
                    </div>
                </div>
            @endif

            <!-- Step 10: Organization (Extended) -->
            @if ($step === 10)
                <div class="space-y-8">
                    <h2 class="text-xl font-semibold mb-4">Page 10 - Organization Details (Extended)</h2>
                    <p class="text-gray-600">This step contains additional organization-related information. You can
                        review your previously entered organization data from the previous step.</p>
                </div>
            @endif

            <!-- Step 11: Additional Information -->
            @if ($step === 11)
                <div class="space-y-8">
                    <h2 class="text-xl font-semibold mb-4">Page 11 - Additional Information</h2>

                    <div>
                        <label for="kenalan_yg_bekerja" class="block mb-2 text-sm font-medium text-gray-900">Do You
                            Have Acquaintances in Our Company? <span class="text-red-600 text-sm">*</span></label>
                        <select wire:model="kenalan_yg_bekerja" id="kenalan_yg_bekerja"
                            class="shadow-sm bg-gray-50 text-sm rounded-lg focus:ring-orange-500 focus:border-orange-500 block w-full p-2.5 border {{ $errors->has('kenalan_yg_bekerja') ? 'border-red-500' : 'border-gray-300' }}"
                            required>
                            <option value="">Select</option>
                            <option value="Ya">Yes</option>
                            <option value="Tidak">No</option>
                        </select>
                        @error('kenalan_yg_bekerja')
                            <p class="mt-1 text-sm text-red-600">{{ $message }}</p>
                        @enderror
                    </div>

                    <div>
                        <label for="apply_perusahaan_lain" class="block mb-2 text-sm font-medium text-gray-900">Are
                            You Applying to Other Companies? <span class="text-red-600 text-sm">*</span></label>
                        <select wire:model="apply_perusahaan_lain" id="apply_perusahaan_lain"
                            class="shadow-sm bg-gray-50 text-sm rounded-lg focus:ring-orange-500 focus:border-orange-500 block w-full p-2.5 border {{ $errors->has('apply_perusahaan_lain') ? 'border-red-500' : 'border-gray-300' }}"
                            required>
                            <option value="">Select</option>
                            <option value="Ya">Yes</option>
                            <option value="Tidak">No</option>
                        </select>
                        @error('apply_perusahaan_lain')
                            <p class="mt-1 text-sm text-red-600">{{ $message }}</p>
                        @enderror
                    </div>

                    <div>
                        <label for="pekerjaan_sampingan" class="block mb-2 text-sm font-medium text-gray-900">Do You
                            Have a Side Job? <span class="text-red-600 text-sm">*</span></label>
                        <select wire:model="pekerjaan_sampingan" id="pekerjaan_sampingan"
                            class="shadow-sm bg-gray-50 text-sm rounded-lg focus:ring-orange-500 focus:border-orange-500 block w-full p-2.5 border {{ $errors->has('pekerjaan_sampingan') ? 'border-red-500' : 'border-gray-300' }}"
                            required>
                            <option value="">Select</option>
                            <option value="Ya">Yes</option>
                            <option value="Tidak">No</option>
                        </select>
                        @error('pekerjaan_sampingan')
                            <p class="mt-1 text-sm text-red-600">{{ $message }}</p>
                        @enderror
                    </div>

                    <div>
                        <label for="pernah_psikotes" class="block mb-2 text-sm font-medium text-gray-900">Have You
                            Done a Psychotest? <span class="text-red-600 text-sm">*</span></label>
                        <select wire:model="pernah_psikotes" id="pernah_psikotes"
                            class="shadow-sm bg-gray-50 text-sm rounded-lg focus:ring-orange-500 focus:border-orange-500 block w-full p-2.5 border {{ $errors->has('pernah_psikotes') ? 'border-red-500' : 'border-gray-300' }}"
                            required>
                            <option value="">Select</option>
                            <option value="Ya">Yes</option>
                            <option value="Tidak">No</option>
                        </select>
                        @error('pernah_psikotes')
                            <p class="mt-1 text-sm text-red-600">{{ $message }}</p>
                        @enderror
                    </div>

                    <div>
                        <label for="riwayat_penyakit_kronis" class="block mb-2 text-sm font-medium text-gray-900">Do
                            You Have a Chronic Disease History? <span class="text-red-600 text-sm">*</span></label>
                        <select wire:model="riwayat_penyakit_kronis" id="riwayat_penyakit_kronis"
                            class="shadow-sm bg-gray-50 text-sm rounded-lg focus:ring-orange-500 focus:border-orange-500 block w-full p-2.5 border {{ $errors->has('riwayat_penyakit_kronis') ? 'border-red-500' : 'border-gray-300' }}"
                            required>
                            <option value="">Select</option>
                            <option value="Ya">Yes</option>
                            <option value="Tidak">No</option>
                        </select>
                        @error('riwayat_penyakit_kronis')
                            <p class="mt-1 text-sm text-red-600">{{ $message }}</p>
                        @enderror
                    </div>

                    <div>
                        <label for="rekam_jejak_kriminal" class="block mb-2 text-sm font-medium text-gray-900">Do You
                            Have a Criminal Record? <span class="text-red-600 text-sm">*</span></label>
                        <select wire:model="rekam_jejak_kriminal" id="rekam_jejak_kriminal"
                            class="shadow-sm bg-gray-50 text-sm rounded-lg focus:ring-orange-500 focus:border-orange-500 block w-full p-2.5 border {{ $errors->has('rekam_jejak_kriminal') ? 'border-red-500' : 'border-gray-300' }}"
                            required>
                            <option value="">Select</option>
                            <option value="Ya">Yes</option>
                            <option value="Tidak">No</option>
                        </select>
                        @error('rekam_jejak_kriminal')
                            <p class="mt-1 text-sm text-red-600">{{ $message }}</p>
                        @enderror
                    </div>

                    <div>
                        <label for="sedia_ditempatkan_luar_kota"
                            class="block mb-2 text-sm font-medium text-gray-900">Are You Willing to be Placed Outside
                            the City? <span class="text-red-600 text-sm">*</span></label>
                        <select wire:model="sedia_ditempatkan_luar_kota" id="sedia_ditempatkan_luar_kota"
                            class="shadow-sm bg-gray-50 text-sm rounded-lg focus:ring-orange-500 focus:border-orange-500 block w-full p-2.5 border {{ $errors->has('sedia_ditempatkan_luar_kota') ? 'border-red-500' : 'border-gray-300' }}"
                            required>
                            <option value="">Select</option>
                            <option value="Bersedia">Willing</option>
                            <option value="Tidak Bersedia">Not Willing</option>
                        </select>
                        @error('sedia_ditempatkan_luar_kota')
                            <p class="mt-1 text-sm text-red-600">{{ $message }}</p>
                        @enderror
                    </div>

                    <div>
                        <label for="ekspektasi_gaji" class="block mb-2 text-sm font-medium text-gray-900">Expected
                            Salary (Rp) <span class="text-red-600 text-sm">*</span></label>
                        <input type="text" id="ekspektasi_gaji" placeholder="0" x-data="{
                            rawValue: @entangle('ekspektasi_gaji'),
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
                                // Show raw value on focus
                                e.target.value = this.rawValue || '';
                            },
                            onBlur(e) {
                                // Format on blur
                                let unformatted = this.unformatNumber(e.target.value);
                                this.rawValue = unformatted || 0;
                                e.target.value = this.formatNumber(unformatted);
                            }
                        }"
                            @input="onInput($event)" @focus="onFocus($event)" @blur="onBlur($event)"
                            class="shadow-sm bg-gray-50 text-sm rounded-lg focus:ring-orange-500 focus:border-orange-500 block w-full p-2.5 border {{ $errors->has('ekspektasi_gaji') ? 'border-red-500' : 'border-gray-300' }}"
                            required>
                        @error('ekspektasi_gaji')
                            <p class="mt-1 text-sm text-red-600">{{ $message }}</p>
                        @enderror
                        <p class="text-xs text-gray-500 mt-2">Example: 5000000 will display as 5.000.000</p>
                    </div>

                    <div>
                        <label for="dapat_mulai_bekerja" class="block mb-2 text-sm font-medium text-gray-900">When Can
                            You Start Working? <span class="text-red-600 text-sm">*</span></label>
                        <input wire:model="dapat_mulai_bekerja" type="date" id="dapat_mulai_bekerja"
                            class="shadow-sm bg-gray-50 text-sm rounded-lg focus:ring-orange-500 focus:border-orange-500 block w-full p-2.5 border {{ $errors->has('dapat_mulai_bekerja') ? 'border-red-500' : 'border-gray-300' }}"
                            required>
                        @error('dapat_mulai_bekerja')
                            <p class="mt-1 text-sm text-red-600">{{ $message }}</p>
                        @enderror
                    </div>
                </div>
            @endif

            <!-- Navigation Buttons -->
            <div class="flex justify-between pt-6 mt-6">
                @if ($step > 1)
                    <button type="button" wire:click="previousStep"
                        class="px-6 py-2 bg-gray-200 hover:bg-gray-300 rounded-lg font-medium transition">
                        Previous
                    </button>
                @endif

                @if ($step < $totalSteps)
                    <button type="button" wire:click="nextStep"
                        class="px-6 py-2 bg-blue-600 text-white rounded-lg hover:bg-blue-700 font-medium transition">
                        Next
                    </button>
                @endif

                @if ($step === $totalSteps)
                    <button type="submit"
                        class="px-6 py-2 bg-green-600 text-white rounded-lg hover:bg-green-700 font-medium transition">
                        Submit Application
                    </button>
                @endif
            </div>
        </form>
    </div>
</div>
