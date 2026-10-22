<script setup>
import { ref, computed } from 'vue';

const stages = [
    {
        id: 1,
        stepNumber: '01',
        title: 'Instalasi & Persiapan Fasilitas',
        shortTitle: 'Instalasi Fisik',
        category: 'Infrastruktur',
        responsible: 'Technology Lead (Tri Febriansah) & Teknisi Lokal',
        duration: 'Minggu 1 - 2 (14 Hari)',
        status: 'Rancangan Teknis Teruji',
        statusType: 'ready',
        description: 'Pemasangan jalur perpipaan terpisah untuk air wudu, penataan bak sedimentasi, filter pasir silika & karbon aktif, instalasi kolam fitoremediasi vetiver, dan integrasi unit sensor pH/TDS/kekeruhan.',
        tools: 'Pipa PVC AW, toren penampung, pasir silika, karbon aktif granular, kerikil zeolit, bibit rumput vetiver, probe sensor terkalibrasi.',
        kpi: 'Instalasi fisik terpasang rapi, kebocoran 0%, debit alir stabil 15-20 L/menit, sensor terhubung ke mikrokontroler.',
        sopDoc: 'SOP-INS-01: Prosedur Perakitan & Uji Tekan Jalur Bio-Filtrasi',
        evidence: 'Foto layout lokasi pekarangan ±350 bata & skema teknis modular.'
    },
    {
        id: 2,
        stepNumber: '02',
        title: 'Pelatihan Teknis & Edukasi Santri',
        shortTitle: 'Pelatihan Teknis',
        category: 'Kapasitas',
        responsible: 'Community Lead (Neng Mariya) & Fasilitator Mitra',
        duration: 'Minggu 3 (7 Hari Intensif)',
        status: 'Modul Tersedia',
        statusType: 'verified',
        description: 'Transfer pengetahuan komprehensif kepada 20 santri pengelola mengenai prinsip thaharah, cara membaca sensor, teknik semai microgreens, kebersihan tray, dan keselamatan kerja.',
        tools: 'Modul cetak SOP budidaya, pH meter portable, lembar logbook harian, tray percontohan, media tanam steril.',
        kpi: '100% santri pengelola memahami batas aman air wudu dan mampu melakukan semai mandiri tanpa pendampingan penuh.',
        sopDoc: 'SOP-EDC-02: Modul Pelatihan Budidaya Santri & Sanitasi Fasilitas',
        evidence: 'Surat dukungan kemitraan No. 18/X/PPHM/2026 & modul cetak siap uji.'
    },
    {
        id: 3,
        stepNumber: '03',
        title: 'Pengelolaan Sistem & Pengolahan Air',
        shortTitle: 'Pengolahan Air',
        category: 'Operasional Air',
        responsible: 'Tim Santri Operator Air & Pendamping Teknis',
        duration: 'Harian Berkelanjutan',
        status: 'SOP Baku',
        statusType: 'verified',
        description: 'Pengaliran air wudu pasca-salat berjamaah, pemantauan telemetri pH dan kekeruhan secara real-time, pencatatan logbook sensor, serta pemeliharaan media fitoremediasi.',
        tools: 'Dashboard sensor lokal, alat ukur visual turbidity tube, reagen uji pH pembanding, backwash valve.',
        kpi: 'TDS stabil < 300 ppm, pH netral 6.5 - 7.8, kekeruhan < 5 NTU, air memenuhi baku mutu irigasi pertanian pangan.',
        sopDoc: 'SOP-WTR-03: Tata Cara Operasional Backwash & Verifikasi Sensor',
        evidence: 'Data baseline sumur eksisting & simulasi penurunan COD/BOD.'
    },
    {
        id: 4,
        stepNumber: '04',
        title: 'Produksi Pangan Microgreens',
        shortTitle: 'Produksi Pangan',
        category: 'Budidaya',
        responsible: 'Santri Unit Budidaya & Dinar Robiatul Adawiyah',
        duration: 'Siklus 7 - 14 Hari per Batch',
        status: 'Prototipe Tervalidasi',
        statusType: 'verified',
        description: 'Penyemaian benih microgreens (bayam merah, brokoli, bunga matahari) di rak terlindung dengan penyiraman kabut terjadwal memanfaatkan air hasil olahan yang telah teruji aman.',
        tools: 'Tray semai 32x25 cm, media cocopeat & sekam bakar steril, sprayer kabut, rak vertikal 4 tingkat bertirai serangga.',
        kpi: 'Tingkat perkecambahan > 90%, panen 180 - 250 gram per tray, bebas hama jamur/patogen tanpa pestisida kimia sintetis.',
        sopDoc: 'SOP-AGR-04: Protokol Sanitasi Benih & Jadwal Siram Microgreens',
        evidence: 'Dokumentasi panen prototipe microgreens umur 10 hari.'
    },
    {
        id: 5,
        stepNumber: '05',
        title: 'Pengemasan & Standardisasi Kualitas',
        shortTitle: 'Standardisasi & Kemasan',
        category: 'Pasca-Panen',
        responsible: 'Business Lead (Dinar) & Santri Tim Packaging',
        duration: 'Setiap Hari Panen (Pagi 06.00 - 08.00)',
        status: 'Rancangan Branding',
        statusType: 'ready',
        description: 'Pemotongan higienis sayuran microgreens, penimbangan digital presisi (50g / 100g), penirisan kelembapan, pengemasan clamshell ramah lingkungan, dan penempelan label sertifikasi asal usul.',
        tools: 'Gunting panen stainless steril, timbangan digital 0.1g, boks clamshell food-grade biodegradable, stiker label nutrisi.',
        kpi: 'Bobot bersih konsisten, kemasan kedap kontaminasi, masa simpan segar 5-7 hari dalam penyimpanan sejuk.',
        sopDoc: 'SOP-PKG-05: Higienitas Pasca-Panen & Kontrol Mutu Kemasan',
        evidence: 'Desain label kemasan SIRAMI Green & prototipe box packaging.'
    },
    {
        id: 6,
        stepNumber: '06',
        title: 'Pemasaran & Distribusi Komunitas',
        shortTitle: 'Pemasaran & Distribusi',
        category: 'Komersialisasi',
        responsible: 'Business Lead & Jaringan Relawan Komunitas',
        duration: '2x Seminggu (Jadwal Pengiriman Pagi)',
        status: 'Uji Pasar Mikro',
        statusType: 'ready',
        description: 'Pemasaran langsung berbasis pre-order ke dapur komunitas, keluarga santri, kafe salad perkotaan di Tasikmalaya, serta pemesanan online melalui katalog digital SIRAMI.',
        tools: 'Katalog digital website SIRAMI, pendingin insulasi portable (cooler box), armada motor santri antar lokal.',
        kpi: '100% pesanan terantar dalam kondisi segar maksimal 3 jam pasca-panen, tingkat komplain pelanggan 0%.',
        sopDoc: 'SOP-MKT-06: Manajemen Rantai Pasok Dingin & Layanan Antar',
        evidence: 'Database kontak 15 kafe & jaringan alumni pondok pesantren.'
    },
    {
        id: 7,
        stepNumber: '07',
        title: 'Penjualan Produk & Pencatatan Kas',
        shortTitle: 'Penjualan & Kas',
        category: 'Keuangan',
        responsible: 'Business & Impact Lead (Dinar Robiatul Adawiyah)',
        duration: 'Harian / Mingguan',
        status: 'Buku Kas Mandiri',
        statusType: 'verified',
        description: 'Penerimaan pembayaran tunai maupun QRIS, pencatatan otomatis di buku kas digital santri, pemisahan akun modal kerja benih, dan pengarsipan bukti transaksi yang transparan.',
        tools: 'Buku kas digital berbasis spreadsheet & ledger sederhana, QRIS merchant inovasi sosial, tanda terima nota.',
        kpi: 'Selisih kas 0 rupiah, margin kotor per tray terukur 35-42%, laporan laba-rugi dapat diakses terbuka oleh pengawas.',
        sopDoc: 'SOP-FIN-07: Tata Kelola Akuntansi Kas Transparan & Bagi Hasil Santri',
        evidence: 'Template pembukuan kas 5 pos belanja terverifikasi RAB Rp26 Jt.'
    },
    {
        id: 8,
        stepNumber: '08',
        title: 'Pemanfaatan Hasil untuk Komunitas',
        shortTitle: 'Pemanfaatan Hasil',
        category: 'Dampak Sosial',
        responsible: 'Pimpinan Pesantren Mitra & Community Lead',
        duration: 'Akhir Bulan Berjalan',
        status: 'Perjanjian Kemitraan',
        statusType: 'verified',
        description: 'Alokasi 30% panen microgreens untuk peningkatan gizi makanan santri di dapur pesantren, tabungan uang saku santri pelaksana, dan cadangan kas peremajaan filter air.',
        tools: 'Buku distribusi logistik pesantren, daftar penerima manfaat santri mukim, rekening kas mandiri sistem.',
        kpi: 'Peningkatan konsumsi serat hijau bergizi santri, insentif riil santri pengelola, kas peremajaan sistem terisi konsisten.',
        sopDoc: 'SOP-IMP-08: Pedoman Distribusi Manfaat Sosial & Penguatan Nutrisi',
        evidence: 'Klausul butir komitmen sosial pada Surat Dukungan Mitra 2026.'
    },
    {
        id: 9,
        stepNumber: '09',
        title: 'Evaluasi, Perawatan & Replikasi',
        shortTitle: 'Evaluasi & Replikasi',
        category: 'Keberlanjutan',
        responsible: 'Seluruh Tim SIRAMI & Reviewer Akademik',
        duration: 'Bulan 3 & 6 Pilot Project',
        status: 'Rencana Evaluasi SROI',
        statusType: 'ready',
        description: 'Audit berkala kualitas air, pembersihan endapan bak sedimentasi, pemangkasan rumput fitoremediasi, kalibrasi ulang sensor IoT, kalkulasi dampak SROI riil, serta penyusunan pedoman replikasi.',
        tools: 'Kit kalibrasi pH 4.01/7.00/10.01, alat pembersih bio-filter, instrumen evaluasi SROI (Social Return on Investment).',
        kpi: 'Performa filtrasi tetap > 85%, usia pakai media filter > 1 tahun, rasio SROI tervalidasi minimal 1 : 2.0, kesiapan blueprint replikasi ke pesantren lain.',
        sopDoc: 'SOP-MNT-09: Kalibrasi Triwulanan & Audit Keberlanjutan Sistem',
        evidence: 'Dokumen Theory of Change & kalkulator sensitivitas SROI SIRAMI.'
    }
];

