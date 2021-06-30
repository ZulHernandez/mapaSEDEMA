<html>

<head>
    <title>
        MAPA-PRUEBA
    </title>
    <script type="text/javascript" src="../../../assets/json/card.js"></script>
    <script type="text/javascript" src="../../../assets/js/mapaXochimilco.js"></script>
    <script src="../../../assets/dist/js/p5.js" type="text/javascript"></script>
    <script src="//cdn.jsdelivr.net/npm/sweetalert2@10"></script>
    <link href="../../../assets/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="../../../assets/dist/js/bootstrap.bundle.min.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <link rel="stylesheet" href="../../../assets/css/gStyle.css">
    <link rel="shortcut icon" href="../../../src/imgs/iconos/icon.svg" type="image/x-icon">
</head>

<body>
    <nav class="navbar" style="background-color: #0f4c42; padding: 0px 14%;">
        <div class="container-fluid">
            <a class="navbar-brand" href="https://www.sedema.cdmx.gob.mx/" target="_blank">
                <img src="../../../src/imgs/headIcon.svg">
            </a>
        </div>
    </nav>
    <div class="hero">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg col-sm"></div>
                <div class="col-lg-2 display-no" style="padding-left: 0px;">
                    <br />
                    <img class="img-pet display-no" src="../../../src/imgs/GallaretaExplicando.png">
                </div>
                <div class="col-lg display-no" style="padding-left: 0px;">
                </div>
                <div class="col-lg-6 col-sm-10" style="padding-left: 0px; color: #898D8D;">
                    <p class="text-title">EJIDOS DE XOCHIMILCO Y SAN GREGORIO ATLAPULCO</p><br />
                    <p class="text-normal">Soy <b>Queta la Gallareta</b>, habitante de los lagos y canales del <b>Área Natural Protegida "Ejidos de
                            Xochimilco y San Gregorio Atlapulco"</b>. Seré tu acompañante en este recorrido virtual por el
                        <b>Parque Ecológico de Xochimilco (PEX)</b>, un espacio que representa el alto valor histórico, cultural y ecológico de
                        una de las Áreas Naturales Protegidas más grandes de la Ciudad de México.
                    </p>
                    <p class="text-normal">Prepárate para recorrer 11 PEXtaciones donde podrás conocer todos los secretos de este bello lugar al suroeste de la capital. </p>
                </div>
                <div class="col-lg-1 col-sm"></div>
            </div>
        </div>
    </div>
    <template id="my-template">
        <swal-html>
            <div class="place-card" id="c-img">
                <div class="row text-front">
                    <div class="col-lg-7"></div>
                    <div class="col-lg col-white">
                        <div class="col-text" style="padding-top: 0px;">
                            <h2 class="text-title" id="c-tit"></h2><br />
                            <p class="text-normal" id="c-desc"></p>
                        </div>
                        <img src="../../../src/imgs/mapa/fondoPasto.png" class="cdmx-texture">
                    </div>
                </div>
            </div>
        </swal-html>
    </template>
    <div class="container-fluid div-map">
        <div class="row">
            <div class="col-lg col-sm"></div>
            <div class="col-lg col-sm">
                <div id="mapa"></div>
            </div>
            <div class="col-lg col-sm" style="padding: 0px;"></div>
        </div><br /><br />
    </div>
    <nav style="background-color: #0f4c42; padding: 24px 14%; color: white;">
        <b>Área Natural Protegida "Ejidos de Xochimilco y San Gregorio Atlapulco".</b>
        <p><i><a style="color: white;" href="https://www.google.com/maps/place/Parque+Ecol%C3%B3gico+de+Xochimilco/@19.2936732,-99.0945052,16z/data=!4m5!3m4!1s0x85ce022cf5363057:0xe92130a7d4ea5033!8m2!3d19.2967979!4d-99.0944052" target="_blank">Parque Ecológico de Xochimilco, Xochimilco, Ciudad de México, CDMX</a></i></p>
    </nav>
</body>

</html>