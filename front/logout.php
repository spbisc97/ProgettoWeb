<?php

session_start(); //inizio sessione, tengo conto dei parametri globali passati in login
session_unset(); // libera tutte le variabili della sessione ^^
session_destroy(); //distrugge i dati collegati alla sessione
header("Location: index.php");
?>