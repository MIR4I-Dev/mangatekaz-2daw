<nav class="bg-blue-950 border-b-4 border-orange-600 shadow">
    <div class="max-w-7xl mx-auto px-6">
        <div class="flex flex-wrap justify-center md:justify-between items-center h-fit py-2 gap-4 md:gap-0">

            <a href="/catalogo" class="text-3xl font-extrabold text-orange-500 tracking-wider">
                <img src="{{ asset('logo.png') }}" class="w-full h-[150px] object-cover">
            </a>

            <div class="flex flex-wrap items-center justify-center gap-6 text-sm font-bold">

                <a href="/catalogo" class="text-white hover:text-orange-400">
                    Catálogo
                </a>

                @auth
                    <a href="/carrito" class="text-white hover:text-orange-400">
                        Carrito
                    </a>

                    <a href="/mis-pedidos" class="text-white hover:text-orange-400">
                        Mis Pedidos
                    </a>

                    @if(Auth::user()->role === 'admin')
                        <a href="/admin" class="text-yellow-400 hover:text-orange-400">
                            Panel Admin
                        </a>
                    @endif

                    <a href="/profile" class="text-white hover:text-orange-400">
                        {{ Auth::user()->name }}
                    </a>

                    <form method="POST" action="{{ route('logout') }}">
                        @csrf
                        <button class="text-white hover:text-orange-400">
                            Salir
                        </button>
                    </form>
                @else
                    <a href="/login" class="text-white hover:text-orange-400">
                        Iniciar sesión
                    </a>

                    <a href="/register"
                        class="bg-orange-600 text-white px-4 py-2 rounded border-2 border-white hover:bg-orange-700">
                        Registro
                    </a>
                @endauth

            </div>

        </div>
    </div>
</nav>