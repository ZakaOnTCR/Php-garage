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
$gebruikerid          = $_POST["gebruikeridvak"]; // komt niet uit het formulier (autoincrement)
$gebruikernaam     = $_POST["gebruikernaamvak"];
$gebruikerleeftijd        = $_POST["gebruikerleeftijdvak"];
$gebruikeremail         = $_POST["gebruikeremailvak"];
$gebruikerwachtwoord  = $_POST["gebruikerwachtwoordvak"];
$gebruikerrol  = $_POST["gebruikerrolvak"];

// updaten klantgegevens
require_once "gar-connect.php";
global $conn;
$sql = $conn->prepare("
UPDATE gebruikers SET 
gebruikernaam        = :gebruikernaam ,
gebruikerleeftijd     = :gebruikerleeftijd ,
gebruikeremail           = :gebruikeremail,
gebruikerwachtwoord        = :gebruikerwachtwoord,
gebruikerrol        = :gebruikerrol
WHERE gebruikerid      = :gebruikerid
");
$sql->execute
([
    "gebruikerid"          => $gebruikerid,
    "gebruikernaam"     => $gebruikernaam,
    "gebruikerleeftijd"         => $gebruikerleeftijd,
    "gebruikeremail"         => $gebruikeremail,
    "gebruikerwachtwoord"      => $gebruikerwachtwoord,
    "gebruikerrol"      => $gebruikerrol,
]);

echo "<div class='create-klant' > de auto is gewijzigd </div> <br />";
echo "<a class='terug' href='gar-home.php'> terug naar het menu </a>";
?>

</div>
</body>
</html>
