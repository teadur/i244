<!DOCTYPE html>
<html lang="et"><head>
<meta http-equiv="content-type" content="text/html; charset=UTF-8">
  <meta charset="utf-8">
  <title>I244 kaugõpe: 5. praktikum: töö saatmine</title>
</head>
<body>

<h1>Siin saad saata oma töö turvatestimiseks teistele õpilastele</h1>
<p>Oma kirjutatud ja töötava lahenduse siia saatmise eest saab 2 lisapunkti.</p>
<p>Võib saata nii praktikumides tehtud lehti, kodust projekti kui muud aine raames tehtut. Oluline, et rakendus oleks funktsionaalselt toimiv!</p>
<h2>Saada oma töö</h2>
<form method="POST">
<table>
  <tr>
    <td>Sinu nimi:</td>
    <td><input type="text" name="nimi" required /></td>
  </tr>
  <tr>
    <td>Viide töö versioonihaldusele:</td>
    <td><input type="url" name="git" required /></td>
  </tr>
  <tr>
    <td>Link töötavale rakendusele:</td>
    <td><input type="url" name="link" required /></td>
  </tr>
  <tr>
    <td></td>
    <td><input type="submit" value="saada!" /></td>
  </tr>
</table>
</form>

<h2>Saadetud tööd</h2>
<table>
<tr><th>Nimi</th><th>Versioonihaldus</th><th>Töötav demo</th></tr>
<?php include('salvesta.php'); ?>
<?php include('esitatud.html'); ?>
</table>

</body></html>
