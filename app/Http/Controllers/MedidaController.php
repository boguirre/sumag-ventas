<?php

namespace App\Http\Controllers;

use App\Models\Medida;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class MedidaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $medidas = Medida::where('estado',1)->get();
        return view('medidas.index', compact('medidas'));

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('medidas.create');
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
            'codigo' => 'required|max:50',

            'nombre' => 'required|max:50',
            
        ],[
            'nombre.required'=>'El campo nombre es requerido.',
            'codigo.required'=>'El campo codigo es requerido.'

        ]);
        Medida::create($request->all());
        return redirect()->route('medida.index')->with('guardar', 'ok');

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Medida  $medida
     * @return \Illuminate\Http\Response
     */
    public function show(Medida $medida)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Medida  $medida
     * @return \Illuminate\Http\Response
     */
    public function edit(Medida $medida)
    {
        return view('medidas.edit',compact('medida'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Medida  $medida
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Medida $medida)
    {
        $request->validate([
            'codigo' => 'required|max:50',

            'nombre' => 'required|max:50',
            
        ],[
            'nombre.required'=>'El campo nombre es requerido.',
            'codigo.required'=>'El campo codigo es requerido.'

        ]);
        $medida->update($request->all());

        return redirect()->route('medida.index')->with('editar', 'ok');

    }

    public function destroy(Medida $medida)
    {
        $medida->estado = 0;
        $medida->save();
        return redirect()->route('medida.index')->with('eliminar', 'ok');

    }
}
