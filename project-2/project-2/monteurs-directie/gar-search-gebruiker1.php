<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport">
    <title>gar-search-auto1</title>
</head>
<body>
<?php require_once "gar-menu-monteurs-directie.php" ?>
<div class="contact-form">
<h1 class="create-klant">garage zoekt op kenteken</h1>
<div class="Lijn"></div>
<p class="create-klant">Dit formulier zoekt een auto op uit de tabel auto van de database garage</p>

<form class="form" action="gar-search-gebruiker2.php" method="post">
    <label for="gebruikerid">gebruikerid</label>
    <input type="text" name="gebruikeridvak">
    <input type="submit">
</form>
</div>
</body>
</html>
