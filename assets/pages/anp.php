<html>

<head>
    <title>
        Áreas Naturales Protegidas
    </title>
    <link href="../../assets/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="../../assets/dist/js/bootstrap.bundle.min.js"></script>
    <script src="//cdn.jsdelivr.net/npm/sweetalert2@10"></script>
    <script type="text/javascript" src="../../assets/json/card.js"></script>
    <script type="text/javascript" src="../../assets/js/mapaANP.js"></script>
    <script src="../../assets/dist/js/p5.js" type="text/javascript"></script>
    <link rel="stylesheet" href="../../assets/css/gStyle.css">
    <link rel="stylesheet" href="../../assets/css/anpStyle.css">
    <link rel="shortcut icon" href="../../src/imgs/iconos/icon.svg" type="image/x-icon">
</head>

<body>
    <nav class="navbar navbar-expand-lg navbar-dark" style="background-color: #410d1c;">
        <div class="container">
            <a class="navbar-brand" href="../../index.php"><img src="../../src/imgs/headIcon.svg"></a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#menu" aria-controls="menu" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse text-goth" id="menu">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                    <li class="nav-item">
                        <a class="nav-link" href="../../index.php">INICIO</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="sinContenido.php">ANP</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="acciones.php">ACCIONES</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="galeria.php"">GALERÍA</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="sinContenido.php">CONTACTO</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
    <div class="container-fluid hero" style="padding: 0px;"></div>
    <div class="space"></div>
    <div class="container-lg container-fluid container-body">
        <h1>¿QUÉ SON LAS ANP?</h1>
        <br />
        <p class="text-para">La sigla <b>ANP</b> es usada para referirse a las <b>Áreas Naturales Protegidas</b>, zonas del territorio nacional cubiertas por ecosistemas originales que no han sido significativamente alteradas por actividades humanas y requieren ser preservadas por su estructura y función para la conservación de biodiversidad y servicios ambientales.</p>
        <br />
        <p class="text-para">En México existen aproximadamente 536 ANP, donde habitan cerca de 26 mil especies de plantas, 282 especies de anfibios, 707 de reptiles y 439 de mamíferos, lo que representa el 10% de biodiversidad terrestre en el mundo convirtiendose en un país megadiverso.</p>
        <br />
        <p class="text-para">Entre las Áreas Naturales Protegidas más conocidas en el país están Parque Nacional Cumbres (Monterrey), Reserva de la Biosfera Mariposa Monarca (Michoacán), Parque Nacional Iztaccihuatl-Popocatépetl (Puebla), Reserva de la Biosfera el Triunfo (Chiapas), Reserva de la Biosfera Calakmul (Campeche), Área de Protección Flora y Fauna Cañón Santa Elena (Chihuahua), Parque Nacional Tulum (Quintana Roo) y Parque Nacional Bahía de Loreto (Baja California Sur).</p>
        <div class="space"></div>
        <h2>ANP de la Ciudad de México</h2>
        <br />
        <p class="text-para">La mayoría de las ANP en México abarcan territorio estatal, mientras que sólo el 13% de ellas se encuentran en la capital; entidad principalmente urbana que aún conserva ecosistemas representativos de la Cuenca de México con vegetaciones de bosque de encino, bosque de pino, bosque de oyamel, matorral xerófilo y pastizal.</p>
        <br />
        <p class="text-para">La Cuenca de México es el territorio central del país que comprende el Estado de México, Hidalgo, Tlaxcala y casi toda la Zona Metropolitana, caracterizada por presentar depósitos lacustres y un activo vulcanismo que posee el 2% de diversidad global del planeta, entre ella, 3,000 especies de plantas.</p>
        <br />
        <p class="text-para">Algunas plantas propias de la Cuenca de México son: palo loco (Pittocaulon praecox), dahlia roja (Dahlia coccinea), oreja de burro (Echeveria gibbiflora), colorín (Erythrina coralloides) y conchita (Echeveria secunda). Todas ellas presentes en las <b>25 Áreas Naturales Protegidas de la Ciudad de México</b>.</p>
        <br />
        <div class="row">
            <div onclick="fireSwal(0)" class="col-7 grid-img-3" style="background-image: url(../../src/imgs/anp/1.jpg);">
            </div>
            <div onclick="fireSwal(1)" class="col-5 grid-img-3" style="background-image: url(../../src/imgs/anp/2.jpeg);">
            </div>
        </div>
        <div class="row">
            <div onclick="fireSwal(2)" class="col-4 grid-img-2" style="background-image: url(../../src/imgs/anp/3.jpg);">
            </div>
            <div onclick="fireSwal(3)" class="col-4 grid-img-2" style="background-image: url(../../src/imgs/anp/4.jpg);">
            </div>
            <div onclick="fireSwal(4)" class="col-4 grid-img-2" style="background-image: url(../../src/imgs/anp/5.jpg);">
            </div>
        </div>
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
        <div class="space"></div>
        <h2>Categorías de ANP en la Ciudad</h2>
        <br />
        <p class="text-para">Las 25 ANP de la ciudad abarcan 21,134.19 hectáreas, representando 14.61 por ciento de la superficie total de la capital a cargo de la Secretaría del Medio Ambiente (SEDEMA) y la Comisión Nacional de Áreas Naturales Protegidas (CONANP), algunas en coordinación entre ambas dependencia y alcaldías.</p>
        <br />
        <div class="row">
        <br />
            <div>
                <center>
                    <div id="mapa"></div>
                </center>
            </div>
            <div class="row">
                <div class="col-lg col-sm-4">
                    <ol type="1" style="padding-left: 50px;">
                        <b>
                            <a href="sitios/armella.php" target="_self">
                                <li class="anpName">La Armella</li>
                            </a>
                            <a href="sitios/sierraG.php" target="_self">
                                <li class="anpName">Sierra de Guadalupe</li>
                            </a>
                            <a href="sitios/bosqueL.php" target="_self">
                                <li class="anpName">Bosque de las Lomas</li>
                            </a>
                            <a href="sitios/loma.php" target="_self">
                                <li class="anpName">La Loma</li>
                            </a>
                            <a href="sitios/desierto.php" target="_self">
                                <li class="anpName">Desierto de los leones</li>
                            </a>
                            <a href="sitios/insurgente.php" target="_self">
                                <li class="anpName">Insurgente Miguel Hidalgo y Costilla</li>
                            </a>
                            <a href="sitios/pCDMX.php" target="_self">
                                <li class="anpName">Parque Ecológico de la Ciudad de México</li>
                            </a>
                            <a href="sitios/bosqueT.php" target="_self">
                                <li class="anpName">Bosque de Tlalpan</li>
                            </a>
                        </b>
                    </ol>
                </div>
                <div class="col-lg col-sm-4">
                    <ol type="1" style="padding-left: 50px;" start="9">
                        <b>
                            <a href="sitios/ecoguardas.php" target="_self">
                                <li class="anpName">Ecoguardas</li>
                            </a>
                            <a href="sitios/ejidosX.php" target="_self">
                                <li class="anpName">Ejidos de Xochimilco y San Gregorio Atlapulco</li>
                            </a>
                            <a href="sitios/sierraS.php" target="_self">
                                <li class="anpName">Sierra de Santa Catarina</li>
                            </a>
                            <a href="sitios/cerroE.php" target="_self">
                                <li class="anpName">Cerro de la Estrella</li>
                            </a>
                            <a href="sitios/sanB.php" target="_self">
                                <li class="anpName">San Bernabe Ocotepec</li>
                            </a>
                            <a href="sitios/sanN.php" target="_self">
                                <li class="anpName">San Nicolás Totolapan</li>
                            </a>
                            <a href="sitios/tempiluli.php" target="_self">
                                <li class="anpName">Tempiluli</li>
                            </a>
                            <a href="sitios/tepeyac.php" target="_self">
                                <li class="anpName">El Tepeyac</li>
                            </a>
                        </b>
                    </ol>
                </div>
                <div class="col-lg col-sm-4">
                    <ol type="1" style="padding-left: 50px;" start="17">
                        <b>
                            <a href="sitios/coyoacan.php" target="_self">
                                <li class="anpName">Histórico de Coyoacán</li>
                            </a>
                            <a href="sitios/encinos.php" target="_self">
                                <li class="anpName">Los Encinos</li>
                            </a>
                            <a href="sitios/lomasP.php" target="_self">
                                <li class="anpName">Lomas de Padierna</li>
                            </a>
                            <a href="sitios/cumbres.php" target="_self">
                                <li class="anpName">Cumbres del Ajusco</li>
                            </a>
                            <a href="sitios/sanMA.php" target="_self">
                                <li class="anpName">San Miguel Ajusco</li>
                            </a>
                            <a href="sitios/sanMT.php" target="_self">
                                <li class="anpName">San Miguel Topilejo</li>
                            </a>
                            <a href="sitios/fuenteB.php" target="_self">
                                <li class="anpName">Fuente Brotantes</li>
                            </a>
                        </b>
                    </ol>
                </div>
            </div>
        </div>
        <div class="space"></div>
        <p class="text-para">Dichas Áreas Naturales Protegidas se encuentran agrupadas en seis categorías distintas de acuerdo a la Ley General del Equilibrio Ecológico y la Protección al Ambiente (LEGEEPA) y la Ley Ambiental de Protección a la Tierra en el Distrito Federal (LAPTDF), las cuales son: <b>Parque Nacional, Zona de Conservación Ecológica, Zona de Protección Hidrológica y Ecológica, Zona Ecológica y Cultural, Zona Sujeta a Conservación Ecológica y Reserva Ecológica Comunitaria.</b> Es necesario resaltar que Cerro de la Estrella y Sierra de Santa Catarina poseen doble categoría que a continuación se ilustra. </p>
        <br />
        <h3>1. Parque Nacional</h3>
        <br />
        <p class="text-para">Son zonas naturales o seminaturales con escasa o nula población humana integrada por interrelaciones entre diversas comunidades de flora y fauna autóctona (LEGEEPA).</p>
        <br />
        <ul>
            <li>Desierto de los Leones</li>
            <li>Insurgente Miguel Hidalgo y Costilla</li>
            <li>Cumbres del Ajusco</li>
            <li>Fuentes Brotantes de Tlalpan</li>
            <li>El Tepeyac</li>
            <li>Lomas de Padierna </li>
            <li>Cerro de la Estrella (también posee en una de sus sección la categoría de Zona Ecológica y Cultural)</li>
            <li>Histórico de Coyoacán</li>
        </ul>
        <br />
        <h3>2. Zona de Conservación Ecológica (ZCE)</h3>
        <br />
        <p class="text-para">Son aquéllas que contienen muestras representativas de uno o más ecosistemas en buen estado de preservación y que están destinadas a proteger los elementos naturales y procesos ecológicos que favorecen el equilibrio y bienestar social (Artículo 92 Bis, LAPTDF).</p>
        <br />
        <ul>
            <li>Sierra de Santa Catarina (también posee la categoría de Zona Sujeta a Conservación Ecologica)</li>
            <li>La Armella</li>
            <li>Ecoguardas</li>
            <li>La Loma</li>
        </ul>
        <br />
        <h3>3. Zona de Protección Hidrológica y Ecológica (ZPHE)</h3>
        <br />
        <p class="text-para">Son las zonas en predios no construidos que por su ubicación reciben una precipitación pluvial superior a la media en la Ciudad de México y que por las características de suelo y subsuelo son permeables para la captación de agua de lluvia que contribuye a la recarga de los mantos acuíferos (Artículo 92 Bis 1, LAPTDF).</p>
        <br />
        <ul>
            <li>Los Encinos</li>
        </ul>
        <br />
        <h3>4. Zona Ecológica y Cultural (ZEC)</h3>
        <br />
        <p class="text-para">Son aquellas con importantes valores ambientales y ecológicos, donde también se presentan elementos físicos, históricos o arqueológicos o se realizan usos y costumbres de importancia cultural (Artículo 92 Bis 2, LAPTDF).</p>
        <br />
        <ul>
            <li>Cerro de la Estrella</li>
            <li>Bosque de Tlalpan</li>
        </ul>
        <br />
        <h3>5. Zona Sujeta a Conservación Ecológica (ZSCE)</h3>
        <br />
        <p class="text-para">Zonas las cuales están mezcladas con zonas urbanas en las que existan uno o más ecosistemas en buen estado de conservación, destinadas a preservar los elementos naturales indispensables al equilibrio ecológico y al bienestar general (Artículo 92 Bis 2, LAPTDF).</p>
        <br />
        <ul>
            <li>Parque Ecológico de la Ciudad de México</li>
            <li>Bosques de las Lomas</li>
            <li>Sierra de Guadalupe</li>
            <li>Ejidos de Xochimilco y San Gregorio Atlapulco</li>
            <li>Sierra de Santa Catarina</li>
        </ul>
        <br />
        <h3>6. Reserva Ecológica Comunitaria (REC)</h3>
        <br />
        <p class="text-para">Son aquellas establecidas por pueblos, comunidades y ejidos en terrenos de su propiedad destinadas a la preservación, protección y restauración de la biodiversidad y del equilibrio ecológico, sin que se modifique el régimen de propiedad. (Artículo 92 Bis 4, LAPTDF).</p>
        <br />
        <ul>
            <li>San Nicolás Totolapan</li>
            <li>San Miguel Topilejo</li>
            <li>San Bernabé Ocotepec</li>
            <li>San Miguel Ajusco</li>
        </ul>
        <br />
        <h3>Línea del Tiempo</h3>
        <h3 style="font-weight: lighter">Áreas Naturales Protegidas</h3>
        <br />
        <div id="carouselExampleIndicators" class="carousel slide" data-bs-ride="carousel">
            <div class="carousel-indicators">
                <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
                <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1" aria-label="Slide 2"></button>
                <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2" aria-label="Slide 3"></button>
                <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="3" aria-label="Slide 4"></button>
                <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="4" aria-label="Slide 5"></button>
                <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="5" aria-label="Slide 6"></button>
                <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="6" aria-label="Slide 7"></button>
                <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="7" aria-label="Slide 8"></button>
                <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="8" aria-label="Slide 9"></button>
                <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="9" aria-label="Slide 10"></button>
                <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="10" aria-label="Slide 11"></button>
                <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="11" aria-label="Slide 12"></button>
                <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="12" aria-label="Slide 13"></button>
                <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="13" aria-label="Slide 14"></button>
                <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="14" aria-label="Slide 15"></button>
                <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="15" aria-label="Slide 16"></button>
                <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="16" aria-label="Slide 17"></button>
                <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="17" aria-label="Slide 18"></button>
                <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="18" aria-label="Slide 19"></button>
                <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="19" aria-label="Slide 20"></button>
                <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="20" aria-label="Slide 21"></button>
                <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="21" aria-label="Slide 22"></button>
                <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="22" aria-label="Slide 23"></button>
                <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="23" aria-label="Slide 24"></button>
            </div>
            <div class="carousel-inner">
                <div class="carousel-inner">
                    <div class="carousel-item active time-line">
                        <div class="row">
                            <div class="col-4 div-date">
                                <p class="text-dia">27<br />Noviembre</p>
                                <p class="text-año">1917</p>
                            </div>
                            <div class="col-8 div-event">
                                <p class="event-zone">Desierto de los Leones​</p>
                                <p>Área Natural Protegida</p>
                                <p>Parque Nacional</p>
                            </div>
                        </div>
                    </div>
                    <div class="carousel-item time-line">
                        <div class="row">
                            <div class="col-4 div-date">
                                <p class="text-dia">18<br />Septiembre</p>
                                <p class="text-año">1936</p>
                            </div>
                            <div class="col-8 div-event">
                                <p class="event-zone">Insurgente Miguel Hidalgo y Costilla​</p>
                                <p>Área Natural Protegida</p>
                                <p>Parque Nacional</p>
                            </div>
                        </div>
                    </div>
                    <div class="carousel-item time-line">
                        <div class="row">
                            <div class="col-4 div-date">
                                <p class="text-dia">23<br />Septiembre</p>
                                <p class="text-año">1936</p>
                            </div>
                            <div class="col-8 div-event">
                                <p class="event-zone">Cumbres del Ajusco</p>
                                <p>Área Natural Protegida</p>
                                <p>Parque Nacional</p>
                            </div>
                        </div>
                    </div>
                    <div class="carousel-item time-line">
                        <div class="row">
                            <div class="col-4 div-date">
                                <p class="text-dia">28<br />Septiembre</p>
                                <p class="text-año">1936</p>
                            </div>
                            <div class="col-8 div-event">
                                <p class="event-zone">Fuentes Brotantes de Tlalpan</p>
                                <p>Área Natural Protegida</p>
                                <p>Parque Nacional</p>
                            </div>
                        </div>
                    </div>
                    <div class="carousel-item time-line">
                        <div class="row">
                            <div class="col-4 div-date">
                                <p class="text-dia">02<br />Febrero</p>
                                <p class="text-año">1937</p>
                            </div>
                            <div class="col-8 div-event">
                                <p class="event-zone">El Tepeyac</p>
                                <p>Área Natural Protegida</p>
                                <p>Parque Nacional</p>
                            </div>
                        </div>
                    </div>
                    <div class="carousel-item time-line">
                        <div class="row">
                            <div class="col-4 div-date">
                                <p class="text-dia">22<br />Abril</p>
                                <p class="text-año">1938</p>
                            </div>
                            <div class="col-8 div-event">
                                <p class="event-zone">Lomas de Padierna</p>
                                <p>Área Natural Protegida</p>
                                <p>Parque Nacional</p>
                            </div>
                        </div>
                    </div>
                    <div class="carousel-item time-line">
                        <div class="row">
                            <div class="col-4 div-date">
                                <p class="text-dia">24<br />Agosto</p>
                                <p class="text-año">1938</p>
                            </div>
                            <div class="col-8 div-event">
                                <p class="event-zone">Cerro de la estrella</p>
                                <p>Área Natural Protegida</p>
                                <p>Parque Nacional (Posee doble categoría)</p>
                            </div>
                        </div>
                    </div>
                    <div class="carousel-item time-line">
                        <div class="row">
                            <div class="col-4 div-date">
                                <p class="text-dia">26<br />Septiembre</p>
                                <p class="text-año">1938</p>
                            </div>
                            <div class="col-8 div-event">
                                <p class="event-zone">El Histórico Coyoacán</p>
                                <p>Área Natural Protegida</p>
                                <p>Parque Nacional</p>
                            </div>
                        </div>
                    </div>
                    <div class="carousel-item time-line">
                        <div class="row">
                            <div class="col-4 div-date">
                                <p class="text-dia">28<br />Junio</p>
                                <p class="text-año">1989</p>
                            </div>
                            <div class="col-8 div-event">
                                <p class="event-zone">Parque Ecológico de la CDMX</p>
                                <p>Área Natural Protegida</p>
                                <p>Zona sujeta a Conservación Ecológica</p>
                            </div>
                        </div>
                    </div>
                    <div class="carousel-item time-line">
                        <div class="row">
                            <div class="col-4 div-date">
                                <p class="text-dia">29<br />Mayo</p>
                                <p class="text-año">1990</p>
                            </div>
                            <div class="col-8 div-event">
                                <p class="event-zone">Sierra de Guadalupe</p>
                                <p>Área Natural Protegida</p>
                                <p>Zona sujeta a Conservación Ecológica</p>
                            </div>
                        </div>
                    </div>
                    <div class="carousel-item time-line">
                        <div class="row">
                            <div class="col-4 div-date">
                                <p class="text-dia">07/11<br />Mayo</p>
                                <p class="text-año">1992</p>
                            </div>
                            <div class="col-8 div-event">
                                <p class="event-zone">Ejidos de Xochimilco y San Gregorio Atlapulco</p>
                                <p>Área Natural Protegida</p>
                                <p>Zona sujeta a Conservación Ecológica</p>
                            </div>
                        </div>
                    </div>
                    <div class="carousel-item time-line">
                        <div class="row">
                            <div class="col-4 div-date">
                                <p class="text-dia">10<br />Agosto</p>
                                <p class="text-año">1994</p>
                            </div>
                            <div class="col-8 div-event">
                                <p class="event-zone">Bosques de las Lomas</p>
                                <p>Área Natural Protegida</p>
                                <p>Zona sujeta a Conservación Ecológica</p>
                            </div>
                        </div>
                    </div>
                    <div class="carousel-item time-line">
                        <div class="row">
                            <div class="col-4 div-date">
                                <p class="text-dia">03/28<br />Noviembre</p>
                                <p class="text-año">1994</p>
                            </div>
                            <div class="col-8 div-event">
                                <p class="event-zone">Sierra Santa Catarina</p>
                                <p>Área Natural Protegida</p>
                                <p>Zona sujeta a Conservación Ecológica</p>
                            </div>
                        </div>
                    </div>
                    <div class="carousel-item time-line">
                        <div class="row">
                            <div class="col-4 div-date">
                                <p class="text-dia">21<br />Agosto</p>
                                <p class="text-año">2003</p>
                            </div>
                            <div class="col-8 div-event">
                                <p class="event-zone">Sierra Santa Catarina</p>
                                <p>Área Natural Protegida</p>
                                <p>Zona de Conservación Ecológica (Posee doble categoría)</p>
                            </div>
                        </div>
                    </div>
                    <div class="carousel-item time-line">
                        <div class="row">
                            <div class="col-4 div-date">
                                <p class="text-dia">01<br />Noviembre</p>
                                <p class="text-año">2005</p>
                            </div>
                            <div class="col-8 div-event">
                                <p class="event-zone">Cerro de la Estrella</p>
                                <p>Área Natural Protegida</p>
                                <p>Zona Ecológica y Cultural</p>
                            </div>
                        </div>
                    </div>
                    <div class="carousel-item time-line">
                        <div class="row">
                            <div class="col-4 div-date">
                                <p class="text-dia">09<br />Junio</p>
                                <p class="text-año">2006</p>
                            </div>
                            <div class="col-8 div-event">
                                <p class="event-zone">La Armella</p>
                                <p>Área Natural Protegida</p>
                                <p>Zona de Conservación Ecológica</p>
                            </div>
                        </div>
                    </div>
                    <div class="carousel-item time-line">
                        <div class="row">
                            <div class="col-4 div-date">
                                <p class="text-dia">29<br />Noviembre</p>
                                <p class="text-año">2006</p>
                            </div>
                            <div class="col-8 div-event">
                                <p class="event-zone">Ecoguardas</p>
                                <p>Área Natural Protegida</p>
                                <p>Zona de Conservación Ecológica</p>
                            </div>
                        </div>
                    </div>
                    <div class="carousel-item time-line">
                        <div class="row">
                            <div class="col-4 div-date">
                                <p class="text-dia">26<br />Junio</p>
                                <p class="text-año">2007</p>
                            </div>
                            <div class="col-8 div-event">
                                <p class="event-zone">San Nicolás Totolapan</p>
                                <p>Área Natural Protegida</p>
                                <p>Reserva Ecológica Comunitaria</p>
                            </div>
                        </div>
                    </div>
                    <div class="carousel-item time-line">
                        <div class="row">
                            <div class="col-4 div-date">
                                <p class="text-dia">26<br />Junio</p>
                                <p class="text-año">2007</p>
                            </div>
                            <div class="col-8 div-event">
                                <p class="event-zone">San Miguel Topilejo</p>
                                <p>Área Natural Protegida</p>
                                <p>Reserva Ecológica Comunitaria</p>
                            </div>
                        </div>
                    </div>
                    <div class="carousel-item time-line">
                        <div class="row">
                            <div class="col-4 div-date">
                                <p class="text-dia">01<br />Enero</p>
                                <p class="text-año">2009</p>
                            </div>
                            <div class="col-8 div-event">
                                <p class="event-zone">Los Encinos</p>
                                <p>Área Natural Protegida</p>
                                <p>Zona de Protección Hidrológica y Ecológica</p>
                            </div>
                        </div>
                    </div>
                    <div class="carousel-item time-line">
                        <div class="row">
                            <div class="col-4 div-date">
                                <p class="text-dia">20<br />Abril</p>
                                <p class="text-año">2010</p>
                            </div>
                            <div class="col-8 div-event">
                                <p class="event-zone">Los Loma</p>
                                <p>Área Natural Protegida</p>
                                <p>Zona de Conservación Ecológica</p>
                            </div>
                        </div>
                    </div>
                    <div class="carousel-item time-line">
                        <div class="row">
                            <div class="col-4 div-date">
                                <p class="text-dia">21<br />Junio</p>
                                <p class="text-año">2010</p>
                            </div>
                            <div class="col-8 div-event">
                                <p class="event-zone">San Bernabé Ocotepec</p>
                                <p>Área Natural Protegida</p>
                                <p>Reserva Ecológica Comunitaria</p>
                            </div>
                        </div>
                    </div>
                    <div class="carousel-item time-line">
                        <div class="row">
                            <div class="col-4 div-date">
                                <p class="text-dia">16<br />Diciembre</p>
                                <p class="text-año">2010</p>
                            </div>
                            <div class="col-8 div-event">
                                <p class="event-zone">San Miguel Ajusco</p>
                                <p>Área Natural Protegida</p>
                                <p>Reserva Ecológica Comunitaria</p>
                            </div>
                        </div>
                    </div>
                    <div class="carousel-item time-line">
                        <div class="row">
                            <div class="col-4 div-date">
                                <p class="text-dia">17<br />Junio</p>
                                <p class="text-año">2011</p>
                            </div>
                            <div class="col-8 div-event">
                                <p class="event-zone">Bosque de Tlalpan</p>
                                <p>Área Natural Protegida</p>
                                <p>Reserva Ecológica y Cultural</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="space"></div>
        <h2>Programa de Manejo</h2>
        <br />
        <p class="text-para">Finalmente, las actividades realizadas en las ANP están reguladas por el <b>Programa de Manejo</b>, el cual es un instrumento rector que establece las estrategias, lineamientos y acciones básicas para el manejo y administración de estos espacios naturales, basado en el conocimiento del área, el cual puede ser modificado total o parcialmente cuando éste resulte pertinente, todo con el objetivo de conservar la biodiversidad y los servicios ambientales ofrecidos.</p>
        <br />
        <p class="text-para">A continuación se enlistan los Programas de Manejo de las ANP de la Ciudad de México, recordando que Sierra de Santa Catarina y Cerro de la Estrella poseen dos categorías, sin embargo sólo tienen un sólo programa que engloba ambas clasificaciones.</p>
        <br />
        <div class="table-responsive">
            <table class="table table-striped table-bordered">
                <thead>
                    <tr class="tab-head text-goth">
                        <th scope="col">No°</th>
                        <th scope="col">ANP</th>
                        <th scope="col">Programa de manejo</th>
                        <th scope="col">No°</th>
                        <th scope="col">ANP</th>
                        <th scope="col">Programa de manejo</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <th scope="row">1</th>
                        <td>La Armella</td>
                        <td>PDF</td>
                        <th scope="row">12</th>
                        <td>Sierra de Santa Catarina</td>
                        <td>PDF</td>
                    </tr>
                    <tr>
                        <th scope="row">2</th>
                        <td>Sierra de Guadalupe</td>
                        <td>PDF</td>
                        <th scope="row">13</th>
                        <td>Cerro de la Estrella</td>
                        <td>PDF</td>
                    </tr>
                    <tr>
                        <th scope="row">3</th>
                        <td>El Tepeyac</td>
                        <td>PDF</td>
                        <th scope="row">14</th>
                        <td>Histórico de Coyoacán</td>
                        <td>PDF</td>
                    </tr>
                    <tr>
                        <th scope="row">4</th>
                        <td>Bosques de las Lomas</td>
                        <td>PDF</td>
                        <th scope="row">15</th>
                        <td>Los Encinos</td>
                        <td>PDF</td>
                    </tr>
                    <tr>
                        <th scope="row">5</th>
                        <td>La Loma</td>
                        <td>PDF</td>
                        <th scope="row">16</th>
                        <td>Fuente Brotantes</td>
                        <td>PDF</td>
                    </tr>
                    <tr>
                        <th scope="row">6</th>
                        <td>Desierto de los Leones</td>
                        <td>PDF</td>
                        <th scope="row">17</th>
                        <td>San Bernabé Ocotepec</td>
                        <td>PDF</td>
                    </tr>
                    <tr>
                        <th scope="row">7</th>
                        <td>Insurgentes Miguel Hidalgo y Costilla</td>
                        <td>PDF</td>
                        <th scope="row">18</th>
                        <td>San Nicolás Totolapan</td>
                        <td>PDF</td>
                    </tr>
                    <tr>
                        <th scope="row">8</th>
                        <td>Parque Ecológico de la CDMX</td>
                        <td><a href="../../src/docs/594d401d7fb77176590927.pdf" target="blank_"><b>PDF</b></a></td>
                        <th scope="row">19</th>
                        <td>Cumbres del Ajusco</td>
                        <td>PDF</td>
                    </tr>
                    <tr>
                        <th scope="row">9</th>
                        <td>Ecoguardas</td>
                        <td>PDF</td>
                        <th scope="row">20</th>
                        <td>San Miguel Ajusco</td>
                        <td>PDF</td>
                    </tr>
                    <tr>
                        <th scope="row">10</th>
                        <td>Bosque de Tlalpan</td>
                        <td>PDF</td>
                        <th scope="row">21</th>
                        <td>San Miguel Topilejo</td>
                        <td>PDF</td>
                    </tr>
                    <tr>
                        <th scope="row">11</th>
                        <td>Ejidos de Xochimilco y San Gregorio Atlapulco</td>
                        <td>PDF</td>
                        <th scope="row">22</th>
                        <td>Fuente Brotantes</td>
                        <td>PDF</td>
                    </tr>
                </tbody>
            </table>
        </div>
        <div class="space"></div>
        <h2>Fuentes de Consulta</h2>
        <br />
        <ol>
            <li>Dirección General del Sistema de Áreas Naturales Protegidas y Áreas de Valor Ambiental (DGSANPAVA)</li>
            <li>DOF. Diario Oficial de la Federación</li>
            <li>GODF o GOCDMX. Gaceta Oficial de la Ciudad de México</li>
            <li>Comisión Nacional de Áreas Naturales Protegidas (CONANP)</li>
        </ol>
    </div>
    <div class="space"></div>
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
                            <a class="nav-link" href="../../index.php" style="color: white;">INICIO</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link href="#" style="color: white;">ANP</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="acciones.php" style="color: white;">ACCIONES</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="galeria.php"">GALERÍA</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="sinContenido.php" style="color: white;">CONTACTO</a>
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