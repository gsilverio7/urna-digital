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

$q = $_REQUEST["q"];
$i = 0;


//Primeiro verifica se o número está no banco de dados. Caso não esteja, o voto sera computado como nulo.
$sql = "SELECT * from votos";
$result = $conn->query($sql);

while($row = mysqli_fetch_array($result)) {

   if ($q === $row['id']) {
       $i = $i + 1;
    }
}

//Transforma o voto em nulo caso não seja aprovado pela verificação acima
if ($i === 0) {
    $q = "nul";
}

//Somando um voto ao número total
$sql = "SELECT * from votos";
$result = $conn->query($sql);

while($row = mysqli_fetch_array($result)) {

    if ($q === $row['id']) {
        $inicial = $row['votos'];
        $final = $inicial + 1;
    }
}

$sql = " UPDATE votos SET votos=$final WHERE id='$q' ";

if ($conn->query($sql) === TRUE) {
  echo "Voto Computado com sucesso!";
} else {
  echo "Houve um erro: " . $conn->error;
}


$conn->close();
        
?>