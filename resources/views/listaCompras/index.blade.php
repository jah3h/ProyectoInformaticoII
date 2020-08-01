@extends('layouts.plantilla')

@section('content')

<br />
<div class="card">
  <div class="card-body">
    <a class="btn btn-primary" href="{{route('listaCompra.create')}}" role="button">Nueva Lista</a>
  </div>
</div>

@include('partials.alerts')
<br>
@if ($listaCompras->count()==0)
<div class="card">
  <div class="card-body">
    La Lista esta Vacia
  </div>
</div>

@else

<div class="card" style="margin-top: 10px">

  <div class="card-body ">
    <div class="alert alert-info" role="alert">
      (**) Click en el nombre de la lista para ver los items.
    </div>
    <br>
    <table class="table table-striped table-sm">
      <thead>
        <tr>
          <th scope="col">#</th>
          <th scope="col">Nombre</th>
          <th scope="col" colspan="2" >Opciones</th>
        </tr>
      </thead>

      <tbody>
        @foreach ($listaCompras as $lista)

        <tr class="animate__animated animate__fadeIn">
          <td scope="row" class="align-middle">{{$lista->id}}</td>
          <td class="align-middle"><a href="{{route('listaCompra.productos.index',$lista)}}">{{$lista->nombre}}</a></td>
          <td class="align-middle">

            <form action="{{route('listaCompra.destroy',$lista->id)}}" method="POST">
              <a href="{{route('listaCompra.edit',$lista->id)}}"><span class="material-icons align-middle">edit</span></a> 
              
              @csrf
              @method('DELETE')
              <button type="submit" class="btn btn-link"><span class="material-icons align-middle">clear</span></button>
            </form>

          </td>
        </tr>
        @endforeach
      </tbody>

    </table>

    <div class="d-flex justify-content-center">
      {{$listaCompras->links()}}
    </div>
  </div>
</div>
@endif
@endsection