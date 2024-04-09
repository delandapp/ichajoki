<?php

namespace App\Http\Controllers;

use App\Models\stock;
use App\Models\stockkeluar;
use App\Models\stockmasuk;
use Illuminate\Http\Request;

class StockController extends Controller
{
    public function tampilStock() {
        $stock = stock::get();
        return response(['Status' => 200, 'Message' => 'Berhasil Menampilkan All Stock', 'data' => $stock], 200);
    }
    public function tampilStockMasuk() {
        $stock = stockmasuk::get();
        return response(['Status' => 200, 'Message' => 'Berhasil Menampilkan All Stock', 'data' => $stock], 200);
    }
    public function tampilStockKeluar() {
        $stock = stockkeluar::get();
        return response(['Status' => 200, 'Message' => 'Berhasil Menampilkan All Stock', 'data' => $stock], 200);
    }
}
