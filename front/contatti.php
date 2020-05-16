

<?php session_start();?>


<html>
	<head>
		<title>edu@home</title>
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1" />
		<link rel="stylesheet" href="assets/css/main.css" />
	</head>
	<body>
		<!-- Header -->
		<?php 
		if (isset($_SESSION['id'])){  // and $_SESSION['loggedin'] = true
		echo '
		<header id="header">
		 <div class="inner">
				<a href="index.html" class="logo"><strong>Edu@home</strong></a>
				<nav id="nav">
					<a href="index.html">Home</a>
					<a href="learnMap/learnMap.html">Allenati</a>
					<a href="snake/snake.html">divertiti</a>
					<a href="profilo.php">profilo</a>
					<form action="logout.php" metho="post">
					<button type="submit name=login-submit">Logout</button>
				</nav>
				<a href="#navPanel" class="navPanelToggle"><span class="fa fa-bars"></span></a>
			</div>
		</header>';
		}
		else {
			echo '<header id="header">
		 <div class="inner">
				<a href="index.html" class="logo"><strong>Edu@home</strong></a>

					<nav id="nav">
					<a href="index.html">Home</a>
					<a href="info.html">Info</a>
					<a href="contatti.html">Contatti</a>
					<a href="paginaLogin/login.html">Login</a>
					<a href="paginaRegistrazione/registrazione.html">Registrazione</a>
				</nav>
				<a href="#navPanel" class="navPanelToggle"><span class="fa fa-bars"></span></a>
			</div>
		</header>';

		}
		?>
		<form class="contact-form" action="form.php" methon ="post">
			<input type="text" name="nome" placeholder="Nome">
			<input type="mail" name="mail" placeholder="email">
			<input type="text" name="subject" placeholder="oggetto">
			<textarea name="messaggio" placeholder="Inserisci il messaggio"></textarea>
			<button type="submit" name="submit">INVIA MAIL</button>
		</form> 
	

		

		<!-- Scripts -->
		<script src="assets/js/jquery.min.js"></script>
		<script src="assets/js/skel.min.js"></script>
		<script src="assets/js/util.js"></script>
		<script src="assets/js/main.js"></script>
	</body>
</html>
