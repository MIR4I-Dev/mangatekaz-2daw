<x-app-layout>
    <div class="min-h-screen bg-orange-50 py-10">
        <div class="max-w-7xl mx-auto px-6">

            <h1 class="text-5xl font-extrabold uppercase mb-8">
                Revisión de Pedidos
            </h1>

            <div class="space-y-6">
                @foreach($pedidos as $pedido)
                    <div class="bg-white border-4 border-gray-800 rounded-xl shadow p-6">

                        <div class="flex justify-between items-center mb-6">
                            <div>
                                <h2 class="text-2xl font-extrabold">
                                    Pedido #{{ $pedido->id }}
                                </h2>

                                <p class="text-gray-600">
                                    Cliente: {{ $pedido->user->name ?? 'Usuario eliminado' }}
                                </p>

                                <p class="text-gray-600">
                                    Fecha: {{ $pedido->created_at->format('d/m/Y H:i') }}
                                </p>
                            </div>

                            <span class="bg-blue-950 text-white font-bold px-4 py-2 rounded-full uppercase">
                                {{ $pedido->estado }}
                            </span>
                        </div>

                        <div class="space-y-3 mb-6">
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

                        <div class="flex justify-between items-center border-t pt-4">
                            <p class="text-2xl font-extrabold">
                                Total:
                                <span class="text-orange-600">
                                    {{ $pedido->precio_total }} €
                                </span>
                            </p>
                        </div>
                    </div>
                @endforeach
            </div>

        </div>
    </div>
</x-app-layout>