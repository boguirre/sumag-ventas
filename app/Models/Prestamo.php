<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Prestamo extends Model
{
    use HasFactory;
    protected $guarded = ['id'];

    public function empresa(){
        return $this->belongsTo(Empresa::class);
    }

    public function sucursal(){
        return $this->belongsTo(Sucursal::class);
    }

    public function prestamo_detalles(){
        return $this->hasMany(PrestamoDetalle::class);
    }
}
