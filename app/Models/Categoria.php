<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Categoria extends Model
{
    use HasFactory;

    protected $fillable = ['id','nombre','slug','imagen'];


    // public function getRouteKeyName()
    // {
    //     return 'slug';
    // }

    //relacion uno a muchos
    public function productos (){
        return $this->hasMany('App\Models\Producto');
    }

    
}
