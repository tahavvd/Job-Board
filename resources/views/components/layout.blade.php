<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Laravel job board</title>

    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>

<body class="mx-auto mt-10 max-w-2xl bg-gradient-to-r from-green-400 to-blue-500 text-slate-900">
    {{ $slot }}
</body>

</html>
