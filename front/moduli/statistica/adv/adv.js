/** @format */

let boxgraph = Vue.component("box", {
	template: `<!-- @format -->

<div class="row justify-content-between">
	<dedx ></dedx>
	<testo></testo>

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
<div v-if="show" id="sinistra" class="col-5"   >
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

<div id="destra" class="col-5" >
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

let media1 = new Chart(chart1, {
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
});

let matrimoni = new Chart(chart2, {
	type: "line",
	data: {
		labels: [1960, 1970, 1980, 1990, 2000, 2009],
		datasets: [
			{
				//label: "Media",
				data: [397000, 385000, 305000, 310000, 277000, 230000],
				backgroundColor: "rgba(200, 100, 100, 0.9)",
				borderWidth: 1,
				borderColor: "rgb(200,200,200)",
				hoverBorderWidth: 1,
			},
		],
	},
	options: {
		title: {
			display: true,
			title: "matrimoni",
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
