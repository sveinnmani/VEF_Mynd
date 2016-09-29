<?php
	$myndir = [
		['file' => 'mynd1', 'caption' => 'Þetta er mynd1'],
		['file' => 'mynd2', 'caption' => 'Þetta er mynd2'],
		['file' => 'mynd3', 'caption' => 'Þetta er mynd3'],
		['file' => 'mynd4', 'caption' => 'Þetta er mynd4'],
	];
	$i = rand(0, count($myndir)-1);
	$selectedImage = "img/{$myndir[$i]['file']}.jpg";
	$caption = $myndir[$i]['caption'];
?>
<?php
	$bg = array('bg-01.jpg', 'bg-02.jpg', 'bg-03.jpg', 'bg-04.jpg'); // array of filenames

  	$i = rand(0, count($bg)-1); // generate random number size of the array
  	$selectedBg = "$bg[$i]"; // set variable equal to which random filename was chosen
?>
<!DOCTYPE html>
<html>
<head>
	<title>	</title>
</head>
<body>
<style type="text/css">
<!--
body{
background: url(img/<?php echo $selectedBg; ?>) no-repeat;
}
-->
</style>
</body>
</html>