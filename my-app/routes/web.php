<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\PublicController;
use App\Http\Controllers\AdminController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return redirect()->route('catalogo');
});

Route::get('/catalogo', [PublicController::class, 'catalogo'])->name('catalogo');
Route::get('/catalogo/{id}', [PublicController::class, 'detalle'])->name('detalle');


Route::middleware('auth')->group(function () {
    Route::get('/mis-pedidos', [PublicController::class, 'misPedidos'])->name('mis-pedidos');
    
    Route::get('/carrito', [PublicController::class, 'verCarrito'])->name('carrito');
    Route::post('/carrito/anadir', [PublicController::class, 'anadirAlCarrito'])->name('carrito.anadir');
    Route::put('/carrito/actualizar/{id}', [PublicController::class, 'actualizarCarrito'])->name('carrito.actualizar');
    Route::delete('/carrito/eliminar/{id}', [PublicController::class, 'eliminarDelCarrito'])->name('carrito.eliminar');
    Route::post('/carrito/confirmar', [PublicController::class, 'confirmarPedido'])->name('carrito.confirmar');

    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

Route::middleware(['auth', 'admin'])->prefix('admin')->name('admin.')->group(function () {
    Route::get('/', [AdminController::class, 'dashboard'])->name('dashboard');
    
    Route::get('/mangas', [AdminController::class, 'mangas'])->name('mangas.index');
    Route::get('/mangas/crear', [AdminController::class, 'crearManga'])->name('mangas.create');
    Route::post('/mangas', [AdminController::class, 'guardarManga'])->name('mangas.store');
    Route::get('/mangas/{id}/editar', [AdminController::class, 'editarManga'])->name('mangas.edit');
    Route::put('/mangas/{id}', [AdminController::class, 'actualizarManga'])->name('mangas.update');
    Route::delete('/mangas/{id}', [AdminController::class, 'eliminarManga'])->name('mangas.destroy');
    
    Route::get('/pedidos', [AdminController::class, 'pedidos'])->name('pedidos.index');
    Route::put('/pedidos/{id}/estado', [AdminController::class, 'actualizarEstadoPedido'])->name('pedidos.estado');
});

require __DIR__.'/auth.php';
