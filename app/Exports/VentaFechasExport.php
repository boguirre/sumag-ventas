<?php

namespace App\Exports;

use App\Models\Venta;
use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Concerns\ShouldAutoSize;
use Maatwebsite\Excel\Concerns\FromView;
use Illuminate\Contracts\View\View;
class VentaFechasExport implements FromView,ShouldAutoSize
{
    protected $fechainicial,$fechaterminal,$ventas;

    public function __construct($fechainicial,$fechaterminal,$ventas)
    {
         $this->fechainicial= $fechainicial;
         $this->fechainicial = $fechaterminal;
         $this->ventas = $ventas;

   }
    public function view() :View
    {
        $ventas = $this->ventas;

          return view('ventas.excel.export', compact('ventas')); 
    }
}
