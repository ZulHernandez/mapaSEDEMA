function fireSwal(num) {
    Swal.fire({
        template: '#my-template',
        width: '75%',
        customClass: 'swal-height',
        padding: '0px',
    });
    let img = imgAyu[num].img;
    let tit = imgAyu[num].tit;
    let desc = imgAyu[num].desc;
    const cimg = document.getElementById("c-img");
    const ctit = document.getElementById("c-tit");
    const cdesc = document.getElementById("c-desc");
    cimg.style.backgroundImage = img;
    ctit.innerHTML = tit;
    cdesc.innerHTML = desc;
}