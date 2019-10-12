<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="style.css">
    <title>Team Activity - 3 </title>
</head>
<style>

</style>

<body>
    <div id="container-all-team-3" >
        <form action="submit.php" name="submit" method="POST" class="container center col">
            <input placeholder="Name" type="text" name="name" id="idName">
            <input placeholder="Email" type="text" name="email" id="idEmail">
            <span>Major</span>
            <?php 
            
            $majors = array("Computer Science", "Web Design", "CIT", "Computer Engineering");
            foreach ($majors as $major) { 
                echo "<input type='radio' name='major' value=' . $major .' id='idWDD'>". $major . "<br>";
            }
            
            ?>

            <textarea name="comments" id="12412412" cols="30" rows="10" placeholder="Comments"></textarea>

            <span>Continents Visited</span>
            <input type="checkbox" name="continent[]" value="na">North America<br>
            <input type="checkbox" name="continent[]" value="sa" id="idWDD">South America <br>
            <input type="checkbox" name="continent[]" value="eu" id="idCIT">Europe <br>
            <input type="checkbox" name="continent[]" value="as" id="idCE">Asia <br>
            <input type="checkbox" name="continent[]" value="au" id="idCE">Australia <br>
            <input type="checkbox" name="continent[]" value="af" id="idCE">Africa <br>
            <input type="checkbox" name="continent[]" value="an" id="idCE">Antartica <br>
            <button type="submit" name="SubmitButton">Submit Form</button>
    </div>
    </form>
</body>

</html>

<?php 
