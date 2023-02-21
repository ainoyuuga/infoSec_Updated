<?php
/** using mysqli_connect for database connection */
$databaseHost = 'localhost';
$databaseName = 'blogsite';
$databaseUsername = 'root';
$databasePassword = 1234;

$mysqli = mysqli_connect($databaseHost,$databaseUsername,$databasePassword, $databaseName);
?>