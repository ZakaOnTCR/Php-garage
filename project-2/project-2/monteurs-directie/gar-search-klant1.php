<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="author" content="Anjo Eijeriks">
    <title>gar-search-klantid1</title>
</head>
<body>
<?php require_once "gar-menu-monteurs-directie.php" ?>


<div class="contact-form">
    <h1 class="create-klant">Garage zoek op klantid1 </h1>
    <div class="Lijn"></div>
    <p class="create-klant">Dit formulier zoekt een klant op uit de tabel klanten van database garage</p>
    <h3 class="create-klant">welk klantid zoekt u?</h3>
    <form class="form" action="gar-search-klant2.php" method="post">
        <input type="text" name="klantidvak">
        <input type="submit">

    </form>
</div>
</body>
</html>