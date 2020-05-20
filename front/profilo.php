<?php
/**
 * @format
 */
session_start(); ?>


<html>

    <head>
        <title>edu@home</title>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1" />
        <link rel="stylesheet" href="assets/css/main.css" />
    </head>

    <body>
        <!-- Header -->
        <?php if (!isset($_SESSION['id'])) {
        	// and $_SESSION['loggedin'] = true
        	header("Location: /front/index.php"); //sposta automaticamente su index e cambia l'header
        } else {
        	echo "per cambiare password clicca qua";
        	echo "<a href=reset/reset_password/reset_password1.php> Premi qui </a>";
        	echo "per cambiare nick clicca qua";
        	echo "<a href=reset/reset_nick/reset_nickform.php> Premi qui </a>";
        	echo "per cambiare email clicca qua";
        	echo "<a href=reset/reset_email/reset_emailform.php> > Premi qui </a>";
        }
?>