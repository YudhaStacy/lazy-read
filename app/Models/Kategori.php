<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Kategori extends Model
{
    use HasFactory;

    protected $table = 'kategori';
    protected $primaryKey = 'id_kategori';

    protected $fillable = [
        'nama',
        'slug',
    ];

    // Relasi ke artikel (satu kategori bisa punya banyak artikel)
    public function artikel()
    {
        return $this->hasMany(Artikel::class, 'id_kategori', 'id_kategori');
    }
}
