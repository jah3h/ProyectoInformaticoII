@extends('layouts.plantilla')

@section('content')
<br>
@include('partials.alerts')

<div class="card ">
    <div class="card-header">
        <img src="{{URL::to('images/cleaning.png')}}" width="100px">
        <h1 class="card-title">Modificar Item</h1>
    </div>
    <div class="card-body">
        <form action="{{route('productos.update',$producto)}}" method="post">
            @csrf
            @method('PUT')
            <div class="form-row">

                <div class="col-md-9 mb-3">
                    <label for="content">Nombre Lista</label>
                    <input type="text" readonly class="form-control" id="lista" name="lista"
                        value="{{$producto->listacompra->nombre}}">
                </div>
            </div>

            <div class="form-row">
                <div class="col-md-6 mb-3">
                    <label for="content">Nombre del Item</label>
                <input type="text" class="form-control" id="nombre" name="nombre" value="{{$producto->nombre}}">
                </div>
            </div>

            <div class="form-row">
               <div class="col-md-3 mb-3">
                   <label for="content">Unidad de Medida</label>
                    <select class="custom-select" id="unidad_medida_cod" name="unidad_medida_cod">
                        @foreach ($unidad as $item)
                         <option value="{{$item}}" {{$item==$producto->unidad_medida_cod?'selected':''}} >{{$item}}</option>
                        @endforeach
                    </select>
                </div>
                <div class="col-md-3 mb-3">
                    <label for="content">Cantidad</label>
                    <input type="number" class="form-control" min="1" id="cantidad" name="cantidad" value="{{$producto->cantidad}}">
                </div>
                <div class="col-md-3 mb-3">
                    <label for="content">Precio</label>
                    <input type="number" step="any" class="form-control" min="0.01" id="precio" name="precio"
                    value="{{$producto->precio}}">
                </div>
            </div>
            
            <div class="">
                <button type="submit" class="btn btn-primary">Guardar</button>
                <a class="btn btn-danger" href="{{ url()->previous()}}" role="button">Atras</a>
            </div>
        </form>
    </div>
</div>
@endsection