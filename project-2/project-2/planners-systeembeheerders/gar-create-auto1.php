<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport">
    <title>gar-create-auto1.php</title>
</head>
<body>
<?php require_once "gar-menu-planners-systeembeheerders.php" ?><div class="contact-form">
<h1 class="create-klant">garage create auto 1</h1>
<div class="Lijn"></div>
<p class="create-klant"> Dit formulier wordt gebruikt om klantgegevens in te voeren </p>
<form class="form" action="gar-create-auto2.php" method="post">
    <label for="autokentekenvak">autokenteken</label>
    <input type="text" name="autokentekenvak">

    <label for="autokentekenvak">automerk</label>
    <input type="text" name="automerkvak">

    <label for="autokentekenvak">autotype</label>
    <input type="text" name="autotypevak">

    <label for="autokentekenvak">autokmstand</label>
    <input type="text" name="autokmstandvak">

    Select image to upload:
    <input type="file" name="fileToUpload" id="fileToUpload">



    <input type="submit">
</form>
</div>
</body>
</html>
