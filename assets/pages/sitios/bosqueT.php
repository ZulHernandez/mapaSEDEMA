<html>

<head>
    <title>
        ANP | Bosques de Tlalpan
    </title>
    <link href="../../dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="../../dist/js/bootstrap.bundle.min.js"></script>
    <script src="//cdn.jsdelivr.net/npm/sweetalert2@10"></script>
    <script src="../../dist/js/p5.js" type="text/javascript"></script>
    <script type="text/javascript" src="../../../assets/json/card.js"></script>
    <script type="text/javascript" src="../../../assets/js/sitios/tarjetas.js"></script>
    <link rel="stylesheet" href="../../css/sitios/bosqueTStyle.css">
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
        <h1 class="text-goth">Bosques de Tlalpan</h1>
        <p class="text-goth sub-sub">ZONA ECOLÓGICA Y CULTURAL</p>
        <br />
        <p class="text-para">Después del Parque Ecológico de la Ciudad de México y con una superficie de <b>252.86 hectáreas</b> es la segunda área boscosa con un entorno propiamente urbano que contiene una muestra original del ecosistema del Pedregal de San Ángel, desarrollada sobre el sustrato basáltico producto de la explosión del volcán Xitle hace aproximadamente 2,000 años.</p>
        <div class="space"></div>
        <div class="container container-element">
            <center>
                <h4 style="text-align: center;">Mapa poligonal de Bosques de Tlalpan</h4>
                <br />
                <img class="img-poli" src="../../../src/imgs/sitios/bosqueT/poligono.png">
            </center>
            <div class="space"></div>
        </div>
        <p class="text-para">Está área natural está cubierta principalmente por <b>bosque de encino, matorral xerófilo</b>  así como una pequeña porción de <b>bosque cultivado</b>, debido a las reforestaciones realizadas durante la operación de la fábrica de Loreto y Peña Pobre, que colocó especies exóticas en su mayoría eucalipto <i>(Eucalyptus spp.)</i> y pino <i>(Pinus spp.)</i>; vegetación ubicada alrededor de la pista de arcilla y zonas cercanas.  </p>
        <p class="text-para">Por su parte, en el matorral xerófilo se puede observar un terreno rocoso y pobre en suelo formado por sustrato basáltico color negro, conocido como <b>“Río de Lava”</b>, cuya principales especies vegetales que cubren este espacio son: oreja de burro <i>(Echeveria)</i>, zacate de escobilla <i>(Muhlenbergia robusta)</i>, manfreda <i>(Manfreda Scabra)</i>, cempasúchil <i>(Tagetes)</i>, salvia mexicana <i>(Amaranthus spp)</i>, dahlia <i>(Dahlia Coccínea)</i>,  mira sol <i>(Cosmos bipinnatus)</i>, ocotillo <i>(dodonaea viscosa)</i>, palo dulce <i>(Eysenhardtia polystachya)</i>, siempre viva <i>(Sedum oxypetalum)</i>, palo loco <i>(Senecio praecox)</i>, tunera de terciopelo <i>(Opuntia tomentosa)</i> y maguey <i>(Agave spp.)</i>.</p>
        <p class="text-para">En la parte oeste del Área Natural Protegida se aprecia el bosque de encinos, una de las principales vegetaciones de la zona, caracterizada por poseer árboles de entre 3 y 12 metros de altura, algunos con más de 150, donde también se encuentra tepozán <i>(Buddleja cordata)</i>, madroño <i>(Arbutus xalapensis)</i>, así como de algunas especies de pino <i>(Pinus spp.)</i>.</p>
        <br />
        <div class="row">
            <div onclick="fireSwaltar('Bot',0)" class="col-5 grid-img-3" style="background-image: url(../../../src/imgs/sitios/bosqueT/1.jpg);">
            </div>
            <div onclick="fireSwaltar('Bot',1)" class="col-7 grid-img-3" style="background-image: url(../../../src/imgs/sitios/bosqueT/2.jpg);">
            </div>
        </div>
        <div class="row">
            <div onclick="fireSwaltar('Bot',2)" class="col-7 grid-img-3" style="background-image: url(../../../src/imgs/sitios/bosqueT/3.jpg);">
            </div>
            <div onclick="fireSwaltar('Bot',3)" class="col-5 grid-img-3" style="background-image: url(../../../src/imgs/sitios/bosqueT/4.jpg);">
            </div>
        </div>
        <br />
        <p class="text-para">En cuanto a su fauna, habitan cerca de 1,000 especies de invertebrados y 141 especies de vertebrados conformados por <b>9 especies de reptiles, 2 especies de anfibios, 83 especies de aves y 47 especies de mamíferos</b>, de los cuales 7 se encuentran bajo categoría de riesgo, de acuerdo a la NOM-059- SEMARNAT-2001: 1 especie es endémica, 4 se encuentran Amenazadas y 4 Sujetas a Protección Especial.</p>
        <br />
        <div class="row">
            <div onclick="fireSwaltar('Bot',4)" class="col-7 grid-img-3" style="background-image: url(../../../src/imgs/sitios/bosqueT/5.jpg);">
            </div>
            <div onclick="fireSwaltar('Bot',5)" class="col-5 grid-img-3" style="background-image: url(../../../src/imgs/sitios/bosqueT/6.jpg);">
            </div>
        </div>
        <div class="row">
            <div onclick="fireSwaltar('Bot',6)" class="col-5 grid-img-3" style="background-image: url(../../../src/imgs/sitios/bosqueT/7.jpg);">
            </div>
            <div onclick="fireSwaltar('Bot',7)" class="col-7 grid-img-3" style="background-image: url(../../../src/imgs/sitios/bosqueT/8.jpg);">
            </div>
        </div>
        <div class="space"></div>
        <div id="col-green" class="container-fluid col-green">
            El 17 de junio de 2011 es publicado en la Gaceta Oficial del Distrito Federal, el decreto donde Bosque de Tlalpan es considerada Área Natural Protegida bajo la categoría de Zona Ecológica y Cultural.
        </div>
        <div class="space"></div>
        <h2>Disfruta de este lugar</h2>
        <br />
        <p class="text-para">Bosque de Tlalpan mantiene cuatro accesos, uno de ellos a 15 minutos del Metrobús Villa Olímpica, el cual diariamente es visitado por cientos de corredores que disfrutan de ejercitarse al aire libre en la pista de arcilla de 886 metros.</p>
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
        <br />
        <div class="row">
            <div onclick="fireSwaltar('Bot',8)" class="col-5 grid-img-3" style="background-image: url(../../../src/imgs/sitios/bosqueT/9.jpg);">
            </div>
            <div onclick="fireSwaltar('Bot',9)" class="col-7 grid-img-3" style="background-image: url(../../../src/imgs/sitios/bosqueT/10.jpg);">
            </div>
        </div>
        <div class="row">
            <div onclick="fireSwaltar('Bot',10)" class="col-7 grid-img-3" style="background-image: url(../../../src/imgs/sitios/bosqueT/11.jpg);">
            </div>
            <div onclick="fireSwaltar('Bot',11)" class="col-5 grid-img-3" style="background-image: url(../../../src/imgs/sitios/bosqueT/12.jpg);">
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
                        <td scope="row">Camino a Sta. Teresa S / N, Parques del Pedregal, Tlalpan, 14010 Tlalpan, CDMX.</td>
                        <td>Lunes a Viernes de 5 a 17 horas</td>
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
                center: [-99.191666982407,19.296730903530673],
                zoom: 15
            });
            var marker = new mapboxgl.Marker()
                .setLngLat([-99.191666982407,19.296730903530673])
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