<?php

namespace App\Http\Controllers;

use App\Models\Transaction;

class Kasir extends Controller
{
    
    // tampilkan halaman index dengan membawa data transaksi
    public function index(){

        $transactions = Transaction::all();

        return view("kasir.kasir",compact('transactions'));
    }
    
    

}
