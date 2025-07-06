<x-layouts.app title="Login">
    <div class="min-h-screen flex items-center justify-center bg-gray-100">
        <form wire:submit.prevent="login" class="bg-white p-6 rounded shadow-md w-full max-w-sm">
            <h2 class="text-xl mb-4">Login</h2>

            <div class="mb-4">
                <label>Email</label>
                <input wire:model="email" type="email" class="w-full border p-2 rounded" required>
                @error('email')
                    <span class="text-red-500 text-sm">{{ $message }}</span>
                @enderror
            </div>

            <div class="mb-4">
                <label>Password</label>
                <input wire:model="password" type="password" class="w-full border p-2 rounded" required>
            </div>

            <button type="submit" class="w-full bg-blue-500 text-white p-2 rounded hover:bg-blue-600">
                Login
            </button>
        </form>
    </div>
</x-layouts.app>
