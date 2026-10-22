<script setup>
import { ref, computed, onMounted, onUnmounted } from 'vue';

const props = defineProps({
    data: {
        type: Array,
        default: () => null,
    },
});

// Fallback data if not passed directly via props
const defaultMapping = [
    {
        id: 'global',
        level_number: 1,
        name: 'Global',
        scale: 'Skala Dunia / Global',
        title: 'Krisis Iklim, Tekanan Sumber Daya Air & Kerentanan Ketahanan Pangan',
        badge_status: 'Data Sekunder Terverifikasi',
        badge_type: 'verified',
        description: 'Memahami isu perubahan iklim, pengelolaan sumber daya air, ketahanan pangan, dan pembangunan berkelanjutan berdasarkan publikasi lembaga internasional.',
        year: '2023 - 2024',
        source: 'UN-Water World Water Development Report 2023, WHO/UNICEF JMP, IPCC AR6 WGII',
        territory: 'Global (SDG 6 Air Bersih & Sanitasi, SDG 2 Tanpa Kelaparan, SDG 13 Aksi Iklim)',
        relevance: 'Menjadi landasan urgensi transisi ke model pengelolaan air sirkular (water reuse & treatment) dan pertanian berdaya tahan tinggi (climate-resilient micro-farming) yang tidak bergantung pada cuaca ekstrem.',
        metrics: [
            {
                value: '2.2 Miliar',
                label: 'Tanpa Akses Air Aman',
                sub: 'Populasi global tanpa layanan air minum yang dikelola aman (UN-Water).',
            },
            {
                value: '40%',
                label: 'Proyeksi Defisit Air 2030',
                sub: 'Kesenjangan antara kebutuhan air global dan pasokan air terbarukan.',
            },
            {
                value: '70%',
                label: 'Konsumsi Air Pertanian',
                sub: 'Sektor pertanian konvensional menyerap mayoritas pasokan air tawar dunia.',
            },
        ],
        key_points: [
            'Perubahan iklim memperparah variabilitas hidrologi dan periode kekeringan berkepanjangan.',
            'Urbanisasi masif menekan ruang terbuka hijau dan mengurangi cadangan air tanah perkotaan.',
            'Pangan rantai panjang (long supply chain) menyumbang emisi gas rumah kaca dan rentan disrupsi pasokan.',
        ],
        visual_theme: 'globe',
    },
    {
        id: 'nasional',
        level_number: 2,
        name: 'Nasional',
        scale: 'Republik Indonesia (Nasional)',
        title: 'Akses Air Aman, Kesenjangan Sanitasi & Defisit Konsumsi Sayur Nasional',
        badge_status: 'Data Sekunder Terverifikasi',
        badge_type: 'verified',
        description: 'Menelaah kondisi Indonesia berdasarkan data resmi mengenai air, sanitasi, pangan, lingkungan, dan pembangunan masyarakat.',
        year: '2023 - 2024',
        source: 'Bappenas (Kajian RPJMN 2020-2024), Survei Kesehatan Indonesia (SKI) 2023 Kemenkes RI, BPS',
        territory: 'Indonesia (Kawasan Urban & Peri-Urban)',
        relevance: 'Mengarahkan SIRAMI memproduksi pangan padat nutrisi cepat panen (microgreens) untuk membantu menekan defisit gizi sayur nasional yang mencapai 96,7%, sekaligus menguji model pengolahan air mandiri.',
        metrics: [
            {
                value: '11.8%',
                label: 'Akses Air Minum Aman',
                sub: 'Capaian air minum aman nasional; 88,2% lainnya masih air layak dasar atau belum aman.',
            },
            {
                value: '96.7%',
                label: 'Defisit Konsumsi Sayur',
                sub: 'Proporsi penduduk Indonesia ≥5 tahun yang kurang mengonsumsi sayur & buah (SKI 2023).',
            },
            {
                value: '21.5%',
                label: 'Prevalensi Stunting',
                sub: 'Tingkat stunting balita nasional yang menuntut intervensi pangan kaya mikronutrien.',
            },
        ],
        key_points: [
            'Air layak secara fisik belum menjamin aman dari cemaran bakteriologis mikro.',
            'Urban sprawl mempersempit lahan pertanian subur di pulau Jawa hingga puluhan ribu hektar per tahun.',
            'Pemerintah menargetkan 100% akses air minum layak dan peningkatan ketahanan pangan berbasis komunitas.',
        ],
        visual_theme: 'archipelago',
    },
    {
        id: 'provinsi',
        level_number: 3,
        name: 'Provinsi',
        scale: 'Provinsi Jawa Barat',
        title: 'Alih Fungsi Lahan Priangan Timur & Ekosistem 12.000+ Pesantren',
        badge_status: 'Data Sekunder Terverifikasi',
        badge_type: 'verified',
        description: 'Mengidentifikasi konteks Jawa Barat melalui data sektoral, karakteristik wilayah, serta kebijakan pembangunan yang relevan.',
        year: '2023 - 2025',
        source: 'Dinas Lingkungan Hidup Prov. Jawa Barat, Kanwil Kemenag Jabar, BPS Jawa Barat',
        territory: 'Jawa Barat (Koridor Priangan Timur & Aglomerasi Urban)',
        relevance: 'Menjadikan pesantren di Jawa Barat sebagai mitra strategis laboratorium lapangan, karena pesantren memiliki asrama padat santri, rutinitas wudu 5 kali sehari penghasil greywater stabil, dan pekarangan asrama yang dapat dioptimalkan.',
        metrics: [
            {
                value: '>12.000',
                label: 'Pesantren Terdaftar',
                sub: 'Jawa Barat memiliki basis pesantren terbanyak di Indonesia dengan jutaan santri mukim.',
            },
            {
                value: '4.500 Ha/Thn',
                label: 'Laju Konversi Lahan',
                sub: 'Rata-rata alih fungsi lahan sawah produktif menjadi perumahan dan komersial di Jabar.',
            },
            {
                value: 'Prioritas',
                label: 'Perbaikan Mutu Air DAS',
                sub: 'DAS Citanduy dan Citarum membutuhkan tata kelola greywater domestik berbasis sumber.',
            },
        ],
        key_points: [
            'Pesantren menghadapi tantangan biaya listrik pompa air sumur yang tinggi setiap bulannya.',
            'Air bekas wudu santri memiliki potensi daur ulang tinggi karena minim kontaminan deterjen berat dibanding limbah rumah tangga biasa.',
            'Santri memiliki waktu luang produktif di luar jam ngaji yang ideal untuk keterampilan agribisnis microgreens modern.',
        ],
        visual_theme: 'province',
    },
    {
        id: 'kabupaten',
        level_number: 4,
        name: 'Kabupaten dan Wilayah Implementasi',
        scale: 'Kota & Kabupaten Tasikmalaya',
        title: 'Karakteristik Hidrologi Cibeureum, Beban Listrik Sumur & Pasar Pangan Segar',
        badge_status: 'Data Sekunder & Pengamatan Kontekstual',
        badge_type: 'observation_needed',
        description: 'Mengumpulkan informasi mengenai kondisi lokal, fasilitas yang tersedia, kebutuhan air, ruang budidaya, serta karakteristik calon penerima manfaat.',
        year: '2024 - 2026',
        source: 'BPS Kota Tasikmalaya (Tasikmalaya dalam Angka 2024), Dokumen Profil Kecamatan Cibeureum',
        territory: 'Kecamatan Cibeureum, Kota Tasikmalaya (Koordinat: 7°20\'58.2"S 108°14\'36.8"E)',
        relevance: 'Memastikan rancangan filtrasi SIRAMI mengandalkan gravitasi alami tanpa pompa tambahan agar tidak membebani rekening listrik pesantren, serta membidik segmen pasar komoditas bernilai tinggi di pusat Kota Tasikmalaya.',
        metrics: [
            {
                value: 'Sumur Bor',
                label: 'Sumber Air Utama',
                sub: 'Mayoritas pemukiman dan lembaga pendidikan mengandalkan akuifer tanah dalam dengan pompa listrik.',
            },
            {
                value: 'Rp400k - Rp900k',
                label: 'Estimasi Listrik Pompa/Bln',
                sub: 'Biaya energi operasional sumur bor yang berpotensi diefisienkan melalui daur ulang wudu.',
            },
            {
                value: 'Tinggi',
                label: 'Peluang Pasar Microgreens',
                sub: 'Hotel, restoran, kafe sehat, dan komunitas kuliner di Kota Tasikmalaya belum memiliki produsen lokal tetap.',
            },
        ],
        key_points: [
            'Kondisi topografi lereng bertingkat di Cibeureum memungkinkan pengaliran air filtrasi secara gravitasi murni.',
            'Jarak tempuh ke pusat Kota Tasikmalaya hanya 15-20 menit, sangat menguntungkan rantai pasok microgreens segar.',
            'Diperlukan inventarisasi jaringan pipa existing sebelum instalasi prototipe dimulai.',
        ],
        visual_theme: 'district',
    },
    {
        id: 'akar_rumput',
        level_number: 5,
        name: 'Akar Rumput',
        scale: 'Pesantren Al-Qur\'an Hidayatul Mustafid (Mitra Lapangan)',
        title: 'Observasi Awal Kp. Sindangresik: Jalur Wudu, Toren Air & Ruang Lahan 350 Bata',
        badge_status: 'Observasi Awal & [Kebutuhan Pengumpulan Data / Baseline Target]',
        badge_type: 'observation_needed',
        description: 'Melakukan identifikasi kebutuhan bersama komunitas melalui observasi, diskusi, dokumentasi, dan pengumpulan data dasar.',
        year: 'Oktober 2026',
        source: 'Observasi Lapangan & Wawancara Pengelola Pesantren oleh Tim SIRAMI UIN Sunan Gunung Djati Bandung (Surat No: 18/X/PPHM/2026)',
        territory: 'Kp. Sindangresik, Kel. Awipari, Kec. Cibeureum, Kota Tasikmalaya',
        relevance: 'Menjadi lokasi fisik uji coba pilot project 6 bulan. Semua parameter debit, mutu mikrobiologis, dan nutrisi air wudu wajib diukur sebagai baseline sebelum dialirkan ke instalasi budidaya.',
        unverified_notice: 'PERHATIAN: Data debit harian riil (liter/hari), kandungan E. coli awal, dan TDS air wudu di lokasi masih berstatus [Kebutuhan Pengumpulan Data / Baseline Target] yang akan diverifikasi melalui uji lab resmi terakreditasi pada Bulan 1 pilot project.',
        metrics: [
            {
                value: '±350 Bata',
                label: 'Potensi Lahan Pekarangan',
                sub: 'Aset lahan terbuka yang saat ini sebagian ditanami buah naga dan cabai rawit ekstensif.',
            },
            {
                value: '5 Waktu',
                label: 'Siklus Wudu Santri',
                sub: 'Pola debit air wudu terpusat pada waktu subuh, zuhur, asar, magrib, dan isya.',
            },
            {
                value: '1 Unit IPAL',
                label: 'Fasilitas Tersedia',
                sub: 'Infrastruktur bak penampung awal yang dapat diintegrasikan dengan filter multi-media SIRAMI.',
            },
        ],
        key_points: [
            'Santri mukim memiliki kedisiplinan dan rutinitas harian yang sangat kondusif untuk pembiasaan SOP budidaya.',
            'Pimpinan pesantren (KH. Nandang Ja\'far Shiddiq) telah menerbitkan surat persetujuan resmi memfasilitasi lokasi pilot.',
            'Pemisahan jalur air wudu dari air limbah toilet (blackwater) mutlak dilakukan secara fisik di lokasi.',
        ],
        visual_theme: 'site',
    },
    {
        id: 'respons_sirami',
        level_number: 6,
        name: 'Respons SIRAMI',
        scale: 'Solusi Terintegrasi Mahasiswa UIN Bandung',
        title: 'Rancang Bangun Pilot: Smart Water Treatment, Zero-Risk Gate & Kemandirian Santri',
        badge_status: 'Target Pilot & Prototipe Teruji',
        badge_type: 'target_solution',
        description: 'Merumuskan rancangan solusi yang sesuai dengan masalah prioritas dan menguji kelayakannya melalui tahapan pengembangan dan pilot project.',
        year: 'Rencana Pelaksanaan 2026',
        source: 'Blueprint Inovasi Sosial SIRAMI, Disiapkan untuk Sharia Young Leader Summit (SYLS) 2026',
        territory: 'Pilot Sindangresik & Model Replikasi Pesantren Perkotaan',
        relevance: 'Mewujudkan intervensi terintegrasi yang menggabungkan filtrasi air terukur, monitoring sensor IoT terkalibrasi, budidaya microgreens bernilai jual, dan pembukuan kas mandiri santri.',
        metrics: [
            {
                value: 'Rp26 Jt',
                label: 'Anggaran Kas Terukur',
                sub: 'RAB terpadu 12 komponen terinci dalam 3 pos belanja transparan untuk implementasi pilot 6 bulan.',
            },
            {
                value: '7 - 14 Hari',
                label: 'Siklus Panen Microgreens',
                sub: 'Perputaran kas cepat dengan densitas mikronutrien tinggi untuk santri dan penjualan.',
            },
            {
                value: 'Zero-Risk',
                label: 'Health Safety Gate',
                sub: 'Uji laboratorium baku mutu independen sebelum air filtrasi digunakan untuk tanaman pangan.',
            },
        ],
        key_points: [
            'Pendekatan multibarrier: sedimentasi fisik, bio-filtrasi pasir/karbon aktif, fitoremediasi tanaman lokal.',
            'Pemantauan sensor IoT lokal hemat daya untuk parameter krusial pH, TDS, dan kekeruhan air.',
            'Pelatihan santri mencakup SOP budidaya, higiene panen, penetapan HPP, hingga pembukuan kas digital.',
        ],
        visual_theme: 'solution',
    },
];

