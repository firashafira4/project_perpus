<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up()
{
    Schema::create('books', function (Blueprint $table) {
        $table->id();
        $table->string('title');      // Judul buku
        $table->string('author');     // Penulis buku
        $table->integer('year');      // Tahun terbit
        $table->text('description');  // Deskripsi buku
        $table->string('cover_image')->nullable(); // Gambar sampul
        $table->timestamps();
    });
}


    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('books');
    }
};
