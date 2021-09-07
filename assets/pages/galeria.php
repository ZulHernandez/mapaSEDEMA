<html>

<head>
    <title>
        Pronto habrá contenido
    </title>
    <link href="../../assets/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="../../assets/dist/js/bootstrap.bundle.min.js"></script>
    <script src="//cdn.jsdelivr.net/npm/sweetalert2@10"></script>
    <script src="../../assets/dist/js/p5.js" type="text/javascript"></script>
    <script type="text/javascript" src="../../../assets/json/card.js"></script>
        <script type="text/javascript" src="../../../assets/js/sitios/tarjetas.js"></script>
    <link rel="stylesheet" href="../../assets/css/gStyle.css">
    <link rel="shortcut icon" href="../../src/imgs/iconos/icon.svg" type="image/x-icon">
</head>

<body>
    <nav class="navbar navbar-expand-lg navbar-dark" style="background-color: #410d1c;">
        <div class="container">
            <a class="navbar-brand" href="../../index.php"><img src="../../src/imgs/headIcon.svg"></a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#menu" aria-controls="menu" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse text-goth" id="menu">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                    <li class="nav-item">
                        <a class="nav-link" href="../../index.php">INICIO</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="anp.php">ANP</a>
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
    <div class="space"></div>
    <div class="container-lg container-fluid container-body">
        <h1 class="text-goth">Galería</h1>
        <p class="text-goth sub-sub">Sección</p>
        <br />
        <p class="text-para">Descripción​.</b></p>
        <br />
        <div class="row">
            <div onclick="fireSwaltar('Eco',0)" class="col-5 grid-img-3" style="background-image: url(../../../src/imgs/sitios/ecoguardas/1.jpg);">
            </div>
            <div onclick="fireSwaltar('Eco',1)" class="col-7 grid-img-3" style="background-image: url(../../../src/imgs/sitios/ecoguardas/2.jpg);">
            </div>
        </div>
        <div class="row">
            <div onclick="fireSwaltar('Eco',2)" class="col-7 grid-img-3" style="background-image: url(../../../src/imgs/sitios/ecoguardas/3.jpg);">
            </div>
            <div onclick="fireSwaltar('Eco',3)" class="col-5 grid-img-3" style="background-image: url(../../../src/imgs/sitios/ecoguardas/4.jpg);">
            </div>
        </div>
        <div class="space"></div>
        <div class="space"></div>
        <template id="my-template">
            <swal-html>
                <div class="place-card" id="c-img">
                    <div class="row text-front">
                        <div class="col-lg-8" style="height: 80vh; background-position: top;"></div>
                        <div class="col-lg col-white" style="padding-bottom: 90px;">
                            <div class="col-text" style="padding-top: 0px;">
                                <h2 class="text-title" id="c-tit"></h2><br />
                                <p class="text-normal" id="c-desc"></p>
                            </div>
                        </div>
                    </div>
                </div>
            </swal-html>
        </template>
    </div>
    <div class="container-lg container-fluid container-body">
        <p class="text-goth sub-sub">Sección</p>
        <br />
        <p class="text-para">Descripción​.</b></p>
        <br />
        <div class="row">
            <div onclick="fireSwaltar('Eco',0)" class="col-5 grid-img-3" style="background-image: url(../../../src/imgs/sitios/ecoguardas/1.jpg);">
            </div>
            <div onclick="fireSwaltar('Eco',1)" class="col-7 grid-img-3" style="background-image: url(../../../src/imgs/sitios/ecoguardas/2.jpg);">
            </div>
        </div>
        <div class="row">
            <div onclick="fireSwaltar('Eco',2)" class="col-7 grid-img-3" style="background-image: url(../../../src/imgs/sitios/ecoguardas/3.jpg);">
            </div>
            <div onclick="fireSwaltar('Eco',3)" class="col-5 grid-img-3" style="background-image: url(../../../src/imgs/sitios/ecoguardas/4.jpg);">
            </div>
        </div>
        <div class="space"></div>
        <div class="space"></div>
        <template id="my-template">
            <swal-html>
                <div class="place-card" id="c-img">
                    <div class="row text-front">
                        <div class="col-lg-8" style="height: 80vh; background-position: top;"></div>
                        <div class="col-lg col-white" style="padding-bottom: 90px;">
                            <div class="col-text" style="padding-top: 0px;">
                                <h2 class="text-title" id="c-tit"></h2><br />
                                <p class="text-normal" id="c-desc"></p>
                            </div>
                        </div>
                    </div>
                </div>
            </swal-html>
        </template>
    </div>
    <nav style="background-color: #410d1c;">
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
                            <a class="nav-link" href="../../index.php" style="color: white;">INICIO</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link active" aria-current="page" href="#" style="color: white;">ANP</a>
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