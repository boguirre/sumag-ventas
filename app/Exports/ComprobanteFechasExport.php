<?php

namespace App\Exports;

use App\Models\Comprobante;
use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Concerns\ShouldAutoSize;
use Maatwebsite\Excel\Concerns\FromView;
use Illuminate\Contracts\View\View;
class ComprobanteFechasExport implements FromView,ShouldAutoSize
{
    protected $fechainicial,$fechaterminal,$comprobantes;

    public function __construct($fechainicial,$fechaterminal,$comprobantes)
    {
         $this->fechainicial= $fechainicial;
         $this->fechainicial = $fechaterminal;
         $this->comprobantes = $comprobantes;

   }  
   public function view() :View
   {
       $comprobantes = $this->comprobantes;

         return view('comprobantes.excel.export', compact('comprobantes')); 
   }
}
