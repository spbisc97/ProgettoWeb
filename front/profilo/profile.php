<!-- @format -->

<!-- <?php
/**
 * @format
 */

session_start();
if (!isset($_SESSION["id"])) {
	header("Location: ../index.php");
	exit();
}

($dbconn = pg_connect(
	"host=dumbo.db.elephantsql.com
port=5432 dbname=putfahxs user=putfahxs password=yj6L-sA-nVPEpp4PJPpjvHLb6KbZJXsL"
)) or die("Could not connect: " . preg_last_error());

$q1 = 'select nick, email, nome ,cognome  from  utente where id = $1';
$id = $_SESSION["id"];
$res1 = pg_query_params($dbconn, $q1, [$id]);
$arr = pg_fetch_all($res1);
$arr[0] = array_change_key_case($arr[0], CASE_UPPER);
$valori[1] = $arr;

$materie = [0 => "Statistica", 1 => "Python", 2 => "Logica"];

$mat = [];
foreach ($materie as $key => $value) {
	$q2 = "select esercizio1, esercizio2, esercizio3 from " . $value . " where id = $1";
	$res2 = pg_query_params($dbconn, $q2, [$id]);
	if ($res2) {
		$mat[$value] = pg_fetch_all($res2);
	}
}
$valori[0] = $mat;

$infoUtente = json_encode($valori);
?> -->

<!-- @format -->

<!DOCTYPE html>
<html lang="en">

    <head>
        <meta charset="UTF-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
        <title>Introduzione alla statistica</title>
        <link rel="shortcut icon" href="favicon.ico" />
        <link rel="stylesheet" href="../assets/css/bootstrap.css" />
        <link rel="stylesheet" href="../assets/css/home-made.css" />
        <script src="../assets/js/jquery.min.js"></script>
        <script src="../assets/js/bootstrap.js" lang="--js"></script>
        <script src="../assets/js/vue.js"></script>
        <style>
        body {
            background-image: url("backProfile.jpg");
            background-repeat: no-repeat;
            background-attachment: fixed;
            background-size: cover;
        }

        .informazioni {
            border-style: solid;
            border-width: 2px;
            border-radius: 3em;
            border-color: blue;
            margin: 0.2em;

        }
        </style>


        <?php
        echo "<script>
		var db = []; ";
        echo "db= " . $infoUtente . ";";
        echo "</script>";
        ?>

    </head>

    <body>
        <nav class="navbar navbar-expand-lg navbar-dark bg-primary fixed-top">
            <!-- href="#" è un ancora in realtà a nulla ma ci permettere di usare il js
			le classi navbar-light/dark e bg-light/dark sono per il tema il primo per
			uso a invece che span per rendere il contenuto interattivo  -->
            <a class="navbar-brand" href="../index.php">Edu@home</a>
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
                        <a id="home" class="nav-link" href="../learnMap/learnMap.php">LearnMap <span
                                class="sr-only">(current)</span></a>
                    </li>
                </ul>
                <ul class="navbar-nav ml-auto dropdown">
                    <a class="nav-link " href="/front/index.php#footer" style="margin-right: 8em;">Suggerimenti</a>

                </ul>
            </div>
        </nav>

        <div class="container-lg bg-blur-dark text-monospace" style="padding-top: 6em;padding-bottom: 4em;">

            <div id=app></div>
            <!-- <br><br><br> -->
        </div>

        </section>

        <script src="profile.js"></script>
        <?php if ($_GET["operazione"]) {
        	$operazione = $_GET["operazione"];
        	echo '<script>
        $(document).ready(function() {
                    alert("' .
        		$operazione .
        		'");
                    });
        </script>';
        } ?>
    </body>

</html>