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
<div class="columns">
<div class="column  is-hidden-touch">
 <aside class="menu section">
        <p class="menu-label">
          VideoJuegos Populares
        </p>
        <ul class="menu-list">
          <li><a href="https://store.steampowered.com/app/346110/ARK_Survival_Evolved/">Ark</a></li>
          <li><a href="https://store.steampowered.com/app/252490/Rust/">Rust</a></li>
          <li><a href="https://store.steampowered.com/app/221100/DayZ/">Day Z</a></li>
        </ul>
        <p class="menu-label">
          Otras Plataformas
        </p>
        <ul class="menu-list">
          <li><a href="https://www.origin.com/chl/es-es/store">Origins</a></li>
          <li><a href="https://www.epicgames.com/store/es-ES/">Epic Games</a></li>
          <li><a href="https://ubisoftconnect.com/en-US/">Uplay</a></li>
        </ul>

      </aside>
</div>
<div class="column">
  <section class="section">
                         <div class="columns container is-hidden-desktop">
                    <div class="column is-half ">
                        <figure class="image is-16by8">
                            <iframe width="280" height="215" src="https://www.youtube.com/embed/f3p52zyKYBo"
                                title="YouTube video player" frameborder="0"
                                allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture"
                                allowfullscreen></iframe>
                        </figure>
                    </div>
                    <div class="column">
                        <figure class="image is-16by8">
                            <iframe width="280" height="215" src="https://www.youtube.com/embed/C2R6uQAorMg"
                                title="YouTube video player" frameborder="0" allow="acceleromis-desktop" eter; autoplay;
                                clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                        </figure>
        
                    </div>
                </div>
        <div class="columns  is-hidden-touch ">
            <div class="column">
                <h5 class="title has-text-centered">VIDEOS</h5>
        
                <div class="columns">
                    <div class="column">
                        <figure class="image is-16by8">
                            <iframe width="500" height="315" src="https://www.youtube.com/embed/f3p52zyKYBo"
                                title="YouTube video player" frameborder="0"
                                allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture"
                                allowfullscreen></iframe>
                        </figure>
                    </div>
                    <div class="column">
                        <figure class="image is-16by8">
                            <iframe width="500" height="315" src="https://www.youtube.com/embed/C2R6uQAorMg"
                                title="YouTube video player" frameborder="0" allow="acceleromis-desktop" eter; autoplay;
                                clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                        </figure>
        
                    </div>
                </div>
            </div>
        </div>
        </section>
</div>
    </div>
   
  
        
        <footer class="footer">
            <div class="content has-text-centered">
                <p>
                    <strong>Pagina creada</strong> por claudio villegas para la tarea de programacion web semana 1
        
                </p>
            </div>
        </footer>
        
        </body>
        
        </html>