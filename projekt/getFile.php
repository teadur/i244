<?php

if (false !== strpos($_GET['f'], "..")) {
	die('not a nice filename, sorry');
}

$file = '/home/mamangus/db/i244_project_upload/' . $_GET['f'];

if (file_exists($file)) {
    header('Content-Description: File Transfer');
    header('Content-Type: application/pdf');
    header('Content-Disposition: attachment; filename="'.basename($file).'"');
    header('Expires: 0');
    header('Cache-Control: must-revalidate');
    header('Pragma: public');
    header('Content-Length: ' . filesize($file));
    readfile($file);
    exit;
}
