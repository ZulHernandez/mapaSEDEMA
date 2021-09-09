<html>

<head>
    <title>
        ANP | Desierto de los Leones
    </title>
    <link href="../../dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="../../dist/js/bootstrap.bundle.min.js"></script>
    <script src="//cdn.jsdelivr.net/npm/sweetalert2@10"></script>
    <script src="../../dist/js/p5.js" type="text/javascript"></script>
    <script type="text/javascript" src="../../../assets/json/card.js"></script>
    <script type="text/javascript" src="../../../assets/js/sitios/tarjetas.js"></script>
    <link rel="stylesheet" href="../../css/sitios/desiertoStyle.css">
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
        <h1 class="text-goth">Desierto de los Leones</h1>
        <p class="text-goth sub-sub">PARQUE NACIONAL</p>
        <br />
        <p class="text-para">Desierto de los Leones, ubicado entre las alcaldías Cuajimalpa de Morelos y Álvaro Obregón y los límites de Magdalena Contreras, fue la primera Área Natural Protegida en ser decretada con la categoría de Parque Nacional el 27 de noviembre de 1917 por el <b>presidente Venustiano Carranza</b>, debido a la belleza natural de sus paisajes y al alto interés histórico de las ruinas que en él se encuentran.</p>
        <p class="text-para">Los <b>valores histórico y cultural</b> que le son conferidos a Desierto de los Leones se encuentra en sus monumentos históricos que pertenecieron a la orden religiosa de los Carmelitas Descalzos. La fundación del convento se remonta al año 1604, fecha en que Don Juan de Mendoza, Virrey de la Nueva España, otorgó la propiedad de los montes de Santa Fe y Tacubaya a la orden de los Carmelitas Descalzos.</p>
        <div class="space"></div>
        <div class="container container-element">
            <center>
                <h4 style="text-align: center;">Mapa Polígono de Desierto de los Leones</h4>
                <br />
                <img class="img-poli" src="../../../src/imgs/sitios/desierto/poligono.png">
            </center>
            <div class="space"></div>
        </div>
        <p class="text-para">Está área natural posee una superficie de <b>1,529 hectáreas</b> cubierta por diversos tipos de vegetación: bosque de <i>Abies-Pinus-Quercus</i>, bosque de <i>Abies religiosa</i>, bosque de <i>Abies-Pinus hartwegii</i>, Bosque de <i>Pinus hartwegii-Pastizal</i>, vegetación secundaria y áreas de reforestación.</p>
        <p class="text-para">El <b>bosque de <i>Abies-Pinus-Quercus</i></b> es la vegetación que cubre la mayor parte del Área Natural Protegida ubicada en la parte norte, donde encontramos otras especies como <i>Senecio barba-johannis, Symphoricarpos microphyllus, Cestrum anagyris, Solanum cervantesii, Physalis viscosa, Fuchsia microphylla, Geranium seemannii, Valeriana clematitis</i>, entre otras.</p>
        <p class="text-para">Por su parte, el <b>bosque de <i>Abies religiosa</i></b> presenta una área perturbada debido al incendio forestal de 1998, el cual motivo a reconfigurar los protocolos que actualmente son usados para la prevención y combate de incendios forestales y asegurar la conservación de la biodiversidad. En la actualidad, existen superficies que han sido reforestadas, principalmente con <i>Pinus ayacahuite</i>, aunque también se han utilizado <i>Cupressus lusitanica, Abies religiosa</i> y <i>Pinus spp</i>.</p>
        <p class="text-para">La comunidad mejor adaptada al clima de alta montaña es el <b>bosque de <i>Pinus hartwegii-Pastizal</i></b>, por lo que se ubica en las cimas y laderas de los Cerros San Miguel y Caballete, sitio cubierto también por <i>Baccharis conferta, Lupinus montanus, Juniperus monticola, Senecio cinerarioides</i> y <i>Ribes ciliatum</i>, sobre todo en lugares rocosos, así como <i>Eryngium proteiflorum, Penstemon gentianioides, Echeveria secunda</i>, entre otras. Algunos de los hongos presentes son <i>Laccaria laccata, Amanita aff. rubescens, Collybia dryophyla</i> y <i>Boletus spp.</i></p>
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
        <p class="text-para">En cuanto a su fauna, habitan cerca de 136 especies de vertebrados: <b>tres anfibios, cinco reptiles, 35 aves y 14 a mamíferos</b>. De acuerdo a la NOM-059-SEMARNAT-2001, 15 especies se encuentran en alguna categoría de riesgo (amenazadas o sujetas a protección especial) y constituyen el 11% del total de especies registradas. Cinco especies de anfibios (71.4%), tres de reptiles (37.5%) y siete especies de aves (7.4%) se ubican en alguna categoría de riesgo.</p>
        <br />
        <div class="row">
            <div onclick="fireSwaltar('Des',0)" class="col-7 grid-img-3" style="background-image: url(../../../src/imgs/sitios/desierto/1.jpg);">
            </div>
            <div onclick="fireSwaltar('Des',1)" class="col-5 grid-img-3" style="background-image: url(../../../src/imgs/sitios/desierto/2.jpg);">
            </div>
        </div>
        <div class="row">
            <div onclick="fireSwaltar('Des',2)" class="col-5 grid-img-3" style="background-image: url(../../../src/imgs/sitios/desierto/3.jpg);">
            </div>
            <div onclick="fireSwaltar('Des',3)" class="col-7 grid-img-3" style="background-image: url(../../../src/imgs/sitios/desierto/4.jpg);">
            </div>
        </div>
        <div class="space"></div>
        <div id="col-green" class="container-fluid col-green" onmouseover="cambiaText('Des',1);" onmouseout="cambiaText('Des',0);   ">
            El 27 de noviembre de 1917 el Área Natural Protegida Desierto de los Leones es decretada bajo la categoría de Parque Nacional.
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
            <div onclick="fireSwaltar('Bos',12)" class="col-5 grid-img-3" style="background-image: url(../../../src/imgs/sitios/bosquesL/13.jpg);">
            </div>
            <div onclick="fireSwaltar('Bos',13)" class="col-7 grid-img-3" style="background-image: url(../../../src/imgs/sitios/bosquesL/14.jpg);">
            </div>
        </div>
        <div class="row">
            <div onclick="fireSwaltar('Bos',14)" class="col-7 grid-img-2" style="background-image: url(../../../src/imgs/sitios/bosquesL/15.jpg);">
            </div>
            <div onclick="fireSwaltar('Des',4)" class="col-5 grid-img-2" style="background-image: url(../../../src/imgs/sitios/desierto/5.png);">
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
                center: [-99.30986598627449, 19.313537185260465],
                zoom: 15
            });
            var marker = new mapboxgl.Marker()
                .setLngLat([-99.30986598627449, 19.313537185260465])
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