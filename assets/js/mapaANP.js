let w = window.innerWidth;
let h = window.innerHeight;
let img, d;
let mx = mouseX;
let my = mouseY;

function preload() {
    myFont = loadFont('../../src/fonts/GothamMedium.ttf');
}

function setup() {
    var myCanva = createCanvas(w / 4, w / 3);
    myCanva.parent("mapa");
    frameRate(12);
    textAlign(LEFT);
    //angleMode(DEGREES);
    colorMode(RGB, 255, 255, 255, 1);
    background('#ffffff');
    img = loadImage('../../src/imgs/home/mapaCDMX.png');
}

function draw() {
    clear();
    img.resize(width, 0);
    image(img, 0, 0);
    alcaldias();
    anpNum();
}

function anpNum() {
    drawcircle(w / 8, w / 120, 1, 0);
    drawcircle(w / 6.5, w / 20, 2, 0);
    drawcircle(w / 15, w / 9, 3, 0);
    drawcircle(w / 12, w / 7.7, 4, 0);
    drawcircle(w / 16, w / 6, 5, 0);
    drawcircle(w / 100, w / 5.7, 6, 0);
    drawcircle(w / 12, w / 4.6, 7, 0);
    drawcircle(w / 10, w / 5.3, 8, 0);
    drawcircle(w / 9, w / 4.8, 9, 0);
    drawcircle(w / 5.5, w / 5.5, 10, 0);
    drawcircle(w / 4.8, w / 6.5, 11, 0);
    drawcircle(w / 5.3, w / 7.2, 12, 0);

    drawcircle(w / 7, w / 40, 'A', 1);
    drawcircle(w / 9, w / 6, 'B', 1);
    drawcircle(w / 12, w / 5.5, 'C', 1);
    drawcircle(w / 15, w / 5.4, 'D', 1);
    drawcircle(w / 20, w / 5, 'E', 1);
    drawcircle(w / 17, w / 4.6, 'F', 1);
    drawcircle(w / 14, w / 4.2, 'G', 1);
    drawcircle(w / 20, w / 3.9, 'H', 1);
    drawcircle(w / 13, w / 3.45, 'I', 1);
    drawcircle(w / 8, w / 3.35, 'I', 1);
    drawcircle(w / 8.5, w / 5.2, 'J', 1);
}

function alcaldias() {
    alcName("Azcapotzalco", w / 11.5, w / 15);
    alcName("Gustavo A. \nMadero", w / 7.5, w / 16);
    alcName("Miguel \nHidalgo", w / 12, w / 10);
    alcName("Cuahutémoc", w / 9.1, w / 9.5);
    alcName("Venustiano \nCarranza", w / 7, w / 10);
    alcName("Cuajimalpa \nde Morelos", w / 40, w / 6.7);
    alcName("Álvaro \nObregón", w / 15, w / 7);
    alcName("Benito \nJuárez", w / 9, w / 8);
    alcName("Iztacalco", w / 7.2, w / 8.2);
    alcName("Magdalena \nContreras", w / 25, w / 4.7);
    alcName("Coyoacán", w / 9, w / 6.2);
    alcName("Iztapalapa", w / 6, w / 6.7);
    alcName("Tlalpan", w / 15, w / 4);
    alcName("Xochimilco", w / 7, w / 4.7);
    alcName("Tlahuac", w / 5, w / 5.5);
    alcName("Milpa Alta", w / 6, w / 3.5);
}

function alcName(name, x, y) {
    noStroke();
    fill('#555555');
    textFont(myFont);
    textSize(width / 60);
    text(name, x, y);
}

function drawcircle(x, y, nom, est) {
    noStroke();
    if (est == 0) {
        fill("#0f4c42");
    } else {
        fill("#19806f");
    }
    circle(x, y, width / 16);
    fill('#ffffff');
    textFont(myFont);
    textSize(width / 26);
    textAlign(CENTER);
    text(nom, x, y + width / 80);
}








function fireSwal(num) {
    Swal.fire({
        template: '#my-template',
        width: '75%',
        customClass: 'swal-height',
        padding: '0px',
    });
    let img = imgAnp[num].img;
    let tit = imgAnp[num].tit;
    let desc = imgAnp[num].desc;
    const cimg = document.getElementById("c-img");
    const ctit = document.getElementById("c-tit");
    const cdesc = document.getElementById("c-desc");
    cimg.style.backgroundImage = img;
    ctit.innerHTML = tit;
    cdesc.innerHTML = desc;
}