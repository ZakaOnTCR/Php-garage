<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport">
    <title>gar-read-auto.php</title>
</head>
<body>
<?php require_once "gar-menu-monteurs-directie.php" ?>

<div class="contact-form">

<h2 class="create-klant">Dit zijn alle gegevens uit de tabel auto van de database garage</h2>
<div class="Lijn"></div>
<div class="container">
<table class="table table-dark table-hover">
  <tr>
    <th>gebruikerid</th>
    <th>naaam</th>
    <th>leeftijd</th>
    <th>email</th>
    <th>wachtwoord</th>
    <th>rol</th>
  </tr>
<?php
require_once "gar-connect.php";
global $conn;
$gebruikers = $conn->prepare("
select gebruikerid,
       gebruikernaam,
       gebruikerleeftijd,
       gebruikeremail,
       gebruikerwachtwoord,
       gebruikerrol
from   gebruikers
");
$gebruikers->execute();

foreach ($gebruikers as $gebruiker)
 {
    echo "<tr>";
    echo "<td>" . $gebruiker["gebruikerid"]         ."</td>";
    echo "<td>" . $gebruiker["gebruikernaam"]    ."</td>";
    echo "<td>" . $gebruiker["gebruikerleeftijd"]        ."</td>";
    echo "<td>" . $gebruiker["gebruikeremail"]        ."</td>";
    echo "<td>" . $gebruiker["gebruikerwachtwoord"]     ."</td>";
    echo "<td>" . $gebruiker["gebruikerrol"]     ."</td>";
    echo "</tr>";
 }




?>

</table>
</div>
</body>
</html>