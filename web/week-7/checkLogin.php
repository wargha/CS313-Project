<?php
 require("databaseLoader.php");
$db = get_db();


$username = $_POST['id'];
$password = password_hash($_POST['password'], PASSWORD_DEFAULT);

 echo $username;
 echo $password;

 foreach ($db->query("SELECT * FROM team_users WHERE username = '$username'") as $row) { 
	 echo "CHEGAY";
	$pw_check = $row['password'];
	if ($password == $pw_check) { 
		header('Location: welcome.php');
	} else  {
		echo "wrong password SALAME!";
	}
 }
