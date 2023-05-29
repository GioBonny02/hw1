<?php

$conn = mysqli_connect("127.0.0.1", "root", "", "hw1");

if (!$conn) {
  $error = "Errore di connessione al DB!";
}

$sql = "SELECT * FROM lavori";
$result = mysqli_query($conn, $sql);

$dato = array();
$data = array();
$i = 0;

while ($row = mysqli_fetch_assoc($result)) {
	$dato["id"] = $row['id'];
  $dato["titolo"] = $row['titolo'];
  $dato["immagine"] = $row['immagine'];
  
  $data[$i] = $dato;
  $i++;

}

echo json_encode($data);

?>