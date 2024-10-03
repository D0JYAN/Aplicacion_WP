<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!--CDN Bootstrap-->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <!--JS Bootstrap-->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
    <!--Manifiesto-->
    <link rel="manifest" href="manifest.json">
    <!--Estilos-->
    <link rel="stylesheet" href="css/estilo_001.css">
    <!--Servicio-->
    <script src="serviceworker.js"></script>

    <title>Home</title>
</head>

<body>
    <?php
    include("navbar.php");
    ?>

    <div class="container-fluid">

        <div id="carouselExampleIndicators" class="carousel slide">
            <div class="carousel-indicators">
                <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
                <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1" aria-label="Slide 2"></button>
                <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2" aria-label="Slide 3"></button>
            </div>
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <img src="img/img_001.webp" class="d-block w-100" alt="...">
                </div>
                <div class="carousel-item">
                    <img src="img/img_004.webp" class="d-block w-100" alt="...">
                </div>
                <div class="carousel-item">
                    <img src="img/img_005.webp" class="d-block w-100" alt="...">
                </div>
            </div>
            <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Previous</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Next</span>
            </button>
        </div>

    </div>

    <div class="container-fluid text-center">
        <div class="row">
            <div class="col">
                <div class="card">
                    <img src="img/img_002.webp" class="card-img-top">
                    <div class="card-body">
                        <p class="card-text">
                            Valve (los creadores de Counter-Strike, Half-Life y otros) presenta Left 4 Dead, una nueva aventura cooperativa de acción y
                            terror para PC y Xbox 360, que coloca a cuatro jugadores en una épica batalla por la supervivencia contra aterradoras hordas de zombis y monstruos
                            mutantes.
                        </p>
                        <a href="https://store.steampowered.com/app/500/Left_4_Dead/" class="btn btn-success">Donde Comprar</a>
                    </div>
                </div>
            </div>
            <div class="col">
                <div class="card">
                    <img src="img/img_003.webp" class="card-img-top">
                    <div class="card-body">
                        <p class="card-text">
                            Ambientado en el apocalipsis zombi, Left 4 Dead 2 (L4D2) es la esperadísima secuela del galardonado Left 4 Dead, el juego cooperativo número 1 de 2008.
                            Este FPS cooperativo de acción terrorífica lleva a tus amigos y a ti a través de ciudades, pantanos y cementerios del Profundo Sur de EE. UU.
                        </p>
                        <a href="https://store.steampowered.com/app/550/Left_4_Dead_2/" class="btn btn-success">Donde Comprar</a>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <?php
    include("footer.php");
    ?>
</body>

</html>

<script>
    window.addEventListener('load', () => {
        registerSW();
    });

    // Register the Service Worker
    async function registerSW() {
        if ('serviceWorker' in navigator) {
            try {
                await navigator
                    .serviceWorker
                    .register('serviceworker.js');
            } catch (e) {
                console.log('Error en el registro del SW');
            }
        }
    }
</script>