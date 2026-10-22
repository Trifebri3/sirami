<script setup>
import { ref } from 'vue';

const props = defineProps({
    data: {
        type: Object,
        default: () => ({}),
    },
});

const activePackage = ref(3); // Default to Paket 4 (Integrated Community Implementation)
const selectedRegion = ref('Kota Tasikmalaya');

const defaultData = {
    title: 'Model Layanan, Skalabilitas & Replikasi',
    original_title: 'Skalabilitas dan Replikasi',
    subtitle: 'Dari satu pesantren percontohan menuju ekosistem komunitas mandiri berkelanjutan.',
    description: 'Model SIRAMI tidak sekadar memindahkan perangkat teknis, melainkan menghadirkan sistem terintegrasi yang menggabungkan pengolahan air, pemantauan sensor, produksi pangan bergizi, pelatihan santri, hingga pengembangan kewirausahaan sosial berbasis bukti.',
    goals: 'Membangun model pengelolaan air sirkular dan kemandirian pangan yang dapat diadaptasi oleh pesantren, lembaga pendidikan berasrama, dan komunitas perkotaan dengan transparansi operasional penuh.',
    stepwise_approach: [
        { step: 1, title: 'Validasi Model Awal', desc: 'Bukti hasil laboratorium, SOP baku, dan realisasi anggaran nyata' },
        { step: 2, title: 'Penyempurnaan & Modul', desc: 'Standardisasi kurikulum santri dan paket implementasi terpadu' },
        { step: 3, title: 'Replikasi Terkendali', desc: 'Penerapan bertahap ke lokasi mitra dengan karakteristik serupa' },
        { step: 4, title: 'Jejaring & Dampak', desc: 'Kolaborasi strategis dengan filantropi, pemerintah, dan offtaker pasar' },
    ],
    development_targets: [
        {
            phase: 'Tahap 1 (0–1 tahun)',
            scale: '1 Lokasi Pilot',
            target: "Pesantren Al-Qur'an Hidayatul Mustafid (Tasikmalaya)",
            badge: 'Validasi model, sensor & SOP',
            icon: 'seedling',
            color: 'emerald',
        },
        {
            phase: 'Tahap 2 (1–3 tahun)',
            scale: '3–5 Lokasi',
            target: 'Pesantren dan komunitas perkotaan di Tasikmalaya dan Priangan Timur',
            badge: 'Replikasi klaster terbatas',
            icon: 'sprout',
            color: 'teal',
        },
        {
            phase: 'Tahap 3 (3–5 tahun)',
            scale: '10+ Lokasi',
            target: 'Pesantren, madrasah, dan komunitas urban-rural di Jawa Barat',
            badge: 'Ekosistem kemitraan multipihak',
            icon: 'tree',
            color: 'cyan',
        },
    ],
    potential_locations: {
        regions: [
            { name: 'Kota Tasikmalaya', desc: 'Pusat pilot awal dan perluasan komunitas urban pesantren' },
            { name: 'Kab. Tasikmalaya', desc: 'Kawasan agraris dan jaringan pesantren santri mandiri' },
            { name: 'Ciamis', desc: 'Komunitas santri berdekatan dan potensi agribisnis lokal' },
            { name: 'Garut', desc: 'Wilayah sentra pangan Jawa Barat dan komunitas urban-rural' },
        ],
        criteria: [
            'Pesantren atau komunitas dengan sumber air wudu atau air limbah domestik non-blackwater',
            'Ketersediaan lahan atau ruang terlindung (minimal 10–25 m² untuk instalasi bertingkat)',
            'Dukungan penuh pimpinan pesantren/komunitas serta komitmen kader santri pengelola',
            'Akses ke pasar pangan sehat mikro (konsumen internal, katering, resto, dan pasar lokal)',
        ],
    },
    requirements: [
        {
            title: 'Sumber Air Baku Kontinu',
            desc: 'Aliran air wudu atau air domestik dengan debit stabil untuk proses pengolahan dan filtrasi.',
            icon: 'droplet',
        },
        {
            title: 'Akses Daya Listrik & Data',
            desc: 'Dibutuhkan untuk pompa sirkulasi air, mikrokontroler sensor IoT, dan pencatatan logbook.',
            icon: 'bolt',
        },
        {
            title: 'Lahan Minimal 10–25 m²',
            desc: 'Area terlindung dari cuaca ekstrem, dekat dengan sumber buangan air, dan aman dari banjir.',
            icon: 'layout',
        },
        {
            title: 'Kader Santri Pengelola',
            desc: 'Ada tim santri atau pengelola yang ditugaskan khusus mengoperasikan SOP harian secara bergilir.',
            icon: 'users',
        },
        {
            title: 'Komitmen Pimpinan Lembaga',
            desc: 'Dukungan kyai dan pengurus untuk keberlanjutan program dan pembukuan kas mandiri.',
            icon: 'handshake',
        },
        {
            title: 'Potensi Serapan Pasar',
            desc: 'Jejaring konsumen sehat, kantin internal santri, atau mitra offtaker di sekitar lokasi.',
            icon: 'shopping-bag',
        },
    ],
    replication_packages: [
        {
            name: 'Paket 1 — Assessment & Design',
            tag: 'Struktur Penawaran Awal',
            cost: 'Konsultasi / Pra-Pilot',
            scale: 'Kajian Awal & Desain Spesifik',
            duration: '2–4 Minggu',
            target_user: 'Pesantren, madrasah, atau komunitas yang baru memulai eksplorasi efisiensi air & pangan.',
            problem_solved: 'Ketiadaan data baku mutu air, belum ada pemetaan aset ABCD, dan ketiadaan blueprint teknis yang presisi.',
            deliverables: 'Dokumen Feasibility Report, peta aset komunitas, desain teknis modular, dan rincian RAB spesifik lokasi.',
            features: [
                'Pemetaan kebutuhan dan tantangan air komunitas',
                'Survei teknis lokasi, debit air, dan analisis spasial',
                'Analisis aset komunitas (Asset-Based Community Development)',
                'Rancangan arsitektur sistem filtrasi & budidaya',
                'Simulasi kebutuhan anggaran & estimasi biaya operasional',
            ],
            maintenance_model: 'Transfer rekomendasi awal & pendampingan penyusunan proposal pendanaan.',
        },
        {
            name: 'Paket 2 — Integrated Water & Monitoring',
            tag: 'Sub-Sistem Pengolahan Air',
            cost: '± Rp15.000.000 (Estimasi Komponen)',
            scale: 'Fokus Kualitas Air & Telemetri',
            duration: '1–2 Bulan Konstruksi + 3 Bulan Monitoring',
            target_user: 'Komunitas dengan limpasan air wudu melimpah namun belum termanfaatkan secara higienis.',
            problem_solved: 'Air buangan terbuang percuma tanpa penyaringan terukur dan tidak ada pemantauan kualitas parameter air.',
            deliverables: 'Sistem pengolahan air bertahap terpasang, modul sensor IoT (pH, TDS, kekeruhan), dan dashboard telemetri.',
            features: [
                'Rancang bangun bak sedimentasi fisik & bio-filtrasi media bertingkat',
                'Fitoremediasi tanaman lokal (Vetiver / tanaman uji)',
                'Sensor IoT terintegrasi ESP32 (pH, TDS, Turbidity, Suhu)',
                'Dashboard monitoring data dan indikator kualitas air',
                'Penyusunan SOP pembersihan filter & kalibrasi sensor',
                'Pelatihan teknis pengoperasian bagi tim teknisi santri',
            ],
            maintenance_model: 'Pembersihan berkala media filter (bulanan) dan penggantian elektroda sensor (tahunan).',
        },
        {
            name: 'Paket 3 — Food Production & Community Enterprise',
            tag: 'Sub-Sistem Pangan & Usaha',
            cost: '± Rp7.000.000 (Estimasi Komponen)',
            scale: 'Produksi Pangan Ruang Sempit',
            duration: 'Pendampingan 3 Bulan (Siklus Panen Mingguan)',
            target_user: 'Kelompok santri dan kader komunitas yang ingin membangun unit usaha mandiri sayur sehat.',
            problem_solved: 'Keterbatasan asupan gizi segar sayuran asrama dan belum adanya unit wirausaha santri berbasis pertanian perkotaan.',
            deliverables: 'Rak vertikal microgreens (20–40 tray), modul budidaya SOP, kemasan ramah lingkungan, dan pencatatan kas usaha.',
            features: [
                'Sistem rak vertikal microgreens efisien ruang dan hemat air',
                'Paket benih unggul non-GMO dan media tanam organik steril',
                'Modul pelatihan budidaya, higienitas panen, dan penanganan pascapanen',
                'Standardisasi mutu pangan dan desain kemasan produk',
                'Pendampingan pembukuan kas usaha dan kalkulasi HPP produk',
                'Jejaring pemasaran ke kantin, kafe, dan konsumen sadar gizi',
            ],
            maintenance_model: 'Pengadaan mandiri benih dan media tanam dari alokasi kas penjualan panen.',
        },
        {
            name: 'Paket 4 — Integrated Community Implementation',
            tag: 'Implementasi Penuh Pilot',
            cost: 'Rp26.000.000 (RAB Pilot Terpadu)',
            scale: 'Implementasi Ekosistem Komprehensif',
            duration: '6 Bulan Pilot Penuh Terstruktur',
            target_user: 'Pesantren percontohan dan mitra strategis (investor sosial, filantropi, CSR perusahaan).',
            problem_solved: 'Pendekatan teknologi yang terfragmentasi; menyatukan pengolahan air, IoT, pangan sehat, dan kemandirian ekonomi.',
            deliverables: 'Ekosistem sirkular SIRAMI operasional penuh, kader santri bersertifikat SOP, pembukuan mandiri, dan laporan SROI komprehensif.',
            features: [
                'Integrasi lengkap Modul A s/d E (Water treatment, Sensor IoT, Microgreens, Edukasi, Wirausaha)',
                '12 Pos belanja terukur (Perangkat & Infrastruktur, Pelatihan & Tim, Pemasaran & Pendukung)',
                'Penerapan metodologi HCD (Human-Centered Design) & ABCD',
                'Pelatihan intensif 6 bulan untuk kader santri & pengelola asrama',
                'Penyusunan 7 dokumen SOP baku (desain, operasional, K3, mutu air, logbook)',
                'Pengukuran dampak sosial (Theory of Change) dan kalkulasi evaluasi SROI',
                'Dukungan branding kemasan, sertifikasi higienitas, dan kanal penjualan',
            ],
            maintenance_model: 'Model pemeliharaan mandiri oleh komunitas melalui surplus kas operasional panen pangan.',
        },
    ],
    implementation_standards: [
        { title: 'SOP Teknis & Perpipaan', desc: 'Desain instalasi fisik, jalur pipa gravitasi, dan pemeliharaan berkala' },
        { title: 'Standar Kualitas Air', desc: 'Pengujian baku mutu air untuk budidaya tanaman pangan dan gerbang zero-risk' },
        { title: 'Modul Pelatihan Santri', desc: 'Kurikulum aplikatif HCD bagi santri dalam pemeliharaan dan panen higienis' },
        { title: 'Protokol Uji Sensor IoT', desc: 'Prosedur kalibrasi berkala sensor pH, TDS, dan turbidity dengan larutan standar' },
        { title: 'Template Logbook Digital', desc: 'Buku catatan harian kualitas air, siklus panen, dan pencatatan buku kas usaha' },
        { title: 'Pedoman K3 & Sanitasi', desc: 'Keselamatan kerja elektrikal, higienitas kontak air, dan tata kelola limbah sirkular' },
        { title: 'Panduan Usaha & HPP', desc: 'Kalkulasi harga pokok penjualan, strategi kemasan, dan saluran distribusi pasar' },
    ],
    required_partnerships: [
        { partner: 'Pemerintah Daerah & Kementerian', role: 'Dukungan kebijakan lingkungan, izin sanitasi, dan integrasi ketahanan pangan daerah.', icon: 'building' },
        { partner: 'Pesantren & Komunitas Lokal', role: 'Penyedia lokasi pilot, pengelola operasional harian, dan penerima manfaat langsung.', icon: 'home' },
        { partner: 'Mitra Teknis & Akademisi', role: 'Laboratorium uji air independen, validasi riset sensor IoT, dan penguatan kurikulum santri.', icon: 'cpu' },
        { partner: 'Mitra Pasar & Kuliner Sehat', role: 'Restoran, kafe, konsumen rumah tangga sehat, dan jaringan distribusi produk pangan.', icon: 'shopping-cart' },
        { partner: 'Lembaga Donatur & Investor Sosial', role: 'Penyedia hibah implementasi, dana ZISWAF produktif, dan pendanaan CSR korporasi.', icon: 'award' },
    ],
    replication_strategy: [
        { step: 1, period: 'Bulan 1–6', title: 'Dokumentasi & Validasi Pilot Tasikmalaya', desc: 'Pengujian empiris di Pesantren Hidayatul Mustafid, pengujian baku mutu air, dan pembukuan kas riil.' },
        { step: 2, period: 'Bulan 7–12', title: 'Standardisasi Blueprint & Modul Pelatihan', desc: 'Penyusunan modul kurikulum santri bersertifikat, open documentation, dan finalisasi paket biaya.' },
        { step: 3, period: 'Tahun 2–3', title: 'Replikasi Klaster Terbatas (3–5 Pesantren)', desc: 'Ekspansi terarah ke pesantren mitra di wilayah Priangan Timur dengan pendampingan teknis intensif.' },
        { step: 4, period: 'Tahun 3–5', title: 'Jejaring Inovasi Pangan Mandiri Jawa Barat', desc: 'Diseminasi bersama pemerintah dan lembaga filantropi ke jaringan madrasah dan komunitas perkotaan.' },
    ],
    important_notes: [
        'Model tidak diklaim siap beroperasi instan sebelum seluruh tahapan pilot tervalidasi dengan data empiris yang sahih.',
        'Estimasi biaya paket merupakan struktur penawaran awal; penyesuaian detail dilakukan sesuai karakteristik air dan ketersediaan lahan setempat.',
        'Replikasi dijalankan dengan pendampingan teknis terstruktur dan evaluasi ketat demi memastikan keberlanjutan pascainstalasi.',
        'Seluruh pemanfaatan air olahan wajib mematuhi protokol keamanan mutu air dan tidak diperkenankan untuk air minum langsung.',
    ],
};

