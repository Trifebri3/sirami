<script setup>
import { Head, Link } from '@inertiajs/vue3';
import PublicLayout from '@/Layouts/PublicLayout.vue';
import SkalabilitasReplikasiSection from '@/Components/SkalabilitasReplikasiSection.vue';

const props = defineProps({
    logo: Object,
    kpis: Array,
    scalabilityReplication: Object,
});
</script>

<template>
    <PublicLayout :logo="logo" title="Dampak & KPI Terukur - Kerangka Evaluasi Dampak Sosial SIRAMI">
        <!-- Hero Header -->
        <section class="py-12 lg:py-16 bg-gradient-to-b from-white via-white to-emerald-50/30 border-b border-slate-200/80">
            <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
                <div class="max-w-3xl space-y-4">
                    <div class="inline-flex items-center gap-2 px-3.5 py-1.5 rounded-full bg-emerald-100/90 border border-emerald-300 text-emerald-950 text-xs font-bold uppercase tracking-wider">
                        <img :src="logo?.uin || '/logo/logouin.svg'" class="h-4 w-auto" alt="UIN Bandung" />
                        <span>Akuntabilitas & KPI Terukur &middot; SYLS 2026</span>
                    </div>

                    <h1 class="text-3xl sm:text-5xl font-black text-slate-900 tracking-tight leading-tight">
                        Dampak & <span class="text-emerald-800">Evaluasi KPI</span>
                    </h1>

                    <p class="text-slate-600 text-sm sm:text-base leading-relaxed">
                        SIRAMI membedakan secara tegas antara aktivitas (output), perubahan perilaku/produksi (outcome), dan dampak jangka panjang (impact). Seluruh indikator dapat diverifikasi melalui data lapangan nyata.
                    </p>
                </div>
            </div>
        </section>

        <!-- Matriks KPI -->
        <section class="py-16 bg-white border-b border-slate-200/80">
            <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
                <div class="max-w-2xl mb-10">
                    <span class="text-xs font-bold text-emerald-800 bg-emerald-50 px-3 py-1 rounded-md border border-emerald-200 uppercase tracking-wider">
                        Tabel Indikator Kinerja
                    </span>
                    <h2 class="text-2xl sm:text-3xl font-black text-slate-900 mt-2">
                        Matriks Output, Outcome, & Impact
                    </h2>
                    <p class="text-xs sm:text-sm text-slate-600 mt-1">
                        Bila baseline belum tersedia, dicatat sebagai "diukur pada bulan 1", bukan angka asumsi.
                    </p>
                </div>

                <div class="border border-slate-200 rounded-2xl overflow-hidden bg-white shadow-xs">
                    <div class="overflow-x-auto">
                        <table class="w-full text-left text-xs sm:text-sm">
                            <thead class="bg-slate-50 border-b border-slate-200 text-slate-700 font-bold uppercase text-[11px]">
                                <tr>
                                    <th class="py-3.5 px-4 sm:px-6">Tingkat</th>
                                    <th class="py-3.5 px-4 sm:px-6">Indikator Kunci</th>
                                    <th class="py-3.5 px-4 sm:px-6">Baseline Awal</th>
                                    <th class="py-3.5 px-4 sm:px-6">Target 6 Bulan</th>
                                    <th class="py-3.5 px-4 sm:px-6">Metode Verifikasi</th>
                                </tr>
                            </thead>
                            <tbody class="divide-y divide-slate-100">
                                <tr v-for="(kpi, idx) in kpis" :key="idx" class="hover:bg-slate-50/60 transition">
                                    <td class="py-4 px-4 sm:px-6 align-top">
                                        <span
                                            class="px-2 py-0.5 rounded text-[10px] font-bold uppercase tracking-wider"
                                            :class="[
                                                kpi.level === 'Output' ? 'bg-indigo-50 text-indigo-700 border border-indigo-200' :
                                                kpi.level === 'Outcome' ? 'bg-emerald-50 text-emerald-700 border border-emerald-200' :
                                                'bg-amber-50 text-amber-700 border border-amber-200'
                                            ]"
                                        >
                                            {{ kpi.level }}
                                        </span>
                                    </td>
                                    <td class="py-4 px-4 sm:px-6 font-bold text-slate-900 align-top max-w-xs">
                                        {{ kpi.indicator }}
                                    </td>
                                    <td class="py-4 px-4 sm:px-6 text-slate-500 text-xs align-top">
                                        {{ kpi.baseline }}
                                    </td>
                                    <td class="py-4 px-4 sm:px-6 font-semibold text-slate-800 text-xs align-top">
                                        {{ kpi.target }}
                                    </td>
                                    <td class="py-4 px-4 sm:px-6 text-slate-600 text-xs align-top max-w-xs">
                                        {{ kpi.verifier }}
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </section>

        <!-- SROI & Manajemen Risiko -->
        <section class="py-16 bg-[#F8FAF8] border-b border-slate-200/80">
            <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
                <div class="grid grid-cols-1 lg:grid-cols-2 gap-10">
                    
                    <!-- Kerangka SROI -->
                    <div class="p-8 bg-white rounded-3xl border border-slate-200 space-y-4 shadow-xs">
                        <span class="text-xs font-bold text-emerald-800 bg-emerald-100 px-3 py-1 rounded-md uppercase tracking-wider">
                            Kajian Finansial Sosial
                        </span>
                        <h3 class="text-xl font-bold text-slate-900">
                            Model Perhitungan SROI Transparan
                        </h3>
                        <p class="text-xs sm:text-sm text-slate-600 leading-relaxed">
                            Nilai Social Return on Investment (SROI) tidak diklaim secara fiktif di awal. Perhitungan akan dilakukan pascapilot menggunakan data riil dengan mempertimbangkan variabel koreksi:
                        </p>
                        <ul class="text-xs text-slate-600 space-y-2">
                            <li class="p-3 bg-slate-50 rounded-xl"><strong>Deadweight:</strong> Menghitung perubahan yang tetap akan terjadi meski tanpa program SIRAMI.</li>
                            <li class="p-3 bg-slate-50 rounded-xl"><strong>Attribution:</strong> Menghitung kontribusi pihak lain atau program eksternal pesantren.</li>
                            <li class="p-3 bg-slate-50 rounded-xl"><strong>Drop-off:</strong> Penurunan efek manfaat seiring berjalannya waktu pascapendampingan.</li>
                        </ul>
                    </div>

                    <!-- Safeguarding & Risiko -->
                    <div class="p-8 bg-white rounded-3xl border border-slate-200 space-y-4 shadow-xs">
                        <span class="text-xs font-bold text-amber-800 bg-amber-100 px-3 py-1 rounded-md uppercase tracking-wider">
                            Perlindungan & Etika
                        </span>
                        <h3 class="text-xl font-bold text-slate-900">
                            Safeguarding Santri & Manajemen Risiko
                        </h3>
                        <p class="text-xs sm:text-sm text-slate-600 leading-relaxed">
                            Keselamatan santri dan integritas lingkungan adalah prioritas mutlak yang diproteksi secara kelembagaan:
                        </p>
                        <ul class="text-xs text-slate-600 space-y-2">
                            <li class="p-3 bg-slate-50 rounded-xl"><strong>Keselamatan Listrik & Air:</strong> Pemisahan ketat instalasi kabel pompa dari saluran basah dengan grounding aman.</li>
                            <li class="p-3 bg-slate-50 rounded-xl"><strong>Perlindungan Privasi Santri:</strong> Dokumentasi hanya dipublikasikan atas izin tertulis pengelola dan mematuhi etika santri.</li>
                            <li class="p-3 bg-slate-50 rounded-xl"><strong>Kanal Pengaduan Aman:</strong> Akses komunikasi langsung untuk masukan santri, pengelola, atau wali santri tanpa hambatan.</li>
                        </ul>
                    </div>

                </div>
            </div>
        </section>

        <!-- Skalabilitas dan Replikasi Section (Sesuai Pitch Deck SYLS 2026) -->
        <SkalabilitasReplikasiSection :data="scalabilityReplication" />
    </PublicLayout>
</template>
