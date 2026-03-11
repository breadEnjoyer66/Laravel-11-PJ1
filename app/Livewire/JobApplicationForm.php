<?php

namespace App\Livewire;

use Livewire\Attributes\Validate;
use Livewire\Component;
use Livewire\WithFileUploads;
use App\Models\JobApplication;
use App\Models\OpenPosition;

class JobApplicationForm extends Component
{
    use WithFileUploads;

    public $step = 1;
    public $totalSteps = 11;
    public $open_positions;

    // 🧍 PERSONAL INFORMATION
    #[Validate('required|image|mimes:jpeg,png,jpg|max:2048')]
    public $pas_foto;
    #[Validate('required|string|max:255')]
    public $nama_lengkap = '';
    #[Validate('required|string|max:100')]
    public $posisi_prioritas = '';
    #[Validate('required|string|max:100')]
    public $posisi_alternatif = '';
    #[Validate('required|string|max:100')]
    public $keahlian = '';
    #[Validate('required|email:rfc,dns|max:255')]
    public $email = '';
    #[Validate('required|regex:/^(\+?\d{8,15})$/')]
    public $no_hp_whatsapp = '';
    #[Validate('required|string|max:20')]
    public $jenis_kelamin = '';
    #[Validate('required|string|max:40')]
    public $status_kawin = '';
    #[Validate('required|string|max:50')]
    public $agama = '';
    #[Validate('required|string|max:50')]
    public $tempat_lahir = '';
    #[Validate('required|string|max:20')]
    public $tanggal_lahir = '';
    #[Validate('nullable|string|max:3')]
    public $golongan_darah = '';
    #[Validate('nullable|string|max:100')]
    public $kondisi_kesehatan = '';
    #[Validate('nullable|numeric|min:1|max:300')]
    public $berat_badan = '';
    #[Validate('nullable|numeric|min:50|max:250')]
    public $tinggi_badan = '';

    // 👨‍👩‍👧 FAMILY INFORMATION
    #[Validate('required|string|max:255')]
    public $nama_ayah = '';
    #[Validate('required|string|max:255')]
    public $usia_ayah = '';
    #[Validate('required|string|max:255')]
    public $pekerjaan_ayah = '';
    #[Validate('required|string|max:255')]
    public $nama_ibu = '';
    #[Validate('required|string|max:255')]
    public $usia_ibu = '';
    #[Validate('required|string|max:255')]
    public $pekerjaan_ibu = '';

    #[Validate('nullable|string|max:255')]
    public $nama_saudara_kandung_1 = '';
    #[Validate('nullable|string|max:255')]
    public $usia_saudara_kandung_1 = '';
    #[Validate('nullable|string|max:255')]
    public $pekerjaan_saudara_kandung_1 = '';
    #[Validate('nullable|string|max:255')]
    public $nama_saudara_kandung_2 = '';
    #[Validate('nullable|string|max:255')]
    public $usia_saudara_kandung_2 = '';
    #[Validate('nullable|string|max:255')]
    public $pekerjaan_saudara_kandung_2 = '';
    #[Validate('nullable|string|max:255')]
    public $nama_saudara_kandung_3 = '';
    #[Validate('nullable|string|max:255')]
    public $usia_saudara_kandung_3 = '';
    #[Validate('nullable|string|max:255')]
    public $pekerjaan_saudara_kandung_3 = '';
    #[Validate('nullable|string|max:255')]
    public $nama_saudara_kandung_4 = '';
    #[Validate('nullable|string|max:255')]
    public $usia_saudara_kandung_4 = '';
    #[Validate('nullable|string|max:255')]
    public $pekerjaan_saudara_kandung_4 = '';

    // 🏠 ADDRESS
    #[Validate('required|string|max:500')]
    public $alamat_domisili = '';
    #[Validate('required|string|max:255')]
    public $kota_kabupaten = '';
    #[Validate('required|string|max:10')]
    public $kode_pos = '';
    #[Validate('nullable|regex:/^(\+?\d{8,15})$/')]
    public $tel_rumah = '';

