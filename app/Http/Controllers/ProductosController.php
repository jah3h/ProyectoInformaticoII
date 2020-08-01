<?php

namespace App\Http\Controllers;

use App\ListaCompras;
use App\Productos;
use Illuminate\Http\Request;
use Producto;

class ProductosController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @param  \App\ListaCompras  $listaCompras
     * @return \Illuminate\Http\Response
     */
    public function index(ListaCompras $listaCompra)
    {
        $productos =Productos::where('lista_compra_id',$listaCompra->id)->orderBy('estado','asc')->paginate(5);
        
        return view('productos.index',['productos'=>$productos],['listaCompra'=>$listaCompra]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @param  \App\ListaCompras  $listaCompras
     * @return \Illuminate\Http\Response
     */
    public function create(ListaCompras $listaCompra)
    {
        $unidad = [
            "mm" => "mm",
            "cm" => "cm",
            "m" => "m",
            "pulgada" => "pulgada",
            "mg" => "mg",
            "g" => "g",
            "kg" => "kg",
            "l" => "l",
            "unidad" => "unidad",
            "paquete" => "paquete"
        ];
        return view('productos.create',['listaCompra' =>$listaCompra],compact('unidad'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\ListaCompras  $listaCompras
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request, ListaCompras $listaCompra)
    {
        
        $data=$request->validate([
            'nombre'=>'required',
            'cantidad'=>'required',
            'precio'=>'required',
            'unidad_medida_cod'=>'required'
            
        ]);

        //return dd($data);
        //return dd($listaCompra->productos);
        $listaCompra->productos()->create($data);
        return redirect()->route('listaCompra.productos.index',['listaCompra'=>$listaCompra])
        ->with('success','Item agregado correctamente');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\ListaCompras  $listaCompras
     * @param  \App\Productos  $productos
     * @return \Illuminate\Http\Response
     */
    public function show(ListaCompras $listaCompras, Productos $producto)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\ListaCompras  $listaCompras
     * @param  \App\Productos  $productos
     * @return \Illuminate\Http\Response
     */
    public function edit(Productos $producto)
    {
        $unidad = [
            "mm" => "mm",
            "cm" => "cm",
            "m" => "m",
            "pulgada" => "pulgada",
            "mg" => "mg",
            "g" => "g",
            "kg" => "kg",
            "l" => "l",
            "unidad" => "unidad",
            "paquete" => "paquete"
        ];
        return view('productos.edit',compact('producto'),compact('unidad'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\ListaCompras  $listaCompras
     * @param  \App\Productos  $productos
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Productos $producto)
    {
        
        $updateData=$request->validate([
            'nombre'=>'required',
            'cantidad'=>'required',
            'precio'=>'required',
            'unidad_medida_cod'=>'required'
        ]);


        Productos::whereId($producto->id)->update($updateData);


        return redirect()->route('listaCompra.productos.index',['listaCompra'=>$producto->listaCompra])->with('success','Item actualizada correctamente');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\ListaCompras  $listaCompras
     * @param  \App\Productos  $productos
     * @return \Illuminate\Http\Response
     */
    public function destroy(Productos $producto)
    {
        $producto->delete();
        //return "HOla";
        return redirect()->back()->with('success','Item eliminada correctamente');
    }
}
