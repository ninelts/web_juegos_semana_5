

@extends('layouts.app')
@include('global.navbar')

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta name="keywords" content="steam,videojuegos,plataformas"/>
  <meta name="author" content="Claudio Villegas" />
  <meta name="copyright" content="Claudio villegas Propietario del copyright" />
  <title>VIDEOS</title>
  <link rel="stylesheet" href="./css/index.css">
</head>

<body>


@yield('navbar')
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
</body>
</html>