<?php
//include database connection file
include_once("config.php");

$name = $_POST['Name'];
$email = $_POST['Email'];
$pass = $_POST['Password'];
$cPass = $_POST['CPassword'];
$createdDate = date("Y-m-d");
$modifiedDate = date("Y-m-d");

if (empty($name) || empty($email) || empty($pass) || empty($cPass)) {
    echo "<script>alert('Please fill in the necessary fields, Agent.');</script>";
    echo "<script>window.location.href = 'ui_register.php';</script>";
}
else {
    if ($pass != $cPass) {
        echo "<script>alert('Agent, password fields must have the same value!');</script>";
        echo "<script>window.location.href = 'ui_register.php';</script>";
    } else {
        //insert data into table
        $result = mysqli_query($mysqli, "INSERT INTO
    tblaccounts(Name,Email,Password,Role,CreatedDate,ModifiedDate)
    VALUES('$name','$email', '$pass','Member','$createdDate','$modifiedDate')");
    
        //show message when data is added
        echo "<script>alert('Congratulations! You have successfully created an account, Agent!.');</script>";
        echo "<script>window.location.href = 'index.php';</script>";
    }
}


?>