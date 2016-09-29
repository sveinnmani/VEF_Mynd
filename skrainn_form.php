<?php require('_skrainn.php'); ?>

<!DOCTYPE html>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-2" />
<title>User</title>
<style type="text/css">
*   
a.button {
	color: #000;
	font: bold 12px Helvetica, Arial, sans-serif;
	text-decoration: none;
	padding: 8px 15px;
	border: solid 1px #FFF;
	font-size: 15px;
    background-color:#39F;
	
    }
</style>

</head>

<body bgcolor="#D6D6D6">
<?php
	include 'include/menu.php';
?>
<p align="center">&nbsp;</p><div align="center">
<p align="center">&nbsp;</p></div><div align="center"> <strong>Welcome back <?php echo $login->username; ?>,</strong><br />
    Thank you for logging in.<br /><br />
  
</div><div align="center">

<a href="skraut.php"  class="button">Logout</a></div>

</div>

</body>
</html>
