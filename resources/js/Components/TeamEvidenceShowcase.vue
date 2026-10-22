<script setup>
import { ref } from 'vue';

const props = defineProps({
    evidence: {
        type: Array,
        default: () => [],
    },
});

const defaultEvidence = [
    {
        title: 'Juara 2 KKN Konversi Terbaik UIN SGD Bandung 2026',
        category: 'Prestasi & Pengabdian Masyarakat',
        event: 'Ekspose Hasil KKN Inovatif Berbasis Ekoteologi',
        organizer: 'LP2M UIN Sunan Gunung Djati Bandung',
        date: '19–20 Oktober 2026',
        location: 'Aula Anwar Musaddad, Kampus 1 UIN Bandung',
        src: '/tim/kkn.jpeg',
        desc: 'Tim mahasiswa UIN SGD Bandung (Tri Febriansah, Dinar Robiatul Adawiyah, Neng Mariya Ulfa Mardiyah) meraih Juara 2 KKN Konversi Terbaik atas program aksi kolaboratif di Desa Purbayani.',
        badge: 'Juara 2 LP2M UIN',
        badge_color: 'amber',
    },
    {
        title: 'Finalis Forum Pangan & Sains (FP Sains) 2026 by Pertamina',
        category: 'Kompetisi Riset Terapan Nasional',
        event: 'Desk Evaluation Forum Pangan & Sains 2026 Pertamina',
        organizer: 'PT Pertamina (Persero)',
        date: 'Oktober 2026',
        location: 'Sesi Penjurian Daring Nasional',
        src: '/tim/fpsains2.jpeg',
        desc: 'Tri Febriansah dan Neng Mariya Ulfa Mardiyah berhasil melaju ke babak Desk Evaluation Grup D di hadapan dewan juri PT Pertamina (Persero) dalam inovasi ketahanan pangan dan sains terapan.',
        badge: 'Finalis Pertamina 2026',
        badge_color: 'emerald',
    },
    {
        title: 'Sesi Pengujian Prototipe Laboratorium Sains UIN',
        category: 'Validasi Teknis & Kalibrasi',
        event: 'Demonstrasi Prototipe Terpadu SIRAMI',
        organizer: 'Laboratorium Terpadu UIN SGD Bandung',
        date: 'Oktober 2026',
        location: 'Laboratorium Sains UIN Bandung',
        src: '/tim/fpsains.jpeg',
        desc: 'Demonstrasi langsung sistem saluran air, pengujian tray microgreen berinstrumen sensor, dan pengukuran suhu digital Fislum untuk memastikan stabilitas sistem sebelum diterapkan di lapangan.',
        badge: 'Uji Lab Terkalibrasi',
        badge_color: 'blue',
    },
    {
        title: 'Kit Tenaga Surya Mandiri (Off-Grid Solar Energy)',
        category: 'Infrastruktur Energi Ramah Lingkungan',
        event: 'Sistem Pembangkit Listrik Tenaga Surya Mandiri',
        organizer: 'Tim Rekayasa Teknologi SIRAMI',
        date: 'Oktober 2026',
        location: 'Workshop Perakitan Mandiri',
        src: '/tim/panelsurya.jpeg',
        desc: 'Panel surya monokristalin lengkap dengan solar charge controller, MCB pengaman, baterai penyimpanan, dan inverter 220W disiapkan untuk menggerakkan pompa dan sensor tanpa membebani biaya listrik pesantren.',
        badge: 'Energi Hijau 100%',
        badge_color: 'teal',
    },
    {
        title: 'Tray Budidaya Microgreens Bersih Siap Semai',
        category: 'Fasilitas Pangan Bergizi Santri',
        event: 'Persiapan Unit Produksi Pangan Cepat Panen',
        organizer: 'Tim Produksi & Operasional SIRAMI',
        date: 'Oktober 2026',
        location: 'Sentra Budidaya Tasikmalaya',
        src: '/tim/traymicrogreen.jpeg',
        desc: 'Baki tray hidroponik 2 tingkat (reservoir penampung air di bawah dan grid berpori untuk semai benih) higienis bebas tanah, disiapkan untuk siklus panen microgreens rutin santri.',
        badge: 'Fasilitas Siap Pakai',
        badge_color: 'emerald',
    },
];

const items = props.evidence && props.evidence.length > 0 ? props.evidence : defaultEvidence;

const selectedImage = ref(null);

function openImage(item) {
    selectedImage.value = item;
}

