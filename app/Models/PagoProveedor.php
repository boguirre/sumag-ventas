<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PagoProveedor extends Model
{
    use HasFactory;

    protected $guarded = ['id'];

    public function sucursal(){
        return $this->belongsTo(Sucursal::class);
    }

    public function proveedor(){
        return $this->belongsTo(Proveedor::class);
    }

    public function pago_proveedor_detalles(){
        return $this->hasMany(PagoProveedorDetalle::class);
    }
}
