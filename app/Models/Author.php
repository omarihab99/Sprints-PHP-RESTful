<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Author extends Model
{
    protected $primaryKey = 'AuthorID';
    public function books()
    {
        return $this->hasMany(Book::class, 'AuthorID', 'AuthorID');
    }

    use HasFactory;
}
