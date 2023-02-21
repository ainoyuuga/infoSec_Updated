<?php
include("config.php");

$sql = "SELECT * FROM tblcomments";
$result = mysqli_query($mysqli, $sql);
$chart_data = "";
while ($row = mysqli_fetch_array($result)) {

    $content[] = $row['Message'];
    $postDate[] = $row['PostDate'];
}

?>