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
$autokenteken = $_POST["autokentekenvak"];

// autogegevens uit de tabel halen
require_once "gar-connect.php";

echo" <div class='contact-form'>";
echo "<h1 class='create-klant'> garage update auto 2 </h1> ";
echo "<div class='Lijn'></div>";
echo "<p1 class='create-klant'>  Dit formulier wordt gebruikt om autogegevens te wijzigen in de tabel auto van de database garage </p1> ";





global $conn;
$autos = $conn->prepare("
select autokenteken, automerk, autotype, autokmstand, klantid 
from auto
where autokenteken = :autokenteken
");
$autos->execute(["autokenteken" => $autokenteken]);

//autogegevens in een nieuw formulier laten zien
echo" <form class='form' action='gar-update-auto3.php' method='post'>";
foreach ($autos as $auto)
{
    // autokenteken mag niet gewijzigd worden
    echo "autokenteken:" . $auto["autokenteken"];
    echo "<input type='hidden' name='autokentekenvak'";
    echo "value='" . $auto["autokenteken"] . " '> <br />";

    echo "automerk: <input type='text' ";
    echo "name='automerkvak'";
    echo "value= '" . $auto["automerk"]. "' ";
    echo " > <br />";

    echo "autotype: <input type='text'";
    echo "name='autotypevak'";
    echo "value= '" . $auto["autotype"]. "' ";
    echo " > <br />";

    echo "autokmstand: <input type='text' ";
    echo "name='autokmstandvak'";
    echo "value= '" . $auto["autokmstand"]. "' ";
    echo " > <br />";

    echo "klantid: <input type='text' ";
    echo "name='klantidvak'";
    echo "value= '" . $auto["klantid"]. "' ";
    echo " > <br />";
}
echo "<input type='submit'>";
echo "</form>";
echo "</div>";

?>

</body>
</html>