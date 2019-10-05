<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="style.css">
    <title>Document</title>
</head>
<style>
    #container-all-team-2  div {
            height: 80px;
            width: 90vw;
            background: salmon;
            margin: 0 auto;
            text-align: center;
        } 
        #container-all-team-2 div:nth-child(even) { 
            background: lightblue;
        }
</style>

<body>
    <div id="container-all-team-2" class="container center col">
        <?php 
      for($i=1; $i < 11; $i++){

        if ($i%2 === 0) { 
            echo "<div>${i}</div>";
        } else  {
            echo "<div style='color:red'>${i}</div>";
        }
       
    }
       ?>
    </div>
</body>

</html>