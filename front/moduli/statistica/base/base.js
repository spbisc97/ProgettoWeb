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

var app = new Vue({
	el: "#app",
	data: {
		media: 0,
		numer: 0,
		totale: 0,
	},
	methods: {
		newmedia: function () {
			this.numer++,
				(this.totale = this.totale + this.nuovovalore),
				(this.media = this.totale / this.numer);
		},
	},
});
