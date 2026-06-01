<x-app-layout>
    <div class="min-h-screen bg-orange-50 py-10">
        <div class="max-w-6xl mx-auto px-6">

            <h1 class="text-5xl font-extrabold text-gray-900 uppercase mb-8">
                Mi carrito
            </h1>

            @if($carrito && $carrito->mangas->count())

                <div class="grid grid-cols-1 lg:grid-cols-3 gap-8">

                    <div class="lg:col-span-2 space-y-4">

                        @foreach($carrito->mangas as $manga)
                            <div class="bg-white border-4 border-gray-800 rounded-xl shadow p-4 flex gap-4">

                                <img src="{{ $manga->imagen }}" class="w-28 h-36 object-cover rounded bg-gray-200">

                                <div class="flex-1">
                                    <h2 class="text-2xl font-extrabold">
                                        {{ $manga->titulo }}
                                    </h2>

                                    <p class="text-gray-600">
                                        {{ $manga->saga->nombre }}
                                    </p>

                                    <p class="mt-2">
                                        Cantidad:
                                        <span class="font-bold">
                                            {{ $manga->pivot->cantidad }}
                                        </span>
                                    </p>

                                    <p class="text-orange-600 font-extrabold text-xl mt-2">
                                        {{ $manga->precio }} €
                                    </p>
                                </div>

                            </div>
                        @endforeach

                    </div>

                    <div class="bg-white border-4 border-gray-800 rounded-xl shadow p-6 h-fit">

                        <h2 class="text-3xl font-extrabold mb-4">
                            Resumen
                        </h2>

                        <p class="text-xl mb-6">
                            Total:
                            <span class="font-extrabold text-orange-600">
                                {{ $carrito->precio_total }} €
                            </span>
                        </p>

                        <form action="{{ route('carrito.confirmar') }}" method="POST">
                            @csrf

                            <button
                                class="w-full bg-orange-600 hover:bg-orange-700 text-white font-extrabold py-3 rounded-lg border-2 border-gray-900">
                                CONFIRMAR PEDIDO
                            </button>
                        </form>

                        <a href="/catalogo" class="block text-center mt-4 font-bold text-gray-700 hover:text-orange-600">
                            ← Seguir comprando
                        </a>

                    </div>

                </div>

            @else

                <div class="bg-white border-4 border-gray-800 rounded-xl shadow p-10 text-center">

                    <h2 class="text-3xl font-extrabold mb-4">
                        Tu carrito está vacío
                    </h2>

                    <p class="text-gray-600 mb-6">
                        Añade algún tomo desde el catálogo.
                    </p>

                    <a href="/catalogo"
                        class="bg-orange-600 text-white font-extrabold px-6 py-3 rounded-lg border-2 border-gray-900">
                        IR AL CATÁLOGO
                    </a>

                </div>

            @endif

        </div>
    </div>
</x-app-layout>