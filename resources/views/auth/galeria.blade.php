@extends('layouts.app')
@include('global.navbar_auth')



@yield('navbar')

@section('content')

    <div>
        <section class="section">
            <h1 class="title has-text-centered">
                Galeria
            </h1>
            <div class="columns is-multiline">
                <div class="column is-one-quarter-desktop is-half-tablet">
                    <div class="card">
                        <div class="card-image">
                            <figure class="image is-3by2">
                                <img src="{{asset('/img/juego_1.jpg')}}" alt="">
                            </figure>
                            <div class="card-content is-overlay is-clipped">
                            <span class="tag is-info">
                              Survival
                            </span>
                            </div>
                        </div>

                    </div>
                </div>
                <div class="column is-one-quarter-desktop is-half-tablet">
                    <div class="card">
                        <div class="card-image">
                            <figure class="image is-3by2">
                                <img src="{{asset('/img/juego_2.jpg')}}" alt="">
                            </figure>
                            <div class="card-content is-overlay is-clipped">
            <span class="tag is-info">
              Survival
            </span>
                            </div>
                        </div>

                    </div>
                </div>
                <div class="column is-one-quarter-desktop is-half-tablet">
                    <div class="card">
                        <div class="card-image">
                            <figure class="image is-3by2">
                                <img src="{{asset('/img/juego_3.jpg')}}" alt="">
                            </figure>
                            <div class="card-content is-overlay is-clipped">
            <span class="tag is-info">
              Shooter , Fps
            </span>
                            </div>
                        </div>

                    </div>
                </div>
                <div class="column is-one-quarter-desktop is-half-tablet">
                    <div class="card">
                        <div class="card-image">
                            <figure class="image is-3by2">
                                <img src="{{asset('/img/juego_4.jpg')}}" alt="">
                            </figure>
                            <div class="card-content is-overlay is-clipped">
            <span class="tag is-info">
              Shooter , Fps
            </span>
                            </div>
                        </div>

                    </div>
                </div>
                <div class="column is-one-quarter-desktop is-half-tablet">
                    <div class="card">
                        <div class="card-image">
                            <figure class="image is-3by2">
                                <img src="{{asset('/img/juego_5.jpg')}}" alt="">
                            </figure>
                            <div class="card-content is-overlay is-clipped">
            <span class="tag is-info">
              Shooter , Fps
            </span>
                            </div>
                        </div>

                    </div>
                </div>
                <div class="column is-one-quarter-desktop is-half-tablet">
                    <div class="card">
                        <div class="card-image">
                            <figure class="image is-3by2">
                                <img src="{{asset('/img/juego_6.jpg')}}" alt="">
                            </figure>
                            <div class="card-content is-overlay is-clipped">
            <span class="tag is-info">
              Fps , Survival
            </span>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="column is-one-quarter-desktop is-half-tablet">
                    <div class="card">
                        <div class="card-image">
                            <figure class="image is-3by2">
                                <img src="{{asset('/img/juego_7.jpg')}}" alt="">
                            </figure>
                            <div class="card-content is-overlay is-clipped">
            <span class="tag is-info">
              Shooter , Terror
            </span>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="column is-one-quarter-desktop is-half-tablet">
                    <div class="card">
                        <div class="card-image">
                            <figure class="image is-3by2">
                                <img src="{{asset('/img/juego_8.jpg')}}" alt="">
                            </figure>
                            <div class="card-content is-overlay is-clipped">
            <span class="tag is-info">
              Fps , Zombies
            </span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <h1 class="title has-text-centered">
            Comentarios
        </h1>
        <div class="section">
            <div class="mb-6">
                <h4 class="has-text-centered mb-1">
                    Ingresar Comentario
                </h4>
                <div class="control">
                    <form id="formulario_comentarios" action="{!! route('auth.guardar_comentario') !!}" method="POST">
                        @csrf
                        <textarea id="comentario" name="comentario" class="textarea" placeholder="INGRESAR COMENTARIO AQUI"></textarea>
                        <div class="text-center mt-4">

                            <input id="enviar" class="button is-primary" type="submit"  value="Guardar Comentario" />
                        </div>
                    </form>


                </div>
            </div>
            @foreach($comentarios as $comentario)
                <div class="card-footer">
                    <div class="card-footer-item media">
                        <div class="media-left">
                            <figure class="image is-48x48">
                                <img src="{{ asset('/storage/'. $comentario->usuario->file_path)}} " alt="Placeholder image">
                            </figure>
                        </div>
                        <div class="media-content">
                            <p class="title is-4">@ {{$comentario->usuario->name}}</p>
                            <p class="subtitle is-6">{{$comentario->fecha_comentario}}</p>
                        </div>
                    </div>

                    <div class="is-centered card-footer-item">
                        {{$comentario->comentarios}}
                    </div>
                    <div class="card-footer-item">
                    </div>
                </div>

            <hr>
                @endforeach
        </div>
    </div>




@endsection



