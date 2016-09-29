<?php
$servername = "tsuts.tskoli.is";
$username = "2512982709";
$password = "mypassword";
$databasename = "2512982709_vef2a3u";

try 
	{
		$connection = new PDO("mysql:host=$servername;dbname=$databasename", $username, $password);
		$connection->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
		echo "";
	}
catch (PDOException $e)
	{
		echo "connection failed" . $e->getMessage();	
	}
?>