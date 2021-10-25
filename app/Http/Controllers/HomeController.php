<?php

namespace App\Http\Controllers;

use App\Models\Categoria;
use Illuminate\Http\Request;
use App\Models\Producto;

class HomeController extends Controller
{
    public function index(){
        $categories = Categoria::all()->take(4);
        $products = Producto::paginate(8);
        return view('home', compact('products','categories'));
    }
}
