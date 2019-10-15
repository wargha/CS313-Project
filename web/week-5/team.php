<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Scriptures</title>
    <h3>Scriptures Resources</h3>
    <?php 
    // echo "HERE!!!";
    // require "database.php";
    
    $db = get_db();
    echo "HERE!!!";
    $sql = "SELECT * FROM scripture";
    
    $rs = pg_query($db, $sql) or die("Cannot execute query: $sql\n");

    while ($row = pg_fetch_row($rs)) {
      echo "$row[0] $row[1] $row[2]\n";
    }
    
    pg_close($db); 
    
    ?>
</head>
<body>
    
</body>
</html>