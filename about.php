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
        <link href="about.css" rel="stylesheet" type="text/css">
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
                <a class="pulsante"href="pagina.php">HOME</a>
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
            <div class="descrizione">
                <div class="titolo">Presentazione</div>
                <p class="presentazione"> Sono Giuseppe, un appassionato del legno, infatti nel mio tempo libero mi diletto a fare molte lavorazioni con varie tecniche, dalla creazione di piccoli oggetti, ai restauri di mobili antichi e alle lavorazioni di paiolati sulle imbarcazioni. Mi piace anche aggiornarmi tramite video tutorial per questo nella home troverai una sezione per cercare dei video. Spero ti piacciano i miei lavori.
                </p>
                <img class="image" src="presentazione.jpg";>
            </div>
        </article>
        
    </section>

    <footer>
        <strong>Powered by Giovanni Bonaccorso Matr. 1000016113</strong>
        <p>Dipartimento Ing. Informatica UNICT</p>
    </footer>
</body>
</html>