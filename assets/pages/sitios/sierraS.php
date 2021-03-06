<html>

<head>
    <title>
        ANP | Sierra de Santa Catarina
    </title>
    <link href="../../dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="../../dist/js/bootstrap.bundle.min.js"></script>
    <script src="//cdn.jsdelivr.net/npm/sweetalert2@10"></script>
    <script src="../../dist/js/p5.js" type="text/javascript"></script>
    <script type="text/javascript" src="../../../assets/json/card.js"></script>
    <script type="text/javascript" src="../../../assets/js/sitios/tarjetas.js"></script>
    <link rel="stylesheet" href="../../css/sitios/sierraSStyle.css">
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
        <h1 class="text-goth">Sierra de Santa Catarina</h1>
        <p class="text-goth sub-sub">ZONA DE CONSERVACI??N ECOL??GICA</p>
        <p class="text-goth sub-sub">ZONA SUJETA A CONSERVACI??N ECOL??GICA</p>
        <br />
        <p class="text-para">Sierra de Santa Catarina es una de las ??reas Naturales Protegidas de la Ciudad de M??xico con dos categor??as, debido a la necesidad de ser destinadas como Zona Prioritaria de Preservaci??n y Conservaci??n del Equilibrio Ecol??gico, y as??  conservar y restaurar sus condiciones ambientales.</p>
        <p class="text-para">Por lo que, integrada por 21 pol??gonos que suman una superficie de <b>748.55</b> hect??reas, Sierra Santa Catarina forma un cintur??n en las porciones norte, noreste, este, sur y suroeste de la parte baja de la sierra con el mismo nombre que abarca las alcald??as Iztapalapa y Tl??huac.</p>
        <div class="space"></div>
        <div class="container container-element">
            <center>
                <h4 style="text-align: center;">Mapa poligonal de Sierra de Santa Catarina</h4>
                <br />
                <img class="img-poli" src="../../../src/imgs/sitios/sierraS/poligono.png">
            </center>
            <div class="space"></div>
        </div>
        <p class="text-para">Sierra de Santa Catarina est?? cubierta principalmente por <b>matorral xer??filo y pastizal</b>, donde habitan cerca de <b>241 especies de plantas</b>, 90.5% de ellas son <b>nativas</b>, como el palo dulce <i>(Eysenhardtia polystachya)</i>, sumaco <i>(Rhus standleyi)</i> y membrillo cimarr??n <i>(Condalia mexicana)</i>.</p>
        <p class="text-para">En el matorral se desarrolla en las porciones m??s secas del ??rea Natural Protegida y agrupa comunidades arbustivas, en ocasiones acompa??adas por ??rboles bajos y dispersos, donde predominan la siempreviva <i>(Sedum praealtum)</i>, palma <i>(Nolina parviflora)</i>, palo loco <i>(Pittocaulon praecox)</i>, tepoz??n <i>(Buddleia cordata)</i>, nopal chamacuero <i>(Opuntia tormentosa)</i> y huizache <i>(Acacia farnesiana)</i>.</p>
        <p class="text-para">Por su parte, el pastizal que se localiza en zonas m??s bajas, sobre todo en la franja sur de la Sierra, no presenta una composici??n flor??stica constante y predominan especies de pastos anuales como <i>Aristida adscensionis</i> y <i>Bouteloua simplex</i>, con ejemplares de pirul <i>(Schinus molle)</i> y en algunos sitios se mezcla con arbustos propios del matorral.</p>
        <br />
        <div class="row">
            <div onclick="fireSwaltar('Sis',0)" class="col-5 grid-img-3" style="background-image: url(../../../src/imgs/sitios/sierraS/1.jpg);">
            </div>
            <div onclick="fireSwaltar('Sis',1)" class="col-7 grid-img-3" style="background-image: url(../../../src/imgs/sitios/sierraS/2.jpg);">
            </div>
        </div>
        <div class="row">
            <div onclick="fireSwaltar('Sis',2)" class="col-7 grid-img-3" style="background-image: url(../../../src/imgs/sitios/sierraS/3.jpg);">
            </div>
            <div onclick="fireSwaltar('Sis',3)" class="col-5 grid-img-3" style="background-image: url(../../../src/imgs/sitios/sierraS/4.jpg);">
            </div>
        </div>
        <br />
        <p class="text-para">En cuanto a su fauna, habitan cerca de 65 especies de vertebrados: <b>2 de anfibios, 14 de reptiles, 30 de aves y 19 de mam??feros</b>. De acuerdo con la <b>NOM-059-SEMARNAT-2001</b>, 3 especies de reptiles se encuentran Amenazadas, el falso camale??n <i>(Phrynosoma orbiculare)</i>; el cincuate <i>(Pituophis deppei)</i>; y la culebra listonada <i>(Thamnophis eques)</i>; 5 est??n Sujetas a Protecci??n Especial, falso escorpi??n <i>(Barisia imbricata)</i>; lagartija escamosa de mezquite <i>(Sceloporus grammicus)</i>; v??bora de cascabel cola negra <i>(Crotalus molossus)</i>; cascabel pigmea <i>(Sistrurus ravus)</i> y culebra parchada <i>(Salvadora bairdi)</i>.</p>
        <br />
        <div class="row">
            <div onclick="fireSwaltar('Sis',4)" class="col-5 grid-img-3" style="background-image: url(../../../src/imgs/sitios/sierraS/5.jpg);">
            </div>
            <div onclick="fireSwaltar('Sis',5)" class="col-7 grid-img-3" style="background-image: url(../../../src/imgs/sitios/sierraS/6.jpg);">
            </div>
        </div>
        <div class="row">
            <div onclick="fireSwaltar('Sis',6)" class="col-7 grid-img-2" style="background-image: url(../../../src/imgs/sitios/sierraS/7.jpg);">
            </div>
            <div onclick="fireSwaltar('Sis',7)" class="col-5 grid-img-2" style="background-image: url(../../../src/imgs/sitios/sierraS/8.jpg);">
            </div>
        </div>
        <div class="row">
            <div onclick="fireSwaltar('Sis',8)" class="col-5 grid-img-3" style="background-image: url(../../../src/imgs/sitios/sierraS/9.jpg);">
            </div>
            <div onclick="fireSwaltar('Sis',9)" class="col-7 grid-img-3" style="background-image: url(../../../src/imgs/sitios/sierraS/10.jpg);">
            </div>
        </div>
        <div class="space"></div>
        <div id="col-green" class="container-fluid col-green" onmouseover="cambiaText('Sis',1);" onmouseout="cambiaText('Sis',0);   ">
            El 3 de noviembre de 1994 es publicado en el Diario Oficial de la Federaci??n el decreto presidencial donde Sierra de Santa Catarina es considerada ??rea Natural Protegida bajo la categor??a de Zona Sujeta a Conservaci??n Ecol??gica con una superficie de 756.82 hect??reas.
        </div>
        <div class="space"></div>
        <h2>Disfruta de este lugar</h2>
        <br />
        <p class="text-para">Sierra de Santa Catarina conserva tres parques ubicados dentro de los 21 pol??gonos: <b>Parque Yecahuitzol, Zapote</b> y <b>Zacatepec</b>, los cuales juegan un papel importante como zonas recreativas y de esparcimiento para la comunidad, donde a diferencia de los parques clasificados como urbanos, permiten que los usuarios entren en contacto con la naturaleza, ya que, se puede apreciar los bellos paisajes de la sierra y ver fauna silvestre end??mica. </p>
        <br />
        <div class="row">
            <div class="col"></div>
            <div class="col-2">
                <center>
                    <img class="img-icon" src="../../../src/imgs/iconos/planta.svg">
                    <br /><br />
                    <h4 class="img-icon-txt">??Ayudanos a conservar!</h4>
                </center>
            </div>
            <div class="col"></div>
            <div class="col-2">
                <center>
                    <img class="img-icon" src="../../../src/imgs/iconos/casco.svg">
                    <br /><br />
                    <h4 class="img-icon-txt">Programa de rehabilitaci??n</h4>
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
            <div onclick="fireSwaltar('Sis',10)" class="col-5 grid-img-3" style="background-image: url(../../../src/imgs/sitios/sierraS/11.jpeg);">
            </div>
            <div onclick="fireSwaltar('Sis',11)" class="col-7 grid-img-3" style="background-image: url(../../../src/imgs/sitios/sierraS/12.jpeg);">
            </div>
        </div>
        <div class="row">
            <div onclick="fireSwaltar('Sis',12)" class="col-4 grid-img-2" style="background-image: url(../../../src/imgs/sitios/sierraS/13.jpeg);">
            </div>
            <div onclick="fireSwaltar('Sis',13)" class="col-4 grid-img-2" style="background-image: url(../../../src/imgs/sitios/sierraS/14.jpg);">
            </div>
            <div onclick="fireSwaltar('Sis',14)" class="col-4 grid-img-2" style="background-image: url(../../../src/imgs/sitios/sierraS/15.jpg);">
            </div>
        </div>
        <div class="row">
            <div onclick="fireSwaltar('Sis',15)" class="col-7 grid-img-3" style="background-image: url(../../../src/imgs/sitios/sierraS/16.jpg);">
            </div>
            <div onclick="fireSwaltar('Sis',16)" class="col-5 grid-img-3" style="background-image: url(../../../src/imgs/sitios/sierraS/17.jpg);">
            </div>
        </div>
        <div class="row">
            <div onclick="fireSwaltar('Sis',17)" class="col-4 grid-img-2" style="background-image: url(../../../src/imgs/sitios/sierraS/18.jpg);">
            </div>
            <div onclick="fireSwaltar('Sis',18)" class="col-4 grid-img-2" style="background-image: url(../../../src/imgs/sitios/sierraS/19.jpg);">
            </div>
            <div onclick="fireSwaltar('Sis',19)" class="col-4 grid-img-2" style="background-image: url(../../../src/imgs/sitios/sierraS/20.jpeg);">
            </div>
        </div>
        <div class="row">
            <div onclick="fireSwaltar('Sis',20)" class="col-5 grid-img-3" style="background-image: url(../../../src/imgs/sitios/sierraS/21.jpeg);">
            </div>
            <div onclick="fireSwaltar('Sis',21)" class="col-7 grid-img-3" style="background-image: url(../../../src/imgs/sitios/sierraS/22.jpeg);">
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
                        <td scope="row">Tlaxcala esquina Puebla s/n,<br>Col. San Miguel Teotongo, secci??n Guadalupe,<br>Alcald??a Iztapalapa, C.P. 09630.</td>
                        <td>Lunes a Viernes de 9 a 17 horas</td>
                        <td>(55) 26 35 23 52<br/>(55) 26 35 22 53</td>
                        <td>Horarios de acceso de 7 a 17 horas<br>de lunes a domingo</td>
                    </tr>
                </tbody>
            </table>
        </div>
        <br />
        <div id='map' style='width: 100%; height: 480px;'></div>
        <p class="img-foot">Oprime control (CTRL) y con el click izquierdo apretado arrastra el mouse para ver el mapa en 3D</p>
        <script>
            mapboxgl.accessToken = 'pk.eyJ1IjoienVsaGVybmFuZGV6IiwiYSI6ImNrcDV4bTRwdDAxYnYyb3JzeHE1bTBkdHYifQ.ZtB7l8cP6rC74rgXY45dUQ';
            var map = new mapboxgl.Map({
                container: 'map',
                style: 'mapbox://styles/zulhernandez/ckpdmziyd83mk18rxachvu66r',
                center: [-98.20575455879465,19.0454267576268],
                zoom: 15
            });
            var marker = new mapboxgl.Marker()
                .setLngLat([-98.20575455879465,19.0454267576268])
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