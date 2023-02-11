<?php

namespace App\Http\Controllers;

use App\Models\Comprobante;
use App\Models\Sucursal;
use App\Models\TipoComprobante;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

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
        $tipo_comprobantes = TipoComprobante::all();
        return view('comprobantes.create', compact('tipo_comprobantes'));
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
            'tipo_importe' => 'required',
            'fecha_pago' => 'required',

        ], [
            'numero_comprobante.required' => 'El campo numero de credito es requerido',
            'importe.required' => 'El campo monto es requerido.',
            'descripcion.required' => 'El campo descripcion es requerido.',
            'tipo_comprobante_id.required' => 'Debe seleccionar una empresa',
            'tipo_importe.required' => 'Debe seleccionar una tienda',
            'fecha_pago.required' => 'El campo fecha prestamo es requerido.',
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
        $tipo_comprobantes = TipoComprobante::pluck('nombre', 'id');
        return view('comprobantes.edit', compact('comprobante', 'tipo_comprobantes'));
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
            'tipo_importe' => 'required',
            'fecha_pago' => 'required',

        ], [
            'numero_comprobante.required' => 'El campo numero de credito es requerido',
            'importe.required' => 'El campo monto es requerido.',
            'descripcion.required' => 'El campo descripcion es requerido.',
            'tipo_comprobante_id.required' => 'Debe seleccionar una empresa',
            'tipo_importe.required' => 'Debe seleccionar una tienda',
            'fecha_pago.required' => 'El campo fecha prestamo es requerido.',
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
}

