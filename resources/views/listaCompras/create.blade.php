@extends('layouts.plantilla')

@section('content')
<br>
@if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif

<div class="card">
    <div class="card-header">
        <img src="{{URL::to('images/pngwing.png')}}" width="100px">
        <h1 class="card-title">Nueva Listas de Compra</h1>
    </div>
    <div class="card-body">
        

        <form action="{{ route('listaCompra.store') }}" method="post">
            <div class="form-group">
                <label for="content">Nombre de la Lista</label>
                <input type="text" class="form-control" id="nombre" name="nombre">
            </div>
            {{ csrf_field() }}
            <button type="submit" class="btn btn-primary">Guardar</button>
            <a class="btn btn-danger" href="{{ url()->previous()}}" role="button">Atras</a>
        </form>
    </div>
</div>
@endsection