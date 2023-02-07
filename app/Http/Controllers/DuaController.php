<?php

namespace App\Http\Controllers;

use App\Exports\DuaFechasExport;
use App\Models\Dua;
use App\Models\Sucursal;
use Barryvdh\DomPDF\Facade\Pdf;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Arr;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Storage;
use Maatwebsite\Excel\Facades\Excel;

class DuaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $sucursals = Sucursal::get();
        $duas = Dua::all();
        return view('duas.index', compact('duas','sucursals'));
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
            'mes_llegada' => 'required',
            'file' => 'required'
            
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

        $url = $request->file->store('resources');

        $dua->resource()->create([
            'url' => $url
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

        if($request->file('file')){
            $url = $request->file->store('resources');

            if($dua->resource){
                Storage::delete($dua->resource->url);

                $dua->resource->update([
                    'url' => $url
                ]);
            }else{
                $dua->resource()->create([
                    'url' => $url
                ]);
            }
        }

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

    public function download(Request $request)
    {
        return response()->download(storage_path('app/' . $request->url));
    }



    public function reporte(){
        $añomes = Carbon::now('America/Lima')->format('Y-m');

        $duas = DB::select('call spduaestados(?)',array($añomes));
        // return $duas;
        foreach($duas as $dua){
                 
            $data['label'][] = $dua->estado;

            $data['data'][] = $dua->cantidad;
      }
        $data['data'] = json_encode($data);


        $report = '';
        $report=$this->reportepersepcion($report);

        return view('duas.reporte.index',compact('añomes'),$data+$report);
    }


    public function reportepersepcion(){
        $añomes = Carbon::now('America/Lima')->format('Y-m');
        $duaspersepciones = DB::select('call spduaspersepcion(?)',array($añomes));

        foreach($duaspersepciones as $duaspersepcion){
                 
            $report['label'][] = $duaspersepcion->sucursal;

            $report['report'][] = $duaspersepcion->cantidad;
      }
        $report['report'] = json_encode($report);

        return $report;

    }

    public function exportarpdffechas(Request $request){
        $sucursals= Sucursal::select('nombre')->where('id',[$request->sucursal_id])->get();

        $fechainicio = $request->fechainicial;
        $fechafinal = $request->fechaterminal;

        $duas = Dua::whereBetween(DB::raw('DATE(created_at)'),[$request->fechainicial,$request->fechaterminal])->where('sucursal_id',[$request->sucursal_id])->get();
        $pdf = Pdf::loadView('duas.pdf.fechas', compact('duas','sucursals','fechainicio','fechafinal'));
        
        return $pdf->download('Reporte_de_Duas.pdf');
    }
    public function exportarexcelfechas(Request $request){
        $duas = Dua::whereBetween(DB::raw('DATE(created_at)'),[$request->fechainicial,$request->fechaterminal])->where('sucursal_id',[$request->sucursal_id])->get();
        return Excel::download(new DuaFechasExport($request->fechainicial,$request->fechaterminal,$duas), 'duas_reporte_fechas.xlsx');

    }

    public function estado(Dua $dua)
    {
        $dua->estado = 2;
        $dua->save();
        return redirect()->route('dua.index')->with('activar', 'ok');
    }
}
