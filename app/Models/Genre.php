<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Genre extends Model
{
    protected $primaryKey = 'GenreID';
    public function books()
    {
        return $this->belongsToMany(Book::class, 'books_genres', 'GenreID', 'BookID');
    }

    use HasFactory;
}
