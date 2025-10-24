@extends('dashboard.layouts.dashboard')

@section('content')
    <section class="bg-gray-50 dark:bg-gray-900 p-3 sm:p-5">
        <div class="w-full px-4 mb-6">
            <div class="flex justify-between items-center">
                <h2 class="font-semibold text-2xl">Application Details</h2>
                <div class="space-x-2">
                    <button onclick="window.print()"
                        class="px-4 py-2 bg-primary-500 text-white rounded-lg hover:bg-primary-600 inline-flex items-center">
                        <svg class="w-4 h-4 mr-2" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                            stroke-width="1.5" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round"
                                d="M6.72 13.829c-.24.03-.48.062-.72.096m.72-.096a42.415 42.415 0 0 1 10.56 0m-10.56 0L6.34 18m10.94-4.171c.24.03.48.062.72.096m-.72-.096L17.66 18m0 0 .229 2.523a1.125 1.125 0 0 1-1.12 1.227H7.231c-.662 0-1.18-.568-1.12-1.227L6.34 18m11.318 0h1.091A2.25 2.25 0 0 0 21 15.75V9.456c0-1.081-.768-2.015-1.837-2.175a48.055 48.055 0 0 0-1.913-.247M6.34 18H5.25A2.25 2.25 0 0 1 3 15.75V9.456c0-1.081.768-2.015 1.837-2.175a48.041 48.041 0 0 1 1.913-.247m10.5 0a48.536 48.536 0 0 0-10.5 0m10.5 0V3.375c0-.621-.504-1.125-1.125-1.125h-8.25c-.621 0-1.125.504-1.125 1.125v3.659M18 10.5h.008v.008H18V10.5Zm-3 0h.008v.008H15V10.5Z" />
                        </svg>
                        Print / Save as PDF
                    </button>
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
                    <img src="{{ asset('img/pmt-logo-blue.png') }}" alt="Company Logo" class="h-24 mx-auto mb-4">
                </div>
                <div class=" mb-2 text-end">
                    <h1 class="text-2xl font-normal text-gray-800">Data Lamaran Kerja</h1>
                    <p class="text-sm text-gray-600">Submitted at {{ $jobApplication->created_at->format('l, d F Y') }}
                    </p>
                </div>
            </div>

            {{-- Applicant's Photo --}}
            <div class="flex justify-start items-center gap-4 mb-2">

                <div class="">
                    @if ($jobApplication->pas_foto)
                        <img src="{{ Storage::url($jobApplication->pas_foto) }}" alt="Applicant Photo"
                            class="max-w-36 h-auto border object-cover rounded-lg">
                    @endif
                </div>
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
                                    <p class="text-sm text-gray-600">Nomor Telepon</p>
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
                                        {{ $jobApplication->tanggal_lahir }}</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <hr>
            {{-- Personal Information Section --}}
            <div class="my-8">
                <h2 class="text-xl font-semibold text-gray-800 bg-slate-200 py-1 px-2 mb-4">Informasi Jasmani</h2>
                <div class="grid grid-cols-2 gap-4">
                    @if ($jobApplication->golongan_darah)
                        <div>
                            <p class="text-sm text-gray-600">Golongan Darah</p>
                            <p class="font-medium">{{ $jobApplication->golongan_darah }}</p>
                        </div>
                    @endif
                    @if ($jobApplication->kondisi_kesehatan)
                        <div>
                            <p class="text-sm text-gray-600">Kondisi Kesehatan</p>
                            <p class="font-medium">{{ $jobApplication->kondisi_kesehatan }}</p>
                        </div>
                    @endif
                    @if ($jobApplication->berat_badan)
                        <div>
                            <p class="text-sm text-gray-600">Berat Badan</p>
                            <p class="font-medium">{{ $jobApplication->berat_badan }} kg</p>
                        </div>
                    @endif
                    @if ($jobApplication->tinggi_badan)
                        <div>
                            <p class="text-sm text-gray-600">Tinggi Badan</p>
                            <p class="font-medium">{{ $jobApplication->tinggi_badan }} cm</p>
                        </div>
                    @endif
                </div>
            </div>

            {{-- Family Information Section --}}
            <div class="mb-8">
                <h2 class="text-xl font-semibold text-gray-800 bg-slate-200 py-1 px-2 mb-4">Informasi Keluarga - Orang Tua
                </h2>
                <div class="grid grid-cols-2 gap-6">
                    <div>
                        <h3 class="font-medium mb-2">Father's Information</h3>
                        <div class="space-y-2">
                            <div>
                                <p class="text-sm text-gray-600">Name</p>
                                <p>{{ $jobApplication->nama_ayah }}</p>
                            </div>
                            <div>
                                <p class="text-sm text-gray-600">Place of Birth</p>
                                <p>{{ $jobApplication->tempat_lahir_ayah }}</p>
                            </div>
                            <div>
                                <p class="text-sm text-gray-600">Occupation</p>
                                <p>{{ $jobApplication->pekerjaan_ayah }}</p>
                            </div>
                        </div>
                    </div>
                    <div>
                        <h3 class="font-medium mb-2">Mother's Information</h3>
                        <div class="space-y-2">
                            <div>
                                <p class="text-sm text-gray-600">Name</p>
                                <p>{{ $jobApplication->nama_ibu }}</p>
                            </div>
                            <div>
                                <p class="text-sm text-gray-600">Place of Birth</p>
                                <p>{{ $jobApplication->tempat_lahir_ibu }}</p>
                            </div>
                            <div>
                                <p class="text-sm text-gray-600">Occupation</p>
                                <p>{{ $jobApplication->pekerjaan_ibu }}</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="page-break mb-14"></div>

            {{-- Education History --}}
            <div class="mb-8">
                <h2 class="text-xl font-semibold text-gray-800 bg-slate-200 py-1 px-2 mb-4">Riwayat Pendidikan</h2>

                {{-- SMA/SMK --}}
                <div class="mb-6">
                    <h3 class="font-medium mb-2">High School (SMA/SMK)</h3>
                    <div class="grid grid-cols-2 gap-4">
                        <div>
                            <p class="text-sm text-gray-600">School Name</p>
                            <p>{{ $jobApplication->sma_nama }}</p>
                        </div>
                        <div>
                            <p class="text-sm text-gray-600">Major</p>
                            <p>{{ $jobApplication->sma_jurusan }}</p>
                        </div>
                        <div>
                            <p class="text-sm text-gray-600">Period</p>
                            <p>{{ $jobApplication->sma_dari }} - {{ $jobApplication->sma_sampai }}</p>
                        </div>
                        <div>
                            <p class="text-sm text-gray-600">Graduation Status</p>
                            <p>{{ $jobApplication->sma_status_lulus }}</p>
                        </div>
                    </div>
                </div>

                {{-- Higher Education --}}
                @if ($jobApplication->s1_nama_univ)
                    <div class="mb-6">
                        <h3 class="font-medium mb-2">Bachelor's Degree (S1)</h3>
                        <div class="grid grid-cols-2 gap-4">
                            <div>
                                <p class="text-sm text-gray-600">University</p>
                                <p>{{ $jobApplication->s1_nama_univ }}</p>
                            </div>
                            <div>
                                <p class="text-sm text-gray-600">Major</p>
                                <p>{{ $jobApplication->s1_jurusan }}</p>
                            </div>
                            <div>
                                <p class="text-sm text-gray-600">Period</p>
                                <p>{{ $jobApplication->s1_dari }} - {{ $jobApplication->s1_sampai }}</p>
                            </div>
                            <div>
                                <p class="text-sm text-gray-600">GPA</p>
                                <p>{{ $jobApplication->s1_ipk }}</p>
                            </div>
                        </div>
                    </div>
                @endif
            </div>

            {{-- Work Experience --}}
            <div class="mb-8">
                <h2 class="text-xl font-semibold text-gray-800 bg-slate-200 py-1 px-2 mb-4">Riwayat Pekerjaan</h2>

                {{-- Latest Work Experience --}}
                <div class="mb-6">
                    <h3 class="font-medium mb-2">Posisi Terakhir</h3>
                    <div class="grid grid-cols-2 gap-4">
                        <div>
                            <p class="text-sm text-gray-600">Company</p>
                            <p>{{ $jobApplication->nama_perusahaan_1 }}</p>
                        </div>
                        <div>
                            <p class="text-sm text-gray-600">Position</p>
                            <p>{{ $jobApplication->jabatan_1 }}</p>
                        </div>
                        <div>
                            <p class="text-sm text-gray-600">Period</p>
                            <p>{{ $jobApplication->job_1_dari }} - {{ $jobApplication->job_1_sampai }}</p>
                        </div>
                        <div>
                            <p class="text-sm text-gray-600">Last Salary</p>
                            <p>Rp {{ number_format($jobApplication->gaji_terakhir_1, 0, ',', '.') }}</p>
                        </div>
                    </div>
                    <div class="mt-2">
                        <p class="text-sm text-gray-600">Job Description</p>
                        <p class="whitespace-pre-line">{{ $jobApplication->jobdesk_pekerjaan_1 }}</p>
                    </div>
                </div>

                @if ($jobApplication->nama_perusahaan_2)
                    <div>
                        <h3 class="font-medium mb-2">Previous Position</h3>
                        <div class="grid grid-cols-2 gap-4">
                            <div>
                                <p class="text-sm text-gray-600">Company</p>
                                <p>{{ $jobApplication->nama_perusahaan_2 }}</p>
                            </div>
                            <div>
                                <p class="text-sm text-gray-600">Position</p>
                                <p>{{ $jobApplication->jabatan_2 }}</p>
                            </div>
                            <div>
                                <p class="text-sm text-gray-600">Period</p>
                                <p>{{ $jobApplication->job_2_dari }} - {{ $jobApplication->job_2_sampai }}</p>
                            </div>
                            <div>
                                <p class="text-sm text-gray-600">Last Salary</p>
                                <p>Rp {{ number_format($jobApplication->gaji_terakhir_2, 0, ',', '.') }}</p>
                            </div>
                        </div>
                        <div class="mt-2">
                            <p class="text-sm text-gray-600">Job Description</p>
                            <p class="whitespace-pre-line">{{ $jobApplication->jobdesk_pekerjaan_2 }}</p>
                        </div>
                    </div>
                @endif
            </div>

            {{-- Skills & Capabilities --}}
            <div class="mb-8">
                <h2 class="text-xl font-semibold text-gray-800 bg-slate-200 py-1 px-2 mb-4">Skill & Kemampuan</h2>

                {{-- Language Skills --}}
                <div class="mb-6">
                    <h3 class="font-medium mb-2">Kemampuan Bahasa</h3>
                    <table class="w-full">
                        <thead>
                            <tr class="text-left text-sm text-gray-600 border-b">
                                <th class="pb-2 border-r mr-2">Bahasa</th>
                                <th class="pb-2">Berbicara</th>
                                <th class="pb-2">Mendengarkan</th>
                                <th class="pb-2">Menulis</th>
                                <th class="pb-2">Membaca</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td class="py-1 border-r mr-2">English</td>
                                <td>{{ $jobApplication->inggris_bicara }}</td>
                                <td>{{ $jobApplication->inggris_dengar }}</td>
                                <td>{{ $jobApplication->inggris_tulis }}</td>
                                <td>{{ $jobApplication->inggris_baca }}</td>
                            </tr>
                            @if ($jobApplication->mandarin_bicara)
                                <tr>
                                    <td class="py-1 border-r mr-2">Mandarin</td>
                                    <td>{{ $jobApplication->mandarin_bicara }}</td>
                                    <td>{{ $jobApplication->mandarin_dengar }}</td>
                                    <td>{{ $jobApplication->mandarin_tulis }}</td>
                                    <td>{{ $jobApplication->mandarin_baca }}</td>
                                </tr>
                            @endif
                        </tbody>
                    </table>
                </div>

                {{-- Computer Skills --}}
                <div class="mb-6">
                    <h3 class="font-medium mb-2">Computer Skills</h3>
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
                    </div>
                </div>
            </div>

            <div class="page-break"></div>

            {{-- References --}}
            <div class="mb-8">
                <h2 class="text-xl font-semibold text-gray-800 border-b-2 border-gray-300 pb-2 mb-4">References</h2>
                <div class="grid grid-cols-2 gap-6">
                    <div>
                        <h3 class="font-medium mb-2">Reference 1</h3>
                        <div class="space-y-2">
                            <div>
                                <p class="text-sm text-gray-600">Name</p>
                                <p>{{ $jobApplication->nama_referensi_1 }}</p>
                            </div>
                            <div>
                                <p class="text-sm text-gray-600">Phone</p>
                                <p>{{ $jobApplication->no_telp_referensi_1 }}</p>
                            </div>
                            <div>
                                <p class="text-sm text-gray-600">Company & Position</p>
                                <p>{{ $jobApplication->perusahaan_referensi_1 }} -
                                    {{ $jobApplication->posisi_referensi_1 }}</p>
                            </div>
                        </div>
                    </div>
                    @if ($jobApplication->nama_referensi_2)
                        <div>
                            <h3 class="font-medium mb-2">Reference 2</h3>
                            <div class="space-y-2">
                                <div>
                                    <p class="text-sm text-gray-600">Name</p>
                                    <p>{{ $jobApplication->nama_referensi_2 }}</p>
                                </div>
                                <div>
                                    <p class="text-sm text-gray-600">Phone</p>
                                    <p>{{ $jobApplication->no_telp_referensi_2 }}</p>
                                </div>
                                <div>
                                    <p class="text-sm text-gray-600">Company & Position</p>
                                    <p>{{ $jobApplication->perusahaan_referensi_2 }} -
                                        {{ $jobApplication->posisi_referensi_2 }}</p>
                                </div>
                            </div>
                        </div>
                    @endif
                </div>
            </div>

            {{-- Additional Information --}}
            <div>
                <h2 class="text-xl font-semibold text-gray-800 border-b-2 border-gray-300 pb-2 mb-4">Additional Information
                </h2>
                <div class="grid grid-cols-2 gap-4">
                    <div>
                        <p class="text-sm text-gray-600">Source Information</p>
                        <p>{{ is_array($jobApplication->info_dari) ? implode(', ', $jobApplication->info_dari) : $jobApplication->info_dari }}
                        </p>
                    </div>
                    <div>
                        <p class="text-sm text-gray-600">Expected Salary</p>
                        <p>Rp {{ number_format($jobApplication->ekspektasi_gaji, 0, ',', '.') }}</p>
                    </div>
                    <div>
                        <p class="text-sm text-gray-600">Start Availability</p>
                        <p>{{ $jobApplication->dapat_mulai_bekerja }}</p>
                    </div>
                    <div>
                        <p class="text-sm text-gray-600">Willing to be Placed Outside the City</p>
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
