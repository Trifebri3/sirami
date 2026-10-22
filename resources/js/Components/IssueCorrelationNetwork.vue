<script setup>
import { ref, computed } from 'vue';

const activeIssueId = ref('air');

const issues = [
    {
        id: 'air',
        number: '01',
        title: 'Pengelolaan Air Cerdas',
        category: 'Isu Inti 1',
        icon: 'droplet',
        color: 'teal',
        shortDesc: 'Kualitas, efisiensi penggunaan, dan pemeliharaan sistem air wudu & IPAL.',
        fullDesc: 'Pengelolaan air tidak hanya tentang ketersediaan, tetapi kualitas, efisiensi, dan pemeliharaan. Air bekas wudu dan buangan belum dipisahkan secara terukur. Air jernih visual belum tentu aman tanpa pengujian baku mutu.',
        connections: ['iklim', 'lahan', 'pangan', 'ekonomi'],
        siramiAction: 'Menerapkan Smart Water Treatment, filtrasi bertahap, sensor monitoring pH/TDS/NTU, dan gerbang keamanan zero-risk sebelum digunakan untuk pangan.',
    },
    {
        id: 'pangan',
        number: '02',
        title: 'Produksi Pangan Komunitas',
        category: 'Isu Inti 2',
        icon: 'sprout',
        color: 'emerald',
        shortDesc: 'Budidaya ruang terbatas hemat air dengan densitas nutrisi tinggi.',
        fullDesc: 'Keterbatasan ruang di kawasan urban dan pesantren mendorong perlunya sistem budidaya yang efisien air, cepat panen, dan memiliki nilai gizi serta ekonomi tinggi.',
        connections: ['air', 'gizi', 'healthy_food', 'komunitas'],
        siramiAction: 'Mengembangkan sistem rak vertikal microgreens (panen 7-14 hari), hemat air 90%, dan wadah terkontrol aman dari kontaminasi tanah.',
    },
    {
        id: 'komunitas',
        number: '03',
        title: 'Kapasitas & Santri Berdaya',
        category: 'Isu Inti 3',
        icon: 'users',
        color: 'indigo',
        shortDesc: 'Keterlibatan aktif pengguna dalam operasional dan pengambilan keputusan.',
        fullDesc: 'Teknologi tanpa tata kelola komunitas akan gagal. Santri dan pengelola memerlukan pelatihan SOP terstandar, perlindungan keselamatan, dan rasa kepemilikan operasional.',
        connections: ['pangan', 'ekonomi', 'air', 'gizi'],
        siramiAction: 'Menyusun modul SOP budidaya, pelatihan santri pencatatan buku kas, kalibrasi sensor, serta safeguarding etika dokumentasi.',
    },
    {
        id: 'ekonomi',
        number: '04',
        title: 'Keberlanjutan Ekonomi',
        category: 'Isu Inti 4',
        icon: 'trending-up',
        color: 'amber',
        shortDesc: 'Efisiensi biaya operasional dan potensi unit produktif mandiri.',
        fullDesc: 'Peluang membangun model sirkular yang memperhitungkan biaya listrik pompa air, biaya benih, harga pokok penjualan (HPP), dan pendapatan pascapilot.',
        connections: ['komunitas', 'healthy_food', 'air', 'lahan'],
        siramiAction: 'Menetapkan RAB terukur Rp26.000.000 (12 pos terinci), pembukuan kas riil, pendampingan uji pasar mikro, dan evaluasi SROI transparan.',
    },
    {
        id: 'iklim',
        number: '05',
        title: 'Krisis Iklim & Cuaca Ekstrem',
        category: 'Isu Global & Lingkungan',
        icon: 'globe',
        color: 'cyan',
        shortDesc: 'Kemarau panjang dan penurunan muka air tanah menuntut konservasi ketat.',
        fullDesc: 'Perubahan iklim menyebabkan anomali curah hujan dan kekeringan air tanah sumur bor pesantren, sehingga daur ulang air terolah menjadi kebutuhan vital masa depan.',
        connections: ['air', 'lahan', 'pangan'],
        siramiAction: 'Mengurangi ketergantungan air sumur tanah baru dengan memanfaatkan air bekas wudu tersaring untuk sirkulasi non-konsumsi langsung.',
    },
    {
        id: 'lahan',
        number: '06',
        title: 'Degradasi & Keterbatasan Lahan',
        category: 'Isu Tata Ruang Urban',
        icon: 'building',
        color: 'rose',
        shortDesc: 'Penyusutan lahan subur perkotaan membutuhkan inovasi pertanian vertikal.',
        fullDesc: 'Alih fungsi lahan dan area padat permukiman di Tasikmalaya menyisakan ruang tanah terbatas. Pertanian konvensional boros lahan tidak lagi relevan.',
        connections: ['pangan', 'ekonomi', 'iklim'],
        siramiAction: 'Mengoptimalkan ruang teras/dak/lahan sempit pesantren dengan rak bertingkat (vertical microgreens) tanpa memerlukan bajak tanah.',
    },
    {
        id: 'gizi',
        number: '07',
        title: 'Defisit Gizi & Stunting',
        category: 'Isu Kesehatan Masyarakat',
        icon: 'heart',
        color: 'lime',
        shortDesc: 'Survei SKI 2023: 96,7% warga kurang sayur; santri butuh asupan vitamin tinggi.',
        fullDesc: 'Data Survei Kesehatan Indonesia (SKI 2023) menunjukkan 96,7% penduduk usia &ge;5 tahun kurang makan sayur. Santri asrama sering kekurangan mikronutrien penting.',
        connections: ['pangan', 'healthy_food', 'komunitas'],
        siramiAction: 'Menjadikan microgreens sebagai suplemen pangan segar harian santri dengan kandungan vitamin C, E, dan antioksidan 4-40x sayuran dewasa.',
    },
    {
        id: 'healthy_food',
        number: '08',
        title: 'Tren Gaya Hidup Sehat (Healthy Food)',
        category: 'Isu Tren & Pasar Modern',
        icon: 'sparkles',
        color: 'emerald',
        shortDesc: 'Lonjakan permintaan superfood organik membuka ceruk pasar komersial bernilai tinggi.',
        fullDesc: 'Masyarakat perkotaan kian mencari pangan fungsional bebas pestisida. Microgreens memiliki nilai jual premium di pasar kuliner sehat dan hotel/restoran.',
        connections: ['gizi', 'pangan', 'ekonomi'],
        siramiAction: 'Menghubungkan hasil panen santri dengan pasar kuliner sehat lokal dan konsumen sadar gizi untuk kemandirian ekonomi pesantren.',
    },
];

