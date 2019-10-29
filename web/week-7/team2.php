<?php
 require("databaseLoader.php");
$db = get_db();


$username = $_POST['id'];
$password = password_hash($_POST['password'], PASSWORD_DEFAULT);

 echo $username;
 echo $password;

try {
$query = 'INSERT INTO team_users (username, password) VALUES(:username, :password)';
$statement = $db->prepare($query);
$statement->bindValue(':username', $username);
$statement->bindValue(':password', $password);
$statement->execute();

} catch (Exception $ex)
{ 
	echo "Error with db. Details:  $ex";
	die();
}
