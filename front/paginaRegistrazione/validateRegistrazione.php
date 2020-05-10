
<html>

<head></head>
			
	<body>
		<?php
		($dbconn = pg_connect(
		"host=localhost port=5433 dbname=Edu@homedb user=postgres password=pippopluto"
		)) or die("Could not connect: " . preg_last_error());
		if (!isset($_POST['Submit'])) {
			header("Location: ../index.html");
		} else {
				$Email = $_POST['email'];
				$q1 = "select * from Utent where Email= $1";
					$result = pg_query_params($dbconn, $q1, [$email]);
					if ($line = pg_fetch_array($result, null, PGSQL_ASSOC)) {
						echo "<h1>Sorry you are already a registered user<h1>
						<a href=../paginaLogin/login.html> Click here to login</a>";
					} else {
						$Nick=$_POST["nick"];
						$Email = $_POST["email"];
						$Nome = $_POST["name"];
						$Cognome = $_POST["surname"];
						$Password = md5($_POST['password']);
						$q2 = "insert into Utent values($1,$2,$3,$4,$5)";
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
			
			</html>