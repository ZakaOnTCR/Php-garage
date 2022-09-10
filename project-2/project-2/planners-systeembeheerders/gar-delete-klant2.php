<!DOCTYPE html>
<html lang="Nl">
<head>
    <meta name="author" content="Anjo Eijeriks">
    <meta charset="UTF-8">
    <title>gar-delete-klant2.php</title>
    <link rel="stylesheet" href="../main.css">
</head>
<body>
<?php require_once "gar-menu-planners-systeembeheerders.php" ?>

<?php
$klantid = $_POST["klantidvak"];


require_once "gar-connect.php";
global $conn;
$klanten = $conn->prepare(" select klantid, klantnaam, klantadres, klantpostcode, klantplaats from klant where  klantid= :klantid");
$klanten->execute(["klantid" => $klantid]);

echo" <div class='contact-form'>";
echo "<h1 class='create-klant'> garage delete klant 2 </h1> ";
echo "<div class='Lijn'></div>";
echo "<p1 class='create-klant'> Op klantid gegavens zoeken uit de  tabel klanten van de database garage  zodat ze verwijderd kunnen worden. </p1> ";

echo "<div class='container'>";
echo "<table class='table table-dark'>";
foreach ($klanten as $klant)
{   echo "<tr>";
    echo "<td>" . $klant["klantid"] . "</td>";
    echo "<td>" . $klant ["klantnaam"] . "</td>";
    echo "<td>" . $klant["klantadres"] .  "</td>";
    echo "<td>" . $klant["klantpostcode"] .  "</td>";
    echo "<td>" . $klant["klantplaats"] .  "</td>";
    echo "</tr>";
}
echo "</table><br />";
echo "<form class='' action='gar-delete-klant3.php' method='post'>";
// klantid mag niet meer gewijzigd worden
echo "<input type='hidden' name='klantidvak' value= $klantid>";
// Waarde 0 doorgegeven als er niet gecheckt wordt
echo "<input type='hidden' name='verwijdervak' value='0'>";
echo "<input class='form-check-input' type='checkbox' name='verwijdervak' value='1'>";
echo "<label class='form-check-label' for='flexCheckDefault'> Verwijder deze klant.</label> <br>";
echo "<input class='form-check-input' type='checkbox' name='verwijdervak' value='1'>";
echo "<label class='form-check-label' for='flexCheckDefault'> weet je zeker dat de klant niet meer auto's heeft?</label>";
echo "<input class='verwijder' type='submit'>";

echo "</form>";
echo "</div>";
echo "</div>";
?>
</body>
</html>