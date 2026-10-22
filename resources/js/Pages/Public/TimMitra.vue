<script setup>
import { Head, Link } from '@inertiajs/vue3';
import PublicLayout from '@/Layouts/PublicLayout.vue';
import TeamEvidenceShowcase from '@/Components/TeamEvidenceShowcase.vue';

const props = defineProps({
    logo: Object,
    team: Array,
    pilotInfo: Object,
    teamEvidence: Array,
});

function openSylsModal() {
    if (typeof window !== 'undefined') {
        window.dispatchEvent(new CustomEvent('open-syls-modal'));
    }
}
</script>

<template>
    <PublicLayout :logo="logo" title="Tim Inovator & Mitra - Mahasiswa UIN Sunan Gunung Djati Bandung">
        <!-- Hero Header -->
        <section class="py-12 lg:py-16 bg-gradient-to-b from-white via-white to-emerald-50/30 border-b border-slate-200/80">
            <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
                <div class="max-w-3xl space-y-4">
                    <div class="flex flex-wrap items-center gap-2">
                        <div class="inline-flex items-center gap-2 px-3.5 py-1.5 rounded-full bg-[#E8E9E2] border border-[#A8B99B] text-[#204E38] text-xs font-bold uppercase tracking-wider">
                            <span>Inisiator Mahasiswa UIN Bandung</span>
                        </div>
                        <button
                            type="button"
                            @click="openSylsModal"
                            class="inline-flex items-center gap-2 px-3.5 py-1.5 rounded-full bg-gradient-to-r from-amber-50 via-white to-amber-50 hover:bg-amber-100/80 border border-amber-300 hover:border-amber-400 text-amber-950 text-xs font-bold uppercase tracking-wider shadow-2xs transition cursor-pointer group"
                            title="Klik untuk melihat detail proposal untuk program SYLS 2026"
                        >
                            <span class="bg-white px-2 py-0.5 rounded shadow-2xs border border-amber-200/70 flex items-center">
                                <img :src="logo?.syls || '/syls.png'" class="h-4 w-auto object-contain" alt="SYLS 2026" />
                            </span>
                            <span>Program SYLS 2026</span>
                            <span class="text-[10px] bg-amber-200 group-hover:bg-amber-300 text-amber-900 px-1.5 py-0.5 rounded font-mono font-bold transition">Buka Detail ↗</span>
                        </button>
                    </div>

                    <h1 class="text-3xl sm:text-5xl font-black text-slate-900 tracking-tight leading-tight">
                        Tim Inovator & <span class="text-emerald-800">Mitra Kolaborasi</span>
                    </h1>

                    <p class="text-slate-600 text-sm sm:text-base leading-relaxed">
                        SIRAMI digagas dan dikembangkan secara mandiri oleh mahasiswa <strong>UIN Sunan Gunung Djati Bandung</strong> lintas disiplin: rekayasa teknologi IoT, studi kelayakan bisnis sosial sirkular, dan pendampingan santri pesantren.
                    </p>
                </div>
            </div>
        </section>

        <!-- Profil Tim Mahasiswa UIN Bandung -->
        <section class="py-16 bg-white border-b border-slate-200/80">
            <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
                <div class="max-w-2xl mb-12">
                    <span class="text-xs font-bold text-emerald-800 bg-emerald-50 px-3 py-1 rounded-md border border-emerald-200 uppercase tracking-wider">
                        Inisiator & Peneliti Utama
                    </span>
                    <h2 class="text-2xl sm:text-3xl font-black text-slate-900 mt-2">
                        Tim Mahasiswa UIN Sunan Gunung Djati Bandung
                    </h2>
                    <p class="text-xs sm:text-sm text-slate-600 mt-1">
                        Pembagian peran, akuntabilitas, dan ruang lingkup kerja setiap inovator.
                    </p>

                    <!-- CV Quick Access Bar -->
                    <div class="mt-4 flex flex-wrap items-center gap-2">
                        <span class="text-xs font-bold text-[#26312B] font-mono">Berkas CV Resmi:</span>
                        <a
                            v-for="(member, cidx) in team"
                            :key="cidx"
                            v-show="member.cv_url"
                            :href="member.cv_url"
                            target="_blank"
                            class="inline-flex items-center gap-1.5 px-3 py-1 rounded-full bg-[#F7F5EF] hover:bg-[#E8E9E2] text-[#204E38] border border-[#A8B99B]/50 text-xs font-semibold transition shadow-2xs cursor-pointer"
                        >
                            <svg class="w-3.5 h-3.5 text-[#204E38]" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12h6m-6 4h6m2 5H7a2 2 0 01-2-2V5a2 2 0 012-2h5.586a1 1 0 01.707.293l5.414 5.414a1 1 0 01.293.707V19a2 2 0 01-2 2z" />
                            </svg>
                            <span>CV {{ member.name.split(' ')[0] }} (PDF)</span>
                        </a>
                    </div>
                </div>

                <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
                    <div
                        v-for="(member, idx) in team"
                        :key="idx"
                        class="bg-white rounded-3xl p-7 border border-slate-200 shadow-xs hover:border-emerald-600 hover:shadow-lg transition-all duration-300 flex flex-col justify-between group space-y-6"
                    >
                        <div class="space-y-4">
                            <!-- Header Member with Photo -->
                            <div class="flex items-center gap-4">
                                <div class="w-16 h-16 rounded-2xl bg-slate-100 overflow-hidden border-2 border-emerald-500/30 shrink-0 group-hover:scale-105 transition-transform shadow-xs">
                                    <img
                                        :src="member.photo || '/tim/tri.svg'"
                                        :alt="member.name"
                                        class="w-full h-full object-cover"
                                    />
                                </div>
                                <div class="min-w-0">
                                    <h3 class="text-base font-bold text-slate-900 group-hover:text-emerald-800 transition truncate">
                                        {{ member.name }}
                                    </h3>
                                    <span class="text-xs font-bold text-emerald-700 block truncate">
                                        {{ member.role }}
                                    </span>
                                    <span class="text-[11px] text-slate-500 block truncate">
                                        {{ member.institution }}
                                    </span>
                                </div>
                            </div>

                            <!-- Ground-level / Tasikmalaya highlight badge -->
                            <div v-if="member.name.includes('Mariya')" class="p-2.5 rounded-xl bg-teal-50 border border-teal-200/90 text-teal-950 text-xs font-bold flex items-start gap-2 shadow-2xs">
                                <span class="text-base shrink-0">🧕</span>
                                <span class="leading-snug">Santri di PP Al-Qur'an Hidayatul Mustafid Tasikmalaya (Akses & Kepercayaan Kultural Langsung)</span>
                            </div>
                            <div v-else-if="member.name.includes('Tri')" class="p-2.5 rounded-xl bg-amber-50 border border-amber-200/90 text-amber-950 text-xs font-bold flex items-start gap-2 shadow-2xs">
                                <span class="text-base shrink-0">🌾</span>
                                <span class="leading-snug">Sedang Kolaborasi Riset & Pendampingan Petani di Tasikmalaya dan Banjar</span>
                            </div>
                            <div v-else class="p-2.5 rounded-xl bg-emerald-50 border border-emerald-200/90 text-emerald-950 text-xs font-bold flex items-start gap-2 shadow-2xs">
                                <span class="text-base shrink-0">🏡</span>
                                <span class="leading-snug">Keterikatan Warga Lokal, Efisiensi Biaya HPP & Evaluasi Dampak SROI</span>
                            </div>

                            <!-- Competency & Scope -->
                            <div class="p-3.5 rounded-xl bg-slate-50 border border-slate-100 space-y-1 text-xs">
                                <span class="text-[10px] font-bold text-slate-400 uppercase tracking-wider block">Fokus & Kompetensi:</span>
                                <p class="font-bold text-slate-800">{{ member.competency }}</p>
                                <p class="text-slate-600 text-[11px] leading-relaxed pt-1">{{ member.scope }}</p>
                            </div>

                            <!-- Responsibilities -->
                            <div class="space-y-1.5 text-xs">
                                <span class="text-[10px] font-bold text-slate-400 uppercase tracking-wider block">Tanggung Jawab Proyek:</span>
                                <ul class="space-y-1 text-slate-600 text-[11px]">
                                    <li v-for="(resp, ridx) in member.responsibilities" :key="ridx" class="flex items-start gap-1.5">
                                        <span class="text-emerald-600 font-bold mt-0.5">&bull;</span>
                                        <span class="leading-tight">{{ resp }}</span>
                                    </li>
                                </ul>
                            </div>

                            <!-- Achievements / Awards -->
                            <div class="space-y-1.5 text-xs pt-1">
                                <span class="text-[10px] font-bold text-slate-400 uppercase tracking-wider block">Rekam Jejak & Prestasi:</span>
                                <div class="space-y-1.5">
                                    <div
                                        v-for="(ach, aidx) in member.achievements"
                                        :key="aidx"
                                        class="p-2 rounded-lg bg-emerald-50/70 border border-emerald-200/60 text-[11px] font-semibold text-emerald-950 flex items-start gap-1.5"
                                    >
                                        <span class="shrink-0 mt-0.5">🏅</span>
                                        <span class="leading-snug">{{ ach }}</span>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- Card Footer with CV Download Button -->
                        <div class="pt-4 border-t border-slate-100 flex flex-col sm:flex-row items-start sm:items-center justify-between gap-2.5 text-xs">
                            <span class="font-mono font-bold px-2.5 py-1 rounded-md bg-emerald-100 text-emerald-900 text-[11px]">
                                Porsi Kontribusi: {{ member.contribution_pct || '33' }}%
                            </span>

                            <a
                                v-if="member.cv_url"
                                :href="member.cv_url"
                                target="_blank"
                                class="inline-flex items-center gap-1.5 px-3.5 py-2 rounded-xl bg-[#204E38] hover:bg-[#163828] text-white font-bold text-xs transition shadow-xs group/btn cursor-pointer"
                            >
                                <svg class="w-3.5 h-3.5 text-[#A8B99B] group-hover/btn:translate-y-0.5 transition-transform" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 10v6m0 0l-3-3m3 3l3-3m2 8H7a2 2 0 01-2-2V5a2 2 0 012-2h5.586a1 1 0 01.707.293l5.414 5.414a1 1 0 01.293.707V19a2 2 0 01-2 2z" />
                                </svg>
                                <span>Unduh CV (PDF)</span>
                            </a>
                            <span v-else class="text-slate-500 font-medium">UIN SGD Bandung</span>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- BUKTI DOKUMENTASI, REKAM JEJAK & KESIAPAN PERANGKAT NYATA -->
        <TeamEvidenceShowcase :evidence="teamEvidence" />

        <!-- Mitra Lapangan & Ekosistem Pendukung -->
        <section class="py-16 bg-[#F8FAF8] border-b border-slate-200/80">
            <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
                <div class="grid grid-cols-1 lg:grid-cols-12 gap-10 items-start">
                    
                    <!-- Mitra Pesantren Card -->
                    <div class="lg:col-span-7 bg-white p-8 rounded-3xl border border-slate-200 shadow-sm space-y-5">
                        <div class="flex flex-wrap items-center gap-2">
                            <span class="text-xs font-bold text-amber-800 bg-amber-100 px-3 py-1 rounded-md uppercase tracking-wider">
                                Mitra Lokasi Pilot Lapangan (Bukan Pemilik Proyek)
                            </span>
                            <span class="text-xs font-bold text-emerald-800 bg-emerald-50 px-2.5 py-1 rounded-md border border-emerald-200">
                                Dukungan Tertulis Resmi
                            </span>
                        </div>

                        <h3 class="text-2xl font-black text-slate-900">
                            {{ pilotInfo?.pesantren_name }}
                        </h3>

                        <p class="text-xs sm:text-sm text-slate-600 leading-relaxed">
                            Pondok pesantren dipimpin oleh <strong>{{ pilotInfo?.pimpinan }}</strong> dan menjadi mitra lokasi implementasi percontohan awal untuk menguji sistem pengolahan air dan budidaya microgreens santri.
                        </p>

                        <!-- Box Kenapa Tasikmalaya: 3 Alasan Nyata di Akar Rumput -->
                        <div class="p-5 rounded-2xl bg-gradient-to-br from-[#163828] via-[#204E38] to-[#163828] text-white border border-[#A8B99B]/30 space-y-3">
                            <div class="flex items-center justify-between gap-2 border-b border-white/10 pb-2">
                                <span class="text-xs font-mono font-bold text-[#A8B99B] uppercase tracking-wider flex items-center gap-1.5">
                                    <svg class="w-3.5 h-3.5 text-[#A8B99B]" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 16h-1v-4h-1m1-4h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z" />
                                    </svg>
                                    <span>Kenapa Memilih Tasikmalaya & Pesantren Ini?</span>
                                </span>
                                <span class="text-[10px] font-mono text-[#A8B99B] bg-[#123624] px-2 py-0.5 rounded border border-[#A8B99B]/30">
                                    3 Alasan Lapangan
                                </span>
                            </div>

                            <div class="space-y-2 text-xs">
                                <div class="flex items-start gap-2.5 p-2 rounded-xl bg-white/5 border border-white/10">
                                    <div class="w-6 h-6 rounded-lg bg-[#E8E9E2]/20 text-[#A8B99B] flex items-center justify-center shrink-0 mt-0.5">
                                        <svg class="w-3.5 h-3.5" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 12l2-2m0 0l7-7 7 7M5 10v10a1 1 0 001 1h3m10-11l2 2m-2-2v10a1 1 0 01-1 1h-3m-6 0a1 1 0 001-1v-4a1 1 0 011-1h2a1 1 0 011 1v4a1 1 0 001 1m-6 0h6" />
                                        </svg>
                                    </div>
                                    <div>
                                        <strong class="text-[#A8B99B]">1. Ada Orang Sana (Keterikatan Warga & Putra Daerah):</strong>
                                        <p class="text-slate-200 text-[11px] mt-0.5">
                                            Jejaring warga lokal di Tasikmalaya memudahkan koordinasi dan penerimaan sosial tanpa sekat birokrasi pihak luar.
                                        </p>
                                    </div>
                                </div>

                                <div class="flex items-start gap-2.5 p-2 rounded-xl bg-white/5 border border-white/10">
                                    <div class="w-6 h-6 rounded-lg bg-[#E8E9E2]/20 text-[#A8B99B] flex items-center justify-center shrink-0 mt-0.5">
                                        <svg class="w-3.5 h-3.5" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M16 7a4 4 0 11-8 0 4 4 0 018 0zM12 14a7 7 0 00-7 7h14a7 7 0 00-7-7z" />
                                        </svg>
                                    </div>
                                    <div>
                                        <strong class="text-[#A8B99B]">2. Mariya adalah Santri di Sana (Kepercayaan Kultural Langsung):</strong>
                                        <p class="text-slate-200 text-[11px] mt-0.5">
                                            Neng Mariya Ulfa Mardiyah adalah santri aktif di pesantren ini, menciptakan tingkat kepercayaan (trust) tinggi dari KH. Nandang Ja'far Shiddiq dan dewan asatidz.
                                        </p>
                                    </div>
                                </div>

                                <div class="flex items-start gap-2.5 p-2 rounded-xl bg-white/5 border border-white/10">
                                    <div class="w-6 h-6 rounded-lg bg-[#E8E9E2]/20 text-[#A8B99B] flex items-center justify-center shrink-0 mt-0.5">
                                        <svg class="w-3.5 h-3.5" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 19l9 2-9-18-9 18 9-2zm0 0v-8" />
                                        </svg>
                                    </div>
                                    <div>
                                        <strong class="text-[#A8B99B]">3. Tri Sedang Riset & Pendampingan Petani di Tasikmalaya & Banjar:</strong>
                                        <p class="text-slate-200 text-[11px] mt-0.5">
                                            Tri Febriansah aktif mendampingi kelompok tani di Priangan Timur, menjamin kehadiran intensif di lapangan dan penguasaan agroklimat serta pasar sayuran.
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="text-xs text-slate-600 bg-slate-50 p-4 rounded-xl border border-slate-200 space-y-1">
                            <p><strong>Dasar Legalitas:</strong> Surat Dukungan No. 18/X/PPHM/2026 (18 Oktober 2026)</p>
                            <p><strong>Peran:</strong> Penyedia fasilitas lapangan, penampungan wudu, lahan budidaya 350 bata, dan santri aktif.</p>
                        </div>

                        <div class="pt-2 flex flex-wrap gap-3">
                            <a
                                :href="pilotInfo?.support_letter_pdf || '/data/Surat Persetujuan Pst.pdf'"
                                target="_blank"
                                class="px-5 py-2.5 rounded-xl bg-[#204E38] hover:bg-[#163828] text-white font-bold text-xs transition flex items-center gap-2 cursor-pointer shadow-xs"
                            >
                                <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 10v6m0 0l-3-3m3 3l3-3m2 8H7a2 2 0 01-2-2V5a2 2 0 012-2h5.586a1 1 0 01.707.293l5.414 5.414a1 1 0 01.293.707V19a2 2 0 01-2 2z" /></svg>
                                <span>Unduh Surat Dukungan Resmi (PDF)</span>
                            </a>
                        </div>
                    </div>

                    <!-- Ekosistem & Calon Kolaborator -->
                    <div class="lg:col-span-5 space-y-4">
                        <div class="p-6 bg-white rounded-2xl border border-slate-200 shadow-2xs space-y-2">
                            <span class="text-[10px] font-bold uppercase tracking-wider text-[#204E38]">Perguruan Tinggi</span>
                            <h4 class="text-sm font-bold text-slate-900">UIN Sunan Gunung Djati Bandung</h4>
                            <p class="text-xs text-slate-600 leading-relaxed">
                                Institusi asal inovator mahasiswa penggagas inisiatif riset SIRAMI yang diajukan untuk Sharia Young Leader Summit (SYLS) 2026.
                            </p>
                        </div>

                        <div class="p-6 bg-white rounded-2xl border border-slate-200 shadow-2xs space-y-2">
                            <span class="text-[10px] font-bold uppercase tracking-wider text-slate-500">Calon Mitra Teknis</span>
                            <h4 class="text-sm font-bold text-slate-900">Jejaring Diskusi Solusi IoT</h4>
                            <p class="text-xs text-slate-600 leading-relaxed">
                                Diskusi teknis dengan pihak pengembang IoT (seperti AGRONEX) serta laboratorium pengujian mutu air terakreditasi.
                            </p>
                        </div>

                        <div class="p-6 bg-gradient-to-br from-[#163828] via-[#204E38] to-[#163828] text-white rounded-2xl space-y-2 shadow-md border border-[#A8B99B]/30">
                            <h4 class="text-sm font-bold">Ingin Bergabung Sebagai Mitra?</h4>
                            <p class="text-xs text-slate-200">
                                Kami membuka pintu kolaborasi bagi akademisi, donor, pemasok benih, dan mitra penyalur pasar.
                            </p>
                            <Link
                                :href="route('dukung.implementasi')"
                                class="inline-block pt-1 text-xs font-bold text-[#A8B99B] hover:underline"
                            >
                                Buka Formulir Kemitraan &rarr;
                            </Link>
                        </div>
                    </div>

                </div>
            </div>
        </section>
    </PublicLayout>
</template>
