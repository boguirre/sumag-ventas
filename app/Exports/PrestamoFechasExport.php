<?php

namespace App\Exports;

use Illuminate\Contracts\View\View;
use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Concerns\FromView;
use Maatwebsite\Excel\Concerns\ShouldAutoSize;

class PrestamoFechasExport implements FromView,ShouldAutoSize
{
    protected $fechainicial,$fechaterminal,$prestamos;

    public function __construct($fechainicial,$fechaterminal,$prestamos)
    {
         $this->fechainicial= $fechainicial;
         $this->fechainicial = $fechaterminal;
         $this->prestamos = $prestamos;

   }  
   public function view() :View
   {
       $prestamos = $this->prestamos;

         return view('prestamos.excel.export', compact('prestamos')); 
   }
}
