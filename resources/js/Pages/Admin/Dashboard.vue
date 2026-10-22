<script setup>
import AuthenticatedLayout from '@/Layouts/AuthenticatedLayout.vue';
import { Head, Link } from '@inertiajs/vue3';

defineProps({
    stats: Object,
    categories: Array,
    logo: Object,
});
</script>

<template>
    <Head title="Admin Dashboard - SIRAMI" />

    <AuthenticatedLayout>
        <template #header>
            <div class="flex items-center justify-between">
                <div class="flex items-center gap-3">
                    <img
                        :src="logo?.square || '/logo/logokotak.webp'"
                        alt="SIRAMI Logo"
                        class="h-8 w-8 object-contain rounded"
                    />
                    <h2 class="text-xl font-semibold leading-tight text-gray-800">
                        Portal Admin SIRAMI (Backend)
                    </h2>
                </div>
                <Link
                    :href="route('home')"
                    target="_blank"
                    class="text-xs font-semibold px-3 py-1.5 rounded-md bg-emerald-600 text-white hover:bg-emerald-700 transition flex items-center gap-1.5"
                >
                    <span>Lihat Halaman Publik (Frontend)</span>
                    <svg class="w-3.5 h-3.5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 6H6a2 2 0 00-2 2v10a2 2 0 002 2h10a2 2 0 002-2v-4M14 4h6m0 0v6m0-6L10 14" />
                    </svg>
                </Link>
            </div>
        </template>

        <div class="py-12">
            <div class="mx-auto max-w-7xl sm:px-6 lg:px-8 space-y-6">
                <!-- Overview Stats Cards -->
                <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-4">
                    <div class="bg-white overflow-hidden shadow-sm sm:rounded-xl p-6 border border-gray-100">
                        <div class="flex items-center justify-between">
                            <span class="text-xs font-bold uppercase tracking-wider text-gray-500">Total Pengguna</span>
                            <div class="p-2 rounded-lg bg-indigo-50 text-indigo-600">
                                <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 4.354a4 4 0 110 5.292M15 21H3v-1a6 6 0 0112 0v1zm0 0h6v-1a6 6 0 00-9-5.197M13 7a4 4 0 11-8 0 4 4 0 018 0z" />
                                </svg>
                            </div>
                        </div>
                        <p class="text-3xl font-extrabold text-gray-900 mt-2">{{ stats?.total_users ?? 0 }}</p>
                        <p class="text-xs text-gray-500 mt-1">Admin & Operator terdaftar</p>
                    </div>

                    <div class="bg-white overflow-hidden shadow-sm sm:rounded-xl p-6 border border-gray-100">
                        <div class="flex items-center justify-between">
                            <span class="text-xs font-bold uppercase tracking-wider text-gray-500">Asset Foto WebP</span>
                            <div class="p-2 rounded-lg bg-emerald-50 text-emerald-600">
                                <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 16l4.586-4.586a2 2 0 012.828 0L16 16m-2-2l1.586-1.586a2 2 0 012.828 0L20 14m-6-6h.01M6 20h12a2 2 0 002-2V6a2 2 0 00-2-2H6a2 2 0 00-2 2v12a2 2 0 002 2z" />
                                </svg>
                            </div>
                        </div>
                        <p class="text-3xl font-extrabold text-emerald-600 mt-2">{{ stats?.total_photos ?? 0 }}</p>
                        <p class="text-xs text-gray-500 mt-1">Tersimpan dalam 5 kategori</p>
                    </div>

                    <div class="bg-white overflow-hidden shadow-sm sm:rounded-xl p-6 border border-gray-100">
                        <div class="flex items-center justify-between">
                            <span class="text-xs font-bold uppercase tracking-wider text-gray-500">Asset Logo WebP</span>
                            <div class="p-2 rounded-lg bg-amber-50 text-amber-600">
                                <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m5.618-4.016A11.955 11.955 0 0112 2.944a11.955 11.955 0 01-8.618 3.04A12.02 12.02 0 003 9c0 5.591 3.824 10.29 9 11.622 5.176-1.332 9-6.03 9-11.622 0-1.042-.133-2.052-.382-3.016z" />
                                </svg>
                            </div>
                        </div>
                        <p class="text-3xl font-extrabold text-gray-900 mt-2">{{ stats?.total_logos ?? 0 }}</p>
                        <p class="text-xs text-gray-500 mt-1">Logo Full & Logo Kotak</p>
                    </div>

                    <div class="bg-white overflow-hidden shadow-sm sm:rounded-xl p-6 border border-gray-100">
                        <div class="flex items-center justify-between">
                            <span class="text-xs font-bold uppercase tracking-wider text-gray-500">Status Kompresi</span>
                            <span class="inline-flex items-center px-2 py-0.5 rounded text-xs font-semibold bg-emerald-100 text-emerald-800">
                                Aktif
                            </span>
                        </div>
                        <p class="text-xl font-bold text-gray-900 mt-3">{{ stats?.storage_mode ?? 'WebP Engine' }}</p>
                        <p class="text-xs text-emerald-600 mt-1 font-medium">Penghematan bandwidth ~89%</p>
                    </div>
                </div>

                <!-- Category Breakdown -->
                <div class="bg-white overflow-hidden shadow-sm sm:rounded-xl p-6 border border-gray-100">
                    <h3 class="text-base font-bold text-gray-900 mb-4">
                        Distribusi Dokumentasi Lapangan (public/foto)
                    </h3>
                    <div class="divide-y divide-gray-100">
                        <div
                            v-for="(cat, idx) in categories"
                            :key="idx"
                            class="py-3 flex items-center justify-between"
                        >
                            <div class="flex items-center gap-3">
                                <span class="w-2.5 h-2.5 rounded-full bg-emerald-500"></span>
                                <span class="text-sm font-medium text-gray-700">{{ cat.category }}</span>
                            </div>
                            <span class="text-xs font-semibold px-2.5 py-1 rounded-full bg-gray-100 text-gray-600">
                                {{ cat.count }} file WebP
                            </span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </AuthenticatedLayout>
</template>
