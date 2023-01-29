<?php

namespace App\Http\Controllers;

use App\Models\Venta;
use App\Http\Controllers\Controller;
use App\Models\Articulo;
use App\Models\Sucursal;
use Barryvdh\DomPDF\Facade\Pdf;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class VentaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $ventas = Venta::all();

        return view('ventas.index', compact('ventas'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $articulos = Articulo::get();
        $sucursals = Sucursal::get();

        return view('ventas.create', compact('articulos', 'sucursals'));
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
            'documento' => 'required|numeric',
            
        ],[
            'nombre.required'=>'El campo nombre  es requerido',
            'documento.numeric'=>'El campo numero del N° documento debe ser numerico',
            'documento.required'=>'El campo del RUC/DNI es requerido.'
            
        ]);
        $venta = Venta::create($request->all()+[
            'user_id'=>Auth::user()->id,
            'venta_fecha'=>Carbon::now('America/Lima'),
        ]);
        foreach ($request->articulo_id as $key => $articulo) {
            $results[] = array("articulo_id"=>$request->articulo_id[$key], "cantidad"=>$request->cantidad[$key], "precio"=>$request->precio[$key], "descuento"=>$request->descuento[$key]);
        }
        $venta->ventaDetalles()->createMany($results);
        return redirect()->route('venta.index')->with('guardar', 'ok');

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Venta  $venta
     * @return \Illuminate\Http\Response
     */
    public function show(Venta $ventum)
    {
        $subtotal = 0 ;
        $ventaDetalles = $ventum->ventaDetalles;
        foreach ($ventaDetalles as $ventaDetalle) {
            $subtotal += $ventaDetalle->cantidad*$ventaDetalle->precio-$ventaDetalle->cantidad* $ventaDetalle->precio*$ventaDetalle->descuento/100;
        }
        return view('ventas.show', compact('ventum', 'ventaDetalles', 'subtotal'));
    
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Venta  $venta
     * @return \Illuminate\Http\Response
     */
    public function edit(Venta $venta)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Venta  $venta
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Venta $venta)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Venta  $venta
     * @return \Illuminate\Http\Response
     */
    public function destroy(Venta $venta)
    {
        //
    }
    public function cambio_estado(Venta $ventum)
    {
        if ($ventum->estado == 'VALIDO') {
            $ventum->update(['estado'=>'CANCELADO']);
            return redirect()->back();
        }else {
            $ventum->update(['estado'=>'VALIDO']);
            return redirect()->back();
        } 
    }
    public function pdf(Venta $ventum){
        $subtotal = 0 ;
        $ventaDetalles = $ventum->ventaDetalles;
        foreach ($ventaDetalles as $ventaDetalle) {
            $subtotal += $ventaDetalle->cantidad*$ventaDetalle->precio-$ventaDetalle->cantidad* $ventaDetalle->precio*$ventaDetalle->descuento/100;
        }
        
        $pdf = Pdf::loadView('ventas.pdf.index', compact('ventum', 'ventaDetalles', 'subtotal'));
        
        return $pdf->download('Reporte_de_venta_'.$ventum->id.'.pdf');


    }

    
}
