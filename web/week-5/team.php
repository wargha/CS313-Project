<?php
require "dbConnect.php";
$db = get_db();
?>
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
 
    $sql = "SELECT * FROM scripture";
    echo "HERE!!!1";
    $rs = pg_query($db, $sql) or die("Cannot execute query: $sql\n");
    echo "HERE!!!2";
    while ($row = $statement->fetch(PDO::FETCH_ASSOC))
    {
        // The variable "row" now holds the complete record for that
        // row, and we can access the different values based on their
        // name
        $book = $row['book'];
        $chapter = $row['chapter'];
        $verse = $row['verse'];
        $content = $row['content'];
        echo "<p><strong>$book $chapter:$verse</strong> - \"$content\"<p>";
    }
    
    pg_close($db); 
    
    ?>
</head>
<body>
    
</body>
</html>