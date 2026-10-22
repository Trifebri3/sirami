<script setup>
import { Head, Link } from '@inertiajs/vue3';
import PublicLayout from '@/Layouts/PublicLayout.vue';
import SkalabilitasReplikasiSection from '@/Components/SkalabilitasReplikasiSection.vue';

const props = defineProps({
    logo: Object,
    solutions: Array,
    scalabilityReplication: Object,
});
</script>

<template>
    <PublicLayout :logo="logo" title="Solusi SIRAMI - Smart Water Treatment & Sistem Microgreens">
        <!-- Hero Header -->
        <section class="py-12 lg:py-16 bg-gradient-to-b from-white via-white to-emerald-50/30 border-b border-slate-200/80">
            <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
                <div class="max-w-4xl space-y-4">
                    <div class="flex flex-wrap items-center gap-2">
                        <div class="inline-flex items-center gap-2 px-3.5 py-1.5 rounded-full bg-[#E8E9E2] border border-[#A8B99B] text-[#204E38] text-xs font-bold uppercase tracking-wider">
                            <span>Arsitektur Sistem &middot; SYLS 2026 (Tahap Pengajuan)</span>
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
                        Dari Kajian dan Teknologi Menuju <span class="text-emerald-800">Solusi yang Dapat Diuji</span>.
                    </h1>

                    <div class="space-y-3 text-slate-600 text-xs sm:text-sm leading-relaxed max-w-3xl">
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
            </div>
        </section>

        <!-- 4 Komponen Solusi Utama -->
        <section class="py-12 bg-white border-b border-slate-200/80">
            <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
                <div class="max-w-2xl mb-8">
                    <span class="text-xs font-bold text-emerald-800 bg-emerald-50 px-3 py-1 rounded-md border border-emerald-200 uppercase tracking-wider">
                        Komponen Solusi
                    </span>
                    <h2 class="text-2xl font-black text-slate-900 mt-2">
                        Empat Pilar Pendekatan SIRAMI
                    </h2>
                </div>

                <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-6">
                    <div class="p-6 bg-[#F7F5EF]/60 rounded-2xl border border-[#A8B99B]/50 shadow-2xs space-y-3">
                        <div class="w-10 h-10 rounded-xl bg-[#E8E9E2] text-[#204E38] flex items-center justify-center font-bold">
                            <svg class="w-5 h-5" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 2.69l5.66 5.66a8 8 0 1 1-11.31 0z" />
                            </svg>
                        </div>
                        <h3 class="text-sm font-bold text-[#26312B]">1. Smart Water Treatment</h3>
                        <p class="text-xs text-slate-600 leading-relaxed">
                            Pengembangan sistem pengolahan dan pemantauan air yang memperhatikan karakteristik sumber air, proses pengolahan, parameter kualitas, serta kesesuaian hasil terhadap peruntukannya.
                        </p>
                    </div>

                    <div class="p-6 bg-[#F7F5EF]/60 rounded-2xl border border-[#A8B99B]/50 shadow-2xs space-y-3">
                        <div class="w-10 h-10 rounded-xl bg-[#E8E9E2] text-[#204E38] flex items-center justify-center font-bold">
                            <svg class="w-5 h-5" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 19V5m0 0a7 7 0 0 0-7 7m7-7a7 7 0 0 1 7 7" />
                            </svg>
                        </div>
                        <h3 class="text-sm font-bold text-[#26312B]">2. Microgreens</h3>
                        <p class="text-xs text-slate-600 leading-relaxed">
                            Pengembangan sistem budidaya tanaman berumur pendek dalam ruang terbatas melalui pengamatan pertumbuhan, penggunaan air, kebutuhan nutrisi, hasil panen, dan biaya produksi.
                        </p>
                    </div>

                    <div class="p-6 bg-[#F7F5EF]/60 rounded-2xl border border-[#A8B99B]/50 shadow-2xs space-y-3">
                        <div class="w-10 h-10 rounded-xl bg-[#E8E9E2] text-[#204E38] flex items-center justify-center font-bold">
                            <svg class="w-5 h-5" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10.325 4.317c.426-1.756 2.924-1.756 3.35 0a1.724 1.724 0 002.573 1.066c1.543-.94 3.31.826 2.37 2.37a1.724 1.724 0 001.065 2.572c1.756.426 1.756 2.924 0 3.35a1.724 1.724 0 00-1.066 2.573c.94 1.543-.826 3.31-2.37 2.37a1.724 1.724 0 00-2.572 1.065c-.426 1.756-2.924 1.756-3.35 0a1.724 1.724 0 00-2.573-1.066c-1.543.94-3.31-.826-2.37-2.37a1.724 1.724 0 00-1.065-2.572c-1.756-.426-1.756-2.924 0-3.35a1.724 1.724 0 001.066-2.573c-.94-1.543.826-3.31 2.37-2.37.996.608 2.296.07 2.572-1.065z" />
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 12a3 3 0 11-6 0 3 3 0 016 0z" />
                            </svg>
                        </div>
                        <h3 class="text-sm font-bold text-[#26312B]">3. Integrasi Sistem</h3>
                        <p class="text-xs text-slate-600 leading-relaxed">
                            Perancangan hubungan antara pengelolaan air dan produksi pangan dengan memperhatikan keamanan, efisiensi, kemudahan pengoperasian, serta kebutuhan pemeliharaan.
                        </p>
                    </div>

                    <div class="p-6 bg-[#F7F5EF]/60 rounded-2xl border border-[#A8B99B]/50 shadow-2xs space-y-3">
                        <div class="w-10 h-10 rounded-xl bg-[#E8E9E2] text-[#204E38] flex items-center justify-center font-bold">
                            <svg class="w-5 h-5" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 20h5v-2a3 3 0 00-5.356-1.857M17 20H7m10 0v-2c0-.656-.126-1.283-.356-1.857M7 20H2v-2a3 3 0 015.356-1.857M7 20v-2c0-.656.126-1.283.356-1.857m0 0a5.002 5.002 0 019.288 0M15 7a3 3 0 11-6 0 3 3 0 016 0zm6 3a2 2 0 11-4 0 2 2 0 014 0zM7 10a2 2 0 11-4 0 2 2 0 014 0z" />
                            </svg>
                        </div>
                        <h3 class="text-sm font-bold text-[#26312B]">4. Pendekatan Komunitas</h3>
                        <p class="text-xs text-slate-600 leading-relaxed">
                            Pelibatan calon pengguna dalam identifikasi kebutuhan, pelatihan, pengelolaan, dan evaluasi agar rancangan solusi sesuai dengan kapasitas dan konteks lokal.
                        </p>
                    </div>
                </div>
            </div>
        </section>


        <!-- 7 Tahapan Alur Kerja Sistem -->
        <section class="py-16 bg-white border-b border-slate-200/80">
            <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
                <div class="max-w-2xl mb-12">
                    <span class="text-xs font-bold text-emerald-800 bg-emerald-50 px-3 py-1 rounded-md border border-emerald-200 uppercase tracking-wider">
                        Alur Kerja Sirkular
                    </span>
                    <h2 class="text-2xl sm:text-3xl font-black text-slate-900 mt-2">
                        Tujuh Tahap Sistem Terpadu SIRAMI
                    </h2>
                    <p class="text-xs sm:text-sm text-slate-600 mt-1">
                        Dari pemetaan sumber air, filtrasi bertahap, gerbang keselamatan, hingga panen dan pembukuan usaha.
                    </p>
                </div>

                <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
                    <div
                        v-for="(sol, idx) in solutions"
                        :key="idx"
                        class="bg-white rounded-2xl overflow-hidden border border-slate-200 shadow-xs hover:border-emerald-600 hover:shadow-lg transition-all duration-300 flex flex-col group"
                    >
                        <div class="aspect-video overflow-hidden bg-slate-100 relative">
                            <img
                                :src="sol.img"
                                :alt="sol.title"
                                class="w-full h-full object-cover group-hover:scale-105 transition-transform duration-500"
                            />
                            <span class="absolute top-3 left-3 px-2.5 py-1 rounded-lg bg-[#204E38]/90 text-white font-mono font-bold text-xs">
                                Tahap {{ sol.step }}
                            </span>
                            <span class="absolute bottom-3 right-3 px-2.5 py-1 rounded-lg bg-emerald-600/90 text-white font-bold text-[10px] uppercase">
                                {{ sol.status }}
                            </span>
                        </div>
                        <div class="p-6 flex-1 flex flex-col justify-between">
                            <div>
                                <h3 class="text-base font-bold text-slate-900 group-hover:text-emerald-800 transition">
                                    {{ sol.title }}
                                </h3>
                                <p class="text-xs sm:text-sm text-slate-600 mt-3 leading-relaxed">
                                    {{ sol.desc }}
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- Deep Dive: Smart Water Treatment & IoT Monitoring -->
        <section class="py-16 bg-[#F8FAF8] border-b border-slate-200/80">
            <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
                <div class="grid grid-cols-1 lg:grid-cols-12 gap-12 items-center">
                    
                    <div class="lg:col-span-6 space-y-6">
                        <span class="text-xs font-bold text-emerald-800 bg-emerald-100 px-3 py-1 rounded-md uppercase tracking-wider">
                            Pilar 1: Teknologi Air Tepat Guna
                        </span>
                        <h2 class="text-3xl font-black text-slate-900">
                            Smart Water Treatment & Monitoring IoT
                        </h2>
                        <p class="text-xs sm:text-sm text-slate-600 leading-relaxed">
                            Sistem pengolahan air SIRAMI mengombinasikan filtrasi multi-media (silika, karbon aktif, ferrolite), tanaman fitoremediasi, dan modul monitoring berbasis mikrokontroler untuk mengukur parameter kunci kualitas air secara kontinu.
                        </p>

                        <div class="grid grid-cols-3 gap-3 pt-2">
                            <div class="p-4 bg-white rounded-xl border border-slate-200 text-center shadow-2xs">
                                <span class="text-lg font-black text-emerald-800 font-mono block">pH</span>
                                <span class="text-[11px] text-slate-500 font-medium">Rentang 6.5 - 8.5</span>
                            </div>
                            <div class="p-4 bg-white rounded-xl border border-slate-200 text-center shadow-2xs">
                                <span class="text-lg font-black text-emerald-800 font-mono block">TDS</span>
                                <span class="text-[11px] text-slate-500 font-medium">Total Padatan Terlarut</span>
                            </div>
                            <div class="p-4 bg-white rounded-xl border border-slate-200 text-center shadow-2xs">
                                <span class="text-lg font-black text-emerald-800 font-mono block">NTU</span>
                                <span class="text-[11px] text-slate-500 font-medium">Tingkat Kekeruhan</span>
                            </div>
                        </div>

                        <div class="p-4 rounded-xl bg-amber-50 border border-amber-300 text-amber-900 text-xs">
                            <strong>Batasan Transparan:</strong> Sensor IoT memantau parameter fisik-kimia kontinu. Parameter biologis (seperti E. coli dan coliform) tetap diverifikasi melalui uji berkala di laboratorium independen berstandar baku mutu.
                        </div>
                    </div>

                    <!-- Visual IoT Alat -->
                    <div class="lg:col-span-6 rounded-3xl overflow-hidden border-2 border-white shadow-xl bg-[#163828] aspect-[4/3] relative group">
                        <img
                            :src="'/foto/produkinovasi utama/alatutama cek kondisi air.webp'"
                            alt="Alat Monitoring IoT SIRAMI"
                            class="w-full h-full object-cover group-hover:scale-105 transition-transform duration-500"
                        />
                        <div class="absolute inset-0 bg-gradient-to-t from-[#163828]/90 via-transparent to-transparent flex items-end p-6">
                            <div class="text-white space-y-1">
                                <span class="text-[10px] font-bold uppercase tracking-wider text-[#A8B99B] bg-[#123624]/90 px-2.5 py-0.5 rounded border border-[#A8B99B]/30">
                                    Prototipe Fisik
                                </span>
                                <h4 class="text-base font-bold">Modul Sensor IoT Smart Water SIRAMI</h4>
                                <p class="text-xs text-slate-200">Riset Terapan Mahasiswa UIN Sunan Gunung Djati Bandung</p>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </section>

        <!-- Deep Dive: Microgreens Superfood System -->
        <section class="py-16 bg-white border-b border-slate-200/80">
            <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
                <div class="grid grid-cols-1 lg:grid-cols-12 gap-12 items-center">
                    
                    <!-- Visual Microgreens -->
                    <div class="lg:col-span-6 rounded-3xl overflow-hidden border-2 border-white shadow-xl bg-[#163828] aspect-[4/3] relative group order-last lg:order-first">
                        <img
                            :src="'/foto/diskusi pengelola/diskusibudidayamicrogreen.webp'"
                            alt="Budidaya Microgreens SIRAMI"
                            class="w-full h-full object-cover group-hover:scale-105 transition-transform duration-500"
                        />
                        <div class="absolute inset-0 bg-gradient-to-t from-[#163828]/90 via-transparent to-transparent flex items-end p-6">
                            <div class="text-white space-y-1">
                                <span class="text-[10px] font-bold uppercase tracking-wider text-[#A8B99B] bg-[#123624]/90 px-2.5 py-0.5 rounded border border-[#A8B99B]/30">
                                    Produk Pangan Utama
                                </span>
                                <h4 class="text-base font-bold">Budidaya Microgreens Bertingkat Hemat Air</h4>
                                <p class="text-xs text-slate-200">Panen 7-14 hari dengan densitas nutrisi 4-40x sayuran dewasa</p>
                            </div>
                        </div>
                    </div>

                    <div class="lg:col-span-6 space-y-6">
                        <span class="text-xs font-bold text-[#204E38] bg-[#E8E9E2] px-3 py-1 rounded-md uppercase tracking-wider">
                            Pilar 2: Ketahanan Pangan Komunitas
                        </span>
                        <h2 class="text-3xl font-black text-[#26312B]">
                            Sistem Microgreens: Cepat Panen & Padat Nutrisi
                        </h2>
                        <p class="text-xs sm:text-sm text-slate-600 leading-relaxed">
                            Microgreens dipilih sebagai produk pangan inti karena tidak membutuhkan lahan luas, hemat penggunaan air hingga 90% dibanding pertanian konvensional, serta memiliki konsentrasi vitamin C, E, dan sulforaphane yang terbukti sangat tinggi.
                        </p>

                        <div class="space-y-3 text-xs sm:text-sm text-slate-700">
                            <div class="flex items-start gap-3 p-3 bg-[#F7F5EF]/70 rounded-xl border border-[#A8B99B]/40">
                                <span class="w-6 h-6 rounded-lg bg-[#E8E9E2] text-[#204E38] font-bold flex items-center justify-center shrink-0">
                                    <svg class="w-4 h-4" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 19V5m0 0a7 7 0 0 0-7 7m7-7a7 7 0 0 1 7 7" />
                                    </svg>
                                </span>
                                <div>
                                    <strong>Siklus Singkat:</strong> 7 hingga 14 hari dari semai hingga siap panen, memungkinkan siklus produksi yang cepat dan aliran kas reguler.
                                </div>
                            </div>
                            <div class="flex items-start gap-3 p-3 bg-[#F7F5EF]/70 rounded-xl border border-[#A8B99B]/40">
                                <span class="w-6 h-6 rounded-lg bg-[#E8E9E2] text-[#204E38] font-bold flex items-center justify-center shrink-0">
                                    <svg class="w-4 h-4" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 2.69l5.66 5.66a8 8 0 1 1-11.31 0z" />
                                    </svg>
                                </span>
                                <div>
                                    <strong>Efisien Ruang & Air:</strong> Menggunakan sistem rak bertingkat (vertical farming) di area semi-indoor yang terlindung dari hama luar.
                                </div>
                            </div>
                            <div class="flex items-start gap-3 p-3 bg-[#F7F5EF]/70 rounded-xl border border-[#A8B99B]/40">
                                <span class="w-6 h-6 rounded-lg bg-[#E8E9E2] text-[#204E38] font-bold flex items-center justify-center shrink-0">
                                    <svg class="w-4 h-4" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 19v-6a2 2 0 00-2-2H5a2 2 0 00-2 2v6a2 2 0 002 2h2a2 2 0 002-2zm0 0V9a2 2 0 012-2h2a2 2 0 012 2v10m-6 0a2 2 0 002 2h2a2 2 0 002-2m0 0V5a2 2 0 012-2h2a2 2 0 012 2v14a2 2 0 01-2 2h-2a2 2 0 01-2-2z" />
                                    </svg>
                                </span>
                                <div>
                                    <strong>Edukasi Bisnis Santri:</strong> Santri terlibat langsung mencatat bobot benih, pemakaian air, berat panen, hingga perhitungan harga jual pokok (HPP).
                                </div>
                            </div>
                        </div>

                        <div class="pt-2 flex flex-wrap gap-3">
                            <Link
                                :href="route('riset.bukti')"
                                class="px-5 py-3 rounded-xl bg-[#204E38] hover:bg-[#163828] text-white font-bold text-xs sm:text-sm transition flex items-center gap-2 cursor-pointer shadow-xs"
                            >
                                <span>Lihat Landasan Riset Ilmiah</span>
                                <span>&rarr;</span>
                            </Link>
                            <Link
                                :href="route('pilot.project')"
                                class="px-5 py-3 rounded-xl bg-white border border-[#A8B99B] hover:border-[#204E38] text-[#26312B] font-bold text-xs sm:text-sm transition"
                            >
                                Rencana Pilot 6 Bulan
                            </Link>
                        </div>
                    </div>

                </div>
            </div>
        </section>

        <!-- Skalabilitas dan Replikasi Section (Sesuai Pitch Deck SYLS 2026) -->
        <SkalabilitasReplikasiSection :data="scalabilityReplication" />
    </PublicLayout>
</template>
