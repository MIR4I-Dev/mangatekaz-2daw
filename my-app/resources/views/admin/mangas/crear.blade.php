<x-app-layout>
    <div class="min-h-screen bg-orange-50 py-10">
        <div class="max-w-4xl mx-auto px-6">

            <h1 class="text-5xl font-extrabold uppercase mb-8 text-center">
                Añadir manga
            </h1>

            <form action="{{ route('admin.mangas.store') }}" method="POST"
                class="bg-white border-4 border-gray-800 rounded-xl shadow p-8 space-y-5" enctype="multipart/form-data">
                @csrf

                <input name="titulo" placeholder="Título" class="w-full border-2 border-gray-800 rounded p-3" required>

                <input name="autor" placeholder="Autor" class="w-full border-2 border-gray-800 rounded p-3">

                <input name="volumen" type="number" placeholder="Volumen"
                    class="w-full border-2 border-gray-800 rounded p-3">

                <input name="precio" type="number" step="0.01" min="0" placeholder="Precio"
                    class="w-full border-2 border-gray-800 rounded p-3" required>

                <input name="stock" type="number" min="0" placeholder="Stock"
                    class="w-full border-2 border-gray-800 rounded p-3" required>

                <div class="w-full border-2 border-gray-800 rounded p-3 bg-gray-50">
                    <label for="imagen" class="block text-sm font-bold text-gray-700 mb-1">Portada del Manga:</label>
                    <input id="imagen" name="imagen" type="file" accept="image/*" class="w-full cursor-pointer">
                </div>

                <textarea name="descripcion" placeholder="Descripción"
                    class="w-full border-2 border-gray-800 rounded p-3 min-h-32"></textarea>

                <select name="sagas_id" class="w-full border-2 border-gray-800 rounded p-3" required>
                    @foreach($sagas as $saga)
                        <option value="{{ $saga->id }}">
                            {{ $saga->nombre }}
                        </option>
                    @endforeach
                </select>

                <div class="flex gap-4">
                    <button type="submit"
                        class="bg-orange-600 text-white font-extrabold px-6 py-3 rounded-lg border-2 border-gray-900">
                        Guardar manga
                    </button>

                    <a href="/admin/mangas"
                        class="bg-gray-800 text-white font-extrabold px-6 py-3 rounded-lg flex flex-col justify-center align-center">
                        Cancelar
                    </a>
                </div>
            </form>

        </div>
    </div>
</x-app-layout>