<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="<?php echo STYLEROOT;?>/css/skivi2.css" type="text/css">
    <link rel="stylesheet" href="<?php echo STYLEROOT;?>/css/header.css" type="text/css">
    <link rel="stylesheet" href="<?php echo STYLEROOT;?>/css/add.css" type="text/css">
    <title>SkiVi | Add</title>
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
    <main class="addCourse">
        <div class="formular--box">
            <form>
                <p class="title">Add a new Course</p>
                <p class="explanation">Here you can add a new course to an already existing skill</p>
                <label>Skill name</label>
                <select name="skill_name" id="skill_name">
                    <option value="">--Please choose an option--</option>
                    <option value="skill1">First Aid</option>
                    <option value="skill2">Origami</option>
                    <option value="skill3">Sign Language</option>
                </select>
                <!-- <input type="text" placeholder="Skill name" name='skill_name'> -->
                <label>Course title</label>
                <input type="text" placeholder="Course title" id="title">
                <label>Video link(if there is any)</label>
                <input type="text" placeholder="Video link" id="link">
                <label>Course Content(text)</label>
                <textarea class="content" id="text" placeholder="Course Content"></textarea>
                <!-- <input class="content" type="text" placeholder="Course Content" name='content'> -->
                <button id="submit" value="submit">Submit</button>
            </form>
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
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="<?php echo STYLEROOT;?>/js/action.js"></script>
</body>

</html>