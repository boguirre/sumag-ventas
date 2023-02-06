<?php

namespace App\Exports;

use App\Models\Dua;
use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Concerns\ShouldAutoSize;
use Maatwebsite\Excel\Concerns\FromView;
use Illuminate\Contracts\View\View;

class DuaFechasExport implements FromView,ShouldAutoSize
{
    protected $fechainicial,$fechaterminal,$duas;

    public function __construct($fechainicial,$fechaterminal,$duas)
    {
         $this->fechainicial= $fechainicial;
         $this->fechainicial = $fechaterminal;
         $this->duas = $duas;

   }  
   public function view() :View
   {
       $duas = $this->duas;

         return view('duas.excel.export', compact('duas')); 
   }

}
