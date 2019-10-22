<?php
    require "databaseLoader.php";
    $db = get_db();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <input type="text" name="" id="" placeholder="Enter scripture Book">
    <input type="number" name="" id="" placeholder="Enter scripture chapter">
    <input type="number" name="" id="" placeholder="Enter scripture verse">
    <input type="text" name="" id="" placeholder="Enter scripture content">
    <input type="checkbox" name="" id=""> Faith
    <input type="checkbox" name="" id=""> Charity
    <input type="checkbox" name="" id=""> Sacrifice

<?php
   echo "loco";
foreach ($db->query('
SELECT * FROM topics') as $row) {
    echo "1";
echo $row['name'];
}
?>
</body>
</html>