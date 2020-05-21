/** @format */

let boxgraph = Vue.component("box", {
	template: `<!-- @format -->

<div class="row justify-content-between">
	<dedx ></dedx>
	
	<sinsx></sinsx>
</div>
`,
	data: function () {
		return {};
	},
	methods: {},
});

let sx = Vue.component("sinsx", {
	template: `<!-- @format -->
<div v-if="show" id="sinistra" class="col-6"   >
	<div id="primo"  class="primo grafico">
		<canvas id="chart1" v-on:mouseover=""></canvas>
	</div>
	<div id="terzo" class="terzo grafico">
		<canvas id="chart3" v-on:mouseover=""></canvas>
	</div>
</div>
`,
	data: function () {
		return { show: true };
	},
	methods: {},
});
let dx = Vue.component("dedx", {
	template: `<!-- @format -->

<div id="destra" class="col-6" >
	<div id="secondo" class="secondo grafico">
		<canvas id="chart2" v-on:cick=""></canvas>
	</div>
	<div id="quarto" class="quarto grafico">
		<canvas id="chart4" v-on:cick=""></canvas>
	</div>
</div>
`,
	data: function () {
		return {};
	},
});
Vue.component("testo", {
	template: `<!-- @format -->

<div class="col text-light testo">
	{{ grafico_txt[0].text }}
</div>
`,
	data: function () {
		return {
			grafico_txt: [
				{ text: "prova a cliccare un qualunque grafico" },
				{ text: "Questo è un grafico di tipo" },
				{ text: "questo è un grafico di tipo" },
			],
		};
	},
});
var vue = new Vue({
	el: "#app",
	data: {
		colors: [],
	},
	template: `<box></box>`,
	methods: {
		generator: function () {
			return "#" + ((Math.random() * 0xffffff) << 0).toString(16);
		},
		hidedx: function () {
			sinistra.hidden = true;
		},
	},
});

for (let index = 0; index < 8; index++) {
	vue.colors.push(vue.generator());
}

let chart1 = $("#chart1");
let chart2 = $("#chart2");
let chart3 = $("#chart3");
let chart4 = $("#chart4");
var options;

let sport = new Chart(chart1, {
	type: "pie",
	data: {
		labels: ["tennis", "Atletica", "pallavvolo", "Nuoto", "Arti marziali", "Basket", "Calcio"],
		datasets: [
			{
				//label: "Media",
				data: [15, 7, 20, 21, 10, 25, 30],
				backgroundColor: colors,
				borderWidth: 1,
				borderColor: "rgb(200,200,200)",
				hoverBorderWidth: 1,
			},
		],
	},
	options: {
		title: {
			display: true,
			title: "Sport",
		},
	},
});

let spider = new Chart(chart2, {
	type: "radar",
	data: {
		labels: ["velocità", "sicurezza", "prezzo", "supporto", "facilità", "interfaccia"],
		datasets: [
			{
				data: [10, 30, 40, 20, 43, 23],
				backgroundColor: "rgba(20, 150, 10, 0.0)",
				borderWidth: 1,
				borderColor: "rgb(200,70,30)",
				hoverBorderWidth: 1,
				label: "Primo venditore",
			},
			{
				data: [31, 34, 12, 43, 23, 20],
				backgroundColor: "rgba(200, 10, 100, 0.0)",
				borderWidth: 1,
				borderColor: "rgb(50,20,200)",
				hoverBorderWidth: 1,
				label: "Secondo venditore",
				display: false,
			},
		],
	},
	options: {
		title: {
			display: false,
			title: "prodotto",
		},
	},
});

let popolazione = new Chart(chart3, {
	type: "line",
	data: {
		labels: [2010, 2011, 2012, 2013, 2014, 2015],
		datasets: [
			{
				//label: "Media",
				data: [60626.442, 60785.753, 59685.227, 60782.668, 60795.612, 60665.551],
				backgroundColor: "rgb(0, 0, 0)",
				borderWidth: 1,
				borderColor: "rgb(200,200,200)",
				hoverBorderWidth: 1,
			},
		],
	},
	options: {
		title: {
			display: true,
			text: "Popolazione Italiana",
			fontSize: 15,
		},
		legend: {
			display: false,
		},
	},
});

let nascite = new Chart(chart4, {
	type: "bar",
	data: {
		labels: [1950, 1960, 1970, 1980, 1990, 2000, 2010, 2019],
		datasets: [
			{
				//label: "Media",
				data: [, 908622, 910192, 901472, 640401, 569255, 543039, 561944, 435000],
				backgroundColor: vue.colors,
				borderWidth: 1,
				borderColor: "rgb(200,200,200)",
				hoverBorderWidth: 1,
			},
		],
	},
	options: {
		title: {
			display: true,
			text: "nascite",
			fontSize: 15,
		},
		legend: {
			display: false,
		},
	},
});
