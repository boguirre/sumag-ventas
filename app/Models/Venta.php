<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Venta extends Model
{
    use HasFactory;
    protected $guarded = ['id'];

    public function users(){
        return $this->belongsTo(User::class,'user_id');
    }
    public function sucursales()
    {
        return $this->belongsTo(Sucursal::class,'sucursal_id');
    }
    public function ventaDetalles(){
        return $this->hasMany(VentaDetalle::class);
    }
}
