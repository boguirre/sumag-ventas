<?php

namespace App\Http\Controllers;

use App\Exports\PrestamoFechasExport;
use App\Models\Prestamo;
use App\Http\Controllers\Controller;
use App\Models\Empresa;
use App\Models\Sucursal;
use Carbon\Carbon;
use Barryvdh\DomPDF\Facade\Pdf;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Maatwebsite\Excel\Facades\Excel;

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
        $sucursals = Sucursal::all();
        return view('prestamos.index', compact('prestamos', 'sucursals'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $empresas = Empresa::all();
        $sucursals = Sucursal::all();
        return view('prestamos.create', compact('empresas', 'sucursals'));
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
            'sucursal_id' => 'required',
            'fecha_prestamo' => 'required',
            'fecha_vencimiento' => 'required'
            
        ],[
            'numerocredito.required'=>'El campo numero de credito es requerido',
            'numerocredito.numeric'=>'El campo numero de credito debe ser numerico',
            'monto_prestamo.required'=>'El campo monto es requerido.',
            'descripcion.required'=>'El campo descripcion es requerido.',
            'empresa_id.required'=>'Debe seleccionar una empresa',
            'sucursal_id.required'=>'Debe seleccionar una tienda',
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
        $empresas = Empresa::pluck('nombre', 'id');
        $sucursals = Sucursal::pluck('nombre', 'id');
        return view('prestamos.edit', compact('prestamo', 'empresas', 'sucursals'));
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
        $request->validate([
            'descripcion' => 'required',
            'numerocredito' => 'required|numeric',
            'monto_prestamo' => 'required|numeric',
            'empresa_id' => 'required',
            'sucursal_id' => 'required',
            'fecha_prestamo' => 'required',
            'fecha_vencimiento' => 'required'
            
        ],[
            'numerocredito.required'=>'El campo numero de credito es requerido',
            'numerocredito.numeric'=>'El campo numero de credito debe ser numerico',
            'monto_prestamo.required'=>'El campo monto es requerido.',
            'descripcion.required'=>'El campo descripcion es requerido.',
            'empresa_id.required'=>'Debe seleccionar una empresa',
            'sucursal_id.required'=>'Debe seleccionar una tienda',
            'fecha_prestamo.required'=>'El campo fecha prestamo es requerido.',
            'fecha_vencimiento.required'=>'El campo fecha de vencimiento es requerido.',
        ]);


        $prestamo->update($request->all()+[
            'monto_deuda' => $request->monto_prestamo
        ]);

        return redirect()->route('prestamo.index')->with('guardar', 'ok');
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

    public function reporte(){
        $prestamos= DB::select('call sp_sumaprestamos()');
        $data=[];
        foreach($prestamos as $prestamo){
                 
               $data['label'][] = $prestamo->nombre;

               $data['data'][] = $prestamo->cantidad;

        }
        $data['data'] = json_encode($data);
        $reporte="";
        $report=$this->reporteEstado($reporte);
        return view('prestamos.reporte.index',$data+$report);
    }

    public function reporteEstado(){
        $prestamosestados= DB::select('call sp_sumaestados()');
        $report=[];
        foreach($prestamosestados as $prestamosestado){
                 
                $report['label'][] = $prestamosestado->estado;

                $report['report'][] = $prestamosestado->cantidad;

          }

         $report['report'] = json_encode($report);

         $reporte=$report;

         return $reporte;
    }

    public function exportarpdffechas(Request $request){
        $sucursals= Sucursal::select('nombre')->where('id',[$request->sucursal_id])->get();

        $fechainicio = $request->fechainicial;
        $fechafinal = $request->fechaterminal;

        $prestamos = Prestamo::whereBetween(DB::raw('DATE(fecha_prestamo)'),[$request->fechainicial,$request->fechaterminal])->where('sucursal_id',[$request->sucursal_id])->get();
        $pdf = Pdf::loadView('prestamos.pdf.fechas', compact('prestamos','sucursals','fechainicio','fechafinal'));
        
        return $pdf->download('Reporte_de_Prestamos.pdf');
    }

    public function exportarexcelfechas(Request $request){
        $prestamos = Prestamo::whereBetween(DB::raw('DATE(fecha_prestamo)'),[$request->fechainicial,$request->fechaterminal])->where('sucursal_id',[$request->sucursal_id])->get();
        return Excel::download(new PrestamoFechasExport($request->fechainicial,$request->fechaterminal,$prestamos), 'prestamos_reporte_fechas.xlsx');

    }

    public function filtro(Request $request)
    {
        $prestamos = Prestamo::where('sucursal_id', $request->sucursal_id)->get();
        $sucursals = Sucursal::all();

        return view('prestamos.index', compact('prestamos', 'sucursals'));
    }
}

