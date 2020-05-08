/** @format */

function decolora(e) {
	e.target.style.color = "initial";
}
function coloraBianco(e) {
	e.target.style.color = "white";
}

function assegnaEventHandlers() {
	var c1Doc = document.getElementsByTagName("a");
	for (i = 0; i < c1Doc.length; i++) {
		c1Doc[i].addEventListener("mouseenter", coloraBianco);
		c1Doc[i].addEventListener("mouseleave", decolora);
	}
	var documenti = document.getElementsByTagName("button");
	for (var i = 0; i < documenti.length; i++) {
		documenti[i].onclick = caricaDocumento;
	}
}

function caricaDocumento(e) {
	var httpRequest = new XMLHttpRequest();
	httpRequest.onreadystatechange = gestisciResponse;
	httpRequest.open("GET", "materie/" + e.target.innerHTML + ".html", true);
	httpRequest.send();
}
function gestisciResponse(e) {
	if (e.target.readyState == 4 && e.target.status == 200) {
		document.getElementById("zonadinamica").innerHTML = e.target.responseText;
	}
}
$(document).ready(function () {});
