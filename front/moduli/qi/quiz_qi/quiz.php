<?php
/**
 * @format
 */
$punteggio = 0;

if ($_POST[arrayrisposte][0] == "domanda_1") {
	$punteggio += 1;
}
if ($_POST[arrayrisposte][1] == "domanda2_5") {
	$punteggio += 1;
}
if ($_POST[arrayrisposte][2] == "domanda3_4") {
	$punteggio += 1;
}

//if($_POST[arrayrisposte])
echo $punteggio;