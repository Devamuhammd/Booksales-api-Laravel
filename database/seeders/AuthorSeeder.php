<?php

namespace Database\Seeders;

use App\Models\Author;
use Illuminate\Database\Seeder;

class AuthorSeeder extends Seeder
{
    public function run()
    {
        $authors = [
            [
                'name' => 'J.K. Rowling',
                'email' => 'jk.rowling@example.com',
                'bio' => 'British author, best known for the Harry Potter series',
                'birth_date' => '1965-07-31'
            ],
            [
                'name' => 'Stephen King',
                'email' => 'stephen.king@example.com',
                'bio' => 'American author of horror, supernatural fiction, suspense, and fantasy novels',
                'birth_date' => '1947-09-21'
            ],
            [
                'name' => 'Agatha Christie',
                'email' => 'agatha.christie@example.com',
                'bio' => 'English writer known for her detective novels',
                'birth_date' => '1890-09-15'
            ]
        ];

        foreach ($authors as $author) {
            Author::create($author);
        }
    }
}