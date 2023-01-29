<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Sucursal extends Model
{
    use HasFactory;
<<<<<<< HEAD

    protected $guarded = ['id'];

    public function prestamos(){
        return $this->hasMany(Prestamo::class);
    }

    public function pago_proveedores(){
        return $this->hasMany(PagoProveedor::class);
=======
    protected $guarded = ['id'];
    public function images()
    {
        return $this->morphOne(Image::class, 'imageable');
>>>>>>> c5f7c256950acf8fad86ab408502bd1687c49877
    }
}
