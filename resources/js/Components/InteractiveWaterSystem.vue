<script setup>
import { ref } from 'vue';
import { Link } from '@inertiajs/vue3';

const isPaused = ref(false);

const components = [
    {
        id: 'sumber',
        step: '00',
        name: 'Sumber Air Abu-Abu Terpilih',
        sub: 'Limpasan Wudu Santri',
        iconType: 'mosque',
        img: '/foto/kosndisi pesantree/torenair.webp',
        status: 'Terpasang & Teridentifikasi',
        statusColor: 'emerald',
        desc: 'Air wudu santri memiliki karakteristik abu-abu ringan (greywater) yang relatif bersih dari kontaminan deterjen keras dibanding limbah domestik umum. Dipisahkan secara fisik dari saluran limbah toilet (blackwater) untuk menjamin standar higienitas awal.',
        metrics: [
            { label: 'Debit Estimasi', value: '1.500 - 3.000 L/hari', sub: 'Konsentrasi 5 waktu salat' },
            { label: 'Karakteristik', value: 'Bebas Sabun Keras', sub: 'Air bilasan wudu mukim' },
            { label: 'Status Jalur', value: 'Pipa Terpisah Fisik', sub: 'Zero blackwater mixing' },
        ],
        standards: 'WHO Greywater Guidelines Vol. 2 (Safe Domestic Reuse)',
    },
    {
        id: 'bak_awal',
        step: '01',
        name: 'Bak Awal Penampung & Penyeimbang',
        sub: 'Equalization Tank & Buffering',
        iconType: 'bucket',
        img: '/foto/kosndisi pesantree/tempatair.webp',
        status: 'Fasilitas Eksisting Tersedia',
        statusColor: 'emerald',
        desc: 'Menampung debit limpasan wudu pada jam-jam puncak (Subuh, Zuhur, Asar, Magrib, Isya) untuk menstabilkan laju alir (equalization) sebelum memasuki tahapan penyaringan fisik dan biologis.',
        metrics: [
            { label: 'Kapasitas Tampung', value: '1.000 - 2.000 Liter', sub: 'Buffer fluktuasi puncak' },
            { label: 'Sensor Level', value: 'Ultrasonic / Float', sub: 'Deteksi otomatis ambang batas' },
            { label: 'Aliran Keluar', value: 'Gravitasi Teratur', sub: 'Hemat listrik tanpa pompa hisap' },
        ],
        standards: 'SNI 03-2398-2002 Tata Cara Perencanaan Tangki Sedimentasi',
    },
    {
        id: 'penyaringan',
        step: '02',
        name: 'Penyaringan Sampah & Padatan Kasar',
        sub: 'Mechanical Physical Screen',
        iconType: 'filter',
        img: '/foto/kosndisi pesantree/tempatair.webp',
        status: 'Rancangan Teknis Teruji',
        statusColor: 'teal',
        desc: 'Menyaring partikel kasar, debu, rambut, atau guguran daun menggunakan saringan kawat baja tahan karat (mesh screen) bertingkat secara mekanis sebelum air dialirkan ke media biofilter.',
        metrics: [
            { label: 'Ukuran Saringan', value: 'Mesh 40 & 100', sub: 'Pemisahan partikel padat' },
            { label: 'Pembersihan', value: 'Manual Berkala (SOP)', sub: 'Mudah dirawat santri' },
            { label: 'Tingkat Kejernihan', value: 'Bebas Sampah Kasar', sub: 'Mencegah penyumbatan filter' },
        ],
        standards: 'Modul SOP Perawatan Filter Fisik SIRAMI (TECH-SOP-01)',
    },
    {
        id: 'fitoremediasi',
        step: '03',
        name: 'Kolam Fitoremediasi Alami',
        sub: 'Bio-Root Phytoremediation',
        iconType: 'leaf',
        img: '/foto/kosndisi pesantree/ipaldanlahan untuk treatmentair dan praktik microgreen.webp',
        status: 'Prototipe Siap Pasang',
        statusColor: 'emerald',
        desc: 'Memanfaatkan perakaran tanaman air khusus (rumput vetiver & tanaman akuatik lokal) serta lapisan kerikil porus untuk mengabsorpsi sisa nitrogen, fosfat, dan zat organik secara alami tanpa bahan kimia berbahaya.',
        metrics: [
            { label: 'Tanaman Biofilter', value: 'Vetiver & Akuatik', sub: 'Daya serap polutan tinggi' },
            { label: 'Waktu Retensi', value: '12 - 24 Jam', sub: 'Proses degradasi biologis' },
            { label: 'Reduksi Organik', value: 'BOD/COD Menurun', sub: 'Absorpsi alami oleh akar' },
        ],
        standards: 'Permen Lingkungan Hidup No. 11/2025 Baku Mutu Air Limbah Domestik',
    },
    {
        id: 'biofilter',
        step: '04',
        name: 'Kolam Biofilter & Media Mikroba',
        sub: 'Nitrifying Bacterial Substrate',
        iconType: 'beaker',
        img: '/foto/kosndisi pesantree/ipaldanlahan untuk treatmentair dan praktik microgreen.webp',
        status: 'Rancangan Modular',
        statusColor: 'teal',
        desc: 'Lapisan bio-ball dan pasir silika berpori tempat berkembang biaknya konsorsium bakteri nitrifikasi untuk mengonversi sisa amonia terlarut menjadi nitrat yang aman dan bermanfaat bagi nutrisi tanaman.',
        metrics: [
            { label: 'Media Bio', value: 'Bio-Ball / Pasir Silika', sub: 'Luas permukaan bakteri tinggi' },
            { label: 'Oksigen Terlarut', value: 'DO Terjaga Alami', sub: 'Sirkulasi aerasi mikro' },
            { label: 'Stabilitas Kimia', value: 'pH Netral (6.8 - 7.4)', sub: 'Kondusif untuk tanaman' },
        ],
        standards: 'WHO Sanitation Safety Planning (SSP) 2022',
    },
    {
        id: 'pemeriksaan',
        step: '05',
        name: 'Bak Pemeriksaan (Zero-Risk Health Gate)',
        sub: 'Baku Mutu & Sensor IoT Check',
        iconType: 'shield',
        img: '/foto/produkinovasi utama/alatutama cek kondisi air.webp',
        status: 'Prototipe Sensor Teruji',
        statusColor: 'emerald',
        desc: 'Gerbang keselamatan paling krusial: air hasil olahan diukur secara real-time oleh sensor pH, TDS, dan kekeruhan. Air tidak dialirkan ke microgreens pangan sebelum lolos ambang batas aman dan tervalidasi uji laboratorium baku.',
        metrics: [
            { label: 'Nilai pH Terukur', value: '6.5 - 8.5 (Aman)', sub: 'Standar baku air siram pangan' },
            { label: 'TDS (Zat Terlarut)', value: '< 500 ppm', sub: 'Batas toleransi sayuran mikro' },
            { label: 'Turbiditas (Kekeruhan)', value: '< 5 NTU', sub: 'Jernih terkalibrasi digital' },
        ],
        standards: 'Uji Laboratorium Independen Terakreditasi & Standar WHO',
    },
    {
        id: 'irigasi_pangan',
        step: '06',
        name: 'Irigasi Sayuran Microgreens',
        sub: 'Vertical Farming Padat Gizi',
        iconType: 'sprout',
        img: '/foto/diskusi pengelola/diskusibudidayamicrogreen.webp',
        status: 'Teruji Lapangan (7-14 Hari)',
        statusColor: 'emerald',
        desc: 'Air yang telah lolos verifikasi parameter aman digunakan untuk penyiraman kabut terjadwal pada tray bertingkat microgreens, menghasilkan sayuran segar padat nutrisi untuk santri dan penjualan bernilai ekonomi tinggi.',
        metrics: [
            { label: 'Masa Panen', value: '7 - 14 Hari', sub: 'Perputaran kas sangat cepat' },
            { label: 'Efisiensi Air', value: 'Hemat 90%', sub: 'Dibanding sawah konvensional' },
            { label: 'Densitas Nutrisi', value: '4 - 40x Lipat', sub: 'Lebih kaya vitamin dari sayur dewasa' },
        ],
        standards: 'Survei Kesehatan Indonesia (SKI) 2023 & Standar Sayuran Sehat',
    },
    {
        id: 'pemanfaatan_ikan',
        step: '07',
        name: 'Kolam Ikan & Pemanfaatan Lahan',
        sub: 'Aquaculture & Pekarangan ±350 Bata',
        iconType: 'fish',
        img: '/foto/kosndisi pesantree/kolamikan.webp',
        status: 'Fasilitas Kolam Tersedia',
        statusColor: 'emerald',
        desc: 'Air limpasan aman dialirkan ke kolam budidaya ikan air tawar atau penyiraman tanaman pekarangan eksisting (buah naga & cabai rawit) di lahan seluas ±350 bata milik pesantren mitra.',
        metrics: [
            { label: 'Komoditas Kolam', value: 'Nila / Lele Teruji', sub: 'Hanya jika air layak biologis' },
            { label: 'Lahan Pekarangan', value: '±350 Bata', sub: 'Optimalisasi ruang terbuka' },
            { label: 'Model Sirkular', value: 'Nol Residu Limbah', sub: 'Nutrisi kolam menyuburkan tanah' },
        ],
        standards: 'Good Aquaculture Practices (Cara Budidaya Ikan yang Baik)',
    },
    {
        id: 'iot_monitoring',
        step: 'IoT',
        name: 'Sensor Box & Kontroler Pintar',
        sub: 'Smart Water Treatment Hardware',
        iconType: 'cpu',
        img: '/foto/produkinovasi utama/alatutama cek kondisi air.webp',
        status: 'Prototipe Tervalidasi (HAKI)',
        statusColor: 'emerald',
        desc: 'Perangkat mikrokontroler hemat energi terintegrasi dengan probe elektroda analog, logging data otomatis, display lokal di pesantren, dan integrasi dashboard daring SIRAMI.',
        metrics: [
            { label: 'Parameter Pantau', value: 'pH, TDS, Kekeruhan', sub: 'Logging berkala 24/7' },
            { label: 'Mikrokontroler', value: 'Low-Power Controller', sub: 'Daya rendah & tahan cuaca' },
            { label: 'Peringatan Dini', value: 'Buzzer & Web Alert', sub: 'Otomatis tutup katup jika air anomali' },
        ],
        standards: 'HAKI Kemenkumham RI No. EC002026184233',
    },
];

