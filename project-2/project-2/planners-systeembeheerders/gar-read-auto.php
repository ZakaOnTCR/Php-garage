<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport">
    <title>gar-read-auto.php</title>
</head>
<body>
<?php require_once "gar-menu-planners-systeembeheerders.php" ?>
<div class="contact-form">

<h2 class="create-klant">Dit zijn alle gegevens uit de tabel auto van de database garage</h2>
<div class="Lijn"></div>
<div class="container">
<table class="table table-dark table-hover">
  <tr>
    <th>klantid</th>
    <th>autokenteken</th>
    <th>automerk</th>
    <th>autotype</th>
    <th>autokmstand</th>
  </tr>
<?php
require_once "gar-connect.php";
global $conn;
$autos = $conn->prepare("
select autokenteken,
       automerk,
       autotype,
       autokmstand,
       klantid
from   auto
");
$autos->execute();

foreach ($autos as $auto)
 {
    echo "<tr>";
    echo "<td>" . $auto["klantid"]         ."</td>";
    echo "<td>" . $auto["autokenteken"]    ."</td>";
    echo "<td>" . $auto["automerk"]        ."</td>";
    echo "<td>" . $auto["autotype"]        ."</td>";
    echo "<td>" . $auto["autokmstand"]     ."</td>";
    echo "</tr>";
 }




?>

</table>
</div>
</body>
</html>