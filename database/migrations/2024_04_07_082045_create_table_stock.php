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
        Schema::create('stock', function (Blueprint $table) {
            $table->id();
            $table->string('nama_barang', 255)->nullable(false);
            $table->integer('harga_barang')->nullable(false);
            $table->integer('jumlah_barang')->nullable(false);
            $table->unsignedBigInteger('id_kategori')->nullable(false);
            $table->date('tanggal_upload')->nullable(false);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('stock');
    }
};