    // 🎓 EDUCATION - SMA
    #[Validate('required|string|max:20')]
    public $sma_dari = '';
    #[Validate('required|string|max:20')]
    public $sma_sampai = '';
    #[Validate('required|string|max:255')]
    public $sma_nama = '';
    #[Validate('required|string|max:255')]
    public $sma_jurusan = '';
    #[Validate('required|string|max:50')]
    public $sma_status_lulus = '';

    // 🎓 DIPLOMA
    #[Validate('nullable|string|max:20')]
    public $diploma_dari = '';
    #[Validate('nullable|string|max:20')]
    public $diploma_sampai = '';
    #[Validate('nullable|string|max:255')]
    public $diploma_nama_univ = '';
    #[Validate('nullable|string|max:255')]
    public $diploma_jurusan = '';
    #[Validate('nullable|numeric|min:0|max:4')]
    public $diploma_ipk = '';
    #[Validate('nullable|string|max:20')]
    public $diploma_status_lulus = '';

    // 🎓 S1
    #[Validate('nullable|string|max:20')]
    public $s1_dari = '';
    #[Validate('nullable|string|max:20')]
    public $s1_sampai = '';
    #[Validate('nullable|string|max:255')]
    public $s1_nama_univ = '';
    #[Validate('nullable|string|max:255')]
    public $s1_jurusan = '';
    #[Validate('nullable|numeric|min:0|max:4')]
    public $s1_ipk = '';
    #[Validate('nullable|string|max:20')]
    public $s1_status_lulus = '';

    // 🎓 S2
    #[Validate('nullable|string|max:20')]
    public $s2_dari = '';
    #[Validate('nullable|string|max:20')]
    public $s2_sampai = '';
    #[Validate('nullable|string|max:255')]
    public $s2_nama_univ = '';
    #[Validate('nullable|string|max:255')]
    public $s2_jurusan = '';
    #[Validate('nullable|numeric|min:0|max:4')]
    public $s2_ipk = '';
    #[Validate('nullable|string|max:20')]
    public $s2_status_lulus = '';

    // 💼 JOB EXPERIENCE
    #[Validate('nullable|string|max:255')]
    public $nama_perusahaan_1 = '';
    #[Validate('nullable|string|max:255')]
    public $jabatan_1 = '';
    #[Validate('nullable|numeric|min:0')]
    public $gaji_terakhir_1 = '';
    #[Validate('nullable|string|max:20')]
    public $job_1_dari = '';
    #[Validate('nullable|string|max:20')]
    public $job_1_sampai = '';
    #[Validate('nullable|string|max:300')]
    public $alasan_berhenti_1 = '';
    #[Validate('nullable|string|max:500')]
    public $jobdesk_pekerjaan_1 = '';

    #[Validate('nullable|string|max:255')]
    public $nama_perusahaan_2 = '';
    #[Validate('nullable|string|max:255')]
    public $jabatan_2 = '';
    #[Validate('nullable|numeric|min:0')]
    public $gaji_terakhir_2 = '';
    #[Validate('nullable|string|max:20')]
    public $job_2_dari = '';
    #[Validate('nullable|string|max:20')]
    public $job_2_sampai = '';
    #[Validate('nullable|string|max:300')]
    public $alasan_berhenti_2 = '';
    #[Validate('nullable|string|max:500')]
    public $jobdesk_pekerjaan_2 = '';

    #[Validate('nullable|string|max:255')]
    public $nama_perusahaan_3 = '';
    #[Validate('nullable|string|max:255')]
    public $jabatan_3 = '';
    #[Validate('nullable|numeric|min:0')]
    public $gaji_terakhir_3 = '';
    #[Validate('nullable|string|max:20')]
    public $job_3_dari = '';
    #[Validate('nullable|string|max:20')]
    public $job_3_sampai = '';
    #[Validate('nullable|string|max:300')]
    public $alasan_berhenti_3 = '';
    #[Validate('nullable|string|max:500')]
    public $jobdesk_pekerjaan_3 = '';

