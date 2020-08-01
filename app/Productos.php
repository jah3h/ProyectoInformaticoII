<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Productos extends Model
{
    protected $fillable =[
        'nombre',
        'cantidad',
        'lista_compra_id',
        'unidad_medida_cod',
        'precio',
        'estado'
    ];

    public function listaCompra(){
        return $this->belongsTo('App\ListaCompras');
    }

   
}
