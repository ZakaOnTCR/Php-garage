<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport">
    <title>gar-create-gebruiker1.php</title>
</head>
<body>

<?php require_once "gar-menu-planners-systeembeheerders.php" ?>
<div class="contact-form">
    <h1 class="create-klant">garage create auto 1</h1>
    <div class="Lijn"></div>
    <p class="create-klant"> Dit formulier wordt gebruikt om klantgegevens in te voeren </p>
    <form class="form" action="gar-create-gebruiker2.php" method="post">
        <label for="gebruikernaamvak">naam</label>
        <input type="text" name="gebruikernaamvak">

        <label for="gebruikerleeftijdvak">gebruikerleeftijd</label>
        <input type="date" name="gebruikerleeftijdvak">

        <label for="gebruikeremailvak">gebruikeremail</label>
        <input type="text" name="gebruikeremailvak">

        <label for="gebruikerwachtwoordvak">gebruikerwachtwoord</label>
        <input type="text" name="gebruikerwachtwoordvak">

        <input type="checkbox" id="vehicle1" name="gebruikerrolvak" value="monteur">
        <label for="rol1"> monteur</label><br>
        <input type="checkbox" id="vehicle2" name="gebruikerrolvak" value="directie">
        <label for="rol2"> directie</label><br>
        <input type="checkbox" id="vehicle3" name="gebruikerrolvak" value="planner">
        <label for="rol3">planner</label><br><br>
        <input type="checkbox" id="vehicle4" name="gebruikerrolvak" value="systeembeheerder">
        <label for="rol3">systeembeheerder</label><br><br>
        <br>


        <input type="submit">
    </form>
</div>
</body>
</html>
