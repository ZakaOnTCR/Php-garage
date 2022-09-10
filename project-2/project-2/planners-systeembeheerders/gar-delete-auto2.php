<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport">
    <title>gar-delete-auto2.php</title>
</head>
<body>
<?php require_once "gar-menu-planners-systeembeheerders.php" ?>

<div class="contact-form">
    <?php
    echo "<h1 class='create-klant'> garage delete auto 2 </h1>";
    echo "<div class='Lijn'></div>";
    echo "<p1 class='create-klant'> op autokenteken gegevens zoeken uit de tabel klanten van de database garage zodat ze verwijderd kunnen worden.</p1>";

    // klantid uit het formulier halen
    $formdata = $_POST["autokentekenvak"];

    // autokenteken uit de tabel halen
    require_once "gar-connect.php";
    global $conn;
    $autokenteken = $conn->prepare("
select autokenteken , automerk, autotype, autokmstand, klantid from auto where  autokenteken= :autokenteken
");
    $autokenteken->execute([":autokenteken" => $formdata]);

    $auto = $autokenteken->fetch();

    //auto gegevens laten zien
    echo "<table class='table table-dark table-hover'>";
    echo "<tr>";
    echo "<td>" . $auto["autokenteken"] . "</td>";
    echo "<td>" . $auto["automerk"] . "</td>";
    echo "<td>" . $auto["autotype"] . "</td>";
    echo "<td>" . $auto["autokmstand"] . "</td>";
    echo "<td>" . $auto["klantid"] . "</td>";
    echo "</tr>";

    echo "</table><br/>";

    echo "<form class='form' action='gar-delete-auto3.php' method='post'>";
    //klantid mag niet meer gewijzigd worden
    echo "<input type='hidden' name='klantidvak' value='" . $auto['klantid'] . "'>";
    // waarde 0 doorgeven als er niet gecheckt word
    echo "<input type='hidden' name='verwijdervak' value='0'>";
    echo "<input type='checkbox' name='verwijdervak' value='1'>";
    echo "<input type='hidden' name='autokentekenvak' value='"  . $auto['autokenteken'] . " ' > ";
    echo "Verwijder deze auto";
    echo "<input type='submit'>";
    echo "</form>";
    ?>
</div>
</body>
</html>