<?php include('process.php');?>
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
	<br><br><br>
	<div class="row justify-content-center">
	<form action="process.php" method="POST">
	<input type="hidden" name="id" value="<?php echo $id; ?>">
		<div class="form-group">
			<label>firstname</label>
			<input type="text" name="firstname" class="form-control" value="<?php echo $firstname;?>"placeholder="Enter your firstname" required>
		</div>
		<div class="form-group">
			<label>lastname</label>
			<input type="text" name="lastname" class="form-control" value="<?php echo $lastname;?>"placeholder="Enter your lastname" required>
		</div>
		<div class="form-group">
			<label>address</label>
			<input type="text" name="address" class="form-control" value="<?php echo $address;?>"placeholder="Enter your address" required>
		</div>
		<div class="form-group">
		<?php 
			if($update==true):
		?>
		<button type="submit" class="btn btn-info" name="update">Update</button>
		<a href="index2.php"class="btn btn-info">back</a>
		<?php else: ?>
			<button type="submit" class="btn btn-primary" name="save">save</button>
			<a href="index2.php"class="btn btn-primary">back</a>
		<?php endif;?>
		</div>
	</form>
	</div>

</body>
</html>