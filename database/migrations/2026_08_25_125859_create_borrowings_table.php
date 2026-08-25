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
        Schema::create('borrowings', function (Blueprint $table) {
            $table->id();
            $table->foreignId('id_pengunjung')
                ->constrained('visitors')
                ->restrictOnDelete();
            $table->foreignId('id_buku')
                ->constrained('books')
                ->restrictOnDelete();
            $table->unsignedInteger('jumlah');
            $table->date('tanggal_peminjaman');
            $table->date('batas_peminjaman');
            $table->string('status', 20);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('borrowings');
    }
};
