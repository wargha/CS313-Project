<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Scriptures</title>
    <h3>Scriptures Resources</h3>
    <?php 
    echo "HERE!!!";
    require "database.php";
    
    $db = get_db();
    echo "HERE!!!";
    $sql = "SELECT id, book, chapter, verse, content FROM scriptures";
    
    $rs = pg_query($db, $sql) or die("Cannot execute query: $sql\n");

    while ($row = pg_fetch_row($rs)) {
      echo "$row[0] $row[1] $row[2]\n";
    }
    
    pg_close($db); 

    // $result = $db->prepare($sql);
    // echo("asfasfasf");
    // $result->execute();
    //     // output data of each row
    //     echo("cheguei");
    //     while($row = $result->fetch(PDO::FETCH_ASSOC)) {
    //         echo "id: " . $row["id"]. " - Name: " . $row["book"]. " " . $row["chapter"]. "<br>";
    //     }
    ?>
</head>
<body>
    
</body>
</html>