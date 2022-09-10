<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport">
    <title>gar-search-auto2.php</title>
</head>
<body>
<?php require_once "gar-menu-planners-systeembeheerders.php" ?>


<div class="contact-form">
    <h1 class="create-klant">garage zoekt op kenteken</h1>
    <div class="Lijn"></div>
    <p class="create-klant"> op kenteken gegevens zoeken uit de tabel klanten van de database garage</p>
    <div class="container">
        <table class="table table-dark table-hover">
            <tr>
                <th>gebruikerid</th>
                <th>gebruikernaam</th>
                <th>gebruikerleeftijd</th>
                <th>gebruikeremail</th>
                <th>gebruikerwachtwoord</th>
                <th>gebruikerrol</th>
            </tr>
<?php
// klantid uit het formulier halen
$gebruikerid = $_POST["gebruikeridvak"];

// klantgegevens uit de tabel halen
require_once "gar-connect.php";
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

// autogegevens laten zien

foreach ($gebruikers as $gebruiker)
{
    echo "<tr>";
    echo "<td>" . $gebruiker["gebruikerid"]           . "</td>";
    echo "<td>" . $gebruiker["gebruikernaam"]               . "</td>";
    echo "<td>" . $gebruiker["gebruikerleeftijd"]               . "</td>";
    echo "<td>" . $gebruiker["gebruikeremail"]            . "</td>";
    echo "<td>" . $gebruiker["gebruikerwachtwoord"]                . "</td>";
    echo "<td>" . $gebruiker["gebruikerrol"]                . "</td>";
    echo "</tr>";
}
echo "</table><br />";
echo "<a class='terug' href='gar-home.php'> terug naar het menu </a>";






?>
</div>
</table>
</div>
</body>
</html>