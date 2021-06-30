<html>

<head>
    <title>
        ANP | La Loma
    </title>
    <link href="../../dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="../../dist/js/bootstrap.bundle.min.js"></script>
    <script src="//cdn.jsdelivr.net/npm/sweetalert2@10"></script>
    <script src="../../dist/js/p5.js" type="text/javascript"></script>
    <script type="text/javascript" src="../../../assets/json/card.js"></script>
    <script type="text/javascript" src="../../../assets/js/sitios/tarjetas.js"></script>
    <link rel="stylesheet" href="../../css/gStyle.css">
    <link rel="stylesheet" href="../../css/sitios/bosquesLStyle.css">
    <link rel="shortcut icon" href="../../../src/imgs/iconos/icon.svg" type="image/x-icon">
    <script src='https://api.mapbox.com/mapbox-gl-js/v2.1.1/mapbox-gl.js'></script>
    <link href='https://api.mapbox.com/mapbox-gl-js/v2.1.1/mapbox-gl.css' rel='stylesheet' />
    <script src='https://api.mapbox.com/mapbox-gl-js/v2.1.1/mapbox-gl.js'></script>
    <link href='https://api.mapbox.com/mapbox-gl-js/v2.1.1/mapbox-gl.css' rel='stylesheet' />
</head>

