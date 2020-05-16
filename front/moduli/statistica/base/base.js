/** @format */
valori: [];
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
		valori: [],
		nuovovalore: 0,
	},
	methods: {
		newmedia: function () {
			this.numer++;
			this.totale = this.totale + this.nuovovalore;
			this.media = this.totale / this.numer;
			this.valori.push(this.nuovovalore);
		},
	},
});
var options = {
	chart: {
		type: "bar",
	},
	series: [
		{
			//	name: 'sales'
			data: app.valori,
		},
	],
};
var chart = new ApexCharts(document.querySelector("#chart"), options);
