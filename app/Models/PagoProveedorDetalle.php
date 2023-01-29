<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PagoProveedorDetalle extends Model
{
    use HasFactory;

    protected $guarded = ['id'];

    public function pago_proveedor(){
        return $this->belongsTo(PagoProveedor::class);
    }
}
