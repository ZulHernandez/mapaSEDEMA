function fireSwal(num) {
    Swal.fire({
        template: '#my-template',
        width: '75%',
        customClass: 'swal-height',
        padding: '0px',
    });
    let img = imgAcc[num].img;
    let tit = imgAcc[num].tit;
    let desc = imgAcc[num].desc;
    const cimg = document.getElementById("c-img");
    const ctit = document.getElementById("c-tit");
    const cdesc = document.getElementById("c-desc");
    cimg.style.backgroundImage = img;
    ctit.innerHTML = tit;
    cdesc.innerHTML = desc;
}