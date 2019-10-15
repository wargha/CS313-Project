<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Scriptures</title>
    <h3>Scriptures Resources</h3>
    <?php 
    require "database.php";
    $db = get_db();
    $sql = "SELECT id, book, chapter, verse, content FROM scriptures";
    $result = $conn->query($sql);
    if ($result->num_rows > 0) {
        // output data of each row
        while($row = $result->fetch_assoc()) {
            echo "id: " . $row["id"]. " - Name: " . $row["book"]. " " . $row["chapter"]. "<br>";
        }
    } else {
        echo "0 results";
    }
    $conn->close();
    ?>
</head>
<body>
    
</body>
</html>