<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ListaCompras extends Model
{
    public function productos(){
        return $this->hasMany('App\Productos','lista_compra_id');
    }
}
