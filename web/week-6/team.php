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
    <style>
        .container {
            display: flex;
        }

        .center {
            justify-content: center;
        }

        .col {
            flex-flow: column;
        }

        input {
            margin-bottom: 20px;
        }
    </style>
</head>

<body>
    <form class="container center col" method="POST" action="team2.php">
        <input type="text" name="book" id="" placeholder="Enter scripture Book">
        <input type="number" name="chapter" id="" placeholder="Enter scripture chapter">
        <input type="number" name="verse" id="" placeholder="Enter scripture verse">
        <input type="text" name="content" id="" placeholder="Enter scripture content">
        <?php
        echo "<div class='container'>";
        foreach ($db->query('SELECT * FROM topic') as $row) {
            echo '<input type="checkbox" name="topic" id="">' . $row['name'];
        }
        echo "</div>";
        ?>
        <button type="submit">envia essa lixeira</button>
    </form>

</body>

</html>