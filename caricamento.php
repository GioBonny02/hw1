<?php
    session_start();
    $conn=mysqli_connect("127.0.0.1", "root", "", "hw1");
    $immagine=$_GET["id"];
    $user=$_SESSION['id'];

    
    $query = "SELECT * FROM preferiti WHERE id_img = '$immagine' AND  user= '$user'";
    $res = mysqli_query($conn, $query) or die(mysqli_error($conn));
    if(mysqli_num_rows($res) > 0) {
        exit;
    }

    $sql = " INSERT INTO preferiti( `user`, `id_img`) VALUES($user, $immagine)";
    $result = mysqli_query($conn, $sql);

    // Chiusura della connessione al database
    mysqli_close($conn);
?>