<?php

use App\Http\Controllers\Kasir;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\TransactionController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

// buat route url terhadap seluruh halaman program

// kasir
Route::get("/kasir",[Kasir::class,"index"])->name("kasir");

// product
Route::post("/product/update",[ProductController::class,"update"])->name("product.update");

Route::get("/kasir/insert/transaction",[TransactionController::class,"insertpage"])->name("kasir.insert");
Route::get("/kasir/update/{id}",[TransactionController::class,"updatepage"])->name("kasir.update");
Route::delete("/transaction/{id}",[TransactionController::class,"delete"])->name("transaction.delete");

