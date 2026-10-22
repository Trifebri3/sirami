<script setup>
import { Head, Link } from '@inertiajs/vue3';
import { ref, computed } from 'vue';
import PublicLayout from '@/Layouts/PublicLayout.vue';
import BuktiReferensiSection from '@/Components/BuktiReferensiSection.vue';

const props = defineProps({
    buktiReferensi: Object,
    documents: Array,
    photoGallery: Array,
    totalPhotos: Number,
    logo: Object,
    pilotInfo: Object,
    team: Array,
});

const activeCategory = ref('all');
const activePhotoCat = ref('all');
const selectedPhoto = ref(null);
const selectedDoc = ref(null);
const searchQuery = ref('');

const categories = [
    { key: 'all', label: 'Semua Kategori (8+)' },
    { key: 'profil-lokasi', label: '1. Kondisi Eksisting' },
    { key: 'kualitas-air', label: '2. Uji Kualitas Air' },
    { key: 'instrumen-survei', label: '3. Instrumen Survei' },
    { key: 'desain-teknis', label: '4. Desain Teknis & SOP' },
    { key: 'rab-anggaran', label: '5. RAB Pendukung' },
    { key: 'dokumen-mitra', label: '6. Surat Dukungan & Legalitas' },
    { key: 'dokumentasi-foto', label: '7. Dokumentasi Lapangan' },
    { key: 'referensi-regulasi', label: '8. Referensi & Pustaka' },
    { key: 'cv-tim', label: 'CV Inovator (3)' },
];

const filteredDocs = computed(() => {
    let docs = props.documents || [];
    if (activeCategory.value !== 'all' && activeCategory.value !== 'dokumentasi-foto') {
        if (activeCategory.value === 'dokumen-mitra') {
            docs = docs.filter((d) => d.category === 'dokumen-mitra' || d.category === 'legalitas-haki');
        } else {
            docs = docs.filter((d) => d.category === activeCategory.value);
        }
    }
    if (searchQuery.value.trim() !== '') {
        const q = searchQuery.value.toLowerCase();
        docs = docs.filter((d) =>
            d.title.toLowerCase().includes(q) ||
            d.description.toLowerCase().includes(q) ||
            d.number?.toLowerCase().includes(q) ||
            d.category_name?.toLowerCase().includes(q)
        );
    }
    return docs;
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
    if (activePhotoCat.value === 'all') return props.photoGallery || [];
    return (props.photoGallery || []).filter((p) => p.category_slug === activePhotoCat.value);
});
</script>

