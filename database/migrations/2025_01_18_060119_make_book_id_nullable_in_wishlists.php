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
    Schema::table('wishlists', function (Blueprint $table) {
        $table->unsignedBigInteger('book_id')->nullable()->change(); // Membuat book_id nullable
    });
}

public function down()
{
    Schema::table('wishlists', function (Blueprint $table) {
        $table->unsignedBigInteger('book_id')->nullable(false)->change(); // Kembalikan seperti semula
    });
}

};
