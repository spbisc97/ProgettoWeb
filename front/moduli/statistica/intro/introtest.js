/** @format */

function verifica() {
	if (!$("input[name = 'intro1']:checked").val()) {
		$("#list-tab *").css("color", "initial");
		$("#list-primad").css("color", "red");
		return false;
	}
	if ($("#libro").val() == "") {
		$("#list-tab *").css("color", "initial");
		$("#list-secd").css("color", "red");
		return false;
	}
	if (!$("input[name = 'istat']:checked").val()) {
		$("#list-tab *").css("color", "initial");
		$("#list-terzad").css("color", "red");
		return false;
	}
	if ($("#anni").val() == "") {
		$("#list-tab *").css("color", "initial");
		$("#list-quartad").css("color", "red");
		return false;
	}
	return true;
}
