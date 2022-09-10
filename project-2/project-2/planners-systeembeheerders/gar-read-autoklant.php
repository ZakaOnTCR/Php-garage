<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport">
    <title>gar-read-auto.php</title>
</head>
<body>
<?php require_once "gar-menu-planners-systeembeheerders.php" ?>

<div class="contact-form">

    <h2 class="create-klant">Dit zijn alle gegevens uit de tabel auto van de database garage</h2>
    <div class="Lijn"></div>

<?php
require_once "gar-connect.php";
$autos = $conn->prepare("     select    autokenteken,
                                              automerk,
                                              autotype,
                                              autokmstand,
                                              klantid
                                       from   auto      
");
$autos->execute();




echo "<table class='table table-dark table-hover'>";
echo "<tr>";
echo "<th>Kenteken</th>";
echo "<th>Automerk</th>";
echo "<th>Autotype</th>";
echo "<th>autokmstand</th>";
echo "<th>Klantid</th>";
echo "<th>Eigenaar</th>";

echo "</tr>";

foreach ($autos as $auto) {

    $klantid = $auto["klantid"];
    $klanten = $conn->prepare("
                                   select       klantid,
                                                klantnaam
                                    
                                   from         klant
                                   where        klantid = $klantid");
    $klanten->execute();

    foreach ($klanten as $klant){
        $klantNaam = $klant["klantnaam"];
    }


    echo "<tr>";
    echo "<td>" . $auto["autokenteken"] . "</td>";
    echo "<td>" . $auto["automerk"] . "</td>";
    echo "<td>" . $auto["autotype"] . "</td>";
    echo "<td>" . $auto["autokmstand"] . "</td>";
    echo "<td>" . $auto["klantid"] . "</td>";
    echo "<td>" . $klant["klantnaam"] . "</td>";
    echo "</tr>";

}?>

</table>
</div>
</body>
</html>