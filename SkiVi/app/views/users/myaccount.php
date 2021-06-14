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
            <li>
                <?php if(isset($_SESSION['admin']) && $_SESSION['admin'] == 'yes') : ?>
                    <a href="<?php echo URLROOT;?>/skills/modify">Modify</a>
                <?php endif; ?>
            </li>
            <li><a href="<?php echo URLROOT;?>/users/logout">Log Out</a></li>
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
                <p class="account--username"><?php echo $_SESSION['username'];?></p>
            </div>
            <form action="<?php echo URLROOT?>/users/myaccount" method = "POST">
                <p class="account--mail"><?php echo $_SESSION['email'];?></p>
                <h6 class="succes-messages"> 
                    <?php echo $data['succesMessage'];?>
                </h6>
                <input type="password" placeholder="Current password..." name="currentPassword">
                    <h6 class="error-messages"> 
                        <?php echo $data['currentPasswordError'];?>
                    </h6>
                <input type="password" placeholder="New password..." name="newPassword">
                    <h6 class="error-messages"> 
                        <?php echo $data['newPasswordError'];?>
                    </h6>
                <input type="password" placeholder="Confirm password..." name="confirmPassword">
                    <h6 class="error-messages"> 
                        <?php echo $data['confirmPasswordError'];?>
                    </h6>
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
                        <progress id="first--aid--progress" max="100" value=<?php echo $data['progress-firstAid'];?>></progress>
                        <p><?php echo $data['progress-firstAid'];?>%</p>
                    </div>
                    <div class="last---watched">
                        <p>Go to Skill page </p> 
                        <a href="<?php echo URLROOT;?>/skills/first_aid" class="link">
                        <img src="<?php echo STYLEROOT;?>/assets/img/play-button.png" alt="play" class="play-pause--button" />
                        </a>
                    </div> 
                </div>
                <img src="<?php echo STYLEROOT;?>/assets/img/skill1.jpg" alt="skill 1 imagine" class="skill--image" />
            </div>

            <div class="skill--stats">
                <div class="skill--container">
                    <h2>Origami</h2>
                    <div class="progress--status">
                        <p>Progress</p>
                        <progress id="origami--progress" max="100" value=<?php echo $data['progress-origami'];?>></progress>
                        <p><?php echo $data['progress-origami'];?>%</p>
                    </div>
                    <div class="last---watched">
                        <p>Go to Skill page </p>
                        <a href="<?php echo URLROOT;?>/skills/origami" class="link">
                        <img src="<?php echo STYLEROOT;?>/assets/img/play-button.png" alt="play" class="play-pause--button" />
                        </a>
                    </div>
                </div>
                <img src="<?php echo STYLEROOT;?>/assets/img/skill2.jpg" alt="skill 1 imagine" class="skill--image" />
            </div>

            <div class="skill--stats">
                <div class="skill--container">
                    <h2>Sign Language</h2>
                    <div class="progress--status">
                        <p>Progress</p>
                        <progress id="sign--language--progress" max="100" value=<?php echo $data['progress-signLanguage'];?>></progress>
                        <p><?php echo $data['progress-signLanguage'];?>%</p>
                    </div>
                    <div class="last---watched">
                        <p>Go to Skill page </p>
                        <a href="<?php echo URLROOT;?>/skills/sign_language" class="link">
                        <img src="<?php echo STYLEROOT;?>/assets/img/play-button.png" alt="play" class="play-pause--button" />
                        </a>
                    </div>
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