<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Proveedor extends Model
{
    use HasFactory;

    protected $guarded = ['id'];

    public function pago_proveedores(){
        return $this->hasMany(PagoProveedor::class);
    }
}
