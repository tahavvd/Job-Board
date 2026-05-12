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
        <nav class="mb-8 flex justify-between text-lg font-bold">
            <ul class="flex space-x-2">
                <li>
                    <a href="{{ route('jobs.index') }}" class="hover:text-blue-400">Home</a>
                </li>
            </ul>
            <ul class="flex space-x-2">
                @auth
                    <li>{{ auth()->user()->name ?? 'Anynomus' }}</li>
                    <li class="text-gray-300">|</li>
                    <li>
                        <a href="{{ route('my-applications.index') }}" class="hover:text-blue-400">My Applications</a>
                    </li>
                    <li class="text-gray-300">|</li>
                    <li>
                        <form action="{{ route('auth.destroy') }}" method="POST" class="inline">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="hover:text-blue-400">Logout</button>
                        </form>
                    </li>
                @else
                    <li>
                        <a href="{{ route('auth.create') }}" class="hover:text-blue-400">Login</a>
                    </li>
                @endauth
            </ul>
        </nav>
        @if (session('success'))
            <div class="mb-6 rounded-md bg-green-500/20 px-4 py-3 text-green-400">
                {{ session('success') }}
            </div>
        @endif
        {{ $slot }}
    </div>
</body>

</html>
