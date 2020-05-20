<!-- @format -->

<!DOCTYPE html>
<html lang="en">

    <head>
        <meta charset="UTF-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
        <title>Document</title>
        <!-- uso di bootstrap self hosted-->
        <link rel="shortcut icon" href="../../../favicon.ico" />
        <link rel="stylesheet" href="../assets/css/bootstrap.css" />
        <script src="../assets/js/jquery.min.js"></script>
        <script src="../assets/js/bootstrap.js" lang="--js"></script>
        <link rel="stylesheet" href="../assets/css/home-made.css" />
        <!--abbiamo bisogno di jquery per far funzionare ad esempio la navbar-->
        <!-- notiamo che per far funzionare il tutto ha bisogno di caricare prima jquey e poi bootstrap 
        quindi le funzioni di bootstrap utilizzano in parte jquery-->
        <script src="learnMap.js"></script>
        <style>
        body {
            background-image: url("colored-pencils.jpg");
            background-repeat: no-repeat;
            background-attachment: fixed;
            background-size: cover;
        }
        </style>
    </head>
    <!-- style="background-image: url('The_Kiss.jpg'); background-size: cover;" -->

    <body onload="assegnaEventHandlers();">
        <nav class="navbar navbar-expand-lg navbar-dark bg-primary fixed-top">
            <!-- href="#" è un ancora in realtà a nulla ma ci permettere di usare il js
			le classi navbar-light/dark e bg-light/dark sono per il tema il primo per
			uso a invece che span per rendere il contenuto interattivo  -->
            <a class="navbar-brand" href="../index.php">Edu@home</a>
            <!-- ancora come in questo caso -->
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
                aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <!-- sopra questo abbiamo una parte che resterà comunque è formattata la pagina, 
                mentre sotto abbiamo una parte collapsable ovvero 
                che formerà un menù ad hamburger (grazie alle magie js)nel caso la pagina fosse troppo stretta per mostrare tuto -->
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav mr-auto">
                    <li class="nav-item active">
                        <a id="home" class="nav-link" href="#">LearnMap <span class="sr-only">(current)</span></a>
                    </li>
                </ul>
                <ul class="navbar-nav ml-auto dropdown">
                    <a class="nav-link dropdown-toggle" style="margin-right: 6em;" href="#" id="navbarDropdown"
                        role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        Profilo
                    </a>
                    <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                        <a class="dropdown-item" href="#">Impostazioni</a>
                        <div class="dropdown-divider"></div>
                        <a class="dropdown-item" href="#">Globa</a>
                    </div>
                </ul>
            </div>
        </nav>
        <!-- uso emmet per comletare e testare (consiglio l'uso per velocizzare la scrittura di codice)-->
        <br /><br />

        <div class="container-xl text-monospace">
            <!-- uso il container per fare un resize ottimale del testo  https://getbootstrap.com/docs/4.4/layout/overview/ -->
            <div class="bg-blur" style="border-radius: 5%;">
                <div style="margin: 3em; border-style: none; border-radius: 3%;">
                    <br />
                    In questa sezione è possibile scegliere la materia che si è interessati ad
                    apprendere, noi chiaramente forniremo solo delle basi per approcciarsi!
                    <br />
                    <br />
                </div>
            </div>
            <!-- testo di prova emmet-->
            <div>
                <button class="materie btn btn-primary">
                    logica
                </button>
                <button class="materie btn btn-primary">python</button>
                <button class="materie btn btn-primary">
                    statistica
                </button>
            </div>
            <hr />
            <div id="zonadinamica">
                <div style="border-style: dotted;">
                    Con i bottoni qui sopra puoi selezionare la materia che desideri apprendere!
                </div>
            </div>
            <span id="carousel"></span>
            <hr />
            <!-- qui possiamo usare ajax -->
        </div>
    </body>

</html>

<!-- 
    Da aggiundere in un secondo momento: ora è più comodo usarli self hosted
    <!-- Uso il link di bootstrap in modo da non dover scaricare tutta la cartella! 
		
        rel="stylesheet"
        href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css"
    
    <!-- stessa cosa faccio con jquery in modo da non dover scaricare anche quello (con link google) 
     	src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js">
    <!--parte js di bootstrap necessaria a far funzionare ad esempio la navbar
     	src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js">
-->