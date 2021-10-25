<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Categoria;
use Symfony\Contracts\Service\Attribute\Required;

class CategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $categories = Categoria::paginate(4);
        return view('admin.categories.index', compact('categories'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.categories.create');
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
            'slug' => 'required|unique:categorias',
            'imagen' => 'mimes:jpeg,png,jpg,gif,svg|max:2048',
        ]);

        $categories = $request->all();
        if($image = $request->file('imagen')){
            $destinationPath = 'image/';
            $profileImage = date('YmdHis') . "." . $image->getClientOriginalExtension();
            $image->move($destinationPath, $profileImage);
            $categories['imagen'] = $profileImage;
        }
        $category = Categoria::create($categories);
        return redirect()->route('admin.categories.index', $category)->with('info', 'La categoría se creó con exito!');;
    
    }

    /**
     * Display the specified resource. 
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show()
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Categoria $category)
    {
        return view('admin.categories.edit', compact('category'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Categoria $category)
    {
        $request->validate([
            'nombre' => 'required',
            'slug' => 'required|unique:categorias',
            'imagen' => 'mimes:jpeg,png,jpg,gif,svg|max:2048',
        ]);
        
        $categories = $request->all();
        if($image = $request->file('imagen')){
            $destinationPath = 'image/';
            $profileImage = date('YmdHis') . "." . $image->getClientOriginalExtension();
            $image->move($destinationPath, $profileImage);
            $categories['imagen'] = $profileImage;
        }
        $category->update($categories);

        return redirect()->route('admin.categories.index', $category)->with('info', 'La categoría se actualizo con exito!');
    
    
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Categoria $category)
    {
        $category->delete();
        return redirect()->route('admin.categories.index');
    }
}
