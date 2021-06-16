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
    <link rel="stylesheet" href="<?php echo STYLEROOT;?>/css/skivi2.css">
    <link rel="stylesheet" href="<?php echo STYLEROOT;?>/css/skiviskill.css">
    <link rel="stylesheet" href="<?php echo STYLEROOT;?>/css/header.css">
    <title>First Aid | SkiVi</title>
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
                    First aid is the first and immediate assistance given to any person suffering from either a minor or serious illness or injury, with care provided to preserve life, prevent the condition from worsening, or to promote recovery. ... First aid is generally performed by someone with basic medical training.
                    </p>
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
                   <h2 >';
                   //title
              echo $data[$i][0]; 
                   echo'</h2></div>
                   <div id="course--dropdown">
                   <div class="drop--bg">';
                  //video
                   if($data[$i][1]!=null){
                    //echo'<video controls> <source src="';
                       echo $data[$i][1];
                    //    echo'"type="video/mp4">
                    //    </video>';
                   }
                   //text
                   if($data[$i][2]!=null){ 
                        echo'<p class="course--txt">';
                        echo $data[$i][2] ;
                        echo'</p>';
                   }
                   if($param[$i]=='no'){
                    echo' <p class="course--txt"> <img src="';
                    echo STYLEROOT;
                    echo'/assets/img/exclamation.png" alt="exclamation" class="info"> After you finish the course please click the "Done" button from the right.</p>
                     <button id="done" name="';
                     echo $_SESSION['user_id'];
                     echo '~';
                     echo $data[$i][0]; 
                     echo'" class="btn--done" type="button" onclick="myFunction(this);"> Done </button>';
           
                   }
                   echo'</div>
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
            Documentation: <a class="footer-code" href="<?php echo URLROOT;?>/pages/raport">Raport</a>
        </div>
        <div class="footer--contact footer--sourcecode">
            Source-Code: <a class="footer-code" href="https://github.com/Serithipithy/SkiVI-Skill-Virtual-Instructor-">GitHub</a>
        </div>
    </footer>
    <section class="project">
        <h5>Web Technologies project | 2021</h5>
    </section>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="<?php echo STYLEROOT;?>/js/navbar.js"></script>
    <script src="<?php echo STYLEROOT;?>/js/first_aid_done_btn.js"></script>


</body>

</html>