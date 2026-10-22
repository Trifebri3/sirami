<?php

namespace App\Http\Controllers\Public;

use App\Http\Controllers\Controller;
use App\Services\SiramiData;
use Illuminate\Support\Facades\Route;
use Inertia\Inertia;
use Inertia\Response;

class PageController extends Controller
{
    /**
     * Get shared props across public pages.
     *
     * @return array<string, mixed>
     */
    protected function getSharedProps(): array
    {
        return [
            'canLogin' => Route::has('login'),
            'canRegister' => Route::has('register'),
            'logo' => SiramiData::getLogos(),
            'pilotInfo' => SiramiData::getPilotInfo(),
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
        ];
    }

    /**
     * Halaman Mengapa SIRAMI?
     */
    public function mengapaSirami(): Response
    {
        return Inertia::render('Public/MengapaSirami', array_merge($this->getSharedProps(), [
            'challenges' => SiramiData::getChallenges(),
            'references' => SiramiData::getReferences(),
        ]));
    }

    /**
     * Halaman Solusi Terpadu.
     */
    public function solusi(): Response
    {
        return Inertia::render('Public/Solusi', array_merge($this->getSharedProps(), [
            'solutions' => SiramiData::getSolutions(),
        ]));
    }

    /**
     * Halaman Riset & Bukti.
     */
    public function risetBukti(): Response
    {
        return Inertia::render('Public/RisetBukti', array_merge($this->getSharedProps(), [
            'references' => SiramiData::getReferences(),
        ]));
    }

    /**
     * Halaman Pilot Project 6 Bulan.
     */
    public function pilotProject(): Response
    {
        return Inertia::render('Public/PilotProject', array_merge($this->getSharedProps(), [
            'timeline' => SiramiData::getPilotTimeline(),
        ]));
    }

    /**
     * Halaman Dampak & KPI.
     */
    public function dampak(): Response
    {
        return Inertia::render('Public/Dampak', array_merge($this->getSharedProps(), [
            'kpis' => SiramiData::getKpiMatrix(),
        ]));
    }

    /**
     * Halaman Tim & Mitra.
     */
    public function timMitra(): Response
    {
        return Inertia::render('Public/TimMitra', $this->getSharedProps());
    }

    /**
     * Halaman Dukung Implementasi & Pendanaan.
     */
    public function dukungImplementasi(): Response
    {
        return Inertia::render('Public/DukungImplementasi', $this->getSharedProps());
    }

    /**
     * Halaman Jurnal Perkembangan (Logbook).
     */
    public function jurnalPerkembangan(): Response
    {
        return Inertia::render('Public/JurnalPerkembangan', array_merge($this->getSharedProps(), [
            'journalEntries' => SiramiData::getJournalEntries(),
        ]));
    }
}
