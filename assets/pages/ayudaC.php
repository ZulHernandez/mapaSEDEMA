<html>

<head>
    <title>
        ¡Ayudanos a Conservar!
    </title>
    <link href="../../assets/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="../../assets/dist/js/bootstrap.bundle.min.js"></script>
    <script src="//cdn.jsdelivr.net/npm/sweetalert2@10"></script>
    <script type="text/javascript" src="../../assets/json/card.js"></script>
    <script type="text/javascript" src="../../assets/js/ayudaC.js"></script>
    <script src="../../assets/dist/js/p5.js" type="text/javascript"></script>
    <link rel="stylesheet" href="../../assets/css/gStyle.css">
    <link rel="stylesheet" href="../../assets/css/ayuStyle.css">
    <link rel="shortcut icon" href="../../src/imgs/iconos/icon.svg" type="image/x-icon">
</head>

<body>
    <nav class="navbar navbar-expand-lg navbar-dark" style="background-color: #0f4c42;">
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
                        <a class="nav-link" href="anp.php" >ANP</a>
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
    <div class="container-fluid hero" style="padding: 0px;">
        <div class="row">
            <div class="col-4 grid-img-3" style="border-width: 0px;">
                <div class="row">
                    <div onclick="fireSwal(0)" class="col grid-img-2" style="background-image: url(../../src/imgs/ayu/1.jpg);">
                    </div>
                </div>
                <div class="row">
                    <div onclick="fireSwal(1)" class="col grid-img-1" style="background-image: url(../../src/imgs/ayu/2.jpg);">
                    </div>
                    <div onclick="fireSwal(2)" class="col grid-img-1" style="background-image: url(../../src/imgs/ayu/3.jpg);">
                    </div>
                </div>
            </div>
            <div onclick="fireSwal(3)" class="col-8 grid-img-3" style="background-image: url(../../src/imgs/ayu/4.jpg);">
            </div>
        </div>
    </div>
    <div class="space"></div>
    <div class="container container-body">
        <h1>¡AYUDANOS A CONSERVAR!</h1>
        <p class="text-goth sub-sub">Todos cuidamos las Áreas Naturales Protegidas</p>
        <br>
        <p class="text-para">Usualmente las Áreas Naturales Protegidas de la ciudad suelen ser confundidas con Parques Urbanos, donde las comunidades cercanas y visitantes al no identificar dicha diferencia y desconocer su importancia realizan actividades no permitidas que ponen en riesgo su protección y conservación.</p>
        <p class="text-para">El deterioro de espacios naturales representa la pérdida de biodiversidad, ya que, las Áreas Naturales Protegidas son el hábitat de especies de flora y fauna endémicas, nativas y otras categorizadas en la <b>NOM-059-SEMARNAT-2010</b> que contribuyen a la captación de agua de lluvia, captura de carbono, purificación del aire, generación de suelo y regulación del clima.</p>
        <p class="text-para">Por lo que, es importante que al visitar estos espacios sigas el siguiente reglamento, donde queda prohibido:</p>
        <div class="space"></div>
        <div class="container container-element">
            <div class="row">
                <div class="col-sm">
                    <center>
                        <img src="../../src/imgs/ayu/1.svg" class="img-ind"><br /><br />
                        <img src="../../src/imgs/ayu/2.svg" class="img-ind"><br /><br />
                        <img src="../../src/imgs/ayu/3.svg" class="img-ind"><br /><br />
                        <img src="../../src/imgs/ayu/4.svg" class="img-ind"><br /><br />
                        <img src="../../src/imgs/ayu/5.svg" class="img-ind"><br /><br />
                        <img src="../../src/imgs/ayu/6.svg" class="img-ind"><br /><br />
                        <img src="../../src/imgs/ayu/7.svg" class="img-ind"><br /><br />
                        <img src="../../src/imgs/ayu/8.svg" class="img-ind">
                    </center>
                </div>
                <div class="col-sm-9">
                    <br />
                    <p class="text-para">El uso de cubrebocas o mascarilla es indispensable.</p><br /><br /><br />
                    <p class="text-para">No utilices los aparatos de ejercicios y las áreas de juegos infantiles.</p><br /><br />
                    <p class="text-para">Mantén sana distancia; (no saludes de mano y/o beso, y mantén 1.5 metrosde distancia entre personas).</p><br /><br />
                    <p class="text-para">Ejercítate y camina de manera individual, no participes en actividades o deportes organizados.</p><br /><br />
                    <p class="text-para">Usa el estornudo de etiqueta y no escupas.</p><br /><br /><br />
                    <p class="text-para">Evita tirar guantes, cubrebocas y otros artículos de protección sanitaria en los contenedores de basura.</p><br /><br />
                    <p class="text-para">Recuerda las medidas de salud al regresar a casa y mantente informado. </p><br /><br />
                    <p class="text-para" style="text-decoration: underline;">Recomendación</p>
                    <p class="text-para">Transita por los caminos señalados y respeta los horarios de visita.</p>
                </div>
            </div>
        </div>
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
        <div class="space"></div>
        <h2 class="text-goth">¿Quieres ser voluntario?</h2>
        <br />
        <p class="text-para">Regístrate aquí para formar parte de nuestras actividades dedicadas a la conservación de las Áreas Naturales Protegidas de la Ciudad de México</p>
        <br />
        <form>
            <div class="row">
                <div class="col-3">
                    <input class="input-text" type="text" placeholder="Nombre">
                </div>
                <div class="col-3">
                    <input class="input-text" type="email" placeholder="E-Mail">
                </div>
                <div class="col-3">
                    <input class="input-text" type="tel" placeholder="Teléfono">
                </div>
                <div class="col-3">
                    <input class="boton" type="submit">
                </div>
            </div>
        </form>
    </div>
    <div class="space"></div>
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
                            <a class="nav-link" href="../../index.php" style="color: white;">INICIO</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="anp.php" style="color: white;">ANP</a>
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