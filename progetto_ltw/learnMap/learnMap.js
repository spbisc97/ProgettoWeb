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
}
