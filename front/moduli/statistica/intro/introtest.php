<!DOCTYPE html>
<html lang="en">

    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Document</title>
        <link rel="shortcut icon" href="../../../favicon.ico" />
        <link rel="stylesheet" href="../../../assets/css/bootstrap.css" />
        <link rel="stylesheet" href="../../../assets/css/home-made.css" />
        <script src="../../../assets/js/jquery.min.js"></script>
        <script src="../../../assets/js/bootstrap.js" lang="--js"></script>
    </head>

    <body>
        <nav>

            <body>
                <nav class="navbar navbar-expand-lg navbar-dark bg-primary fixed-top">
                    <!-- href="#" è un ancora in realtà a nulla ma ci permettere di usare il js
			le classi navbar-light/dark e bg-light/dark sono per il tema il primo per
			uso a invece che span per rendere il contenuto interattivo  -->
                    <a class="navbar-brand" href="../../../index.php">Edu@home</a>
                    <!-- ancora come in questo caso -->
                    <button class="navbar-toggler" type="button" data-toggle="collapse"
                        data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                        aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                    </button>
                    <!-- sopra questo abbiamo una parte che resterà comunque è formattata la pagina, 
                mentre sotto abbiamo una parte collapsable ovvero 
                che formerà un menù ad hamburger (grazie alle magie js)nel caso la pagina fosse troppo stretta per mostrare tuto -->
                    <div class="collapse navbar-collapse" id="navbarSupportedContent">
                        <ul class="navbar-nav mr-auto">
                            <li class="nav-item active">
                                <a id="home" class="nav-link" href="../../../learnMap/learnMap.php">LearnMap <span
                                        class="sr-only">(current)</span></a>
                            </li>
                        </ul>
                        <ul class="navbar-nav ml-auto dropdown">
                            <a class="nav-link dropdown-toggle" style="margin-right: 8em;" href="#" id="navbarDropdown"
                                role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                Profilo
                            </a>
                            <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                                <a class="dropdown-item" href="#">Impostazioni</a>
                                <div class="dropdown-divider"></div>
                                <a class="dropdown-item" href="/front/profilo.php">Profilo</a>
                            </div>
                        </ul>
                    </div>
                </nav>
                <br><br><br>
                <div class="container  ">
                    <?php
                    session_start();
                    if (!isset($_SESSION["id"])) {
                    	echo ' <div class="accordion" style="padding:20px;border-radius: 10px; background-color:rgba(200, 20, 20, 0.6);"> Ci dispiace ma non risulti loggato </div>   </div>
                        </body>
            
                        <html>';
                    	return;
                    }

                    $punteggio = 0;

                    if ($_POST["intro1"] == "egizi") {
                    	$punteggio += 1;
                    }
                    if (strstr(strtolower($_POST["libro"]), "numeri")) {
                    	$punteggio += 1;
                    }
                    if ($_POST["istat"] == "3") {
                    	$punteggio += 1;
                    }
                    if ($_POST["anni"] == "10") {
                    	$punteggio += 1;
                    }
                    ($dbconn = pg_connect(
                    	"host=dumbo.db.elephantsql.com
                    port=5432 dbname=putfahxs user=putfahxs password=yj6L-sA-nVPEpp4PJPpjvHLb6KbZJXsL"
                    )) or die("Could not connect: " . preg_last_error());

                    $q1 = "UPDATE statistica SET esericizio1=$1 WHERE id = $2";

                    $res = pg_query_params($dbconn, $q1, [$punteggio, $_SESSION["id"]]);

                    if ($punteggio > 2) {
                    	echo '<div class="accordion" style="padding:20px;border-radius: 10px; background-color:rgba(84, 200, 20, 0.6);"> il tuo punteggio è di ';
                    } else {
                    	echo '<div class="accordion" style="padding:20px;border-radius: 10px; background-color:rgba(200, 20, 20, 0.6);"> il tuo punteggio è di ';
                    }
                    echo $punteggio;
                    echo " punti su 4";

                    echo "</div>";

                    echo "<br><br><br>";

//print_r($_POST);
?>
                </div>
            </body>

            <html>