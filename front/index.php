<?php
/**
 * @format
 */
session_start(); ?>


<html>

    <head>
        <title>edu@home</title>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1" />
        <link rel="shortcut icon" href="favicon.ico" type="image/x-icon">
        <link rel="stylesheet" href="assets/css/main.css" />
        <link rel="stylesheet" href="assets/css/bootstrap.css">
        <link rel="stylesheet" href="assets/css/home-made.css">
        <script src="assets/js/jquery.min.js"></script>
        <script src="assets/js/bootstrap.js"></script>'
        <style>
        html {
            scroll-behavior: smooth
        }
        </style>


    </head>

    <body>
        <!-- Header -->
        <?php if (isset($_SESSION['id'])) {
        	// and $_SESSION['loggedin'] = true
        	// 	echo '
        	// <header id="header">
        	//  <div class="inner">
        	// 		<nav id="navbar fixed-top bg-primary">
        	//         <a href="index.php" class="logo"><strong>Edu@home</strong></a>
        	// 			<a href="learnMap/learnMap.php">Allenati</a>
        	// 			<a href="snake/snake.html">divertiti</a>
        	// 			<a href="profilo.php">profilo</a>
        	// 			<a id="logout" href="logout.php" >Logout</a>
        	// 		</nav>
        	// 		<a href="#navPanel" class="navPanelToggle"><span class="fa fa-bars"></span></a>
        	// 	</div>
        	// </header>';
        	echo '<nav class="navbar navbar-expand-lg navbar-dark bg-primary fixed-top">
        <!-- href="#" è un ancora in realtà a nulla ma ci permettere di usare il js
        le classi navbar-light/dark e bg-light/dark sono per il tema il primo per
        uso a invece che span per rendere il contenuto interattivo  -->
        <a class="navbar-brand" href=".#">Edu@home</a>
        <!-- ancora come in questo caso -->
        <button
            class="navbar-toggler"
            type="button"
            data-toggle="collapse"
            data-target="#navbarSupportedContent"
            aria-controls="navbarSupportedContent"
            aria-expanded="false"
            aria-label="Toggle navigation"
        >
            <span class="navbar-toggler-icon"></span>
        </button>
        <!-- sopra questo abbiamo una parte che resterà comunque è formattata la pagina, 
            mentre sotto abbiamo una parte collapsable ovvero 
            che formerà un menù ad hamburger (grazie alle magie js)nel caso la pagina fosse troppo stretta per mostrare tuto -->
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav mr-auto">
                <li class="nav-item active">
                    <a id="home" class="nav-link" href="learnMap/learnMap.php"
                        >LearnMap <span class="sr-only">(current)</span></a
                    >
                </li>
            </ul>
            <ul class="navbar-nav ml-auto dropdown">
            <a class="navbar-brand nav-link"  href="#footer">Contatti</a>
            <a class="navbar-brand nav-link" href="learnMap/learnMap.php">Allenati</a>
        	<a class="navbar-brand nav-link" href="snake/snake.html">Divertiti</a>
        	<a class="navbar-brand nav-link" href="profilo.php">Profilo</a>
        	<a class="navbar-brand nav-link" id="logout" href="logout.php" >Logout</a>
                
            </ul>
        </div>
    </nav>';
        } else {
        	echo '<nav class="navbar navbar-expand-lg navbar-dark bg-primary fixed-top">
        <!-- href="#" è un ancora in realtà a nulla ma ci permettere di usare il js
        le classi navbar-light/dark e bg-light/dark sono per il tema il primo per
        uso a invece che span per rendere il contenuto interattivo  -->
        <a class="navbar-brand" href="#">Edu@home</a>
        <!-- ancora come in questo caso -->
        <button
            class="navbar-toggler"
            type="button"
            data-toggle="collapse"
            data-target="#navbarSupportedContent"
            aria-controls="navbarSupportedContent"
            aria-expanded="false"
            aria-label="Toggle navigation"
        >
            <span class="navbar-toggler-icon"></span>
        </button>
        <!-- sopra questo abbiamo una parte che resterà comunque è formattata la pagina, 
            mentre sotto abbiamo una parte collapsable ovvero 
            che formerà un menù ad hamburger (grazie alle magie js)nel caso la pagina fosse troppo stretta per mostrare tuto -->
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav mr-auto">
                <li class="nav-item active">
                    <a id="home" class="nav-link" href="learnMap/learnMap.php"
                        >LearnMap <span class="sr-only">(current)</span></a
                    >
                </li>
            </ul>
            <ul class="navbar-nav ml-auto dropdown">
            <a class="navbar-brand nav-link"  href="#footer">Contatti</a>
            <a class="navbar-brand nav-link" href="paginaLogin/login.html">Login</a>
            <a class="navbar-brand nav-link" href="paginaRegistrazione/registrazione.html">Registrazione</a>
            
        	
                
            </ul>
        </div>
    </nav>';
        	// 	echo '
        	// 	<header id="header">
        	//  	<div class="inner">
        	//         <nav id="navbar fixed-top bg-primary">
        	//             <a href="index.html" class="logo"><strong>Edu@home</strong></a>
        	// 			<a href="contatti.html">Contatti</a>
        	// 			<a href="paginaLogin/login.html">Login</a>
        	// 			<a href="paginaRegistrazione/registrazione.html">Registrazione</a>
        	// 		</nav>
        	// 		<a href="#navPanel" class="navPanelToggle"><span class="fa fa-bars"></span></a>
        	// 	</div>
        	// </header>';
        } ?>

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
                    <article></article>
                    <article>
                        <div class="image round">
                            <img src="images/imm2.jpg" alt="imm 01" />
                        </div>
                        <header>
                            <h3>Programma!</h3>
                        </header>
                        <p>
                            Divertente e utile<br />È usata in qualsiasi cosa <br />Scopri come fare!.
                        </p>

                    </article>
                    <article>
                        <div class="image round">
                            <img src="images/pic02.jpg" alt="Pic 02" />
                        </div>
                        <header>
                            <h3>Ma non solo</h3>
                        </header>
                        <p>Logica, matematica,Fisica<br />di tutto e di più</p>

                    </article>
                    <article></article>
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
        <script>
        $(document).ready(function() {
            $("#logout").click(function() {
                $.post("logout.php");
            });
        })
        </script>
        <script src="assets/js/jquery.min.js"></script>
        <script src="assets/js/skel.min.js"></script>
        <script src="assets/js/util.js"></script>
        <script src="assets/js/main.js"></script>
    </body>

</html>