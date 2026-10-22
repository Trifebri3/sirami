<script setup>
import { ref } from 'vue';

const props = defineProps({
    data: {
        type: Object,
        default: () => null,
    },
});

const defaultData = {
    title: 'Mengapa Ini mendesak?',
    subtitle: 'Kemandirian pangan sehat dimulai dari ruang yang paling dekat: rumah.',
    description: 'Tren gaya hidup sehat meningkat, namun konsumsi sayur dan buah masih rendah. Di lingkungan perumahan perkotaan, keterbatasan ruang, akses, dan biaya menjadi tantangan utama.',
    metrics: [
        {
            value: '96,7%',
            label: 'penduduk Indonesia usia ≥5 tahun kurang konsumsi sayur dan buah.',
            source: 'SKI 2023 · Kemenkes RI',
            icon: 'people',
            highlight: 'Defisit Sayur & Buah',
        },
        {
            value: '≥400 g/hari',
            label: 'anjuran konsumsi gabungan buah + sayur bagi usia > 10 tahun.',
            source: 'WHO · Healthy Diet',
            icon: 'diet',
            highlight: 'Baku Mutu Gizi WHO',
        },
        {
            value: '48%',
            label: 'konsumen Indonesia menyebut akses opsi sehat sebagai hambatan.',
            source: 'NIQ · Global State of Health & Wellness 2025',
            icon: 'cart',
            highlight: 'Hambatan Akses',
        },
        {
            value: '43%',
            label: 'menyebut biaya sebagai salah satu hambatan pilihan sehat.',
            source: 'NIQ · 2025',
            icon: 'cost',
            highlight: 'Hambatan Biaya',
        },
    ],
    context_urban: {
        tag: 'KONTEKS PERKOTAAN',
        source: 'BPS 2024',
        text: 'sayuran menyumbang 3,49% dari pengeluaran per kapita bulanan penduduk perkotaan; ini indikator belanja, bukan bukti langsung bahwa harga adalah penyebab rendahnya konsumsi.',
    },
    multi_scale: [
        {
            scale: 'GLOBAL',
            icon: 'globe',
            text: 'Pola makan sehat membutuhkan akses pangan beragam.',
        },
        {
            scale: 'NASIONAL',
            icon: 'archipelago',
            text: 'Konsumsi sayur dan buah masih belum memadai, sementara minat hidup sehat, olahraga, dan kesadaran gizi terus meningkat.',
        },
        {
            scale: 'AKAR RUMPUT',
            icon: 'home',
            text: 'Di perumahan perkotaan, ruang tanam terbatas, kebiasaan makan dan akses pangan sehat perlu diperkuat.',
        },
    ],
    intervention: {
        tag: 'CELAH INTERVENSI SIRAMI',
        headline: 'Budidaya microgreen skala rumah dapat diuji sebagai pelengkap sebagian konsumsi sayur — bukan pengganti kebutuhan pangan keluarga.',
        subtext: 'Microgreen adalah salah satu opsi sayuran, bukan solusi tunggal untuk memenuhi anjuran 400 g buah dan sayur.',
    },
    sources_footnote: 'Sumber: Kemenkes RI, SKI 2023; WHO, Healthy Diet; NIQ, Global State of Health & Wellness Indonesia 2025 (8 Juli 2025); BPS, pengeluaran per kapita menurut kelompok komoditas, 2024.',
    photos: {
        field_pond: '/foto/kosndisi pesantree/lele.webp',
    },
};

const content = props.data || defaultData;
const activeTab = ref('overview');
const showSourceModal = ref(false);
</script>

