<?php

namespace App\Http\Livewire;

use App\Models\Articulo;
use App\Models\Categoria;
use Livewire\Component;

class PlantillaNavegacion extends Component
{
    public $search;
    protected $paginationTheme = 'bootstrap';


    public function render()
    {
        $categorias = Categoria::where('nombre','like','%'.$this->search.'%')->get();
        $rangos = Categoria::orderByRaw('id asc limit 6')->get();
        return view('livewire.plantilla-navegacion',compact('categorias','rangos'));
    }
}
