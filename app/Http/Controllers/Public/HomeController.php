<?php

namespace App\Http\Controllers\Public;

use App\Http\Controllers\Controller;
use App\Services\SiramiData;
use Illuminate\Foundation\Application;
use Illuminate\Support\Facades\Route;
use Inertia\Inertia;
use Inertia\Response;

class HomeController extends Controller
{
    /**
     * Display the public homepage according to SIRAMI masterplan.
     */
    public function index(): Response
    {
        return Inertia::render('Public/Home', [
            'canLogin' => Route::has('login'),
            'canRegister' => Route::has('register'),
            'laravelVersion' => Application::VERSION,
            'phpVersion' => PHP_VERSION,
            'logo' => SiramiData::getLogos(),
            'quickStats' => [
                [
                    'label' => 'Pesantren Pilot',
                    'value' => '1',
                    'desc' => 'Mitra Lokasi Awal',
                    'icon' => 'building',
                ],
                [
                    'label' => 'Implementasi Awal',
                    'value' => '6 Bulan',
                    'desc' => 'Rencana Kerja Bertahap',
                    'icon' => 'calendar',
                ],
                [
                    'label' => 'Produk Utama',
                    'value' => 'Microgreens & Ikan',
                    'desc' => 'Pangan Bergizi Cepat Panen',
                    'icon' => 'leaf',
                ],
                [
                    'label' => 'Solusi Berbasis',
                    'value' => 'Teknologi & Komunitas',
                    'desc' => 'IoT, SOP & Tata Kelola',
                    'icon' => 'chip',
                ],
            ],
            'challenges' => [
                [
                    'title' => 'Kualitas Air Belum Terjamin',
                    'desc' => 'Air jernih visual belum tentu aman. Pemanfaatan air bekas wudu atau keluaran IPAL perlu pengujian laboratorium dan pemetaan jalur aliran terpisah.',
                    'img' => asset('foto/kosndisi pesantree/tempatair.webp'),
                    'tag' => 'Keamanan Air',
                ],
                [
                    'title' => 'Lahan Terbatas & Belum Produktif',
                    'desc' => 'Aset lahan pesantren (estimasi 350 bata) dan infrastruktur belum dimanfaatkan dengan sistem budidaya intensif yang efisien ruang dan hemat air.',
                    'img' => asset('foto/kosndisi pesantree/ipaldanlahan untuk treatmentair dan praktik microgreen.webp'),
                    'tag' => 'Optimasi Ruang',
                ],
                [
                    'title' => 'Potensi Santri Belum Tergarap Optimal',
                    'desc' => 'Santri dan pengelola memerlukan pelatihan SOP terukur, pencatatan buku kas, pengemasan, dan jalur akses pasar agar unit usaha berkelanjutan.',
                    'img' => asset('foto/diskusi pengelola/diskusibudidayamicrogreen.webp'),
                    'tag' => 'Kemandirian Ekonomi',
                ],
            ],
            'solutions' => [
                [
                    'step' => '01',
                    'title' => 'Pengolahan Air Sederhana & Terukur',
                    'desc' => 'Pemetaan sumber air, filtrasi bertahap, dan bio-remediasi. Air tidak dialirkan ke pangan sebelum lolos gerbang uji kelayakan.',
                    'img' => asset('foto/kosndisi pesantree/torenair.webp'),
                    'status' => 'Rancangan Pilot',
                ],
                [
                    'step' => '02',
                    'title' => 'Budidaya Microgreens',
                    'desc' => 'Produk pangan utama berumur panen 7-14 hari dengan densitas nutrisi tinggi untuk gizi santri dan dipasarkan ke komunitas sekitar.',
                    'img' => asset('foto/diskusi pengelola/diskusibudidayamicrogreen.webp'),
                    'status' => 'Produk Utama',
                ],
                [
                    'step' => '03',
                    'title' => 'Eksplorasi Budidaya Ikan',
                    'desc' => 'Opsi kolam budidaya terintegrasi yang hanya dioperasikan jika kualitas air memenuhi baku mutu aman dan layak teknis.',
                    'img' => asset('foto/kosndisi pesantree/kolamikan.webp'),
                    'status' => 'Opsi Tambahan',
                ],
                [
                    'step' => '04',
                    'title' => 'Pemberdayaan Santri & Ekonomi',
                    'desc' => 'Pelatihan SOP budidaya, pencatatan harga pokok (HPP), pembukuan kas nyata, dan pendampingan pemasaran mandiri pascapilot.',
                    'img' => asset('foto/kosndisi pesantree/santri.webp'),
                    'status' => 'Kemandirian',
                ],
            ],
            'pilotInfo' => SiramiData::getPilotInfo(),
            'heroPhotos' => [
                'main' => asset('foto/kosndisi pesantree/torenair.webp'),
                'santri' => asset('foto/kosndisi pesantree/santri.webp'),
                'iot' => asset('foto/produkinovasi utama/alatutama cek kondisi air.webp'),
                'microgreens' => asset('foto/diskusi pengelola/diskusibudidayamicrogreen.webp'),
            ],
            'showcasePhotos' => [
                [
                    'title' => 'Alat Monitoring IoT & Kualitas Air',
                    'category' => 'Inovasi Teknologi',
                    'src' => asset('foto/produkinovasi utama/alatutama cek kondisi air.webp'),
                ],
                [
                    'title' => 'Budidaya Microgreens Bersama Santri',
                    'category' => 'Pangan & Edukasi',
                    'src' => asset('foto/diskusi pengelola/diskusibudidayamicrogreen.webp'),
                ],
                [
                    'title' => 'Kondisi Toren & Penampungan Air Utama',
                    'category' => 'Infrastruktur Air',
                    'src' => asset('foto/kosndisi pesantree/torenair.webp'),
                ],
                [
                    'title' => 'Santri Aktif Pesantren Hidayatul Mustafid',
                    'category' => 'Komunitas Pesantren',
                    'src' => asset('foto/kosndisi pesantree/santri.webp'),
                ],
                [
                    'title' => 'Kolam Budidaya Ikan Terintegrasi',
                    'category' => 'Eksplorasi Akuakultur',
                    'src' => asset('foto/kosndisi pesantree/kolamikan.webp'),
                ],
                [
                    'title' => 'Pemetaan Lahan & Lokasi Lapangan',
                    'category' => 'Perencanaan Lapangan',
                    'src' => asset('foto/diskusi pengelola/pemetaanlokasi.webp'),
                ],
            ],
            'expectedImpacts' => [
                [
                    'title' => 'Kualitas Air Terpantau',
                    'target' => 'Pemetaan & Uji Baku',
                    'desc' => 'Sistem pemantauan sensor IoT & protokol uji lab berkala.',
                    'badge' => 'Target Teknis',
                ],
                [
                    'title' => 'Pangan Bergizi Mandiri',
                    'target' => 'Panen Rutin Berkualitas',
                    'desc' => 'Microgreens segar sebagai suplemen gizi harian santri.',
                    'badge' => 'Ketahanan Pangan',
                ],
                [
                    'title' => 'Santri Berdaya Wirausaha',
                    'target' => 'Kapasitas & SOP Baku',
                    'desc' => 'Santri terlatih mengelola budidaya dan pembukuan usaha.',
                    'badge' => 'Edukasi Praktis',
                ],
                [
                    'title' => 'Model Layak Direplikasi',
                    'target' => 'Evaluasi SROI Terbuka',
                    'desc' => 'SOP terdokumentasi rapi untuk replikasi ke pesantren lain.',
                    'badge' => 'Sirkular & Akuntabel',
                ],
            ],
            'budget' => SiramiData::getBudget(),
            'team' => SiramiData::getTeam(),
            'multilevelMapping' => SiramiData::getMultilevelMapping(),
            'implementationActivities' => SiramiData::getImplementationActivities(),
            'mengapaMendesak' => SiramiData::getMengapaMendesakData(),
            'komunitasKonteks' => SiramiData::getKomunitasKonteksData(),
            'problemAnalysis' => SiramiData::getProblemAnalysisData(),
            'theoryOfChange' => SiramiData::getTheoryOfChangeData(),
            'solusiDeck' => SiramiData::getSolusiInovasiDeckData(),
            'stakeholders' => SiramiData::getStakeholdersData(),
            'strategy6Months' => SiramiData::getStrategy6MonthsData(),
            'sroiDetailed' => SiramiData::getSroiDetailedData(),
            'detailedRab' => SiramiData::getDetailedRabData(),
            'sustainabilityStrategy' => SiramiData::getSustainabilityStrategyData(),
            'riskMitigation' => SiramiData::getRiskMitigationData(),
            'scalabilityReplication' => SiramiData::getScalabilityReplicationData(),
            'teamEvidence' => SiramiData::getTeamEvidence(),
            'buktiReferensi' => SiramiData::getBuktiReferensiData(),
            'mariTerhubung' => SiramiData::getMariTerhubungData(),
        ]);
    }
}
