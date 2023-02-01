<?php

namespace App\Http\Controllers;

use App\Models\Venta;
use App\Http\Controllers\Controller;
use App\Models\Articulo;
use App\Models\Sucursal;
use App\Models\VentaDetalle;
use Barryvdh\DomPDF\Facade\Pdf;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

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
        
        $pdf = Pdf::setOptions(['isHtml5ParserEnabled' => true, 'isRemoteEnabled' => true])->loadView('ventas.pdf.index', compact('ventum', 'ventaDetalles', 'subtotal'));
        
        return $pdf->download('Reporte_de_venta_'.$ventum->id.'.pdf');


        
    }

    public function reporte(){
        $año = Carbon::now('America/Lima')->format('Y');

        $ventaspormes = DB::select(
            DB::raw("SELECT coalesce(total,0)as total
                FROM (SELECT 'january' AS month UNION SELECT 'february' AS month UNION SELECT 'march' AS month UNION SELECT 'april' AS month UNION SELECT 'may' AS month UNION SELECT 'june' AS month UNION SELECT 'july' AS month UNION SELECT 'august' AS month UNION SELECT 'september' AS month UNION SELECT 'october' AS month UNION SELECT 'november' AS month UNION SELECT 'december' AS month ) m LEFT JOIN (SELECT MONTHNAME(venta_fecha) AS MONTH, COUNT(*) AS ventas, SUM(total)AS total 
                FROM ventas WHERE year(venta_fecha)= $año
                GROUP BY MONTHNAME(venta_fecha),MONTH(venta_fecha) 
                ORDER BY MONTH(venta_fecha)) c ON m.MONTH =c.MONTH;"));
            $data=[];
            foreach($ventaspormes as $ventasporme){
         
                    $data['data'][] = $ventasporme->total;

              }

             $data['data'] = json_encode($data);
            $reporte="";
            $report=$this->top5ventasproductos($reporte);
            $reportedia="";
            $repordias=$this->reportesdeventasdiarias($reportedia);
            $getyearmonth = Carbon::now('America/Lima')->format('Y-m');

            $ventasportiendas = DB::select('call spventasxtienda(?)',array($getyearmonth));
            return view('ventas.reporte.index', compact('ventasportiendas','getyearmonth'), $data+$report+$repordias);
             

    }

    public function top5ventasproductos(){
        $año = Carbon::now('America/Lima')->format('Y');

        $ventastop5s =   VentaDetalle::join('articulos as a', 'venta_detalles.articulo_id', 'a.id')
             ->select(
                 DB::raw("a.nombre as articulo, SUM(venta_detalles.cantidad * a.precio_venta) AS total"),
             )->whereYear("venta_detalles.created_at", $año)
             ->groupBy('a.nombre')
             ->orderBy(DB::raw("SUM(venta_detalles.cantidad * a.precio_venta) "), 'desc')
             ->take(5)->get();

    
        $report=[];
        foreach($ventastop5s as $ventastop5){
                 
                $report['label'][] = $ventastop5->articulo;

                $report['report'][] = $ventastop5->total;

          }
          $report['report'] = json_encode($report);


         $reporte=$report;

         return $reporte;
    }
    public function reportesdeventasdiarias(){
        $getyearmonth = Carbon::now('America/Lima')->format('Y-m');

        $ventasdias=DB::select('call spventasxdiasxmes(?)',array($getyearmonth));
        $repordias=[];
        foreach($ventasdias as $ventasdia){
                 
                $repordias['label'][] = $ventasdia->dia;

                $repordias['repordias'][] = $ventasdia->totaldia;
          }
          $repordias['repordias'] = json_encode($repordias);


         $reportedia=$repordias;

         return $reportedia;
    }
    
}
