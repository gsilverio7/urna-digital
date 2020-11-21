<?php

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "urna-digital";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
mysqli_set_charset($conn,"utf8");
// Check connection
if ($conn->connect_error) {
die("Connection failed: " . $conn->connect_error);
}

//contar total de votos
$sql = "SELECT * from votos";
$result = $conn->query($sql);

$totalvotos = 0;


while($row = mysqli_fetch_array($result)) {
  
  $totalvotos = $totalvotos + $row['votos'];
  
}

//mostrar resultado na tela
$sql = " SELECT * FROM candidatos JOIN votos ON candidatos.numero=votos.id ORDER BY votos DESC";
$result = $conn->query($sql);


while($row = mysqli_fetch_array($result)) {
  echo "<div class=grid-item>";
  echo "<img src=" . $row['foto'] . ">";
  echo "<div class=card-text>";
  echo "<h3>" . $row['nome'] . "</h3>";
  echo "<h6>" . $row['partido'] . "</h6>";
  echo "<h4>" . $row['votos'] . " voto(s) </h4>";
  echo "<h5>" . round( ( ($row['votos'] / $totalvotos) * 100 ), 2 ) . "% </h5>";
  echo "</div>";
  echo "</div>";
}


$conn->close();
        
?>