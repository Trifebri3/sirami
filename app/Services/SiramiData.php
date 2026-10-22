<?php

namespace App\Services;

class SiramiData
{
    /**
     * Get official branding logos.
     *
     * @return array<string, string>
     */
    public static function getLogos(): array
    {
        return [
            'full' => asset('logo/logofull.webp'),
            'square' => asset('logo/logokotak.webp'),
            'uin' => asset('logo/logouin.svg'),
            'syls' => asset('syls.png'),
        ];
    }

    /**
     * Get pilot partner information.
     *
     * @return array<string, mixed>
     */
    public static function getPilotInfo(): array
    {
        return [
            'pesantren_name' => "Pondok Pesantren Al-Qur'an Hidayatul Mustafid",
            'pimpinan' => "KH. Nandang Ja'far Shiddiq",
            'location' => 'Kp. Sindangresik, Kel. Awipari, Kec. Cibeureum, Kota Tasikmalaya, Jawa Barat',
            'support_letter' => 'Nomor: 18/X/PPHM/2026 (18 Oktober 2026)',
            'support_letter_pdf' => asset('data/Surat Persetujuan Pst.pdf'),
            'partner_status' => 'Mitra Lokasi Pilot Lapangan (Bukan Pemilik Proyek)',
            'coordinates' => [
                'lat' => -7.348333883307857,
                'lng' => 108.27008019447703,
                'formatted' => '-7.348334, 108.270080',
                'dms' => '7°20\'54.0"S 108°16\'12.3"E',
            ],
            'google_maps_url' => 'https://www.google.com/maps?q=-7.348333883307857,108.27008019447703',
            'google_maps_embed' => 'https://maps.google.com/maps?q=-7.348333883307857,108.27008019447703&t=k&z=18&ie=UTF8&iwloc=&output=embed',
            'video_survey_url' => asset('video-survey.mp4'),
            'assets' => [
                'Sumur bor dengan pompa listrik aktif',
                'Penampungan air bekas wudu & unit IPAL',
                'Fasilitas sanitasi santri & 2 dapur umum',
                'Potensi lahan budidaya sekitar 350 bata',
                'Komoditas eksisting: buah naga, semangka & cabai rawit',
            ],
            'featured_img' => asset('foto/kosndisi pesantree/torenair.webp'),
            'clarification' => "SIRAMI dirancang dan dimiliki oleh Mahasiswa UIN Sunan Gunung Djati Bandung. Pondok Pesantren Al-Qur'an Hidayatul Mustafid berkedudukan sebagai mitra lokasi pelaksanaan pilot project & tempat uji laboratorium lapangan.",
        ];
    }

    /**
     * Get team innovator members.
     *
     * @return array<int, array<string, string>>
     */
    public static function getTeam(): array
    {
        return [
            [
                'name' => 'Tri Febriansah',
                'role' => 'Technology & Product Lead',
                'institution' => 'Mahasiswa UIN Sunan Gunung Djati Bandung',
                'initials' => 'TF',
                'photo' => asset('tim/tri.svg'),
                'scope' => 'Koordinasi desain produk, integrasi sensor IoT, kalibrasi sistem monitoring air. Saat ini sedang aktif melaksanakan kolaborasi riset terapan dan pendampingan kelompok tani di wilayah Tasikmalaya dan Kota Banjar.',
                'competency' => 'Rekayasa Sistem IoT, Riset Terapan Pertanian & Monitoring Kualitas Air',
                'contribution_pct' => 35,
                'achievements' => [
                    'Juara 2 KKN Konversi Terbaik UIN Sunan Gunung Djati Bandung (1 Tim Kelompok)',
                    'Finalis Genera-Z Berbakti BCA 2026 (1 Tim Inovasi Sosial)',
                    'Finalis Forum Pangan & Sains (FP Sains) 2026 by Pertamina (Tim Tri & Mariya)',
                ],
                'responsibilities' => [
                    'Rancang bangun sistem filtrasi bertingkat & multi-barrier',
                    'Integrasi sensor pH analog, TDS meter, dan turbiditas dengan mikrokontroler',
                    'Kalibrasi instrumen monitoring IoT dan standarisasi log data pengujian',
                    'Kolaborasi riset lapangan & pendampingan kelompok tani Tasikmalaya-Banjar',
                ],
                'cv_url' => asset('CV/CV_Tri_Febriansah_Final.pdf'),
                'cv_filename' => 'CV_Tri_Febriansah_Final.pdf',
            ],
            [
                'name' => 'Dinar Robiatul Adawiyah',
                'role' => 'Business & Impact Lead',
                'institution' => 'Mahasiswi UIN Sunan Gunung Djati Bandung',
                'initials' => 'DRA',
                'photo' => asset('tim/dinar.svg'),
                'scope' => 'Perhitungan efisiensi RAB terbaru (Rp26.000.000), penetapan HPP produk microgreens, analisis dampak sosial (SROI), tata kelola buku kas, dan transparansi anggaran.',
                'competency' => 'Studi Kelayakan Bisnis Sosial, Akuntansi Biaya (HPP) & Evaluasi SROI',
                'contribution_pct' => 33,
                'achievements' => [
                    'Juara 2 KKN Konversi Terbaik UIN Sunan Gunung Djati Bandung (1 Tim Kelompok)',
                    'Finalis Genera-Z Berbakti BCA 2026 (1 Tim Inovasi Sosial)',
                ],
                'responsibilities' => [
                    'Penyusunan Rencana Anggaran Biaya (RAB) terbaru Rp26.000.000 terperinci 12 pos belanja',
                    'Kalkulasi unit cost dan penetapan harga jual HPP panen sayuran microgreens',
                    'Pengembangan model akuntansi kas mandiri dan analisis SROI (Social Return on Investment)',
                ],
                'cv_url' => asset('CV/CV Dinar GDI.pdf'),
                'cv_filename' => 'CV Dinar GDI.pdf',
            ],
            [
                'name' => 'Neng Mariya Ulfa Mardiyah',
                'role' => 'Community & Operations Lead',
                'institution' => 'Mahasiswi UIN Sunan Gunung Djati Bandung',
                'initials' => 'NM',
                'photo' => asset('tim/mariya.svg'),
                'scope' => 'Merupakan santri di Pondok Pesantren Al-Qur\'an Hidayatul Mustafid Tasikmalaya. Bertanggung jawab atas pendampingan santri, koordinasi dengan pimpinan pesantren mitra, fasilitasi pelatihan SOP budidaya, administrasi perizinan, dan perlindungan santri (safeguarding).',
                'competency' => 'Pemberdayaan Komunitas Berbasis Pesantren & Manajemen Operasional Lapangan',
                'contribution_pct' => 32,
                'achievements' => [
                    'Juara 2 KKN Konversi Terbaik UIN Sunan Gunung Djati Bandung (1 Tim Kelompok)',
                    'Finalis Genera-Z Berbakti BCA 2026 (1 Tim Inovasi Sosial)',
                    'Finalis Forum Pangan & Sains (FP Sains) 2026 by Pertamina (Tim Mariya & Tri)',
                ],
                'responsibilities' => [
                    'Jembatan kultural santri & komunikasi harian dengan pimpinan pesantren Hidayatul Mustafid',
                    'Fasilitasi komunikasi formal dan koordinasi berkala dengan pimpinan pondok pesantren',
                    'Penyusunan kurikulum pelatihan SOP budidaya microgreens dan modul santripreneurship',
                    'Penerapan etika perlindungan santri (safeguarding) dan keselamatan kerja di lokasi pilot',
                ],
                'cv_url' => asset('CV/CV Mariya Ulfa.pdf'),
                'cv_filename' => 'CV Mariya Ulfa.pdf',
            ],
        ];
    }

    /**
     * Get team evidence and track record documentation.
     *
     * @return array<int, array<string, mixed>>
     */
    public static function getTeamEvidence(): array
    {
        return [
            [
                'title' => 'Juara 2 KKN Konversi Terbaik UIN SGD Bandung 2026',
                'category' => 'Prestasi & Pengabdian Masyarakat',
                'event' => 'Ekspose Hasil KKN Inovatif Berbasis Ekoteologi',
                'organizer' => 'LP2M UIN Sunan Gunung Djati Bandung',
                'date' => '19–20 Oktober 2026',
                'location' => 'Aula Anwar Musaddad, Kampus 1 UIN Bandung',
                'src' => asset('tim/kkn.jpeg'),
                'desc' => 'Tim mahasiswa UIN SGD Bandung (Tri Febriansah, Dinar Robiatul Adawiyah, Neng Mariya Ulfa Mardiyah) meraih Juara 2 KKN Konversi Terbaik atas program aksi kolaboratif di Desa Purbayani.',
                'badge' => 'Juara 2 LP2M UIN',
                'badge_color' => 'amber',
            ],
            [
                'title' => 'Finalis Forum Pangan & Sains (FP Sains) 2026 by Pertamina',
                'category' => 'Kompetisi Riset Terapan Nasional',
                'event' => 'Desk Evaluation Forum Pangan & Sains 2026 Pertamina',
                'organizer' => 'PT Pertamina (Persero)',
                'date' => 'Oktober 2026',
                'location' => 'Sesi Penjurian Daring Nasional',
                'src' => asset('tim/fpsains2.jpeg'),
                'desc' => 'Tri Febriansah dan Neng Mariya Ulfa Mardiyah berhasil lolos ke tahap Desk Evaluation Grup D di hadapan dewan juri PT Pertamina (Persero) dalam inovasi ketahanan pangan dan sains terapan.',
                'badge' => 'Finalis Pertamina 2026',
                'badge_color' => 'emerald',
            ],
            [
                'title' => 'Sesi Pengujian Prototipe Laboratorium Sains UIN',
                'category' => 'Validasi Teknis & Kalibrasi',
                'event' => 'Demonstrasi Prototipe Terpadu SIRAMI',
                'organizer' => 'Laboratorium Terpadu UIN SGD Bandung',
                'date' => 'Oktober 2026',
                'location' => 'Laboratorium Sains UIN Bandung',
                'src' => asset('tim/fpsains.jpeg'),
                'desc' => 'Demonstrasi langsung sistem saluran air, pengujian tray microgreen berinstrumen sensor, dan pengukuran suhu digital Fislum untuk memastikan stabilitas sistem sebelum diterapkan di lapangan.',
                'badge' => 'Uji Lab Terkalibrasi',
                'badge_color' => 'blue',
            ],
            [
                'title' => 'Kit Tenaga Surya Mandiri (Off-Grid Solar Energy)',
                'category' => 'Infrastruktur Energi Ramah Lingkungan',
                'event' => 'Sistem Pembangkit Listrik Tenaga Surya Mandiri',
                'organizer' => 'Tim Rekayasa Teknologi SIRAMI',
                'date' => 'Oktober 2026',
                'location' => 'Workshop Perakitan Mandiri',
                'src' => asset('tim/panelsurya.jpeg'),
                'desc' => 'Panel surya monokristalin lengkap dengan solar charge controller, MCB pengaman, baterai penyimpanan, dan inverter 220W disiapkan untuk menggerakkan pompa dan sensor tanpa membebani biaya listrik pesantren.',
                'badge' => 'Energi Hijau 100%',
                'badge_color' => 'teal',
            ],
            [
                'title' => 'Tray Budidaya Microgreens Bersih Siap Semai',
                'category' => 'Fasilitas Pangan Bergizi Santri',
                'event' => 'Persiapan Unit Produksi Pangan Cepat Panen',
                'organizer' => 'Tim Produksi & Operasional SIRAMI',
                'date' => 'Oktober 2026',
                'location' => 'Sentra Budidaya Tasikmalaya',
                'src' => asset('tim/traymicrogreen.jpeg'),
                'desc' => 'Baki tray hidroponik 2 tingkat (reservoir penampung air di bawah dan grid berpori untuk semai benih) higienis bebas tanah, disiapkan untuk siklus panen microgreens rutin santri.',
                'badge' => 'Fasilitas Siap Pakai',
                'badge_color' => 'emerald',
            ],
        ];
    }

    /**
     * Get transparent budget breakdown.
     *
     * @return array<string, mixed>
     */
    public static function getBudget(): array
    {
        return [
            'total' => 'Rp26.000.000',
            'duration' => 'Pelaksanaan Implementasi Pilot',
            'items' => [
                [
                    'category' => 'Perangkat & Infrastruktur',
                    'amount' => 'Rp15.000.000',
                    'percentage' => '57.7%',
                    'note' => 'IoT & sensor kualitas air terkalibrasi, sistem budidaya microgreen, instalasi saung produksi, dan instalasi perpipaan irigasi.',
                ],
                [
                    'category' => 'Pelatihan, Tim & Konsumsi',
                    'amount' => 'Rp7.000.000',
                    'percentage' => '26.9%',
                    'note' => 'Modul pelatihan & edukasi santri/komunitas, operasional tim pelaksana & mobilisasi teknis, serta konsumsi kegiatan.',
                ],
                [
                    'category' => 'Pemasaran & Biaya Pendukung',
                    'amount' => 'Rp4.000.000',
                    'percentage' => '15.4%',
                    'note' => 'Branding & digitalisasi, packaging produk microgreen, uji laboratorium baku air berkala, operasional bahan habis pakai, dan dana tak terduga.',
                ],
            ],
            'non_cash_notes' => 'Kontribusi nonkas mitra (akses fasilitas, sumur eksisting, toren air, dan pendampingan pengelola) dicatat terpisah sebagai in-kind contribution dan tidak digabungkan ke dalam total anggaran tunai Rp26.000.000.',
        ];
    }

    /**
     * Get challenges data.
     *
     * @return array<int, array<string, string>>
     */
    public static function getChallenges(): array
    {
        return [
            [
                'title' => 'Kualitas Air Belum Terjamin',
                'desc' => 'Air jernih secara visual belum tentu aman. Pemanfaatan air bekas wudu atau keluaran IPAL memerlukan pengujian laboratorium baku dan pemisahan jalur aliran terpisah.',
                'img' => asset('foto/kosndisi pesantree/tempatair.webp'),
                'tag' => 'Keamanan Air',
                'data_source' => 'Observasi Awal & Prinsip WHO',
            ],
            [
                'title' => 'Lahan Terbatas & Belum Produktif',
                'desc' => 'Aset lahan pesantren (estimasi 350 bata) dan infrastruktur belum dimanfaatkan dengan sistem budidaya intensif yang efisien ruang dan hemat konsumsi air.',
                'img' => asset('foto/kosndisi pesantree/ipaldanlahan untuk treatmentair dan praktik microgreen.webp'),
                'tag' => 'Optimasi Ruang',
                'data_source' => 'Pemetaan Lapangan Sindangresik',
            ],
            [
                'title' => 'Potensi Santri Belum Tergarap Optimal',
                'desc' => 'Santri dan pengelola memerlukan pelatihan SOP terukur, pencatatan harga pokok (HPP), pembukuan kas nyata, dan akses pasar agar unit usaha mandiri pascapilot.',
                'img' => asset('foto/diskusi pengelola/diskusibudidayamicrogreen.webp'),
                'tag' => 'Kemandirian Ekonomi',
                'data_source' => 'Wawancara Pengelola Pesantren',
            ],
        ];
    }

    /**
     * Get solutions workflow steps.
     *
     * @return array<int, array<string, string>>
     */
    public static function getSolutions(): array
    {
        return [
            [
                'step' => '01',
                'title' => 'Pemetaan & Pengujian Air Awal',
                'desc' => 'Mendata sumber air sumur bor, jalur wudu, volume harian, biaya pompa listrik, dan mengambil sampel awal untuk uji parameter fisik/kimia.',
                'img' => asset('foto/kosndisi pesantree/torenair.webp'),
                'status' => 'Tahap Pemetaan',
            ],
            [
                'step' => '02',
                'title' => 'Filtrasi Bertahap & Fitoremediasi',
                'desc' => 'Rancang bangun sistem pengolahan berbasis gravitasi sederhana, sedimentasi, filtrasi multi-media, dan tanaman fitoremediasi lokal.',
                'img' => asset('foto/kosndisi pesantree/ipaldanlahan untuk treatmentair dan praktik microgreen.webp'),
                'status' => 'Pengolahan Fisik & Bio',
            ],
            [
                'step' => '03',
                'title' => 'Monitoring Sensor IoT Terkalibrasi',
                'desc' => 'Pemantauan real-time parameter pH, TDS, dan turbiditas menggunakan mikrokontroler hemat daya dengan log pencatatan berkala.',
                'img' => asset('foto/produkinovasi utama/alatutama cek kondisi air.webp'),
                'status' => 'Teknologi Terapan',
            ],
            [
                'step' => '04',
                'title' => 'Gerbang Keselamatan Baku (Zero-Risk Gate)',
                'desc' => 'Air hasil olahan tidak dialirkan ke microgreens pangan sebelum diverifikasi lolos baku mutu laboratorium resmi (WHO & Permen LH).',
                'img' => asset('foto/kosndisi pesantree/tempatair.webp'),
                'status' => 'Health Safety Gate',
            ],
            [
                'step' => '05',
                'title' => 'Budidaya Microgreens Bergizi Tinggi',
                'desc' => 'Produksi sayuran muda berumur panen 7-14 hari dengan densitas nutrisi tinggi (sulforaphane, vit C/E) sebagai pangan sehat mandiri.',
                'img' => asset('foto/diskusi pengelola/diskusibudidayamicrogreen.webp'),
                'status' => 'Produk Pangan Utama',
            ],
            [
                'step' => '06',
                'title' => 'Eksplorasi Budidaya Ikan Terintegrasi',
                'desc' => 'Opsi kolam budidaya ikan air tawar yang hanya dioperasikan jika kualitas air telah memenuhi standar baku kelayakan akuakultur.',
                'img' => asset('foto/kosndisi pesantree/kolamikan.webp'),
                'status' => 'Opsi Tambahan Teruji',
            ],
            [
                'step' => '07',
                'title' => 'Pemberdayaan Santri & Ekonomi Sirkular',
                'desc' => 'Pelatihan SOP budidaya, pencatatan biaya produksi (HPP), pembukuan kas mandiri, pengemasan, dan pendampingan pemasaran pascapilot.',
                'img' => asset('foto/kosndisi pesantree/santri.webp'),
                'status' => 'Kemandirian Berkelanjutan',
            ],
        ];
    }

