<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\SellerController;
use App\Http\Controllers\SaleController;


Route::get('/', [SellerController::class, 'index'])->name('listSellers');

Route::get('/registerSeller', function () {
    return view('form-seller');
});

Route::get('/listSalesSeller', function () {
    return view('list-sales-seller');
})->name('listSalesSeller');

Route::post('/registerSeller', [SellerController::class, 'store'])->name('registerSeller');

Route::get('/showSales/{id}', [SellerController::class, 'show'])->name('showSales');

Route::post('/registerSale', [SaleController::class, 'store'])->name('registerSale');
