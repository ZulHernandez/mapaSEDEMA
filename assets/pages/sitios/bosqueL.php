<html>

<head>
    <title>
        ANP | Bosque de las Lomas
    </title>
    <link href="../../dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="../../dist/js/bootstrap.bundle.min.js"></script>
    <script src="//cdn.jsdelivr.net/npm/sweetalert2@10"></script>
    <script src="../../dist/js/p5.js" type="text/javascript"></script>
    <script type="text/javascript" src="../../../assets/json/card.js"></script>
    <script type="text/javascript" src="../../../assets/js/sitios/tarjetas.js"></script>
    <link rel="stylesheet" href="../../css/sitios/bosquesLStyle.css">
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
                        <a class="nav-link" href="../galeria.php"">GALER??A</a>
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
        <h1 class="text-goth">Bosques de las Lomas</h1>
        <p class="text-goth sub-sub">ZONA SUJETA A CONSERVACI??N ECOL??GICA</p>
        <br />
        <p class="text-para">Bosques de las Lomas es una de las ??reas Naturales Protegidas m??s peque??as de la Ciudad de M??xico con una superficie de <b>26.40 hect??reas</b>, la cual se encuentra dividida en el fraccionamiento con el mismo nombre donde <b>22 pol??gonos</b> pertenecen a la alcald??a Miguel Hidalgo y un pol??gono a la alcald??a Cuajimalpa de Morelos.</b>.</p>
        <div class="space"></div>
        <div class="container container-element">
            <center>
                <h4 style="text-align: center;">Mapa poligonal de Bosques de las Lomas</h4>
                <br />
                <img class="img-poli" src="../../../src/imgs/sitios/bosquesL/poligono.png">
            </center>
            <div class="space"></div>
        </div>
        <p class="text-para">Aunque parte de la vegetaci??n original del ??rea Natural Protegida ha sido remplazada por especies ex??ticas e introducidas que se encuentran en camellones, a la orilla de las calles o peque??os parques, existen <b>remanentes de bosques de encino</b>.</p>
        <p class="text-para">El encino <i>(Quercus spp.)</i> es una especie clave en la restauraci??n de ecosistemas, ya que, sus profundas ra??ces contribuyen a la infiltraci??n y conservaci??n de mantos acu??feros; sus hojas ayudan a la formaci??n y estabilizaci??n del suelo; as?? como es la casa y alimento de otras especies. </p>
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
        <p class="text-para">Actualmente, se requiere de nuevas investigaciones para conocer m??s sobre la biodiversidad que conserva Bosques de las Lomas, sin embargo, asociaciones vecinales en pro de la conservaci??n del medio ambiente han realizado <b>monitoreos de aves</b> registrando especies como: picogordo tigrillo <i>(Pheucticus melanocephalus)</i>??????, capulinero gris <i>(Ptilogonys cinereus)</i>, carpintero bellotero <i>(Melanerpes formicivorus)</i>, cern??calo americano <i>(Falco sparverius)</i>, colibr?? berilo <i>(Saucerottia beryllina)</i>, papamoscas cardenalito <i>(Pyrocephalus rubinus)</i>, as?? como las especies end??micas mirlo dorso canela <i>(Turdus rufopalliatus)</i>, calandria flancos negros <i>(Icterus abeillei)</i> y mulato azul??? <i>(Melanotis caerulescens)</i>.</p>
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
            El 10 de agosto de 1994 el ??rea Natural Protegida Bosques de las Lomas es decretada bajo la categor??a de Zona Sujeta a Conservaci??n Ecol??gica.
        </div>
        <div class="space"></div>
        <h2>Disfruta de este lugar</h2>
        <br />
        <div class="row">
            <div class="col-8">
                <p class="text-para">Est?? ??rea Natural Protegida est?? dispersa por la zona urbana donde se pueden encontrar diferentes espacios recreativos como ??reas de juegos infantiles, as?? como dos parques: Jacarandas y Alerces.</p>
                <h4 class="img-icon-txt">??Ayudanos a conservar!</h4>
            </div>
            <div class="col">
                <center>
                    <img class="img-icon" src="../../../src/imgs/iconos/planta.svg">
                    <br />
                </center>
            </div>
        </div>
        <br />
        <div class="row">
            <div onclick="fireSwaltar('Bos',12)" class="col-5 grid-img-3" style="background-image: url(../../../src/imgs/sitios/bosquesL/13.jpg);">
            </div>
            <div onclick="fireSwaltar('Bos',13)" class="col-7 grid-img-3" style="background-image: url(../../../src/imgs/sitios/bosquesL/14.jpg);">
            </div>
        </div>
        <div class="row">
            <div onclick="fireSwaltar('Bos',14)" class="col-7 grid-img-2" style="background-image: url(../../../src/imgs/sitios/bosquesL/15.jpg);">
            </div>
            <div onclick="fireSwaltar('Bos',15)" class="col-5 grid-img-2" style="background-image: url(../../../src/imgs/sitios/bosquesL/16.jpg);">
            </div>
        </div>
        <div class="space"></div>
        <h2>Ubicaci??n</h2>
        <p><b>Oficinas de Administraci??n</b></p>
        <div class="table-responsive">
            <table class="table table-striped table-bordered">
                <thead>
                    <tr class="tab-head text-goth">
                        <th scope="col">UBICACI??N</th>
                        <th scope="col">HORARIO DE ATENCI??N</th>
                        <th scope="col">TEL??FONO</th>
                        <th scope="col">HORARIO DE ACCESO</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td scope="row">Bosques de las Lomas, Ciudad de M??xico,<br />Ciudad de M??xico</td>
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
    <nav style="background-color: #410d1c;">
        <div class="container">
            <br /><br />
            <div class="row">
                <div class="col-sm-1"></div>
                <div class="col-sm-6" style="color: white;">
                    <p><b style="color: white;">Direcci??n General del Sistema de ??reas Naturales Protegidas y ??reas de Valor Ambiental</b></p>
                    <p style="line-height: 5px;">Ubicaci??n:</p>
                    <a style="color: white;" href="https://www.google.com/maps/place/Gran+Avenida,+Bosque+de+Chapultepec+I+Secc,+11100+Ciudad+de+M%C3%A9xico,+CDMX/@19.4166948,-99.1887763,18z/data=!3m1!4b1!4m5!3m4!1s0x85d1ff574c8f4a77:0x96bdf28cb411c96f!8m2!3d19.416693!4d-99.1879798" target="_blank">
                        <p>Gran Avenida, Lomas de Chapultepec, Primera Secci??n, Miguel Hidalgo, C.P. 11000, Ciudad de M??xico.</p>
                    </a>
                </div>
                <div class="col-sm-1"></div>
                <div class="col-sm-3">
                    <p><b style="color: white;">Navegaci??n</b></p>
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
                            <a class="nav-link" href="../galeria.php"">GALER??A</a>
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