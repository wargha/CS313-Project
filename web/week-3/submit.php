<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
<?php 
if(isset($_POST['SubmitButton'])){
    echo "<span style='text-align: center'>Your Message Has Been Submitted!</span> <br>";
    echo "<p> Thanks " . $_POST['name'] . " for submitting this form!</p>";
    echo "<p> Your selected major is " . $_POST['major'] . "</p>";
    echo "<p> Your email is " . $_POST['email'] . "</p>";
    echo "<p> Your comments are " . $_POST['comments'] . "</p>";
    $continents = $_POST['continent'];
    $places = array("na"=>"Norht America", "sa"=>"South America", "eu"=>"Europe", "as"=>"Asia", "au"=>"Australia", "af"=>"Africa", "an"=>"Antartica");
    foreach ($continents as $continent) { 
        foreach($places as $lucas => $value) {  
            if ($continent == $lucas) echo "<p> - " . $value . "</p>";   
        } 
    }
    
}    
?>
</body>
</html>
