<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="author" content="Anjo Eijeriks">
    <title>gar-create-klant1.php</title>
    <link rel="stylesheet" href="main.css">
</head>
<body>
<?php require_once "gar-menu-planners-systeembeheerders.php" ?>

<div class="contact-form">
    <h1 class="create-klant">Garage create klant</h1>
    <div class="Lijn"></div>
    <form class="form" action="gar-create-klant2.php" method="post">
        <label for="klantnaam">klantnaam</label>
        <input type="text" name="klantnaamvak" id="klantnaam">
        <label for="klantadres">klantadres </label>
        <input type="text" name="klantadresvak" id="klantadres">
        <label for="klantpostcode">klantpostcode</label>
        <input type="text" name="klantpostcodevak" id="klantpostcode">
        <label for="klantplaats">klantplaats</label>
        <input type="text" name="klantplaatsvak" id="klantplaats">
        <input type="submit">
        <div class="contact">
            <span class="fa-phone"></span>06 1234 567
            <span class="fa-phone"></span> contact@company.com
        </div>
    </form>
</div>
</body>
</html>