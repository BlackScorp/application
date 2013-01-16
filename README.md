application
===========

Base Kohana Application including jQuery , Twitter Bootstrap and HTML5 Boilerplate 

Required Folder Structure:
--------------------------

kohana
- version
- - system
- - modules
- applications
- - app1
- - - application
- - - public

Kohana must be installed

Install
--------------------------

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
