<?php

namespace App\Livewire;

use App\Models\Product;
use App\Models\Transaction;
use Illuminate\Support\Facades\DB;
use Livewire\Component;

class ProductForm extends Component
{

    // siapkan variabel untuk menampung nilai secara live pada input
    public $nama, $jumlah, $id;
    public $harga, $stock, $kategori, $kategoriId;

    // apdate setiap variabel sesuai dengan data
    public function updatedNama($value)
    {
        $product = Product::where('nama', $value)->first();

        if ($product) {
            $this->id = $product->id;
            $this->harga = $product->harga;
            $this->stock = $product->stock;
            $this->kategori = $product->category->nama;
            $this->kategoriId = $product->id_categories;
        } 
    }

    // masukan atau create data pada database
    public function insert()
    {
        $this->validate([
            'nama' => 'required',
            'jumlah' => 'required|numeric',
        ]);

        if ($this->stock == 0 || $this->jumlah > $this->stock) {
            return redirect("/kasir/insert/product");
        }

        DB::table("products")->where("id",$this->id)->update(["stock" => $this->stock - $this->jumlah]);

        Transaction::create([
            'id_barang' => $this->id,
            "id_category" => $this->kategoriId,
            "jumlah_pembelian" => $this->jumlah,
            "created_at" => new \DateTime,
            "updated_at" => new \DateTime,
        ]);

        session()->flash('message', 'Produk berhasil ditambahkan!');
        return redirect('/kasir');
    }

    // render data disimpan pada variabel sehingga dapat ditampilkan secara live melalui livewire
    public function render()
    {
        return view('livewire.product-form');
    }
}
