<x-layouts.app title="Dashboard Kasir">
    <div class="flex items-center justify-center w-full h-full">
        <div class="flex w-145 h-130 flex-col items-center justify-center bg-gray-200">

            <form method="POST" id="transaksiForm">
                @csrf
                <input type="hidden" name="_method" value="DELETE" id="methodField">

                <div class="w-140 h-115 flex flex-col items-center bg-white">
                    @foreach ($transactions as $trx)
                        <div class="flex flex-row items-center justify-around w-135 h-10 border-b">
                            <input type="radio" name="selected_id" value="{{ $trx->id }}">
                            <div class="w-1/4 text-center">
                                <p>{{ $trx->product->nama ?? '-' }}</p>
                            </div>
                            <div class="w-1/4 text-center">
                                <p>{{ $trx->product->harga ?? '-' }}</p>
                            </div>
                            <div class="w-1/4 text-center">
                                <p>{{ $trx->jumlah_pembelian }}</p>
                            </div>
                            <div class="w-1/4 text-center">
                                <p>{{ $trx->category->nama ?? '-' }}</p>
                            </div>
                        </div>
                    @endforeach
                </div>

                <div class="m-2 flex w-full justify-items-start">
                    <div class="flex gap-2 ms-2">
                        <a href="/kasir" class="bg-white px-2 rounded-sm cursor-pointer">Load</a>
                        <a href="/kasir/insert/transaction" class="bg-white px-2 rounded-sm cursor-pointer">Insert</a>
                        <button onclick="setUpdate()" class="bg-white px-2 rounded-sm cursor-pointer">Update</button>
                        <button type="button" onclick="setDelete()"
                            class="bg-white px-2 rounded-sm cursor-pointer">Delete</button>
                        <a href="{{ route('logout') }}"
                            class="text-red-500 bg-white px-2 rounded-sm cursor-pointer">Logout</a>
                    </div>
                </div>
            </form>

        </div>
    </div>

    <script>
        function setUpdate() {
            const form = document.getElementById('transaksiForm');
            const selected = document.querySelector('input[name="selected_id"]:checked');
            if (!selected) {
                alert('Pilih salah satu transaksi terlebih dahulu.');
                event.preventDefault();
                return;
            }

            form.action = `/kasir/update/${selected.value}`;
            form.method = 'GET';
        }

        function setDelete() {
            const form = document.getElementById('transaksiForm');
            const selected = document.querySelector('input[name="selected_id"]:checked');
            if (!selected) {
                alert('Pilih salah satu transaksi terlebih dahulu.');
                event.preventDefault();
                return;
            }

            const confirmDelete = confirm('Yakin ingin menghapus transaksi ini?');
            if (!confirmDelete) {
                event.preventDefault();
                return;
            }

            form.action = `/transaction/${selected.value}`;
            form.method = 'POST';
            document.getElementById('methodField').value = 'DELETE';
            form.submit();
        }
    </script>
</x-layouts.app>
