<?php

namespace App\Http\Controllers;

use App\ListaCompras;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Schema;
use Symfony\Component\Routing\Annotation\Route;

class ListaComprasController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $listaCompras=ListaCompras::paginate(5);

        return view('listaCompras.index',['listaCompras'=>$listaCompras]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('listaCompras.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
       /* $columns = Schema::getColumnListing('lista_compras'); 
        return dd($columns);*/

        $validatedData = $request->validate([
            'nombre' => ['required']
        ]);

        $listaCompra = new ListaCompras();

        $listaCompra->nombre= $request->input('nombre');
        $listaCompra->user_id= auth()->user()->id;
        $listaCompra->save();

        return redirect()->route('listaCompra.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\ListaCompras  $listaCompras
     * @return \Illuminate\Http\Response
     */
    public function show(ListaCompras $listaCompra)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\ListaCompras  $listaCompras
     * @return \Illuminate\Http\Response
     */
    public function edit(ListaCompras $listaCompras)
    {
        
        return view('listaCompras.edit',compact('listaCompras'));
       
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\ListaCompras  $listaCompras
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, ListaCompras $listaCompras)
    {
        $request->validate([
            'nombre' => 'required',
        ]);

        $listaCompras->save();

        return redirect()->route('listaCompra.index ')->with('success','Post updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\ListaCompras  $listaCompras
     * @return \Illuminate\Http\Response
     */
    public function destroy(ListaCompras $listaCompras)
    {
        //
    }
}
