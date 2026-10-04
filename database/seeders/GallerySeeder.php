<?php

namespace Database\Seeders;

use App\Models\Gallery;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\File;

class GallerySeeder extends Seeder
{
    public function run(): void
    {
        $targetDir = public_path('images/gallery/uploads');

        if (! is_dir($targetDir)) {
            return;
        }

        // Create or update gallery records for every deployed image.
        // Filename like photo_12.jpg -> order 12, slug gallery-photo-12.
        $files = File::files($targetDir);

        foreach ($files as $file) {
            if (! in_array(strtolower($file->getExtension()), ['jpg', 'jpeg', 'png', 'gif', 'webp'])) {
                continue;
            }

            $publicPath = 'images/gallery/uploads/' . $file->getFilename();

            preg_match('/(\d+)/', $file->getFilename(), $matches);
            $order = isset($matches[1]) ? (int) $matches[1] : 0;
            $slug = 'gallery-photo-' . $order;

            Gallery::updateOrCreate(
                ['slug' => $slug],
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
        }
    }
}
