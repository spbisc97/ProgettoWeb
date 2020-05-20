<?php
/**
 * @format
 */
session_start();
$punteggio = 0;
if (!isset($_SESSION["id"])) {
	$punteggio = -1;
} else {
	$punteggio = 0;
	if ($_POST["prima"] == '11') {
		$punteggio += 1;
	}
	if ($_POST["seconda"] == '24') {
		$punteggio += 1;
	}
	if ($_POST["terza"] == "33") {
		$punteggio += 1;
	}

	($dbconn = pg_connect(
		"host=dumbo.db.elephantsql.com
port=5432 dbname=putfahxs user=putfahxs password=yj6L-sA-nVPEpp4PJPpjvHLb6KbZJXsL"
	)) or die("Could not connect: " . preg_last_error());
	$q1 = "UPDATE statistica SET esercizio2=$1 WHERE id = $2";
	$res = pg_query_params($dbconn, $q1, [$punteggio, $_SESSION["id"]]);
}
//send to database

echo $punteggio;
?>
