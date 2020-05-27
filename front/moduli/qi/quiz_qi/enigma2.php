<?php
/**
 * @format
 */
session_start();

if (!isset($_SESSION["id"])) {
    echo 2;
    exit;
}
($dbconn = pg_connect(
    "host=dumbo.db.elephantsql.com
port=5432 dbname=putfahxs user=putfahxs password=yj6L-sA-nVPEpp4PJPpjvHLb6KbZJXsL"
)) or die("Could not connect: " . preg_last_error());
$q1 = "UPDATE logica SET esercizio3=$1 WHERE id = $2";
$res = pg_query_params($dbconn, $q1, [$_POST["score"], $_SESSION["id"]]);

echo 1;
return;