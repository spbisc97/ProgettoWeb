/** @format */

$(document).ready();

function verifica() {
	if (!$("input[name = 'intro1']:checked").val()) {
		$("#list-tab *").css("color", "initial");
		$("#list-primad").css("color", "red");
		return false;
	}
	if ($("#libro").val() == "") {
		$("#list-tab *").css("color", "initial");
		$("#list-secondad").css("color", "red");
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
