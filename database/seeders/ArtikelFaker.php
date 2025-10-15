<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Artikel;
use App\Models\Kategori;
use Faker\Factory as Faker;
use Illuminate\Support\Str;

class ArtikelFaker extends Seeder
{
    /**
     * Jalankan seeder.
     */
    public function run(): void
    {
        $faker = Faker::create();

        // 1. Buat 5 kategori dengan Faker
        $kategoriIds = [];
        for ($i = 0; $i < 5; $i++) {
            $namaKategori = $faker->unique()->word(); // misalnya: "travel", "finance", dll

            $kategori = Kategori::create([
                'nama' => ucfirst($namaKategori),
                'slug' => Str::slug($namaKategori),
            ]);

            $kategoriIds[] = $kategori->id_kategori; // simpan id-nya untuk digunakan nanti
        }

        // 2. Buat 10 artikel dengan kategori acak dari hasil di atas
        for ($i = 0; $i < 10; $i++) {
            $judul = $faker->sentence;

            Artikel::create([
                'judul' => $judul,
                'slug' => Str::slug($judul),
                'preview_teks' => $faker->sentence(20, true),
                'isi' => $faker->paragraphs(3, true),
                'image_url' => 'https://picsum.photos/800/600?random=' . rand(1, 1000),
                'id_kategori' => $faker->randomElement($kategoriIds),
                'author' => $faker->name,
                'published_at' => $faker->dateTimeThisYear,
                'read_time' => rand(3, 7),
            ]);
        }
    }
}
