/** @format */

$(document).ready(function () {
	$(".list-group-item").click(function () {
		$(this).parent().children(".active").removeClass("active");
		$(this).parent().children(".active").text("ciao");
		$(this).addClass("active");
	});
});

function reset() {
	$(".list-group-item").removeClass("active");
}
function invia() {
	var dom1 = $("#nav-primo .active").attr("id");
	var dom2 = $("#nav-secondo .active").attr("id");
	var dom3 = $("#nav-terzo .active").attr("id");
	if (!dom1 || !dom2 || !dom3) {
		alert("completa le risposte! \n se hai bisogno di aiuto puoi sempre tornare alla teoria!");
		return false;
	}
	$.post("basetest.php", { prima: dom1, seconda: dom2, terza: dom3 }, function (data, status) {
		//alert("Data: " + data + "\nStatus: " + status);
		if(data =-1){
			$("#punteggio").text("Mi dispiace ma non risulti loggato e non potrai partecipare alle classifiche globali")
		}
		elseif (data <= 1) {
			$("#punteggio").css("background-color", "rgba(240, 20, 30, 0.5)");
			$("#punteggio").text("hai risposto in modo corretto a " + data + " domande su 3");
		} else {
			$("#punteggio").css("background-color", "rgba(20, 230, 30, 0.5)");
			$("#punteggio").text("hai risposto in modo corretto a " + data + " domande su 3");
		}
		
	});
}
