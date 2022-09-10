<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport">
    <title>Document</title>
</head>
<body>

<?php require_once "gar-menu.php" ?>

<div class="contact-form">
    <h1 class="create-klant">Vul hier e-mailadres in om te loggen</h1>
    <form class="form" action="gar-inloggen2.php" method="post">
        <input type="email" name="gebruikeremailvak" placeholder="email">
        <input type="password" name="gebruikerwachtwoordvak" placeholder="password">
        <input type="submit" name="inloggen">
    </form>
</div>
</body>
</html>