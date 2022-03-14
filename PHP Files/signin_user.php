<?php
session_start();
//include("include/connection.php");

if (isset($_POST['sign_in'])) {
	$con = mysqli_connect("127.0.0.1", "root", "", "mysql");
	$email = $_POST['email'];
	$pass = $_POST['pass'];
	
	$query = "select * from users where user_email = '$email' AND user_pass = '$pass'";
	if ($result = mysqli_query($con, $query)) {
		$_SESSION['user_email'] = $email;
		$update_msg = mysqli_query($con, "UPDATE users SET log_in='Online' WHERE user_email='$email'");
		$user = $_SESSION['user_email'];
		$get_user = "select * from users where user_email='$email'";
		$run_user = mysqli_query($con, $get_user);
		$row = mysqli_fetch_array($run_user);
		$user_name = $row['user_name'];
		echo "<script>window.open('home.php?user_name=$user_name','_self')</script>";

	} else {
		echo "<div class='alert alert-danger'><strong>Check your email and password!</strong></div>";
	}
}
