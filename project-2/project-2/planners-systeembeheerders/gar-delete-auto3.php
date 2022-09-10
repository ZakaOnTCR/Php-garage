<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport">
    <title>gar-delete-auto3</title>
</head>
<body>
<?php require_once "gar-menu-planners-systeembeheerders.php" ?>
<div class="contact-form">
    <h1 class="create-klant">gar-delete-klant 3</h1>
    <p class="create-klant">op autokenteken gegevens zoeken uit de tabel auto van de database garage zodat ze verwijderd
        kunnen worden.</p>
    <?php
    // gegevens uit het formulier halen
    $autokenteken = $_POST["autokentekenvak"];
    $verwijderen = $_POST["verwijdervak"];

    // klantgegevens verwijderen
    if ($verwijderen) {
        require_once "gar-connect.php";
        global $conn;
        $sql = $conn->prepare("
    delete from auto 
    where autokenteken = :autokenteken    
");
        $sql->execute(["autokenteken" => $autokenteken]);
        echo "<div class='create-klant'>de gegevens zijn verwijderd. </div><br />";
    } else {
        echo "de gegevens zijn niet verwijderd. <br />";
    }

    echo "<a class='terug' href='gar-home.php'>Terug naar het menu. </a>";
    ?>
</div>
</body>
</html>