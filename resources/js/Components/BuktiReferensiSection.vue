<script setup>
import { Link } from '@inertiajs/vue3';
import { ref } from 'vue';

const props = defineProps({
    data: {
        type: Object,
        default: null,
    },
    standalone: {
        type: Boolean,
        default: false,
    },
    showContainer: {
        type: Boolean,
        default: true,
    },
});

const defaultItems = [
    {
        number: 1,
        title: 'Data dan Kondisi Eksisting',
        description: 'Profil lokasi, sumber air, fasilitas, dan survei kebutuhan.',
        icon: 'document',
        category_slug: 'profil-lokasi',
        related_doc: 'DOC-02',
    },
    {
        number: 2,
        title: 'Hasil Uji Kualitas Air',
        description: 'Hasil pengujian sebelum dan sesudah pengolahan.',
        icon: 'beaker',
        category_slug: 'kualitas-air',
        related_doc: 'DOC-03',
    },
    {
        number: 3,
        title: 'Instrumen Survei dan Pengumpulan Data',
        description: 'Kuesioner, panduan wawancara, dan observasi.',
        icon: 'clipboard',
        category_slug: 'instrumen-survei',
        related_doc: 'DOC-02',
    },
    {
        number: 4,
        title: 'Desain Teknis dan SOP',
        description: 'Diagram sistem, alur kerja, SOP operasional dan perawatan.',
        icon: 'gear',
        category_slug: 'desain-teknis',
        related_doc: 'DOC-03',
    },
    {
        number: 5,
        title: 'Penawaran Harga dan RAB Pendukung',
        description: 'Penawaran alat, bahan, dan kebutuhan instalasi.',
        icon: 'coins',
        category_slug: 'rab-anggaran',
        related_doc: 'DOC-04',
    },
    {
        number: 6,
        title: 'Surat Dukungan dan Komitmen',
        description: 'Dukungan pesantren, mitra, dan pihak terkait.',
        icon: 'people',
        category_slug: 'dokumen-mitra',
        related_doc: 'DOC-01',
    },
    {
        number: 7,
        title: 'Dokumentasi Kegiatan dan Partisipasi',
        description: 'Foto diskusi, pelatihan, uji coba, dan kegiatan budidaya.',
        icon: 'camera',
        category_slug: 'dokumentasi-foto',
        related_doc: 'DOC-02',
    },
    {
        number: 8,
        title: 'Referensi dan Pustaka',
        description: 'Literatur, standar teknis, dan sumber data.',
        icon: 'book',
        category_slug: 'referensi-regulasi',
        related_doc: 'DOC-05',
    },
];

const items = props.data?.items || defaultItems;
const title = props.data?.title || 'Bukti, Referensi, dan Lampiran';
const subtitle = props.data?.subtitle || 'Daftar dokumen pendukung tersedia di sini; rincian lengkap dapat diakses melalui website SIRAMI.';
const shortUrl = props.data?.short_url || 'sirami.ihi.my.id/bukti-referensi';
const fullUrl = props.data?.full_url || 'https://sirami.ihi.my.id/bukti-referensi';
const qrImage = props.data?.qr_image || '/qr-bukti-referensi.svg';

const activeItem = ref(null);

function copyLink() {
    if (typeof navigator !== 'undefined' && navigator.clipboard) {
        navigator.clipboard.writeText(fullUrl);
        alert('Tautan bukti referensi berhasil disalin: ' + fullUrl);
    }
}
</script>

