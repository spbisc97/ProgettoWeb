<html>

<head></head>

<body>
    <?php
    ($dbconn = pg_connect(
<<<<<<< HEAD
        "host=localhost port=5433 dbname=Edu@homedb user=postgres password=pippopluto"
=======
        "host=localhost port=5433 dbname=Edu@homedb user=postgres password=password"
>>>>>>> 05598aed8cdd385a551abb8b9124009a2a6fbc0e
    )) or die("Could not connect: " . preg_last_error());
    if (!isset($_POST['Submit'])) {
        header("Location: ../index.html");
    } else {
        $Email = $_POST['email'];
<<<<<<< HEAD
        $q1 = "select * from utente where Email= $1";
=======
        $q1 = "select * from Utent where Email= $1";
>>>>>>> 05598aed8cdd385a551abb8b9124009a2a6fbc0e
        $result = pg_query_params($dbconn, $q1, [$email]);
        if ($line = pg_fetch_array($result, null, PGSQL_ASSOC)) {
            echo "<h1>Sorry you are already a registered user<h1>
						<a href=../paginaLogin/login.html> Click here to login</a>";
        } else {
            $Nick = $_POST["nick"];
            $Email = $_POST["email"];
            $Nome = $_POST["nome"];
            $Cognome = $_POST["cognome"];
            $Password = md5($_POST['password']);
<<<<<<< HEAD
            $q2 = "insert into utente (nick,email,nome,cognome,password) values($1,$2,$3,$4,$5)";
=======
            $q2 = "insert into Utent values($1,$2,$3,$4,$5)";
>>>>>>> 05598aed8cdd385a551abb8b9124009a2a6fbc0e
            $data = pg_query_params($dbconn, $q2, [$Nick, $Email, $Nome, $Cognome, $Password]);
            if ($data) {
                //header("Location: registrationCompleted.html);
                echo "<h1> Registration is completed. Start using the website<br> </h1>";
                echo "<a href=../index.html> Premi qui </a> 
							per iniziare ad utilizzare il sito web";
            }
        }
    }
    ?>
</body>
<<<<<<< HEAD
Nome:
=======
>>>>>>> 05598aed8cdd385a551abb8b9124009a2a6fbc0e

</html>