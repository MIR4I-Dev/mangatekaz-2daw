<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Gestión de Mangas') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            
            <!-- Botón Añadir -->
            <div class="flex justify-end mb-4">
                <a href="{{ route('admin.mangas.create') }}" class="bg-blue-600 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded">
                    + Añadir Nuevo Tomo
                </a>
            </div>

            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900 dark:text-gray-100">
                    
                    <table class="w-full text-left border-collapse">
                        <thead>
                            <tr class="border-b dark:border-gray-700 text-sm font-semibold text-gray-600 dark:text-gray-400">
                                <th class="pb-3 px-4">VOL.</th>
                                <th class="pb-3 px-4">MANGA</th>
                                <th class="pb-3 px-4">SAGA</th>
                                <th class="pb-3 px-4 text-center">STOCK</th>
                                <th class="pb-3 px-4">PRECIO</th>
                                <th class="pb-3 px-4 text-right">ACCIONES</th>
                            </tr>
                        </thead>
                        <tbody>
                            <!-- Ejemplo iterando $mangas -->
                            {{-- @foreach($mangas as $manga) --}}
                            <tr class="border-b dark:border-gray-700 hover:bg-gray-50 dark:hover:bg-gray-700 transition">
                                <td class="py-4 px-4 text-gray-500">#15</td>
                                <td class="py-4 px-4">
                                    <div class="font-bold">DB Super: Moro Saga Vol. 15</div>
                                    <div class="text-sm text-gray-500">Toyotaro</div>
                                </td>
                                <td class="py-4 px-4">
                                    <span class="px-3 py-1 rounded-full text-xs font-bold bg-blue-100 text-blue-800 border border-blue-200">DRAGON BALL SUPER</span>
                                </td>
                                <td class="py-4 px-4 text-center font-bold text-red-500">0</td>
                                <td class="py-4 px-4 text-orange-500 font-bold">$15.50</td>
                                <td class="py-4 px-4 text-right space-x-2">
                                    <a href="#" class="bg-yellow-400 hover:bg-yellow-500 text-white font-bold py-1 px-3 rounded text-sm">Editar</a>
                                    <button class="bg-red-500 hover:bg-red-600 text-white font-bold py-1 px-3 rounded text-sm">Borrar</button>
                                </td>
                            </tr>
                            {{-- @endforeach --}}
                        </tbody>
                    </table>

                </div>
            </div>
        </div>
    </div>
</x-app-layout>
