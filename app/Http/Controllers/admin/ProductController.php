<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Models\Categoria;
use Illuminate\Http\Request;
use App\Models\Producto;


class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $products = Producto::paginate(4);
        return view('admin.products.index', compact('products'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $categories = Categoria::pluck('nombre','id');

        return view('admin.products.create', compact('categories'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {   
        $request->validate([
        'nombre' => 'required',
        'slug' => 'required|unique:productos',
        'descripcion' => 'required',
        'precio' => 'required',
        'categoria_id' => 'required',
        'imagen' => 'mimes:jpeg,png,jpg,gif,svg|max:2048',
        ]);

        $products = $request->all();
        if($image = $request->file('imagen')){
            $destinationPath = 'image/';
            $profileImage = date('YmdHis') . "." . $image->getClientOriginalExtension();
            $image->move($destinationPath, $profileImage);
            $products['imagen'] = $profileImage;
        }
        $product = Producto::create($products);

        return redirect()->route('admin.products.index', $product)->with('info', 'El producto se creó con exito!');

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Producto $product)
    {
        return view('admin.products.show', compact('product'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Producto $product)
    {
        $categories = Categoria::pluck('nombre','id');
        return view('admin.products.edit', compact('product','categories'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Producto $product)
    {
        $request->validate([
            'nombre' => 'required',
            'slug' => 'required|unique:productos',
            'descripcion' => 'required',
            'precio' => 'required',
            'categoria_id' => 'required',
            'imagen' => 'mimes:jpeg,png,jpg,gif,svg|max:2048',
        ]);
        $products = $request->all();
        if($image = $request->file('imagen')){
            $destinationPath = 'image/';
            $profileImage = date('YmdHis') . "." . $image->getClientOriginalExtension();
            $image->move($destinationPath, $profileImage);
            $products['imagen'] = $profileImage;
        }
        $product->update($products);
        return redirect()->route('admin.products.index', $product)->with('info', 'El producto se actualizó con exito!');
    
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Producto $product)
    {
        $product->delete();
        return redirect()->route('admin.products.index');
    }
}
