<?php
 require("databaseLoader.php");
$db = get_db();


$id = $_POST['id'];
$password = password_hash($_POST['password'], PASSWORD_DEFAULT);

 echo $id;
 echo $password;


$query = 'INSERT INTO team_users (id, password) VALUES(:id, :password)';
$statement = $db->prepare($query);
echo "it worked";
$statement->bindValue(':id', $id);
$statement->bindValue(':password', $password);
$statement->execute();


