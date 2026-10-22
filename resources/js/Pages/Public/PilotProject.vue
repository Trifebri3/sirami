<script setup>
import { Head, Link } from '@inertiajs/vue3';
import { ref } from 'vue';
import PublicLayout from '@/Layouts/PublicLayout.vue';
import KomunitasKonteksSection from '@/Components/KomunitasKonteksSection.vue';
import SkalabilitasReplikasiSection from '@/Components/SkalabilitasReplikasiSection.vue';

const props = defineProps({
    logo: Object,
    pilotInfo: Object,
    timeline: Array,
    implementationActivities: Array,
    komunitasKonteks: Object,
    scalabilityReplication: Object,
});

const activeActivityStep = ref('01');
</script>

<template>
    <PublicLayout :logo="logo" title="Pilot Project 6 Bulan - Pondok Pesantren Hidayatul Mustafid Tasikmalaya">
        <!-- Hero Header -->
        <section class="py-12 lg:py-16 bg-gradient-to-b from-white via-white to-emerald-50/30 border-b border-slate-200/80">
            <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
                <div class="max-w-4xl space-y-4">
                    <div class="flex flex-wrap items-center gap-2">
                        <div class="inline-flex items-center gap-2 px-3.5 py-1.5 rounded-full bg-[#E8E9E2] border border-[#A8B99B] text-[#204E38] text-xs font-bold uppercase tracking-wider">
                            <span>Rencana Implementasi Lapangan &middot; SYLS 2026 (Tahap Pengajuan)</span>
                        </div>
                        <span class="px-3 py-1 rounded-full bg-amber-100 text-amber-950 border border-amber-300 text-xs font-bold uppercase">
                            Mitra Lokasi (Bukan Pemilik Proyek)
                        </span>
                        <a
                            href="/data/Surat Persetujuan Pst.pdf"
                            target="_blank"
                            class="inline-flex items-center gap-1.5 px-3 py-1 rounded-full bg-white border border-slate-300 text-slate-700 text-xs font-bold hover:border-emerald-600 transition"
                        >
                            <span>Surat Mitra: 18/X/PPHM/2026</span>
                            <span class="text-emerald-700">&darr;</span>
                        </a>
                    </div>

                    <h1 class="text-3xl sm:text-5xl font-black text-slate-900 tracking-tight leading-tight">
                        Mempersiapkan Implementasi <span class="text-emerald-800">Bersama Komunitas</span>.
                    </h1>

                    <div class="space-y-3 text-slate-600 text-xs sm:text-sm leading-relaxed max-w-3xl">
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
            </div>
        </section>

        <!-- 4 Informasi Utama Pilot Project -->
        <section class="py-12 bg-white border-b border-slate-200/80">
            <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
                <div class="max-w-2xl mb-8">
                    <span class="text-xs font-bold text-emerald-800 bg-emerald-50 px-3 py-1 rounded-md border border-emerald-200 uppercase tracking-wider">
                        Informasi Pilot Project
                    </span>
                    <h2 class="text-2xl font-black text-slate-900 mt-2">
                        Pilar Kesiapan Implementasi Lapangan
                    </h2>
                </div>

                <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-6">
                    <div class="p-6 bg-slate-50 rounded-2xl border border-slate-200 shadow-2xs space-y-3">
                        <span class="w-8 h-8 rounded-lg bg-emerald-100 text-[#204E38] flex items-center justify-center font-bold text-sm">
                            <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z" /><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 11a3 3 0 11-6 0 3 3 0 016 0z" /></svg>
                        </span>
                        <h3 class="text-xs font-bold uppercase tracking-wider text-slate-500">Calon Mitra Lokasi</h3>
                        <h4 class="text-sm font-bold text-slate-900">Pondok Pesantren Al-Qur'an Hidayatul Mustafid</h4>
                        <p class="text-xs text-slate-600 leading-relaxed">
                            Kp. Sindangresik, Kel. Awipari, Kec. Cibeureum, Kota Tasikmalaya. Pimpinan: KH. Nandang Ja'far Shiddiq.
                        </p>
                        <div class="pt-2 border-t border-slate-200 text-[10px] text-amber-900">
                            *Mitra lokasi uji coba, bukan pemilik proyek SIRAMI.
                        </div>
                    </div>

                    <div class="p-6 bg-slate-50 rounded-2xl border border-slate-200 shadow-2xs space-y-3">
                        <span class="w-8 h-8 rounded-lg bg-emerald-100 text-[#204E38] flex items-center justify-center font-bold text-sm">
                            <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 10V3L4 14h7v7l9-11h-7z" /></svg>
                        </span>
                        <h3 class="text-xs font-bold uppercase tracking-wider text-slate-500">Fokus Awal</h3>
                        <h4 class="text-sm font-bold text-slate-900">Pengelolaan Air & Produksi Pangan</h4>
                        <p class="text-xs text-slate-600 leading-relaxed">
                            Pengembangan dan pengujian pendekatan pengelolaan air serta produksi pangan skala komunitas yang terukur dan adaptif.
                        </p>
                        <div class="pt-2 border-t border-slate-200 text-[10px] text-emerald-800">
                            Smart Water Treatment & Microgreens.
                        </div>
                    </div>

                    <div class="p-6 bg-slate-50 rounded-2xl border border-slate-200 shadow-2xs space-y-3">
                        <span class="w-8 h-8 rounded-lg bg-emerald-100 text-[#204E38] flex items-center justify-center font-bold text-sm">
                            <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 7V3m8 4V3m-9 8h10M5 21h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v12a2 2 0 002 2z" /></svg>
                        </span>
                        <h3 class="text-xs font-bold uppercase tracking-wider text-slate-500">Tahapan</h3>
                        <h4 class="text-sm font-bold text-slate-900">Alur Kerja 7 Langkah</h4>
                        <p class="text-xs text-slate-600 leading-relaxed">
                            Pemetaan kebutuhan, persiapan teknis, pengadaan, instalasi, pengujian, pendampingan, dan evaluasi berkala.
                        </p>
                        <div class="pt-2 border-t border-slate-200 text-[10px] text-slate-600">
                            Roadmap 6 bulan terbagi dalam 7 milestone.
                        </div>
                    </div>

                    <div class="p-6 bg-slate-50 rounded-2xl border border-slate-200 shadow-2xs space-y-3">
                        <span class="w-8 h-8 rounded-lg bg-emerald-100 text-[#204E38] flex items-center justify-center font-bold text-sm">
                            <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 7h8m0 0v8m0-8l-8 8-4-4-6 6" /></svg>
                        </span>
                        <h3 class="text-xs font-bold uppercase tracking-wider text-slate-500">Target</h3>
                        <h4 class="text-sm font-bold text-slate-900">Bukti Kelayakan 4 Aspek</h4>
                        <p class="text-xs text-slate-600 leading-relaxed">
                            Menghasilkan pembelajaran dan bukti implementasi untuk menilai kelayakan teknis, operasional, sosial, dan ekonomi.
                        </p>
                        <div class="pt-2 border-t border-slate-200 text-[10px] text-slate-600">
                            SOP disahkan & buku kas mandiri santri.
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- Section: Komunitas & Konteks Lapangan Pesantren (Sesuai Slide Pitch SYLS 2026) -->
        <section class="py-12 lg:py-16 bg-[#FAFCFA] border-b border-slate-200/80">
            <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
                <KomunitasKonteksSection :data="komunitasKonteks" />
            </div>
        </section>

        <!-- Profil Mitra & Surat Dukungan Resmi -->
        <section class="py-16 bg-white border-b border-slate-200/80">
            <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
                <div class="bg-slate-50 rounded-3xl p-6 sm:p-10 border border-slate-200 shadow-sm">
                    <div class="grid grid-cols-1 lg:grid-cols-12 gap-8 items-center">
                        <div class="lg:col-span-7 space-y-4">
                            <span class="text-xs font-bold text-emerald-800 bg-emerald-100 px-3 py-1 rounded-md uppercase tracking-wider">
                                Mitra Lapangan Terverifikasi
                            </span>
                            <h2 class="text-2xl sm:text-3xl font-black text-slate-900">
                                {{ pilotInfo?.pesantren_name }}
                            </h2>

                            <!-- Clarification callout -->
                            <div class="p-3.5 bg-emerald-50 rounded-xl border border-emerald-200 text-xs text-emerald-950 flex items-start gap-3">
                                <img :src="logo?.uin || '/logo/logouin.svg'" class="h-5 w-auto shrink-0 mt-0.5" alt="UIN SGD" />
                                <div class="leading-relaxed">
                                    <strong>Status Kemitraan:</strong> Hak inisiasi dan rancang bangun SIRAMI sepenuhnya milik <strong>Tim Mahasiswa UIN Sunan Gunung Djati Bandung</strong>. Pondok pesantren berkedudukan sebagai mitra lokasi percontohan dan laboratorium lapangan uji coba sistem.
                                </div>
                            </div>

                            <div class="text-xs text-slate-600 space-y-1.5 bg-white p-4 rounded-xl border border-slate-200">
                                <p><strong>Pimpinan Pesantren:</strong> {{ pilotInfo?.pimpinan }}</p>
                                <p><strong>Alamat Lengkap:</strong> {{ pilotInfo?.location }}</p>
                                <p><strong>Surat Dukungan:</strong> {{ pilotInfo?.support_letter }}</p>
                            </div>

                            <div>
                                <h4 class="text-xs font-bold uppercase tracking-wider text-slate-800 mb-2">Aset Fisik di Lokasi:</h4>
                                <ul class="grid grid-cols-1 sm:grid-cols-2 gap-2 text-xs text-slate-600">
                                    <li v-for="(ast, idx) in pilotInfo?.assets" :key="idx" class="flex items-center gap-2">
                                        <span class="w-1.5 h-1.5 rounded-full bg-emerald-600"></span>
                                        <span>{{ ast }}</span>
                                    </li>
                                </ul>
                            </div>

                            <div class="pt-3 flex flex-wrap gap-3">
                                <a
                                    :href="pilotInfo?.support_letter_pdf || '/data/Surat Persetujuan Pst.pdf'"
                                    target="_blank"
                                    class="px-5 py-2.5 rounded-xl bg-emerald-700 hover:bg-emerald-800 text-white font-bold text-xs transition flex items-center gap-2 shadow-sm"
                                >
                                    <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 10v6m0 0l-3-3m3 3l3-3m2 8H7a2 2 0 01-2-2V5a2 2 0 012-2h5.586a1 1 0 01.707.293l5.414 5.414a1 1 0 01.293.707V19a2 2 0 01-2 2z" /></svg>
                                    <span>Unduh Surat Dukungan Resmi (PDF)</span>
                                </a>

                                <Link
                                    :href="route('dukung.implementasi')"
                                    class="px-5 py-2.5 rounded-xl bg-[#204E38] hover:bg-[#163828] text-white font-bold text-xs transition cursor-pointer shadow-xs"
                                >
                                    Dukung Pendanaan Pilot &rarr;
                                </Link>
                            </div>
                        </div>

                        <!-- Leader Photo -->
                        <div class="lg:col-span-5 aspect-[4/3] rounded-2xl overflow-hidden bg-[#163828] border-2 border-white shadow-md relative group">
                            <img
                                :src="'/foto/pimpinan pesantreen/WhatsApp Image 2026-10-22 at 00.03.21.webp'"
                                alt="Pimpinan Pesantren Hidayatul Mustafid"
                                class="w-full h-full object-cover group-hover:scale-105 transition-transform duration-500"
                            />
                            <div class="absolute inset-0 bg-gradient-to-t from-[#163828]/90 via-transparent to-transparent flex items-end p-4">
                                <div class="text-white">
                                    <span class="text-[10px] font-bold uppercase tracking-wider text-[#A8B99B]">Pimpinan Pesantren Mitra</span>
                                    <h4 class="text-sm font-bold">{{ pilotInfo?.pimpinan }}</h4>
                                    <p class="text-[11px] text-slate-200">PPHM Kota Tasikmalaya</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- RAGAM KEGIATAN IMPLEMENTASI: DARI INSTALASI HINGGA PRODUK TERJUAL KE KOTA TASIKMALAYA -->
        <section class="py-16 bg-white border-b border-slate-200/80">
            <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 space-y-10">
                <div class="flex flex-col md:flex-row md:items-end justify-between gap-4">
                    <div class="space-y-2">
                        <span class="text-xs font-bold text-[#204E38] bg-[#E8E9E2] px-3 py-1 rounded-md border border-[#A8B99B]/40 uppercase tracking-wider inline-flex items-center gap-1.5">
                            <svg class="w-3.5 h-3.5 text-[#204E38]" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 10V3L4 14h7v7l9-11h-7z" />
                            </svg>
                            <span>Siklus Operasional Lapangan</span>
                        </span>
                        <h2 class="text-2xl sm:text-3xl font-black text-[#26312B] tracking-tight">
                            Ragam Kegiatan: Dari Instalasi Hingga Produk Terjual ke Kota Tasikmalaya
                        </h2>
                        <p class="text-xs sm:text-sm text-slate-600 max-w-3xl leading-relaxed">
                            SIRAMI merancang 5 tahapan kegiatan terpadu mulai dari rekayasa fisik pengolahan air, pelatihan SOP teknis santri, budidaya & pengolahan pangan lokal, pengemasan higienis, hingga terciptanya transaksi nyata di Kota Tasikmalaya.
                        </p>
                    </div>

                    <div class="flex items-center gap-2 bg-[#F7F5EF] border border-[#A8B99B]/50 px-3 py-2 rounded-xl text-xs font-bold text-[#204E38] shrink-0">
                        <span class="w-2.5 h-2.5 rounded-full bg-[#204E38] animate-pulse"></span>
                        <span>5 Tahapan Berkelanjutan</span>
                    </div>
                </div>

                <!-- Step Selector Buttons (01 - 05) -->
                <div class="grid grid-cols-2 sm:grid-cols-5 gap-2.5">
                    <button
                        v-for="act in implementationActivities"
                        :key="act.step"
                        @click="activeActivityStep = act.step"
                        :class="[
                            'p-3.5 rounded-2xl text-left border transition cursor-pointer flex flex-col justify-between space-y-1',
                            activeActivityStep === act.step
                                ? 'bg-[#204E38] text-white border-[#204E38] shadow-md ring-2 ring-[#A8B99B]'
                                : 'bg-white text-slate-700 border-slate-200 hover:border-[#204E38] hover:bg-[#F7F5EF]'
                        ]"
                    >
                        <div class="flex items-center justify-between">
                            <span class="font-mono text-xs font-bold" :class="activeActivityStep === act.step ? 'text-[#A8B99B]' : 'text-slate-400'">
                                Tahap {{ act.step }}
                            </span>
                            <div class="w-5 h-5 flex items-center justify-center text-current">
                                <svg v-if="act.icon === 'tools'" class="w-4 h-4" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10.325 4.317c.426-1.756 2.924-1.756 3.35 0a1.724 1.724 0 002.573 1.066c1.543-.94 3.31.826 2.37 2.37a1.724 1.724 0 001.065 2.572c1.756.426 1.756 2.924 0 3.35a1.724 1.724 0 00-1.066 2.573c.94 1.543-.826 3.31-2.37 2.37a1.724 1.724 0 00-2.572 1.065c-.426 1.756-2.924 1.756-3.35 0a1.724 1.724 0 00-2.573-1.066c-1.543.94-3.31-.826-2.37-2.37a1.724 1.724 0 00-1.065-2.572c-1.756-.426-1.756-2.924 0-3.35a1.724 1.724 0 001.066-2.573c-.94-1.543.826-3.31 2.37-2.37.996.608 2.296.07 2.572-1.065z" />
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 12a3 3 0 11-6 0 3 3 0 016 0z" />
                                </svg>
                                <svg v-else-if="act.icon === 'book-open'" class="w-4 h-4" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 6.253v13m0-13C10.832 5.477 9.246 5 7.5 5S4.168 5.477 3 6.253v13C4.168 18.477 5.754 18 7.5 18s3.332.477 4.5 1.253m0-13C13.168 5.477 14.754 5 16.5 5c1.747 0 3.332.477 4.5 1.253v13C19.832 18.477 18.247 18 16.5 18c-1.746 0-3.332.477-4.5 1.253" />
                                </svg>
                                <svg v-else-if="act.icon === 'sprout'" class="w-4 h-4" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 19V5m0 0a7 7 0 0 0-7 7m7-7a7 7 0 0 1 7 7" />
                                </svg>
                                <svg v-else-if="act.icon === 'package'" class="w-4 h-4" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M20 7l-8-4-8 4m16 0l-8 4m8-4v10l-8 4m0-10L4 7m8 4v10M4 7v10l8 4" />
                                </svg>
                                <svg v-else class="w-4 h-4" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M16 11V7a4 4 0 00-8 0v4M5 9h14l1 12H4L5 9z" />
                                </svg>
                            </div>
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
                                <span class="px-2.5 py-0.5 rounded-md bg-[#E8E9E2] text-[#204E38] font-mono font-bold text-xs border border-[#A8B99B]/40">
                                    Tahap {{ act.step }} &middot; {{ act.badge }}
                                </span>
                                <span class="text-xs font-bold text-slate-500 font-mono">
                                    Roadmap Operasional Pilot
                                </span>
                            </div>
                            <h3 class="text-lg sm:text-2xl font-black text-[#26312B] leading-snug">
                                {{ act.title }}
                            </h3>
                            <p class="text-xs sm:text-sm font-semibold text-[#204E38]">
                                {{ act.subtitle }}
                            </p>
                        </div>
                        <div class="w-14 h-14 shrink-0 p-3 bg-[#F7F5EF] text-[#204E38] rounded-2xl border border-[#A8B99B]/40 flex items-center justify-center self-start lg:self-auto">
                            <svg v-if="act.icon === 'tools'" class="w-8 h-8" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10.325 4.317c.426-1.756 2.924-1.756 3.35 0a1.724 1.724 0 002.573 1.066c1.543-.94 3.31.826 2.37 2.37a1.724 1.724 0 001.065 2.572c1.756.426 1.756 2.924 0 3.35a1.724 1.724 0 00-1.066 2.573c.94 1.543-.826 3.31-2.37 2.37a1.724 1.724 0 00-2.572 1.065c-.426 1.756-2.924 1.756-3.35 0a1.724 1.724 0 00-2.573-1.066c-1.543.94-3.31-.826-2.37-2.37a1.724 1.724 0 00-1.065-2.572c-1.756-.426-1.756-2.924 0-3.35a1.724 1.724 0 001.066-2.573c-.94-1.543.826-3.31 2.37-2.37.996.608 2.296.07 2.572-1.065z" />
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 12a3 3 0 11-6 0 3 3 0 016 0z" />
                            </svg>
                            <svg v-else-if="act.icon === 'book-open'" class="w-8 h-8" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 6.253v13m0-13C10.832 5.477 9.246 5 7.5 5S4.168 5.477 3 6.253v13C4.168 18.477 5.754 18 7.5 18s3.332.477 4.5 1.253m0-13C13.168 5.477 14.754 5 16.5 5c1.747 0 3.332.477 4.5 1.253v13C19.832 18.477 18.247 18 16.5 18c-1.746 0-3.332.477-4.5 1.253" />
                            </svg>
                            <svg v-else-if="act.icon === 'sprout'" class="w-8 h-8" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 19V5m0 0a7 7 0 0 0-7 7m7-7a7 7 0 0 1 7 7" />
                            </svg>
                            <svg v-else-if="act.icon === 'package'" class="w-8 h-8" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M20 7l-8-4-8 4m16 0l-8 4m8-4v10l-8 4m0-10L4 7m8 4v10M4 7v10l8 4" />
                            </svg>
                            <svg v-else class="w-8 h-8" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M16 11V7a4 4 0 00-8 0v4M5 9h14l1 12H4L5 9z" />
                            </svg>
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
        </section>

        <!-- 6-Month Roadmap Timeline -->
        <section class="py-16 bg-[#F8FAF8] border-b border-slate-200/80">
            <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
                <div class="max-w-3xl mb-12">
                    <span class="text-xs font-bold text-emerald-800 bg-emerald-100 px-3 py-1 rounded-md uppercase tracking-wider">
                        Rencana Pelaksanaan Bertahap
                    </span>
                    <h2 class="text-2xl sm:text-3xl font-black text-slate-900 mt-2">
                        Roadmap Milestone 6 Bulan Pelaksanaan
                    </h2>
                    <p class="text-xs sm:text-sm text-slate-600 mt-1">
                        Setiap bulan memiliki target keluaran spesifik yang dapat diverifikasi oleh donor dan mitra riset.
                    </p>
                </div>

                <div class="space-y-4">
                    <div
                        v-for="(tl, idx) in timeline"
                        :key="idx"
                        class="p-6 bg-white rounded-2xl border border-slate-200 shadow-xs hover:border-emerald-600 transition flex flex-col md:flex-row md:items-center justify-between gap-6"
                    >
                        <div class="space-y-1.5 md:max-w-md">
                            <div class="flex items-center gap-2.5">
                                <span class="px-2.5 py-0.5 rounded-lg bg-emerald-100 text-emerald-900 font-mono font-bold text-xs">
                                    {{ tl.month }}
                                </span>
                                <span class="text-xs font-bold text-emerald-700 uppercase tracking-wider">
                                    {{ tl.phase }}
                                </span>
                            </div>
                            <p class="text-xs sm:text-sm text-slate-600 leading-relaxed pt-1">
                                {{ tl.focus }}
                            </p>
                        </div>

                        <div class="bg-slate-50 p-4 rounded-xl border border-slate-100 md:w-80 shrink-0 space-y-1">
                            <span class="text-[10px] font-bold text-slate-400 uppercase tracking-wider block">Deliverables / Bukti Selesai</span>
                            <p class="text-xs font-bold text-slate-800 leading-snug">{{ tl.deliverables }}</p>
                            <span class="inline-block mt-1 text-[11px] font-semibold text-emerald-700 bg-emerald-50 px-2 py-0.5 rounded">
                                Status: {{ tl.status }}
                            </span>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- Skalabilitas dan Replikasi Section (Sesuai Pitch Deck SYLS 2026) -->
        <SkalabilitasReplikasiSection :data="scalabilityReplication" />
    </PublicLayout>
</template>
