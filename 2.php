<?#php include_once 'include/connect.php';?>
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
		<title>undirsida</title>
				<meta charset="utf-8">

		<link rel="stylesheet" type="text/css" href="css/materialize.css">
		<link rel="stylesheet" type="text/css" href="css/still.css">

	</head>
	<body>
	<?php include'include/menu.php';
		  include'include/random_img.php';		  
	?>	
	<?php
        // Keyrir bara ef það er búið að smella á submit 
        if (isset($result)) {
            echo '<ul>';
            //  Birta skilboðin úr messages array (Upload class).
            foreach ($result as $message) {
                echo "<li>$message</li>";
            }
            echo '</ul>';
        }
    ?>
    <form action="" method="post" enctype="multipart/form-data" id="uploadImage">
        <p>
            <label for="image">Upload image:</label>
            <input type="file" name="image" id="image">
        </p>
        <p>
            <input type="submit" name="upload" id="upload" value="Upload">
        </p>
    </form>
	<?php include'include/footer.php';?>
	</body>
</html>