<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('MangaTekaZ Admin Dashboard') }}
        </h2>
    </x-slot>

    <div class="p-6 text-gray-900 dark:text-gray-100">
        <h3>Bienvenido al Panel de Gestión, {{ Auth::user()->name }} 🐉</h3>
        
        <!-- Estadísticas inyectadas por el Controller: 
             $totalMangas, $totalPedidos, $totalStock, $ventasTotales 
        -->
        
        <div class="mt-4 grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-4">
            <p>Total Mangas: {{ $totalMangas }}</p>
            <p>Total Pedidos: {{ $totalPedidos }}</p>
            <p>Stock Total: {{ $totalStock }}</p>
            <p>Ventas: {{ $ventasTotales }} €</p>
        </div>
    </div>
</x-app-layout>
