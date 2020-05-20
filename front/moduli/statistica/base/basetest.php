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
		"host=edu-database-instance-1.cuooizc71ger.eu-south-1.rds.amazonaws.com
port=5432 dbname=edu-home user=postgres password=pippopluto"
	)) or die("Could not connect: " . preg_last_error());
	$q1 = "UPDATE statistica SET esercizio2=$1 WHERE id = $2";
	$res = pg_query_params($dbconn, $q1, [$punteggio, $_SESSION["id"]]);
}
//send to database

echo $punteggio;
?>