    /**
     * Get KPI impact matrix.
     *
     * @return array<int, array<string, string>>
     */
    public static function getKpiMatrix(): array
    {
        return [
            [
                'level' => 'Output',
                'indicator' => 'Peta aliran air dan inventaris fasilitas pesantren selesai',
                'baseline' => 'Belum terdokumentasi rapi',
                'target' => '1 set peta aliran terverifikasi & inventaris aset lengkap',
                'verifier' => 'Dokumen teknis lapangan bertanggal, ditinjau bersama mitra',
            ],
            [
                'level' => 'Output',
                'indicator' => 'SOP pengolahan air, keselamatan pangan, dan budidaya disahkan',
                'baseline' => 'Belum ada SOP tertulis',
                'target' => '3 modul SOP operasional disetujui tim teknis dan mitra',
                'verifier' => 'Berita acara pengesahan & modul SOP cetak',
            ],
            [
                'level' => 'Output',
                'indicator' => 'Santri dan pengelola terlatih dalam SOP budidaya & pencatatan',
                'baseline' => '0 santri bersertifikat pelatihan',
                'target' => '15-20 santri/pengelola terlatih dengan evaluasi pemahaman',
                'verifier' => 'Daftar hadir, foto kegiatan, dan lembar pre/post-assessment',
            ],
            [
                'level' => 'Outcome',
                'indicator' => 'Volume air terolah yang memenuhi standar mutu peruntukan',
                'baseline' => 'Diukur pada Bulan 1 (baseline)',
                'target' => 'Pemanfaatan kembali terukur aman sesuai hasil uji lab',
                'verifier' => 'Log harian meteran air & sertifikat uji laboratorium',
            ],
            [
                'level' => 'Outcome',
                'indicator' => 'Produktivitas panen microgreens layak konsumsi dan layak jual',
                'baseline' => '0 tray produksi',
                'target' => 'Siklus panen rutin 7-14 hari dengan standar bobot baku',
                'verifier' => 'Logbook batch semai/panen & timbangan digital bertanggal',
            ],
            [
                'level' => 'Outcome',
                'indicator' => 'Pencatatan kas dan perhitungan harga pokok produksi (HPP) sehat',
                'baseline' => 'Belum ada pembukuan unit budidaya',
                'target' => 'Buku kas aktif dengan margin terukur dan data transaksi riil',
                'verifier' => 'Buku kas pembukuan, kuitansi pembelian, dan rekap bulanan',
            ],
            [
                'level' => 'Impact',
                'indicator' => 'Kemandirian operasional unit dan perbaikan nutrisi santri',
                'baseline' => 'Belum terukur',
                'target' => 'Unit berjalan mandiri pascapilot & suplai gizi harian meningkat',
                'verifier' => 'Laporan evaluasi 6 bulan & survei konsumsi pangan santri',
            ],
            [
                'level' => 'Impact',
                'indicator' => 'Rasio Pengembalian Sosial atas Investasi (SROI)',
                'baseline' => 'Belum dihitung (memerlukan data riil)',
                'target' => 'Model SROI tervalidasi dengan analisis deadweight & attribution',
                'verifier' => 'Laporan kajian evaluasi dampak independen',
            ],
        ];
    }

    /**
     * Get 6-month pilot roadmap.
     *
     * @return array<int, array<string, string>>
     */
    public static function getPilotTimeline(): array
    {
        return [
            [
                'month' => 'Bulan 01',
                'phase' => 'Persiapan & Pengukuran Baseline',
                'focus' => 'Pemetaan aset fisik, pemasangan flow meter awal, protokol sampling air, dan kesepakatan tim kerja bersama mitra pesantren.',
                'deliverables' => 'Peta aliran air, baseline volume/biaya pompa, dokumen jadwal kerja.',
                'status' => 'Siap Dimulai',
            ],
            [
                'month' => 'Bulan 02',
                'phase' => 'Validasi Kebutuhan & Uji Laboratorium Awal',
                'focus' => 'Pengambilan sampel air sumur & jalur wudu untuk uji lab parameter baku mutu, wawancara mendalam santri, dan validasi ruang instalasi.',
                'deliverables' => 'Hasil uji lab baseline, catatan konsumsi air, daftar kebutuhan teknis.',
                'status' => 'Rencana Kerja',
            ],
            [
                'month' => 'Bulan 03',
                'phase' => 'Co-Design Sistem & Penyusunan SOP',
                'focus' => 'Finalisasi desain jalur filtrasi terpisah, spesifikasi modul sensor IoT, penyusunan draft SOP budidaya microgreens, dan persetujuan pengelola.',
                'deliverables' => 'Desain teknis disahkan, draf modul SOP, daftar mitigasi risiko.',
                'status' => 'Rencana Kerja',
            ],
            [
                'month' => 'Bulan 04',
                'phase' => 'Pemasangan Prototipe & Uji Coba Terkontrol',
                'focus' => 'Instalasi filtrasi fisik, kalibrasi sensor IoT, uji coba semai batch pertama microgreens, dan verifikasi gerbang keamanan air.',
                'deliverables' => 'Prototipe beroperasi, log kalibrasi sensor, hasil evaluasi batch semai.',
                'status' => 'Rencana Kerja',
            ],
            [
                'month' => 'Bulan 05',
                'phase' => 'Pelatihan Santri & Uji Pasar Skala Terbatas',
                'focus' => 'Pelatihan intensif SOP budidaya santri, pembukuan kas, uji rasa/penerimaan produk microgreens di dapur santri, dan uji pasar ke jejaring komunitas.',
                'deliverables' => 'Santri tersertifikasi pelatihan, catatan transaksi uji pasar, buku kas aktif.',
                'status' => 'Rencana Kerja',
            ],
            [
                'month' => 'Bulan 06',
                'phase' => 'Evaluasi Lengkap, Serah Terima & Rencana Replikasi',
                'focus' => 'Perbandingan data baseline vs endline, audit transparansi anggaran Rp26 Jt, laporan evaluasi dampak (SROI), serah terima operasional, dan pedoman replikasi.',
                'deliverables' => 'Laporan akhir pilot, SOP final tervalidasi, roadmap keberlanjutan mandiri.',
                'status' => 'Rencana Kerja',
            ],
        ];
    }

    /**
     * Get journal logbook entries.
     *
     * @return array<int, array<string, string>>
     */
    public static function getJournalEntries(): array
    {
        return [
            [
                'id' => 'LOG-05',
                'date' => '22 Oktober 2026',
                'tag' => 'Kemitraan & Legalitas',
                'title' => 'Penerbitan Surat Dukungan Resmi Pesantren No. 18/X/PPHM/2026',
                'summary' => "Pimpinan Pondok Pesantren Al-Qur'an Hidayatul Mustafid, KH. Nandang Ja'far Shiddiq, menerbitkan surat pernyataan dukungan tertulis terhadap inisiatif program SIRAMI untuk pelaksanaan pilot percontohan.",
                'status' => 'Terverifikasi Dokumen',
                'status_badge' => 'emerald',
            ],
            [
                'id' => 'LOG-04',
                'date' => '19 Oktober 2026',
                'tag' => 'Riset Teknis',
                'title' => 'Pengujian Prototipe Sensor Kualitas Air Berbasis Mikrokontroler',
                'summary' => 'Tim inovator menyelesaikan kalibrasi sensor analog pH dan TDS pada sampel air pembanding. Hasil pengujian menunjukkan akurasi pengukuran sesuai rentang operasional awal.',
                'status' => 'Hasil Uji Terverifikasi',
                'status_badge' => 'blue',
            ],
            [
                'id' => 'LOG-03',
                'date' => '15 Oktober 2026',
                'tag' => 'Observasi Lapangan',
                'title' => 'Survei Aset Lapangan & Pemetaan Jalur Aliran Air Sindangresik',
                'summary' => 'Observasi mendalam terhadap toren penampungan air, pompa listrik sumur bor, jalur buangan wudu, unit IPAL, dan area potensial budidaya 350 bata bersama pengelola pesantren.',
                'status' => 'Observasi Lapangan',
                'status_badge' => 'slate',
            ],
            [
                'id' => 'LOG-02',
                'date' => '08 Oktober 2026',
                'tag' => 'Kajian Ilmiah',
                'title' => 'Kompilasi Standar WHO Greywater & Permen Lingkungan Hidup No 11/2025',
                'summary' => 'Penyusunan landasan ilmiah keselamatan air baku untuk pertanian pangan, mengintegrasikan panduan WHO Sanitation Safety Planning dan regulasi baku mutu domestik nasional.',
                'status' => 'Kajian Teori',
                'status_badge' => 'indigo',
            ],
            [
                'id' => 'LOG-01',
                'date' => '01 Oktober 2026',
                'tag' => 'Inisiasi Riset',
                'title' => 'Pembentukan Tim Inovator Mahasiswa UIN Sunan Gunung Djati Bandung',
                'summary' => 'Inisiasi kolaborasi multidisiplin antara teknologi IoT, rekayasa produk, studi kelayakan bisnis sosial sirkular, dan pendampingan santri berbasis pesantren.',
                'status' => 'Tahap Awal',
                'status_badge' => 'emerald',
            ],
        ];
    }

    /**
     * Get multilevel problem mapping (Global to Local and SIRAMI Response).
     *
     * @return array<int, array<string, mixed>>
     */
    public static function getMultilevelMapping(): array
    {
        return [
            [
                'id' => 'global',
                'level_number' => 1,
                'name' => 'Global',
                'scale' => 'Skala Dunia / Global',
                'title' => 'Krisis Iklim, Tekanan Sumber Daya Air & Kerentanan Ketahanan Pangan',
                'badge_status' => 'Data Sekunder Terverifikasi',
                'badge_type' => 'verified',
                'description' => 'Memahami isu perubahan iklim, pengelolaan sumber daya air, ketahanan pangan, dan pembangunan berkelanjutan berdasarkan publikasi lembaga internasional.',
                'year' => '2023 - 2024',
                'source' => 'UN-Water World Water Development Report 2023, WHO/UNICEF JMP, IPCC AR6 WGII',
                'territory' => 'Global (SDG 6 Air Bersih & Sanitasi, SDG 2 Tanpa Kelaparan, SDG 13 Aksi Iklim)',
                'relevance' => 'Menjadi landasan urgensi transisi ke model pengelolaan air sirkular (water reuse & treatment) dan pertanian berdaya tahan tinggi (climate-resilient micro-farming) yang tidak bergantung pada cuaca ekstrem.',
                'metrics' => [
                    [
                        'value' => '2.2 Miliar',
                        'label' => 'Tanpa Akses Air Aman',
                        'sub' => 'Populasi global tanpa layanan air minum yang dikelola aman (UN-Water).',
                    ],
                    [
                        'value' => '40%',
                        'label' => 'Proyeksi Defisit Air 2030',
                        'sub' => 'Kesenjangan antara kebutuhan air global dan pasokan air terbarukan.',
                    ],
                    [
                        'value' => '70%',
                        'label' => 'Konsumsi Air Pertanian',
                        'sub' => 'Sektor pertanian konvensional menyerap mayoritas pasokan air tawar dunia.',
                    ],
                ],
                'key_points' => [
                    'Perubahan iklim memperparah variabilitas hidrologi dan periode kekeringan berkepanjangan.',
                    'Urbanisasi masif menekan ruang terbuka hijau dan mengurangi cadangan air tanah perkotaan.',
                    'Pangan rantai panjang (long supply chain) menyumbang emisi gas rumah kaca dan rentan disrupsi pasokan.',
                ],
                'visual_theme' => 'globe',
            ],
            [
                'id' => 'nasional',
                'level_number' => 2,
                'name' => 'Nasional',
                'scale' => 'Republik Indonesia (Nasional)',
                'title' => 'Akses Air Aman, Kesenjangan Sanitasi & Defisit Konsumsi Sayur Nasional',
                'badge_status' => 'Data Sekunder Terverifikasi',
                'badge_type' => 'verified',
                'description' => 'Menelaah kondisi Indonesia berdasarkan data resmi mengenai air, sanitasi, pangan, lingkungan, dan pembangunan masyarakat.',
                'year' => '2023 - 2024',
                'source' => 'Bappenas (Kajian RPJMN 2020-2024), Survei Kesehatan Indonesia (SKI) 2023 Kemenkes RI, BPS',
                'territory' => 'Indonesia (Kawasan Urban & Peri-Urban)',
                'relevance' => 'Mengarahkan SIRAMI memproduksi pangan padat nutrisi cepat panen (microgreens) untuk membantu menekan defisit gizi sayur nasional yang mencapai 96,7%, sekaligus menguji model pengolahan air mandiri.',
                'metrics' => [
                    [
                        'value' => '11.8%',
                        'label' => 'Akses Air Minum Aman',
                        'sub' => 'Capaian air minum aman nasional; 88,2% lainnya masih air layak dasar atau belum aman.',
                    ],
                    [
                        'value' => '96.7%',
                        'label' => 'Defisit Konsumsi Sayur',
                        'sub' => 'Proporsi penduduk Indonesia ≥5 tahun yang kurang mengonsumsi sayur & buah (SKI 2023).',
                    ],
                    [
                        'value' => '21.5%',
                        'label' => 'Prevalensi Stunting',
                        'sub' => 'Tingkat stunting balita nasional yang menuntut intervensi pangan kaya mikronutrien.',
                    ],
                ],
                'key_points' => [
                    'Air layak secara fisik belum menjamin aman dari cemaran bakteriologis mikro.',
                    'Urban sprawl mempersempit lahan pertanian subur di pulau Jawa hingga puluhan ribu hektar per tahun.',
                    'Pemerintah menargetkan 100% akses air minum layak dan peningkatan ketahanan pangan berbasis komunitas.',
                ],
                'visual_theme' => 'archipelago',
            ],
            [
                'id' => 'provinsi',
                'level_number' => 3,
                'name' => 'Provinsi',
                'scale' => 'Provinsi Jawa Barat',
                'title' => 'Alih Fungsi Lahan Priangan Timur & Ekosistem 12.000+ Pesantren',
                'badge_status' => 'Data Sekunder Terverifikasi',
                'badge_type' => 'verified',
                'description' => 'Mengidentifikasi konteks Jawa Barat melalui data sektoral, karakteristik wilayah, serta kebijakan pembangunan yang relevan.',
                'year' => '2023 - 2025',
                'source' => 'Dinas Lingkungan Hidup Prov. Jawa Barat, Kanwil Kemenag Jabar, BPS Jawa Barat',
                'territory' => 'Jawa Barat (Koridor Priangan Timur & Aglomerasi Urban)',
                'relevance' => 'Menjadikan pesantren di Jawa Barat sebagai mitra strategis laboratorium lapangan, karena pesantren memiliki asrama padat santri, rutinitas wudu 5 kali sehari penghasil greywater stabil, dan pekarangan asrama yang dapat dioptimalkan.',
                'metrics' => [
                    [
                        'value' => '>12.000',
                        'label' => 'Pesantren Terdaftar',
                        'sub' => 'Jawa Barat memiliki basis pesantren terbanyak di Indonesia dengan jutaan santri mukim.',
                    ],
                    [
                        'value' => '4.500 Ha/Thn',
                        'label' => 'Laju Konversi Lahan',
                        'sub' => 'Rata-rata alih fungsi lahan sawah produktif menjadi perumahan dan komersial di Jabar.',
                    ],
                    [
                        'value' => 'Prioritas',
                        'label' => 'Perbaikan Mutu Air DAS',
                        'sub' => 'DAS Citanduy dan Citarum membutuhkan tata kelola greywater domestik berbasis sumber.',
                    ],
                ],
                'key_points' => [
                    'Pesantren menghadapi tantangan biaya listrik pompa air sumur yang tinggi setiap bulannya.',
                    'Air bekas wudu santri memiliki potensi daur ulang tinggi karena minim kontaminan deterjen berat dibanding limbah rumah tangga biasa.',
                    'Santri memiliki waktu luang produktif di luar jam ngaji yang ideal untuk keterampilan agribisnis microgreens modern.',
                ],
                'visual_theme' => 'province',
            ],
            [
                'id' => 'kabupaten',
                'level_number' => 4,
                'name' => 'Kabupaten dan Wilayah Implementasi',
                'scale' => 'Kota & Kabupaten Tasikmalaya',
                'title' => 'Karakteristik Hidrologi Cibeureum, Beban Listrik Sumur & Pasar Pangan Segar',
                'badge_status' => 'Data Sekunder & Pengamatan Kontekstual',
                'badge_type' => 'observation_needed',
                'description' => 'Mengumpulkan informasi mengenai kondisi lokal, fasilitas yang tersedia, kebutuhan air, ruang budidaya, serta karakteristik calon penerima manfaat.',
                'year' => '2024 - 2026',
                'source' => 'BPS Kota Tasikmalaya (Tasikmalaya dalam Angka 2024), Dokumen Profil Kecamatan Cibeureum',
                'territory' => 'Kecamatan Cibeureum, Kota Tasikmalaya (Koordinat: 7°20\'58.2"S 108°14\'36.8"E)',
                'relevance' => 'Memastikan rancangan filtrasi SIRAMI mengandalkan gravitasi alami tanpa pompa tambahan agar tidak membebani rekening listrik pesantren, serta membidik segmen pasar komoditas bernilai tinggi di pusat Kota Tasikmalaya.',
                'metrics' => [
                    [
                        'value' => 'Sumur Bor',
                        'label' => 'Sumber Air Utama',
                        'sub' => 'Mayoritas pemukiman dan lembaga pendidikan mengandalkan akuifer tanah dalam dengan pompa listrik.',
                    ],
                    [
                        'value' => 'Rp400k - Rp900k',
                        'label' => 'Estimasi Listrik Pompa/Bln',
                        'sub' => 'Biaya energi operasional sumur bor yang berpotensi diefisienkan melalui daur ulang wudu.',
                    ],
                    [
                        'value' => 'Tinggi',
                        'label' => 'Peluang Pasar Microgreens',
                        'sub' => 'Hotel, restoran, kafe sehat, dan komunitas kuliner di Kota Tasikmalaya belum memiliki produsen lokal tetap.',
                    ],
                ],
                'key_points' => [
                    'Kondisi topografi lereng bertingkat di Cibeureum memungkinkan pengaliran air filtrasi secara gravitasi murni.',
                    'Jarak tempuh ke pusat Kota Tasikmalaya hanya 15-20 menit, sangat menguntungkan rantai pasok microgreens segar.',
                    'Diperlukan inventarisasi jaringan pipa existing sebelum instalasi prototipe dimulai.',
                ],
                'visual_theme' => 'district',
            ],
            [
                'id' => 'akar_rumput',
                'level_number' => 5,
                'name' => 'Akar Rumput',
                'scale' => 'Pesantren Al-Qur\'an Hidayatul Mustafid (Mitra Lapangan)',
                'title' => 'Observasi Awal Kp. Sindangresik: Jalur Wudu, Toren Air & Ruang Lahan 350 Bata',
                'badge_status' => 'Observasi Awal & [Kebutuhan Pengumpulan Data / Baseline Target]',
                'badge_type' => 'observation_needed',
                'description' => 'Melakukan identifikasi kebutuhan bersama komunitas melalui observasi, diskusi, dokumentasi, dan pengumpulan data dasar.',
                'year' => 'Oktober 2026',
                'source' => 'Observasi Lapangan & Wawancara Pengelola Pesantren oleh Tim SIRAMI UIN Sunan Gunung Djati Bandung (Surat No: 18/X/PPHM/2026)',
                'territory' => 'Kp. Sindangresik, Kel. Awipari, Kec. Cibeureum, Kota Tasikmalaya',
                'relevance' => 'Menjadi lokasi fisik uji coba pilot project 6 bulan. Semua parameter debit, mutu mikrobiologis, dan nutrisi air wudu wajib diukur sebagai baseline sebelum dialirkan ke instalasi budidaya.',
                'unverified_notice' => 'PERHATIAN: Data debit harian riil (liter/hari), kandungan E. coli awal, dan TDS air wudu di lokasi masih berstatus [Kebutuhan Pengumpulan Data / Baseline Target] yang akan diverifikasi melalui uji lab resmi terakreditasi pada Bulan 1 pilot project.',
                'metrics' => [
                    [
                        'value' => '±350 Bata',
                        'label' => 'Potensi Lahan Pekarangan',
                        'sub' => 'Aset lahan terbuka yang saat ini sebagian ditanami buah naga dan cabai rawit ekstensif.',
                    ],
                    [
                        'value' => '5 Waktu',
                        'label' => 'Siklus Wudu Santri',
                        'sub' => 'Pola debit air wudu terpusat pada waktu subuh, zuhur, asar, magrib, dan isya.',
                    ],
                    [
                        'value' => '1 Unit IPAL',
                        'label' => 'Fasilitas Tersedia',
                        'sub' => 'Infrastruktur bak penampung awal yang dapat diintegrasikan dengan filter multi-media SIRAMI.',
                    ],
                ],
                'key_points' => [
                    'Santri mukim memiliki kedisiplinan dan rutinitas harian yang sangat kondusif untuk pembiasaan SOP budidaya.',
                    'Pimpinan pesantren (KH. Nandang Ja\'far Shiddiq) telah menerbitkan surat persetujuan resmi memfasilitasi lokasi pilot.',
                    'Pemisahan jalur air wudu dari air limbah toilet (blackwater) mutlak dilakukan secara fisik di lokasi.',
                ],
                'visual_theme' => 'site',
            ],
            [
                'id' => 'respons_sirami',
                'level_number' => 6,
                'name' => 'Respons SIRAMI',
                'scale' => 'Solusi Terintegrasi Mahasiswa UIN Bandung',
                'title' => 'Rancang Bangun Pilot: Smart Water Treatment, Zero-Risk Gate & Kemandirian Santri',
                'badge_status' => 'Target Pilot & Prototipe Teruji',
                'badge_type' => 'target_solution',
                'description' => 'Merumuskan rancangan solusi yang sesuai dengan masalah prioritas dan menguji kelayakannya melalui tahapan pengembangan dan pilot project.',
                'year' => 'Rencana Pelaksanaan 2026',
                'source' => 'Blueprint Inovasi Sosial SIRAMI, Disiapkan untuk Sharia Young Leader Summit (SYLS) 2026',
                'territory' => 'Pilot Sindangresik & Model Replikasi Pesantren Perkotaan',
                'relevance' => 'Mewujudkan intervensi terintegrasi yang menggabungkan filtrasi air terukur, monitoring sensor IoT terkalibrasi, budidaya microgreens bernilai jual, dan pembukuan kas mandiri santri.',
                'metrics' => [
                    [
                        'value' => 'Rp26 Jt',
                        'label' => 'Anggaran Kas Terukur',
                        'sub' => 'RAB implementasi pilot Rp26.000.000 terperinci dengan 12 pos belanja transparan tanpa pemborosan modal.',
                    ],
                    [
                        'value' => '7 - 14 Hari',
                        'label' => 'Siklus Panen Microgreens',
                        'sub' => 'Perputaran kas cepat dengan densitas mikronutrien tinggi untuk santri dan penjualan.',
                    ],
                    [
                        'value' => 'Zero-Risk',
                        'label' => 'Health Safety Gate',
                        'sub' => 'Uji laboratorium baku mutu independen sebelum air filtrasi digunakan untuk tanaman pangan.',
                    ],
                ],
                'key_points' => [
                    'Pendekatan multibarrier: sedimentasi fisik, bio-filtrasi pasir/karbon aktif, fitoremediasi tanaman lokal.',
                    'Pemantauan sensor IoT lokal hemat daya untuk parameter krusial pH, TDS, dan kekeruhan air.',
                    'Pelatihan santri mencakup SOP budidaya, higiene panen, penetapan HPP, hingga pembukuan kas digital.',
                ],
                'visual_theme' => 'solution',
            ],
        ];
    }

