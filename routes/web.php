<?php

use App\Http\Controllers\Kasir;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\TransactionController;
use Illuminate\Support\Facades\Route;
use App\Livewire\Auth\Login;
use Illuminate\Support\Facades\Auth;

Route::get('/', Login::class);

Route::get('/kasir', function () {
    return view('kasir.kasir'); // Buat file `dashboard.blade.php` sesuai kebutuhan
})->middleware('auth');

Route::get('/logout', function () {
    Auth::logout();
    return redirect('/');
})->name('logout');


// buat route url terhadap seluruh halaman program

// kasir
Route::get("/kasir", [Kasir::class, "index"])->name("kasir");

// product
Route::post("/product/update", [ProductController::class, "update"])->name("product.update");

Route::get("/kasir/insert/transaction", [TransactionController::class, "insertpage"])->name("kasir.insert");
Route::get("/kasir/update/{id}", [TransactionController::class, "updatepage"])->name("kasir.update");
Route::delete("/transaction/{id}", [TransactionController::class, "delete"])->name("transaction.delete");
