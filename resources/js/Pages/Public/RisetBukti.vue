<script setup>
import { Head, Link } from '@inertiajs/vue3';
import PublicLayout from '@/Layouts/PublicLayout.vue';
import BuktiReferensiSection from '@/Components/BuktiReferensiSection.vue';

const props = defineProps({
    logo: Object,
    references: Array,
    buktiReferensi: Object,
});
</script>

<template>
    <PublicLayout :logo="logo" title="Riset & Bukti - Landasan Ilmiah, Standar Baku & Validasi SIRAMI">
        <!-- Hero Header -->
        <section class="py-12 lg:py-16 bg-gradient-to-b from-white via-white to-emerald-50/30 border-b border-slate-200/80">
            <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
                <div class="max-w-4xl space-y-4">
                    <div class="flex flex-wrap items-center gap-2">
                        <div class="inline-flex items-center gap-2 px-3.5 py-1.5 rounded-full bg-[#E8E9E2] border border-[#A8B99B] text-[#204E38] text-xs font-bold uppercase tracking-wider">
                            <span>Kajian Akademis & Dokumentasi Riset &middot; SYLS 2026 (Tahap Pengajuan)</span>
                        </div>
                        <a
                            href="/data/SuratCiptaan_EC002026184233_3.pdf"
                            target="_blank"
                            class="inline-flex items-center gap-1.5 px-3 py-1 rounded-full bg-white border border-slate-300 text-slate-700 text-xs font-bold hover:border-emerald-600 transition"
                        >
                            <span>HAKI Terdaftar Kemenkumham: EC002026184233</span>
                            <span class="text-emerald-700">&darr;</span>
                        </a>
                    </div>

                    <h1 class="text-3xl sm:text-5xl font-black text-slate-900 tracking-tight leading-tight">
                        Setiap Inovasi Harus Memiliki <span class="text-emerald-800">Dasar yang Dapat Ditelusuri</span>.
                    </h1>

                    <div class="space-y-3 text-slate-600 text-xs sm:text-sm leading-relaxed max-w-3xl">
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
            </div>
        </section>

        <!-- 7 Kategori Dokumentasi Riset -->
        <section class="py-12 bg-white border-b border-slate-200/80">
            <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
                <div class="max-w-2xl mb-8">
                    <span class="text-xs font-bold text-emerald-800 bg-emerald-50 px-3 py-1 rounded-md border border-emerald-200 uppercase tracking-wider">
                        Kategori Dokumentasi
                    </span>
                    <h2 class="text-2xl font-black text-slate-900 mt-2">
                        Tujuh Klaster Bukti & Data Riset SIRAMI
                    </h2>
                </div>

                <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-4">
                    <div class="p-5 rounded-2xl bg-slate-50 border border-slate-200 flex flex-col justify-between">
                        <div>
                            <span class="text-xs font-mono font-bold text-emerald-800 block mb-2">01</span>
                            <h3 class="text-sm font-bold text-slate-900">Kajian dan Dasar Konseptual</h3>
                            <p class="text-xs text-slate-600 mt-1">Literatur baku mutu air WHO, Permen LH 11/2025, dan survei kesehatan gizi SKI 2023.</p>
                        </div>
                    </div>

                    <div class="p-5 rounded-2xl bg-slate-50 border border-slate-200 flex flex-col justify-between">
                        <div>
                            <span class="text-xs font-mono font-bold text-emerald-800 block mb-2">02</span>
                            <h3 class="text-sm font-bold text-slate-900">Dokumentasi Prototipe & Teknologi</h3>
                            <p class="text-xs text-slate-600 mt-1">Rancang bangun fisik sistem filtrasi bertingkat, fitoremediasi, dan mikrokontroler sensor IoT.</p>
                        </div>
                    </div>

                    <div class="p-5 rounded-2xl bg-slate-50 border border-slate-200 flex flex-col justify-between">
                        <div>
                            <span class="text-xs font-mono font-bold text-emerald-800 block mb-2">03</span>
                            <h3 class="text-sm font-bold text-slate-900">Hasil Pengujian & Data Pendukung</h3>
                            <p class="text-xs text-slate-600 mt-1">Log kalibrasi sensor pH/TDS/kekeruhan dan lembar pengujian sampel air laboratorium.</p>
                        </div>
                    </div>

                    <div class="p-5 rounded-2xl bg-slate-50 border border-slate-200 flex flex-col justify-between">
                        <div>
                            <span class="text-xs font-mono font-bold text-emerald-800 block mb-2">04</span>
                            <h3 class="text-sm font-bold text-slate-900">Riset & Pengamatan Microgreens</h3>
                            <p class="text-xs text-slate-600 mt-1">Observasi laju pertumbuhan 7-14 hari, densitas sulforaphane, konsumsi air, dan biaya HPP.</p>
                        </div>
                    </div>

                    <div class="p-5 rounded-2xl bg-slate-50 border border-slate-200 flex flex-col justify-between">
                        <div>
                            <span class="text-xs font-mono font-bold text-emerald-800 block mb-2">05</span>
                            <h3 class="text-sm font-bold text-slate-900">Diagram & Rancangan Teknis</h3>
                            <p class="text-xs text-slate-600 mt-1">Skema pemisahan pipa fisik, alur gravitasi, titik sensor monitoring, dan zero-risk safety gate.</p>
                        </div>
                    </div>

                    <div class="p-5 rounded-2xl bg-slate-50 border border-slate-200 flex flex-col justify-between">
                        <div>
                            <span class="text-xs font-mono font-bold text-emerald-800 block mb-2">06</span>
                            <h3 class="text-sm font-bold text-slate-900">Publikasi, Sertifikat & Seleksi</h3>
                            <p class="text-xs text-slate-600 mt-1">Hak Cipta Kemenkumham RI No. EC002026184233 dan berkas kompetisi Sharia Young Leader Summit 2026.</p>
                        </div>
                    </div>

                    <div class="p-5 rounded-2xl bg-slate-50 border border-slate-200 flex flex-col justify-between sm:col-span-2">
                        <div>
                            <span class="text-xs font-mono font-bold text-[#204E38] block mb-2">07</span>
                            <h3 class="text-sm font-bold text-slate-900">Dokumen Persiapan Pilot Project</h3>
                            <p class="text-xs text-slate-600 mt-1">Surat persetujuan resmi Pesantren No. 18/X/PPHM/2026, RAB terbaru Rp26.000.000, dan inventaris fasilitas Sindangresik.</p>
                        </div>
                    </div>
                </div>

                <!-- Simulation Banner -->
                <div class="mt-6 p-5 rounded-2xl bg-[#163828] text-white flex flex-col sm:flex-row items-center justify-between gap-4 border border-[#265d42]">
                    <div class="flex items-center gap-3">
                        <div class="w-9 h-9 rounded-xl bg-white/10 flex items-center justify-center text-emerald-300 shrink-0">
                            <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19.428 15.428a2 2 0 00-1.022-.547l-2.387-.477a6 6 0 00-3.86.517l-.318.158a6 6 0 01-3.86.517L6.05 15.21a2 2 0 00-1.806.547M8 4h8l-1 1v5.172a2 2 0 00.586 1.414l5 5c1.26 1.26.367 3.414-1.415 3.414H4.828c-1.782 0-2.674-2.154-1.414-3.414l5-5A2 2 0 009 10.172V5L8 4z"/></svg>
                        </div>
                        <div class="text-xs">
                            <strong class="text-white block font-bold">Animasi Interaktif Alur Pengolahan Air SIRAMI:</strong>
                            <span class="text-emerald-100/90">Simulasi visual alur aliran air dari sumber wudu, penyaringan, fitoremediasi hingga biofilter dan sensor IoT.</span>
                        </div>
                    </div>
                    <Link
                        :href="route('solusi')"
                        class="px-4 py-2 rounded-xl bg-emerald-600 hover:bg-emerald-500 text-white font-bold text-xs transition shrink-0 shadow-sm"
                    >
                        Lihat Alur Sistem &rarr;
                    </Link>
                </div>
            </div>
        </section>


        <!-- 4 Standar Regulasi & Acuan Utama -->
        <section class="py-16 bg-white border-b border-slate-200/80">
            <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
                <div class="max-w-2xl mb-12">
                    <span class="text-xs font-bold text-emerald-800 bg-emerald-50 px-3 py-1 rounded-md border border-emerald-200 uppercase tracking-wider">
                        Landasan Regulasi Internasional & Nasional
                    </span>
                    <h2 class="text-2xl sm:text-3xl font-black text-slate-900 mt-2">
                        Standar Rujukan & Pedoman Baku
                    </h2>
                    <p class="text-xs sm:text-sm text-slate-600 mt-1">
                        Pemberlakuan standar keselamatan multi-penghalang (multi-barrier approach) untuk memastikan zero-risk pada pangan konsumsi.
                    </p>
                </div>

                <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                    <div
                        v-for="(refItem, idx) in references"
                        :key="idx"
                        class="p-6 bg-white rounded-2xl border border-slate-200 shadow-xs hover:border-emerald-600 hover:shadow-md transition-all flex flex-col justify-between"
                    >
                        <div class="space-y-3">
                            <span class="px-2.5 py-1 rounded bg-emerald-50 text-emerald-800 font-mono font-bold text-xs uppercase">
                                Rujukan {{ idx + 1 }} &middot; {{ refItem.year }}
                            </span>
                            <h3 class="text-base font-bold text-slate-900">
                                {{ refItem.title }}
                            </h3>
                            <p class="text-xs text-slate-500 font-medium">
                                Penerbit: {{ refItem.publisher }}
                            </p>
                            <p class="text-xs text-slate-600 leading-relaxed bg-slate-50 p-3.5 rounded-xl border border-slate-100">
                                {{ refItem.scope }}
                            </p>
                        </div>

                        <div class="mt-5 pt-3 border-t border-slate-100">
                            <a
                                :href="refItem.link"
                                target="_blank"
                                class="text-xs font-bold text-emerald-700 hover:text-emerald-900 flex items-center gap-1.5"
                            >
                                <span>Periksa Tautan Dokumen Resmi</span>
                                <span>&rarr;</span>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- Spesifikasi Sensor IoT & Kalibrasi -->
        <section class="py-16 bg-[#F8FAF8] border-b border-slate-200/80">
            <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
                <div class="max-w-3xl mb-12">
                    <span class="text-xs font-bold text-emerald-800 bg-emerald-100 px-3 py-1 rounded-md uppercase tracking-wider">
                        Validasi Teknologi Tepat Guna
                    </span>
                    <h2 class="text-2xl sm:text-3xl font-black text-slate-900 mt-2">
                        Spesifikasi Sensor & Protokol Kalibrasi IoT
                    </h2>
                    <p class="text-xs sm:text-sm text-slate-600 mt-1">
                        Membedakan kemampuan pengukuran sensor elektronika real-time dengan pengujian mikrobiologi laboratorium.
                    </p>
                </div>

                <div class="grid grid-cols-1 md:grid-cols-3 gap-6">
                    <div class="p-6 bg-white rounded-2xl border border-slate-200 shadow-xs space-y-3">
                        <span class="text-xs font-bold text-slate-400 uppercase tracking-wider block">Sensor 1</span>
                        <h3 class="text-base font-bold text-slate-900">Sensor pH Analog E-201-C</h3>
                        <ul class="text-xs text-slate-600 space-y-1.5 leading-relaxed">
                            <li><strong>Rentang Ukur:</strong> 0.00 – 14.00 pH</li>
                            <li><strong>Akurasi:</strong> &plusmn;0.1 pH pada suhu 25&deg;C</li>
                            <li><strong>Metode Kalibrasi:</strong> Larutan buffer standar pH 4.01, 6.86, dan 9.18 berkala</li>
                            <li><strong>Fungsi:</strong> Menjaga stabilitas keasaman air sesuai ambang batas tanaman microgreens (6.0 - 7.5).</li>
                        </ul>
                    </div>

                    <div class="p-6 bg-white rounded-2xl border border-slate-200 shadow-xs space-y-3">
                        <span class="text-xs font-bold text-slate-400 uppercase tracking-wider block">Sensor 2</span>
                        <h3 class="text-base font-bold text-slate-900">Sensor TDS (Total Dissolved Solids)</h3>
                        <ul class="text-xs text-slate-600 space-y-1.5 leading-relaxed">
                            <li><strong>Rentang Ukur:</strong> 0 – 1000 ppm</li>
                            <li><strong>Akurasi:</strong> &plusmn;5% F.S. pada suhu 25&deg;C</li>
                            <li><strong>Metode Kalibrasi:</strong> Kompensasi temperatur terintegrasi sensor NTC</li>
                            <li><strong>Fungsi:</strong> Memantau kepekatan zat padat terlarut dan garam anorganik dalam air olahan.</li>
                        </ul>
                    </div>

                    <div class="p-6 bg-white rounded-2xl border border-slate-200 shadow-xs space-y-3">
                        <span class="text-xs font-bold text-slate-400 uppercase tracking-wider block">Sensor 3</span>
                        <h3 class="text-base font-bold text-slate-900">Sensor Turbiditas Optik</h3>
                        <ul class="text-xs text-slate-600 space-y-1.5 leading-relaxed">
                            <li><strong>Rentang Ukur:</strong> 0 – 4000 NTU</li>
                            <li><strong>Metode Ukur:</strong> Deteksi transmisi dan hamburan cahaya inframerah</li>
                            <li><strong>Akurasi:</strong> Deteksi visual padatan melayang & partikel koloid</li>
                            <li><strong>Fungsi:</strong> Menilai efektivitas fisik media penyaring pasir dan karbon aktif.</li>
                        </ul>
                    </div>
                </div>

                <div class="mt-8 p-5 bg-white rounded-2xl border border-slate-200 flex flex-col sm:flex-row items-center justify-between gap-4">
                    <div>
                        <h4 class="font-bold text-sm text-slate-900">Pusat Dokumentasi Dokumen & Lampiran Riset</h4>
                        <p class="text-xs text-slate-500 mt-0.5">Lihat seluruh dokumen fisik, surat kemitraan resmi, dan inventaris di repository dokumen.</p>
                    </div>
                    <Link
                        :href="route('pusat.dokumen')"
                        class="px-5 py-2.5 rounded-xl bg-[#204E38] hover:bg-[#163828] text-white font-bold text-xs transition shrink-0 cursor-pointer shadow-xs"
                    >
                        Buka Pusat Dokumen & Lampiran &rarr;
                    </Link>
                </div>
            </div>
        </section>

        <!-- BUKTI, REFERENSI, DAN LAMPIRAN (8 PILAR BUKTI & QR AKSES RESMI) -->
        <BuktiReferensiSection :data="buktiReferensi" />
    </PublicLayout>
</template>
