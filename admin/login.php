<?php
session_start();
if(isset($_SESSION['username'])){
	header('location:login.php');
	exit;
}
?>
<!DOCTYPE html>
<html lang="en">
	<head>
    	<link rel="stylesheet" type="text/css" href="css/login.css">
		<meta charset="UTF-8">
		<title>Đăng nhập hệ thống quản trị</title>
	</head>
	<body>
		<?php
			include('conf/config.php');
		?>
		<div id="login">
			<form action="login.php" method="POST" enctype="multipart/form-data">
				<h2><a href="login.php">Đăng nhập</a></h2>
				<input type="text" name="username" id="username" placeholder="Enter username..." required />
				<input type="password" name="password" id="password" placeholder="Enter password..." required />
				<input type="submit" name="login" id="button" value="Sign in"/>
				<div class="login-help">
					<p><a href="../index.php">Click here to come back your website</a>.</p>
				</div>
			</form>
		</div>
	</body>
</html>