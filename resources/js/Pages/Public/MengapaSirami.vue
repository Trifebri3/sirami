<script setup>
import { Head, Link } from '@inertiajs/vue3';
import PublicLayout from '@/Layouts/PublicLayout.vue';
import IssueCorrelationNetwork from '@/Components/IssueCorrelationNetwork.vue';
import GlobalToLocalMapping from '@/Components/GlobalToLocalMapping.vue';
import MengapaMendesakSection from '@/Components/MengapaMendesakSection.vue';

const props = defineProps({
    logo: Object,
    pilotInfo: Object,
    challenges: Array,
    references: Array,
    multilevelMapping: Array,
    mengapaMendesak: Object,
});

</script>

<template>
    <PublicLayout :logo="logo" title="Mengapa SIRAMI? - Identifikasi Masalah & Latar Belakang Riset">
        <!-- Hero Header -->
        <section class="py-12 lg:py-16 bg-gradient-to-b from-white via-white to-emerald-50/30 border-b border-slate-200/80">
            <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
                <div class="max-w-3xl space-y-4">
                    <div class="inline-flex items-center gap-2 px-3.5 py-1.5 rounded-full bg-emerald-100/90 border border-emerald-300 text-emerald-950 text-xs font-bold uppercase tracking-wider">
                        <span class="w-2 h-2 rounded-full bg-[#204E38]"></span>
                        <span>Kajian Masalah & Latar Belakang &middot; SYLS 2026</span>
                    </div>

                    <h1 class="text-3xl sm:text-5xl font-black text-slate-900 tracking-tight leading-tight">
                        Mengapa <span class="text-emerald-800">SIRAMI</span> Dibutuhkan?
                    </h1>

                    <p class="text-slate-600 text-sm sm:text-base leading-relaxed">
                        SIRAMI berangkat dari kebutuhan nyata kawasan urban dan komunitas pesantren yang menghadapi keterbatasan lahan, kerentanan kualitas air, kebutuhan nutrisi pangan sehat, serta minimnya peluang wirausaha mandiri yang terstruktur.
                    </p>
                </div>
            </div>
        </section>

        <!-- Section: Mengapa Ini mendesak? (Data Sekunder Kemenkes SKI 2023, WHO, NIQ 2025 & BPS 2024 - Sesuai Slide Pitch SYLS 2026) -->
        <section class="py-12 lg:py-16 bg-[#FAFCFA] border-b border-slate-200/80">
            <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
                <MengapaMendesakSection :data="mengapaMendesak" />
            </div>
        </section>

        <!-- 3 Tantangan Riil -->
        <section class="py-16 bg-white border-b border-slate-200/80">
            <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
                <div class="max-w-2xl mb-12">
                    <span class="text-xs font-bold text-emerald-800 bg-emerald-50 px-3 py-1 rounded-md border border-emerald-200 uppercase tracking-wider">
                        Tiga Akar Masalah Lapangan
                    </span>
                    <h2 class="text-2xl sm:text-3xl font-black text-slate-900 mt-2">
                        Tantangan Mendasar di Lingkungan Komunitas
                    </h2>
                    <p class="text-xs sm:text-sm text-slate-600 mt-1">
                        Hasil observasi dan wawancara awal di Pondok Pesantren Al-Qur'an Hidayatul Mustafid, Kota Tasikmalaya.
                    </p>
                </div>

                <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
                    <div
                        v-for="(ch, idx) in challenges"
                        :key="idx"
                        class="bg-white rounded-2xl overflow-hidden border border-slate-200 shadow-xs hover:border-emerald-600 hover:shadow-lg transition-all duration-300 flex flex-col group"
                    >
                        <div class="aspect-[16/10] overflow-hidden bg-slate-100 relative">
                            <img
                                :src="ch.img"
                                :alt="ch.title"
                                class="w-full h-full object-cover group-hover:scale-105 transition-transform duration-500"
                            />
                            <span class="absolute top-3 left-3 px-2.5 py-1 rounded-lg bg-[#204E38]/90 backdrop-blur-xs text-white text-[11px] font-bold">
                                {{ ch.tag }}
                            </span>
                        </div>
                        <div class="p-6 flex-1 flex flex-col justify-between">
                            <div>
                                <h3 class="text-lg font-bold text-slate-900 group-hover:text-emerald-800 transition">
                                    {{ ch.title }}
                                </h3>
                                <p class="text-xs sm:text-sm text-slate-600 mt-3 leading-relaxed">
                                    {{ ch.desc }}
                                </p>
                            </div>
                            <div class="mt-6 pt-4 border-t border-slate-100 flex items-center justify-between text-xs text-slate-500">
                                <span>Sumber: {{ ch.data_source || 'Observasi Lapangan' }}</span>
                                <span class="font-bold text-emerald-700">Tervalidasi &rarr;</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- Interactive Issue Correlation Network -->
        <section class="py-16 bg-white border-b border-slate-200/80">
            <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
                <IssueCorrelationNetwork />
            </div>
        </section>

        <!-- Pemetaan Masalah Bertingkat: Global ke Lokal -->
        <section class="py-16 bg-[#FAFCFA] border-b border-slate-200/80">
            <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
                <GlobalToLocalMapping :data="multilevelMapping" />
            </div>
        </section>

        <!-- 3 Lapisan Data & Transparansi -->

        <section class="py-16 bg-[#F8FAF8] border-b border-slate-200/80">
            <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
                <div class="max-w-3xl mb-12">
                    <span class="text-xs font-bold text-emerald-800 bg-emerald-100 px-3 py-1 rounded-md uppercase tracking-wider">
                        Metodologi Jujur & Berlapis
                    </span>
                    <h2 class="text-2xl sm:text-3xl font-black text-slate-900 mt-2">
                        Pemisahan Lapisan Data: Nasional vs Observasi Lokal
                    </h2>
                    <p class="text-xs sm:text-sm text-slate-600 mt-1">
                        SIRAMI tidak mencampuradukkan data statistik nasional dengan observasi lapangan. Setiap klaim memiliki batas verifikasi yang jelas.
                    </p>
                </div>

                <div class="grid grid-cols-1 md:grid-cols-3 gap-6">
                    <!-- Lapisan 1 -->
                    <div class="p-6 bg-white rounded-2xl border border-slate-200 shadow-xs space-y-3">
                        <span class="px-2.5 py-1 rounded bg-indigo-50 text-indigo-700 font-mono font-bold text-xs uppercase">
                            Lapisan 1: Data Sekunder
                        </span>
                        <h3 class="text-base font-bold text-slate-900">Statistik Konsumsi Nasional</h3>
                        <p class="text-xs text-slate-600 leading-relaxed">
                            Berdasarkan Survei Kesehatan Indonesia (SKI) 2023 oleh Kemenkes RI, <strong>96,7% penduduk usia &ge;5 tahun</strong> kurang mengonsumsi sayur dan buah sesuai standar kesehatan harian.
                        </p>
                        <div class="text-[11px] text-slate-500 pt-2 border-t border-slate-100">
                            Status: Data Publik Resmi (Kemenkes SKI 2023)
                        </div>
                    </div>

                    <!-- Lapisan 2 -->
                    <div class="p-6 bg-white rounded-2xl border border-slate-200 shadow-xs space-y-3">
                        <span class="px-2.5 py-1 rounded bg-emerald-50 text-emerald-700 font-mono font-bold text-xs uppercase">
                            Lapisan 2: Observasi Awal
                        </span>
                        <h3 class="text-base font-bold text-slate-900">Aset Fisik Pesantren Mitra</h3>
                        <p class="text-xs text-slate-600 leading-relaxed">
                            Di Pondok Pesantren Hidayatul Mustafid Tasikmalaya, terdapat sumur bor aktif, penampungan wudu, toren air, IPAL, serta potensi lahan 350 bata yang belum dikelola dengan sistem budidaya intensif.
                        </p>
                        <div class="text-[11px] text-slate-500 pt-2 border-t border-slate-100">
                            Status: Observasi Awal & Surat Dukungan No. 18/X/PPHM/2026
                        </div>
                    </div>

                    <!-- Lapisan 3 -->
                    <div class="p-6 bg-white rounded-2xl border border-slate-200 shadow-xs space-y-3">
                        <span class="px-2.5 py-1 rounded bg-amber-50 text-amber-700 font-mono font-bold text-xs uppercase">
                            Lapisan 3: Target Baseline
                        </span>
                        <h3 class="text-base font-bold text-slate-900">Parameter yang Akan Diukur</h3>
                        <p class="text-xs text-slate-600 leading-relaxed">
                            Volume debit air harian, biaya listrik pompa riil, parameter kimia/biologi air sebelum dan sesudah filtrasi, serta daya beli pasar microgreens akan diukur secara presisi pada Bulan 1 pelaksanaan pilot.
                        </p>
                        <div class="text-[11px] text-slate-500 pt-2 border-t border-slate-100">
                            Status: Target Pengukuran 6 Bulan Pilot
                        </div>
                    </div>
                </div>

                <!-- Callout Keselamatan -->
                <div class="mt-8 p-5 rounded-2xl bg-amber-50 border border-amber-300 text-amber-950 text-xs sm:text-sm flex items-start gap-3.5 shadow-xs">
                    <span class="text-xl shrink-0 mt-0.5">⚠️</span>
                    <div class="space-y-1">
                        <strong class="font-bold text-amber-900">Prinsip Keselamatan Baku SIRAMI:</strong>
                        <p class="text-xs leading-relaxed text-amber-900/90">
                            Kejernihan visual bukan bukti keamanan. Air bekas wudu atau keluaran IPAL tidak otomatis dialirkan ke microgreens pangan atau kolam ikan tanpa lolos verifikasi parameter uji laboratorium resmi mengacu standar baku mutu WHO dan Permen LH No. 11/2025.
                        </p>
                    </div>
                </div>
            </div>
        </section>

        <!-- Visi & Misi SIRAMI -->
        <section class="py-16 bg-white border-b border-slate-200/80">
            <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
                <div class="grid grid-cols-1 lg:grid-cols-12 gap-12 items-center">
                    <div class="lg:col-span-6 space-y-6">
                        <span class="text-xs font-bold text-emerald-800 bg-emerald-50 px-3 py-1 rounded-md border border-emerald-200 uppercase tracking-wider">
                            Arah Inovasi Sosial
                        </span>
                        <h2 class="text-3xl font-black text-slate-900">
                            Visi & Misi SIRAMI
                        </h2>
                        
                        <div class="p-6 bg-slate-50 rounded-2xl border border-slate-200 space-y-2">
                            <h3 class="text-sm font-bold uppercase tracking-wider text-emerald-800">Visi Utama</h3>
                            <p class="text-xs sm:text-sm text-slate-700 leading-relaxed">
                                Mendorong model pengelolaan air dan pangan berbasis komunitas yang aman, produktif, inklusif, dan berpotensi direplikasi setelah terbukti layak secara teknis dan finansial.
                            </p>
                        </div>

                        <div class="space-y-3">
                            <h3 class="text-sm font-bold uppercase tracking-wider text-slate-900">Misi Pelaksanaan</h3>
                            <ul class="space-y-2 text-xs sm:text-sm text-slate-600">
                                <li class="flex items-start gap-2.5">
                                    <span class="w-5 h-5 rounded-full bg-emerald-100 text-emerald-800 flex items-center justify-center font-bold text-xs shrink-0 mt-0.5">1</span>
                                    <span>Memetakan sumber, aliran, penggunaan, biaya, dan potensi kehilangan air secara presisi.</span>
                                </li>
                                <li class="flex items-start gap-2.5">
                                    <span class="w-5 h-5 rounded-full bg-emerald-100 text-emerald-800 flex items-center justify-center font-bold text-xs shrink-0 mt-0.5">2</span>
                                    <span>Menguji pendekatan Smart Water Treatment dan filtrasi bertahap sesuai peruntukan aman.</span>
                                </li>
                                <li class="flex items-start gap-2.5">
                                    <span class="w-5 h-5 rounded-full bg-emerald-100 text-emerald-800 flex items-center justify-center font-bold text-xs shrink-0 mt-0.5">3</span>
                                    <span>Mengembangkan budidaya microgreens sebagai produk pangan utama padat nutrisi cepat panen (7-14 hari).</span>
                                </li>
                                <li class="flex items-start gap-2.5">
                                    <span class="w-5 h-5 rounded-full bg-emerald-100 text-emerald-800 flex items-center justify-center font-bold text-xs shrink-0 mt-0.5">4</span>
                                    <span>Membangun kapasitas santri dalam SOP budidaya, pencatatan biaya (HPP), pembukuan kas, dan wirausaha mandiri.</span>
                                </li>
                            </ul>
                        </div>
                    </div>

                    <!-- Right Card: Call to Actions -->
                    <div class="lg:col-span-6 bg-gradient-to-br from-[#163828] via-[#204E38] to-[#163828] text-white rounded-3xl p-8 sm:p-10 space-y-6 shadow-xl border border-[#2e6d4e]/40">
                        <span class="text-xs font-bold uppercase tracking-wider text-emerald-400">Selanjutnya: Arsitektur Solusi</span>
                        <h3 class="text-2xl sm:text-3xl font-black">
                            Bagaimana SIRAMI Menyelesaikan Masalah Ini?
                        </h3>
                        <p class="text-xs sm:text-sm text-slate-300 leading-relaxed">
                            Pelajari rancang bangun sistem Smart Water Treatment, integrasi sensor IoT, sistem budidaya microgreens, dan alur keselamatan air secara mendalam.
                        </p>
                        <div class="flex flex-wrap gap-3 pt-2">
                            <Link
                                :href="route('solusi')"
                                class="px-6 py-3.5 rounded-xl bg-emerald-600 hover:bg-emerald-500 text-white font-bold text-xs sm:text-sm transition flex items-center gap-2 shadow-md"
                            >
                                <span>Buka Halaman Solusi Terpadu</span>
                                <span>&rarr;</span>
                            </Link>
                            <Link
                                :href="route('dukung.implementasi')"
                                class="px-5 py-3.5 rounded-xl bg-[#204E38] hover:bg-[#1a402e] text-white font-bold text-xs sm:text-sm border border-[#2e6d4e] transition"
                            >
                                Dukung Implementasi (Rp26 Jt)
                            </Link>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </PublicLayout>
</template>
