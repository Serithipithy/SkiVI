<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="<?php echo STYLEROOT;?>/css/skivi2.css" type="text/css">
    <link rel="stylesheet" href="<?php echo STYLEROOT;?>/css/header.css" type="text/css">
    <link rel="stylesheet" href="<?php echo STYLEROOT;?>/css/restrict.css" type="text/css">
    <style>
</style>
    <title>SkiVi | Home</title>
</head>

<body>
    <header>
        <nav>
            <ul>
                <li><a href="#contact" class="contact--button">Contact</a></li>
            </ul>
            <div><img class="logo" src="<?php echo STYLEROOT;?>/assets/img/logo.png" alt="logo"></div>
            <div class="openMenu"><img class="hamburger--menu" src="<?php echo STYLEROOT;?>/assets/img/menu.png" alt="menu button"></div>
            <ul class="mainMenu">
                <li><a href="<?php echo URLROOT;?>/pages/index">Learn</a></li>
                <li>
                    <?php if(isset($_SESSION['user_id'])) : ?>
                    <a href="<?php echo URLROOT;?>/users/myaccount">My Account</a>
                    <?php endif; ?>
                </li>
                <li>
                <?php if(isset($_SESSION['admin']) && $_SESSION['admin'] == 'yes') : ?>
                    <a href="<?php echo URLROOT;?>/skills/manage">Manage</a>
                <?php endif; ?>
                </li>
                <li>
                    <?php if(!isset($_SESSION['user_id'])) : ?>
                    <a href="<?php echo URLROOT;?>/users/signup">Sign Up</a>
                    <?php endif; ?>
                </li>
                <li>
                    <?php if(isset($_SESSION['user_id'])) : ?>
                        <a href="<?php echo URLROOT;?>/users/logout">Log Out</a>
                    <?php else : ?>
                        <a href="<?php echo URLROOT;?>/users/login">Log In</a>
                    <?php endif; ?>
                </li>
                <li class="closeMenu"><img class="hamburger--menu" src="<?php echo STYLEROOT;?>/assets/img/close-button.png" alt="close button"></li>
            </ul>
        </nav>
    </header>
    <main>

    <section class="main">
        <h1 class="restrictMessage">404 YOU ARE NOT ALLOWED TO ACCESS THIS PAGE!</h1>
        <h2 class="serverMessage"><?php echo $data;?></h2>
    </section>
    
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