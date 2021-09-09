    <html>

    <head>
        <title>
            ANP | Ecoguardas
        </title>
        <link href="../../dist/css/bootstrap.min.css" rel="stylesheet">
        <script src="../../dist/js/bootstrap.bundle.min.js"></script>
        <script src="//cdn.jsdelivr.net/npm/sweetalert2@10"></script>
        <script src="../../dist/js/p5.js" type="text/javascript"></script>
        <script type="text/javascript" src="../../../assets/json/card.js"></script>
        <script type="text/javascript" src="../../../assets/js/sitios/tarjetas.js"></script>
        <link rel="stylesheet" href="../../css/sitios/ecoguardasStyle.css">
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
                            <a class="nav-link" href="../acciones.php">ACCIONES</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="../galeria.php"">GALERÍA</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="../sinContenido.php">CONTACTO</a>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
        <div class="container-fluid hero" style="padding: 0px;"></div>
        <div class="space"></div>
        <div class="container-lg container-fluid container-body">
            <h1 class="text-goth">Ecoguardas</h1>
            <p class="text-goth sub-sub">ZONA DE CONSERVACIÓN ECOLÓGICA</p>
            <br />
            <p class="text-para">Ecoguardas es una Área Natural Protegida con una superficie de <b>132.63 hectáreas</b> ubicada en la alcaldía Tlalpan, al suroeste de la Ciudad de México perteneciente a la Serranía del Ajusco, y que al igual que Bosque de Tlalpan y Parque Ecológico de la Ciudad de México, representa una porción del <b>Pedregal de San Ángel​.</b></p>
            <div class="space"></div>
            <div class="container container-element">
                <center>
                    <h4 style="text-align: center;">Mapa poligonal de Ecoguardas</h4>
                    <br />
                    <!--<img class="img-poli" src="../../../src/imgs/sitios/ecoguardas/poligono.png">-->
                </center>
                <div class="space"></div>
            </div>
            <p class="text-para">Esta área natural conserva <b>relictos de bosque de encino</b> en buen estado de conservación que ocupan el 18.93% del total de la superficie y conviven con otras especies como tepozán <i>(Buddleja cordata)</i>, mamojuaxtle <i>(Clethra mexicana)</i>, madroño <i>(Arbutus xalapensis)</i>, árbol amargo <i>(Garrya laurifolia)</i>, capulín <i>(Prunus serótina ssp. Capuli)</i> y chaquira <i>(Ceanothus coeruleus)</i>.</p>
            <p class="text-para">Otra vegetación que predomina en el Área Natural Protegida es el <b>matorral xerófilo</b> que abarca el 41% de su superficie, cuyos paisajes están cubiertos principalmente por palo loco <i>(Pittocaulon praecox)</i>, tepozán <i>(Buddleja cordata)</i>, chapulixtle <i>(Dodonea viscosa)</i>, zoapaxtle <i>(Montamoa tomentosa)</i> y chichicastle <i>(Wigandia urens)</i>.</p>
            <p class="text-para">El 35.96% de su vegetación restante es representado por <b>bosque de encino con vegetación secundaria</b>. La vegetación secundaria se presenta en zonas en las que existen elementos de disturbio causados por incendios forestales, heladas, sequías, inundaciones, plagas, variaciones climáticas, entre otras.</p>
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
            <br />
            <p class="text-para">En cuanto a su fauna, habitan cerca de 16 especies de invertebrados y 138 especies de vertebrados representados por <b>11 especie de anfibios, 28 especies de reptiles, 56 especies de aves y 43 especies de mamíferos</b>.</p>
            <p class="text-para">Entre las especies de invertebrados de las que se tiene registro están las abejas <i>(Apis mellifera)</i>, escarabajos de la madera <i>(Eleodes spp.)</i>, mariposas diurnas <i>(Autochton cellus)</i>, mariposa azul marina <i>(Leptotes marina)</i>, mariposa organillo clara <i>(Euptoieta hegesia)</i>, araña <i>(Metepeira spp.)</i>, caracol <i>(Helix aspersa)</i>, hormigas carpinteras <i>(Camponotus spp.)</i>, catarina verde <i>(Zygogramma signatipennis)</i> chapulín <i>(Aidemona spp.)</i> y pulgones <i>(Aphis sp.)</i>.</p>
            <br />
            <div class="row">
                <div onclick="fireSwaltar('Eco',4)" class="col-6 grid-img-3" style="background-image: url(../../../src/imgs/sitios/ecoguardas/5.jpg);">
                </div>
                <div onclick="fireSwaltar('Eco',5)" class="col-6 grid-img-3" style="background-image: url(../../../src/imgs/sitios/ecoguardas/6.jpg);">
                </div>
            </div>
            <div class="row">
                <div onclick="fireSwaltar('Eco',6)" class="col-4 grid-img-2" style="background-image: url(../../../src/imgs/sitios/ecoguardas/7.jpg);">
                </div>
                <div onclick="fireSwaltar('Eco',7)" class="col-4 grid-img-2" style="background-image: url(../../../src/imgs/sitios/ecoguardas/8.jpg);">
                </div>
                <div onclick="fireSwaltar('Eco',8)" class="col-4 grid-img-2" style="background-image: url(../../../src/imgs/sitios/ecoguardas/9.jpg);">
                </div>
            </div>
            <div class="space"></div>
            <div id="col-green" class="container-fluid col-green">
                El 29 de noviembre de 2006 es publicado en la Gaceta Oficial del Distrito Federal, el decreto donde Ecoguardas es considerada Área Natural Protegida bajo la categoría de Zona de Conservación Ecológica.
            </div>
            <div class="space"></div>
            <h2>Disfruta de este lugar</h2>
            <br />
            <p class="text-para">Ecoguardas ubicada sobre el kilómetro 5.5 de la carretera Picacho Ajusco es una de las Áreas Naturales Protegidas que puedes conocer a través del <b><a href="http://www.data.sedema.cdmx.gob.mx:8081/culturaambiental/index.php/features-3/centros-de-cultura-ambiental/ecoguardas" target="_blank">Centro de Cultura Ambiental (CCA)</a></b> con el mismo nombre, el cual cuenta con un recorrido guiado, donde también puedes visitar el Museo de la abeja, invernaderos, huertos urbanos y aprender sobre temas de ecotecnias relacionados con captación de agua de lluvia, baño seco, composta y celdas solares. </p>
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
            <div class="row">
                <div onclick="fireSwaltar('Eco',9)" class="col-12 grid-img-3" style="background-image: url(../../../src/imgs/sitios/ecoguardas/10.jpg);">
                </div>
            </div>
            <div class="row">
                <div onclick="fireSwaltar('Eco',10)" class="col-6 grid-img-2" style="background-image: url(../../../src/imgs/sitios/ecoguardas/11.jpg);">
                </div>
                <div onclick="fireSwaltar('Eco',11)" class="col-6 grid-img-2" style="background-image: url(../../../src/imgs/sitios/ecoguardas/12.jpg);">
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
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td scope="row">Carretera Picacho Ajusco, kilómetro 5.5, s/n, Ampliación Miguel Hidalgo, 14250 CDMX</td>
                            <td>Lunes a Viernes de 9 a 17 horas</td>
                            <td>(55) 51 71 45 58</td>
                        </tr>
                    </tbody>
                </table>
            </div>
            <br />
            <p><b>Centro de cultura ambiental</b></p>
            <div class="table-responsive">
                <table class="table table-striped table-bordered">
                    <thead>
                        <tr class="tab-head text-goth">
                            <th scope="col">TELÉFONO</th>
                            <th scope="col">HORARIO DE ACCESO</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>(55) 5446-4503 o 5630-5364</td>
                            <td scope="row">Lunes a Domingo de 9 a 17 horas</td>
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
                    center: [-99.20483115477028, 19.273756759206506],
                    zoom: 15
                });
                var marker = new mapboxgl.Marker()
                    .setLngLat([-99.20483115477028, 19.273756759206506])
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
                                <a class="nav-link" href="../acciones.php" style="color: white;">ACCIONES</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="../galeria.php"">GALERÍA</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="../sinContenido.php" style="color: white;">CONTACTO</a>
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