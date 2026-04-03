<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pedido extends Model
{
    use HasFactory;
    protected $table = 'pedidos';
    protected $fillable = ['user_id', 'precio_total', 'estado'];
    protected $primaryKey = 'id';
    public function user() {
        return $this->belongsTo(User::class);
    }
    public function mangas() {
        return $this->belongsToMany(Manga::class, 'mangas_pedido', 'pedidos_id', 'mangas_id')->withPivot('cantidad', 'precio');
    }
}
