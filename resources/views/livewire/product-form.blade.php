<div>
    {{-- Close your eyes. Count to one. That is how long forever feels. --}}
    <div class="flex items-center justify-center w-full h-full">
        <div class="flex w-145 h-130 flex-col items-center justify-center bg-gray-200">

            <form wire:submit.prevent="insert" >
                @csrf
                <div class="w-140 h-115 flex flex-col items-center">
                    
                    <div class="flex flex-col justify-start w-135 h-10 mt-2">
                        <label for="" class="text-blue-500">Nama Barang</label>
                        <div class="mt-1 w-full">
                            <input type="text" wire:model="nama" name="nama" class="bg-gray-100 w-full h-10" id="">
                        </div>
                    </div>

                    <div class="flex flex-col justify-start w-135 h-10 mt-9">
                        <label for="" class="text-blue-500">Jumlah</label>
                        <div class="mt-1 w-full">
                            <input type="text" wire:model="jumlah" name="jumlah" class="bg-gray-100 w-full h-10" inputmode="numeric" id="">
                        </div>
                    </div>

                    <div class="flex flex-col justify-start w-135 h-10 mt-9">
                        <label for="" class="text-blue-500">Harga</label>
                        <div class="mt-1 w-full">
                            <input type="text" wire:model="harga" name="harga" inputmode="numeric" readonly class="bg-gray-400 cursor-not-allowed w-full h-10" id="">
                        </div>
                    </div>

                    <div class="flex flex-col justify-start w-135 h-10 mt-9">
                        <label for="" class="text-blue-500">Stock</label>
                        <div class="mt-1 w-full">
                            <input type="text" wire:model="stock" name="stock" readonly class="bg-gray-400 cursor-not-allowed w-full h-10" id="">
                        </div>
                    </div>

                    <div class="flex flex-col justify-start w-135 h-10 mt-9">
                        <label for="" class="text-blue-500">Nama Kategori Barang</label>
                        <div class="mt-1 w-full">
                            <input type="text" wire:model="kategori" name="kategori" readonly class="bg-gray-400 cursor-not-allowed w-full h-10" id="">
                        </div>
                    </div>
                    
                </div>
                
                <div class="m-2 flex w-full justify-end">
                    <div class="flex gap-2 me-2.5">
                        <button class="bg-green-500 text-white px-5 cursor-pointer">INSERT</button>
                        <a href="/kasir" class="bg-red-500 text-white px-5 ">CANCEL</a>
                    </div>
                </div>
            
            </form>

        </div>
    </div>
</div>
