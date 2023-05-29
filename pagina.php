<?php
  session_start();
    
  if(isset($_COOKIE['user'])){
    $_SESSION['username']=$_COOKIE['user'];
  }
?>

<html>
    <head>
        <meta charset="utf-8">
        <title>ACI_CREATIVE</title>
        <meta name="viewport"content="width=device-width, initial-scale=1">
        <link href="pagina.css" rel="stylesheet" type="text/css">
        <link href="https://fonts.googleapis.com/css?family=Lora:400,400i|Open+Sans:400,700" rel="stylesheet">
        <script src="api.js" defer="true"></script>
    </head>

<body>
    <header id="header">
    <div id="overlay"></div>
        <nav>
            <div id="nome">
                <img src="logo_foto.JPG">
                <text>ACI Creative</text>
            </div>
            <div id="links">
                <a class="pulsante"href="about.php">ABOUT</a>
                <a class="pulsante"href="lavori.php">LAVORI</a>
                <a class="pulsante"href="contatti.php">CONTATTI</a>
                <a class="pulsante"href="home.php">LOGOUT</a>
            </div>
            <div id="tendina">
                <div></div>
                <div></div>
                <div></div>
            </div>
        </nav>

        <h1>
            <em>Lavorazioni su imbarcazioni e restauri</em><br/>
            <strong>L'arte del legno nelle vostre mani</strong><br/>
            <div id='main'>
            <?php
            if(isset($_SESSION['username'])){
                $user = $_SESSION['username'];
                echo "<p> Benvenuto $user</p>";
            }
            ?>
            </div>
        </h1> 
        


    </header>

    <section>

        <article>
            <div class="id">1.</div>
            <div class="descrizione">
            <div class="titolo">Restauri</div>
            <p class="articolo">Il restauro e risanamento conservativo di un mobile o altri oggetti ha lo scopo di riportarli all'originario splendore senza alterarne la struttura. Per un buon restauro bisogna seguire dei passaggi ben precisi.<br>
                1.	“Riconoscenza del mobile”: Non è possibile restaurare un mobile senza averlo prima inquadrato nella sua epoca e nel suo stile. Questo permetterà di capire se bisogna eseguire un restauro conservativo o un restauro antiquariale.<br>
                2.	“Sverniciatura e antitarlo”: La sverniciatura è la prima operazione che bisogna effettuare, dopo aver valutato lo stato di conservazione della patina del mobile. Una volta sverniciato bisogna appurarsi se vi è la presenza del tarlo, in caso positivo bisogna apportare il trattamento antitarlo.<br>
                3.	“Falegnameria”: La falegnameria è un momento importante del restauro di un mobile antico. Sostituire è molto più semplice di recuperare, ma il restauratore deve avere il giusto atteggiamento e sapere quando fare una cosa e quando fare l’altra. <br>
                4.	“Preparazione del fondo e lucidatura": Preparare la vernice di gommalacca, decidere se lucidare a pennello o a tampone, lucidare a mezzo poro o brillantare con il benzoino.
            </p>
            <img class="image" src="restauri.jpeg">
            </div>
        </article>

        <article>
            <div class="id">2.</div>
            <div class="descrizione">
            <div class="titolo">String Art</div>
            <p class="articolo">La tecnica dello “String Art” permette di realizzare delle figure tessendo i fili tramite dei chiodi su una tavola in legno.
                Prima di tutto bisogna disegnare, ritagliare e posizionare la figura da realizzare sul legno. Per centrare il disegno e impedirne il movimento, è possibile fissarlo con nastro adesivo. Tracciare dei segni con un chiodo a 1 cm di distanza sul contorno del disegno. Iniziare a fissare i chiodi in ciascuno dei segni fatti. Per fare questo, usare un martello, colpire con attenzione per evitare che il chiodo si pieghi.
                Una volta che tutti i tuoi chiodi sono posizionati, rimuovere il disegno. Prendere il filo e fare un nodo senza chiuderlo completamente poi legare ad uno dei chiodi. Infine, passare il filo da un chiodo all’altro facendo un nodo in ognuno. Terminato il contorno, continuare a portare il filo da un lato all’altro.
            </p>
            <img class="image" src="string_art.jpeg">
            </div>
        </article>

        <article>
            <div class="id">3.</div>
            <div class="descrizione">
            <div class="titolo">Portabottiglie in legno</div>
            <p class="articolo">La realizzazione dei portabottiglie viene effettuata in 5 passaggi. Innanzitutto viene eseguito il corrispettivo disegno sul legno, successivamente bisogna tagliarlo con i determinati dettagli accurati e dopo incollarlo considerando il baricentro per mantenerlo in equilibrio. Per concludere la creazione dell’oggetto, bisogna lavorare sulle rifiniture verniciandolo e lucidandolo.</p>
            <img class="image" src="porta_vino.jpeg">
            </div>
        </article>

        <article>
            <div class="id">4.</div>
            <div class="descrizione">
            <div class="titolo">Lavorazioni su imbarcazioni</div>
            <p class="articolo">Per realizzare un paiolato di un’imbarcazione è fondamentale seguire dei passaggi:<br>
                1.	 Realizzare la dima riportando la sagoma della parte da ricoprire su dei fogli di compensato, per poi poter lavorare comodamente in laboratorio.<br> 
                2.	Una volta realizzata la dima, bisogna riprodurla sulle tavole di Teak o Iroko di spessore 1 cm. <br>
                3.	Creare gli intagli con il pantografo per la realizzazione delle fughe.<br>
                4.	Incollare i vari listelli tra di loro e successivamente sull’imbarcazione.<br>
                5.	Riempire gli intagli effettuati in precedenza con fuga carteggiabile.<br>
                6.	In conclusione, lucidare il tutto con olio di Teak.
            </p>
            <img class="image" src="lavori_barche.jpeg">
            </div>
        </article>

        <article>
            <div class="id">5.</div>
            <div class="descrizione">
            <div class="titolo">Bomboniere "papillon"</div>
            <p class="articolo">I papillon in legno di castagnos sono molto trendy oggi ed è possibile realizzarli seguendo dei semplici passaggi.<br>
                Passaggio 1: Innanzitutto, è necessario preparare il cartamodello per il tuo papillon su un foglio di carta.<br>
                Passaggio 2:  il passo successivo è tagliare e levigare il legno usando una sega a nastro o un seghetto alternativo, e rifinendo tutti i bordi.<br>
                Passaggio 3: ricavare l’effetto “piega” del papillon intagliando il legno con le sgorbie.<br>
                Passaggio 4: verniciare con pitture effetto cera il papillon e aggiungere un pezzo di stoffa a piacere per creare l'asola centrale.
            </p>
            <img class="image" src="papillon.jpeg">
            </div>
        </article>

        <div id="search">
            <form name ='search_content' id='search_content'>
                  
                <label>Ricerca dei contenuti: </label> 
                <input type='text' name = 'content' id ='content'>	
              
                    <label>Seleziona il servizio di ricerca: </label> 
                    <select name = 'service' id='service'>
                        <option value='yt'>Youtube</option>
                        <option value='vimeo'>Vimeo</option>
                    </select>
                  
                    <input class="submit" type='submit'>
                          
                </form>
            <div id="ris_ricerca">
      
            </div>
        </div>

    </section>

    <footer>
        <strong>Powered by Giovanni Bonaccorso Matr. 1000016113</strong>
        <p>Dipartimento Ing. Informatica UNICT</p>
    </footer>
</body>
</html>