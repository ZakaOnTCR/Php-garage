<!doctype html>
<html lang="nl">
<head>
    <meta charset="UTF-8">
    <meta name="author" content="Anjo Eijeriks">
    <title>gar-create-klant1.php</title>
</head>
<body>
<?php require_once "gar-menu-planners-systeembeheerders.php" ?>
<div class="contact-form">
    <h1 class="create-klant">Garage delete klant 1</h1>
    <div class="Lijn"></div>
    <p class="create-klant">Dit formulier zoekt een klant op uit de tabel klanten van database garage op hem te kunnen verwijderen.</p>
    <form class="form" action="gar-delete-gebruiker2.php" method="post">
        Welk klantid wilt u verwijderen?
        <input type="text" name="gebruikeridvak"> <br/>
        <input type="submit">
    </form>
</div>
</body>
</html>
