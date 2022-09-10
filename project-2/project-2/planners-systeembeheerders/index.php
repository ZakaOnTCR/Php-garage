<?php include_once "gar-menu-planners-systeembeheerders.php"?>

<?php


session_start();
if (isset($_SESSION['gebruiker'])) {
    if ($_SESSION['gebruiker']->gebruikerrol === "systeembeheerder"){
        echo "<div class='contact-form'>";
        echo "Welkom " . $_SESSION['gebruiker']->gebruikernaam;
        echo "<form><button type='submit' name='loguit'>uitloggen</button></form>";
        echo "<a href='profiel1.php'>profile</a>";
        echo "</div>";
    }elseif ($_SESSION['gebruiker']->gebruikerrol === "planner"){
        echo "Welkom " . $_SESSION['gebruiker']->gebruikernaam;
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
