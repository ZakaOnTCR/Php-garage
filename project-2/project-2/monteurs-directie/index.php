<?php require_once "gar-menu-monteurs-directie.php" ?>



<?php
session_start();
if (isset($_SESSION['gebruiker'])) {
    if ($_SESSION['gebruiker']->gebruikerrol === "monteur"){
        echo "Welkom ," . $_SESSION['gebruiker']->gebruikernaam;
        echo "<form><button type='submit' name='loguit'>uitloggen</button></form>";
        echo "<a href='profiel1.php'>profile</a>";
    }elseif ($_SESSION['gebruiker']->gebruikerrol === "directie"){
        echo "Welkom" . $_SESSION['gebruiker']->gebruikernaam;
        echo "<form><button type='submit' name='loguit'>uitloggen</button></form>";
        echo "<a href='profiel1.php'>profile</a>";
    }
    else{
        header("location:http://localhost/project-2/gar-inloggen1.php" , true);
        die("");
    }
}else{
    header("location:http://localhost/project-2/gar-inloggen1.php" , true);
    die("");
}
if (isset($_GET['loguit'])) {
    session_unset();
    session_destroy();
    header("location:http://localhost/project-2/gar-inloggen1.php" , true);
}