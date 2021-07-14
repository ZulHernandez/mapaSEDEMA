<html>

<head>
    <title>
        Inicio| Áreas Naturales Protegidas
    </title>
    <link href="assets/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="assets/dist/js/bootstrap.bundle.min.js"></script>
    <script src="assets/dist/js/p5.js" type="text/javascript"></script>
    <script src="assets/js/mapaHome.js" type="text/javascript"></script>
    <script src="assets/js/covid.js" type="text/javascript"></script>
    <link rel="stylesheet" href="assets/css/gStyle.css">
    <link rel="shortcut icon" href="src/imgs/iconos/icon.svg" type="image/x-icon">
</head>

<!--onLoad function only accept 4 values: rojo, naranja, amarillo, verde-->
<body onload="colorHome('amarillo');">
    <nav class="navbar navbar-expand-lg navbar-dark" style="background-color: #0f4c42;">
        <div class="container">
            <a class="navbar-brand" href="#"><img src="src/imgs/headIcon.svg"></a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#menu" aria-controls="menu" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse text-goth" id="menu">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="#">INICIO</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="assets/pages/anp.php">ANP</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">ACCIONES</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">GALERÍA</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">CONTACTO</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
    <div id="carouselExampleIndicators" class="carousel slide" data-bs-ride="carousel">
        <div class="carousel-indicators">
            <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
            <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1" aria-label="Slide 2"></button>
            <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2" aria-label="Slide 3"></button>
            <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="3" aria-label="Slide 4"></button>
        </div>
        <div class="carousel-inner">
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <img src="src/imgs/home/a.jpg" class="d-block w-100" alt="...">
                </div>
                <div class="carousel-item">
                    <img src="src/imgs/home/b.jpg" class="d-block w-100" alt="...">
                </div>
                <div class="carousel-item">
                    <img src="src/imgs/home/c.jpg" class="d-block w-100" alt="...">
                </div>
                <div class="carousel-item">
                    <img src="src/imgs/home/d.jpg" class="d-block w-100" alt="...">
                </div>
            </div>
        </div>
    </div>
    <a href="assets/pages/covid.php" style="text-decoration: none;"><div id="divCov" class="div-cov text-center text-source" onmouseover="covHover()" onmouseout="covOut()">
        COVID-19 y tu visita a las Áreas Naturales Protegidas de la Ciudad de México
    </div></a>
    <div class="space"></div>
    <div class="container container-body">
        <h1>ÁREAS NATURALES PROTEGIDAS</h1>
        <p class="sub-sub">DE LA CIUDAD DE MÉXICO</p>
        <br />
        <p class="text-para">Cuando se habla de la Ciudad de México se piensa en una gigantesca plancha de asfalto conformada por avenidas, grandes edificios y parques urbanos olvidando por un momento la existencia de espacios naturales decretados como <b>Áreas Naturales Protegidas</b> que aún conservan especies de flora y fauna representativas de la Cuenca de México y son de vital importancia debido a que brindan servicios ecosistémicos a todos los seres vivos, en especial a los seres humanos.</p>
        <br />
        <p class="text-para">Actualmente, en la ciudad existen 25 Áreas Naturales Protegidas que abarcan 21,047.01 hectáreas. <b>La Secretaría del Medio Ambiente coordina 15 de ellas</b>, algunas en coadministración con la Comisión Nacional de Áreas Naturales Protegidas (CONANP), así como alcaldías de la capital.</p>
        <div class="space"></div>
        <div class="container container-element">
            <h4 style="text-align: center;">Áreas Naturales Protegidas de la Ciudad de México administradas por SEDEMA</h4>
            <br />
            <div class="row">
                <div class="col-sm-7">
                    <div id="mapa"></div>
                </div>
                <div class="col-sm-5">
                    <ol type="1" style="padding-left: 50px;">
                        <b>
                            <a href="assets/pages/sitios/armella.php" target="_self"><li class="anpName">La Armella</li></a>
                            <a href="assets/pages/sitios/sierraG.php" target="_self"><li class="anpName">Sierra de Guadalupe</li></a>
                            <a href="assets/pages/sitios/bosqueL.php" target="_self"><li class="anpName">Bosque de las Lomas</li></a>
                            <a href="assets/pages/sitios/loma.php" target="_self"><li class="anpName">La Loma</li></a>
                            <a href="assets/pages/sitios/insurgente.php" target="_self"><li class="anpName">Insurgente Miguel Hidalgo y Costilla</></a>
                            <a href="assets/pages/sitios/desierto.php" target="_self"><li class="anpName">Desierto de los leones</li></a>
                            <li class="anpName">San Bernabe Ocotepec</li>
                            <li class="anpName">San Nicolás Totolapan</li>
                            <a href="assets/pages/sitios/pCDMX.php" target="_self"><li class="anpName">Parque Ecológico de la Ciudad de México</li></a>
                            <a href="assets/pages/sitios/bosqueT.php" target="_self"><li class="anpName">Bosque de Tlalpan</li></a>
                            <a href="assets/pages/sitios/ecoguardas.php" target="_self"><li class="anpName">Ecoguardas</li></a>
                            <a href="assets/pages/sitios/ejidosX.php" target="_self"><li class="anpName">Ejidos de Xochimilco y San Gregorio Atlapulco</li></a>
                            <li class="anpName">Tempiluli</li>
                            <a href="assets/pages/sitios/sierraS.php" target="_self"><li class="anpName">Sierra de Santa Catarina</li></a>
                            <li class="anpName">Cerro de la Estrella</li>
                        </b>
                    </ol>
                </div>
            </div>
            <div class="space"></div>
        </div>
        <div class="inv-card" style="background-image: url(src/imgs/home/ayCon.png);">
            <div class="row inv-card">
                <div class="col-lg-7"></div>
                <div class="col-lg col-green">
                    <div class="col-text">
                        <p class="text-inv-card">¡Ayúdanos a <b style="color: white; font-size: 3vw; margin-bottom: 50px;">CONSERVAR!</b></p>
                    </div>
                </div>
            </div>
        </div>
        <div class="space"></div>
        <h2>Conoce más áreas verdes de la ciudad</h2>
        <br />
        <div class="row">
            <div class="col-lg" style="padding: 0px;"><img class="img-fluid" src="src/imgs/home/canNac.png"></div>
            <div class="col-lg-1" style="padding: 0px;"></div>
            <div class="col-lg" style="padding: 0px;"><img class="img-fluid" src="src/imgs/home/barranca.png"></div>
        </div>
        <div class="row">
            <div class="col-lg col-green">
                <div class="col-text" style="padding-top: 0px;">
                    <br />
                    <p class="text-inv-card" style="text-align: center;">Canal Nacional</p>
                </div>
            </div>
            <div class="col-lg-1" style="padding: 0px;"></div>
            <div class="col-green col-lg">
                <div class="col-text" style="padding-top: 0px;">
                    <br />
                    <p class="text-inv-card" style="text-align: center; line-height: 1.75vw;">Áreas de Valor Ambiental con Categoría de Barranca</p>
                </div>
            </div>
        </div>
        <div class="space"></div>
    </div>
    <nav style="background-color: #0f4c42;">
        <div class="container">
            <br /><br />
            <div class="row">
                <div class="col-sm-1"></div>
                <div class="col-sm-6" style="color: white;">
                    <p><b style="color: white;">Dirección General del Sistema de Áreas Naturales Protegidas y Áreas de Valor Ambiental</b></p>
                    <p style="line-height: 5px;">Ubicación:</p>
                    <a style="color: white;" href="https://www.google.com/maps/place/Gran+Avenida,+Bosque+de+Chapultepec+I+Secc,+11100+Ciudad+de+M%C3%A9xico,+CDMX/@19.4166948,-99.1887763,18z/data=!3m1!4b1!4m5!3m4!1s0x85d1ff574c8f4a77:0x96bdf28cb411c96f!8m2!3d19.416693!4d-99.1879798" target="_blank">
                        <p>Gran Avenida, Lomas de Chapultepec, Primera Sección, Miguel Hidalgo, C.P. 11000, Ciudad de México.</p>
                    </a>
                </div>
                <div class="col-sm-1"></div>
                <div class="col-sm-3">
                    <p><b style="color: white;">Navegación</b></p>
                    <ul class="navbar-nav me-auto mb-2 mb-lg-0" style="line-height: 10px;">
                        <li class="nav-item">
                            <a class="nav-link active" aria-current="page" href="#" style="color: white;">INICIO</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="assets/pages/anp.php" style="color: white;">ANP</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#" style="color: white;">ACCIONES</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#" style="color: white;">GALERÍA</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#" style="color: white;">CONTACTO</a>
                        </li>
                    </ul>
                </div>
                <div class="col-sm-1"></div>
            </div>
            <br />
        </div>
    </nav>
</body>

</html>