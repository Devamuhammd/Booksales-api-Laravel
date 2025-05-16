<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Author;

class AuthorSeeder extends Seeder
{
    public function run()
    {
        $data = [
            ['name' => 'Tere Liye'],
            ['name' => 'Andrea Hirata'],
            ['name' => 'Dewi Lestari'],
            ['name' => 'Pramoedya Ananta Toer'],
            ['name' => 'Habiburrahman El Shirazy'],
        ];

        Author::insert($data);
    }
}
