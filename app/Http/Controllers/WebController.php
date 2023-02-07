<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Articulo;
use App\Models\Categoria;
use Illuminate\Http\Request;
use Livewire\WithPagination;


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

    public function ver_articulo(Articulo $articulo){
        
        $destacados = Articulo::where('estado',1)                   
                             ->latest('id')
                             ->get();

        return view('web.ver_articulo', compact('articulo','destacados'));
        

    }

    public function escoger_producto(Categoria $categoria){
        $productos = Articulo::where('categoria_id', $categoria->id)
                                 ->where('estado',1)
                                 ->latest('id')
                                 ->paginate(3);
        $filtrocategoria = Categoria::all();
       
        return view('web.escoger_producto',compact('categoria','productos','filtrocategoria'));
        
    }

    public function escoger_producto2(){
        $productosgeneral = Articulo::all();
        $categoriageneral = Categoria::all();
        return view('web.escoger_producto2', compact('productosgeneral','categoriageneral'));
    }

    public function sobre_nosotros(){

        return view('web.sobre_nosotros');
    }

    public function contacto(){
        return view('web.contacto');
    }
}


