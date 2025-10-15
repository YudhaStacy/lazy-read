<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Artikel;
use App\Models\Kategori;
use Illuminate\Support\Str;

class ArtikelKategoriSeeder extends Seeder
{
    /**
     * Jalankan seeder.
     */
    public function run(): void
    {
        $daftarKategori = [
            'Teknologi',
            'Bisnis',
            'Budaya',
            'Sains',
            'Kesehatan',
            'Desain',
        ];

        foreach ($daftarKategori as $namaKategori) {
            Kategori::firstOrCreate(
                ['nama' => $namaKategori],
                ['slug' => Str::slug($namaKategori)]
            );
        }

        $teknologi = Kategori::where('slug', 'teknologi')->first();
        $bisnis    = Kategori::where('slug', 'bisnis')->first();
        $budaya    = Kategori::where('slug', 'budaya')->first();

        // Artikel contoh
        Artikel::create([
            'judul' => 'AI Revolution in Everyday Life',
            'slug' => Str::slug('AI Revolution in Everyday Life'),
            'preview_teks' => 'Exploring how artificial intelligence is transforming our daily routines and workflows.',
            'isi' => 'Artificial Intelligence (AI) is reshaping how we interact with technology, from voice assistants to recommendation systems.',
            'image_url' => 'https://images.unsplash.com/photo-1694903089438-bf28d4697d9a?auto=format&fit=crop&q=80&w=1632',
            'id_kategori' => $teknologi?->id_kategori,
            'author' => 'John Doe',
            'published_at' => now(),
            'read_time' => 4,
        ]);

        Artikel::create([
            'judul' => 'The Future of Business Automation',
            'slug' => Str::slug('The Future of Business Automation'),
            'preview_teks' => 'Automation powered by AI and robotics is redefining efficiency across industries.',
            'isi' => 'From factories to offices, automation enables companies to streamline operations and reduce costs.',
            'image_url' => 'https://images.unsplash.com/photo-1488590528505-98d2b5aba04b?w=600&q=80',
            'id_kategori' => $bisnis?->id_kategori,
            'author' => 'Jane Smith',
            'published_at' => now()->subDays(2),
            'read_time' => 5,
        ]);

        Artikel::create([
            'judul' => 'How Culture Shapes Our Innovation',
            'slug' => Str::slug('How Culture Shapes Our Innovation'),
            'preview_teks' => 'Understanding the role of culture in fostering creativity and innovation.',
            'isi' => 'Cultural diversity brings new perspectives that drive innovative solutions and ideas across industries.',
            'image_url' => 'https://images.unsplash.com/photo-1758873268745-dd2cf0d677b5?auto=format&fit=crop&q=60&w=500',
            'id_kategori' => $budaya?->id_kategori,
            'author' => 'Alex Tan',
            'published_at' => now()->subDays(3),
            'read_time' => 6,
        ]);
    }
}
