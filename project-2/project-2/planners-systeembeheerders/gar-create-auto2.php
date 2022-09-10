<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport">
    <title>gar-create-auto2.php</title>
</head>
<body>
<?php require_once "gar-menu-planners-systeembeheerders.php" ?><div class="contact-form">
<h1 class="create-klant">garage create auto 2</h1>
<p class="create-klant"> Een auto toevoegen aan de tabel klant in de database garage </p>

<?php
// autogegvens uit het formulier halen
$autokenteken = $_POST["autokentekenvak"];
$automerk     = $_POST["automerkvak"];
$autotype     = $_POST["autotypevak"];
$autokmstand  = $_POST["autokmstandvak"];
$klantid      = NULL;


// klantgegevens invoeren in de tabel

require_once "gar-connect.php";
global $conn;
$sql = $conn->prepare("
insert into auto values 
(:autokenteken, :automerk, :autotype , :autokmstand, :klantid)
");
$sql->execute([
    "autokenteken"     => $autokenteken,
    "automerk"         => $automerk,
    "autotype"         => $autotype,
    "autokmstand"      => $autokmstand,
    "klantid"          => $klantid
]);
echo "<div class='create-klant' > De auto is toegevoegd </div> <br />";
echo "<a class='terug' href='gar-home.php'> terug naar het menu </a>";


?>

</div>



</body>
</html>
