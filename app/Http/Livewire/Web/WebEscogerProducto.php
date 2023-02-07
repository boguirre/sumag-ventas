<?php

namespace App\Http\Livewire\Web;

use App\Http\Controllers\CategoriaController;
use App\Http\Controllers\WebController;
use App\Models\Articulo;
use App\Models\Categoria;
use Livewire\Component;
use Livewire\WithPagination;

class WebEscogerProducto extends Component
{
    
    
    use WithPagination;

    protected $paginationTheme = 'bootstrap';
    
    public $search;
    public $cant;
    public $categoria;

    public function render()
    {
        $productos = Articulo::where('categoria_id','=', $this->categoria->id)
                                 ->where('estado',1)
                                 ->latest('id')
                                 ->paginate(3);
        $filtrocategoria = Categoria::all();
        return view('livewire.web.web-escoger-producto',compact('categoria','productos','filtrocategoria'));
        
    }
    

    

}
