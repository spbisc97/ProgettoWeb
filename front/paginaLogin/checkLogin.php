<html>

<head> </head>

<body>
    <?php
    ($dbconn = pg_connect(
        "host=localhost port=5433 dbname=Edu@homedb user=postgres password=pippopluto"
    )) or die("Could not connect: " . preg_last_error());
    if (!isset($_POST['Submit'])) {
        header("Location: ../index.html");
    } else {
        $email = $_POST["email"];
        $q1 = "select * from utente where email=$1";
        $result = pg_query_params($dbconn, $q1, [$email]);
        if ($line = pg_fetch_array($result, null, PGSQL_ASSOC)) {
            echo "<h1>non hai un account registrato<h1>
                            <a href=../paginaRegistrazione/registrazione.html> clicca qui per registrarti</a>";
        } else {
            $password = md5($_POST["password"]);
            $q2 = "select* from utente where email =$1 and password = $2";
            $result = pg_query_params($dbconn, $q2, [$email, $password]);
            if (!($line = pg_fetch_array($result, null, PGSQL_ASSOC))) {
                echo "<h1> La password è sbagliata</h1>
                    <a href=login.html> clicca qui per il login<h/a>";
            } else {
                $nome = $line["nome"];
                echo "<a href=../index.html> Premi qui</a>";
            }
        }
    }
    ?>


</body>

</html>