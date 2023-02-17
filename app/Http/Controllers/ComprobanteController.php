<?php

namespace App\Http\Controllers;

use App\Exports\ComprobanteFechasExport;
use App\Models\Comprobante;
use App\Models\Sucursal;
use App\Models\TipoComprobante;
use App\Models\TipoImporte;
use Barryvdh\DomPDF\Facade\Pdf;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Storage;
use Maatwebsite\Excel\Facades\Excel;

class ComprobanteController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $comprobantes = Comprobante::all();
        $sucursals = Sucursal::all();
        return view('comprobantes.index', compact('comprobantes', 'sucursals'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $sucursals = Sucursal::all();

        $tipo_comprobantes = TipoComprobante::all();
        $tipo_importes = TipoImporte::all();
        return view('comprobantes.create', compact('tipo_comprobantes','sucursals', 'tipo_importes'));
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
            'numero_comprobante' => 'required',
            'importe' => 'required|numeric',
            'tipo_comprobante_id' => 'required',
            'tipo_importe_id' => 'required',
            'fecha_pago' => 'required',
            'sucursal_id' => 'required',
            'files'=> 'required'

        ], [
            'numero_comprobante.required' => 'El campo numero de comprobante es requerido',
            'importe.required' => 'El campo importe es requerido.',
            'descripcion.required' => 'El campo descripcion es requerido.',
            'tipo_comprobante_id.required' => 'Debe seleccionar un tipo de comprobante',
            'tipo_importe_id.required' => 'Debe seleccionar un tipo de importe',
            'sucursal_id.required'=>'Debe seleccionar una empresa',
            'fecha_pago.required' => 'El campo fecha de pago es requerido.',
            'files.required' => 'Seleccione los archivos.',

        ]);

        $comprobante  = Comprobante::create($request->all() + [
            'fecha_emision' => Carbon::now('America/Lima'),
        ]);

        $files = $request->file('files');

        foreach ($files as $file) {
            // $file->store('resources');

            Storage::putFileAs('resources/', $file, $file->getClientOriginalName());

            $comprobante->resources()->create([
                'url' => $file->getClientOriginalName()
            ]);
        }


        return redirect()->route('comprobante.index')->with('guardar', 'ok');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Comprobante  $comprobante
     * @return \Illuminate\Http\Response
     */
    public function show(Comprobante $comprobante)
    {
        return view('comprobantes.show', compact('comprobante'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Comprobante  $comprobante
     * @return \Illuminate\Http\Response
     */
    public function edit(Comprobante $comprobante)
    {    
        $sucursals = Sucursal::pluck('nombre', 'id');
        $tipo_importes = TipoImporte::pluck('nombre', 'id');
        $tipo_comprobantes = TipoComprobante::pluck('nombre', 'id');
        return view('comprobantes.edit', compact('comprobante', 'tipo_comprobantes','sucursals','tipo_importes'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Comprobante  $comprobante
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Comprobante $comprobante)
    {
        $request->validate([
            'descripcion' => 'required',
            'numero_comprobante' => 'required',
            'importe' => 'required|numeric',
            'tipo_comprobante_id' => 'required',
            'tipo_importe_id' => 'required',
            'fecha_pago' => 'required',
            'sucursal_id' => 'required'

        ], [
            'numero_comprobante.required' => 'El campo numero de comprobante es requerido',
            'importe.required' => 'El campo importe es requerido.',
            'descripcion.required' => 'El campo descripcion es requerido.',
            'tipo_comprobante_id.required' => 'Debe seleccionar un tipo de comprobante',
            'tipo_importe_id.required' => 'Debe seleccionar un tipo de importe',
            'fecha_pago.required' => 'El campo fecha pago es requerido.',
            'sucursal_id.required'=>'Debe seleccionar una empresa',
        ]);

        $comprobante->update($request->all() + [
            'fecha_emision' => Carbon::now('America/Lima'),
        ]);

        $files = $request->file('files');

        if ($files) {
            // $url = $request->file->store('resources');

            foreach ($files as $file) {
                
                Storage::putFileAs('resources/', $file, $file->getClientOriginalName());

                if ($comprobante->resources) {
                    // $url = 'resources/'. $prestamo->resources->url;
                    // Storage::delete($url);

                    foreach ($comprobante->resources as $resource) {
                        $url = 'resources/'. $resource->url;
                         Storage::delete($url);
                         $resource->delete();
                    }

                    $comprobante->resources()->create([
                        'url' => $file->getClientOriginalName()
                    ]);
                } else {
                    $comprobante->resources()->create([
                        'url' => $file->getClientOriginalName()
                    ]);
                }
            }
        }

        return redirect()->route('comprobante.index')->with('guardar', 'ok');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Comprobante  $comprobante
     * @return \Illuminate\Http\Response
     */
    public function destroy(Comprobante $comprobante)
    {
        //
    }

    public function download(Request $request)
    {
        return response()->download(storage_path('app\resources' . $request->url));
    }

    public function exportarpdffechas(Request $request){
        $sucursal_id= $request->sucursal_id;
        if($sucursal_id == ""){
             $sucursal_id= Sucursal::first()->id;
        }

        $sucursals= Sucursal::select('nombre')->where('id',[$sucursal_id])->get();

        $fechainicio = $request->fechainicial;
        $fechafinal = $request->fechaterminal;

        $comprobantes = Comprobante::whereBetween(DB::raw('DATE(fecha_emision)'),[$request->fechainicial,$request->fechaterminal])->where('sucursal_id',[$sucursal_id])->get();
        $pdf = Pdf::loadView('comprobantes.pdf.fechas', compact('comprobantes','sucursals','fechainicio','fechafinal'));
        
        return $pdf->setPaper('a4', 'landscape')->download('Reporte_de_Comprobantes.pdf');
    }
    public function exportarexcelfechas(Request $request){
        $comprobantes = Comprobante::whereBetween(DB::raw('DATE(fecha_emision)'),[$request->fechainicial,$request->fechaterminal])->where('sucursal_id',[$request->sucursal_id])->get();
        return Excel::download(new ComprobanteFechasExport($request->fechainicial,$request->fechaterminal,$comprobantes), 'comprobantes_reporte_fechas.xlsx');

    }
    public function reporte(){
        $añomes = Carbon::now('America/Lima')->format('Y-m');
        $totalcomprobantes = Comprobante::count();
        $comprobantescancelados = Comprobante::where('estado','2')->count();
        $nboletas = Comprobante::where('estado','1')->where('tipo_comprobante_id','=','1')->count();
        $nfacturas = Comprobante::where('estado','1')->where('tipo_comprobante_id','=','2')->count();

        $comprobantes = DB::select('call spcomprobantesestados(?)',array($añomes));
        foreach($comprobantes as $comprobante){
                 
            $data['label'][] = $comprobante->estado;

            $data['data'][] = $comprobante->cantidad;
      }
        $data['data'] = json_encode(isset($data));


        $report = '';
        $report=$this->reportexsucursal($report);

        // return $report;
        return view('comprobantes.reporte.index',compact('añomes','totalcomprobantes','comprobantescancelados','nboletas','nfacturas'),$data+$report);
    }
    public function reportexsucursal(){
        $añomes = Carbon::now('America/Lima')->format('Y-m');
        $comprobantessucu = DB::select('call spcomprobantesxsucursal(?)',array($añomes));

        foreach($comprobantessucu as $comprobantesu){
                 
            $report['label'][] = $comprobantesu->sucursal;

            $report['report'][] = $comprobantesu->cantidad;
      }
        $report['report'] = json_encode(isset($report));

        return $report;

    }
}

