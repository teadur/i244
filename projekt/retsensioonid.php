<!DOCTYPE html>
<html lang="et"><head>
<meta http-equiv="content-type" content="text/html; charset=UTF-8">
  <meta charset="utf-8">
  <title>I244 kaugõpe: koduse projekti retsensioonide vaatamine</title>
</head>
<body>

<?php

  if (!isset($_GET['email'])):

?>

<h1>Sinu projektile tehtud retsensioonide vaatamine</h1>
<h3>Sisesta oma e-posti aadress</h3>
<form>
  <input type="email" name="email" /><br /><br />
  <input type="submit" value="vaata retsensioone!" />
</form>

<?php

  else:
    require('classes/Project.php');
    $p = new Project();
    $p->findByEmail($_GET['email']);
    $reviews = $p->getReviews();

?>
<h1>Sinu projekti retsensioonid</h1>
<?php

  if (count($reviews) == 0) {
    echo "<div>Polegi nagu retsensioone... kas panid ikka õige e-posti aadressi ({$_GET['email']})?</div>\n";
  } else {
    foreach ($reviews as $r) {
      echo "<div><a href=\"getFile.php?f=$r\">$r</a></div>\n";
    }
  }

?>

<?php endif; ?>

</body></html>
