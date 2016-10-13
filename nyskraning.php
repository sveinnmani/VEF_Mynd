<?php #include 'include/random_img.php';	?>
<!DOCTYPE html>
<html>
	<head>
		<title></title>
	</head>
	<meta charset="utf-8">
		<link rel="stylesheet" type="text/css" href="css/materialize.css">
		<link rel="stylesheet" type="text/css" href="css/still.css">
	</head>

	<body>
	<?php
		include 'include/menu.php';
		include'include/random_img.php';
	?>

		<form action="" method="post">
		  <div class="login_box">
		    <span class="login_title">Please Login</span><br />
		    <br /><br />
		    
		    
		    
		    <span class="login_text">Username</span><br />
		    <input name="username" type="text" class="login_input" /><br />		    
		    <span class="login_text">Password</span><br />
		    <input name="password" type="password" class="login_input" /><br /><br />
		    <span class="login_text">E-mail</span><br />
		    <input name="username" type="text" class="login_input" /><br />	
			<div align="right"><input name="login" type="submit" class="login" value="Login" /></div>
		</div>
	</form>
	<?php
		include 'include/footer.php';
	?>
	</body>
</html>