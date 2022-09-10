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
                <th>klantid</th>
                <th>klantnaam</th>
                <th>klantadres</th>
                <th>klantpostcode</th>
                <th>klantplaats</th>
            </tr>
<?php
// autokenteken uit het formulier halen
$autokenteken = $_POST["autokentekenvak"];

// autogegevens uit de tabel halen
require_once "gar-connect.php";
global $conn;
$autos = $conn->prepare("
select  autokenteken,
        automerk,
        autotype,
        autokmstand,
        klantid
from    auto
where   autokenteken = :autokenteken
");
$autos->execute(["autokenteken" => $autokenteken]);

// autogegevens laten zien

foreach ($autos as $auto)
{
    echo "<tr>";
    echo "<td>" . $auto["autokenteken"]           . "</td>";
    echo "<td>" . $auto["automerk"]               . "</td>";
    echo "<td>" . $auto["autotype"]               . "</td>";
    echo "<td>" . $auto["autokmstand"]            . "</td>";
    echo "<td>" . $auto["klantid"]                . "</td>";
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