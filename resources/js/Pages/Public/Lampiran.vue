<script setup>
import { Head, Link } from '@inertiajs/vue3';
import { ref, computed } from 'vue';
import PublicLayout from '@/Layouts/PublicLayout.vue';
import BuktiReferensiSection from '@/Components/BuktiReferensiSection.vue';
import MariTerhubungSection from '@/Components/MariTerhubungSection.vue';

const props = defineProps({
    documents: Array,
    buktiReferensi: Object,
    mariTerhubung: Object,
    photoGallery: Array,
    totalPhotos: Number,
    logo: Object,
});

const activeTab = ref('all');
const activePhotoCat = ref('all');
const selectedPhoto = ref(null);
const selectedDoc = ref(null);

const filteredDocs = computed(() => {
    if (activeTab.value === 'all') return props.documents;
    return props.documents.filter((d) => d.category === activeTab.value);
});

const photoCategories = computed(() => {
    const map = new Map();
    props.photoGallery?.forEach((p) => {
        if (!map.has(p.category_slug)) {
            map.set(p.category_slug, { slug: p.category_slug, title: p.category, count: 0 });
        }
        map.get(p.category_slug).count++;
    });
    return Array.from(map.values());
});

const filteredPhotos = computed(() => {
    if (activePhotoCat.value === 'all') return props.photoGallery;
    return props.photoGallery.filter((p) => p.category_slug === activePhotoCat.value);
});
</script>

