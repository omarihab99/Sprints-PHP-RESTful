<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Book extends Model
{
    protected $primaryKey = 'BookID';

    public function author()
    {
        return $this->belongsTo(Author::class, 'AuthorID', 'AuthorID');
    }
    

    public function genres()
    {
        return $this->belongsToMany(Genre::class, 'books_genres', 'BookID', 'GenreID');
    }

    use HasFactory;
}
