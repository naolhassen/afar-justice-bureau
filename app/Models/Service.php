<?php

namespace App\Models;

use App\Models\Concerns\HasTranslations;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Service extends Model
{
    use HasFactory, HasTranslations;

    protected array $translatable = ['title', 'description'];

    protected $fillable = [
        'title', 'slug', 'description', 'icon', 'image',
        'status', 'author_id',
    ];

    public function author()
    {
        return $this->belongsTo(User::class, 'author_id');
    }
}
