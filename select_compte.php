<?php

include("connect_bdd.php");

$sql = "select * from compte;";
$result = mysqli_query($conn, $sql);
echo "<table>
<tr><th>id</th><th>Nom</th><th>Solde</th><th>Date de fin</th><th>Nom du proprietaire</th>";
if (mysqli_num_rows($result) > 0) {
    // output data of each row
    while($row = mysqli_fetch_assoc($result)) {
       echo "<tr><th>".$row["id"]."</th><th>".$row["nom"]."</th><th>".$row["solde"]."</th><th>".$row["date_fin"]."</th><th>".$row["nom_proprietaire"]."</th></tr>";
    }
} else {
    echo "0 results";
}
echo "</table>";

$conn->close();

?>