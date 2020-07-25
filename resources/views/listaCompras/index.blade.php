@extends('layouts.plantilla')

@section('content')

<br />
<div class="card">
  <div class="card-body">
    <a class="btn btn-primary" href="{{route('listaCompra.create')}}" role="button">Nueva Lista</a>
  </div>
</div>

@if ($listaCompras->count()==0)
<br />
<div class="card">
  <div class="card-body">
    La Lista esta Vacia
  </div>
</div>

@else

<div class="card" style="margin-top: 30px">
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
            <form action="{{ route('listaCompra.destroy',$lista->id) }}" method="POST">
              <span class="material-icons"><a href="{{route('listaCompra.edit',$lista->id)}}">edit</a> </span>
              @csrf
              @method('DELETE')
              <span class="material-icons"><a type="sumit" href="{{route('listaCompra.destroy',$lista->id)}}">clear</a>
              </span>
            </form>

          </td>
          <!--<td><span class="material-icons"><a href="{{route('listaCompra.edit',$lista)}}">edit</a> </span></td>
          <td><span class="material-icons">clear</span></td>-->
        </tr>
        @if($lista->id==6)
        {{print($lista)}}
        @endif


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