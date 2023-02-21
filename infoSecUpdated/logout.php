<?php
include("config.php");

session_start();
if (!empty($_SESSION['ID'])) {
    unset($_SESSION["ID"]);
    unset($_SESSION["Name"]);
    unset($_SESSION["Email"]);
    unset($_SESSION["Role"]);
    unset($_SESSION["Password"]);
    session_destroy();

    echo "<script>alert('Until we meet again, Agent...');</script>";
    echo "<script type='text/javascript'>document.location='index.php'</script>";
    
}
else {
    echo "<script>alert('An error has occured');</script>";
    echo "<script type='text/javascript'>document.location='index.php'</script>";
}

?>