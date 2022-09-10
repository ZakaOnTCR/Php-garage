<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport">
    <title>gar-delete-auto1</title>
</head>
<body>
<?php require_once "gar-menu-planners-systeembeheerders.php" ?>
<div class="contact-form">
    <h1 class="create-klant"> garage verwijderd uw auto </h1>
    <div class="Lijn"></div>
    <p class="create-klant">Dit formulier kunt u gebruiken om uw klantid te verwijderen</p>


    <form class="form" action="gar-delete-auto2.php" method="post">
        <label for="autokenteken">autokenteken</label>
        <input type="text" name="autokentekenvak">
        <input type="submit">

    </form>
</div>
</body>
</html>
