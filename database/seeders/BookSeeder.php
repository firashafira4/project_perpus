<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class BookSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run()
{
    \App\Models\Book::create([
        'title' => 'Buku Pemrograman Laravel',
        'author' => 'John Doe',
        'year' => 2023,
        'description' => 'Buku ini membahas pemrograman Laravel secara mendalam.',
        'cover_image' => 'buku1.jpeg', // Pastikan gambar ini ada di folder public/foto
    ]);

    \App\Models\Book::create([
        'title' => 'Belajar Pemrograman PHP',
        'author' => 'Jane Smith',
        'year' => 2022,
        'description' => 'Panduan lengkap belajar PHP dari nol hingga mahir.',
        'cover_image' => 'buku2.jpeg',
    ]);

    \App\Models\Book::create([
        'title' => 'Dasar Pemrograman Web',
        'author' => 'Mark Lee',
        'year' => 2021,
        'description' => 'Buku dasar tentang pengembangan web menggunakan HTML, CSS, dan JavaScript.',
        'cover_image' => 'buku3.jpeg',
    ]);
}

}
