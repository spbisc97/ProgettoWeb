<html>

    <head> </head>

    <body>
        <script>
        function myFunction() {
            alert("I am an alert box!"); // this is the message in ""
        }
        </script>
        <?php
        //print_r($_POST);

        ($dbconn = pg_connect(
        	"host=dumbo.db.elephantsql.com
        port=5432 dbname=putfahxs user=putfahxs password=yj6L-sA-nVPEpp4PJPpjvHLb6KbZJXsL"
        )) or die("Could not connect: " . preg_last_error());
        if (!isset($_POST['Login'])) {
        	header("Location: ../index.php");
        	return;
        } else {
        	$email = $_POST['email'];
        	$q1 = "select * from utente where email= $1";
        	$result = pg_query_params($dbconn, $q1, [$email]);
        	if (!($line = pg_fetch_array($result, null, PGSQL_ASSOC))) {
        		echo "<h1>non hai un account registrato<h1>
                            <a href=../paginaRegistrazione/registrazione.html> clicca qui per registrarti</a>";
        		exit();
        	} else {
        		// $password = md5($_POST["password"]);
        		$email = $_POST['email'];
        		$password = $_POST['password']; // input password
        		$q3 = pg_query($dbconn, "select * from utente where email='$email'");
        		$arr = pg_fetch_array($q3, 0, PGSQL_NUM);

        		$password_hash = $arr[5]; // prendo l'hash dal db
        		$passcheck = password_verify($password, $password_hash); // funzione verifica, verifica la password inserita con l'hash del db
        		/* echo $password;
             echo $arr[5];              debugging
             echo $password_hash;
             print_r ($password_hash);*/
        		if ($passcheck == false) {
        			echo "<h1> La password è sbagliata</h1>
                   <a href=login.html> clicca qui per il login<h/a>";
        			exit();
        		} else {
        			session_start();
        			$_SESSION['id'] = $arr[0];
        			$_SESSION["nick"] = $arr[1];
        			$nick = $arr[1];
        			// echo "<a href=../index.html> Premi qui</a>";

        			header("Location: ../index.php?login=corretto,benvenuto$nick"); //sposta automaticamente su index e cambia l'header
        			exit();
        		}
        	}
        }