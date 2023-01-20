<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Articulo extends Model
{

    protected $guarded = ['id'];

    use HasFactory;

    public function medida()
    {
        return $this->belongsTo(Medida::class);
    }

    public function categoria()
    {
        return $this->belongsTo(Categoria::class);
    }

    public function images()
    {
        return $this->morphOne(Image::class, 'imageable');
    }
}
