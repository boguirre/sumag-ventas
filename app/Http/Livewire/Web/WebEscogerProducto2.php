<?php

namespace App\Http\Livewire\Web;

use App\Models\Articulo;
use App\Models\Categoria;
use Livewire\Component;
use Livewire\WithPagination;
use PhpOffice\PhpSpreadsheet\Calculation\TextData\Search;

class WebEscogerProducto2 extends Component
{
    use WithPagination;

    protected $paginationTheme = 'bootstrap';
    
    public $search;
    public $cant = 3;

    public function render()
    {

        $productosgeneral = Articulo::where('nombre','like','%'.$this->search.'%')
                                        ->paginate($this->cant);
        $categoriageneral = Categoria::where('estado',1)->get();
        return view('livewire.web.web-escoger-producto2',compact('productosgeneral','categoriageneral'));
    }
    public function updatingSearch(){
        $this->resetPage();
    }
    public function updatingCant(){
        $this->resetPage();
    }
}
