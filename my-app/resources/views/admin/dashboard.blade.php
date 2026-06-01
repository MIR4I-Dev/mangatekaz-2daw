<x-app-layout>
    <div class="min-h-screen bg-orange-50 py-10">
        <div class="max-w-7xl mx-auto px-6">

            <h1 class="text-5xl font-extrabold uppercase mb-2">
                Panel de Gestión
            </h1>

            <p class="text-gray-600 mb-8">
                Bienvenido al Panel de Gestión, Admin MangaTekaZ 🐉
            </p>

            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-6">

                <div class="bg-white border-4 border-gray-800 rounded-xl shadow-lg p-6">
                    <p class="text-sm font-bold uppercase text-gray-500">
                        Total Mangas
                    </p>
                    <h2 class="text-5xl font-extrabold text-orange-600 mt-4">
                        {{ $totalMangas }}
                    </h2>
                </div>

                <div class="bg-white border-4 border-gray-800 rounded-xl shadow-lg p-6">
                    <p class="text-sm font-bold uppercase text-gray-500">
                        Total Pedidos
                    </p>
                    <h2 class="text-5xl font-extrabold text-blue-950 mt-4">
                        {{ $totalPedidos }}
                    </h2>
                </div>

                <div class="bg-white border-4 border-gray-800 rounded-xl shadow-lg p-6">
                    <p class="text-sm font-bold uppercase text-gray-500">
                        Stock Total
                    </p>
                    <h2 class="text-5xl font-extrabold text-green-700 mt-4">
                        {{ $totalStock }}
                    </h2>
                </div>

                <div class="bg-white border-4 border-gray-800 rounded-xl shadow-lg p-6">
                    <p class="text-sm font-bold uppercase text-gray-500">
                        Ventas
                    </p>
                    <h2 class="text-5xl font-extrabold text-red-600 mt-4">
                        {{ $ventasTotales }} €
                    </h2>
                </div>

            </div>

            <div class="grid grid-cols-1 md:grid-cols-2 gap-6 mt-10">

                <a href="/admin/mangas"
                    class="bg-blue-950 text-white border-4 border-gray-800 rounded-xl shadow-lg p-8 hover:scale-105 transition">
                    <h2 class="text-3xl font-extrabold text-orange-500">
                        Gestión de Mangas
                    </h2>
                    <p class="mt-2">
                        Crear, editar y eliminar tomos.
                    </p>
                </a>

                <a href="/admin/pedidos"
                    class="bg-blue-950 text-white border-4 border-gray-800 rounded-xl shadow-lg p-8 hover:scale-105 transition">
                    <h2 class="text-3xl font-extrabold text-orange-500">
                        Revisión de Pedidos
                    </h2>
                    <p class="mt-2">
                        Información detallada de los pedidos realizados.
                    </p>
                </a>

            </div>

        </div>
    </div>
</x-app-layout>