    /**
     * Get scientific references and regulations.
     *
     * @return array<int, array<string, string>>
     */
    public static function getReferences(): array
    {
        return [
            [
                'title' => 'WHO Guidelines for the Safe Use of Wastewater, Excreta and Greywater (Vol 2 & 3)',
                'publisher' => 'World Health Organization (WHO)',
                'year' => '2006 (Updated guidelines)',
                'link' => 'https://www.who.int/publications/i/item/9241546832',
                'scope' => 'Standar baku multibarrier dan mitigasi risiko mikrobiologis penggunaan air limbah olahan pada tanaman pangan konsumsi segar.',
            ],
            [
                'title' => 'Sanitation Safety Planning: Step-by-Step Risk Management for Sanitation Systems',
                'publisher' => 'World Health Organization (WHO)',
                'year' => '2022 (2nd Edition)',
                'link' => 'https://www.who.int/southeastasia/publications/i/item/9789240062887',
                'scope' => 'Panduan manajemen risiko berbasis bahaya dan titik kontrol kritis (HACCP) untuk sistem pengolahan air komunitas.',
            ],
            [
                'title' => 'Peraturan Menteri Lingkungan Hidup/BPLH No. 11 Tahun 2025',
                'publisher' => 'Kementerian Lingkungan Hidup / BPLH Republik Indonesia',
                'year' => '2025',
                'link' => 'https://peraturan.bpk.go.id/Details/345620/permen-lhbplh-no-11-tahun-2025',
                'scope' => 'Baku mutu air limbah domestik dan standar teknologi pengolahan air limbah domestik terstandar nasional.',
            ],
            [
                'title' => 'Survei Kesehatan Indonesia (SKI) 2023: Pola Konsumsi Pangan',
                'publisher' => 'BKPK Kementerian Kesehatan Republik Indonesia',
                'year' => '2023',
                'link' => 'https://www.badankebijakan.kemkes.go.id/',
                'scope' => 'Data sekunder nasional: 96,7% penduduk usia ≥5 tahun kurang mengonsumsi sayur dan buah sesuai standar kesehatan.',
            ],
        ];
    }

    /**
     * Get comprehensive implementation pipeline from installation to Tasikmalaya market sales.
     *
     * @return array<int, array<string, mixed>>
     */
    public static function getImplementationActivities(): array
    {
        return [
            [
                'step' => '01',
                'phase' => 'Instalasi Fisik & Sistem',
                'title' => 'Instalasi Fisik & Sistem Cerdas (Smart Water & Microgreens Farm)',
                'subtitle' => 'Pemasangan Jalur Pipa Terpisah, Bak Filtrasi Multi-Media, Fitoremediasi & Modul Tanam Vertikal',
                'icon' => 'tools',
                'badge' => 'Tahap Fisik & Rekayasa',
                'description' => 'Membangun infrastruktur pemisahan jalur limpasan air wudu (greywater) dari blackwater secara fisik, instalasi tangki sedimentasi, unit filtrasi pasir silika dan karbon aktif, kolam fitoremediasi akar tanaman lokal (vetiver), serta integrasi mikrokontroler sensor box IoT (pH, TDS, turbiditas) dan rak vertikal microgreens berkapasitas 80 tray di pekarangan pesantren seluas ±350 bata.',
                'metrics' => [
                    ['label' => 'Debit Olahan Harian', 'value' => '1.500 - 3.000 L/hari', 'sub' => 'Limpasan 5 waktu sholat'],
                    ['label' => 'Lahan Pekarangan', 'value' => '±350 Bata', 'sub' => 'Area terverifikasi pesantren'],
                    ['label' => 'Kapasitas Semai', 'value' => '80 Tray Bertingkat', 'sub' => '4 unit rak vertikal hemat ruang'],
                    ['label' => 'Filter Mekanis', 'value' => 'Mesh 40 & 100', 'sub' => 'Silika, kerikil & karbon aktif'],
                ],
                'deliverables' => [
                    'Pipa pemisah jalur air wudu terpasang tanpa pencemaran toilet',
                    'Tangki sedimentasi dan kolam fitoremediasi aktif beroperasi',
                    'Sensor box IoT terkalibrasi menampilkan pH, TDS, dan turbiditas',
                    'Rak vertikal bertingkat microgreens siap digunakan untuk semai',
                ],
            ],
            [
                'step' => '02',
                'phase' => 'Pelatihan Teknis & SOP',
                'title' => 'Pelatihan Teknis Operasional & Pemeliharaan SOP Baku',
                'subtitle' => 'Transfer Keahlian Perawatan Filter, Kalibrasi Sensor & Prosedur Keamanan Pangan',
                'icon' => 'book-open',
                'badge' => 'Kapasitas Operator',
                'description' => 'Penyelenggaraan pelatihan komprehensif bagi 15–20 santri mukim dan pengelola teknis pesantren mencakup modul SOP TECH-SOP-01: prosedur backwash filter pasir, pembersihan saringan kawat mekanis, pemantauan stabilitas sensor IoT harian, pencatatan logbook kualitas air, dan penegakan gerbang keamanan Zero-Risk Health Gate sebelum air dialirkan ke sistem siram.',
                'metrics' => [
                    ['label' => 'Peserta Pelatihan', 'value' => '15 - 20 Santri Mukim', 'sub' => 'Santri & ustadz pengelola'],
                    ['label' => 'Modul Panduan', 'value' => 'TECH-SOP-01', 'sub' => 'Modul cetak & lembar kontrol'],
                    ['label' => 'Ambang Batas pH', 'value' => '6.5 - 8.5 (Aman)', 'sub' => 'Baku mutu air siram pangan'],
                    ['label' => 'Toleransi TDS', 'value' => '< 500 ppm', 'sub' => 'Jernih terkalibrasi digital'],
                ],
                'deliverables' => [
                    'Buku panduan operasional SOP cetak disahkan bersama pimpinan',
                    '15 santri mukim tersertifikasi memahami alur perawatan sistem',
                    'Lembar logbook pemantauan air harian aktif tercatat berkala',
                    'Protokol uji laboratorium independen terjadwal secara periodik',
                ],
            ],
            [
                'step' => '03',
                'phase' => 'Kewirausahaan & Pengolahan',
                'title' => 'Pelatihan Kewirausahaan & Pengolahan Pangan Lokal (Santripreneur)',
                'subtitle' => 'Budidaya Microgreens Bernutrisi Tinggi & Hilirisasi Produk Olahan Sehat Bernilai Tambah',
                'icon' => 'sprout',
                'badge' => 'Ekonomi & Ketahanan Pangan',
                'description' => 'Mengembangkan kompetensi santripreneur dalam budidaya sayuran muda microgreens (bayam merah, lobak, chia, bunga matahari, brokoli) bersiklus panen cepat 7–14 hari. Santri dilatih mengolah hasil panen menjadi produk bernilai tambah seperti paket salad sehat siap santap, minuman jus bernutrisi microgreens, serta pencatatan akuntansi unit cost, penetapan Harga Pokok Penjualan (HPP), dan pembukuan kas usaha mandiri.',
                'metrics' => [
                    ['label' => 'Siklus Panen Cepat', 'value' => '7 - 14 Hari', 'sub' => 'Rotasi tanam kontinu berkala'],
                    ['label' => 'Kapasitas Produksi', 'value' => '40 - 80 Pack/Minggu', 'sub' => 'Estimasi output bertahap'],
                    ['label' => 'Target Margin Laba', 'value' => '30% - 45%', 'sub' => 'Dihitung dari struktur HPP'],
                    ['label' => 'Varietas Unggul', 'value' => '5 Komoditas Pangan', 'sub' => 'Brokoli, bayam merah, radish, dll'],
                ],
                'deliverables' => [
                    'Kurikulum santripreneur dan tata kelola unit usaha pesantren',
                    'Formulasi produk olahan pangan lokal bergizi (salad pack, smoothies)',
                    'Buku kas usaha mandiri santri dengan pencatatan HPP transparan',
                    'Suplai konsumsi mikronutrien harian santri meningkat terukur',
                ],
            ],
            [
                'step' => '04',
                'phase' => 'Pemasaran & Packing',
                'title' => 'Pengemasan Higienis (Packing), Branding & Sertifikasi',
                'subtitle' => 'Kemasan Food-Grade Biodegradable, Desain Merek & Kesiapan Distribusi',
                'icon' => 'package',
                'badge' => 'Standarisasi Produk',
                'description' => 'Perancangan kemasan higienis bersertifikasi food-grade yang ramah lingkungan (wadah biodegradable transparan dengan ventilasi mikro menjaga kesegaran hingga 7 hari di suhu dingin). Dilengkapi label profesional "SIRAMI Fresh Greens: Karya Santri Berdaya", informasi kandungan gizi (nutrition facts), tanggal panen/kadaluwarsa, kode batch pelacakan, serta perintisan registrasi izin edar SPP-IRT dan sertifikasi halal.',
                'metrics' => [
                    ['label' => 'Daya Simpan Kemasan', 'value' => '5 - 7 Hari Segar', 'sub' => 'Suhu pendingin terkontrol'],
                    ['label' => 'Tipe Wadah Packing', 'value' => 'Eco-Biodegradable', 'sub' => 'Food-grade seal transparan'],
                    ['label' => 'Identitas Produk', 'value' => 'SIRAMI Fresh Greens', 'sub' => 'Label bernutrisi & batch QR'],
                    ['label' => 'Standar Higienitas', 'value' => 'Food Safety Protocol', 'sub' => 'Ruang packing bersih & steril'],
                ],
                'deliverables' => [
                    'Prototipe kemasan berstandar komersial siap pajang di etalase',
                    'Master template label produk dengan informasi gizi lengkap',
                    'Standar prosedur operasional (SOP) sanitasi pemanenan & packing',
                    'Dokumen berkas pendaftaran SPP-IRT dan sertifikasi halal bertahap',
                ],
            ],
            [
                'step' => '05',
                'phase' => 'Penjualan ke Kota Tasikmalaya',
                'title' => 'Penjualan Komersial Terverifikasi ke Pasar Kota Tasikmalaya',
                'subtitle' => 'Hilirisasi Penjualan Nyata ke Restoran, Cafe, Hotel, Supermarket & Konsumen Retail',
                'icon' => 'shopping-bag',
                'badge' => 'Hilirisasi Pasar Nyata',
                'description' => 'Membuktikan kelayakan ekonomi solusi melalui penetrasi pasar riil ke Kota Tasikmalaya. Menjalin kemitraan pasokan B2B dengan restoran sehat, cafe modern di koridor Jl. HZ Mustofa, Jl. Sutisna Senjaya, dan hotel di pusat Kota Tasikmalaya sebagai penyedia sayuran mikro premium, serta penjualan B2C langganan mingguan ke komunitas warga Tasikmalaya. Menghasilkan perputaran kas masuk nyata ke pesantren untuk keberlanjutan ekonomi sirkular dengan proyeksi SROI 1:2.4.',
                'metrics' => [
                    ['label' => 'Target Wilayah', 'value' => 'Kota Tasikmalaya', 'sub' => 'Jl. HZ Mustofa, Cibeureum & pusat kota'],
                    ['label' => 'Kanal Distribusi', 'value' => 'B2B (60%) & B2C (40%)', 'sub' => 'Resto, cafe, hotel & komunitas'],
                    ['label' => 'Proyeksi SROI', 'value' => '1 : 2.4 Terukur', 'sub' => 'Pengembalian nilai sosial-ekonomi'],
                    ['label' => 'Dampak Ekonomi', 'value' => 'Kas Mandiri Pesantren', 'sub' => 'Membiayai operasional air & pangan'],
                ],
                'deliverables' => [
                    'MoU kemitraan pasokan berkala dengan mitra usaha di Kota Tasikmalaya',
                    'Bukti nota transaksi dan kwitansi riil penjualan produk ke pelanggan',
                    'Rekapitulasi omzet penjualan bulanan masuk ke kas mandiri pesantren',
                    'Laporan audit kelayakan ekonomi sirkular dan model replikasi usaha',
                ],
            ],
        ];
    }

