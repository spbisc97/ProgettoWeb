<?php
/**
 * @format
 */
session_start();
$punteggio = 0;

if ($_POST["prima"] == "1.3" ) {
	$punteggio += 1;
}
if ($_POST["seconda"] == "2.2") {
	$punteggio += 1;
}
if ($_POST["terza"] == "3.4") {
	$punteggio += 1;
}
if ($_POST["quarta"] == "4.2") {
	$punteggio += 1;
}
if ($_POST["quinta"] == "5.4") {
	$punteggio += 1;
}

//if($_POST[arrayrisposte])
echo $punteggio;
