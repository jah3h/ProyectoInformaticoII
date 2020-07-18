@extends('layouts.plantilla')

@section('content')
<br>
<div class="card">
    <div class="card-body">
        <h1 class="card-title">Nuevo Lista de Compra</h1>

        <form action="{{ route('listaCompra.store') }}" method="post">
            <div class="form-group">
                <label for="content">Nombre de la Lista</label>
                <input type="text" class="form-control" id="nombre" name="nombre">
            </div>
            {{ csrf_field() }}
            <button type="submit" class="btn btn-danger">Guardar</button>
        </form>
    </div>
</div>
@endsection