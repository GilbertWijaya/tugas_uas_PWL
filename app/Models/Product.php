<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Product extends Model
{
    /** @use HasFactory<\Database\Factories\ProductFactory> */
    use HasFactory;

    protected $table = "products";
    protected $fillable = ['nama',"harga","stock"];

    // tabel product akan berelasi pada tabel category
    public function category():BelongsTo{
        return $this->belongsTo(Category::class,'id_categories');
    }

}
