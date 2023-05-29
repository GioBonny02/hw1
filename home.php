<?php
  session_start();
    
  if(isset($_COOKIE['user'])){
    $_SESSION['username']=$_COOKIE['user'];
  }
?>

<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title>ACI_CREATIVE</title>
        <meta name="viewport"content="width=device-width, initial-scale=1">
        <link href="home.css" rel="stylesheet" type="text/css">
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
                <a class="pulsante"href="login.php">ACCEDI</a>
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
            <a class="pulsante"href="signup.php">Scopri di piu! Registrati</a>
        </h1>    
    </header>

    <footer>
        <strong>Powered by Giovanni Bonaccorso Matr. 1000016113</strong>
        <p>Dipartimento Ing. Informatica UNICT</p>
    </footer>
</body>
</html>