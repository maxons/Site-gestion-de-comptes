<?php

include("connect_bdd.php");

$nom = $_POST['nom'];
$solde = $_POST['solde'];
$date = $_POST['date'];
$nom_proprietaire = $_POST['nom_proprietaire'];

if ($date == "")
{
	$sql =  "insert into compte (nom, solde, nom_proprietaire) values
	(\"".$nom."\", ".$solde.", \"".$nom_proprietaire."\");";
} else
{
	$sql =  "insert into compte (nom, solde, date_fin, nom_proprietaire) values
	(\"".$nom."\", ".$solde.", \"".$date."\", \"".$nom_proprietaire."\");";
}


if (mysqli_query($conn, $sql)) {
    echo "New record created successfully<br><a href=\"index.php\">Retour</a>";
} else {
    die("Error: " . $sql . "<br>" . mysqli_error($conn));
}


$conn->close();

?>