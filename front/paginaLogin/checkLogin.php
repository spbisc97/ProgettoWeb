<html>

    <head> </head>

    <body>
        <?php
    ($dbconn = pg_connect(
    	"host=edu-database-instance-1.cuooizc71ger.eu-south-1.rds.amazonaws.com
        port=5432 dbname=edu-home user=postgres password=pippopluto"
    )) or die("Could not connect: " . preg_last_error());
    if (!isset($_POST['Login'])) {
    	header("Location: ../index.php");
    } else {
    	$email = $_POST['email'];
    	$q1 = "select * from utente where email= $1";
    	$result = pg_query_params($dbconn, $q1, [$email]);
    	if (!($line = pg_fetch_array($result, null, PGSQL_ASSOC))) {
    		echo "<h1>non hai un account registrato<h1>
                            <a href=../paginaRegistrazione/registrazione.html> clicca qui per registrarti</a>";
    	} else {
    		$password = md5($_POST["password"]);
    		$q2 = "select * from utente where email =$1 and password = $2";
    		$result = pg_query_params($dbconn, $q2, [$email, $password]);
    		if (!($line = pg_fetch_array($result, null, PGSQL_ASSOC))) {
    			echo "<h1> La password è sbagliata</h1>
                    <a href=login.html> clicca qui per il login<h/a>";
    		} else {
    			session_start();
    			$_SESSION['id'] = "select * from utente where id= $1";
				$_SESSION['nick'] = $row['nick'];
    			$nome = $line["nome"];
    			// echo "<a href=../index.html> Premi qui</a>";
    			header("Location: ../index.php?login=corretto,benvenuto$nicm");
    			exit();
    		}
    	}
    }
    ?>
    </body>

</html>