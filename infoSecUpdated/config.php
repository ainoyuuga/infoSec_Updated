<?php
/** using mysqli_connect for database connection */
$databaseHost = 'localhost';
$databaseName = 'blogsite';
$databaseUsername = 'root';
$databasePassword = 1234; //change this section if you are not using password

$mysqli = mysqli_connect($databaseHost,$databaseUsername,$databasePassword, $databaseName);
?>
