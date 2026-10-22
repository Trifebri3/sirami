<script setup>
import { Link } from '@inertiajs/vue3';

const props = defineProps({
    data: {
        type: Object,
        default: null,
    },
    logo: {
        type: Object,
        default: null,
    },
    showContainer: {
        type: Boolean,
        default: true,
    },
});

const defaultPillars = [
    { title: 'Air', desc: 'lebih aman dan terjaga', icon: 'water' },
    { title: 'Pangan', desc: 'berkualitas tersedia', icon: 'plant' },
    { title: 'Santri', desc: 'berdaya dan terampil', icon: 'users' },
    { title: 'Model yang', desc: 'dapat direplikasi ke lebih banyak komunitas', icon: 'chart' },
];

const pillars = props.data?.pillars || defaultPillars;
const bannerImg = props.data?.banner_image || '/foto/pesantren_water_banner.jpg';
const qrHome = props.data?.qr_website?.qr_svg || '/qr-sirami-home.svg';
const qrLampiran = props.data?.qr_lampiran?.qr_svg || '/qr-sirami-lampiran.svg';
const urlHome = props.data?.qr_website?.url || 'https://sirami.ihi.my.id/';
const urlLampiran = props.data?.qr_lampiran?.url || 'https://sirami.ihi.my.id/lampiran';
</script>

