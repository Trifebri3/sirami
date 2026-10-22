<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Support\Facades\File;
use Inertia\Inertia;
use Inertia\Response;

class DashboardController extends Controller
{
    /**
     * Display the admin backend dashboard.
     */
    public function index(): Response
    {
        $fotoPath = public_path('foto');
        $photoCount = 0;
        $categoryBreakdown = [];

        if (File::isDirectory($fotoPath)) {
            foreach (File::directories($fotoPath) as $dir) {
                $count = count(File::files($dir));
                $photoCount += $count;
                $categoryBreakdown[] = [
                    'category' => ucwords(basename($dir)),
                    'count' => $count,
                ];
            }
        }

        return Inertia::render('Admin/Dashboard', [
            'stats' => [
                'total_users' => User::count(),
                'total_photos' => $photoCount,
                'total_logos' => File::isDirectory(public_path('logo')) ? count(File::files(public_path('logo'))) : 0,
                'storage_mode' => 'Optimized WebP',
            ],
            'categories' => $categoryBreakdown,
            'logo' => [
                'full' => asset('logo/logofull.webp'),
                'square' => asset('logo/logokotak.webp'),
            ],
        ]);
    }
}
