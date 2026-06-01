<x-app-layout>
    <div class="min-h-screen bg-orange-50 py-10">
        <div class="max-w-7xl mx-auto px-6">

            <div class="flex flex-wrap justify-center md:justify-between items-center mb-8 gap-4 md:gap-0">
                <div>
                    <h1 class="text-5xl font-extrabold uppercase">
                        Inventario
                    </h1>
                    <p class="text-gray-600 mt-2">
                        Gestiona todos los tomos de MangaTekaZ
                    </p>
                </div>

                <a href="/admin/mangas/crear"
                    class="bg-orange-600 text-white font-extrabold px-5 py-3 rounded-lg border-2 border-gray-900">
                    + Añadir manga
                </a>
            </div>

            <div class="bg-white border-4 border-gray-800 rounded-xl shadow overflow-x-auto">
                <table class="w-full">
                    <thead class="bg-blue-950 text-white">
                        <tr>
                            <th class="p-4 text-left">Título</th>
                            <th class="p-4 text-left">Saga</th>
                            <th class="p-4 text-left">Precio</th>
                            <th class="p-4 text-left">Stock</th>
                            <th class="p-4 text-left">Acciones</th>
                        </tr>
                    </thead>

                    <tbody>
                        @foreach($mangas as $manga)
                            <tr class="border-t hover:bg-orange-50">
                                <td class="p-4 font-bold">
                                    {{ $manga->titulo }}
                                </td>

                                <td class="p-4">
                                    {{ $manga->saga->nombre }}
                                </td>

                                <td class="p-4 font-extrabold text-orange-600">
                                    {{ $manga->precio }} €
                                </td>

                                <td class="p-4">
                                    {{ $manga->stock }}
                                </td>

                                <td class="p-4 flex gap-2">
                                    <a href="/admin/mangas/{{ $manga->id }}/editar"
                                        class="bg-blue-900 text-white px-3 py-2 rounded font-bold">
                                        Editar
                                    </a>

                                    <form action="{{ route('admin.mangas.destroy', $manga->id) }}" method="POST"
                                        onsubmit="return confirm('¿Seguro que quieres eliminar este manga?')">
                                        @csrf
                                        @method('DELETE')

                                        <button class="bg-red-600 text-white px-3 py-2 rounded font-bold">
                                            Eliminar
                                        </button>
                                    </form>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>

        </div>
    </div>
</x-app-layout>