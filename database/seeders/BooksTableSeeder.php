<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Book;

class BooksTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Book::create(['BookID' => 1, 'Title' => 'Harry Potter and the Sorcerer\'s Stone', 'AuthorID' => 1]);
        Book::create(['BookID' => 2, 'Title' => 'The Shining', 'AuthorID' => 2]);
        Book::create(['BookID' => 3, 'Title' => 'Harry Potter and the Chamber of Secrets', 'AuthorID' => 1]);

        //
    }
}
