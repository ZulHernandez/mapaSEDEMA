<html>

<head>
    <title>
        ANP | Ejidos de Xochimilco y San Gregorio Atlapulco
    </title>
    <link href="../../dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="../../dist/js/bootstrap.bundle.min.js"></script>
    <script src="//cdn.jsdelivr.net/npm/sweetalert2@10"></script>
    <script src="../../dist/js/p5.js" type="text/javascript"></script>
    <script type="text/javascript" src="../../../assets/json/card.js"></script>
    <script type="text/javascript" src="../../../assets/js/sitios/tarjetas.js"></script>
    <link rel="stylesheet" href="../../css/sitios/ejidosXStyle.css">
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
        <h1 class="text-goth">Ejidos de Xochimilco y San Gregorio Atlapulco</h1>
        <p class="text-goth sub-sub">ZONA SUJETA A CONSERVACIÓN ECOLÓGICA</p>
        <br />
        <p class="text-para">Ejidos de Xochimilco y San Gregorio Atlapulco ubicada entre las alcaldías Xochimilco e Iztapalpa, es una de las Área Natural Protegida más grande de la ciudad de México con una superficie de 2,522.43 hectáreas, la cual posee ocho nombramientos entre los que se encuentra ser catalogada como Patrimonio Mundial Cultural y Natural por la UNESCO, así como ser reconocida por su Sistema Agrícola Chinampero por la la Organización de las Naciones Unidas para la Alimentación y la Agricultura (FAO).</p>
        <div class="space"></div>
        <div class="container container-element">
            <center>
                <h4 style="text-align: center;">Mapa poligonal de Ejidos de Xochimilco y San Gregorio Atlapulco</h4>
                <br />
                <!--<img class="img-poli" src="../../../src/imgs/sitios/ecoguardas/poligono.png">-->
            </center>
            <div class="space"></div>
        </div>
        <p class="text-para">En el Área Natural Protegida se encuentran tres tipos de vegetación natural. La primera es <b>acuática y subacuática</b> que se encuentra en cuerpos de agua permanentes de canales, lagos, así como en superficies cubiertas de Ciénegas, en bordes minúscula de canales, zanjas y apantles.</p>
        <p class="text-para">La segunda <b>vegetación es halófila</b>, la cual se trata de un pastizal bajo y denso que se distribuye en terrenos propenso a inundaciones someras, en suelos salinos, alcalinos y mal drenados, así como sitios donde se han desarrollado actividades agrícolas.</p>
        <p class="text-para">Finalmente, la <b>vegetación terrestre</b> ubicada a la orilla de los canales donde se encuentra diferentes especies de árboles como: ahuehute <i>(Taxodium mucronatum)</i>, sauce llorón <i>(Salix babylonica)</i>, colorín <i>(Erythrina americana)</i>, causarina <i>(Casuarina equisetifolia)</i>, araucaria <i>(Araucaria heterophylIa)</i>, chapulixtle <i>(Dodonaea viscosa)</i>, entre otros.</p>
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
        <p class="text-para">En cuanto a su fauna, habitan cerca de 521 especies representados por <b>18 especie de anfibios, 39 especies de reptiles, 355 especies de aves y 87 especies de mamíferos</b>.</p>
        <p class="text-para">Por otra parte de las especies de aves, son un componente importante del Área Natural Protegida, pues to que, cumplen varias funciones diversas funciones como las aves rapaces, las cuales consumen grandes cantidades de roedores, que pueden representar una amenaza para los cultivos; las aves insectívoras controlan las poblaciones de insectos nocivos que pueden volverse plaga; las frugívoras dispersan las semillas contenidas en los frutos, conservando y renovando la vegetación; y las nectarívoras ayudan a la polinización de algunas especies de plantas.</p>
        <p class="text-para">Las aves mejor representadas son: las gallinas de agua <i>(Fulica americana y Gallinula chlorophus)</i>, la garza de cuello de reata <i>(Ardea alba)</i>, la garcita blanca <i>(Egretta thula)</i>, el perrito de agua <i>(Nicticorax nicticorax)</i>, el pato mexicano <i>(Anas diazi)</i> y la garcita verde <i>(Ixobrychus exilus)</i>.</p>
        <p class="text-para">Respecto a los anfibios, las especies representativas son el ajolote <i>(Ambystoma mexicanum)</i> que se distribuye en los cuerpos de agua; la rana de Moctezuma <i>(Rana montezumae)</i> y la rana de Tláloc o de Xochimilco <i>(Rana tlaloci)</i>, ésta última aparentemente extinta (INECOL, 2002).</p>
        <p class="text-para">El ajolote es una especie neoténica que por lo general, permanece y se reproduce en estado larvario; es una especie endémica y única de la Ciudad de México, y su origen es Xochimilco, por lo que es de suma importancia preservarla dado que de acuerdo a la <b>NOM-059-SEMARNAT-2010</b>, se encuentra sujeta a protección especial.</p>
        <br />
        <div class="row">
            <div onclick="fireSwaltar('Eji',0)" class="col-5 grid-img-3" style="background-image: url(../../../src/imgs/sitios/ejidosX/1.jpg);">
            </div>
            <div onclick="fireSwaltar('Eji',1)" class="col-7 grid-img-3" style="background-image: url(../../../src/imgs/sitios/ejidosX/2.jpg);">
            </div>
        </div>
        <div class="row">
            <div onclick="fireSwaltar('Eji',2)" class="col-7 grid-img-3" style="background-image: url(../../../src/imgs/sitios/ejidosX/3.jpg);">
            </div>
            <div onclick="fireSwaltar('Eji',3)" class="col-5 grid-img-3" style="background-image: url(../../../src/imgs/sitios/ejidosX/4.jpeg);">
            </div>
        </div>
        <div class="space"></div>
        <div id="col-green" class="container-fluid col-green">
            El 4 y 8 de diciembre de 2006 es publicado en la Gaceta Oficial del Distrito Federal, el decreto donde Ejidos de Xochimilco y San Gregorio Atlapulco es considerada Área Natural Protegida bajo la categoría de Zona Sujeta a Conservación Ecológica.
        </div>
        <div class="space"></div>
        <h2>Disfruta de este lugar</h2>
        <br />
        <p class="text-para">Al interior del Área Natural Protegida existen lugares para realizar actividades recreativas, culturales y deportivas, entre las que destacan el <b>Parque Ecológico de Xochimilco, Deportivo Cuemanco, Mercado de Plantas y Flores de Cuemanco y la Pista Olímpica de remo y canotaje “Virgilio Uribe”</b>. Los servicios turísticos ofrecen recorridos en trajineras a través de la red de canales, los lugares de partida son los embarcaderos ubicados en Cuemanco y Puente de Urrutia, este último en San Gregorio Atlapulco.</p>
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
            <div onclick="fireSwaltar('Eji',4)" class="col-5 grid-img-3" style="background-image: url(../../../src/imgs/sitios/ejidosX/5.jpeg);">
            </div>
            <div onclick="fireSwaltar('Eji',5)" class="col-7 grid-img-3" style="background-image: url(../../../src/imgs/sitios/ejidosX/6.jpeg);">
            </div>
        </div>
        <div class="row">
            <div onclick="fireSwaltar('Eji',6)" class="col-7 grid-img-3" style="background-image: url(../../../src/imgs/sitios/ejidosX/7.jpeg);">
            </div>
            <div onclick="fireSwaltar('Eji',7)" class="col-5 grid-img-3" style="background-image: url(../../../src/imgs/sitios/ejidosX/8.jpeg);">
            </div>
        </div>
        <div class="space"></div>
        <h2>Ubicación</h2>
        <p><b>Oficinas de Administración</b></p>
        <div class="table-responsive">
            <table class="table table-striped table-bordered">
                <thead>
                    <tr class="tab-head text-goth">
                        <th scope="col">HORARIO DE ATENCIÓN</th>
                        <th scope="col">TELÉFONO</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>Lunes a Viernes de 9 a 17 horas</td>
                        <td>(55) 15 47 10 78</td>
                    </tr>
                </tbody>
            </table>
        </div>
        <br />
        <p><b>Parque Ecológico de Xochimilco (PEX)</b></p>
        <div class="table-responsive">
            <table class="table table-striped table-bordered">
                <thead>
                    <tr class="tab-head text-goth">
                        <th scope="col">HORARIO DE ACCESO</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
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
                center: [-99.20551907222452, 19.271814512777425],
                zoom: 15
            });
            var marker = new mapboxgl.Marker()
                .setLngLat([-99.20551907222452, 19.271814512777425])
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