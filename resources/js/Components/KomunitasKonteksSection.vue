<script setup>
import { ref } from 'vue';

const props = defineProps({
    data: {
        type: Object,
        default: () => null,
    },
});

const defaultData = {
    title: 'Komunitas & Konteks',
    subtitle: 'Pesantren sebagai titik awal model pengelolaan air, pangan, dan ekonomi sirkular.',
    description: "Pondok Pesantren Al-Qur'an Hidayatul Mustafid di Tasikmalaya dipilih karena kebutuhan nyata, potensi sumber daya yang besar, komitmen pengelola, serta kesesuaian dengan model yang akan dikembangkan.",
    location: {
        name: "Pondok Pesantren Al-Qur'an Hidayatul Mustafid",
        address: 'Kp. Sindangresik, Kel. Awipari, Kec. Cibeureum, Kota Tasikmalaya, Jawa Barat',
        map_label: 'Kota Tasikmalaya',
        coordinates: {
            lat: -7.348333883307857,
            lng: 108.27008019447703,
            formatted: '-7.348334, 108.270080',
            dms: '7°20\'54.0"S 108°16\'12.3"E',
        },
        google_maps_url: 'https://www.google.com/maps?q=-7.348333883307857,108.27008019447703',
        google_maps_directions: 'https://www.google.com/maps/dir/?api=1&destination=-7.348333883307857,108.27008019447703',
        google_maps_embed: 'https://maps.google.com/maps?q=-7.348333883307857,108.27008019447703&t=k&z=18&ie=UTF8&iwloc=&output=embed',
        photo: '/foto/pimpinan pesantreen/WhatsApp Image 2026-10-22 at 00.03.21.webp',
        characteristics: [
            'Lingkungan pesantren yang terpusat',
            'Banyak aktivitas santri setiap hari',
            'Tersedia lahan produktif dan ekosistem ekonomi sirkular',
            'Didukung pimpinan pesantren dan pengelola lokal',
        ],
    },
    video_survey: {
        title: 'Video Dokumentasi Observasi Fisik Lapangan',
        subtitle: 'Survei Langsung Sumber Air, Bak IPAL, Toren & Lingkungan Pesantren',
        video_url: '/video-survey.mp4',
        fallback_url: '/video sruvey.mp4',
        poster: '/foto/kosndisi pesantree/torenair.webp',
        duration: '00:23',
        file_size: '17.1 MB',
        resolution: '1080p Full HD',
        location_tag: 'Kp. Sindangresik, Awipari, Cibeureum, Kota Tasikmalaya',
        description: 'Rekaman video observasi fisik di lokasi mitra pilot project oleh Tim Inovator SIRAMI (Mahasiswa UIN Sunan Gunung Djati Bandung) untuk meninjau bak penampungan air bekas wudu, sumur bor, jalur perpipaan, dan pekarangan terbuka pesantren.',
    },
    productive_potential: {
        land_area: '±350 bata',
        land_sub: 'lahan pertanian & peternakan (informasi awal)',
        photo: '/foto/survei/WhatsApp Image 2026-10-21 at 23.38.04 (2).webp',
        commodities: [
            { name: 'Buah naga', icon: 'sprout', photo: '/foto/kosndisi pesantree/buahnaga.webp' },
            { name: 'Semangka', icon: 'sprout', photo: null },
            { name: 'Cabai rawit', icon: 'sprout', photo: null },
            { name: 'Entog', icon: 'leaf', photo: null },
            { name: 'Lele', icon: 'droplet', photo: '/foto/kosndisi pesantree/lele.webp' },
            { name: 'Maggot', icon: 'recycle', photo: '/foto/kosndisi pesantree/Magot.webp' },
            { name: 'Kambing', icon: 'leaf', photo: null },
        ],
    },
    water_infrastructure: {
        stats: [
            { value: '±200–300', unit: 'santri/penghuni', note: 'Perlu verifikasi jumlah aktual', icon: 'users' },
            { value: '>5', unit: 'area wudu', note: 'Penggunaan air harian tinggi', icon: 'droplet' },
            { value: '±20', unit: 'kamar mandi/WC', note: 'Menunjukkan kebutuhan air sanitasi yang besar', icon: 'faucet' },
            { value: '2', unit: 'dapur umum', note: 'Kebutuhan air untuk memasak dan kebersihan', icon: 'home' },
        ],
        water_source: {
            type: 'Sumur bor dengan pompa listrik',
            cost_estimate: 'Biaya listrik sekitar Rp2.000.000/bulan',
            cost_note: '(informasi awal, perlu konfirmasi cakupan dan volume)',
        },
        greywater: {
            title: 'Air Non Kakus Berpotensi Dimanfaatkan',
            description: 'Terdapat saluran dan tampungan air bekas wudu serta IPAL. Air non kakus ini belum dimanfaatkan secara optimal dan berpotensi untuk diolah sesuai hasil uji kualitas.',
        },
    },
    community_profile: {
        title: 'Profil dan Karakteristik Masyarakat',
        points: [
            'Komunitas santri dengan aktivitas harian yang teratur',
            'Kebutuhan pangan tinggi untuk konsumsi sehari-hari',
            'Terdapat pengelola lokal untuk kebun, peternakan, dan IPAL',
            'Budaya kolektif dan terbuka terhadap inovasi yang bermanfaat',
            'Dukungan dan komitmen dari pimpinan pesantren (surat dukungan tersedia)',
        ],
    },
    environment_photos: [
        {
            caption: 'Fasilitas Air & Sanitasi',
            sub: 'Tempat air & area sanitasi',
            src: '/foto/kosndisi pesantree/tempatair.webp',
        },
        {
            caption: 'Lahan IPAL & Pekarangan',
            sub: 'Saluran limbah & lahan terbuka',
            src: '/foto/kosndisi pesantree/ipaldanlahan untuk treatmentair dan praktik microgreen.webp',
        },
        {
            caption: 'Aktivitas Santri & Edukasi',
            sub: 'Ruang belajar & kegiatan santri',
            src: '/foto/kosndisi pesantree/santri.webp',
        },
    ],
    opportunities: {
        title: 'Peluang Pengembangan',
        items: [
            { title: 'Efisiensi penggunaan air', icon: 'droplet' },
            { title: 'Budidaya microgreen & sayuran', icon: 'sprout' },
            { title: 'Edukasi lingkungan dan gizi', icon: 'users' },
            { title: 'Ekonomi sirkular berbasis pesantren', icon: 'trending-up' },
        ],
    },
    team_network: {
        title: 'Pengalaman, Kompetensi, dan Jejaring Tim',
        pillars: [
            {
                icon: 'lightbulb',
                title: 'Riset & Pengembangan',
                desc: 'Pengalaman riset dan pengembangan di bidang air dan pertanian',
            },
            {
                icon: 'cog',
                title: 'Kompetensi Teknis',
                desc: 'Kompetensi teknis: pengelolaan air, budidaya tanaman, dan monitoring',
            },
            {
                icon: 'globe',
                title: 'Jejaring Wilayah',
                desc: 'Jejaring di Tasikmalaya dan lingkungan pesantren',
            },
            {
                icon: 'handshake',
                title: 'Akses Kemitraan',
                desc: 'Akses mitra (pesantren, komunitas, sektor pendidikan, dan agritech)',
            },
        ],
    },
    kenapa_tasikmalaya: {
        title: 'Kenapa Tasikmalaya & Pesantren Hidayatul Mustafid?',
        subtitle: 'Tiga Keterikatan Nyata Tim di Akar Rumput (Bukan Pilihan Acak dari Balik Meja)',
        description: 'Pemilihan lokasi bukan keputusan acak dari balik meja, melainkan berakar pada modal sosial warga lokal, kepercayaan kultural internal santri, dan kolaborasi riset pertanian terapan yang sedang berjalan.',
        reasons: [
            {
                number: '01',
                title: 'Ada Orang Sana (Keterikatan Warga & Putra Daerah)',
                icon: 'home',
                badge: 'Modal Sosial Lokal',
                summary: 'Jejaring keluarga dan warga lokal memudahkan penerimaan sosial tanpa sekat birokrasi pihak luar.',
                description: 'Inisiator memiliki ikatan emosional dan jejaring komunitas warga lokal di Tasikmalaya. Keterikatan putra daerah ini memastikan program tidak dipersepsikan sebagai intervensi pihak luar, melainkan inisiatif gotong royong yang berakar dari kepedulian warga setempat.',
            },
            {
                number: '02',
                title: 'Mariya adalah Santri di Sana (Kepercayaan Kultural Langsung)',
                icon: 'user-check',
                badge: 'Akses & Trust Dari Dalam',
                summary: 'Neng Mariya Ulfa Mardiyah adalah santri di PP Hidayatul Mustafid, menjamin kedekatan kultural dan trust pimpinan.',
                description: 'Salah satu anggota tim pengembang utama, Neng Mariya Ulfa Mardiyah, merupakan santri di Pondok Pesantren Al-Qur\'an Hidayatul Mustafid Tasikmalaya. Hubungan kultural dari dalam ini menciptakan tingkat kepercayaan (trust) yang sangat tinggi dari KH. Nandang Ja\'far Shiddiq, dewan asatidz, dan para santri, sehingga alih teknologi dan pendampingan harian berjalan secara alami dan berkelanjutan.',
            },
            {
                number: '03',
                title: 'Sinergi Riset & Pendampingan Petani Tasikmalaya-Banjar (Tri Febriansah)',
                icon: 'sprout',
                badge: 'Riset & Aksi Berjalan',
                summary: 'Tri sedang aktif menjalankan kolaborasi riset dan pendampingan kelompok tani di Tasikmalaya dan Banjar.',
                description: 'Ketua tim teknologi, Tri Febriansah, saat ini sedang aktif melaksanakan kolaborasi riset terapan dan pendampingan petani di wilayah Tasikmalaya dan Kota Banjar. Pengalaman empiris di sentra pertanian Priangan Timur ini memberi tim pemahaman mendalam tentang karakteristik tanah, air, dinamika agroklimat, dan rantai pasok lokal.',
            },
        ],
    },
};

