<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Categoria;
class Producto extends Model
{
    use HasFactory;
    
    protected $fillable = ['id','nombre','slug','precio','descripcion','categoria_id','imagen'];

    // public function getRouteKeyName()
    // {
    //     return 'slug';
    // }

    //relacion uno a muchos (inversa)
   

    public function categoria(){
        return $this->belongsTo(Categoria::class);
    }
}
