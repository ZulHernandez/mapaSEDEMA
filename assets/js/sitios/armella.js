function fireSwal(num) {
    Swal.fire({
        template: '#my-template',
        width: '75%',
        customClass: 'swal-height',
        padding: '0px',
    });
    let img = imgArm[num].img;
    let tit = imgArm[num].tit;
    let desc = imgArm[num].desc;
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
        caja.innerHTML="El 9 de junio de 2006 es publicado en la Gaceta Oficial del DistritoFederal, el decreto donde La Armella es considerada Área Natural Protegida bajo la categoria de Zona de Conservación Ecológica";
    } else {
        caja.innerHTML="La administración de La Armella está a cargo de la Secretaría del Medio Ambiente en coordinación con la Comisión Nacional de Áreas Naturales Protegidas (CONANP).";
    }
}