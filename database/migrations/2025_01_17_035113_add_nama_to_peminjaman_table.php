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
    Schema::table('peminjaman', function (Blueprint $table) {
        $table->string('nama')->after('id'); // Tambahkan kolom
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
