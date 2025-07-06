<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Dashboard Kasir</title>
    @vite('resources/css/app.css')
    
</head>
<body>
    
    {{-- {{ dd($transaction->product->nama) }} --}}

    <div class="flex items-center justify-center w-full h-full">
        <div class="flex w-145 h-130 flex-col items-center justify-center bg-gray-200">

            <form action="{{ route("product.update") }}" method="POST" >
                @csrf
                <div class="w-140 h-115 flex flex-col items-center">

                    <input type="hidden" name="id" value="{{ $transaction->id }}">
                    <input type="hidden" name="id_barang" value="{{ $transaction->product->id }}">
                    
                    <div class="flex flex-col justify-start w-135 h-10 mt-2">
                        <label for="" class="text-blue-500">Nama Barang</label>
                        <div class="mt-1 w-full">
                            <input type="text" name="nama" value="{{ $transaction->product->nama }}" class="bg-gray-100 w-full h-10" id="">
                        </div>
                    </div>

                    <div class="flex flex-col justify-start w-135 h-10 mt-9">
                        <label for="" class="text-blue-500">Jumlah</label>
                        <div class="mt-1 w-full">
                            <input type="text" placeholder="{{ $transaction->jumlah_pembelian }}" readonly name="jumlah" class="bg-gray-400 cursor-not-allowed w-full h-10" inputmode="numeric" id="">
                        </div>
                    </div>

                    <div class="flex flex-col justify-start w-135 h-10 mt-9">
                        <label for="" class="text-blue-500">Harga</label>
                        <div class="mt-1 w-full">
                            <input type="text" name="harga" placeholder="{{ $transaction->product->harga }}" inputmode="numeric" readonly class="bg-gray-400 cursor-not-allowed w-full h-10" id="">
                        </div>
                    </div>

                    <div class="flex flex-col justify-start w-135 h-10 mt-9">
                        <label for="" class="text-blue-500">Stock</label>
                        <div class="mt-1 w-full">
                            <input type="text"  name="stock" placeholder="{{ $transaction->product->stock }} saat ini" readonly class="bg-gray-400 cursor-not-allowed w-full h-10" id="">
                        </div>
                    </div>

                    <div class="flex flex-col justify-start w-135 h-10 mt-9">
                        <label for="" class="text-blue-500">Nama Kategori Barang</label>
                        <div class="mt-1 w-full">
                            <input type="text" name="kategori" placeholder="{{ $transaction->category->nama }}" readonly class="bg-gray-400 cursor-not-allowed w-full h-10" id="">
                        </div>
                    </div>
                    
                </div>
                
                <div class="m-2 flex w-full justify-end">
                    <div class="flex gap-2 me-2.5">
                        <button class="bg-green-500 text-white px-5 cursor-pointer">UPDATE</button>
                        <a href="/kasir" class="bg-red-500 text-white px-5 ">CANCEL</a>
                    </div>
                </div>
            
            </form>

        </div>
    </div>

</body>
</html>