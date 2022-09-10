<?php session_start();

require_once "gar-menu-planners-systeembeheerders.php";
if (isset($_SESSION['gebruiker'])) {
    echo "<div class='contact-form'>";
    echo "<h1 class='create-klant'> Mijn profiel</h1>";
    echo "<form class='form' action='profiel2.php' method='post'>";
    echo " <input type='text'  name='gebruikernaamvak' value='" . $_SESSION['gebruiker']->gebruikernaam . "' >";
    echo "<input type='date' name='gebruikerleeftijdvak 'value='" . $_SESSION['gebruiker']->gebruikerleeftijd . "'>";
    echo "<input type='email' name='gebruikeremailvak' value='" . $_SESSION['gebruiker']->gebruikeremail . "'>";
    echo "<input type='password' name='gebruikerwachtwoordvak' value='" . $_SESSION['gebruiker']->gebruikerwachtwoord . "'>";
    echo "<input type='text' name='gebruikerrolvak' value='" . $_SESSION['gebruiker']->gebruikerrol . "'>";
    echo "<input type='submit' name='gebruikerupdatevak'  value='" . $_SESSION['gebruiker']->gebruikerid . "'>";

    echo "</form>";
    echo "</div>";

}



