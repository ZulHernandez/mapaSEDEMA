<html>

<head>
    <title>
        ANP | Parque Ecológico de la CDMX
    </title>
    <link href="../../dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="../../dist/js/bootstrap.bundle.min.js"></script>
    <script src="//cdn.jsdelivr.net/npm/sweetalert2@10"></script>
    <script src="../../dist/js/p5.js" type="text/javascript"></script>
    <script type="text/javascript" src="../../../assets/json/card.js"></script>
    <script type="text/javascript" src="../../../assets/js/sitios/tarjetas.js"></script>
    <link rel="stylesheet" href="../../css/sitios/pCDMXStyle.css">
    <link rel="stylesheet" href="../../css/gStyle.css">
    <link rel="shortcut icon" href="../../../src/imgs/iconos/icon.svg" type="image/x-icon">
    <script src='https://api.mapbox.com/mapbox-gl-js/v2.1.1/mapbox-gl.js'></script>
    <link href='https://api.mapbox.com/mapbox-gl-js/v2.1.1/mapbox-gl.css' rel='stylesheet' />
    <script src='https://api.mapbox.com/mapbox-gl-js/v2.1.1/mapbox-gl.js'></script>
    <link href='https://api.mapbox.com/mapbox-gl-js/v2.1.1/mapbox-gl.css' rel='stylesheet' />
</head>