    /**
     * Get empirical urgency data matching the official SYLS presentation slide.
     *
     * @return array<string, mixed>
     */
    public static function getMengapaMendesakData(): array
    {
        return [
            'title' => 'Mengapa Ini mendesak?',
            'subtitle' => 'Kemandirian pangan sehat dimulai dari ruang yang paling dekat: rumah.',
            'description' => 'Tren gaya hidup sehat meningkat, namun konsumsi sayur dan buah masih rendah. Di lingkungan perumahan perkotaan, keterbatasan ruang, akses, dan biaya menjadi tantangan utama.',
            'metrics' => [
                [
                    'value' => '96,7%',
                    'label' => 'penduduk Indonesia usia ≥5 tahun kurang konsumsi sayur dan buah.',
                    'source' => 'SKI 2023 · Kemenkes RI',
                    'icon' => 'people',
                    'highlight' => 'Krisis Gizi Sayur',
                ],
                [
                    'value' => '≥400 g/hari',
                    'label' => 'anjuran konsumsi gabungan buah + sayur bagi usia > 10 tahun.',
                    'source' => 'WHO · Healthy Diet',
                    'icon' => 'diet',
                    'highlight' => 'Standar Baku WHO',
                ],
                [
                    'value' => '48%',
                    'label' => 'konsumen Indonesia menyebut akses opsi sehat sebagai hambatan.',
                    'source' => 'NIQ · Global State of Health & Wellness 2025',
                    'icon' => 'cart',
                    'highlight' => 'Kendala Akses',
                ],
                [
                    'value' => '43%',
                    'label' => 'menyebut biaya sebagai salah satu hambatan pilihan sehat.',
                    'source' => 'NIQ · 2025',
                    'icon' => 'cost',
                    'highlight' => 'Kendala Finansial',
                ],
            ],
            'context_urban' => [
                'tag' => 'KONTEKS PERKOTAAN',
                'source' => 'BPS 2024',
                'text' => 'sayuran menyumbang 3,49% dari pengeluaran per kapita bulanan penduduk perkotaan; ini indikator belanja, bukan bukti langsung bahwa harga adalah penyebab rendahnya konsumsi.',
            ],
            'multi_scale' => [
                [
                    'scale' => 'GLOBAL',
                    'icon' => 'globe',
                    'text' => 'Pola makan sehat membutuhkan akses pangan beragam.',
                ],
                [
                    'scale' => 'NASIONAL',
                    'icon' => 'archipelago',
                    'text' => 'Konsumsi sayur dan buah masih belum memadai, sementara minat hidup sehat, olahraga, dan kesadaran gizi terus meningkat.',
                ],
                [
                    'scale' => 'AKAR RUMPUT',
                    'icon' => 'home',
                    'text' => 'Di perumahan perkotaan, ruang tanam terbatas, kebiasaan makan dan akses pangan sehat perlu diperkuat.',
                ],
            ],
            'intervention' => [
                'tag' => 'CELAH INTERVENSI SIRAMI',
                'headline' => 'Budidaya microgreen skala rumah dapat diuji sebagai pelengkap sebagian konsumsi sayur — bukan pengganti kebutuhan pangan keluarga.',
                'subtext' => 'Microgreen adalah salah satu opsi sayuran, bukan solusi tunggal untuk memenuhi anjuran 400 g buah dan sayur.',
            ],
            'sources_footnote' => 'Sumber: Kemenkes RI, SKI 2023; WHO, Healthy Diet; NIQ, Global State of Health & Wellness Indonesia 2025 (8 Juli 2025); BPS, pengeluaran per kapita menurut kelompok komoditas, 2024.',
            'photos' => [
                'field_pond' => asset('foto/kosndisi pesantree/lele.webp'),
            ],
        ];
    }

    /**
     * Get empirical data for "Komunitas & Konteks" slide.
     *
     * @return array<string, mixed>
     */
    public static function getKomunitasKonteksData(): array
    {
        return [
            'title' => 'Komunitas & Konteks',
            'subtitle' => 'Pesantren sebagai titik awal model pengelolaan air, pangan, dan ekonomi sirkular.',
            'description' => "Pondok Pesantren Al-Qur'an Hidayatul Mustafid di Tasikmalaya dipilih karena kebutuhan nyata, potensi sumber daya yang besar, komitmen pengelola, serta kesesuaian dengan model yang akan dikembangkan.",
            'location' => [
                'name' => "Pondok Pesantren Al-Qur'an Hidayatul Mustafid",
                'address' => 'Kp. Sindangresik, Kel. Awipari, Kec. Cibeureum, Kota Tasikmalaya, Jawa Barat',
                'map_label' => 'Kota Tasikmalaya',
                'coordinates' => [
                    'lat' => -7.348333883307857,
                    'lng' => 108.27008019447703,
                    'formatted' => '-7.348334, 108.270080',
                    'dms' => '7°20\'54.0"S 108°16\'12.3"E',
                ],
                'google_maps_url' => 'https://www.google.com/maps?q=-7.348333883307857,108.27008019447703',
                'google_maps_directions' => 'https://www.google.com/maps/dir/?api=1&destination=-7.348333883307857,108.27008019447703',
                'google_maps_embed' => 'https://maps.google.com/maps?q=-7.348333883307857,108.27008019447703&t=k&z=18&ie=UTF8&iwloc=&output=embed',
                'photo' => asset('foto/pimpinan pesantreen/WhatsApp Image 2026-10-22 at 00.03.21.webp'),
                'characteristics' => [
                    'Lingkungan pesantren yang terpusat',
                    'Banyak aktivitas santri setiap hari',
                    'Tersedia lahan produktif dan ekosistem ekonomi sirkular',
                    'Didukung pimpinan pesantren dan pengelola lokal',
                ],
            ],
            'video_survey' => [
                'title' => 'Video Dokumentasi Observasi Fisik Lapangan',
                'subtitle' => 'Survei Langsung Sumber Air, Bak IPAL, Toren & Lingkungan Pesantren',
                'video_url' => asset('video-survey.mp4'),
                'fallback_url' => asset('video sruvey.mp4'),
                'poster' => asset('foto/kosndisi pesantree/torenair.webp'),
                'duration' => '00:23',
                'file_size' => '17.1 MB',
                'resolution' => '1080p Full HD',
                'location_tag' => 'Kp. Sindangresik, Awipari, Cibeureum, Kota Tasikmalaya',
                'description' => 'Rekaman video observasi fisik di lokasi mitra pilot project oleh Tim Inovator SIRAMI (Mahasiswa UIN Sunan Gunung Djati Bandung) untuk meninjau bak penampungan air bekas wudu, sumur bor, jalur perpipaan, dan pekarangan terbuka pesantren.',
            ],
            'productive_potential' => [
                'land_area' => '±350 bata',
                'land_sub' => 'lahan pertanian & peternakan (informasi awal)',
                'photo' => asset('foto/survei/WhatsApp Image 2026-10-21 at 23.38.04 (2).webp'),
                'commodities' => [
                    ['name' => 'Buah naga', 'icon' => '🌺', 'photo' => asset('foto/kosndisi pesantree/buahnaga.webp')],
                    ['name' => 'Semangka', 'icon' => '🍉', 'photo' => null],
                    ['name' => 'Cabai rawit', 'icon' => '🌶️', 'photo' => null],
                    ['name' => 'Entog', 'icon' => '🦆', 'photo' => null],
                    ['name' => 'Lele', 'icon' => '🐟', 'photo' => asset('foto/kosndisi pesantree/lele.webp')],
                    ['name' => 'Maggot', 'icon' => '🐛', 'photo' => asset('foto/kosndisi pesantree/Magot.webp')],
                    ['name' => 'Kambing', 'icon' => '🐐', 'photo' => null],
                ],
            ],
            'water_infrastructure' => [
                'stats' => [
                    ['value' => '±200–300', 'unit' => 'santri/penghuni', 'note' => 'Perlu verifikasi jumlah aktual', 'icon' => 'santri'],
                    ['value' => '>5', 'unit' => 'area wudu', 'note' => 'Penggunaan air harian tinggi', 'icon' => 'faucet'],
                    ['value' => '±20', 'unit' => 'kamar mandi/WC', 'note' => 'Menunjukkan kebutuhan air sanitasi yang besar', 'icon' => 'toilet'],
                    ['value' => '2', 'unit' => 'dapur umum', 'note' => 'Kebutuhan air untuk memasak dan kebersihan', 'icon' => 'kitchen'],
                ],
                'water_source' => [
                    'type' => 'Sumur bor dengan pompa listrik',
                    'cost_estimate' => 'Biaya listrik sekitar Rp2.000.000/bulan',
                    'cost_note' => '(informasi awal, perlu konfirmasi cakupan dan volume)',
                ],
                'greywater' => [
                    'title' => 'Air Non Kakus Berpotensi Dimanfaatkan',
                    'description' => 'Terdapat saluran dan tampungan air bekas wudu serta IPAL. Air non kakus ini belum dimanfaatkan secara optimal dan berpotensi untuk diolah sesuai hasil uji kualitas.',
                ],
            ],
            'community_profile' => [
                'title' => 'Profil dan Karakteristik Masyarakat',
                'points' => [
                    'Komunitas santri dengan aktivitas harian yang teratur',
                    'Kebutuhan pangan tinggi untuk konsumsi sehari-hari',
                    'Terdapat pengelola lokal untuk kebun, peternakan, dan IPAL',
                    'Budaya kolektif dan terbuka terhadap inovasi yang bermanfaat',
                    'Dukungan dan komitmen dari pimpinan pesantren (surat dukungan tersedia)',
                ],
            ],
            'environment_photos' => [
                [
                    'caption' => 'Fasilitas Air & Sanitasi',
                    'sub' => 'Tempat air & area sanitasi',
                    'src' => asset('foto/kosndisi pesantree/tempatair.webp'),
                ],
                [
                    'caption' => 'Lahan IPAL & Pekarangan',
                    'sub' => 'Saluran limbah & lahan terbuka',
                    'src' => asset('foto/kosndisi pesantree/ipaldanlahan untuk treatmentair dan praktik microgreen.webp'),
                ],
                [
                    'caption' => 'Aktivitas Santri & Edukasi',
                    'sub' => 'Ruang belajar & kegiatan santri',
                    'src' => asset('foto/kosndisi pesantree/santri.webp'),
                ],
            ],
            'opportunities' => [
                'title' => 'Peluang Pengembangan',
                'items' => [
                    ['title' => 'Efisiensi penggunaan air', 'icon' => '💧'],
                    ['title' => 'Budidaya microgreen & sayuran', 'icon' => '🌱'],
                    ['title' => 'Edukasi lingkungan dan gizi', 'icon' => '👥'],
                    ['title' => 'Ekonomi sirkular berbasis pesantren', 'icon' => '📈'],
                ],
            ],
            'team_network' => [
                'title' => 'Pengalaman, Kompetensi, dan Jejaring Tim',
                'pillars' => [
                    [
                        'icon' => '💡',
                        'title' => 'Riset & Pengembangan',
                        'desc' => 'Pengalaman riset dan pengembangan di bidang air dan pertanian',
                    ],
                    [
                        'icon' => '⚙️',
                        'title' => 'Kompetensi Teknis',
                        'desc' => 'Kompetensi teknis: pengelolaan air, budidaya tanaman, dan monitoring',
                    ],
                    [
                        'icon' => '🌐',
                        'title' => 'Jejaring Wilayah',
                        'desc' => 'Jejaring di Tasikmalaya dan lingkungan pesantren',
                    ],
                    [
                        'icon' => '🤝',
                        'title' => 'Akses Kemitraan',
                        'desc' => 'Akses mitra (pesantren, komunitas, sektor pendidikan, dan agritech)',
                    ],
                ],
            ],
            'kenapa_tasikmalaya' => [
                'title' => 'Kenapa Tasikmalaya & Pesantren Hidayatul Mustafid?',
                'subtitle' => 'Tiga Alasan Utama & Keterikatan Nyata Tim di Akar Rumput',
                'description' => 'Pemilihan lokasi bukan keputusan acak dari balik meja, melainkan berakar pada modal sosial yang kuat, kepercayaan kultural internal santri, dan kolaborasi riset pertanian yang sedang berlangsung.',
                'reasons' => [
                    [
                        'number' => '01',
                        'title' => 'Ada Orang Sana (Keterikatan Warga & Putra Daerah)',
                        'icon' => '🏡',
                        'badge' => 'Modal Sosial Lokal',
                        'summary' => 'Jejaring keluarga dan warga lokal memudahkan penerimaan sosial tanpa sekat birokrasi.',
                        'description' => 'Inisiator memiliki ikatan emosional dan jejaring komunitas warga lokal di Tasikmalaya. Keterikatan putra daerah ini memastikan program tidak dipersepsikan sebagai intervensi pihak luar, melainkan inisiatif gotong royong yang berakar dari kepedulian warga setempat.',
                    ],
                    [
                        'number' => '02',
                        'title' => 'Mariya adalah Santri di Sana (Kepercayaan Kultural Langsung)',
                        'icon' => '🧕',
                        'badge' => 'Akses Dari Dalam',
                        'summary' => 'Neng Mariya Ulfa Mardiyah adalah santri di PP Hidayatul Mustafid, menjamin kedekatan kultural dan trust pimpinan.',
                        'description' => 'Salah satu anggota tim pengembang utama, Neng Mariya Ulfa Mardiyah, merupakan santri di Pondok Pesantren Al-Qur\'an Hidayatul Mustafid Tasikmalaya. Hubungan kultural dari dalam ini menciptakan tingkat kepercayaan (trust) yang sangat tinggi dari KH. Nandang Ja\'far Shiddiq, dewan asatidz, dan para santri, sehingga alih teknologi dan pendampingan harian berjalan secara alami dan berkelanjutan.',
                    ],
                    [
                        'number' => '03',
                        'title' => 'Sinergi Riset & Pendampingan Petani Tasikmalaya-Banjar (Tri Febriansah)',
                        'icon' => '🌾',
                        'badge' => 'Riset Berjalan',
                        'summary' => 'Tri sedang aktif menjalankan kolaborasi riset dan pendampingan kelompok tani di Tasikmalaya dan Banjar.',
                        'description' => 'Ketua tim teknologi, Tri Febriansah, saat ini sedang aktif melaksanakan kolaborasi riset terapan dan pendampingan petani di wilayah Tasikmalaya dan Kota Banjar. Pengalaman empiris di sentra pertanian Priangan Timur ini memberi tim pemahaman mendalam tentang karakteristik tanah, air, dinamika agroklimat, dan rantai pasok lokal.',
                    ],
                ],
            ],
        ];
    }

    /**
     * Slide: Analisis Masalah (Problem Tree).
     *
     * @return array<string, mixed>
     */
    public static function getProblemAnalysisData(): array
    {
        return [
            'title' => 'Analisis Masalah',
            'subtitle' => 'Memahami akar masalah untuk solusi yang tepat dan berkelanjutan.',
            'description' => 'Banyak potensi dan komitmen di pesantren, namun pemanfaatan air, pangan, dan ekonomi belum optimal karena keterbatasan pengetahuan, sistem, dan dukungan.',
            'core_problem' => 'Potensi air, lahan, dan sumber daya di pesantren belum dikelola secara optimal untuk mendukung ketahanan pangan dan ekonomi komunitas.',
            'long_term_impacts' => [
                ['title' => 'Kesehatan gizi tidak optimal', 'desc' => 'Konsumsi sayur rendah, risiko penyakit meningkat.', 'icon' => '❤️'],
                ['title' => 'Biaya operasional tinggi', 'desc' => 'Tagihan listrik dan air terus meningkat tanpa efisiensi.', 'icon' => '🪙'],
                ['title' => 'Potensi sumber daya terbuang', 'desc' => 'Air non kakus tidak dimanfaatkan, lingkungan terbebani.', 'icon' => '🌱'],
                ['title' => 'Produktivitas belum maksimal', 'desc' => 'Hasil kebun/peternakan belum konsisten dan akses pasar terbatas.', 'icon' => '📈'],
                ['title' => 'Peluang pendidikan terbatas', 'desc' => 'Pembelajaran praktis pertanian & sirkular belum optimal.', 'icon' => '👥'],
            ],
            'direct_outcomes' => [
                ['title' => 'Air terbuang sia-sia', 'desc' => 'Air bekas wudu/efluen IPAL tidak dimanfaatkan dengan aman.', 'icon' => '💧'],
                ['title' => 'Produksi sayuran belum optimal', 'desc' => 'Lahan terbatas, metode belum efisien, hasil belum konsisten.', 'icon' => '🌿'],
                ['title' => 'Pendapatan belum terbentuk', 'desc' => 'Produk belum terstandar, pemasaran belum jelas, model bisnis belum ada.', 'icon' => '💳'],
                ['title' => 'Kapasitas pengelola terbatas', 'desc' => 'Edukasi teknis, manajemen, dan pencatatan masih minim.', 'icon' => '👥'],
            ],
            'root_causes' => [
                [
                    'category' => 'Kurangnya pengetahuan dan edukasi',
                    'icon' => '📖',
                    'points' => [
                        'Pemahaman tentang pengolahan air yang aman.',
                        'Teknik budidaya pada lahan terbatas.',
                        'Manajemen usaha dan pemasaran.',
                    ],
                ],
                [
                    'category' => 'Ketiadaan sistem dan teknologi yang sesuai',
                    'icon' => '⚙️',
                    'points' => [
                        'Belum ada pemetaan aliran air yang terukur.',
                        'Belum ada prototipe pengolahan & pemanfaatan air non kakus.',
                        'Metode budidaya belum disesuaikan dengan kondisi lahan dan kapasitas.',
                    ],
                ],
                [
                    'category' => 'Model ekonomi dan pemasaran belum jelas',
                    'icon' => '👥',
                    'points' => [
                        'Belum ada konsep usaha yang terstruktur.',
                        'Jaringan pasar belum terbentuk.',
                        'Standar kualitas, kemasan, dan branding belum ada.',
                    ],
                ],
                [
                    'category' => 'Keterbatasan dukungan dan koordinasi',
                    'icon' => '🏛️',
                    'points' => [
                        'Akses pendanaan terbatas.',
                        'Kolaborasi dengan pihak eksternal belum optimal.',
                        'Pendampingan teknis masih minim.',
                    ],
                ],
            ],
            'systemic_factors' => [
                ['title' => 'Urbanisasi dan keterbatasan lahan', 'desc' => 'Ruang terbatas memerlukan sistem budidaya yang efisien dan vertikal.', 'icon' => '🏙️'],
                ['title' => 'Tekanan sumber daya air', 'desc' => 'Kebutuhan air tinggi dan biaya listrik terus meningkat.', 'icon' => '💧'],
                ['title' => 'Perubahan iklim dan ketahanan pangan', 'desc' => 'Ketidakpastian produksi pangan menuntut sumber pangan lokal yang stabil.', 'icon' => '🌦️'],
                ['title' => 'Keterbatasan literasi pangan sehat', 'desc' => 'Konsumsi sayur masih rendah di berbagai kelompok usia.', 'icon' => '🥗'],
                ['title' => 'Akses pasar dan rantai nilai', 'desc' => 'Produk komunitas sering terkendala standar, kontinuitas, dan jaringan distribusi.', 'icon' => '🔗'],
            ],
            'solution_core' => 'Potensi besar sudah ada: sumber air yang melimpah, komitmen pengelola, lahan produktif, dan semangat komunitas. Dengan pendekatan yang tepat, masalah ini dapat diubah menjadi model pengelolaan air, pangan, dan ekonomi yang berkelanjutan dan berpotensi direplikasi di komunitas lain.',
        ];
    }

