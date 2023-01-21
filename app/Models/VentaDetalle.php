<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class VentaDetalle extends Model
{
    use HasFactory;
    protected $guarded = ['id'];

    public function articulo(){
        return $this->belongsTo(Articulo::class);
    }
}
