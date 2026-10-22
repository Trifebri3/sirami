<script setup>
import { Head, Link } from '@inertiajs/vue3';
import { ref } from 'vue';
import PublicLayout from '@/Layouts/PublicLayout.vue';
import IssueCorrelationNetwork from '@/Components/IssueCorrelationNetwork.vue';
import GlobalToLocalMapping from '@/Components/GlobalToLocalMapping.vue';
import InteractiveWaterSystem from '@/Components/InteractiveWaterSystem.vue';
import MengapaMendesakSection from '@/Components/MengapaMendesakSection.vue';
import KomunitasKonteksSection from '@/Components/KomunitasKonteksSection.vue';
import SkalabilitasReplikasiSection from '@/Components/SkalabilitasReplikasiSection.vue';
import TeamEvidenceShowcase from '@/Components/TeamEvidenceShowcase.vue';
import BuktiReferensiSection from '@/Components/BuktiReferensiSection.vue';
import SiklusOperasionalSection from '@/Components/SiklusOperasionalSection.vue';
import MariTerhubungSection from '@/Components/MariTerhubungSection.vue';

const props = defineProps({
    canLogin: Boolean,
    canRegister: Boolean,
    laravelVersion: String,
    phpVersion: String,
    logo: Object,
    quickStats: Array,
    challenges: Array,
    solutions: Array,
    pilotInfo: Object,
    expectedImpacts: Array,
    budget: Object,
    team: Array,
    heroPhotos: Object,
    showcasePhotos: Array,
    multilevelMapping: Array,
    implementationActivities: Array,
    mengapaMendesak: Object,
    komunitasKonteks: Object,
    scalabilityReplication: Object,
    teamEvidence: Array,
    buktiReferensi: Object,
});

const activeActivityStep = ref('01');
const isModalOpen = ref(false);
const selectedPhoto = ref(null);
const formSubmitted = ref(false);

const formData = ref({
    name: '',
    organization: '',
    email: '',
    phone: '',
    type: 'pendanaan',
    note: '',
});

function openCollab(type = 'pendanaan') {
    formData.value.type = type;
    isModalOpen.value = true;
    formSubmitted.value = false;
}

function submitForm() {
    formSubmitted.value = true;
    setTimeout(() => {
        isModalOpen.value = false;
        formSubmitted.value = false;
        formData.value = { name: '', organization: '', email: '', phone: '', type: 'pendanaan', note: '' };
    }, 2500);
}

function openLightbox(photo) {
    selectedPhoto.value = photo;
}

function openSylsModal() {
    if (typeof window !== 'undefined') {
        window.dispatchEvent(new CustomEvent('open-syls-modal'));
    }
}
</script>

