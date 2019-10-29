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
    <?php

    session_start();
    echo "You are logged as: " . ucfirst($_SESSION['USERNAME']);
    ?>

</body>

</html>