<?php

namespace App\Http\Controllers;

use App\Models\Manga;
use App\Models\Saga;
use App\Models\Pedido;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Mail;
use App\Mail\PedidoConfirmado;

class PublicController extends Controller
{
    public function catalogo()
    {
        $mangas = Manga::with('saga')->get();
        $sagas  = Saga::all();

        return view('catalogo', compact('mangas', 'sagas'));
    }

    public function detalle($id)
    {
        $manga = Manga::with('saga')->findOrFail($id);

        return view('detalle', compact('manga'));
    }

    private function obtenerCarrito()
    {
        return Pedido::firstOrCreate(
            ['user_id' => Auth::id(), 'estado' => 'pendiente'],
            ['precio_total' => 0]
        );
    }

    public function verCarrito()
    {
        $carrito = $this->obtenerCarrito()->load('mangas');
        return view('carrito', compact('carrito'));
    }

    public function anadirAlCarrito(Request $request)
    {
        $manga = Manga::findOrFail($request->manga_id);
        $cantidad = $request->cantidad ?? 1;
        $carrito = $this->obtenerCarrito();

        if ($manga->stock < $cantidad) {
            return back()->with('error', 'No hay suficiente stock.');
        }

        $itemExistente = $carrito->mangas()->where('mangas_id', $manga->id)->first();

        if ($itemExistente) {
            $nuevaCantidad = $itemExistente->pivot->cantidad + $cantidad;
            $carrito->mangas()->updateExistingPivot($manga->id, ['cantidad' => $nuevaCantidad]);
        } else {
            $carrito->mangas()->attach($manga->id, [
                'cantidad' => $cantidad,
                'precio' => $manga->precio
            ]);
        }

        $this->recalcularTotal($carrito);

        return redirect()->route('carrito')->with('success', 'Añadido al carrito.');
    }

    public function actualizarCarrito(Request $request, $id)
    {
        $carrito = $this->obtenerCarrito();
        $manga = Manga::findOrFail($id);
        if ($request->cantidad > $manga->stock) {
            return back()->with('error', "Solo quedan {$manga->stock} unidades disponibles.");
        }
        if ($request->cantidad > 0) {
            $carrito->mangas()->updateExistingPivot($id, ['cantidad' => $request->cantidad]);
        } else {
            $carrito->mangas()->detach($id);
        }

        $this->recalcularTotal($carrito);

        return redirect()->route('carrito')->with('success', 'Carrito actualizado.');
    }

    public function eliminarDelCarrito($id)
    {
        $carrito = $this->obtenerCarrito();
        $carrito->mangas()->detach($id);
        $this->recalcularTotal($carrito);

        return redirect()->route('carrito')->with('success', 'Manga eliminado del carrito.');
    }

    public function confirmarPedido()
    {
        $carrito = $this->obtenerCarrito();
        
        if ($carrito->mangas->isEmpty()) {
            return back()->with('error', 'El carrito está vacío.');
        }

        foreach ($carrito->mangas as $manga) {
            $manga->decrement('stock', $manga->pivot->cantidad);
        }

        $carrito->update(['estado' => 'atendido']);

        Mail::to(Auth::user()->email)->send(new PedidoConfirmado($carrito));

        return redirect()->route('mis-pedidos')->with('success', 'Pedido confirmado con éxito.');
    }

    private function recalcularTotal(Pedido $carrito)
    {
        $total = 0;
        foreach ($carrito->mangas()->get() as $manga) {
            $total += $manga->pivot->cantidad * $manga->pivot->precio;
        }
        $carrito->update(['precio_total' => $total]);
    }
    public function misPedidos()
    {
        $pedidos = Pedido::with('mangas')
                         ->where('user_id', Auth::id())
                         ->where('estado', 'atendido')
                         ->orderBy('created_at', 'desc')
                         ->get();

        return view('mis-pedidos', compact('pedidos'));
    }
}
