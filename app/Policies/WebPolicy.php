<?php

namespace App\Policies;

use App\Models\Articulo;
use App\Models\Categoria;
use Illuminate\Auth\Access\HandlesAuthorization;
use App\Models\User;

class WebPolicy
{
    use HandlesAuthorization;

    public function published(?User $user, Articulo $articulo){
        if($articulo->publicacion == 1){
            return true;
        }else{
            return false;
        }
    }

    public function category(?User $user, Categoria $categoria){
        if($categoria->estado == 1){
            return true;
        }else{
            return false;
        }
    }
}
