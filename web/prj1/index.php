<?php
require "database.php";
$db = get_db();
?>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Scriptures</title>
  <h3>Scriptures Resources</h3>
  <?php
  // echo "HERE!!!";

  foreach ($db->query('SELECT * FROM APP_USER') as $row) {
    echo 'user: ' . $row['name'];
    echo ' password: ' . $row['pw'];
    echo '<br/>';
  }

  ?>
</head>

<body>

</body>

</html>