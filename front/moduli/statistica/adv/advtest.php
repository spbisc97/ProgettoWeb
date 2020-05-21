<?php
/**
 * @format
 */
session_start();
$corrette = ["0", "2", "0", "0"];
$valori = [0, ["hello world"]];
if (!isset($_SESSION["id"])) {
	echo -1;
	return;
} else {
	if ($_POST["risposte"][0] == $corrette[0]) {
		$valori[0] += 1;
	}
	if ($_POST["risposte"][1] == $corrette[1]) {
		$valori[0] += 1;
	}
	if ($_POST["risposte"][2] == $corrette[2]) {
		$valori[0] += 1;
	}
	if ($_POST["risposte"][3] == $corrette[3]) {
		$valori[0] += 1;
	}

	($dbconn = pg_connect(
		"host=dumbo.db.elephantsql.com
port=5432 dbname=putfahxs user=putfahxs password=yj6L-sA-nVPEpp4PJPpjvHLb6KbZJXsL"
	)) or die("Could not connect: " . preg_last_error());
	$q1 = "UPDATE statistica SET esercizio3=$1 WHERE id = $2";
	$res = pg_query_params($dbconn, $q1, [$valori, $_SESSION["id"]]);

	print_r($valori);
}