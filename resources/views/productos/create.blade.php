@extends('layouts.plantilla')

@section('content')
<br>
@include('partials.alerts')

<div class="card">
    <div class="card-body">
        <h1 class="card-title">Nuevo Istem</h1>

        <form action="{{ route('productos.store') }}" method="post">
            <div class="form-row">
                
                <div class="col-md-9 mb-3">
                    <label for="content">Nombre Lista</label>
                    <input type="text" readonly class="form-control" id="lista" name="lista">
                </div>
            </div>

            <div class="form-row">
                <div class="col-md-6 mb-3">
                    <label for="content">Nombre del Item</label>
                    <input type="text" class="form-control" id="nombre" name="nombre">
                </div>
                <div class="col-md-3 mb-3">
                    <label for="content">Cantidad</label>
                    <input type="number" min="1" class="form-control" id="cantidad" name="cantidad">
                </div>
            </div>

            @csrf
            <button type="submit" class="btn btn-danger">Guardar</button>
        </form>
    </div>
</div>
@endsection