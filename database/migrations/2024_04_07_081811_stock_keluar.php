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
        Schema::create('stock_keluar', function (Blueprint $table) {
            $table->id();
            $table->string('nama_barang', 255)->nullable();
            $table->integer('jumlah')->nullable(false);
            $table->integer('total_harga')->nullable(false);
            $table->date('tanggal_keluar')->nullable(false);
            $table->string('user', 255)->nullable(false);
            $table->enum('status',['Pending','Terkirim','Tidak Terkirim'])->default('Terkirim');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('stock_keluar');
    }
};
