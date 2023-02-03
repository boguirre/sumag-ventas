<?php

namespace App\Http\Controllers;

use App\Models\Dua;
use App\Models\Sucursal;
use Carbon\Carbon;
use Illuminate\Http\Request;

class DuaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $duas = Dua::all();
        return view('duas.index', compact('duas'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $sucursals = Sucursal::all();
        return view('duas.create', compact('sucursals'));
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
            'numero_dua' => 'required|numeric',
            'monto_percepcion' => 'required|numeric',
            'sucursal_id' => 'required',
            'fecha_numeracion' => 'required',
            'mes_llegada' => 'required'
            
        ],[
            'numero_dua.required'=>'El campo numero de DUA es requerido',
            'numero_dua.numeric'=>'El campo numero de DUA debe ser numerico',
            'monto_percepcion.required'=>'El campo monto es requerido.',
            'fecha_numeracion.required'=>'El campo fecha es requerido.',
            'sucursal_id.required'=>'Debe seleccionar una empresa',
            'mes_llegada.required'=>'Debe seleccionar una fecha',
        ]);

        $mes_llegada = Carbon::parse($request->mes_llegada);
        $dua  = Dua::create($request->all()+[
            'mes_cobro' => $mes_llegada->addMonths(4)
        ]);

        return redirect()->route('dua.index')->with('guardar', 'ok');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Dua  $dua
     * @return \Illuminate\Http\Response
     */
    public function show(Dua $dua)
    {
        return view('duas.show', compact('dua'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Dua  $dua
     * @return \Illuminate\Http\Response
     */
    public function edit(Dua $dua)
    {
        $sucursals = Sucursal::pluck('nombre', 'id');
        return view('duas.edit', compact('dua', 'sucursals'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Dua  $dua
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Dua $dua)
    {
        $request->validate([
            'numero_dua' => 'required|numeric',
            'monto_percepcion' => 'required|numeric',
            'sucursal_id' => 'required',
            'fecha_numeracion' => 'required',
            'mes_llegada' => 'required'
            
        ],[
            'numero_dua.required'=>'El campo numero de DUA es requerido',
            'numero_dua.numeric'=>'El campo numero de DUA debe ser numerico',
            'monto_percepcion.required'=>'El campo monto es requerido.',
            'fecha_numeracion.required'=>'El campo fecha es requerido.',
            'sucursal_id.required'=>'Debe seleccionar una empresa',
            'mes_llegada.required'=>'Debe seleccionar una fecha',
        ]);

        $mes_llegada = Carbon::parse($request->mes_llegada);
        $dua->update($request->all()+[
            'mes_cobro' => $mes_llegada->addMonths(4)
        ]);

        return redirect()->route('dua.index')->with('guardar', 'ok');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Dua  $dua
     * @return \Illuminate\Http\Response
     */
    public function destroy(Dua $dua)
    {
        //
    }
}
