<?php
session_start();
require_once "gar-connect.php";
global $conn;
if (isset($_POST['gebruikerupdatevak'])) {

    $sql = $conn->prepare("UPDATE gebruikers SET gebruikernaam =:gebruikernaam , gebruikerleeftijd= :gebruikerleeftijd , gebruikeremail= :gebruikeremail , gebruikerwachtwoord= :gebruikerwachtwoord, gebruikerrol= :gebruikerrol WHERE gebruikerid = :gebruikerid");
    $sql->bindParam(':gebruikernaam', $_POST['gebruikernaamvak']);
    $sql->bindParam(':gebruikerleeftijd', $_POST['gebruikerleeftijdvak']);
    $sql->bindParam(':gebruikeremail', $_POST['gebruikeremailvak']);
    $sql->bindParam(':gebruikerwachtwoord', $_POST['gebruikerwachtwoordvak']);
    $sql->bindParam(':gebruikerrol', $_POST['gebruikerrol']);
    $sql->bindParam(':gebruikerid', $_POST['gebruikerupdatevak']);

    $sql->execute();

    if ($sql->execute()){
        echo "je gegevens zijn gewijzigd";
    }else{
        echo "je gegevens zijn niet gewijzigd";
    }

}