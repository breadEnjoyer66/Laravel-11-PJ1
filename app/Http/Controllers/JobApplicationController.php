<?php

namespace App\Http\Controllers;

use App\Models\OpenPosition;
use Illuminate\Http\Request;
use App\Models\JobApplication;
use Illuminate\Support\Facades\Storage;

class JobApplicationController extends Controller
{

    public function careerPage()
    {
        $title = 'Career';
        $open_positions = OpenPosition::all();
        return view('career', compact('title', 'open_positions'));
    }

    public function store(Request $request)
    {

        // ✅ Validate and store in $validated
        $validated = $request->validate([
            // 🧍 PERSONAL INFORMATION
            'pas_foto' => 'required|image|mimes:jpeg,png,jpg|max:2048',
            'nama_lengkap' => 'required|string|max:255',
            'posisi_prioritas' => 'required|string|max:100',
            'posisi_alternatif' => 'required|string|max:100',
            'keahlian' => 'required|string|max:100',
            'email' => 'required|email:rfc,dns|max:255',
            'no_hp_whatsapp' => ['required', 'regex:/^(\+?\d{8,15})$/'],
            'jenis_kelamin' => 'required|string|max:20',
            'status_kawin' => 'required|string|max:40',
            'agama' => 'required|string|max:50',
            'tempat_lahir' => 'required|string|max:50',
            'tanggal_lahir' => 'required|string|max:20',
            'golongan_darah' => 'nullable|string|max:3',
            'kondisi_kesehatan' => 'nullable|string|max:100',
            'berat_badan' => 'nullable|numeric|min:1|max:300',
            'tinggi_badan' => 'nullable|numeric|min:50|max:250',

            // 👨‍👩‍👧 FAMILY INFORMATION
            'nama_ayah' => 'required|string|max:255',
            'usia_ayah' => 'required|string|max:255',
            'pekerjaan_ayah' => 'required|string|max:255',
            'nama_ibu' => 'required|string|max:255',
            'usia_ibu' => 'required|string|max:255',
            'pekerjaan_ibu' => 'required|string|max:255',

            'nama_saudara_kandung_1' => 'nullable|string|max:255',
            'usia_saudara_kandung_1' => 'nullable|string|max:255',
            'pekerjaan_saudara_kandung_1' => 'nullable|string|max:255',
            'nama_saudara_kandung_2' => 'nullable|string|max:255',
            'usia_saudara_kandung_2' => 'nullable|string|max:255',
            'pekerjaan_saudara_kandung_2' => 'nullable|string|max:255',
            'nama_saudara_kandung_3' => 'nullable|string|max:255',
            'usia_saudara_kandung_3' => 'nullable|string|max:255',
            'pekerjaan_saudara_kandung_3' => 'nullable|string|max:255',
            'nama_saudara_kandung_4' => 'nullable|string|max:255',
            'usia_saudara_kandung_4' => 'nullable|string|max:255',
            'pekerjaan_saudara_kandung_4' => 'nullable|string|max:255',

            // 🏠 ADDRESS
            'alamat_domisili' => 'required|string|max:500',
            'kota_kabupaten' => 'required|string|max:255',
            'kode_pos' => 'required|string|max:10',
            'tel_rumah' => ['nullable', 'regex:/^(\+?\d{8,15})$/'],

            // 🎓 EDUCATION - SMA
            'sma_dari' => 'required|string|max:20',
            'sma_sampai' => 'required|string|max:20',
            'sma_nama' => 'required|string|max:255',
            'sma_jurusan' => 'required|string|max:255',
            'sma_status_lulus' => 'required|string|max:50',

            // 🎓 DIPLOMA
            'diploma_dari' => 'nullable|string|max:20',
            'diploma_sampai' => 'nullable|string|max:20',
            'diploma_nama_univ' => 'nullable|string|max:255',
            'diploma_jurusan' => 'nullable|string|max:255',
            'diploma_ipk' => 'nullable|numeric|min:0|max:4',
            'diploma_status_lulus' => 'nullable|string|max:20',

            // 🎓 S1
            's1_dari' => 'nullable|string|max:20',
            's1_sampai' => 'nullable|string|max:20',
            's1_nama_univ' => 'nullable|string|max:255',
            's1_jurusan' => 'nullable|string|max:255',
            's1_ipk' => 'nullable|numeric|min:0|max:4',
            's1_status_lulus' => 'nullable|string|max:20',

            // 🎓 S2
            's2_dari' => 'nullable|string|max:20',
            's2_sampai' => 'nullable|string|max:20',
            's2_nama_univ' => 'nullable|string|max:255',
            's2_jurusan' => 'nullable|string|max:255',
            's2_ipk' => 'nullable|numeric|min:0|max:4',
            's2_status_lulus' => 'nullable|string|max:20',

            // 💼 JOB EXPERIENCE 1 (required)
            'nama_perusahaan_1' => 'nullable|string|max:255',
            'jabatan_1' => 'nullable|string|max:255',
            'gaji_terakhir_1' => 'nullable|numeric|min:0',
            'job_1_dari' => 'nullable|string|max:20',
            'job_1_sampai' => 'nullable|string|max:20',
            'alasan_berhenti_1' => 'nullable|string|max:300',
            'jobdesk_pekerjaan_1' => 'nullable|string|max:500',

            // 💼 JOB EXPERIENCE 2 (optional)
            'nama_perusahaan_2' => 'nullable|string|max:255',
            'jabatan_2' => 'nullable|string|max:255',
            'gaji_terakhir_2' => 'nullable|numeric|min:0',
            'job_2_dari' => 'nullable|string|max:20',
            'job_2_sampai' => 'nullable|string|max:20',
            'alasan_berhenti_2' => 'nullable|string|max:300',
            'jobdesk_pekerjaan_2' => 'nullable|string|max:500',

            // 💼 JOB EXPERIENCE 3 (optional)
            'nama_perusahaan_3' => 'nullable|string|max:255',
            'jabatan_3' => 'nullable|string|max:255',
            'gaji_terakhir_3' => 'nullable|numeric|min:0',
            'job_3_dari' => 'nullable|string|max:20',
            'job_3_sampai' => 'nullable|string|max:20',
            'alasan_berhenti_3' => 'nullable|string|max:300',
            'jobdesk_pekerjaan_3' => 'nullable|string|max:500',

            // 🌐 LANGUAGE SKILLS
            'inggris_bicara' => 'required|string|max:50',
            'inggris_dengar' => 'required|string|max:50',
            'inggris_tulis' => 'required|string|max:50',
            'inggris_baca' => 'required|string|max:50',

            'mandarin_bicara' => 'nullable|string|max:50',
            'mandarin_dengar' => 'nullable|string|max:50',
            'mandarin_tulis' => 'nullable|string|max:50',
            'mandarin_baca' => 'nullable|string|max:50',

            'bahasa_asing_lain' => 'nullable|string|max:255',
            'bahasa_asing_lain_bicara' => 'nullable|string|max:50',
            'bahasa_asing_lain_dengar' => 'nullable|string|max:50',
            'bahasa_asing_lain_tulis' => 'nullable|string|max:50',
            'bahasa_asing_lain_baca' => 'nullable|string|max:50',

            // 💻 COMPUTER SKILLS
            'office_word' => 'required|string|max:50',
            'office_excel' => 'required|string|max:50',
            'office_power_point' => 'required|string|max:50',
            'skill_com_lain_1' => 'nullable|string|max:255',
            'skill_com_1_level' => 'nullable|string|max:50',
            'skill_com_lain_2' => 'nullable|string|max:255',
            'skill_com_2_level' => 'nullable|string|max:50',

            // 🏛️ ORGANIZATION
            'nama_organisasi' => 'nullable|string|max:255',
            'alamat_organisasi' => 'nullable|string|max:255',
            'posisi_organisasi' => 'nullable|string|max:255',

            // 📞 REFERENCES
            'nama_referensi_1' => 'required|string|max:255',
            'no_telp_referensi_1' => ['required', 'regex:/^(\+?\d{8,15})$/'],
            'perusahaan_referensi_1' => 'required|string|max:255',
            'posisi_referensi_1' => 'required|string|max:255',
            'nama_referensi_2' => 'nullable|string|max:255',
            'no_telp_referensi_2' => ['nullable', 'regex:/^(\+?\d{8,15})$/'],
            'perusahaan_referensi_2' => 'nullable|string|max:255',
            'posisi_referensi_2' => 'nullable|string|max:255',

            // 🚨 EMERGENCY CONTACT
            'nama_kondar' => 'required|string|max:255',
            'no_telp_kondar' => ['required', 'regex:/^(\+?\d{8,15})$/'],
            'alamat_kondar' => 'required|string|max:255',
            'hubungan_kondar' => 'required|string|max:100',

            // 🧾 ADDITIONAL INFO
            'info_dari' => 'nullable|array',
            'info_dari.*' => 'string|max:100',
            'kenalan_yg_bekerja' => 'required|string|max:255',
            'apply_perusahaan_lain' => 'required|string|max:255',
            'pekerjaan_sampingan' => 'required|string|max:255',
            'pernah_psikotes' => 'required|string|max:255',
            'riwayat_penyakit_kronis' => 'required|string|max:255',
            'rekam_jejak_kriminal' => 'required|string|max:255',
            'sedia_ditempatkan_luar_kota' => 'required|string|max:255',
            'ekspektasi_gaji' => 'required|numeric|min:0',
            'dapat_mulai_bekerja' => 'required|string|max:50',
        ]);

        // ✅ Handle file upload
        if ($request->hasFile('pas_foto')) {
            $validated['pas_foto'] = $request->file('pas_foto')->store('pas_fotos', 'public');
        }

        // ✅ Save to DB
        JobApplication::create($validated);

        // ✅ Redirect success
        return redirect()->back()->with('success', 'Your application has been submitted successfully!');
    }
}
