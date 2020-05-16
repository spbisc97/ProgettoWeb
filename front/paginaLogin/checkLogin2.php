<html>

<head> </head>

<body>
<script>
function myFunction()
{
alert("I am an alert box!"); // this is the message in ""
}
</script>
    <?php
    
    ($dbconn = pg_connect(
        "host=localhost port=5433 dbname=Edu@homedb user=postgres password=pippopluto"
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
        }
        else {
            
             // $password = md5($_POST["password"]);
             $email = $_POST['email'];
             $q1 = "select * from utente where email= $1";
             $password = $_POST['password']; // input password
             $password_hash=pg_query_params($dbconn, $q1, [$password]); // prendo l'hash dal db
             $passcheck =password_verify($password,$password_hash); // funzione verifica, verifica la password inserita con l'hash del db
             if ($passcheck == false){
                 echo "<h1> La password è sbagliata</h1>
                   <a href=login.html> clicca qui per il login<h/a>";
                  
             }else {
                session_start();
                $_SESSION['id'] = "select * from utente where id= $1";
                $_SESSION['nick'] = $row['nick'];
                $nome = $line["nome"]; 
                 // echo "<a href=../index.html> Premi qui</a>";
                header("Location: ../index.php?login=corretto,benvenuto$nicm"); //sposta automaticamente su index e cambia l'header
                exit();
             }
            
            }
        }
    

