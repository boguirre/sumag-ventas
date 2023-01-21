<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class VentaDetalle extends Model
{
    use HasFactory;
    protected $guarded = ['id'];
    public function venta(){
        return $this->belongsTo(Venta::class);
    }
    public function articulo(){
        return $this->belongsTo(Articulo::class,'articulo_id');
    }
}
