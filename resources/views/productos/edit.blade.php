@extends('layouts.plantilla')

@section('content')
<br>
@include('partials.alerts')

<div class="card ">
    <div class="card-body">
        <h1 class="card-title">Nuevo Item</h1>

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
               <!-- <div class="col-md-3 mb-3">
                    <label for="content">Unidad de Medida</label>
                    <select class="custom-select" id="unidad_medida_cod" name="unidad_medida_cod">
                        @include('data.unidadMedida');
                    </select>
                </div>-->
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
            
            <div class="d-flex justify-content-around">
                <button type="submit" class="btn btn-primary">Guardar</button>
                <a class="btn btn-danger" href="{{ url()->previous()}}" role="button">Atras</a>
            </div>
        </form>
    </div>
</div>
@endsection