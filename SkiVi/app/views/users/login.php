<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/skivi2.css" type="text/css">
    <link rel="stylesheet" href="../css/header.css" type="text/css">
    <link rel="stylesheet" href="../css/skivilog.css" type="text/css">
    <title>SkiVi | Login</title>
</head>

<body>
    <header>
        <nav>
            <ul>
                <li><a href="#contact" class="contact--button">Contact</a></li>
            </ul>
            <div><img class="logo" src="../assets/img/logo.png" alt="logo"></div>
            <div class="openMenu"><img class="hamburger--menu" src="../assets/img/menu.png" alt="menu button"></div>
            <ul class="mainMenu">
                <li><a href="<?php echo URLROOT;?>/pages/index">Learn</a></li>
                <li><a href="<?php echo URLROOT;?>/users/signup">Sign Up</a></li>
                <li class="closeMenu"><img class="hamburger--menu" src="../assets/img/close-button.png" alt="close button"></li>
            </ul>
        </nav>
    </header>


    <main>
        <div class="formular--box">
            <form action="<?php echo URLROOT?>/users/login" method = "POST">
                <p class="title">Log In</p>
                <label>Username</label>
                <input type="text" placeholder="Your username" name='username'>
                    <span> 
                        <?php echo $data['usernameError'];?>
                    </span>
                <label>Password</label>
                <input type="password" placeholder="Your password" name='password'>
                    <span> 
                        <?php echo $data['passwordError'];?>
                    </span>
                <button id="submit" type="submit" value="submit">Submit</button>
            </form>
            <p class="extra--info">Don't have an acount? Please click <a href="<?php echo URLROOT;?>/users/signup">here</a> to Sign up.</p>
        </div>
    </main>


    <footer id="contact" >
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

    <script src="../js/navbar.js"></script>

</body>

</html>