const content = props.data || defaultData;
const previewImage = ref(null);
const copiedCoords = ref(false);

function copyCoordinates(coords) {
    if (typeof navigator !== 'undefined' && navigator.clipboard) {
        navigator.clipboard.writeText(coords);
        copiedCoords.value = true;
        setTimeout(() => {
            copiedCoords.value = false;
        }, 2000);
    }
}
</script>

<template>
    <div class="relative overflow-hidden rounded-3xl bg-[#F7F5EF]/70 border border-[#E8E9E2] shadow-xs p-6 sm:p-10 lg:p-12 text-[#26312B] space-y-8">
        <!-- 1. HEADER SECTION -->
        <div class="space-y-2 relative z-10 max-w-4xl">
            <div class="flex flex-wrap items-center gap-2">
                <span class="text-[11px] font-extrabold uppercase tracking-widest px-3 py-1 rounded-md bg-emerald-100/90 text-[#204E38] border border-emerald-300 font-mono">
                    Konteks Lapangan &middot; Proposal Usulan SYLS 2026
                </span>
                <span class="text-xs font-bold text-slate-500 font-mono">Mitra Lokasi Pilot Awal</span>
            </div>

            <h2 class="text-3xl sm:text-4xl lg:text-5xl font-black text-[#204E38] tracking-tight leading-[1.15]">
                {{ content.title }}
            </h2>

            <p class="text-base sm:text-lg font-bold text-slate-700">
                {{ content.subtitle }}
            </p>

            <p class="text-xs sm:text-sm text-slate-600 leading-relaxed pt-1">
                {{ content.description }}
            </p>
        </div>

        <!-- 2. SPECIAL EDITORIAL SECTION: KENAPA TASIKMALAYA & PESANTREN HIDAYATUL MUSTAFID? -->
        <div class="relative z-10 rounded-3xl bg-white border border-[#E8E9E2] p-6 sm:p-8 space-y-6 shadow-xs">
            <div class="flex flex-col md:flex-row md:items-end justify-between gap-4 pb-4 border-b border-[#E8E9E2]">
                <div class="space-y-1 max-w-2xl">
                    <span class="text-xs font-bold text-[#204E38] uppercase tracking-wider font-mono">
                        Modal Sosial & Akar Kultural
                    </span>
                    <h3 class="text-xl sm:text-2xl font-black text-[#26312B] leading-tight">
                        {{ content.kenapa_tasikmalaya?.title || defaultData.kenapa_tasikmalaya.title }}
                    </h3>
                    <p class="text-xs sm:text-sm text-slate-600 font-medium">
                        {{ content.kenapa_tasikmalaya?.subtitle || defaultData.kenapa_tasikmalaya.subtitle }}
                    </p>
                </div>
                <span class="text-[11px] font-mono px-3 py-1 rounded-full bg-emerald-50 text-[#204E38] border border-emerald-200 shrink-0 font-bold">
                    3 Keterikatan Kontekstual
                </span>
            </div>

            <p class="text-xs sm:text-sm text-slate-600 leading-relaxed">
                {{ content.kenapa_tasikmalaya?.description || defaultData.kenapa_tasikmalaya.description }}
            </p>

            <!-- 3 Reasons Grid -->
            <div class="grid grid-cols-1 md:grid-cols-3 gap-5 pt-2">
                <div
                    v-for="(rs, ridx) in (content.kenapa_tasikmalaya?.reasons || defaultData.kenapa_tasikmalaya.reasons)"
                    :key="ridx"
                    class="rounded-2xl p-5 border transition-all duration-300 flex flex-col justify-between space-y-4"
                    :class="ridx === 1 ? 'bg-emerald-50/70 border-emerald-300 shadow-xs' : 'bg-[#F7F5EF]/60 border-[#E8E9E2] hover:border-[#204E38]/40'"
                >
                    <div class="space-y-3">
                        <div class="flex items-center justify-between">
                            <span class="font-mono text-xs font-black text-[#204E38] px-2.5 py-1 rounded-lg bg-white border border-emerald-200">
                                {{ rs.number }}
                            </span>
                            <span class="text-[10px] font-bold uppercase tracking-wider px-2.5 py-0.5 rounded-full bg-[#204E38] text-white">
                                {{ rs.badge }}
                            </span>
                        </div>

                        <div class="space-y-1">
                            <h4 class="text-sm font-black text-[#26312B] leading-snug">
                                {{ rs.title }}
                            </h4>
                            <p class="text-xs font-bold text-[#204E38] leading-tight">
                                {{ rs.summary }}
                            </p>
                        </div>

                        <p class="text-[11px] text-slate-600 leading-relaxed pt-1">
                            {{ rs.description }}
                        </p>
                    </div>

                    <div class="pt-3 border-t border-[#E8E9E2] text-[10px] font-mono text-slate-500">
                        Basis Komitmen Lapangan
                    </div>
                </div>
            </div>
        </div>

        <!-- 3. TOP SECTION: PROFIL LOKASI & POTENSI PRODUKTIF (2 LARGE CARDS) -->
        <div class="grid grid-cols-1 lg:grid-cols-12 gap-6 relative z-10">
            <!-- Left: Profil Lokasi (6 cols) -->
            <div class="lg:col-span-6 bg-white rounded-3xl p-6 sm:p-7 border border-[#E8E9E2] shadow-xs space-y-4 flex flex-col justify-between">
                <div class="space-y-3">
                    <div class="flex items-center justify-between pb-3 border-b border-[#E8E9E2]">
                        <span class="text-xs font-bold uppercase tracking-wider text-[#204E38] font-mono">
                            Profil Lokasi Pilot
                        </span>
                        <span class="text-[10px] font-mono font-bold px-2.5 py-0.5 rounded-full bg-emerald-50 text-[#204E38] border border-emerald-200">
                            {{ content.location.map_label }}
                        </span>
                    </div>

                    <div>
                        <h3 class="text-lg sm:text-xl font-black text-[#26312B] leading-snug">
                            {{ content.location.name }}
                        </h3>
                        <p class="text-xs text-slate-600 mt-1 leading-relaxed">
                            {{ content.location.address }}
                        </p>
                    </div>

                    <!-- Photo & Karakteristik Grid -->
                    <div class="grid grid-cols-1 sm:grid-cols-12 gap-4 pt-4 items-center">
                        <!-- Photo of Pesantren Facade / Santri -->
                        <div class="sm:col-span-5 rounded-2xl overflow-hidden border border-[#E8E9E2] aspect-[4/3] bg-[#163828] relative group">
                            <img
                                :src="content.location.photo"
                                alt="Pimpinan & Santri Pesantren Hidayatul Mustafid"
                                class="w-full h-full object-cover group-hover:scale-105 transition-transform duration-500"
                                loading="lazy"
                            />
                            <div class="absolute inset-0 bg-gradient-to-t from-[#163828]/80 via-transparent to-transparent"></div>
                            <span class="absolute bottom-2 left-2 text-[10px] font-bold text-white bg-[#163828]/80 px-2 py-0.5 rounded backdrop-blur-xs">
                                Pimpinan & Santri
                            </span>
                        </div>

                        <!-- Karakteristik Bullets -->
                        <div class="sm:col-span-7 space-y-2">
                            <div class="flex items-center gap-2 mb-1">
                                <span class="w-2 h-2 rounded-full bg-[#204E38]"></span>
                                <span class="text-xs font-bold uppercase tracking-wider text-[#26312B]">
                                    Karakteristik Lokasi
                                </span>
                            </div>
                            <ul class="space-y-1.5 text-xs text-slate-600">
                                <li
                                    v-for="(char, cidx) in content.location.characteristics"
                                    :key="cidx"
                                    class="flex items-start gap-2"
                                >
                                    <span class="text-[#204E38] font-bold text-xs mt-0.5">&bull;</span>
                                    <span>{{ char }}</span>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>

                <div class="pt-3 border-t border-[#E8E9E2] flex items-center justify-between text-[11px] text-slate-500 font-mono">
                    <span>Titik Awal Implementasi SIRAMI</span>
                    <span class="text-[#204E38] font-bold">Terverifikasi Lapangan</span>
                </div>
            </div>

            <!-- Right: Potensi Produktif (6 cols) -->
            <div class="lg:col-span-6 bg-white rounded-3xl p-6 sm:p-7 border border-[#E8E9E2] shadow-xs space-y-4 flex flex-col justify-between">
                <div class="space-y-3">
                    <div class="flex items-center justify-between pb-3 border-b border-[#E8E9E2]">
                        <span class="text-xs font-bold uppercase tracking-wider text-[#204E38] font-mono">
                            Potensi Pekarangan & Lahan
                        </span>
                        <span class="text-[10px] font-mono font-bold px-2.5 py-0.5 rounded-full bg-emerald-50 text-[#204E38] border border-emerald-200">
                            Lahan Eksisting
                        </span>
                    </div>

                    <!-- Land Area Highlight & Real Photo -->
                    <div class="grid grid-cols-12 gap-3 pt-3 items-center">
                        <!-- Big Area Stat -->
                        <div class="col-span-5 p-3 rounded-2xl bg-emerald-50/80 border border-emerald-200/90 text-center flex flex-col justify-center">
                            <span class="text-2xl sm:text-3xl font-black text-[#204E38] font-mono tracking-tight block">
                                {{ content.productive_potential.land_area }}
                            </span>
                            <span class="text-[10px] font-bold text-slate-600 mt-1 leading-tight block">
                                {{ content.productive_potential.land_sub }}
                            </span>
                            <span class="text-[9px] text-[#204E38] font-mono font-semibold mt-1 block">
                                &asymp; 4.900 m&sup2;
                            </span>
                        </div>

                        <!-- Real Photo of Garden / Tri Survey -->
                        <div class="col-span-7 rounded-2xl overflow-hidden border border-[#E8E9E2] aspect-[4/3] bg-[#163828] relative group">
                            <img
                                :src="content.productive_potential.photo"
                                alt="Potensi Lahan Pekarangan Pesantren"
                                class="w-full h-full object-cover group-hover:scale-105 transition-transform duration-500"
                                loading="lazy"
                            />
                            <div class="absolute inset-0 bg-gradient-to-t from-[#163828]/80 via-transparent to-transparent"></div>
                            <span class="absolute bottom-2 left-2 text-[10px] font-bold text-white bg-[#163828]/80 px-2 py-0.5 rounded backdrop-blur-xs">
                                Lahan Eksisting
                            </span>
                        </div>
                    </div>

                    <!-- 7 Existing & Potential Commodities Badges -->
                    <div class="pt-4 space-y-2">
                        <span class="text-[10px] font-bold uppercase tracking-wider text-slate-500 block">
                            Komoditas Eksisting & Potensi Terintegrasi:
                        </span>
                        <div class="flex flex-wrap gap-2">
                            <div
                                v-for="(cmd, cidx) in content.productive_potential.commodities"
                                :key="cidx"
                                @click="cmd.photo && (previewImage = cmd.photo)"
                                :class="[
                                    'flex items-center gap-1.5 px-2.5 py-1 rounded-xl text-xs font-semibold border transition',
                                    cmd.photo ? 'bg-emerald-50/90 border-emerald-300 text-[#204E38] hover:bg-emerald-100 cursor-pointer shadow-xs' : 'bg-slate-50 border-slate-200 text-slate-700'
                                ]"
                            >
                                <span class="w-1.5 h-1.5 rounded-full bg-[#204E38]"></span>
                                <span>{{ cmd.name }}</span>
                                <span v-if="cmd.photo" class="text-[9px] text-[#204E38] font-mono font-bold bg-white px-1 rounded border border-emerald-200">Foto</span>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="pt-2 text-[10px] text-slate-500 font-mono">
                    *Integrasi budidaya microgreens dan kolam lele memanfaatkan air olahan SIRAMI.
                </div>
            </div>
        </div>

        <!-- 3.5. INTERACTIVE SATELLITE MAP & VIDEO OBSERVASI LAPANGAN (DUAL MEDIA SHOWCASE) -->
        <div class="grid grid-cols-1 lg:grid-cols-12 gap-6 relative z-10">
            <!-- Left: Peta Satelit Interaktif & Koordinat GPS (7 cols) -->
            <div class="lg:col-span-7 bg-white rounded-3xl p-6 sm:p-7 border border-[#E8E9E2] shadow-xs space-y-5 flex flex-col justify-between">
                <div>
                    <!-- Header -->
                    <div class="flex flex-col sm:flex-row sm:items-center justify-between gap-3 pb-4 border-b border-[#E8E9E2]">
                        <div class="flex items-center gap-2.5">
                            <span class="w-10 h-10 rounded-2xl bg-emerald-50 text-[#204E38] flex items-center justify-center font-bold text-sm shrink-0 border border-emerald-200">
                                <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 20l-5.447-2.724A1 1 0 013 16.382V5.618a1 1 0 011.447-.894L9 7m0 13l6-3m-6 3V7m6 10l4.553 2.276A1 1 0 0021 18.382V7.618a1 1 0 00-.553-.894L15 4m0 13V4m0 0L9 7" /></svg>
                            </span>
                            <div>
                                <div class="flex items-center gap-2">
                                    <h4 class="text-base sm:text-lg font-black text-[#26312B] leading-snug">
                                        Peta Satelit & Koordinat Lokasi Mitra
                                    </h4>
                                    <span class="text-[10px] font-mono font-bold px-2 py-0.5 rounded bg-emerald-100 text-[#204E38]">
                                        GPS Aktif
                                    </span>
                                </div>
                                <p class="text-xs text-slate-500 font-mono mt-0.5">
                                    Pondok Pesantren Al-Qur'an Hidayatul Mustafid &middot; Awipari, Tasikmalaya
                                </p>
                            </div>
                        </div>

                        <!-- Quick Copy Coordinates Pill -->
                        <button
                            type="button"
                            @click="copyCoordinates('-7.348333883307857, 108.27008019447703')"
                            class="inline-flex items-center gap-1.5 px-3 py-1.5 rounded-xl bg-slate-100 hover:bg-emerald-50 border border-slate-200 hover:border-emerald-300 text-slate-700 hover:text-[#204E38] text-xs font-mono font-semibold transition cursor-pointer shrink-0"
                            title="Klik untuk menyalin koordinat GPS"
                        >
                            <svg class="w-3.5 h-3.5 text-[#204E38]" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 16H6a2 2 0 01-2-2V6a2 2 0 012-2h8a2 2 0 012 2v2m-6 12h8a2 2 0 002-2v-8a2 2 0 00-2-2h-8a2 2 0 00-2 2v8a2 2 0 002 2z" /></svg>
                            <span>{{ copiedCoords ? 'Tersalin ke Clipboard!' : '-7.348334, 108.270080' }}</span>
                        </button>
                    </div>

                    <!-- Satellite Iframe Map Container -->
                    <div class="relative w-full aspect-[16/9] sm:aspect-[21/10] rounded-2xl overflow-hidden border border-[#E8E9E2] shadow-inner bg-[#163828] mt-4 group">
                        <iframe
                            :src="(content.location?.google_maps_embed || defaultData.location.google_maps_embed)"
                            width="100%"
                            height="100%"
                            style="border:0;"
                            allowfullscreen=""
                            loading="lazy"
                            referrerpolicy="no-referrer-when-downgrade"
                            class="w-full h-full filter saturate-[1.1] contrast-[1.05]"
                            title="Peta Satelit Lokasi Mitra Pilot SIRAMI"
                        ></iframe>

                        <!-- Map Overlays -->
                        <div class="absolute top-3 left-3 bg-[#163828]/85 backdrop-blur-md text-white text-[10px] font-mono px-2.5 py-1 rounded-lg border border-white/20 pointer-events-none flex items-center gap-1.5">
                            <span class="w-2 h-2 rounded-full bg-emerald-400 animate-pulse"></span>
                            <span>Citra Satelit Resolusi Tinggi (Awipari)</span>
                        </div>

                        <div class="absolute bottom-3 left-3 right-3 bg-[#163828]/90 backdrop-blur-md text-white p-2.5 rounded-xl border border-white/15 flex flex-wrap items-center justify-between gap-2 text-xs">
                            <div class="flex items-center gap-2 truncate">
                                <span class="w-2 h-2 rounded-full bg-amber-400"></span>
                                <span class="truncate font-semibold text-slate-200 text-[11px]">
                                    Titik Pesantren: 7°20'54.0"S 108°16'12.3"E
                                </span>
                            </div>
                            <div class="flex items-center gap-2 shrink-0">
                                <a
                                    :href="(content.location?.google_maps_url || defaultData.location.google_maps_url)"
                                    target="_blank"
                                    rel="noopener noreferrer"
                                    class="px-2.5 py-1 rounded-lg bg-[#204E38] hover:bg-[#163828] text-white font-bold text-[10px] font-mono transition flex items-center gap-1 border border-emerald-600/50"
                                >
                                    <span>Buka Maps</span>
                                    <span>&rarr;</span>
                                </a>
                                <a
                                    :href="(content.location?.google_maps_directions || defaultData.location.google_maps_directions)"
                                    target="_blank"
                                    rel="noopener noreferrer"
                                    class="px-2.5 py-1 rounded-lg bg-white/20 hover:bg-white/30 text-white font-bold text-[10px] font-mono transition flex items-center gap-1"
                                >
                                    <span>Rute / Arah</span>
                                    <span>&rarr;</span>
                                </a>
                            </div>
                        </div>
                    </div>

                    <!-- Location Notes & Surrounding Context -->
                    <div class="grid grid-cols-1 sm:grid-cols-3 gap-2.5 pt-4 text-xs">
                        <div class="p-2.5 rounded-xl bg-[#F7F5EF] border border-[#E8E9E2]">
                            <span class="text-[10px] font-mono text-slate-500 uppercase font-bold block">Topografi & Aliran</span>
                            <span class="font-bold text-[#26312B] block mt-0.5">Gravitasi Bertingkat</span>
                            <span class="text-[10px] text-slate-600">Minim beban listrik tambahan</span>
                        </div>
                        <div class="p-2.5 rounded-xl bg-[#F7F5EF] border border-[#E8E9E2]">
                            <span class="text-[10px] font-mono text-slate-500 uppercase font-bold block">Jarak ke Kota</span>
                            <span class="font-bold text-[#26312B] block mt-0.5">15–20 Menit</span>
                            <span class="text-[10px] text-slate-600">Akses cepat pasar microgreens</span>
                        </div>
                        <div class="p-2.5 rounded-xl bg-[#F7F5EF] border border-[#E8E9E2]">
                            <span class="text-[10px] font-mono text-slate-500 uppercase font-bold block">Status Tapak</span>
                            <span class="font-bold text-[#204E38] block mt-0.5">Persetujuan Resmi</span>
                            <span class="text-[10px] text-slate-600">Surat 18/X/PPHM/2026</span>
                        </div>
                    </div>
                </div>

                <div class="pt-3 border-t border-[#E8E9E2] flex items-center justify-between text-[11px] text-slate-500 font-mono">
                    <span>Koordinat: -7.348333883307857, 108.27008019447703</span>
                    <a
                        :href="(content.location?.google_maps_url || defaultData.location.google_maps_url)"
                        target="_blank"
                        rel="noopener noreferrer"
                        class="text-[#204E38] font-bold hover:underline flex items-center gap-0.5"
                    >
                        <span>Tampilkan di Google Maps</span>
                        <span>&rarr;</span>
                    </a>
                </div>
            </div>

            <!-- Right: Video Dokumentasi Observasi Fisik Lapangan (5 cols) -->
            <div class="lg:col-span-5 bg-white rounded-3xl p-6 sm:p-7 border border-[#E8E9E2] shadow-xs space-y-4 flex flex-col justify-between">
                <div>
                    <!-- Header -->
                    <div class="flex items-center justify-between pb-4 border-b border-[#E8E9E2]">
                        <div class="flex items-center gap-2.5">
                            <span class="w-10 h-10 rounded-2xl bg-amber-50 text-amber-800 flex items-center justify-center font-bold text-sm shrink-0 border border-amber-200">
                                <svg class="w-5 h-5 text-amber-800" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 10l4.553-2.276A1 1 0 0121 8.618v6.764a1 1 0 01-1.447.894L15 14M5 18h8a2 2 0 002-2V8a2 2 0 00-2-2H5a2 2 0 00-2 2v8a2 2 0 002 2z" /></svg>
                            </span>
                            <div>
                                <div class="flex items-center gap-2">
                                    <h4 class="text-base sm:text-lg font-black text-[#26312B] leading-snug">
                                        Video Observasi Lapangan
                                    </h4>
                                    <span class="text-[10px] font-mono font-bold px-2 py-0.5 rounded bg-amber-100 text-amber-900">
                                        1080p MP4
                                    </span>
                                </div>
                                <p class="text-xs text-slate-500 font-mono mt-0.5">
                                    Dokumentasi Fisik Primer &middot; Tim SIRAMI UIN Bandung
                                </p>
                            </div>
                        </div>
                    </div>

                    <!-- Video Player Container -->
                    <div class="mt-4 rounded-2xl overflow-hidden border border-[#E8E9E2] shadow-inner bg-black aspect-video relative group">
                        <video
                            controls
                            playsinline
                            preload="metadata"
                            :poster="(content.video_survey?.poster || defaultData.video_survey.poster)"
                            class="w-full h-full object-cover"
                        >
                            <source :src="(content.video_survey?.video_url || defaultData.video_survey.video_url)" type="video/mp4" />
                            <source :src="(content.video_survey?.fallback_url || defaultData.video_survey.fallback_url)" type="video/mp4" />
                            Browser Anda tidak mendukung pemutar video HTML5.
                        </video>
                    </div>

                    <!-- Video Context Description & Badges -->
                    <div class="pt-4 space-y-2.5 text-xs">
                        <div class="p-3 rounded-xl bg-[#F7F5EF] border border-[#E8E9E2] text-slate-700 leading-relaxed">
                            <span class="font-bold text-[#26312B] block mb-1">
                                Dokumen Observasi Video Fisik:
                            </span>
                            <p class="text-[11px] text-slate-600 leading-relaxed">
                                Perekaman langsung kondisi riil toren penampungan air, fasilitas sanitasi santri, bak IPAL awal, dan pekarangan terbuka seluas ±350 bata oleh Tim Mahasiswa UIN SGD Bandung sebagai baseline perancangan sistem filtrasi bertingkat SIRAMI.
                            </p>
                        </div>

                        <div class="flex flex-wrap gap-2 text-[10px] font-mono">
                            <span class="px-2 py-1 rounded-md bg-emerald-50 text-[#204E38] border border-emerald-200 font-semibold">
                                Video Asli Lapangan
                            </span>
                            <span class="px-2 py-1 rounded-md bg-slate-100 text-slate-700 border border-slate-200">
                                17.1 MB &middot; 00:23 Menit
                            </span>
                            <span class="px-2 py-1 rounded-md bg-slate-100 text-slate-700 border border-slate-200">
                                Kp. Sindangresik, Tasikmalaya
                            </span>
                        </div>
                    </div>
                </div>

                <div class="pt-3 border-t border-[#E8E9E2] flex items-center justify-between text-[11px] text-slate-500 font-mono">
                    <span>Observasi Primer Terverifikasi</span>
                    <a
                        :href="(content.video_survey?.video_url || defaultData.video_survey.video_url)"
                        target="_blank"
                        class="text-[#204E38] font-bold hover:underline"
                    >
                        Buka Video Penuh &rarr;
                    </a>
                </div>
            </div>
        </div>

        <!-- 3. MIDDLE SECTION: FASILITAS AIR & PROFIL MASYARAKAT (2 LARGE CARDS) -->
        <div class="grid grid-cols-1 lg:grid-cols-12 gap-6 relative z-10">
            <!-- Left: Fasilitas dan Infrastruktur Air (7 cols) -->
            <div class="lg:col-span-7 bg-white rounded-3xl p-6 sm:p-7 border border-[#E8E9E2] shadow-xs space-y-5">
                <div class="flex items-center justify-between pb-3 border-b border-[#E8E9E2]">
                    <div class="flex items-center gap-2">
                        <span class="w-8 h-8 rounded-xl bg-teal-50 text-[#204E38] flex items-center justify-center text-xs font-bold border border-teal-200">
                            <svg class="w-4 h-4 text-[#204E38]" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19.428 15.428a2 2 0 00-1.022-.547l-2.387-.477a6 6 0 00-3.86.517l-.318.158a6 6 0 01-3.86.517L6.05 15.21a2 2 0 00-1.806.547M8 4h8l-1 1v5.172a2 2 0 00.586 1.414l5 5c1.26 1.26.367 3.414-1.415 3.414H4.828c-1.782 0-2.674-2.154-1.414-3.414l5-5A2 2 0 009 10.172V5L8 4z" /></svg>
                        </span>
                        <div>
                            <span class="text-xs font-black uppercase tracking-wider text-[#26312B] block">
                                Fasilitas dan Infrastruktur Air
                            </span>
                            <span class="text-[10px] text-slate-500 font-mono">Kebutuhan Hidrologi Harian</span>
                        </div>
                    </div>
                    <span class="text-[10px] font-mono font-bold text-slate-500">4 Indikator Pokok</span>
                </div>

                <!-- 4 Metrics Grid -->
                <div class="grid grid-cols-2 sm:grid-cols-4 gap-3">
                    <div
                        v-for="(st, sidx) in content.water_infrastructure.stats"
                        :key="sidx"
                        class="p-3.5 bg-[#F7F5EF] rounded-2xl border border-[#E8E9E2] hover:border-[#204E38] transition flex flex-col justify-between"
                    >
                        <div>
                            <span class="text-xl sm:text-2xl font-black text-[#204E38] font-mono tracking-tight block">
                                {{ st.value }}
                            </span>
                            <span class="text-xs font-bold text-[#26312B] block mt-0.5 leading-snug">
                                {{ st.unit }}
                            </span>
                        </div>
                        <span class="text-[10px] text-slate-600 mt-2 pt-1.5 border-t border-[#E8E9E2] leading-tight block">
                            {{ st.note }}
                        </span>
                    </div>
                </div>

                <!-- Sumber Air & Air Non Kakus Two-Column Box -->
                <div class="grid grid-cols-1 sm:grid-cols-2 gap-3.5 pt-1">
                    <!-- Sumber Air & Biaya Pompa -->
                    <div class="p-4 rounded-2xl bg-amber-50/70 border border-amber-200/80 space-y-2">
                        <div class="flex items-center gap-2">
                            <span class="w-2 h-2 rounded-full bg-amber-600"></span>
                            <span class="text-xs font-bold text-amber-950 uppercase tracking-wider">
                                Sumber Air & Beban Energi
                            </span>
                        </div>
                        <p class="text-xs font-bold text-[#26312B]">
                            {{ content.water_infrastructure.water_source.type }}
                        </p>
                        <div class="p-2.5 rounded-xl bg-white border border-amber-300 text-xs">
                            <span class="font-black text-amber-900 block font-mono">
                                {{ content.water_infrastructure.water_source.cost_estimate }}
                            </span>
                            <span class="text-[10px] text-slate-600 block mt-0.5">
                                {{ content.water_infrastructure.water_source.cost_note }}
                            </span>
                        </div>
                    </div>

                    <!-- Air Non Kakus Berpotensi Dimanfaatkan -->
                    <div class="p-4 rounded-2xl bg-emerald-50/70 border border-emerald-200/80 space-y-2 flex flex-col justify-between">
                        <div class="space-y-1">
                            <div class="flex items-center gap-2">
                                <span class="w-2 h-2 rounded-full bg-[#204E38]"></span>
                                <span class="text-xs font-bold text-emerald-950 uppercase tracking-wider">
                                    {{ content.water_infrastructure.greywater.title }}
                                </span>
                            </div>
                            <p class="text-xs text-slate-700 leading-relaxed pt-1">
                                {{ content.water_infrastructure.greywater.description }}
                            </p>
                        </div>
                        <div class="pt-2 text-[10px] font-mono text-[#204E38] font-bold">
                            Target Penghematan: 1.500 - 3.000 L/Hari
                        </div>
                    </div>
                </div>
            </div>

            <!-- Right: Profil dan Karakteristik Masyarakat (5 cols) -->
            <div class="lg:col-span-5 bg-white rounded-3xl p-6 sm:p-7 border border-[#E8E9E2] shadow-xs space-y-5 flex flex-col justify-between">
                <div>
                    <div class="flex items-center justify-between pb-3 border-b border-[#E8E9E2]">
                        <div class="flex items-center gap-2">
                            <span class="w-8 h-8 rounded-xl bg-indigo-50 text-indigo-800 flex items-center justify-center text-xs font-bold border border-indigo-200">
                                <svg class="w-4 h-4 text-indigo-700" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 20h5v-2a3 3 0 00-5.356-1.857M17 20H7m10 0v-2c0-.656-.126-1.283-.356-1.857M7 20H2v-2a3 3 0 015.356-1.857M7 20v-2c0-.656.126-1.283.356-1.857m0 0a5.002 5.002 0 019.288 0M15 7a3 3 0 11-6 0 3 3 0 016 0zm6 3a2 2 0 11-4 0 2 2 0 014 0zM7 10a2 2 0 11-4 0 2 2 0 014 0z" /></svg>
                            </span>
                            <span class="text-xs font-black uppercase tracking-wider text-[#26312B]">
                                {{ content.community_profile.title }}
                            </span>
                        </div>
                        <span class="text-[10px] font-mono font-bold text-indigo-700">Budaya Komunal</span>
                    </div>

                    <!-- Points List -->
                    <ul class="space-y-3 pt-3">
                        <li
                            v-for="(pt, pidx) in content.community_profile.points"
                            :key="pidx"
                            class="flex items-start gap-3 text-xs text-slate-700 leading-relaxed"
                        >
                            <span class="w-5 h-5 rounded-lg bg-emerald-100 text-[#204E38] flex items-center justify-center text-[10px] font-bold shrink-0 mt-0.5">
                                <svg class="w-3 h-3 text-[#204E38]" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="3" d="M5 13l4 4L19 7" /></svg>
                            </span>
                            <span>{{ pt }}</span>
                        </li>
                    </ul>
                </div>

                <!-- Pimpinan Quote Box -->
                <div class="p-3.5 rounded-2xl bg-[#F7F5EF] border border-[#E8E9E2] text-xs text-slate-700 space-y-1">
                    <span class="text-[10px] font-bold uppercase tracking-wider text-slate-500 font-mono block">
                        Pimpinan Pesantren Mitra:
                    </span>
                    <p class="font-bold text-[#26312B]">
                        KH. Nandang Ja'far Shiddiq
                    </p>
                    <p class="text-[11px] text-slate-600 italic">
                        "Mendukung inovasi santri dalam kemandirian air bersih, budidaya sayur sehat, dan wirausaha pesantren."
                    </p>
                </div>
            </div>
        </div>

        <!-- 4. BOTTOM SECTION: 3 COLUMNS (KONDISI LINGKUNGAN, PELUANG PENGEMBANGAN & JEJARING TIM) -->
        <div class="grid grid-cols-1 md:grid-cols-12 gap-6 relative z-10">
            <!-- Column 1: Kondisi Lingkungan dan Potensi (Thumbnails Gallery) (4 cols) -->
            <div class="md:col-span-4 bg-white rounded-3xl p-5 sm:p-6 border border-[#E8E9E2] shadow-xs space-y-3 flex flex-col justify-between">
                <div class="space-y-3">
                    <div class="flex items-center gap-2 pb-2 border-b border-[#E8E9E2]">
                        <span class="w-2 h-2 rounded-full bg-[#204E38]"></span>
                        <span class="text-xs font-black uppercase tracking-wider text-[#26312B]">
                            Kondisi Lingkungan & Lapangan
                        </span>
                    </div>

                    <!-- 3 Horizontal/Grid Thumbnails -->
                    <div class="grid grid-cols-3 gap-2">
                        <div
                            v-for="(env, eidx) in content.environment_photos"
                            :key="eidx"
                            @click="previewImage = env.src"
                            class="rounded-xl overflow-hidden aspect-square border border-[#E8E9E2] bg-[#163828] relative group cursor-pointer"
                        >
                            <img
                                :src="env.src"
                                :alt="env.caption"
                                class="w-full h-full object-cover group-hover:scale-110 transition-transform duration-300"
                                loading="lazy"
                            />
                            <div class="absolute inset-0 bg-black/40 group-hover:bg-black/10 transition-colors"></div>
                            <span class="absolute bottom-1 left-1 right-1 text-[8px] font-bold text-white bg-[#163828]/80 px-1 py-0.5 rounded truncate text-center">
                                {{ env.caption }}
                            </span>
                        </div>
                    </div>
                    <p class="text-[11px] text-slate-600 leading-relaxed pt-1">
                        Dokumentasi visual fasilitas fisik sumur, IPAL, toren air, dan area interaksi santri di Pondok Pesantren Hidayatul Mustafid.
                    </p>
                </div>

                <span class="text-[10px] text-[#204E38] font-mono font-bold block pt-1">
                    *Klik foto untuk memperbesar
                </span>
            </div>

            <!-- Column 2: Peluang Pengembangan (4 Pilar Intervensi SIRAMI) (4 cols) -->
            <div class="md:col-span-4 bg-[#204E38] text-white rounded-3xl p-5 sm:p-6 border border-[#163828] shadow-md space-y-4 flex flex-col justify-between">
                <div class="space-y-3">
                    <div class="flex items-center gap-2 pb-2 border-b border-emerald-700/60">
                        <span class="w-2 h-2 rounded-full bg-emerald-400"></span>
                        <span class="text-xs font-black uppercase tracking-wider text-emerald-200 font-mono">
                            {{ content.opportunities.title }}
                        </span>
                    </div>

                    <!-- 4 Dark-Styled Opportunity Pills -->
                    <div class="space-y-2">
                        <div
                            v-for="(opp, oidx) in content.opportunities.items"
                            :key="oidx"
                            class="flex items-center gap-3 p-3 rounded-xl bg-white/10 hover:bg-white/15 border border-white/10 transition"
                        >
                            <span class="w-2 h-2 rounded-full bg-emerald-300 shrink-0"></span>
                            <span class="text-xs font-bold leading-snug">{{ opp.title }}</span>
                        </div>
                    </div>
                </div>

                <div class="text-[10px] text-emerald-100/80 font-mono">
                    Model inovasi sirkular yang teruji dan siap direplikasi.
                </div>
            </div>

            <!-- Column 3: Pengalaman, Kompetensi, dan Jejaring Tim (4 cols) -->
            <div class="md:col-span-4 bg-white rounded-3xl p-5 sm:p-6 border border-[#E8E9E2] shadow-xs space-y-3 flex flex-col justify-between">
                <div class="space-y-3">
                    <div class="flex items-center gap-2 pb-2 border-b border-[#E8E9E2]">
                        <span class="w-2 h-2 rounded-full bg-[#204E38]"></span>
                        <span class="text-xs font-black uppercase tracking-wider text-[#26312B]">
                            {{ content.team_network.title }}
                        </span>
                    </div>

                    <!-- 4 Pillars -->
                    <div class="space-y-2">
                        <div
                            v-for="(pil, pidx) in content.team_network.pillars"
                            :key="pidx"
                            class="p-2.5 rounded-xl bg-[#F7F5EF] border border-[#E8E9E2] flex items-start gap-2.5"
                        >
                            <span class="w-2 h-2 rounded-full bg-[#204E38] shrink-0 mt-1.5"></span>
                            <div>
                                <h5 class="text-xs font-bold text-[#26312B] leading-tight">
                                    {{ pil.title }}
                                </h5>
                                <p class="text-[10px] text-slate-600 mt-0.5 leading-snug">
                                    {{ pil.desc }}
                                </p>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="text-[10px] font-mono text-[#204E38] font-bold pt-1">
                    UIN Sunan Gunung Djati Bandung &middot; SYLS 2026
                </div>
            </div>
        </div>

        <!-- Lightbox Modal for Photo Preview -->
        <div
            v-if="previewImage"
            @click="previewImage = null"
            class="fixed inset-0 z-50 bg-[#163828]/90 backdrop-blur-xs flex items-center justify-center p-4 cursor-pointer"
        >
            <div class="max-w-3xl w-full bg-white rounded-3xl overflow-hidden p-2 shadow-2xl relative border border-white/20" @click.stop>
                <img :src="previewImage" alt="Preview Foto Lapangan" class="w-full h-auto max-h-[80vh] object-contain rounded-2xl" />
                <button
                    @click="previewImage = null"
                    class="absolute top-4 right-4 w-9 h-9 rounded-full bg-[#163828]/80 text-white font-bold flex items-center justify-center hover:bg-[#204E38] transition cursor-pointer"
                    aria-label="Tutup"
                >
                    ✕
                </button>
            </div>
        </div>
    </div>
</template>
