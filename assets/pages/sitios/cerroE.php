<html>

<head>
    <title>
        ANP | Cerro de la Estrella
    </title>
    <link href="../../dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="../../dist/js/bootstrap.bundle.min.js"></script>
    <script src="//cdn.jsdelivr.net/npm/sweetalert2@10"></script>
    <script src="../../dist/js/p5.js" type="text/javascript"></script>
    <script type="text/javascript" src="../../../assets/json/card.js"></script>
    <script type="text/javascript" src="../../../assets/js/sitios/tarjetas.js"></script>
    <link rel="stylesheet" href="../../css/sitios/cerroEStyle.css">
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
                        <a class="nav-link" href="../sinContenido.php">ACCIONES</a>
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
        <h1 class="text-goth">Cerro de la Estrella</h1>
        <p class="text-goth sub-sub">PARQUE NACIONAL</p>
        <p class="text-goth sub-sub">ZONA ECOLÓGICA Y CULTURAL</p>
        <br />
        <p class="text-para">Cerro de la Estrella es una Área Natura Protegida al oriente de la Ciudad de México, la cual posee dos categorías: Parque Nacional y Zona Ecológica y Cultural. La primera categoría otorgada el 24 de agosto de 1938 por el <b>general Lázaro Cárdenas</b> en el Diario Oficial de la Federación con la finalidad de conservar y mejorar sus condiciones para fomento del turismo; así como por sus características geológicas y para el estudio de la historia prehispánica, en cuanto a tradiciones y ceremonias religiosas.</p>
        <p class="text-para">Hay que recordar que durante el mundo antiguo, Cerro de la Estrella fue sede de la <b>ceremonia del Fuego Nuevo o Xiuhmolpilli</b> llevada acabo por la cultura mexica, quienes realizaban el ritual que daba continuidad a la conservación del universo, ya que creían que al cabo de 52 años se acabaría el mundo. </p>
        <p class="text-para">Por otro lado, la segunda categoría de Cerro de la Estrella fue otorgada cinco décadas después de la primera, debido a que el 90% de la superficie original del Parque Nacional había desaparecido por el crecimiento de mancha urbana y se requería evitar la destrucción de sus elementos naturales, mantener su función para la recarga del acuífero, así como para restaurar y preservar su equilibrio ecológico. Por lo que, el 30 de mayo de 1991 se publicó en el Diario Oficial de la Federación el decreto por el cual Cerro de la Estrella era declarado Área Natural Protegida con la categoría de Zona Sujeta a Conservación Ecológica.</p>
        <div class="space"></div>
        <div class="container container-element">
            <center>
                <h4 style="text-align: center;">Mapa Polígono de Cerro de la Estrella</h4>
                <br />
                <img class="img-poli" src="../../../src/imgs/sitios/cerroE/poligono.png">
            </center>
            <div class="space"></div>
        </div>
        <p class="text-para">A pesar que Cerro de la estrella conserva una vegetación perturbada, producto de numerosas y sucesivas reforestaciones realizadas en años pasados, donde se plantaron especies de eucalipto <i>(Eucalyptus camaldulensis)</i> y cedro blanco <i>(Cupressus lusitanica)</i>, existen relicto con pequeños manchones de pastizales conformadas por zacatón <i>(Muhlenbergia robusta)</i>, zacate cerdoso <i>(Setaria parviflora)</i> y grama <i>(Cynodon dactylon)</i>; en algunos sitios este pastizal se asocia con el matorral xerófilo. </p>
        <p class="text-para">Entre las especies nativas que permanece en el matorral xerófilo están casahuate <i>(Ipomoea murucoides)</i>, huizache <i>(Vachellia farnesiana)</i>, yuca <i>(Yucca filifera)</i>, palmita <i>(Nolina parviflora)</i>, palo loco <i>(Pittocaulon praecox)</i>, cardón <i>(Opuntia imbricata)</i>, varias especies de mamilarias <i>(Mammillaria spp.)</i>, palo dulce <i>(Eysenhardtia polystachya)</i>, uña de gato <i>(Mimosa aculeaticarpa)</i>, flor de tigre <i>(Tigridia vanhouttei)</i>, entre otras.</p>
        <br />
        <div class="row">
            <div onclick="fireSwaltar('Cer',0)" class="col-5 grid-img-3" style="background-image: url(../../../src/imgs/sitios/cerroE/1.jpg);">
            </div>
            <div onclick="fireSwaltar('Cer',1)" class="col-7 grid-img-3" style="background-image: url(../../../src/imgs/sitios/cerroE/2.jpg);">
            </div>
        </div>
        <div class="row">
            <div onclick="fireSwaltar('Cer',2)" class="col-7 grid-img-2" style="background-image: url(../../../src/imgs/sitios/cerroE/3.jpg);">
            </div>
            <div onclick="fireSwaltar('Cer',3)" class="col-5 grid-img-2" style="background-image: url(../../../src/imgs/sitios/cerroE/4.jpg);">
            </div>
        </div>
        <br />
        <p class="text-para">Por su parte, la zona cuenta con un registro de 68 especies de vertebrados terrestres, distribuidas en <b>2 especies de anfibios, 5 de reptiles, 16 de mamíferos y 45 de aves</b>. En cuanto a aves, además de ser el grupo más numeroso, se estima que el 44.4% de las especies son residentes, el 33.3% son migratorias de invierno y una migratoria de verano como la golondrina común <i>(Hirundo rustica)</i>.</p>
        <p class="text-para">De las especies de aves registradas, cinco de ellas son semiendémicas: colibrí lucifer <i>(Calothorax lucifer)</i>, tirano gritón <i>(Tyrannus vociferans)</i>, carbonero mexicano <i>(Poecile sclateri)</i>, gorrión pálido <i>(Spizella pallida)</i> y, picogordo tigrillo <i>(Pheucticus melanocephalus)</i>, esto es, aquellas especies restringidas a una región durante una época del año; una se reporta como cuasiendémica <i>(carbonero mexicano)</i>, cuya distribución sólo se extiende fuera de México en poco más de 3 hectáreas.</p>
        <br />
        <div class="row">
            <div onclick="fireSwaltar('Cer',4)" class="col-7 grid-img-3" style="background-image: url(../../../src/imgs/sitios/cerroE/5.jpg);">
            </div>
            <div onclick="fireSwaltar('Cer',5)" class="col-5 grid-img-3" style="background-image: url(../../../src/imgs/sitios/cerroE/6.jpg);">
            </div>
        </div>
        <div class="row">
            <div onclick="fireSwaltar('Cer',6)" class="col-4 grid-img-2" style="background-image: url(../../../src/imgs/sitios/cerroE/7.jpg);">
            </div>
            <div onclick="fireSwaltar('Cer',7)" class="col-4 grid-img-2" style="background-image: url(../../../src/imgs/sitios/cerroE/8.jpg);">
            </div>
            <div onclick="fireSwaltar('Cer',8)" class="col-4 grid-img-2" style="background-image: url(../../../src/imgs/sitios/cerroE/9.jpg);">
            </div>
        </div>
        <div class="space"></div>
        <div id="col-green" class="container-fluid col-green" onmouseover="cambiaText('Cer',1);" onmouseout="cambiaText('Cer',0);   ">
            El 24 de agosto de 1938 se publicó en el Diario Oficial de la Federación, el Decreto por el que se establece a Cerro de la Estrella como Parque Nacional.
        </div>
        <div class="space"></div>
        <h2>Disfruta de este lugar</h2>
        <br />
        <p class="text-para">Diariamente Cerro de la Estrella es visitada por deportistas, quienes disfrutan del aire libre así como del reto de llegar a la Pirámide de Fuego Nuevo que se encuentra en la cima, la cual ofrece una vista panorámica de la Ciudad de México. Está Área Natural Protegida se encuentra muy cerca de la estación del metro Cerro de la Estrella de la línea 8.</p>
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
            <div onclick="fireSwaltar('Cer',9)" class="col-12 grid-img-3" style="background-image: url(../../../src/imgs/sitios/cerroE/10.jpg);">
            </div>
        </div>
        <div class="row">
            <div onclick="fireSwaltar('Cer',10)" class="col-6 grid-img-2" style="background-image: url(../../../src/imgs/sitios/cerroE/11.jpg);">
            </div>
            <div onclick="fireSwaltar('Cer',11)" class="col-6 grid-img-2" style="background-image: url(../../../src/imgs/sitios/cerroE/12.jpg);">
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
                        <th scope="col">HORARIO DE ACCESO</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>Lunes a Viernes de 9 a 17 horas</td>
                        <td>(55) 26 35 23 52<br>
                            (55) 26 35 22 53</td>
                        <td scope="row">Horario de visita: 7 a 15 horas de lunes a domingo </td>
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
                center: [-99.09004650066893, 19.343900626596987],
                zoom: 15
            });
            var marker = new mapboxgl.Marker()
                .setLngLat([-99.09004650066893, 19.343900626596987])
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
                            <a class="nav-link" href="../sinContenido.php" style="color: white;">ACCIONES</a>
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