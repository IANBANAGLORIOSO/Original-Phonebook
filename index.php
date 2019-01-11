<?php 
  session_start(); 

  if (!isset($_SESSION['username'])) {
  	$_SESSION['msg'] = "You must log in first";
  	header('location: login.php');
  }
  if (isset($_GET['logout'])) {
  	session_destroy();
  	unset($_SESSION['username']);
  	header("location: login.php");
  }
?>
	
	
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
		<h2>Home page</h2>
	</div>
	<div class="content">
		<?php if(isset($_SESSION['success'])):?>
			<div class="error success">
				<h3>
					<?php 
						echo $_SESSION['success'];
						unset($_SESSION['success']);
					?>
				</h3>
			</div>
		<?php endif ?>
		
		<?php if (isset($_SESSION["username"])):?>
			<p>Welcome <strong><?php echo $_SESSION['username'];?></strong></p>
			<p><a href="index.php?logout='1'" style="color:red;">Logout</a></p>
			<p><a href="index2.php?" style="color:green;">press to visit webpage</a></p>
		<?php endif ?>
	</div>

	
	
<br><br><br>

</body>
</html>