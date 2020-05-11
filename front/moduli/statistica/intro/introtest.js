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
	alarm("hello");
	return true;
}
