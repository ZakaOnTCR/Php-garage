<?php
require_once "gar-connect.php";
global $conn;

session_start();


if(isset($_POST['inloggen'])){

    $login = $conn->prepare("SELECT * FROM gebruikers WHERE gebruikeremail = :gebruikeremailvak AND gebruikerwachtwoord = :gebruikerwachtwoordvak");
    $login->bindParam("gebruikeremailvak",$_POST['gebruikeremailvak'] );
    $login->bindParam("gebruikerwachtwoordvak", $_POST['gebruikerwachtwoordvak'] );
    $login->execute();

    if ($login->rowCount()===1){
    $geruikers = $login->fetchObject();
    $_SESSION['gebruiker'] = $geruikers;

    if($geruikers->gebruikerrol == true){
        echo "welkome " . $_POST['gebruikeremailvak'];

    if ($geruikers->gebruikerrol === "monteur"){

        header("Location: monteurs-directie/index.php");

    }
    elseif ($geruikers->gebruikerrol === "directie"){
        header("Location: monteurs-directie/index.php");

    }
    elseif ($geruikers->gebruikerrol === "planner"){
        header("Location: planners-systeembeheerders/index.php");
    }
    elseif ($geruikers->gebruikerrol === "systeembeheerder"){
        header("Location: planners-systeembeheerders/index.php");

    }
    }
    }
    else {
        echo "maak eerst een aacount aan";
    }

}

