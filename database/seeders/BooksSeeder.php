<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Book;
use App\Models\Author; // tambahkan ini

class BooksSeeder extends Seeder
{
    public function run(): void
    {
        $author = Author::first(); // ambil 1 data penulis pertama dari tabel authors

        Book::create([
            'title' => 'Mamang',
            'author_name' => $author->name,
            'author_id' => $author->id,
            'publication_year' => '2025-01-01'
        ]);

        // Book::create([
        //     'title' => 'Matahari',
        //     'author_name' => $author->name,
        //     'author_id' => $author->id,
        //     'publication_year' => '2025-02-10'
        // ]);

        // Book::create([
        //     'title' => 'bulan',
        //     'author_name' => $author->name,
        //     'author_id' => $author->id,
        //     'publication_year' => '2025-02-08'
        // ]);
    }
}
