@extends('layouts.plantilla')

@section('content')



<br />
<div class="card">

  <div class="card-body">
    <h1 class="display-4">{{$listaCompra->nombre}}</h1> <a class="btn btn-primary"
      href="{{route('listaCompra.productos.create', $listaCompra)}}" role="button">Agregar Item</a>
  </div>
</div>



@include('partials.alerts')

@if ($productos->count()==0)
<br />
<div class="card">
  <div class="card-body">
    La Lista esta Vacia
  </div>
</div>

@else

    <livewire:update-estate :listaCompra="$listaCompra">
@endif

@endsection