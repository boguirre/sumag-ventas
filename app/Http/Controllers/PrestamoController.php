<?php

namespace App\Http\Controllers;

use App\Models\Prestamo;
use App\Http\Controllers\Controller;
use App\Models\Empresa;
use Carbon\Carbon;
use Illuminate\Http\Request;

class PrestamoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $prestamos = Prestamo::all();
        return view('prestamos.index', compact('prestamos'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $empresas = Empresa::all();
        return view('prestamos.create', compact('empresas'));
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
            'descripcion' => 'required',
            'numerocredito' => 'required|numeric',
            'monto_prestamo' => 'required|numeric',
            'empresa_id' => 'required',
            'fecha_prestamo' => 'required',
            'fecha_vencimiento' => 'required'
            
        ],[
            'numerocredito.required'=>'El campo numero de credito es requerido',
            'numerocredito.numeric'=>'El campo numero de credito debe ser numerico',
            'monto_prestamo.required'=>'El campo monto es requerido.',
            'descripcion.required'=>'El campo descripcion es requerido.',
            'empresa_id.required'=>'Debe seleccionar una empresa',
            'fecha_prestamo.required'=>'El campo fecha prestamo es requerido.',
            'fecha_vencimiento.required'=>'El campo fecha de vencimiento es requerido.',
        ]);

        $prestamo  = Prestamo::create($request->all()+[
            'monto_deuda' => $request->monto_prestamo
        ]);

        return redirect()->route('prestamo.index')->with('guardar', 'ok');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Prestamo  $prestamo
     * @return \Illuminate\Http\Response
     */
    public function show(Prestamo $prestamo)
    {
        return view('prestamos.show', compact('prestamo'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Prestamo  $prestamo
     * @return \Illuminate\Http\Response
     */
    public function edit(Prestamo $prestamo)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Prestamo  $prestamo
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Prestamo $prestamo)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Prestamo  $prestamo
     * @return \Illuminate\Http\Response
     */
    public function destroy(Prestamo $prestamo)
    {
        //
    }

    public function addpago(Request $request, Prestamo $prestamo)
    {
        $request->validate([
            'monto' => 'required|numeric'
        ],[
            'monto.required' => 'el nonto es requerido',
        ]);

        if ($request->monto > $prestamo->monto_deuda) {
            return redirect()->route('prestamo.show', $prestamo)->with('info', 'El monto no debe exceder del prestamo');
        }

        if ($request->monto >= $prestamo->monto_deuda) {
            $prestamo->update([
                'estado' => 2
            ]);
        }

        $prestamo->prestamo_detalles()->create([
            'monto' => $request->monto,
            'fecha_pago' => Carbon::now('America/Lima')
        ]);

        return redirect()->route('prestamo.show', $prestamo)->with('addpago', 'ok');
    }
}
