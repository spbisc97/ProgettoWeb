<!-- @format -->

# Progetto per l'esonero di LTW

## Piattaforma simil-Educativa

1. Idee.
- Mappa per accedere alle attività:
* Internamente i minigiochi e minicorsi( _attività_ )

Editato in vscode, workspace inlcuso:
[Edu@Home](Edu@Home.code-workspace)

Hostato Temporaneamente su : [Tondihost-Edu@Home](http://tondihost.ns0.it/front/index.php) in orario 9-22

Credits to [PHPMailer](https://github.com/PHPMailer/PHPMailer)

---

### Contenuti delle cartelle:

- Front : Il front-end dell'applicazione 

- Back : un dump del database

- Docker : un docker-compose con nginx e php per un hosting veloce del sito 

- node_modules : non hanno a che fare con il sito ma necessari per velocizzare lo sviluppo in __VSCODE__

L'index.php nella cartella principale è solo per ridirezionarsi poi all'index nella cartella front, alcuni link che abbiamo usato sono assoluti e richiedono per funzionare di partire dalla cartella principale del git 

./front :35 directories, 184 files
``` bash

├── assets
│   ├── css: costruiti all evenienza + bootstrap
│   │  
│   ├── fonts
│   │  
│   └── js : vue, jquery, boostrap, e costruiti all'evenienza
│  
├── <mark>images</mark> : autoesplicativa
│  
├──<mark> info</mark> : la pagina chi siamo
│   ├── info.html
│   └── media
│      └── Audio e foto per la pagina chi siamo
│  
├── <mark>learnMap</mark>
│   ├── php,js,css, etc per la lernmap
│   └── materie
│   └── Immagini e file html per la richiesta asincrona della learnmap
│
├── <mark>moduli</mark> : le varie materie alle quali si viene ridiretti dalla learnmap
│   ├── programmazione
│   │   └── cartelle e file per i contenuti di python + idle e quiz  
│   ├── qi
│   │   └── cartelle e file per i contenuti e quiz
│   └── statistica
│       └── cartelle e file per i contenuti e quiz
│
├── <mark>paginaLogin</mark>
│       └── Php per il login richiamato dall'overlay in index
│
├── <mark>paginaRegistrazione</mark>
│       └── contenuti per la registrazione html,js,php
├── <mark>[phpmailer](https://github.com/PHPMailer/PHPMailer)</mark> : abbiamo usato questa repository git
│                           per rendere anche la sezione contatti dell'index funzionante
├── <mark>profilo</mark>
│       └── js, php per la visualizzazione delle info del profilo
├── <mark>reset</mark>
│       └── i vari moduli di reset password, email, nick richiamati dalla sezione profilo
├── <mark>snake</mark>
│       └── il piccolo gioco snake con js, php : raggiunto dalla sezione divertiti
│  
├── *contatti*.php : modulo di configurazione per php mailer ,
│ fa da tramite tra il form in index e phpmailer
│
├── *index*.php: pagina principale, login contatti etc
│
├── *logout*.php: autoesplicativo
│
└── favicon.ico : icona per il browser
```

la la visualizzazione ad albero non piace: nella cartella front sono poi disposti così

- assets: contiene risorse css, js, fonts usate globalmente, sia scaricate(jquery, vue,bootstrap) che scritte a mano per necessità grafiche del sito 

- images: autoesplicativo

- info: la pagina del _chi siamo_ con media nella cartella sottostante 

- LearnMap: mappa interna del sito per ridirigersi ai moduli con le pagine caricate in ajax nella cartella materie 

- moduli: all'interno le 3 materie affrontate sul sito 

- - Logica : parte di logica con descrizioni ed esercizi
  
  - Python: disposta su più cartelle con descrizioni ed esericizi
  
  - Statistica: divisa in 3 cartelle, una per ogni livello: intro, base , advanced
