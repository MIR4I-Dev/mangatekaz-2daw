<x-app-layout>
    <div class="min-h-screen bg-orange-50">

        <div class="max-w-7xl mx-auto px-6 py-8">
            <div class="flex justify-between items-center mb-8 flex-wrap gap-4">
                <div>
                    <h1 class="text-5xl font-extrabold text-gray-900 uppercase">
                        Catálogo del Torneo
                    </h1>
                    <p class="text-gray-600 mt-2">
                        Encuentra los tomos legendarios
                    </p>
                </div>

                <form method="GET" action="/catalogo" class="flex gap-2">
                    <select name="saga" class="border-2 border-gray-800 rounded p-2">
                        <option value="">Todas las Sagas</option>
                        @foreach($sagas as $saga)
                            <option value="{{ $saga->id }}" {{ $seleccionada == $saga->id ? 'selected' : '' }}>
                                {{ $saga->nombre }}
                            </option>
                        @endforeach
                    </select>

                    <button type="submit"
                        class="bg-orange-600 text-white font-bold px-4 py-2 rounded border-2 border-gray-900">
                        FILTRAR
                    </button>
                </form>
            </div>

            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-6">
                @foreach($mangas as $manga)
                    <div class="bg-white border-4 border-gray-800 rounded-xl p-4 shadow-lg">
                        <img src="{{ asset($manga->imagen) }}" class="w-full h-96 object-cover rounded bg-gray-200"
                            alt="{{ $manga->titulo }}">

                        <div class="mt-4">
                            <span class="bg-blue-950 text-white text-xs font-bold px-3 py-1 rounded-full uppercase">
                                {{ $manga->saga->nombre }}
                            </span>

                            <h2 class="text-lg font-extrabold mt-3 min-h-14">
                                {{ $manga->titulo }}
                            </h2>

                            <p class="text-2xl text-orange-600 font-extrabold mt-3">
                                ${{ $manga->precio }}
                            </p>

                            <div class="flex justify-between text-sm mt-4">
                                <span>Volumen {{ $manga->volumen ?? 'No disponible' }}</span>
                                @if ($manga->stock == 0)
                                    <span class="text-red-700">Agotado</span>
                                @else
                                    <span class="text-green-700">Stock: {{ $manga->stock }}</span>
                                @endif
                            </div>

                            <a href="/catalogo/{{ $manga->id }}"
                                class="block mt-4 text-center bg-orange-600 text-white font-bold py-2 rounded border-2 border-gray-900">
                                VER DETALLES
                            </a>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>

    </div>
</x-app-layout>