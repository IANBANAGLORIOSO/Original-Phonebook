<?php include('server.php');?>
<!DOCTYPE html>
<html>
<head>
	<title>User Registration system using PHP and MySQL</title>
	<link rel="stylesheet" type="text/css"	href="style.css">
	
	<link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
	<script type = "text/javascript" src = "bootstrap/js/jquery-slim.min.js"></script>
	<script type = "text/javascript" src = "bootstrap/js/popper.min.js"></script>
	<script type = "text/javascript" src = "bootstrap/js/bootstrap.js"></script>
</head>
<body>
<div id="main">
			<nav>
			
				<ul>

					
					<li><a href="register.php">Sign up</a></li>
					<li><a href="login.php">Sign in</a></li>
					<li><a href="#">About</a></li>
					<li><a href="#">Contact</a></li>
				</ul>
		
		
	</div>
	<div class="header">
		<h2>Login</h2>
	</div>
	<form method="post" action="login.php">
	<?php include('errors.php');?>
		<div class="input-group">
			<label>Username</label>
			<input type="text" name="username">
		</div>
		
		<div class="input-group">
			<label>Password</label>
			<input type="password" name="password">
		</div>
		
		<div class="input-group">
			<button type="submit" name="login_user" class="btn">Login</button>
		</div>
		<p>
			Not yet a member?<a href="register.php">Sign up</a>
		</p>
	</form>
<br><br><br>

</body>
</html>