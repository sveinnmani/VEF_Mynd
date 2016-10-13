<?php
			include 'include/menu.php';
			include 'include/random_img.php';
		?>
<!DOCTYPE html>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-2" />
<title>Login</title>
	
	<meta charset="utf-8">
		<link rel="stylesheet" type="text/css" href="css/materialize.css">
		<link rel="stylesheet" type="text/css" href="css/still.css">
	</head>

	<body style=" background: url(img/<?php echo $selectedBg; ?>) no-repeat;"></p>	
		
		<form action="" method="post">
		  <div class="login_box">
		    <span class="login_title">Please Login</span><br />
		    You must login to view the following content.forgotten your password........(Contact admin.)<br /><br />
		    
		    <?php $login->error_login(); ?>
		    
		    <span class="login_text">Username</span><br />
		    <input name="username" type="text" class="login_input" /><br />
		    <span class="login_text">Password</span><br />
		    <input name="password" type="password" class="login_input" /><br /><br />
			<div align="right"><input name="login" type="submit" class="login" value="Login" /></div>
		</div>
	</form>
	<?php include'include/footer.php';?>
	</body>
</html>