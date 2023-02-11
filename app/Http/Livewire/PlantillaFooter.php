<?php

namespace App\Http\Livewire;

use App\Models\Categoria;
use Livewire\Component;
use PhpOffice\PhpSpreadsheet\Calculation\Category;

class PlantillaFooter extends Component
{
    public function render()
    {
        $categorias = Categoria::where('estado',1)->get();
        return view('livewire.plantilla-footer', compact('categorias'));
    }
}
