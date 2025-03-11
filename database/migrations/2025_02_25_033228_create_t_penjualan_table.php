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
        Schema::create('t_penjualan', function (Blueprint $table) {
            $table->id('penjualan_id'); // Primary Key
            $table->unsignedBigInteger('user_id')->index(); // Foreign Key
            $table->string('pembeli', 50); // Nama pembeli
            $table->string('penjualan_kode', 20)->unique(); // Kode penjualan unik
            $table->dateTime('penjualan_tanggal'); // Tanggal penjualan
            $table->timestamps();

            // Mendefinisikan foreign key pada kolom user_id yang mengacu pada user_id di tabel m_user
            $table->foreign('user_id')->references('user_id')->on('m_user');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('t_penjualan');
    }
};
