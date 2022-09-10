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
$gebruikerid = $_POST["gebruikeridvak"];


require_once "gar-connect.php";
global $conn;
$gebruikers = $conn->prepare(" select gebruikerid , gebruikernaam, gebruikerleeftijd, gebruikeremail, gebruikerwachtwoord, gebruikerrol from gebruikers where  gebruikerid= :gebruikerid");
$gebruikers->execute(["gebruikerid" => $gebruikerid]);

echo" <div class='contact-form'>";
echo "<h1 class='create-klant'> garage delete klant 2 </h1> ";
echo "<div class='Lijn'></div>";
echo "<p1 class='create-klant'> Op klantid gegavens zoeken uit de  tabel klanten van de database garage  zodat ze verwijderd kunnen worden. </p1> ";

echo "<div class='container'>";
echo "<table class='table table-dark'>";
foreach ($gebruikers as $gebruiker)
{   echo "<tr>";
    echo "<td>" . $gebruiker["gebruikerid"] . "</td>";
    echo "<td>" . $gebruiker ["gebruikernaam"] . "</td>";
    echo "<td>" . $gebruiker["gebruikerleeftijd"] .  "</td>";
    echo "<td>" . $gebruiker["gebruikerwachtwoord"] .  "</td>";
    echo "<td>" . $gebruiker["gebruikerrol"] .  "</td>";
    echo "</tr>";
}
echo "</table><br />";
echo "<form class='' action='gar-delete-gebruiker3.php' method='post'>";
// klantid mag niet meer gewijzigd worden
echo "<input type='hidden' name='gebruikeridvak' value= $gebruikerid>";
// Waarde 0 doorgegeven als er niet gecheckt wordt
echo "<input type='hidden' name='verwijdervak' value='0'>";
echo "<input class='form-check-input' type='checkbox' name='verwijdervak' value='1'>";
echo "<label class='form-check-label' for='flexCheckDefault'> Verwijder deze klant.</label>  <br>";

echo "<input class='verwijder' type='submit'>";

echo "</form>";
echo "</div>";
echo "</div>";
?>
</body>
</html>