<template>
    <section :class="showContainer ? 'py-14 sm:py-20 bg-white border-b border-slate-200/80 overflow-hidden' : ''">
        <div :class="showContainer ? 'max-w-7xl mx-auto px-4 sm:px-6 lg:px-8' : ''">
            
            <!-- MAIN CARD WRAPPER (Sesuai Layout Banner Penuh pada Gambar) -->
            <div class="relative bg-[#FAFCFA] rounded-3xl border border-[#D5E5DA] shadow-sm overflow-hidden p-6 sm:p-10 lg:p-12">
                
                <!-- TOP HEADER: LOGO SIRAMI -->
                <div class="mb-6">
                    <img
                        :src="logo?.full || '/logo/logofull.webp'"
                        alt="SIRAMI - Sirkular Airnya, Berdaya Pangannya, Tumbuh Ekonominya"
                        class="h-10 sm:h-12 w-auto object-contain"
                    />
                </div>

                <!-- TOP CONTENT GRID: HEADLINE & 4 PILLARS (KIRI) vs DUAL QR CARDS (KANAN) -->
                <div class="grid grid-cols-1 lg:grid-cols-12 gap-8 lg:gap-12 items-start mb-10">
                    
                    <!-- Left: Headline, Description & 4 Impact Pillars -->
                    <div class="lg:col-span-7 space-y-6">
                        <div>
                            <h2 class="text-3xl sm:text-4xl lg:text-[46px] font-black text-[#133E2B] tracking-tight leading-[1.12]">
                                Mari Terhubung,<br />
                                <span class="text-[#133E2B]">Mari Wujudkan Perubahan.</span>
                            </h2>
                            <p class="text-xs sm:text-sm text-slate-600 leading-relaxed mt-3 max-w-xl">
                                Dengan dukungan Anda, SIRAMI dapat menjadi langkah nyata untuk menghadirkan solusi air, pangan, dan peluang ekonomi bagi pesantren dan komunitas di Indonesia.
                            </p>
                        </div>

                        <!-- 4 Impact Pillars Horizontal Grid (Sesuai Gambar Persis) -->
                        <div class="grid grid-cols-2 sm:grid-cols-4 gap-3 sm:gap-4 pt-2">
                            
                            <!-- 1. Air -->
                            <div class="p-3 bg-white rounded-2xl border border-slate-200/80 shadow-2xs space-y-2">
                                <div class="w-10 h-10 rounded-full bg-[#133E2B] text-white flex items-center justify-center shadow-xs">
                                    <svg class="w-5 h-5 text-emerald-300" fill="currentColor" viewBox="0 0 24 24">
                                        <path d="M12 2.69l5.66 5.66a8 8 0 1 1-11.31 0z" />
                                    </svg>
                                </div>
                                <div>
                                    <h4 class="font-bold text-slate-900 text-sm leading-tight">Air</h4>
                                    <p class="text-[11px] text-slate-500 leading-tight mt-0.5">lebih aman dan terjaga</p>
                                </div>
                            </div>

                            <!-- 2. Pangan -->
                            <div class="p-3 bg-white rounded-2xl border border-slate-200/80 shadow-2xs space-y-2">
                                <div class="w-10 h-10 rounded-full bg-[#133E2B] text-white flex items-center justify-center shadow-xs">
                                    <svg class="w-5 h-5 text-emerald-300" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 19l9 2-9-18-9 18 9-2zm0 0v-8" />
                                    </svg>
                                </div>
                                <div>
                                    <h4 class="font-bold text-slate-900 text-sm leading-tight">Pangan</h4>
                                    <p class="text-[11px] text-slate-500 leading-tight mt-0.5">berkualitas tersedia</p>
                                </div>
                            </div>

                            <!-- 3. Santri -->
                            <div class="p-3 bg-white rounded-2xl border border-slate-200/80 shadow-2xs space-y-2">
                                <div class="w-10 h-10 rounded-full bg-[#133E2B] text-white flex items-center justify-center shadow-xs">
                                    <svg class="w-5 h-5 text-emerald-300" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 20h5v-2a3 3 0 00-5.356-1.857M17 20H7m10 0v-2c0-.656-.126-1.283-.356-1.857M7 20H2v-2a3 3 0 015.356-1.857M7 20v-2c0-.656.126-1.283.356-1.857m0 0a5.002 5.002 0 019.288 0M15 7a3 3 0 11-6 0 3 3 0 016 0zm6 3a2 2 0 11-4 0 2 2 0 014 0zM7 10a2 2 0 11-4 0 2 2 0 014 0z" />
                                    </svg>
                                </div>
                                <div>
                                    <h4 class="font-bold text-slate-900 text-sm leading-tight">Santri</h4>
                                    <p class="text-[11px] text-slate-500 leading-tight mt-0.5">berdaya dan terampil</p>
                                </div>
                            </div>

                            <!-- 4. Model yang dapat direplikasi -->
                            <div class="p-3 bg-white rounded-2xl border border-slate-200/80 shadow-2xs space-y-2">
                                <div class="w-10 h-10 rounded-full bg-[#133E2B] text-white flex items-center justify-center shadow-xs">
                                    <svg class="w-5 h-5 text-emerald-300" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 7h8m0 0v8m0-8l-8 8-4-4-6 6" />
                                    </svg>
                                </div>
                                <div>
                                    <h4 class="font-bold text-slate-900 text-sm leading-tight">Model yang</h4>
                                    <p class="text-[11px] text-slate-500 leading-tight mt-0.5">dapat direplikasi ke komunitas</p>
                                </div>
                            </div>

                        </div>
                    </div>

                    <!-- Right: DUAL QR CARDS (Website SIRAMI & Lampiran Lengkap) -->
                    <div class="lg:col-span-5 grid grid-cols-1 sm:grid-cols-2 gap-4">
                        
                        <!-- QR CARD 1: Kunjungi Website SIRAMI -->
                        <div class="bg-[#EEF5F0] rounded-3xl p-5 border border-[#D5E5DA] flex flex-col items-center text-center shadow-2xs group hover:border-emerald-600 transition">
                            <div class="bg-white p-3 rounded-2xl border border-[#D5E5DA] shadow-xs mb-3.5 w-full aspect-square flex items-center justify-center">
                                <img
                                    :src="qrHome"
                                    alt="QR Code Kunjungi Website SIRAMI"
                                    class="w-full h-full object-contain"
                                />
                            </div>
                            
                            <a
                                :href="urlHome"
                                target="_blank"
                                class="w-full py-2.5 px-3 rounded-xl bg-[#143E2B] hover:bg-[#0E2C1E] text-white text-xs font-bold flex items-center justify-center gap-1.5 shadow-sm transition cursor-pointer mb-2"
                            >
                                <svg class="w-4 h-4 shrink-0 text-emerald-300" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 12a9 9 0 01-9 9m9-9a9 9 0 00-9-9m9 9H3m9 9a9 9 0 01-9-9m9 9c1.657 0 3-4.03 3-9s-1.343-9-3-9m0 18c-1.657 0-3-4.03-3-9s1.343-9 3-9m-9 9a9 9 0 019-9" />
                                </svg>
                                <span class="truncate">Kunjungi Website SIRAMI</span>
                                <span>&rarr;</span>
                            </a>

                            <span class="text-[10px] sm:text-[11px] text-slate-500 font-mono tracking-tight block truncate w-full">
                                {{ urlHome }}
                            </span>
                        </div>

                        <!-- QR CARD 2: Lihat Lampiran Lengkap -->
                        <div class="bg-[#EEF5F0] rounded-3xl p-5 border border-[#D5E5DA] flex flex-col items-center text-center shadow-2xs group hover:border-amber-500 transition">
                            <div class="bg-white p-3 rounded-2xl border border-[#D5E5DA] shadow-xs mb-3.5 w-full aspect-square flex items-center justify-center">
                                <img
                                    :src="qrLampiran"
                                    alt="QR Code Lihat Lampiran Lengkap"
                                    class="w-full h-full object-contain"
                                />
                            </div>

                            <a
                                :href="urlLampiran"
                                class="w-full py-2.5 px-3 rounded-xl bg-[#F4B400] hover:bg-[#E0A000] text-slate-950 text-xs font-bold flex items-center justify-center gap-1.5 shadow-sm transition cursor-pointer mb-2"
                            >
                                <svg class="w-4 h-4 shrink-0 text-slate-950" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12h6m-6 4h6m2 5H7a2 2 0 01-2-2V5a2 2 0 012-2h5.586a1 1 0 01.707.293l5.414 5.414a1 1 0 01.293.707V19a2 2 0 01-2 2z" />
                                </svg>
                                <span class="truncate">Lihat Lampiran Lengkap</span>
                                <span>&rarr;</span>
                            </a>

                            <span class="text-[10px] sm:text-[11px] text-slate-500 font-mono tracking-tight block truncate w-full">
                                {{ urlLampiran }}
                            </span>
                        </div>

                    </div>
                </div>

                <!-- BOTTOM REALISTIC LANDSCAPE BANNER WITH OVERLAID INVITATION BAR -->
                <div class="relative rounded-3xl overflow-hidden border border-[#CDE3D5] shadow-md min-h-[260px] sm:min-h-[320px] flex flex-col justify-end">
                    <!-- Background Photo -->
                    <img
                        :src="bannerImg"
                        alt="Pesantren Hidayatul Mustafid Water System & Microgreens"
                        class="absolute inset-0 w-full h-full object-cover"
                    />

                    <!-- Soft gradient overlay -->
                    <div class="absolute inset-0 bg-gradient-to-t from-slate-950/80 via-slate-950/20 to-transparent"></div>

                    <!-- Floating Invitation Banner (Sesuai Gambar Persis) -->
                    <div class="relative z-10 p-4 sm:p-6 lg:p-8">
                        <div class="bg-[#143E2B]/95 backdrop-blur-md rounded-2xl sm:rounded-full p-4 sm:px-8 sm:py-4 border border-emerald-400/40 shadow-xl flex flex-col sm:flex-row items-center justify-between gap-4 text-white">
                            
                            <!-- Left: Handshake & Invitation -->
                            <div class="flex items-center gap-3.5 text-center sm:text-left">
                                <div class="w-11 h-11 rounded-full bg-white/10 border border-white/20 flex items-center justify-center text-white shrink-0 text-xl shadow-xs">
                                    🤝
                                </div>
                                <div>
                                    <h4 class="font-black text-white text-sm sm:text-base leading-snug">
                                        Kami Mengundang Anda
                                    </h4>
                                    <p class="text-xs text-emerald-100/90 leading-tight mt-0.5 max-w-md">
                                        untuk menjadi bagian dari perjalanan SIRAMI, melalui dukungan pendanaan, kemitraan, atau kolaborasi program.
                                    </p>
                                </div>
                            </div>

                            <!-- Vertical divider -->
                            <div class="h-10 w-px bg-emerald-400/30 hidden lg:block"></div>

                            <!-- Right: Together Action -->
                            <div class="flex items-center gap-3 text-center sm:text-left shrink-0">
                                <div class="w-10 h-10 rounded-full bg-amber-400 text-slate-950 font-black text-lg flex items-center justify-center shrink-0 shadow-md">
                                    &rarr;
                                </div>
                                <div>
                                    <h4 class="font-black text-white text-sm sm:text-base leading-snug">
                                        Bersama, kita bisa
                                    </h4>
                                    <p class="text-xs text-amber-200 leading-tight mt-0.5">
                                        mengalirkan perubahan yang nyata.
                                    </p>
                                </div>
                            </div>

                        </div>
                    </div>

                    <!-- Watermark Domain (Bottom Right) -->
                    <div class="absolute bottom-2 right-4 z-20 flex items-center gap-1.5 text-emerald-200/80 text-[10px] font-mono">
                        <svg class="w-3.5 h-3.5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 12a9 9 0 01-9 9m9-9a9 9 0 00-9-9m9 9H3m9 9a9 9 0 01-9-9m9 9c1.657 0 3-4.03 3-9s-1.343-9-3-9m0 18c-1.657 0-3-4.03-3-9s1.343-9 3-9m-9 9a9 9 0 019-9" />
                        </svg>
                        <span>sirami.ihi.my.id</span>
                    </div>
                </div>

            </div>
        </div>
    </section>
</template>
