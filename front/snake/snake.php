<?php
/**
 * @format
 */
session_start();

if (!isset($_SESSION["id"])) {
	echo "-1";
	exit();
}
$id = $_SESSION["id"];
//print_r($_POST);
($dbconn = pg_connect(
	"host=dumbo.db.elephantsql.com
port=5432 dbname=putfahxs user=putfahxs password=yj6L-sA-nVPEpp4PJPpjvHLb6KbZJXsL"
)) or die("Could not connect: " . preg_last_error());

if ($_POST["richiesta"] == "nomi") {
	$q1 = 'select utente.nick, snake.punteggio from utente,snake where snake.id = utente.id
	ORDER BY punteggio DESC
    FETCH FIRST 8 ROWS ONLY';
	$res = pg_query($dbconn, $q1);
	$arr = pg_fetch_all($res);
	echo json_encode($arr);
	exit();
} elseif ($_POST["richiesta"] == "update") {
	$q1 = 'UPDATE snake SET punteggio=$1 WHERE id = $2 and $1>snake.punteggio';
	$res = pg_query_params($dbconn, $q1, [$_POST["punteggio"], $id]);
	if ($res) {
		echo true;
	} else {
		echo false;
	}
}