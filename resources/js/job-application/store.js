export default () => ({
    currentPage: 1,
    formData: {
        // Page 1 - Personal Info
        foto: null,
        nama_lengkap: '',
        no_handphone: '',
        email: '',
        jenis_kelamin: '',
        status_kawin: '',
        agama: '',
        agama_lainnya: '',
        tempat_lahir: '',
        tanggal_lahir: '',
        golongan_darah: '',
        kondisi_kesehatan: '',
        berat_badan: '',
        tinggi_badan: '',

        // Page 2 - Family Info
        nama_ayah: '',
        tempat_lahir_ayah: '',
        pekerjaan_ayah: '',
        nama_ibu: '',
        tempat_lahir_ibu: '',
        pekerjaan_ibu: '',
        saudara: [],

        // Page 3 - Address
        alamat_domisili: '',
        kota_kabupaten: '',
        kode_pos: '',
        telepon_rumah: '',

        // Page 4 - Education
        pendidikan_sma: {
            nama_sekolah: '',
            jurusan: '',
            tahun_mulai: '',
            tahun_lulus: '',
            lulus: null,
            nilai: ''
        },
        pendidikan_diploma: {
            nama_institusi: '',
            jurusan: '',
            tahun_mulai: '',
            tahun_lulus: '',
            lulus: null,
            ipk: ''
        },
        pendidikan_s1: {
            nama_institusi: '',
            jurusan: '',
            tahun_mulai: '',
            tahun_lulus: '',
            lulus: null,
            ipk: ''
        },
        pendidikan_s2: {
            nama_institusi: '',
            jurusan: '',
            tahun_mulai: '',
            tahun_lulus: '',
            lulus: null,
            ipk: ''
        },

        // Page 5 - Work Experience
        riwayat_pekerjaan: [],

        // Page 6 - Language Skills
        bahasa_inggris: {
            berbicara: '',
            mendengar: '',
            membaca: '',
            menulis: ''
        },
        bahasa_mandarin: {
            berbicara: '',
            mendengar: '',
            membaca: '',
            menulis: ''
        },
        bahasa_lainnya: [],

        // Page 7 - Computer Skills
        kemampuan_komputer: {
            word: '',
            excel: '',
            powerpoint: '',
            lainnya: []
        },

        // Page 8 - Organizations
        organisasi: [],

        // Page 9 - References
        referensi: [],

        // Page 10 - Emergency Contacts
        kontak_darurat: [],

        // Page 11 - Additional Info
        // Page 11 - Additional Info
        gaji_harapan: {
            minimum: '',
            maksimum: ''
        },
        tanggal_mulai: '',
        bersedia_dinas: undefined,
        bersedia_penempatan: undefined,
        catatan_tambahan: ''
    },
    errors: {},
    imagePreview: null,

    init() {
        const savedData = localStorage.getItem('jobApplicationForm');
        if (savedData) {
            const parsed = JSON.parse(savedData);
            this.formData = {
                ...this.formData,
                ...parsed
            };
        }

        this.$watch('formData', (value) => {
            localStorage.setItem('jobApplicationForm', JSON.stringify(value));
        });
    },

    handleImageUpload(event) {
        const file = event.target.files[0];
        if (file) {
            if (file.size > 2 * 1024 * 1024) {
                this.errors.foto = 'Ukuran file tidak boleh lebih dari 2MB';
                event.target.value = '';
                return;
            }

            if (!['image/jpeg', 'image/png'].includes(file.type)) {
                this.errors.foto = 'File harus berupa JPG, JPEG, atau PNG';
                event.target.value = '';
                return;
            }

            this.formData.foto = file;
            const reader = new FileReader();
            reader.onload = e => this.imagePreview = e.target.result;
            reader.readAsDataURL(file);
            this.errors.foto = null;
        }
    },

    nextPage() {
        const validator = this.validators[this.currentPage];
        if (validator && validator.call(this)) {
            if (this.currentPage < 11) {
                this.currentPage++;
                window.scrollTo(0, 0);
            }
        } else {
            this.$nextTick(() => {
                const firstError = document.querySelector('.border-red-500');
                if (firstError) {
                    firstError.scrollIntoView({ behavior: 'smooth', block: 'center' });
                }
            });
        }
    },

    previousPage() {
        if (this.currentPage > 1) {
            this.currentPage--;
            window.scrollTo(0, 0);
        }
    },

    validators: {
        // Import validation functions for each page
    }
});