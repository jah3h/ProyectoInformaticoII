@extends('layouts.plantilla')

@section('content')
<nav class="navbar navbar-dark   mb-4">
  
<!-- Navbar brand -->
<h2><a class="navbar-brand red-text font-weight-bold" href="#">Listas Realizadas</a></h2>

<!-- Collapse button -->
<button class="navbar-toggler second-button" type="button" data-toggle="collapse" data-target="#navbarSupportedContent23"
  aria-controls="navbarSupportedContent23" aria-expanded="false" aria-label="Toggle navigation">
  <div class="animated-icon2 "><span></span><span></span><span></span><span></span></div>
</button>

<!-- Collapsible content -->
<div class="collapse navbar-collapse" id="navbarSupportedContent23">

  <!-- Links -->
  <ul class="navbar-nav mr-auto ">
    <li class="nav-item ">
      <a class="nav-link red-text" href="#">Lista PlazaVea </a>
    </li>
    <li class="nav-item">
      <a class="nav-link red-text" href="#">Lista Mercado</a>
    </li>
    <li class="nav-item">
      <a class="nav-link red-text" href="#">Lista Pagos</a>
    </li>
  </ul>
  <!-- Links -->

</div>
<!-- Collapsible content -->

</nav>
<!--/.Navbar-->
<!--Navbar-->
<nav class="navbar navbar-dark   mb-4">

<!-- Navbar brand -->
<h2><a class="navbar-brand red-text font-weight-bold" href="#">Listas Programadas</a></h2>

<!-- Collapse button -->
<button class="navbar-toggler third-button" type="button" data-toggle="collapse" data-target="#navbarSupportedContent24"
  aria-controls="navbarSupportedContent24" aria-expanded="false" aria-label="Toggle navigation">
  <div class="animated-icon3 "><span></span><span></span><span></span><span></span></div>
</button>

<!-- Collapsible content -->
<div class="collapse navbar-collapse" id="navbarSupportedContent24">

  <!-- Links -->
  <ul class="navbar-nav mr-auto ">
    <li class="nav-item ">
      <a class="nav-link red-text" href="#">Lista Mercadillo </a>
    </li>
    <li class="nav-item">
      <a class="nav-link red-text" href="#">Lista Doña Julia</a>
    </li>
 
  </ul>
  <!-- Links -->

</div>
<!-- Collapsible content -->

</nav>
<!--/.Navbar-->

<!--/.Boton de Nueva Lista-->

<a type="button" class="btn  btn-rounded boton1 text-white btn-block  " href="Historial.html"> <p class="h5">Nueva Lista</p> </a>
<!--/.Boton de Nueva Lista-->

@endsection