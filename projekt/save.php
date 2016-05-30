<?php 

  $mysqli = new mysqli("localhost", "test", "t3st3r123", "test");
  $stmt = $mysqli->prepare("INSERT INTO mamangus_projects(name, email, version_control, demo_url, created) VALUES (?, ?, ?, ?, NOW())") or die($mysqli->error);
  $stmt->bind_param('ssss', $_POST["name"], $_POST["email"], $_POST["version_control"], $_POST["demo_url"]) or die($stmt->error);
  $stmt->execute() or die($stmt->error);

?>
