<?php

namespace App\Http\Controllers;

use App\Models\Categoria;
use Illuminate\Http\Request;

class CategoriaController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');

    }
    public function index()
    {
        $categorias = Categoria::all();

        return view('categorias.index', compact('categorias'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('categorias.create');
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
            'nombre' => 'required|max:50',
            'slug' => 'required|unique:categorias'
        ],[
            'nombre.required'=>'El campo nombre es requerido.',
            'slug.required'=>'El campo slug es requerido.'

        ]);
        Categoria::create($request->all());
        return redirect()->route('categoria.index')->with('guardar', 'ok');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit( Categoria $categorium)
    {
        return view('categorias.edit',compact('categorium'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Categoria $categorium)
    {
        $request->validate([
            'nombre' => 'required|max:50',
            'slug' => 'required'
            
        ],[
            'nombre.required'=>'El campo nombre es requerido.',
            'slug.required'=>'El campo slug es requerido.'

        ]);
        $categorium->update($request->all());

        return redirect()->route('categoria.index')->with('editar', 'ok');
    }
    

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Categoria $categorium)
    {
        $categorium->estado = 0;
        $categorium->save();
        return redirect()->route('categoria.index')->with('eliminar', 'ok');
    }

    public function activar(Categoria $categorium)
    {
        $categorium->estado = 1;
        $categorium->save();
        return redirect()->route('categoria.index')->with('activar', 'ok');
    
    }
}
