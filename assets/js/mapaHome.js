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
    img.resize(width/100*90, 0);
    image(img, 0, 10);
    alcaldias();
    anpNum();
    d = dist(mouseX, mouseY, w / 8.3, w / 90);
    if (d <= width / 24) {
        drawcircle(w / 8.3, w / 90, 1, 1);
    } else {
        d = dist(mouseX, mouseY, w / 7.3, w / 40);
        if (d <= width / 24) {
            drawcircle(w / 7.3, w / 40, 2, 1);
        } else {
            d = dist(mouseX, mouseY, w / 15, w / 10);
            if (d <= width / 24) {
                drawcircle(w / 15, w / 10, 3, 1);
            } else {
                d = dist(mouseX, mouseY, w / 12, w / 8.5);
                if (d <= width / 24) {
                    drawcircle(w / 12, w / 8.5, 4, 1);
                } else {
                    d = dist(mouseX, mouseY, w / 90, w / 5.7);
                    if (d <= width / 24) {
                        drawcircle(w / 90, w / 5.7, 5, 1);
                    } else {
                        d = dist(mouseX, mouseY, w / 30, w / 6);
                        if (d <= width / 24) {
                            drawcircle(w / 30, w / 6, 6, 1);
                        } else {
                            d = dist(mouseX, mouseY, w / 18, w / 6);
                            if (d <= width / 24) {
                                drawcircle(w / 18, w / 6, 7, 1);
                            } else {
                                d = dist(mouseX, mouseY, w / 20, w / 5.1);
                                if (d <= width / 24) {
                                    drawcircle(w / 20, w / 5.1, 8, 1);
                                } else {
                                    d = dist(mouseX, mouseY, w / 13, w / 4.8);
                                    if (d <= width / 24) {
                                        drawcircle(w / 13, w / 4.8, 9, 1);
                                    } else {
                                        d = dist(mouseX, mouseY, w / 12, w / 5.5);
                                        if (d <= width / 24) {
                                            drawcircle(w / 12, w / 5.5, 10, 1);
                                        } else {
                                            d = dist(mouseX, mouseY, w / 9.2, w / 5);
                                            if (d <= width / 24) {
                                                drawcircle(w / 9.2, w / 5, 11, 1);
                                            } else {
                                                d = dist(mouseX, mouseY, w / 6.5, w / 5.7);
                                                if (d <= width / 24) {
                                                    drawcircle(w / 6.5, w / 5.7, 12, 1);
                                                } else {
                                                    d = dist(mouseX, mouseY, w / 5.3, w / 5.6);
                                                    if (d <= width / 24) {
                                                        drawcircle(w / 5.3, w / 5.6, 13, 1);
                                                    } else {
                                                        d = dist(mouseX, mouseY, w / 5.7, w / 6.5);
                                                        if (d <= width / 24) {
                                                            drawcircle(w / 5.7, w / 6.5, 14, 1);
                                                        } else {
                                                            d = dist(mouseX, mouseY, w / 6.2, w / 8);
                                                            if (d <= width / 24) {
                                                                drawcircle(w / 6.2, w / 8, 15, 1);
                                                            }
                                                        }
                                                    }
                                                }
                                            }
                                        }
                                    }
                                }
                            }
                        }
                    }
                }
            }
        }
    }
}

