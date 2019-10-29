<?php
require("databaseLoader.php");
$db = get_db();


$id = $_POST['id'];
// $password = password_hash($_POST['password'], PASSWORD_DEFAULT);
 $password =$_POST['password'];


$query = 'INSERT INTO team_users (id, password) VALUES(:id, :password)';
$statement = $db->prepare($query);
$statement->bindValue(':id', $id);
$statement->bindValue(':password', $password);

$statement->execute();

echo "it worked";
