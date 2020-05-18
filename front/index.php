

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
					<button class="logout" type="submit name=login-submit">Logout</button>
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

		<!-- Banner -->
		<section id="banner">
			<div class="inner">
				<header>
					<h1>Benvenuti in Edu@home</h1>
				</header>

				<div class="flex">
					<div>
						<span class="icon fa-book"></span>
						<h3>Studia</h3>
						<p>Impara la teoria</p>
					</div>

					<div>
						<span class="icon fa-gamepad"></span>
						<h3>Gioca</h3>
						<p>Metti in pratica</p>
						<p>quello che hai imparato</p>
					</div>

					<div>
						<span class="icon fa-bug"></span>
						<h3>Aiutaci!</h3>
						<p>Segnalaci i bug</p>
					</div>
				</div>

				<footer>
					<a href="paginaLogin/login.html" class="button">Inizia</a>
				</footer>
			</div>
		</section>

		<!-- Three -->
		<section id="three" class="wrapper align-center">
			<div class="inner">
				<div class="flex flex-2">
					<article>
						<div class="image round">
							<img src="images/imm2.jpg" alt="imm 01" />
						</div>
						<header>
							<h3>Programma!<br />HTML,C,Python e molti altri!</h3>
						</header>
						<p>
							Con l'avvento dei tempi moderni la programmazione è una parte
							essenziale<br />È usata in qualsiasi cosa <br />Scopri come fare!.
						</p>
						<footer>
							<a href="#" class="button">Learn More</a>
						</footer>
					</article>
					<article>
						<div class="image round">
							<img src="images/pic02.jpg" alt="Pic 02" />
						</div>
						<header>
							<h3>Ma non solo</h3>
						</header>
						<p>Logica, matematica,Fisica<br />di tutto e di più</p>
						<footer>
							<a href="#" class="button">Learn More</a>
						</footer>
					</article>
				</div>
			</div>
		</section>
		<!-- Footer -->
		<footer id="footer">
				<div class="inner">

					<h3>Contatti</h3>

					<form action="contatti.php" method="post">

						<div class="field half first">
							<label for="name">Nome</label>
							<input name="nome" id="name" type="text" placeholder="Nome">
						</div>
						<div class="field half first">
							<label for="name">Mail</label>
							<input name="mail" id="mail" type="text" placeholder="Mail">
						</div>
						<div class="field half first">
							<label for="name">Oggetto</label>
							<input name="oggetto" id="oggetto" type="text" placeholder="Oggetto">
						</div>
						<div class="field">
							<label for="message">Messaggio</label>
							<textarea name="messaggio" id="message" rows="6" placeholder="Message"></textarea>
						</div>
						<ul class="actions">
							<li><input value="Send Message" class="button" type="submit" name="submitform"></li>
						</ul>
					</form>

						</div>
			</footer>
		

		<!-- Scripts -->
		<script src="assets/js/jquery.min.js"></script>
		<script src="assets/js/skel.min.js"></script>
		<script src="assets/js/util.js"></script>
		<script src="assets/js/main.js"></script>
	</body>
</html>