const levels = computed(() => props.data || defaultMapping);

const activeIndex = ref(0);
const activeLevel = computed(() => levels.value[activeIndex.value] || levels.value[0]);

// Auto tour feature
const isAutoTour = ref(false);
let tourInterval = null;

const startAutoTour = () => {
    isAutoTour.value = true;
    tourInterval = setInterval(() => {
        if (activeIndex.value < levels.value.length - 1) {
            activeIndex.value++;
        } else {
            activeIndex.value = 0;
        }
    }, 6000);
};

const pauseAutoTour = () => {
    isAutoTour.value = false;
    if (tourInterval) {
        clearInterval(tourInterval);
        tourInterval = null;
    }
};

const toggleAutoTour = () => {
    if (isAutoTour.value) {
        pauseAutoTour();
    } else {
        startAutoTour();
    }
};

const selectLevel = (idx) => {
    pauseAutoTour();
    activeIndex.value = idx;
};

const nextLevel = () => {
    pauseAutoTour();
    if (activeIndex.value < levels.value.length - 1) {
        activeIndex.value++;
    } else {
        activeIndex.value = 0;
    }
};

const prevLevel = () => {
    pauseAutoTour();
    if (activeIndex.value > 0) {
        activeIndex.value--;
    } else {
        activeIndex.value = levels.value.length - 1;
    }
};

