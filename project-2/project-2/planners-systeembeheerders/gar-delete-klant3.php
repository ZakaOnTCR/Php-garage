<!DOCTYPE html>
<head>
    <meta name="author" content="Anjo Eijeriks">
    <meta charset="UTF-8">
    <title>gar-delete-klant2.php</title>
</head>
<body>
<?php require_once "gar-menu-planners-systeembeheerders.php" ?><div class="contact-form">
    <h1 class="create-klant">gar-delete-klant 3</h1>
    <div class="Lijn"></div>
    <p class="create-klant">op autokenteken gegevens zoeken uit de tabel auto van de database garage zodat ze verwijderd kunnen worden.</p>

<?php
// gegevens uit het formulier halen -
$klantid = $_POST["klantidvak"];
$verwijderen = $_POST["verwijdervak"];
// Klantgegevens verwijderen

if ($verwijderen)
{


    require_once "gar-connect.php";
    global $conn;
    $sql = $conn->prepare(" 
    DELETE FROM klant
    WHERE klantid = :klantid
    ");
    $sql->execute(["klantid" => $klantid]);
    echo "<div class='create-klant' > De gegevens zijn verwijderd. </div> <br />";



}
else
{
    echo "<div class='create-klant' > De gegevens zijn niet verwijderd. </div> <br />";
}

echo "<a class='terug' href='gar-home.php'> terug naar het menu </a>";
?>
</div>
</body>
</html>
