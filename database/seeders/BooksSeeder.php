<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Book;
use App\Models\Author;

class BooksSeeder extends Seeder
{
    public function run(): void
    {
        // Ambil data author pertama, kalau belum ada, buat dulu
        $author = Author::first();
        if (!$author) {
            $author = Author::create([
                'name' => 'Mat',
                'birth_date' => '1990-01-01',
            ]);
        }

        // Masukkan beberapa data sekaligus
        $books = [
            [
                'title' => 'Mamang',
                'publication_year' => '2025-01-01',
            ],
            [
                'title' => 'Matahari',
                'publication_year' => '2025-02-10',
            ],
            [
                'title' => 'Bulan',
                'publication_year' => '2025-02-08',
            ],
        ];

        foreach ($books as $data) {
            Book::create([
                'title' => $data['title'],
                'author_name' => $author->name,
                'author_id' => $author->id,
                'publication_year' => $data['publication_year'],
            ]);
        }
    }
}
