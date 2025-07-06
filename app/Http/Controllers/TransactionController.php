<?php

namespace App\Http\Controllers;

use App\Models\Transaction;
use Illuminate\Http\Request;

class TransactionController extends Controller
{

    // tampilkan halmman dengan membawa data yang dikirim dari url
    public function insertpage(){
        return view("kasir.insert");
    }

    public function updatepage($id){

        $transaction = Transaction::with(['product', 'category'])->findOrFail($id);

        return view("kasir.update",compact("transaction"));
    }

    // jalankan aksi untuk mendelete data
    public function delete($id){

        $trx = Transaction::findOrFail($id);
        $trx->delete();

        return redirect()->route('kasir')->with('success', 'Transaksi berhasil dihapus.');

    }
}