    /**
     * Slide: Theory of Change (ToC).
     *
     * @return array<string, mixed>
     */
    public static function getTheoryOfChangeData(): array
    {
        return [
            'title' => 'Theory of Change',
            'subtitle' => 'Dari Pengelolaan Air Menuju Ketahanan Pangan dan Ekonomi Berbasis Komunitas',
            'narrative' => 'Jika pesantren dan komunitas memiliki pengetahuan, teknologi, dan dukungan yang tepat untuk mengelola air secara aman, memanfaatkan potensi ruang, dan mengembangkan budidaya pangan, maka mereka dapat meningkatkan akses pangan sehat, efisiensi sumber daya, dan peluang ekonomi yang berkelanjutan.',
            'vision' => 'Komunitas yang mandiri dalam pengelolaan air, produksi pangan sehat, dan ekonomi hijau berbasis nilai-nilai Islam, serta dapat direplikasi secara luas.',
            'steps' => [
                [
                    'phase' => 'INPUT',
                    'sub' => 'Sumber Daya',
                    'items' => [
                        'Tim SIRAMI (kompetensi, pengalaman, waktu, jejaring)',
                        'Dukungan pesantren (lahan, fasilitas, pengelola, komitmen)',
                        'Hasil riset & teknologi (pengelolaan air, budidaya microgreen)',
                        'Pendanaan dan sumber daya (hibah, in-kind, kemitraan)',
                        'Kemitraan (ahli, pemerintah, komunitas, pasar)',
                    ],
                ],
                [
                    'phase' => 'AKTIVITAS',
                    'sub' => 'Kegiatan Utama',
                    'items' => [
                        'Pemetaan dan audit penggunaan air (kuantitas, aliran, kualitas)',
                        'Desain dan uji teknologi pengelolaan air (sesuai hasil uji)',
                        'Pengembangan dan pendampingan budidaya microgreen',
                        'Pelatihan dan edukasi santri serta pengelola (air, pangan, bisnis)',
                        'Uji pasar dan pengembangan model ekonomi (biaya, harga, distribusi)',
                    ],
                ],
                [
                    'phase' => 'OUTPUT',
                    'sub' => 'Hasil Langsung',
                    'items' => [
                        'Peta aliran air dan data baseline tersedia',
                        'Hasil uji kualitas air dan rekomendasi pemanfaatan',
                        'SOP pengelolaan air dan budidaya microgreen',
                        'Unit budidaya microgreen berfungsi dan dikelola komunitas',
                        'Modul pelatihan, materi edukasi, dan pencatatan produksi',
                        'Rencana/model bisnis komunitas dan kemitraan pasar awal',
                    ],
                ],
                [
                    'phase' => 'OUTCOME',
                    'sub' => 'Jangka Menengah',
                    'items' => [
                        'Pengelolaan air lebih efisien dan aman',
                        'Peningkatan produksi pangan sehat untuk konsumsi internal',
                        'Peningkatan pengetahuan dan keterampilan santri/pengelola',
                        'Terbentuknya kebiasaan hidup sehat dan kesadaran lingkungan',
                        'Mulai terbentuk pendapatan tambahan dari hasil budidaya',
                        'Model operasional dapat dijalankan oleh komunitas',
                    ],
                ],
                [
                    'phase' => 'IMPACT',
                    'sub' => 'Dampak Jangka Panjang',
                    'items' => [
                        'Ketahanan pangan lokal meningkat',
                        'Pengelolaan sumber daya air yang lebih bertanggung jawab',
                        'Kesehatan dan gizi komunitas lebih baik',
                        'Ekonomi komunitas pesantren tumbuh berkelanjutan dan syariah',
                        'Model dapat direplikasi ke perumahan, sekolah, komunitas lain',
                        'Kontribusi terhadap SDGs (2, 3, 6, 11, 12)',
                    ],
                ],
            ],
            'assumptions' => [
                'Pesantren dan komunitas tetap berkomitmen dan terlibat aktif.',
                'Kualitas air dapat memenuhi persyaratan setelah pengujian.',
                'Pengelola bersedia menjalankan SOP yang disepakati.',
                'Terdapat minat konsumsi dan pasar untuk microgreen.',
                'Akses pendanaan dan dukungan teknis tersedia sesuai rencana.',
            ],
            'external_conditions' => [
                'Kebijakan pemerintah terkait air, pangan, dan lingkungan.',
                'Harga input (benih, media, alat) di pasaran.',
                'Kondisi iklim dan ketersediaan air di wilayah Tasikmalaya.',
                'Stabilitas sosial, regulasi pesantren, dan dukungan pihak lokal.',
                'Perkembangan tren hidup sehat dan permintaan pangan lokal.',
            ],
            'success_indicators' => [
                'Volume air terpetakan dan dimanfaatkan sesuai hasil uji.',
                'Jumlah unit budidaya aktif dan hasil panen.',
                'Peningkatan konsumsi sayur dari produksi sendiri.',
                'Pendapatan tambahan yang tercatat.',
                'Kesiapan replikasi dengan dokumentasi model dan SOP.',
            ],
        ];
    }

    /**
     * Slide: Solusi & Inovasi SIRAMI.
     *
     * @return array<string, mixed>
     */
    public static function getSolusiInovasiDeckData(): array
    {
        return [
            'title' => 'Solusi & Inovasi SIRAMI',
            'subtitle' => 'Mengubah air yang terabaikan menjadi sumber pangan sehat dan ekonomi pesantren.',
            'description' => 'Sistem pengelolaan air berbasis fitoremediasi dan IoT yang terintegrasi dengan budidaya ikan dan microgreen, dilengkapi pendampingan, pelatihan, dan akses pasar agar mudah diterapkan oleh pesantren.',
            'pills' => ['Air Lebih Terjaga', 'Pangan Sehat Lebih Dekat', 'Ekonomi Berkelanjutan', 'Edukasi & Pemberdayaan', 'Mudah Direplikasi ke Komunitas Lain'],
            'mechanism_steps' => [
                [
                    'step' => 1,
                    'title' => 'Sumber Air',
                    'desc' => 'Air bekas wudu (non kakus) dialirkan ke tampungan awal.',
                    'icon' => '💧',
                ],
                [
                    'step' => 2,
                    'title' => 'Treatment & Fitoremediasi',
                    'desc' => 'Prasedimentasi, pengolahan biologis (bakteri, fitoremediasi tanaman air), media filter (pasir, karbon aktif), dan monitoring kualitas air real-time sensor IoT.',
                    'icon' => '🧪',
                ],
                [
                    'step' => 3,
                    'title' => 'Air Terolah',
                    'desc' => 'Kualitas air memenuhi baku mutu aman sesuai hasil uji lab, lalu disalurkan ke unit budidaya.',
                    'icon' => '✨',
                ],
                [
                    'step' => 4,
                    'title' => 'Budidaya Ikan',
                    'desc' => 'Lele/ikan lainnya dalam kolam terpal dengan sirkulasi air terolah secara aman.',
                    'icon' => '🐟',
                ],
                [
                    'step' => 5,
                    'title' => 'Budidaya Microgreen',
                    'desc' => 'Sistem hidroponik vertikal otomatis, kontrol nutrisi dan pompa, panen cepat 7-14 hari berkualitas tinggi.',
                    'icon' => '🌱',
                ],
            ],
            'unique_factors' => [
                ['title' => 'Integrasi menyeluruh', 'desc' => 'Pengelolaan air, budidaya ikan, dan microgreen dalam satu sistem sirkular.', 'icon' => '🔄'],
                ['title' => 'Smart & otomatis', 'desc' => 'Menggunakan IoT untuk pemantauan kualitas air dan kontrol sistem, meringankan pengguna.', 'icon' => '📟'],
                ['title' => 'Sederhana untuk pengguna', 'desc' => 'Pengelola fokus pada panen, packing, dan penjualan berkat SOP terstruktur.', 'icon' => '🌿'],
                ['title' => 'End-to-end support', 'desc' => 'Pelatihan, manajemen, digitalisasi pemasaran, hingga akses ke mitra pembeli.', 'icon' => '🤝'],
            ],
            'alternatives_considered' => [
                ['option' => 'Membuang air tanpa pengolahan tambahan', 'status' => 'rejected', 'note' => 'Tidak memanfaatkan potensi sumber daya, tidak mendukung pangan dan ekonomi.'],
                ['option' => 'Menggunakan air terolah hanya untuk irigasi biasa', 'status' => 'rejected', 'note' => 'Manfaat ekonomi terbatas, tidak mengoptimalkan potensi budidaya bernilai tinggi.'],
                ['option' => 'Budidaya sayuran konvensional di lahan luas', 'status' => 'rejected', 'note' => 'Membutuhkan lahan lebih besar, tidak sesuai dengan keterbatasan ruang pesantren.'],
                ['option' => 'Solusi SIRAMI (fitoremediasi + ikan + microgreen)', 'status' => 'chosen', 'note' => 'Memanfaatkan potensi secara optimal, efisien, bernilai ekonomi tinggi, dan mudah direplikasi.'],
            ],
            'digital_market_support' => [
                ['title' => 'Platform digital', 'desc' => 'Website portofolio, dashboard data, dan marketplace komunitas.', 'icon' => '💻'],
                ['title' => 'Jejaring mitra', 'desc' => 'Menghubungkan pembeli, supplier benih/alat, dan komunitas.', 'icon' => '🔗'],
                ['title' => 'Pendampingan pemasaran', 'desc' => 'Branding produk, kemasan higienis, dan standardisasi label.', 'icon' => '📢'],
                ['title' => 'Model bisnis syariah', 'desc' => 'Tata kelola keuangan transparan dan perputaran kas halal.', 'icon' => '🤝'],
            ],
        ];
    }

    /**
     * Slide: Kepemilikan Komunitas & Pemangku Kepentingan.
     *
     * @return array<string, mixed>
     */
    public static function getStakeholdersData(): array
    {
        return [
            'title' => 'Kepemilikan Komunitas & Pemangku Kepentingan',
            'subtitle' => 'Kolaborasi multipihak untuk solusi yang berkelanjutan dan dimiliki oleh komunitas.',
            'description' => 'Program SIRAMI dirancang bersama pesantren, pemerintah, mitra teknis, dan ekosistem pendukung agar implementasi efektif, transparan, dan berkelanjutan setelah program selesai.',
            'principles' => [
                ['name' => 'Partisipatif', 'desc' => 'Kebutuhan dan keputusan melibatkan komunitas.', 'icon' => '👥'],
                ['name' => 'Transparan', 'desc' => 'Data, proses, dan hasil terbuka untuk semua pihak.', 'icon' => '🛡️'],
                ['name' => 'Inklusif', 'desc' => 'Melibatkan berbagai pemangku kepentingan.', 'icon' => '⚙️'],
                ['name' => 'Berkelanjutan', 'desc' => 'Kapasitas lokal diperkuat untuk kemandirian jangka panjang.', 'icon' => '🌱'],
            ],
            'stakeholder_entities' => [
                [
                    'name' => 'Santri & Pengelola Pesantren',
                    'role' => 'Pengguna utama dan pelaksana harian. Terlibat dalam desain, implementasi, dan mengembangkan unit usaha bersama.',
                    'icon' => '👥',
                ],
                [
                    'name' => 'Pemerintah Daerah (Kota Tasikmalaya)',
                    'role' => 'Dukungan kebijakan, perizinan, sinergi program daerah, dan fasilitasi replikasi ke pesantren lain.',
                    'icon' => '🏛️',
                ],
                [
                    'name' => 'Komunitas Lokal',
                    'role' => 'Keterlibatan warga, pemasok lokal, calon pembeli, dukungan sosial dan perluasan jejaring.',
                    'icon' => '🏘️',
                ],
                [
                    'name' => 'Mitra Pasar & Industri (HORECA)',
                    'role' => 'Penyerapan produk microgreen, ikan, dan hasil pertanian; kemitraan jangka panjang dan standar kualitas.',
                    'icon' => '🤝',
                ],
                [
                    'name' => 'AGRONEX (Mitra Teknologi IoT)',
                    'role' => 'Penyedia solusi IoT monitoring kualitas air, integrasi data, dashboard, dan dukungan teknis.',
                    'icon' => '📟',
                ],
                [
                    'name' => 'Yota Inovasi Nusantara',
                    'role' => 'Pengembangan sistem, integrasi IoT, digitalisasi, manajemen proyek, pendampingan teknis & operasional.',
                    'icon' => '🚀',
                ],
                [
                    'name' => 'Yayasan Yota Wujudkan Asa (Yota Adiwidya Center)',
                    'role' => 'Penguatan kapasitas, pendidikan lingkungan, pemberdayaan santri, dan integrasi kegiatan youth.',
                    'icon' => '🎓',
                ],
            ],
            'engagement_matrix' => [
                ['stakeholder' => 'Pesantren (pimpinan, pengelola, santri)', 'design' => true, 'implementation' => true, 'monitoring' => true, 'after' => true],
                ['stakeholder' => 'Pemerintah Daerah', 'design' => true, 'implementation' => true, 'monitoring' => true, 'after' => true],
                ['stakeholder' => 'Yota Inovasi Nusantara', 'design' => true, 'implementation' => true, 'monitoring' => true, 'after' => false],
                ['stakeholder' => 'Yota Adiwidya Center', 'design' => true, 'implementation' => true, 'monitoring' => true, 'after' => true],
                ['stakeholder' => 'AGRONEX', 'design' => true, 'implementation' => true, 'monitoring' => true, 'after' => false],
                ['stakeholder' => 'Komunitas Lokal', 'design' => true, 'implementation' => true, 'monitoring' => true, 'after' => true],
                ['stakeholder' => 'Mitra Pasar & Industri', 'design' => false, 'implementation' => true, 'monitoring' => true, 'after' => true],
            ],
            'stages' => [
                ['step' => 1, 'title' => 'Desain Bersama', 'desc' => 'Diskusi kebutuhan, pemetaan potensi, penyusunan rencana kerja.', 'icon' => '👥'],
                ['step' => 2, 'title' => 'Implementasi', 'desc' => 'Pelatihan, pembangunan sistem, uji coba, produksi awal.', 'icon' => '⚙️'],
                ['step' => 3, 'title' => 'Pengawasan', 'desc' => 'Monitoring kualitas air, hasil panen, dan evaluasi bersama.', 'icon' => '🔍'],
                ['step' => 4, 'title' => 'Pengelolaan Mandiri', 'desc' => 'Transfer pengetahuan, pembentukan tim lokal, model usaha mandiri.', 'icon' => '🌱'],
            ],
            'sustainability_pillars' => [
                ['title' => 'Tim Pengelola Lokal', 'desc' => 'Unit usaha dan operasional harian dijalankan santri dan pengelola.', 'icon' => '👥'],
                ['title' => 'Pendampingan Lanjutan', 'desc' => 'Monitoring berkala, peningkatan kapasitas, dan fasilitasi akses pasar.', 'icon' => '📈'],
                ['title' => 'Integrasi Program Daerah', 'desc' => 'Replikasi ke pesantren dan komunitas perkotaan lain di Tasikmalaya.', 'icon' => '🏛️'],
                ['title' => 'Model Ekonomi Berkelanjutan', 'desc' => 'Sebagian pendapatan untuk operasional, perawatan, dan kas mandiri.', 'icon' => '🔄'],
            ],
        ];
    }

