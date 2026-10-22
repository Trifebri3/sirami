<script setup>
import { Head, Link } from '@inertiajs/vue3';
import { ref } from 'vue';
import PublicLayout from '@/Layouts/PublicLayout.vue';

const props = defineProps({
    logo: Object,
    budget: Object,
    pilotInfo: Object,
});

const formSubmitted = ref(false);
const formData = ref({
    name: '',
    organization: '',
    email: '',
    phone: '',
    type: 'pendanaan_penuh',
    nominal: '',
    note: '',
});

function submitSupport() {
    formSubmitted.value = true;
    setTimeout(() => {
        formSubmitted.value = false;
        formData.value = { name: '', organization: '', email: '', phone: '', type: 'pendanaan_penuh', nominal: '', note: '' };
    }, 4000);
}
</script>

<template>
    <PublicLayout :logo="logo" title="Dukung Implementasi SIRAMI - RAB Transparan & Kemitraan SYLS 2026">
        <!-- Hero Header -->
        <section class="py-12 lg:py-16 bg-gradient-to-b from-white via-white to-[#F7F5EF] border-b border-slate-200/80">
            <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
                <div class="max-w-3xl space-y-4">
                    <div class="flex flex-wrap items-center gap-2">
                        <div class="inline-flex items-center gap-2 px-3.5 py-1.5 rounded-full bg-[#E8E9E2] border border-[#A8B99B] text-[#204E38] text-xs font-bold uppercase tracking-wider">
                            <span>Kemitraan & Pendanaan Pilot &middot; SYLS 2026 (Tahap Pengajuan)</span>
                        </div>
                        <span class="px-3 py-1 rounded-full bg-[#204E38] text-white text-xs font-bold font-mono">
                            Target Rp26.000.000 (12 Pos Komponen)
                        </span>
                    </div>

                    <h1 class="text-3xl sm:text-5xl font-black text-[#26312B] tracking-tight leading-tight">
                        Dukung Implementasi <span class="text-[#204E38]">SIRAMI</span>
                    </h1>

                    <p class="text-slate-600 text-sm sm:text-base leading-relaxed">
                        Kami mengundang para donor, filantropi Islam, lembaga pengelola ZISWAF, korporasi CSR, dan investor berdampak untuk bersama-sama mendanai pelaksanaan pilot project 6 bulan di Tasikmalaya dengan transparansi anggaran penuh.
                    </p>
                </div>
            </div>
        </section>

        <!-- Tabel RAB Transparan -->
        <section class="py-16 bg-white border-b border-slate-200/80">
            <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
                <div class="max-w-2xl mb-10">
                    <span class="text-xs font-bold text-[#204E38] bg-[#E8E9E2] px-3 py-1 rounded-md border border-[#A8B99B]/50 uppercase tracking-wider">
                        Transparansi Rencana Anggaran
                    </span>
                    <h2 class="text-2xl sm:text-3xl font-black text-[#26312B] mt-2">
                        Rincian Anggaran Biaya (RAB) Pilot Terpadu
                    </h2>
                    <p class="text-xs sm:text-sm text-slate-600 mt-1">
                        Total kebutuhan dana tunai sebesar <strong>Rp26.000.000</strong> dialokasikan secara efisien ke dalam 12 pos belanja terukur dalam 3 kategori utama.
                    </p>
                </div>

                <div class="border border-slate-200 rounded-3xl overflow-hidden bg-white shadow-xs">
                    <table class="w-full text-left text-xs sm:text-sm">
                        <thead class="bg-slate-50 border-b border-slate-200 text-slate-700 font-bold uppercase text-[11px]">
                            <tr>
                                <th class="py-4 px-6">Pos Belanja</th>
                                <th class="py-4 px-6">Proporsi</th>
                                <th class="py-4 px-6">Rincian Peruntukan Spesifik</th>
                                <th class="py-4 px-6 text-right">Alokasi Dana</th>
                            </tr>
                        </thead>
                        <tbody class="divide-y divide-slate-100">
                            <tr v-for="(item, idx) in budget?.items" :key="idx" class="hover:bg-[#F7F5EF]/60 transition">
                                <td class="py-4 px-6 font-bold text-[#26312B] align-top">{{ item.category }}</td>
                                <td class="py-4 px-6 font-mono font-semibold text-[#204E38] align-top">{{ item.percentage }}</td>
                                <td class="py-4 px-6 text-slate-600 text-xs leading-relaxed align-top">{{ item.note }}</td>
                                <td class="py-4 px-6 text-right font-mono font-bold text-[#26312B] align-top">{{ item.amount }}</td>
                            </tr>
                        </tbody>
                        <tfoot class="bg-[#F7F5EF] border-t border-[#A8B99B] font-bold">
                            <tr>
                                <td colspan="3" class="py-5 px-6 text-[#204E38] text-sm">TOTAL KEBUTUHAN ANGGARAN TUNAI (6 BULAN)</td>
                                <td class="py-5 px-6 text-right font-mono text-lg text-[#204E38]">{{ budget?.total }}</td>
                            </tr>
                        </tfoot>
                    </table>
                </div>

                <p class="text-xs text-slate-500 mt-4 leading-relaxed">
                    * {{ budget?.non_cash_notes }}
                </p>
            </div>
        </section>

        <!-- Formulir Komitmen Kemitraan & Donasi Interaktif -->
        <section class="py-16 bg-[#F7F5EF]/50 border-b border-slate-200/80">
            <div class="max-w-4xl mx-auto px-4 sm:px-6 lg:px-8">
                <div class="bg-white rounded-3xl p-8 sm:p-12 border border-slate-200 shadow-lg space-y-6">
                    <div class="text-center max-w-xl mx-auto space-y-2">
                        <span class="text-xs font-bold text-[#204E38] bg-[#E8E9E2] px-3 py-1 rounded-md uppercase tracking-wider">
                            Formulir Kolaborasi Resmi
                        </span>
                        <h2 class="text-2xl sm:text-3xl font-black text-[#26312B]">
                            Sampaikan Komitmen Dukungan Anda
                        </h2>
                        <p class="text-xs sm:text-sm text-slate-600">
                            Tim koordinator Mahasiswa UIN Bandung akan menindaklanjuti pesan Anda dalam waktu 1x24 jam untuk koordinasi proposal resmi dan administrasi kerja sama.
                        </p>
                    </div>

                    <div v-if="!formSubmitted">
                        <form @submit.prevent="submitSupport" class="space-y-4 pt-4">
                            <div class="grid grid-cols-1 sm:grid-cols-2 gap-4">
                                <div>
                                    <label class="block text-xs font-bold text-slate-700 uppercase">Nama Lengkap / Kontak PIC *</label>
                                    <input
                                        v-model="formData.name"
                                        type="text"
                                        required
                                        placeholder="Nama Anda"
                                        class="mt-1 w-full rounded-xl border border-slate-300 px-3.5 py-2.5 text-sm focus:border-[#204E38] focus:ring-1 focus:ring-[#204E38] outline-none"
                                    />
                                </div>
                                <div>
                                    <label class="block text-xs font-bold text-slate-700 uppercase">Lembaga / Yayasan / Perusahaan</label>
                                    <input
                                        v-model="formData.organization"
                                        type="text"
                                        placeholder="Nama instansi atau pribadi"
                                        class="mt-1 w-full rounded-xl border border-slate-300 px-3.5 py-2.5 text-sm focus:border-[#204E38] focus:ring-1 focus:ring-[#204E38] outline-none"
                                    />
                                </div>
                            </div>

                            <div class="grid grid-cols-1 sm:grid-cols-2 gap-4">
                                <div>
                                    <label class="block text-xs font-bold text-slate-700 uppercase">Email Korespondensi *</label>
                                    <input
                                        v-model="formData.email"
                                        type="email"
                                        required
                                        placeholder="nama@lembaga.com"
                                        class="mt-1 w-full rounded-xl border border-slate-300 px-3.5 py-2.5 text-sm focus:border-[#204E38] focus:ring-1 focus:ring-[#204E38] outline-none"
                                    />
                                </div>
                                <div>
                                    <label class="block text-xs font-bold text-slate-700 uppercase">WhatsApp Aktif *</label>
                                    <input
                                        v-model="formData.phone"
                                        type="tel"
                                        required
                                        placeholder="0812..."
                                        class="mt-1 w-full rounded-xl border border-slate-300 px-3.5 py-2.5 text-sm focus:border-[#204E38] focus:ring-1 focus:ring-[#204E38] outline-none"
                                    />
                                </div>
                            </div>

                            <div>
                                <label class="block text-xs font-bold text-slate-700 uppercase">Bentuk Dukungan / Kemitraan *</label>
                                <select
                                    v-model="formData.type"
                                    class="mt-1 w-full rounded-xl border border-slate-300 px-3.5 py-2.5 text-sm focus:border-[#204E38] focus:ring-1 focus:ring-[#204E38] outline-none"
                                >
                                    <option value="pendanaan_penuh">Pendanaan Penuh Pilot (Rp26.000.000)</option>
                                    <option value="pendanaan_parsial">Pendanaan Parsial / Hibah Bertahap</option>
                                    <option value="mitra_teknologi">Mitra Solusi Teknis / Sensor IoT / Lab Uji Air</option>
                                    <option value="mitra_pasar">Mitra Pembelian / Penyaluran Pasar Microgreens</option>
                                    <option value="kolaborasi_riset">Dukungan Publikasi Riset & Akademis</option>
                                </select>
                            </div>

                            <div>
                                <label class="block text-xs font-bold text-slate-700 uppercase">Catatan / Rencana Dukungan</label>
                                <textarea
                                    v-model="formData.note"
                                    rows="3"
                                    placeholder="Tuliskan detail dukungan, jadwal pertemuan diskusi, atau pertanyaan teknis..."
                                    class="mt-1 w-full rounded-xl border border-slate-300 px-3.5 py-2.5 text-sm focus:border-[#204E38] focus:ring-1 focus:ring-[#204E38] outline-none"
                                ></textarea>
                            </div>

                            <button
                                type="submit"
                                class="w-full py-4 rounded-xl bg-[#204E38] hover:bg-[#163828] text-white font-bold text-sm transition shadow-md shadow-[#204E38]/20 cursor-pointer flex items-center justify-center gap-2"
                            >
                                <span>Kirim Komitmen Dukungan</span>
                                <span>&rarr;</span>
                            </button>
                        </form>
                    </div>

                    <div v-else class="text-center py-12 space-y-3 bg-[#F7F5EF] rounded-2xl p-6 border border-[#A8B99B]/60">
                        <div class="w-12 h-12 mx-auto rounded-full bg-[#204E38] text-white flex items-center justify-center">
                            <svg class="w-6 h-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5" d="M5 13l4 4L19 7" />
                            </svg>
                        </div>
                        <h4 class="text-xl font-bold text-[#26312B]">Terima Kasih atas Minat Kolaborasi Anda!</h4>
                        <p class="text-xs sm:text-sm text-slate-600 max-w-md mx-auto">
                            Komitmen dukungan telah tercatat dalam sistem SIRAMI. Tim inovator Mahasiswa UIN Sunan Gunung Djati Bandung akan segera menghubungi Anda.
                        </p>
                    </div>
                </div>
            </div>
        </section>
    </PublicLayout>
</template>
