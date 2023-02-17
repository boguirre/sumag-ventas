<?php

namespace App\Http\Controllers;

use App\Exports\PagosFechasExport;
use App\Models\PagoProveedor;
use App\Models\Proveedor;
use App\Models\Sucursal;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Barryvdh\DomPDF\Facade\Pdf;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Storage;
use Maatwebsite\Excel\Facades\Excel;

class PagoProveedorController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');

    }
    public function index()
    {
        $pagoProveedores = PagoProveedor::all();
        $sucursals = Sucursal::all();

        return view('pago_proveedores.index', compact('pagoProveedores', 'sucursals'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $sucursales = Sucursal::all();
        $proveedores = Proveedor::where('estado', 1)->get();

        return view('pago_proveedores.create', compact('sucursales', 'proveedores'));
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
            'numero_factura' => 'required|numeric',
            'monto_deposito' => 'required|numeric',
            'proveedor_id' => 'required',
            'sucursal_id' => 'required',
            'fecha_deposito' => 'required',
            
        ],[
            'numero_factura.required'=>'El campo numero de factura es requerido',
            'numero_factura.numeric'=>'El campo numero de credito debe ser numerico',
            'monto_deposito.required'=>'El campo monto es requerido.',
            'descripcion.required'=>'El campo descripcion es requerido.',
            'proveedor_id.required'=>'Debe seleccionar un proveedor',
            'sucursal_id.required'=>'Debe seleccionar una tienda',
            'fecha_deposito.required'=>'El campo fecha deposito es requerido.',
        ]);

        $prestamo  = PagoProveedor::create($request->all()+[
            'monto_pago' => $request->monto_deposito
        ]);

        return redirect()->route('pago-proveedor.index')->with('guardar', 'ok');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\PagoProveedor  $pagoProveedor
     * @return \Illuminate\Http\Response
     */
    public function show(PagoProveedor $pagoProveedor)
    {
        return view('pago_proveedores.show', compact('pagoProveedor'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\PagoProveedor  $pagoProveedor
     * @return \Illuminate\Http\Response
     */
    public function edit(PagoProveedor $pagoProveedor)
    {
        $sucursales = Sucursal::pluck('nombre', 'id');
        $proveedores = Proveedor::where('estado', 1)->pluck('razon_social', 'id');

        return view('pago_proveedores.edit', compact('sucursales', 'proveedores', 'pagoProveedor'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\PagoProveedor  $pagoProveedor
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, PagoProveedor $pagoProveedor)
    {
        $request->validate([
            'descripcion' => 'required',
            'numero_factura' => 'required|numeric',
            'monto_deposito' => 'required|numeric',
            'proveedor_id' => 'required',
            'sucursal_id' => 'required',
            'fecha_deposito' => 'required',
            
        ],[
            'numero_factura.required'=>'El campo numero de factura es requerido',
            'numero_factura.numeric'=>'El campo numero de credito debe ser numerico',
            'monto_deposito.required'=>'El campo monto es requerido.',
            'descripcion.required'=>'El campo descripcion es requerido.',
            'proveedor_id.required'=>'Debe seleccionar un proveedor',
            'sucursal_id.required'=>'Debe seleccionar una tienda',
            'fecha_deposito.required'=>'El campo fecha deposito es requerido.',
        ]);

        $pagoProveedor->update($request->all()+[
            'monto_pago' => $request->monto_deposito
        ]);

        return redirect()->route('pago-proveedor.index')->with('guardar', 'ok');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\PagoProveedor  $pagoProveedor
     * @return \Illuminate\Http\Response
     */
    public function destroy(PagoProveedor $pagoProveedor)
    {
        //
    }

    public function addpago(Request $request, PagoProveedor $pagoProveedor)
    {
        $request->validate([
            'monto' => 'required|numeric'
        ],[
            'monto.required' => 'el nonto es requerido',
        ]);

        if ($request->monto > $pagoProveedor->monto_pago) {
            return redirect()->route('pago-proveedor.show', $pagoProveedor)->with('info', 'El monto no debe exceder del prestamo');
        }

        if ($request->monto >= $pagoProveedor->monto_pago) {
            $pagoProveedor->update([
                'estado' => 2
            ]);
        }

        $pagoProveedor->pago_proveedor_detalles()->create([
            'monto' => $request->monto,
            'fecha_pago' => Carbon::now('America/Lima')
        ]);

        return redirect()->route('pago-proveedor.show', $pagoProveedor)->with('addpago', 'ok');
    }

    public function exportpdf(PagoProveedor $pagoProveedor)
    {
        $image = Storage::url($pagoProveedor->sucursal->images->url);

        $pdf = Pdf::loadView('pago_proveedores.pdf.index', compact('image', 'pagoProveedor'));

        // return view('pago_proveedores.pdf.index', compact('image'));
        return $pdf->setPaper('a4')->download('Reporte_de_pago_proveedor_'.$pagoProveedor->sucursal->nombre.'.pdf');
    }

    public function reporte()
    {
        $pagos= DB::select('call sp_sumapagosproveedores()');
        $data=[];
        foreach($pagos as $pago){
                 
               $data['label'][] = $pago->razon_social;

               $data['data'][] = $pago->cantidad;

        }
        $data['data'] = json_encode(($data));
        $reporte="";
        $report=$this->reporteEstado($reporte);
        $reportempresa="";
        $reportempresas=$this->reportexempresas($reportempresa);
        return view('pago_proveedores.reporte.index',$data+$report+$reportempresas);
    }

    public function reporteEstado(){
        $pagosestados= DB::select('call sp_sumaestadosprov()');
        $report=[];
        foreach($pagosestados as $pagosestado){
                 
                $report['label'][] = $pagosestado->estado;

                $report['report'][] = $pagosestado->cantidad;

          }

         $report['report'] = json_encode(($report));

         $reporte=$report;

         return $reporte;
    }

    public function reportexempresas()
    {
        $pagosempresas= DB::select('call sp_sumapagosempresas()');
        $reportempresas=[];
        foreach($pagosempresas as $pagosempresa){
                 
                $reportempresas['label'][] = $pagosempresa->nombre;

                $reportempresas['reportempresas'][] = $pagosempresa->cantidad;

          }

         $reportempresas['reportempresas'] = json_encode(($reportempresas));

         $reportempresa=$reportempresas;

         return $reportempresa;
    }

    public function exportarexcelfechas(Request $request){

        $request->validate([
            'fechainicial' => 'required',
            'fechaterminal' => 'required',
            'sucursal_id' => 'required'
        ],[
            'fechainicial.required' => 'el campo fecha inicial es requerido',
            'fechaterminal.required' => 'el campo fecha final es requerido',
            'sucursal_id.required' => 'Se debe elegir una sucursal es requerido'
        ]);

        $pagos = PagoProveedor::whereBetween(DB::raw('DATE(fecha_deposito)'),[$request->fechainicial,$request->fechaterminal])->where('sucursal_id',[$request->sucursal_id])->get();
        return Excel::download(new PagosFechasExport($request->fechainicial,$request->fechaterminal,$pagos), 'pagosfechas.xlsx');
    }

    public function filtro(Request $request)
    {
        $pagoProveedores = PagoProveedor::where('sucursal_id', $request->sucursal_id)->get();
        $sucursals = Sucursal::all();

        return view('pago_proveedores.index', compact('pagoProveedores', 'sucursals'));
    }
    public function exportarpdffechas(Request $request){
        $sucursal_id= $request->sucursal_id;
        if($sucursal_id == ""){
             $sucursal_id= Sucursal::first()->id;
        }
        $sucursals= Sucursal::select('nombre')->where('id',[$sucursal_id])->get();
        // return $sucursals;
        $fechainicio = $request->fechainicial;
        $fechafinal = $request->fechaterminal;

        // return $fecha;
        $pagoProveedores = PagoProveedor::whereBetween(DB::raw('DATE(fecha_deposito)'),[$request->fechainicial,$request->fechaterminal])->where('sucursal_id',[$sucursal_id])->get();

        $pdf = Pdf::loadView('pago_proveedores.pdf.fechas', compact('pagoProveedores','sucursals','fechainicio','fechafinal'));
        
        return $pdf->setPaper('a4', 'landscape')->download('Reporte_de_Pago_Proveedores.pdf');
    }
}
