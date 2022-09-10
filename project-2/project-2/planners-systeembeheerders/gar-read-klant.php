<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport">
    <title>gar-read-klant.php</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="main.css">
</head>
<body>
<?php require_once "gar-menu-planners-systeembeheerders.php" ?><div class="contact-form">

<h2 class="create-klant">Dit zijn alle gegevens uit de tabel klanten van de datatabase garage.</h2>
<div class="Lijn"></div>
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
// tabel uitlezen en netjes afdrukken-------------------

require_once "gar-connect.php";


global $conn;
$klanten = $conn->prepare("
select  klantid,
        klantnaam,
        klantadres,
        klantpostcode,
        klantplaats
from    klant
");
$klanten->execute();


foreach ($klanten as $klant) {
    echo "<tr>";
    echo "<td>" . $klant["klantid"] . "</td>";
    echo "<td>" . $klant["klantnaam"] . "</td>";
    echo "<td>" . $klant["klantadres"] . "</td>";
    echo "<td>" . $klant["klantpostcode"] . "</td>";
    echo "<td>" . $klant["klantplaats"] . "</td>";
    echo "</tr>";
}

?>

</table>
</div>
</div>
</body>
</html>