<body>
    <nav class="navbar navbar-expand-lg navbar-dark" style="background-color: #0f4c42;">
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
    <div class="container container-body">
        <h1 class="text-goth">La Loma</h1>
        <p class="text-goth sub-sub">ZONA DE CONSERVACIÓN ECOLÓGICA</p>
        <br />
        <p class="text-para">La Loma es una Área Natural Protegida con categoría de Zona de Conservación Ecológica gracias a los trabajos conjuntos entre autoridades y el movimiento vecinal llamado Comité Pro Defensa del Parque Ecológico La Loma, que lograron conservar este espacio natural el 20 de abril de 2010. </p>
        <p class="text-para">Actualmente, el Área Natural Protegida tiene una superficie de <b>77.33 hectáreas</b> ubicada en la alcaldía Álvaro Obregón, la cual colinda al norte con las colonias Ampliación Torres del Potrero y La Angostura; al oeste con la colonia San Bartolo Ameyalco; y al sur con la barranca La Malinche.</p>
        <div class="space"></div>
        <div class="container container-element">
            <center>
                <h4 style="text-align: center;">Mapa poligonal de La Lomas</h4>
                <br />
                <img class="img-poli" src="../../../src/imgs/sitios/bosquesL/poligono.png">
            </center>
            <div class="space"></div>
        </div>
        <p class="text-para">La superficie de La Loma se encuentra cubierta por <b>bosque de encino</b>, vegetación en buen estado de conservación y que contiene una proporción significativa de las especies nativas como perlitas <i>(Symphoricarpos microphyllus)</i>, membrillo cimarrón <i>(Amelanchier denticulata)</i>, chapulixtle <i>(Dodonea viscosa)</i>, trompetilla <i>(Bouvardia ternifolia)</i> y zoapaxtle <i>(Montanoa tomentosa)</i>.</p>
        <p class="text-para">Otro tipo de vegetación es el <b>matorral secundario</b>, presente en áreas más abiertas conformadas por especies de jarillas <i>(Senecio spp.)</i>, palo dulce <i>(Eysenhardtia polystachya)</i>, mala mujer <i>(Wigandia caracasana)</i>, así como uña de gato <i>(Mimosa biuncifera)</i> que son propias de los matorrales xerófilos característicos de la Cuenca de México, entre otras.</p>
        <p class="text-para">Por su parte, existe una <b>vegetación inducida</b>, que refleja el propósito de obtener una cubierta vegetal arbórea lo más rápidamente posible, sin considerar la selección de especies más apropiadas o la formación de una cubierta vegetal diversa y acorde con las condiciones ambientales del área circundante como el bosque de encino.</p>
        <br />
        <div class="row">
            <div onclick="fireSwaltar('Bos',0)" class="col-5 grid-img-3" style="background-image: url(../../../src/imgs/sitios/bosquesL/1.jpg);">
            </div>
            <div onclick="fireSwaltar('Bos',1)" class="col-7 grid-img-3" style="background-image: url(../../../src/imgs/sitios/bosquesL/2.jpg);">
            </div>
        </div>
        <div class="row">
            <div onclick="fireSwaltar('Bos',2)" class="col-4 grid-img-2" style="background-image: url(../../../src/imgs/sitios/bosquesL/3.jpg);">
            </div>
            <div onclick="fireSwaltar('Bos',3)" class="col-4 grid-img-2" style="background-image: url(../../../src/imgs/sitios/bosquesL/4.jpg);">
            </div>
            <div onclick="fireSwaltar('Bos',4)" class="col-4 grid-img-2" style="background-image: url(../../../src/imgs/sitios/bosquesL/5.jpg);">
            </div>
        </div>
        <br />
        <p class="text-para">En cuanto a su fauna, habitan cerca de <b>dos anfibios, cinco reptiles y 17 mamíferos</b>. En relación al tema de aves, estudios recientes registraron 19 especies de aves más de acuerdo a la lista presentada en el Programa de Manejo del Área Natural Protegida La Loma, publicado en la Gaceta Oficial en 2012, donde sólo se reportaban 31 especies de aves. </p>
        <p class="text-para">De las 19 especies, tres se encuentran enlistadas en la NOM-059-SEMARNAT-2010: gavilán pecho canela <i>(Accipiterstriatus)</i>, vencejo nuca blanca mexicano <i>(Streptoprocne semicollaris)</i> y aguililla alas anchas <i>(Buteo platypterus)</i>.</p>
        <br />
        <div class="row">
            <div onclick="fireSwaltar('Bos',5)" class="col-7 grid-img-3" style="background-image: url(../../../src/imgs/sitios/bosquesL/6.jpg);">
            </div>
            <div onclick="fireSwaltar('Bos',6)" class="col-5 grid-img-3" style="background-image: url(../../../src/imgs/sitios/bosquesL/7.jpg);">
            </div>
        </div>
        <div class="row">
            <div onclick="fireSwaltar('Bos',7)" class="col-4 grid-img-2" style="background-image: url(../../../src/imgs/sitios/bosquesL/8.jpg);">
            </div>
            <div onclick="fireSwaltar('Bos',8)" class="col-4 grid-img-2" style="background-image: url(../../../src/imgs/sitios/bosquesL/9.jpg);">
            </div>
            <div onclick="fireSwaltar('Bos',9)" class="col-4 grid-img-2" style="background-image: url(../../../src/imgs/sitios/bosquesL/10.jpg);">
            </div>
        </div>
        <div class="row">
            <div onclick="fireSwaltar('Bos',10)" class="col-5 grid-img-3" style="background-image: url(../../../src/imgs/sitios/bosquesL/11.jpg);">
            </div>
            <div onclick="fireSwaltar('Bos',11)" class="col-7 grid-img-3" style="background-image: url(../../../src/imgs/sitios/bosquesL/12.jpg);">
            </div>
        </div>
        <div class="space"></div>
        <div id="col-green" class="container-fluid col-green">
            El 20 de abril de 2010 el Área Natural Protegida La Loma es decretada bajo la categoría de Zona de Conservación Ecológica.
        </div>
        <div class="space"></div>
        <h2>Disfruta de este lugar</h2>
        <br />
        <p class="text-para">Debido a que el Área Natural Protegida Sierra de Guadalupe posee 11 polígonos rodeados por los municipios del Estado de México y está fragmentados por la zona urbana de la alcaldía Gustavo A. Madero, existen tres <b>accesos principales: Zacatenco, Vicente Guerro y Vista Hermosa</b> , los cuales fueron rehabilitados con el objetivo que la comunidad pueda disfrutar y conservar de este espacio natural.</p>
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
                        <td scope="row">Bosques de las Lomas, Ciudad de México,<br />Ciudad de México</td>
                        <td>Lunes a Viernes de 9 a 17 horas</td>
                        <td>(55) 30 99 00 11</td>
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
                center: [-99.25661624338433, 19.387502903761426],
                zoom: 15
            });
            var marker = new mapboxgl.Marker()
                .setLngLat([-99.25661624338433, 19.387502903761426])
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