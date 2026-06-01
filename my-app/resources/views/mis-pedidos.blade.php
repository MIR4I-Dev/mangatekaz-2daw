<x-app-layout>
    <div class="min-h-screen bg-orange-50 py-10">
        <div class="max-w-6xl mx-auto px-6">

            <h1 class="text-5xl font-extrabold text-gray-900 uppercase mb-8">
                Mis pedidos
            </h1>

            @forelse($pedidos as $pedido)

                <div class="bg-white border-4 border-gray-800 rounded-xl shadow p-6 mb-6">

                    <div class="flex justify-between items-center mb-6">
                        <div>
                            <h2 class="text-2xl font-extrabold">
                                Pedido #{{ $pedido->id }}
                            </h2>

                            <p class="text-gray-600">
                                {{ $pedido->created_at->format('d/m/Y H:i') }}
                            </p>
                        </div>

                        <span class="bg-blue-950 text-white font-bold px-4 py-2 rounded-full uppercase">
                            {{ $pedido->estado }}
                        </span>
                    </div>

                    <div class="space-y-3">
                        @foreach($pedido->mangas as $manga)

                            <div class="flex justify-between border rounded-lg p-3">
                                <div>
                                    <p class="font-bold">
                                        {{ $manga->titulo }}
                                    </p>

                                    <p class="text-sm text-gray-600">
                                        Cantidad: {{ $manga->pivot->cantidad }}
                                    </p>
                                </div>

                                <p class="font-extrabold text-orange-600">
                                    {{ $manga->precio }} €
                                </p>
                            </div>

                        @endforeach
                    </div>

                    <div class="text-right mt-6">
                        <p class="text-2xl font-extrabold">
                            Total:
                            <span class="text-orange-600">
                                {{ $pedido->precio_total }} €
                            </span>
                        </p>
                    </div>

                </div>

            @empty

                <div class="bg-white border-4 border-gray-800 rounded-xl shadow p-10 text-center">

                    <h2 class="text-3xl font-extrabold mb-4">
                        No tienes pedidos todavía
                    </h2>

                    <p class="text-gray-600 mb-6">
                        Cuando confirmes una compra aparecerá aquí.
                    </p>

                    <a 
                        href="/catalogo"
                        class="bg-orange-600 text-white font-extrabold px-6 py-3 rounded-lg border-2 border-gray-900"
                    >
                        IR AL CATÁLOGO
                    </a>

                </div>

            @endforelse

        </div>
    </div>
</x-app-layout>
