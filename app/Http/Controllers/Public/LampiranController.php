<?php

namespace App\Http\Controllers\Public;

use App\Http\Controllers\Controller;
use App\Services\SiramiData;
use Illuminate\Support\Facades\File;
use Inertia\Inertia;
use Inertia\Response;

class LampiranController extends Controller
{
    /**
     * Display the public repository and evidence documents page.
     */
    public function index(): Response
    {
        $photoGallery = $this->getPhotoGallery();
        $documents = $this->getDocuments();

        return Inertia::render('Public/Lampiran', [
            'documents' => $documents,
            'buktiReferensi' => SiramiData::getBuktiReferensiData(),
            'mariTerhubung' => SiramiData::getMariTerhubungData(),
            'photoGallery' => $photoGallery,
            'totalPhotos' => count($photoGallery),
            'logo' => SiramiData::getLogos(),
        ]);
    }

    /**
     * Display the dedicated Bukti, Referensi, dan Lampiran page matching the exact official showcase.
     */
    public function buktiReferensi(): Response
    {
        $photoGallery = $this->getPhotoGallery();
        $documents = $this->getDocuments();

        return Inertia::render('Public/BuktiReferensi', [
            'buktiReferensi' => SiramiData::getBuktiReferensiData(),
            'mariTerhubung' => SiramiData::getMariTerhubungData(),
            'documents' => $documents,
            'photoGallery' => $photoGallery,
            'totalPhotos' => count($photoGallery),
            'logo' => SiramiData::getLogos(),
            'pilotInfo' => SiramiData::getPilotInfo(),
            'team' => SiramiData::getTeam(),
        ]);
    }

    /**
     * Scan real photos from public/foto directory.
     *
     * @return array<int, array<string, mixed>>
     */
    private function getPhotoGallery(): array
    {
        $fotoPath = public_path('foto');
        $photoGallery = [];

        if (File::isDirectory($fotoPath)) {
            foreach (File::directories($fotoPath) as $dir) {
                $categoryName = basename($dir);
                $files = File::files($dir);
                foreach ($files as $file) {
                    if (strtolower($file->getExtension()) === 'webp') {
                        $photoGallery[] = [
                            'name' => pathinfo($file->getFilename(), PATHINFO_FILENAME),
                            'category' => ucwords(str_replace(['_', '-'], ' ', $categoryName)),
                            'category_slug' => strtolower(str_replace(' ', '-', $categoryName)),
                            'url' => asset('foto/'.rawurlencode($categoryName).'/'.rawurlencode($file->getFilename())),
                            'size_kb' => round($file->getSize() / 1024, 1),
                        ];
                    }
                }
            }
        }

        return $photoGallery;
    }

