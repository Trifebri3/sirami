<script setup>
import { Head, Link } from '@inertiajs/vue3';
import { ref, onMounted, onUnmounted } from 'vue';

const props = defineProps({
    title: {
        type: String,
        default: 'SIRAMI - Inovasi Sosial Air, Pangan & Ekonomi Komunitas',
    },
    logo: {
        type: Object,
        default: () => ({
            full: '/logo/logofull.webp',
            square: '/logo/logokotak.webp',
            uin: '/logo/logouin.svg',
            syls: '/syls.png',
        }),
    },
});

const isMobileMenuOpen = ref(false);
const isMoreDropdownOpen = ref(false);
const isSylsModalOpen = ref(false);
const isBannerVisible = ref(true);

function handleOpenSylsModal() {
    isSylsModalOpen.value = true;
}

onMounted(() => {
    if (typeof window !== 'undefined') {
        window.addEventListener('open-syls-modal', handleOpenSylsModal);
    }

    try {
        const hasSeen = sessionStorage.getItem('sirami_syls_popup_seen');
        if (!hasSeen) {
            setTimeout(() => {
                isSylsModalOpen.value = true;
                sessionStorage.setItem('sirami_syls_popup_seen', 'true');
            }, 600);
        }
    } catch (e) {
        // Fallback for restricted storage environments
    }
});

onUnmounted(() => {
    if (typeof window !== 'undefined') {
        window.removeEventListener('open-syls-modal', handleOpenSylsModal);
    }
});

const navItems = [
    { name: 'Beranda', route: 'home', href: '/' },
    { name: 'Mengapa SIRAMI?', route: 'mengapa.sirami', href: '/mengapa-sirami' },
    { name: 'Solusi', route: 'solusi', href: '/solusi' },
    { name: 'Riset & Bukti', route: 'riset.bukti', href: '/riset-bukti' },
    { name: 'Pilot Project', route: 'pilot.project', href: '/pilot-project' },
    { name: 'Dampak', route: 'dampak', href: '/dampak' },
    { name: 'Tim & Mitra', route: 'tim.mitra', href: '/tim-mitra' },
];

const secondaryItems = [
    { name: 'Bukti & Referensi', route: 'bukti.referensi', href: '/bukti-referensi', icon: 'search', desc: '8 pilar bukti & QR resmi' },
    { name: 'Pusat Dokumen', route: 'pusat.dokumen', href: '/pusat-dokumen', icon: 'document', desc: 'Surat dukungan, SOP & regulasi' },
    { name: 'Jurnal Perkembangan', route: 'jurnal.perkembangan', href: '/jurnal-perkembangan', icon: 'clock', desc: 'Logbook & kronologi riset' },
    { name: 'Galeri Lapangan', route: 'public.galeri', href: '/galeri', icon: 'camera', desc: '45+ foto asli lapangan' },
];

function isRouteActive(routeName, href) {
    if (typeof window !== 'undefined') {
        const path = window.location.pathname;
        if (href === '/' && path === '/') return true;
        if (href !== '/' && path.startsWith(href)) return true;
    }
    return false;
}
</script>

