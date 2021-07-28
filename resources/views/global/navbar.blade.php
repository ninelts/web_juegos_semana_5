
@section('navbar')
<header>
    <nav style="background-color:whitesmoke !important;" class="navbar" role="navigation" aria-label="main navigation">
        <div class="navbar-menu">
            <a class="navbar-item" href="./index.html">
                <img src="{{URL::asset('/img/logo.png')}}">
            </a>


        </div>

        <div id="navbarBasicExample" class="navbar-end">
            <div class="navbar-start">
                <a href="{{route('guest.home')}}" class="navbar-item">
                    Inicio
                </a>
                <a href="{{route('guest.videos')}}" class="navbar-item">
                    Videos
                </a>
                <a href="{{route('guest.images')}}" class="navbar-item">
                    Imagenes
                </a>
                <a href="{{route('guest.games')}}" class="navbar-item">
                    Juegos
                </a>

            </div>
            <div class="navbar-end">
                <div class="navbar-item">
                    <div class="buttons">
                        <a href="{{route('register')}}" class="button is-primary">
                            <strong>Registro</strong>
                        </a>
                    </div>
                </div>
                <div class="navbar-item">
                    <div class="buttons">
                        <a href="{{route('login')}}" class="button is-primary">
                            <strong>Login</strong>
                        </a>
                    </div>
                </div>
            </div>


        </div>
    </nav>
</header>
@endsection