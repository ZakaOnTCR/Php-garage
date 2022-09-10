<!DOCTYPE html>
<html lang="en">
<head>
    <meta name="author" content="Anjo Eijeriks">
    <meta charset="UTF-8">
    <title>gar-search-klantid2</title>
</head>
<body>
<?php require_once "gar-menu-planners-systeembeheerders.php" ?>



<div class="contact-form">
    <h1 class="create-klant">Garage zoekt op klantid 2</h1>
    <div class="Lijn"></div>
    <p class="create-klant">op klantid gegevens zoeken uit de tabel klanten van de database garage</p>
<div class="container">
   <table class="table table-dark table-hover">
      <tr>
        <th>klantid</th>
        <th>klantnaam</th>
        <th>klantadres</th>
        <th>klantpostcode</th>
        <th>klantplaats</th>
      </tr>
<?php
$klantid = $_POST["klantidvak"];




require_once "gar-connect.php";

$conn = ;
$klanten = $conn->prepare("SELECT klantid,  klantnaam, klantadres, klantpostcode, klantplaats FROM klant WHERE klantid = $klantid");
$klanten->execute();



foreach ($klanten as $klant) {
    echo "<tr>";
    echo "<td>" . $klant["klantid"] . "</td>";
    echo "<td>" . $klant['klantnaam'] . "</td>";
    echo "<td>" . $klant['klantadres'] . "</td>";
    echo "<td>" . $klant['klantpostcode'] . "</td>";
    echo "<td>" . $klant['klantplaats'] . "</td>";
    echo "</tr>";

}
echo "</table> <br>";
echo "<a class='terug' href='gar-home.php'> terug naar het menu </a>";
?>

</div>
</table>
</div>
</body>
</html>