<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport">
    <title>gar-update-auto2</title>
</head>
<body>
<?php require_once "gar-menu-planners-systeembeheerders.php" ?>

<?php
// autokenteken uit het formuier halen
$gebruikerid = $_POST["gebruikeridvak"];

// autogegevens uit de tabel halen
require_once "gar-connect.php";

echo" <div class='contact-form'>";
echo "<h1 class='create-klant'> garage update auto 2 </h1> ";
echo "<div class='Lijn'></div>";
echo "<p1 class='create-klant'>  Dit formulier wordt gebruikt om autogegevens te wijzigen in de tabel auto van de database garage </p1> ";





global $conn;
$gebruikers = $conn->prepare("
select  gebruikerid,
        gebruikernaam,
        gebruikerleeftijd,
        gebruikeremail,
        gebruikerwachtwoord,
        gebruikerrol
from    gebruikers
where   gebruikerid = :gebruikerid
");
$gebruikers->execute(["gebruikerid" => $gebruikerid]);

//autogegevens in een nieuw formulier laten zien
echo " <form class='form' action='gar-update-gebruiker3.php' method='post'>";
foreach ($gebruikers as $gebruiker)
{
    // autokenteken mag niet gewijzigd worden
    echo "gebruikerid:" . $gebruiker["gebruikerid"];
    echo "<input type='hidden' name='gebruikeridvak'";
    echo "value='" . $gebruiker["gebruikerid"] . " '> <br />";

    echo "gebruikernaam: <input type='text' ";
    echo "name='gebruikernaamvak'";
    echo "value= '" . $gebruiker["gebruikernaam"]. "' ";
    echo " > <br />";

    echo "gebruikerleeftijd: <input type='text'";
    echo "name='gebruikerleeftijdvak'";
    echo "value= '" . $gebruiker["gebruikerleeftijd"]. "' ";
    echo " > <br />";

    echo "gebruikeremail: <input type='text' ";
    echo "name='gebruikeremailvak'";
    echo "value= '" . $gebruiker["gebruikeremail"]. "' ";
    echo " > <br />";

    echo "gebruikerwachtwoord: <input type='text' ";
    echo "name='gebruikerwachtwoordvak'";
    echo "value= '" . $gebruiker["gebruikerwachtwoord"]. "' ";
    echo " > <br />";

    echo "gebruikerrol: <input type='text' ";
    echo "name='gebruikerrolvak'";
    echo "value= '" . $gebruiker["gebruikerrol"]. "' ";
    echo " > <br />";
}
echo "<input type='submit'>";
echo "</form>";
echo "</div>";

?>

</body>
</html>