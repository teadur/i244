<!DOCTYPE html>
<html lang="et"><head>
<meta http-equiv="content-type" content="text/html; charset=UTF-8">
  <meta charset="utf-8">
  <title>I244 kaugõpe: koduse projekti esitamine</title>
</head>
<body>

<?php

  if (count($_POST)):

    require("classes/Project.php");
    $p = new Project();
    $p->add($_POST);
    
    echo "<h1>Töö esitaud, aitäh!</h1>";
    echo "<p>02.06.2016 peaks Su e-postile tulema retsenseeritavate tööde viited.</p>";

  else:

?>

<h1>Koduse projekti esitamine</h1>
<form method="POST" action="">
<table>
  <tr>
    <td>Sinu nimi:</td>
    <td><input type="text" name="name" required /></td>
  </tr>
  <tr>
    <td>Sinu e-posti aadress:</td>
    <td><input type="email" name="email" required /> sellele aadressile saadetakse retsenseerimist vajavad tööd</td>
  </tr>
  <tr>
    <td>Viide töö versioonihaldusele:</td>
    <td><input type="url" name="version_control" size="50" required /></td>
  </tr>
  <tr>
    <td>Link töötavale rakendusele:</td>
    <td><input type="url" name="demo_url" size="50" required /></td>
  </tr>
  <tr>
    <td></td>
    <td><input type="submit" value="saada!" /></td>
  </tr>
</table>
</form>

<?php endif; ?>

</body></html>