<template>
    <PublicLayout :logo="logo" title="Bukti, Referensi, dan Lampiran - SIRAMI">
        <!-- Breadcrumb & Top Indicator -->
        <div class="bg-emerald-950 text-white text-xs py-2.5 px-4 border-b border-emerald-800">
            <div class="max-w-7xl mx-auto flex flex-wrap items-center justify-between gap-2">
                <div class="flex items-center gap-2 font-mono text-emerald-200 text-[11px] sm:text-xs">
                    <Link :href="route('home')" class="hover:text-white transition">Beranda</Link>
                    <span>/</span>
                    <span class="text-white font-bold">Bukti, Referensi, dan Lampiran</span>
                </div>
                <div class="flex items-center gap-2 text-xs">
                    <span class="w-2 h-2 rounded-full bg-emerald-400 animate-pulse"></span>
                    <span class="text-emerald-200">URL Resmi: <strong class="text-white font-mono">sirami.ihi.my.id/bukti-referensi</strong></span>
                </div>
            </div>
        </div>

        <!-- 1. OFFICIAL GRAPHIC SHOWCASE SECTION (PERSIS SESUAI GAMBAR) -->
        <BuktiReferensiSection :data="buktiReferensi" :show-container="true" :standalone="true" />

        <!-- 2. DETAILED DOCUMENT REPOSITORY & EXPLORER (RINCIAN LENGKAP ONLINE) -->
        <section id="dokumen-lengkap" class="py-14 sm:py-20 bg-white border-b border-slate-200/80">
            <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
                
                <!-- Section Header -->
                <div class="flex flex-col lg:flex-row lg:items-end justify-between gap-6 mb-10 pb-6 border-b border-slate-200">
                    <div>
                        <div class="inline-flex items-center gap-2 px-3 py-1 rounded-full bg-emerald-50 border border-emerald-200 text-emerald-900 text-xs font-bold uppercase tracking-wider mb-2">
                            <span class="w-2 h-2 rounded-full bg-[#204E38]"></span>
                            <span>Repositori Terbuka &middot; 8 Pilar Bukti Empiris</span>
                        </div>
                        <h3 class="text-2xl sm:text-3xl font-black text-slate-900 tracking-tight">
                            Akses Dokumen, Berkas Legalitas & Bukti Lapangan
                        </h3>
                        <p class="text-slate-600 text-xs sm:text-sm mt-1 max-w-2xl leading-relaxed">
                            Unduh dan periksa seluruh surat keputusan, instrumen uji laboratorium, rincian RAB kas, kurikulum SOP, sertifikat HAKI, dan CV inovator secara transparan.
                        </p>
                    </div>

                    <!-- Search Input -->
                    <div class="w-full sm:w-80">
                        <div class="relative">
                            <input
                                v-model="searchQuery"
                                type="text"
                                placeholder="Cari nama dokumen / nomor surat..."
                                class="w-full pl-9 pr-4 py-2.5 rounded-xl border border-slate-300 text-xs focus:ring-2 focus:ring-emerald-600 focus:border-emerald-600 outline-none transition"
                            />
                            <svg class="w-4 h-4 text-slate-400 absolute left-3 top-3" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z" />
                            </svg>
                        </div>
                    </div>
                </div>

                <!-- Category Tabs -->
                <div class="flex flex-wrap items-center gap-2 mb-8">
                    <button
                        v-for="cat in categories"
                        :key="cat.key"
                        @click="activeCategory = cat.key"
                        class="px-3.5 py-2 rounded-xl text-xs font-bold transition cursor-pointer"
                        :class="activeCategory === cat.key
                            ? 'bg-[#143E2B] text-white shadow-xs'
                            : 'bg-slate-50 text-slate-700 hover:bg-slate-100 border border-slate-200'"
                    >
                        {{ cat.label }}
                    </button>
                </div>

                <!-- Category: Dokumentasi Lapangan (Photo Gallery) -->
                <div v-if="activeCategory === 'dokumentasi-foto' || activeCategory === 'all'" class="mb-14">
                    <div class="flex items-center justify-between mb-4">
                        <div class="flex items-center gap-2">
                            <span class="w-7 h-7 rounded-lg bg-emerald-100 text-emerald-800 flex items-center justify-center font-bold text-xs">7</span>
                            <h4 class="font-bold text-slate-900 text-base sm:text-lg">
                                Dokumentasi Kegiatan & Partisipasi Lapangan ({{ photoGallery?.length || 0 }} Foto Asli)
                            </h4>
                        </div>
                        <Link :href="route('public.galeri')" class="text-xs font-bold text-emerald-700 hover:underline">
                            Buka Galeri Lengkap &rarr;
                        </Link>
                    </div>

                    <!-- Photo Category Chips -->
                    <div class="flex flex-wrap gap-1.5 mb-5">
                        <button
                            @click="activePhotoCat = 'all'"
                            class="px-2.5 py-1 rounded-lg text-xs font-semibold transition"
                            :class="activePhotoCat === 'all' ? 'bg-emerald-700 text-white' : 'bg-white border border-slate-200 text-slate-600 hover:bg-slate-50'"
                        >
                            Semua Foto ({{ photoGallery?.length || 0 }})
                        </button>
                        <button
                            v-for="pcat in photoCategories"
                            :key="pcat.slug"
                            @click="activePhotoCat = pcat.slug"
                            class="px-2.5 py-1 rounded-lg text-xs font-semibold transition"
                            :class="activePhotoCat === pcat.slug ? 'bg-emerald-700 text-white' : 'bg-white border border-slate-200 text-slate-600 hover:bg-slate-50'"
                        >
                            {{ pcat.title }} ({{ pcat.count }})
                        </button>
                    </div>

                    <!-- Photos Grid -->
                    <div class="grid grid-cols-2 sm:grid-cols-3 md:grid-cols-4 lg:grid-cols-6 gap-3">
                        <div
                            v-for="(photo, pidx) in (filteredPhotos.slice(0, 12))"
                            :key="pidx"
                            @click="selectedPhoto = photo"
                            class="group relative aspect-square rounded-2xl overflow-hidden bg-slate-100 border border-slate-200 cursor-pointer shadow-2xs hover:shadow-md transition"
                        >
                            <img
                                :src="photo.url"
                                :alt="photo.name"
                                class="w-full h-full object-cover group-hover:scale-105 transition duration-300"
                                loading="lazy"
                            />
                            <div class="absolute inset-0 bg-gradient-to-t from-slate-950/80 via-transparent to-transparent opacity-0 group-hover:opacity-100 transition p-2.5 flex flex-col justify-end">
                                <span class="text-[10px] text-emerald-300 font-bold uppercase tracking-wider block truncate">{{ photo.category }}</span>
                                <span class="text-white text-[11px] font-bold block truncate capitalize">{{ photo.name.replace(/[-_]/g, ' ') }}</span>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Document Cards Grid -->
                <div v-if="activeCategory !== 'dokumentasi-foto'">
                    <div class="flex items-center justify-between mb-4">
                        <h4 class="font-bold text-slate-900 text-base sm:text-lg">
                            Berkas Dokumen Resmi ({{ filteredDocs.length }} Item Tersedia)
                        </h4>
                    </div>

                    <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">
                        <div
                            v-for="doc in filteredDocs"
                            :key="doc.id"
                            class="bg-white rounded-3xl p-6 border border-slate-200 hover:border-emerald-500 hover:shadow-lg transition-all duration-300 flex flex-col justify-between group space-y-5"
                        >
                            <div class="space-y-3">
                                <!-- Top Badges -->
                                <div class="flex items-center justify-between gap-2">
                                    <span class="text-[10px] font-mono font-bold px-2.5 py-1 rounded-md bg-slate-100 text-slate-700 border border-slate-200">
                                        {{ doc.id }} &middot; {{ doc.number }}
                                    </span>
                                    <span
                                        class="text-[10px] font-bold px-2 py-0.5 rounded-full"
                                        :class="{
                                            'bg-emerald-100 text-emerald-900 border border-emerald-200': doc.status_color === 'emerald',
                                            'bg-indigo-100 text-indigo-900 border border-indigo-200': doc.status_color === 'indigo',
                                            'bg-amber-100 text-amber-900 border border-amber-200': doc.status_color === 'amber',
                                            'bg-blue-100 text-blue-900 border border-blue-200': doc.status_color === 'blue',
                                            'bg-teal-100 text-teal-900 border border-teal-200': doc.status_color === 'teal',
                                        }"
                                    >
                                        {{ doc.status }}
                                    </span>
                                </div>

                                <!-- Title -->
                                <h5 class="text-base font-bold text-slate-900 group-hover:text-emerald-800 transition leading-snug">
                                    {{ doc.title }}
                                </h5>

                                <!-- Description -->
                                <p class="text-xs text-slate-600 leading-relaxed">
                                    {{ doc.description }}
                                </p>
                            </div>

                            <!-- Meta & Action -->
                            <div class="pt-4 border-t border-slate-100 flex items-center justify-between gap-3 text-xs">
                                <div class="min-w-0 text-slate-500 text-[11px] truncate">
                                    <span>Penandatangan: </span>
                                    <strong class="text-slate-800">{{ doc.signatory }}</strong>
                                </div>

                                <div class="shrink-0 flex items-center gap-1.5">
                                    <a
                                        v-if="doc.download_url"
                                        :href="doc.download_url"
                                        target="_blank"
                                        download
                                        class="px-3 py-1.5 rounded-xl bg-emerald-700 hover:bg-emerald-800 text-white font-bold text-xs transition flex items-center gap-1 shadow-2xs cursor-pointer"
                                        title="Unduh Berkas Resmi (PDF)"
                                    >
                                        <span>PDF</span>
                                        <span>&darr;</span>
                                    </a>
                                    <button
                                        v-else
                                        @click="selectedDoc = doc"
                                        class="px-3 py-1.5 rounded-xl bg-slate-100 hover:bg-slate-200 text-slate-800 font-bold text-xs transition cursor-pointer"
                                    >
                                        Detail
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Footer Summary Box -->
                <div class="mt-14 p-6 sm:p-8 rounded-3xl bg-gradient-to-r from-emerald-950 via-[#133E2B] to-slate-900 text-white flex flex-col md:flex-row items-center justify-between gap-6">
                    <div class="space-y-1.5 text-center md:text-left">
                        <span class="text-xs font-mono uppercase tracking-wider text-amber-300 font-bold block">
                            Inovasi Syariah &middot; Sharia Young Leader Summit 2026
                        </span>
                        <h4 class="text-lg sm:text-xl font-black text-white">
                            Butuh Salinan Berkas Tambahan atau Verifikasi Lapangan?
                        </h4>
                        <p class="text-xs sm:text-sm text-emerald-200/90 max-w-xl leading-relaxed">
                            Tim inovator mahasiswa UIN Sunan Gunung Djati Bandung siap memfasilitasi peninjauan langsung instalasi toren, IPAL, dan lahan di Pesantren Hidayatul Mustafid Tasikmalaya.
                        </p>
                    </div>

                    <div class="flex flex-wrap items-center gap-3 shrink-0">
                        <Link
                            :href="route('pilot.project')"
                            class="px-5 py-3 rounded-2xl bg-amber-400 hover:bg-amber-300 text-slate-950 font-bold text-xs transition shadow-md"
                        >
                            Pelajari Pilot Project &rarr;
                        </Link>
                        <Link
                            :href="route('tim.mitra')"
                            class="px-5 py-3 rounded-2xl bg-white/10 hover:bg-white/20 text-white font-bold text-xs border border-white/20 transition"
                        >
                            Profil Tim Inovator
                        </Link>
                    </div>
                </div>

            </div>
        </section>

        <!-- Photo Lightbox Modal -->
        <div
            v-if="selectedPhoto"
            class="fixed inset-0 z-50 bg-black/90 backdrop-blur-xs flex items-center justify-center p-4 sm:p-6"
            @click.self="selectedPhoto = null"
        >
            <div class="relative max-w-4xl w-full bg-[#163828] rounded-3xl overflow-hidden border border-[#2e6d4e]/40 shadow-2xl flex flex-col max-h-[90vh]">
                <button
                    @click="selectedPhoto = null"
                    class="absolute top-4 right-4 z-10 w-9 h-9 rounded-full bg-black/60 hover:bg-black/90 text-white font-bold flex items-center justify-center border border-white/20 transition cursor-pointer"
                >
                    ✕
                </button>
                <div class="flex-1 bg-black flex items-center justify-center overflow-hidden">
                    <img :src="selectedPhoto.url" :alt="selectedPhoto.name" class="max-h-[75vh] w-auto object-contain" />
                </div>
                <div class="p-4 bg-[#204E38] text-white flex items-center justify-between text-xs border-t border-[#2e6d4e]/50">
                    <div>
                        <span class="text-emerald-300 font-bold uppercase tracking-wider block text-[10px]">{{ selectedPhoto.category }}</span>
                        <span class="font-bold text-sm capitalize">{{ selectedPhoto.name.replace(/[-_]/g, ' ') }}</span>
                    </div>
                    <span class="text-emerald-100/70 font-mono">{{ selectedPhoto.size_kb }} KB</span>
                </div>
            </div>
        </div>
    </PublicLayout>
</template>
