<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="SkiVi-> Skill Virtual Instructor documentation page." />
    <link rel="stylesheet" href="<?php echo STYLEROOT;?>/css/raport.css" type="text/css">
    <title>Schorlarly Raport</title>
</head>

<body prefix="schema: http://schema.org/ xsd: http://www.w3.org/2001/XMLSchema# sa: https://ns.science.ai/">
    <article typeof="schema:ScholarlyArticle">
        <h1>Skill Virtual Instructor</h1>
        <section typeof="sa:AuthorsList">
            <div role="contentinfo">
                <h2>Authors</h2>
                <p>
                    The following document was written to specify the requirements of the
                    <a href="https://iampava.com/web-technologies">
                    Skill Virtual Instructor</a> Web Technologies project.
                </p>
                <ul>
                    <li typeof="sa:ContributorRole" poperty="schema:author">
                        <span typeof="schema:Person">
                        <meta property="schema:givenName" content="Cosmina" />
                        <meta property="schema:familyName" content="Iordan" />
                        <span property="schema:name">Cosmina Iordan</span>
                        </span>
                        <ul>
                            <li property="schema:roleContactPoint" typeof="schema:ContactPoint">
                                <a href="mailto:cosmina.iordan03@gmail.com" property="schema:email">cosmina.iordan03@gmail.com</a>
                            </li>
                            <li property="schema:roleContactPoint" typeof="schema:ContactPoint">
                                <a href="mailto:cosmina.iordan@info.uaic.ro" property="schema:email">cosmina.iordan@info.uaic.ro</a>
                            </li>
                        </ul>
                    </li>
                    <li typeof="sa:ContributorRole" poperty="schema:author">
                        <span typeof="schema:Person">
                      <meta property="schema:givenName" content="Alexandra" />
                      <meta property="schema:familyName" content="Moșoiu" />
                      <span property="schema:name">Alexandra Moșoiu</span>
                        </span>
                        <ul>
                            <li property="schema:roleContactPoint" typeof="schema:ContactPoint">
                                <a href="mailto: alexandramosoiu19@gmail.com" property="schema:email"> alexandramosoiu19@gmail.com</a>
                            </li>
                            <li property="schema:roleContactPoint" typeof="schema:ContactPoint">
                                <a href="mailto:alexandra.mosoiu@info.uaic.ro" property="schema:email">alexandra.mosoiu@info.uaic.ro</a>
                            </li>
                        </ul>
                    </li>
                </ul>
            </div>
        </section>
        <section>
            <h2>Content</h2>
            <ol>
                <li><a href="#1">Introduction</a></li>
                <li><a href="#2">Overall Description</a></li>
                <li><a href="#3">External Interface Requirements</a></li>
                <li><a href="#4">System Features</a></li>
                <li><a href="#5">Other Nonfunctional Requirements</a></li>
                <li><a href="#6">UML DIAGRAM</a></li>
                <li><a href="#7">WEB.DEV SCORES</a></li>
                <li><a href="#8">Technologies</a></li>
                <li><a href="#9">Features</a></li>
                <li><a href="#10">Working with GIT</a></li>
                <li><a href="#11">Links</a></li>
            </ol>
        </section>
        <section typeof="sa:ReferenceList">
            <h2 id="1">1. Introduction</h2>
            <h3>1.1 Purpose</h3>
            <p>
                The main purpose of the project is to develop an application for learning different, unique and helpful skills and to make it more easier for the users to keep track of their leaning jurney.
            </p>
            <h3>1.2 Document Conventions</h3>
            <p>
                The documentation is made under the Scholarly convention and IEEE-Template.
            </p>
            <h3>1.3 Intended Audience and Reading Suggestions</h3>
            <p>The intended audience is represented by any person that wants to expand their knowledge with something new and unconventional or anyone that wants to contribute and make the application more accesible and wants to offer more information and
                courses.
            </p>
            <p>This document contains an overview of the application in order to provide information for all the users.
            </p>
            <h3>1.4 Product Scope</h3>
            <p>The scope of the product is to provide courses for a number of skills such as first aid, origami, learn sign language or dead languages etc. Along with this, the application will provide a pleasant experience while using
                it so the user will learn at its pace. </p>
            <div role="doc-introduction">
                <h3 typeof="sa:ReferenceList">1.5 References</h3>
                <ul>
                    <li class="reference--element" typeof="schema:ScholarlyArticle" resource="https://profs.info.uaic.ro/~busaco/teach/courses/web/web-projects.html">
                        <span property="schema:author" typeof="schema:Person">
                          <span property="schema:familyName">Buraga</span>
                        <span property="schema:givenName">Sabin</span>.
                        </span>
                        <cite property="schema:name"><a
                            href="https://profs.info.uaic.ro/~busaco/teach/courses/web/web-projects.html"
                            >Site-ul Tehnologii Web.</a
                          ></cite
                        >
                        <span
                          property="schema:isPartOf"
                          typeof="schema:PublicationVolume"
                        >
                          <span property="schema:isPartOf" typeof="schema:Periodical">
                            <span property="schema:name">FII UAIC.</span>
                          </span>
                        </span>
                      </li>
                      <li
                        class="reference--element"
                        typeof="schema:ScholarlyArticle"
                        resource="https://iampava.com/slides/web-technologies-2021"
                      >
                        <span property="schema:author" typeof="schema:Person">
                          <span property="schema:familyName">Pavaloi</span>
                          <span property="schema:givenName">Alexandru</span>.
                        </span>
                        <cite property="schema:name"
                          ><a href="https://iampava.com/slides/web-technologies-2021"
                            >Site-ul Web Technologies 2021.</a
                          ></cite
                        >
                        <span
                          property="schema:isPartOf"
                          typeof="schema:PublicationVolume"
                        >
                          <span property="schema:isPartOf" typeof="schema:Periodical">
                            <span property="schema:name">FII UAIC.</span>
                          </span>
                        </span>
                      </li>
                    </ul>
                  </div>
        </section>
        <section>
            <h2 id="2">2. Overall Description</h2>
            <h3>2.1 Product Perspective</h3>

            <p>SkiVi is a modular web application which acts like a virtual instructor and provides different
                sets of activities and resources for learning
                different skills such as:first aid,origami,sign language.</p>
            <h3>2.2 Product Functions</h3>

            <p>This application provides for the user the posibility to create an account so he/she can create
                his/her own personal learning plan.
                The user can check it's progress and for each course, he will know where he left of as the "Done" button 
                for the completed courses will disappear.
            </p>
            <p>Each course will be updated both automaticaly and at user demand. Whenever a new course is added the users will find it on the skill page.</p>
           
            <h3>2.3 User Classes and Characteristics</h3>
            <h4>Regular users</h4>
            <p>
               Can create an account,start learning a skill,check it's progress,
               update the profile picture and change the password.
            </p>
            <h4>Admin</h4>
            <p>
                Can do what a regular user does and in adition can add new courses,update courses or delete courses.
            </p>
            <h3>2.4 Operating Environment</h3>
            <p>
                This Web aplication is compatible with any browser, it's interface provides support for big
                screens such as PC and mobile screens based on
                their dimensions, providing the users with a nice experience on their PC and on their mobile
                phone.
            </p>
            <h3>2.5 Design and Implementation Contraints</h3>
            <p>The front-end of the application is developed with HTML and CSS.</p>
            <p>The back-end of the application is developed with PHP.</p>
            <p>For the databases we used MySQL server.</p> 
            <h3>2.6 User Documentation</h3>
            <p>There is no documentation nedded for a regular user,the app is intuitive.
                If a user wants to learn a skill and it is not logged in the page will automaticaly redirect it to the "Log in" menu.
            </p>
            <h3>2.7 Assumptions and Dependencies</h3>
            <p>
            An internet connection is required in order for the product to be
            usable. 
            </p>    
            <p> SkiVi is an aplication that is compatible with any browser, so you don't need anything else than
            your favourite web browser.</p>
        </section>
        <section>
            <h2 id="3">3. External Interface Requirements</h2>
            <h3>3.1 User Interfaces</h3>
            <p>
            The interface for this application provides support for big screens and mobile screens based on
            their dimentions. This separation is required
            for a more pleasant experience and a much more easier usability of the app.
            </p>
            <h3>3.2 Hardware Interfaces</h3>
            <p>
                The application interfaces with the hardware with the help of the web
                browser. There is no other hardware interface involved. Browser
                capabilities dictates how the application will perform.
            </p>
            <h3>3.3 Software Interfaces</h3>
            <p>
              The application interfaces with the web browser in which it is
              accessed. It provides a clean way to display the user interface,
              Operation System integration is done via the web browser.
            </p>
        </section>
        <section>
            <h2 id="4">4. System Features</h2>
            <h3>4.1 User Customization</h3>
            <p>
                The user can customize it's profile by changing it's profile picture,
                the app also offers the posibility of changing your password.
            </p>
            <h3>4.2 Managing the skills</h3>
            <p>
                The admin can manage the skills by adding new courses,updating and deleting courses.
            </p>
            <h3>4.3 Dynamically displayed skills</h3>
            <p>
                Whenever the user will get on one of the skill pages all of the skills will be loaded 
                from the database to the view,to ensure that the users doesn't miss any course or it's not 
                affected by the changes made by the admin.
            </p>
            <h3>4.4 Progress Checking</h3>
            <p>
                When a user completes a course he must click on the "Done" button after that
                he can check it's progress in "My account" page.            
            </p>
        </section>
        <section>
        <h2 id="5">5. Other Nonfunctional Requirements</h2>
        <h3>5.1 Performance Requirements</h3>
        <p>
            The website should load fast and be responsive on both desktop and
          mobile devices. The amount of used bandwidth should be kept at a low
          level.
        </p>
        <h3>5.2 Safety Requirements</h3>
        <p>
            It is required that the database to be protected from SQL injections.
            Since we used prepared statements and parameterized queries,the SQL statements that are sent to and parsed by the database server separately from any parameters. 
            This way we prevent attackers to inject malicious SQL.
        </p>
        <h3>5.3 Security Requirements</h3>
        <p>
            The administration panel should be available only to the
            authorized personnel.
        </p>
        <h3>5.4 Software Quality Attributes</h3>
        <p>
          The quality of the application is described by it's speed, security,
          privacy and easiness.
        </p>
        <h3>5.5 Business Rules</h3>
        <p>
          The primary business rule is keeping the user information private(such as password,email).
          We understand the value of data in the modern ages and we do
          not collect anything if you don't agree.
          *Side note: By making an account the user gives us the permission to store it's email,username.
        </p>
        </section>
        <section>
            <h2 id="6">6. UML DIAGRAM</h2>
            <p><img class="diagram" src="<?php echo STYLEROOT;?>/assets/img/umlDiagram.jpg" alt="umlDiagram"> </p>
        </section>
        <section>
        <h2 id="7">7. WEB.DEV Scores</h2>
        <div class="scores">
            <p>Index Page</p>
            <img class="score" src="<?php echo STYLEROOT;?>/assets/scores/index.png" alt="score">
            <p>Login</p>
            <img class="score" src="<?php echo STYLEROOT;?>/assets/scores/login.png" alt="score">
            <p>Sign up</p>
            <img class="score" src="<?php echo STYLEROOT;?>/assets/scores/signup.png" alt="score">
            <p>My account</p>
            <img class="score" src="<?php echo STYLEROOT;?>/assets/scores/myaccount.png" alt="score">
            <p>Manage</p>
            <img class="score" src="<?php echo STYLEROOT;?>/assets/scores/manage.png" alt="score">
            <p>Add course</p>
            <img class="score" src="<?php echo STYLEROOT;?>/assets/scores/add.png" alt="score">
            <p>Delete course</p>
            <img class="score" src="<?php echo STYLEROOT;?>/assets/scores/delete.png" alt="score">
            <p>Update course</p>
            <img class="score" src="<?php echo STYLEROOT;?>/assets/scores/update.png" alt="score">
            <p>Skill x3</p>
            <img class="score" src="<?php echo STYLEROOT;?>/assets/scores/skill.png" alt="score">
        </div>
      </section>
        <section>
            <h2 id="8">8. Technologies</h2>
            <h3>8.1 Microservices</h3>
            <p>
                The skills are developed using microservices,for each skill we have a different database
                that stores it's courses,therefore we have built 3 different API's so we can work with each database.
                When the microservice receives a request, it sends the items to the application, and in the application we only display them in the correct pages. 
                The reason why the microservices pattern was used is because every service is loosely coupled with the other services and so it could be tested without having to coordinate with other ones.
                Serivices comunicate with each other using asyncronous protocols such as HTTP/REST.    
            </p>
            <h3>8.2 Communication with the microservices</h3>
            <p>
                The communication with the microservices is done with Curl.
                We used curl mainly for the get request,so the request is sent to the API that interacts with the microservices and content is returned as a json file
                that is parsed and then used to display content in the app views.    
            </p>
            <h3>8.3 Database</h3>
            <p>
                For the database we used MySQL. So the main database has 2 tabels:one with the users and their credentials and one with the 
                user ids and the courses they have completed. Each microservice has it's own database which has a table with the courses.
            </p>
            <h3>8.4 AJAX</h3>
            <p>
                We used AJAX(Asynchronous JavaScript And XML) in our javascript code, so when an admin wants to modify a course the ajax call sends the data to the server 
                via HTTP REQUEST while the web page will not be reloaded.
            </p>
            <h3>8.5 SQL-injection</h3>
            <p> Every table or query that we execute in our program is parametrized, and nothing is hard-coded,so that prevents SQL-injection. 
                Also the databases have a password so it can not be accessed by unauthorized users.
            </p>
            <p>We also documented our code using <a href="https://swagger.io/" target="_blank">Swagger</a> to have a good way to interact and understand how to integrate the API's with other services.</p>
        </section>
        <section>
            <h2 id="9">9. Features</h2>
            <h3>9.1 Register</h3>
            <p>
                When an user want to create an account in our website, he will need to complete the following fields:
                username, email, password, all of these will be verified and the user will receive an warning message if something it's not ok.
            </p>
            <h3>9.2 Login</h3>
            <p>
                If a user already has an account on our website, he can log in by going to the Log In page, there he needs to input his credentials and
                after the server verifies the credentials he is logged in and can access other pages in our app.
            </p>
            <h3>9.3 Admin</h3>
            <p> 
                The admin can access the following pages:Add,Update and Delete.
                In the Add page he needs to choose for which skill he wants to add a course and then to fill all the fields,the result from the request will be displayed on the page.
                In the Update page he needs to choose the skill and then the course he want to update and then fill the next fields,the result from the request will be displayed on the page.
                In the Delete page he needs to choose the skill and the course after that the result from the request will be displayed on the page.
            </p>
            <h3>9.4 My Account</h3>
            <p>
                Under "My Account" page the user can change the profile picture and update his password. He can check the progress.
            </p>
            <h3>9.5 Page restrictions</h3>
            <p>
                We also implemented page restrictions, so an user who is not logged in the account, 
                he will not acces the lessons and the steps for them. 
                Also, a normal user will can not acces the admin page for the modify lessons, etc.
            </p>
            
        </section>
        <section>
            <h2 id="10">10. Working with GIT</h2>
            <p>
            We used <a href="https://github.com" target="_blank">GitHub</a> and
            <a href="https://discord.com" target="_blank">Discord</a> to organize
            our code. 
            For the hardest parts we worked together on Discord and the smaller changes
            were made individually but not before notifying each other,in case we accidentaly worked
            on the same thing.
            </p>
            <p>
                Because we know each other we worked together with no problems. Git
                helped us organize our code and fix our mistakes. 
            </p>
        </section>
        <section>
        <h2 id="11">11. Links</h2>
        <ul>
        <li>
        <a href="https://www.youtube.com/watch?v=d3jXi67qESo">Video Presentation</a>
        </li>
        <li>
        <a href="https://github.com/Serithipithy/SkiVI-Skill-Virtual-Instructor-/blob/main/userGuide.md">User Guide</a>
        </li>
        <li>
        <a href="<?php echo STYLEROOT;?>/pages/index">GO TO OUR MAIN PAGE</a>
        </li>
        </ul>
        </section>
    </article>
</body>

</html>