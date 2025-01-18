<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddBookColumnsToWishlistsTable extends Migration
{
    public function up()
    {
        Schema::table('wishlists', function (Blueprint $table) {
            $table->unsignedBigInteger('book_id')->nullable()->change(); // Tambahkan kolom book_title
            $table->string('book_author')->after('book_title'); // Tambahkan kolom book_author
        });
    }

    public function down()
    {
        Schema::table('wishlists', function (Blueprint $table) {
            $table->dropColumn(['book_title', 'book_author']);
        });
    }
}
