<?php

  if (count($_POST)) {
    $html = sprintf(
      '<tr><td>%s</td><td><a href="%s">%s</a></td><td><a href="%s">%s</a></td></tr>' . "\n",
      htmlspecialchars($_POST['nimi']), $_POST['git'], $_POST['git'], $_POST['link'], $_POST['link']
    );
    file_put_contents('esitatud.html', $html, FILE_APPEND);
  }

?>
