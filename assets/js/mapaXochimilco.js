let w = window.innerWidth;
let h = window.innerHeight;
let img;
let imgs;
let cur;
let sf = 1;
let x = 0;
let y = 0;
let mx, my;
const yel = '#ffb31a';
const dyel = '#fca800';
const rose = '#dd6ea0';
const drose = '#d44787';

function preload() {
    myFont = loadFont('../../../src/fonts/GothamMedium.ttf');
}

function setup() {
    var myCanva
    if (w<=h){
        myCanva = createCanvas(w / 1.4 * 0.8, w / 1.64 * 0.8);
    }else{
        myCanva = createCanvas(w / 1.4 * 10, w / 1.64 * 10);
    }
    myCanva.parent("mapa");
    frameRate(60);
    textAlign(CENTER);
    //angleMode(DEGREES);
    colorMode(RGB, 255, 255, 255, 1);
    background('#ffffff');
    img = loadImage('../../../src/imgs/mapa.png');
    imgs = loadImage('../../../src/imgs/mapax2.png');
}

function draw() {
    clear();
    mx = mouseX;
    my = mouseY;
    translate(mx, my);
    scale(sf);
    translate(-mx, -my);
    translate();
    img.resize(width, 0)
    imgs.resize(width, 0)
    tint(255, 126);
    if (width < 720) {
        image(imgs, 0, 0);
    } else {
        image(img, 0, 0);
    }
    setAttributes('antialias', true);
    //INDICADORES NUMÉRICOS
    drawcircle(width / 1.5, height / 1.95, "1", yel);
    drawcircle(width / 1.65, height / 2.1, "2", yel);
    drawcircle(width / 1.76, height / 1.95, "3", yel);
    drawcircle(width / 2.2, height / 3.7, "4", yel);
    drawcircle(width / 3.4, height / 4, "5", yel);
    drawcircle(width / 2.9, height / 1.77, "6", yel);
    drawcircle(width / 2.08, height / 2.3, "7", yel);
    drawcircle(width / 7, height / 2.25, "8", yel);
    drawcircle(width / 4.6, height / 2.05, "9", yel);
    drawcircle(width / 2.35, height / 1.93, "10", yel);
    drawcircle(width / 2.65, height / 2.5, "11", yel);
    //INDICADORES TIPOGRÁFICOS
    strokeWeight(width / 400);
    stroke('#333333');
    line(width / 1.52, height / 1.75, width / 1.58, height / 1.73);
    drawcircle(width / 1.52, height / 1.75, "A", rose);
    drawcircle(width / 1.62, height / 1.73, "B", rose);
    drawcircle(width / 1.55, height / 1.9, "C", rose);
    drawcircle(width / 2.6, height / 2.02, "D", rose);
    drawcircle(width / 1.75, height / 1.25, "E", rose);
    drawcircle(width / 1.95, height / 1.58, "F", rose);
    drawcircle(width / 1.75, height / 1.3, "G", rose);
    drawcircle(width / 2.48, height / 2.5, "H", rose);
    drawcircle(width / 1.6, height / 1.65, "I", rose);

    d = dist(mouseX, mouseY, width / 1.5, height / 1.95);
    if (d <= width / 100) {
        cur = 1;
        drawcircle(width / 1.5, height / 1.95, "1", dyel);
    } else {
        d = dist(mouseX, mouseY, width / 1.65, height / 2.1);
        if (d <= width / 100) {
            cur = 1;
            drawcircle(width / 1.65, height / 2.1, "2", dyel);
        } else {
            d = dist(mouseX, mouseY, width / 1.76, height / 1.95);
            if (d <= width / 100) {
                cur = 1;
                drawcircle(width / 1.76, height / 1.95, "3", dyel);
            } else {
                d = dist(mouseX, mouseY, width / 2.2, height / 3.7);
                if (d <= width / 100) {
                    cur = 1;
                    drawcircle(width / 2.2, height / 3.7, "4", dyel);
                } else {
                    d = dist(mouseX, mouseY, width / 3.4, height / 4);
                    if (d <= width / 100) {
                        cur = 1;
                        drawcircle(width / 3.4, height / 4, "5", dyel);
                    } else {
                        d = dist(mouseX, mouseY, width / 2.9, height / 1.77);
                        if (d <= width / 100) {
                            cur = 1;
                            drawcircle(width / 2.9, height / 1.77, "6", dyel);
                        } else {
                            d = dist(mouseX, mouseY, width / 2.08, height / 2.3);
                            if (d <= width / 100) {
                                cur = 1;
                                drawcircle(width / 2.08, height / 2.3, "7", dyel);
                            } else {
                                d = dist(mouseX, mouseY, width / 7, height / 2.25);
                                if (d <= width / 100) {
                                    cur = 1;
                                    drawcircle(width / 7, height / 2.25, "8", dyel);
                                } else {
                                    d = dist(mouseX, mouseY, width / 4.6, height / 2.05);
                                    if (d <= width / 100) {
                                        cur = 1;
                                        drawcircle(width / 4.6, height / 2.05, "9", dyel);
                                    } else {
                                        d = dist(mouseX, mouseY, width / 2.35, height / 1.93);
                                        if (d <= width / 100) {
                                            cur = 1;
                                            drawcircle(width / 2.35, height / 1.93, "10", dyel);
                                        } else {
                                            d = dist(mouseX, mouseY, width / 2.65, height / 2.5);
                                            if (d <= width / 100) {
                                                cur = 1;
                                                drawcircle(width / 2.65, height / 2.5, "11", dyel);
                                            } else {
                                                d = dist(mouseX, mouseY, width / 1.52, height / 1.75);
                                                if (d <= width / 100) {
                                                    cur = 1;
                                                    drawcircle(width / 1.52, height / 1.75, "A", drose);
                                                } else {
                                                    d = dist(mouseX, mouseY, width / 1.62, height / 1.73);
                                                    if (d <= width / 100) {
                                                        cur = 1;
                                                        drawcircle(width / 1.62, height / 1.73, "B", drose);
                                                    } else {
                                                        d = dist(mouseX, mouseY, width / 1.55, height / 1.9);
                                                        if (d <= width / 100) {
                                                            cur = 1;
                                                            drawcircle(width / 1.55, height / 1.9, "C", drose);
                                                        } else {
                                                            d = dist(mouseX, mouseY, width / 2.6, height / 2.02);
                                                            if (d <= width / 100) {
                                                                cur = 1;
                                                                drawcircle(width / 2.6, height / 2.02, "D", drose);
                                                            } else {
                                                                d = dist(mouseX, mouseY, width / 1.75, height / 1.25);
                                                                if (d <= width / 100) {
                                                                    cur = 1;
                                                                    drawcircle(width / 1.75, height / 1.25, "E", drose);
                                                                } else {
                                                                    d = dist(mouseX, mouseY, width / 1.95, height / 1.58);
                                                                    if (d <= width / 100) {
                                                                        cur = 1;
                                                                        drawcircle(width / 1.95, height / 1.58, "F", drose);
                                                                    } else {
                                                                        d = dist(mouseX, mouseY, width / 1.75, height / 1.3);
                                                                        if (d <= width / 100) {
                                                                            cur = 1;
                                                                            drawcircle(width / 1.75, height / 1.3, "G", drose);
                                                                        } else {
                                                                            d = dist(mouseX, mouseY, width / 2.48, height / 2.5);
                                                                            if (d <= width / 100) {
                                                                                cur = 1;
                                                                                drawcircle(width / 2.48, height / 2.5, "H", drose);
                                                                            } else {
                                                                                d = dist(mouseX, mouseY, width / 1.6, height / 1.65);
                                                                                if (d <= width / 100) {
                                                                                    cur = 1;
                                                                                    drawcircle(width / 1.6, height / 1.65, "I", drose);
                                                                                } else {
                                                                                    cur = 0;
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
                }
            }
        }
    }
    if (cur == 1) {
        cursor(HAND);
    } else if (cur == 0) {
        cursor(ARROW);
    }
}

function mousePressed() {
    let d;
    let num;
    d = dist(mouseX, mouseY, width / 1.5, height / 1.95);
    if (d <= width / 100) {
        num = 0;
    } else {
        d = dist(mouseX, mouseY, width / 1.65, height / 2.1);
        if (d <= width / 100) {
            num = 1;
        } else {
            d = dist(mouseX, mouseY, width / 1.76, height / 1.95);
            if (d <= width / 100) {
                num = 2;
            } else {
                d = dist(mouseX, mouseY, width / 2.2, height / 3.7);
                if (d <= width / 100) {
                    num = 3;
                } else {
                    d = dist(mouseX, mouseY, width / 3.4, height / 4);
                    if (d <= width / 100) {
                        num = 4;
                    } else {
                        d = dist(mouseX, mouseY, width / 2.9, height / 1.77);
                        if (d <= width / 100) {
                            num = 5;
                        } else {
                            d = dist(mouseX, mouseY, width / 2.08, height / 2.3);
                            if (d <= width / 100) {
                                num = 6;
                            } else {
                                d = dist(mouseX, mouseY, width / 7, height / 2.25);
                                if (d <= width / 100) {
                                    num = 7;
                                } else {
                                    d = dist(mouseX, mouseY, width / 4.6, height / 2.05);
                                    if (d <= width / 100) {
                                        num = 8;
                                    } else {
                                        d = dist(mouseX, mouseY, width / 2.35, height / 1.93);
                                        if (d <= width / 100) {
                                            num = 9;
                                        } else {
                                            d = dist(mouseX, mouseY, width / 2.65, height / 2.5);
                                            if (d <= width / 100) {
                                                num = 10;
                                            } else {
                                                d = dist(mouseX, mouseY, width / 1.52, height / 1.75);
                                                if (d <= width / 100) {
                                                    num = 11;
                                                } else {
                                                    d = dist(mouseX, mouseY, width / 1.62, height / 1.73);
                                                    if (d <= width / 100) {
                                                        num = 12;
                                                    } else {
                                                        d = dist(mouseX, mouseY, width / 1.55, height / 1.9);
                                                        if (d <= width / 100) {
                                                            num = 13;
                                                        } else {
                                                            d = dist(mouseX, mouseY, width / 2.6, height / 2.02);
                                                            if (d <= width / 100) {
                                                                num = 14;
                                                            } else {
                                                                d = dist(mouseX, mouseY, width / 1.75, height / 1.25);
                                                                if (d <= width / 100) {
                                                                    num = 15;
                                                                } else {
                                                                    d = dist(mouseX, mouseY, width / 1.95, height / 1.58);
                                                                    if (d <= width / 100) {
                                                                        num = 16;
                                                                    } else {
                                                                        d = dist(mouseX, mouseY, width / 1.75, height / 1.3);
                                                                        if (d <= width / 100) {
                                                                            num = 17;
                                                                        } else {
                                                                            d = dist(mouseX, mouseY, width / 2.48, height / 2.5);
                                                                            if (d <= width / 100) {
                                                                                num = 18;
                                                                            } else {
                                                                                d = dist(mouseX, mouseY, width / 1.6, height / 1.65);
                                                                                if (d <= width / 100) {
                                                                                    num = 19;
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
                }
            }
        }
    }
    if (num >= 0) {
        fireSwal(num);
    }
}

function fireSwal(num) {
    Swal.fire({
        template: '#my-template',
        width: '75%',
        padding: '0px',
    });
    let img = data[num].img;
    let tit = data[num].tit;
    let desc = data[num].desc;
    const cimg = document.getElementById("c-img");
    const ctit = document.getElementById("c-tit");
    const cdesc = document.getElementById("c-desc");
    cimg.style.backgroundImage = img;
    ctit.innerHTML = tit;
    cdesc.innerHTML = desc;
}

function drawcircle(x, y, num, col) {
    strokeWeight(2);
    stroke('#333333');
    fill(col);
    circle(x, y, width / 50);
    noStroke();
    fill('##ffffff');
    textFont(myFont);
    textSize(width / 100);
    text(num, x, y + width / 300);
}