<template>
    <div class="relative overflow-hidden rounded-3xl bg-[#F6F9F5] border border-emerald-900/10 shadow-sm p-6 sm:p-10 lg:p-12 text-slate-800">
        <div class="relative z-10 grid grid-cols-1 lg:grid-cols-12 gap-8 lg:gap-10 items-start">
            <!-- Left Main Content Column (7 cols) -->
            <div class="lg:col-span-8 space-y-6">
                <!-- Header: Mengapa Ini mendesak? -->
                <div class="space-y-2">
                    <div class="flex items-center gap-2">
                        <span class="text-[11px] font-extrabold uppercase tracking-widest px-3 py-1 rounded-md bg-emerald-100/80 text-emerald-900 border border-emerald-300/60 font-mono">
                            Kajian Urgensi &middot; SYLS 2026
                        </span>
                        <span class="text-xs text-slate-500 font-mono hidden sm:inline">Data Sekunder Terverifikasi</span>
                    </div>

                    <h2 class="text-3xl sm:text-4xl lg:text-5xl font-black text-[#133E2B] tracking-tight leading-[1.15]">
                        {{ content.title }}
                    </h2>

                    <h3 class="text-base sm:text-xl font-bold text-[#1B4332] pt-1">
                        {{ content.subtitle }}
                    </h3>

                    <p class="text-xs sm:text-sm text-slate-700 max-w-3xl leading-relaxed">
                        {{ content.description }}
                    </p>
                </div>

                <!-- 4 Metrics Grid (Sesuai Persis Slide Pitch SYLS 2026) -->
                <div class="grid grid-cols-2 sm:grid-cols-4 gap-3 sm:gap-4 pt-1">
                    <!-- Metric 1: 96,7% -->
                    <div class="bg-white/95 rounded-2xl p-4 sm:p-4.5 border border-slate-200/90 shadow-2xs hover:shadow-md hover:border-emerald-600 transition flex flex-col justify-between group">
                        <div class="space-y-2">
                            <div class="w-9 h-9 rounded-xl bg-emerald-50 text-emerald-800 flex items-center justify-center font-bold text-lg group-hover:scale-110 transition-transform">
                                <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 20h5v-2a3 3 0 00-5.356-1.857M17 20H7m10 0v-2c0-.656-.126-1.283-.356-1.857M7 20H2v-2a3 3 0 015.356-1.857M7 20v-2c0-.656.126-1.283.356-1.857m0 0a5.002 5.002 0 019.288 0M15 7a3 3 0 11-6 0 3 3 0 016 0zm6 3a2 2 0 11-4 0 2 2 0 014 0zM7 10a2 2 0 11-4 0 2 2 0 014 0z" />
                                </svg>
                            </div>
                            <span class="text-2xl sm:text-3xl font-black text-[#133E2B] font-mono block tracking-tight">
                                {{ content.metrics[0].value }}
                            </span>
                            <p class="text-[11px] text-slate-700 leading-snug">
                                {{ content.metrics[0].label }}
                            </p>
                        </div>
                        <div class="mt-3 pt-2.5 border-t border-slate-100">
                            <span class="text-[10px] font-semibold text-slate-500 font-mono block truncate">
                                {{ content.metrics[0].source }}
                            </span>
                        </div>
                    </div>

                    <!-- Metric 2: >=400 g/hari -->
                    <div class="bg-white/95 rounded-2xl p-4 sm:p-4.5 border border-slate-200/90 shadow-2xs hover:shadow-md hover:border-emerald-600 transition flex flex-col justify-between group">
                        <div class="space-y-2">
                            <div class="w-9 h-9 rounded-xl bg-teal-50 text-teal-800 flex items-center justify-center font-bold text-lg group-hover:scale-110 transition-transform">
                                <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 6.253v13m0-13C10.832 5.477 9.246 5 7.5 5S4.168 5.477 3 6.253v13C4.168 18.477 5.754 18 7.5 18s3.332.477 4.5 1.253m0-13C13.168 5.477 14.754 5 16.5 5c1.747 0 3.332.477 4.5 1.253v13C19.832 18.477 18.247 18 16.5 18c-1.746 0-3.332.477-4.5 1.253" />
                                </svg>
                            </div>
                            <span class="text-2xl sm:text-3xl font-black text-[#133E2B] font-mono block tracking-tight">
                                {{ content.metrics[1].value }}
                            </span>
                            <p class="text-[11px] text-slate-700 leading-snug">
                                {{ content.metrics[1].label }}
                            </p>
                        </div>
                        <div class="mt-3 pt-2.5 border-t border-slate-100">
                            <span class="text-[10px] font-semibold text-slate-500 font-mono block truncate">
                                {{ content.metrics[1].source }}
                            </span>
                        </div>
                    </div>

                    <!-- Metric 3: 48% -->
                    <div class="bg-white/95 rounded-2xl p-4 sm:p-4.5 border border-slate-200/90 shadow-2xs hover:shadow-md hover:border-emerald-600 transition flex flex-col justify-between group">
                        <div class="space-y-2">
                            <div class="w-9 h-9 rounded-xl bg-amber-50 text-amber-800 flex items-center justify-center font-bold text-lg group-hover:scale-110 transition-transform">
                                <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 3h2l.4 2M7 13h10l4-8H5.4M7 13L5.4 5M7 13l-2.293 2.293c-.63.63-.184 1.707.707 1.707H17m0 0a2 2 0 100 4 2 2 0 000-4zm-8 2a2 2 0 11-4 0 2 2 0 014 0z" />
                                </svg>
                            </div>
                            <span class="text-2xl sm:text-3xl font-black text-[#133E2B] font-mono block tracking-tight">
                                {{ content.metrics[2].value }}
                            </span>
                            <p class="text-[11px] text-slate-700 leading-snug">
                                {{ content.metrics[2].label }}
                            </p>
                        </div>
                        <div class="mt-3 pt-2.5 border-t border-slate-100">
                            <span class="text-[10px] font-semibold text-slate-500 font-mono block truncate">
                                {{ content.metrics[2].source }}
                            </span>
                        </div>
                    </div>

                    <!-- Metric 4: 43% -->
                    <div class="bg-white/95 rounded-2xl p-4 sm:p-4.5 border border-slate-200/90 shadow-2xs hover:border-emerald-600 transition flex flex-col justify-between group">
                        <div class="space-y-2">
                            <div class="w-9 h-9 rounded-xl bg-rose-50 text-rose-800 flex items-center justify-center font-bold text-lg group-hover:scale-110 transition-transform">
                                <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8c-1.657 0-3 .895-3 2s1.343 2 3 2 3 .895 3 2-1.343 2-3 2m0-8c1.11 0 2.08.402 2.599 1M12 8V7m0 1v8m0 0v1m0-1c-1.11 0-2.08-.402-2.599-1M21 12a9 9 0 11-18 0 9 9 0 0118 0z" />
                                </svg>
                            </div>
                            <span class="text-2xl sm:text-3xl font-black text-[#133E2B] font-mono block tracking-tight">
                                {{ content.metrics[3].value }}
                            </span>
                            <p class="text-[11px] text-slate-700 leading-snug">
                                {{ content.metrics[3].label }}
                            </p>
                        </div>
                        <div class="mt-3 pt-2.5 border-t border-slate-100">
                            <span class="text-[10px] font-semibold text-slate-500 font-mono block truncate">
                                {{ content.metrics[3].source }}
                            </span>
                        </div>
                    </div>
                </div>

                <!-- Konteks Perkotaan Banner -->
                <div class="bg-white/90 rounded-2xl p-4 border border-slate-200/90 flex flex-col sm:flex-row items-start sm:items-center gap-3.5 shadow-2xs">
                    <div class="flex items-center gap-2 shrink-0">
                        <span class="w-8 h-8 rounded-lg bg-slate-100 text-slate-700 flex items-center justify-center font-bold">
                            <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 19v-6a2 2 0 00-2-2H5a2 2 0 00-2 2v6a2 2 0 002 2h2a2 2 0 002-2zm0 0V9a2 2 0 012-2h2a2 2 0 012 2v10m-6 0a2 2 0 002 2h2a2 2 0 002-2m0 0V5a2 2 0 012-2h2a2 2 0 012 2v14a2 2 0 01-2 2h-2a2 2 0 01-2-2z" />
                            </svg>
                        </span>
                        <span class="text-xs font-black uppercase tracking-wider text-slate-800">
                            {{ content.context_urban.tag }}
                        </span>
                    </div>

                    <div class="h-4 w-px bg-slate-300 hidden sm:block"></div>

                    <p class="text-xs text-slate-700 leading-relaxed">
                        <strong class="font-bold text-slate-900">{{ content.context_urban.source }}:</strong> {{ content.context_urban.text }}
                    </p>
                </div>

                <!-- Multi-Scale Flow: GLOBAL -> NASIONAL -> AKAR RUMPUT -->
                <div class="grid grid-cols-1 sm:grid-cols-3 gap-3 pt-1">
                    <!-- Global -->
                    <div class="bg-white/90 rounded-2xl p-4 border border-slate-200/90 shadow-2xs relative flex flex-col justify-between space-y-2">
                        <div class="flex items-center justify-between">
                            <span class="text-xs font-black tracking-wider text-[#133E2B] flex items-center gap-2">
                                <span class="w-7 h-7 rounded-lg bg-emerald-50 text-[#204E38] flex items-center justify-center text-xs font-bold border border-emerald-200">
                                    <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3.055 11H5a2 2 0 012 2v1a2 2 0 002 2 2 2 0 012 2v2.945M8 3.935V5.5A2.5 2.5 0 0010.5 8h.5a2 2 0 012 2 2 2 0 104 0 2 2 0 012-2h1.064M15 20.488V18a2 2 0 012-2h3.064M21 12a9 9 0 11-18 0 9 9 0 0118 0z" /></svg>
                                </span>
                                <span>GLOBAL</span>
                            </span>
                            <span class="text-slate-300 font-bold hidden sm:inline">&rarr;</span>
                        </div>
                        <p class="text-xs text-slate-700 leading-relaxed">
                            {{ content.multi_scale[0].text }}
                        </p>
                    </div>

                    <!-- Nasional -->
                    <div class="bg-white/90 rounded-2xl p-4 border border-slate-200/90 shadow-2xs relative flex flex-col justify-between space-y-2">
                        <div class="flex items-center justify-between">
                            <span class="text-xs font-black tracking-wider text-[#133E2B] flex items-center gap-2">
                                <span class="w-7 h-7 rounded-lg bg-teal-50 text-[#356B61] flex items-center justify-center text-[10px] font-bold font-mono border border-teal-200">
                                    RI
                                </span>
                                <span>NASIONAL</span>
                            </span>
                            <span class="text-slate-300 font-bold hidden sm:inline">&rarr;</span>
                        </div>
                        <p class="text-xs text-slate-700 leading-relaxed">
                            {{ content.multi_scale[1].text }}
                        </p>
                    </div>

                    <!-- Akar Rumput -->
                    <div class="bg-white/90 rounded-2xl p-4 border border-slate-200/90 shadow-2xs relative flex flex-col justify-between space-y-2">
                        <div class="flex items-center justify-between">
                            <span class="text-xs font-black tracking-wider text-[#133E2B] flex items-center gap-2">
                                <span class="w-7 h-7 rounded-lg bg-amber-50 text-amber-800 flex items-center justify-center text-xs font-bold border border-amber-200">
                                    <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 12l2-2m0 0l7-7 7 7M5 10v10a1 1 0 001 1h3m10-11l2 2m-2-2v10a1 1 0 01-1 1h-3m-6 0a1 1 0 001-1v-4a1 1 0 011-1h2a1 1 0 011 1v4a1 1 0 001 1m-6 0h6" /></svg>
                                </span>
                                <span>AKAR RUMPUT</span>
                            </span>
                            <span class="text-emerald-700 font-mono text-[10px] font-bold">Fokus SIRAMI</span>
                        </div>
                        <p class="text-xs text-slate-700 leading-relaxed">
                            {{ content.multi_scale[2].text }}
                        </p>
                    </div>
                </div>

                <!-- Celah Intervensi SIRAMI Box -->
                <div class="rounded-2xl bg-white border-2 border-emerald-600/30 shadow-md p-4 sm:p-5 flex flex-col sm:flex-row items-start sm:items-center gap-4">
                    <!-- Left Tag / Badge -->
                    <div class="rounded-xl bg-[#204E38] text-white p-3.5 shrink-0 flex sm:flex-col items-center gap-2 sm:gap-1 text-center min-w-[150px] justify-center shadow-xs">
                        <svg class="w-6 h-6 text-emerald-300" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 10V3L4 14h7v7l9-11h-7z" /></svg>
                        <div class="text-left sm:text-center">
                            <span class="text-[9px] font-bold tracking-widest uppercase text-emerald-300 block font-mono">
                                CELAH INTERVENSI
                            </span>
                            <span class="text-base font-black tracking-wider block font-mono">
                                SIRAMI
                            </span>
                        </div>
                    </div>

                    <!-- Right Narrative -->
                    <div class="space-y-1.5 flex-1">
                        <p class="text-xs sm:text-sm font-bold text-slate-900 leading-snug">
                            {{ content.intervention.headline }}
                        </p>
                        <p class="text-[11px] sm:text-xs text-slate-600 leading-relaxed">
                            {{ content.intervention.subtext }}
                        </p>
                    </div>
                </div>

                <!-- Sources Footnote -->
                <div class="pt-2 text-[10px] sm:text-[11px] text-slate-500 font-mono leading-relaxed">
                    {{ content.sources_footnote }}
                </div>
            </div>

            <!-- Right Visual Showcase Column (4 cols) (Persis Komposisi Slide) -->
            <div class="lg:col-span-4 space-y-4">
                <!-- 1. Real Concrete Water Basin Photo (Kolam / Bak Air Lapangan) -->
                <div class="rounded-2xl overflow-hidden border-2 border-white shadow-lg bg-[#163828] aspect-[4/3] relative group">
                    <img
                        :src="content.photos?.field_pond || '/foto/kosndisi pesantree/lele.webp'"
                        alt="Kondisi Bak Air & Kolam Lapangan Pesantren"
                        class="w-full h-full object-cover group-hover:scale-105 transition-transform duration-500"
                        loading="lazy"
                    />
                    <div class="absolute inset-0 bg-gradient-to-t from-[#163828]/85 via-transparent to-transparent"></div>
                    <div class="absolute top-3 left-3">
                        <span class="px-2.5 py-1 rounded-md bg-[#163828]/85 backdrop-blur-xs text-white font-mono text-[10px] font-bold uppercase tracking-wider border border-white/20">
                            Fasilitas Air Lapangan
                        </span>
                    </div>
                    <div class="absolute bottom-3 left-3 right-3 text-white">
                        <h4 class="text-xs font-bold leading-tight">Bak Penampung & Unit Pengolahan Air</h4>
                        <p class="text-[10px] text-slate-300 mt-0.5">Pontensi daur ulang wudu & integrasi akuakultur</p>
                    </div>
                </div>

                <!-- 2. Microgreens 2-Tier Rack Illustration (High-Fidelity SVG Art) -->
                <div class="rounded-2xl overflow-hidden border border-emerald-900/15 bg-white p-5 shadow-sm space-y-3 relative group">
                    <div class="flex items-center justify-between">
                        <span class="text-[11px] font-extrabold uppercase tracking-wider text-emerald-900 font-mono flex items-center gap-1.5">
                            <span class="w-2 h-2 rounded-full bg-emerald-600"></span>
                            <span>Model Budidaya Vertikal</span>
                        </span>
                        <span class="text-[10px] font-bold text-slate-500 font-mono bg-slate-100 px-2 py-0.5 rounded">
                            2 Tingkat
                        </span>
                    </div>

                    <!-- Bespoke Vector Graphic of 2-Tier Microgreens Rack with Planter Boxes -->
                    <div class="w-full aspect-[4/3] bg-gradient-to-b from-emerald-50/50 to-emerald-100/30 rounded-xl p-3 flex items-center justify-center relative overflow-hidden">
                        <svg viewBox="0 0 320 240" class="w-full h-full max-h-[220px]" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <!-- Background Subtle Wall/Window Grid -->
                            <line x1="20" y1="50" x2="300" y2="50" stroke="#E2E8F0" stroke-width="1" stroke-dasharray="3 3"/>
                            <line x1="20" y1="120" x2="300" y2="120" stroke="#E2E8F0" stroke-width="1" stroke-dasharray="3 3"/>

                            <!-- Green Metal Rack Frame (Dark Forest Green) -->
                            <!-- Back Legs -->
                            <rect x="52" y="30" width="8" height="180" rx="3" fill="#1B4332" />
                            <rect x="260" y="30" width="8" height="180" rx="3" fill="#1B4332" />

                            <!-- Bottom Floor Stand -->
                            <rect x="44" y="206" width="24" height="6" rx="3" fill="#1B4332" />
                            <rect x="252" y="206" width="24" height="6" rx="3" fill="#1B4332" />

                            <!-- Cross Bars / Shelves -->
                            <rect x="48" y="90" width="224" height="8" rx="2" fill="#2D6A4F" />
                            <rect x="48" y="172" width="224" height="8" rx="2" fill="#2D6A4F" />

                            <!-- Front Legs -->
                            <rect x="56" y="35" width="9" height="175" rx="3" fill="#2D6A4F" />
                            <rect x="255" y="35" width="9" height="175" rx="3" fill="#2D6A4F" />

                            <!-- TOP SHELF: White Planter Box with Microgreens -->
                            <!-- Tray Shadow -->
                            <ellipse cx="160" cy="94" rx="90" ry="6" fill="#000000" fill-opacity="0.08"/>
                            <!-- White Planter Box Top -->
                            <rect x="68" y="60" width="184" height="28" rx="4" fill="#FFFFFF" stroke="#CBD5E1" stroke-width="1.5" />
                            <!-- Tray Rim Accent -->
                            <rect x="65" y="58" width="190" height="6" rx="2" fill="#F8FAFC" stroke="#94A3B8" stroke-width="1"/>
                            <!-- Microgreens Seedlings Top -->
                            <g>
                                <!-- Soil Base -->
                                <rect x="70" y="60" width="180" height="6" fill="#583110" />
                                <!-- Dense Green Sprouts (Layered circles and stems) -->
                                <circle cx="80" cy="48" r="6" fill="#4ADE80" />
                                <circle cx="92" cy="45" r="7" fill="#22C55E" />
                                <circle cx="106" cy="47" r="6.5" fill="#16A34A" />
                                <circle cx="118" cy="44" r="7" fill="#4ADE80" />
                                <circle cx="132" cy="46" r="6" fill="#22C55E" />
                                <circle cx="145" cy="43" r="7.5" fill="#16A34A" />
                                <circle cx="160" cy="45" r="7" fill="#4ADE80" />
                                <circle cx="174" cy="44" r="6.5" fill="#22C55E" />
                                <circle cx="188" cy="47" r="7" fill="#16A34A" />
                                <circle cx="202" cy="43" r="6.5" fill="#4ADE80" />
                                <circle cx="216" cy="46" r="7" fill="#22C55E" />
                                <circle cx="228" cy="44" r="6" fill="#16A34A" />
                                <circle cx="240" cy="47" r="6.5" fill="#4ADE80" />

                                <!-- Second denser top layer of sprouts -->
                                <circle cx="86" cy="42" r="5" fill="#86EFAC" />
                                <circle cx="99" cy="40" r="5.5" fill="#4ADE80" />
                                <circle cx="112" cy="41" r="5" fill="#86EFAC" />
                                <circle cx="125" cy="39" r="6" fill="#22C55E" />
                                <circle cx="139" cy="40" r="5.5" fill="#86EFAC" />
                                <circle cx="153" cy="38" r="6" fill="#4ADE80" />
                                <circle cx="167" cy="40" r="5" fill="#86EFAC" />
                                <circle cx="181" cy="39" r="5.5" fill="#22C55E" />
                                <circle cx="195" cy="41" r="5" fill="#86EFAC" />
                                <circle cx="209" cy="38" r="5.5" fill="#4ADE80" />
                                <circle cx="222" cy="40" r="5" fill="#86EFAC" />
                                <circle cx="234" cy="41" r="4.5" fill="#4ADE80" />
                            </g>

                            <!-- BOTTOM SHELF: White Planter Box with Microgreens -->
                            <!-- Tray Shadow -->
                            <ellipse cx="160" cy="176" rx="90" ry="6" fill="#000000" fill-opacity="0.08"/>
                            <!-- White Planter Box Bottom -->
                            <rect x="68" y="142" width="184" height="28" rx="4" fill="#FFFFFF" stroke="#CBD5E1" stroke-width="1.5" />
                            <!-- Tray Rim Accent -->
                            <rect x="65" y="140" width="190" height="6" rx="2" fill="#F8FAFC" stroke="#94A3B8" stroke-width="1"/>
                            <!-- Microgreens Seedlings Bottom -->
                            <g>
                                <!-- Soil Base -->
                                <rect x="70" y="142" width="180" height="6" fill="#583110" />
                                <!-- Dense Green Sprouts -->
                                <circle cx="80" cy="130" r="6" fill="#4ADE80" />
                                <circle cx="92" cy="127" r="7" fill="#22C55E" />
                                <circle cx="106" cy="129" r="6.5" fill="#16A34A" />
                                <circle cx="118" cy="126" r="7" fill="#4ADE80" />
                                <circle cx="132" cy="128" r="6" fill="#22C55E" />
                                <circle cx="145" cy="125" r="7.5" fill="#16A34A" />
                                <circle cx="160" cy="127" r="7" fill="#4ADE80" />
                                <circle cx="174" cy="126" r="6.5" fill="#22C55E" />
                                <circle cx="188" cy="129" r="7" fill="#16A34A" />
                                <circle cx="202" cy="125" r="6.5" fill="#4ADE80" />
                                <circle cx="216" cy="128" r="7" fill="#22C55E" />
                                <circle cx="228" cy="126" r="6" fill="#16A34A" />
                                <circle cx="240" cy="129" r="6.5" fill="#4ADE80" />

                                <!-- Second denser layer -->
                                <circle cx="86" cy="124" r="5" fill="#86EFAC" />
                                <circle cx="99" cy="122" r="5.5" fill="#4ADE80" />
                                <circle cx="112" cy="123" r="5" fill="#86EFAC" />
                                <circle cx="125" cy="121" r="6" fill="#22C55E" />
                                <circle cx="139" cy="122" r="5.5" fill="#86EFAC" />
                                <circle cx="153" cy="120" r="6" fill="#4ADE80" />
                                <circle cx="167" cy="122" r="5" fill="#86EFAC" />
                                <circle cx="181" cy="121" r="5.5" fill="#22C55E" />
                                <circle cx="195" cy="123" r="5" fill="#86EFAC" />
                                <circle cx="209" cy="120" r="5.5" fill="#4ADE80" />
                                <circle cx="222" cy="122" r="5" fill="#86EFAC" />
                                <circle cx="234" cy="123" r="4.5" fill="#4ADE80" />
                            </g>
                        </svg>
                    </div>

                    <div class="space-y-1">
                        <h4 class="text-xs font-bold text-slate-900">Spesifikasi Rak Tanam Vertikal SIRAMI</h4>
                        <p class="text-[11px] text-slate-600 leading-relaxed">
                            Kapasitas modular hemat ruang, efisiensi air semprot kabut mikro, panen cepat 7–14 hari.
                        </p>
                    </div>
                </div>

                <!-- Callout Badge: Pelengkap Konsumsi Sayur -->
                <div class="p-3.5 rounded-xl bg-emerald-100/70 border border-emerald-300 text-emerald-950 text-xs flex items-center gap-2.5">
                    <span class="w-2.5 h-2.5 rounded-full bg-[#204E38] shrink-0"></span>
                    <span class="leading-snug">
                        <strong>Pelengkap Gizi Mikro:</strong> Kaya sulforaphane, vitamin C & zat besi untuk asupan harian keluarga & santri.
                    </span>
                </div>
            </div>
        </div>
    </div>
</template>
