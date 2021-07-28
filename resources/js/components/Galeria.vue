<template>
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
                            <img :src="'/img/juego_1.jpg'" alt="">
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
                            <img :src="'/img/juego_2.jpg'" alt="">
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
                            <img :src="'/img/juego_3.jpg'" alt="">
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
                            <img :src="'/img/juego_4.jpg'" alt="">
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
                            <img :src="'/img/juego_5.jpg'" alt="">
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
                            <img :src="'/img/juego_6.jpg'" alt="">
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
                            <img :src="'/img/juego_7.jpg'" alt="">
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
                            <img :src="'/img/juego_8.jpg'" alt="">
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
                <textarea class="textarea" placeholder="INGRESAR COMENTARIO AQUI"></textarea>
            </div>
        </div>

        <article class="message">
            <div class="message-header">
                <p>Hello World</p>
            </div>
            <div class="message-body">
                Lorem ipsum dolor sit amet, consectetur adipiscing elit. <strong>Pellentesque risus mi</strong>, tempus quis placerat ut, porta nec nulla. Vestibulum rhoncus ac ex sit amet fringilla. Nullam gravida purus diam, et dictum <a>felis venenatis</a> efficitur. Aenean ac <em>eleifend lacus</em>, in mollis lectus. Donec sodales, arcu et sollicitudin porttitor, tortor urna tempor ligula, id porttitor mi magna a neque. Donec dui urna, vehicula et sem eget, facilisis sodales sem.
            </div>
        </article>
        <hr>
    </div>
</div>
</template>

<script>
export default {
    name: "Galeria"
}
</script>

<style scoped>

</style>