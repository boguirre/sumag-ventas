<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Comprobante;
use App\Models\Dua;
use App\Models\Ingreso;
use App\Models\PagoProveedor;
use App\Models\Prestamo;
use App\Models\PrestamoDetalle;
use App\Models\User;
use App\Models\Venta;
use Carbon\Carbon;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function __construct()
    {
        $this->middleware('auth');

    }
    public function index()
    {
        $fechaactual = Carbon::now('America/Lima')->format('Y-m-d');
        $fechaactualmes = Carbon::now('America/Lima')->addMonth()->format('Y-m-d');
        $alertaduas =  Dua::where('mes_cobro','<=',$fechaactual)->whereDate('mes_cobro','<=',$fechaactualmes)->where('estado','1')->get();

        $alertaprestamos = PrestamoDetalle::where('fecha_pago','>=',$fechaactual)->whereDate('fecha_pago','<=',$fechaactualmes)->where('estado','1')->get();
        
        $ventas = Venta::all()->where('estado','VALIDO')->sum('total');
        $ingresos = Ingreso::all()->where('estado','VALIDO')->sum('total');
        $usuarios = User::all()->count();


        $comprobantes = Comprobante::where('fecha_pago','<=',$fechaactual)->whereDate('fecha_pago','<=',$fechaactualmes)->where('estado','1')->get();
        return view('admin.index',compact('alertaduas', 'alertaprestamos','comprobantes','ventas','ingresos','usuarios'));
    }
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */

    public function create()
    {
        
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
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
