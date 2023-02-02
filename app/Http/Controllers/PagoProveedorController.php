<?php

namespace App\Http\Controllers;

use App\Models\PagoProveedor;
use App\Models\Proveedor;
use App\Models\Sucursal;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Barryvdh\DomPDF\Facade\Pdf;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Storage;

class PagoProveedorController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $pagoProveedores = PagoProveedor::all();

        return view('pago_proveedores.index', compact('pagoProveedores'));
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
        $data['data'] = json_encode($data);
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

         $report['report'] = json_encode($report);

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

         $reportempresas['reportempresas'] = json_encode($reportempresas);

         $reportempresa=$reportempresas;

         return $reportempresa;
    }

    // public function reporteMontos(){
    //     $montos= DB::select('call sp_sumamontos()');
    //     $report=[];
    //     foreach($montos as $monto){
                 
    //             $report['label'][] = $monto->estado;

    //             $report['report'][] = $monto->cantidad;

    //       }

    //      $report['report'] = json_encode($report);

    //      $reporte=$report;

    //      return $reporte;
    // }
}
