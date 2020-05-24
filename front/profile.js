/** @format */

let destra = Vue.component("destra", {
	template: `<!-- @format -->

<div >
	<hr />
	<p v-for="(value,info) in persona" >{{ value }} : {{ info }}</p>
</div>
`,
	data: function () {
		return { persona: db[1][0] };
	},
});

let sinistra = Vue.component("sinistra", {
	template: `<!-- @format -->

<div >
	<hr />
	
</div>
`,
});

var vue = new Vue({
	el: "#app",
	template: `
	<div class="row">
                <div class="col info">
                    <sinistra></sinistra>
                </div>
                <div class="col info">
                    <destra></destra>
                </div>
            </div>`,
	data: {},
	methods: {},
});
