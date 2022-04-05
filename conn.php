<?php
	$db_username = 'newuser';
	$db_password = 'password';
	$conn = new PDO( 'mysql:host=localhost;dbname=user', $db_username, $db_password );
	if(!$conn){
		die("Fatal Error: Connection Failed!");
	}
?>