function mousePressed() {
    d = dist(mouseX, mouseY, w / 8.3, w / 90);
    if (d <= width / 24) {
        window.open('assets/pages/sitios/armella.php','_self');
    } else {
        d = dist(mouseX, mouseY, w / 7.3, w / 40);
        if (d <= width / 24) {
            window.open('assets/pages/sitios/sierraG.php','_self');
        } else {
            d = dist(mouseX, mouseY, w / 15, w / 10);
            if (d <= width / 24) {
                window.open('assets/pages/sitios/bosqueL.php','_self');
            } else {
                d = dist(mouseX, mouseY, w / 12, w / 8.5);
                if (d <= width / 24) {
                    window.open('assets/pages/sitios/loma.php','_self');
                } else {
                    d = dist(mouseX, mouseY, w / 90, w / 5.7);
                    if (d <= width / 24) {
                        window.open('assets/pages/sitios/insurgente.php','_self');
                    } else {
                        d = dist(mouseX, mouseY, w / 30, w / 6);
                        if (d <= width / 24) {
                            window.open('assets/pages/sitios/desierto.php','_self');
                        } else {
                            d = dist(mouseX, mouseY, w / 18, w / 6);
                            if (d <= width / 24) {
                                alert("7");
                            } else {
                                d = dist(mouseX, mouseY, w / 20, w / 5.1);
                                if (d <= width / 24) {
                                    alert("8");
                                } else {
                                    d = dist(mouseX, mouseY, w / 13, w / 4.8);
                                    if (d <= width / 24) {
                                        window.open('assets/pages/sitios/pCDMX.php','_self');
                                    } else {
                                        d = dist(mouseX, mouseY, w / 12, w / 5.5);
                                        if (d <= width / 24) {
                                            window.open('assets/pages/sitios/bosqueT.php','_self');
                                        } else {
                                            d = dist(mouseX, mouseY, w / 9.2, w / 5);
                                            if (d <= width / 24) {
                                                window.open('assets/pages/sitios/ecoguardas.php','_self');
                                            } else {
                                                d = dist(mouseX, mouseY, w / 6.5, w / 5.7);
                                                if (d <= width / 24) {
                                                    window.open('assets/pages/sitios/ejidosX.php','_self');
                                                } else {
                                                    d = dist(mouseX, mouseY, w / 5.3, w / 5.6);
                                                    if (d <= width / 24) {
                                                        alert("13");
                                                    } else {
                                                        d = dist(mouseX, mouseY, w / 5.7, w / 6.5);
                                                        if (d <= width / 24) {
                                                            window.open('assets/pages/sitios/sierraS.php','_self')
                                                        } else {
                                                            d = dist(mouseX, mouseY, w / 6.2, w / 8);
                                                            if (d <= width / 24) {
                                                                window.open('assets/pages/sitios/cerroE.php','_self')
                                                            }
                                                        }
                                                    }
                                                }
                                            }
                                        }
                                    }
                                }
                            }
                        }
                    }
                }
            }
        }
    }
}

function anpNum() {
    drawcircle(w / 8.3, w / 90, 1, 0);
    drawcircle(w / 7.3, w / 40, 2, 0);
    drawcircle(w / 15, w / 10, 3, 0);
    drawcircle(w / 12, w / 8.5, 4, 0);
    drawcircle(w / 90, w / 5.7, 5, 0);
    drawcircle(w / 30, w / 6, 6, 0);
    drawcircle(w / 18, w / 6, 7, 0);
    drawcircle(w / 20, w / 5.1, 8, 0);
    drawcircle(w / 13, w / 4.8, 9, 0);
    drawcircle(w / 12, w / 5.5, 10, 0);
    drawcircle(w / 9.2, w / 5, 11, 0);
    drawcircle(w / 6.5, w / 5.7, 12, 0);
    drawcircle(w / 5.3, w / 5.6, 13, 0);
    drawcircle(w / 5.7, w / 6.5, 14, 0);
    drawcircle(w / 6.2, w / 8, 15, 0);
}

function alcaldias() {
    alcName("Azcapotzalco", w / 11.5, w / 15);
    alcName("Gustavo A. \nMadero", w / 7.5, w / 16);
    alcName("Miguel \nHidalgo", w / 12, w / 8.5);
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
        fill("#0f4c42BF");
        cursor(ARROW);
    } else {
        fill("#0f4c42");
        cursor(HAND);
    }
    circle(x, y, width / 12);
    fill('#ffffff');
    textFont(myFont);
    textSize(width / 20);
    textAlign(CENTER);
    text(nom, x, y + width / 60);
}