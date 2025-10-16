<?php

namespace App\Http\Controllers;

use App\Models\Artikel;
use Illuminate\Http\Request;

class BerandaController extends Controller
{
    public function index()
    {
        // Ambil 3 artikel terbaru dengan relasi kategori
        $artikel = Artikel::with('kategori')
            ->orderBy('published_at', 'desc')
            ->take(3)
            ->get();

        return view('pages.beranda', compact('artikel'));
    }
}