    // 🌐 LANGUAGE SKILLS
    #[Validate('required|string|max:50')]
    public $inggris_bicara = '';
    #[Validate('required|string|max:50')]
    public $inggris_dengar = '';
    #[Validate('required|string|max:50')]
    public $inggris_tulis = '';
    #[Validate('required|string|max:50')]
    public $inggris_baca = '';

    #[Validate('nullable|string|max:50')]
    public $mandarin_bicara = '';
    #[Validate('nullable|string|max:50')]
    public $mandarin_dengar = '';
    #[Validate('nullable|string|max:50')]
    public $mandarin_tulis = '';
    #[Validate('nullable|string|max:50')]
    public $mandarin_baca = '';

    #[Validate('nullable|string|max:255')]
    public $bahasa_asing_lain = '';
    #[Validate('nullable|string|max:50')]
    public $bahasa_asing_lain_bicara = '';
    #[Validate('nullable|string|max:50')]
    public $bahasa_asing_lain_dengar = '';
    #[Validate('nullable|string|max:50')]
    public $bahasa_asing_lain_tulis = '';
    #[Validate('nullable|string|max:50')]
    public $bahasa_asing_lain_baca = '';

    // 💻 COMPUTER SKILLS
    #[Validate('required|string|max:50')]
    public $office_word = '';
    #[Validate('required|string|max:50')]
    public $office_excel = '';
    #[Validate('required|string|max:50')]
    public $office_power_point = '';
    #[Validate('nullable|string|max:255')]
    public $skill_com_lain_1 = '';
    #[Validate('nullable|string|max:50')]
    public $skill_com_1_level = '';
    #[Validate('nullable|string|max:255')]
    public $skill_com_lain_2 = '';
    #[Validate('nullable|string|max:50')]
    public $skill_com_2_level = '';

    // 🏛️ ORGANIZATION
    #[Validate('nullable|string|max:255')]
    public $nama_organisasi = '';
    #[Validate('nullable|string|max:255')]
    public $alamat_organisasi = '';
    #[Validate('nullable|string|max:255')]
    public $posisi_organisasi = '';

    // 📞 REFERENCES
    #[Validate('required|string|max:255')]
    public $nama_referensi_1 = '';
    #[Validate('required|regex:/^(\+?\d{8,15})$/')]
    public $no_telp_referensi_1 = '';
    #[Validate('required|string|max:255')]
    public $perusahaan_referensi_1 = '';
    #[Validate('required|string|max:255')]
    public $posisi_referensi_1 = '';
    #[Validate('nullable|string|max:255')]
    public $nama_referensi_2 = '';
    #[Validate('nullable|regex:/^(\+?\d{8,15})$/')]
    public $no_telp_referensi_2 = '';
    #[Validate('nullable|string|max:255')]
    public $perusahaan_referensi_2 = '';
    #[Validate('nullable|string|max:255')]
    public $posisi_referensi_2 = '';

    // 🚨 EMERGENCY CONTACT
    #[Validate('required|string|max:255')]
    public $nama_kondar = '';
    #[Validate('required|regex:/^(\+?\d{8,15})$/')]
    public $no_telp_kondar = '';
    #[Validate('required|string|max:255')]
    public $alamat_kondar = '';
    #[Validate('required|string|max:100')]
    public $hubungan_kondar = '';

