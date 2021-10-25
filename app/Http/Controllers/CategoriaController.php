<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Categoria;
use App\Models\Producto;
use Illuminate\Support\Facades\DB;

class CategoriaController extends Controller
{
    public function index(){
        $categories = Categoria::all();
        return view('categorias.index', compact('categories'));
    }

    public function show($category){
        // $categorias = Categoria::join('productos','categorias.id','=', 'productos.categoria_id')
        //     ->where('productos.categoria_id',$category)
        //     ->get;
        $productos= DB::table('productos')
            ->join('categorias', 'categorias.id', '=', 'productos.categoria_id')
            ->select('categorias.nombre as nombre_category', 'productos.*')
            ->where('productos.categoria_id',$category)
            ->get();

        $categorias = Categoria::find($category);
        return view('categorias.show',compact('productos','categorias'));
        // return $category;
        //return ($categorias);
    }


    
}