const selectedStageId = ref(1);

const selectedStage = computed(() => {
    return stages.find(s => s.id === selectedStageId.value) || stages[0];
});

function selectStage(id) {
    selectedStageId.value = id;
}

function nextStage() {
    if (selectedStageId.value < stages.length) {
        selectedStageId.value++;
    } else {
        selectedStageId.value = 1;
    }
}

function prevStage() {
    if (selectedStageId.value > 1) {
        selectedStageId.value--;
    } else {
        selectedStageId.value = stages.length;
    }
}
</script>

<template>
    <section id="siklus-operasional" class="py-20 lg:py-28 bg-[#F7F5EF] text-[#26312B] relative overflow-hidden border-b border-[#E8E9E2]">
        <!-- Subtle background watermark -->
        <div class="absolute -top-32 -right-32 w-96 h-96 rounded-full bg-emerald-100/40 blur-3xl pointer-events-none"></div>
        <div class="absolute -bottom-32 -left-32 w-96 h-96 rounded-full bg-teal-100/30 blur-3xl pointer-events-none"></div>

        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 relative z-10 space-y-12">
            
            <!-- Section Header -->
            <div class="max-w-3xl space-y-4">
                <div class="inline-flex items-center gap-2 px-3 py-1 rounded-full bg-emerald-100 text-[#204E38] border border-emerald-300/60 text-xs font-bold uppercase tracking-wider">
                    <svg class="w-3.5 h-3.5 text-[#204E38]" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 4v5h.582m15.356 2A8.001 8.001 0 004.582 9m0 0H9m11 11v-5h-.581m0 0a8.003 8.003 0 01-15.357-2m15.357 2H15"/></svg>
                    <span>Siklus Operasional Berkelanjutan</span>
                </div>

                <h2 class="text-2xl sm:text-3xl lg:text-4xl font-black text-[#26312B] tracking-tight leading-tight">
                    9 Tahapan Sirkular: Dari Rekayasa Air Menuju Kemandirian Ekonomi
                </h2>

                <p class="text-sm sm:text-base text-slate-600 leading-relaxed">
                    Sistem SIRAMI dirancang agar tidak berhenti begitu konstruksi fisik selesai. Alur sirkular menghubungkan pengolahan air, pelatihan santri, produksi pangan bernutrisi, hingga pembukuan kas mandiri dan perawatan berkelanjutan.
                </p>
            </div>

            <!-- Main Interactive Layout -->
            <div class="grid grid-cols-1 lg:grid-cols-12 gap-8 items-start">
                
                <!-- LEFT COLUMN: Visual Flow Representation (Desktop / Tablet grid) -->
                <div class="lg:col-span-7 bg-white rounded-3xl p-6 sm:p-8 border border-[#E8E9E2] shadow-sm space-y-6">
                    <div class="flex items-center justify-between border-b border-slate-100 pb-4">
                        <div class="text-xs">
                            <span class="text-slate-400 uppercase tracking-wider font-mono font-bold block">Navigasi Siklus</span>
                            <span class="font-bold text-[#204E38]">Pilih Salah Satu dari 9 Tahapan</span>
                        </div>
                        <div class="flex items-center gap-1.5">
                            <button
                                @click="prevStage"
                                class="w-8 h-8 rounded-lg bg-slate-100 hover:bg-[#204E38] hover:text-white text-slate-700 flex items-center justify-center transition cursor-pointer"
                                title="Tahap Sebelumnya"
                                aria-label="Tahap Sebelumnya"
                            >
                                <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 19l-7-7 7-7"/></svg>
                            </button>
                            <button
                                @click="nextStage"
                                class="w-8 h-8 rounded-lg bg-slate-100 hover:bg-[#204E38] hover:text-white text-slate-700 flex items-center justify-center transition cursor-pointer"
                                title="Tahap Berikutnya"
                                aria-label="Tahap Berikutnya"
                            >
                                <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"/></svg>
                            </button>
                        </div>
                    </div>

                    <!-- 9-Step Circular Navigation Ribbon / Cards Grid -->
                    <div class="grid grid-cols-1 sm:grid-cols-3 gap-2.5">
                        <button
                            v-for="stg in stages"
                            :key="stg.id"
                            @click="selectStage(stg.id)"
                            class="p-3 rounded-2xl text-left border transition-all cursor-pointer relative group flex flex-col justify-between"
                            :class="[
                                selectedStageId === stg.id
                                    ? 'bg-[#204E38] text-white border-[#204E38] shadow-md shadow-emerald-900/10'
                                    : 'bg-[#F7F5EF] hover:bg-emerald-50/70 text-[#26312B] border-slate-200/80 hover:border-emerald-300'
                            ]"
                        >
                            <div class="flex items-center justify-between w-full">
                                <span
                                    class="text-[11px] font-mono font-bold px-2 py-0.5 rounded-md"
                                    :class="selectedStageId === stg.id ? 'bg-emerald-800 text-amber-300' : 'bg-slate-200 text-slate-600'"
                                >
                                    {{ stg.stepNumber }}
                                </span>
                                <span
                                    class="text-[10px] font-medium uppercase tracking-wider"
                                    :class="selectedStageId === stg.id ? 'text-emerald-200' : 'text-slate-400'"
                                >
                                    {{ stg.category }}
                                </span>
                            </div>

                            <div class="mt-2.5">
                                <h3
                                    class="font-bold text-xs sm:text-sm leading-snug line-clamp-2"
                                    :class="selectedStageId === stg.id ? 'text-white' : 'text-[#26312B] group-hover:text-[#204E38]'"
                                >
                                    {{ stg.shortTitle }}
                                </h3>
                                <p
                                    class="text-[11px] mt-1 truncate"
                                    :class="selectedStageId === stg.id ? 'text-emerald-100/80' : 'text-slate-500'"
                                >
                                    {{ stg.duration }}
                                </p>
                            </div>

                            <!-- Active pointer line -->
                            <div
                                v-if="selectedStageId === stg.id"
                                class="absolute -bottom-1 left-1/2 -translate-x-1/2 w-8 h-1 bg-amber-400 rounded-full"
                            ></div>
                        </button>
                    </div>

                    <!-- Flow Diagram Connecting Indicator -->
                    <div class="p-4 rounded-2xl bg-[#F7F5EF] border border-[#E8E9E2] flex items-center justify-between text-xs text-slate-600">
                        <div class="flex items-center gap-2">
                            <span class="w-2.5 h-2.5 rounded-full bg-emerald-600 animate-pulse"></span>
                            <span class="font-medium">Siklus Tertutup &middot; Tidak Menghasilkan Residu Limbah Baru</span>
                        </div>
                        <span class="font-mono text-[11px] font-bold text-[#204E38]">
                            Tahap {{ selectedStage.stepNumber }} dari 09
                        </span>
                    </div>
                </div>

                <!-- RIGHT COLUMN: Selected Stage Detailed Drawer Card -->
                <div class="lg:col-span-5 bg-white rounded-3xl p-6 sm:p-8 border border-[#E8E9E2] shadow-sm space-y-5">
                    <!-- Stage Header Badge -->
                    <div class="flex items-center justify-between gap-3 border-b border-slate-100 pb-4">
                        <div class="flex items-center gap-2.5">
                            <div class="w-10 h-10 rounded-xl bg-[#204E38] text-white flex items-center justify-center font-black font-mono text-base shadow-sm">
                                {{ selectedStage.stepNumber }}
                            </div>
                            <div>
                                <span class="text-[10px] font-bold uppercase tracking-wider text-emerald-800 block">
                                    {{ selectedStage.category }}
                                </span>
                                <h3 class="text-base sm:text-lg font-black text-[#26312B] leading-tight">
                                    {{ selectedStage.title }}
                                </h3>
                            </div>
                        </div>

                        <span class="px-2.5 py-1 rounded-full text-[10px] font-bold tracking-wide shrink-0 border"
                            :class="selectedStage.statusType === 'verified'
                                ? 'bg-emerald-50 text-emerald-800 border-emerald-300'
                                : 'bg-amber-50 text-amber-800 border-amber-300'"
                        >
                            {{ selectedStage.status }}
                        </span>
                    </div>

                    <!-- Activity Description -->
                    <div class="space-y-1.5">
                        <span class="text-[11px] font-bold uppercase tracking-wider text-slate-400 font-mono block">Deskripsi Aktivitas</span>
                        <p class="text-xs sm:text-sm text-slate-700 leading-relaxed">
                            {{ selectedStage.description }}
                        </p>
                    </div>

                    <!-- Metadata Grid: Responsible & Duration -->
                    <div class="grid grid-cols-1 sm:grid-cols-2 gap-3 pt-1">
                        <div class="p-3 rounded-2xl bg-[#F7F5EF] border border-[#E8E9E2]">
                            <span class="text-[10px] font-bold uppercase tracking-wider text-slate-500 font-mono block">Penanggung Jawab</span>
                            <span class="font-bold text-xs text-[#26312B] block mt-0.5">{{ selectedStage.responsible }}</span>
                        </div>
                        <div class="p-3 rounded-2xl bg-[#F7F5EF] border border-[#E8E9E2]">
                            <span class="text-[10px] font-bold uppercase tracking-wider text-slate-500 font-mono block">Durasi / Siklus</span>
                            <span class="font-bold text-xs text-[#204E38] block mt-0.5">{{ selectedStage.duration }}</span>
                        </div>
                    </div>

                    <!-- Tools & Materials Needed -->
                    <div class="space-y-1.5">
                        <span class="text-[11px] font-bold uppercase tracking-wider text-slate-400 font-mono block">Kebutuhan Alat & Bahan</span>
                        <div class="p-3 rounded-2xl bg-slate-50 border border-slate-200 text-xs text-slate-700 leading-relaxed">
                            {{ selectedStage.tools }}
                        </div>
                    </div>

                    <!-- Success Indicator (KPI) -->
                    <div class="space-y-1.5">
                        <span class="text-[11px] font-bold uppercase tracking-wider text-slate-400 font-mono block">Indikator Keberhasilan (KPI)</span>
                        <div class="p-3 rounded-2xl bg-emerald-50/70 border border-emerald-200 text-xs text-emerald-950 font-medium leading-relaxed flex items-start gap-2">
                            <svg class="w-4 h-4 text-emerald-700 shrink-0 mt-0.5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"/></svg>
                            <span>{{ selectedStage.kpi }}</span>
                        </div>
                    </div>

                    <!-- SOP Document & Evidence -->
                    <div class="pt-2 border-t border-slate-100 flex flex-col gap-2 text-xs">
                        <div class="flex items-center gap-2 text-slate-600">
                            <svg class="w-3.5 h-3.5 text-[#204E38]" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12h6m-6 4h6m2 5H7a2 2 0 01-2-2V5a2 2 0 012-2h5.586a1 1 0 01.707.293l5.414 5.414a1 1 0 01.293.707V19a2 2 0 01-2 2z"/></svg>
                            <span class="font-mono text-[11px] font-semibold text-slate-800">{{ selectedStage.sopDoc }}</span>
                        </div>
                        <div class="flex items-center gap-2 text-slate-500 text-[11px]">
                            <svg class="w-3.5 h-3.5 text-slate-400" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 12a3 3 0 11-6 0 3 3 0 016 0z"/><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M2.458 12C3.732 7.943 7.523 5 12 5c4.478 0 8.268 2.943 9.542 7-1.274 4.057-5.064 7-9.542 7-4.477 0-8.268-2.943-9.542-7z"/></svg>
                            <span>{{ selectedStage.evidence }}</span>
                        </div>
                    </div>
                </div>

            </div>

        </div>
    </section>
</template>
