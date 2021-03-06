<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>GoStore</title>
  @include('partials.default_css')
  <link rel="stylesheet" href="{{URL::to('css/index.css')}}">
  <link rel="icon" href="{{URL::to('images/isotipo.png')}}">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.0.0/animate.min.css" />
</head>

<body>
  @guest
  <!--@include('partials.splash')  -->
  @endguest

  @include('partials.navbar')

  <div class="container-xl ">
    @yield('content')
  </div>


  @include('partials.default_js')

</body>

</html>