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
            ->get();

        $kategori = Kategori::all();

        return view('pages.artikel', compact('artikel', 'kategori'));
    }
    public function show($slug)
    {
        $artikel = Artikel::with('kategori')
            ->where('slug', $slug)
            ->firstOrFail();

        return view('artikel.show', compact('artikel'));
    }


    public function filterByKategori($slug)
    {
        $kategoriObj = Kategori::where('slug', $slug)->firstOrFail();

        $artikel = Artikel::with('kategori')
            ->where('id_kategori', $kategoriObj->id_kategori)
            ->orderBy('published_at', 'desc')
            ->get();

        $kategori = Kategori::all();

        return view('pages.artikel', compact('artikel', 'kategori'));
    }
}
