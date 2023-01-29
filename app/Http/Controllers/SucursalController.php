<?php

namespace App\Http\Controllers;

use App\Models\Sucursal;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class SucursalController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $sucursals = Sucursal::all();

        return view('sucursales.index', compact('sucursals'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('sucursales.create');

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
            'nombre' => 'required|max:50',
            'file' => 'required|image'

        ],[
            'nombre.required'=>'El campo nombre es requerido.',
            'file.required'=>'debe seleccionar una imagen'
        ]);
        $sucursal = Sucursal::create($request->all());
        if($request->file('file')){
            $url =  Storage::put('public/sucursales', $request->file('file'));

            $sucursal->images()->create([
                'url' => $url
            ]);
        }
        return redirect()->route('sucursal.index')->with('guardar', 'ok');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Sucursal  $sucursal
     * @return \Illuminate\Http\Response
     */
    public function show(Sucursal $sucursal)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Sucursal  $sucursal
     * @return \Illuminate\Http\Response
     */
    public function edit(Sucursal $sucursal)
    {
        return view('sucursales.edit',compact('sucursal'));

    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Sucursal  $sucursal
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Sucursal $sucursal)
    {
        $request->validate([
            'nombre' => 'required|max:50',
            'file' => 'image'

        ],[
            'nombre.required'=>'El campo nombre es requerido.',
            'file.image'=>'debe seleccionar una imagen'
        ]);
        $sucursal->update($request->all());
        if($request->file('file')){
            $url = Storage::put('public/sucursales', $request->file('file'));

            if($sucursal->images){
                Storage::delete($sucursal->images->url);

                $sucursal->images->update([
                    'url' => $url
                ]);
            }else{
                $sucursal->images()->create([
                    'url' => $url
                ]);
            }
        }
        return redirect()->route('sucursal.index')->with('editar', 'ok');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Sucursal  $sucursal
     * @return \Illuminate\Http\Response
     */
    public function destroy(Sucursal $sucursal)
    {
        $sucursal->estado = 0;
        $sucursal->save();
        return redirect()->route('sucursal.index')->with('eliminar', 'ok');
        
    }
    public function activar(Sucursal $sucursal)
    {
        $sucursal->estado = 1;
        $sucursal->save();
        return redirect()->route('sucursal.index')->with('activar', 'ok');
    
    }
}
