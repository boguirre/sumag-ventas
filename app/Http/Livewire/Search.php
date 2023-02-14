<?php

namespace App\Http\Livewire;

use App\Models\Articulo;
use Livewire\Component;

class Search extends Component
{
    public $search;
    protected $paginationTheme = 'bootstrap';

    public function render()
    {
        return view('livewire.search');
    }

    public function getResultsProperty(){
        return Articulo::where('nombre','like','%'.$this->search.'%')
        ->where('estado', 1)
        ->where('publicacion', 1)
        ->get();
    }

}
