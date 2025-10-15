<?php

namespace App\Http\Controllers;

use App\Models\Artikel;
use App\Models\Kategori;
use Illuminate\Http\Request;

class ArtikelController extends Controller
{

    public function index()
    {
        $artikel = Artikel::with('kategori')
            ->orderBy('published_at', 'desc')
            ->paginate(6);

        $kategori = Kategori::orderBy('nama')->get();

        return view('artikel', compact('artikel', 'kategori'));
    }

    public function show($slug)
    {
        $artikel = Artikel::with('Kategori')
            ->where('slug', $slug)
            ->firstOrFail();

        // Artikel terkait berdasarkan kategori yang sama
        $related = Artikel::where('kategori_id', $artikel->Kategori_id)
            ->where('id', '!=', $artikel->id)
            ->latest()
            ->take(3)
            ->get();

        return view('Artikels.show', compact('artikel', 'related'));
    }
}
