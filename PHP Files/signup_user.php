<?php
if (isset($_POST['sign_up'])) {

	$con = mysqli_connect("127.0.0.1", "root", "", "mysql");
	$name = $_POST['user_name'];
	$pass =  $_POST['user_pass'];
	$email = $_POST['user_email'];
	$country = $_POST['user_country'];
	$gender =  $_POST['user_gender'];
	$rand = rand(1, 2); //Random number between 1 and 2
	if ($name == '') {
		echo "<script>alert('We can not verify your name')</script>";
	}

	if (strlen($pass) < 8) {

		echo "<script>alert('Password should be minimum 8 characters!')</script>";
		exit();
	}
	$result = mysqli_query($con, "select * from users where user_email='$email'");
	if (!$result) {

		echo "<script>alert('Email already exist, please try another!')</script>";
		echo "<script>window.open('signup.php','_self')</script>";
		exit();
	}
	if ($rand == 1)
		$profile_pic = "/images/1.jpg";
	else if ($rand == 2)
		$profile_pic = "/images/businessman.png";

	$insert = "insert into users (user_name,user_pass,user_email,user_profile,user_country,user_gender) values ('$name','$pass','$email','$profile_pic','$country','$gender')";

	$query = mysqli_query($con, $insert);

	if ($query) {

		echo "<script>alert('Congratulations $name, your account has been created successfully.')</script>";
		echo "<script>window.open('signin.php','_self')</script>";
	} else {

		echo "<script>alert('Registration failed, try again!')</script>";
		echo "<script>window.open('signup.php','_self')</script>";
	}
}
