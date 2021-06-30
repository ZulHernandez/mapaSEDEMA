var colorts;

function color(color) {
	var h1 = document.getElementsByTagName("h1");
	var h2 = document.getElementsByTagName("h2");
	var b = document.getElementsByTagName("b");
	var col = document.getElementById("col-color");
	var name = document.getElementById("colorName");
	var tab = document.getElementById("tab-head");
	var divCov = document.getElementById("divCov");
	var dot;
	switch (color) {
		case "verde":
			colorts = "#00843d";
			dot = document.getElementById(color);
			break;
		case "amarillo":
			colorts = "#ffc200";
			dot = document.getElementById(color);
			break;
		case "naranja":
			colorts = "#f65545";
			dot = document.getElementById(color);
			break;
		case "rojo":
			colorts = "#cb2833";
			dot = document.getElementById(color);
			break;
	}
	for (i = 0; i < h1.length; i++) {
		if (i == 1) {
			h1[i].style.color = "white";
		} else {
			h1[i].style.color = colorts;
		}
	}
	for (i = 0; i < h2.length; i++) {
		if (i == 1) {
			h2[i].style.color = "white";
		} else {
			h2[i].style.color = colorts;
		}
	}
	for (i = 0; i < b.length - 2; i++) {
		b[i].style.color = colorts;
	}
	col.style.backgroundColor = colorts;
	dot.style.backgroundColor = colorts;
	name.innerHTML = color;
	tab.style.backgroundColor = colorts;
	divCov.style.backgroundColor = colorts;
}

function colorHome(color) {
	var divCov = document.getElementById("divCov");
	var dot;
	switch (color) {
		case "verde":
			colorts = "#00843d";
			break;
		case "amarillo":
			colorts = "#ffc200";
			break;
		case "naranja":
			colorts = "#f65545";
			break;
		case "rojo":
			colorts = "#cb2833";
			break;
	}
	divCov.style.backgroundColor = colorts;
}

function covHover() {
	var divCov = document.getElementById("divCov");
	divCov.style.backgroundColor = "transparent";
	divCov.style.color = colorts;
}

function covOut() {
	var divCov = document.getElementById("divCov");
	divCov.style.backgroundColor = colorts;
	divCov.style.color = "white";
}

function imgHover(num) {
	var img = document.getElementsByTagName("img");
	img[num].style.borderColor = colorts;
}

function imgOut(num) {
	var img = document.getElementsByTagName("img");
	img[num].style.borderColor = "transparent";
}
