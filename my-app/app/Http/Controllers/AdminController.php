<?php

namespace App\Http\Controllers;

use App\Models\Manga;
use App\Models\Saga;
use App\Models\Pedido;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function dashboard()
    {
        $totalMangas  = Manga::count();
        $totalPedidos = Pedido::where('estado', '!=', 'pendiente')->count();
        $totalStock   = Manga::sum('stock');
        $ventasTotales = Pedido::where('estado', 'atendido')->sum('precio_total');

        return view('admin.dashboard', compact('totalMangas', 'totalPedidos', 'totalStock', 'ventasTotales'));
    }

    public function mangas()
    {
        $mangas = Manga::with('saga')->get();
        return view('admin.mangas.index', compact('mangas'));
    }

    public function crearManga()
    {
        $sagas = Saga::all();
        return view('admin.mangas.crear', compact('sagas'));
    }

    public function guardarManga(Request $request)
    {
        $request->validate([
            'titulo' => 'required|string|max:255',
            'sagas_id' => 'required|exists:sagas,id',
            'precio' => 'required|numeric|min:0',
            'stock' => 'required|integer|min:0',
            'autor' => 'nullable|string',
            'volumen' => 'nullable|integer',
            'descripcion' => 'nullable|string',
            'imagen' => 'nullable|url'
        ]);

        Manga::create($request->all());

        return redirect()->route('admin.mangas.index')->with('success', 'Manga añadido correctamente.');
    }

    public function editarManga($id)
    {
        $manga = Manga::findOrFail($id);
        $sagas = Saga::all();
        return view('admin.mangas.editar', compact('manga', 'sagas'));
    }

    public function actualizarManga(Request $request, $id)
    {
        $request->validate([
            'titulo' => 'required|string|max:255',
            'sagas_id' => 'required|exists:sagas,id',
            'precio' => 'required|numeric|min:0',
            'stock' => 'required|integer|min:0',
            'autor' => 'nullable|string',
            'volumen' => 'nullable|integer',
            'descripcion' => 'nullable|string',
            'imagen' => 'nullable|url'
        ]);

        $manga = Manga::findOrFail($id);
        $manga->update($request->all());

        return redirect()->route('admin.mangas.index')->with('success', 'Manga actualizado correctamente.');
    }

    public function eliminarManga($id)
    {
        Manga::destroy($id);
        return redirect()->route('admin.mangas.index')->with('success', 'Manga eliminado.');
    }

    public function pedidos()
    {
        $pedidos = Pedido::with(['user', 'mangas'])
                         ->where('estado', '!=', 'pendiente')
                         ->orderBy('created_at', 'desc')
                         ->get();

        return view('admin.pedidos.index', compact('pedidos'));
    }

    public function actualizarEstadoPedido(Request $request, $id)
    {
        $request->validate([
            'estado' => 'required|in:pendiente,atendido',
        ]);
        $pedido = Pedido::findOrFail($id);
        $pedido->update(['estado' => $request->estado]);

        return redirect()->route('admin.pedidos.index')->with('success', 'Estado del pedido actualizado.');
    }
}
