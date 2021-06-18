<?php
header("Cache-Control: max-age=2592000");
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" 
    content="SkiVi is a WebApp created for people to learn.">
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
            <!-- <div><img class="logo" src="<?php echo STYLEROOT;?>/assets/img/logo.png" alt="logo"></div> -->
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
        <a href="#" class="to-top">Back to top</a>
        <div class="image--slides">
            <img class="image-in-slide" src="<?php echo STYLEROOT;?>/assets/img/bg-image3.jpg" alt="background image">
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
                    <a href="<?php echo URLROOT;?>/skills/first_aid"> <img class="skill--image" src="<?php echo STYLEROOT;?>/assets/img/skill1.jpg" alt="First Aid image"></a>
                    <h2>First Aid</h2>
                    <p class="skill--info">
                    First aid is the first and immediate assistance given to any person suffering from either a minor or serious illness or injury, with care provided to preserve life, prevent the condition from worsening, or to promote recovery. ... First aid is generally performed by someone with basic medical training.
                    </p>
                    <a href="<?php echo URLROOT;?>/skills/first_aid" class="buttons--skill">Start learning</a>
                </div>
                <div class="skill">
                <a href="<?php echo URLROOT;?>/skills/origami"> <img class="skill--image" src="<?php echo STYLEROOT;?>/assets/img/skill2.jpg" alt="Origami image"></a>
                    <h2>Origami</h2>
                    <p class="skill--info">
                    Origami is the art of paper-folding. Its name derives from Japanese words ori (“folding”) and kami (“paper”). Traditional origami consists of folding a single sheet of square paper (often with a colored side) into a sculpture without cutting, gluing, taping, or even marking it.
                    </p>
                    <a href="<?php echo URLROOT;?>/skills/origami" class="buttons--skill">Start learning</a>
                </div>
                <div class="skill">
                <a href="<?php echo URLROOT;?>/skills/sign_language"> <img class="skill--image" src="<?php echo STYLEROOT;?>/assets/img/skill3.png" alt="Sign Language image"></a>
                    <h2>Sign Language</h2>
                    <p class="skill--info">
                    Sign languages (also known as signed languages) are languages that use the visual-manual modality to convey meaning. Sign languages are expressed through manual articulations in combination with non-manual elements.
                    </p>
                    <a href="<?php echo URLROOT;?>/skills/sign_language" class="buttons--skill">Start learning</a>
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
            Documentation: <a class="footer-code" href="<?php echo URLROOT;?>/pages/raport">Raport</a>
        </div>
        <div class="footer--contact footer--sourcecode">
            Source-Code: <a class="footer-code" href="https://github.com/Serithipithy/SkiVI-Skill-Virtual-Instructor-">GitHub</a>
        </div>
    </footer>
    <section class="project">
        <p class="project--text">Web Technologies project | 2021</p>
    </section>


    <script src="<?php echo STYLEROOT;?>/js/navbar.js"></script>


</body>

</html>
