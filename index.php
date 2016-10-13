<?php include 'include/random_img.php';	?>

<!DOCTYPE html>
<html>
	<head>
		<title>Myndvefur</title>
		<meta charset="utf-8">

		<link rel="stylesheet" type="text/css" href="css/materialize.css">
		<link rel="stylesheet" type="text/css" href="css/still.css">

	</head>

	<body style=" background: url(img/<?php echo $selectedBg; ?>) no-repeat;">  
	<?php include'include/menu.php';
		  include'include/random_img.php';
		  include'include/gallery.php';
		  include'include/footer.php';
	?>		


	</body>
</html>