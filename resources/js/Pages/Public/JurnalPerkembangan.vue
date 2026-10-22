<script setup>
import { Head, Link } from '@inertiajs/vue3';
import { ref, computed } from 'vue';
import PublicLayout from '@/Layouts/PublicLayout.vue';

const props = defineProps({
    logo: Object,
    journalEntries: Array,
});

const activeFilter = ref('all');

const filteredEntries = computed(() => {
    if (activeFilter.value === 'all') return props.journalEntries;
    return props.journalEntries.filter((e) => e.status_badge === activeFilter.value);
});
</script>

<template>
    <PublicLayout :logo="logo" title="Jurnal Perkembangan - Logbook Riset & Kronologi Lapangan SIRAMI">
        <!-- Hero Header -->
        <section class="py-12 lg:py-16 bg-gradient-to-b from-white via-white to-emerald-50/30 border-b border-slate-200/80">
            <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
                <div class="max-w-3xl space-y-4">
                    <div class="inline-flex items-center gap-2 px-3.5 py-1.5 rounded-full bg-emerald-100/90 border border-emerald-300 text-emerald-950 text-xs font-bold uppercase tracking-wider">
                        <span class="w-2 h-2 rounded-full bg-[#204E38]"></span>
                        <span>Logbook Riset Terbuka &middot; SYLS 2026</span>
                    </div>

                    <h1 class="text-3xl sm:text-5xl font-black text-slate-900 tracking-tight leading-tight">
                        Jurnal <span class="text-emerald-800">Perkembangan</span>
                    </h1>

                    <p class="text-slate-600 text-sm sm:text-base leading-relaxed">
                        Dokumentasi berkala mengenai proses pengembangan SIRAMI secara terbuka, mulai dari identifikasi masalah, kajian ilmiah, pengembangan teknologi IoT, persiapan pilot project di Tasikmalaya, hingga evaluasi berkala.
                    </p>
                </div>
            </div>
        </section>

        <!-- Logbook Timeline -->
        <section class="py-16 bg-white border-b border-slate-200/80">
            <div class="max-w-5xl mx-auto px-4 sm:px-6 lg:px-8">
                <!-- Filter Tabs -->
                <div class="flex flex-wrap items-center gap-2 mb-10 pb-4 border-b border-slate-200">
                    <button
                        @click="activeFilter = 'all'"
                        class="px-4 py-2 rounded-xl text-xs font-bold transition cursor-pointer"
                        :class="activeFilter === 'all' ? 'bg-[#204E38] text-white shadow-xs' : 'bg-slate-100 text-slate-700 hover:bg-slate-200'"
                    >
                        Semua Catatan ({{ journalEntries?.length }})
                    </button>
                    <button
                        @click="activeFilter = 'emerald'"
                        class="px-4 py-2 rounded-xl text-xs font-bold transition cursor-pointer"
                        :class="activeFilter === 'emerald' ? 'bg-emerald-800 text-white' : 'bg-emerald-50 text-emerald-800 hover:bg-emerald-100'"
                    >
                        Legalitas & Kemitraan
                    </button>
                    <button
                        @click="activeFilter = 'blue'"
                        class="px-4 py-2 rounded-xl text-xs font-bold transition cursor-pointer"
                        :class="activeFilter === 'blue' ? 'bg-blue-800 text-white' : 'bg-blue-50 text-blue-800 hover:bg-blue-100'"
                    >
                        Uji Sensor & Teknis
                    </button>
                    <button
                        @click="activeFilter = 'slate'"
                        class="px-4 py-2 rounded-xl text-xs font-bold transition cursor-pointer"
                        :class="activeFilter === 'slate' ? 'bg-slate-700 text-white' : 'bg-slate-100 text-slate-700 hover:bg-slate-200'"
                    >
                        Observasi Lapangan
                    </button>
                </div>

                <!-- Timeline Entries List -->
                <div class="space-y-6">
                    <div
                        v-for="entry in filteredEntries"
                        :key="entry.id"
                        class="bg-white rounded-2xl p-6 sm:p-8 border border-slate-200 shadow-xs hover:border-emerald-600 transition space-y-4"
                    >
                        <div class="flex flex-wrap items-center justify-between gap-3">
                            <div class="flex items-center gap-3">
                                <span class="px-2.5 py-0.5 rounded-md bg-[#204E38] text-white font-mono font-bold text-xs">
                                    {{ entry.id }}
                                </span>
                                <span class="text-xs font-bold text-slate-500 uppercase tracking-wider">
                                    {{ entry.tag }}
                                </span>
                            </div>
                            <span class="text-xs font-mono font-semibold text-slate-400">
                                {{ entry.date }}
                            </span>
                        </div>

                        <div>
                            <h3 class="text-lg sm:text-xl font-bold text-slate-900">
                                {{ entry.title }}
                            </h3>
                            <p class="text-xs sm:text-sm text-slate-600 mt-2 leading-relaxed">
                                {{ entry.summary }}
                            </p>
                        </div>

                        <div class="pt-3 border-t border-slate-100 flex items-center justify-between text-xs">
                            <span class="px-3 py-1 rounded-full text-[11px] font-bold bg-emerald-50 text-emerald-800 border border-emerald-200">
                                Status: {{ entry.status }}
                            </span>

                            <Link
                                :href="route('pusat.dokumen')"
                                class="text-slate-700 hover:text-emerald-700 font-bold flex items-center gap-1"
                            >
                                <span>Periksa Dokumen Terkait</span>
                                <span>&rarr;</span>
                            </Link>
                        </div>
                    </div>
                </div>

                <!-- Open Science Note -->
                <div class="mt-12 p-6 rounded-2xl bg-slate-50 border border-slate-200 text-xs text-slate-600 space-y-1 text-center max-w-2xl mx-auto">
                    <h4 class="font-bold text-slate-900">Prinsip Dokumentasi Terbuka (Open Research Log)</h4>
                    <p>
                        Jurnal ini diperbarui secara berkala oleh tim Mahasiswa UIN Sunan Gunung Djati Bandung untuk merekam proses, kegagalan, penyesuaian desain, dan capaian riil pilot tanpa rekayasa data.
                    </p>
                </div>
            </div>
        </section>
    </PublicLayout>
</template>
