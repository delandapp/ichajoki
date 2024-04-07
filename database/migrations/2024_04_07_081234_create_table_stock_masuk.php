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
        Schema::create('stock_masuk', function (Blueprint $table) {
            $table->id();
            $table->string('nama_barang', 255)->nullable();
            $table->integer('jumlah')->nullable(false);
            $table->date('tanggal_masuk')->nullable(false);
            $table->string('nama_sales', 255)->nullable(false);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('stock_masuk');
    }
};
