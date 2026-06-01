<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>{{ config('app.name', 'MangaTekaZ') }}</title>

    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>

<body class="font-sans antialiased bg-orange-50">

    <div class="min-h-screen flex flex-col">

        @include('layouts.navigation')

        <main class="flex-grow">
            {{ $slot }}
        </main>

        <footer class="bg-blue-950 border-t-4 border-orange-600 mt-16">

            <div class="max-w-7xl mx-auto px-6 py-10 text-center">

                <img src="{{ asset('logo.png') }}" class="w-[300px] h-[250px] object-cover mx-auto">

                <p class="text-white text-lg">
                    La biblioteca definitiva para coleccionistas de Dragon Ball
                </p>

                <div class="mt-6 flex justify-center gap-6 text-sm font-bold">

                    <a href="/catalogo" class="text-white hover:text-orange-400">
                        Catálogo
                    </a>

                    <a href="/carrito" class="text-white hover:text-orange-400">
                        Carrito
                    </a>

                    <a href="/mis-pedidos" class="text-white hover:text-orange-400">
                        Mis pedidos
                    </a>

                </div>

                <p class="text-gray-300 text-sm mt-8">
                    © 2026 MangaTekaZ · Proyecto Laravel Dragon Ball
                </p>

            </div>

        </footer>

    </div>

</body>

</html>