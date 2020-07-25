@extends('layouts.plantilla')

@section('content')

    {{$listaCompras->id}}

    <form action="" method="POST">
        @csrf

        @method('PUT')
         <div class="row">
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Title:</strong>
                    <input type="text" name="nombre" value="{{ $listaCompras->nombre }}" class="form-control" placeholder="Nombre">
                </div>
            </div>

       
            <div class="col-xs-12 col-sm-12 col-md-12 text-center">
              <button type="submit" class="btn btn-primary">Submit</button>
            </div>
        </div>
    </form>
@endsection