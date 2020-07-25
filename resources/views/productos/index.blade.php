@extends('layouts.plantilla')

@section('content')

<h1 class='display-1'>FALTA!!!!</h1>

<br />
<div class="card">
  <div class="card-body">
  <h1 class="display-4">Lista de Items</h1>  <a class="btn btn-primary" href="{{route('productos.create')}}" role="button">Agregar Item</a>
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

<!--<div class="card" style="margin-top: 30px">
  <div class="card-body">
    <table class="table table-striped">
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
          <td>{{$lista->nombre}}</td>
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
</div>-->
@endif
@endsection