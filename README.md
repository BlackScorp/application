#application
Base Kohana Application including jQuery , Twitter Bootstrap and HTML5 Boilerplate 

##Required Folder Structure:

* ~/kohana/
    * /3.3/
        * /system/
        * /modules/
    * /3.2/
        * /system/
        * /modules/
    * /3.x/
        * /system/
        * /modules/
    * /applications/
        * /myapplication1/
               * /application/
               * /public/
        * /myapplication2/
               * /application/
               * /public/


##Install
change into applications dir

    cd ~/kohana/applications

clone from github

    git clone https://github.com/BlackScorp/application.git projectname

move to document root

    cd /var/www/htdocs

link application

    ln -s ~/kohana/applications/projectname/public projectname

test project

    call in browser http://localhost/projectname

##Usage

copy
 
    application/classes/Controller/Dummy.php 
to 

    application/classes/Controller/Test.php

rename the class to Controller_Test call localhost/projectname/index.php?/Test 

