<script setup>
import { Head, Link } from '@inertiajs/vue3';
import { ref, computed } from 'vue';
import PublicLayout from '@/Layouts/PublicLayout.vue';

const props = defineProps({
    categories: Array,
    totalPhotos: Number,
    logo: Object,
});

const activeCategory = ref('all');
const selectedImage = ref(null);

const filteredImages = computed(() => {
    if (activeCategory.value === 'all') {
        const all = [];
        props.categories?.forEach((cat) => {
            cat.images.forEach((img) => {
                all.push({ ...img, categoryTitle: cat.title });
            });
        });
        return all;
    }
    const cat = props.categories?.find((c) => c.slug === activeCategory.value);
    return cat ? cat.images.map((img) => ({ ...img, categoryTitle: cat.title })) : [];
});

function openImage(img) {
    selectedImage.value = img;
}

function closeImage() {
    selectedImage.value = null;
}
</script>

<template>
    <PublicLayout :logo="logo" title="Galeri Dokumentasi Inovasi - SIRAMI">
        <!-- Hero Header -->
        <section class="py-12 lg:py-16 bg-gradient-to-b from-white via-white to-[#F7F5EF] border-b border-[#E8E9E2]">
            <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
                <div class="text-center max-w-2xl mx-auto space-y-4">
                    <span class="inline-flex items-center gap-2 text-xs font-bold text-[#204E38] uppercase tracking-wider bg-emerald-50 px-3.5 py-1.5 rounded-full border border-emerald-200">
                        <span class="w-2 h-2 rounded-full bg-[#204E38]"></span>
                        Dokumentasi Terstruktur &middot; {{ totalPhotos }} Foto WebP
                    </span>
                    <h1 class="text-3xl sm:text-4xl font-black text-[#26312B] tracking-tight">
                        Galeri Inovasi & Kegiatan SIRAMI
                    </h1>
                    <p class="text-slate-600 text-sm sm:text-base leading-relaxed">
                        Arsip foto kegiatan lapangan, instalasi prototipe, pelatihan santri, dan validasi riset beresolusi optimal format WebP yang ringan dan cepat diakses.
                    </p>
                </div>
            </div>
        </section>

        <!-- Main Content -->
        <section class="py-12 bg-[#F7F5EF]/60">
            <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
                <!-- Category Filter Tabs -->
                <div class="flex flex-wrap items-center justify-center gap-2 mb-10">
                    <button
                        @click="activeCategory = 'all'"
                        class="px-4 py-2.5 rounded-xl text-xs sm:text-sm font-bold transition cursor-pointer"
                        :class="activeCategory === 'all' ? 'bg-[#204E38] text-white shadow-md shadow-[#204E38]/20' : 'bg-white text-slate-700 hover:bg-slate-100 border border-[#E8E9E2]'"
                    >
                        Semua Foto ({{ totalPhotos }})
                    </button>
                    <button
                        v-for="cat in categories"
                        :key="cat.slug"
                        @click="activeCategory = cat.slug"
                        class="px-4 py-2.5 rounded-xl text-xs sm:text-sm font-bold transition cursor-pointer"
                        :class="activeCategory === cat.slug ? 'bg-[#204E38] text-white shadow-md shadow-[#204E38]/20' : 'bg-white text-slate-700 hover:bg-slate-100 border border-[#E8E9E2]'"
                    >
                        {{ cat.title }} ({{ cat.count }})
                    </button>
                </div>

                <!-- Gallery Grid -->
                <div class="grid grid-cols-2 sm:grid-cols-3 lg:grid-cols-4 gap-4 sm:gap-6">
                    <div
                        v-for="(img, idx) in filteredImages"
                        :key="idx"
                        @click="openImage(img)"
                        class="group relative overflow-hidden rounded-2xl bg-white border border-[#E8E9E2] hover:border-[#204E38] hover:shadow-lg cursor-pointer transition-all duration-300 shadow-xs flex flex-col"
                    >
                        <div class="aspect-square w-full overflow-hidden bg-[#E8E9E2]/50 relative">
                            <img
                                :src="img.url"
                                :alt="img.name"
                                loading="lazy"
                                class="w-full h-full object-cover group-hover:scale-105 transition-transform duration-500"
                            />
                            <div class="absolute inset-0 bg-gradient-to-t from-[#163828]/80 via-transparent to-transparent opacity-0 group-hover:opacity-100 transition-opacity flex items-end p-3">
                                <span class="text-xs text-white font-medium truncate">{{ img.name }}</span>
                            </div>
                        </div>
                        <div class="p-3.5 text-xs text-slate-600 flex items-center justify-between border-t border-[#E8E9E2] bg-white">
                            <span class="truncate max-w-[140px] font-medium text-slate-700">{{ img.categoryTitle }}</span>
                            <span class="font-mono text-[#204E38] font-bold text-[11px] bg-emerald-50 px-2 py-0.5 rounded border border-emerald-100">{{ img.size_kb }} KB</span>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- Lightbox Modal -->
        <div
            v-if="selectedImage"
            class="fixed inset-0 z-50 bg-[#163828]/90 backdrop-blur-md flex items-center justify-center p-4"
            @click.self="closeImage"
        >
            <div class="relative max-w-4xl w-full bg-white rounded-3xl overflow-hidden shadow-2xl border border-white/20">
                <button
                    @click="closeImage"
                    class="absolute top-4 right-4 z-10 p-2 rounded-full bg-white/90 text-slate-700 hover:bg-white hover:text-slate-900 shadow-md transition cursor-pointer"
                    aria-label="Tutup foto"
                >
                    <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12" />
                    </svg>
                </button>
                <div class="max-h-[75vh] overflow-hidden flex items-center justify-center bg-[#26312B]">
                    <img
                        :src="selectedImage.url"
                        :alt="selectedImage.name"
                        class="max-h-[75vh] w-auto object-contain"
                    />
                </div>
                <div class="p-5 flex items-center justify-between bg-[#F7F5EF] border-t border-[#E8E9E2] text-sm">
                    <div>
                        <h3 class="font-bold text-[#26312B] text-base">{{ selectedImage.name }}</h3>
                        <p class="text-xs text-slate-600 mt-0.5">{{ selectedImage.categoryTitle }}</p>
                    </div>
                    <div class="text-right">
                        <span class="inline-block px-3 py-1 rounded-lg bg-[#204E38]/10 text-[#204E38] text-xs font-mono font-bold border border-[#204E38]/20">
                            {{ selectedImage.size_kb }} KB &middot; Format WebP
                        </span>
                    </div>
                </div>
            </div>
        </div>
    </PublicLayout>
</template>
