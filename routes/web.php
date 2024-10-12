<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ShopController;

Route::get('/produk', function () {
    return view('product');
});

Route::get('/', function () {
    return view('home');
});

Route::get('/produk/{nama?}/{qty?}', function ($nama = "N/A", $qty = 0) {
    echo "<p>Jual <strong>$nama</strong>. Stok saat ini: $qty</p>";
});



Route::resource('shops', ShopController::class);
