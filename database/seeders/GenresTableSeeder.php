<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Genre;
class GenresTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Genre::create(['GenreID' => 1, 'GenreName' => 'Fantasy']);
        Genre::create(['GenreID' => 2, 'GenreName' => 'Horror']);
        //
    }
}
