<?php
/**
 * @format
 */
session_start();
$punteggio = 0;

if ($_POST["prima"] == "1.3") {
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
if (!isset($_SESSION["id"])) {
    $punteggio = -1;
    echo $punteggio;
    exit;
}


($dbconn = pg_connect(
    "host=dumbo.db.elephantsql.com
port=5432 dbname=putfahxs user=putfahxs password=yj6L-sA-nVPEpp4PJPpjvHLb6KbZJXsL"
)) or die("Could not connect: " . preg_last_error());
$q1 = "UPDATE logica SET esercizio1=$1 WHERE id = $2";
$res = pg_query_params($dbconn, $q1, [$punteggio, $_SESSION["id"]]);

echo $punteggio;