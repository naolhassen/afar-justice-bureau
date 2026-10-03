<?php

namespace App\Models;

use App\Models\Concerns\HasTranslations;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Page extends Model
{
    use HasFactory, HasTranslations;

    protected array $translatable = ['title', 'body', 'meta_title', 'meta_description'];

    protected $fillable = [
        'title', 'slug', 'body', 'meta_title', 'meta_description',
        'status', 'author_id',
    ];

    public function author()
    {
        return $this->belongsTo(User::class, 'author_id');
    }
}
