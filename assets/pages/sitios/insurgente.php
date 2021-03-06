<html>

<head>
    <title>
        ANP | Insurgente Miguel Hidalgo y Costilla
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
        <h1 class="text-goth">Insurgente Miguel Hidalgo y Costilla</h1>
        <p class="text-goth sub-sub">PARQUE NACIONAL</p>
        <br />
        <p class="text-para">El ??rea Natural Protegida Insurgente Miguel Hidalgo y Costilla con <b>336 hect??reas</b> forma parte de La Marquesa y se ubica sobre la carretera que une a la Ciudad de M??xico con la ciudad de Toluca. Su nombre se debe a la hist??rica Batalla del Monte de las Cruces que se llevo en esta zona, donde el insurgente, <b>Miguel Hidalgo y Costilla</b>, derroc?? al oficial de Nueva Espa??a, Torcuato Trujillo, que form?? parte del movimiento de independencia de M??xico. </p>
        <div class="space"></div>
        <div class="container container-element">
            <center>
                <h4 style="text-align: center;">Mapa Pol??gono de Insurgente Miguel Hidalgo y Costillas</h4>
                <br />
                <!--<img class="img-poli" src="../../../src/imgs/sitios/bosquesL/poligono.png">-->
            </center>
            <div class="space"></div>
        </div>
        <p class="text-para">Con una superficie monta??osa acompa??ada de valles y ca??adas, la principal vegetaci??n que compone esta ??rea Natural Protegida es <b>bosque de oyamel <i>(Abies spp.)</i> y pino <i>(Pinus spp.)</i></b>, cuyo estrato arb??reo alcanza los 35 metros acompa??ado de otras especies como encinos <i>(Quercus spp.)</i>, as?? como escobilla <i>(Baccharis conferta)</i>, cardo de monta??a, flor de ara??a <i>(Sigesbeckia jorullensis)</i>, briofita <i>(Thuidium delicatulum)</i>, cadillo <i>(Acaena elongata)</i>, jarilla blanca <i>(Senecio cinerarioides)</i>, pata de le??n <i>(Alchemilla procumbens)</i>, frijolillo <i>(Lupinus montanus)</i>, zacate aparejo, zacate liso <i>(Muhlenbergia quadridentata)</i>, itamo rojo <i>(Potentilla rubra)</i>, por mencionar algunas. </p>
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
        <p class="text-para">Entre sus especies de fauna destacan: musara??a orejillas mexicana <i>(Cryptotis nelsoni)</i>, lagarto alicante del Popocat??petl <i>(Barisia imbricata)</i>, lagartija escamosa de mezquite <i>(Sceloporus grammicus)</i> y esliz??n de Cope <i>(Plestiodon copei)</i>, especies sujetas a protecci??n especial; culebra terrestre dos l??neas <i>(Conopsis biserialis)</i>, v??bora de cascabel <i>(Crotalus intermedius)</i>, culebra sorda mexicana <i>(Pituophis deppei)</i>, culebra listonada cuello negro <i>(Thamnophis cyrtopsis)</i>, v??bora cascabel pigmea mexicana <i>(Crotalus ravus)</i> catalogadas como amenazadas y v??bora de cascabel <i>(Crotalus transversus)</i> en peligro de extinci??n. </p>
        <br/>
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
        <div id="col-green" class="container-fluid col-green" onmouseover="cambiaText('Ins',1);" onmouseout="cambiaText('Ins',0);   ">
            El 18 de septiembre de 1936 el ??rea Natural Protegida Insurgente Miguel Hidalgo y Costilla es decretada bajo la categor??a de Parque Nacional.
        </div>
        <div class="space"></div>
        <h2>Disfruta de este lugar</h2>
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
                        <th scope="col">HORARIO DE ATENCI??N</th>
                        <th scope="col">TEL??FONO</th>
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
                center: [-99.69317608656861,19.283573233996343],
                zoom: 15
            });
            var marker = new mapboxgl.Marker()
                .setLngLat([-99.69317608656861,19.283573233996343])
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