<?php
    session_start();
    $contents = array();
    $conn=mysqli_connect("127.0.0.1", "root", "", "hw1");
    $user = $_SESSION['id'];
    $query = " SELECT l.titolo, l.immagine, l.id from preferiti p inner join lavori l on p.id_img = l.id where p.user=$user";
    $res = mysqli_query($conn, $query);

    while($row=mysqli_fetch_assoc($res)){
        $contents[] = array('titolo'=>$row["titolo"], 'immagine'=>$row["immagine"], 'id'=>$row["id"]);
    }
    echo json_encode($contents);

?>