<template>
    <PublicLayout :logo="logo" title="Pusat Dokumen & Lampiran Riset - SIRAMI">
        <!-- Main Content -->
        <main class="py-12 max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 w-full">
            <!-- Official Graphic Showcase Section (Persis Sesuai Gambar) -->
            <BuktiReferensiSection :data="buktiReferensi" :show-container="false" class="mb-14 pb-12 border-b border-slate-200" />

            <!-- Header Hero -->
            <div class="max-w-3xl mb-10">
                <div class="inline-flex items-center gap-2 px-3.5 py-1 rounded-full bg-[#E8E9E2] border border-[#A8B99B] text-[#204E38] text-xs font-bold uppercase tracking-wider mb-3">
                    <span>Inovasi Riset Mahasiswa UIN Sunan Gunung Djati Bandung &middot; SYLS 2026 (Tahap Pengajuan)</span>
                </div>
                <h1 class="text-3xl sm:text-4xl font-black text-slate-900 tracking-tight">
                    Pusat Bukti, Riset & Lampiran Pendukung
                </h1>
                <p class="text-slate-600 mt-2 text-sm sm:text-base leading-relaxed">
                    Setiap klaim program didasarkan pada dokumen mitra resmi, observasi aset fisik yang terverifikasi, instrumen keselamatan air, dan rancangan anggaran transparan. Diteliti dan dirancang oleh tim mahasiswa UIN Sunan Gunung Djati Bandung bermitra dengan Pondok Pesantren Hidayatul Mustafid sebagai lokasi pilot.
                </p>
            </div>

            <!-- Flat Navigation Tabs -->
            <div class="flex flex-wrap gap-2 pb-6 border-b border-slate-200 mb-8">
                <button
                    @click="activeTab = 'all'"
                    class="px-4 py-2 rounded-lg text-xs sm:text-sm font-semibold transition cursor-pointer"
                    :class="activeTab === 'all' ? 'bg-[#204E38] text-white shadow-xs' : 'bg-slate-50 text-slate-700 border border-slate-200 hover:bg-slate-100'"
                >
                    Semua Dokumen ({{ documents.length }})
                </button>
                <button
                    @click="activeTab = 'dokumen-mitra'"
                    class="px-4 py-2 rounded-lg text-xs sm:text-sm font-semibold transition cursor-pointer"
                    :class="activeTab === 'dokumen-mitra' ? 'bg-[#204E38] text-white shadow-xs' : 'bg-slate-50 text-slate-700 border border-slate-200 hover:bg-slate-100'"
                >
                    Dokumen Mitra
                </button>
                <button
                    @click="activeTab = 'profil-lokasi'"
                    class="px-4 py-2 rounded-lg text-xs sm:text-sm font-semibold transition cursor-pointer"
                    :class="activeTab === 'profil-lokasi' ? 'bg-[#204E38] text-white shadow-xs' : 'bg-slate-50 text-slate-700 border border-slate-200 hover:bg-slate-100'"
                >
                    Profil Lokasi
                </button>
                <button
                    @click="activeTab = 'desain-teknis'"
                    class="px-4 py-2 rounded-lg text-xs sm:text-sm font-semibold transition cursor-pointer"
                    :class="activeTab === 'desain-teknis' ? 'bg-[#204E38] text-white shadow-xs' : 'bg-slate-50 text-slate-700 border border-slate-200 hover:bg-slate-100'"
                >
                    Desain Teknis & SOP
                </button>
                <button
                    @click="activeTab = 'rab-anggaran'"
                    class="px-4 py-2 rounded-lg text-xs sm:text-sm font-semibold transition cursor-pointer"
                    :class="activeTab === 'rab-anggaran' ? 'bg-[#204E38] text-white shadow-xs' : 'bg-slate-50 text-slate-700 border border-slate-200 hover:bg-slate-100'"
                >
                    RAB Anggaran
                </button>
                <button
                    @click="activeTab = 'referensi-regulasi'"
                    class="px-4 py-2 rounded-lg text-xs sm:text-sm font-semibold transition cursor-pointer"
                    :class="activeTab === 'referensi-regulasi' ? 'bg-[#204E38] text-white shadow-xs' : 'bg-slate-50 text-slate-700 border border-slate-200 hover:bg-slate-100'"
                >
                    Referensi Regulasi
                </button>
                <button
                    @click="activeTab = 'cv-tim'"
                    class="px-4 py-2 rounded-lg text-xs sm:text-sm font-semibold transition cursor-pointer"
                    :class="activeTab === 'cv-tim' ? 'bg-[#204E38] text-white shadow-xs' : 'bg-slate-50 text-slate-700 border border-slate-200 hover:bg-slate-100'"
                >
                    CV Inovator (3)
                </button>
                <button
                    @click="activeTab = 'foto-lapangan'"
                    class="px-4 py-2 rounded-lg text-xs sm:text-sm font-semibold transition cursor-pointer"
                    :class="activeTab === 'foto-lapangan' ? 'bg-[#204E38] text-white shadow-xs' : 'bg-slate-50 text-slate-700 border border-slate-200 hover:bg-slate-100'"
                >
                    Foto Lapangan Asli ({{ totalPhotos }} Foto)
                </button>
            </div>

            <!-- TAB CONTENT: DOKUMEN & BUKTI TEKSTUAL -->
            <div v-if="activeTab !== 'foto-lapangan'" class="space-y-6">
                <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                    <div
                        v-for="doc in filteredDocs"
                        :key="doc.id"
                        class="bg-white rounded-xl p-6 border border-slate-200 flex flex-col justify-between"
                    >
                        <div>
                            <div class="flex items-center justify-between gap-2 mb-3">
                                <span class="text-xs font-mono font-bold text-slate-500">{{ doc.id }} &middot; {{ doc.number }}</span>
                                <span class="text-[11px] font-bold px-2.5 py-0.5 rounded bg-slate-100 text-slate-800 border border-slate-200">
                                    {{ doc.status }}
                                </span>
                            </div>
                            <span class="text-[11px] font-bold uppercase tracking-wider text-slate-500">
                                {{ doc.category_name }}
                            </span>
                            <h3 class="text-base font-bold text-slate-900 mt-1">{{ doc.title }}</h3>
                            <p class="text-xs text-slate-600 mt-2 leading-relaxed">{{ doc.description }}</p>

                            <div class="mt-4 pt-3 border-t border-slate-100 text-xs text-slate-500">
                                <strong>Pihak Terkait:</strong> {{ doc.signatory }}<br />
                                <strong>Tanggal / Status:</strong> {{ doc.date }}
                            </div>
                        </div>

                        <div class="mt-6 pt-3 border-t border-slate-100 flex items-center justify-between text-xs font-bold text-slate-900">
                            <a
                                v-if="doc.download_url"
                                :href="doc.download_url"
                                target="_blank"
                                class="inline-flex items-center gap-1.5 px-3 py-1.5 rounded-lg bg-emerald-700 hover:bg-emerald-800 text-white font-bold transition shadow-xs text-[11px]"
                            >
                                <span>Unduh PDF Resmi</span>
                                <span>&darr;</span>
                            </a>
                            <span v-else class="text-[11px] text-slate-400 font-medium">Arsip Fisik Tersimpan</span>

                            <button
                                @click="selectedDoc = doc"
                                class="hover:underline flex items-center gap-1 cursor-pointer text-slate-700"
                            >
                                <span>Lihat Metadata &rarr;</span>
                            </button>
                        </div>

                    </div>
                </div>

                <!-- Principle Safety Alert -->
                <div class="p-4 rounded-xl bg-slate-50 border border-slate-200 text-xs text-slate-600 space-y-1">
                    <h4 class="font-bold text-slate-900">Standar Transparansi Riset:</h4>
                    <p>
                        Seluruh data diklasifikasikan dengan jujur: <strong>Pernyataan/Dokumen Mitra</strong> (surat resmi), <strong>Observasi Awal</strong> (pengamatan fisik tim), dan <strong>Target Pilot</strong> (parameter kerja yang diuji selama 6 bulan).
                    </p>
                </div>
            </div>

            <!-- TAB CONTENT: GALERI FOTO LAPANGAN ASLI (45 FOTO WEBP) -->
            <div v-else class="space-y-6">
                <!-- Sub Filter Folder -->
                <div class="flex flex-wrap gap-2">
                    <button
                        @click="activePhotoCat = 'all'"
                        class="px-3 py-1.5 rounded-lg text-xs font-semibold transition cursor-pointer"
                        :class="activePhotoCat === 'all' ? 'bg-[#204E38] text-white shadow-xs' : 'bg-slate-50 text-slate-700 border border-slate-200 hover:bg-slate-100'"
                    >
                        Semua Kategori ({{ totalPhotos }})
                    </button>
                    <button
                        v-for="c in photoCategories"
                        :key="c.slug"
                        @click="activePhotoCat = c.slug"
                        class="px-3 py-1.5 rounded-lg text-xs font-semibold transition cursor-pointer"
                        :class="activePhotoCat === c.slug ? 'bg-[#204E38] text-white shadow-xs' : 'bg-slate-50 text-slate-700 border border-slate-200 hover:bg-slate-100'"
                    >
                        {{ c.title }} ({{ c.count }})
                    </button>
                </div>

                <!-- Photos Grid - Flat & Clean -->
                <div class="grid grid-cols-2 sm:grid-cols-3 lg:grid-cols-4 gap-4">
                    <div
                        v-for="(photo, pidx) in filteredPhotos"
                        :key="pidx"
                        @click="selectedPhoto = photo"
                        class="bg-white rounded-xl overflow-hidden border border-slate-200 hover:border-[#204E38] transition cursor-pointer flex flex-col group p-1.5"
                    >
                        <div class="aspect-square bg-slate-100 rounded-lg relative overflow-hidden">
                            <img
                                :src="photo.url"
                                :alt="photo.name"
                                loading="lazy"
                                class="w-full h-full object-cover group-hover:scale-102 transition-transform duration-200"
                            />
                        </div>
                        <div class="p-2 text-[11px] text-slate-600 flex items-center justify-between">
                            <span class="truncate max-w-[120px] font-medium">{{ photo.category }}</span>
                            <span class="font-mono text-slate-500 font-bold">{{ photo.size_kb }} KB</span>
                        </div>
                    </div>
                </div>
            </div>

            <!-- MODAL PREVIEW FOTO LAPANGAN -->
            <div
                v-if="selectedPhoto"
                class="fixed inset-0 z-50 bg-black/75 backdrop-blur-xs flex items-center justify-center p-4"
                @click.self="selectedPhoto = null"
            >
                <div class="relative max-w-4xl w-full bg-white rounded-xl overflow-hidden border border-slate-200">
                    <button
                        @click="selectedPhoto = null"
                        class="absolute top-4 right-4 z-10 p-2 rounded-full bg-[#163828]/80 text-white hover:bg-[#204E38] transition cursor-pointer"
                    >
                        <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12" /></svg>
                    </button>
                    <div class="max-h-[75vh] flex items-center justify-center bg-slate-100">
                        <img :src="selectedPhoto.url" :alt="selectedPhoto.name" class="max-h-[75vh] w-auto object-contain" />
                    </div>
                    <div class="p-4 bg-white text-slate-800 flex items-center justify-between text-xs border-t border-slate-200">
                        <div>
                            <h4 class="font-bold text-sm">{{ selectedPhoto.name }}</h4>
                            <p class="text-slate-500 mt-0.5">Kategori: {{ selectedPhoto.category }} &middot; WebP Format</p>
                        </div>
                        <span class="px-2.5 py-1 rounded bg-slate-100 text-slate-700 font-mono font-bold border border-slate-200">
                            {{ selectedPhoto.size_kb }} KB
                        </span>
                    </div>
                </div>
            </div>

            <!-- MODAL DETAIL DOKUMEN -->
            <div
                v-if="selectedDoc"
                class="fixed inset-0 z-50 bg-[#163828]/60 backdrop-blur-xs flex items-center justify-center p-4"
                @click.self="selectedDoc = null"
            >
                <div class="bg-white rounded-2xl max-w-xl w-full p-6 sm:p-8 border border-slate-200 relative text-slate-800">
                    <button
                        @click="selectedDoc = null"
                        class="absolute top-4 right-4 p-2 text-slate-400 hover:text-slate-600 transition"
                    >
                        <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12" /></svg>
                    </button>

                    <div class="space-y-4">
                        <span class="text-xs font-mono font-bold text-slate-700 bg-slate-100 px-2.5 py-1 rounded">
                            {{ selectedDoc.id }} &middot; {{ selectedDoc.number }}
                        </span>
                        <h3 class="text-xl font-bold text-slate-900">{{ selectedDoc.title }}</h3>
                        <p class="text-xs text-slate-600 leading-relaxed">{{ selectedDoc.description }}</p>

                        <div class="bg-slate-50 p-4 rounded-xl border border-slate-200 space-y-2 text-xs">
                            <p><strong>Pihak Terkait:</strong> {{ selectedDoc.signatory }}</p>
                            <p><strong>Tanggal Catatan:</strong> {{ selectedDoc.date }}</p>
                            <p><strong>Klasifikasi:</strong> {{ selectedDoc.category_name }}</p>
                            <p><strong>Status:</strong> <span class="text-emerald-800 font-bold">{{ selectedDoc.status }}</span></p>
                        </div>

                        <div class="p-3 bg-slate-100 rounded-xl text-xs text-slate-600">
                            <strong>Akses Dokumen:</strong> Dokumen fisik resmi tersimpan di kesekretariatan SIRAMI dan Pondok Pesantren Al-Qur'an Hidayatul Mustafid.
                        </div>
                    </div>
                </div>
            </div>

            <!-- MARI TERHUBUNG SECTION (SESUAI GAMBAR REFERENSI DUAL QR DENGAN URL LAMPIRAN) -->
            <MariTerhubungSection :data="mariTerhubung" :logo="logo" :show-container="false" class="mt-16" />
        </main>
    </PublicLayout>
</template>

