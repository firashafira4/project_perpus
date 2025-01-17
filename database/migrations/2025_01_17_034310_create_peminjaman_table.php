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
        Schema::create('peminjaman', function (Blueprint $table) {
            $table->id();
            $table->string('nama');
            $table->string('email');
            $table->unsignedBigInteger('buku_id');
            $table->timestamps();
            $table->foreign('buku_id')->references('id')->on('books')->onDelete('cascade');
        });
    }
    public function down()
{
    Schema::table('peminjaman', function (Blueprint $table) {
        $table->dropForeign(['buku_id']); // Nama foreign key
    });

    Schema::dropIfExists('peminjaman');
}
    
};
