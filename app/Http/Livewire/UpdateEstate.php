<?php

namespace App\Http\Livewire;

use Livewire\Component;
use Livewire\WithPagination;
use Throwable, Exception, Error;
use App\Productos;

class UpdateEstate extends Component
{
    use WithPagination;
    public $listaCompra;

    public function mount($listaCompra){
        //dd($listaCompra);
        $this->listaCompra=$listaCompra;
    }

    public function updateEstate($id,$estado){
        throw new Exception("hola");
    }

    public function save($id,$estado){
        $producto = Productos::findOrFail($id);
        $producto->estado=$estado;
        $producto->save();
    }

    public function render()
    {
        
        $productos =Productos::where('lista_compra_id',$this->listaCompra->id)->orderBy('estado','asc')->paginate(5);  
        return view('livewire.update-estate',['productos'=>$productos],['listaCompra'=>$this->listaCompra]);
        
    }
}
