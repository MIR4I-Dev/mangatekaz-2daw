<?php

namespace App\Http\Controllers;

use App\Models\Manga;
use App\Models\Saga;
use App\Models\Pedido;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class AdminController extends Controller
{
    public function dashboard()
    {
        $totalMangas = Manga::count();
        $totalPedidos = Pedido::where('estado', '!=', 'pendiente')->count();
        $totalStock = Manga::sum('stock');
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
            'autor' => 'required|string',
            'volumen' => 'required|integer',
            'precio' => 'required|numeric|min:0',
            'stock' => 'required|integer|min:0',
            'sagas_id' => 'required|exists:sagas,id',
            'imagen' => 'required|image|mimes:jpeg,png,jpg,webp|max:10240',
        ]);

        $saga = Saga::findOrFail($request->sagas_id);
        $nombreCarpetaSaga = Str::slug($saga->nombre, '');

        if ($request->hasFile('imagen')) {
            $file = $request->file('imagen');
            $nombreArchivo = $request->volumen . '.' . $file->getClientOriginalExtension();
            $destino = 'covers/' . $nombreCarpetaSaga;
            $file->move(public_path($destino), $nombreArchivo);
            $rutaParaBD = $destino . '/' . $nombreArchivo;
        }
        Manga::create([
            'titulo' => $request->titulo,
            'autor' => $request->autor,
            'volumen' => $request->volumen,
            'precio' => $request->precio,
            'stock' => $request->stock,
            'descripcion' => $request->descripcion,
            'sagas_id' => $request->sagas_id,
            'imagen' => $rutaParaBD,
        ]);

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
        $manga = Manga::findOrFail($id);
        $request->validate([
            'titulo' => 'required|string|max:255',
            'autor' => 'required|string',
            'volumen' => 'required|integer',
            'precio' => 'required|numeric|min:0',
            'stock' => 'required|integer|min:0',
            'sagas_id' => 'required|exists:sagas,id',
            'imagen' => 'nullable|image|mimes:jpeg,png,jpg,webp|max:10240',
        ]);
        $rutaImagen = $manga->imagen;

        if ($request->hasFile('imagen')) {
            $file = $request->file('imagen');
            $saga = Saga::findOrFail($request->sagas_id);
            $nombreCarpetaSaga = Str::slug($saga->nombre, '');

            $nombreArchivo = $request->volumen . '.' . $file->getClientOriginalExtension();
            $destino = 'covers/' . $nombreCarpetaSaga;

            $file->move(public_path($destino), $nombreArchivo);

            $rutaImagen = $destino . '/' . $nombreArchivo;
        }

        $manga->update([
            'titulo' => $request->titulo,
            'autor' => $request->autor,
            'volumen' => $request->volumen,
            'precio' => $request->precio,
            'stock' => $request->stock,
            'descripcion' => $request->descripcion,
            'sagas_id' => $request->sagas_id,
            'imagen' => $rutaImagen,
        ]);

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
}