<body>
    <nav class="navbar navbar-expand-lg navbar-dark" style="background-color: #410d1c;">
        <div class="container">
            <a class="navbar-brand" href="../../../index.php"><img src="../../../src/imgs/headIcon.svg"></a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#menu" aria-controls="menu" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse text-goth" id="menu">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                    <li class="nav-item">
                        <a class="nav-link" href="../../../index.php">INICIO</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="../anp.php">ANP</a>
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
    <div class="container-fluid hero" style="padding: 0px;"></div>
    <div class="space"></div>
    <div class="container-lg container-fluid container-body">
        <h1 class="text-goth">Parque Ecológico de la Ciudad de México</h1>
        <p class="text-goth sub-sub">ZONA SUJETA A CONSERVACIÓN ECOLÓGICA</p>
        <br />
        <p class="text-para">Parque Ecológico de la Ciudad de México con una superficie aproximada de <b>727 hectáreas</b> es la primera área boscosa en el entorno propiamente urbano, que contiene una muestra original del ecosistema del Pedregal de San Ángel, el cual está desarrollada sobre el sustrato basáltico producto de la explosión del <b>volcán Xitle</b> hace aproximadamente 2,000 años.</p>
        <p class="text-para">El Xitle es un volcán ubicado en las faldas de la Serranía del Ajusco o Sierra de Chichinauhtzin en la Ciudad de México, el cual a principios de la era cristiana hizo erupción y arrojó cenizas y lava sobre la ciudad y los campos, donde los pueblos más antiguos de la Cuenca de México Cuicuilco, Ajusco y Topilejo se desarrollaban.</p>
        <div class="space"></div>
        <div class="container container-element">
            <center>
                <h4 style="text-align: center;">Mapa Polígono del Parque Ecológico de la CDMX</h4>
                <br />
                <img class="img-poli" src="../../../src/imgs/sitios/pCDMX/poligono.png">
            </center>
            <div class="space"></div>
        </div>
        <p class="text-para">Esta área natural está cubierta principalmente por <b>matorral xerófilo, bosque de encino y bosque pino</b>. El matorral xerófilo es la vegetación con mayor presencia ubicada en la parte central y suroeste de polígono, caracterizado por la presencia de palo loco <i>(Senecio praecox)</i>, oreja de burro <i>(Echeverria gibbiflora)</i>, tepozán <i>(Buddleia cordata)</i>, tepozancillo <i>(Buddleia parviflora)</i> y chapulixtle <i>(Dodonaea viscosa)</i>.</p>
        <p class="text-para">El bosque de encino está acompañado por otras especies vegetales como <i>Garrya laurifolia, Arbutus xalapensis, Clethra mexicana, Solanum cervantesii, Cestrum anagyris, Senecio barba-johannis, Salvia spp.</i>, hierba del pollo <i>(Commelina coelestis)</i>, pimienta de tierra <i>(Peperomia campylotropa)</i>, entre otras.</p>
        <p class="text-para">Por su parte, el bosque de pino es la porción más pequeña del Área Natural Protegida, ocupada en su gran mayoría por la especie <i>Pinus teocote</i>, acompañado por tepozán, <i>Baccharis conferta, Symphoricarpos microphyllus, Bouvardia ternifolia</i>, entre otras.</p>
        <br />
        <div class="row">
            <div onclick="fireSwaltar('pCDMX',0)" class="col-5 grid-img-3" style="background-image: url(../../../src/imgs/sitios/pCDMX/1.jpg);">
            </div>
            <div onclick="fireSwaltar('pCDMX',1)" class="col-7 grid-img-3" style="background-image: url(../../../src/imgs/sitios/pCDMX/2.jpg);">
            </div>
        </div>
        <div class="row">
            <div onclick="fireSwaltar('pCDMX',2)" class="col-7 grid-img-3" style="background-image: url(../../../src/imgs/sitios/pCDMX/3.jpg);">
            </div>
            <div onclick="fireSwaltar('pCDMX',3)" class="col-5 grid-img-3" style="background-image: url(../../../src/imgs/sitios/pCDMX/4.jpg);">
            </div>
        </div>
        <br />
        <p class="text-para">En cuanto a su fauna, habitan cerca de 138 especies de vertebrados representados por <b>11 especie de anfibios, 28 especies de reptiles, 56 especies de aves y 43 especies de mamíferos.</b></p>
        <br />
        <div class="row">
            <div onclick="fireSwaltar('pCDMX',4)" class="col-7 grid-img-3" style="background-image: url(../../../src/imgs/sitios/pCDMX/5.jpg);">
            </div>
            <div onclick="fireSwaltar('pCDMX',5)" class="col-5 grid-img-3" style="background-image: url(../../../src/imgs/sitios/pCDMX/6.jpeg);">
            </div>
        </div>
        <div class="row">
            <div onclick="fireSwaltar('pCDMX',6)" class="col-5 grid-img-3" style="background-image: url(../../../src/imgs/sitios/pCDMX/7.jpg);">
            </div>
            <div onclick="fireSwaltar('pCDMX',7)" class="col-7 grid-img-3" style="background-image: url(../../../src/imgs/sitios/pCDMX/8.jpeg);">
            </div>
        </div>
        <div class="space"></div>
        <div id="col-green" class="container-fluid col-green" onmouseover="cambiaTextd(1);" onmouseout="cambiaTextd(0);   ">
            El 28 de junio de 1989 es publicado en la Gaceta Oficial del Distrito Federal, el decreto donde Parque Ecológico de la Ciudad de México es considerada Área Natural Protegida bajo la categoría de Zona Sujeta Ecológica y Cultural.
        </div>
        <div class="space"></div>
        <h2>Disfruta de este lugar</h2>
        <br />
        <p class="text-para">Parque Ecológico de la Ciudad de México es una Área Natural Protegida escondida en la colonia Primavera de la alcaldía Tlalpan, cuyo acceso peatonal se encuentra a la altura del kilómetro 30 de la Carretera Picacho-Ajusco, el cual puedes disfrutar a través de su sendero con miradores donde se aprecia un paisaje único en el mundo propio del Pedregal del San Ángel.</p>
        <br />
        <div class="row">
            <div class="col"></div>
            <div class="col-2">
                <center>
                    <img class="img-icon" src="../../../src/imgs/iconos/planta.svg">
                    <br /><br />
                    <h4 class="img-icon-txt">¡Ayudanos a conservar!</h4>
                </center>
            </div>
            <div class="col"></div>
            <div class="col-2">
                <center>
                    <img class="img-icon" src="../../../src/imgs/iconos/casco.svg">
                    <br /><br />
                    <h4 class="img-icon-txt">Programa de rehabilitación</h4>
                </center>
            </div>
            <div class="col"></div>
            <div class="col-2">
                <center>
                    <img class="img-icon" src="../../../src/imgs/iconos/mapa.svg">
                    <br /><br />
                    <a href="">
                        <h4 class="img-icon-txt">Mapa para tu visita</h4>
                    </a>
                </center>
            </div>
            <div class="col"></div>
        </div>
        <div class="space"></div>
        <div class="row">
            <div onclick="fireSwaltar('pCDMX',8)" class="col-3 grid-img-2" style="background-image: url(../../../src/imgs/sitios/pCDMX/9.jpg);">
            </div>
            <div onclick="fireSwaltar('pCDMX',9)" class="col-6 grid-img-2" style="background-image: url(../../../src/imgs/sitios/pCDMX/10.jpg);">
            </div>
            <div onclick="fireSwaltar('pCDMX',10)" class="col-3 grid-img-2" style="background-image: url(../../../src/imgs/sitios/pCDMX/11.jpg);">
            </div>
        </div>
        <div class="row">
            <div onclick="fireSwaltar('pCDMX',11)" class="col-4 grid-img-2" style="background-image: url(../../../src/imgs/sitios/pCDMX/12.jpeg);">
            </div>
            <div onclick="fireSwaltar('pCDMX',12)" class="col-4 grid-img-2" style="background-image: url(../../../src/imgs/sitios/pCDMX/13.jpg);">
            </div>
            <div onclick="fireSwaltar('pCDMX',13)" class="col-4 grid-img-2" style="background-image: url(../../../src/imgs/sitios/pCDMX/14.jpeg);">
            </div>
        </div>
        <div class="row">
            <div onclick="fireSwaltar('pCDMX',14)" class="col-3 grid-img-2" style="background-image: url(../../../src/imgs/sitios/pCDMX/15.jpg);">
            </div>
            <div onclick="fireSwaltar('pCDMX',15)" class="col-6 grid-img-2" style="background-image: url(../../../src/imgs/sitios/pCDMX/16.jpeg);">
            </div>
            <div onclick="fireSwaltar('pCDMX',16)" class="col-3 grid-img-2" style="background-image: url(../../../src/imgs/sitios/pCDMX/17.jpg);">
            </div>
        </div>
        <div class="space"></div>
        <h2>Ubicación</h2>
        <p><b>Oficinas de Administración</b></p>
        <div class="table-responsive">
            <table class="table table-striped table-bordered">
                <thead>
                    <tr class="tab-head text-goth">
                        <th scope="col">UBICACIÓN</th>
                        <th scope="col">HORARIO DE ATENCIÓN</th>
                        <th scope="col">TELÉFONO</th>
                        <th scope="col">HORARIO DE ACCESO</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>12 Calle Paseo de Girasol, Ciudad de México, Cd. de México.</td>
                        <td>Lunes a Viernes de 9 a 17 horas</td>
                        <td>(55) 51 71 45 58</td>
                        <td scope="row">Horario de visita: 7 a 17 horas de lunes a domingo </td>
                    </tr>
                </tbody>
            </table>
        </div>
        <div id='map' style='width: 100%; height: 480px;'></div>
        <p class="img-foot">Oprime control (CTRL) y con el click izquierdo apretado arrastra el mouse para ver el mapa en 3D</p>
        <script>
            mapboxgl.accessToken = 'pk.eyJ1IjoienVsaGVybmFuZGV6IiwiYSI6ImNrcDV4bTRwdDAxYnYyb3JzeHE1bTBkdHYifQ.ZtB7l8cP6rC74rgXY45dUQ';
            var map = new mapboxgl.Map({
                container: 'map',
                style: 'mapbox://styles/zulhernandez/ckpdmziyd83mk18rxachvu66r',
                center: [-99.20689657177742, 19.262411198815332],
                zoom: 15
            });
            var marker = new mapboxgl.Marker()
                .setLngLat([-99.20689657177742, 19.262411198815332])
                .addTo(map);
        </script>
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
                            <a class="nav-link" href="../../../index.php" style="color: white;">INICIO</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="../anp.php" style="color: white;">ANP</a>
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