<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class BookSeeder extends Seeder
{
    public function run()
    {
        DB::table('books')->insert([
            [
                'title' => 'Pulang',
                'description' => 'Petualangan seorang pemuda yang kembali ke desa kelahirannya',
                'cover_photo' => 'pulang.jpg',
                'genre_id' => 1,
                'author_id' => 1,
                'price' => 40000,
                'stock' => 10,
            ],
            [
                'title' => 'Sebuah seni Bersikap Bodoamat',
                'description' => 'Buku yang membahas tentang kehidupan dan filosofi hidup seseorang',
                'cover_photo' => 'sebuah_seni.jpg',
                'genre_id' => 2,
                'author_id' => 2,
                'price' => 25000,
                'stock' => 7,
            ],
            [
                'title' => 'Naruto',
                'description' => 'Buku yang membahas tentang jalan seorang ninja',
                'cover_photo' => 'naruto.jpg',
                'genre_id' => 3,
                'author_id' => 3,
                'price' => 30000,
                'stock' => 8,
            ],
            [
                'title' => 'Laskar Pelangi',
                'description' => 'Kisah anak-anak di Belitung mengejar mimpi mereka',
                'cover_photo' => 'laskar_pelangi.jpg',
                'genre_id' => 1,
                'author_id' => 4,
                'price' => 35000,
                'stock' => 5,
            ],
            [
                'title' => 'Atomic Habits',
                'description' => 'Panduan membangun kebiasaan baik dalam hidup',
                'cover_photo' => 'atomic_habits.jpg',
                'genre_id' => 2,
                'author_id' => 5,
                'price' => 45000,
                'stock' => 6,
            ],
        ]);
    }
}
