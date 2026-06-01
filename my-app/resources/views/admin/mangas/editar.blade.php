<x-app-layout>
    <div class="min-h-screen bg-orange-50 py-10">
        <div class="max-w-4xl mx-auto px-6">

            <h1 class="text-5xl font-extrabold uppercase mb-8 text-center">
                Editar manga
            </h1>

            <form action="{{ route('admin.mangas.update', $manga->id) }}" method="POST"
                class="bg-white border-4 border-gray-800 rounded-xl shadow p-8 space-y-5">
                @csrf
                @method('PUT')

                <input name="titulo" value="{{ $manga->titulo }}" class="w-full border-2 border-gray-800 rounded p-3">

                <input name="autor" value="{{ $manga->autor }}" class="w-full border-2 border-gray-800 rounded p-3">

                <input name="volumen" type="number" value="{{ $manga->volumen }}"
                    class="w-full border-2 border-gray-800 rounded p-3">

                <input name="precio" type="number" step="0.01" value="{{ $manga->precio }}"
                    class="w-full border-2 border-gray-800 rounded p-3">

                <input name="stock" type="number" value="{{ $manga->stock }}"
                    class="w-full border-2 border-gray-800 rounded p-3">

                <input name="imagen" value="{{ $manga->imagen }}" class="w-full border-2 border-gray-800 rounded p-3">

                <textarea name="descripcion"
                    class="w-full border-2 border-gray-800 rounded p-3 min-h-32">{{ $manga->descripcion }}</textarea>

                <select name="sagas_id" class="w-full border-2 border-gray-800 rounded p-3">
                    @foreach($sagas as $saga)
                        <option value="{{ $saga->id }}" @selected($manga->sagas_id == $saga->id)>
                            {{ $saga->nombre }}
                        </option>
                    @endforeach
                </select>

                <div class="flex gap-4">
                    <button type="submit"
                        class="bg-blue-900 text-white font-extrabold px-6 py-3 rounded-lg border-2 border-gray-900">
                        Actualizar manga
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