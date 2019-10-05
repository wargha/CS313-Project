<?php

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
        <div onclick="toggleCart()" class="container row social-media"><i class="fas fa-shopping-cart fa-2x"></i>
            <span>My Cart</span>
        </div>
    </header>
    <div class="container col shopping-card"  id="insert-items">
        <h4>Your Shopping Card</h4>
       <div class="container row header-table">
           <span>Qtd: </span>
           <span>Item: </span>
           <span>Price: </span>
       </div>
       <?php
            if (isset($_SESSION['array'])) { 
               
                $arr = explode(',', $_SESSION['array']);
                if (count($arr) > 0 && !empty($_SESSION['array'])){
                foreach ($arr as $item) { 
                 echo "<div class='container row items-cart'>";
                    echo "<span>1</span>";
                    echo "<span>" . $item . "</span>";
                    echo "<span>$2000</span>";
                    echo "</div>";
                }
 
                echo "<button onclick='goToPage(1)'>Edit Cart / Check Out </button>";

           }
        }
           ?>
    </div>
    <section id="welcome-shopping" class="container col">
        <!-- <img src="./assets/png.png" alt="" class="logo"> -->
        <div class="container col welcome">
            <h4>Smash takes your business to the next level.</h4>
            <p> Here you will find the newest generation on SaaS products for you to <span>Just Smash It! </span></p>
        </div>
        <!-- target="votar" -->
        <div name="form-items" method="POST" action="index.php" class="container row center wrap-items">
            <div class="container col single-item">
                <h4>Full Website Creation</h4>
                <p>We can help your business to get known on google and other search engines by using the best SEO
                    techniches available in the market. Contact our support team to know how you can triple your traffic
                    in less than 2 months.</p>
                <img src="https://thimpress.com/wp-content/uploads/2018/10/web-design-tweaks.jpg" alt="">
                <button onclick="pushItem('website')" value="1">Get it now!</button>
            </div>
            <div class="container col single-item">
                <h4>Custom Data Analytics Report</h4>
                <p>We can generate custom big data analytics to help you make the best decisions based on real data and
                    advanced business intelligence skills that our team of experts have. You can easily add up to 20% in
                    your revenue by using our tools. </p>
                <img src="https://tdwi.org/articles/2019/05/14/-/media/TDWI/TDWI/BITW/analytics7.jpg" alt="">
                <button onclick="pushItem('analytics')">Get it now!</button>
            </div>
            <div class="container col single-item">
                <h4>Business API Set Up</h4>
                <p>We help you set up a robust API to help you interact with different web applications and gadgets to
                    your specific needs. We gather the best tools currently available to create the solution that fits
                    your business! Having a solid API setup will speed up all IT tasks!</p>
                <img src="https://www.cequens.com/hubfs/API.png" alt="">
                <button onclick="pushItem('api')">Get it now!</button>
            </div>
        </div>
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