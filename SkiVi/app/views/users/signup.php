<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="<?php echo STYLEROOT;?>/css/skivi2.css" type="text/css">
    <link rel="stylesheet" href="<?php echo STYLEROOT;?>/css/header.css" type="text/css">
    <link rel="stylesheet" href="<?php echo STYLEROOT;?>/css/skivilog.css" type="text/css">
    <title>SkiVi | Sign Up</title>
</head>

<body>
    <header>
        <nav>
            <ul>
                <li><a href="#contact" class="contact--button">Contact</a></li>
            </ul>
            <div><img class="logo" src="../assets/img/logo.png" alt="logo"></div>
            <div class="openMenu"><img class="hamburger--menu" src="<?php echo STYLEROOT;?>/assets/img/menu.png" alt="menu button"></div>
            <ul class="mainMenu">
                <li><a href="<?php echo URLROOT;?>/pages/index">Learn</a></li>
                <li><a href="<?php echo URLROOT;?>/users/login">Log In</a></li>
                <li class="closeMenu"><img class="hamburger--menu" src="<?php echo STYLEROOT;?>/assets/img/close-button.png" alt="close button"></li>
            </ul>
        </nav>
    </header>

    <main>
        <div class="formular--box--sign--up">
            <form action="<?php echo URLROOT?>/users/signup" method = "POST">
                <p class="title">Sign up</p>
                <label>Username</label>
                <input type="text" placeholder="Your username" name="username">
                    <span class="error-messages"> 
                        <?php echo $data['usernameError'];?>
                    </span>
                <label>E-mail</label>
                <input type="email" placeholder="Your email" name="email">
                    <span class="error-messages"> 
                        <?php echo $data['emailError'];?>
                    </span>
                <label>Password</label>
                <input type="password" placeholder="Your password" name="password">
                    <span class="error-messages"> 
                        <?php echo $data['passwordError'];?>
                    </span>
                <button type="submit">Submit</button>
            </form>
            <p class="extra--info">You already have an account? Please click <a href="<?php echo URLROOT;?>/users/login">here</a> to Log In.</p>
        </div>
    </main>

    <footer id="contact">
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

    <script src="<?php echo STYLEROOT;?>/js/navbar.js"></script>

</body>

</html>