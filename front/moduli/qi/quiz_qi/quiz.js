/** @format */

$(document).ready(function () {
	$(".container").click(function () {
		$(this).parent().children(".active").removeClass("active");
		$(this).parent().children(".active").text("ciao");
		$(this).addClass("active");
	});
});


function invia() {
	var dom1 = $("#quiz1 .active").attr("id");
	var dom2 = $("#quiz2 .active").attr("id");
    var dom3 = $("#quiz3 .active").attr("id");
    var dom4 = $("#quiz4 .active").attr("id");
    var dom5 = $("#quiz5 .active").attr("id");
    
	if (!dom1 || !dom2 || !dom3 || !dom4 || !dom5) {
		alert("completa le risposte!");
		return false;
	}
	$.post("quiz.php", { prima: dom1, seconda: dom2, terza: dom3, quarta: dom4, quinta: dom5 }, function (data, status) {
		//alert("Data: " + data + "\nStatus: " + status);
		if (data == -1) {
			$("#punteggio").text(
				"Mi dispiace ma non risulti loggato e non potrai partecipare al quiz"
			);
		} else if (data <= 2) {
			$("#punteggio").css("background-color", "rgba(240, 20, 30, 0.5)");
			$("#punteggio").text("Hai risposto in modo corretto a " + data + " domande su 5");
		} else {
			$("#punteggio").css("background-color", "rgba(20, 230, 30, 0.5)");
			$("#punteggio").text("Hai risposto in modo corretto a " + data + " domande su 5");
		}
	});
}