<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::table('m_barang', function (Blueprint $table) {
            // Hapus foreign key lama
            $table->dropForeign(['kategori_id']);

            // Buat ulang dengan aturan restrict
            $table->foreign('kategori_id')
                  ->references('kategori_id')
                  ->on('m_kategori')
                  ->restrictOnDelete();
        });
    }

    public function down(): void
    {
        Schema::table('m_barang', function (Blueprint $table) {
            $table->dropForeign(['kategori_id']);

            // Kembalikan aturan seperti semula
            $table->foreign('kategori_id')
                  ->references('kategori_id')
                  ->on('m_kategori');
        });
    }
};