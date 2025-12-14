<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Book;

class BooksTableSeeder extends Seeder
{
    public function run(): void
    {
        Book::create([
            'title' => 'The Hobbit',
            'author' => 'J.R.R. Tolkien',
            'published_year' => 1937,
            'status' => 'available'
        ]);

        Book::create([
            'title' => '1984',
            'author' => 'George Orwell',
            'published_year' => 1949,
            'status' => 'available'
        ]);

        Book::create([
            'title' => 'To Kill a Mockingbird',
            'author' => 'Harper Lee',
            'published_year' => 1960,
            'status' => 'available'
        ]);
        Book::create([
            'title' => 'lab 5 ajillaj bh estoi',
            'author' => 'Dawkashu',
            'published_year' => 2025,
            'status' => 'available'
        ]);
        Book::create([
            'title' => 'test2',
            'author' => 'idunno',
            'published_year' => 2222,
            'status' => 'available'
        ]);
        Book::create([
            'title' => 'something',
            'author' => 'GGwellplayed',
            'published_year' => 2025,
            'status' => 'available'
        ]);

    }
}