<template>
    <div class="min-h-screen bg-[#FBFDFB] text-slate-800 font-sans selection:bg-emerald-700 selection:text-white flex flex-col">
        <Head :title="title" />

        <!-- 0. SYLS 2026 TOP ANNOUNCEMENT BANNER -->
        <div v-if="isBannerVisible" class="bg-gradient-to-r from-[#143525] via-[#204E38] to-[#143525] text-white text-xs py-2 px-4 border-b border-[#2d6e4f] relative z-50">
            <div class="max-w-7xl mx-auto flex items-center justify-between gap-3">
                <div class="flex items-center gap-2.5 overflow-hidden">
                    <div class="bg-white px-2 py-0.5 rounded shadow-xs shrink-0 flex items-center">
                        <img :src="logo?.syls || '/syls.png'" alt="SYLS 2026" class="h-4 sm:h-5 w-auto object-contain" />
                    </div>
                    <span class="truncate text-[11px] sm:text-xs">
                        <strong class="text-amber-300 font-bold">SYLS 2026:</strong> Karya Inovasi Usulan SIRAMI Mahasiswa UIN SGD Bandung Diajukan Khusus untuk Sharia Young Leader Summit 2026 (Tahap Pengajuan &middot; Bukan/Belum Terpilih).
                    </span>
                </div>

                <div class="flex items-center gap-2 shrink-0">
                    <button
                        @click="isSylsModalOpen = true"
                        class="px-2.5 py-1 rounded-md bg-amber-400 hover:bg-amber-300 text-[#143525] text-[11px] font-bold transition flex items-center gap-1 cursor-pointer shadow-xs"
                    >
                        <span>Lihat Ide Inovasi</span>
                        <span>&rarr;</span>
                    </button>
                    <button
                        @click="isBannerVisible = false"
                        class="text-emerald-200 hover:text-white text-xs p-1 cursor-pointer"
                        title="Tutup Pengumuman"
                    >
                        ✕
                    </button>
                </div>
            </div>
        </div>

        <!-- 1. STICKY TOP NAVBAR -->
        <header class="sticky top-0 z-40 bg-white/95 backdrop-blur-md border-b border-[#E8E9E2] shadow-2xs">
            <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 h-20 flex items-center justify-between">
                
                <!-- Brand: Logo SIRAMI as the ONLY brand logo in header per Master Prompt -->
                <div class="flex items-center gap-3 shrink-0">
                    <Link :href="route('home')" class="flex items-center gap-2 group" title="SIRAMI - Beranda">
                        <img
                            :src="logo?.full || '/logo/logofull.webp'"
                            alt="SIRAMI Logo"
                            class="h-9 sm:h-11 w-auto object-contain transition-transform group-hover:scale-105"
                        />
                    </Link>
                </div>

                <!-- Desktop Navigation Menu (10 Pages Structure) -->
                <nav class="hidden xl:flex items-center gap-5 text-xs font-semibold text-slate-700">
                    <Link
                        v-for="item in navItems"
                        :key="item.route"
                        :href="route(item.route)"
                        class="px-2.5 py-1.5 rounded-lg transition-colors whitespace-nowrap"
                        :class="isRouteActive(item.route, item.href)
                            ? 'text-emerald-800 font-bold bg-emerald-50 border border-emerald-200/70'
                            : 'hover:text-emerald-700 hover:bg-slate-50'"
                    >
                        {{ item.name }}
                    </Link>

                    <!-- More Dropdown (Pusat Dokumen, Jurnal, Galeri) -->
                    <div class="relative">
                        <button
                            @click="isMoreDropdownOpen = !isMoreDropdownOpen"
                            class="flex items-center gap-1 px-2.5 py-1.5 rounded-lg hover:text-emerald-700 hover:bg-slate-50 transition cursor-pointer"
                            :class="[
                                isRouteActive('pusat.dokumen', '/pusat-dokumen') ||
                                isRouteActive('jurnal.perkembangan', '/jurnal-perkembangan') ||
                                isRouteActive('public.galeri', '/galeri')
                                    ? 'text-emerald-800 font-bold bg-emerald-50'
                                    : ''
                            ]"
                        >
                            <span>Dokumentasi</span>
                            <svg class="w-3.5 h-3.5 transition-transform" :class="{ 'rotate-180': isMoreDropdownOpen }" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7" />
                            </svg>
                        </button>

                        <!-- Dropdown Menu -->
                        <div
                            v-if="isMoreDropdownOpen"
                            @click="isMoreDropdownOpen = false"
                            class="absolute right-0 mt-2 w-64 bg-white rounded-2xl shadow-xl border border-slate-200 p-2 z-50 text-xs space-y-1"
                        >
                            <Link
                                v-for="sec in secondaryItems"
                                :key="sec.route"
                                :href="route(sec.route)"
                                class="flex items-start gap-2.5 p-2.5 rounded-xl hover:bg-emerald-50/70 transition group"
                            >
                                <div class="w-6 h-6 rounded-md bg-emerald-100/70 text-[#204E38] flex items-center justify-center shrink-0 mt-0.5">
                                    <svg v-if="sec.icon === 'search'" class="w-3.5 h-3.5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z"/></svg>
                                    <svg v-else-if="sec.icon === 'document'" class="w-3.5 h-3.5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12h6m-6 4h6m2 5H7a2 2 0 01-2-2V5a2 2 0 012-2h5.586a1 1 0 01.707.293l5.414 5.414a1 1 0 01.293.707V19a2 2 0 01-2 2z"/></svg>
                                    <svg v-else-if="sec.icon === 'clock'" class="w-3.5 h-3.5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z"/></svg>
                                    <svg v-else-if="sec.icon === 'camera'" class="w-3.5 h-3.5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 9a2 2 0 012-2h.93a2 2 0 001.664-.89l.812-1.22A2 2 0 0110.07 4h3.86a2 2 0 011.664.89l.812 1.22A2 2 0 0018.07 7H19a2 2 0 012 2v9a2 2 0 01-2 2H5a2 2 0 01-2-2V9z"/><circle cx="12" cy="13" r="3" stroke-width="2"/></svg>
                                </div>
                                <div>
                                    <h4 class="font-bold text-slate-900 group-hover:text-[#204E38] transition">{{ sec.name }}</h4>
                                    <p class="text-[11px] text-slate-500 leading-tight">{{ sec.desc }}</p>
                                </div>
                            </Link>
                        </div>
                    </div>
                </nav>

                <!-- Right Action Button: Dukung Implementasi -->
                <div class="flex items-center gap-3">
                    <Link
                        :href="route('dukung.implementasi')"
                        class="px-4 py-2.5 rounded-full bg-emerald-700 hover:bg-emerald-800 text-white text-xs sm:text-sm font-bold transition-all shadow-md shadow-emerald-700/20 hover:shadow-lg flex items-center gap-2 cursor-pointer shrink-0"
                    >
                        <span>Dukung Implementasi</span>
                        <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M14 5l7 7m0 0l-7 7m7-7H3" />
                        </svg>
                    </Link>

                    <!-- Mobile Hamburger Toggle -->
                    <button
                        @click="isMobileMenuOpen = !isMobileMenuOpen"
                        class="xl:hidden p-2 rounded-xl border border-slate-200 text-slate-700 hover:bg-slate-100 transition"
                        aria-label="Toggle Navigation"
                    >
                        <svg v-if="!isMobileMenuOpen" class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16" />
                        </svg>
                        <svg v-else class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12" />
                        </svg>
                    </button>
                </div>
            </div>

            <!-- Mobile Drawer Menu -->
            <div
                v-if="isMobileMenuOpen"
                class="xl:hidden border-t border-slate-200 bg-white px-4 py-6 space-y-4 max-h-[85vh] overflow-y-auto shadow-xl"
            >
                <div class="flex items-center gap-3 p-3 bg-emerald-50/60 rounded-xl border border-emerald-200">
                    <img :src="logo?.uin || '/logo/logouin.svg'" class="h-8 w-auto" alt="UIN SGD" />
                    <div class="text-xs">
                        <span class="block font-bold text-slate-900">UIN Sunan Gunung Djati Bandung</span>
                        <span class="text-emerald-700 font-medium">Inovasi Riset Mahasiswa Independen</span>
                    </div>
                </div>

                <div class="space-y-1 text-sm font-semibold">
                    <span class="text-[11px] font-bold uppercase tracking-wider text-slate-400 px-3 block pt-1">Menu Utama</span>
                    <Link
                        v-for="item in navItems"
                        :key="item.route"
                        :href="route(item.route)"
                        @click="isMobileMenuOpen = false"
                        class="block px-3 py-2.5 rounded-xl transition"
                        :class="isRouteActive(item.route, item.href)
                            ? 'bg-emerald-700 text-white font-bold'
                            : 'text-slate-700 hover:bg-slate-50'"
                    >
                        {{ item.name }}
                    </Link>

                    <span class="text-[11px] font-bold uppercase tracking-wider text-slate-400 px-3 block pt-3">Pusat Dokumentasi</span>
                    <Link
                        v-for="sec in secondaryItems"
                        :key="sec.route"
                        :href="route(sec.route)"
                        @click="isMobileMenuOpen = false"
                        class="flex items-center gap-2.5 px-3 py-2.5 rounded-xl transition"
                        :class="isRouteActive(sec.route, sec.href)
                            ? 'bg-emerald-700 text-white font-bold'
                            : 'text-slate-700 hover:bg-slate-50'"
                    >
                        <span>{{ sec.icon }}</span>
                        <span>{{ sec.name }}</span>
                    </Link>
                </div>

                <div class="pt-4 border-t border-slate-100">
                    <Link
                        :href="route('dukung.implementasi')"
                        @click="isMobileMenuOpen = false"
                        class="w-full py-3 rounded-xl bg-[#204E38] hover:bg-[#19402e] text-white text-center font-bold text-sm block shadow-md"
                    >
                        Dukung Implementasi (Rp26 Jt) &rarr;
                    </Link>
                </div>
            </div>
        </header>

        <!-- 2. MAIN PAGE CONTENT SLOT -->
        <main class="flex-1">
            <slot />
        </main>

        <!-- 3. AUTHORITATIVE FOOTER (FOREST GREEN WITH CAMPUS LOGO) -->
        <footer class="bg-[#204E38] text-white pt-16 pb-12 border-t border-[#1a402e] text-xs">
            <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 space-y-12">
                <!-- Top Row: Dual Logos & Clarification Box -->
                <div class="grid grid-cols-1 lg:grid-cols-12 gap-8 items-start">
                    
                    <!-- Identity & Vision -->
                    <div class="lg:col-span-5 space-y-4">
                        <div class="flex flex-wrap items-center gap-3.5 bg-[#173d2b] p-3.5 rounded-2xl border border-[#2d6e4f] w-fit shadow-xs">
                            <img :src="logo?.full || '/logo/logofull.webp'" alt="SIRAMI" class="h-9 w-auto brightness-125" />
                            <div class="h-7 w-px bg-emerald-600/60"></div>
                            <div class="flex items-center gap-2">
                                <img :src="logo?.uin || '/logo/logouin.svg'" alt="UIN Sunan Gunung Djati Bandung" class="h-9 w-auto" />
                                <div class="text-[11px] leading-tight text-left">
                                    <span class="block font-bold text-white">UIN Sunan Gunung Djati Bandung</span>
                                    <span class="text-emerald-200 font-medium">Inovasi Riset Mahasiswa</span>
                                </div>
                            </div>
                        </div>

                        <p class="text-xs text-emerald-100/90 leading-relaxed max-w-md">
                            <strong>SIRAMI (Sirkular Air, Pangan, dan Ekonomi Komunitas)</strong> merupakan inisiatif platform inovasi sosial mahasiswa berbasis riset yang mengintegrasikan pengolahan air, smart monitoring sensor, pemanfaatan energi, produksi pangan sehat, dan penguatan ekonomi komunitas.
                        </p>

                        <div class="text-[11px] text-emerald-200/80 leading-normal">
                            <span>Karya Inovasi Riset Mahasiswa UIN Sunan Gunung Djati Bandung</span>
                        </div>
                    </div>

                    <!-- Clarification Box: BUKAN MILIK PESANTREN -->
                    <div class="lg:col-span-4 bg-[#173d2b] rounded-2xl p-5 border border-amber-400/40 space-y-2.5 shadow-xs">
                        <div class="flex items-center gap-2 text-amber-300 font-bold text-xs uppercase tracking-wider">
                            <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 16h-1v-4h-1m1-4h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z" />
                            </svg>
                            <span>Klarifikasi Kepemilikan & Status Mitra</span>
                        </div>
                        <p class="text-xs font-bold text-white leading-relaxed">
                            Proyek ini <span class="text-amber-200 underline underline-offset-2">BUKAN milik atau program internal pondok pesantren</span>.
                        </p>
                        <p class="text-[11px] text-emerald-100/80 leading-relaxed">
                            Inisiatif ini digagas dan dikembangkan secara mandiri oleh <strong>Tim Mahasiswa UIN Sunan Gunung Djati Bandung</strong>. Pondok Pesantren Al-Qur'an Hidayatul Mustafid (Kota Tasikmalaya) berkedudukan sebagai <strong>Mitra Lokasi Pelaksanaan Pilot Project & Tempat Uji Coba Lapangan</strong> berdasarkan Surat Pernyataan Dukungan No. 18/X/PPHM/2026.
                        </p>
                    </div>

                    <!-- Sitemap Navigation Links (10 Pages) -->
                    <div class="lg:col-span-3 space-y-3">
                        <h4 class="text-xs font-bold uppercase tracking-wider text-white">Struktur Navigasi</h4>
                        <div class="grid grid-cols-2 gap-2 text-xs">
                            <ul class="space-y-1.5 text-emerald-100/85">
                                <li><Link :href="route('home')" class="hover:text-white transition">Beranda</Link></li>
                                <li><Link :href="route('mengapa.sirami')" class="hover:text-white transition">Mengapa SIRAMI?</Link></li>
                                <li><Link :href="route('solusi')" class="hover:text-white transition">Solusi</Link></li>
                                <li><Link :href="route('riset.bukti')" class="hover:text-white transition">Riset & Bukti</Link></li>
                                <li><Link :href="route('pilot.project')" class="hover:text-white transition">Pilot Project</Link></li>
                            </ul>
                            <ul class="space-y-1.5 text-emerald-100/85">
                                <li><Link :href="route('dampak')" class="hover:text-white transition">Dampak</Link></li>
                                <li><Link :href="route('tim.mitra')" class="hover:text-white transition">Tim & Mitra</Link></li>
                                <li><Link :href="route('dukung.implementasi')" class="text-amber-300 font-semibold hover:underline">Dukung Pilot (Rp26 Jt)</Link></li>
                                <li><Link :href="route('pusat.dokumen')" class="hover:text-white transition">Pusat Dokumen</Link></li>
                                <li><Link :href="route('jurnal.perkembangan')" class="hover:text-white transition">Jurnal Logbook</Link></li>
                            </ul>
                        </div>
                    </div>
                </div>

                <!-- Bottom Copyright Line -->
                <div class="pt-8 border-t border-emerald-800/70 flex flex-col sm:flex-row items-center justify-between gap-4 text-[11px] text-emerald-200/80">
                    <div class="flex items-center gap-2">
                        <img :src="logo?.uin || '/logo/logouin.svg'" class="h-4 w-auto brightness-150" alt="UIN" />
                        <span class="text-white/90">&copy; 2026 SIRAMI System &middot; Inovasi Riset Mahasiswa UIN Sunan Gunung Djati Bandung. Seluruh hak cipta dilindungi.</span>
                    </div>
                    <div class="flex items-center gap-5">
                        <span class="text-emerald-200">Status: Menuju Implementasi Pilot (RAB Rp26 Jt)</span>
                        <Link :href="route('login')" class="text-emerald-200 hover:text-white transition">Portal Internal</Link>
                    </div>
                </div>
            </div>
        </footer>

        <!-- FLOATING SYLS 2026 TRIGGER BUTTON -->
        <aside class="fixed bottom-5 right-5 z-40">
            <button
                @click="isSylsModalOpen = true"
                class="flex items-center gap-2.5 px-3.5 py-2.5 rounded-2xl bg-[#173d2b] hover:bg-[#204E38] text-white border border-emerald-500/50 shadow-xl backdrop-blur-md transition-all hover:scale-105 group cursor-pointer"
                title="Buka Informasi Ide Inovasi untuk SYLS 2026"
            >
                <div class="bg-white p-1 rounded-lg shrink-0 flex items-center justify-center">
                    <img :src="logo?.syls || '/syls.png'" alt="SYLS 2026" class="h-5 w-auto object-contain" />
                </div>
                <div class="text-left text-xs leading-tight">
                    <span class="block font-bold text-amber-300 text-[10px] uppercase font-mono tracking-wider">Proposal Inovasi</span>
                    <span class="font-bold text-white text-[11px] group-hover:text-emerald-300 transition">Diajukan ke SYLS 2026 ↗</span>
                </div>
                <span class="w-2 h-2 rounded-full bg-amber-400 animate-ping ml-0.5"></span>
            </button>
        </aside>

        <!-- SYLS 2026 INTERACTIVE POP-UP MODAL -->
        <div
            v-if="isSylsModalOpen"
            class="fixed inset-0 z-50 bg-[#163828]/85 backdrop-blur-xs flex items-center justify-center p-4 sm:p-6"
            @click.self="isSylsModalOpen = false"
        >
            <div
                class="relative max-w-2xl w-full bg-white rounded-3xl overflow-hidden border border-emerald-900/20 shadow-2xl flex flex-col max-h-[92vh]"
                @click.stop
            >
                <!-- Top Header Gradient with SYLS Official Logo -->
                <div class="relative bg-gradient-to-br from-[#0c2e1f] via-[#133E2B] to-[#0a2016] text-white p-6 sm:p-8 overflow-hidden shrink-0">
                    <!-- Glow decoration -->
                    <div class="absolute -top-16 -right-16 w-52 h-52 rounded-full bg-emerald-500/20 blur-2xl pointer-events-none"></div>
                    <div class="absolute -bottom-16 -left-16 w-52 h-52 rounded-full bg-amber-500/20 blur-2xl pointer-events-none"></div>

                    <!-- Close Button -->
                    <button
                        @click="isSylsModalOpen = false"
                        class="absolute top-4 right-4 w-9 h-9 rounded-full bg-black/40 hover:bg-black/70 text-white font-bold flex items-center justify-center transition cursor-pointer border border-white/20 z-10"
                        title="Tutup Pop-up"
                    >
                        ✕
                    </button>

                    <!-- Header Logos & Badges -->
                    <div class="relative z-10 space-y-4">
                        <div class="flex flex-wrap items-center gap-3">
                            <!-- Official SYLS 2026 Logo Container -->
                            <div class="bg-white p-2.5 rounded-2xl shadow-lg border border-white/80 inline-flex items-center">
                                <img
                                    :src="logo?.syls || '/syls.png'"
                                    alt="Sharia Young Leader Summit 2026 Logo"
                                    class="h-8 sm:h-10 w-auto object-contain"
                                />
                            </div>

                            <span class="text-emerald-400 font-bold text-lg">&times;</span>

                            <!-- UIN SGD Bandung Logo Container -->
                            <div class="bg-white/10 backdrop-blur-xs px-3 py-2 rounded-2xl border border-white/20 inline-flex items-center gap-2">
                                <img
                                    :src="logo?.uin || '/logo/logouin.svg'"
                                    alt="UIN Sunan Gunung Djati Bandung"
                                    class="h-7 w-auto object-contain"
                                />
                                <div class="text-[10px] text-emerald-200 leading-tight">
                                    <span class="block font-bold text-white">UIN Sunan Gunung Djati</span>
                                    <span>Inovasi Mahasiswa</span>
                                </div>
                            </div>
                        </div>

                        <div>
                            <div class="inline-flex items-center gap-1.5 px-3 py-1 rounded-full bg-amber-400/20 text-amber-300 border border-amber-400/40 text-[11px] font-mono font-bold uppercase tracking-wider mb-2">
                                <svg class="w-3.5 h-3.5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12h6m-6 4h6m2 5H7a2 2 0 01-2-2V5a2 2 0 012-2h5.586a1 1 0 01.707.293l5.414 5.414a1 1 0 01.293.707V19a2 2 0 01-2 2z"/></svg>
                                <span>Proposal Inovasi Usulan &middot; Diajukan untuk Sharia Young Leader Summit (SYLS) 2026</span>
                            </div>

                            <h3 class="text-xl sm:text-2xl lg:text-3xl font-black text-white tracking-tight leading-snug">
                                SIRAMI: Inisiatif Sirkular Air, Pangan & Ekonomi Komunitas Pesantren
                            </h3>

                            <p class="text-xs sm:text-sm text-emerald-100/90 mt-1.5 leading-relaxed">
                                Karya inovasi sosial independen usulan mahasiswa UIN Sunan Gunung Djati Bandung yang <strong>diajukan khusus untuk seleksi Sharia Young Leader Summit (SYLS) 2026</strong> (Status: <em>Tahap Pengajuan Proposal &middot; Bukan/Belum Terpilih</em>) guna memadukan rekayasa air wudu terukur, budidaya microgreens bernutrisi tinggi, dan kemandirian wirausaha syariah santri.
                            </p>
                        </div>
                    </div>
                </div>

                <!-- Scrollable Body Content -->
                <div class="p-6 sm:p-8 space-y-5 overflow-y-auto text-xs sm:text-sm text-slate-700 leading-relaxed">
                    <!-- Manifesto Card -->
                    <div class="p-4 rounded-2xl bg-emerald-50/80 border border-emerald-200 text-xs text-emerald-950 space-y-1.5">
                        <div class="flex items-center gap-2 font-bold text-emerald-900 text-xs">
                            <svg class="w-4 h-4 text-emerald-700" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 10V3L4 14h7v7l9-11h-7z"/></svg>
                            <span>Misi Inovasi untuk Program SYLS 2026:</span>
                        </div>
                        <p class="leading-relaxed">
                            Mewujudkan kepemimpinan pemuda Muslim yang tanggap terhadap krisis nyata lingkungan melalui teknologi tepat guna yang terukur, bersahabat dengan kultur pesantren, serta membangun kemandirian ekonomi umat tanpa pemborosan modal.
                        </p>
                    </div>

                    <!-- 3 Core Contribution Pillars for SYLS -->
                    <div class="space-y-3">
                        <span class="text-xs font-bold uppercase tracking-wider text-slate-500 font-mono block">
                            Tiga Pilar Relevansi Program SYLS 2026:
                        </span>

                        <div class="grid grid-cols-1 gap-2.5">
                            <!-- Pilar 1 -->
                            <div class="p-3.5 rounded-xl bg-slate-50 border border-slate-200 flex items-start gap-3">
                                <span class="w-8 h-8 rounded-lg bg-teal-100 text-teal-800 flex items-center justify-center font-bold text-base shrink-0 mt-0.5">
                                    <svg class="w-4 h-4 text-teal-700" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19.428 15.428a2 2 0 00-1.022-.547l-2.387-.477a6 6 0 00-3.86.517l-.318.158a6 6 0 01-3.86.517L6.05 15.21a2 2 0 00-1.806.547M8 4h8l-1 1v5.172a2 2 0 00.586 1.414l5 5c1.26 1.26.367 3.414-1.415 3.414H4.828c-1.782 0-2.674-2.154-1.414-3.414l5-5A2 2 0 009 10.172V5L8 4z"/></svg>
                                </span>
                                <div>
                                    <h4 class="font-bold text-slate-900 text-xs sm:text-sm">
                                        1. Konservasi Air & Thaharah Ramah Lingkungan
                                    </h4>
                                    <p class="text-slate-600 text-xs mt-0.5 leading-relaxed">
                                        Pemanfaatan kembali air bekas wudu (greywater) melalui bio-filtrasi bertahap untuk mengurangi eksploitasi sumur tanah dan menghemat beban listrik pompa hingga Rp900.000/bulan.
                                    </p>
                                </div>
                            </div>

                            <!-- Pilar 2 -->
                            <div class="p-3.5 rounded-xl bg-emerald-50 border border-emerald-200 flex items-start gap-3">
                                <span class="w-8 h-8 rounded-lg bg-emerald-100 text-emerald-800 flex items-center justify-center font-bold text-base shrink-0 mt-0.5">
                                    <svg class="w-4 h-4 text-emerald-700" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 3v4M3 5h4M6 17v4m-2-2h4m5-16l2.286 6.857L21 12l-5.714 2.143L13 21l-2.286-6.857L5 12l5.714-2.143L13 3z"/></svg>
                                </span>
                                <div>
                                    <h4 class="font-bold text-slate-900 text-xs sm:text-sm">
                                        2. Ketahanan Pangan Halal, Thayyib & Bergizi Tinggi
                                    </h4>
                                    <p class="text-slate-600 text-xs mt-0.5 leading-relaxed">
                                        Budidaya sayuran microgreens berumur panen 7-14 hari dengan densitas vitamin dan mineral 4-40x lebih padat dari sayur dewasa, memenuhi kebutuhan gizi santri serta komoditas sehat perkotaan.
                                    </p>
                                </div>
                            </div>

                            <!-- Pilar 3 -->
                            <div class="p-3.5 rounded-xl bg-amber-50 border border-amber-200 flex items-start gap-3">
                                <span class="w-8 h-8 rounded-lg bg-amber-100 text-amber-800 flex items-center justify-center font-bold text-base shrink-0 mt-0.5">
                                    <svg class="w-4 h-4 text-amber-700" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 7h8m0 0v8m0-8l-8 8-4-4-6 6"/></svg>
                                </span>
                                <div>
                                    <h4 class="font-bold text-slate-900 text-xs sm:text-sm">
                                        3. Ekonomi Syariah Sirkular & Akuntabilitas Kas
                                    </h4>
                                    <p class="text-slate-600 text-xs mt-0.5 leading-relaxed">
                                        RAB kas pilot transparan Rp26.000.000 (12 pos belanja terperinci), pembukuan HPP nyata, kemandirian kas santri pascapilot, serta rasio dampak sosial SROI terukur 1 : 2.4.
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Ringkasan Validitas Lokasi & Legalitas -->
                    <div class="grid grid-cols-1 sm:grid-cols-2 gap-3 text-xs pt-1">
                        <div class="p-3 rounded-xl bg-slate-50 border border-slate-200">
                            <span class="text-[10px] text-slate-500 uppercase font-bold tracking-wider block">Mitra Lokasi Pilot Lapangan</span>
                            <span class="font-bold text-slate-900 block mt-0.5">PP Al-Qur'an Hidayatul Mustafid</span>
                            <span class="text-[11px] text-slate-600 block mt-0.5">Kp. Sindangresik, Awipari, Cibeureum, Kota Tasikmalaya (Surat No. 18/X/PPHM/2026)</span>
                        </div>
                        <div class="p-3 rounded-xl bg-slate-50 border border-slate-200">
                            <span class="text-[10px] text-slate-500 uppercase font-bold tracking-wider block">Tim Inovator Penggagas</span>
                            <span class="font-bold text-slate-900 block mt-0.5">Mahasiswa UIN SGD Bandung</span>
                            <span class="text-[11px] text-slate-600 block mt-0.5">Tri Febriansah, Dinar Robiatul Adawiyah, Neng Mariya Ulfa Mardiyah</span>
                        </div>
                    </div>
                </div>

                <!-- Footer Action Buttons -->
                <div class="p-4 sm:p-6 bg-slate-50 border-t border-slate-200 flex flex-col sm:flex-row items-center justify-between gap-3 shrink-0">
                    <div class="flex items-center gap-2 text-xs font-mono text-slate-500">
                        <span class="w-2 h-2 rounded-full bg-amber-500"></span>
                        <span>Status: Diajukan untuk SYLS 2026 (Tahap Pengajuan &middot; Belum Terpilih)</span>
                    </div>

                    <div class="flex flex-wrap items-center gap-2 w-full sm:w-auto">
                        <Link
                            :href="route('pilot.project')"
                            @click="isSylsModalOpen = false"
                            class="px-4 py-2 rounded-xl bg-emerald-700 hover:bg-emerald-800 text-white font-bold text-xs transition flex items-center gap-1.5 shadow-sm"
                        >
                            <span>Pelajari Pilot Project</span>
                            <span>&rarr;</span>
                        </Link>
                        <button
                            @click="isSylsModalOpen = false"
                            class="px-4 py-2 rounded-xl bg-white hover:bg-slate-100 text-slate-700 font-bold text-xs border border-slate-200 transition cursor-pointer"
                        >
                            Lanjutkan Eksplorasi
                        </button>
                    </div>
                </div>
            </div>
        </div>
    </div>
</template>
