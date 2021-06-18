<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta http-equiv="Cache-control" content="public">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" 
    content="SkiVi is a WebApp created for people to learn.">
    <link rel="stylesheet" href="<?php echo STYLEROOT;?>/css/skivi2.css" type="text/css">
    <link rel="stylesheet" href="<?php echo STYLEROOT;?>/css/header.css" type="text/css">
    <link rel="stylesheet" href="<?php echo STYLEROOT;?>/css/add.css" type="text/css">
    <title>SkiVi | Delete</title>
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
                <li><a href="<?php echo URLROOT;?>/users/myaccount">My Account</a></li>
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
    <main class="addCourse">
        <div class="delete--formular--box">
            <form>
                <p class="title">Delete a Course</p>
                <p class="explanation">Here you can delete a course</p>
                <p class="explanation position" id="statusText"></p>
                <label>Skill name</label>
                <select name="skill_name" id="skill_name" onchange="choosenSkill()">
                    <option value="">--Please choose a skill--</option>
                    <option value="skill1">First Aid</option>
                    <option value="skill2">Origami</option>
                    <option value="skill3">Sign Language</option>
                </select>
                <label>Course title</label>
                <select name="course_title" id="course_title">
                    <option value="">--Please choose a course--</option>
                </select>
                <button id="submit" value="submit" type="button">Submit</button>
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
            Documentation: <a class="footer-code" href="<?php echo URLROOT;?>/pages/raport">Raport</a>
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
    <script src="<?php echo STYLEROOT;?>/js/updateOptions.js"></script>
    <script src="<?php echo STYLEROOT;?>/js/delete.js"></script>
    
</body>

</html>