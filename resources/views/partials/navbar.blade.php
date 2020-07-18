<nav class="mb-1 navbar navbar-expand-lg navbar-dark navegacion">
    <!-- BRAND -->
    <a class="navbar-brand mb-0 h1" href="/">
        <img src="{{URL::to('images/isotipo_carrito.png')}}" width="30" height="30" class=" align-top" alt="">
        Go Store</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent-4"
        aria-controls="navbarSupportedContent-4" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>


    <div class="collapse navbar-collapse w-100  order-3 dual-collapse2" id="navbarSupportedContent-4">
        <!-- Items lado IZQUIERDO -->
        <ul class="navbar-nav mr-auto">
            @auth
            <li class="nav-item "">
                <a class=" nav-link" href="{{route('listaCompra.index')}}">{{__('Lista de compras')}}</a>
            </li>
            @endauth
        </ul>

        <!-- Items lado derecho-->
        <ul class="navbar-nav ml-auto">
            @guest
                <li class="nav-item"><a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a></li>
            @if (Route::has('register'))
                <li class="nav-item"><a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a></li>
            @endif
            @else
            <li class="nav-item dropdown">
                <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown"
                    aria-haspopup="true" aria-expanded="false" v-pre>
                    {{ Auth::user()->name }} <span class="caret"></span>
                </a>
                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                    <a class="dropdown-item" href="{{ route('logout') }}" onclick="event.preventDefault();
                                        document.getElementById('logout-form').submit();">
                        {{ __('Logout') }}
                    </a>
                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                        @csrf
                    </form>
                </div>
            </li>
            @endguest
        </ul>
    </div>
</nav>