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
        <input type="text" name="id" id="" placeholder="Enter ID">
        <input type="text" name="password" id="" placeholder="Enter Pw">
        <button type="submit">envia essa lixeira</button>
    </form>

</body>

</html>