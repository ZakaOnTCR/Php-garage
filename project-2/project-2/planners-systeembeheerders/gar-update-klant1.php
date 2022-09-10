<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="author" content="Anjo Eijeriks">
    <title>gar-update-klant1.html</title>
</head>
<body>
<?php require_once "gar-menu-planners-systeembeheerders.php" ?><div class="contact-form">
    <h1 class="create-klant">Garage update klant 1</h1>
    <div class="Lijn"></div>
    <p class="create-klant">Dit formulier wordt gebruikt om klantgegevens te wijzigen</p>
    <form class="form" action="gar-update-klant2.php" method="post">
        <label for="klantid">Welke klantid wilt u wijzigen?</label>
        <input type="text" name="klnatidvak" id="klantid">
        <input type="submit">
    </form>
</div>
</body>
</html>