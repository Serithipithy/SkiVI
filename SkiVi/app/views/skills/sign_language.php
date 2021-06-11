<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="<?php echo STYLEROOT;?>/css/skivi2.css">
    <link rel="stylesheet" href="<?php echo STYLEROOT;?>/css/skiviskill.css">
    <link rel="stylesheet" href="<?php echo STYLEROOT;?>/css/header.css">
    <title>Sign Language | SkiVi</title>
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
                    <a href="<?php echo URLROOT;?>/pages/myaccount">My Account</a>
                    <?php endif; ?>
                </li>
                <li>
                <?php if(isset($_SESSION['user_id'])) : ?>
                    <a href="<?php echo URLROOT;?>/skills/addCourse">Add Course</a>
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
        <div class="title">
            <h1>Title</h1>
        </div>
        <div class="course--details">

            <div class="course--description--image">
                <img class="course--img" src="<?php echo STYLEROOT;?>/assets/img/Layer.jpg" alt="man reading">
                <div class="course--description">
                    <h2>Course Description</h2>
                    <p>
                        Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor
                        in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.
                    </p>
                </div>
            </div>
            <div class="course--content--needs">
                <div class="course--content">
                    <h2>This Course Contains</h2>
                    <ul>
                        <li> 10 ore de viziorane</li>
                        <li>40 de videoclipuri </li>
                        <li>10 lectii pentru acasa:))</li>
                    </ul>
                </div>
                <div class="course--content">
                    <h2>For this course you will need</h2>
                    <ul>
                        <li>ceva</li>
                        <li>altceva</li>
                        <li>nu stiu </li>
                    </ul>
                </div>
            </div>
        </div>
        <!-- <button class="button--middle">Get Courses</button> -->
        <div class="courses">
         
        <?php
        $size=count($data);
               for($i=0;$i<$size ;$i++){ 
               echo' <div class="dropdowns">
                    <div class="dropbtn--course">
                   <h2>';
              echo $data[$i][0]; 
                   echo'</h2></div>
                   <div id="course--dropdown">
                   <div class="drop--bg">';
                  
                   if($data[$i][1]!=null){
                       echo'<iframe allow="fullscreen" src="';
                       echo $data[$i][1];
                       echo'">
                       </iframe>';
                   }
                   if($data[$i][2]!=null){ 
                        echo'<p class="course--txt">';
                        echo $data[$i][2] ;
                        echo'</p>';
                   }
                  echo' <p class="course--txt"> <img src="';
                  echo STYLEROOT;
                  echo'/assets/img/exclamation.png" alt="exclamation" class="info"> After you finish the course please click the "Done" button from the right.</p>
                   <button class="btn--done" type="submit"> Done </button>
               </div>
           </div>
        </div>';

         }
            ?>
          
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
    <script src="<?php echo STYLEROOT;?>/js/script-skill.js"></script>


</body>

</html>