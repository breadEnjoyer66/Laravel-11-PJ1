export const validators = {
    1: function validatePersonalInfo() {
        this.errors = {};
        let isValid = true;

        if (!this.formData.foto) {
            this.errors.foto = 'Foto wajib diupload';
            isValid = false;
        }

        if (!this.formData.nama_lengkap) {
            this.errors.nama_lengkap = 'Nama lengkap wajib diisi';
            isValid = false;
        }

        if (!this.formData.no_handphone) {
            this.errors.no_handphone = 'Nomor handphone wajib diisi';
            isValid = false;
        }

        if (!this.formData.email) {
            this.errors.email = 'Email wajib diisi';
            isValid = false;
        } else if (!/^[^\s@]+@[^\s@]+\.[^\s@]+$/.test(this.formData.email)) {
            this.errors.email = 'Format email tidak valid';
            isValid = false;
        }

        if (!this.formData.jenis_kelamin) {
            this.errors.jenis_kelamin = 'Jenis kelamin wajib dipilih';
            isValid = false;
        }

        if (!this.formData.status_kawin) {
            this.errors.status_kawin = 'Status perkawinan wajib dipilih';
            isValid = false;
        }

        if (!this.formData.agama) {
            this.errors.agama = 'Agama wajib dipilih';
            isValid = false;
        }

        if (this.formData.agama === 'Lainnya' && !this.formData.agama_lainnya) {
            this.errors.agama_lainnya = 'Mohon sebutkan agama Anda';
            isValid = false;
        }

        if (!this.formData.tempat_lahir) {
            this.errors.tempat_lahir = 'Tempat lahir wajib diisi';
            isValid = false;
        }

        if (!this.formData.tanggal_lahir) {
            this.errors.tanggal_lahir = 'Tanggal lahir wajib diisi';
            isValid = false;
        }

        if (!this.formData.golongan_darah) {
            this.errors.golongan_darah = 'Golongan darah wajib diisi';
            isValid = false;
        }

        if (!this.formData.kondisi_kesehatan) {
            this.errors.kondisi_kesehatan = 'Kondisi kesehatan wajib dipilh';
            isValid = false;
        }

        if (!this.formData.berat_badan) {
            this.errors.berat_badan = 'Berat badan wajib diisi';
            isValid = false;
        }

        if (!this.formData.tinggi_badan) {
            this.errors.tinggi_badan = 'Tinggi badan wajib diisi';
            isValid = false;
        }

        return isValid;
    },

    7: function validateComputerSkills() {
        this.errors = {};
        let isValid = true;

        if (!this.formData.kemampuan_komputer.word) {
            this.errors['kemampuan_komputer.word'] = 'Tingkat kemampuan Microsoft Word wajib dipilih';
            isValid = false;
        }

        if (!this.formData.kemampuan_komputer.excel) {
            this.errors['kemampuan_komputer.excel'] = 'Tingkat kemampuan Microsoft Excel wajib dipilih';
            isValid = false;
        }

        if (!this.formData.kemampuan_komputer.powerpoint) {
            this.errors['kemampuan_komputer.powerpoint'] = 'Tingkat kemampuan Microsoft PowerPoint wajib dipilih';
            isValid = false;
        }

        return isValid;
    },

    9: function validateReferences() {
        this.errors = {};
        let isValid = true;

        if (!this.formData.referensi || this.formData.referensi.length < 2) {
            this.errors.referensi = 'Minimal 2 referensi wajib diisi';
            isValid = false;
            return isValid;
        }

        this.formData.referensi.forEach((ref, index) => {
            if (!ref.nama) {
                this.errors[`referensi.${index}.nama`] = 'Nama referensi wajib diisi';
                isValid = false;
            }

            if (!ref.hubungan) {
                this.errors[`referensi.${index}.hubungan`] = 'Hubungan dengan referensi wajib diisi';
                isValid = false;
            }

            if (!ref.jabatan) {
                this.errors[`referensi.${index}.jabatan`] = 'Jabatan referensi wajib diisi';
                isValid = false;
            }

            if (!ref.perusahaan) {
                this.errors[`referensi.${index}.perusahaan`] = 'Perusahaan referensi wajib diisi';
                isValid = false;
            }

            if (!ref.telepon) {
                this.errors[`referensi.${index}.telepon`] = 'Nomor telepon referensi wajib diisi';
                isValid = false;
            }

            if (ref.email && !/^[^\s@]+@[^\s@]+\.[^\s@]+$/.test(ref.email)) {
                this.errors[`referensi.${index}.email`] = 'Format email tidak valid';
                isValid = false;
            }
        });

        return isValid;
    },

    10: function validateEmergencyContacts() {
        this.errors = {};
        let isValid = true;

        if (!this.formData.kontak_darurat || this.formData.kontak_darurat.length < 1) {
            this.errors.kontak_darurat = 'Minimal 1 kontak darurat wajib diisi';
            isValid = false;
            return isValid;
        }

        this.formData.kontak_darurat.forEach((kontak, index) => {
            if (!kontak.nama) {
                this.errors[`kontak_darurat.${index}.nama`] = 'Nama kontak darurat wajib diisi';
                isValid = false;
            }

            if (!kontak.hubungan) {
                this.errors[`kontak_darurat.${index}.hubungan`] = 'Hubungan dengan kontak darurat wajib dipilih';
                isValid = false;
            }

            if (!kontak.alamat) {
                this.errors[`kontak_darurat.${index}.alamat`] = 'Alamat kontak darurat wajib diisi';
                isValid = false;
            }

            if (!kontak.telepon) {
                this.errors[`kontak_darurat.${index}.telepon`] = 'Nomor telepon kontak darurat wajib diisi';
                isValid = false;
            }
        });

        return isValid;
    },

    11: function validateAdditionalInfo() {
        this.errors = {};
        let isValid = true;

        if (!this.formData.gaji_harapan.minimum) {
            this.errors['gaji_harapan.minimum'] = 'Gaji minimum yang diharapkan wajib diisi';
            isValid = false;
        }

        if (!this.formData.gaji_harapan.maksimum) {
            this.errors['gaji_harapan.maksimum'] = 'Gaji maksimum yang diharapkan wajib diisi';
            isValid = false;
        }

        if (this.formData.gaji_harapan.minimum && this.formData.gaji_harapan.maksimum &&
            parseInt(this.formData.gaji_harapan.minimum) > parseInt(this.formData.gaji_harapan.maksimum)) {
            this.errors['gaji_harapan.minimum'] = 'Gaji minimum tidak boleh lebih besar dari gaji maksimum';
            isValid = false;
        }

        if (!this.formData.tanggal_mulai) {
            this.errors.tanggal_mulai = 'Tanggal mulai bekerja wajib diisi';
            isValid = false;
        }

        if (this.formData.bersedia_dinas === undefined) {
            this.errors.bersedia_dinas = 'Kesediaan melakukan perjalanan dinas wajib dipilih';
            isValid = false;
        }

        if (this.formData.bersedia_penempatan === undefined) {
            this.errors.bersedia_penempatan = 'Kesediaan penempatan wajib dipilih';
            isValid = false;
        }

        return isValid;
    }
};