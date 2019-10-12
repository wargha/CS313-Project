<?php

$disable ="pushItem";
    session_start();
        // echo $_SESSION['array'];
    if (isset($_REQUEST["arr"])) { 
         $_SESSION['array'] = $_REQUEST['arr'];
    }

    if ($_SERVER['REQUEST_METHOD'] == 'GET') {
    // print (`<div style='display: none' id='getArray'> ` . $_SESSION['array'] . ` </div>`);
    }

?>

<?php 
$disable
?>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.2/css/all.css"
        integrity="sha384-oS3vJWv+0UjzBfQzYUhtDYW+Pj2yciDJxpsK1OYPAYjqT085Qq/1cq5FLXAZQ7Ay" crossorigin="anonymous">
    <title>Smash It Shopping Store</title>
    <link rel="stylesheet" href="style.css">
    <link href="https://fonts.googleapis.com/css?family=Fjalla+One|Rubik&display=swap" rel="stylesheet">
</head>
<!-- <iframe name="votar" style="display:none;"></iframe> -->

<body>
    <header class="container row"><span class="name">Smash - Digital Solutions</span>
        <div class="container row wrap-personal-header">
            <a href="assignments.php">ALL ASSIGNMENTS</a>
            <span class="anchor hover" onclick="goToAnchor('#contact-me')">CONTACT US</span>
        </div>
        <!-- <div onclick="toggleCart()" class="container row social-media"><i class="fas fa-shopping-cart fa-2x"></i>
            <span>My Cart</span> -->
        <!-- </div> -->
    </header>
    
    <section id="welcome-shopping" class="container col">
        <div class="container col welcome">
            <h4>Confirm purchase</h4>
            <p>Confirm your address for purchase. Otherwise, to continue browsing for more items, click <span onclick="goToPage(2)">here </span></p>
        </div>
        <form id="get-address" action="confirmation.php" class="container col center" method="GET">
            <input name="street" type="text" placeholder="Street">
            <input name="city" type="text" placeholder="City">
            <input name="zip" type="text" placeholder="ZIP">
            <button class="submit-form" type="submit">Confirm Order</button>
        </form>
      
    </section>
    <section id="contact-me" class="container col">
        <h3>Contact us today</h3>
        <div class="line-below"></div>
        <form id="form" action="index.php#form" method="POST" class="container col center"><input type="text"
                placeholder="Name"><input type="text" placeholder="Email"><textarea name="" id="" cols="30" rows="10"
                placeholder="Message"></textarea><button type="submit" name="SubmitButton">Send</button></form>

        <?php
$message = "";
if(isset($_POST['SubmitButton'])){
    echo "<span style='text-align: center'>Your Message Has Been Submitted!</span>"; //check if form was submitted
}    
?>
        <footer class="container center"><span>Copyright @ Lucas Wargha</span></footer>
    </section>

    <script src="script.js"></script>
</body>

</html>