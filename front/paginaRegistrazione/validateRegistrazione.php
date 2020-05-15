<html>

<head></head>

<body>
    <?php
    ($dbconn = pg_connect(
        "host=localhost port=5433 dbname=Edu@homedb user=postgres password=pippopluto"
    )) or die("Could not connect: " . preg_last_error());
    if (!isset($_POST['Submit'])) {
        header("Location: ../index.php");
    } else {
        $email = $_POST['email'];
        $q1 = "select * from utente where email= $1";
        $result = pg_query_params($dbconn, $q1, [$email]);
        if ($line = pg_fetch_array($result, null, PGSQL_ASSOC)) {
            echo "<h1>hai già un utente registrato<h1>
						<a href=../paginaLogin/login.html> Click here to login</a>";
        } else {
            $Nick = $_POST["nick"];
            $Email = $_POST["email"];
            $Nome = $_POST["nome"];
            $Cognome = $_POST["cognome"];
            $pass=$_POST['password'];
            //$Password = md5($_POST['password']);
            $Password = password_hash($pass,PASSWORD_BCRYPT); //cript più sicuro
            $q2 = "insert into utente (nick,email,nome,cognome,password) values($1,$2,$3,$4,$5)";
            $data = pg_query_params($dbconn, $q2, [$Nick, $Email, $Nome, $Cognome, $Password]);
            if ($data) {
                //header("Location: registrationCompleted.html);
                echo "<h1> Registration is completed. Start using the website<br> </h1>";
                echo "<a href=../index.php> Premi qui </a> 
							per iniziare ad utilizzare il sito web";
            }
        }
    }
    ?>
</body>


</html>