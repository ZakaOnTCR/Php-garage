<!DOCTYPE html>
<head>
    <meta name="author" content="Anjo Eijeriks">
    <meta charset="UTF-8">
    <title>gar-update-klant3.php</title>
</head>
<body>
<?php require_once "gar-menu-planners-systeembeheerders.php" ?>

<div class="contact-form">
    <h1 class="create-klant">garage update kant 3</h1>
    <div class="Lijn"></div>
    <p class="create-klant">Klantgegavens wijzigen in de tabel
        lant van de database garage.</p>
<?php
// klantgegevens uit het formulier halen -
$klantid         =$_POST["klantidvak"] ;
$klantnaam       = $_POST ["klantnaamvak"] ;
$klantadres      =$_POST [ "klantadresvak"];
$klantpostcode   = $_POST["klantpostcodevak"];
$klantplaats     = $_POST["klantplaatsvak"];

// updaten kiantgegevens ~


require_once "gar-connect.php";
global $conn;
$sql=$conn->prepare
(" UPDATE klant SET 
klantnaam        = :klantnaam,
klantadres       = :klantadres,
klantpostcode    = :klantpostcode,
klantplaats      = :klantplaats 
WHERE klantid    = :klantid
");
$sql->execute(
["klantnaam"     => $klantnaam,
"klantadres"    => $klantadres,
"klantpostcode" => $klantpostcode,
"klantplaats"   => $klantplaats,
"klantid"       => $klantid,]);



echo "<div class='create-klant' > De klant is gewijzigd </div> <br />";
echo "<a class='terug' href='gar-home.php'> terug naar het menu </a>";
?>
</div>
</body>
</html>

