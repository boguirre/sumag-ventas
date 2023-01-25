<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PrestamoDetalle extends Model
{
    use HasFactory;

    protected $guarded = ['id'];

    public function prestamo(){
        return $this->belongsTo(Prestamo::class);
    }
}
