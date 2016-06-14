<?php

$targetDir = "/home/mamangus/db/i244_project_upload/";
$targetFile = $targetDir . $_POST['id'] . '__' . rand(10000, 99999) . basename($_FILES["retsensioon"]["name"]);
$uploadOk = 1;
$fileType = pathinfo($targetFile, PATHINFO_EXTENSION);
if ($fileType != 'pdf')
    die('Sorri, ainult PDF faile saab saata, proovi uuesti!');

if (move_uploaded_file($_FILES["retsensioon"]["tmp_name"], $targetFile)) {
    echo "Retsensioon nimega ". basename( $_FILES["retsensioon"]["name"]). " esitatud, ait&auml;h!";
} else {
    echo "Sorri, faili &uuml;lesse laadimisel tekkis mingi jama.";
}

?>
