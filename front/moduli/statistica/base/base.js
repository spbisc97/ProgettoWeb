/** @format */

media = 10;
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

let myChart = $("#myChart");
Chart.defaults.global.defaultFontSize = 18;
Chart.defaults.global.defaultFontColor = "rgb(255,255,255)";

let mediaChart = new Chart(myChart, {
	type: "bar",
	data: {
		labels: [],
		datasets: [
			{
				//label: "Media",
				data: [],
				backgroundColor: "rgba(200, 100, 100, 0.9)",
				borderWidth: 1,
				borderColor: "rgb(200,200,200)",
				hoverBorderWidth: 1,
			},
			{
				type: "line",
				data: [],
				backgroundColor: "rgba(100, 200, 200, 0.7)",
				borderWidth: 3,
				borderColor: "rgb(0,0,0)",
				hoverBorderWidth: 3,
			},
		],
	},
	options: {
		layout: {
			padding: { left: 5, bottom: 5 },
		},
		title: {
			display: true,
			text: "La Media",
			fontSize: 25,
		},
		legend: {
			display: false,
			position: "right",
			labels: {},
		},
		scales: {
			yAxes: [
				{
					gridLines: {
						zeroLineColor: "white",
						zeroLineWidth: 5,
					},
					ticks: {
						display: true,
						beginAtZero: true,
						stepsize: 1,
					},
				},
			],
		},
	},
});

var app = new Vue({
	el: "#app",
	data: {
		media: 0,
		numer: 0,
		totale: 0,
		nuovovalore: 0,
	},
	methods: {
		newmedia: function () {
			this.numer++;
			this.totale = this.totale + this.nuovovalore;
			this.media = this.totale / this.numer;
			media = this.media;
			mediaChart.data.datasets[0].data.push(this.nuovovalore);
			mediaChart.data.labels.push(this.numer);
			mediaChart.data.datasets[1].data.push(this.media);
			mediaChart.update();
		},
	},
});
