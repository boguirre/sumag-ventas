<?php

namespace App\Http\Controllers;

use App\Models\Empresa;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class EmpresaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $empresas = Empresa::where('estado',1)->get();
        return view('empresas.index', compact('empresas'));

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('empresas.create');

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
        Empresa::create($request->all());
        return redirect()->route('empresa.index')->with('guardar', 'ok');

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Empresa  $empresa
     * @return \Illuminate\Http\Response
     */
    public function show(Empresa $empresa)
    {
        
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Empresa  $empresa
     * @return \Illuminate\Http\Response
     */
    public function edit(Empresa $empresa)
    {
        return view('empresas.edit',compact('empresa'));

    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Empresa  $empresa
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Empresa $empresa)
    {
        $request->validate([
            'codigo' => 'required|max:50',

            'nombre' => 'required|max:50',
            
        ],[
            'nombre.required'=>'El campo nombre es requerido.',
            'codigo.required'=>'El campo codigo es requerido.'

        ]);
        $empresa->update($request->all());

        return redirect()->route('empresa.index')->with('editar', 'ok');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Empresa  $empresa
     * @return \Illuminate\Http\Response
     */
    public function destroy(Empresa $empresa)
    {
        $empresa->estado = 0;
        $empresa->save();
        return redirect()->route('empresa.index')->with('eliminar', 'ok');

    }
}
