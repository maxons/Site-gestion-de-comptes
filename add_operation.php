<?php

include("connect_bdd.php");

$numero_compte = $_POST['numero_compte'];
$montant = $_POST['montant'];
$date = $_POST['date'];
$type = $_POST['type'];
if ($_POST['debit'] == "oui")
{
	$debit = "TRUE";
} else $debit = "FALSE";
$description = $_POST['description'];


$sql =  'insert into operation (compte, montant, date_ope, type, debit, description) values
	('.$numero_compte.', '.$montant.', "'.$date.'", "'.$type.'", "'.$debit.'", "'.$description.'");';

if (mysqli_query($conn, $sql)) {
    echo "New record created successfully<br><a href=\"index.php\">Retour</a>";
} else {
    die("Error: " . $sql . "<br>" . mysqli_error($conn));
}


$conn->close();

?>