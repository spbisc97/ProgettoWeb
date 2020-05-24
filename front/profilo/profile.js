/** @format */

var cambio = ["Password", "Mail", "Nick"];
let destra = Vue.component("destra", {
	template: `<!-- @format -->

<div class="">
	
	<table class="table table-info" >
		<tr class="" v-for="(info,value) in persona"> <td>  {{ value }}  </td> <td> :  {{ info }} </td> <hr> </tr>
	</table>
</div>
`,
	data: function () {
		return { persona: db[1][0] };
	},
});

let sinistra = Vue.component("sinistra", {
	template: `<!-- @format -->

<div class="center" style="padding: 2em;">
	<table class="table table-dark table-bordered" style="">
		<tr></tr>
			<th></th>
			<th style="padding: 0.4em;" v-for="(valore,esercizio) in nesercizi">{{ esercizio }}</th>
		</tr>
		<tr v-for="(elemento,materia ) in materie">
			<td style="padding: 0.4em;">{{ materia }}</td>
			<td style="padding: 0.4em;" v-for="(valore,esercizio) in elemento[0]">{{ valore }}</td>
		</tr>
	</table>
</div>
`,
	data: function () {
		return { materie: db[0], nesercizi: db[0]["Statistica"]["0"] };
	},
});

var vue = new Vue({
	el: "#app",
	template: `<!-- @format -->

<div class="row align-items-center center">
	<div style="margin: 3em;">
		Lorem ipsum dolor sit amet consectetur adipisicing elit. Laudantium quaerat unde aut, minima
		repellat doloribus at fugit numquam pariatur optio itaque rerum quo cumque molestias iusto
		a. Nihil, est atque?
	</div>
	<div class="col-7 info">
		<sinistra></sinistra>
	</div>
	<div class="col-5 info center">
		<destra></destra>
	</div>
	<div>
		Lorem ipsum dolor sit amet consectetur, adipisicing elit. Fugiat qui suscipit deleniti eum
		velit totam. Beatae, odio. Quia nemo eum tempora, animi necessitatibus est. Facilis dolorem
		consequatur at praesentium eveniet!
	</div>
</div>
`,
	data: function () {
		return {};
	},
	methods: {},
});
