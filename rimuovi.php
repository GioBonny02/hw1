<?php
    session_start();
        $conn=mysqli_connect("127.0.0.1", "root", "", "hw1");
        $immagine=$_GET["id"];
        $user=$_SESSION['id'];
        
        $query="DELETE FROM preferiti WHERE id_img = '$immagine' AND  user= '$user'";
        $res=mysqli_query($conn,$query);
        mysqli_close($conn);
        echo json_encode ("rimosso dai preferiti");
        exit;
    
?>