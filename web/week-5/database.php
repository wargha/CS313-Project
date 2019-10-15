<?php

function get_db() {
try
{
  $dbUrl = "postgres://blvpnjosnnmkyf:75053431fc7d7c56566c7f68602aa8895086c18a6cf5cdec23708827b3e8def5@ec2-54-83-201-84.compute-1.amazonaws.com:5432/db913sbg1ts4r2";

  $dbOpts = parse_url($dbUrl);

  $dbHost = $dbOpts["host"];
  $dbPort = $dbOpts["port"];
  $dbUser = $dbOpts["user"];
  $dbPassword = $dbOpts["pass"];
  $dbName = ltrim($dbOpts["path"],'/');

  $db = new PDO("pgsql:host=$dbHost;port=$dbPort;dbname=$dbName", $dbUser, $dbPassword);

  $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
}
catch (PDOException $ex)
{
  echo 'Error!: ' . $ex->getMessage();
  die();
}
return $db;
}

?>