const activeId = ref('pemeriksaan');
const activeComponent = ref(components.find((c) => c.id === 'pemeriksaan') || components[0]);

const selectComponent = (comp) => {
    activeId.value = comp.id;
    activeComponent.value = comp;
};

const toggleAnimation = () => {
    isPaused.value = !isPaused.value;
};
</script>

<template>
    <div class="bg-white rounded-3xl border border-[#E8E9E2] shadow-sm overflow-hidden">
        <!-- Interactive Header Bar: Forest Green Identity -->
        <div class="p-6 sm:p-8 bg-gradient-to-r from-[#143525] via-[#204E38] to-[#143525] text-white flex flex-col md:flex-row md:items-center justify-between gap-4 border-b border-[#286044]">
            <div>
                <div class="flex items-center gap-2 mb-1.5">
                    <span class="px-2.5 py-0.5 rounded bg-emerald-500/20 text-emerald-300 font-mono text-xs font-bold border border-emerald-400/40">
                        SIMULASI SISTEM AIR TERPADU
                    </span>
                    <span class="text-xs text-emerald-200/80">| Klik Tiap Komponen untuk Data Detail</span>
                </div>
                <h3 class="text-xl sm:text-2xl font-black text-white">
                    Alur Sirkular Pengolahan Air & Pertanian SIRAMI
                </h3>
                <p class="text-xs text-emerald-100/90 mt-1 max-w-2xl leading-relaxed">
                    Dari sumber air wudu, filtrasi mekanis, fitoremediasi biologis, gerbang sensor IoT zero-risk, hingga microgreens bernutrisi tinggi dan pemanfaatan lahan.
                </p>
            </div>

            <div class="flex items-center gap-2 shrink-0">
                <button
                    @click="toggleAnimation"
                    type="button"
                    class="px-4 py-2 rounded-xl text-xs font-bold transition flex items-center gap-2 border cursor-pointer"
                    :class="isPaused ? 'bg-amber-500/20 border-amber-400 text-amber-300' : 'bg-white/10 border-white/20 text-white hover:bg-white/20'"
                >
                    <svg v-if="isPaused" class="w-3.5 h-3.5" fill="currentColor" viewBox="0 0 24 24"><path d="M8 5v14l11-7z"/></svg>
                    <svg v-else class="w-3.5 h-3.5" fill="currentColor" viewBox="0 0 24 24"><path d="M6 19h4V5H6v14zm8-14v14h4V5h-4z"/></svg>
                    <span>{{ isPaused ? 'Lanjutkan Aliran' : 'Jeda Aliran' }}</span>
                </button>
            </div>
        </div>

        <!-- Horizontal Interactive Flow Selector Pills -->
        <div class="p-3 bg-[#F7F5EF] border-b border-[#E8E9E2] overflow-x-auto flex items-center gap-2 text-xs scrollbar-thin">
            <button
                v-for="comp in components"
                :key="comp.id"
                @click="selectComponent(comp)"
                type="button"
                class="px-3 py-2 rounded-xl font-bold whitespace-nowrap transition-all flex items-center gap-1.5 cursor-pointer border shrink-0 text-xs"
                :class="activeId === comp.id ? 'bg-[#204E38] border-[#204E38] text-white shadow-xs' : 'bg-white border-[#E8E9E2] text-slate-700 hover:border-emerald-600 hover:bg-emerald-50/50'"
            >
                <span class="w-2 h-2 rounded-full" :class="activeId === comp.id ? 'bg-amber-400' : 'bg-slate-300'"></span>
                <span>{{ comp.step }}. {{ comp.name }}</span>
            </button>
        </div>

        <!-- Main Interactive Visual Grid -->
        <div class="grid grid-cols-1 lg:grid-cols-12 min-h-[520px]">

            <!-- Left Interactive SVG Graphic Canvas (7 Cols) -->
            <div class="lg:col-span-7 p-4 sm:p-6 bg-[#163828] text-white relative flex flex-col justify-between overflow-hidden" :class="{ 'paused-flow': isPaused }">
                <!-- Water System Schematic Graphic -->
                <div class="w-full h-full flex flex-col justify-center items-center relative py-6">
                    <svg viewBox="0 0 960 480" class="w-full h-auto max-h-[460px] drop-shadow-2xl select-none" role="img" aria-label="Skematik Alur Pengolahan Air SIRAMI">
                        <defs>
                            <linearGradient id="waterFlowGrad" x1="0%" y1="0%" x2="100%" y2="0%">
                                <stop offset="0%" stop-color="#34d399" />
                                <stop offset="50%" stop-color="#2dd4bf" />
                                <stop offset="100%" stop-color="#38bdf8" />
                            </linearGradient>
                        </defs>

                        <!-- Pipeline Connectors Background -->
                        <path d="M 90 140 H 200" stroke="#23523b" stroke-width="8" stroke-linecap="round" fill="none" />
                        <path d="M 200 140 H 350" stroke="#23523b" stroke-width="8" stroke-linecap="round" fill="none" />
                        <path d="M 350 140 H 510" stroke="#23523b" stroke-width="8" stroke-linecap="round" fill="none" />
                        <path d="M 510 140 H 670" stroke="#23523b" stroke-width="8" stroke-linecap="round" fill="none" />
                        <path d="M 670 140 H 820" stroke="#23523b" stroke-width="8" stroke-linecap="round" fill="none" />
                        <path d="M 820 140 V 270 H 850" stroke="#23523b" stroke-width="8" stroke-linecap="round" fill="none" />
                        <path d="M 820 140 V 390 H 850" stroke="#23523b" stroke-width="8" stroke-linecap="round" fill="none" />

                        <!-- Animated Liquid Flow Line -->
                        <path
                            d="M 90 140 H 820 V 270 H 850 M 820 140 V 390 H 850"
                            stroke="url(#waterFlowGrad)"
                            stroke-width="4"
                            stroke-dasharray="10 14"
                            class="flow-anim"
                            fill="none"
                        />

                        <!-- STAGE 0: Sumber Air Wudu -->
                        <g @click="selectComponent(components[0])" class="cursor-pointer group" transform="translate(40, 90)">
                            <rect width="100" height="100" rx="16" :fill="activeId === 'sumber' ? '#204E38' : '#1d4532'" stroke="#34d399" stroke-width="2" class="transition group-hover:scale-105" />
                            <circle cx="50" cy="38" r="14" fill="#2d6e4f" />
                            <path d="M 43 40 L 50 32 L 57 40 Z" fill="#a7f3d0" />
                            <text x="50" y="68" text-anchor="middle" font-size="11" font-weight="bold" fill="#fff">Air Wudu</text>
                            <text x="50" y="82" text-anchor="middle" font-size="9" fill="#a7f3d0">Bukan Toilet</text>
                        </g>

                        <!-- STAGE 1: Bak Penampung Awal -->
                        <g @click="selectComponent(components[1])" class="cursor-pointer group" transform="translate(190, 80)">
                            <rect width="110" height="120" rx="16" :fill="activeId === 'bak_awal' ? '#204E38' : '#1d4532'" stroke="#38bdf8" stroke-width="2" class="transition group-hover:scale-105" />
                            <circle cx="55" cy="36" r="14" fill="#1b4938" />
                            <rect x="47" y="28" width="16" height="16" rx="3" fill="#38bdf8" />
                            <text x="55" y="68" text-anchor="middle" font-size="11" font-weight="bold" fill="#fff">1. Bak Awal</text>
                            <text x="55" y="85" text-anchor="middle" font-size="9" fill="#bae6fd">Penyeimbang</text>
                            <circle cx="90" cy="25" r="4" fill="#38bdf8" class="animate-pulse" />
                        </g>

                        <!-- STAGE 2: Penyaringan Fisik Kasar -->
                        <g @click="selectComponent(components[2])" class="cursor-pointer group" transform="translate(350, 80)">
                            <rect width="110" height="120" rx="16" :fill="activeId === 'penyaringan' ? '#204E38' : '#1d4532'" stroke="#fbbf24" stroke-width="2" class="transition group-hover:scale-105" />
                            <circle cx="55" cy="36" r="14" fill="#1b4938" />
                            <path d="M 47 30 L 63 30 L 55 42 Z" fill="#fbbf24" />
                            <text x="55" y="68" text-anchor="middle" font-size="11" font-weight="bold" fill="#fff">2. Saringan</text>
                            <text x="55" y="85" text-anchor="middle" font-size="9" fill="#fde68a">Mesh Screen</text>
                        </g>

                        <!-- STAGE 3: Kolam Fitoremediasi -->
                        <g @click="selectComponent(components[3])" class="cursor-pointer group" transform="translate(510, 70)">
                            <rect width="130" height="140" rx="16" :fill="activeId === 'fitoremediasi' ? '#204E38' : '#1d4532'" stroke="#34d399" stroke-width="2" class="transition group-hover:scale-105" />
                            <circle cx="65" cy="36" r="14" fill="#1b4938" />
                            <path d="M 65 24 C 60 30, 58 38, 65 44 C 72 38, 70 30, 65 24 Z" fill="#34d399" />
                            <text x="65" y="72" text-anchor="middle" font-size="11" font-weight="bold" fill="#fff">3. Fitoremediasi</text>
                            <text x="65" y="90" text-anchor="middle" font-size="9" fill="#a7f3d0">Akar Tanaman Air</text>
                            <circle cx="108" cy="30" r="4" fill="#34d399" class="animate-ping opacity-75" />
                        </g>

                        <!-- STAGE 4: Kolam Biofilter -->
                        <g @click="selectComponent(components[4])" class="cursor-pointer group" transform="translate(680, 80)">
                            <rect width="110" height="120" rx="16" :fill="activeId === 'biofilter' ? '#204E38' : '#1d4532'" stroke="#2dd4bf" stroke-width="2" class="transition group-hover:scale-105" />
                            <circle cx="55" cy="36" r="14" fill="#1b4938" />
                            <circle cx="51" cy="34" r="4" fill="#2dd4bf" />
                            <circle cx="59" cy="38" r="4" fill="#2dd4bf" />
                            <text x="55" y="68" text-anchor="middle" font-size="11" font-weight="bold" fill="#fff">4. Biofilter</text>
                            <text x="55" y="85" text-anchor="middle" font-size="9" fill="#99f6e4">Bakteri Porus</text>
                        </g>

                        <!-- STAGE 5: Bak Pemeriksaan (Zero-Risk Gate) -->
                        <g @click="selectComponent(components[5])" class="cursor-pointer group" transform="translate(740, 240)">
                            <rect width="180" height="100" rx="16" :fill="activeId === 'pemeriksaan' ? '#204E38' : '#143826'" stroke="#34d399" stroke-width="3" class="transition group-hover:scale-105 shadow-lg" />
                            <path d="M 90 20 L 102 26 V 38 C 102 46, 90 52, 90 52 C 90 52, 78 46, 78 38 V 26 Z" fill="#34d399" />
                            <text x="90" y="68" text-anchor="middle" font-size="12" font-weight="bold" fill="#a7f3d0">5. Zero-Risk Gate</text>
                            <text x="90" y="85" text-anchor="middle" font-size="10" fill="#e2e8f0">Sensor pH, TDS & Uji Lab</text>
                        </g>

                        <!-- OUTPUT 1: Microgreens Vertical Farming -->
                        <g @click="selectComponent(components[6])" class="cursor-pointer group" transform="translate(520, 260)">
                            <rect width="180" height="90" rx="16" :fill="activeId === 'irigasi_pangan' ? '#204E38' : '#1d4532'" stroke="#34d399" stroke-width="2" class="transition group-hover:scale-105" />
                            <path d="M 85 24 C 80 30, 85 36, 90 38 C 95 36, 100 30, 95 24 Z" fill="#34d399" />
                            <text x="90" y="58" text-anchor="middle" font-size="12" font-weight="bold" fill="#fff">Microgreens</text>
                            <text x="90" y="75" text-anchor="middle" font-size="9" fill="#a7f3d0">Panen 7-14 Hari &bull; Gizi Tinggi</text>
                        </g>

                        <!-- OUTPUT 2: Kolam Ikan / Pekarangan -->
                        <g @click="selectComponent(components[7])" class="cursor-pointer group" transform="translate(520, 370)">
                            <rect width="180" height="90" rx="16" :fill="activeId === 'pemanfaatan_ikan' ? '#204E38' : '#1d4532'" stroke="#38bdf8" stroke-width="2" class="transition group-hover:scale-105" />
                            <path d="M 82 28 C 88 24, 96 28, 98 32 C 96 36, 88 40, 82 36 Z" fill="#38bdf8" />
                            <text x="90" y="58" text-anchor="middle" font-size="12" font-weight="bold" fill="#fff">Kolam Ikan & ±350 Bata</text>
                            <text x="90" y="75" text-anchor="middle" font-size="9" fill="#bae6fd">Lahan Pekarangan Pesantren</text>
                        </g>

                        <!-- HARDWARE SENSOR BOX -->
                        <g @click="selectComponent(components[8])" class="cursor-pointer group" transform="translate(60, 270)">
                            <rect width="210" height="150" rx="16" :fill="activeId === 'iot_monitoring' ? '#204E38' : '#133524'" stroke="#34d399" stroke-width="2" class="transition group-hover:scale-105" />
                            <rect x="93" y="24" width="24" height="24" rx="4" fill="#2d6e4f" />
                            <rect x="99" y="30" width="12" height="12" fill="#34d399" />
                            <text x="105" y="68" text-anchor="middle" font-size="12" font-weight="bold" fill="#34d399">IoT Data Logger</text>
                            <text x="105" y="86" text-anchor="middle" font-size="10" fill="#a7f3d0">Sensor pH, TDS, Turbiditas</text>
                            <path d="M 30 110 H 180" stroke="#286044" stroke-width="1" />
                            <text x="105" y="130" text-anchor="middle" font-size="9" fill="#38bdf8" font-family="monospace">Status: Online Realtime</text>
                        </g>
                    </svg>
                </div>

                <!-- Bottom Stage Legend -->
                <div class="pt-3 border-t border-[#23523b] flex flex-wrap items-center justify-between gap-2 text-[11px] text-emerald-200/80">
                    <div class="flex items-center gap-4">
                        <span class="flex items-center gap-1.5"><span class="w-2.5 h-2.5 rounded-full bg-emerald-400"></span> Alur Sirkular</span>
                        <span class="flex items-center gap-1.5"><span class="w-2.5 h-2.5 rounded-full bg-cyan-400"></span> Sensor IoT</span>
                        <span class="flex items-center gap-1.5"><span class="w-2.5 h-2.5 rounded-full bg-amber-400"></span> Zero-Risk Gate</span>
                    </div>
                    <span class="font-mono text-emerald-300 text-[10px]">*Klik kotak komponen pada diagram di atas</span>
                </div>
            </div>

            <!-- Right Component Inspector Dossier (5 Cols) -->
            <div class="lg:col-span-5 p-6 sm:p-8 bg-[#F7F5EF] flex flex-col justify-between space-y-6">
                <div class="space-y-5">
                    <!-- Component Header -->
                    <div class="flex items-start justify-between gap-3 pb-4 border-b border-[#E8E9E2]">
                        <div class="space-y-1">
                            <div class="flex items-center gap-2">
                                <span class="px-2 py-0.5 rounded bg-emerald-100 text-[#204E38] text-[10px] font-mono font-bold">
                                    TAHAP {{ activeComponent.step }}
                                </span>
                                <span class="text-xs text-slate-500">{{ activeComponent.sub }}</span>
                            </div>
                            <h4 class="text-lg sm:text-xl font-black text-[#26312B] leading-snug">
                                {{ activeComponent.name }}
                            </h4>
                        </div>
                        <span class="px-2.5 py-1 rounded-full text-[10px] font-bold tracking-wide shrink-0 bg-emerald-100 text-[#204E38] border border-emerald-300">
                            {{ activeComponent.status }}
                        </span>
                    </div>

                    <!-- Component Photo Preview -->
                    <div class="rounded-2xl overflow-hidden border border-[#E8E9E2] bg-[#163828] aspect-[16/9] relative group shadow-xs">
                        <img
                            :src="activeComponent.img"
                            :alt="activeComponent.name"
                            class="w-full h-full object-cover group-hover:scale-105 transition-transform duration-500"
                        />
                        <div class="absolute inset-0 bg-gradient-to-t from-black/70 via-transparent to-transparent"></div>
                        <span class="absolute bottom-2 left-2 text-[10px] text-white font-mono bg-black/60 px-2 py-0.5 rounded backdrop-blur-xs">
                            Kondisi Lapangan Riil di Pesantren Mitra
                        </span>
                    </div>

                    <!-- Description -->
                    <p class="text-xs sm:text-sm text-slate-700 leading-relaxed">
                        {{ activeComponent.desc }}
                    </p>

                    <!-- Metrics Data Cards -->
                    <div class="grid grid-cols-1 sm:grid-cols-3 gap-2.5">
                        <div
                            v-for="(m, midx) in activeComponent.metrics"
                            :key="midx"
                            class="p-3 bg-white rounded-xl border border-[#E8E9E2] shadow-2xs"
                        >
                            <span class="text-xs font-bold text-[#26312B] font-mono block">{{ m.value }}</span>
                            <span class="text-[10px] text-slate-500 font-semibold block mt-0.5">{{ m.label }}</span>
                            <span class="text-[9px] text-[#204E38] block mt-0.5">{{ m.sub }}</span>
                        </div>
                    </div>

                    <!-- Standard Compliance Box -->
                    <div class="p-3.5 bg-emerald-50 rounded-xl border border-emerald-200 text-xs space-y-1">
                        <span class="font-bold text-emerald-950 flex items-center gap-1.5">
                            <svg class="w-3.5 h-3.5 text-emerald-800" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12h6m-6 4h6m2 5H7a2 2 0 01-2-2V5a2 2 0 012-2h5.586a1 1 0 01.707.293l5.414 5.414a1 1 0 01.293.707V19a2 2 0 01-2 2z"/></svg>
                            <span>Baku Mutu & Standar Acuan:</span>
                        </span>
                        <p class="text-[11px] text-slate-700 leading-relaxed">
                            {{ activeComponent.standards }}
                        </p>
                    </div>
                </div>

                <!-- Bottom Selector Navigator -->
                <div class="pt-4 border-t border-[#E8E9E2] flex items-center justify-between text-xs">
                    <span class="text-slate-500 text-[11px]">Komponen {{ components.indexOf(activeComponent) + 1 }} dari {{ components.length }}</span>
                    <Link
                        :href="route('solusi')"
                        class="text-[#204E38] hover:text-emerald-900 font-bold flex items-center gap-1 transition"
                    >
                        <span>Lihat Dokumen Teknis Lengkap</span>
                        <span>&rarr;</span>
                    </Link>
                </div>
            </div>

        </div>
    </div>
</template>

<style scoped>
@keyframes flowDash {
    to {
        stroke-dashoffset: -48;
    }
}

.flow-anim {
    animation: flowDash 2s linear infinite;
}

.paused-flow .flow-anim {
    animation-play-state: paused;
}
</style>
