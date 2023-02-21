<?php
//include database connection file
include("config.php");

$message = $_POST['comment'];
$PostDate = date("Y-m-d");

// insert data into table
$result = mysqli_query($mysqli, "INSERT INTO 
tblcomments(Message, PostDate)
VALUES('$message', '$PostDate')");

//show message when data is added
echo "<script>alert('Your intel has been received, Agent!');</script>";
echo "<script>window.location.href = 'index.php';</script>";
?>  