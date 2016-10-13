<?php require('_skrainn.php'); ?>
<?php include 'include/random_img.php';	?>
<?php
use File\Upload; # declaration, so you can refer to the class as Upload rather than using the fully qualified name

if (isset($_POST['upload'])) {
    
    echo "<pre>";
    print_r($_FILES);  # Skoðum skráarupplýsingar
    echo "</pre>";
    // define the path to the upload folder
    $destination = $_SERVER['DOCUMENT_ROOT'] . "/2t/2512982709/VEF2A3U/myndavefur/img/";  # Þú þarft að breyta slóð.
    // svo við getum notað class með t.d. move() fallið og getMessage() ogsfrv...
    require_once 'File/Upload.php';
    // Because the object might throw an exception
    try {
        // búum til upload object til notkunar.  Sendum argument eða slóðina að upload möppunni sem á að geyma skrá
        $loader = new Upload($destination);
        // köllum á og notum move() fallið sem færir skrá í upload möppu, þurfum að gera þetta strax.
        $loader->upload();
        // köllum á getMessage til að fá skilaboð (error or not).
        $result = $loader->getMessages();

    } catch (Exception $e) {
        echo $e->getMessage();  # ef við náum ekki að nota Upload class
    }
}
  
?>
<!DOCTYPE html>
<html>
	<head>
	<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-2" />
	<title>User</title>
	<meta charset="utf-8">

			<link rel="stylesheet" type="text/css" href="css/materialize.css">
	</head>

	<body <body style=" background: url(img/<?php echo $selectedBg; ?>) no-repeat;"> 

		<?php
			include 'include/menu.php';
		?>
		<p align="center">&nbsp;</p><div align="center">
		<p align="center">&nbsp;</p></div><div align="center"> <strong>Velkomin/nn tilbaka <?php echo $login->username; ?>,</strong><br />
		    Takk fyrir að skrá þig inn.<br><br>
		  
		</div><div align="center">

		<a href="skraut.php"  class="button">Logout</a></div>


		</div>
		<?php include'include/footer.php';?>		
	</body>
</html>
