<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Manga extends Model
{
    use HasFactory;
    protected $table = "mangas";
    protected $fillable = ['titulo', 'autor', 'volumen', 'precio', 'stock', 'descripcion', 'imagen', 'sagas_id'];
    protected $primaryKey = 'id';
    public function sagas(){
        return $this->belongsTo(Saga::class, 'sagas_id');
    }
    public function pedidos() {
        return $this->belongsToMany(Pedido::class, 'mangas_pedido', 'mangas_id', 'pedidos_id') ->withPivot('cantidad', 'precio');
    }
}
