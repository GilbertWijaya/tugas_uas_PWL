<?php

use App\Http\Controllers\Kasir;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\TransactionController;
use Illuminate\Support\Facades\Route;
use App\Livewire\Auth\Login;
use Illuminate\Support\Facades\Auth;

// ========== Login & Logout ==========
Route::get('/', Login::class)->name('login'); // Halaman login

Route::get('/logout', function () {
    Auth::logout();
    return redirect('/');
})->name('logout');


// ========== Grup Routing untuk yang Wajib Login ==========
Route::middleware(['auth'])->group(function () {

    // Halaman kasir (dashboard)
    Route::get('/kasir', [Kasir::class, 'index'])->name('kasir');

    // Insert dan Update Transaksi
    Route::get('/kasir/insert/transaction', [TransactionController::class, 'insertpage'])->name('kasir.insert');
    Route::get('/kasir/update/{id}', [TransactionController::class, 'updatepage'])->name('kasir.update');

    // Update produk
    Route::post('/product/update', [ProductController::class, 'update'])->name('product.update');

    // Delete transaksi
    Route::delete('/transaction/{id}', [TransactionController::class, 'delete'])->name('transaction.delete');
});
