<?php

namespace App\Http\Controllers;

use App\Models\Prestamo;
use App\Models\PrestamoDetalle;
use Carbon\Carbon;
use Illuminate\Http\Request;

class PrestamoDetalleController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
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
     * @param  \App\Models\PrestamoDetalle  $prestamoDetalle
     * @return \Illuminate\Http\Response
     */
    public function show(PrestamoDetalle $prestamoDetalle)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\PrestamoDetalle  $prestamoDetalle
     * @return \Illuminate\Http\Response
     */
    public function edit(PrestamoDetalle $prestamoDetalle)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\PrestamoDetalle  $prestamoDetalle
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, PrestamoDetalle $prestamoDetalle)
    {
        $prestamo = Prestamo::find($prestamoDetalle->prestamo_id);

        $fecha_actual = Carbon::now('America/Lima');

        if ($prestamoDetalle->fecha_pago > $fecha_actual) {
            $prestamoDetalle->update([
                'estado' => 2
            ]);
        }
        else{
            $prestamoDetalle->update([
                'estado' => 3
            ]);
        }

        return redirect()->route('prestamo.show', $prestamo)->with('addpago', 'ok');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\PrestamoDetalle  $prestamoDetalle
     * @return \Illuminate\Http\Response
     */
    public function destroy(PrestamoDetalle $prestamoDetalle)
    {
        //
    }
}
