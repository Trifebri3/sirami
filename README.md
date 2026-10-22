# SIRAMI (Sirkular Air, Pangan & Ekonomi Komunitas)

> **Inovasi Sosial Berbasis Riset Mahasiswa UIN Sunan Gunung Djati Bandung**  
> *Diajukan khusus untuk seleksi Sharia Young Leader Summit (SYLS) 2026*  
> *(Status: Tahap Pengajuan Proposal · Bukan/Belum Terpilih)*

---

## 🌿 Tentang SIRAMI

**SIRAMI** adalah platform inovasi sosial terintegrasi yang dirancang untuk menjawab tantangan krisis air, ketahanan pangan lokal, dan kemandirian ekonomi pesantren melalui pendekatan **Human-Centered Design (HCD)** dan **Asset-Based Community Development (ABCD)**.

Sistem mengintegrasikan:
1. **Pengolahan & Penghematan Air (Water Treatment):** Filtrasi bertahap multi-media dan fitoremediasi tanaman lokal (vetiver) untuk memanfaatkan limpasan air wudu (*greywater*).
2. **Monitoring Sensor IoT Terkalibrasi:** Pengawasan *real-time* parameter kualitas air (pH, TDS/EC, turbiditas) berbasis mikrokontroler hemat daya dengan pencatatan berkala.
3. **Gerbang Keselamatan Baku (Zero-Risk Health Gate):** Verifikasi kualitas air sebelum dialirkan ke sistem budidaya pangan.
4. **Produksi Pangan Cepat Panen (Microgreens):** Budidaya sayuran muda padat nutrisi (*sulforaphane*, vitamin, mineral) berumur panen 7–14 hari di lahan pekarangan terbatas.
5. **Eksplorasi Budidaya Ikan Terpadu:** Opsi kolam air tawar terintegrasi dengan verifikasi baku mutu air.
6. **Kemandirian Ekonomi Syariah (Santripreneur):** Pelatihan SOP budidaya, standarisasi kemasan *biodegradable*, pembukuan kas mandiri, penetapan HPP, dan distribusi pasar ke Kota Tasikmalaya.

---

## 📍 Lokasi & Mitra Pilot Lapangan

- **Mitra Lokasi:** Pondok Pesantren Al-Qur'an Hidayatul Mustafid
- **Pimpinan:** KH. Nandang Ja'far Shiddiq
- **Alamat:** Kp. Sindangresik, Kel. Awipari, Kec. Cibeureum, Kota Tasikmalaya, Jawa Barat
- **Koordinat:** `-7.348334, 108.270080` (7°20'54.0"S 108°16'12.3"E)
- **Surat Pernyataan Dukungan:** No. 18/X/PPHM/2026 (18 Oktober 2026)
- **Klarifikasi:** Inovasi ini digagas dan dimiliki oleh **Tim Mahasiswa UIN Sunan Gunung Djati Bandung**. Pondok pesantren berkedudukan sebagai mitra fasilitas lokasi pilot lapangan.

---

## 👥 Tim Inovator Mahasiswa UIN Sunan Gunung Djati Bandung

1. **Tri Febriansah** — *Technology & Product Lead* (Rekayasa Sistem IoT, Pemodelan Sensor & Monitoring Air)
2. **Dinar Robiatul Adawiyah** — *Business & Impact Lead* (Kelayakan Bisnis Sosial, Akuntansi Biaya HPP & Evaluasi SROI)
3. **Neng Mariya Ulfa Mardiyah** — *Community & Operations Lead* (Pemberdayaan Santri, SOP Budidaya & Fasilitasi Komunitas)

---

## 💰 Rencana Anggaran Biaya (RAB) Pilot Terpadu

Total kebutuhan dana tunai pelaksanaan pilot 6 bulan adalah **Rp26.000.000** yang terdistribusi ke dalam 12 pos belanja terperinci:

1. **Perangkat & Infrastruktur (57.7% / Rp15.000.000):**
   - IoT & sensor kualitas air terkalibrasi
   - Sistem budidaya microgreens bertingkat
   - Instalasi saung produksi & perpipaan irigasi
2. **Pelatihan, Tim & Konsumsi (26.9% / Rp7.000.000):**
   - Modul pelatihan & edukasi santri/komunitas
   - Operasional tim pelaksana & mobilisasi lapangan
   - Konsumsi kegiatan pelatihan
3. **Pemasaran & Biaya Pendukung (15.4% / Rp4.000.000):**
   - Branding & packaging ramah lingkungan
   - Uji laboratorium baku air berkala
   - Operasional bahan habis pakai & dana tak terduga

*Kontribusi nonkas mitra (akses fasilitas, sumur, toren, dan lahan pekarangan) dicatat terpisah sebagai in-kind contribution.*

---

## 🛠️ Tech Stack Platform

- **Backend:** Laravel 12 (PHP 8.4)
- **Frontend SPA:** Inertia.js v2 + Vue 3 (Composition API, `<script setup>`)
- **Styling:** Tailwind CSS (Custom Color System: Forest Green `#204E38`, Sage Green `#A8B99B`, Warm Ivory `#F7F5EF`, Soft Neutral `#E8E9E2`)
- **Build Tool:** Vite v8
- **Testing:** Pest PHP Framework (26 Feature Tests, 73 Assertions)
- **Aset & Dokumen:** Interactive SVG Water System, Digital PDF Viewer, Audio-Visual Tour

---

## 🚀 Panduan Menjalankan Proyek Lokal

### Prasyarat
- PHP >= 8.2 (disarankan PHP 8.4) + Composer
- Node.js >= 18.x + NPM
- SQLite / MySQL

### Langkah Instalasi

1. **Clone repositori:**
   ```bash
   git clone https://github.com/Trifebri3/sirami.git
   cd sirami
   ```

2. **Instal dependensi PHP & JavaScript:**
   ```bash
   composer install
   npm install
   ```

3. **Konfigurasi Environment:**
   ```bash
   cp .env.example .env
   php artisan key:generate
   ```

4. **Migrasi Database & Seeder:**
   ```bash
   php artisan migrate
   ```

5. **Jalankan Development Server:**
   ```bash
   # Terminal 1: Vite Dev Server
   npm run dev

   # Terminal 2: Laravel Artisan Server
   php artisan serve
   ```

6. **Akses aplikasi:** Buka `http://localhost:8000` di peramban Anda.

### Menjalankan Pengujian (Tests):
```bash
php artisan test --compact
```

---

## 📄 Lisensi & Hak Cipta

© 2026 SIRAMI System · Inovasi Riset Mahasiswa UIN Sunan Gunung Djati Bandung. Seluruh hak cipta dilindungi undang-undang.
