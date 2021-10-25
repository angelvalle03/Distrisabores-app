<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Producto;
use App\Models\Categoria;
use Illuminate\Support\Facades\DB;

class ProductoController extends Controller
{
    public function index(){
        $products = Producto::paginate(8);
        return view('home', compact('products'));
    }

    public function show($product){
        $producto = Producto::find($product);
        // //return view('categorias.show',compact('productos','categorias'));
        // // return $category;
        $productRelated= Categoria::join('productos','productos.categoria_id', '=', 'categorias.id')
            ->where('productos.id','!=',$product)
            ->where('productos.categoria_id',$producto->categoria_id)
            ->take(4)
            ->get(['productos.*']);
        
        return view('productos.show',compact('producto','productRelated'));
    }
    
}
