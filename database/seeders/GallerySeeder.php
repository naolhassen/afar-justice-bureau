<?php

namespace Database\Seeders;

use App\Models\Gallery;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Str;

class GallerySeeder extends Seeder
{
    public function run(): void
    {
        $sourceDir = base_path('web contents/Gallery');
        $targetDir = public_path('images/gallery/uploads');

        if (! is_dir($sourceDir)) {
            return;
        }

        if (! is_dir($targetDir)) {
            mkdir($targetDir, 0755, true);
        }

        $files = File::files($sourceDir);
        $order = 1;

        foreach ($files as $file) {
            if (! in_array(strtolower($file->getExtension()), ['jpg', 'jpeg', 'png', 'gif', 'webp'])) {
                continue;
            }

            $safeName = 'photo_' . $order . '.' . $file->getExtension();
            $publicPath = 'images/gallery/uploads/' . $safeName;
            $targetPath = $targetDir . '/' . $safeName;

            if (! file_exists($targetPath)) {
                copy($file->getPathname(), $targetPath);
            }

            Gallery::updateOrCreate(
                ['slug' => 'gallery-photo-' . $order],
                [
                    'title' => [
                        'en' => 'Gallery Photo ' . $order,
                        'am' => 'የጋለሪ ፎቶ ' . $order,
                        'aa' => 'Foto Galeriy ' . $order,
                    ],
                    'image' => $publicPath,
                    'order' => $order,
                    'status' => 'published',
                    'published_at' => now(),
                ]
            );

            $order++;
        }
    }
}
