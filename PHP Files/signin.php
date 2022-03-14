<!DOCTYPE html>
<html lang="en">

<head>
	<title>Login to your account</title>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link href="https://fonts.googleapis.com/css?family=Roboto|Courgette|Pacifico:400,700" rel="stylesheet">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="/CSS/signin.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
	<style>
		.mytext {
			width: 200px;
		}

		td {
			text-align: right;
		}

		#divclass {
			border: 1px black solid;
			margin-left: 500px;
			position: absolute;
			width: 310px;
			height: 310px;
		}

		#last_link {
			color: black;
		}
	</style>
	<script>
		function changeSize() {
			var w = window.outerWidth;
			var h = window.outerHeight;
			var x = document.getElementById("divclass").style.marginLeft = (w / 2 - 150) + "px";

		}
	</script>
</head>

<body onresize="changeSize()" onload="changeSize()">
	<br>
	<br>
	<br>
	<div align="center">

		<div class="signin-form">
			<form action="" method="post">
				<div class="form-header">
					<h2>Sign In</h2>
					<p>Login to MyChat</p>
				</div>
				<table>
					<tr>
						<td>
							<label style="margin:5px">Email</label>
						</td>
						<td>
							<div class="form-group">
								<input type="text" class="form-control mytext" placeholder="someone@site.com" name="email" required="required">
							</div>
						</td>
					</tr>
					<tr>
						<td>
							<label style="margin:5px">Password</label>
						</td>
						<td>
							<div class="form-group">
								<input type="password" class="form-control mytext" placeholder="Password" name="pass" required="required">
							</div>
						</td>
					</tr>
				</table>
				<div class="form-group">
					<button type="submit" class="btn btn-primary btn-block btn-lg" name="sign_in" style="width: 100px;height: 40px">Sign in</button>
				</div>
				<div class="small"><a href="forgot_pass.php">Forgot password? </a></div><br>
				<?php include("signin_user.php"); ?>
				<div class="text-center small" style="color:black;"><a href="signup.php">Don't have an account? Sign Up</a></div>
			</form>

		</div>
	</div>

</body>

</html>