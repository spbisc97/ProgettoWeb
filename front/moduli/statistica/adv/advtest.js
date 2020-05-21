/** @format */
var risposte = [];
var varie = [];
var quiz = {
	questions: [
		{
			text: "quale è lo sport più praticato?",
			risposte: [
				{ text: "calcio" },
				{ text: "nessuno" },
				{ text: "tennis e pallavvolo in egual misura" },
				{ text: "videogiochi" },
			],
		},
		{
			text: "che tipologia di grafico è questo?",
			risposte: [
				{ text: "a barre " },
				{ text: "linea" },
				{ text: "radar" },
				{ text: "a torta" },
			],
		},
		{
			text: "che informazioni ha sull'asse delle y?",
			risposte: [
				{ text: "valore della popolazione " },
				{ text: "sport preferito" },
				{ text: "anni trascorsi" },
				{ text: "non ha l'asse delle y" },
			],
		},
		{
			text: "quando c'è stato un picco di nascite?",
			risposte: [
				{ text: "non c'è stato" },
				{ text: "il grafico parla di cinghiali" },
				{ text: "nel passato" },
				{ text: "tra il 1970 e il 1980" },
			],
		},
	],
};

var vue = new Vue({
	el: "#app",
	template: `<!-- @format -->
<div>
	<div v-if="rendercomponent">
		<h4 class="center" style="padding: 2em;">{{ domanda.text }}</h4>
		<div class="center" style="position: relative;">
			<button
				:value="index"
				v-on:click="segna();isActive[index]=true;"
				v-for="(domande,index) in domanda.risposte"
				:class="{ 'btn-danger' : isActive[index] }"
				class="center btn btn-primary"
				style="display: list-item; margin: 0.3em;"
			>
				{{ domande.text }}
			</button>
		</div>
	</div>
	<div >
		<resoconto v-if="!rendercomponent"></resoconto>
	</div>
</div>
`,
	data: {
		indice: 0,
		colors: [],
		domanda: quiz.questions[0],
		rendercomponent: true,
		isActive: [false, false, false, false],
	},
	methods: {
		segna: function (message) {
			this.isActive = [false, false, false, false];
			risposte[this.indice] = event.target.value;
			event.target.className += " btn-danger";
		},
		generator: function () {
			for (let index = 0; index < 15; index++) {
				this.colors.push("#" + ((Math.random() * 0xffffff) << 0).toString(16));
			}
		},
		cambiadomanda: function () {
			this.isActive = [false, false, false, false];
			this.indice++;
			this.domanda = quiz.questions[this.indice];
		},
		controlla: function () {
			vue.rendercomponent = false;
		},
	},
});

let res = Vue.component("resoconto", {
	template: `<div>
		<p class="center text-danger" > La classifica</p>
        <button class="center btn btn-outline-primary"  v-for="(persona,index) in persone" >{{ persona.nick }} con {{persona.total}} punti </button>
        
    </div>`,
	data: function () {
		return { persone: varie[1] };
	},
});
vue.generator();
Vue.component("graph", {
	template: `
        <canvas id="chart"></canvas>`,
	data: function () {
		return {};
	},
});

var chart = $("#chart");
vue.generator();
let grafico = new Chart(chart, {
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
		legend: {
			position: "left",
			display: true,
		},
	},
});

var nascite = {
	labels: [1950, 1960, 1970, 1980, 1990, 2000, 2010, 2019],
	datasets: [
		{
			//label: "Media",
			data: [, 908622, 910192, 901472, 640401, 569255, 543039, 561944, 435000],
			backgroundColor: "rgb(78, 156, 45,0.3)",
			borderWidth: 1,
			borderColor: "rgb(200,200,200)",
			hoverBorderWidth: 1,
		},
	],
};
var popolazione = {
	labels: [2010, 2011, 2012, 2013, 2014, 2015],
	datasets: [
		{
			//label: "Media",
			data: [60626442, 60785753, 59685227, 60782668, 60795612, 60665551],
			backgroundColor: vue.colors,
			borderWidth: 1,
			borderColor: "rgb(200,200,200)",
			hoverBorderWidth: 1,
		},
	],
};
var popolazioneopzioni = {
	title: {
		display: true,
		text: "Popolazione Italiana",
		fontSize: 15,
	},
	legend: {
		display: false,
	},
};
var nasciteopzioni = {
	responsive: true,
	title: {
		display: true,
		text: "nascite",
		fontSize: 15,
	},
	legend: {
		display: false,
	},
};
var aziendaopzioni = {
	responsive: true,
	title: {
		display: true,
		text: "Azienda",
		fontSize: 15,
	},
	legend: {
		display: true,
		position: "bottom",
	},
};

var azienda = {
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
};

function nascitechart() {
	grafico.destroy();
	vue.generator();
	grafico = new Chart("chart", { type: "line", data: nascite, options: nasciteopzioni });
}
function aziendachart() {
	grafico.destroy();
	vue.generator();
	grafico = new Chart("chart", { type: "radar", data: azienda, options: aziendaopzioni });
}
function popolazionechart() {
	grafico.destroy();
	vue.generator();
	grafico = new Chart("chart", { type: "bar", data: popolazione, options: popolazioneopzioni });
}

$(document).ready(function () {
	$("#prossima").click(function () {
		cambiadomande();
	});
});

function cambiadomande() {
	// alert("aria di vue");
	if ($.trim($("#prossima").text()) == "Seconda Domanda") {
		aziendachart();
		$("#prossima").text("Terza Domanda");
	} else if ($.trim($("#prossima").text()) == "Terza Domanda") {
		popolazionechart();
		$("#prossima").text("Quarta Domanda");
	} else if ($.trim($("#prossima").text()) == "Quarta Domanda") {
		nascitechart();
		$("#prossima").text("Controlla");
	} else if ($.trim($("#prossima").text()) == "Controlla") {
		controlla();
		return;
	}

	vue.cambiadomanda();
}

function controlla() {
	$.post("advtest.php", { risposte: risposte }, function (data, status) {
		grafico.destroy();

		vue.rendercomponent = false;
		alert("Data: " + data + "\nStatus: " + status);
		if (data == -1) {
			// varie = null;
		} else {
			varie = JSON.parse(data);
			punteggio = varie[0];
			res.persone = varie[1];
			$("#lateralgraph").html(
				`<!-- @format -->

<div style="border-radius: 1em; padding: 1em; margin: 1em; background: rgba(24, 209, 34, 0.438);">
	<h4 class="center text-monospace">Hai ottenuto un punteggio di ` +
					punteggio +
					` su 4</h4>
</div>
`
			);
		}
	});
}
