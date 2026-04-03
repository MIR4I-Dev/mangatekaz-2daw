<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Saga extends Model
{
    use HasFactory;
    protected $table = "sagas";
    protected $fillable = ['nombre', 'descripcion'];
    protected $primaryKey = 'id';
    public function mangas(){
        return $this->hasMany(Manga::class, 'sagas_id');
    }

}
