<?php
/**
 * @format
 */
$punteggio = 0;

if ($_POST["arrayrisposte"][0] == 3 ) {
	$punteggio += 1;
}
if ($_POST["arrayrisposte"][1] == Mais) {
	$punteggio += 1;
}
if ($_POST["arrayrisposte"][2] == Nipotina) {
	$punteggio += 1;
}

//if($_POST[arrayrisposte])
echo $punteggio;