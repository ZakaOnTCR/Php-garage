<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport">
    <title>gar-create-gebruiker2.php</title>
</head>
<body>
<?php require_once "gar-menu-planners-systeembeheerders.php" ?>
<div class="contact-form">
<h1 class="create-klant">garage create auto 2</h1>
<p class="create-klant"> Een auto toevoegen aan de tabel klant in de database garage </p>

<?php
// autogegvens uit het formulier halen
$gebruikerid = NULL;
$gebruikernaam = $_POST["gebruikernaamvak"];
$gebruikerleeftijd     = $_POST["gebruikerleeftijdvak"];
$gebruikeremail    = $_POST["gebruikeremailvak"];
$gebruikerwachtwoord  = $_POST["gebruikerwachtwoordvak"];
$gebruikerrol = $_POST["gebruikerrolvak"];



// klantgegevens invoeren in de tabel

require_once "gar-connect.php";
global $conn;
$sql = $conn->prepare("INSERT INTO gebruikers(gebruikernaam, gebruikerleeftijd, gebruikeremail, gebruikerwachtwoord, gebruikerrol) VALUES ('$_POST[gebruikernaamvak]','$_POST[gebruikerleeftijdvak]','$_POST[gebruikeremailvak]','$_POST[gebruikerwachtwoordvak]','$_POST[gebruikerrolvak]')");
$sql->bindParam(":name", $gebruikernaam);
$sql->bindParam(":age", $gebruikerleeftijd);
$sql->bindParam(":Email", $gebruikeremail);
$sql->bindParam(":password", $gebruikerwachtwoord);
$sql->bindParam(":rol", $gebruikerrol);
$sql->execute([
]);
echo "<div class='create-klant' > De gebruiker is toegevoegd </div> <br />";
echo "<a class='terug' href='gar-home.php'> terug naar het menu </a>";


?>

</div>



</body>
</html>
