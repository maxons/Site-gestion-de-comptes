<?php

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "gestion_comptes";

$nom = $_POST['nom'];
$solde = $_POST['solde'];
$date = $_POST['date'];
$nom_proprietaire = $_POST['nom_proprietaire'];


// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 


$sql =  "insert into compte (nom, solde, date_fin, nom_proprietaire) values
	(\"".$nom."\", ".$solde.", \"".$date."\", \"".$nom_proprietaire."\");";

if (mysqli_query($conn, $sql)) {
    echo "New record created successfully";
} else {
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}



$sql = "select * from compte;";
$result = mysqli_query($conn, $sql);

if (mysqli_num_rows($result) > 0) {
    // output data of each row
    while($row = mysqli_fetch_assoc($result)) {
       echo "id: " . $row["id"]. " - Name: " . $row["nom"] . "<br>";
    }
} else {
    echo "0 results";
}


$conn->close();

?>