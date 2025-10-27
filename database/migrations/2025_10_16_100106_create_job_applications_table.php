<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('job_applications', function (Blueprint $table) {
            $table->id();
            $table->timestamps();

            $table->string('posisi_prioritas');
            $table->string('posisi_alternatif');
            $table->string('keahlian');


            // Personal Information
            $table->string('pas_foto');
            $table->string('nama_lengkap');
            $table->string('email')->index();
            $table->string('no_hp_whatsapp');
            $table->string('jenis_kelamin', 20);
            $table->string('status_kawin', 20);
            $table->string('agama', 30);
            $table->string('tempat_lahir', 30);
            $table->string('tanggal_lahir', 20);
            $table->string('golongan_darah', 3);
            $table->string('kondisi_kesehatan', 100);
            $table->decimal('berat_badan', 5, 2);
            $table->decimal('tinggi_badan', 5, 2);

            // Family Information
            $table->string('nama_ayah');
            $table->string('usia_ayah');
            $table->string('pekerjaan_ayah');
            $table->string('nama_ibu');
            $table->string('usia_ibu');
            $table->string('pekerjaan_ibu');

            // Siblings Information
            $table->string('nama_saudara_kandung_1')->nullable();
            $table->string('usia_saudara_kandung_1')->nullable();
            $table->string('pekerjaan_saudara_kandung_1')->nullable();
            $table->string('nama_saudara_kandung_2')->nullable();
            $table->string('usia_saudara_kandung_2')->nullable();
            $table->string('pekerjaan_saudara_kandung_2')->nullable();
            $table->string('nama_saudara_kandung_3')->nullable();
            $table->string('usia_saudara_kandung_3')->nullable();
            $table->string('pekerjaan_saudara_kandung_3')->nullable();
            $table->string('nama_saudara_kandung_4')->nullable();
            $table->string('usia_saudara_kandung_4')->nullable();
            $table->string('pekerjaan_saudara_kandung_4')->nullable();

            // Address Information
            $table->text('alamat_domisili');
            $table->string('kota_kabupaten');
            $table->string('kode_pos', 10);
            $table->string('tel_rumah')->nullable();

            // Education - SMA
            $table->string('sma_dari', 20);
            $table->string('sma_sampai', 20);
            $table->string('sma_nama');
            $table->string('sma_jurusan');
            $table->string('sma_status_lulus', 50);

            // Education - Diploma
            $table->string('diploma_dari', 20)->nullable();
            $table->string('diploma_sampai', 20)->nullable();
            $table->string('diploma_nama_univ')->nullable();
            $table->string('diploma_jurusan')->nullable();
            $table->decimal('diploma_ipk', 3, 2)->nullable();
            $table->string('diploma_status_lulus')->nullable();

            // Education - S1
            $table->string('s1_dari', 20)->nullable();
            $table->string('s1_sampai', 20)->nullable();
            $table->string('s1_nama_univ')->nullable();
            $table->string('s1_jurusan')->nullable();
            $table->decimal('s1_ipk', 3, 2)->nullable();
            $table->string('s1_status_lulus')->nullable();

            // Education - S2
            $table->string('s2_dari', 20)->nullable();
            $table->string('s2_sampai', 20)->nullable();
            $table->string('s2_nama_univ')->nullable();
            $table->string('s2_jurusan')->nullable();
            $table->decimal('s2_ipk', 3, 2)->nullable();
            $table->string('s2_status_lulus')->nullable();

            // Work Experience 1 (Optional)
            $table->string('nama_perusahaan_1')->nullable();
            $table->string('jabatan_1')->nullable();
            $table->decimal('gaji_terakhir_1', 12, 2)->nullable();
            $table->string('job_1_dari', 20)->nullable();
            $table->string('job_1_sampai', 20)->nullable();
            $table->text('alasan_berhenti_1')->nullable();
            $table->text('jobdesk_pekerjaan_1')->nullable();

            // Work Experience 2 (Optional)
            $table->string('nama_perusahaan_2')->nullable();
            $table->string('jabatan_2')->nullable();
            $table->decimal('gaji_terakhir_2', 12, 2)->nullable();
            $table->string('job_2_dari', 20)->nullable();
            $table->string('job_2_sampai', 20)->nullable();
            $table->text('alasan_berhenti_2')->nullable();
            $table->text('jobdesk_pekerjaan_2')->nullable();

            // Work Experience 3 (Optional)
            $table->string('nama_perusahaan_3')->nullable();
            $table->string('jabatan_3')->nullable();
            $table->decimal('gaji_terakhir_3', 12, 2)->nullable();
            $table->string('job_3_dari', 20)->nullable();
            $table->string('job_3_sampai', 20)->nullable();
            $table->text('alasan_berhenti_3')->nullable();
            $table->text('jobdesk_pekerjaan_3')->nullable();

            // Language Skills - English
            $table->string('inggris_bicara', 50);
            $table->string('inggris_dengar', 50);
            $table->string('inggris_tulis', 50);
            $table->string('inggris_baca', 50);

            // Language Skills - Mandarin
            $table->string('mandarin_bicara', 50)->nullable();
            $table->string('mandarin_dengar', 50)->nullable();
            $table->string('mandarin_tulis', 50)->nullable();
            $table->string('mandarin_baca', 50)->nullable();

            // Language Skills - Other
            $table->string('bahasa_asing_lain')->nullable();
            $table->string('bahasa_asing_lain_bicara', 50)->nullable();
            $table->string('bahasa_asing_lain_dengar', 50)->nullable();
            $table->string('bahasa_asing_lain_tulis', 50)->nullable();
            $table->string('bahasa_asing_lain_baca', 50)->nullable();

            // Computer Skills
            $table->string('office_word', 50);
            $table->string('office_excel', 50);
            $table->string('office_power_point', 50);
            $table->string('skill_com_lain_1')->nullable();
            $table->string('skill_com_1_level', 50)->nullable();
            $table->string('skill_com_lain_2')->nullable();
            $table->string('skill_com_2_level', 50)->nullable();

            // Organization
            $table->string('nama_organisasi')->nullable();
            $table->string('alamat_organisasi')->nullable();
            $table->string('posisi_organisasi')->nullable();

            // References 1 (Required)
            $table->string('nama_referensi_1');
            $table->string('no_telp_referensi_1');
            $table->string('perusahaan_referensi_1');
            $table->string('posisi_referensi_1');

            // References 2 (Optional)
            $table->string('nama_referensi_2')->nullable();
            $table->string('no_telp_referensi_2')->nullable();
            $table->string('perusahaan_referensi_2')->nullable();
            $table->string('posisi_referensi_2')->nullable();

            // Emergency Contact
            $table->string('nama_kondar');
            $table->string('no_telp_kondar');
            $table->string('alamat_kondar');
            $table->string('hubungan_kondar', 100);

            // Additional Info
            $table->json('info_dari');
            $table->string('kenalan_yg_bekerja');
            $table->string('apply_perusahaan_lain');
            $table->string('pekerjaan_sampingan');
            $table->string('pernah_psikotes');
            $table->string('riwayat_penyakit_kronis');
            $table->string('rekam_jejak_kriminal');
            $table->string('sedia_ditempatkan_luar_kota');
            $table->decimal('ekspektasi_gaji', 12, 2);
            $table->string('dapat_mulai_bekerja', 50);
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('job_applications');
    }
};