    /**
     * Slide: Strategi Implementasi 6 Bulan & Rencana Kerja Mingguan.
     *
     * @return array<string, mixed>
     */
    public static function getStrategy6MonthsData(): array
    {
        return [
            'title' => 'Strategi Implementasi 6 Bulan',
            'subtitle' => 'Bersama santri, untuk solusi yang tepat, bertahap, dan berkelanjutan.',
            'narrative' => 'Implementasi dilakukan secara partisipatif dengan pendekatan Asset-Based Community Development (ABCD) dan Human-Centered Design (HCD), dimulai dari pemetaan aset, validasi kebutuhan, co-design, implementasi, pendampingan, evaluasi, dan serah terima dalam 6 bulan (Jan - Jun 2027).',
            'total_duration' => '6 Bulan (Jan - Jun 2027)',
            'phases' => [
                [
                    'phase_number' => 1,
                    'name' => 'Bulan 1: Persiapan & Pemetaan Aset',
                    'timeline' => 'Minggu 1–4',
                    'lead' => 'Tim SIRAMI + Pengelola Pesantren + Perwakilan Santri',
                    'activities' => 'Silaturahmi & koordinasi, pemetaan aset (air, lahan, SDM), kajian awal kondisi eksisting.',
                    'output' => 'Peta aset, profil komunitas, dan laporan baseline.',
                    'criteria' => 'Peta aset disetujui bersama dan rencana kerja bulan 2 disepakati.',
                    'photo' => asset('foto/diskusi pengelola/WhatsApp Image 2026-10-21 at 23.37.58.webp'),
                ],
                [
                    'phase_number' => 2,
                    'name' => 'Bulan 2: Validasi Kebutuhan',
                    'timeline' => 'Minggu 5–8',
                    'lead' => 'Tim SIRAMI + Santri + Pengelola',
                    'activities' => 'Survei kebutuhan pengguna, pemetaan aliran dan kualitas air, FGD santri dan pengelola.',
                    'output' => 'Laporan kebutuhan dan prioritas solusi, data awal kualitas air.',
                    'criteria' => 'Data kebutuhan tervalidasi dan prioritas solusi ditetapkan.',
                    'photo' => asset('foto/diskusi pengelola/WhatsApp Image 2026-10-21 at 23.37.56.webp'),
                ],
                [
                    'phase_number' => 3,
                    'name' => 'Bulan 3: Co-Design Solusi',
                    'timeline' => 'Minggu 9–12',
                    'lead' => 'Tim SIRAMI + Santri + Pengelola',
                    'activities' => 'Penyusunan desain teknis, alur sistem, SOP, modul pelatihan, rencana bisnis & pemasaran.',
                    'output' => 'Desain teknis, SOP, rencana implementasi, dan rencana bisnis sederhana.',
                    'criteria' => 'Desain teknis dan SOP disetujui oleh semua pihak.',
                    'photo' => asset('foto/diskusi pengelola/pemetaanlokasi.webp'),
                ],
                [
                    'phase_number' => 4,
                    'name' => 'Bulan 4–5: Implementasi & Uji Coba',
                    'timeline' => 'Minggu 13–20',
                    'lead' => 'Tim SIRAMI + Santri (Tim Operasional)',
                    'activities' => 'Instalasi sistem pengolahan air, integrasi sensor IoT, pembangunan unit budidaya, uji coba operasional.',
                    'output' => 'Sistem berfungsi (pengolahan air, IoT, budidaya ikan & microgreen).',
                    'criteria' => 'Sistem terpasang dan berjalan stabil (minimal 4 minggu uji coba).',
                    'photo' => asset('foto/kosndisi pesantree/torenair.webp'),
                ],
                [
                    'phase_number' => 5,
                    'name' => 'Bulan 5: Pendampingan & Evaluasi',
                    'timeline' => 'Minggu 21–24',
                    'lead' => 'Tim SIRAMI + Santri + Pengelola',
                    'activities' => 'Pelatihan operasional & perawatan, pendampingan budidaya & panen, pencatatan data, evaluasi bersama.',
                    'output' => 'Santri dan pengelola mampu mengoperasikan sistem secara mandiri.',
                    'criteria' => 'Tim lokal mampu mengoperasikan sistem dan melakukan panen.',
                    'photo' => asset('foto/diskusi pengelola/diskusibudidayamicrogreen.webp'),
                ],
                [
                    'phase_number' => 6,
                    'name' => 'Bulan 6: Serah Terima & Keberlanjutan',
                    'timeline' => 'Minggu 23–24',
                    'lead' => 'Tim SIRAMI + Pengelola Pesantren + Tim Santri',
                    'activities' => 'Penyusunan panduan & SOP akhir, serah terima sistem dan pengelolaan, rencana keberlanjutan, dokumentasi & diseminasi.',
                    'output' => 'SOP final, tim pengelola terbentuk, serah terima, dan rencana replikasi.',
                    'criteria' => 'Serah terima dilakukan dan rencana lanjutan disepakati.',
                    'photo' => asset('foto/pimpinan pesantreen/WhatsApp Image 2026-10-22 at 00.03.21.webp'),
                ],
            ],
            'principles' => [
                ['name' => 'Partisipatif', 'desc' => 'Melibatkan santri dan pengelola di setiap tahap.'],
                ['name' => 'Kontekstual', 'desc' => 'Sesuai kondisi, kebutuhan, dan potensi lokal.'],
                ['name' => 'Praktis', 'desc' => 'Mudah dioperasikan dan dirawat.'],
                ['name' => 'Berkelanjutan', 'desc' => 'Dikelola oleh komunitas setelah program selesai.'],
            ],
            'pesantren_aspects' => [
                'Komitmen dan keterlibatan aktif santri dan pengelola pesantren.',
                'Ketersediaan lahan dan fasilitas sesuai hasil pemetaan.',
                'Kualitas air dapat memenuhi standar untuk budidaya setelah pengolahan.',
                'Dukungan dari pihak pesantren dan lingkungan sekitar.',
                'Tidak ada kendala perizinan yang signifikan.',
            ],
        ];
    }

    /**
     * Slide: Dampak, Indikator, dan SROI (4.7:1).
     *
     * @return array<string, mixed>
     */
    public static function getSroiDetailedData(): array
    {
        return [
            'title' => 'Dampak, Indikator, dan SROI',
            'subtitle' => 'Perubahan terukur dari pengelolaan air menuju ketahanan pangan dan ekonomi komunitas.',
            'narrative' => 'Program SIRAMI menargetkan dampak lingkungan, sosial, dan ekonomi yang terukur melalui pengelolaan air, budidaya microgreen dan ikan, serta penguatan kapasitas santri. Indikator disusun bertahap dengan baseline di awal program dan diverifikasi melalui data lapangan, catatan operasional, dan evaluasi bersama.',
            'measurement_period' => '6 Bulan (Jan - Jun 2027)',
            'sroi_ratio' => '4,7 : 1',
            'sroi_label' => 'Rasio Manfaat Bruto Indikatif (3 Tahun)',
            'sroi_explanation' => 'Setiap Rp1 investasi berpotensi memberikan manfaat sosial, lingkungan, dan ekonomi sebesar Rp4,7.',
            'total_annual_benefit' => 'Rp41.000.000',
            'total_annual_benefit_sub' => 'Estimasi Konservatif per Tahun',
            'first_year_investment' => 'Rp26.000.000',
            'benefit_breakdown' => [
                ['category' => 'Pangan Sehat (serapan nilai produk)', 'amount' => 'Rp 18.000.000', 'raw' => 18000000, 'icon' => '🥗'],
                ['category' => 'Efisiensi Air & Listrik', 'amount' => 'Rp 6.000.000', 'raw' => 6000000, 'icon' => '💧'],
                ['category' => 'Peningkatan Keterampilan Santri (nilai sosial)', 'amount' => 'Rp 10.000.000', 'raw' => 10000000, 'icon' => '👥'],
                ['category' => 'Lingkungan (pengurangan beban air limbah)', 'amount' => 'Rp 7.000.000', 'raw' => 7000000, 'icon' => '♻️'],
            ],
            'indicators_table' => [
                [
                    'indicator' => 'Sistem pengolahan air terpasang dan berfungsi',
                    'category' => 'Output',
                    'baseline' => '0 unit',
                    'target' => '1 unit',
                    'time' => 'Bulan 3',
                    'source' => 'Laporan instalasi, foto',
                    'verifier' => 'Tim SIRAMI & Pengelola Pesantren',
                ],
                [
                    'indicator' => 'Unit budidaya microgreen aktif',
                    'category' => 'Output',
                    'baseline' => '0 unit',
                    'target' => '1 unit (min. 4 tray)',
                    'time' => 'Bulan 3',
                    'source' => 'Dokumentasi, logbook',
                    'verifier' => 'Tim SIRAMI & Pengelola Pesantren',
                ],
                [
                    'indicator' => 'Unit budidaya ikan aktif',
                    'category' => 'Output',
                    'baseline' => '0 unit',
                    'target' => '1 unit (min. 1 kolam/terpal)',
                    'time' => 'Bulan 3',
                    'source' => 'Dokumentasi, logbook',
                    'verifier' => 'Tim SIRAMI & Pengelola Pesantren',
                ],
                [
                    'indicator' => 'Jumlah santri dan pengelola yang dilatih',
                    'category' => 'Output',
                    'baseline' => '0 orang',
                    'target' => '≥ 30 orang',
                    'time' => 'Bulan 2–4',
                    'source' => 'Daftar hadir, materi pelatihan',
                    'verifier' => 'Tim SIRAMI & Pengelola Pesantren',
                ],
                [
                    'indicator' => 'SOP dan modul operasional tersedia',
                    'category' => 'Output',
                    'baseline' => '0 dokumen',
                    'target' => '≥ 3 dokumen',
                    'time' => 'Bulan 3',
                    'source' => 'Dokumen resmi',
                    'verifier' => 'Tim SIRAMI & Pengelola Pesantren',
                ],
                [
                    'indicator' => 'Kualitas air hasil olahan sesuai standar budidaya',
                    'category' => 'Outcome',
                    'baseline' => 'Belum terukur',
                    'target' => 'Sesuai baku mutu budidaya ikan/microgreen',
                    'time' => 'Bulan 3, 5',
                    'source' => 'Hasil uji laboratorium / sensor IoT',
                    'verifier' => 'Pihak independen / lab terakreditasi',
                ],
                [
                    'indicator' => 'Volume air yang dimanfaatkan kembali',
                    'category' => 'Outcome',
                    'baseline' => '0 liter/hari',
                    'target' => '≥ 500 liter/hari (menyesuaikan hasil uji)',
                    'time' => 'Bulan 4, 6',
                    'source' => 'Log meter air, dashboard IoT',
                    'verifier' => 'Tim SIRAMI & Pengelola Pesantren',
                ],
                [
                    'indicator' => 'Produksi microgreen (layak konsumsi)',
                    'category' => 'Outcome',
                    'baseline' => '0 kg/bulan',
                    'target' => '≥ 20 kg/bulan',
                    'time' => 'Bulan 4, 5, 6',
                    'source' => 'Log panen, catatan produksi',
                    'verifier' => 'Tim SIRAMI & Pengelola Pesantren',
                ],
                [
                    'indicator' => 'Produksi ikan (lele/ikan lain)',
                    'category' => 'Outcome',
                    'baseline' => '0 kg/bulan',
                    'target' => '≥ 15 kg/bulan',
                    'time' => 'Bulan 5, 6',
                    'source' => 'Log panen, catatan produksi',
                    'verifier' => 'Tim SIRAMI & Pengelola Pesantren',
                ],
                [
                    'indicator' => 'Pengurangan biaya operasional air/listrik',
                    'category' => 'Outcome',
                    'baseline' => 'Belum terukur',
                    'target' => 'Penurunan ≥ 10–20% (menyesuaikan baseline)',
                    'time' => 'Bulan 6',
                    'source' => 'Rekap tagihan, log operasional',
                    'verifier' => 'Tim SIRAMI & Pengelola Pesantren',
                ],
                [
                    'indicator' => 'Jumlah produk yang terjual',
                    'category' => 'Outcome',
                    'baseline' => '0 kg/bulan',
                    'target' => '≥ 10 kg microgreen/bln & ≥ 10 kg ikan/bln',
                    'time' => 'Bulan 5, 6',
                    'source' => 'Catatan penjualan, nota',
                    'verifier' => 'Tim SIRAMI & Pengelola Pesantren',
                ],
                [
                    'indicator' => 'Kontribusi terhadap ketahanan pangan pesantren',
                    'category' => 'Impact',
                    'baseline' => 'Belum terukur',
                    'target' => '≥ 5–10% dari kebutuhan sayur sebagian santri',
                    'time' => 'Bulan 6',
                    'source' => 'Catatan konsumsi dapur',
                    'verifier' => 'Tim SIRAMI & Pengelola Pesantren',
                ],
                [
                    'indicator' => 'Peningkatan pendapatan bersih dari usaha budidaya',
                    'category' => 'Impact',
                    'baseline' => '0',
                    'target' => '≥ Rp500.000 – 1.000.000/bulan (menyesuaikan skala)',
                    'time' => 'Bulan 6',
                    'source' => 'Rekap keuangan',
                    'verifier' => 'Tim SIRAMI & Pengelola Pesantren',
                ],
                [
                    'indicator' => 'Peningkatan keterampilan dan kemandirian santri',
                    'category' => 'Impact',
                    'baseline' => 'Belum terukur',
                    'target' => '≥ 70% peserta menunjukkan peningkatan pengetahuan/keterampilan',
                    'time' => 'Bulan 6',
                    'source' => 'Pre-post test, wawancara',
                    'verifier' => 'Tim SIRAMI & Pengelola Pesantren',
                ],
                [
                    'indicator' => 'Model terdokumentasi dan siap direplikasi',
                    'category' => 'Impact',
                    'baseline' => '0',
                    'target' => '1 dokumen model replikasi',
                    'time' => 'Bulan 6',
                    'source' => 'Dokumen final',
                    'verifier' => 'Tim SIRAMI & Pengelola Pesantren',
                ],
            ],
            'sdgs' => [
                ['code' => 'SDG 2', 'name' => 'Tanpa Kelaparan', 'desc' => 'Meningkatkan akses pangan bernutrisi mikro.'],
                ['code' => 'SDG 3', 'name' => 'Kehidupan Sehat & Sejahtera', 'desc' => 'Mendukung konsumsi sayur harian.'],
                ['code' => 'SDG 6', 'name' => 'Air Bersih & Sanitasi Layak', 'desc' => 'Daur ulang air non kakus dan perlindungan baku mutu.'],
                ['code' => 'SDG 12', 'name' => 'Konsumsi & Produksi Bertanggung Jawab', 'desc' => 'Model sirkular minim limbah.'],
            ],
            'evaluation_methods' => [
                ['name' => 'Data kuantitatif', 'desc' => 'Sensor IoT, logbook, produksi, penjualan.'],
                ['name' => 'Observasi lapangan', 'desc' => 'Pemeriksaan fisik dan dokumentasi rutin.'],
                ['name' => 'Wawancara & FGD', 'desc' => 'Santri, pengelola, dan pengguna harian.'],
                ['name' => 'Pre-post test', 'desc' => 'Pengukuran peningkatan pengetahuan & keterampilan.'],
                ['name' => 'Validasi independen', 'desc' => 'Uji laboratorium kualitas air terakreditasi.'],
            ],
        ];
    }

    /**
     * Slide: Rencana Anggaran Biaya (RAB Lengkap Rp26.000.000).
     *
     * @return array<string, mixed>
     */
    public static function getDetailedRabData(): array
    {
        return [
            'title' => 'Rencana Anggaran Biaya',
            'subtitle' => 'Total Pengajuan Rp26.000.000 | Implementasi Pilot SIRAMI',
            'description' => 'Anggaran difokuskan pada implementasi pilot untuk membangun sistem pengolahan air, budidaya microgreen dan ikan, perangkat monitoring sederhana, serta pelatihan dan pendampingan.',
            'total_submission' => 'Rp26.000.000',
            'total_submission_raw' => 26000000,
            'summary_categories' => [
                [
                    'category' => 'Perangkat & Infrastruktur',
                    'amount' => 'Rp15.000.000',
                    'raw' => 15000000,
                    'pct' => 57.7,
                    'icon' => 'settings',
                    'items_count' => '4 Pos Belanja',
                ],
                [
                    'category' => 'Pelatihan, Tim & Konsumsi',
                    'amount' => 'Rp7.000.000',
                    'raw' => 7000000,
                    'pct' => 26.9,
                    'icon' => 'users',
                    'items_count' => '3 Pos Belanja',
                ],
                [
                    'category' => 'Pemasaran & Biaya Pendukung',
                    'amount' => 'Rp4.000.000',
                    'raw' => 4000000,
                    'pct' => 15.4,
                    'icon' => 'chart',
                    'items_count' => '5 Pos Belanja',
                ],
            ],
            'items' => [
                [
                    'no' => 1,
                    'component' => 'IoT dan sensor',
                    'details' => 'Sensor kualitas air termasuk DO, mikrokontroler, instalasi, dashboard, dan kalibrasi awal',
                    'budget' => 'Rp6.000.000',
                    'raw' => 6000000,
                    'category' => 'Perangkat & Infrastruktur',
                    'icon' => 'cpu',
                ],
                [
                    'no' => 2,
                    'component' => 'Budidaya microgreen',
                    'details' => 'Rak, tray, benih, media tanam, nutrisi, dan peralatan produksi',
                    'budget' => 'Rp3.000.000',
                    'raw' => 3000000,
                    'category' => 'Perangkat & Infrastruktur',
                    'icon' => 'leaf',
                ],
                [
                    'no' => 3,
                    'component' => 'Instalasi saung',
                    'details' => 'Struktur saung sederhana, atap, meja kerja, dan area produksi',
                    'budget' => 'Rp4.000.000',
                    'raw' => 4000000,
                    'category' => 'Perangkat & Infrastruktur',
                    'icon' => 'home',
                ],
                [
                    'no' => 4,
                    'component' => 'Instalasi irigasi',
                    'details' => 'Pompa, pipa, selang, valve, sambungan, dan distribusi air',
                    'budget' => 'Rp2.000.000',
                    'raw' => 2000000,
                    'category' => 'Perangkat & Infrastruktur',
                    'icon' => 'droplet',
                ],
                [
                    'no' => 5,
                    'component' => 'Pelatihan dan edukasi',
                    'details' => 'Materi, modul, praktik pengolahan air, budidaya, dan kewirausahaan',
                    'budget' => 'Rp3.000.000',
                    'raw' => 3000000,
                    'category' => 'Pelatihan, Tim & Konsumsi',
                    'icon' => 'users',
                ],
                [
                    'no' => 6,
                    'component' => 'Tim pelaksana dan transportasi',
                    'details' => 'Mobilisasi, kunjungan teknis, pengadaan, dan koordinasi tim',
                    'budget' => 'Rp3.000.000',
                    'raw' => 3000000,
                    'category' => 'Pelatihan, Tim & Konsumsi',
                    'icon' => 'truck',
                ],
                [
                    'no' => 7,
                    'component' => 'Konsumsi kegiatan',
                    'details' => 'Konsumsi peserta, fasilitator, dan tim saat kegiatan',
                    'budget' => 'Rp1.000.000',
                    'raw' => 1000000,
                    'category' => 'Pelatihan, Tim & Konsumsi',
                    'icon' => 'coffee',
                ],
                [
                    'no' => 8,
                    'component' => 'Marketing dan digitalisasi',
                    'details' => 'Branding, dokumentasi, pengelolaan media digital, dan promosi',
                    'budget' => 'Rp1.000.000',
                    'raw' => 1000000,
                    'category' => 'Pemasaran & Biaya Pendukung',
                    'icon' => 'megaphone',
                ],
                [
                    'no' => 9,
                    'component' => 'Packaging produk',
                    'details' => 'Kemasan microgreen, label, stiker, dan perlengkapan pengemasan',
                    'budget' => 'Rp500.000',
                    'raw' => 500000,
                    'category' => 'Pemasaran & Biaya Pendukung',
                    'icon' => 'package',
                ],
                [
                    'no' => 10,
                    'component' => 'Pengujian kualitas air',
                    'details' => 'Pengujian awal dan setelah pengolahan sesuai parameter yang diperlukan',
                    'budget' => 'Rp1.000.000',
                    'raw' => 1000000,
                    'category' => 'Pemasaran & Biaya Pendukung',
                    'icon' => 'flask',
                ],
                [
                    'no' => 11,
                    'component' => 'Operasional dan bahan habis pakai',
                    'details' => 'Listrik, benih tambahan, pakan ikan, dan bahan operasional awal',
                    'budget' => 'Rp500.000',
                    'raw' => 500000,
                    'category' => 'Pemasaran & Biaya Pendukung',
                    'icon' => 'settings',
                ],
                [
                    'no' => 12,
                    'component' => 'Biaya tak terduga',
                    'details' => 'Cadangan kebutuhan instalasi dan penyesuaian harga',
                    'budget' => 'Rp1.000.000',
                    'raw' => 1000000,
                    'category' => 'Pemasaran & Biaya Pendukung',
                    'icon' => 'clipboard',
                ],
            ],
            'basic_package_comparison' => [
                'name' => 'Alokasi Inti Infrastruktur & Perangkat',
                'amount' => 'Rp15.000.000',
                'description' => 'Fokus pada instalasi filtrasi terukur, sensor IoT, saung produksi, dan instalasi irigasi.',
            ],
        ];
    }

