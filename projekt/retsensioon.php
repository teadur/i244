<!DOCTYPE html>
<html lang="et"><head>
<meta http-equiv="content-type" content="text/html; charset=UTF-8">
  <meta charset="utf-8">
  <title>I244 kaugõpe: koduse projekti retsensiooni saatmine</title>
</head>
<body>

<?php

  if (!isset($_GET['id'])):
    echo "<h3>Projekti ID on määramata</h3>";
  else:
    require('classes/Project.php');
    $p = new Project($_GET['id']);
    $info = $p->getInfo();

?>
<h1>Retsenseeritav projekt</h1>
<table>
<tr><td>Versioonihaldus: </td><td><a href="<?=$info['version_control']?>"><?=$info['version_control']?></a></td></tr>
<tr><td>Demo: </td><td><a href="<?=$info['demo_url']?>"><?=$info['demo_url']?></a></td></tr>
</table>

<h1>Retsensiooni saatmine</h1>
<p><a href="retsensiooniVorm.odt">Retsensiooni vorm</a></p>
<p>Retsensioon tuleb saata PDF formaadis!</p>
<form action="upload.php" method="post" enctype="multipart/form-data">
  <input type="file" name="retsensioon" accept="application/pdf" />
  <input type="hidden" name="id" value="<?=$_GET['id']?>" />
  <input type="submit" value="saada!" />
</form>

<?php endif; ?>

</body></html>
