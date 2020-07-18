@extends('layouts.plantilla')

@section('content')


<a class="btn btn-primary" href="{{route('listaCompra.create')}}" role="button">Link</a>
<br />
@if ($listaCompras->count()==0)
<div class="card">
  <div class="card-body">
    La Lista esta Vacia
  </div>
</div>

@else

<div class="card" style="margin-top: 30px">
  <div class="card-body">
    <table class="table table-bordered">
      <thead>
        <tr>
          <th scope="col">Nombre</th>
          <th scope="col" colspan="2">Opciones</th>
        </tr>
      </thead>
      <tbody>

        @foreach ($listaCompras as $lista)
        <tr>
          <td>{{$lista->nombre}}</th>
          <td><span class="material-icons">edit</span></td>
          <td><span class="material-icons">clear</span></td>
        </tr>    
        @endforeach
        

      </tbody>
    </table>
  </div>
</div>
@endif
@endsection