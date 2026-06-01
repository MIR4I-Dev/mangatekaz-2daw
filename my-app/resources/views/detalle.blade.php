<x-app-layout>

    <div class="min-h-screen bg-orange-50 py-10">

        <div class="max-w-6xl mx-auto px-6">

            <a href="/catalogo" class="text-gray-700 font-bold mb-6 inline-block">
                ← Volver al Torneo
            </a>

            <div
                class="bg-white border-4 border-gray-800 rounded-2xl shadow-xl p-8 grid grid-cols-1 md:grid-cols-2 justify-center items-center gap-10">

                <div>
                    <img src="{{ asset($manga->imagen) }}" class="w-full h-full object-cover rounded-xl bg-gray-200">
                </div>

                <div>

                    <div class="flex gap-2 items-center mb-4">

                        <span class="bg-blue-950 text-white text-xs font-bold px-3 py-1 rounded-full uppercase">
                            {{ $manga->saga->nombre }}
                        </span>

                        @if ($manga->stock == 0)
                            <span class="bg-red-200 text-red-900 text-xs font-bold px-3 py-1 rounded-full">
                                AGOTADO
                            </span>
                        @else
                            <span class="bg-green-200 text-green-900 text-xs font-bold px-3 py-1 rounded-full">
                                EN STOCK: {{ $manga->stock }}
                            </span>
                        @endif

                    </div>

                    <h1 class="text-5xl font-extrabold leading-tight">
                        {{ $manga->titulo }}
                    </h1>

                    <p class="text-gray-700 mt-4 text-lg">
                        Por {{ $manga->autor }} | Vol. {{ $manga->volumen }}
                    </p>

                    <p class="text-5xl text-orange-600 font-extrabold mt-6">
                        ${{ $manga->precio }}
                    </p>

                    <div class="bg-orange-100 rounded-lg p-4 mt-6">
                        {{ $manga->descripcion }}
                    </div>

                    <div class="bg-gray-100 border rounded-xl p-6 mt-8">

                        <h2 class="text-center font-extrabold uppercase mb-4">
                            Comprar este tomo
                        </h2>

                        <form action="{{ route('carrito.anadir') }}" method="POST">
                            @csrf

                            <input type="hidden" name="manga_id" value="{{ $manga->id }}">

                            <div class="mb-4">
                                <label class="font-bold">
                                    Cantidad:
                                </label>

                                @if ($manga->stock > 0)
                                    <input type="number" name="cantidad" value="1" min="1" max="{{ $manga->stock }}"
                                        class="border rounded p-2 w-24 ml-2">
                                @else
                                    <input type="number" name="cantidad" value="0" min="0" max="0"
                                        class="border rounded p-2 w-24 ml-2 cursor-not-allowed" disabled>
                                @endif
                            </div>

                            @if ($manga->stock > 0)
                                <button
                                    class="w-full bg-orange-600 hover:bg-orange-700 text-white font-extrabold py-3 rounded-lg border-2 border-gray-900 cursor-pointer">
                                    🛒 AÑADIR A MI COLECCIÓN
                                </button>
                            @else
                                <button
                                    class="w-full bg-gray-600 text-white font-extrabold py-3 rounded-lg border-2 border-gray-900 cursor-not-allowed"
                                    disabled>
                                    🛒 NO HAY STOCK
                                </button>
                            @endif

                        </form>

                    </div>

                </div>

            </div>

        </div>

    </div>

</x-app-layout>