function closeImage() {
    selectedImage.value = null;
}
</script>

<template>
    <section id="bukti-rekam-jejak" class="py-12 bg-white border-t border-[#E8E9E2]">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 space-y-8">
            
            <!-- Section Header -->
            <div class="flex flex-col md:flex-row md:items-end justify-between gap-4">
                <div class="space-y-2 max-w-3xl">
                    <div class="flex items-center gap-2">
                        <span class="inline-flex items-center gap-2 px-3 py-1 rounded-full bg-emerald-50 text-[#204E38] font-mono text-xs font-bold border border-emerald-200 uppercase tracking-wider">
                            <span class="w-2 h-2 rounded-full bg-[#204E38]"></span>
                            <span>Validasi Empiris &middot; Rekam Jejak & Perangkat Nyata</span>
                        </span>
                        <span class="text-xs font-bold text-slate-500 font-mono hidden sm:inline">
                            5 Bukti Fisik
                        </span>
                    </div>

                    <h3 class="text-2xl sm:text-3xl font-black text-[#26312B] tracking-tight">
                        Dokumentasi Rekam Jejak, Prestasi & Kesiapan Fasilitas
                    </h3>

                    <p class="text-xs sm:text-sm text-slate-600 leading-relaxed">
                        Bukan sekadar rancangan teoretis di atas kertas. Inovasi SIRAMI didukung oleh rekam jejak juara pengabdian masyarakat LP2M UIN Bandung, finalis riset nasional Pertamina, uji laboratorium terkalibrasi, hingga kesiapan perangkat fisik tenaga surya dan tray budidaya.
                    </p>
                </div>

                <div class="shrink-0 flex items-center gap-2">
                    <span class="text-xs text-slate-500 font-medium hidden lg:inline">Klik foto untuk melihat resolusi penuh</span>
                </div>
            </div>

            <!-- Evidence Cards Grid -->
            <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-6">
                <div
                    v-for="(item, idx) in items"
                    :key="idx"
                    @click="openImage(item)"
                    class="bg-white rounded-3xl border border-[#E8E9E2] overflow-hidden shadow-xs hover:border-[#204E38] hover:shadow-xl transition-all duration-300 flex flex-col justify-between group cursor-pointer"
                >
                    <div class="space-y-4">
                        <!-- Image Container with Aspect Ratio -->
                        <div class="aspect-[4/3] bg-[#163828] relative overflow-hidden">
                            <img
                                :src="item.src"
                                :alt="item.title"
                                class="w-full h-full object-cover group-hover:scale-105 transition-transform duration-500"
                                loading="lazy"
                            />
                            <div class="absolute inset-0 bg-gradient-to-t from-[#163828]/85 via-transparent to-transparent opacity-80 group-hover:opacity-60 transition-opacity"></div>
                            
                            <!-- Top Badge -->
                            <div class="absolute top-3 left-3 right-3 flex items-center justify-between">
                                <span
                                    class="px-2.5 py-1 rounded-lg text-[10px] font-bold uppercase tracking-wider shadow-xs backdrop-blur-md"
                                    :class="item.badge_color === 'amber' ? 'bg-amber-600/95 text-white' : item.badge_color === 'blue' ? 'bg-[#356B61] text-white' : item.badge_color === 'teal' ? 'bg-[#204E38] text-white' : 'bg-[#204E38] text-white'"
                                >
                                    {{ item.badge }}
                                </span>
                                <span class="w-7 h-7 rounded-full bg-[#163828]/80 text-white flex items-center justify-center text-xs opacity-0 group-hover:opacity-100 transition-opacity border border-white/20">
                                    <svg class="w-3.5 h-3.5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0zM10 7v6m3-3H7" /></svg>
                                </span>
                            </div>

                            <!-- Bottom Image Caption -->
                            <div class="absolute bottom-3 left-3 right-3 text-white">
                                <span class="text-[10px] font-mono uppercase tracking-wider text-emerald-300 block">
                                    {{ item.category }}
                                </span>
                                <span class="text-xs font-bold line-clamp-1">
                                    {{ item.event }}
                                </span>
                            </div>
                        </div>

                        <!-- Content Details -->
                        <div class="p-5 pt-0 space-y-2.5">
                            <h4 class="text-sm font-bold text-[#26312B] group-hover:text-[#204E38] transition leading-snug">
                                {{ item.title }}
                            </h4>

                            <p class="text-xs text-slate-600 leading-relaxed line-clamp-3">
                                {{ item.desc }}
                            </p>

                            <div class="pt-2 border-t border-[#E8E9E2] flex items-center justify-between text-[11px] text-slate-500">
                                <span class="flex items-center gap-1.5 font-medium">
                                    <svg class="w-3.5 h-3.5 text-slate-400" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 7V3m8 4V3m-9 8h10M5 21h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v12a2 2 0 002 2z" /></svg>
                                    <span>{{ item.date }}</span>
                                </span>
                                <span class="font-mono text-[#204E38] font-bold flex items-center gap-1">
                                    <span>Lihat Detail</span>
                                    <span>&rarr;</span>
                                </span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Lightbox / Detail Modal -->
            <div
                v-if="selectedImage"
                class="fixed inset-0 z-50 bg-[#163828]/90 backdrop-blur-xs flex items-center justify-center p-4 sm:p-6"
                @click.self="closeImage"
            >
                <div class="relative max-w-4xl w-full bg-white rounded-3xl overflow-hidden border border-white/20 shadow-2xl flex flex-col lg:flex-row max-h-[90vh]">
                    <!-- Image Preview -->
                    <div class="lg:w-3/5 bg-[#163828] flex items-center justify-center p-4 relative min-h-[300px]">
                        <img
                            :src="selectedImage.src"
                            :alt="selectedImage.title"
                            class="max-h-[75vh] w-auto max-w-full object-contain rounded-xl"
                        />
                        <button
                            @click="closeImage"
                            type="button"
                            class="lg:hidden absolute top-3 right-3 w-8 h-8 rounded-full bg-[#163828]/80 text-white flex items-center justify-center text-sm border border-white/20"
                            aria-label="Tutup"
                        >
                            ✕
                        </button>
                    </div>

                    <!-- Details Sidebar -->
                    <div class="lg:w-2/5 p-6 sm:p-8 flex flex-col justify-between space-y-5 overflow-y-auto bg-[#F7F5EF]">
                        <div class="space-y-4">
                            <div class="flex items-center justify-between">
                                <span class="text-[10px] font-mono uppercase tracking-wider px-2.5 py-1 rounded bg-[#204E38]/10 text-[#204E38] font-bold border border-[#204E38]/20">
                                    {{ selectedImage.category }}
                                </span>
                                <button
                                    @click="closeImage"
                                    type="button"
                                    class="hidden lg:flex w-8 h-8 rounded-full bg-white hover:bg-slate-100 text-slate-700 items-center justify-center text-sm border border-[#E8E9E2] cursor-pointer"
                                    aria-label="Tutup"
                                >
                                    ✕
                                </button>
                            </div>

                            <div>
                                <h3 class="text-base sm:text-lg font-black text-[#26312B] leading-snug">
                                    {{ selectedImage.title }}
                                </h3>
                                <p class="text-xs text-slate-600 mt-2 leading-relaxed">
                                    {{ selectedImage.desc }}
                                </p>
                            </div>

                            <div class="p-4 rounded-2xl bg-white border border-[#E8E9E2] space-y-2 text-xs">
                                <div class="flex items-start gap-2">
                                    <strong class="text-[#26312B] shrink-0">Kegiatan:</strong>
                                    <span class="text-slate-600">{{ selectedImage.event }}</span>
                                </div>
                                <div v-if="selectedImage.organizer" class="flex items-start gap-2">
                                    <strong class="text-[#26312B] shrink-0">Penyelenggara:</strong>
                                    <span class="text-slate-600">{{ selectedImage.organizer }}</span>
                                </div>
                                <div class="flex items-start gap-2">
                                    <strong class="text-[#26312B] shrink-0">Waktu:</strong>
                                    <span class="text-slate-600">{{ selectedImage.date }}</span>
                                </div>
                                <div class="flex items-start gap-2">
                                    <strong class="text-[#26312B] shrink-0">Lokasi:</strong>
                                    <span class="text-slate-600">{{ selectedImage.location }}</span>
                                </div>
                            </div>
                        </div>

                        <div class="pt-4 border-t border-[#E8E9E2] flex items-center justify-between">
                            <span class="text-[11px] text-slate-500">Tim Mahasiswa UIN SGD Bandung</span>
                            <button
                                @click="closeImage"
                                type="button"
                                class="px-5 py-2.5 rounded-xl bg-[#204E38] hover:bg-[#163828] text-white font-bold text-xs transition cursor-pointer shadow-xs"
                            >
                                Tutup
                            </button>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </section>
</template>
