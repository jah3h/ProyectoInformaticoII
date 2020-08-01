@extends('layouts.plantilla')


@section('content')
<div class="row align-items-center heightfull widthfull">
  <div class="col-md-6">
    <img src="{{URL::to('images/isotipo.png')}}" style="height:400px" alt="">
  </div>
  <div class="col-md-6 animate__animated animate__fadeIn">
    <h1 class="display-1">
      Bienvenido
    </h1>
  </div>
</div>
@endsection