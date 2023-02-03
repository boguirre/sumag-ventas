<?php

namespace App\Http\Livewire;

use App\Models\Categoria;
use Livewire\Component;
use PhpOffice\PhpSpreadsheet\Calculation\Category;

class PlantillaFooter extends Component
{
    public function render()
    {
        $categorias = Categoria::all();
        return view('livewire.plantilla-footer', compact('categorias'));
    }
}
