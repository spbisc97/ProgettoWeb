<?php
/**
 * @format
 */
$punteggio = 0;

if ($_POST["arrayrisposte1"][0] == "d1.3" ) {
	$punteggio += 1;
}
if ($_POST["arrayrisposte1"][1] == "d2.2") {
	$punteggio += 1;
}
if ($_POST["arrayrisposte1"][2] == "d3.4") {
	$punteggio += 1;
}
if ($_POST["arrayrisposte1"][3] == "d4.2") {
	$punteggio += 1;
}
if ($_POST["arrayrisposte1"][4] == "d5.4") {
	$punteggio += 1;
}

//if($_POST[arrayrisposte])
echo $punteggio;