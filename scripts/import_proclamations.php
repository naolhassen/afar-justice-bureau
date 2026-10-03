<?php
// Bulk-import proclamation PDFs into documents. Run: php artisan tinker --execute="require 'scripts/import_proclamations.php';"
use App\Models\Document;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Str;

$src = base_path('web contents/proclamation');
$files = glob("$src/*.pdf");
$count = 0; $skipped = [];

foreach ($files as $file) {
    $name = pathinfo($file, PATHINFO_FILENAME);
    $isAmharic = (bool) preg_match('/[\x{1200}-\x{137F}]/u', $name);

    // Clean title: underscores -> space, drop file-version noise
    $title = preg_replace('/\[?\d+\]?$/', '', $name);
    $title = preg_replace('/[_]+/u', ' ', $title);
    $title = trim(preg_replace('/\s+(of\s+)?(final|draft|published|repealled)\s*$/iu', '', $title));
    $title = preg_replace('/\s{2,}/', ' ', $title);

    // Proclamation number -> slug (Amharic titles won't slugify to ASCII)
    $num = null;
    if (preg_match('/ቁ[_\s]*(\d+)/u', $name, $m)) $num = $m[1];
    $slug = Str::slug($title);
    if (strlen($slug) < 3) $slug = $num ? "proclamation-$num" : 'proclamation-' . Str::random(6);
    if (strlen($slug) > 200) $slug = substr($slug, 0, 200);

    if (Document::where('slug', $slug)->exists()) { $skipped[] = $name; continue; }

    // Copy into storage
    $ext = '.pdf';
    $storeName = Str::slug(Str::limit($title, 60, '')) ?: "proc-$num-" . Str::random(4);
    $storePath = 'uploads/proclamations/' . $storeName . $ext;
    $i = 2;
    while (Storage::disk('public')->exists($storePath)) {
        $storePath = 'uploads/proclamations/' . $storeName . "-$i" . $ext;
        $i++;
    }
    Storage::disk('public')->put($storePath, file_get_contents($file));

    $size = Storage::disk('public')->size($storePath);
    $human = $size > 1048576 ? round($size / 1048576, 1) . ' MB' : round($size / 1024) . ' KB';

    Document::create([
        'title' => [$isAmharic ? 'am' : 'en' => $title],
        'slug' => $slug,
        'description' => null,
        'category' => 'proclamation',
        'file_path' => $storePath,
        'file_url' => Storage::url($storePath),
        'file_size' => $human,
        'disk' => 'public',
        'status' => 'published',
        'author_id' => 1,
    ]);
    $count++;
}

echo "Imported: $count\nSkipped (dup slug): " . count($skipped) . "\n";
if ($skipped) echo implode("\n", $skipped) . "\n";
