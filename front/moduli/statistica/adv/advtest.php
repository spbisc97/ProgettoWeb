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
	$res = pg_query_params($dbconn, $q1, [$valori[0], $_SESSION["id"]]);
	isset($res);
	$q2 = 'select * from (SELECT
    utente.nick, statistica.esercizio1, statistica.esercizio2, statistica.esercizio3,
    statistica.esercizio1+ statistica.esercizio2+ statistica.esercizio3  AS "total"
    FROM statistica,utente where utente.id=statistica.id) as foo
	ORDER BY Total DESC
	FETCH FIRST 7 ROWS ONLY
    ';

	$res2 = pg_query($dbconn, $q2);
	$arr = pg_fetch_all($res2);
	$valori[1] = $arr;
	$restituisco = json_encode($valori);
	echo $restituisco;
}