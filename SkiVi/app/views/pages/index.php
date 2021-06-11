<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="<?php echo STYLEROOT;?>/css/skivi2.css" type="text/css">
    <link rel="stylesheet" href="<?php echo STYLEROOT;?>/css/header.css" type="text/css">
    <style>
    a    {
        text-decoration:none;
        }
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
                <li><a href="<?php echo URLROOT;?>/pages/myaccount">My Account</a></li>
                <li>
                <?php if(isset($_SESSION['user_id'])) : ?>
                    <a href="<?php echo URLROOT;?>/pages/addCourse">Add Course</a>
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
        <a href="#" class="to-top">Back to top</a>
        <div class="image--slides">
            <img class="image-in-slide" src="<?php echo STYLEROOT;?>/assets/img/bg-image3.jpg" alt="a man reading a book">
            <div class="over--image--slides">
                <a href="#learning--plans" class="button--middle">Get Started!</a>
            </div>
        </div>
        <section id="learning--plans">

            <h1>Choose your plan</h1>
            <div>
                <h2>Train yourself</h2>
            </div>
            <div class="skills">
                <div class="skill">
                    <a href="<?php echo URLROOT;?>skill.html"> <img class="skill--image" src="<?php echo STYLEROOT;?>/assets/img/Layer.jpg" alt="skill1"></a>
                    <h2>Titlu</h2>
                    <p class="skill--info">
Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor
                        in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.
                    </p>
                    <a href="<?php echo URLROOT;?>/skill.html" class="buttons--skill">Start learning</a>
                </div>
                <div class="skill">
                    <img class="skill--image" src="<?php echo STYLEROOT;?>/assets/img/Layer.jpg" alt="skill2">
                    <h2>Titlu</h2>
                    <p class="skill--info">
Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor
                        in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.
                    </p>
                    <a href="<?php echo URLROOT;?>/skill.html" class="buttons--skill">Start learning</a>
                </div>
                <div class="skill">
                    <img class="skill--image" src="<?php echo STYLEROOT;?>/assets/img/Layer.jpg" alt="skill3">
                    <h2>Titlu</h2>
                    <p class="skill--info">
Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor
                        in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.
                    </p>
                    <a href="<?php echo URLROOT;?>/skill.html" class="buttons--skill">Start learning</a>
                </div>
            </div>

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
