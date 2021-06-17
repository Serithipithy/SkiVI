 # User Guide

For the application to run localy from your computer you need to install [Xampp](https://www.apachefriends.org/ro/download.html) and clone this
 [repository](https://github.com/Serithipithy/SkiVI-Skill-Virtual-Instructor-),all of the files. 
 
After that open Xampp Control Panel and then access Apache->Config->Apache(httpd.conf) and change the
Document root with the path where you have cloned the repository,you also need to change the port to 8000.


Now click start on the Apache and MySql servers.


Go in 'phpmyadmin' and create 3 databases with the following name: 'first_aid','origami','sign_lng' and 'skivi'
then for each database click import and import the sql files(their names match the database) form the repo you just downloaded.


If you have a password to this databases you need to go in each 'Database.php' file and add you password under the field 'password'.


You will find the 'Database.php' files in the following directories: 'SkiVi/app/libraries','REST_API_FA/config','REST_API_ORIGAMI/config','REST_API_SIGN_LNG/config' and'REST_API_USER_INFO/config'.


Now access this so you can enjoy the SkiVi experience ->[Click here](http://localhost:8000/SkiVi/pages/index)
