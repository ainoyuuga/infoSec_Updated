<?php
session_start();
include_once("config.php");

if (isset($_POST['signin'])) {
	extract($_POST);

	$email = $_POST['email'];
	$pass = $_POST['pass'];

	if (empty($email) || empty($pass)) {
		echo "<script>alert('Access denied, Agent!');</script>";
		echo "<script>window.location.href = 'index.php';</script>";
	} else {
		$sql = mysqli_query($mysqli, "SELECT * FROM tblaccounts where Email='$email' and Password='$pass'");
		$row = mysqli_fetch_array($sql);
		if (is_array($row)) {
			$_SESSION['ID'] = $row['ID'];
			$_SESSION['Name'] = $row['Name'];
			$_SESSION['Email'] = $row['Email'];
			$_SESSION['Password'] = $row['Password'];
			$_SESSION['Role'] = $row['Role'];

			if ($_SESSION['Role'] == "Member") {
				echo "<script>alert('Welcome, Agent!');</script>";
				echo "<script>window.location.href = 'index.php';</script>";
			} else {
				echo "<script>alert('Welcome, Handler!');</script>";
				echo "<script>window.location.href = 'ui_admin_dashboard.php';</script>";
			}
		} else {
			echo "<script>alert('Access denied!');</script>";
			echo "<script>window.location.href = 'index.php';</script>";
		}
	}
}

?>