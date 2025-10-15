<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Artikel extends Model
{
    use HasFactory;

    protected $table = 'artikel';
    protected $primaryKey = 'id_artikel';

    protected $fillable = [
        'judul',
        'slug',
        'preview_teks',
        'isi',
        'image_url',
        'id_kategori',
        'author',
        'published_at',
        'read_time',
    ];

    protected $casts = [
        'published_at' => 'datetime',
    ];

    // Relasi ke kategori (setiap artikel punya 1 kategori)
    public function kategori()
    {
        return $this->belongsTo(Kategori::class, 'id_kategori', 'id_kategori');
    }
}
