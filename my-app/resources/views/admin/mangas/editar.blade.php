<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Editar Manga') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900 dark:text-gray-100">
                    
                    <p class="mb-4">Formulario para editar manga (PUT a route('admin.mangas.update', $manga->id))</p>
                    <!-- Inyectado por backend: $manga, $sagas -->
                    
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