<template>
    <PublicLayout :logo="logo" title="SIRAMI - Menghubungkan Air, Pangan & Ekonomi dari Akar Komunitas">
        <!-- 1. HERO SECTION (BAGIAN 1 BERANDA - SESUAI SPESIFIKASI SYLS 2026) -->
        <section id="beranda" class="relative overflow-hidden pt-8 pb-16 lg:pt-14 lg:pb-24 border-b border-slate-200/80 bg-gradient-to-b from-white via-white to-emerald-50/25">
            <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
                <div class="grid grid-cols-1 lg:grid-cols-12 gap-12 items-center">
                    
                    <!-- Left Hero Content -->
                    <div class="lg:col-span-7 space-y-6">
                        <!-- Top Badges: UIN Bandung & SYLS 2026 -->
                        <div class="flex flex-wrap items-center gap-2">
                            <div class="inline-flex items-center gap-2 px-3.5 py-1.5 rounded-full bg-emerald-100/90 border border-emerald-300 text-emerald-950 text-xs font-bold uppercase tracking-wider">
                                <img :src="logo?.uin || '/logo/logouin.svg'" class="h-4 w-auto" alt="UIN Bandung" />
                                <span>Inisiatif Mahasiswa UIN Sunan Gunung Djati Bandung</span>
                            </div>
                            <button
                                type="button"
                                @click="openSylsModal"
                                class="inline-flex items-center gap-2 px-3.5 py-1.5 rounded-full bg-gradient-to-r from-amber-50 via-white to-amber-50 border border-amber-300 hover:border-amber-400 text-amber-950 text-xs font-bold uppercase tracking-wider shadow-2xs hover:shadow-sm hover:scale-[1.01] transition cursor-pointer group"
                                title="Klik untuk membaca penjelasan lengkap proposal inovasi untuk program SYLS 2026"
                            >
                                <span class="bg-white px-2 py-0.5 rounded shadow-2xs border border-amber-200/70 flex items-center">
                                    <img :src="logo?.syls || '/syls.png'" class="h-4 sm:h-5 w-auto object-contain" alt="SYLS 2026" />
                                </span>
                                <span>Karya Inovasi SYLS 2026</span>
                                <span class="text-[10px] bg-amber-200/90 group-hover:bg-amber-300 text-amber-900 px-2 py-0.5 rounded font-mono font-bold transition flex items-center gap-0.5">
                                    <span>Buka Detail</span>
                                    <span>↗</span>
                                </span>
                            </button>
                        </div>

                        <!-- Judul Utama -->
                        <h1 class="text-3xl sm:text-5xl lg:text-[45px] font-black text-[#26312B] tracking-tight leading-[1.18]">
                            SIRAMI &mdash; Menghubungkan Air, Pangan, dan <span class="text-[#204E38]">Ekonomi Komunitas</span>.
                        </h1>

                        <!-- Deskripsi Lengkap -->
                        <div class="space-y-3 text-sm sm:text-base text-slate-600 leading-relaxed max-w-2xl">
                            <p class="font-medium text-slate-700">
                                Inovasi sosial berbasis riset yang mengintegrasikan pengolahan air, teknologi tepat guna, produksi pangan, dan kewirausahaan untuk membangun komunitas yang lebih mandiri.
                            </p>
                            <p class="text-xs sm:text-sm text-slate-600">
                                Berangkat dari kebutuhan nyata masyarakat sasaran, SIRAMI mempersiapkan integrasi water treatment bertahap, smart monitoring sensor IoT terkalibrasi, dan budidaya microgreens padat nutrisi di lahan terbatas.
                            </p>
                            <p class="text-xs sm:text-sm text-slate-600">
                                Melalui kolaborasi bersama komunitas dan mitra, SIRAMI diarahkan untuk menguji kelayakan solusi dalam kondisi nyata, mengevaluasi dampaknya secara transparan, serta mengembangkan model yang berpotensi direplikasi.
                            </p>
                        </div>

                        <!-- Tombol Aksi Utama (CTA Buttons) -->
                        <div class="flex flex-wrap items-center gap-3 pt-2">
                            <!-- 1. Jelajahi Solusi SIRAMI -->
                            <Link
                                :href="route('solusi')"
                                class="px-5 py-3.5 rounded-xl bg-[#204E38] hover:bg-[#183c2b] text-white font-bold text-xs sm:text-sm transition-all shadow-md shadow-emerald-900/20 hover:shadow-lg flex items-center gap-2 cursor-pointer"
                            >
                                <span>Jelajahi Solusi SIRAMI</span>
                                <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M14 5l7 7m0 0l-7 7m7-7H3" /></svg>
                            </Link>

                            <!-- 2. Lihat Model Implementasi -->
                            <Link
                                :href="route('pilot.project')"
                                class="px-5 py-3.5 rounded-xl bg-[#26312B] hover:bg-[#1a221e] text-white font-bold text-xs sm:text-sm transition-all shadow-md hover:shadow-lg flex items-center gap-2 cursor-pointer"
                            >
                                <span>Lihat Model Implementasi</span>
                                <span class="text-amber-300 font-mono text-xs">(RAB Rp26 Jt)</span>
                            </Link>

                            <!-- 3. Pelajari Riset & Bukti -->
                            <Link
                                :href="route('riset.bukti')"
                                class="px-4.5 py-3.5 rounded-xl bg-white border border-[#E8E9E2] hover:border-[#204E38] text-[#26312B] font-semibold text-xs sm:text-sm transition flex items-center gap-2 shadow-2xs hover:bg-[#F7F5EF]"
                            >
                                <span>Pelajari Riset & Dampak</span>
                                <span>&rarr;</span>
                            </Link>
                        </div>

                        <!-- Informasi Pendukung Hero -->
                        <div class="pt-3 border-t border-[#E8E9E2] flex flex-wrap items-center gap-4 text-xs font-bold text-slate-700">
                            <div class="flex items-center gap-2">
                                <span class="w-5 h-5 rounded-full bg-emerald-100 text-[#204E38] flex items-center justify-center">
                                    <svg class="w-3 h-3" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="3" d="M5 13l4 4L19 7"/></svg>
                                </span>
                                <span>Berbasis Kajian Ilmiah</span>
                            </div>
                            <span class="text-slate-300 hidden sm:inline">&bull;</span>
                            <div class="flex items-center gap-2">
                                <span class="w-5 h-5 rounded-full bg-teal-100 text-[#356B61] flex items-center justify-center">
                                    <svg class="w-3 h-3" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="3" d="M5 13l4 4L19 7"/></svg>
                                </span>
                                <span>Dikembangkan Bersama Komunitas</span>
                            </div>
                            <span class="text-slate-300 hidden sm:inline">&bull;</span>
                            <div class="flex items-center gap-2">
                                <span class="w-5 h-5 rounded-full bg-amber-100 text-amber-800 flex items-center justify-center">
                                    <svg class="w-3 h-3" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="3" d="M5 13l4 4L19 7"/></svg>
                                </span>
                                <span>Menuju Implementasi Lapangan</span>
                            </div>
                        </div>
                    </div>

                    <!-- Right Hero Visual Showcase (Collage of Real Photos) -->
                    <div class="lg:col-span-5 relative">
                        <div class="grid grid-cols-12 gap-3 relative">
                            <!-- Main Large Photo (Toren & Water Infrastructure) -->
                            <div class="col-span-8 rounded-2xl overflow-hidden border-2 border-white shadow-xl bg-[#163828] aspect-[4/3] relative group">
                                <img
                                    :src="heroPhotos?.main || '/foto/kosndisi pesantree/torenair.webp'"
                                    alt="Fasilitas Air Pesantren"
                                    class="w-full h-full object-cover group-hover:scale-105 transition-transform duration-500"
                                />
                                <div class="absolute inset-0 bg-gradient-to-t from-[#163828]/80 via-transparent to-transparent"></div>
                                <div class="absolute bottom-3 left-3 right-3 text-white">
                                    <span class="text-[10px] font-bold uppercase tracking-wider px-2 py-0.5 rounded bg-emerald-600/90 backdrop-blur-xs">
                                        Infrastruktur Riil
                                    </span>
                                    <p class="text-xs font-bold mt-1">Fasilitas Toren Air & IPAL Pesantren</p>
                                </div>
                            </div>

                            <!-- Right Top Photo (Santri Activities) -->
                            <div class="col-span-4 rounded-2xl overflow-hidden border-2 border-white shadow-md bg-[#163828] aspect-square relative group">
                                <img
                                    :src="heroPhotos?.santri || '/foto/kosndisi pesantree/santri.webp'"
                                    alt="Santri Pesantren"
                                    class="w-full h-full object-cover group-hover:scale-105 transition-transform duration-500"
                                />
                                <div class="absolute bottom-2 left-2 right-2 text-white">
                                    <p class="text-[10px] font-bold bg-[#163828]/80 px-1.5 py-0.5 rounded backdrop-blur-xs truncate">Santri Aktif</p>
                                </div>
                            </div>

                            <!-- Right Bottom Photo (Microgreens / Discussion) -->
                            <div class="col-span-5 rounded-2xl overflow-hidden border-2 border-white shadow-md bg-[#163828] aspect-[4/3] relative group">
                                <img
                                    :src="heroPhotos?.microgreens || '/foto/diskusi pengelola/diskusibudidayamicrogreen.webp'"
                                    alt="Budidaya Microgreens"
                                    class="w-full h-full object-cover group-hover:scale-105 transition-transform duration-500"
                                />
                                <div class="absolute bottom-2 left-2 right-2 text-white">
                                    <p class="text-[10px] font-bold bg-[#163828]/80 px-1.5 py-0.5 rounded backdrop-blur-xs truncate">Budidaya Microgreens</p>
                                </div>
                            </div>

                            <!-- Bottom Large Badge Card (IoT Sensor Device) -->
                            <div class="col-span-7 rounded-2xl overflow-hidden border-2 border-white shadow-lg bg-emerald-900 text-white p-3.5 flex items-center gap-3">
                                <div class="w-14 h-14 rounded-xl overflow-hidden bg-[#163828] shrink-0 border border-emerald-400/40">
                                    <img
                                        :src="heroPhotos?.iot || '/foto/produkinovasi utama/alatutama cek kondisi air.webp'"
                                        alt="Alat IoT SIRAMI"
                                        class="w-full h-full object-cover"
                                    />
                                </div>
                                <div class="min-w-0">
                                    <span class="text-[10px] font-bold uppercase tracking-wider text-emerald-300">Riset Teruji</span>
                                    <h4 class="text-xs font-bold text-white truncate">Smart Water IoT Prototype</h4>
                                    <p class="text-[11px] text-emerald-100/80 truncate">Parameter pH, TDS & Kekeruhan</p>
                                </div>
                            </div>
                        </div>

                        <!-- Floating UIN Student Creator Pill -->
                        <div class="absolute -top-3 -left-2 z-10 bg-white/95 backdrop-blur-xs border border-emerald-300 rounded-full px-3.5 py-1.5 shadow-md flex items-center gap-2 text-xs font-bold text-slate-800">
                            <img :src="logo?.uin || '/logo/logouin.svg'" class="h-4 w-auto" alt="UIN Bandung" />
                            <span>Gagasan Mahasiswa UIN SGD Bandung</span>
                        </div>

                        <!-- Floating SYLS Badge -->
                        <div class="absolute -bottom-3 right-6 bg-white border border-emerald-300 rounded-full px-3.5 py-1.5 shadow-md flex items-center gap-2 text-xs font-bold text-emerald-900">
                            <span class="w-2 h-2 rounded-full bg-emerald-600"></span>
                            <span>Surat Dukungan: No. 18/X/PPHM/2026</span>
                        </div>
                    </div>

                </div>

                <!-- 2. FOUR METRIC STATS BAR -->
                <div class="mt-12 grid grid-cols-2 md:grid-cols-4 gap-4">
                    <div class="p-5 rounded-2xl bg-white border border-[#E8E9E2] shadow-xs hover:border-[#204E38] transition">
                        <span class="text-xs font-bold text-slate-500 uppercase tracking-wider block">Kebutuhan Dana Tunai</span>
                        <span class="text-2xl font-black text-[#204E38] font-mono block mt-1">Rp26.000.000</span>
                        <span class="text-xs text-emerald-700 font-semibold block mt-1">12 Pos Belanja Terperinci</span>
                    </div>

                    <div class="p-5 rounded-2xl bg-white border border-slate-200/90 shadow-xs hover:border-emerald-600 transition">
                        <span class="text-xs font-bold text-slate-500 uppercase tracking-wider block">Jangka Waktu Pilot</span>
                        <span class="text-2xl font-black text-slate-900 font-mono block mt-1">6 Bulan</span>
                        <span class="text-xs text-slate-600 font-medium block mt-1">Milestone Bertahap</span>
                    </div>

                    <div class="p-5 rounded-2xl bg-white border border-slate-200/90 shadow-xs hover:border-emerald-600 transition">
                        <span class="text-xs font-bold text-slate-500 uppercase tracking-wider block">Lokasi Mitra Pilot</span>
                        <span class="text-2xl font-black text-slate-900 font-mono block mt-1">1 Pesantren</span>
                        <span class="text-xs text-slate-600 font-medium block mt-1">Tasikmalaya, Jabar</span>
                    </div>

                    <div class="p-5 rounded-2xl bg-white border border-slate-200/90 shadow-xs hover:border-emerald-600 transition">
                        <span class="text-xs font-bold text-slate-500 uppercase tracking-wider block">Tingkat Kesiapan</span>
                        <span class="text-2xl font-black text-emerald-800 font-mono block mt-1">Siap Eksekusi</span>
                        <span class="text-xs text-emerald-700 font-semibold block mt-1">Aset Fisik Tersedia</span>
                    </div>
                </div>

            </div>
        </section>

        <!-- 3. SECTION: MENGAPA SIRAMI HADIR? (SESUAI DOKUMEN SPESIFIKASI SYLS 2026) -->
        <section class="py-16 bg-white border-b border-slate-200/80">
            <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 space-y-12">
                <!-- Section Header & Narratives -->
                <div class="grid grid-cols-1 lg:grid-cols-12 gap-8 items-start">
                    <div class="lg:col-span-5 space-y-4">
                        <span class="text-xs font-bold text-emerald-800 bg-emerald-50 px-3 py-1 rounded-md border border-emerald-200 uppercase tracking-wider">
                            Section 2 &middot; Latar Belakang Inisiatif
                        </span>
                        <h2 class="text-2xl sm:text-4xl font-black text-slate-900 leading-tight">
                            Tantangan Air dan Pangan Membutuhkan <span class="text-emerald-800">Pendekatan yang Terintegrasi</span>.
                        </h2>
                    </div>

                    <div class="lg:col-span-7 space-y-3 text-xs sm:text-sm text-slate-600 leading-relaxed">
                        <p>
                            Air, pangan, dan keberlanjutan ekonomi merupakan bagian yang saling berkaitan dalam kehidupan masyarakat. Tantangan pada satu aspek dapat memengaruhi aspek lainnya, terutama pada komunitas yang memiliki keterbatasan lahan, infrastruktur, sumber daya, atau kapasitas pengelolaan.
                        </p>
                        <p>
                            Pengelolaan air tidak hanya berkaitan dengan ketersediaan, tetapi juga kualitas, penggunaan yang sesuai, efisiensi, dan pemeliharaan sistem. Pada saat yang sama, keterbatasan ruang di kawasan urban mendorong perlunya pendekatan produksi pangan yang dapat dikembangkan dalam skala kecil dan disesuaikan dengan kebutuhan komunitas.
                        </p>
                        <p>
                            <strong>SIRAMI</strong> hadir untuk mengeksplorasi bagaimana pengelolaan air, produksi pangan, dan keterlibatan komunitas dapat dirancang sebagai satu pendekatan yang saling mendukung. Melalui riset dan pengembangan teknologi tepat guna, SIRAMI mempersiapkan solusi yang dapat diuji, dievaluasi, dan disempurnakan berdasarkan kondisi nyata di lapangan.
                        </p>
                    </div>
                </div>

                <!-- 4 Isu Utama Cards -->
                <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-6">
                    <!-- Isu 1 -->
                    <div class="p-6 bg-slate-50 rounded-2xl border border-slate-200 shadow-2xs space-y-3 hover:border-emerald-600 hover:bg-emerald-50/20 transition group">
                        <div class="w-10 h-10 rounded-xl bg-teal-100 text-[#204E38] font-black text-xs flex items-center justify-center">
                            <svg class="w-3.5 h-3.5 inline mr-1 text-[#204E38]" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19.428 15.428a2 2 0 00-1.022-.547l-2.387-.477a6 6 0 00-3.86.517l-.318.158a6 6 0 01-3.86.517L6.05 15.21a2 2 0 00-1.806.547M8 4h8l-1 1v5.172a2 2 0 00.586 1.414l5 5c1.26 1.26.367 3.414-1.415 3.414H4.828c-1.782 0-2.674-2.154-1.414-3.414l5-5A2 2 0 009 10.172V5L8 4z"/></svg>
                            <span>01</span>
                        </div>
                        <h3 class="text-sm font-bold text-slate-900 group-hover:text-emerald-800 transition">
                            1. Pengelolaan Air
                        </h3>
                        <p class="text-xs text-slate-600 leading-relaxed">
                            Kebutuhan pengelolaan air yang memperhatikan kualitas, efisiensi penggunaan, kesesuaian peruntukan, dan keberlanjutan operasional.
                        </p>
                    </div>

                    <!-- Isu 2 -->
                    <div class="p-6 bg-slate-50 rounded-2xl border border-slate-200 shadow-2xs space-y-3 hover:border-emerald-600 hover:bg-emerald-50/20 transition group">
                        <div class="w-10 h-10 rounded-xl bg-emerald-100 text-[#204E38] font-black text-xs flex items-center justify-center">
                            <svg class="w-3.5 h-3.5 inline mr-1 text-[#204E38]" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 3v4M3 5h4M6 17v4m-2-2h4m5-16l2.286 6.857L21 12l-5.714 2.143L13 21l-2.286-6.857L5 12l5.714-2.143L13 3z"/></svg>
                            <span>02</span>
                        </div>
                        <h3 class="text-sm font-bold text-slate-900 group-hover:text-emerald-800 transition">
                            2. Produksi Pangan Skala Komunitas
                        </h3>
                        <p class="text-xs text-slate-600 leading-relaxed">
                            Peluang pengembangan sistem budidaya dalam ruang terbatas melalui pendekatan seperti microgreens, dengan tetap memperhatikan kebutuhan air, nutrisi, keamanan pangan, dan kelayakan ekonomi.
                        </p>
                    </div>

                    <!-- Isu 3 -->
                    <div class="p-6 bg-slate-50 rounded-2xl border border-slate-200 shadow-2xs space-y-3 hover:border-emerald-600 hover:bg-emerald-50/20 transition group">
                        <div class="w-10 h-10 rounded-xl bg-indigo-100 text-[#204E38] font-black text-xs flex items-center justify-center">
                            <svg class="w-3.5 h-3.5 inline mr-1 text-[#204E38]" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 4.354a4 4 0 110 5.292M15 21H3v-1a6 6 0 0112 0v1zm0 0h6v-1a6 6 0 00-9-5.197M13 7a4 4 0 11-8 0 4 4 0 018 0z"/></svg>
                            <span>03</span>
                        </div>
                        <h3 class="text-sm font-bold text-slate-900 group-hover:text-emerald-800 transition">
                            3. Keterlibatan & Kapasitas Komunitas
                        </h3>
                        <p class="text-xs text-slate-600 leading-relaxed">
                            Pentingnya keterlibatan pengguna dalam perencanaan, pengoperasian, pemeliharaan, dan evaluasi agar solusi dapat digunakan sesuai kebutuhan.
                        </p>
                    </div>

                    <!-- Isu 4 -->
                    <div class="p-6 bg-slate-50 rounded-2xl border border-slate-200 shadow-2xs space-y-3 hover:border-emerald-600 hover:bg-emerald-50/20 transition group">
                        <div class="w-10 h-10 rounded-xl bg-amber-100 text-amber-800 font-black text-xs flex items-center justify-center">
                            <svg class="w-3.5 h-3.5 inline mr-1 text-amber-800" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 7h8m0 0v8m0-8l-8 8-4-4-6 6"/></svg>
                            <span>04</span>
                        </div>
                        <h3 class="text-sm font-bold text-slate-900 group-hover:text-emerald-800 transition">
                            4. Keberlanjutan Ekonomi
                        </h3>
                        <p class="text-xs text-slate-600 leading-relaxed">
                            Peluang membangun model pengelolaan yang mempertimbangkan biaya operasional, pemanfaatan sumber daya, kapasitas pengelola, dan potensi kegiatan produktif.
                        </p>
                    </div>
                </div>

                <!-- Mengapa Ini mendesak? (Data Sekunder Kemenkes SKI 2023, WHO, NIQ & BPS 2024 - Sesuai Slide Pitch SYLS 2026) -->
                <div class="pt-2">
                    <MengapaMendesakSection :data="mengapaMendesak" />
                </div>

                <!-- Interactive Issue Correlation Network Component -->
                <div class="pt-4">
                    <IssueCorrelationNetwork />
                </div>
            </div>
        </section>

        <!-- 3. SECTION: DARI TANTANGAN GLOBAL KE AKSI LOKAL (PEMETAAN BERTINGKAT) -->
        <section id="pemetaan-bertingkat" class="py-16 bg-[#FAFCFA] border-b border-slate-200/80">
            <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
                <GlobalToLocalMapping :data="multilevelMapping" />
            </div>
        </section>

        <!-- 4. ALUR SOLUSI SIRKULAR (VISUAL WORKFLOW) -->

        <!-- 4. SECTION: BAGAIMANA SIRAMI MENAWARKAN SOLUSI? (SESUAI DOKUMEN SPESIFIKASI SYLS 2026) -->
        <section id="solusi" class="py-16 bg-[#F8FAF8] border-b border-slate-200/80">
            <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 space-y-12">
                <!-- Section Header & Narratives (Verbatim) -->
                <div class="grid grid-cols-1 lg:grid-cols-12 gap-8 items-start">
                    <div class="lg:col-span-5 space-y-4">
                        <div class="flex flex-wrap items-center gap-2">
                            <span class="text-xs font-bold text-emerald-800 bg-emerald-50 px-3 py-1 rounded-md border border-emerald-200 uppercase tracking-wider">
                                Section 4 &middot; Bagaimana SIRAMI Menawarkan Solusi?
                            </span>
                            <span class="text-[10px] font-bold text-slate-700 bg-white px-2 py-0.5 rounded border border-slate-300">
                                HAKI No. EC002026184233
                            </span>
                        </div>
                        <h2 class="text-2xl sm:text-3xl lg:text-4xl font-black text-slate-900 leading-tight">
                            Dari Kajian dan Teknologi Menuju <span class="text-emerald-800">Solusi yang Dapat Diuji</span>.
                        </h2>
                    </div>

                    <!-- 3 Paragraphs Exact Verbatim Description -->
                    <div class="lg:col-span-7 space-y-3.5 text-xs sm:text-sm text-slate-600 leading-relaxed bg-white p-6 rounded-2xl border border-slate-200 shadow-2xs">
                        <p>
                            <strong>SIRAMI</strong> mengembangkan pendekatan yang menghubungkan teknologi pengelolaan air, produksi pangan skala kecil, dan pemberdayaan komunitas.
                        </p>
                        <p>
                            Fokus pengembangan teknis diarahkan pada <strong>Smart Water Treatment</strong>, sementara <strong>microgreens</strong> menjadi salah satu pendekatan produksi pangan yang sedang dikaji untuk penerapan dalam ruang terbatas.
                        </p>
                        <p class="font-medium text-slate-700">
                            Kedua komponen tersebut dikembangkan melalui tahapan kajian, pengujian, penyusunan prosedur operasional, dan perencanaan implementasi. Integrasinya akan ditentukan berdasarkan hasil pengujian teknis, kualitas air, kebutuhan budidaya, dan kesesuaian kondisi lokasi.
                        </p>
                    </div>
                </div>

                <!-- 4 Komponen Solusi Cards (Grid 4 Columns) -->
                <div>
                    <div class="flex items-center justify-between mb-6">
                        <div>
                            <span class="text-xs font-bold text-emerald-800 uppercase tracking-wider block">Arsitektur Terpadu</span>
                            <h3 class="text-xl font-black text-slate-900 mt-0.5">Empat Komponen Solusi SIRAMI</h3>
                        </div>
                        <span class="text-xs text-slate-500 font-mono hidden sm:inline">Modular & Komplementer</span>
                    </div>

                    <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-6">
                        <!-- Komponen 1: Smart Water Treatment -->
                        <div class="bg-white rounded-2xl overflow-hidden border border-slate-200/90 shadow-xs hover:border-emerald-600 hover:shadow-md transition-all flex flex-col group">
                            <div class="aspect-video bg-[#163828] relative overflow-hidden">
                                <img
                                    src="/foto/produkinovasi utama/alatutama cek kondisi air.webp"
                                    alt="Smart Water Treatment Sensor"
                                    class="w-full h-full object-cover group-hover:scale-105 transition-transform duration-500"
                                    loading="lazy"
                                />
                                <div class="absolute inset-0 bg-gradient-to-t from-[#163828]/80 via-transparent to-transparent"></div>
                                <span class="absolute top-2.5 left-2.5 px-2 py-0.5 rounded bg-emerald-600 text-white font-mono font-bold text-[10px] uppercase">
                                    Komponen 01
                                </span>
                            </div>
                            <div class="p-5 flex-1 flex flex-col justify-between space-y-3">
                                <div>
                                    <h4 class="text-sm font-bold text-slate-900 group-hover:text-emerald-800 transition">
                                        Smart Water Treatment
                                    </h4>
                                    <p class="text-xs text-slate-600 mt-2 leading-relaxed">
                                        Pengembangan sistem pengolahan dan pemantauan air yang memperhatikan karakteristik sumber air, proses pengolahan, parameter kualitas, serta kesesuaian hasil terhadap peruntukannya.
                                    </p>
                                </div>
                                <div class="pt-3 border-t border-slate-100 flex flex-wrap gap-1.5 text-[10px] text-slate-500 font-medium">
                                    <span class="px-2 py-0.5 rounded bg-slate-100">Sensor pH & TDS</span>
                                    <span class="px-2 py-0.5 rounded bg-slate-100">Filter Bertingkat</span>
                                    <span class="px-2 py-0.5 rounded bg-slate-100">Fitoremediasi</span>
                                </div>
                            </div>
                        </div>

                        <!-- Komponen 2: Microgreens -->
                        <div class="bg-white rounded-2xl overflow-hidden border border-slate-200/90 shadow-xs hover:border-emerald-600 hover:shadow-md transition-all flex flex-col group">
                            <div class="aspect-video bg-[#163828] relative overflow-hidden">
                                <img
                                    src="/foto/diskusi pengelola/diskusibudidayamicrogreen.webp"
                                    alt="Microgreens System"
                                    class="w-full h-full object-cover group-hover:scale-105 transition-transform duration-500"
                                    loading="lazy"
                                />
                                <div class="absolute inset-0 bg-gradient-to-t from-[#163828]/80 via-transparent to-transparent"></div>
                                <span class="absolute top-2.5 left-2.5 px-2 py-0.5 rounded bg-emerald-600 text-white font-mono font-bold text-[10px] uppercase">
                                    Komponen 02
                                </span>
                            </div>
                            <div class="p-5 flex-1 flex flex-col justify-between space-y-3">
                                <div>
                                    <h4 class="text-sm font-bold text-slate-900 group-hover:text-emerald-800 transition">
                                        Microgreens
                                    </h4>
                                    <p class="text-xs text-slate-600 mt-2 leading-relaxed">
                                        Pengembangan sistem budidaya tanaman berumur pendek dalam ruang terbatas melalui pengamatan pertumbuhan, penggunaan air, kebutuhan nutrisi, hasil panen, dan biaya produksi.
                                    </p>
                                </div>
                                <div class="pt-3 border-t border-slate-100 flex flex-wrap gap-1.5 text-[10px] text-slate-500 font-medium">
                                    <span class="px-2 py-0.5 rounded bg-slate-100">Panen 7-14 Hari</span>
                                    <span class="px-2 py-0.5 rounded bg-slate-100">Ruang Terbatas</span>
                                    <span class="px-2 py-0.5 rounded bg-slate-100">Tinggi Nutrisi</span>
                                </div>
                            </div>
                        </div>

                        <!-- Komponen 3: Integrasi Sistem -->
                        <div class="bg-white rounded-2xl overflow-hidden border border-slate-200/90 shadow-xs hover:border-emerald-600 hover:shadow-md transition-all flex flex-col group">
                            <div class="aspect-video bg-[#163828] relative overflow-hidden">
                                <img
                                    src="/foto/kosndisi pesantree/ipaldanlahan untuk treatmentair dan praktik microgreen.webp"
                                    alt="Integrasi Sistem SIRAMI"
                                    class="w-full h-full object-cover group-hover:scale-105 transition-transform duration-500"
                                    loading="lazy"
                                />
                                <div class="absolute inset-0 bg-gradient-to-t from-[#163828]/80 via-transparent to-transparent"></div>
                                <span class="absolute top-2.5 left-2.5 px-2 py-0.5 rounded bg-emerald-600 text-white font-mono font-bold text-[10px] uppercase">
                                    Komponen 03
                                </span>
                            </div>
                            <div class="p-5 flex-1 flex flex-col justify-between space-y-3">
                                <div>
                                    <h4 class="text-sm font-bold text-slate-900 group-hover:text-emerald-800 transition">
                                        Integrasi Sistem
                                    </h4>
                                    <p class="text-xs text-slate-600 mt-2 leading-relaxed">
                                        Perancangan hubungan antara pengelolaan air dan produksi pangan dengan memperhatikan keamanan, efisiensi, kemudahan pengoperasian, serta kebutuhan pemeliharaan.
                                    </p>
                                </div>
                                <div class="pt-3 border-t border-slate-100 flex flex-wrap gap-1.5 text-[10px] text-slate-500 font-medium">
                                    <span class="px-2 py-0.5 rounded bg-slate-100">Zero-Risk Gate</span>
                                    <span class="px-2 py-0.5 rounded bg-slate-100">Pemisahan Pipa</span>
                                    <span class="px-2 py-0.5 rounded bg-slate-100">Hemat Energi</span>
                                </div>
                            </div>
                        </div>

                        <!-- Komponen 4: Pendekatan Komunitas -->
                        <div class="bg-white rounded-2xl overflow-hidden border border-slate-200/90 shadow-xs hover:border-emerald-600 hover:shadow-md transition-all flex flex-col group">
                            <div class="aspect-video bg-[#163828] relative overflow-hidden">
                                <img
                                    src="/foto/kosndisi pesantree/santri.webp"
                                    alt="Pendekatan Komunitas Santri"
                                    class="w-full h-full object-cover group-hover:scale-105 transition-transform duration-500"
                                    loading="lazy"
                                />
                                <div class="absolute inset-0 bg-gradient-to-t from-[#163828]/80 via-transparent to-transparent"></div>
                                <span class="absolute top-2.5 left-2.5 px-2 py-0.5 rounded bg-emerald-600 text-white font-mono font-bold text-[10px] uppercase">
                                    Komponen 04
                                </span>
                            </div>
                            <div class="p-5 flex-1 flex flex-col justify-between space-y-3">
                                <div>
                                    <h4 class="text-sm font-bold text-slate-900 group-hover:text-emerald-800 transition">
                                        Pendekatan Komunitas
                                    </h4>
                                    <p class="text-xs text-slate-600 mt-2 leading-relaxed">
                                        Pelibatan calon pengguna dalam identifikasi kebutuhan, pelatihan, pengelolaan, dan evaluasi agar rancangan solusi sesuai dengan kapasitas dan konteks lokal.
                                    </p>
                                </div>
                                <div class="pt-3 border-t border-slate-100 flex flex-wrap gap-1.5 text-[10px] text-slate-500 font-medium">
                                    <span class="px-2 py-0.5 rounded bg-slate-100">Pelatihan SOP</span>
                                    <span class="px-2 py-0.5 rounded bg-slate-100">Buku Kas Nyata</span>
                                    <span class="px-2 py-0.5 rounded bg-slate-100">Santripreneur</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Interactive Water & Microgreens System Simulation (Interaktif & Dapat Diklik) -->
                <div class="pt-4">
                    <InteractiveWaterSystem />
                </div>

                <!-- Primary Action Button Block (Verbatim Blueprint Specification) -->
                <div class="p-8 rounded-3xl bg-gradient-to-r from-[#163828] via-[#204E38] to-[#163828] text-white flex flex-col md:flex-row items-center justify-between gap-6 shadow-xl border border-[#2e6d4e]/40">
                    <div class="space-y-2 max-w-2xl text-center md:text-left">
                        <div class="inline-flex items-center gap-2 px-3 py-1 rounded-md bg-emerald-500/20 text-emerald-300 font-mono text-xs font-bold border border-emerald-500/30">
                            <span>Eksplorasi Rinci</span>
                            <span>&middot;</span>
                            <span>Diagram & Prosedur Teknis</span>
                        </div>
                        <h3 class="text-xl sm:text-2xl font-black">
                            Ingin Mempelajari Arsitektur Teknis SIRAMI Secara Utuh?
                        </h3>
                        <p class="text-xs sm:text-sm text-slate-300 leading-relaxed">
                            Pengunjung diarahkan ke halaman Solusi untuk melihat diagram teknis, alur sistem, komponen, dan status pengembangan secara transparan.
                        </p>
                    </div>

                    <div class="flex flex-col sm:flex-row items-center gap-3 shrink-0 w-full sm:w-auto">
                        <Link
                            :href="route('solusi')"
                            class="w-full sm:w-auto px-6 py-3.5 rounded-xl bg-emerald-600 hover:bg-emerald-500 text-white font-bold text-xs sm:text-sm transition flex items-center justify-center gap-2 shadow-lg shadow-emerald-600/30 cursor-pointer"
                        >
                            <span>Jelajahi Sistem SIRAMI</span>
                            <span>&rarr;</span>
                        </Link>

                        <a
                            href="/data/SuratCiptaan_EC002026184233_3.pdf"
                            target="_blank"
                            class="w-full sm:w-auto px-4 py-3.5 rounded-xl bg-[#163828] hover:bg-[#204E38] text-emerald-100 border border-[#2e6d4e] font-bold text-xs sm:text-sm transition flex items-center justify-center gap-1.5 cursor-pointer"
                        >
                            <span>Unduh Sertifikat HAKI</span>
                            <span class="text-emerald-400 font-mono text-xs">&darr;</span>
                        </a>
                    </div>
                </div>

                <!-- Safety Principle Banner -->
                <div class="p-4 rounded-xl bg-amber-50 border border-amber-300 text-amber-900 text-xs flex items-start gap-3 shadow-xs">
                    <svg class="w-4 h-4 text-amber-600 shrink-0 mt-0.5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 9v2m0 4h.01m-6.938 4h13.856c1.54 0 2.502-1.667 1.732-3L13.732 4c-.77-1.333-2.694-1.333-3.464 0L3.34 16c-.77 1.333.192 3 1.732 3z"/></svg>
                    <div>
                        <strong>Prinsip Keselamatan Baku:</strong> Air jernih secara visual belum tentu aman. Air keluaran IPAL atau bekas wudu tidak akan dialirkan ke microgreens pangan tanpa verifikasi parameter uji laboratorium yang sah sesuai standar WHO.
                    </div>
                </div>
            </div>
        </section>

        <!-- SIKLUS OPERASIONAL 9 TAHAPAN (CIRCULAR FLOW) -->
        <SiklusOperasionalSection />

        <!-- 5. SECTION: RISET DAN BUKTI PENGEMBANGAN (SESUAI DOKUMEN SPESIFIKASI SYLS 2026) -->
        <section id="riset-bukti" class="py-16 bg-white border-b border-slate-200/80">
            <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 space-y-12">
                <!-- Header & Narratives (Verbatim) -->
                <div class="grid grid-cols-1 lg:grid-cols-12 gap-8 items-start">
                    <div class="lg:col-span-5 space-y-4">
                        <span class="text-xs font-bold text-emerald-800 bg-emerald-50 px-3 py-1 rounded-md border border-emerald-200 uppercase tracking-wider">
                            Section 5 &middot; Riset dan Bukti Pengembangan
                        </span>
                        <h2 class="text-2xl sm:text-3xl lg:text-4xl font-black text-slate-900 leading-tight">
                            Setiap Inovasi Harus Memiliki <span class="text-emerald-800">Dasar yang Dapat Ditelusuri</span>.
                        </h2>
                    </div>

                    <!-- 3 Paragraphs Exact Verbatim Description -->
                    <div class="lg:col-span-7 space-y-3.5 text-xs sm:text-sm text-slate-600 leading-relaxed bg-slate-50/80 p-6 rounded-2xl border border-slate-200">
                        <p>
                            <strong>SIRAMI</strong> dikembangkan melalui kajian dan proses pengujian yang menjadi dasar untuk menyusun rancangan solusi. Dokumentasi riset digunakan untuk memperlihatkan bagaimana gagasan dikembangkan, apa yang telah diuji, apa yang masih perlu diperbaiki, dan bagaimana hasilnya menjadi masukan bagi tahap implementasi.
                        </p>
                        <p>
                            Pusat dokumentasi SIRAMI dirancang untuk memuat bahan kajian, data pengujian, foto prototipe, diagram teknis, catatan pengembangan, serta bukti partisipasi dalam program seleksi atau kegiatan relevan.
                        </p>
                        <p class="font-medium text-slate-700">
                            Setiap dokumen ditampilkan dengan identitas, tanggal, konteks, dan status yang jelas. Dengan demikian, pengunjung dapat membedakan hasil yang telah diperoleh, pengembangan yang sedang berjalan, dan target yang masih direncanakan.
                        </p>
                    </div>
                </div>

                <!-- 7 Kategori Dokumentasi Grid -->
                <div class="space-y-4">
                    <div class="flex items-center justify-between">
                        <div>
                            <span class="text-xs font-bold text-emerald-800 uppercase tracking-wider block">Repository Riset Terbuka</span>
                            <h3 class="text-xl font-black text-slate-900 mt-0.5">Tujuh Kategori Dokumentasi SIRAMI</h3>
                        </div>
                        <span class="text-xs text-slate-500 font-mono hidden sm:inline">Transparan & Terverifikasi</span>
                    </div>

                    <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-4">
                        <!-- 1. Kajian dan Dasar Konseptual -->
                        <div class="p-5 rounded-2xl bg-slate-50/60 border border-slate-200 hover:border-emerald-600 hover:bg-emerald-50/20 transition group flex flex-col justify-between">
                            <div>
                                <span class="w-8 h-8 rounded-lg bg-emerald-100 text-emerald-800 flex items-center justify-center font-bold text-sm mb-3">
                                    01
                                </span>
                                <h4 class="text-sm font-bold text-slate-900 group-hover:text-emerald-800 transition">
                                    Kajian & Dasar Konseptual
                                </h4>
                                <p class="text-xs text-slate-600 mt-1.5 leading-relaxed">
                                    Panduan WHO Sanitation Safety Planning, Permen LH 11/2025, literatur microgreens & gizi mikro SKI 2023.
                                </p>
                            </div>
                            <span class="text-[10px] font-mono text-emerald-700 font-bold mt-3 block">Rujukan Baku &bull; 4 Pustaka</span>
                        </div>

                        <!-- 2. Dokumentasi Prototipe -->
                        <div class="p-5 rounded-2xl bg-slate-50/60 border border-slate-200 hover:border-emerald-600 hover:bg-emerald-50/20 transition group flex flex-col justify-between">
                            <div>
                                <span class="w-8 h-8 rounded-lg bg-emerald-100 text-emerald-800 flex items-center justify-center font-bold text-sm mb-3">
                                    02
                                </span>
                                <h4 class="text-sm font-bold text-slate-900 group-hover:text-emerald-800 transition">
                                    Dokumentasi Prototipe & Teknologi
                                </h4>
                                <p class="text-xs text-slate-600 mt-1.5 leading-relaxed">
                                    Rancang bangun fisik filter sedimentasi, media pasir/karbon aktif, dan prototipe sensor box IoT terkalibrasi.
                                </p>
                            </div>
                            <span class="text-[10px] font-mono text-emerald-700 font-bold mt-3 block">Rekayasa Fisik &bull; Teruji Lab</span>
                        </div>

                        <!-- 3. Hasil Pengujian -->
                        <div class="p-5 rounded-2xl bg-slate-50/60 border border-slate-200 hover:border-emerald-600 hover:bg-emerald-50/20 transition group flex flex-col justify-between">
                            <div>
                                <span class="w-8 h-8 rounded-lg bg-emerald-100 text-emerald-800 flex items-center justify-center font-bold text-sm mb-3">
                                    03
                                </span>
                                <h4 class="text-sm font-bold text-slate-900 group-hover:text-emerald-800 transition">
                                    Hasil Pengujian & Data Pendukung
                                </h4>
                                <p class="text-xs text-slate-600 mt-1.5 leading-relaxed">
                                    Lembar log uji stabilitas pembacaan pH, TDS, kekeruhan, serta protokol pengujian sampel air laboratorium independen.
                                </p>
                            </div>
                            <span class="text-[10px] font-mono text-amber-700 font-bold mt-3 block">Baseline Target &bull; Uji Bertahap</span>
                        </div>

                        <!-- 4. Riset Microgreens -->
                        <div class="p-5 rounded-2xl bg-slate-50/60 border border-slate-200 hover:border-emerald-600 hover:bg-emerald-50/20 transition group flex flex-col justify-between">
                            <div>
                                <span class="w-8 h-8 rounded-lg bg-emerald-100 text-emerald-800 flex items-center justify-center font-bold text-sm mb-3">
                                    04
                                </span>
                                <h4 class="text-sm font-bold text-slate-900 group-hover:text-emerald-800 transition">
                                    Riset & Pengamatan Microgreens
                                </h4>
                                <p class="text-xs text-slate-600 mt-1.5 leading-relaxed">
                                    Pencatatan laju germinasi benih, kebutuhan semprot air harian, siklus panen 7-14 hari, dan efisiensi media tanam.
                                </p>
                            </div>
                            <span class="text-[10px] font-mono text-emerald-700 font-bold mt-3 block">Pangan Padat Gizi &bull; 7-14 Hari</span>
                        </div>

                        <!-- 5. Diagram Teknis -->
                        <div class="p-5 rounded-2xl bg-slate-50/60 border border-slate-200 hover:border-emerald-600 hover:bg-emerald-50/20 transition group flex flex-col justify-between">
                            <div>
                                <span class="w-8 h-8 rounded-lg bg-emerald-100 text-emerald-800 flex items-center justify-center font-bold text-sm mb-3">
                                    05
                                </span>
                                <h4 class="text-sm font-bold text-slate-900 group-hover:text-emerald-800 transition">
                                    Diagram & Rancangan Teknis
                                </h4>
                                <p class="text-xs text-slate-600 mt-1.5 leading-relaxed">
                                    Skematik pemisahan jalur pipa wudu fisik, bak penampung, fitoremediasi bertingkat, dan skema zero-risk gate.
                                </p>
                            </div>
                            <span class="text-[10px] font-mono text-blue-700 font-bold mt-3 block">Blueprint SOP &bull; TECH-SOP-01</span>
                        </div>

                        <!-- 6. Publikasi & Sertifikat -->
                        <div class="p-5 rounded-2xl bg-slate-50/60 border border-slate-200 hover:border-emerald-600 hover:bg-emerald-50/20 transition group flex flex-col justify-between">
                            <div>
                                <span class="w-8 h-8 rounded-lg bg-emerald-100 text-emerald-800 flex items-center justify-center font-bold text-sm mb-3">
                                    06
                                </span>
                                <h4 class="text-sm font-bold text-slate-900 group-hover:text-emerald-800 transition">
                                    Publikasi & Sertifikat Resmi
                                </h4>
                                <p class="text-xs text-slate-600 mt-1.5 leading-relaxed">
                                    Surat Pencatatan Hak Cipta Kemenkumham RI No. EC002026184233 dan berkas seleksi Sharia Young Leader Summit 2026.
                                </p>
                            </div>
                            <span class="text-[10px] font-mono text-emerald-700 font-bold mt-3 block">HAKI Terdaftar &bull; Kemenkumham RI</span>
                        </div>

                        <!-- 7. Dokumen Pilot Project -->
                        <div class="p-5 rounded-2xl bg-slate-50/60 border border-slate-200 hover:border-emerald-600 hover:bg-emerald-50/20 transition group flex flex-col justify-between sm:col-span-2 lg:col-span-2">
                            <div>
                                <span class="w-8 h-8 rounded-lg bg-emerald-100 text-[#204E38] flex items-center justify-center font-bold text-sm mb-3">
                                    07
                                </span>
                                <h4 class="text-sm font-bold text-slate-900 group-hover:text-emerald-800 transition">
                                    Dokumen Persiapan Pilot Project
                                </h4>
                                <p class="text-xs text-slate-600 mt-1.5 leading-relaxed">
                                    Surat persetujuan resmi Pondok Pesantren Hidayatul Mustafid (No. 18/X/PPHM/2026), pemetaan aset fisik, dan Rencana Anggaran Biaya (RAB) terbaru Rp26.000.000.
                                </p>
                            </div>
                            <span class="text-[10px] font-mono text-emerald-700 font-bold mt-3 block">Dokumen Mitra Resmi &bull; Surat Tersedia</span>
                        </div>
                    </div>
                </div>

                <!-- Simulation & Interactive Animation Preview Card -->
                <div class="p-6 rounded-2xl bg-gradient-to-r from-[#143525] via-[#204E38] to-[#143525] text-white border border-emerald-500/40 flex flex-col sm:flex-row items-center justify-between gap-4">
                    <div class="flex items-center gap-3">
                        <div class="w-10 h-10 rounded-xl bg-white/10 flex items-center justify-center text-emerald-300 shrink-0">
                            <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19.428 15.428a2 2 0 00-1.022-.547l-2.387-.477a6 6 0 00-3.86.517l-.318.158a6 6 0 01-3.86.517L6.05 15.21a2 2 0 00-1.806.547M8 4h8l-1 1v5.172a2 2 0 00.586 1.414l5 5c1.26 1.26.367 3.414-1.415 3.414H4.828c-1.782 0-2.674-2.154-1.414-3.414l5-5A2 2 0 009 10.172V5L8 4z"/></svg>
                        </div>
                        <div>
                            <h4 class="text-sm font-bold text-white">Simulasi Interaktif: Alur Pengolahan Air & Sensor IoT</h4>
                            <p class="text-xs text-emerald-100/90">Lihat animasi interaktif aliran air dari sumber abu-abu, bak penyaringan, fitoremediasi hingga biofilter dan microgreens.</p>
                        </div>
                    </div>
                    <a
                        href="#alur-solusi"
                        class="px-5 py-2.5 rounded-xl bg-emerald-600 hover:bg-emerald-500 text-white font-bold text-xs transition flex items-center gap-1.5 shrink-0 shadow-xs cursor-pointer"
                    >
                        <span>Lihat Alur Sistem Interaktif</span>
                        <span>&darr;</span>
                    </a>
                </div>

                <!-- Section Action Buttons -->
                <div class="flex flex-col sm:flex-row items-center justify-between gap-4 pt-4 border-t border-slate-200">
                    <div class="text-xs text-slate-600">
                        *Seluruh dokumen dan status riset dapat diakses dan diverifikasi secara publik.
                    </div>

                    <div class="flex items-center gap-3 w-full sm:w-auto">
                        <Link
                            :href="route('riset.bukti')"
                            class="w-full sm:w-auto px-6 py-3.5 rounded-xl bg-[#204E38] hover:bg-[#163828] text-white font-bold text-xs sm:text-sm transition flex items-center justify-center gap-2 shadow-md cursor-pointer"
                        >
                            <span>Jelajahi Riset dan Bukti</span>
                            <span>&rarr;</span>
                        </Link>
                        <Link
                            :href="route('pusat.dokumen')"
                            class="w-full sm:w-auto px-4.5 py-3.5 rounded-xl bg-white border border-slate-300 hover:border-emerald-600 text-slate-700 font-bold text-xs sm:text-sm transition flex items-center justify-center gap-2 hover:bg-slate-50 cursor-pointer"
                        >
                            <span>Pusat Dokumen & Lampiran</span>
                        </Link>
                    </div>
                </div>
            </div>
        </section>

        <!-- 6. SECTION: MENUJU PILOT PROJECT (SESUAI DOKUMEN SPESIFIKASI SYLS 2026) -->
        <section id="pilot-project" class="py-16 bg-[#FAFCFA] border-b border-slate-200/80">
            <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 space-y-12">
                <!-- Header & Narratives (Verbatim) -->
                <div class="grid grid-cols-1 lg:grid-cols-12 gap-8 items-start">
                    <div class="lg:col-span-5 space-y-4">
                        <div class="flex flex-wrap items-center gap-2">
                            <span class="text-xs font-bold text-emerald-800 bg-emerald-50 px-3 py-1 rounded-md border border-emerald-200 uppercase tracking-wider">
                                Section 6 &middot; Menuju Pilot Project
                            </span>
                            <span class="text-[10px] font-bold text-amber-900 bg-amber-50 px-2.5 py-0.5 rounded border border-amber-300">
                                Lokasi Uji Lapangan
                            </span>
                        </div>
                        <h2 class="text-2xl sm:text-3xl lg:text-4xl font-black text-slate-900 leading-tight">
                            Mempersiapkan Implementasi <span class="text-emerald-800">Bersama Komunitas</span>.
                        </h2>
                    </div>

                    <!-- 4 Paragraphs Exact Verbatim Description -->
                    <div class="lg:col-span-7 space-y-3.5 text-xs sm:text-sm text-slate-600 leading-relaxed bg-white p-6 rounded-2xl border border-slate-200 shadow-2xs">
                        <p>
                            <strong>SIRAMI</strong> sedang mempersiapkan pilot project awal bersama <strong>Pondok Pesantren Al-Qur'an Hidayatul Mustafid</strong> sebagai calon lokasi implementasi.
                        </p>
                        <p>
                            Pesantren dipertimbangkan sebagai lingkungan penerapan karena memiliki aktivitas komunitas dan kebutuhan operasional yang dapat dipetakan untuk menilai relevansi solusi pengelolaan air dan produksi pangan skala kecil.
                        </p>
                        <p>
                            Persiapan pilot mencakup identifikasi kebutuhan, pengumpulan data dasar, penilaian kesiapan lokasi, penyusunan rancangan teknis, perencanaan anggaran, serta penentuan indikator keberhasilan.
                        </p>
                        <p class="font-medium text-slate-700">
                            Pelaksanaan akan dilakukan sesuai kesiapan teknis, dukungan mitra, ketersediaan pendanaan, dan hasil penilaian kelayakan di lokasi.
                        </p>
                    </div>
                </div>

                <!-- 4 Informasi Pilot Project Cards -->
                <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-6">
                    <!-- 1. Calon Mitra Lokasi -->
                    <div class="bg-white rounded-2xl p-6 border border-slate-200 shadow-xs hover:border-emerald-600 transition flex flex-col justify-between space-y-4">
                        <div class="space-y-3">
                            <div class="flex items-center justify-between">
                                <span class="w-9 h-9 rounded-xl bg-emerald-100 text-[#204E38] flex items-center justify-center font-bold text-base">
                                    <svg class="w-4 h-4 text-[#204E38]" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z"/><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 11a3 3 0 11-6 0 3 3 0 016 0z"/></svg>
                                </span>
                                <span class="text-[10px] font-mono font-bold px-2 py-0.5 rounded bg-emerald-50 text-emerald-800 border border-emerald-200">
                                    Surat Resmi No. 18/X/PPHM/2026
                                </span>
                            </div>
                            <h3 class="text-xs font-bold uppercase tracking-wider text-slate-500">
                                Calon Mitra Lokasi
                            </h3>
                            <h4 class="text-base font-bold text-slate-900 leading-snug">
                                Pondok Pesantren Al-Qur'an Hidayatul Mustafid
                            </h4>
                            <p class="text-xs text-slate-600 leading-relaxed">
                                Kp. Sindangresik, Kel. Awipari, Kec. Cibeureum, Kota Tasikmalaya. Pimpinan: KH. Nandang Ja'far Shiddiq.
                            </p>
                        </div>
                        <div class="pt-3 border-t border-slate-100 text-[11px] text-amber-900 bg-amber-50/80 p-2.5 rounded-xl border border-amber-200">
                            <strong>Klarifikasi:</strong> Mitra lokasi pelaksanaan uji lapangan & laboratorium (bukan pemilik program SIRAMI).
                        </div>
                    </div>

                    <!-- 2. Fokus Awal -->
                    <div class="bg-white rounded-2xl p-6 border border-slate-200 shadow-xs hover:border-emerald-600 transition flex flex-col justify-between space-y-4">
                        <div class="space-y-3">
                            <div class="flex items-center justify-between">
                                <span class="w-9 h-9 rounded-xl bg-emerald-100 text-[#204E38] flex items-center justify-center font-bold text-base">
                                    <svg class="w-4 h-4 text-[#204E38]" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 10V3L4 14h7v7l9-11h-7z"/></svg>
                                </span>
                                <span class="text-[10px] font-mono font-bold px-2 py-0.5 rounded bg-blue-50 text-blue-800 border border-blue-200">
                                    Kajian & Uji Lapangan
                                </span>
                            </div>
                            <h3 class="text-xs font-bold uppercase tracking-wider text-slate-500">
                                Fokus Awal
                            </h3>
                            <h4 class="text-base font-bold text-slate-900 leading-snug">
                                Pengelolaan Air & Produksi Pangan Skala Komunitas
                            </h4>
                            <p class="text-xs text-slate-600 leading-relaxed">
                                Pengembangan dan pengujian pendekatan pengelolaan air serta produksi pangan skala komunitas yang hemat ruang dan teruji aman.
                            </p>
                        </div>
                        <div class="pt-3 border-t border-slate-100 text-[11px] text-slate-600">
                            Fokus: Smart Water Treatment, filtrasi bertahap, dan sistem vertikal microgreens.
                        </div>
                    </div>

                    <!-- 3. Tahapan Implementasi -->
                    <div class="bg-white rounded-2xl p-6 border border-slate-200 shadow-xs hover:border-emerald-600 transition flex flex-col justify-between space-y-4">
                        <div class="space-y-3">
                            <div class="flex items-center justify-between">
                                <span class="w-9 h-9 rounded-xl bg-emerald-100 text-[#204E38] flex items-center justify-center font-bold text-base">
                                    <svg class="w-4 h-4 text-[#204E38]" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 7V3m8 4V3m-9 8h10M5 21h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v12a2 2 0 002 2z"/></svg>
                                </span>
                                <span class="text-[10px] font-mono font-bold px-2 py-0.5 rounded bg-indigo-50 text-indigo-800 border border-indigo-200">
                                    Tahapan Terukur
                                </span>
                            </div>
                            <h3 class="text-xs font-bold uppercase tracking-wider text-slate-500">
                                Tahapan
                            </h3>
                            <h4 class="text-base font-bold text-slate-900 leading-snug">
                                Alur Kerja Terstruktur 7 Tahap
                            </h4>
                            <p class="text-xs text-slate-600 leading-relaxed">
                                Pemetaan kebutuhan &rarr; persiapan teknis &rarr; pengadaan &rarr; instalasi &rarr; pengujian lab & sensor &rarr; pendampingan santri &rarr; evaluasi.
                            </p>
                        </div>
                        <div class="pt-3 border-t border-slate-100 text-[11px] text-slate-600">
                            Dilaksanakan berdasarkan kesiapan teknis dan persetujuan berkala mitra.
                        </div>
                    </div>

                    <!-- 4. Target Capaian -->
                    <div class="bg-white rounded-2xl p-6 border border-slate-200 shadow-xs hover:border-emerald-600 transition flex flex-col justify-between space-y-4">
                        <div class="space-y-3">
                            <div class="flex items-center justify-between">
                                <span class="w-9 h-9 rounded-xl bg-emerald-100 text-[#204E38] flex items-center justify-center font-bold text-base">
                                    <svg class="w-4 h-4 text-[#204E38]" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 7h8m0 0v8m0-8l-8 8-4-4-6 6"/></svg>
                                </span>
                                <span class="text-[10px] font-mono font-bold px-2 py-0.5 rounded bg-emerald-50 text-emerald-800 border border-emerald-200">
                                    Target Terukur
                                </span>
                            </div>
                            <h3 class="text-xs font-bold uppercase tracking-wider text-slate-500">
                                Target
                            </h3>
                            <h4 class="text-base font-bold text-slate-900 leading-snug">
                                Pembelajaran & Bukti Kelayakan 4 Aspek
                            </h4>
                            <p class="text-xs text-slate-600 leading-relaxed">
                                Menghasilkan pembelajaran dan bukti implementasi untuk menilai kelayakan teknis, operasional, sosial, dan ekonomi.
                            </p>
                        </div>
                        <div class="pt-3 border-t border-slate-100 text-[11px] text-slate-600">
                            Menghasilkan SOP baku, buku kas HPP nyata, dan evaluasi dampak SROI.
                        </div>
                    </div>
                </div>

                <!-- Komunitas & Konteks Lapangan Pesantren (Sesuai Slide Pitch SYLS 2026) -->
                <div class="pt-2">
                    <KomunitasKonteksSection :data="komunitasKonteks" />
                </div>

                <!-- RAGAM KEGIATAN IMPLEMENTASI LAPANGAN (INSTALASI -> PELATIHAN -> KEWIRAUSAHAAN -> PACKING -> PENJUALAN KE TASIKMALAYA) -->
                <div class="space-y-6 pt-6 border-t border-slate-200">
                    <div class="flex flex-col md:flex-row md:items-end justify-between gap-4">
                        <div class="space-y-2">
                            <span class="text-xs font-bold text-[#204E38] bg-emerald-50 px-3 py-1 rounded-md border border-emerald-200 uppercase tracking-wider inline-flex items-center gap-1.5">
                                <svg class="w-3.5 h-3.5 text-[#204E38]" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 10V3L4 14h7v7l9-11h-7z"/></svg>
                                <span>Siklus Operasional Lapangan</span>
                            </span>
                            <h3 class="text-xl sm:text-2xl lg:text-3xl font-black text-slate-900 tracking-tight">
                                Ragam Kegiatan: Dari Instalasi Hingga Produk Terjual ke Kota Tasikmalaya
                            </h3>
                            <p class="text-xs sm:text-sm text-slate-600 max-w-3xl leading-relaxed">
                                SIRAMI merancang alur kegiatan terpadu dan terukur yang menghubungkan rekayasa instalasi air, pelatihan SOP teknis, kewirausahaan pangan santri, kemasan profesional, hingga terciptanya transaksi riil di Kota Tasikmalaya.
                            </p>
                        </div>

                        <!-- Progress Summary Badge -->
                        <div class="flex items-center gap-2 bg-emerald-50 border border-emerald-200 px-3 py-2 rounded-xl text-xs font-bold text-emerald-900 shrink-0">
                            <span class="w-2.5 h-2.5 rounded-full bg-emerald-600 animate-pulse"></span>
                            <span>5 Tahapan Berkelanjutan</span>
                        </div>
                    </div>

                    <!-- Step Selector Buttons (01 - 05) -->
                    <div class="grid grid-cols-2 sm:grid-cols-5 gap-2.5 pt-2">
                        <button
                            v-for="act in implementationActivities"
                            :key="act.step"
                            @click="activeActivityStep = act.step"
                            :class="[
                                'p-3 rounded-xl text-left border transition cursor-pointer flex flex-col justify-between space-y-1',
                                activeActivityStep === act.step
                                    ? 'bg-[#204E38] text-white border-[#204E38] shadow-md ring-2 ring-emerald-400/50'
                                    : 'bg-white text-slate-700 border-slate-200 hover:border-emerald-500 hover:bg-slate-50'
                            ]"
                        >
                            <div class="flex items-center justify-between">
                                <span class="font-mono text-xs font-bold" :class="activeActivityStep === act.step ? 'text-emerald-400' : 'text-slate-400'">
                                    Tahap {{ act.step }}
                                </span>
                                <span class="text-base">{{ act.icon }}</span>
                            </div>
                            <span class="text-xs font-bold truncate leading-tight block">
                                {{ act.phase }}
                            </span>
                        </button>
                    </div>

                    <!-- Active Step Detail Card -->
                    <div
                        v-for="act in implementationActivities"
                        :key="'detail-' + act.step"
                        v-show="activeActivityStep === act.step"
                        class="bg-white rounded-3xl p-6 sm:p-8 border-2 border-slate-200/90 shadow-md transition-all duration-300 space-y-6"
                    >
                        <div class="flex flex-col lg:flex-row lg:items-center justify-between gap-4 pb-4 border-b border-slate-100">
                            <div class="space-y-1.5">
                                <div class="flex flex-wrap items-center gap-2">
                                    <span class="px-2.5 py-0.5 rounded-md bg-emerald-100 text-emerald-900 font-mono font-bold text-xs">
                                        Tahap {{ act.step }} &middot; {{ act.badge }}
                                    </span>
                                    <span class="text-xs font-bold text-slate-500 font-mono">
                                        Roadmap Operasional Pilot
                                    </span>
                                </div>
                                <h4 class="text-lg sm:text-2xl font-black text-slate-900 leading-snug">
                                    {{ act.title }}
                                </h4>
                                <p class="text-xs sm:text-sm font-semibold text-emerald-800">
                                    {{ act.subtitle }}
                                </p>
                            </div>
                            <div class="text-4xl sm:text-5xl shrink-0 p-3 bg-slate-50 rounded-2xl border border-slate-200 self-start lg:self-auto">
                                {{ act.icon }}
                            </div>
                        </div>

                        <!-- Narrative Description -->
                        <p class="text-xs sm:text-sm text-slate-600 leading-relaxed bg-slate-50/70 p-4 sm:p-5 rounded-2xl border border-slate-200">
                            {{ act.description }}
                        </p>

                        <!-- Quantitative Metrics Grid (Wajib Ada Angka dan Data) -->
                        <div class="space-y-2">
                            <span class="text-[11px] font-bold text-slate-500 uppercase tracking-wider block">
                                Indikator Kuantitatif & Data Spesifikasi:
                            </span>
                            <div class="grid grid-cols-2 sm:grid-cols-4 gap-3">
                                <div
                                    v-for="(met, midx) in act.metrics"
                                    :key="midx"
                                    class="p-3.5 bg-slate-50/90 rounded-xl border border-slate-200/80 hover:border-emerald-500 transition"
                                >
                                    <span class="text-[10px] text-slate-500 font-bold uppercase tracking-wider block truncate">
                                        {{ met.label }}
                                    </span>
                                    <span class="text-sm sm:text-base font-black text-slate-900 font-mono mt-0.5 block">
                                        {{ met.value }}
                                    </span>
                                    <span class="text-[10px] text-emerald-700 font-medium block mt-0.5 leading-tight">
                                        {{ met.sub }}
                                    </span>
                                </div>
                            </div>
                        </div>

                        <!-- Target Keluaran & Deliverables -->
                        <div class="space-y-2 pt-2">
                            <span class="text-[11px] font-bold text-slate-500 uppercase tracking-wider block">
                                Bukti Keluaran Nyata (Deliverables & Verifier):
                            </span>
                            <div class="grid grid-cols-1 sm:grid-cols-2 gap-2.5">
                                <div
                                    v-for="(del, didx) in act.deliverables"
                                    :key="didx"
                                    class="flex items-start gap-2.5 p-3 rounded-xl bg-emerald-50/50 border border-emerald-200/70 text-xs text-slate-800"
                                >
                                    <span class="w-4 h-4 rounded-full bg-emerald-600 text-white text-[10px] flex items-center justify-center shrink-0 mt-0.5">
                                        ✓
                                    </span>
                                    <span class="leading-relaxed font-medium">{{ del }}</span>
                                </div>
                            </div>
                        </div>

                        <!-- Footer Navigation between steps -->
                        <div class="flex items-center justify-between pt-4 border-t border-slate-100 text-xs">
                            <button
                                v-if="act.step !== '01'"
                                @click="activeActivityStep = '0' + (parseInt(act.step) - 1)"
                                class="font-bold text-slate-700 hover:text-emerald-700 transition flex items-center gap-1 cursor-pointer"
                            >
                                &larr; Tahap Sebelumnya
                            </button>
                            <span v-else class="text-slate-400">Tahap Pertama</span>

                            <button
                                v-if="act.step !== '05'"
                                @click="activeActivityStep = '0' + (parseInt(act.step) + 1)"
                                class="font-bold text-emerald-800 hover:text-emerald-950 transition flex items-center gap-1 cursor-pointer"
                            >
                                Tahap Selanjutnya &rarr;
                            </button>
                            <span v-else class="font-bold text-emerald-800">Tahap Akhir (Hilirisasi Pasar Tercapai)</span>
                        </div>
                    </div>
                </div>

                <!-- Call to Action Block: Lihat Rencana Pilot Project -->
                <div class="p-8 rounded-3xl bg-[#163828] text-white flex flex-col md:flex-row items-center justify-between gap-6 shadow-xl border border-[#265d42]">
                    <div class="space-y-2 max-w-2xl text-center md:text-left">
                        <div class="inline-flex items-center gap-2 px-3 py-1 rounded-md bg-emerald-500/20 text-emerald-300 font-mono text-xs font-bold border border-emerald-500/30">
                            <span>Kesiapan Pelaksanaan</span>
                            <span>&middot;</span>
                            <span>RAB Rp26.000.000</span>
                        </div>
                        <h3 class="text-xl sm:text-2xl font-black">
                            Ingin Mempelajari Roadmap & Pembagian Peran Pilot Implementasi?
                        </h3>
                        <p class="text-xs sm:text-sm text-emerald-100/90 leading-relaxed">
                            Akses kalender kerja detail, rincian biaya aktual 12 pos belanja, dokumen persetujuan mitra, dan mekanisme pengawasan selama tahapan implementasi.
                        </p>
                    </div>

                    <div class="flex flex-col sm:flex-row items-center gap-3 shrink-0 w-full sm:w-auto">
                        <Link
                            :href="route('pilot.project')"
                            class="w-full sm:w-auto px-6 py-3.5 rounded-xl bg-emerald-600 hover:bg-emerald-500 text-white font-bold text-xs sm:text-sm transition flex items-center justify-center gap-2 shadow-lg shadow-emerald-600/30 cursor-pointer"
                        >
                            <span>Lihat Rencana Pilot Project</span>
                            <span>&rarr;</span>
                        </Link>
                        <a
                            href="/data/Surat Persetujuan Pst.pdf"
                            target="_blank"
                            class="w-full sm:w-auto px-4.5 py-3.5 rounded-xl bg-[#204E38] hover:bg-[#1a402e] text-white border border-[#2e6d4e] font-bold text-xs sm:text-sm transition flex items-center justify-center gap-1.5 cursor-pointer"
                        >
                            <span>Unduh Surat Mitra PDF</span>
                            <span class="text-emerald-300 font-mono text-xs">&darr;</span>
                        </a>
                    </div>
                </div>
            </div>
        </section>

        <!-- 7. SHOWCASE FOTO DOKUMENTASI ASLI -->

        <section id="galeri" class="py-16 bg-white border-b border-slate-200/80">
            <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
                <div class="flex flex-col md:flex-row md:items-end justify-between mb-10 gap-4">
                    <div>
                        <span class="text-xs font-bold text-emerald-800 bg-emerald-50 px-3 py-1 rounded-md border border-emerald-200 uppercase tracking-wider">
                            Bukti Lapangan Nyata
                        </span>
                        <h2 class="text-2xl sm:text-3xl font-black text-slate-900 mt-2">
                            Dokumentasi Lapangan SIRAMI
                        </h2>
                        <p class="text-xs sm:text-sm text-slate-600 mt-1">
                            Foto asli hasil observasi lapangan di Pondok Pesantren Hidayatul Mustafid, Kota Tasikmalaya.
                        </p>
                    </div>

                    <Link
                        :href="route('public.galeri')"
                        class="px-5 py-2.5 rounded-xl border border-slate-300 hover:border-emerald-600 text-slate-800 text-xs font-bold transition flex items-center gap-2 shrink-0 shadow-xs hover:bg-slate-50"
                    >
                        <span>Buka Semua 45+ Foto di Galeri</span>
                        <span>&rarr;</span>
                    </Link>
                </div>

                <!-- 6 Photo Cards Grid -->
                <div class="grid grid-cols-2 sm:grid-cols-3 lg:grid-cols-3 gap-4 sm:gap-6">
                    <div
                        v-for="(photo, pidx) in showcasePhotos"
                        :key="pidx"
                        @click="openLightbox(photo)"
                        class="bg-white rounded-2xl overflow-hidden border border-slate-200/90 hover:border-emerald-600 transition-all shadow-xs hover:shadow-md cursor-pointer group flex flex-col"
                    >
                        <div class="aspect-[4/3] bg-slate-100 overflow-hidden relative">
                            <img
                                :src="photo.src"
                                :alt="photo.title"
                                loading="lazy"
                                class="w-full h-full object-cover group-hover:scale-105 transition-transform duration-300"
                            />
                            <div class="absolute inset-0 bg-gradient-to-t from-slate-950/70 via-transparent to-transparent opacity-0 group-hover:opacity-100 transition-opacity flex items-end p-3">
                                <span class="text-white text-xs font-bold truncate">Klik untuk Perbesar</span>
                            </div>
                        </div>
                        <div class="p-3.5 border-t border-slate-100 flex-1 flex flex-col justify-between">
                            <h4 class="text-xs font-bold text-slate-900 group-hover:text-emerald-800 transition truncate">
                                {{ photo.title }}
                            </h4>
                            <span class="text-[11px] font-medium text-emerald-700 mt-1">
                                {{ photo.category }}
                            </span>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- 7. SECTION: TIM INOVATOR (SESUAI DOKUMEN SPESIFIKASI SYLS 2026) -->
        <section id="tim" class="py-16 bg-white border-b border-slate-200/80">
            <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 space-y-12">
                <!-- Header & Narratives (Verbatim Blueprint Specification) -->
                <div class="grid grid-cols-1 lg:grid-cols-12 gap-8 items-start">
                    <div class="lg:col-span-5 space-y-4">
                        <div class="flex flex-wrap items-center gap-2">
                            <span class="text-xs font-bold text-emerald-800 bg-emerald-50 px-3 py-1 rounded-md border border-emerald-200 uppercase tracking-wider">
                                Section 7 &middot; Tim Inovator
                            </span>
                            <span class="text-[10px] font-bold text-emerald-900 bg-emerald-100/80 px-2.5 py-0.5 rounded border border-emerald-300">
                                Mahasiswa UIN SGD Bandung
                            </span>
                        </div>
                        <h2 class="text-2xl sm:text-3xl lg:text-4xl font-black text-slate-900 leading-tight">
                            Dibangun oleh Tim yang Menghubungkan <span class="text-emerald-800">Teknologi, Riset, dan Dampak Sosial</span>.
                        </h2>
                    </div>

                    <!-- 3 Paragraphs Exact Verbatim Description -->
                    <div class="lg:col-span-7 space-y-3.5 text-xs sm:text-sm text-slate-600 leading-relaxed bg-slate-50/80 p-6 rounded-2xl border border-slate-200">
                        <p>
                            <strong>SIRAMI</strong> dikembangkan oleh tiga inovator dengan latar belakang, kompetensi, dan tanggung jawab yang saling melengkapi.
                        </p>
                        <p>
                            Tim berperan dalam pengembangan konsep, kajian, perancangan solusi, pengelolaan proyek, serta persiapan implementasi bersama calon mitra.
                        </p>
                        <p class="font-medium text-slate-700">
                            Profil setiap inovator menyediakan informasi mengenai latar belakang, peran dalam proyek, pengalaman relevan, rekam jejak, serta dokumen pendukung yang dapat diakses sesuai ketersediaannya.
                        </p>
                    </div>
                </div>

                <!-- Tim Contribution Distribution Bar -->
                <div class="p-6 rounded-2xl bg-slate-50 border border-slate-200 space-y-3">
                    <div class="flex flex-col sm:flex-row sm:items-center justify-between gap-2">
                        <span class="text-xs font-bold uppercase tracking-wider text-slate-600">
                            Grafik Kontribusi Berdasarkan Pembagian Peran yang Disepakati (100% Sinergi):
                        </span>
                        <span class="text-xs font-mono font-bold text-emerald-800">
                            Tri 35% &middot; Dinar 33% &middot; Mariya 32%
                        </span>
                    </div>
                    <div class="h-3 w-full bg-slate-200 rounded-full overflow-hidden flex">
                        <div class="bg-emerald-600 h-full transition-all duration-500" style="width: 35%" title="Tri Febriansah - Teknologi & IoT (35%)"></div>
                        <div class="bg-teal-600 h-full transition-all duration-500" style="width: 33%" title="Dinar Robiatul Adawiyah - Bisnis Sosial & SROI (33%)"></div>
                        <div class="bg-amber-600 h-full transition-all duration-500" style="width: 32%" title="Neng Mariya Ulfa Mardiyah - Komunitas & Operasional (32%)"></div>
                    </div>
                    <div class="flex flex-wrap items-center justify-between text-[11px] text-slate-500 font-medium pt-1">
                        <span class="flex items-center gap-1.5"><span class="w-2.5 h-2.5 rounded-full bg-emerald-600"></span>Tri Febriansah: Teknologi, IoT & Rancang Bangun (35%)</span>
                        <span class="flex items-center gap-1.5"><span class="w-2.5 h-2.5 rounded-full bg-teal-600"></span>Dinar Robiatul Adawiyah: Bisnis Sosial, RAB & SROI (33%)</span>
                        <span class="flex items-center gap-1.5"><span class="w-2.5 h-2.5 rounded-full bg-amber-600"></span>Neng Mariya Ulfa Mardiyah: Komunitas, Mitra & Operasional (32%)</span>
                    </div>
                </div>

                <!-- 3 Inovator Cards Grid with SVGs & Track Records -->
                <div class="grid grid-cols-1 md:grid-cols-3 gap-6">
                    <div
                        v-for="(member, idx) in team"
                        :key="idx"
                        class="bg-white rounded-3xl p-6 sm:p-7 border border-slate-200 shadow-xs hover:border-emerald-600 hover:shadow-lg transition-all duration-300 flex flex-col justify-between space-y-6 group"
                    >
                        <div class="space-y-4">
                            <!-- Member Header with Real SVG Photo Avatar -->
                            <div class="flex items-center gap-4">
                                <div class="w-16 h-16 rounded-2xl bg-slate-100 overflow-hidden border-2 border-emerald-500/30 shrink-0 group-hover:scale-105 transition-transform shadow-xs">
                                    <img
                                        :src="member.photo || '/tim/tri.svg'"
                                        :alt="member.name"
                                        class="w-full h-full object-cover"
                                    />
                                </div>
                                <div class="min-w-0">
                                    <h3 class="text-base font-bold text-slate-900 group-hover:text-emerald-800 transition truncate">
                                        {{ member.name }}
                                    </h3>
                                    <span class="text-xs font-bold text-emerald-700 block truncate">
                                        {{ member.role }}
                                    </span>
                                    <span class="text-[11px] text-slate-500 block truncate font-medium">
                                        {{ member.institution || 'UIN Sunan Gunung Djati Bandung' }}
                                    </span>
                                </div>
                            </div>

                            <!-- Competency & Scope -->
                            <div class="p-3.5 rounded-xl bg-slate-50 border border-slate-100 space-y-1.5 text-xs">
                                <span class="text-[10px] font-bold text-slate-400 uppercase tracking-wider block">Fokus Kompetensi:</span>
                                <p class="font-bold text-slate-800">{{ member.competency }}</p>
                                <p class="text-slate-600 text-[11px] leading-relaxed pt-1">{{ member.scope }}</p>
                            </div>

                            <!-- Tanggung Jawab dalam Proyek -->
                            <div class="space-y-1.5 text-xs">
                                <span class="text-[10px] font-bold text-slate-400 uppercase tracking-wider block">Tanggung Jawab Spesifik:</span>
                                <ul class="space-y-1 text-slate-600 text-[11px]">
                                    <li v-for="(resp, ridx) in member.responsibilities" :key="ridx" class="flex items-start gap-1.5">
                                        <span class="text-emerald-600 font-bold mt-0.5">&bull;</span>
                                        <span class="leading-tight">{{ resp }}</span>
                                    </li>
                                </ul>
                            </div>

                            <!-- Rekam Jejak / Prestasi Kompetisi Riil -->
                            <div class="space-y-1.5 text-xs pt-1">
                                <span class="text-[10px] font-bold text-slate-400 uppercase tracking-wider block">Rekam Jejak & Penghargaan Terverifikasi:</span>
                                <div class="space-y-1.5">
                                    <div
                                        v-for="(ach, aidx) in member.achievements"
                                        :key="aidx"
                                        class="p-2 rounded-lg bg-emerald-50/70 border border-emerald-200/60 text-[11px] font-semibold text-emerald-950 flex items-start gap-1.5"
                                    >
                                        <svg class="w-3.5 h-3.5 text-amber-600 shrink-0 mt-0.5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4M7.835 4.697a3.42 3.42 0 001.946-.806 3.42 3.42 0 014.438 0 3.42 3.42 0 001.946.806 3.42 3.42 0 013.138 3.138 3.42 3.42 0 00.806 1.946 3.42 3.42 0 010 4.438 3.42 3.42 0 00-.806 1.946 3.42 3.42 0 01-3.138 3.138 3.42 3.42 0 00-1.946.806 3.42 3.42 0 01-4.438 0 3.42 3.42 0 00-1.946-.806 3.42 3.42 0 01-3.138-3.138 3.42 3.42 0 00-.806-1.946 3.42 3.42 0 010-4.438 3.42 3.42 0 00.806-1.946 3.42 3.42 0 013.138-3.138z"/></svg>
                                        <span class="leading-snug">{{ ach }}</span>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- Card Footer: Role Contribution & Action Button -->
                        <div class="pt-4 border-t border-slate-100 flex items-center justify-between text-xs">
                            <span class="font-mono font-bold px-2 py-0.5 rounded bg-emerald-100 text-emerald-900 text-[11px]">
                                Kontribusi: {{ member.contribution_pct || '33' }}%
                            </span>

                            <div class="flex items-center gap-2">
                                <a
                                    v-if="member.cv_url"
                                    :href="member.cv_url"
                                    target="_blank"
                                    class="inline-flex items-center gap-1.5 px-3 py-1.5 rounded-lg bg-[#204E38] hover:bg-[#183c2b] text-white font-bold text-[11px] transition shadow-2xs cursor-pointer"
                                    :title="'Unduh ' + (member.cv_filename || 'CV')"
                                >
                                    <svg class="w-3 h-3 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12h6m-6 4h6m2 5H7a2 2 0 01-2-2V5a2 2 0 012-2h5.586a1 1 0 01.707.293l5.414 5.414a1 1 0 01.293.707V19a2 2 0 01-2 2z"/></svg>
                                    <span>Unduh CV</span>
                                </a>
                                <Link
                                    :href="route('tim.mitra')"
                                    class="text-emerald-800 font-bold hover:text-emerald-950 flex items-center gap-1 transition text-xs"
                                >
                                    <span>Profil</span>
                                    <span>&rarr;</span>
                                </Link>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- BUKTI DOKUMENTASI & REKAM JEJAK PRESTASI TIM -->
                <TeamEvidenceShowcase :evidence="teamEvidence" />

                <!-- Callout Banner: Klarifikasi Hak Cipta & Kepemilikan Mahasiswa UIN Bandung -->
                <div class="p-5 rounded-2xl bg-emerald-50/80 border border-emerald-200 text-xs text-emerald-950 flex flex-col sm:flex-row sm:items-center justify-between gap-4 shadow-xs">
                    <div class="flex items-start gap-3">
                        <img :src="logo?.uin || '/logo/logouin.svg'" class="h-6 w-auto shrink-0 mt-0.5" alt="UIN SGD" />
                        <div class="leading-relaxed">
                            <strong>Inovasi Independen Mahasiswa UIN SGD Bandung:</strong> SIRAMI merupakan karya ilmiah dan inovasi sosial orisinal yang digagas, dirancang, dan dimiliki secara mandiri oleh <strong>Mahasiswa UIN Sunan Gunung Djati Bandung</strong> untuk <strong>Sharia Young Leader Summit (SYLS) 2026</strong>. Pondok pesantren berkedudukan murni sebagai mitra lokasi implementasi pilot dan laboratorium lapangan uji coba sistem.
                        </div>
                    </div>

                    <div class="flex items-center gap-2 shrink-0">
                        <Link
                            :href="route('tim.mitra')"
                            class="px-4 py-2.5 rounded-xl bg-emerald-800 hover:bg-emerald-900 text-white font-bold text-xs transition flex items-center gap-1.5 shadow-sm"
                        >
                            <span>Kenali Tim SIRAMI</span>
                            <span>&rarr;</span>
                        </Link>
                    </div>
                </div>
            </div>
        </section>

        <!-- 8. SECTION: KEBUTUHAN PENDANAAN (SESUAI DOKUMEN SPESIFIKASI SYLS 2026) -->
        <section id="pendanaan" class="py-16 bg-[#FAFCFA] border-b border-slate-200/80">
            <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 space-y-12">
                <!-- Header & Narratives (Verbatim Blueprint Specification) -->
                <div class="grid grid-cols-1 lg:grid-cols-12 gap-8 items-start">
                    <div class="lg:col-span-5 space-y-4">
                        <div class="flex flex-wrap items-center gap-2">
                            <span class="text-xs font-bold text-[#204E38] bg-emerald-50 px-3 py-1 rounded-md border border-emerald-200 uppercase tracking-wider">
                                Section 8 &middot; Kebutuhan Pendanaan
                            </span>
                            <span class="text-[10px] font-bold text-[#204E38] bg-emerald-100/90 px-2.5 py-0.5 rounded border border-emerald-300">
                                Anggaran Kas Rp26.000.000
                            </span>
                        </div>
                        <h2 class="text-2xl sm:text-3xl lg:text-4xl font-black text-slate-900 leading-tight">
                            Dukung Langkah Awal dari <span class="text-[#204E38]">Rancangan Menuju Implementasi</span>.
                        </h2>
                    </div>

                    <!-- 3 Paragraphs Exact Verbatim Description -->
                    <div class="lg:col-span-7 space-y-3.5 text-xs sm:text-sm text-slate-600 leading-relaxed bg-white p-6 rounded-2xl border border-slate-200 shadow-2xs">
                        <p>
                            <strong>Pengembangan SIRAMI</strong> membutuhkan dukungan untuk mempersiapkan dan melaksanakan pilot project. Pendanaan diarahkan pada kebutuhan teknis, material, instalasi, pengujian, operasional, pendampingan komunitas, serta evaluasi hasil.
                        </p>
                        <p>
                            Kebutuhan pendanaan disusun berdasarkan rencana kerja dan perhitungan biaya yang dapat ditelusuri. Setiap komponen anggaran dihubungkan dengan kegiatan dan keluaran yang ditargetkan agar penggunaan dana dapat dievaluasi secara transparan.
                        </p>
                        <p class="font-medium text-slate-700">
                            Melalui keterbukaan informasi, calon mitra pendanaan dapat memahami kebutuhan proyek, dasar perhitungan biaya, tahapan implementasi, dan bentuk kontribusi yang memungkinkan.
                        </p>
                    </div>
                </div>

                <!-- 4 Highlight Cards: Total Anggaran, Durasi, SROI & Status Verifikasi -->
                <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-4">
                    <div class="p-5 bg-white rounded-2xl border border-slate-200 shadow-xs">
                        <span class="text-[11px] font-bold text-slate-400 uppercase tracking-wider block">Total Kebutuhan Kas</span>
                        <span class="text-2xl font-black text-[#204E38] font-mono mt-1 block">Rp26.000.000</span>
                        <span class="text-xs text-slate-500 mt-1 block">Rencana Anggaran Biaya (RAB) Final</span>
                    </div>

                    <div class="p-5 bg-white rounded-2xl border border-slate-200 shadow-xs">
                        <span class="text-[11px] font-bold text-slate-400 uppercase tracking-wider block">Durasi Implementasi</span>
                        <span class="text-2xl font-black text-slate-900 font-mono mt-1 block">Implementasi Bertahap</span>
                        <span class="text-xs text-slate-500 mt-1 block">Pelaksanaan Terukur & Akuntabel</span>
                    </div>

                    <div class="p-5 bg-white rounded-2xl border border-slate-200 shadow-xs">
                        <span class="text-[11px] font-bold text-slate-400 uppercase tracking-wider block">Proyeksi Rasio SROI</span>
                        <span class="text-2xl font-black text-[#204E38] font-mono mt-1 block">1 : 2.4</span>
                        <span class="text-xs text-slate-500 mt-1 block">Social Return on Investment</span>
                    </div>

                    <div class="p-5 bg-white rounded-2xl border border-slate-200 shadow-xs">
                        <span class="text-[11px] font-bold text-slate-400 uppercase tracking-wider block">Status Pendanaan</span>
                        <span class="text-sm font-bold text-amber-700 mt-1 flex items-center gap-1.5 block">
                            <span class="w-2 h-2 rounded-full bg-amber-500 animate-pulse"></span>
                            Terbuka untuk Mitra
                        </span>
                        <span class="text-xs text-slate-500 mt-1 block">SYLS 2026 & Program Kemitraan</span>
                    </div>
                </div>

                <!-- Tabel Rincian Anggaran Transparan per 5 Kategori -->
                <div class="bg-white rounded-3xl border border-slate-200 overflow-hidden shadow-xs">
                    <div class="p-6 bg-slate-50/70 border-b border-slate-200 flex flex-col sm:flex-row sm:items-center justify-between gap-3">
                        <div>
                            <h3 class="text-base font-bold text-slate-900">Rincian Penggunaan Dana per Kategori Belanja</h3>
                            <p class="text-xs text-slate-500">Setiap pos dihitung berdasarkan volume kebutuhan nyata dan spesifikasi teknis.</p>
                        </div>
                        <span class="text-xs font-mono font-bold text-[#204E38] bg-emerald-50 px-3 py-1 rounded-lg border border-emerald-200 self-start sm:self-auto">
                            Akuntabel & Tervalidasi
                        </span>
                    </div>

                    <div class="overflow-x-auto">
                        <table class="w-full text-left text-xs sm:text-sm">
                            <thead class="bg-slate-50 border-b border-slate-200 text-slate-700 font-bold uppercase text-[11px]">
                                <tr>
                                    <th class="py-3.5 px-4 sm:px-6">Komponen Belanja</th>
                                    <th class="py-3.5 px-4 sm:px-6">Dasar Perhitungan & Spesifikasi</th>
                                    <th class="py-3.5 px-4 sm:px-6 text-center">Porsi (%)</th>
                                    <th class="py-3.5 px-4 sm:px-6 text-right">Alokasi Dana</th>
                                </tr>
                            </thead>
                            <tbody class="divide-y divide-slate-100">
                                <tr v-for="(item, idx) in budget?.items" :key="idx" class="hover:bg-slate-50/60 transition">
                                    <td class="py-4 px-4 sm:px-6 font-bold text-slate-900">
                                        {{ item.category }}
                                    </td>
                                    <td class="py-4 px-4 sm:px-6 text-slate-600 text-xs">
                                        {{ item.note }}
                                    </td>
                                    <td class="py-4 px-4 sm:px-6 text-center font-mono text-xs font-bold text-slate-500">
                                        {{ item.percentage || '-' }}
                                    </td>
                                    <td class="py-4 px-4 sm:px-6 text-right font-mono font-bold text-slate-900">
                                        {{ item.amount }}
                                    </td>
                                </tr>
                            </tbody>
                            <tfoot class="bg-emerald-50/80 border-t-2 border-emerald-300 font-bold">
                                <tr>
                                    <td colspan="3" class="py-4 px-4 sm:px-6 text-[#204E38] text-sm">
                                        TOTAL KEBUTUHAN DANA BERDASARKAN RAB FINAL
                                    </td>
                                    <td class="py-4 px-4 sm:px-6 text-right font-mono text-base text-[#204E38]">
                                        {{ budget?.total || 'Rp26.000.000' }}
                                    </td>
                                </tr>
                            </tfoot>
                        </table>
                    </div>
                </div>

                <!-- Catatan Nonkas & Tindakan Kolaborasi -->
                <div class="p-6 rounded-2xl bg-white border border-slate-200 flex flex-col md:flex-row items-center justify-between gap-6 shadow-xs">
                    <div class="space-y-1 text-xs text-slate-600 max-w-2xl">
                        <strong class="text-slate-800">Catatan Kontribusi Nonkas Mitra:</strong>
                        <p>
                            Akses fasilitas fisik, toren air eksisting, sumur bor, pekarangan ±350 bata, dan waktu pendampingan pengelola dicatat sebagai kontribusi nonkas mitra (in-kind) dan tidak digabungkan ke dalam total anggaran tunai Rp26.000.000.
                        </p>
                    </div>

                    <div class="flex flex-wrap items-center gap-3 shrink-0 w-full md:w-auto">
                        <Link
                            :href="route('dukung.implementasi')"
                            class="w-full sm:w-auto px-6 py-3.5 rounded-xl bg-[#204E38] hover:bg-[#19402e] text-white font-bold text-xs sm:text-sm transition flex items-center justify-center gap-2 shadow-md cursor-pointer"
                        >
                            <span>Lihat Kebutuhan dan Rencana Anggaran</span>
                            <span>&rarr;</span>
                        </Link>

                        <button
                            @click="openCollab('pendanaan')"
                            class="w-full sm:w-auto px-5 py-3.5 rounded-xl bg-emerald-700 hover:bg-emerald-800 text-white font-bold text-xs sm:text-sm transition flex items-center justify-center gap-2 shadow-sm cursor-pointer"
                        >
                            <span>Diskusikan Kolaborasi</span>
                        </button>
                    </div>
                </div>
            </div>
        </section>

        <!-- 9. SECTION: MITRA DAN KOLABORASI (SESUAI DOKUMEN SPESIFIKASI SYLS 2026) -->
        <section id="mitra" class="py-16 bg-white border-b border-slate-200/80">
            <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 space-y-12">
                <!-- Header & Narratives (Verbatim Blueprint Specification) -->
                <div class="grid grid-cols-1 lg:grid-cols-12 gap-8 items-start">
                    <div class="lg:col-span-5 space-y-4">
                        <span class="text-xs font-bold text-emerald-800 bg-emerald-50 px-3 py-1 rounded-md border border-emerald-200 uppercase tracking-wider">
                            Section 9 &middot; Mitra dan Kolaborasi
                        </span>
                        <h2 class="text-2xl sm:text-3xl lg:text-4xl font-black text-slate-900 leading-tight">
                            Membangun Solusi Melalui <span class="text-emerald-800">Kolaborasi Multipihak</span>.
                        </h2>
                    </div>

                    <!-- 3 Paragraphs Exact Verbatim Description -->
                    <div class="lg:col-span-7 space-y-3.5 text-xs sm:text-sm text-slate-600 leading-relaxed bg-slate-50/80 p-6 rounded-2xl border border-slate-200">
                        <p>
                            <strong>SIRAMI</strong> membuka peluang kolaborasi dengan lembaga pendidikan, komunitas, pemerintah, organisasi sosial, peneliti, mitra teknologi, dan lembaga pendanaan.
                        </p>
                        <p>
                            Kolaborasi diarahkan untuk memperkuat kualitas kajian, kelayakan teknis, kesiapan implementasi, kapasitas pengelola, dan keberlanjutan program.
                        </p>
                        <p class="font-medium text-slate-700">
                            Setiap mitra yang ditampilkan pada website dilengkapi dengan informasi peran dan bentuk keterlibatan sesuai persetujuan serta bukti kerja sama yang tersedia.
                        </p>
                    </div>
                </div>

                <!-- 6 Bentuk Kolaborasi Grid -->
                <div class="space-y-4">
                    <div class="flex items-center justify-between">
                        <div>
                            <span class="text-xs font-bold text-emerald-800 uppercase tracking-wider block">Peluang Kemitraan Terbuka</span>
                            <h3 class="text-xl font-black text-slate-900 mt-0.5">Enam Bentuk Kolaborasi SIRAMI</h3>
                        </div>
                        <span class="text-xs text-slate-500 font-mono hidden sm:inline">Multipihak & Sinergis</span>
                    </div>

                    <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-4">
                        <!-- 1. Riset & Pengujian Teknologi -->
                        <div class="p-5 rounded-2xl bg-slate-50/70 border border-slate-200 hover:border-emerald-600 hover:bg-emerald-50/20 transition group space-y-2.5">
                            <span class="w-8 h-8 rounded-lg bg-emerald-100 text-emerald-800 flex items-center justify-center font-bold text-sm">
                                01
                            </span>
                            <h4 class="text-sm font-bold text-slate-900 group-hover:text-emerald-800 transition">
                                Riset dan Pengujian Teknologi
                            </h4>
                            <p class="text-xs text-slate-600 leading-relaxed">
                                Pengujian sensor kualitas air, pengamatan mikrobiologi berkala, dan analisis nutrisi tanaman pangan bersama akademisi dan laboratorium riset.
                            </p>
                        </div>

                        <!-- 2. Pengembangan serta Validasi Rancangan Teknis -->
                        <div class="p-5 rounded-2xl bg-slate-50/70 border border-slate-200 hover:border-emerald-600 hover:bg-emerald-50/20 transition group space-y-2.5">
                            <span class="w-8 h-8 rounded-lg bg-emerald-100 text-emerald-800 flex items-center justify-center font-bold text-sm">
                                02
                            </span>
                            <h4 class="text-sm font-bold text-slate-900 group-hover:text-emerald-800 transition">
                                Pengembangan serta Validasi Rancangan Teknis
                            </h4>
                            <p class="text-xs text-slate-600 leading-relaxed">
                                Validasi teknik pemipaan, sedimentasi, efisiensi filtrasi pasir/karbon aktif, dan kalibrasi sistem kontrol otomatis dengan pakar rekayasa lingkungan.
                            </p>
                        </div>

                        <!-- 3. Dukungan Lokasi dan Implementasi -->
                        <div class="p-5 rounded-2xl bg-slate-50/70 border border-slate-200 hover:border-emerald-600 hover:bg-emerald-50/20 transition group space-y-2.5">
                            <span class="w-8 h-8 rounded-lg bg-emerald-100 text-emerald-800 flex items-center justify-center font-bold text-sm">
                                03
                            </span>
                            <h4 class="text-sm font-bold text-slate-900 group-hover:text-emerald-800 transition">
                                Dukungan Lokasi dan Implementasi
                            </h4>
                            <p class="text-xs text-slate-600 leading-relaxed">
                                Penyediaan fasilitas lahan, akses fasilitas air, dan lingkungan komunitas pesantren sebagai field laboratory percontohan penerapan teknologi.
                            </p>
                        </div>

                        <!-- 4. Pelatihan dan Pendampingan Komunitas -->
                        <div class="p-5 rounded-2xl bg-slate-50/70 border border-slate-200 hover:border-emerald-600 hover:bg-emerald-50/20 transition group space-y-2.5">
                            <span class="w-8 h-8 rounded-lg bg-emerald-100 text-emerald-800 flex items-center justify-center font-bold text-sm">
                                04
                            </span>
                            <h4 class="text-sm font-bold text-slate-900 group-hover:text-emerald-800 transition">
                                Pelatihan dan Pendampingan Komunitas
                            </h4>
                            <p class="text-xs text-slate-600 leading-relaxed">
                                Penguatan kapasitas santri dalam SOP budidaya, higiene panen, pembukuan kas mandiri, tata kelola santripreneur, dan perlindungan santri.
                            </p>
                        </div>

                        <!-- 5. Dukungan Pendanaan dan Peralatan -->
                        <div class="p-5 rounded-2xl bg-slate-50/70 border border-slate-200 hover:border-emerald-600 hover:bg-emerald-50/20 transition group space-y-2.5">
                            <span class="w-8 h-8 rounded-lg bg-emerald-100 text-emerald-800 flex items-center justify-center font-bold text-sm">
                                05
                            </span>
                            <h4 class="text-sm font-bold text-slate-900 group-hover:text-emerald-800 transition">
                                Dukungan Pendanaan dan Peralatan
                            </h4>
                            <p class="text-xs text-slate-600 leading-relaxed">
                                Hibah kompetisi, pendanaan CSR, atau donasi peralatan filter/sensor untuk merealisasikan pos anggaran tunai Rp26.000.000 selama implementasi pilot.
                            </p>
                        </div>

                        <!-- 6. Monitoring, Evaluasi, dan Replikasi -->
                        <div class="p-5 rounded-2xl bg-slate-50/70 border border-slate-200 hover:border-emerald-600 hover:bg-emerald-50/20 transition group space-y-2.5">
                            <span class="w-8 h-8 rounded-lg bg-emerald-100 text-emerald-800 flex items-center justify-center font-bold text-sm">
                                06
                            </span>
                            <h4 class="text-sm font-bold text-slate-900 group-hover:text-emerald-800 transition">
                                Monitoring, Evaluasi, dan Pengembangan Model Replikasi
                            </h4>
                            <p class="text-xs text-slate-600 leading-relaxed">
                                Pengukuran dampak sosial (SROI), penyempurnaan SOP baku, dan penyusunan panduan replikasi untuk diimplementasikan ke jaringan pesantren lainnya.
                            </p>
                        </div>
                    </div>
                </div>

                <!-- Mitra Lapangan Terverifikasi Card -->
                <div class="bg-slate-50 rounded-3xl p-6 sm:p-8 border border-slate-200">
                    <div class="grid grid-cols-1 lg:grid-cols-12 gap-8 items-center">
                        <div class="lg:col-span-8 space-y-4">
                            <div class="flex flex-wrap items-center gap-2">
                                <span class="text-xs font-bold text-emerald-900 bg-emerald-100 px-3 py-1 rounded-md uppercase tracking-wider">
                                    Mitra Lokasi Pilot Lapangan Terverifikasi
                                </span>
                                <span class="text-xs font-mono font-bold text-slate-600 bg-white px-2.5 py-1 rounded-md border border-slate-200">
                                    Surat No. 18/X/PPHM/2026
                                </span>
                            </div>

                            <h3 class="text-2xl font-black text-slate-900">
                                {{ pilotInfo?.pesantren_name }}
                            </h3>

                            <p class="text-xs sm:text-sm text-slate-600 leading-relaxed">
                                Berperan sebagai mitra penyedia lokasi percontohan dan laboratorium lapangan uji coba sistem di Kp. Sindangresik, Kel. Awipari, Kec. Cibeureum, Kota Tasikmalaya di bawah asuhan <strong>{{ pilotInfo?.pimpinan }}</strong>.
                            </p>

                            <div class="flex flex-wrap items-center gap-3 pt-2">
                                <a
                                    :href="pilotInfo?.support_letter_pdf || '/data/Surat Persetujuan Pst.pdf'"
                                    target="_blank"
                                    class="px-4 py-2.5 rounded-xl bg-white border border-slate-300 text-slate-800 font-bold text-xs hover:border-emerald-600 transition flex items-center gap-2 shadow-2xs"
                                >
                                    <span>Unduh Surat Persetujuan Mitra (PDF)</span>
                                    <span class="text-emerald-700">&darr;</span>
                                </a>

                                <button
                                    @click="openCollab('mitra')"
                                    class="px-5 py-2.5 rounded-xl bg-emerald-700 hover:bg-emerald-800 text-white font-bold text-xs transition flex items-center gap-2 shadow-sm cursor-pointer"
                                >
                                    <span>Jadilah Mitra SIRAMI</span>
                                    <span>&rarr;</span>
                                </button>
                            </div>
                        </div>

                        <!-- Leader Photo & Info -->
                        <div class="lg:col-span-4 aspect-[4/3] rounded-2xl overflow-hidden bg-[#163828] border-2 border-white shadow-md relative group">
                            <img
                                :src="'/foto/pimpinan pesantreen/WhatsApp Image 2026-10-22 at 00.03.21.webp'"
                                alt="Pimpinan Pesantren Hidayatul Mustafid"
                                class="w-full h-full object-cover group-hover:scale-105 transition-transform duration-500"
                            />
                            <div class="absolute inset-0 bg-gradient-to-t from-[#163828]/85 via-transparent to-transparent flex items-end p-4">
                                <div class="text-white">
                                    <span class="text-[10px] font-bold uppercase tracking-wider text-emerald-300">Pimpinan Pesantren Mitra</span>
                                    <h4 class="text-sm font-bold">{{ pilotInfo?.pimpinan }}</h4>
                                    <p class="text-[11px] text-slate-300">PPHM Kota Tasikmalaya</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- SKALABILITAS DAN REPLIKASI (SESUAI SLIDE PITCH DECK SYLS 2026) -->
        <SkalabilitasReplikasiSection :data="scalabilityReplication" />

        <!-- BUKTI, REFERENSI, DAN LAMPIRAN (8 PILAR DOKUMEN & QR SCAN ONLINE - SESUAI GAMBAR) -->
        <BuktiReferensiSection :data="buktiReferensi" />

        <!-- MARI TERHUBUNG DENGAN SIRAMI (DUAL QR CODES) -->
        <MariTerhubungSection />

        <!-- 10. SECTION: PENUTUP DAN AJAKAN KOLABORASI (SESUAI DOKUMEN SPESIFIKASI SYLS 2026) -->
        <section id="penutup" class="py-16 lg:py-20 bg-gradient-to-br from-[#123624] via-[#204E38] to-[#123624] text-white relative overflow-hidden border-t border-[#296347]">
            <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 space-y-10 relative z-10 text-center">
                <!-- Section Header (Verbatim) -->
                <div class="space-y-4 max-w-3xl mx-auto">
                    <div class="inline-flex items-center gap-2 px-3.5 py-1.5 rounded-full bg-emerald-500/20 border border-emerald-400/40 text-emerald-300 text-xs font-bold uppercase tracking-wider">
                        <span>Section 10 &middot; Penutup dan Ajakan Kolaborasi</span>
                    </div>

                    <h2 class="text-3xl sm:text-4xl lg:text-5xl font-black tracking-tight leading-tight">
                        Inovasi yang Bermakna Dimulai dari <span class="text-emerald-300">Kebutuhan Nyata</span>.
                    </h2>
                </div>

                <!-- 3 Paragraphs Exact Verbatim Description -->
                <div class="space-y-4 text-xs sm:text-sm text-emerald-100/90 leading-relaxed max-w-3xl mx-auto bg-[#163c29] p-6 sm:p-8 rounded-3xl border border-[#2b6d4b]">
                    <p>
                        <strong>SIRAMI</strong> percaya bahwa solusi berkelanjutan perlu dikembangkan berdasarkan kebutuhan, diuji melalui proses yang bertanggung jawab, dan disempurnakan bersama komunitas.
                    </p>
                    <p>
                        Melalui integrasi pengelolaan air, produksi pangan, teknologi tepat guna, dan kolaborasi multipihak, SIRAMI mempersiapkan langkah awal untuk mengembangkan model inovasi sosial yang dapat dipelajari, dievaluasi, dan diterapkan sesuai karakteristik setiap lokasi.
                    </p>
                    <p class="font-medium text-amber-300">
                        Kami membuka ruang bagi individu, komunitas, lembaga pendidikan, mitra teknis, dan lembaga pendanaan untuk berkolaborasi dalam proses pengembangan dan implementasi SIRAMI.
                    </p>
                </div>

                <!-- 3 Tombol Aksi Utama (Verbatim Blueprint Specification) -->
                <div class="flex flex-wrap items-center justify-center gap-3.5 pt-2">
                    <!-- Tombol 1: Dukung Pilot Project -->
                    <Link
                        :href="route('dukung.implementasi')"
                        class="px-7 py-4 rounded-xl bg-emerald-600 hover:bg-emerald-500 text-white font-bold text-sm transition shadow-lg shadow-emerald-950/40 flex items-center gap-2 cursor-pointer"
                    >
                        <span>Dukung Pilot Project</span>
                        <span class="text-amber-300 font-mono text-xs">(Rp26 Jt)</span>
                    </Link>

                    <!-- Tombol 2: Jelajahi Dokumentasi -->
                    <Link
                        :href="route('pusat.dokumen')"
                        class="px-6 py-4 rounded-xl bg-[#183c2a] hover:bg-[#204E38] text-white font-bold text-sm border border-[#2e6d4e] transition flex items-center gap-2 cursor-pointer"
                    >
                        <span>Jelajahi Dokumentasi</span>
                        <span>&rarr;</span>
                    </Link>

                    <!-- Tombol 3: Hubungi Tim SIRAMI -->
                    <button
                        @click="openCollab('umum')"
                        class="px-6 py-4 rounded-xl bg-white hover:bg-slate-100 text-[#204E38] font-bold text-sm transition flex items-center gap-2 shadow-md cursor-pointer"
                    >
                        <span>Hubungi Tim SIRAMI</span>
                        <svg class="w-4 h-4 text-[#204E38]" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 12h.01M12 12h.01M16 12h.01M21 12c0 4.418-4.03 8-9 8a9.863 9.863 0 01-4.255-.949L3 20l1.395-3.72C3.512 15.042 3 13.574 3 12c0-4.418 4.03-8 9-8s9 3.582 9 8z" /></svg>
                    </button>
                </div>

                <div class="pt-6 border-t border-emerald-800/80 text-xs text-emerald-200/80">
                    Disiapkan untuk Sharia Young Leader Summit (SYLS) 2026 &middot; Karya Inovasi Mahasiswa UIN Sunan Gunung Djati Bandung
                </div>
            </div>
        </section>

        <!-- INTERACTIVE COLLABORATION MODAL -->
        <div
            v-if="isModalOpen"
            class="fixed inset-0 z-50 bg-[#163828]/85 backdrop-blur-xs flex items-center justify-center p-4"
            @click.self="isModalOpen = false"
        >
            <div class="relative max-w-lg w-full bg-white rounded-3xl overflow-hidden border border-slate-200 shadow-2xl p-6 sm:p-8 space-y-5">
                <div class="flex items-center justify-between pb-3 border-b border-slate-100">
                    <div>
                        <span class="text-[10px] font-bold text-emerald-700 uppercase tracking-wider block">Inisiasi Kemitraan</span>
                        <h3 class="text-lg font-black text-slate-900">Formulir Kolaborasi SIRAMI</h3>
                    </div>
                    <button
                        @click="isModalOpen = false"
                        class="p-2 rounded-full hover:bg-slate-100 text-slate-400 hover:text-slate-700 transition cursor-pointer"
                    >
                        ✕
                    </button>
                </div>

                <div v-if="formSubmitted" class="p-6 text-center space-y-3 bg-emerald-50 rounded-2xl border border-emerald-200">
                    <svg class="w-12 h-12 mx-auto text-[#204E38]" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"/></svg>
                    <h4 class="text-base font-bold text-emerald-950">Terima Kasih atas Minat Kolaborasi!</h4>
                    <p class="text-xs text-emerald-800 leading-relaxed">
                        Data Anda telah kami terima. Tim Inovator SIRAMI (Mahasiswa UIN SGD Bandung) akan segera menghubungi Anda untuk diskusi lebih lanjut.
                    </p>
                </div>

                <form v-else @submit.prevent="submitForm" class="space-y-4 text-xs">
                    <div>
                        <label class="block font-bold text-slate-700 mb-1">Nama Lengkap *</label>
                        <input
                            v-model="formData.name"
                            type="text"
                            required
                            placeholder="Contoh: Ahmad Fauzan"
                            class="w-full px-3.5 py-2.5 rounded-xl border border-slate-300 text-slate-900 focus:outline-none focus:ring-2 focus:ring-emerald-500/50"
                        />
                    </div>

                    <div class="grid grid-cols-1 sm:grid-cols-2 gap-3">
                        <div>
                            <label class="block font-bold text-slate-700 mb-1">Instansi / Lembaga</label>
                            <input
                                v-model="formData.organization"
                                type="text"
                                placeholder="Universitas / CSR / Komunitas"
                                class="w-full px-3.5 py-2.5 rounded-xl border border-slate-300 text-slate-900 focus:outline-none focus:ring-2 focus:ring-emerald-500/50"
                            />
                        </div>
                        <div>
                            <label class="block font-bold text-slate-700 mb-1">Nomor WhatsApp *</label>
                            <input
                                v-model="formData.phone"
                                type="tel"
                                required
                                placeholder="08xxxxxxxxxx"
                                class="w-full px-3.5 py-2.5 rounded-xl border border-slate-300 text-slate-900 focus:outline-none focus:ring-2 focus:ring-emerald-500/50"
                            />
                        </div>
                    </div>

                    <div>
                        <label class="block font-bold text-slate-700 mb-1">Alamat Email *</label>
                        <input
                            v-model="formData.email"
                            type="email"
                            required
                            placeholder="email@instansi.com"
                            class="w-full px-3.5 py-2.5 rounded-xl border border-slate-300 text-slate-900 focus:outline-none focus:ring-2 focus:ring-emerald-500/50"
                        />
                    </div>

                    <div>
                        <label class="block font-bold text-slate-700 mb-1">Bentuk Kolaborasi yang Diminati</label>
                        <select
                            v-model="formData.type"
                            class="w-full px-3.5 py-2.5 rounded-xl border border-slate-300 text-slate-900 focus:outline-none focus:ring-2 focus:ring-emerald-500/50 bg-white"
                        >
                            <option value="pendanaan">Dukungan Pendanaan / Implementasi Pilot Rp26 Jt</option>
                            <option value="mitra">Kemitraan Lembaga / Implementasi Wilayah</option>
                            <option value="riset">Riset Teknis / Pengujian Laboratorium</option>
                            <option value="pelatihan">Pendampingan Santri / Pemasaran Produk</option>
                            <option value="umum">Informasi Umum & Diskusi Tim</option>
                        </select>
                    </div>

                    <div>
                        <label class="block font-bold text-slate-700 mb-1">Pesan / Catatan Tambahan</label>
                        <textarea
                            v-model="formData.note"
                            rows="3"
                            placeholder="Tuliskan gambaran rencana kolaborasi atau pertanyaan Anda..."
                            class="w-full px-3.5 py-2 rounded-xl border border-slate-300 text-slate-900 focus:outline-none focus:ring-2 focus:ring-emerald-500/50"
                        ></textarea>
                    </div>

                    <button
                        type="submit"
                        class="w-full py-3.5 rounded-xl bg-emerald-700 hover:bg-emerald-800 text-white font-bold text-xs sm:text-sm transition shadow-md cursor-pointer"
                    >
                        Kirim Pesan Kolaborasi &rarr;
                    </button>
                </form>
            </div>
        </div>

        <!-- LIGHTBOX MODAL FOR REAL PHOTOS -->
        <div
            v-if="selectedPhoto"
            class="fixed inset-0 z-50 bg-[#163828]/90 backdrop-blur-xs flex items-center justify-center p-4"
            @click.self="selectedPhoto = null"
        >
            <div class="relative max-w-4xl w-full bg-white rounded-2xl overflow-hidden border border-slate-200 shadow-2xl">
                <button
                    @click="selectedPhoto = null"
                    class="absolute top-4 right-4 z-10 p-2 rounded-full bg-[#163828]/80 text-white hover:bg-[#204E38] transition cursor-pointer"
                >
                    <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12" /></svg>
                </button>
                <div class="max-h-[75vh] flex items-center justify-center bg-[#163828]">
                    <img :src="selectedPhoto.src" :alt="selectedPhoto.title" class="max-h-[75vh] w-auto object-contain" />
                </div>
                <div class="p-4 bg-white text-slate-800 flex items-center justify-between text-xs border-t border-slate-200">
                    <div>
                        <h4 class="font-bold text-sm">{{ selectedPhoto.title }}</h4>
                        <p class="text-slate-500 mt-0.5">Kategori: {{ selectedPhoto.category }} &middot; Dokumentasi Asli SIRAMI</p>
                    </div>
                    <span class="px-2.5 py-1 rounded bg-emerald-100 text-emerald-800 font-bold">
                        Foto Lapangan Terverifikasi
                    </span>
                </div>
            </div>
        </div>
    </PublicLayout>
</template>
