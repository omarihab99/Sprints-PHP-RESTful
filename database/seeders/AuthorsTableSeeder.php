<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Author;
class AuthorsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Author::create(['AuthorID' => 1, 'AuthorName' => 'J.K. Rowling']);
        Author::create(['AuthorID' => 2, 'AuthorName' => 'Stephen King']);
        //
    }
}
