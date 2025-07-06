<?php

namespace App\Http\Controllers;

use App\Models\Transaction;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ProductController extends Controller
{
    
    // update product sesuai dengan data yang dikirim
    public function update(Request $request){

        $product = $request->all();

        DB::table("products")->where("id",$product["id_barang"])->update(["nama" => $product["nama"]]);

        return redirect("kasir");

    }


}