    // 🧾 ADDITIONAL INFO
    public $info_dari = [];
    #[Validate('required|string|max:255')]
    public $kenalan_yg_bekerja = '';
    #[Validate('required|string|max:255')]
    public $apply_perusahaan_lain = '';
    #[Validate('required|string|max:255')]
    public $pekerjaan_sampingan = '';
    #[Validate('required|string|max:255')]
    public $pernah_psikotes = '';
    #[Validate('required|string|max:255')]
    public $riwayat_penyakit_kronis = '';
    #[Validate('required|string|max:255')]
    public $rekam_jejak_kriminal = '';
    #[Validate('required|string|max:255')]
    public $sedia_ditempatkan_luar_kota = '';
    #[Validate('required|numeric|min:0')]
    public $ekspektasi_gaji = '';
    #[Validate('required|string|max:50')]
    public $dapat_mulai_bekerja = '';

    public function mount()
    {
        $this->open_positions = OpenPosition::all();
    }

    public function nextStep()
    {
        // Validate current step fields based on step number
        if ($this->step == 1) {
            $this->validate([
                'pas_foto' => 'required|image|mimes:jpeg,png,jpg|max:2048',
                'nama_lengkap' => 'required|string|max:255',
                'posisi_prioritas' => 'required|string|max:100',
                'posisi_alternatif' => 'required|string|max:100',
                'keahlian' => 'required|string|max:100',
                'email' => 'required|email:rfc,dns|max:255',
                'no_hp_whatsapp' => 'required|regex:/^(\+?\d{8,15})$/',
                'jenis_kelamin' => 'required|string|max:20',
                'status_kawin' => 'required|string|max:40',
                'agama' => 'required|string|max:50',
                'tempat_lahir' => 'required|string|max:50',
                'tanggal_lahir' => 'required|string|max:20',
                'golongan_darah' => 'nullable|string|max:3',
                'kondisi_kesehatan' => 'nullable|string|max:100',
                'berat_badan' => 'nullable|numeric|min:1|max:300',
                'tinggi_badan' => 'nullable|numeric|min:50|max:250',
            ]);
        } elseif ($this->step == 2) {
            $this->validate([
                'nama_ayah' => 'required|string|max:255',
                'usia_ayah' => 'required|string|max:255',
                'pekerjaan_ayah' => 'required|string|max:255',
                'nama_ibu' => 'required|string|max:255',
                'usia_ibu' => 'required|string|max:255',
                'pekerjaan_ibu' => 'required|string|max:255',
            ]);
        } elseif ($this->step == 3) {
            $this->validate([
                'alamat_domisili' => 'required|string|max:500',
                'kota_kabupaten' => 'required|string|max:255',
                'kode_pos' => 'required|string|max:10',
                'tel_rumah' => 'nullable|regex:/^(\+?\d{8,15})$/',
            ]);
        } elseif ($this->step == 4) {
            $this->validate([
                'sma_dari' => 'required|string|max:20',
                'sma_sampai' => 'required|string|max:20',
                'sma_nama' => 'required|string|max:255',
                'sma_jurusan' => 'required|string|max:255',
                'sma_status_lulus' => 'required|string|max:50',
            ]);
        } elseif ($this->step == 5) {
            // Optional fields
        } elseif ($this->step == 6) {
            $this->validate([
                'inggris_bicara' => 'required|string|max:50',
                'inggris_dengar' => 'required|string|max:50',
                'inggris_tulis' => 'required|string|max:50',
                'inggris_baca' => 'required|string|max:50',
                'office_word' => 'required|string|max:50',
                'office_excel' => 'required|string|max:50',
                'office_power_point' => 'required|string|max:50',
            ]);
        } elseif ($this->step == 7) {
            // Optional fields
        } elseif ($this->step == 8) {
            $this->validate([
                'nama_referensi_1' => 'required|string|max:255',
                'no_telp_referensi_1' => 'required|regex:/^(\+?\d{8,15})$/',
                'perusahaan_referensi_1' => 'required|string|max:255',
                'posisi_referensi_1' => 'required|string|max:255',
            ]);
        } elseif ($this->step == 9) {
            $this->validate([
                'nama_kondar' => 'required|string|max:255',
                'no_telp_kondar' => 'required|regex:/^(\+?\d{8,15})$/',
                'alamat_kondar' => 'required|string|max:255',
                'hubungan_kondar' => 'required|string|max:100',
            ]);
        } elseif ($this->step == 10) {
            // Optional fields
        } elseif ($this->step == 11) {
            $this->validate([
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
        }

        if ($this->step < $this->totalSteps) {
            $this->step++;
        }
    }

    public function previousStep()
    {
        if ($this->step > 1) {
            $this->step--;
        }
    }

    public function submitForm()
    {
        // Final validation
        $this->validate([
            'pas_foto' => 'required|image|mimes:jpeg,png,jpg|max:2048',
            'nama_lengkap' => 'required|string|max:255',
            'posisi_prioritas' => 'required|string|max:100',
            'posisi_alternatif' => 'required|string|max:100',
            'keahlian' => 'required|string|max:100',
            'email' => 'required|email:rfc,dns|max:255',
            'no_hp_whatsapp' => 'required|regex:/^(\+?\d{8,15})$/',

            'jenis_kelamin' => 'required|string|max:20',
            'status_kawin' => 'required|string|max:40',
            'agama' => 'required|string|max:50',
            'tempat_lahir' => 'required|string|max:50',
            'tanggal_lahir' => 'required|string|max:20',
            'nama_ayah' => 'required|string|max:255',
            'usia_ayah' => 'required|string|max:255',
            'pekerjaan_ayah' => 'required|string|max:255',
            'nama_ibu' => 'required|string|max:255',
            'usia_ibu' => 'required|string|max:255',
            'pekerjaan_ibu' => 'required|string|max:255',
            'alamat_domisili' => 'required|string|max:500',
            'kota_kabupaten' => 'required|string|max:255',
            'kode_pos' => 'required|string|max:10',
            'sma_dari' => 'required|string|max:20',
            'sma_sampai' => 'required|string|max:20',
            'sma_nama' => 'required|string|max:255',
            'sma_jurusan' => 'required|string|max:255',
            'sma_status_lulus' => 'required|string|max:50',
            'inggris_bicara' => 'required|string|max:50',
            'inggris_dengar' => 'required|string|max:50',
            'inggris_tulis' => 'required|string|max:50',
            'inggris_baca' => 'required|string|max:50',
            'office_word' => 'required|string|max:50',
            'office_excel' => 'required|string|max:50',
            'office_power_point' => 'required|string|max:50',
            'nama_referensi_1' => 'required|string|max:255',
            'no_telp_referensi_1' => 'required|regex:/^(\+?\d{8,15})$/',
            'perusahaan_referensi_1' => 'required|string|max:255',
            'posisi_referensi_1' => 'required|string|max:255',
            'nama_kondar' => 'required|string|max:255',
            'no_telp_kondar' => 'required|regex:/^(\+?\d{8,15})$/',
            'alamat_kondar' => 'required|string|max:255',
            'hubungan_kondar' => 'required|string|max:100',
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

        // Handle file upload
        $pas_foto_path = null;
        if ($this->pas_foto) {
            $pas_foto_path = $this->pas_foto->store('pas_fotos', 'public');
        }

        // Save to database
        JobApplication::create([
            'pas_foto' => $pas_foto_path ?? null,
            'nama_lengkap' => $this->nama_lengkap,
            'posisi_prioritas' => $this->posisi_prioritas,
            'posisi_alternatif' => $this->posisi_alternatif,
            'keahlian' => $this->keahlian,
            'email' => $this->email,
            'no_hp_whatsapp' => $this->no_hp_whatsapp,
            'jenis_kelamin' => $this->jenis_kelamin,
            'status_kawin' => $this->status_kawin,
            'agama' => $this->agama,
            'tempat_lahir' => $this->tempat_lahir,
            'tanggal_lahir' => $this->tanggal_lahir,
            'golongan_darah' => $this->golongan_darah,
            'kondisi_kesehatan' => $this->kondisi_kesehatan,
            'berat_badan' => $this->berat_badan,
            'tinggi_badan' => $this->tinggi_badan,
            'nama_ayah' => $this->nama_ayah,
            'usia_ayah' => $this->usia_ayah,
            'pekerjaan_ayah' => $this->pekerjaan_ayah,
            'nama_ibu' => $this->nama_ibu,
            'usia_ibu' => $this->usia_ibu,
            'pekerjaan_ibu' => $this->pekerjaan_ibu,
            'nama_saudara_kandung_1' => $this->nama_saudara_kandung_1,
            'usia_saudara_kandung_1' => $this->usia_saudara_kandung_1,
            'pekerjaan_saudara_kandung_1' => $this->pekerjaan_saudara_kandung_1,
            'nama_saudara_kandung_2' => $this->nama_saudara_kandung_2,
            'usia_saudara_kandung_2' => $this->usia_saudara_kandung_2,
            'pekerjaan_saudara_kandung_2' => $this->pekerjaan_saudara_kandung_2,
            'nama_saudara_kandung_3' => $this->nama_saudara_kandung_3,
            'usia_saudara_kandung_3' => $this->usia_saudara_kandung_3,
            'pekerjaan_saudara_kandung_3' => $this->pekerjaan_saudara_kandung_3,
            'nama_saudara_kandung_4' => $this->nama_saudara_kandung_4,
            'usia_saudara_kandung_4' => $this->usia_saudara_kandung_4,
            'pekerjaan_saudara_kandung_4' => $this->pekerjaan_saudara_kandung_4,
            'alamat_domisili' => $this->alamat_domisili,
            'kota_kabupaten' => $this->kota_kabupaten,
            'kode_pos' => $this->kode_pos,
            'tel_rumah' => $this->tel_rumah,
            'sma_dari' => $this->sma_dari,
            'sma_sampai' => $this->sma_sampai,
            'sma_nama' => $this->sma_nama,
            'sma_jurusan' => $this->sma_jurusan,
            'sma_status_lulus' => $this->sma_status_lulus,
            'diploma_dari' => $this->diploma_dari,
            'diploma_sampai' => $this->diploma_sampai,
            'diploma_nama_univ' => $this->diploma_nama_univ,
            'diploma_jurusan' => $this->diploma_jurusan,
            'diploma_ipk' => $this->diploma_ipk,
            'diploma_status_lulus' => $this->diploma_status_lulus,
            's1_dari' => $this->s1_dari,
            's1_sampai' => $this->s1_sampai,
            's1_nama_univ' => $this->s1_nama_univ,
            's1_jurusan' => $this->s1_jurusan,
            's1_ipk' => $this->s1_ipk,
            's1_status_lulus' => $this->s1_status_lulus,
            's2_dari' => $this->s2_dari,
            's2_sampai' => $this->s2_sampai,
            's2_nama_univ' => $this->s2_nama_univ,
            's2_jurusan' => $this->s2_jurusan,
            's2_ipk' => $this->s2_ipk,
            's2_status_lulus' => $this->s2_status_lulus,
            'nama_perusahaan_1' => $this->nama_perusahaan_1,
            'jabatan_1' => $this->jabatan_1,
            'gaji_terakhir_1' => $this->gaji_terakhir_1,
            'job_1_dari' => $this->job_1_dari,
            'job_1_sampai' => $this->job_1_sampai,
            'alasan_berhenti_1' => $this->alasan_berhenti_1,
            'jobdesk_pekerjaan_1' => $this->jobdesk_pekerjaan_1,
            'nama_perusahaan_2' => $this->nama_perusahaan_2,
            'jabatan_2' => $this->jabatan_2,
            'gaji_terakhir_2' => $this->gaji_terakhir_2,
            'job_2_dari' => $this->job_2_dari,
            'job_2_sampai' => $this->job_2_sampai,
            'alasan_berhenti_2' => $this->alasan_berhenti_2,
            'jobdesk_pekerjaan_2' => $this->jobdesk_pekerjaan_2,
            'nama_perusahaan_3' => $this->nama_perusahaan_3,
            'jabatan_3' => $this->jabatan_3,
            'gaji_terakhir_3' => $this->gaji_terakhir_3,
            'job_3_dari' => $this->job_3_dari,
            'job_3_sampai' => $this->job_3_sampai,
            'alasan_berhenti_3' => $this->alasan_berhenti_3,
            'jobdesk_pekerjaan_3' => $this->jobdesk_pekerjaan_3,
            'inggris_bicara' => $this->inggris_bicara,
            'inggris_dengar' => $this->inggris_dengar,
            'inggris_tulis' => $this->inggris_tulis,
            'inggris_baca' => $this->inggris_baca,
            'mandarin_bicara' => $this->mandarin_bicara,
            'mandarin_dengar' => $this->mandarin_dengar,
            'mandarin_tulis' => $this->mandarin_tulis,
            'mandarin_baca' => $this->mandarin_baca,
            'bahasa_asing_lain' => $this->bahasa_asing_lain,
            'bahasa_asing_lain_bicara' => $this->bahasa_asing_lain_bicara,
            'bahasa_asing_lain_dengar' => $this->bahasa_asing_lain_dengar,
            'bahasa_asing_lain_tulis' => $this->bahasa_asing_lain_tulis,
            'bahasa_asing_lain_baca' => $this->bahasa_asing_lain_baca,
            'office_word' => $this->office_word,
            'office_excel' => $this->office_excel,
            'office_power_point' => $this->office_power_point,
            'skill_com_lain_1' => $this->skill_com_lain_1,
            'skill_com_1_level' => $this->skill_com_1_level,
            'skill_com_lain_2' => $this->skill_com_lain_2,
            'skill_com_2_level' => $this->skill_com_2_level,
            'nama_organisasi' => $this->nama_organisasi,
            'alamat_organisasi' => $this->alamat_organisasi,
            'posisi_organisasi' => $this->posisi_organisasi,
            'nama_referensi_1' => $this->nama_referensi_1,
            'no_telp_referensi_1' => $this->no_telp_referensi_1,
            'perusahaan_referensi_1' => $this->perusahaan_referensi_1,
            'posisi_referensi_1' => $this->posisi_referensi_1,
            'nama_referensi_2' => $this->nama_referensi_2,
            'no_telp_referensi_2' => $this->no_telp_referensi_2,
            'perusahaan_referensi_2' => $this->perusahaan_referensi_2,
            'posisi_referensi_2' => $this->posisi_referensi_2,
            'nama_kondar' => $this->nama_kondar,
            'no_telp_kondar' => $this->no_telp_kondar,
            'alamat_kondar' => $this->alamat_kondar,
            'hubungan_kondar' => $this->hubungan_kondar,
            'info_dari' => json_encode($this->info_dari),
            'kenalan_yg_bekerja' => $this->kenalan_yg_bekerja,
            'apply_perusahaan_lain' => $this->apply_perusahaan_lain,
            'pekerjaan_sampingan' => $this->pekerjaan_sampingan,
            'pernah_psikotes' => $this->pernah_psikotes,
            'riwayat_penyakit_kronis' => $this->riwayat_penyakit_kronis,
            'rekam_jejak_kriminal' => $this->rekam_jejak_kriminal,
            'sedia_ditempatkan_luar_kota' => $this->sedia_ditempatkan_luar_kota,
            'ekspektasi_gaji' => $this->ekspektasi_gaji,
            'dapat_mulai_bekerja' => $this->dapat_mulai_bekerja,
        ]);

        session()->flash('success', 'Your application has been submitted successfully!');
        return redirect()->route('fill-job-application');
    }

    public function render()
    {
        return view('livewire.job-application-form');
    }
}
