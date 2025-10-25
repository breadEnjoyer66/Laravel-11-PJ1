@extends('dashboard.layouts.dashboard')

@section('content')
    <section class="bg-gray-50 dark:bg-gray-900 p-3 sm:p-5 ">
        <div class="w-full px-4 mb-6">
            <div class="flex justify-start gap-10 items-center max-w-[210mm] mx-auto mb-14 mt-5">
                <h2 class="font-semibold text-2xl">Application Details</h2>
                <div class="space-x-2">
                    <button id="savePdfBtn"
                        class="px-4 py-2 bg-green-600 text-white rounded-lg hover:bg-green-700 inline-flex items-center">
                        <svg class="w-4 h-4 mr-2" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                            stroke-width="1.5" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round"
                                d="M12 4v12m0 0l-3-3m3 3l3-3M4 16v2a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2v-2" />
                        </svg>
                        Download PDF
                    </button>
                </div>
            </div>

            <style>
                /* Avoid breaking inside this section */
                .page-section {
                    page-break-inside: avoid;
                    break-inside: avoid;
                }

                /* Start a new page before this section */
                .page-break {
                    page-break-before: always;
                    break-before: page;
                }

                /* Optional: ensure it doesn’t get split at the end */
                .page-section:last-child {
                    page-break-after: avoid;
                    break-after: avoid;
                }
            </style>
        </div>

        {{-- A4 Paper Style Container --}}
        <div class="bg-white shadow-md max-w-[210mm] mx-auto px-[20mm] pb-[16mm] pt-[10mm] min-h-[297mm] relative"
            id="printable-content">

            {{-- Header with Company Logo --}}
            <div class="items-center gap-4 flex justify-between">
                <div class="">
                    <img src="{{ asset('img/pmt-logo-blue.png') }}" alt="Company Logo" class="h-[120px] mx-auto mb-4">
                </div>
                <div class=" mb-2 text-end">
                    <h1 class="text-2xl font-normal text-gray-800">Data Lamaran Kerja</h1>
                    <p class="text-sm text-gray-600" style="margin-top: 5px;">Submitted at
                        {{ $jobApplication->created_at->format('l, d F Y') }}
                    </p>
                </div>
            </div>
            <hr class="-mt-[14px] mb-[10px] border-slate-800">

            {{-- Applicant's Photo --}}
            <div class="flex justify-start items-center gap-4">

                <div class="p-4 w-3/4 ">
                    <div class="">
                        <h2 class="text-3xl font-semibold pb-3 mb-3">{{ $jobApplication->nama_lengkap }}</h2>
                        <div class="flex gap-2 items-center justify-start">
                            <div class="pr-6 border-r mr-4">
                                <div class="mb-2">
                                    <p class="text-sm text-gray-600">Alamat Email</p>
                                    <p class="font-medium">{{ $jobApplication->email }}</p>
                                </div>
                                <div class="mb-2">
                                    <p class="text-sm text-gray-600">No.HP/Whatsapp</p>
                                    <p class="font-medium">{{ $jobApplication->no_hp_whatsapp }}</p>
                                </div>
                                <div>
                                    <p class="text-sm text-gray-600">Agama</p>
                                    <p class="font-medium">{{ $jobApplication->agama }}</p>
                                </div>
                            </div>

                            <div class="">
                                <div class="mb-2">
                                    <p class="text-sm text-gray-600">Jenis Kelamin</p>
                                    <p class="font-medium">{{ $jobApplication->jenis_kelamin }}</p>
                                </div>
                                <div class="mb-2">
                                    <p class="text-sm text-gray-600">Status Perkawinan</p>
                                    <p class="font-medium">{{ $jobApplication->status_kawin }}</p>
                                </div>
                                <div>
                                    <p class="text-sm text-gray-600">Tempat & Tanggal Lahir</p>
                                    <p class="font-medium">{{ $jobApplication->tempat_lahir }},
                                        {{ \Carbon\Carbon::parse(trim($jobApplication->tanggal_lahir))->format('d F Y') }}
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                {{-- pas foto pelamar kerja --}}
                <div class="">
                    @if ($jobApplication->pas_foto)
                        <img src="{{ Storage::url($jobApplication->pas_foto) }}" alt="Applicant Photo"
                            class="max-w-60 h-auto border object-cover rounded-lg">
                    @endif
                </div>

            </div>

            {{-- Personal Information Section --}}
            <div class="mb-[32px] mt-[8px]">
                <div class="bg-slate-200 pt-[0px] pb-[18px] px-[8px] mb-[16px]">
                    <h2 class="text-[20px] leading-none font-semibold text-gray-800 ">
                        Data Pribadi
                    </h2>
                </div>
                <div class="grid grid-cols-2 gap-4">
                    <div>
                        <p class="text-sm text-gray-600">Golongan Darah</p>
                        <p class="font-medium">{{ $jobApplication->golongan_darah }}</p>
                    </div>
                    <div>
                        <p class="text-sm text-gray-600">Kondisi Kesehatan</p>
                        <p class="font-medium">{{ $jobApplication->kondisi_kesehatan }}</p>
                    </div>
                    <div>
                        <p class="text-sm text-gray-600">Berat Badan</p>
                        <p class="font-medium">{{ $jobApplication->berat_badan }} kg</p>
                    </div>
                    <div>
                        <p class="text-sm text-gray-600">Tinggi Badan</p>
                        <p class="font-medium">{{ $jobApplication->tinggi_badan }} cm</p>
                    </div>

                </div>

                <div class="border" style="margin-top: 20px; padding: 16px; border-radius: 12px;">
                    <div>
                        <p class="text-sm text-gray-600">Alamat Domisili</p>
                        <p class="font-medium">{{ $jobApplication->alamat_domisili }}</p>
                    </div>
                    <hr style="margin: 10px 0;">
                    <div class="grid grid-cols-3 gap-4">
                        <div>
                            <p class="text-sm text-gray-600">Kota/Kabupaten</p>
                            <p class="font-medium">{{ $jobApplication->kota_kabupaten }}</p>
                        </div>

                        <div>
                            <p class="text-sm text-gray-600">Telepon Rumah</p>
                            <p class="font-medium">{{ $jobApplication->tel_rumah }}</p>
                        </div>

                        <div>
                            <p class="text-sm text-gray-600">Kode Pos</p>
                            <p class="font-medium">{{ $jobApplication->kode_pos }}</p>
                        </div>
                    </div>
                </div>
            </div>

            {{-- Family Information Section --}}
            <div class="mb-8">
                <div class="bg-slate-200 pt-[0px] pb-[18px] px-[8px] mb-[16px]">
                    <h2 class="text-[20px] leading-none font-semibold text-gray-800 ">
                        Informasi
                        Keluarga - Orang Tua
                    </h2>
                </div>
                <div class="grid grid-cols-2 gap-6">
                    <div>
                        <h3 class="font-medium mb-2">Informasi Ayah</h3>
                        <div class="space-y-2">
                            <div>
                                <p class="text-sm text-gray-600">Nama</p>
                                <p>{{ $jobApplication->nama_ayah }}</p>
                            </div>
                            <div>
                                <p class="text-sm text-gray-600">Tempat Lahir</p>
                                <p>{{ $jobApplication->tempat_lahir_ayah }}</p>
                            </div>
                            <div>
                                <p class="text-sm text-gray-600">Pekerjaan</p>
                                <p>{{ $jobApplication->pekerjaan_ayah }}</p>
                            </div>
                        </div>
                    </div>
                    <div>
                        <h3 class="font-medium mb-2">Informasi Ibu</h3>
                        <div class="space-y-2">
                            <div>
                                <p class="text-sm text-gray-600">Nama</p>
                                <p>{{ $jobApplication->nama_ibu }}</p>
                            </div>
                            <div>
                                <p class="text-sm text-gray-600">Tempat Lahir</p>
                                <p>{{ $jobApplication->tempat_lahir_ibu }}</p>
                            </div>
                            <div>
                                <p class="text-sm text-gray-600">Pekerjaan</p>
                                <p>{{ $jobApplication->pekerjaan_ibu }}</p>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="page-break" style="margin-bottom: 60px"></div>

                <div class="bg-slate-200 pt-[0px] pb-[18px] px-[8px] mb-[16px]" style="margin-top: 40px;">
                    <h2 class="text-[20px] leading-none font-semibold text-gray-800 ">
                        Informasi
                        Keluarga - Saudara Kandung
                    </h2>
                </div>

                <div class="grid grid-cols-2 gap-6" style="margin-top: 30px">
                    <div>
                        <h3 class="font-medium mb-2">Saudara Kandung 1</h3>
                        <div class="space-y-2">
                            <div>
                                <p class="text-sm text-gray-600">Nama</p>
                                <p>{{ $jobApplication->nama_saudara_kandung_1 ? $jobApplication->nama_saudara_kandung_1 : '-' }}
                                </p>
                            </div>
                            <div>
                                <p class="text-sm text-gray-600">Tempat Lahir</p>
                                <p>{{ $jobApplication->tempat_lahir_saudara_kandung_1 ? $jobApplication->tempat_lahir_saudara_kandung_1 : '-' }}
                                </p>
                            </div>
                            <div>
                                <p class="text-sm text-gray-600">Pekerjaan</p>
                                <p>{{ $jobApplication->pekerjaan_saudara_kandung_1 ? $jobApplication->pekerjaan_saudara_kandung_1 : '-' }}
                                </p>
                            </div>
                        </div>
                    </div>
                    <div>
                        <h3 class="font-medium mb-2">Saudara Kandung 2</h3>
                        <div class="space-y-2">
                            <div>
                                <p class="text-sm text-gray-600">Nama</p>
                                <p>{{ $jobApplication->nama_saudara_kandung_2 ? $jobApplication->nama_saudara_kandung_2 : '-' }}
                                </p>
                            </div>
                            <div>
                                <p class="text-sm text-gray-600">Tempat Lahir</p>
                                <p>{{ $jobApplication->tempat_lahir_saudara_kandung_2 ? $jobApplication->tempat_lahir_saudara_kandung_2 : '-' }}
                                </p>
                            </div>
                            <div>
                                <p class="text-sm text-gray-600">Pekerjaan</p>
                                <p>{{ $jobApplication->pekerjaan_saudara_kandung_2 ? $jobApplication->pekerjaan_saudara_kandung_2 : '-' }}
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>



            {{-- Education History --}}
            <div class="mb-8">
                <div class="bg-slate-200 pt-[0px] pb-[18px] px-[8px] mb-[16px]">
                    <h2 class="text-[20px] leading-none font-semibold text-gray-800 ">
                        Riwayat Pendidikan
                    </h2>
                </div>

                {{-- SMA/SMK --}}
                <div class="">
                    <h3 class="font-medium mb-2">SLTA/SMK/SMA</h3>
                    <div class="grid grid-cols-2 gap-4">
                        <div>
                            <p class="text-gray-700"><span class="font-semibold">{{ $jobApplication->sma_nama }}</span> -
                                {{ $jobApplication->sma_jurusan }}</p>
                            <p class="text-sm">Periode:
                                {{ $jobApplication->sma_dari ? \Carbon\Carbon::parse(trim($jobApplication->sma_dari))->format('F Y') : '-' }}
                                -
                                {{ $jobApplication->sma_sampai ? \Carbon\Carbon::parse(trim($jobApplication->sma_sampai))->format('F Y') : '-' }}
                            </p>
                        </div>
                        <div>
                            <p class="text-sm text-gray-600">Status Kelulusan</p>
                            <p>{{ $jobApplication->sma_status_lulus }}</p>
                        </div>
                    </div>
                </div>

                <hr style="margin-top: 20px; margin-bottom:20px;">

                {{-- Diploma --}}
                <div class="">
                    <h3 class="font-medium mb-2">Diploma</h3>

                    @if ($jobApplication->diploma_nama_univ)
                        <div class="grid grid-cols-2 gap-4">
                            <div>
                                <p class="text-gray-700"><span
                                        class="font-semibold">{{ $jobApplication->diploma_nama_univ }}</span>
                                    -
                                    {{ $jobApplication->diploma_jurusan }}
                                </p>
                                <p class="text-sm">Periode:
                                    {{ \Carbon\Carbon::parse(trim($jobApplication->diploma_dari))->format('F Y') }}
                                    -
                                    {{ \Carbon\Carbon::parse(trim($jobApplication->diploma_sampai))->format('F Y') }}
                                </p>
                            </div>
                            <div>
                                <p class="text-sm text-gray-600">Status Kelulusan</p>
                                <p>{{ $jobApplication->diploma_status_lulus }}
                                    -
                                    IPK {{ $jobApplication->diploma_ipk }}</p>
                            </div>
                        </div>
                    @else
                        <p class="text-sm text-gray-600">Tidak ada data Diploma 3 yang diisi.</p>
                    @endif

                </div>

                <hr style="margin-top: 20px; margin-bottom:20px;">

                {{-- Strata 1 --}}
                <div class="">
                    <h3 class="font-medium mb-2">Strata 1</h3>

                    @if ($jobApplication->s1_nama_univ)
                        <div class="grid grid-cols-2 gap-4">
                            <div>
                                <p class="text-gray-700"><span
                                        class="font-semibold">{{ $jobApplication->s1_nama_univ }}</span>
                                    -
                                    {{ $jobApplication->s1_jurusan }}
                                </p>
                                <p class="text-sm">Periode:
                                    {{ \Carbon\Carbon::parse(trim($jobApplication->s1_dari))->format('F Y') }}
                                    -
                                    {{ \Carbon\Carbon::parse(trim($jobApplication->s1_sampai))->format('F Y') }}
                                </p>
                            </div>
                            <div>
                                <p class="text-sm text-gray-600">Status Kelulusan</p>
                                <p>{{ $jobApplication->s1_status_lulus }}
                                    -
                                    IPK {{ $jobApplication->s1_ipk }}</p>
                            </div>
                        </div>
                    @else
                        <p class="text-sm text-gray-600">Tidak ada data S1 yang diisi.</p>
                    @endif

                </div>

                <hr style="margin-top: 20px; margin-bottom:20px;">

                {{-- Strata 2 --}}
                <div class="">
                    <h3 class="font-medium mb-2">Strata 2</h3>

                    @if ($jobApplication->s2_nama_univ)
                        <div class="grid grid-cols-2 gap-4">
                            <div>
                                <p class="text-gray-700"><span
                                        class="font-semibold">{{ $jobApplication->s2_nama_univ }}</span>
                                    -
                                    {{ $jobApplication->s2_jurusan }}
                                </p>
                                <p class="text-sm">Periode:
                                    {{ \Carbon\Carbon::parse(trim($jobApplication->s2_dari))->format('F Y') }}
                                    -
                                    {{ \Carbon\Carbon::parse(trim($jobApplication->s2_sampai))->format('F Y') }}
                                </p>
                            </div>
                            <div>
                                <p class="text-sm text-gray-600">Status Kelulusan</p>
                                <p>{{ $jobApplication->s2_status_lulus }}
                                    -
                                    IPK {{ $jobApplication->s2_ipk }}</p>
                            </div>
                        </div>
                    @else
                        <p class="text-sm text-gray-600">Tidak ada data S2 yang diisi.</p>
                    @endif

                </div>

            </div>


            <div class="page-break" style="margin-bottom: 60px"></div>

            {{-- Work Experience --}}
            <div class="mb-8">
                <div class="bg-slate-200 pt-[0px] pb-[18px] px-[8px] mb-[16px]">
                    <h2 class="text-[20px] leading-none font-semibold text-gray-800 ">
                        Riwayat Pekerjaan
                    </h2>
                </div>

                {{-- Latest Work Experience --}}
                <div class="mb-6 border p-4 rounded-xl">
                    <h3 class="mb-2 text-gray-600">Riwayat Pekerjaan 1</h3>
                    <div class="grid grid-cols-2 gap-4">
                        <div>
                            <p class="font-semibold tracking-wide">{{ $jobApplication->jabatan_1 }} <span
                                    class="italic">di</span>
                                {{ $jobApplication->nama_perusahaan_1 }}
                            </p>
                            <p class="text-sm">Periode :
                                {{ $jobApplication->job_1_dari ? \Carbon\Carbon::parse(trim($jobApplication->job_1_dari))->format('F Y') : '-' }}
                                -
                                {{ $jobApplication->job_1_sampai ? \Carbon\Carbon::parse(trim($jobApplication->job_1_sampai))->format('F Y') : '-' }}
                            </p>
                        </div>
                        <div>
                            <p class="text-sm text-gray-600">Gaji Terakhir</p>
                            <p>Rp {{ number_format($jobApplication->gaji_terakhir_1, 0, ',', '.') }}</p>
                        </div>
                    </div>
                    <hr class="mt-4">
                    <div class="mt-2">
                        <p class="text-sm text-gray-600">Deskripsi Pekerjaan</p>
                        <p class="whitespace-pre-line min-h-[220px]">{{ $jobApplication->jobdesk_pekerjaan_1 }}</p>
                    </div>
                </div>


                {{-- Latest Work Experience 2 --}}
                <div class="mb-6 border p-4 rounded-xl">
                    <h3 class="mb-2 text-gray-600">Riwayat Pekerjaan 2</h3>
                    @if ($jobApplication->nama_perusahaan_2)
                        <div class="grid grid-cols-2 gap-4">
                            <div>
                                <p class="font-semibold tracking-wide">{{ $jobApplication->jabatan_2 }} <span
                                        class="italic">di</span>
                                    {{ $jobApplication->nama_perusahaan_2 }}
                                </p>
                                <p class="text-sm">Periode :
                                    {{ \Carbon\Carbon::parse(trim($jobApplication->job_2_dari))->format('F Y') }}
                                    -
                                    {{ \Carbon\Carbon::parse(trim($jobApplication->job_2_sampai))->format('F Y') }}
                                </p>
                            </div>
                            <div>
                                <p class="text-sm text-gray-600">Gaji Terakhir</p>
                                <p>Rp {{ number_format($jobApplication->gaji_terakhir_2, 0, ',', '.') }}</p>
                            </div>
                        </div>
                    @else
                        <p class="text-sm text-gray-600">Riwayat pekerjaan 2 tidak tersedia.</p>
                    @endif
                    <hr class="mt-4">
                    <div class="mt-2">
                        <p class="text-sm text-gray-600">Deskripsi Pekerjaan</p>
                        <p class="whitespace-pre-line min-h-[220px]">{{ $jobApplication->jobdesk_pekerjaan_2 }}</p>
                    </div>
                </div>



            </div>


            <div class="page-break" style="margin-bottom: 60px"></div>
            {{-- Skills & Capabilities --}}
            <div class="mb-8" style="margin-top: 80px">
                <div class="bg-slate-200 pt-[0px] pb-[18px] px-[8px] mb-[16px]">
                    <h2 class="text-[20px] leading-none font-semibold text-gray-800 ">
                        Skill & Kemampuan
                    </h2>
                </div>

                {{-- Language Skills --}}
                <div class="mb-6">
                    <h3 class="font-medium mb-4">Berbahasa</h3>
                    <table class="w-full">
                        <thead class="">
                            <tr class="text-left text-sm text-white border">
                                <th class="border-r border-b pt-0 pb-4 pl-2 bg-primary-700">Bahasa</th>
                                <th class="border-r border-b pt-0 pb-4 pl-2 bg-primary-700">Berbicara</th>
                                <th class="border-r border-b pt-0 pb-4 pl-2 bg-primary-700">Mendengarkan</th>
                                <th class="border-r border-b pt-0 pb-4 pl-2 bg-primary-700">Menulis</th>
                                <th class="border-r border-b pt-0 pb-4 pl-2 bg-primary-700">Membaca</th>
                            </tr>
                        </thead>
                        <tbody class="text-sm border">
                            <tr class="">
                                <td class="border-r border-b pt-0 pb-4 pl-2 font-semibold">English</td>
                                <td class="border-r border-b pt-0 pb-4 pl-2">{{ $jobApplication->inggris_bicara }}</td>
                                <td class="border-r border-b pt-0 pb-4 pl-2">{{ $jobApplication->inggris_dengar }}</td>
                                <td class="border-r border-b pt-0 pb-4 pl-2">{{ $jobApplication->inggris_tulis }}</td>
                                <td class="border-r border-b pt-0 pb-4 pl-2">{{ $jobApplication->inggris_baca }}</td>
                            </tr>

                            <tr class="">
                                <td class="border-r border-b pt-0 pb-4 pl-2 font-semibold">Mandarin</td>
                                <td class="border-r border-b pt-0 pb-4 pl-2">{{ $jobApplication->mandarin_bicara }}</td>
                                <td class="border-r border-b pt-0 pb-4 pl-2">{{ $jobApplication->mandarin_dengar }}</td>
                                <td class="border-r border-b pt-0 pb-4 pl-2">{{ $jobApplication->mandarin_tulis }}</td>
                                <td class="border-r border-b pt-0 pb-4 pl-2">{{ $jobApplication->mandarin_baca }}</td>
                            </tr>

                            <tr>
                                <td class="border-r pt-0 pb-4 pl-2 font-semibold">Bahasa Asing Lain</td>
                                <td class="border-r pt-0 pb-4 pl-2">{{ $jobApplication->bahasa_asing_lain }}</td>
                                <td class="border-r pt-0 pb-4 pl-2">{{ $jobApplication->bahasa_asing_lain_dengar }}</td>
                                <td class="border-r pt-0 pb-4 pl-2">{{ $jobApplication->bahasa_asing_lain_tulis }}</td>
                                <td class="border-r pt-0 pb-4 pl-2">{{ $jobApplication->bahasa_asing_lain_baca }}</td>
                            </tr>

                        </tbody>
                    </table>
                </div>

                {{-- Computer Skills --}}
                <div class="mb-6">
                    <h3 class="font-medium mb-2">Skill Komputer</h3>
                    <div class="grid grid-cols-2 gap-4">
                        <div>
                            <p class="text-sm text-gray-600">Microsoft Word</p>
                            <p>{{ $jobApplication->office_word }}</p>
                        </div>
                        <div>
                            <p class="text-sm text-gray-600">Microsoft Excel</p>
                            <p>{{ $jobApplication->office_excel }}</p>
                        </div>
                        <div>
                            <p class="text-sm text-gray-600">Microsoft PowerPoint</p>
                            <p>{{ $jobApplication->office_power_point }}</p>
                        </div>

                        <div>
                            <p class="text-sm text-gray-600">Skill Komputer Lainnya
                                - {{ $jobApplication->skill_com_lain_1 ? $jobApplication->skill_com_lain_1 : '-' }}
                            </p>
                            <p>{{ $jobApplication->skill_com_1_level ? $jobApplication->skill_com_1_level : '-' }}</p>
                        </div>
                    </div>
                </div>
            </div>

            {{-- keanggotaan organisasi --}}
            <div class="mb-8" style="margin-top: 50px; margin-bottom: 50px;">
                <div class="bg-slate-200 pt-[0px] pb-[18px] px-[8px] mb-[16px]">
                    <h2 class="text-[20px] leading-none font-semibold text-gray-800 ">
                        Keanggotaan Organisasi
                    </h2>
                </div>
                @if ($jobApplication->nama_organisasi)
                    <div class="grid grid-cols-3 gap-6">


                        <div>
                            <p class="text-sm text-gray-600">Nama Organisasi</p>
                            <p>{{ $jobApplication->nama_organisasi }}</p>
                        </div>
                        <div>
                            <p class="text-sm text-gray-600">Alamat Organisasi</p>
                            <p>{{ $jobApplication->alamat_organisasi }}</p>
                        </div>
                        <div>
                            <p class="text-sm text-gray-600">Posisi</p>
                            <p>{{ $jobApplication->posisi_organisasi }}</p>
                        </div>



                    </div>
                @else
                    <p class="text-sm text-gray-600 mb-8">Tidak ada data keanggotaan organisasi yang diisi.</p>
                @endif

            </div>



            {{-- References --}}
            <div class="mb-8">
                <div class="bg-slate-200 pt-[0px] pb-[18px] px-[8px] mb-[16px]">
                    <h2 class="text-[20px] leading-none font-semibold text-gray-800 ">
                        Informasi Kontak Referensi
                    </h2>
                </div>
                <div class="grid grid-cols-2 gap-6">
                    <div>
                        <h3 class="font-medium mb-2">Referensi 1</h3>
                        <div class="space-y-2">
                            <div>
                                <p class="text-sm text-gray-600">Nama</p>
                                <p>{{ $jobApplication->nama_referensi_1 }}</p>
                            </div>
                            <div>
                                <p class="text-sm text-gray-600">No.HP/Whatsapp</p>
                                <p>{{ $jobApplication->no_telp_referensi_1 }}</p>
                            </div>
                            <div>
                                <p class="text-sm text-gray-600">Perusahaan - Posisi</p>
                                <p>{{ $jobApplication->perusahaan_referensi_1 }} -
                                    sebagai {{ $jobApplication->posisi_referensi_1 }}</p>
                            </div>
                        </div>
                    </div>
                    @if ($jobApplication->nama_referensi_2)
                        <div>
                            <h3 class="font-medium mb-2">Referensi 2</h3>
                            <div class="space-y-2">
                                <div>
                                    <p class="text-sm text-gray-600">Nama</p>
                                    <p>{{ $jobApplication->nama_referensi_2 }}</p>
                                </div>
                                <div>
                                    <p class="text-sm text-gray-600">No.HP/Whatsapp</p>
                                    <p>{{ $jobApplication->no_telp_referensi_2 }}</p>
                                </div>
                                <div>
                                    <p class="text-sm text-gray-600">Perusahaan - Posisi</p>
                                    <p>{{ $jobApplication->perusahaan_referensi_2 }} -
                                        sebagai {{ $jobApplication->posisi_referensi_2 }}</p>
                                </div>
                            </div>
                        </div>
                    @endif
                </div>
            </div>

            <div class="page-break" style="margin-bottom: 60px"></div>

            {{-- Kontak Darurat --}}
            <div class="mb-8">
                <div class="bg-slate-200 pt-[0px] pb-[18px] px-[8px] mb-[16px]">
                    <h2 class="text-[20px] leading-none font-semibold text-gray-800 ">
                        Kontak Darurat
                    </h2>
                </div>
                <h3 class="font-medium mb-2">Info Kontak Darurat</h3>
                <div class="grid grid-cols-2 gap-6">
                    <div>

                        <div class="space-y-2">
                            <div>
                                <p class="text-sm text-gray-600">Nama</p>
                                <p>{{ $jobApplication->nama_kondar }}</p>
                            </div>
                            <div>
                                <p class="text-sm text-gray-600">No.HP/Whatsapp</p>
                                <p>{{ $jobApplication->no_telp_kondar }}</p>
                            </div>
                        </div>

                    </div>
                    <div class="space-y-2">
                        <div>
                            <p class="text-sm text-gray-600">Alamat</p>
                            <p>{{ $jobApplication->alamat_kondar }}</p>
                        </div>
                        <div>
                            <p class="text-sm text-gray-600">Hubungan</p>
                            <p>{{ $jobApplication->hubungan_kondar }}</p>
                        </div>
                    </div>
                </div>
            </div>



            {{-- Additional Information --}}
            <div>
                <div class="bg-slate-200 pt-[0px] pb-[18px] px-[8px] mb-[16px]">
                    <h2 class="text-[20px] leading-none font-semibold text-gray-800 ">
                        Informasi
                        Tambahan
                    </h2>
                </div>
                <div class="grid grid-cols-2 gap-4">
                    <div>
                        <p class="text-sm text-gray-600">Mendapatkan Info Loker Dari</p>
                        <p>{{ is_array($jobApplication->info_dari) ? implode(', ', $jobApplication->info_dari) : $jobApplication->info_dari }}
                        </p>
                    </div>
                    <div>
                        <p class="text-sm text-gray-600">Kenalan Yang Bekerja di Perusahaan Ini</p>
                        <p>{{ $jobApplication->kenalan_yg_bekerja }}
                        </p>
                    </div>
                    <div>
                        <p class="text-sm text-gray-600">S</p>
                        <p>{{ $jobApplication->apply_perusahaan_lain }}</p>
                    </div>
                    <div>
                        <p class="text-sm text-gray-600">Pekerjaan Sampingan</p>
                        <p>{{ $jobApplication->pekerjaan_sampingan }}</p>
                    </div>
                    <div>
                        <p class="text-sm text-gray-600">Pernah Menjalani Psikotes?</p>
                        <p>{{ $jobApplication->pernah_psikotes }}</p>
                    </div>
                    <div>
                        <p class="text-sm text-gray-600">Riwayat Penyakit Keras/Kronis</p>
                        <p>{{ $jobApplication->riwayat_penyakit_kronis }}</p>
                    </div>
                    <div>
                        <p class="text-sm text-gray-600">Rekam Jejak Kriminal</p>
                        <p>{{ $jobApplication->rekam_jejak_kriminal }}</p>
                    </div>
                    <div>
                        <p class="text-sm text-gray-600">Ekspektasi Gaji</p>
                        <p>Rp {{ number_format($jobApplication->ekspektasi_gaji, 0, ',', '.') }}</p>
                    </div>
                    <div>
                        <p class="text-sm text-gray-600">Dapat Mulai Bekerja</p>
                        <p>{{ $jobApplication->dapat_mulai_bekerja }}</p>
                    </div>
                    <div>
                        <p class="text-sm text-gray-600">Bersedia Ditempatkan Luar Kota</p>
                        <p>{{ $jobApplication->sedia_ditempatkan_luar_kota }}</p>
                    </div>
                </div>
            </div>
        </div>
    </section>



    {{-- Print Styles --}}
    <style>
        @media print {
            body * {
                visibility: hidden;
            }

            #printable-content,
            #printable-content * {
                visibility: visible;
            }

            #printable-content {
                position: absolute;
                left: 0;
                top: 0;
                width: 210mm;
                padding: 25.4mm;
                margin: 0;
            }

            @page {
                size: A4;
                margin: 0;
            }
        }
    </style>
@endsection
