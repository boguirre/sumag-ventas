<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Dua extends Model
{
    use HasFactory;

    protected $guarded = ['id'];

    public function sucursal(){
        return $this->belongsTo(Sucursal::class);
    }

    //Relacion uno a uno polimorfica
    public function resource(){
        return $this->morphOne(Resource::class, 'resourceable');
    }
}
