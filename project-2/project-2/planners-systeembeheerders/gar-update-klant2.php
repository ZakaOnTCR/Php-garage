<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="author" content="Anjo Eijeriks">
    <title>gar-update-klant2.php</title>
</head>
<body>
<?php require_once "gar-menu-planners-systeembeheerders.php" ?>

<?php
//klant uit de formulier halen-----
$klantid=$_POST['klnatidvak'];
//klantgegevens uit de tabel halen-----
require_once "gar-connect.php";
$klanten = $conn->prepare("SELECT klantid,  klantnaam, klantadres, klantpostcode, klantplaats FROM klant WHERE klantid = $klantid");



$klanten->execute(['klantid' => $klantid]);
//klantgegevens in een nieuwe formulier laten zien----
echo" <div class='contact-form'>";
echo "<h1 class='create-klant'> Garage update klant 2 </h1> ";
echo "<div class='Lijn'></div>";
echo "<p1 class='create-klant'> Dit formulier wordt gebruikt om klantgegvens te wijzigen in tabel klant van database garage </p1> ";


echo "<form class='form' action='gar-update-klant3.php' method='post'> ";
foreach ($klanten as $klant) {
//    klantid mag niet gewijzigd worden

    echo "klantid:" . $klant["klantid"];
    echo "<input type='hidden' name='klantidvak'";
    echo "value='" . $klant["klantid"] . " '> <br />";

    echo "klantnaam: <input type='text' ";
    echo "name='klantnaamvak'";
    echo "value= '" . $klant["klantnaam"]. "' ";
    echo " > <br />";

    echo "klantadres: <input type='text'";
    echo "name='klantadresvak'";
    echo "value= '" . $klant["klantadres"]. "' ";
    echo " > <br />";

    echo "klantpostcode: <input type='text' ";
    echo "name='klantpostcodevak'";
    echo "value= '" . $klant["klantpostcode"]. "' ";
    echo " > <br />";

    echo "klantplaats: <input type='text' ";
    echo "name='klantplaatsvak'";
    echo "value= '" . $klant["klantplaats"]. "' ";
    echo " > <br />";
}
echo "<input type='submit'>";
echo "</form>";
echo "</div>";
?>
</body>
</html>