<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Laravel job board</title>

    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>

<body class="min-h-screen bg-gray-900 text-gray-100 antialiased">
    <!-- Header/Navbar -->
    <header class="border-b border-black/50 bg-gray-800 shadow-lg">
        <div class="mx-auto max-w-3xl px-4 py-5">
            <h1 class="text-2xl font-bold text-blue-400">JobBoard</h1>
            <p class="text-xs text-gray-400 mt-1">Find your next opportunity</p>
        </div>
    </header>

    <!-- Main Content -->
    <div class="mx-auto max-w-3xl px-4 py-10">
        {{ $slot }}
    </div>
</body>

</html>
