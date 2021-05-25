<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="<?php echo STYLEROOT;?>/css/skivi2.css" type="text/css">
    <link rel="stylesheet" href="<?php echo STYLEROOT;?>/css/skivimyaccount.css" type="text/css">
    <link rel="stylesheet" href="<?php echo STYLEROOT;?>/css/header.css" type="text/css">
    <title>SkiVi | My account</title>
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
                <li><a href="<?php echo URLROOT;?>/users/signup">Sign Up</a></li>
                <li><a href="<?php echo URLROOT;?>/users/login">Log In</a></li>
                <li class="closeMenu"><img class="hamburger--menu" src="<?php echo STYLEROOT;?>/assets/img/close-button.png" alt="close button"></li>
            </ul>
        </nav>
    </header>

    <main>
        <a href="#" class="to-top">Back to top</a>
        <section class="myaccount--banner">
            <h1 class="myaccount--banner--dimensioning">My Account</h1>
            <h4 class="myaccount--banner--dimensioning">Edit your account settings and change your password here</h4>
        </section>

        <div class="account--container">
            <div class="account--profile">
                <img src="<?php echo STYLEROOT;?>/assets/img/profile-picture.jpg" alt="profile picture" class="profile--picture" />
                <p class="account--username">YourUsername</p>
            </div>
            <form>
                <p class="account--mail">Youremailhere@gmail.com</p>
                <input type="text" placeholder="New username...">
                <input type="password" placeholder="Change password...">
                <input type="password" placeholder="Confirm password...">
                <button type="submit">Save changes</button>
            </form>
        </div>

        <section class="account-skills">
            <span>My Skills</span>
            <div class="skill--stats">
                <div class="skill--container">
                    <h2>First aid</h2>
                    <div class="progress--status">
                        <p>Progress</p>
                        <progress id="file1" max="100" value="70">70%</progress>
                    </div>
                    <div class="last---watched">
                        <p>Last video watched: </p> <a href="https://www.youtube.com/watch?v=bSqHJaGyC_A" class="link">Title last video watched</a>
                    </div>
                    <img src="<?php echo STYLEROOT;?>/assets/img/play-button.png" alt="play" class="play-pause--button" />
                    <img src="<?php echo STYLEROOT;?>/assets/img/pause-button.png" alt="play" class="play-pause--button" />
                </div>
                <img src="<?php echo STYLEROOT;?>/assets/img/skill1.jpg" alt="skill 1 imagine" class="skill--image" />
            </div>

            <div class="skill--stats">
                <div class="skill--container">
                    <h2>Wine tasting</h2>
                    <div class="progress--status">
                        <p>Progress</p>
                        <progress id="file2" max="100" value="38">38%</progress>
                    </div>
                    <div class="last---watched">
                        <p>Last video watched: </p> <a href="https://www.youtube.com/watch?v=bSqHJaGyC_A" class="link">Title last video watched</a>
                    </div>
                    <img src="<?php echo STYLEROOT;?>/assets/img/play-button.png" alt="play" class="play-pause--button" />
                    <img src="<?php echo STYLEROOT;?>/assets/img/pause-button.png" alt="play" class="play-pause--button" />
                </div>
                <img src="<?php echo STYLEROOT;?>/assets/img/skill2.jpg" alt="skill 1 imagine" class="skill--image" />
            </div>

            <div class="skill--stats">
                <div class="skill--container">
                    <h2>Flight attendant</h2>
                    <div class="progress--status">
                        <p>Progress</p>
                        <progress id="file3" max="100" value="91">91%</progress>
                    </div>
                    <div class="last---watched">
                        <p>Last video watched: </p> <a href="https://www.youtube.com/watch?v=bSqHJaGyC_A" class="link">Title last video watched</a>
                    </div>
                    <img src="<?php echo STYLEROOT;?>/assets/img/play-button.png" alt="play" class="play-pause--button" />
                    <img src="<?php echo STYLEROOT;?>/assets/img/pause-button.png" alt="play" class="play-pause--button" />
                </div>
                <img src="<?php echo STYLEROOT;?>/assets/img/skill3.jpg" alt="skill 1 imagine" class="skill--image" />
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