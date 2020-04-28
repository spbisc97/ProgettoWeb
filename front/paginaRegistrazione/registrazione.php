<!DOCTYPE html>
<html lang="en">
<head>
</head>
<body>
    <?php
    $host = "host=localhost "; //lo spazio dietro è importante!
    $port = "port=5432 ";
    ($db = ("dbname=Edu@homedb")(
    	$dbconn = pg_connect($host + $port + $db + "user=postgres password=password")
    )) or die("Could not connect: " . preg_last_error());
    //controlliamo di aver richiesto la registrazione
    if (!isset($_POST['Submit'])) {
    	header("Location: ../index.html");
    } else {
    	//entrare nell'else significa aver richiesto la registrazione
    	$email = $_POST["email"];
    	$q1 = "select * from utente where email= $1";
    	//operaimo la richiesta
    	$result = pg_query_params($dbconn, $q1, [$email]);
    	if ($line = pg_fetch_array($result, null, PGSQL_ASSOC)) {
    		echo "<h1>Risulti attualmente già registrato </h1><button ><a href=../paginaLogin/login.html>Vai alla pagina di login</a></button>";
    	} else {
    		$nome = $_POST["inputName"];
    		$cognome = $_POST["inputSurname"];
    	}
    }
    ?>
</body>
</html>