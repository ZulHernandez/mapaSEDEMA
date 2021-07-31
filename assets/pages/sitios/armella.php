<html>

<head>
    <title>
        ANP | La Armella
    </title>
    <link href="../../dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="../../dist/js/bootstrap.bundle.min.js"></script>
    <script src="//cdn.jsdelivr.net/npm/sweetalert2@10"></script>
    <script src="../../dist/js/p5.js" type="text/javascript"></script>
    <script type="text/javascript" src="../../../assets/json/card.js"></script>
    <script type="text/javascript" src="../../../assets/js/sitios/tarjetas.js"></script>
    <link rel="stylesheet" href="../../css/gStyle.css">
    <link rel="stylesheet" href="../../css/sitios/armellaStyle.css">
    <link rel="shortcut icon" href="../../../src/imgs/iconos/icon.svg" type="image/x-icon">
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
        <h1 class="text-goth">LA ARMELLA</h1>
        <p class="text-goth sub-sub">ZONA DE CONSERVACIÓN ECOLÓGICA</p>
        <br />
        <p class="text-para">La Amella se ubica en el extremo Norte de la alcaldía Gustavo A. Madero, colinda con el Estado de México y es la continuidad del Área Natural Protegida Sierra de Guadalupe, cuya superficie de <b>198.38 hectáreas</b> se divide en dos polígonos.</p>
        <p class="text-para">Su decreto en 2006 tiene el objetivo de ampliar espacios para la conservación de biodiversidad al norte de la Ciudad de México, debido a la gama amplia de servicios ecosistémicos que ofrece junto con Sierra de Guadalupe, ya que, son el habitad de especies representativas de la Cuenca de México, alimentan a los mantos acuíferos, ayudan a mitigar el cambio climático, generan oxigeno, evitan la erosión de suelo natural, ofrecen una belleza escénica y brindan espacios de espaciamiento para la comunidad.</p>
        <div class="space"></div>
        <div class="container container-element">
            <center>
                <h4 style="text-align: center;">Mapa poligonal de La Armella</h4>
                <br />
                <img class="img-poli" src="../../../src/imgs/sitios/armella/poligono.png">
            </center>
            <div class="space"></div>
        </div>
        <p class="text-para">Semejante a Sierra de Guadalupe, La Armella está conformada por <b>matorral xerófilo, matorral de encino y bosque de encino,</b> vegetación representativa de la Cuenca de México.</p>
        <p class="text-para">El matorral xerófilo cubre la mayor parte de la superficie del Área Natural Protegida y se caracteriza por la presencia de palo dulce <i>(Eysenhardtia polystachya)</i>, uña de gato <i>(Mimosa biuncifera)</i>, tuna mansa <i>(Opuntia streptacantha)</i> y dahlia <i>(Dahlia coccinea)</i>.</p>
        <p class="text-para">El bosque de encino está mezclado principalmente con madroños <i>(Arbutus xalapensis)</i>, tepozanes <i>(Buddleja cordata)</i>, palo loco <i>(Pittocaulon praecox)</i>, trompetilla <i>(Bouvardia ternifolia)</i>, perlilla <i>(Symphoricarpos microphyllus)</i>, Calliandra grandiflora y Salvia microphylla.</p>
        <p class="text-para">El matorral de encino cuenta con una baja población de encinos que conviven con agaves <i>(Agave salmiana)</i>, palma <i>(Nolina parviflora)</i>, Havardia leptophylla, Ipomoea capillacea, Bouvardia ternifolia, Opuntia streptacantha, Lithospermum strictum, Manfreda pringlei, Loeselia mexicana y Echeandia mexicana.</p>
        <p class="text-para">Asimismo, debido a reforestaciones pasadas La Armella presenta una porción de plantaciones forestales, que se distribuyen en manchones irregulares con especies como eucalipto <i>(Eucalyptus camaldulensis y Eucalyptus globulus)</i>, pino <i>(Pinus halepensis y Pinus radiata)</i>, retama de tierra caliente <i>(Senna multiglandulosa)</i>, cedro blanco <i>(Cupressus lusitanica)</i> y casuarina <i>(Casuarina equisetifolia)</i>.</p>
        <br />
        <div class="row">
            <div onclick="fireSwaltar('Arm',0);" class="col-7 grid-img-3" style="background-image: url(../../../src/imgs/sitios/armella/1.jpg);">
            </div>
            <div onclick="fireSwaltar('Arm',1);" class="col-5 grid-img-3" style="background-image: url(../../../src/imgs/sitios/armella/2.jpg);">
            </div>
        </div>
        <div class="row">
            <div onclick="fireSwaltar('Arm',2);" class="col-6 grid-img-2" style="background-image: url(../../../src/imgs/sitios/armella/3.jpg);">
            </div>
            <div onclick="fireSwaltar('Arm',3);" class="col-6 grid-img-2" style="background-image: url(../../../src/imgs/sitios/armella/4.jpg);">
            </div>
        </div>
        <br />
        <p class="text-para">Del mismo modo que Sierra de Guadalupe, se registran 154 especies de vertebrados, distribuidas en <b>8 especies de anfibios, 21 especies de reptiles, 96 especies de aves y 29 especies de mamíferos.</b> De estos, 20 especies están enlistadas bajo alguna categoría de protección, de acuerdo con la NOM-059-SEMARNAT-2001, 12 están Sujetas a Protección Especial, 7 Amenazadas y una en Peligro de Extinción, 10 de ellas reportadas como endémicas.</p>
        <br />
        <div class="row">
            <div onclick="fireSwaltar('Arm',4);" class="col-7 grid-img-3" style="background-image: url(../../../src/imgs/sitios/armella/5.jpg);">
            </div>
            <div onclick="fireSwaltar('Arm',5);" class="col-5 grid-img-3" style="background-image: url(../../../src/imgs/sitios/armella/6.jpg);">
            </div>
        </div>
        <div class="row">
            <div onclick="fireSwaltar('Arm',6);" class="col-5 grid-img-2" style="background-image: url(../../../src/imgs/sitios/armella/7.jpg);">
            </div>
            <div onclick="fireSwaltar('Arm',7);" class="col-7 grid-img-2" style="background-image: url(../../../src/imgs/sitios/armella/8.jpg);">
            </div>
        </div>
        <div class="space"></div>
        <div id="col-green" class="container-fluid col-green" onmouseover="cambiaText('Arm',1)" onmouseout="cambiaText('Arm',0)">
            La administración de La Armella está a cargo de la Secretaría del Medio Ambiente en coordinación con la Comisión Nacional de Áreas Naturales Protegidas (CONANP).
        </div>
        <div class="space"></div>
        <h2>Conoce más áreas verdes de la ciudad</h2>
        <br />
        <p class="text-para">El acceso al Área Natural Protegida La Armella es principalmente por... los cuales en 2019 fueron rehabilitados con el objetivo de conservar su biodiversidad y brindar espacios a la comunidad para el disfrute y contacto con la naturaleza.</p>
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
            <div class="col-3"></div>
            <div class="col-2">
                <center>
                    <img class="img-icon" src="../../../src/imgs/iconos/mapa.svg">
                    <br /><br />
                    <a href="">
                        <h4 class="img-icon-txt" style="text-align: center;">Mapa para tu visita</h4>
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
                        <td scope="row">Pedregal S/N, San Pedro Zacatenco, 07360,<br />Ciudad de México</td>
                        <td>Lunes a Viernes de 9 a 17 horas</td>
                        <td>(55) 55 86 45 52</td>
                        <td scope="row">Horario de acceso: 7 a 17 horas de lunes a domingo </td>
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
                center: [-99.1227029086821, 19.511454027385902],
                zoom: 15
            });
            var marker = new mapboxgl.Marker()
                .setLngLat([-99.1227029086821, 19.511454027385902])
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