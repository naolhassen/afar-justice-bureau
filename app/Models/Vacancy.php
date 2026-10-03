<?php

namespace App\Models;

use App\Models\Concerns\HasTranslations;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Vacancy extends Model
{
    use HasFactory, HasTranslations;

    protected array $translatable = ['title', 'description', 'requirements', 'location'];

    protected $fillable = [
        'title', 'slug', 'description', 'requirements', 'location',
        'status', 'deadline', 'author_id',
    ];

    protected function casts(): array
    {
        return [
            'deadline' => 'date',
        ];
    }

    public function author()
    {
        return $this->belongsTo(User::class, 'author_id');
    }
}
