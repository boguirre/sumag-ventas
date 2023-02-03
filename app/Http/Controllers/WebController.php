<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Articulo;
use App\Models\Categoria;
use Illuminate\Http\Request;

class WebController extends Controller
{
    public function index(){
        $categorias = Categoria::all();
        $articulos = Articulo::where('estado',1)
                            ->latest('id')
                            ->orderByRaw('id desc limit 12')
                            ->get();
        return view('web.index', compact('articulos','categorias'));
    }

    public function vista_producto(Articulo $articulo){

        return view('web.vista_producto', compact('articulo'));

    }

    public function escoger_producto(Categoria $categoria){

       
        return view('web.escoger_producto', compact('categoria'));

    }

    public function escoger_producto2(){
        
        return view('web.escoger_producto2');
    }

    public function sobre_nosotros(){

        return view('web.sobre_nosotros');
    }
    
    public function contacto(){
        return view('web.contacto');
    }
}


