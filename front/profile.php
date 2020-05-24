<!-- @format -->

<!-- <?php
/**
 * @format
 */

session_start();
if (!isset($_SESSION["id"])) {
	header("Location: index.php");
	exit();
}

($dbconn = pg_connect(
	"host=dumbo.db.elephantsql.com
port=5432 dbname=putfahxs user=putfahxs password=yj6L-sA-nVPEpp4PJPpjvHLb6KbZJXsL"
)) or die("Could not connect: " . preg_last_error());

$q1 = 'select nick, email, nome ,cognome  from  utente where id = $1';
$id = $_SESSION["id"];
$res2 = pg_query_params($dbconn, $q1, [$id]);
$arr = pg_fetch_all($res2);
$valori[1] = $arr;
$restituisco = json_encode($valori);
?> -->

<!-- @format -->

<!DOCTYPE html>
<html lang="en">

    <head>
        <meta charset="UTF-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
        <title>Introduzione alla statistica</title>
        <link rel="shortcut icon" href="favicon.ico" />
        <link rel="stylesheet" href="bootstrap-4.4.1-dist/css/bootstrap.css" />
        <link rel="stylesheet" href="assets/css/home-made.css" />
        <script src="jQuery/jquery.min.js"></script>
        <script src="assets/js/bootstrap.js" lang="--js"></script>

        <style>
        body {
            background-image: url("../art.jpg");
            background-repeat: no-repeat;
            background-attachment: fixed;
            background-size: cover;
        }

        .informazioni {
            border-style: solid;
            border-width: 2px;
            border-radius: 3em;
            border-color: blue;
        }
        </style>


        <?php
        echo "<script>
		var db = []; ";
        echo "db= " . $restituisco . ";";
        echo "</script>";
        ?>

    </head>

    <body>
        <nav class="navbar navbar-expand-lg navbar-dark bg-primary fixed-top">
            <!-- href="#" è un ancora in realtà a nulla ma ci permettere di usare il js
			le classi navbar-light/dark e bg-light/dark sono per il tema il primo per
			uso a invece che span per rendere il contenuto interattivo  -->
            <a class="navbar-brand" href="../../../index.php">Edu@home</a>
            <!-- ancora come in questo caso -->
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
                aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
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
                        <a class="dropdown-item" href="/front/profilo.php">Impostazioni</a>
                        <div class="dropdown-divider"></div>
                        <a class="dropdown-item" href="/front/index.php#footer">Suggerimenti</a>
                    </div>
                </ul>
            </div>
        </nav>

        <div class="container">
            <br /><br /><br />
            <div id=app></div>
        </div>
        <script src="assets/js/vue.js"></script>
        <script src="profile.js"></script>
    </body>

</html>