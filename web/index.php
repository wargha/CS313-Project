
   
   <html lang="en">

    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.2/css/all.css"
            integrity="sha384-oS3vJWv+0UjzBfQzYUhtDYW+Pj2yciDJxpsK1OYPAYjqT085Qq/1cq5FLXAZQ7Ay" crossorigin="anonymous">
        <title>About Me</title>
        <link rel="stylesheet" href="./styles/style.css">
        <link href="https://fonts.googleapis.com/css?family=Fjalla+One|Rubik&display=swap" rel="stylesheet">
    </head>

    <body>
        <header class="container row"><span class="name">Lucas Wargha</span>
            <div class="container row wrap-personal-header">
                <a href="assignments.php" >ASSIGNMENTS</a>
                <span class="anchor hover" onclick="goToAnchor('about-me')" >ABOUT ME</span>
                <span class="anchor hover" onclick="goToAnchor('interests')" >INTERESTS</span>
                <span class="anchor hover" onclick="goToAnchor('contact-me')" >CONTACT</span>
            </div>
            <div class="container row social-media"><i class="hover fab fa-linkedin fa-3x"></i><i
                    class="hover fab fa-facebook fa-3x"></i></div>
        </header>
        <section id="intro-me" class="container col center">
            <div class="container my-photo"></div><span>Lucas Wargha </span>
            <div class="line-below"></div>
            <p>Changing the world
                one line of code

                at a time.</p>
        </section>
        <section id="about-me" class="container col">
            <h3>About Me</h3>
            <div class="line-below"></div>
            <div class="container description row">
                <p>Enthusiastic Software Developer with recent experience in the computer software industry. Skilled in
                    Document Object Model (DOM),
                    and different Javascript frameworks and C++/Java with focus on business logic. Fluent in Portuguese,
                    English,
                    and Spanish. Currently studying Software Engineering at Brigham Young University - Idaho. Passionate
                    about learning,
                    growing and finding joy in life. </p>
                <ul>
                    <li>Lorem ipsum dolor sit amet consectetur adipisicing elit. Ipsa, reiciendis! Rem provident illo quisquam excepturi, eaque odit veniam velit nobis!</li>
                    <li>Lorem ipsum dolor sit amet consectetur adipisicing elit. Ipsa, reiciendis! Rem provident illo quisquam excepturi, eaque odit veniam velit nobis!</li>
                    <li>Lorem ipsum dolor sit amet consectetur adipisicing elit. Ipsa, reiciendis! Rem provident illo quisquam excepturi, eaque odit veniam velit nobis!</li>
                </ul>
            </div>
        </section>
        <section id="interests" class="container col">
            <h3>Interests</h3>
            <div class="line-below"></div>
            <div class="container description row">
                <ul>
                    <li>Technology: I thrive on getting to know the latest trends in technology and passionate about
                        being part of them.</li>
                    <li>Soccer: I enjoy everything about soccer. I love playing it or watching/following the latest news
                        on it.</li>
                </ul>
                <ul>
                    <li>Service: I enjoy serving and participating in community/religious projects to benefit other
                        people. In the end, I am the most affected by such service. “Some fragrance always lingers in
                        the hand that gives roses...” </li>
                    <li>Family: I got married to the sweetest girl on the planet in April 2019 and my life revolves on
                        making my home a piece of heaven and my family happy.</li>
                </ul>
            </div>
        </section>
        <section id="contact-me" class="container col">
            <h3>Contact Me</h3>
            <div class="line-below"></div>
            <form id="form" action="index.php#form" method="POST" class="container col center"><input type="text" placeholder="Name"><input type="text"
                    placeholder="Email"><textarea name="" id="" cols="30" rows="10"
                    placeholder="Message"></textarea><button type="submit" name="SubmitButton">Send</button></form>

                    <?php
$message = "";
if(isset($_POST['SubmitButton'])){
    echo "<span style='text-align: center'>Your Message Has Been Submitted!</span>"; //check if form was submitted
}    
?>
        </section>
        <footer class="container center"><span>Copyright @ Lucas Wargha </span></footer>
        <script src="script.js"></script>
    </body>

    </html>