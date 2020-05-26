/** @format */

$(document).ready(
	//alert("pagina caricata"),
	//$("#sfen").show("slow"),
	$(".more-info")
		.mouseover(function () {
			$("#s" + this.id).show("slow");
		})
		.mouseout(function () {
			$("#s" + this.id).hide("slow");
		})
);