onUnmounted(() => {
    if (tourInterval) clearInterval(tourInterval);
});

// Helper for status badge styling
const getBadgeClasses = (type) => {
    if (type === 'verified') {
        return 'bg-emerald-50 text-emerald-800 border-emerald-300';
    }
    if (type === 'observation_needed') {
        return 'bg-amber-50 text-amber-900 border-amber-300';
    }
    return 'bg-blue-50 text-blue-900 border-blue-300';
};
</script>

<template>
    <div class="space-y-10">
        <!-- Header Section (Verbatim requirements from SYLS 2026 Masterplan) -->
        <div class="grid grid-cols-1 lg:grid-cols-12 gap-8 items-start">
            <div class="lg:col-span-5 space-y-4">
                <div class="inline-flex items-center gap-2 px-3 py-1 rounded-md bg-emerald-50 border border-emerald-200 text-xs font-bold text-emerald-800 uppercase tracking-wider">
                    <span>Section 3</span>
                    <span>&middot;</span>
                    <span>Dari Tantangan Global ke Aksi Lokal</span>
                </div>
                <h2 class="text-2xl sm:text-3xl lg:text-4xl font-black text-slate-900 leading-tight">
                    Memahami Masalah dari <span class="text-emerald-800">Skala Global hingga Akar Rumput</span>.
                </h2>
                <div class="flex items-center gap-3 pt-2">
                    <button
                        @click="toggleAutoTour"
                        type="button"
                        class="px-3.5 py-2 rounded-xl text-xs font-bold transition flex items-center gap-2 cursor-pointer border"
                        :class="isAutoTour ? 'bg-amber-50 border-amber-300 text-amber-900 shadow-xs' : 'bg-white border-slate-300 text-slate-700 hover:border-emerald-600 hover:text-emerald-800'"
                    >
                        <span class="w-2 h-2 rounded-full" :class="isAutoTour ? 'bg-amber-500 animate-ping' : 'bg-slate-400'"></span>
                        <span>{{ isAutoTour ? 'Jeda Tur Animasi' : 'Mulai Tur Animasi Bertahap' }}</span>
                    </button>

                    <div class="text-[11px] text-slate-600 font-mono">
                        Langkah {{ activeIndex + 1 }} dari {{ levels.length }}
                    </div>
                </div>
            </div>

            <!-- Exact Verbatim Description -->
            <div class="lg:col-span-7 space-y-3.5 text-xs sm:text-sm text-slate-600 leading-relaxed bg-slate-50/80 p-5 rounded-2xl border border-slate-200">
                <p>
                    Tantangan keberlanjutan tidak berdiri sendiri. Isu yang dibicarakan pada tingkat global memiliki konteks dan bentuk yang berbeda ketika ditelusuri hingga tingkat nasional, provinsi, kabupaten, dan komunitas.
                </p>
                <p>
                    Karena itu, <strong>SIRAMI</strong> menggunakan pendekatan pemetaan masalah bertingkat untuk memahami hubungan antara tren global, kondisi regional, kebutuhan lokal, dan persoalan yang benar-benar dialami calon pengguna.
                </p>
                <p class="font-medium text-slate-700">
                    Pemetaan ini menjadi dasar dalam menentukan relevansi solusi, menetapkan prioritas intervensi, serta menyusun indikator yang dapat diukur selama pilot project.
                </p>
            </div>
        </div>

        <!-- Multi-Level Stepper / Zoom Navigator Tabs -->
        <div class="bg-white rounded-2xl border border-slate-200/90 p-2 sm:p-3 shadow-xs">
            <div class="grid grid-cols-2 sm:grid-cols-3 lg:grid-cols-6 gap-2">
                <button
                    v-for="(lvl, idx) in levels"
                    :key="lvl.id"
                    @click="selectLevel(idx)"
                    type="button"
                    class="p-3 rounded-xl text-left transition-all relative overflow-hidden flex flex-col justify-between group cursor-pointer border"
                    :class="activeIndex === idx ? 'bg-[#204E38] border-[#204E38] text-white shadow-md' : 'bg-slate-50/60 border-slate-200 text-slate-700 hover:bg-slate-100 hover:border-slate-300'"
                >
                    <!-- Active Indicator Bar -->
                    <div
                        v-if="activeIndex === idx"
                        class="absolute top-0 left-0 right-0 h-1 bg-emerald-400"
                    ></div>

                    <div class="flex items-center justify-between gap-1 w-full mb-1">
                        <span
                            class="text-[10px] font-mono font-bold px-1.5 py-0.5 rounded"
                            :class="activeIndex === idx ? 'bg-emerald-800 text-emerald-100' : 'bg-slate-200 text-slate-600'"
                        >
                            0{{ lvl.level_number }}
                        </span>

                        <span
                            class="w-2 h-2 rounded-full"
                            :class="lvl.badge_type === 'verified' ? 'bg-emerald-600' : lvl.badge_type === 'observation_needed' ? 'bg-amber-600' : 'bg-blue-600'"
                        ></span>
                    </div>

                    <div>
                        <span class="block text-xs font-bold truncate" :class="activeIndex === idx ? 'text-white' : 'text-slate-800 group-hover:text-emerald-800'">
                            {{ lvl.name }}
                        </span>
                        <span class="block text-[10px] truncate" :class="activeIndex === idx ? 'text-slate-300' : 'text-slate-600'">
                            {{ lvl.scale }}
                        </span>
                    </div>
                </button>
            </div>
        </div>

        <!-- Main Interactive Visual & Dossier Stage -->
        <div class="bg-white rounded-3xl border border-slate-200/90 shadow-sm overflow-hidden">
            <div class="grid grid-cols-1 lg:grid-cols-12 min-h-[580px]">

                <!-- Left Column: Dynamic Visual & Zoom Stage -->
                <div class="lg:col-span-5 bg-gradient-to-br from-[#123624] via-[#163828] to-[#204E38] p-6 sm:p-8 text-white relative flex flex-col justify-between overflow-hidden">
                    <!-- Background Ambient Glow & Grid -->
                    <div class="absolute inset-0 opacity-15 pointer-events-none bg-[radial-gradient(#10b981_1px,transparent_1px)] [background-size:16px_16px]"></div>
                    <div class="absolute -top-20 -right-20 w-64 h-64 bg-emerald-500/20 rounded-full blur-3xl pointer-events-none"></div>

                    <!-- Top Stage Header -->
                    <div class="relative z-10 flex items-center justify-between">
                        <div class="flex items-center gap-2">
                            <span class="text-xs font-mono font-bold px-2 py-0.5 rounded bg-emerald-500/20 text-emerald-300 border border-emerald-500/30">
                                ZOOM STAGE 0{{ activeLevel.level_number }}
                            </span>
                            <span class="text-xs text-slate-300 font-medium">| {{ activeLevel.scale }}</span>
                        </div>

                        <!-- Stepper Arrows -->
                        <div class="flex items-center gap-1.5">
                            <button
                                @click="prevLevel"
                                type="button"
                                title="Level Sebelumnya"
                                class="w-8 h-8 rounded-lg bg-[#123624] hover:bg-[#204E38] text-white flex items-center justify-center text-xs border border-[#2e6d4e] transition cursor-pointer"
                            >
                                &larr;
                            </button>
                            <button
                                @click="nextLevel"
                                type="button"
                                title="Level Berikutnya"
                                class="w-8 h-8 rounded-lg bg-[#204E38] hover:bg-[#163828] text-white flex items-center justify-center text-xs font-bold border border-emerald-400/50 shadow-xs transition cursor-pointer"
                            >
                                &rarr;
                            </button>
                        </div>
                    </div>

                    <!-- Middle Dynamic Graphic Visual Based on Level -->
                    <div class="relative z-10 my-8 flex flex-col items-center justify-center">

                        <!-- LEVEL 1: GLOBAL (Globe & Climate Crisis) -->
                        <div v-if="activeLevel.visual_theme === 'globe'" class="w-full flex flex-col items-center">
                            <div class="relative w-56 h-56 sm:w-64 sm:h-64 flex items-center justify-center">
                                <!-- Outer Radar Pulse -->
                                <div class="absolute inset-0 rounded-full border border-emerald-500/30 animate-ping opacity-25"></div>
                                <div class="absolute inset-4 rounded-full border border-dashed border-emerald-400/40 animate-spin" style="animation-duration: 30s;"></div>

                                <!-- Planet Circle -->
                                <div class="w-44 h-44 rounded-full bg-gradient-to-br from-[#123624] via-[#163828] to-[#204E38] border-2 border-emerald-400/60 shadow-[0_0_50px_rgba(16,185,129,0.3)] flex flex-col items-center justify-center p-4 text-center relative overflow-hidden">
                                    <svg class="w-8 h-8 text-emerald-300 mb-1" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M3.055 11H5a2 2 0 012 2v1a2 2 0 002 2 2 2 0 012 2v2.945M8 3.935V5.5A2.5 2.5 0 0010.5 8h.5a2 2 0 012 2 2 2 0 104 0 2 2 0 012-2h1.064M15 20.488V18a2 2 0 012-2h3.064M21 12a9 9 0 11-18 0 9 9 0 0118 0z" /></svg>
                                    <span class="text-[11px] font-black uppercase tracking-wider text-emerald-300">Skala Global</span>
                                    <span class="text-[10px] text-emerald-100/70 mt-1">UN-Water &bull; IPCC</span>
                                    <div class="mt-2 text-[9px] bg-[#123624] px-2 py-0.5 rounded-full border border-emerald-500/40 text-emerald-200 font-mono">
                                        40% Water Stress 2030
                                    </div>
                                </div>

                                <!-- Floating Satellite Tags -->
                                <div class="absolute -top-1 -right-2 bg-[#123624]/90 border border-emerald-500/40 rounded-lg px-2.5 py-1 text-[10px] text-emerald-300 shadow-md">
                                    SDG 6: Air Bersih
                                </div>
                                <div class="absolute -bottom-2 -left-2 bg-[#123624]/90 border border-teal-500/40 rounded-lg px-2.5 py-1 text-[10px] text-teal-300 shadow-md">
                                    SDG 2: Ketahanan Pangan
                                </div>
                            </div>
                            <p class="text-xs text-emerald-100/80 text-center mt-4 max-w-xs">
                                Tekanan ketersediaan air tawar dan kerentanan pasokan pangan segar akibat perubahan iklim.
                            </p>
                        </div>

                        <!-- LEVEL 2: NASIONAL (Indonesian Archipelago) -->
                        <div v-else-if="activeLevel.visual_theme === 'archipelago'" class="w-full flex flex-col items-center">
                            <div class="relative w-full max-w-xs p-5 bg-[#163828]/90 rounded-2xl border border-[#2e6d4e]/60 flex flex-col items-center">
                                <span class="px-2.5 py-1 rounded bg-red-600 text-white font-mono font-bold text-xs mb-2">INDONESIA</span>
                                <span class="text-xs font-bold text-white uppercase tracking-wider">Konteks Nasional Indonesia</span>
                                <div class="w-full mt-4 space-y-2.5">
                                    <div class="p-2.5 bg-[#123624]/90 rounded-xl border border-red-500/30 flex items-center justify-between text-xs">
                                        <span class="text-slate-200">Defisit Sayur (SKI 2023)</span>
                                        <span class="font-mono font-bold text-red-300">96.7%</span>
                                    </div>
                                    <div class="p-2.5 bg-[#123624]/90 rounded-xl border border-amber-500/30 flex items-center justify-between text-xs">
                                        <span class="text-slate-200">Akses Air Aman (Bappenas)</span>
                                        <span class="font-mono font-bold text-amber-300">11.8%</span>
                                    </div>
                                    <div class="p-2.5 bg-[#123624]/90 rounded-xl border border-emerald-500/30 flex items-center justify-between text-xs">
                                        <span class="text-slate-200">Alih Fungsi Sawah</span>
                                        <span class="font-mono font-bold text-emerald-300">>Puluhan Ribu Ha</span>
                                    </div>
                                </div>
                            </div>
                            <p class="text-xs text-emerald-100/80 text-center mt-4 max-w-xs">
                                Kesenjangan air minum aman dan defisit konsumsi gizi sayur di kawasan urban Indonesia.
                            </p>
                        </div>

                        <!-- LEVEL 3: PROVINSI (Jawa Barat & Pesantren Network) -->
                        <div v-else-if="activeLevel.visual_theme === 'province'" class="w-full flex flex-col items-center">
                            <div class="relative w-full max-w-xs p-5 bg-[#163828]/90 rounded-2xl border border-[#2e6d4e]/60 flex flex-col items-center text-center">
                                <svg class="w-7 h-7 text-emerald-300 mb-1" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 21h18M3 10h18M3 7l9-4 9 4M4 10h16v11H4V10z" /></svg>
                                <span class="text-xs font-bold text-white uppercase tracking-wider">Provinsi Jawa Barat</span>
                                <span class="text-[11px] text-emerald-300 font-medium mt-0.5">Priangan Timur & DAS Citanduy</span>

                                <div class="w-full mt-4 grid grid-cols-2 gap-2 text-left">
                                    <div class="p-3 bg-[#123624]/90 rounded-xl border border-[#2e6d4e]/40">
                                        <span class="text-[10px] text-slate-300 block">Ekosistem</span>
                                        <span class="text-sm font-bold text-white font-mono">>12.000</span>
                                        <span class="text-[9px] text-emerald-300 block">Pesantren Jabar</span>
                                    </div>
                                    <div class="p-3 bg-[#123624]/90 rounded-xl border border-[#2e6d4e]/40">
                                        <span class="text-[10px] text-slate-300 block">Konversi Lahan</span>
                                        <span class="text-sm font-bold text-amber-300 font-mono">4.500 Ha</span>
                                        <span class="text-[9px] text-slate-300 block">Per Tahun di Jabar</span>
                                    </div>
                                </div>

                                <div class="mt-3 p-2.5 bg-[#123624]/80 rounded-xl border border-emerald-800/60 text-[11px] text-emerald-200 w-full text-left">
                                    <strong>Potensi Greywater:</strong> Rutinitas wudu ribuan santri setiap hari menjadi sumber air daur ulang yang konsisten.
                                </div>
                            </div>
                        </div>

                        <!-- LEVEL 4: KABUPATEN (Kota Tasikmalaya / Cibeureum) -->
                        <div v-else-if="activeLevel.visual_theme === 'district'" class="w-full flex flex-col items-center">
                            <div class="relative w-full max-w-xs p-5 bg-[#163828]/90 rounded-2xl border border-[#2e6d4e]/60 flex flex-col items-center text-center">
                                <svg class="w-7 h-7 text-amber-300 mb-1" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z" /><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 11a3 3 0 11-6 0 3 3 0 016 0z" /></svg>
                                <span class="text-xs font-bold text-white uppercase tracking-wider">Kecamatan Cibeureum</span>
                                <span class="text-[10px] font-mono text-emerald-300 mt-1">7°20'58.2"S 108°14'36.8"E</span>

                                <div class="w-full mt-4 space-y-2 text-left">
                                    <div class="p-2.5 bg-[#123624]/90 rounded-xl border border-[#2e6d4e]/40 text-xs flex items-center justify-between">
                                        <span class="text-slate-200">Sumber Air Domestik</span>
                                        <span class="font-bold text-white">Sumur Bor Listrik</span>
                                    </div>
                                    <div class="p-2.5 bg-[#123624]/90 rounded-xl border border-[#2e6d4e]/40 text-xs flex items-center justify-between">
                                        <span class="text-slate-200">Biaya Listrik Pompa</span>
                                        <span class="font-bold text-amber-300">Rp400k - Rp900k/bln</span>
                                    </div>
                                    <div class="p-2.5 bg-[#123624]/90 rounded-xl border border-[#2e6d4e]/40 text-xs flex items-center justify-between">
                                        <span class="text-slate-200">Jarak ke Pasar Kota</span>
                                        <span class="font-bold text-emerald-300">15 - 20 Menit</span>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- LEVEL 5: AKAR RUMPUT (Pesantren Hidayatul Mustafid Sindangresik) -->
                        <div v-else-if="activeLevel.visual_theme === 'site'" class="w-full flex flex-col items-center">
                            <div class="relative w-full max-w-xs rounded-2xl overflow-hidden border border-emerald-500/40 shadow-xl bg-[#163828]">
                                <div class="h-32 w-full overflow-hidden relative">
                                    <img
                                        src="/foto/kosndisi pesantree/torenair.webp"
                                        alt="Toren Air Pesantren"
                                        class="w-full h-full object-cover"
                                    />
                                    <div class="absolute inset-0 bg-gradient-to-t from-[#123624] via-[#123624]/50 to-transparent"></div>
                                    <span class="absolute top-2 left-2 px-2 py-0.5 rounded bg-[#204E38] text-white font-mono text-[10px] font-bold border border-emerald-300/40">
                                        Lokasi Pilot Lapangan
                                    </span>
                                </div>
                                <div class="p-4 space-y-2 text-left">
                                    <h4 class="text-xs font-bold text-white leading-snug">
                                        Pondok Pesantren Al-Qur'an Hidayatul Mustafid
                                    </h4>
                                    <p class="text-[10px] text-emerald-100/70">
                                        Kp. Sindangresik, Kel. Awipari, Kec. Cibeureum, Kota Tasikmalaya
                                    </p>
                                    <div class="pt-2 border-t border-[#2e6d4e]/40 grid grid-cols-2 gap-2 text-[10px]">
                                        <div class="bg-[#123624] p-1.5 rounded text-emerald-100">
                                            Aset: <strong>350 Bata</strong>
                                        </div>
                                        <div class="bg-[#123624] p-1.5 rounded text-emerald-100">
                                            Surat: <strong>18/X/PPHM/2026</strong>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- LEVEL 6: RESPONS SIRAMI (Full Integrated Circuit) -->
                        <div v-else-if="activeLevel.visual_theme === 'solution'" class="w-full flex flex-col items-center">
                            <div class="relative w-full max-w-xs p-4 bg-[#163828]/90 rounded-2xl border border-emerald-500/40 flex flex-col items-center text-center">
                                <svg class="w-7 h-7 text-amber-300 mb-1" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 10V3L4 14h7v7l9-11h-7z" /></svg>
                                <span class="text-xs font-bold text-emerald-300 uppercase tracking-wider">Arsitektur Solusi SIRAMI</span>
                                <div class="w-full mt-3 space-y-2 text-left text-[11px]">
                                    <div class="p-2 bg-[#123624] rounded-lg border border-[#2e6d4e]/40 flex items-center gap-2">
                                        <span class="w-5 h-5 rounded-md bg-[#204E38] text-emerald-200 flex items-center justify-center font-bold text-[10px]">1</span>
                                        <span class="text-slate-200">Pengolahan Air & Fitoremediasi</span>
                                    </div>
                                    <div class="p-2 bg-[#123624] rounded-lg border border-[#2e6d4e]/40 flex items-center gap-2">
                                        <span class="w-5 h-5 rounded-md bg-[#204E38] text-emerald-200 flex items-center justify-center font-bold text-[10px]">2</span>
                                        <span class="text-slate-200">Sensor IoT (pH, TDS & Kekeruhan)</span>
                                    </div>
                                    <div class="p-2 bg-[#123624] rounded-lg border border-[#2e6d4e]/40 flex items-center gap-2">
                                        <span class="w-5 h-5 rounded-md bg-[#204E38] text-emerald-200 flex items-center justify-center font-bold text-[10px]">3</span>
                                        <span class="text-slate-200">Zero-Risk Gate & Uji Lab Baku</span>
                                    </div>
                                    <div class="p-2 bg-[#123624] rounded-lg border border-[#2e6d4e]/40 flex items-center gap-2">
                                        <span class="w-5 h-5 rounded-md bg-[#204E38] text-emerald-200 flex items-center justify-center font-bold text-[10px]">4</span>
                                        <span class="text-slate-200">Microgreens Padat Gizi & Usaha</span>
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>

                    <!-- Bottom Status Callout -->
                    <div class="relative z-10 pt-4 border-t border-slate-800/80 flex items-center justify-between text-[11px] text-slate-300">
                        <div class="flex items-center gap-2">
                            <span class="w-2 h-2 rounded-full" :class="activeLevel.badge_type === 'verified' ? 'bg-emerald-400' : activeLevel.badge_type === 'observation_needed' ? 'bg-amber-400' : 'bg-blue-400'"></span>
                            <span>{{ activeLevel.badge_status }}</span>
                        </div>
                        <span class="font-mono text-slate-400">{{ activeLevel.year }}</span>
                    </div>
                </div>

                <!-- Right Column: Rich Data Dossier, Metrics & Relevance -->
                <div class="lg:col-span-7 p-6 sm:p-8 flex flex-col justify-between space-y-6">

                    <div class="space-y-5">
                        <!-- Top Scale & Status Bar -->
                        <div class="flex flex-wrap items-center justify-between gap-3 pb-4 border-b border-slate-200">
                            <div>
                                <span class="text-[10px] font-bold uppercase tracking-wider text-slate-600 block">
                                    Tingkat 0{{ activeLevel.level_number }} dari 06 &middot; {{ activeLevel.scale }}
                                </span>
                                <h3 class="text-xl sm:text-2xl font-black text-slate-900 mt-1">
                                    {{ activeLevel.name }}
                                </h3>
                            </div>

                            <!-- Verified / Needed Status Badge -->
                            <div class="px-3 py-1 rounded-full text-xs font-bold border" :class="getBadgeClasses(activeLevel.badge_type)">
                                {{ activeLevel.badge_status }}
                            </div>
                        </div>

                        <!-- Core Title & Blueprint Narration (Verbatim) -->
                        <div class="space-y-2">
                            <h4 class="text-sm sm:text-base font-bold text-slate-900">
                                {{ activeLevel.title }}
                            </h4>
                            <p class="text-xs sm:text-sm text-slate-600 leading-relaxed">
                                {{ activeLevel.description }}
                            </p>
                        </div>

                        <!-- Unverified Warning Box (Strict Masterplan Rule) -->
                        <div
                            v-if="activeLevel.unverified_notice"
                            class="p-4 bg-amber-50/90 rounded-2xl border border-amber-300 text-xs text-amber-950 space-y-1"
                        >
                            <span class="font-bold flex items-center gap-1.5 text-amber-900">
                                <span>⚠️</span>
                                <span>Kebutuhan Pengumpulan Data & Validasi Lab:</span>
                            </span>
                            <p class="leading-relaxed">
                                {{ activeLevel.unverified_notice }}
                            </p>
                        </div>

                        <!-- 3 Quantitative Empirical Metrics -->
                        <div class="grid grid-cols-1 sm:grid-cols-3 gap-3">
                            <div
                                v-for="(metric, mIdx) in activeLevel.metrics"
                                :key="mIdx"
                                class="p-3.5 bg-slate-50 rounded-xl border border-slate-200/90 shadow-2xs"
                            >
                                <span class="text-base sm:text-lg font-black text-slate-900 font-mono block">
                                    {{ metric.value }}
                                </span>
                                <span class="text-xs font-bold text-slate-700 block mt-0.5">
                                    {{ metric.label }}
                                </span>
                                <span class="text-[10px] text-slate-600 block mt-1 leading-snug">
                                    {{ metric.sub }}
                                </span>
                            </div>
                        </div>

                        <!-- Relevansi Terhadap SIRAMI Box -->
                        <div class="p-4 bg-emerald-50/50 rounded-2xl border border-emerald-200/80 space-y-1.5">
                            <span class="text-xs font-bold text-emerald-900 flex items-center gap-1.5">
                                <span>🎯</span>
                                <span>Relevansi terhadap Pengembangan SIRAMI:</span>
                            </span>
                            <p class="text-xs text-slate-700 leading-relaxed">
                                {{ activeLevel.relevance }}
                            </p>
                        </div>

                        <!-- Official Source & Territory Metadata -->
                        <div class="p-3.5 bg-slate-100/70 rounded-xl border border-slate-200 text-xs space-y-1.5">
                            <div class="flex flex-col sm:flex-row sm:items-center justify-between gap-1 text-[11px]">
                                <div>
                                    <strong class="text-slate-800">Sumber Resmi:</strong>
                                    <span class="text-slate-600 ml-1">{{ activeLevel.source }}</span>
                                </div>
                                <div class="font-mono text-slate-600 shrink-0">
                                    Tahun: <strong>{{ activeLevel.year }}</strong>
                                </div>
                            </div>
                            <div class="text-[11px]">
                                <strong class="text-slate-800">Konteks Wilayah:</strong>
                                <span class="text-slate-600 ml-1">{{ activeLevel.territory }}</span>
                            </div>
                        </div>

                        <!-- Key Context Insights Bullets -->
                        <div class="space-y-1.5 pt-1">
                            <span class="text-[11px] font-bold text-slate-700 uppercase tracking-wider block">
                                Poin Kunci Tingkatan Ini:
                            </span>
                            <ul class="space-y-1 text-xs text-slate-600">
                                <li v-for="(pt, pIdx) in activeLevel.key_points" :key="pIdx" class="flex items-start gap-2">
                                    <span class="text-emerald-700 font-bold shrink-0">&bull;</span>
                                    <span>{{ pt }}</span>
                                </li>
                            </ul>
                        </div>
                    </div>

                    <!-- Bottom Navigation Between Levels -->
                    <div class="pt-4 border-t border-slate-200 flex flex-col sm:flex-row items-center justify-between gap-3 text-xs">
                        <div class="flex items-center gap-2 w-full sm:w-auto">
                            <button
                                @click="prevLevel"
                                type="button"
                                class="px-3.5 py-2 rounded-xl bg-slate-100 hover:bg-slate-200 text-slate-700 font-semibold transition cursor-pointer flex-1 sm:flex-initial text-center"
                            >
                                &larr; {{ levels[(activeIndex - 1 + levels.length) % levels.length].name }}
                            </button>
                            <button
                                @click="nextLevel"
                                type="button"
                                class="px-4 py-2 rounded-xl bg-[#204E38] hover:bg-[#163828] text-white font-bold transition cursor-pointer flex-1 sm:flex-initial text-center shadow-xs"
                            >
                                {{ levels[(activeIndex + 1) % levels.length].name }} &rarr;
                            </button>
                        </div>

                        <div class="text-[11px] text-slate-600 text-center sm:text-right">
                            *Setiap klaim data diverifikasi atau dilabeli baseline target.
                        </div>
                    </div>

                </div>

            </div>
        </div>
    </div>
</template>
