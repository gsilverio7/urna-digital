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

$i = 0;
$q = $_REQUEST["q"];
// $q = "20";

$sql = "SELECT * from candidatos";
$result = $conn->query($sql);

while($row = mysqli_fetch_array($result)) {

   if ($q === $row['numero']) {$i = 1;}

}

if ($i === 0) {

    $nulop = "assets/images/nulop.jpg";
    $nulon = "NULO";
    $nulo = "";

    echo
    "<div id=foto>
    <img src=" . $nulop . ">
    </div>
    <div id=dgts>" . $q . "</div>
    <div id=dnome>". $nulon ."</div>
    <div id=dnome2>" . $nulo ."</div>
    <div id=dinfo>". $nulo . "</div>";    

}


if ($i === 1) {

$sql = " SELECT * from candidatos WHERE numero ='".$q."' ";
$result = $conn->query($sql);

while($row = mysqli_fetch_array($result)) {
echo
"<div id=foto>
<img src=" . $row['foto'] . ">
</div>
<div id=dgts>" . $row['numero'] . "</div>
<div id=dnome>". $row['nome'] ."</div>
<div id=dnome2>Vice: " . $row['vice'] ."</div>
<div id=dinfo>Partido: ". $row['partido'] . "<br>Coligação: ". $row['coligacao'] . "</div>";
    }                    
}

$conn->close();
        
?>