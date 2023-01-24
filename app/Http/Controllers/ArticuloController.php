<?php

namespace App\Http\Controllers;

use App\Models\Articulo;
use App\Models\Categoria;
use App\Models\Medida;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class ArticuloController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $articulos = Articulo::all();
        return view('articulos.index', compact('articulos'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $categorias = Categoria::where('estado', 1)->get();
        $medidas = Medida::where('estado', 1)->get();
        return view('articulos.create', compact('categorias', 'medidas'));
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
            'codigo' => 'required',
            'nombre' => 'required|max:50',
            'descripcion' => 'required|max:50',
            'categoria_id' => 'required',
            'medida_id' => 'required',
            'stock_minimo' => 'required|min:1',
            'precio_venta' => 'required|min:1',
            'precio_unitario' => 'required|min:1',
            'file' => 'required|image'
            
        ],[
            'codigo.required'=>'El campo codigo es requerido.',
            'nombre.required'=>'El campo nombre es requerido.',
            'descripcion.required'=>'El campo descripcion es requerido.',
            'categoria_id.required'=>'El campo categoria es requerido.',
            'medida_id.required'=>'El campo medida es requerido.',
            'stock_minimo.required'=>'El campo stock minimo es requerido.',
            'precio_venta.required'=>'El campo precio venta es requerido.',
            'precio_unitario.required'=>'El campo precio compra es requerido.',
            'file.required'=>'debe seleccionar una imagen',
        ]);

        $articulo  = Articulo::create($request->all());

        if($request->file('file')){
            $url =  Storage::put('public/articulos', $request->file('file'));

            $articulo->images()->create([
                'url' => $url
            ]);
        }

        return redirect()->route('articulo.index')->with('guardar', 'ok');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Articulo  $articulo
     * @return \Illuminate\Http\Response
     */
    public function show(Articulo $articulo)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Articulo  $articulo
     * @return \Illuminate\Http\Response
     */
    public function edit(Articulo $articulo)
    {
        $categorias = Categoria::pluck('nombre', 'id');
        $medidas = Medida::pluck('nombre', 'id');
        return view('articulos.edit', compact('articulo', 'categorias', 'medidas'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Articulo  $articulo
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Articulo $articulo)
    {
        $request->validate([
            'codigo' => 'required',
            'nombre' => 'required|max:50',
            'descripcion' => 'required|max:50',
            'categoria_id' => 'required',
            'medida_id' => 'required',
            'stock_minimo' => 'required|min:1',
            'precio_venta' => 'required|min:1',
            'precio_unitario' => 'required|min:1',
            'file' => 'image'
            
        ],[
            'codigo.required'=>'El campo codigo es requerido.',
            'nombre.required'=>'El campo nombre es requerido.',
            'descripcion.required'=>'El campo descripcion es requerido.',
            'categoria_id.required'=>'El campo categoria es requerido.',
            'medida_id.required'=>'El campo medida es requerido.',
            'stock_minimo.required'=>'El campo stock minimo es requerido.',
            'precio_venta.required'=>'El campo precio venta es requerido.',
            'precio_unitario.required'=>'El campo precio compra es requerido.',
            'file.required'=>'debe seleccionar una imagen',
        ]);

        $articulo->update($request->all());

        if($request->file('file')){
            $url = Storage::put('public/articulos', $request->file('file'));

            if($articulo->images){
                Storage::delete($articulo->images->url);

                $articulo->images->update([
                    'url' => $url
                ]);
            }else{
                $articulo->images()->create([
                    'url' => $url
                ]);
            }
        }

        return redirect()->route('articulo.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Articulo  $articulo
     * @return \Illuminate\Http\Response
     */
    public function destroy(Articulo $articulo)
    {
        
        if ($articulo->estado == 1) {
            $estado = 0;
        }
        elseif($articulo->estado == 0)
        {
            $estado = 1;
        }

        $articulo->update([
            'estado' => $estado
        ]);

        return redirect()->route('articulo.index')->with('baja', 'ok');
    }
    
}