const d = { ...defaultData, ...props.data };
</script>

<template>
    <section id="skalabilitas-replikasi" class="py-16 lg:py-24 bg-gradient-to-b from-white via-[#F7F5EF]/60 to-white border-b border-slate-200/80">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 space-y-12">
            
            <!-- SECTION HEADER -->
            <div class="space-y-4">
                <div class="flex flex-wrap items-center gap-2">
                    <span class="inline-flex items-center gap-1.5 px-3.5 py-1 rounded-full bg-[#E8E9E2] text-[#204E38] font-mono text-xs font-bold border border-[#A8B99B]/50 uppercase tracking-wider">
                        <svg class="w-3.5 h-3.5 text-[#204E38]" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 7h8m0 0v8m0-8l-8 8-4-4-6 6" />
                        </svg>
                        <span>ROADMAP PENGEMBANGAN JANGKA PANJANG</span>
                    </span>
                    <span class="inline-flex items-center gap-1.5 px-3 py-1 rounded-full bg-white text-slate-700 font-mono text-xs font-bold border border-slate-200">
                        <span>Pondok Pesantren Menuju Komunitas Jawa Barat</span>
                    </span>
                </div>

                <div class="grid grid-cols-1 lg:grid-cols-12 gap-8 items-start">
                    <div class="lg:col-span-7 space-y-3">
                        <h2 class="text-3xl sm:text-4xl lg:text-5xl font-black text-[#26312B] tracking-tight leading-tight">
                            {{ d.title }}
                        </h2>
                        <p class="text-lg sm:text-xl font-bold text-[#204E38]">
                            {{ d.subtitle }}
                        </p>
                        <p class="text-sm text-slate-600 leading-relaxed max-w-3xl">
                            {{ d.description }}
                        </p>
                    </div>

                    <!-- Top 2 Right Cards: Tujuan Replikasi & Pendekatan Bertahap -->
                    <div class="lg:col-span-5 space-y-4">
                        <!-- Tujuan Replikasi Card -->
                        <div class="p-5 rounded-2xl bg-white border border-[#A8B99B]/50 shadow-xs flex items-start gap-4">
                            <div class="w-11 h-11 rounded-xl bg-[#204E38] text-white flex items-center justify-center shrink-0 shadow-xs">
                                <svg class="w-5 h-5 text-white" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z" />
                                </svg>
                            </div>
                            <div class="space-y-1">
                                <h3 class="text-xs font-bold uppercase tracking-wider text-[#204E38]">
                                    Tujuan Replikasi
                                </h3>
                                <p class="text-xs text-slate-700 leading-relaxed font-medium">
                                    {{ d.goals }}
                                </p>
                            </div>
                        </div>

                        <!-- Pendekatan Bertahap Card -->
                        <div class="p-5 rounded-2xl bg-gradient-to-br from-[#163828] via-[#204E38] to-[#163828] text-white shadow-md space-y-3 border border-[#A8B99B]/30">
                            <div class="flex items-center justify-between">
                                <h3 class="text-xs font-bold uppercase tracking-wider text-[#A8B99B] flex items-center gap-2">
                                    <svg class="w-4 h-4" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5H7a2 2 0 00-2 2v12a2 2 0 002 2h10a2 2 0 002-2V7a2 2 0 00-2-2h-2M9 5a2 2 0 002 2h2a2 2 0 002-2M9 5a2 2 0 012-2h2a2 2 0 012 2" />
                                    </svg>
                                    <span>Pendekatan Bertahap</span>
                                </h3>
                                <span class="text-[10px] text-slate-300 font-mono">4 Langkah Kunci</span>
                            </div>
                            <div class="grid grid-cols-2 gap-2 text-xs">
                                <div
                                    v-for="step in d.stepwise_approach"
                                    :key="step.step"
                                    class="p-2.5 rounded-lg bg-white/10 border border-white/10 space-y-0.5"
                                >
                                    <div class="flex items-center gap-1.5 font-bold text-[#A8B99B] text-[11px]">
                                        <span class="w-4 h-4 rounded-full bg-[#123624] text-[#A8B99B] flex items-center justify-center text-[10px] font-mono border border-[#A8B99B]/40">
                                            {{ step.step }}
                                        </span>
                                        <span>{{ step.title }}</span>
                                    </div>
                                    <p class="text-[10px] text-slate-200 pl-5 leading-snug">
                                        {{ step.desc }}
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- 1. TARGET PENGEMBANGAN (3 TAHAP: 0-1 THN, 1-3 THN, 3-5 THN) -->
            <div class="space-y-4">
                <div class="flex items-center gap-2">
                    <span class="w-7 h-7 rounded-lg bg-[#204E38] text-white flex items-center justify-center font-black text-xs font-mono">
                        01
                    </span>
                    <h3 class="text-xl sm:text-2xl font-black text-[#26312B]">
                        Target Pengembangan Skala Program
                    </h3>
                </div>

                <div class="grid grid-cols-1 md:grid-cols-3 gap-6">
                    <div
                        v-for="(target, idx) in d.development_targets"
                        :key="idx"
                        class="p-6 rounded-2xl bg-white border border-slate-200/90 shadow-xs hover:border-[#204E38] hover:shadow-md transition-all flex flex-col justify-between space-y-4 relative overflow-hidden group"
                    >
                        <div class="absolute top-0 left-0 right-0 h-1.5" :class="idx === 0 ? 'bg-[#204E38]' : idx === 1 ? 'bg-[#356B61]' : 'bg-[#A8B99B]'"></div>
                        
                        <div class="space-y-3 pt-1">
                            <div class="flex items-center justify-between">
                                <div class="w-9 h-9 rounded-xl bg-[#F7F5EF] text-[#204E38] flex items-center justify-center border border-[#A8B99B]/40">
                                    <svg v-if="idx === 0" class="w-5 h-5" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 19V5m0 0a7 7 0 0 0-7 7m7-7a7 7 0 0 1 7 7" />
                                    </svg>
                                    <svg v-else-if="idx === 1" class="w-5 h-5" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 16l4.586-4.586a2 2 0 012.828 0L16 16m-2-2l1.586-1.586a2 2 0 012.828 0L20 14m-6-6h.01M6 20h12a2 2 0 002-2V6a2 2 0 00-2-2H6a2 2 0 00-2 2v12a2 2 0 002 2z" />
                                    </svg>
                                    <svg v-else class="w-5 h-5" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 12a9 9 0 01-9 9m9-9a9 9 0 00-9-9m9 9H3m9 9a9 9 0 01-9-9m9 9c1.657 0 3-4.03 3-9s-1.343-9-3-9m0 18c-1.657 0-3-4.03-3-9s1.343-9 3-9m-9 9a9 9 0 019-9" />
                                    </svg>
                                </div>
                                <span class="px-2.5 py-0.5 rounded-full text-[10px] font-bold uppercase tracking-wider bg-slate-100 text-slate-700 font-mono">
                                    {{ target.phase }}
                                </span>
                            </div>
                            
                            <div>
                                <span class="text-xs font-mono font-bold uppercase text-slate-400">Skala Intervensi</span>
                                <h4 class="text-2xl font-black text-[#26312B] group-hover:text-[#204E38] transition">
                                    {{ target.scale }}
                                </h4>
                            </div>

                            <p class="text-xs text-slate-700 leading-relaxed font-medium">
                                {{ target.target }}
                            </p>
                        </div>

                        <div class="pt-3 border-t border-slate-100">
                            <span class="inline-flex items-center gap-1.5 px-3 py-1 rounded-md text-xs font-bold bg-[#F7F5EF] text-[#204E38] border border-[#A8B99B]/50">
                                <svg class="w-3.5 h-3.5 text-[#204E38]" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5" d="M5 13l4 4L19 7" />
                                </svg>
                                <span>{{ target.badge }}</span>
                            </span>
                        </div>
                    </div>
                </div>
            </div>

            <!-- 2. LOKASI POTENSIAL & PERSYARATAN REPLIKASI (2-COLUMN GRID) -->
            <div class="grid grid-cols-1 lg:grid-cols-12 gap-8 items-start">
                
                <!-- Left: Lokasi Potensial & Kriteria Lokasi -->
                <div class="lg:col-span-5 p-6 rounded-2xl bg-white border border-slate-200/90 shadow-xs space-y-6">
                    <div class="flex items-center gap-2">
                        <span class="w-7 h-7 rounded-lg bg-[#204E38] text-white flex items-center justify-center font-black text-xs font-mono">
                            02
                        </span>
                        <div>
                            <h3 class="text-base font-bold text-[#26312B]">
                                Lokasi Potensial Replikasi
                            </h3>
                            <p class="text-xs text-slate-500">Klaster Priangan Timur Jawa Barat</p>
                        </div>
                    </div>

                    <!-- Visual Map Badge Hub -->
                    <div class="p-4 rounded-xl bg-gradient-to-br from-[#163828] via-[#204E38] to-[#163828] text-white space-y-3 border border-[#A8B99B]/30">
                        <div class="flex items-center justify-between text-xs">
                            <span class="text-[#A8B99B] font-mono font-bold flex items-center gap-1.5">
                                <svg class="w-4 h-4 text-[#A8B99B]" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z" />
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 11a3 3 0 11-6 0 3 3 0 016 0z" />
                                </svg>
                                <span>Pusat & Koridor Replikasi</span>
                            </span>
                            <span class="text-slate-300 text-[10px]">Klik untuk info</span>
                        </div>

                        <div class="grid grid-cols-2 gap-2">
                            <button
                                v-for="reg in d.potential_locations.regions"
                                :key="reg.name"
                                type="button"
                                @click="selectedRegion = reg.name"
                                class="p-2.5 rounded-lg text-left transition text-xs font-bold flex flex-col justify-between cursor-pointer"
                                :class="selectedRegion === reg.name ? 'bg-white text-[#204E38] shadow-xs' : 'bg-white/10 text-slate-200 hover:bg-white/20'"
                            >
                                <span class="text-xs">{{ reg.name }}</span>
                                <span class="text-[9px] font-normal opacity-80 mt-1 line-clamp-1">{{ reg.desc }}</span>
                            </button>
                        </div>

                        <div class="p-3 rounded-lg bg-[#123624] border border-[#A8B99B]/30 text-xs text-slate-200 space-y-1">
                            <span class="text-[#A8B99B] font-bold text-[11px] block">{{ selectedRegion }}</span>
                            <p class="text-[11px] text-slate-300 leading-snug">
                                {{ d.potential_locations.regions.find(r => r.name === selectedRegion)?.desc }}
                            </p>
                        </div>
                    </div>

                    <!-- Kriteria Lokasi -->
                    <div class="space-y-2.5">
                        <h4 class="text-xs font-bold uppercase tracking-wider text-slate-700 flex items-center gap-2">
                            <svg class="w-4 h-4 text-[#204E38]" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7" />
                            </svg>
                            <span>Kriteria Kesiapan Lokasi:</span>
                        </h4>
                        <ul class="space-y-2 text-xs text-slate-700">
                            <li
                                v-for="(crit, idx) in d.potential_locations.criteria"
                                :key="idx"
                                class="flex items-start gap-2.5 p-2 rounded-lg bg-[#F7F5EF] border border-[#A8B99B]/40"
                            >
                                <span class="text-[#204E38] font-bold text-sm shrink-0">✓</span>
                                <span class="leading-relaxed">{{ crit }}</span>
                            </li>
                        </ul>
                    </div>
                </div>

                <!-- Right: Persyaratan Replikasi (6 Grid Items) -->
                <div class="lg:col-span-7 p-6 rounded-2xl bg-white border border-slate-200/90 shadow-xs space-y-6">
                    <div class="flex items-center gap-2">
                        <span class="w-7 h-7 rounded-lg bg-[#204E38] text-white flex items-center justify-center font-black text-xs font-mono">
                            03
                        </span>
                        <div>
                            <h3 class="text-base font-bold text-[#26312B]">
                                Persyaratan Replikasi Komunitas
                            </h3>
                            <p class="text-xs text-slate-500">Kesiapan sarana fisik & kapasitas tim santri penerima manfaat</p>
                        </div>
                    </div>

                    <div class="grid grid-cols-1 sm:grid-cols-2 gap-3.5">
                        <div
                            v-for="(req, idx) in d.requirements"
                            :key="idx"
                            class="p-4 rounded-xl bg-slate-50 border border-slate-200 hover:border-[#204E38] hover:bg-[#F7F5EF]/50 transition space-y-1.5"
                        >
                            <div class="flex items-center gap-2">
                                <div class="w-7 h-7 rounded-lg bg-[#E8E9E2] text-[#204E38] flex items-center justify-center shrink-0">
                                    <svg v-if="req.icon === 'droplet'" class="w-4 h-4" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 2.69l5.66 5.66a8 8 0 1 1-11.31 0z" />
                                    </svg>
                                    <svg v-else-if="req.icon === 'bolt'" class="w-4 h-4" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 10V3L4 14h7v7l9-11h-7z" />
                                    </svg>
                                    <svg v-else-if="req.icon === 'layout'" class="w-4 h-4" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 5a1 1 0 011-1h14a1 1 0 011 1v2a1 1 0 01-1 1H5a1 1 0 01-1-1V5zM4 13a1 1 0 011-1h6a1 1 0 011 1v6a1 1 0 01-1 1H5a1 1 0 01-1-1v-6zM16 13a1 1 0 011-1h2a1 1 0 011 1v6a1 1 0 01-1 1h-2a1 1 0 01-1-1v-6z" />
                                    </svg>
                                    <svg v-else-if="req.icon === 'users'" class="w-4 h-4" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 4.354a4 4 0 110 5.292M15 21H3v-1a6 6 0 0112 0v1zm0 0h6v-1a6 6 0 00-9-5.197M13 7a4 4 0 11-8 0 4 4 0 018 0z" />
                                    </svg>
                                    <svg v-else-if="req.icon === 'handshake'" class="w-4 h-4" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M14 10h4.764a2 2 0 011.789 2.894l-3.5 7A2 2 0 0115.263 21h-4.017c-.163 0-.326-.02-.485-.06L7 20m7-10V5a2 2 0 00-2-2h-.095c-.5 0-.905.405-.905.905 0 .714-.211 1.412-.608 2.006L7 11v9m7-10h-2M7 20H5a2 2 0 01-2-2v-6a2 2 0 012-2h2.5" />
                                    </svg>
                                    <svg v-else class="w-4 h-4" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M16 11V7a4 4 0 00-8 0v4M5 9h14l1 12H4L5 9z" />
                                    </svg>
                                </div>
                                <h4 class="text-xs font-bold text-[#26312B]">
                                    {{ req.title }}
                                </h4>
                            </div>
                            <p class="text-[11px] text-slate-600 leading-relaxed">
                                {{ req.desc }}
                            </p>
                        </div>
                    </div>
                </div>
            </div>

            <!-- 3. KATALOG PAKET LAYANAN & IMPLEMENTASI (4 TIERED COMPARISON CARDS) -->
            <div class="space-y-6">
                <div class="flex flex-col sm:flex-row sm:items-center justify-between gap-4">
                    <div class="flex items-center gap-2">
                        <span class="w-7 h-7 rounded-lg bg-[#204E38] text-white flex items-center justify-center font-black text-xs font-mono">
                            04
                        </span>
                        <div>
                            <h3 class="text-xl sm:text-2xl font-black text-[#26312B]">
                                Katalog Paket Layanan & Implementasi
                            </h3>
                            <p class="text-xs text-slate-500">Struktur penawaran awal implementasi berjenjang sesuai kapasitas komunitas dan skala pilot</p>
                        </div>
                    </div>

                    <!-- Package Selector Tabs -->
                    <div class="inline-flex p-1 rounded-xl bg-slate-100 border border-slate-200 text-xs font-bold">
                        <button
                            v-for="(pkg, idx) in d.replication_packages"
                            :key="pkg.name"
                            type="button"
                            @click="activePackage = idx"
                            class="px-3 py-1.5 rounded-lg transition cursor-pointer"
                            :class="activePackage === idx ? 'bg-[#204E38] text-white shadow-2xs font-extrabold' : 'text-slate-600 hover:text-slate-900'"
                        >
                            Paket {{ idx + 1 }}
                        </button>
                    </div>
                </div>

                <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-6">
                    <div
                        v-for="(pkg, idx) in d.replication_packages"
                        :key="pkg.name"
                        class="p-6 rounded-2xl bg-white border transition-all flex flex-col justify-between space-y-5 relative overflow-hidden"
                        :class="activePackage === idx ? 'border-2 border-[#204E38] shadow-lg ring-2 ring-[#A8B99B]/40' : 'border-slate-200/90 shadow-xs hover:border-slate-300'"
                    >
                        <!-- Top Ribbon Badge -->
                        <div class="space-y-3">
                            <div class="flex items-center justify-between">
                                <span class="px-2.5 py-1 rounded-full text-[10px] font-bold uppercase tracking-wider" :class="idx === 3 ? 'bg-[#E8E9E2] text-[#204E38] border border-[#A8B99B]' : 'bg-slate-100 text-slate-700'">
                                    {{ pkg.scale }}
                                </span>
                                <span v-if="idx === 3" class="text-[10px] font-mono font-bold text-[#204E38] bg-[#F7F5EF] px-2 py-0.5 rounded border border-[#A8B99B]/60">
                                    Pilot Penuh
                                </span>
                            </div>

                            <div>
                                <h4 class="text-base font-black text-[#26312B] leading-tight">
                                    {{ pkg.name }}
                                </h4>
                                <div class="text-base font-black text-[#204E38] mt-1 font-mono">
                                    {{ pkg.cost }}
                                </div>
                            </div>

                            <div class="space-y-1.5 pt-1 text-xs">
                                <div>
                                    <span class="text-[10px] font-bold uppercase tracking-wider text-slate-400 block">Sasaran Pengguna:</span>
                                    <p class="text-[11px] text-slate-600 leading-snug">{{ pkg.target_user }}</p>
                                </div>
                                <div>
                                    <span class="text-[10px] font-bold uppercase tracking-wider text-slate-400 block">Masalah yang Dijawab:</span>
                                    <p class="text-[11px] text-slate-600 leading-snug">{{ pkg.problem_solved }}</p>
                                </div>
                            </div>

                            <!-- Features List -->
                            <div class="space-y-1.5 pt-2 border-t border-slate-100">
                                <span class="text-[10px] font-bold uppercase tracking-wider text-slate-400 block">Komponen yang Disediakan:</span>
                                <ul class="space-y-1 text-[11px] text-slate-700">
                                    <li
                                        v-for="(feat, fIdx) in pkg.features"
                                        :key="fIdx"
                                        class="flex items-start gap-1.5"
                                    >
                                        <span class="text-[#204E38] font-bold shrink-0 mt-0.5">✓</span>
                                        <span class="leading-snug">{{ feat }}</span>
                                    </li>
                                </ul>
                            </div>

                            <div class="pt-2 text-[10px] text-slate-500 border-t border-slate-100 space-y-1">
                                <div><strong>Durasi:</strong> {{ pkg.duration }}</div>
                                <div><strong>Luaran:</strong> {{ pkg.deliverables }}</div>
                            </div>
                        </div>

                        <!-- Card Action -->
                        <div class="pt-3 border-t border-slate-100">
                            <a
                                href="https://wa.me/6282215891392?text=Halo%20Tim%20SIRAMI,%20kami%20tertarik%20konsultasi%20implementasi"
                                target="_blank"
                                class="w-full py-2.5 rounded-xl text-center text-xs font-bold block transition cursor-pointer"
                                :class="idx === 3 ? 'bg-[#204E38] hover:bg-[#163828] text-white shadow-xs' : 'bg-slate-100 hover:bg-slate-200 text-slate-800'"
                            >
                                Konsultasi Paket {{ idx + 1 }}
                            </a>
                        </div>
                    </div>
                </div>
            </div>

            <!-- 4. STANDAR IMPLEMENTASI & KEMITRAAN YANG DIBUTUHKAN (2-COLUMN GRID) -->
            <div class="grid grid-cols-1 lg:grid-cols-12 gap-8 items-start">
                
                <!-- Left: Standar Implementasi (7 SOP & Protocols) -->
                <div class="lg:col-span-6 p-6 rounded-2xl bg-white border border-slate-200/90 shadow-xs space-y-4">
                    <div class="flex items-center gap-2">
                        <span class="w-7 h-7 rounded-lg bg-[#204E38] text-white flex items-center justify-center font-black text-xs font-mono">
                            05
                        </span>
                        <div>
                            <h3 class="text-base font-bold text-[#26312B]">
                                Standar Implementasi SOP
                            </h3>
                            <p class="text-xs text-slate-500">Pedoman baku teknis, keselamatan, dan tata kelola</p>
                        </div>
                    </div>

                    <div class="space-y-2">
                        <div
                            v-for="(std, idx) in d.implementation_standards"
                            :key="idx"
                            class="p-3 rounded-xl bg-slate-50 hover:bg-[#F7F5EF] border border-slate-200 transition flex items-start gap-3"
                        >
                            <span class="w-6 h-6 rounded-lg bg-[#E8E9E2] text-[#204E38] font-bold text-xs flex items-center justify-center shrink-0 mt-0.5">
                                {{ idx + 1 }}
                            </span>
                            <div class="space-y-0.5">
                                <h4 class="text-xs font-bold text-[#26312B]">
                                    {{ std.title }}
                                </h4>
                                <p class="text-[11px] text-slate-600 leading-snug">
                                    {{ std.desc }}
                                </p>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Right: Kemitraan yang Dibutuhkan (5 Sectors) -->
                <div class="lg:col-span-6 p-6 rounded-2xl bg-white border border-slate-200/90 shadow-xs space-y-4">
                    <div class="flex items-center gap-2">
                        <span class="w-7 h-7 rounded-lg bg-[#204E38] text-white flex items-center justify-center font-black text-xs font-mono">
                            06
                        </span>
                        <div>
                            <h3 class="text-base font-bold text-[#26312B]">
                                Kemitraan yang Dibutuhkan
                            </h3>
                            <p class="text-xs text-slate-500">Ekosistem kolaboratif multi-pihak penopang replikasi</p>
                        </div>
                    </div>

                    <div class="space-y-2.5">
                        <div
                            v-for="(part, idx) in d.required_partnerships"
                            :key="idx"
                            class="p-3.5 rounded-xl bg-slate-50 hover:bg-[#F7F5EF] border border-slate-200 transition flex items-start gap-3"
                        >
                            <div class="w-8 h-8 rounded-lg bg-[#E8E9E2] text-[#204E38] flex items-center justify-center shrink-0 mt-0.5">
                                <svg v-if="part.icon === 'building'" class="w-4 h-4" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 21V5a2 2 0 00-2-2H7a2 2 0 00-2 2v16m14 0h2m-2 0h-5m-9 0H3m2 0h5M9 7h1m-1 4h1m4-4h1m-1 4h1m-5 10v-5a1 1 0 011-1h2a1 1 0 011 1v5m-4 0h4" />
                                </svg>
                                <svg v-else-if="part.icon === 'home'" class="w-4 h-4" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 12l2-2m0 0l7-7 7 7M5 10v10a1 1 0 001 1h3m10-11l2 2m-2-2v10a1 1 0 01-1 1h-3m-6 0a1 1 0 001-1v-4a1 1 0 011-1h2a1 1 0 011 1v4a1 1 0 001 1m-6 0h6" />
                                </svg>
                                <svg v-else-if="part.icon === 'cpu'" class="w-4 h-4" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 3v2m6-2v2M9 19v2m6-2v2M5 9H3m2 6H3m18-6h-2m2 6h-2M7 19h10a2 2 0 002-2V7a2 2 0 00-2-2H7a2 2 0 00-2 2v10a2 2 0 002 2zM9 9h6v6H9V9z" />
                                </svg>
                                <svg v-else-if="part.icon === 'shopping-cart'" class="w-4 h-4" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 3h2l.4 2M7 13h10l4-8H5.4M7 13L5.4 5M7 13l-2.293 2.293c-.63.63-.184 1.707.707 1.707H17m0 0a2 2 0 100 4 2 2 0 000-4zm-8 2a2 2 0 11-4 0 2 2 0 014 0z" />
                                </svg>
                                <svg v-else class="w-4 h-4" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8c-1.657 0-3 .895-3 2s1.343 2 3 2 3 .895 3 2-1.343 2-3 2m0-8c1.11 0 2.08.402 2.599 1M12 8V7m0 1v8m0 0v1m0-1c-1.11 0-2.08-.402-2.599-1M21 12a9 9 0 11-18 0 9 9 0 0118 0z" />
                                </svg>
                            </div>
                            <div class="space-y-0.5">
                                <h4 class="text-xs font-bold text-[#26312B]">
                                    {{ part.partner }}
                                </h4>
                                <p class="text-[11px] text-slate-600 leading-snug">
                                    {{ part.role }}
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- 5. STRATEGI REPLIKASI (4-STEP HORIZONTAL PIPELINE) -->
            <div class="p-6 sm:p-8 rounded-3xl bg-gradient-to-br from-[#163828] via-[#204E38] to-[#163828] text-white border border-[#A8B99B]/30 shadow-xl space-y-6">
                <div class="flex flex-col sm:flex-row sm:items-center justify-between gap-4">
                    <div class="flex items-center gap-2">
                        <span class="w-7 h-7 rounded-lg bg-[#A8B99B] text-[#163828] flex items-center justify-center font-black text-xs font-mono">
                            07
                        </span>
                        <div>
                            <h3 class="text-xl font-bold text-white">
                                Strategi Replikasi Bertahap
                            </h3>
                            <p class="text-xs text-slate-200">Dari pembuktian pilot hingga jaringan skala provinsi Jawa Barat</p>
                        </div>
                    </div>
                    <span class="text-xs font-mono font-bold px-3 py-1 rounded-full bg-white/10 text-[#A8B99B] border border-white/20">
                        Horizon Waktu: 0 s/d 5 Tahun
                    </span>
                </div>

                <div class="grid grid-cols-1 md:grid-cols-4 gap-4 relative">
                    <div
                        v-for="(strat, idx) in d.replication_strategy"
                        :key="strat.step"
                        class="p-5 rounded-2xl bg-white/10 border border-white/10 space-y-2.5 relative flex flex-col justify-between"
                    >
                        <div class="space-y-2">
                            <div class="flex items-center justify-between">
                                <span class="w-7 h-7 rounded-full bg-[#204E38] text-white font-mono font-bold text-xs flex items-center justify-center border border-[#A8B99B]/50">
                                    {{ strat.step }}
                                </span>
                                <span class="text-[11px] font-mono font-bold text-[#A8B99B] bg-[#123624] px-2 py-0.5 rounded border border-[#A8B99B]/30">
                                    {{ strat.period }}
                                </span>
                            </div>
                            <h4 class="text-xs font-bold text-white leading-snug">
                                {{ strat.title }}
                            </h4>
                            <p class="text-[11px] text-slate-200 leading-relaxed">
                                {{ strat.desc }}
                            </p>
                        </div>

                        <div v-if="idx < 3" class="hidden md:block absolute -right-3 top-1/2 -translate-y-1/2 z-10 text-[#A8B99B] font-bold text-base">
                            &rarr;
                        </div>
                    </div>
                </div>
            </div>

            <!-- 6. CATATAN PENTING & PRINSIP KEHATI-HATIAN -->
            <div class="p-6 rounded-2xl bg-[#F7F5EF] border border-[#A8B99B] text-[#26312B] space-y-3 shadow-xs">
                <div class="flex items-center gap-2">
                    <svg class="w-5 h-5 text-[#204E38]" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 9v2m0 4h.01m-6.938 4h13.856c1.54 0 2.502-1.667 1.732-3L13.732 4c-.77-1.333-2.694-1.333-3.464 0L3.34 16c-.77 1.333.192 3 1.732 3z" />
                    </svg>
                    <h3 class="text-xs font-bold uppercase tracking-wider text-[#204E38]">
                        Catatan Transparansi & Prinsip Kehati-hatian:
                    </h3>
                </div>

                <ul class="grid grid-cols-1 sm:grid-cols-2 gap-2 text-xs text-slate-700">
                    <li
                        v-for="(note, idx) in d.important_notes"
                        :key="idx"
                        class="flex items-start gap-2 bg-white p-2.5 rounded-lg border border-slate-200"
                    >
                        <span class="text-[#204E38] font-bold text-sm shrink-0">•</span>
                        <span class="leading-relaxed">{{ note }}</span>
                    </li>
                </ul>
            </div>

        </div>
    </section>
</template>
