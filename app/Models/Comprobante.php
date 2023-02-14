<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Comprobante extends Model
{
    use HasFactory;

    protected $guarded = ['id'];

    public function tipo_comprobante(){
        return $this->belongsTo(TipoComprobante::class);
    }
    public function sucursal(){
        return $this->belongsTo(Sucursal::class);
    }
    public function resources()
    {
        return $this->morphMany(Resource::class, 'resourceable'); 
    }

    public function tipo_importe(){
        return $this->belongsTo(TipoImporte::class);
    }
}
