function fireSwaltar(pre, num) {
	Swal.fire({
		template: "#my-template",
		width: "75%",
		customClass: "swal-height",
		padding: "0px",
	});
	let img, tit, desc;
	switch (pre) {
		case "Arm":
			img = imgArm[num].img;
			tit = imgArm[num].tit;
			desc = imgArm[num].desc;
			break;
		case "Sie":
			img = imgSie[num].img;
			tit = imgSie[num].tit;
			desc = imgSie[num].desc;
			break;
		case "Bos":
			img = imgBos[num].img;
			tit = imgBos[num].tit;
			desc = imgBos[num].desc;
			break;
		case "Des":
			img = imgDes[num].img;
			tit = imgDes[num].tit;
			desc = imgDes[num].desc;
			break;
		case "pCDMX":
			img = imgCDMX[num].img;
			tit = imgCDMX[num].tit;
			desc = imgCDMX[num].desc;
			break;
		case "Bot":
			img = imgBot[num].img;
			tit = imgBot[num].tit;
			desc = imgBot[num].desc;
			break;
		case "Eco":
			img = imgEco[num].img;
			tit = imgEco[num].tit;
			desc = imgEco[num].desc;
			break;
		case "Eji":
			img = imgEji[num].img;
			tit = imgEji[num].tit;
			desc = imgEji[num].desc;
			break;
		case "Sis":
			img = imgSis[num].img;
			tit = imgSis[num].tit;
			desc = imgSis[num].desc;
			break;
		case "Cer":
			img = imgCer[num].img;
			tit = imgCer[num].tit;
			desc = imgCer[num].desc;
			break;
		default:
			break;
	}
	const cimg = document.getElementById("c-img");
	const ctit = document.getElementById("c-tit");
	const cdesc = document.getElementById("c-desc");
	cimg.style.backgroundImage = img;
	ctit.innerHTML = tit;
	cdesc.innerHTML = desc;
}

function cambiaText(pre, num) {
	var caja = document.getElementById("col-green");
	switch (pre) {
		case "Arm":
			if (num == 1) {
				caja.innerHTML =
					"El 9 de junio de 2006 es publicado en la Gaceta Oficial del DistritoFederal, el decreto donde La Armella es considerada Área Natural Protegida bajo la categoria de Zona de Conservación Ecológica";
			} else {
				caja.innerHTML =
					"La administración de La Armella está a cargo de la Secretaría del Medio Ambiente en coordinación con la Comisión Nacional de Áreas Naturales Protegidas (CONANP).";
			}
			break;
		case "Sie":
			if (num == 1) {
				caja.innerHTML =
					"El 10 de junio de 1992 es publicado en la Gaceta Oficial del Distrito Federal, el decreto donde Sierra de Guadalupe es considerada Área Natural Protegida bajo la categoría de Zona Sujeta a Conservación Ecológica.";
			} else {
				caja.innerHTML =
					"La administración de Sierra de Guadalupe está a cargo de la Secretaría del Medio Ambiente en coordinación con la Comisión Nacional de Áreas Naturales Protegidas (CONANP).";
			}
			break;
		case "Ins":
			if (num == 1) {
				caja.innerHTML =
					"La administración de Desierto de los Leones está a cargo de la Secretaría del Medio Ambiente en coordinación con la Comisión Nacional de Áreas Protegidas (CONANP).";
			} else {
				caja.innerHTML =
					"El 18 de septiembre de 1936 el Área Natural Protegida Insurgente Miguel Hidalgo y Costilla es decretada bajo la categoría de Parque Nacional.";
			}
			break;
		case "Des":
			if (num == 1) {
				caja.innerHTML =
					"La administración de Desierto de los Leones está a cargo de la Secretaría del Medio Ambiente en coordinación con la Comisión Nacional de Áreas Naturales Protegidas (CONANP).";
			} else {
				caja.innerHTML =
					"El 27 de noviembre de 1917 el Área Natural Protegida Desierto de los Leones es decretada bajo la categoría de Parque Nacional.";
			}
			break;
		case "Sis":
			if (num == 1) {
				caja.innerHTML =
					"El 21 de agosto de 2003 se declara la segunda categoría del  Área Natural Protegida Sierra de Santa Catarina,  como Zona de Conservación Ecológica con una superficie de 220.55 hectáreas.";
			} else {
				caja.innerHTML =
					"El 3 de noviembre de 1994 es publicado en el Diario Oficial de la Federación el decreto presidencial donde Sierra de Santa Catarina es considerada Área Natural Protegida bajo la categoría de Zona Sujeta a Conservación Ecológica con una superficie de 756.82 hectáreas.";
			}
			break;
		case "Cer":
			if (num == 1) {
				caja.innerHTML =
					"El 30 de mayo de 1991 se publicó en el Diario Oficial de la Federación, el Decreto por el que se establece  a Cerro de la Estrella  como Zona Sujeta a Conservación Ecológica.";
			} else {
				caja.innerHTML =
					"El 24 de agosto de 1938 se publicó en el Diario Oficial de la Federación, el Decreto por el que se establece a Cerro de la Estrella como Parque Nacional.";
			}
			break;
		default:
			break;
	}
}
