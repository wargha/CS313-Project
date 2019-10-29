<?php
 require("databaseLoader.php");
$db = get_db();


$username = $_POST['id'];
$password = $_POST['password'];

 echo $username;
 echo $password;

 foreach ($db->query("SELECT * FROM team_users WHERE username = '$username'") as $row) { 
	$pw_check = $row['password'];
	echo $pw_check;
	echo "===========" . $password;
	if (password_verify($pw_check, $password)) { 
		header('Location: welcome.php');
	} else  {
		echo "wrong password SALAME!";
	}
 }