    /**
     * Slide: Keberlanjutan Dan Strategi Alih Kelola.
     *
     * @return array<string, mixed>
     */
    public static function getSustainabilityStrategyData(): array
    {
        return [
            'title' => 'Keberlanjutan Dan Strategi Alih Kelola',
            'subtitle' => 'Dari proyek percontohan menuju sistem yang dikelola mandiri oleh pesantren dan santri.',
            'description' => 'Program SIRAMI dirancang agar dapat terus berjalan setelah periode pendanaan selesai, melalui penguatan kapasitas pengelola, model usaha sederhana, kepemilikan aset yang jelas, dan pendampingan alih kelola secara bertahap.',
            'goals' => 'Sistem pengelolaan air, budidaya microgreen dan ikan, serta model usaha dapat dikelola secara mandiri oleh pesantren dan santri, dengan dukungan jejaring lokal.',
            'pillars' => [
                [
                    'title' => 'Siapa yang Melanjutkan?',
                    'lead' => 'Tim Pengelola Pesantren',
                    'points' => [
                        'Unit pengelola yang terdiri dari pengurus pesantren, santri, dan pembina.',
                        'Bertanggung jawab atas operasional harian, perawatan sistem, produksi, dan penjualan.',
                        'Didampingi melalui SOP, modul, dan pelatihan hingga siap mandiri.',
                    ],
                    'icon' => '👥',
                ],
                [
                    'title' => 'Kepemilikan Aset',
                    'lead' => 'Milik Pesantren',
                    'points' => [
                        'Seluruh aset fisik (sistem pengolahan air, unit budidaya, perangkat IoT) diserahkan dan menjadi milik pesantren.',
                        'Tim SIRAMI menyediakan dokumentasi teknis, SOP, dan pelatihan untuk alih kelola.',
                        'Tidak ada aset yang dibawa kembali setelah program selesai.',
                    ],
                    'icon' => '🏛️',
                ],
                [
                    'title' => 'Model Pendapatan',
                    'lead' => 'Usaha Sosial Pesantren',
                    'points' => [
                        'Penjualan microgreen (utama) ke pasar lokal (restoran, kafe, sekolah, dan masyarakat).',
                        'Penjualan ikan lele dan produk olahan sederhana.',
                        'Potensi layanan edukasi/kunjungan belajar.',
                        'Sebagian keuntungan dialokasikan untuk operasional, perawatan, dan pengembangan pesantren.',
                    ],
                    'icon' => '🌱',
                ],
                [
                    'title' => 'Dukungan Pasca Program',
                    'lead' => 'Kemitraan dan Jejaring Lokal',
                    'points' => [
                        'Akses pasar melalui mitra lokal di Tasikmalaya (restoran, pasar, komunitas).',
                        'Akses pemasok (benih, nutrisi, media) dengan harga lebih stabil.',
                        'Pendampingan jarak jauh (online) selama 6–12 bulan pertama.',
                        'Peluang replikasi ke unit lain di pesantren atau pesantren sekitar.',
                    ],
                    'icon' => '🤝',
                ],
            ],
            'monthly_operational_cost' => [
                'total' => 'Rp 1.100.000',
                'sub' => '± Rp 1,1 juta per bulan',
                'items' => [
                    ['component' => 'Listrik (pompa, aerator, IoT)', 'cost' => '300.000', 'note' => 'Berdasarkan penggunaan aktual'],
                    ['component' => 'Nutrisi & bahan habis pakai', 'cost' => '250.000', 'note' => 'Nutrisi hidroponik, pakan ikan'],
                    ['component' => 'Perawatan & penggantian media', 'cost' => '200.000', 'note' => 'Media tanam, filter, dll'],
                    ['component' => 'Kemasan & distribusi', 'cost' => '250.000', 'note' => 'Kemasan sederhana, transport lokal'],
                    ['component' => 'Lain-lain (kontinjensi)', 'cost' => '100.000', 'note' => 'Perbaikan kecil, operasional'],
                ],
            ],
            'monthly_revenue_projection' => [
                'total' => 'Rp 1.775.000',
                'surplus' => '± Rp 675.000/bulan',
                'surplus_note' => 'Dapat dialokasikan untuk perawatan, pengembangan unit, dan dukungan program pesantren lainnya.',
                'items' => [
                    ['product' => 'Microgreen', 'volume' => '20 kg', 'price' => '60.000/kg', 'revenue' => '1.200.000'],
                    ['product' => 'Ikan lele', 'volume' => '15 kg', 'price' => '25.000/kg', 'revenue' => '375.000'],
                    ['product' => 'Edukasi/kunjungan (opsional)', 'volume' => '2 kali/bulan', 'price' => '100.000', 'revenue' => '200.000'],
                ],
            ],
            'exit_strategy_steps' => [
                ['step' => 1, 'period' => 'Bulan 1–3', 'title' => 'Transfer Pengetahuan', 'desc' => 'Pelatihan intensif, penyusunan SOP, serta pendampingan operasional.', 'icon' => '👥'],
                ['step' => 2, 'period' => 'Bulan 4–6', 'title' => 'Penguatan Kapasitas', 'desc' => 'Santri memimpin operasional harian dengan supervisi; uji kemandirian produksi dan penjualan.', 'icon' => '⚙️'],
                ['step' => 3, 'period' => 'Bulan 7–9', 'title' => 'Alih Kelola Penuh', 'desc' => 'Pengelolaan penuh oleh pesantren; Tim SIRAMI berperan sebagai advisor jarak jauh.', 'icon' => '📄'],
                ['step' => 4, 'period' => 'Bulan 10–12', 'title' => 'Replikasi & Pengembangan', 'desc' => 'Evaluasi kemandirian; rencana perluasan unit atau replikasi ke lokasi lain.', 'icon' => '📈'],
            ],
            'risk_mitigation_notes' => [
                'Penurunan motivasi pengelola: pelatihan berkala dan insentif non-finansial.',
                'Gangguan teknis: SOP perawatan dan dukungan jarak jauh.',
                'Keterbatasan pasar: diversifikasi produk dan segmen pasar.',
                'Kenaikan biaya operasional: efisiensi energi dan pemanfaatan sumber daya lokal.',
            ],
        ];
    }

    /**
     * Slide: Risiko, Mitigasi dan Perlindungan (Do No Harm).
     *
     * @return array<string, mixed>
     */
    public static function getRiskMitigationData(): array
    {
        return [
            'title' => 'Risiko, Mitigasi dan Perlindungan',
            'subtitle' => 'Program SIRAMI dilaksanakan dengan prinsip aman, inklusif, bertanggung jawab, dan berkelanjutan.',
            'narrative' => 'Kami mengidentifikasi potensi risiko sejak awal dan menyiapkan langkah mitigasi yang jelas, penanggung jawab, serta mekanisme pengaduan untuk memastikan program berjalan aman, etis, dan memberi manfaat bagi seluruh pihak, terutama santri dan komunitas.',
            'principle' => 'Do No Harm (Aman &middot; Inklusif &middot; Transparan &middot; Bertanggung Jawab)',
            'risks' => [
                [
                    'no' => 1,
                    'category' => 'Teknis',
                    'main_risk' => 'Sistem pengolahan air tidak berfungsi optimal atau kualitas air belum memenuhi standar.',
                    'impact' => 'Budidaya terganggu, hasil panen menurun.',
                    'level' => 'Sedang',
                    'mitigation' => 'Desain sesuai hasil uji awal; uji kualitas air secara berkala; SOP operasi & perawatan; dukungan teknis jarak jauh.',
                    'pic' => 'Tim Teknis SIRAMI + Pengelola Pesantren',
                    'indicator' => 'Parameter air di luar batas normal (pH, TDS, kekeruhan).',
                    'contingency' => 'Perbaikan sistem, penggantian media, penggunaan sumber air alternatif, hentikan budidaya jika tidak aman.',
                    'icon' => '⚙️',
                ],
                [
                    'no' => 2,
                    'category' => 'Finansial',
                    'main_risk' => 'Biaya operasional lebih estimasi atau pendapatan usaha lebih rendah dari target.',
                    'impact' => 'Kesulitan menjaga operasional setelah program selesai.',
                    'level' => 'Sedang',
                    'mitigation' => 'Penyusunan anggaran realistis; pencatatan keuangan rutin; diversifikasi produk/layanan; efisiensi penggunaan listrik & nutrisi.',
                    'pic' => 'Tim Program SIRAMI + Bendahara Pesantren',
                    'indicator' => 'Biaya bulanan meningkat > 20% dari rencana.',
                    'contingency' => 'Penyesuaian skala produksi, penghematan biaya, mencari sumber dana tambahan/kemitraan.',
                    'icon' => '🪙',
                ],
                [
                    'no' => 3,
                    'category' => 'Partisipasi',
                    'main_risk' => 'Keterlibatan santri dan pengelola menurun setelah pendampingan awal.',
                    'impact' => 'Sistem tidak terawat, program berhenti.',
                    'level' => 'Sedang',
                    'mitigation' => 'Melibatkan santri sejak desain; penunjukan tim pengelola lokal; pelatihan dan mentoring bertahap; insentif non-finansial (pengakuan, sertifikat).',
                    'pic' => 'Tim Program SIRAMI + Pengurus Pesantren',
                    'indicator' => 'Jumlah santri aktif menurun, ketidakhadiran pada pelatihan.',
                    'contingency' => 'Pendekatan ulang, penyesuaian jadwal, regenerasi tim santri, pelibatan ustadz/pembina.',
                    'icon' => '👥',
                ],
                [
                    'no' => 4,
                    'category' => 'Lingkungan',
                    'main_risk' => 'Potensi pencemaran lingkungan jika pengelolaan limbah tidak tepat.',
                    'impact' => 'Menurunnya kualitas lingkungan sekitar.',
                    'level' => 'Rendah',
                    'mitigation' => 'Desain sistem sesuai standar lingkungan; pemanfaatan biofilter & fitoremediasi; pengelolaan limbah padat/cair yang aman; pemantauan rutin kualitas air buangan.',
                    'pic' => 'Tim Teknis SIRAMI + Pengelola Pesantren',
                    'indicator' => 'Air buangan berbau, kekeruhan meningkat, keluhan warga sekitar.',
                    'contingency' => 'Perbaikan sistem, pengalihan aliran, koordinasi dengan pemerintah desa/lingkungan.',
                    'icon' => '🌱',
                ],
                [
                    'no' => 5,
                    'category' => 'Keselamatan',
                    'main_risk' => 'Risiko kecelakaan kerja (listrik, peralatan, kolam).',
                    'impact' => 'Cedera ringan hingga berat pada santri atau pengelola.',
                    'level' => 'Rendah',
                    'mitigation' => 'SOP keselamatan kerja; pelatihan penggunaan alat; pengaman instalasi listrik; alat pelindung diri (APD).',
                    'pic' => 'Tim Program SIRAMI + Pengelola Pesantren',
                    'indicator' => 'Perlengkapan tidak digunakan, instalasi rusak, area kerja tidak aman.',
                    'contingency' => 'Perbaikan instalasi, penghentian aktivitas sementara, pertolongan pertama, rujukan ke fasilitas kesehatan.',
                    'icon' => '⛑️',
                ],
                [
                    'no' => 6,
                    'category' => 'Privasi Data',
                    'main_risk' => 'Penyalahgunaan data dokumentasi, identitas santri, atau informasi lokasi.',
                    'impact' => 'Pelanggaran privasi dan rasa tidak aman.',
                    'level' => 'Rendah',
                    'mitigation' => 'Persetujuan penggunaan data; anonimisir data sensitif; penyimpanan data yang aman; akses terbatas untuk tim terkait.',
                    'pic' => 'Tim Program SIRAMI',
                    'indicator' => 'Permintaan data oleh pihak tidak berwenang.',
                    'contingency' => 'Hentikan akses, evaluasi keamanan data, perbarui kebijakan privasi.',
                    'icon' => '🔒',
                ],
                [
                    'no' => 7,
                    'category' => 'Keberlanjutan',
                    'main_risk' => 'Program tidak berlanjut setelah pendanaan selesai karena kurangnya kapasitas atau dukungan.',
                    'impact' => 'Aset tidak dimanfaatkan, manfaat tidak berkelanjutan.',
                    'level' => 'Sedang',
                    'mitigation' => 'Pelatihan intensif & alih kelola bertahap; penyusunan rencana operasional 6–12 bulan; kemitraan dengan pihak lokal (pasar, pemerintah); monitoring pascaprogram.',
                    'pic' => 'Tim Program SIRAMI + Pengurus Pesantren',
                    'indicator' => 'Tidak ada tim pengelola aktif, produksi berhenti, tidak ada pembeli.',
                    'contingency' => 'Pendampingan tambahan, kemitraan, atau penyesuaian model usaha yang lebih sederhana.',
                    'icon' => '🔄',
                ],
                [
                    'no' => 8,
                    'category' => 'Etika & Perlindungan',
                    'main_risk' => 'Potensi diskriminasi, beban berlebih pada santri, atau ketidakadilan akses manfaat (gender, usia).',
                    'impact' => 'Santri tertentu tidak terlibat atau dirugikan.',
                    'level' => 'Rendah',
                    'mitigation' => 'Pendekatan inklusif dan non-diskriminatif; keterlibatan santri putra dan putri sesuai konteks; waktu kegiatan tidak mengganggu belajar; mekanisme pengaduan aman & rahasia.',
                    'pic' => 'Tim Program SIRAMI + Pembina Pesantren',
                    'indicator' => 'Keluhan terkait perlakuan tidak adil, beban berlebih, atau ketidaknyamanan.',
                    'contingency' => 'Tindak lanjut melalui mekanisme pengaduan, mediasi, dan penyesuaian kegiatan.',
                    'icon' => '⚖️',
                ],
            ],
            'grievance_mechanism' => [
                'channels' => [
                    ['name' => 'WhatsApp', 'desc' => 'Nomor pengelola pesantren'],
                    ['name' => 'Kotak Saran', 'desc' => 'Di area pesantren (dijaga kerahasiaannya)'],
                    ['name' => 'Lapor Langsung', 'desc' => 'Kepada pembina/ustadz atau Tim SIRAMI'],
                ],
                'protection_points' => [
                    'Mengutamakan keselamatan dan kesejahteraan santri.',
                    'Tidak ada pekerjaan berisiko atau di luar kapasitas santri.',
                    'Memperhatikan kebutuhan santri putri dan santri berkebutuhan khusus.',
                    'Kegiatan disesuaikan dengan jadwal belajar dan aturan pesantren.',
                    'Pendampingan dilakukan oleh tim yang memahami konteks pendidikan pesantren.',
                ],
            ],
        ];
    }

