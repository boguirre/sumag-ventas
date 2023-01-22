<?php

namespace App\Http\Controllers;

use App\Models\Articulo;
use App\Models\Ingreso;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class IngresoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

        $ingresos = Ingreso::all();

        return view('ingresos.index', compact('ingresos'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $articulos = Articulo::where('estado', 1)->get();
        return view('ingresos.create', compact('articulos'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $ingreso = Ingreso::create($request->all()+[
            'user_id'=>Auth::user()->id,
            'ingreso_fecha'=>Carbon::now('America/Lima'),
        ]);
        foreach ($request->articulo_id as $key => $articulo) {
            $results[] = array("articulo_id"=>$request->articulo_id[$key], "cantidad"=>$request->quantity[$key]);
        }
        $ingreso->ingresoDetalles()->createMany($results);
        return redirect()->route('ingreso.index')->with('guardar', 'ok');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Ingreso $ingreso)
    {
        $subtotal = 0 ;
        $ingresoDetalles = $ingreso->ingresoDetalles;
        foreach ($ingresoDetalles as $ingresoDetalle) {
            $subtotal += $ingresoDetalle->cantidad * $ingresoDetalle->cantidad;
        }
        return view('ingresos.show', compact('ingreso', 'ingresoDetalles'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
