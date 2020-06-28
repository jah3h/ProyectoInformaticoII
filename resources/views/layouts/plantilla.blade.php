<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>GoStore</title>
  @include('partials.default_css')
  <link rel="stylesheet" href="{{URL::to('css/index.css')}}">
</head>

<body>
  @guest
    @include('partials.splash')    
  @endguest
  
  @include('partials.navbar')
  
    <div class="container ">
      @yield('content')
    </div>

  @include('partials.default_js')
  <script src="{{URL::to('js/index.js')}}"></script>
</body>

</html>