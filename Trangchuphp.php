<?php
	$server = "localhost";
	$user = "root";
	$pwd = "";
	$dbName = "vietnamesecultures";
	$db = new mysqli($server, $user, $pwd, $dbName);
	$sql = "SELECT * FROM nguoidung;"; 
	$resuilt = $db->query($sql)->fetch_all();
	
?>