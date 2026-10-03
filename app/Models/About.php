<?php

namespace App\Models;

use App\Models\Concerns\HasTranslations;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class About extends Model
{
    use HasFactory, HasTranslations;

    protected array $translatable = ['title', 'content'];

    protected $table = 'abouts';

    protected $fillable = [
        'section', 'title', 'content', 'image',
        'status', 'author_id',
    ];

    public function author()
    {
        return $this->belongsTo(User::class, 'author_id');
    }
}
