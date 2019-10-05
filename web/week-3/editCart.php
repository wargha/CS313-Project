<?php


$disable ="pushItem";
    session_start();
    // $_SESSION['test'] = 42;
        // echo $_SESSION['array'];
    // if (isset($_REQUEST["arr"])) { 
    //      $_SESSION['array'] = $_REQUEST['arr'];
    // }

    if (isset($_GET["remove"])) { 
        // echo $_SESSION['array'];
        // echo $_GET["remove"];
        $arr = explode(',', $_SESSION['array']);
        if (($key = array_search( $_GET["remove"], $arr)) !== false) {
            unset($arr[$key]);
            $_SESSION['array'] = implode(',', $arr);
        }
        // echo $_SESSION['array'];
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
        <div onclick="toggleCart()" class="container row social-media"><i class="fas fa-shopping-cart fa-2x"></i>
            <span>My Cart</span>
        </div>
    </header>
    <div class="container col shopping-card" id="insert-items">
        <h4>Your Shopping Card</h4>
        <div class="container row header-table">
            <span>Qtd: </span>
            <span>Item: </span>
            <span>Price: </span>
        </div>
        <?php
           if (isset($_SESSION['array'])) { 
               
               $arr = explode(',', $_SESSION['array']);
               if (count($arr) > 0 && !empty($_SESSION['array'])) {
               foreach ($arr as $item) { 
                echo "<div class='container row items-cart'>";
                   echo "<span>1</span>";
                   echo "<span>" . $item . "</span>";
                   echo "<span>$2000</span>";
                   echo "</div>";
               }
             }
           }
           ?>
    </div>
    <section id="welcome-shopping" class="container col">
        <div class="container col welcome">
            <h4>Confirm or Edit your Cart before proceeding to check out.</h4>
            <p>To continue browsing, click <span class='hover' onclick="goToPage(2)">here </span></p>
        </div>
        <form id="changeCart" action="checkout.php" method="POST">
            <span>Qtd</span>
            <span>Item</span>
            <span>Price</span>
            <span>Remove</span>
            <?php
        if (isset($_SESSION['array'])) { 
               $arr = explode(',', $_SESSION['array']);
               if (count($arr) > 0 && !empty($_SESSION['array'])) {
                
               foreach ($arr as $item) { 
                   echo " <input type='number' name='' id='' min=1 value=1>";
                   echo "<span>" . $item . "</span>";
                   echo "<span>$2000</span>";
                   echo "<a href='editCart.php?remove=" . $item .  "' class='delete'>Delete Item</a>";
               }
            }
           }
           ?>

        </form>
        <button onclick="goToPage(3)" class="submit-form" type="submit">Proceed to Check Out</button>
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