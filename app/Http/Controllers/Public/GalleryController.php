<?php

namespace App\Http\Controllers\Public;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\File;
use Inertia\Inertia;
use Inertia\Response;

class GalleryController extends Controller
{
    /**
     * Display the public photo gallery.
     */
    public function index(): Response
    {
        $categories = [];
        $allowedExtensions = ['webp', 'jpeg', 'jpg', 'png', 'svg'];

        // 1. Scan public/foto directories
        $fotoPath = public_path('foto');
        if (File::isDirectory($fotoPath)) {
            $dirs = File::directories($fotoPath);
            foreach ($dirs as $dir) {
                $categoryName = basename($dir);
                $files = File::files($dir);
                $images = [];

                foreach ($files as $file) {
                    if (in_array(strtolower($file->getExtension()), $allowedExtensions, true)) {
                        $images[] = [
                            'name' => pathinfo($file->getFilename(), PATHINFO_FILENAME),
                            'url' => asset('foto/'.rawurlencode($categoryName).'/'.rawurlencode($file->getFilename())),
                            'size_kb' => round($file->getSize() / 1024, 1),
                        ];
                    }
                }

                $categories[] = [
                    'slug' => strtolower(str_replace(' ', '-', $categoryName)),
                    'title' => ucwords(str_replace(['_', '-'], ' ', $categoryName)),
                    'count' => count($images),
                    'images' => $images,
                ];
            }
        }

        // 2. Scan public/tim directory
        $timPath = public_path('tim');
        if (File::isDirectory($timPath)) {
            $timFiles = File::files($timPath);
            $timImages = [];
            foreach ($timFiles as $file) {
                if (in_array(strtolower($file->getExtension()), $allowedExtensions, true)) {
                    $timImages[] = [
                        'name' => pathinfo($file->getFilename(), PATHINFO_FILENAME),
                        'url' => asset('tim/'.rawurlencode($file->getFilename())),
                        'size_kb' => round($file->getSize() / 1024, 1),
                    ];
                }
            }

            if (! empty($timImages)) {
                $categories[] = [
                    'slug' => 'tim-dan-prototipe',
                    'title' => 'Tim Inovator, Riset & Prototipe',
                    'count' => count($timImages),
                    'images' => $timImages,
                ];
            }
        }

        return Inertia::render('Public/Galeri', [
            'categories' => $categories,
            'totalPhotos' => array_sum(array_column($categories, 'count')),
            'logo' => [
                'full' => asset('logo/logofull.webp'),
                'square' => asset('logo/logokotak.webp'),
            ],
        ]);
    }
}
