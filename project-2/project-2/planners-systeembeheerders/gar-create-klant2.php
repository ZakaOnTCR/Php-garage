<!DOCTYPE html>
<head>
    <meta name="author" content="Anjo Eijeriks">
    <meta charset="UTF-8">
    <title>gar-create-klant2.php</title>
</head>
<body>
<?php require_once "gar-menu-planners-systeembeheerders.php" ?><div class="contact-form">
    <h1 class="create-klant">grage create klant 1</h1>
    <div class="Lijn"></div>
    <p class="create-klant">een klant toevoegen aan de tabel klant in de database garage</p>

    <?php
    $klantid = NULL;
    $klantnaam = $_POST["klantnaamvak"];
    $klantadres = $_POST["klantadresvak"];
    $klantpostcode = $_POST["klantpostcodevak"];
    $klantplaats = $_POST["klantplaatsvak"];

    require_once "gar-connect.php";

    $conn = new PDO("mysql:host=localhost;dbname=autogarage", "root", "");
    $sql = $conn->prepare("INSERT INTO `klant`(`klantnaam`, `klantadres`, `klantpostcode`, `klantplaats`) VALUES ('$_POST[klantnaamvak]','$_POST[klantadresvak]','$_POST[klantpostcodevak]','$_POST[klantplaatsvak]')");

    $sql->bindParam(":klantid", $klantid);
    $sql->bindParam(":klantnaam", $klantnaam);
    $sql->bindParam(":klantadres", $klantadres);
    $sql->bindParam(":klantpostcode", $klantpostcode);
    $sql->bindParam(":klantplaats", $klantplaats);
    $sql->execute();

    echo "<h1 class='klant-toegevoegd'>" . "De klant is toegevoegd. <br />" ."</h1>";
    echo "<a class='terug' href='gar-home.php'> terug naar het menu </a>";
    ?>
</div>


