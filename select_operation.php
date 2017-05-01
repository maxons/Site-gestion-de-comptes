<?php
include("connect_bdd.php");
//$sql = "select * from operation;";
$sql = "select * from operation order by id desc limit 20;";
$result = mysqli_query($conn, $sql);
echo "<table>
<tr><th>id</th><th>Compte</th><th>Montant</th><th>Date</th><th>Type</th><th>Debit</th><th>Description</th>";
if (mysqli_num_rows($result) > 0) {
    // output data of each row
    while($row = mysqli_fetch_assoc($result)) {
       echo "<tr><th>".$row["id"]."</th><th>".$row["compte"]."</th><th>".$row["montant"]."</th><th>".$row["date_ope"]."</th><th>".$row["type"]."</th><th>".$row["debit"]."</th><th>".$row["description"]."</th></tr>";
    }
} else {
    echo "0 results";
}
echo "</table>";
$conn->close();
?>