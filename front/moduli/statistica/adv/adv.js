/** @format */

showDX = true;
showSX = true;

var spiegazioni = {
	primo:
		"questo grafico è chiamato grafico a torta, e nel particolare caso rappresenta gli sport preferiti dagli italiani, ogni spicchio è uno sport e in relazione agli altri spicchi esprime la percentuale.",
	secondo:
		"questo grafico è chiamato grafico radar, per la somiglianza delle rappresentazioni, viene usato per rappresentare le proprietà di più elementi, nel particolare qui abbiamo due aziende che vengono confrontate nelle loro proprietà",
	terzo:
		"questo grafico rappresenta la la variazione della popolazione italiana negli ultimi 10 anni, in particolare ha l'asse y troncata per evidenziare le variazioni, che altrimenenti sarebbaro poco percepibili",
	quarto:
		"questo grafico è chiamato grafico a barre, questo ha l'asse y non troncato :parte da zero e rapprensenta le nascite a partire dal 1950",
};

let sx = Vue.component("sinsx", {
	template: `<!-- @format -->
<div>
	<div id="primo" @mouseover="this.$root.hide" @mouseleave="this.$root.unhide"  class="primo grafico">
		<canvas id="chart1" ></canvas>
	</div>
	<div id="terzo" @mouseover="this.$root.hide" @mouseleave="this.$root.unhide" class="terzo grafico">
		<canvas id="chart3" ></canvas>
	</div>
</div>
`,
	data: function () {
		return {};
	},
	methods: {},
});

var info = [{ text: "Questo è un grafico a " }];

let dx = Vue.component("dedx", {
	template: `<!-- @format -->

<div>
	<div
		id="secondo"
		@mouseover="this.$root.hide"
		@mouseleave="this.$root.unhide"
		class="secondo grafico"
	>
		<canvas id="chart2"></canvas>
	</div>
	<div
		id="quarto"
		@mouseover="this.$root.hide"
		@mouseleave="this.$root.unhide"
		class="quarto grafico"
	>
		<canvas id="chart4"></canvas>
	</div>
</div>
`,
	data: function () {
		return {};
	},
});

var vue = new Vue({
	el: "#app",
	data: {
		colors: [],
		showdx: true,
		showsx: true,
		dxclass: "col-6",
		sxclass: "col-6",
		testo: "",
	},
	template: `<!-- @format -->

<div class="row justify-content-between">
	<sinsx
		id="sinistra"
		ref="sx"
		:class="sxclass"
		:style="{visibility: showsx ? 'visible' : 'hidden'}"
	></sinsx>
	<div v-if="!showdx || !showsx" class="center col-4 text-light">
		{{ testo }}
	</div> 
	<dedx
		id="destra"
		ref="dx"
		:class="dxclass"
		:style="{visibility: showdx ? 'visible' : 'hidden'}"
	></dedx>
</div>
`,
	methods: {
		generator: function () {
			return "#" + ((Math.random() * 0xffffff) << 0).toString(16);
		},

		hide: function () {
			if (event.target.id == "secondo") {
				// alert(event.target.id);
				this.showsx = false;
				this.sxclass = "col-1";
				this.dxclass = "col-7";
				this.testo = spiegazioni.secondo;
			}
			if (event.target.id == "quarto") {
				// alert(event.target.id);
				this.showsx = false;
				this.sxclass = "col-1";
				this.dxclass = "col-7";
				this.testo = spiegazioni.quarto;
			}
			if (event.target.id == "primo") {
				this.showdx = false;
				this.dxclass = "col-1";
				this.sxclass = "col-7";
				this.testo = spiegazioni.primo;
			}
			if (event.target.id == "terzo") {
				this.showdx = false;
				this.dxclass = "col-1";
				this.sxclass = "col-7";
				this.testo = spiegazioni.terzo;
			}
		},
		unhide: function () {
			this.showsx = true;
			this.showdx = true;
			this.sxclass = "col-6";
			this.dxclass = "col-6";
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
				backgroundColor: "rgba(70, 70, 100,0.5)",
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
				data: [850000, 908622, 910192, 901472, 640401, 569255, 543039, 561944, 435000],
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
		scales: {
			yAxes: [
				{
					ticks: {
						display: true,
						beginAtZero: true,
					},
				},
			],
		},
	},
});
