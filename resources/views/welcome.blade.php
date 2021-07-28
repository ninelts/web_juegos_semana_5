@include('global.navbar')
<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Semana 5 </title>
        <link href="{{URL::asset('/css/index.css')}}" rel="stylesheet" >
        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@200;600&display=swap" rel="stylesheet">

        <!-- Styles -->
        <style>

        </style>
    </head>
    <body>
    @yield('navbar')
    <section class="section">
        <div class="container columns">

            <div class="column">
                <div class="card">
                    <div class="card-image">
                        <figure class="image is-4by2">
                            <img src="{{URL::asset('/img/steam_1.jpg')}}" alt="Placeholder image">
                        </figure>
                    </div>
                </div>

            </div>
            <div class="column">

                <h1 class="title">
                    STEAM
                </h1>
                <p class="subtitle">
                    Que es <strong>STEAM</strong>!
                </p>
                <div>
                    <p>
                        Steam es una plataforma de distribución digital de videojuegos desarrollada por Valve Corporation. Fue
                        lanzada
                        en septiembre de 2003 como una forma para Valve de proveer actualizaciones automáticas a sus juegos, pero
                        finalmente se amplió para incluir juegos que no son de Valve sino de terceros
                    </p>
                    <hr style="border: 1px solid;">
                    <div class="columns">

                        <div class="column"></div>
                        <div class="column">
                            <button  class="button  is-success is-large is-fullwidth">PAGINA OFICIAL</button>

                        </div>
                        <div class="column"></div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <hr class="container" style="border: 1px ;">

    <section class="section">
        <div class="container columns">

            <div class="column">

                <h1 class="title">
                    Únete a la Comunidad
                </h1>
                <div>
                    <p>
                        Conoce a nuevas personas, únete a grupos, forma clanes, chatea dentro de un juego, ¡y mucho más! Con más de
                        100 millones de posibles amigos (o enemigos), la diversión nunca acaba.
                    </p>
                    <hr style="border: 1px solid;">
                    <div class="columns">

                        <div class="column"></div>
                        <div class="column">

                        </div>
                        <div class="column"></div>
                    </div>
                </div>
            </div>

            <div class="column">
                <div class="card">
                    <div class="card-image">
                        <figure class="image is-4by2">
                            <img src="{{URL::asset('/img/steam_2.jpg')}}" alt="Placeholder image">
                        </figure>
                    </div>
                </div>

            </div>
        </div>
    </section>
    <footer class="footer">
        <div class="content has-text-centered">
            <p>
                <strong>Pagina creada</strong> por claudio villegas para la tarea de programacion web semana 1

            </p>
        </div>
    </footer>
    </body>
</html>
