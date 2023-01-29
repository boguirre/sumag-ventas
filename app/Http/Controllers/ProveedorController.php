<?php

namespace App\Http\Controllers;

use App\Models\Proveedor;
use Illuminate\Http\Request;

class ProveedorController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $proveedores = Proveedor::all();
        return view('proveedores.index', compact('proveedores'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('proveedores.create');
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
            'codigo' => 'required',
            'razon_social' => 'required',
            'ruc' => 'required|numeric',
            'numero_telefono' => 'required'
            
        ],[
            'codigo.required'=>'El campo numero de credito es requerido',
            'razon_social.numeric'=>'El campo numero de credito debe ser numerico',
            'ruc.required'=>'El campo monto es requerido.',
            'numero_telefono.required'=>'El campo descripcion es requerido.',
        ]);

        $prestamo  = Proveedor::create($request->all());

        return redirect()->route('proveedor.index')->with('guardar','ok');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Proveedor  $proveedor
     * @return \Illuminate\Http\Response
     */
    public function show(Proveedor $proveedor)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Proveedor  $proveedor
     * @return \Illuminate\Http\Response
     */
    public function edit(Proveedor $proveedor)
    {
        return view('proveedores.edit', compact('proveedor'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Proveedor  $proveedor
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Proveedor $proveedor)
    {
        $request->validate([
            'codigo' => 'required',
            'razon_social' => 'required',
            'ruc' => 'required|numeric',
            'numero_telefono' => 'required'
            
        ],[
            'codigo.required'=>'El campo numero de credito es requerido',
            'razon_social.numeric'=>'El campo numero de credito debe ser numerico',
            'ruc.required'=>'El campo monto es requerido.',
            'numero_telefono.required'=>'El campo descripcion es requerido.',
        ]);

        $proveedor->update($request->all());

        return redirect()->route('proveedor.index')->with('guardar','ok');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Proveedor  $proveedor
     * @return \Illuminate\Http\Response
     */
    public function destroy(Proveedor $proveedor)
    {
        if ($proveedor->estado == 1) {
            $estado = 0;
        }
        elseif($proveedor->estado == 0)
        {
            $estado = 1;
        }

        $proveedor->update([
            'estado' => $estado
        ]);

        return redirect()->route('proveedor.index')->with('baja', 'ok');
    }
}
