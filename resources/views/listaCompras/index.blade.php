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
    <table class="table table-striped table-sm">
      <thead>
        <tr>
          <th scope="col">#</th>
          <th scope="col">Nombre</th>
          <th scope="col" colspan="2">Opciones</th>
        </tr>
      </thead>

      <tbody>
        @foreach ($listaCompras as $lista)
        
        <tr>
          <td scope="row">{{$lista->id}}</td>
        <td><a href="{{route('listaCompra.productos.index',$lista)}}">{{$lista->nombre}}</a></td>
          <td>
            
            <form action="{{route('listaCompra.destroy',$lista->id)}}" method="POST">
              <span class="material-icons"><a href="{{route('listaCompra.edit',$lista->id)}}">edit</a> </span>
              @csrf
              @method('DELETE')
               <button type="submit" class="btn btn-link"><span class="material-icons">clear</span></button>
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