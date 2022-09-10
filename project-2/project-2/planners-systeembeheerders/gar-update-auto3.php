<!doctype html>
<html lang="nl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport">
    <title>gar-update-klant3.php</title>
    <link rel="stylesheet" href="../main.css">
</head>
<body>
<?php require_once "gar-menu-planners-systeembeheerders.php" ?>

<div class="contact-form">
    <h1 class="create-klant">garage update auto</h1>
    <div class="Lijn"></div>
    <p class="create-klant">klantgegevens wijzigen in de tabel klantvan de database garage</p>

<?php
$klantid           = $_POST["klantidvak"]; // komt niet uit het formulier (autoincrement)
$autokenteken      = $_POST["autokentekenvak"];
$automerk          = $_POST["automerkvak"];
$autotype          = $_POST["autotypevak"];
$autokmstand       = $_POST["autokmstandvak"];

// updaten klantgegevens
require_once "gar-connect.php";
global $conn;
$sql = $conn->prepare("
update auto set 
autokenteken       = :autokenteken,
automerk           = :automerk,
autotype           = :autotype,
autokmstand        = :autokmstand
where klantid      = :klantid
");
$sql->execute
([
    "klantid"          => $klantid,
    "autokenteken"     => $autokenteken,
    "automerk"         => $automerk,
    "autotype"         => $autotype,
    "autokmstand"      => $autokmstand,
]);

echo "<div class='create-klant' > de auto is gewijzigd </div> <br />";
echo "<a class='terug' href='gar-home.php'> terug naar het menu </a>";
?>

</div>
</body>
</html>
