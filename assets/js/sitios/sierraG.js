function fireSwal(num) {
    Swal.fire({
        template: '#my-template',
        width: '75%',
        customClass: 'swal-height',
        padding: '0px',
    });
    let img = imgSie[num].img;
    let tit = imgSie[num].tit;
    let desc = imgSie[num].desc;
    const cimg = document.getElementById("c-img");
    const ctit = document.getElementById("c-tit");
    const cdesc = document.getElementById("c-desc");
    cimg.style.backgroundImage = img;
    ctit.innerHTML = tit;
    cdesc.innerHTML = desc;
}

function cambiaText(num){
    var caja = document.getElementById("col-green");
    if (num==1) {
        caja.innerHTML="El 10 de junio de 1992 es publicado en la Gaceta Oficial del Distrito Federal, el decreto donde Sierra de Guadalupe es considerada Área Natural Protegida bajo la categoría de Zona Sujeta a Conservación Ecológica.";
    } else {
        caja.innerHTML="La administración de Sierra de Guadalupe está a cargo de la Secretaría del Medio Ambiente en coordinación con la Comisión Nacional de Áreas Naturales Protegidas (CONANP).";
    }
}