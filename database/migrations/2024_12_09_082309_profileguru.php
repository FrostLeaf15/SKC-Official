<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('gurus', function (Blueprint $table) {
            $table->id(); // Kolom primary key (id)
            $table->string('nama'); // Kolom nama guru
            $table->string('photo_path')->nullable(); // Kolom path foto, nullable
            $table->text('deskripsi')->nullable(); // Kolom deskripsi, nullable
            $table->timestamps(); // Kolom created_at dan updated_at
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('gurus'); // Hapus tabel jika rollback
    }
};
