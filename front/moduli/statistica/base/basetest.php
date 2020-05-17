<?php
/**
 * @format
 */

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

//send to database

echo $punteggio;
?>