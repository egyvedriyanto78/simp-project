<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('books', function (Blueprint $table) {
            $table->string('id')->primary(); // ID (varchar)
            $table->string('judul'); // Judul (varchar)
            $table->string('sampul'); // Sampul (varchar)
            $table->integer('tahun_terbit'); // Tahun terbit (integer)
            $table->string('kategori'); // Kategori (varchar)
            $table->integer('stok'); // Stok (integer)
            $table->string('lokasi'); // Lokasi (varchar)
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