    /**
     * Get complete official documents list.
     *
     * @return array<int, array<string, mixed>>
     */
    private function getDocuments(): array
    {
        return [
            [
                'id' => 'DOC-01',
                'category' => 'dokumen-mitra',
                'category_name' => 'Dokumen Mitra',
                'title' => 'Surat Dukungan Pondok Pesantren Al-Qur\'an Hidayatul Mustafid',
                'number' => '18/X/PPHM/2026',
                'date' => '18 Oktober 2026',
                'signatory' => 'KH. Nandang Ja\'far Shiddiq (Pimpinan Pesantren)',
                'status' => 'Tersedia Resmi (PDF)',
                'status_color' => 'emerald',
                'download_url' => asset('data/Surat Persetujuan Pst.pdf'),
                'description' => 'Surat pernyataan dukungan resmi pimpinan pesantren memfasilitasi lokasi pelaksanaan pilot project lapangan SIRAMI.',
            ],
            [
                'id' => 'DOC-02',
                'category' => 'profil-lokasi',
                'category_name' => 'Profil Lokasi & Aset',
                'title' => 'Inventaris Aset dan Pemetaan Lapangan Sindangresik',
                'number' => 'INV-SDR-2026',
                'date' => 'Oktober 2026',
                'signatory' => 'Tim Lapangan SIRAMI & Pengelola',
                'status' => 'Observasi Awal',
                'status_color' => 'blue',
                'description' => 'Identifikasi sumur bor pompa listrik, penampungan air bekas wudu, unit IPAL, fasilitas sanitasi santri, 2 dapur umum, dan estimasi lahan budidaya 350 bata.',
            ],
            [
                'id' => 'DOC-03',
                'category' => 'desain-teknis',
                'category_name' => 'Desain Teknis & SOP',
                'title' => 'Diagram Alur Sistem Pengolahan & Gate Keselamatan Air',
                'number' => 'TECH-SOP-01',
                'date' => 'Perencanaan Pilot',
                'signatory' => 'Technology & Product Lead',
                'status' => 'Draft Terkendali',
                'status_color' => 'amber',
                'description' => 'Prinsip ketat: Kejernihan visual bukan bukti keamanan. Air tidak dialirkan ke microgreens/ikan sebelum lolos verifikasi parameter uji laboratorium baku.',
            ],
            [
                'id' => 'DOC-04',
                'category' => 'rab-anggaran',
                'category_name' => 'Transparansi Anggaran',
                'title' => 'Rencana Anggaran Biaya (RAB) Pilot Implementasi Terpadu',
                'number' => 'RAB-PLT-26M',
                'date' => 'RAB Terbaru 2026',
                'signatory' => 'Business & Impact Lead',
                'status' => 'RAB Terbaru Rp26.000.000',
                'status_color' => 'indigo',
                'description' => 'Rincian: Perangkat & Infrastruktur (Rp15 Jt), Pelatihan & Tim (Rp7 Jt), Pemasaran & Biaya Pendukung (Rp4 Jt). Terdiri dari 12 pos belanja terperinci.',
            ],
            [
                'id' => 'DOC-05',
                'category' => 'referensi-regulasi',
                'category_name' => 'Referensi & Regulasi',
                'title' => 'WHO Guidelines & Permen Lingkungan Hidup No 11/2025',
                'number' => 'STD-ENV-WHO',
                'date' => 'Pedoman Acuan',
                'signatory' => 'WHO & Kemenkes / BPLH',
                'status' => 'Standar Acuan',
                'status_color' => 'teal',
                'description' => 'Kompilasi panduan keselamatan air limbah abu-abu untuk pertanian pangan WHO Vol 2-3 dan standar baku mutu air limbah domestik Permen LH 11/2025.',
            ],
            [
                'id' => 'DOC-06',
                'category' => 'legalitas-haki',
                'category_name' => 'Hak Kekayaan Intelektual (HAKI)',
                'title' => 'Surat Pencatatan Hak Cipta Kemenkumham RI: Inovasi SIRAMI',
                'number' => 'EC002026184233',
                'date' => '2026',
                'signatory' => 'DJKI Kementerian Hukum dan Hak Asasi Manusia RI',
                'status' => 'Tersedia Resmi (PDF)',
                'status_color' => 'emerald',
                'download_url' => asset('data/SuratCiptaan_EC002026184233_3.pdf'),
                'description' => 'Surat pencatatan ciptaan resmi dari Kementerian Hukum dan HAM RI untuk karya inovasi teknologi SIRAMI oleh Mahasiswa UIN Sunan Gunung Djati Bandung.',
            ],
            [
                'id' => 'DOC-07',
                'category' => 'cv-tim',
                'category_name' => 'Curriculum Vitae Inovator',
                'title' => 'Curriculum Vitae (CV) Tri Febriansah - Technology Lead',
                'number' => 'CV-TF-2026',
                'date' => '2026',
                'signatory' => 'Tri Febriansah (Technology & Product Lead)',
                'status' => 'Tersedia Resmi (PDF)',
                'status_color' => 'emerald',
                'download_url' => asset('CV/CV_Tri_Febriansah_Final.pdf'),
                'description' => 'CV lengkap rekam jejak rekayasa teknologi IoT, riset terapan pertanian, dan pendampingan kelompok tani Tasikmalaya-Banjar.',
            ],
            [
                'id' => 'DOC-08',
                'category' => 'cv-tim',
                'category_name' => 'Curriculum Vitae Inovator',
                'title' => 'Curriculum Vitae (CV) Dinar Robiatul Adawiyah - Business Lead',
                'number' => 'CV-DRA-2026',
                'date' => '2026',
                'signatory' => 'Dinar Robiatul Adawiyah (Business & Impact Lead)',
                'status' => 'Tersedia Resmi (PDF)',
                'status_color' => 'indigo',
                'download_url' => asset('CV/CV Dinar GDI.pdf'),
                'description' => 'CV lengkap keahlian studi kelayakan bisnis sosial, kalkulasi efisiensi RAB terbaru Rp26.000.000, harga pokok HPP, dan evaluasi SROI.',
            ],
            [
                'id' => 'DOC-09',
                'category' => 'cv-tim',
                'category_name' => 'Curriculum Vitae Inovator',
                'title' => 'Curriculum Vitae (CV) Neng Mariya Ulfa Mardiyah - Community Lead',
                'number' => 'CV-NM-2026',
                'date' => '2026',
                'signatory' => 'Neng Mariya Ulfa Mardiyah (Community & Operations Lead)',
                'status' => 'Tersedia Resmi (PDF)',
                'status_color' => 'teal',
                'download_url' => asset('CV/CV Mariya Ulfa.pdf'),
                'description' => 'CV lengkap santri PP Hidayatul Mustafid Tasikmalaya, keahlian pemberdayaan komunitas pesantren, kurikulum SOP budidaya, dan safeguarding.',
            ],
        ];
    }
}
