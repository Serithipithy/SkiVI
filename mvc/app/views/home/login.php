<!DOCTYPE html>
<html lang="en">
<?php 
echo "muie si tie";
?>
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../styles/skivi2.css" type="text/css">
    <link rel="stylesheet" href="../styles/header.css" type="text/css">
    <link rel="stylesheet" href="../styles/skivilog.css" type="text/css">
    <title>SkiVi | Login</title>
</head>

<body>
    <header>
        <nav>
            <ul>
                <li><a href="#contact" class="contact--button">Contact</a></li>
            </ul>
            <div><img class="logo" src="../assets/img/logo.png" alt="logo"></div>
            <div class="openMenu"><img class="hamburger--menu" src="../assets/img/menu.png" alt="menu button"></div>
            <ul class="mainMenu">
                <li><a href="main.html">Learn</a></li>
                <li><a href="signup.html">Sign Up</a></li>
                <li class="closeMenu"><img class="hamburger--menu" src="../assets/img/close-button.png" alt="close button"></li>
            </ul>
        </nav>
    </header>


    <main>
        <div class="formular--box">
            <form>
                <p class="title">Log In</p>
                <label>E-mail</label>
                <input type="email" placeholder="Your email">
                <label>Password</label>
                <input type="password" placeholder="Your password">
                <button type="submit">Submit</button>
            </form>
            <p class="extra--info">Don't have an acount? Please click <a href="signup.html">here</a> to Sign up.</p>
        </div>
    </main>


    <footer id="contact" >
        <div class="footer--contact">
            <div class="mail--creators"> Contact creators </div>
            <div class="contact--list">
                <p class="mail--creators">Mosoiu Alexandra : alexandramosoiu19@gmail.com</p>
                <p class="mail--creators">Iordan Cosmina: cosmina.iordan03@gmail.com</p>
            </div>
        </div>
        <div class="footer--contact footer--sourcecode">
            Source-Code: <a class="footer-code" href="https://github.com/Serithipithy/SkiVI-Skill-Virtual-Instructor-">GitHub</a>
        </div>
    </footer>
    <section class="project">
        <h5>Web Technologies project | 2021</h5>
    </section>

    <script src="../scripts/navbar.js"></script>

</body>

</html>