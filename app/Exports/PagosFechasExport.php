<?php

namespace App\Exports;

use Illuminate\Contracts\View\View;
use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Concerns\FromView;
use Maatwebsite\Excel\Concerns\ShouldAutoSize;

class PagosFechasExport implements FromView,ShouldAutoSize
{
    protected $fechainicial,$fechaterminal,$pagos;

    public function __construct($fechainicial,$fechaterminal,$pagos)
    {
         $this->fechainicial= $fechainicial;
         $this->fechainicial = $fechaterminal;
         $this->pagos = $pagos;

   }
    public function view() :View
    {
        $pagos = $this->pagos;

          return view('pago_proveedores.excel.export', compact('pagos')); 
    }
}
