<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Sucursal extends Model
{
    use HasFactory;
    protected $guarded = ['id'];

    public function prestamos(){
        return $this->hasMany(Prestamo::class);
    }

    public function pago_proveedores(){
        return $this->hasMany(PagoProveedor::class);
    }
    public function images()
    {
        return $this->morphOne(Image::class, 'imageable');
    }
}
