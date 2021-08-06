<html>

<head>
    <title>
        Aviso COVID-19
    </title>
    <link href="../dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="../dist/js/bootstrap.bundle.min.js"></script>
    <script src="//cdn.jsdelivr.net/npm/sweetalert2@10"></script>
    <script src="../dist/js/p5.js" type="text/javascript"></script>
    <link rel="stylesheet" href="../css/gStyle.css">
    <link rel="stylesheet" href="../css/covStyle.css">
    <link rel="shortcut icon" href="../../src/imgs/iconos/icon.svg" type="image/x-icon">
    <script src="../js/covid.js" type="text/javascript"></script>
</head>

<!--onLoad function only accept 4 values: rojo, naranja, amarillo, verde-->
<body onload="color('amarillo');">
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
    <div class="container-fluid" style="padding: 0px;">
        <div class="row">
            <div class="col-5">
                <div class="space"></div>
                <div class="row" style="padding: 0px 5vw;">
                    <div class="col" style="background-color: #b4b4b4; border-radius: 10px;">
                        <span id="rojo" class="dot"></span>
                        <span id="naranja" class="dot"></span>
                        <span id="amarillo" class="dot"></span>
                        <span id="verde" class="dot"></span>
                    </div>
                    <div class="col"></div>
                    <div class="col-10">
                        <br />
                        <h2 style="font-size: 1.8vw; line-height: 2px;">ESTAMOS EN SEMÁFORO</h2>
                        <h1><p id="colorName"></p></h1>
                        <p class="text-goth sub-sub" style="font-size: 1.1vw; font-weight: bold;">NO BAJES LA GUARDIA, USA CUBREBOCAS</p>
                    </div>
                </div>
                <div class="space"></div>
            </div>
            <div class="col-7" id="col-color">
                <div class="space"></div>
                <center>
                    <h2 style="font-size: 2.5vw; font-weight: lighter;">SIGUE LAS REGLAS DE LA</h2>
                    <h1>NUEVA NORMALIDAD</h1>
                </center>
                <div class="space"></div>
            </div>
        </div>
    </div>
    <div class="space"></div>
    <div class="container-lg container-fluid container-body">
        <h1 class="text-goth">INFORMACIÓN IMPORTANTE</h1>
        <p class="text-goth sub-sub">SOBRE TU VISITA A LAS ÁREAS NATURALES PROTEGIDAS</p>
        <br />
        <p class="text-para">Comprometidos con la salud y seguridad de usuarios y equipos de trabajo de las Áreas Naturales Protegidas, <b>te invitamos a tomar las siguientes medidas</b> establecidas por el semáforo epidemiológico del Plan Gradual hacia la Nueva Normalidad de la Ciudad de México COVID-19 en tu visita: </p>
        <br />
        <div class="container container-element">
            <div class="row">
                <div class="col-sm">
                    <center>
                        <img onmouseover="imgHover(1)" onmouseout="imgOut(1)" src="../../src/imgs/covid/1.svg" class="img-ind"><br /><br />
                        <img onmouseover="imgHover(2)" onmouseout="imgOut(2)" src="../../src/imgs/covid/2.svg" class="img-ind"><br /><br />
                        <img onmouseover="imgHover(3)" onmouseout="imgOut(3)" src="../../src/imgs/covid/3.svg" class="img-ind"><br /><br />
                        <img onmouseover="imgHover(4)" onmouseout="imgOut(4)" src="../../src/imgs/covid/4.svg" class="img-ind"><br /><br />
                        <img onmouseover="imgHover(5)" onmouseout="imgOut(5)" src="../../src/imgs/covid/5.svg" class="img-ind"><br /><br />
                        <img onmouseover="imgHover(6)" onmouseout="imgOut(6)" src="../../src/imgs/covid/6.svg" class="img-ind"><br /><br />
                        <img onmouseover="imgHover(7)" onmouseout="imgOut(7)" src="../../src/imgs/covid/7.svg" class="img-ind">
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
                    <p class="text-para">Recuerda las medidas de salud al regresar a casa y mantente informado. </p>
                </div>
            </div>
        </div>
        <div class="space"></div>
        <h2 class="text-goth">Consulta los horarios de visita</h2>
        <p class="text-goth sub-sub">en las Áreas Naturales Protegidas de la Ciudad de México</p>
        <br />
        <div class="table-responsive">
            <table class="table table-striped table-bordered">
                <thead>
                    <tr id="tab-head" class="tab-head text-goth">
                        <th scope="col">No°</th>
                        <th scope="col">ANP</th>
                        <th scope="col">Lugares</th>
                        <th scope="col">Horarios</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <th scope="row">1</th>
                        <td>Cerro de la Estrella</td>
                        <td>&nbsp;</td>
                        <td>7 a 15 hrs.</td>
                    </tr>
                    <tr>
                        <th scope="row">2</th>
                        <td>Bosque de Tlalpan</td>
                        <td>&nbsp;</td>
                        <td>5 a 17 hrs.</td>
                    </tr>
                    <tr>
                        <th scope="row">3</th>
                        <td>Bosque de las Lomas</td>
                        <td>&nbsp;</td>
                        <td>---</td>
                    </tr>
                    <tr>
                        <th scope="row">4</th>
                        <td>Desierto de los Leones</td>
                        <td>&nbsp;</td>
                        <td>8 a 16 hrs.</td>
                    </tr>
                    <tr>
                        <th scope="row">5</th>
                        <td>Ecoguardas</td>
                        <td>&nbsp;</td>
                        <td>CERRADO HASTA NUEVO AVISO</td>
                    </tr>
                    <tr>
                        <th scope="row">6</th>
                        <td>Ejidos de Xochimilco y San Gregorio Atlapulco</td>
                        <td>Parque Ecológico de Xochimilco</td>
                        <td>CERRADO HASTA NUEVO AVISO</td>
                    </tr>
                    <tr>
                        <th scope="row">7</th>
                        <td>Insurgente Miguel Hidalgo y Costilla</td>
                        <td>&nbsp;</td>
                        <td>&nbsp;</td>
                    </tr>
                    <tr>
                        <th scope="row">8</th>
                        <td>La Armella</td>
                        <td>&nbsp;</td>
                        <td>7 a 16 hrs.</td>
                    </tr>
                    <tr>
                        <th scope="row">9</th>
                        <td>La Loma</td>
                        <td>&nbsp;</td>
                        <td>6 a 18 hrs.</td>
                    </tr>
                    <tr>
                        <th scope="row">10</th>
                        <td>Parque Ecológico de la CDMX</td>
                        <td>&nbsp;</td>
                        <td>7 a 17 hrs.</td>
                    </tr>
                    <tr>
                        <th scope="row">11</th>
                        <td>Sierra de Guadalupe</td>
                        <td>&nbsp;</td>
                        <td>7 a 17 hrs.</td>
                    </tr>
                    <tr>
                        <th scope="row">1</th>
                        <td>Sierra de Santa Catarina</td>
                        <td>&nbsp;</td>
                        <td>7 a 17 hrs.</td>
                    </tr>
                </tbody>
            </table>
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