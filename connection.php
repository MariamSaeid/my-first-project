<?php

$hostname = "localhost";
$dbname = "shopping";
$dbuser = "mariam";
$dbupassword = "mariam12345";
$dsn = "mysql:host=$hostname;dbname=$dbname";

$connection = new PDO($dsn, $dbuser, $dbupassword);


 ?>
 