    /**
     * Slide: Skalabilitas dan Replikasi.
     *
     * @return array<string, mixed>
     */
    public static function getScalabilityReplicationData(): array
    {
        return [
            'title' => 'Skalabilitas dan Replikasi',
            'original_title' => 'Skalabitas dan Replikasi',
            'subtitle' => 'Dari satu pesantren menuju lebih banyak komunitas.',
            'description' => 'Model SIRAMI dirancang sebagai prototipe yang dapat direplikasi secara bertahap di pesantren dan komunitas perkotaan dengan kondisi serupa, setelah model awal tervalidasi dan memiliki bukti hasil yang cukup.',
            'goals' => 'Membangun model pengelolaan air, budidaya pangan, dan pemberdayaan santri yang dapat diadaptasi di pesantren dan komunitas lain dengan karakteristik serupa.',
            'stepwise_approach' => [
                ['step' => 1, 'title' => 'Validasi Model Awal', 'desc' => 'Bukti hasil, SOP, dan biaya nyata'],
                ['step' => 2, 'title' => 'Penyempurnaan & Paket', 'desc' => 'Penyempurnaan dan paket replikasi'],
                ['step' => 3, 'title' => 'Replikasi Bertahap', 'desc' => 'Replikasi bertahap ke lokasi lain'],
                ['step' => 4, 'title' => 'Pengembangan Jaringan', 'desc' => 'Pengembangan jaringan dan kemitraan'],
            ],
            'development_targets' => [
                [
                    'phase' => 'Tahap 1 (0–1 tahun)',
                    'scale' => '1 Lokasi',
                    'target' => 'Pesantren Al-Qur\'an Hidayatul Mustafid (Tasikmalaya)',
                    'badge' => 'Validasi model & SOP',
                ],
                [
                    'phase' => 'Tahap 2 (1–3 tahun)',
                    'scale' => '3–5 Lokasi',
                    'target' => 'Pesantren dan komunitas perkotaan di Tasikmalaya dan sekitarnya',
                    'badge' => 'Replikasi terbatas',
                ],
                [
                    'phase' => 'Tahap 3 (3–5 tahun)',
                    'scale' => '10+ Lokasi',
                    'target' => 'Pesantren, sekolah, dan komunitas urban-rural di Jawa Barat',
                    'badge' => 'Replikasi lebih luas melalui kemitraan',
                ],
            ],
            'potential_locations' => [
                'regions' => [
                    ['name' => 'Kota Tasikmalaya', 'desc' => 'Pusat pilot awal dan perluasan perkotaan'],
                    ['name' => 'Kab. Tasikmalaya & sekitarnya', 'desc' => 'Kawasan agraris dan jaringan pesantren'],
                    ['name' => 'Ciamis', 'desc' => 'Komunitas santri dan potensi agribisnis'],
                    ['name' => 'Garut', 'desc' => 'Wilayah dataran tinggi dan urban-rural'],
                ],
                'criteria' => [
                    'Pesantren atau komunitas dengan sumber air limbah (dapur, wudhu, atau IPAL)',
                    'Adanya lahan/lokasi yang sesuai (minimal 10–25 m²)',
                    'Dukungan pengelola dan komunitas',
                    'Potensi pasar untuk hasil budidaya (microgreen/ikan)',
                ],
            ],
            'requirements' => [
                [
                    'title' => 'Sumber Air Limbah Stabil',
                    'desc' => 'Dapur, wudhu, atau keluaran IPAL yang kontinu',
                    'icon' => '💧',
                ],
                [
                    'title' => 'Akses Listrik & Internet',
                    'desc' => 'Dibutuhkan untuk monitoring sensor IoT dan logbook',
                    'icon' => '📶',
                ],
                [
                    'title' => 'Lahan Minimal 10–25 m²',
                    'desc' => 'Lahan aman, terlindung, dan dekat sumber air',
                    'icon' => '📍',
                ],
                [
                    'title' => 'Kapasitas SDM Santri/Pengelola',
                    'desc' => 'Ada tim santri/pengelola yang ditugaskan khusus operasional',
                    'icon' => '👥',
                ],
                [
                    'title' => 'Komitmen Pengelola & Komunitas',
                    'desc' => 'Dukungan kyai/pimpinan dan komitmen alih kelola mandiri',
                    'icon' => '🤝',
                ],
                [
                    'title' => 'Potensi Pasar Lokal',
                    'desc' => 'Akses serapan hasil panen microgreen & ikan di sekitar lokasi',
                    'icon' => '🛍️',
                ],
            ],
            'replication_packages' => [
                [
                    'name' => 'Paket Dasar',
                    'cost' => '± Rp 12,5 juta',
                    'scale' => 'Skala kecil / pilot',
                    'capacity' => '± 20 kg microgreen/bulan',
                    'land_needed' => '10–15 m²',
                    'features' => [
                        'Sistem pengolahan air sederhana',
                        '20 Tray Microgreen',
                        'Budidaya ikan skala kecil',
                        'Sensor kualitas air dasar',
                        'Pelatihan & modul',
                        'Pendampingan awal',
                    ],
                ],
                [
                    'name' => 'Paket Standar',
                    'cost' => '± Rp 20–25 juta',
                    'scale' => 'Skala menengah',
                    'capacity' => '± 40–60 kg microgreen/bulan',
                    'land_needed' => '15–25 m²',
                    'features' => [
                        'Sistem pengolahan air lebih lengkap',
                        '40 Tray Microgreen',
                        'Budidaya ikan skala menengah',
                        'Sensor kualitas air lengkap (pH, TDS, suhu)',
                        'Dashboard monitoring',
                        'Pelatihan & pendampingan intensif',
                    ],
                ],
                [
                    'name' => 'Paket Lanjutan',
                    'cost' => '± Rp 35–50 juta',
                    'scale' => 'Skala besar / replikasi penuh',
                    'capacity' => '± 80–120 kg microgreen/bulan',
                    'land_needed' => '25–50 m²',
                    'features' => [
                        'Sistem pengolahan air terintegrasi',
                        '60 Tray Microgreen',
                        'Budidaya ikan skala besar',
                        'Sensor IoT lengkap + dashboard',
                        'Pelatihan, SOP, dan mentoring',
                        'Dukungan pengembangan usaha',
                    ],
                ],
            ],
            'implementation_standards' => [
                ['title' => 'SOP Teknis', 'desc' => 'Desain, operasional, dan perawatan berkala'],
                ['title' => 'Standar Kualitas Air', 'desc' => 'Sesuai baku mutu air untuk budidaya'],
                ['title' => 'Modul Pelatihan', 'desc' => 'Kurikulum aplikatif santri dan pengelola'],
                ['title' => 'Checklist Instalasi', 'desc' => 'Protokol uji fungsi alat dan perpipaan'],
                ['title' => 'Template Monitoring', 'desc' => 'Buku logbook harian & dashboard digital'],
                ['title' => 'Pedoman K3 & Limbah', 'desc' => 'Keselamatan kerja dan tata kelola limbah sirkular'],
                ['title' => 'Panduan Bisnis & Pasar', 'desc' => 'Pengembangan unit usaha santri dan pemasaran'],
            ],
            'required_partnerships' => [
                ['partner' => 'Pemerintah Daerah', 'role' => 'Dukungan izin, integrasi program lingkungan dan ketahanan pangan.'],
                ['partner' => 'Pesantren & Komunitas Lokal', 'role' => 'Penyedia lokasi, pengelola, dan penerima manfaat.'],
                ['partner' => 'Mitra Teknis (mis. Agronex)', 'role' => 'Dukungan sensor IoT, sistem monitoring, dan penguatan teknologi pertanian.'],
                ['partner' => 'Mitra Pasar', 'role' => 'Restoran, kafe, pasar lokal, dan jaringan distribusi.'],
                ['partner' => 'Mitra Pendanaan', 'role' => 'Dukungan replikasi, CSR, atau program pemerintah.'],
            ],
            'replication_strategy' => [
                ['step' => 1, 'period' => 'M0–M6', 'title' => 'Dokumentasi & Evaluasi Hasil Pilot', 'desc' => 'Validasi data empiris dari Pesantren Hidayatul Mustafid'],
                ['step' => 2, 'period' => 'M6–M12', 'title' => 'Penyempurnaan Model & Paket Replikasi', 'desc' => 'Standarisasi modul dan spesifikasi biaya unit'],
                ['step' => 3, 'period' => 'Tahun 2–3', 'title' => 'Replikasi Terbatas (3–5 Lokasi)', 'desc' => 'Ekspansi ke pesantren terpilih di Tasikmalaya & sekitarnya'],
                ['step' => 4, 'period' => 'Tahun 3–5', 'title' => 'Skala Lebih Luas (Jaringan Jabar)', 'desc' => 'Jaringan pesantren, sekolah, dan komunitas perkotaan Jawa Barat'],
            ],
            'important_notes' => [
                'Model belum diklaim siap direplikasi sebelum hasil pilot tervalidasi.',
                'Estimasi biaya dapat berubah tergantung kondisi lokasi, harga pasar, dan desain teknis.',
                'Replikasi dilakukan secara bertahap dengan pendampingan dan evaluasi ketat.',
                'Setiap lokasi perlu penyesuaian spesifik sesuai karakteristik air, lahan, dan dinamika komunitas.',
            ],
        ];
    }

    /**
     * Get evidence, reference, and attachment metadata matching the official graphic showcase.
     *
     * @return array<string, mixed>
     */
    public static function getBuktiReferensiData(): array
    {
        return [
            'title' => 'Bukti, Referensi, dan Lampiran',
            'subtitle' => 'Daftar dokumen pendukung tersedia di sini; rincian lengkap dapat diakses melalui website SIRAMI.',
            'short_url' => 'sirami.ihi.my.id/bukti-referensi',
            'full_url' => 'https://sirami.ihi.my.id/bukti-referensi',
            'qr_image' => asset('qr-bukti-referensi.svg'),
            'qr_png' => asset('qr-bukti-referensi.png'),
            'items' => [
                [
                    'number' => 1,
                    'title' => 'Data dan Kondisi Eksisting',
                    'description' => 'Profil lokasi, sumber air, fasilitas, dan survei kebutuhan.',
                    'icon' => 'document',
                    'category_slug' => 'profil-lokasi',
                    'related_doc_id' => 'DOC-02',
                    'details' => [
                        'Profil Pondok Pesantren Al-Qur\'an Hidayatul Mustafid Tasikmalaya',
                        'Pemetaan sumur bor dengan pompa listrik & potensi penghematan listrik',
                        'Inventarisasi fasilitas sanitasi santri, toren air, dan 2 dapur umum',
                        'Estimasi lahan budidaya produktif 350 bata di Kp. Sindangresik',
                    ],
                ],
                [
                    'number' => 2,
                    'title' => 'Hasil Uji Kualitas Air',
                    'description' => 'Hasil pengujian sebelum dan sesudah pengolahan.',
                    'icon' => 'beaker',
                    'category_slug' => 'kualitas-air',
                    'related_doc_id' => 'DOC-03',
                    'details' => [
                        'Parameter uji fisik: Kekeruhan (Turbidity) < 5 NTU & eliminasi bau',
                        'Parameter uji kimiawi: pH stabil 6.8 - 7.2 & TDS terukur < 300 ppm',
                        'Mekanisme multi-barrier: filtrasi fisik kerikil, pasir silika, karbon aktif & bio-ring',
                        'Protokol gate keselamatan air: air tidak dialirkan sebelum lolos verifikasi sensor & uji lab',
                    ],
                ],
                [
                    'number' => 3,
                    'title' => 'Instrumen Survei dan Pengumpulan Data',
                    'description' => 'Kuesioner, panduan wawancara, dan observasi.',
                    'icon' => 'clipboard',
                    'category_slug' => 'instrumen-survei',
                    'related_doc_id' => 'DOC-02',
                    'details' => [
                        'Kuesioner pola thaharah & debit penggunaan air wudu santri',
                        'Panduan wawancara mendalam pimpinan & pengurus fasilitas pondok',
                        'Lembar observasi mingguan fluktuasi debit air abu-abu (greywater)',
                        'Instrumen evaluasi persepsi & penerimaan konsumsi sayur microgreens santri',
                    ],
                ],
                [
                    'number' => 4,
                    'title' => 'Desain Teknis dan SOP',
                    'description' => 'Diagram sistem, alur kerja, SOP operasional dan perawatan.',
                    'icon' => 'gear',
                    'category_slug' => 'desain-teknis',
                    'related_doc_id' => 'DOC-03',
                    'details' => [
                        'Diagram sistem alur pengolahan air wudu terintegrasi mikro-kontroler IoT',
                        'SOP pembersihan media filtrasi & penggantian karbon aktif berkala',
                        'SOP penyemaian benih, pemeliharaan nutrisi, dan panen microgreens 7–14 hari',
                        'Prosedur keselamatan kerja (K3), sanitasi alat, dan pengelolaan lumpur IPAL',
                    ],
                ],
                [
                    'number' => 5,
                    'title' => 'Penawaran Harga dan RAB Pendukung',
                    'description' => 'Penawaran alat, bahan, dan kebutuhan instalasi.',
                    'icon' => 'coins',
                    'category_slug' => 'rab-anggaran',
                    'related_doc_id' => 'DOC-04',
                    'details' => [
                        'Rencana Anggaran Biaya (RAB) transparan Rp26.000.000 untuk pilot implementasi',
                        'Perangkat & Infrastruktur: Rp15.000.000 (IoT/sensor, microgreen, saung, dan irigasi)',
                        'Pelatihan, Tim & Konsumsi: Rp7.000.000 (Pelatihan/edukasi, tim pelaksana/transportasi, konsumsi)',
                        'Pemasaran & Biaya Pendukung: Rp4.000.000 (Marketing, packaging, uji lab, operasional, tak terduga)',
                        'Dokumentasi lengkap 12 pos belanja terverifikasi pada Pusat Dokumen',
                    ],
                ],
                [
                    'number' => 6,
                    'title' => 'Surat Dukungan dan Komitmen',
                    'description' => 'Dukungan pesantren, mitra, dan pihak terkait.',
                    'icon' => 'people',
                    'category_slug' => 'dokumen-mitra',
                    'related_doc_id' => 'DOC-01',
                    'details' => [
                        'Surat Dukungan Resmi Pimpinan Pesantren No. 18/X/PPHM/2026 (DOC-01)',
                        'Surat Pencatatan Hak Cipta DJKI Kemenkumham RI EC002026184233 (DOC-06)',
                        'Komitmen kolaborasi riset & pendampingan petani Tasikmalaya-Banjar',
                        'Pakta integritas kepemilikan inovasi oleh Mahasiswa UIN SGD Bandung',
                    ],
                ],
                [
                    'number' => 7,
                    'title' => 'Dokumentasi Kegiatan dan Partisipasi',
                    'description' => 'Foto diskusi, pelatihan, uji coba, dan kegiatan budidaya.',
                    'icon' => 'camera',
                    'category_slug' => 'dokumentasi-foto',
                    'related_doc_id' => 'DOC-02',
                    'details' => [
                        '45+ foto asli lapangan tersimpan di galeri dan repositori sistem',
                        'Foto observasi fisik toren air, sumur bor & IPAL Pesantren Hidayatul Mustafid',
                        'Foto diskusi bersama KH. Nandang Ja\'far Shiddiq dan asatidz pondok',
                        'Foto uji coba perangkat sensor pH analog & telemetri IoT',
                        'Foto interaksi santri dan demonstrasi penyemaian microgreens',
                    ],
                ],
                [
                    'number' => 8,
                    'title' => 'Referensi dan Pustaka',
                    'description' => 'Literatur, standar teknis, dan sumber data.',
                    'icon' => 'book',
                    'category_slug' => 'referensi-regulasi',
                    'related_doc_id' => 'DOC-05',
                    'details' => [
                        'WHO Guidelines for the Safe Use of Wastewater, Excreta and Greywater (Vol 2-3)',
                        'Permen Lingkungan Hidup No 11/2025: Baku Mutu Air Limbah Domestik',
                        'Jurnal USDA ARS: Kerapatan vitamin & fitonutrien microgreens 4–40x sayur dewasa',
                        'Kajian fiqih thaharah & pemanfaatan air musta\'mal untuk kemaslahatan lingkungan',
                    ],
                ],
            ],
        ];
    }

    /**
     * Get connection and call to action data matching the Mari Terhubung graphic with dual QR codes.
     *
     * @return array<string, mixed>
     */
    public static function getMariTerhubungData(): array
    {
        return [
            'headline_1' => 'Mari Terhubung,',
            'headline_2' => 'Mari Wujudkan Perubahan.',
            'description' => 'Dengan dukungan Anda, SIRAMI dapat menjadi langkah nyata untuk menghadirkan solusi air, pangan, dan peluang ekonomi bagi pesantren dan komunitas di Indonesia.',
            'pillars' => [
                [
                    'title' => 'Air',
                    'desc' => 'lebih aman dan terjaga',
                    'icon' => 'water',
                ],
                [
                    'title' => 'Pangan',
                    'desc' => 'berkualitas tersedia',
                    'icon' => 'plant',
                ],
                [
                    'title' => 'Santri',
                    'desc' => 'berdaya dan terampil',
                    'icon' => 'users',
                ],
                [
                    'title' => 'Model yang',
                    'desc' => 'dapat direplikasi ke lebih banyak komunitas',
                    'icon' => 'chart',
                ],
            ],
            'qr_website' => [
                'title' => 'Kunjungi Website SIRAMI',
                'url' => 'https://sirami.ihi.my.id/',
                'short_url' => 'sirami.ihi.my.id',
                'qr_svg' => asset('qr-sirami-home.svg'),
                'qr_png' => asset('qr-sirami-home.png'),
                'button_text' => 'Kunjungi Website SIRAMI',
            ],
            'qr_lampiran' => [
                'title' => 'Lihat Lampiran Lengkap',
                'url' => 'https://sirami.ihi.my.id/lampiran',
                'short_url' => 'sirami.ihi.my.id/lampiran',
                'qr_svg' => asset('qr-sirami-lampiran.svg'),
                'qr_png' => asset('qr-sirami-lampiran.png'),
                'button_text' => 'Lihat Lampiran Lengkap',
            ],
            'banner_image' => asset('foto/pesantren_water_banner.jpg'),
            'invitation' => [
                'title' => 'Kami Mengundang Anda',
                'desc' => 'untuk menjadi bagian dari perjalanan SIRAMI, melalui dukungan pendanaan, kemitraan, atau kolaborasi program.',
                'action_title' => 'Bersama, kita bisa',
                'action_desc' => 'mengalirkan perubahan yang nyata.',
            ],
        ];
    }
}