<template>
    <section :class="showContainer ? 'py-12 sm:py-16 bg-[#FAFCFA] border-b border-slate-200/80' : ''">
        <div :class="showContainer ? 'max-w-7xl mx-auto px-4 sm:px-6 lg:px-8' : ''">
            
            <!-- Section Header (Sesuai Gambar Referensi) -->
            <div class="mb-8 sm:mb-12">
                <h2 class="text-3xl sm:text-4xl lg:text-[42px] font-black text-[#133E2B] tracking-tight leading-[1.15]">
                    {{ title }}
                </h2>
                <p class="text-sm sm:text-base text-[#38664B] font-medium mt-2.5 max-w-3xl leading-relaxed">
                    {{ subtitle }}
                </p>
            </div>

            <!-- Two-Column Grid: 8 Items (Kiri) & Online Access Card with QR (Kanan) -->
            <div class="grid grid-cols-1 lg:grid-cols-12 gap-8 lg:gap-12 items-start">
                
                <!-- Left Column: 8 Numbered Rows Sesuai Gambar -->
                <div class="lg:col-span-7 bg-white rounded-3xl p-5 sm:p-7 border border-[#D5E5DA] shadow-xs divide-y divide-[#E2EBE5]">
                    <div
                        v-for="item in items"
                        :key="item.number"
                        class="py-3.5 sm:py-4 first:pt-1 last:pb-1 group transition"
                    >
                        <div class="flex items-start gap-3.5 sm:gap-4.5">
                            <!-- Circular Number Badge (Background Mint Muda) -->
                            <div class="w-9 h-9 sm:w-10 sm:h-10 rounded-full bg-[#E5EFE8] text-[#133E2B] font-black text-sm sm:text-base flex items-center justify-center shrink-0 shadow-2xs group-hover:bg-[#D4E8DA] transition">
                                {{ item.number }}
                            </div>

                            <!-- Circular Icon Badge (Matching Icon) -->
                            <div class="w-9 h-9 sm:w-10 sm:h-10 rounded-full bg-[#EEF5F0] text-[#133E2B] flex items-center justify-center shrink-0 group-hover:bg-emerald-100 transition">
                                <!-- 1. Document -->
                                <svg v-if="item.icon === 'document'" class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12h6m-6 4h6m2 5H7a2 2 0 01-2-2V5a2 2 0 012-2h5.586a1 1 0 01.707.293l5.414 5.414a1 1 0 01.293.707V19a2 2 0 01-2 2z" />
                                </svg>

                                <!-- 2. Chemistry Beaker / Flask -->
                                <svg v-else-if="item.icon === 'beaker'" class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19.428 15.428a2 2 0 00-1.022-.547l-2.387-.477a6 6 0 00-3.86.517l-.318.158a6 6 0 01-3.86.517L6.05 15.21a2 2 0 00-1.806.547M8 4h8l-1 1v5.172a2 2 0 00.586 1.414l5 5c1.26 1.26.367 3.414-1.415 3.414H4.828c-1.782 0-2.674-2.154-1.414-3.414l5-5A2 2 0 009 10.172V5L8 4z" />
                                </svg>

                                <!-- 3. Clipboard Checklist -->
                                <svg v-else-if="item.icon === 'clipboard'" class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5H7a2 2 0 00-2 2v12a2 2 0 002 2h10a2 2 0 002-2V7a2 2 0 00-2-2h-2M9 5a2 2 0 002 2h2a2 2 0 002-2M9 5a2 2 0 012-2h2a2 2 0 012 2m-6 9l2 2 4-4" />
                                </svg>

                                <!-- 4. Gear Settings -->
                                <svg v-else-if="item.icon === 'gear'" class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10.325 4.317c.426-1.756 2.924-1.756 3.35 0a1.724 1.724 0 002.573 1.066c1.543-.94 3.31.826 2.37 2.37a1.724 1.724 0 001.065 2.572c1.756.426 1.756 2.924 0 3.35a1.724 1.724 0 00-1.066 2.573c.94 1.543-.826 3.31-2.37 2.37a1.724 1.724 0 00-2.572 1.065c-.426 1.756-2.924 1.756-3.35 0a1.724 1.724 0 00-2.573-1.066c-1.543.94-3.31-.826-2.37-2.37a1.724 1.724 0 00-1.065-2.572c-1.756-.426-1.756-2.924 0-3.35a1.724 1.724 0 001.066-2.573c-.94-1.543.826-3.31 2.37-2.37.996.608 2.296.07 2.572-1.065z" />
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 12a3 3 0 11-6 0 3 3 0 016 0z" />
                                </svg>

                                <!-- 5. Coins / Money -->
                                <svg v-else-if="item.icon === 'coins'" class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8c-1.657 0-3 .895-3 2s1.343 2 3 2 3 .895 3 2-1.343 2-3 2m0-8c1.11 0 2.08.402 2.599 1M12 8V7m0 1v8m0 0v1m0-1c-1.11 0-2.08-.402-2.599-1M21 12a9 9 0 11-18 0 9 9 0 0118 0z" />
                                </svg>

                                <!-- 6. People / Community -->
                                <svg v-else-if="item.icon === 'people'" class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 20h5v-2a3 3 0 00-5.356-1.857M17 20H7m10 0v-2c0-.656-.126-1.283-.356-1.857M7 20H2v-2a3 3 0 015.356-1.857M7 20v-2c0-.656.126-1.283.356-1.857m0 0a5.002 5.002 0 019.288 0M15 7a3 3 0 11-6 0 3 3 0 016 0zm6 3a2 2 0 11-4 0 2 2 0 014 0zM7 10a2 2 0 11-4 0 2 2 0 014 0z" />
                                </svg>

                                <!-- 7. Camera -->
                                <svg v-else-if="item.icon === 'camera'" class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 9a2 2 0 012-2h.93a2 2 0 001.664-.89l.812-1.22A2 2 0 0110.07 4h3.86a2 2 0 011.664.89l.812 1.22A2 2 0 0018.07 7H19a2 2 0 012 2v9a2 2 0 01-2 2H5a2 2 0 01-2-2V9z" />
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 13a3 3 0 11-6 0 3 3 0 016 0z" />
                                </svg>

                                <!-- 8. Book -->
                                <svg v-else class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 6.253v13m0-13C10.832 5.477 9.246 5 7.5 5S4.168 5.477 3 6.253v13C4.168 18.477 5.754 18 7.5 18s3.332.477 4.5 1.253m0-13C13.168 5.477 14.754 5 16.5 5c1.747 0 3.332.477 4.5 1.253v13C19.832 18.477 18.247 18 16.5 18c-1.746 0-3.332.477-4.5 1.253" />
                                </svg>
                            </div>

                            <!-- Text Content -->
                            <div class="min-w-0 flex-1">
                                <h3 class="font-bold text-[#143E2B] text-sm sm:text-base group-hover:text-emerald-700 transition leading-snug">
                                    {{ item.title }}
                                </h3>
                                <p class="text-xs sm:text-sm text-slate-500 mt-0.5 leading-relaxed">
                                    {{ item.description }}
                                </p>

                                <!-- Expandable Details (Optional) -->
                                <div v-if="item.details && item.details.length" class="mt-2 text-xs text-slate-600 bg-emerald-50/50 p-2.5 rounded-xl border border-emerald-100 hidden group-hover:block transition-all">
                                    <ul class="space-y-1 list-disc list-inside">
                                        <li v-for="(detail, didx) in item.details" :key="didx">
                                            {{ detail }}
                                        </li>
                                    </ul>
                                </div>
                            </div>

                            <!-- Quick Action Link -->
                            <Link
                                :href="route('bukti.referensi')"
                                class="text-slate-300 group-hover:text-emerald-700 text-xs font-bold shrink-0 self-center transition hidden sm:block"
                                title="Buka rincian dokumen"
                            >
                                <span>&rarr;</span>
                            </Link>
                        </div>
                    </div>
                </div>

                <!-- Right Column: Dedicated Online Access Card with QR Code (Sesuai Gambar Persis) -->
                <div class="lg:col-span-5 sticky top-28">
                    <div class="bg-[#F4F9F5] rounded-3xl p-6 sm:p-8 border border-[#D5E5DA] shadow-xs flex flex-col items-center text-center">
                        
                        <!-- Top Document Icon in Rounded Badge -->
                        <div class="w-13 h-13 rounded-2xl bg-white border border-[#D5E5DA] flex items-center justify-center text-[#133E2B] shadow-2xs mb-4">
                            <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12h6m-6 4h6m2 5H7a2 2 0 01-2-2V5a2 2 0 012-2h5.586a1 1 0 01.707.293l5.414 5.414a1 1 0 01.293.707V19a2 2 0 01-2 2z" />
                            </svg>
                        </div>

                        <!-- Card Headline -->
                        <h3 class="text-xl sm:text-2xl font-black text-[#133E2B] tracking-tight leading-snug max-w-[270px]">
                            Lihat detail dan dokumen lengkap secara online
                        </h3>

                        <!-- Small Accent Bar (Hijau Daun) -->
                        <div class="w-12 h-1 bg-[#4C805D] rounded-full my-4"></div>

                        <!-- URL Pill with External Icon (Click to Copy or Open) -->
                        <a
                            :href="fullUrl"
                            target="_blank"
                            class="inline-flex items-center justify-center gap-2 px-4 py-2 rounded-xl bg-white border border-[#C6DDD0] text-[#133E2B] text-xs sm:text-sm font-bold shadow-2xs hover:border-emerald-600 hover:shadow-xs transition cursor-pointer mb-5 group"
                            title="Buka alamat URL dokumen"
                        >
                            <span>{{ shortUrl }}</span>
                            <svg class="w-4 h-4 text-[#4C805D] group-hover:translate-x-0.5 group-hover:-translate-y-0.5 transition-transform" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 6H6a2 2 0 00-2 2v10a2 2 0 002 2h10a2 2 0 002-2v-4M14 4h6m0 0v6m0-6L10 14" />
                            </svg>
                        </a>

                        <!-- QR Code Container -->
                        <div class="bg-white p-3 rounded-2xl border border-[#D5E5DA] shadow-sm mb-3">
                            <img
                                :src="qrImage"
                                :alt="'QR Code ' + shortUrl"
                                class="w-44 h-44 sm:w-52 sm:h-52 object-contain"
                            />
                        </div>

                        <!-- Sub-text URL under QR Code -->
                        <a
                            :href="fullUrl"
                            target="_blank"
                            class="text-[11px] sm:text-xs text-slate-500 font-mono tracking-tight hover:text-emerald-800 transition mb-5 block break-all"
                        >
                            {{ fullUrl }}
                        </a>

                        <!-- Bottom Pill Button (Scan QR to Open) -->
                        <a
                            :href="fullUrl"
                            class="w-full max-w-xs py-3 px-4 rounded-2xl bg-[#143E2B] hover:bg-[#0E2D1E] text-white text-xs sm:text-sm font-bold flex items-center justify-between shadow-md shadow-emerald-950/20 transition cursor-pointer group"
                        >
                            <span class="w-7 h-7 rounded-full bg-white/10 flex items-center justify-center text-white shrink-0">
                                <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 18h.01M8 21h8a2 2 0 002-2V5a2 2 0 00-2-2H8a2 2 0 00-2 2v14a2 2 0 002 2z" />
                                </svg>
                            </span>
                            <span>Pindai QR untuk membuka website</span>
                            <span class="text-emerald-300 group-hover:translate-x-1 transition-transform">&rarr;</span>
                        </a>
                    </div>
                </div>

            </div>
        </div>
    </section>
</template>
