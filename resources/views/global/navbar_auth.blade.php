
@section('navbar')
    <header>
        <nav style="background-color:whitesmoke !important;" class="navbar" role="navigation" aria-label="main navigation">
            <div class="navbar-menu">
                <a class="navbar-item" href="{{route('home')}}">
                    <img src="{{URL::asset('/img/logo.png')}}">
                </a>


            </div>

            <div id="navbarBasicExample" class="navbar-end">
                <div class="navbar-start">


                        <a href="{{route('auth.galeria')}}" class="navbar-item">
                            <strong>Galeria</strong>
                        </a>


                            <a href="{{route('auth.perfil')}}" class="navbar-item">
                                <strong>Mi Perfil</strong>
                            </a>
                </div>
                    <div class="navbar-item">
                        <div class="buttons">
                            <a href="{{route('auth.salir')}}" class="button is-danger is-rounded">
                                <strong>Salir</strong>
                            </a>
                        </div>
                    </div>
            </div>


        </nav>
    </header>
@endsection
