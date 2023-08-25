<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up()
    {
        Schema::dropIfExists('books_genres'); 
        Schema::create('books_genres', function (Blueprint $table) {
            $table->unsignedBigInteger('BookID');
            $table->unsignedBigInteger('GenreID');
            $table->primary(['BookID', 'GenreID']);
            $table->timestamps();

            $table->foreign('BookID')->references('BookID')->on('books')->onDelete('cascade');
            $table->foreign('GenreID')->references('GenreID')->on('genres')->onDelete('cascade');
        });
    }

    public function down()
    {
        Schema::dropIfExists('books_genres');
    }
};
