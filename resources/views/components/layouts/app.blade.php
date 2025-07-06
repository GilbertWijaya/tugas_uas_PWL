<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>{{ $title ?? 'Kasir App' }}</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    @vite('resources/css/app.css')
    @livewireStyles
</head>

<body class="bg-gray-100 min-h-screen">
    <main class="p-4">
        {{ $slot }}
    </main>
    @livewireScripts
    @vite('resources/js/app.js')
</body>

</html>
