<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateWishlistsTable extends Migration
{
    public function up()
    {
        Schema::create('wishlists', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('book_id')->default(0); // Nilai default untuk book_id // Kolom book_id
            $table->unsignedBigInteger('user_id'); // Kolom user_id (jika diperlukan)
            $table->timestamps();
        
            // Menambahkan constraint foreign key
            $table->foreign('book_id')->references('id')->on('books')->onDelete('cascade');
        });
    }

    public function down()
    {
        Schema::dropIfExists('wishlists');
    }
}