const activeIssue = computed(() => {
    return issues.find((i) => i.id === activeIssueId.value) || issues[0];
});

const connectedIssues = computed(() => {
    return issues.filter((i) => activeIssue.value.connections.includes(i.id));
});

function selectIssue(id) {
    activeIssueId.value = id;
}
</script>

<template>
    <div class="bg-white rounded-3xl border border-[#A8B99B]/50 p-6 sm:p-10 shadow-xs space-y-10">
        <!-- Interactive Tabs Header -->
        <div>
            <div class="flex flex-wrap items-center justify-between gap-4 mb-6">
                <div>
                    <span class="text-xs font-bold text-[#204E38] bg-[#E8E9E2] px-3 py-1 rounded-md border border-[#A8B99B]/40 uppercase tracking-wider">
                        Eksplorasi Jejaring Multisektor
                    </span>
                    <h3 class="text-xl sm:text-2xl font-black text-[#26312B] mt-2">
                        Peta Korelasi Isu: Dari Air & Pangan Menuju Solusi Utuh
                    </h3>
                    <p class="text-xs sm:text-sm text-slate-600 mt-1">
                        Klik pada kartu isu untuk melihat keterkaitan rantai sebab-akibat antar-isu dan bagaimana SIRAMI menjembataninya.
                    </p>
                </div>

                <div class="inline-flex items-center gap-2 px-3 py-1.5 rounded-full bg-[#F7F5EF] text-[#204E38] border border-[#A8B99B]/40 text-xs font-semibold">
                    <span class="w-2 h-2 rounded-full bg-[#204E38] animate-pulse"></span>
                    <span>Interaktif & Terkoneksi</span>
                </div>
            </div>

            <!-- Issues Grid Buttons -->
            <div class="grid grid-cols-2 sm:grid-cols-4 lg:grid-cols-8 gap-2.5">
                <button
                    v-for="item in issues"
                    :key="item.id"
                    @click="selectIssue(item.id)"
                    class="p-3 rounded-2xl border text-left transition-all duration-300 flex flex-col justify-between cursor-pointer group relative overflow-hidden"
                    :class="[
                        activeIssueId === item.id
                            ? 'bg-[#204E38] text-white border-[#204E38] shadow-md scale-102 ring-2 ring-[#A8B99B]'
                            : activeIssue.connections.includes(item.id)
                            ? 'bg-[#F7F5EF] border-[#A8B99B] text-[#204E38] hover:bg-[#E8E9E2]'
                            : 'bg-white border-slate-200 text-slate-700 hover:border-slate-300 hover:bg-slate-50'
                    ]"
                >
                    <div class="flex items-center justify-between w-full mb-2">
                        <div class="w-6 h-6 flex items-center justify-center text-current">
                            <svg v-if="item.icon === 'droplet'" class="w-5 h-5" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 2.69l5.66 5.66a8 8 0 1 1-11.31 0z" />
                            </svg>
                            <svg v-else-if="item.icon === 'sprout'" class="w-5 h-5" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 19V5m0 0a7 7 0 0 0-7 7m7-7a7 7 0 0 1 7 7" />
                            </svg>
                            <svg v-else-if="item.icon === 'users'" class="w-5 h-5" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 20h5v-2a3 3 0 00-5.356-1.857M17 20H7m10 0v-2c0-.656-.126-1.283-.356-1.857M7 20H2v-2a3 3 0 015.356-1.857M7 20v-2c0-.656.126-1.283.356-1.857m0 0a5.002 5.002 0 019.288 0M15 7a3 3 0 11-6 0 3 3 0 016 0zm6 3a2 2 0 11-4 0 2 2 0 014 0zM7 10a2 2 0 11-4 0 2 2 0 014 0z" />
                            </svg>
                            <svg v-else-if="item.icon === 'trending-up'" class="w-5 h-5" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 7h8m0 0v8m0-8l-8 8-4-4-6 6" />
                            </svg>
                            <svg v-else-if="item.icon === 'globe'" class="w-5 h-5" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 12a9 9 0 01-9 9m9-9a9 9 0 00-9-9m9 9H3m9 9a9 9 0 01-9-9m9 9c1.657 0 3-4.03 3-9s-1.343-9-3-9m0 18c-1.657 0-3-4.03-3-9s1.343-9 3-9m-9 9a9 9 0 019-9" />
                            </svg>
                            <svg v-else-if="item.icon === 'building'" class="w-5 h-5" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 21V5a2 2 0 00-2-2H7a2 2 0 00-2 2v16m14 0h2m-2 0h-5m-9 0H3m2 0h5M9 7h1m-1 4h1m4-4h1m-1 4h1m-5 10v-5a1 1 0 011-1h2a1 1 0 011 1v5m-4 0h4" />
                            </svg>
                            <svg v-else-if="item.icon === 'heart'" class="w-5 h-5" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4.318 6.318a4.5 4.5 0 000 6.364L12 20.364l7.682-7.682a4.5 4.5 0 00-6.364-6.364L12 7.636l-1.318-1.318a4.5 4.5 0 00-6.364 0z" />
                            </svg>
                            <svg v-else class="w-5 h-5" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 3v4M3 5h4M6 17v4m-2-2h4m5-16l2.286 6.857L21 12l-5.714 2.143L13 21l-2.286-6.857L5 12l5.714-2.143L13 3z" />
                            </svg>
                        </div>
                        <span
                            class="text-[10px] font-mono font-bold px-1.5 py-0.5 rounded"
                            :class="activeIssueId === item.id ? 'bg-[#163828] text-[#A8B99B]' : 'bg-slate-100 text-slate-500'"
                        >
                            {{ item.number }}
                        </span>
                    </div>
                    <div>
                        <span class="text-[10px] uppercase font-bold block truncate opacity-75">{{ item.category }}</span>
                        <h4 class="text-xs font-bold leading-tight mt-0.5 truncate">{{ item.title }}</h4>
                    </div>

                    <!-- Indicator if connected to active -->
                    <span
                        v-if="activeIssue.connections.includes(item.id)"
                        class="absolute top-1.5 right-1.5 w-1.5 h-1.5 rounded-full bg-[#A8B99B]"
                        title="Terkoneksi langsung"
                    ></span>
                </button>
            </div>
        </div>

        <!-- Detail Box: Selected Issue & Connection Narrative -->
        <div class="bg-gradient-to-br from-[#163828] via-[#204E38] to-[#163828] text-white rounded-3xl p-6 sm:p-10 shadow-xl relative overflow-hidden">
            <!-- Background Glow Decor -->
            <div class="absolute -right-16 -top-16 w-64 h-64 rounded-full bg-[#A8B99B]/10 blur-3xl pointer-events-none"></div>

            <div class="grid grid-cols-1 lg:grid-cols-12 gap-8 items-start relative z-10">
                <!-- Left: Core Active Issue Info -->
                <div class="lg:col-span-6 space-y-5">
                    <div class="flex items-center gap-3">
                        <div class="p-3 bg-white/10 rounded-2xl backdrop-blur-xs border border-white/10 text-[#A8B99B]">
                            <svg v-if="activeIssue.icon === 'droplet'" class="w-8 h-8" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 2.69l5.66 5.66a8 8 0 1 1-11.31 0z" />
                            </svg>
                            <svg v-else-if="activeIssue.icon === 'sprout'" class="w-8 h-8" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 19V5m0 0a7 7 0 0 0-7 7m7-7a7 7 0 0 1 7 7" />
                            </svg>
                            <svg v-else-if="activeIssue.icon === 'users'" class="w-8 h-8" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 20h5v-2a3 3 0 00-5.356-1.857M17 20H7m10 0v-2c0-.656-.126-1.283-.356-1.857M7 20H2v-2a3 3 0 015.356-1.857M7 20v-2c0-.656.126-1.283.356-1.857m0 0a5.002 5.002 0 019.288 0M15 7a3 3 0 11-6 0 3 3 0 016 0zm6 3a2 2 0 11-4 0 2 2 0 014 0zM7 10a2 2 0 11-4 0 2 2 0 014 0z" />
                            </svg>
                            <svg v-else-if="activeIssue.icon === 'trending-up'" class="w-8 h-8" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 7h8m0 0v8m0-8l-8 8-4-4-6 6" />
                            </svg>
                            <svg v-else-if="activeIssue.icon === 'globe'" class="w-8 h-8" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 12a9 9 0 01-9 9m9-9a9 9 0 00-9-9m9 9H3m9 9a9 9 0 01-9-9m9 9c1.657 0 3-4.03 3-9s-1.343-9-3-9m0 18c-1.657 0-3-4.03-3-9s1.343-9 3-9m-9 9a9 9 0 019-9" />
                            </svg>
                            <svg v-else-if="activeIssue.icon === 'building'" class="w-8 h-8" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 21V5a2 2 0 00-2-2H7a2 2 0 00-2 2v16m14 0h2m-2 0h-5m-9 0H3m2 0h5M9 7h1m-1 4h1m4-4h1m-1 4h1m-5 10v-5a1 1 0 011-1h2a1 1 0 011 1v5m-4 0h4" />
                            </svg>
                            <svg v-else-if="activeIssue.icon === 'heart'" class="w-8 h-8" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4.318 6.318a4.5 4.5 0 000 6.364L12 20.364l7.682-7.682a4.5 4.5 0 00-6.364-6.364L12 7.636l-1.318-1.318a4.5 4.5 0 00-6.364 0z" />
                            </svg>
                            <svg v-else class="w-8 h-8" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 3v4M3 5h4M6 17v4m-2-2h4m5-16l2.286 6.857L21 12l-5.714 2.143L13 21l-2.286-6.857L5 12l5.714-2.143L13 3z" />
                            </svg>
                        </div>
                        <div>
                            <span class="text-xs font-mono font-bold text-[#A8B99B] uppercase tracking-wider block">
                                {{ activeIssue.category }} &middot; Nomor {{ activeIssue.number }}
                            </span>
                            <h3 class="text-xl sm:text-2xl font-black text-white">
                                {{ activeIssue.title }}
                            </h3>
                        </div>
                    </div>

                    <p class="text-xs sm:text-sm text-slate-200 leading-relaxed bg-white/5 p-4 rounded-2xl border border-white/10">
                        {{ activeIssue.fullDesc }}
                    </p>

                    <!-- Respon Solutif SIRAMI -->
                    <div class="p-4 rounded-2xl bg-[#123624]/80 border border-[#A8B99B]/40 text-xs sm:text-sm space-y-1.5">
                        <span class="text-[#A8B99B] font-bold uppercase tracking-wider text-[11px] block flex items-center gap-1.5">
                            <span class="w-2 h-2 rounded-full bg-[#A8B99B] animate-ping"></span>
                            Pendekatan Terintegrasi SIRAMI:
                        </span>
                        <p class="text-slate-100 leading-relaxed text-xs">
                            {{ activeIssue.siramiAction }}
                        </p>
                    </div>
                </div>

                <!-- Right: Connected Issues Chain (Rantai Korelasi) -->
                <div class="lg:col-span-6 space-y-4">
                    <div class="flex items-center justify-between pb-2 border-b border-white/15">
                        <span class="text-xs font-bold uppercase tracking-wider text-[#A8B99B] flex items-center gap-2">
                            <svg class="w-4 h-4" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13.828 10.172a4 4 0 00-5.656 0l-4 4a4 4 0 105.656 5.656l1.102-1.101m-.758-4.899a4 4 0 005.656 0l4-4a4 4 0 00-5.656-5.656l-1.1 1.1" />
                            </svg>
                            <span>Rantai Korelasi Langsung</span>
                            <span class="bg-[#123624] text-[#A8B99B] px-2 py-0.5 rounded-full text-[10px] border border-[#A8B99B]/30">
                                {{ connectedIssues.length }} Isu Terhubung
                            </span>
                        </span>
                        <span class="text-[11px] text-slate-300">Klik isu di bawah untuk melompat</span>
                    </div>

                    <div class="space-y-3">
                        <div
                            v-for="con in connectedIssues"
                            :key="con.id"
                            @click="selectIssue(con.id)"
                            class="p-4 rounded-2xl bg-white/5 hover:bg-white/10 border border-white/10 hover:border-[#A8B99B]/50 transition-all cursor-pointer group flex items-start gap-3.5"
                        >
                            <div class="w-6 h-6 shrink-0 text-[#A8B99B] group-hover:scale-110 transition-transform mt-0.5">
                                <svg v-if="con.icon === 'droplet'" class="w-5 h-5" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 2.69l5.66 5.66a8 8 0 1 1-11.31 0z" />
                                </svg>
                                <svg v-else-if="con.icon === 'sprout'" class="w-5 h-5" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 19V5m0 0a7 7 0 0 0-7 7m7-7a7 7 0 0 1 7 7" />
                                </svg>
                                <svg v-else-if="con.icon === 'users'" class="w-5 h-5" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 20h5v-2a3 3 0 00-5.356-1.857M17 20H7m10 0v-2c0-.656-.126-1.283-.356-1.857M7 20H2v-2a3 3 0 015.356-1.857M7 20v-2c0-.656.126-1.283.356-1.857m0 0a5.002 5.002 0 019.288 0M15 7a3 3 0 11-6 0 3 3 0 016 0zm6 3a2 2 0 11-4 0 2 2 0 014 0zM7 10a2 2 0 11-4 0 2 2 0 014 0z" />
                                </svg>
                                <svg v-else-if="con.icon === 'trending-up'" class="w-5 h-5" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 7h8m0 0v8m0-8l-8 8-4-4-6 6" />
                                </svg>
                                <svg v-else-if="con.icon === 'globe'" class="w-5 h-5" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 12a9 9 0 01-9 9m9-9a9 9 0 00-9-9m9 9H3m9 9a9 9 0 01-9-9m9 9c1.657 0 3-4.03 3-9s-1.343-9-3-9m0 18c-1.657 0-3-4.03-3-9s1.343-9 3-9m-9 9a9 9 0 019-9" />
                                </svg>
                                <svg v-else-if="con.icon === 'building'" class="w-5 h-5" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 21V5a2 2 0 00-2-2H7a2 2 0 00-2 2v16m14 0h2m-2 0h-5m-9 0H3m2 0h5M9 7h1m-1 4h1m4-4h1m-1 4h1m-5 10v-5a1 1 0 011-1h2a1 1 0 011 1v5m-4 0h4" />
                                </svg>
                                <svg v-else-if="con.icon === 'heart'" class="w-5 h-5" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4.318 6.318a4.5 4.5 0 000 6.364L12 20.364l7.682-7.682a4.5 4.5 0 00-6.364-6.364L12 7.636l-1.318-1.318a4.5 4.5 0 00-6.364 0z" />
                                </svg>
                                <svg v-else class="w-5 h-5" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 3v4M3 5h4M6 17v4m-2-2h4m5-16l2.286 6.857L21 12l-5.714 2.143L13 21l-2.286-6.857L5 12l5.714-2.143L13 3z" />
                                </svg>
                            </div>
                            <div class="flex-1 min-w-0">
                                <div class="flex items-center justify-between gap-2">
                                    <h4 class="text-sm font-bold text-white group-hover:text-[#A8B99B] transition truncate">
                                        {{ con.title }}
                                    </h4>
                                    <span class="text-[10px] font-mono text-[#A8B99B] bg-[#123624] px-2 py-0.5 rounded shrink-0 border border-[#A8B99B]/30">
                                        Konek &rarr;
                                    </span>
                                </div>
                                <p class="text-xs text-slate-300 mt-1 leading-relaxed line-clamp-2">
                                    {{ con.shortDesc }}
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</template>
