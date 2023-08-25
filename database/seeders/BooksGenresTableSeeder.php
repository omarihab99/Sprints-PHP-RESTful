<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Book;
use App\Models\Genre;
class BooksGenresTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $book1 = Book::find(1);
        $book2 = Book::find(2);

        $genre1 = Genre::find(1);
        $genre2 = Genre::find(2);

        $book1->genres()->attach([$genre1->GenreID, $genre2->GenreID]);
        $book2->genres()->attach([$genre2->GenreID]);
        //
    }
}
