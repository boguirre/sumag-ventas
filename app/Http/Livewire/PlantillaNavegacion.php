<?php

namespace App\Http\Livewire;

use App\Models\Categoria;
use Livewire\Component;

class PlantillaNavegacion extends Component
{
    public function render()
    {
        $categorias = Categoria::all();
        $rangos = Categoria::orderByRaw('id asc limit 6')->get();
        return view('livewire.plantilla-navegacion',compact('categorias','rangos'));
    }
}
