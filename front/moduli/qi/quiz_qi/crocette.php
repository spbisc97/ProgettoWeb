<?php
/**
 * @format
 */
session_start();
$punteggio = 0;

if (!isset($_SESSION["id"])) {
    $punteggio = -1;
    echo $punteggio;
    exit;
}

if ($_POST["arrayrisposte"][0] == "domanda1_1") {
    $punteggio += 1;
}
if ($_POST["arrayrisposte"][1] == "domanda2_5") {
    $punteggio += 1;
}
if ($_POST["arrayrisposte"][2] == "domanda3_4") {
    $punteggio += 1;
}

($dbconn = pg_connect(
    "host=dumbo.db.elephantsql.com
port=5432 dbname=putfahxs user=putfahxs password=yj6L-sA-nVPEpp4PJPpjvHLb6KbZJXsL"
)) or die("Could not connect: " . preg_last_error());
$q1 = "UPDATE logica SET esercizio2=$1 WHERE id = $2";
$res = pg_query_params($dbconn, $q1, [$punteggio, $_SESSION["id"]]);

//if($_POST[arrayrisposte])
echo $punteggio;