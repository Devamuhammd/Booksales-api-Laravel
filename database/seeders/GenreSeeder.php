<?php

namespace Database\Seeders;

use App\Models\Genre;
use Illuminate\Database\Seeder;

class GenreSeeder extends Seeder
{
    public function run()
    {
        $genres = [
            [
                'name' => 'Fiction',
                'description' => 'Creative writing that is not based on real events'
            ],
            [
                'name' => 'Non-Fiction',
                'description' => 'Writing based on real events and facts'
            ],
            [
                'name' => 'Mystery',
                'description' => 'Stories involving puzzles and suspense'
            ],
            [
                'name' => 'Romance',
                'description' => 'Stories focused on love and relationships'
            ],
            [
                'name' => 'Science Fiction',
                'description' => 'Stories set in the future or involving advanced technology'
            ]
        ];

        foreach ($genres as $genre) {
            Genre::create($genre);
        }
    }
}