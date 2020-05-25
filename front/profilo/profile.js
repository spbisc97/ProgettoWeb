/** @format */

var info = {
	Password: {
		text: "Password",
		link: "../reset/reset_password.php",
		todisplay: [
			{ text: "Nuova password", type: "text", name: "newpass" },
			{ text: "Check password", type: "text", name: "newpass2" },
			{ text: "Vecchia password", type: "text", name: "pass" },
		],
	},
	Email: {
		text: "Email",
		link: "../reset/reset_email.php",
		todisplay: [
			{ text: "Nuova email", type: "email", name: "newmail" },
			{ text: "Check email", type: "email", name: "newmail2" },
			{ text: "Password", type: "text", name: "pass" },
		],
	},
	Nick: {
		text: "Nick",
		link: "../reset/reset_nick.php",
		todisplay: [
			{ text: "Nuovo nick", type: "text", name: "newnick" },
			{ text: "Password", type: "text", name: "pass" },
		],
	},
};
let destra = Vue.component("destra", {
	template: `<!-- @format -->

<div class="">
	
	<table class="table table-info table-bordered" >
		<tr class="" v-for="(info,value) in persona"> <td>  {{ value }}  </td> <td>  {{ info }} </td> <hr> </tr>
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

let bot = Vue.component("bottoni", {
	template: `<!-- @format -->

<div class="" style="display: flex; align-items: center; justify-content: center;">
	<button
		v-for="elem in change"
		data-toggle="modal"
		data-target="#overscreen"
		v-on:click="overlay"
		class="btn btn-outline-primary d-lg-inline-block"
		:id="elem.text"
	>
		{{ elem.text }}
	</button>

	<div v-if="over" class="modal fade" id="overscreen">
		<div class="modal-dialog">
			<div class="modal-content" style="background: whitesmoke;">
				<div class="modal-header text-center">
					<h4 class="modal-title w-100 font-weight-bold">{{ over.text }}</h4>
					<button
						type="btn btn-primary"
						class="close"
						data-dismiss="modal"
						aria-label="Close"
					>
						<span aria-hidden="true">&times;</span>
					</button>
				</div>
				<form :action="over.link" class="form-group" method="POST">
					<div v-for="elem in over.todisplay" class="mb-4">
						<label data-error="wrong" data-success="right" for="elem.text">
							{{ elem.text }}</label
						>
						<input
							:type="elem.type"
							:name="elem.text"
							:id="elem.text"
							class="form-control"
						/>
					</div>
					<div class="modal-footer d-flex justify-content-center">
						<input type="submit" value="Invia" class="btn btn-primary" name="Change" />
					</div>
				</form>
			</div>
		</div>
	</div>
</div>
`,
	data: function () {
		return { change: info, over: false };
	},
	options: {
		reactive: true,
	},
	methods: {
		overlay: function () {
			this.over = info[event.target.id];
		},
	},
});

var vue = new Vue({
	el: "#app",
	template: `<!-- @format -->
<div>
	<div class="row align-items-center center">
		<div style="margin: 3em;">
			In questa sezione puoi avere un riassunto del tuo profilo, i punteggi ai test e se ne
			hai necessità cambiare alcune impostazioni del tuo profilo
		</div>
		<div class="col info">
			<sinistra></sinistra>
		</div>
		<div class="col info center">
			<destra></destra>
		</div>
	</div>
	<div class="">
		<bottoni></bottoni>
	</div>
</div>
`,
	data: function () {
		return {};
	},
	methods: {},
});
