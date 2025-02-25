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
        Schema::create('m_barang', function (Blueprint $table) {
            $table->id('barang_id'); // Primary Key
            $table->unsignedBigInteger('kategori_id')->index(); // Foreign Key
            $table->string('barang_kode', 10)->unique(); // Kode barang unik
            $table->string('barang_nama', 100); // Nama barang
            $table->integer('harga_beli'); // Harga beli
            $table->integer('harga_jual'); // Harga jual
            $table->timestamps();
    
            // Mendefinisikan foreign key pada kolom kategori_id mengacu pada kategori_id di tabel m_kategori
            $table->foreign('kategori_id')->references('kategori_id')->on('m_kategori');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('m_barang');
    }
};
