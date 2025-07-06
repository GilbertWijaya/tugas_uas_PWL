<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Transaction extends Model
{
    /** @use HasFactory<\Database\Factories\TransactionFactory> */
    use HasFactory;
    protected $table = "transactions";
    protected $fillable = ['id_barang','id_category','jumlah_pembelian'];

    // tabel transaksi akan berelasi dengan kedua tabel ini
    public function product():BelongsTo{
        return $this->belongsTo(Product::class,"id_barang");
    }

    public function category():BelongsTo{
        return $this->belongsTo(Category::class,"id_category");
    }

}
