/var/www/html/public-html


Subhash Godaddy project
username: 202021390
password:  Nalin@1995

Goal today: just run the website locally


php-mysql

s3://subhash-project/project-php/homedir/public_html/

https://ubuntu.com/server/docs/how-to-install-and-configure-php


http://13.126.26.108/public_html/ -> original site

view-source:https://kosipratishthan.com/contact.php -> footer php not called   
http://13.126.26.108/public_html/feedback.php -> no working  <?php include("db/db.php");?>


root@840d1f1ae468:/var/www/html/public_html/db# cat db.php
<?php
$con= mysqli_connect('localhost',"gauri_Nath","HnE*i#GvMg}A","gauri_nath");

?>

mysql -u gauri_Nath -p


footer.php not loading

root@840d1f1ae468:/var/www/html/public_html# grep -irl 'insert' .
./contact.php
./js/jquery-2.2.3.min.js
./js/bootstrap.js
./js/jquery-ui.js
./js_coursel/owl.carousel.js
./js_coursel/jquery.min.js
./feedback.php
./save-contact.php

root@840d1f1ae468:/var/www/html/public_html# grep -irl 'insert into' .
./contact.php
./js/jquery-ui.js
./feedback.php
./save-contact.php


save-contact.php 
$insert ="insert into contact (`name`,`email`,`mobile`,`subject`,`message`) values ($name,$email,$mobile,$subject,$message)";

contact.php
$insert ="insert into contact(name,email,mobile,subject,message) values ('$name','$email','$mobile','$subject','$message')";
    
feedback.php
$insert_images ="insert into feedback_ins(name,message) values ('$name','$message')";


MYSQL STEPS:

https://www.digitalocean.com/community/tutorials/how-to-install-mysql-on-ubuntu-20-04

1. 
MYSQL create database gauri_nath with user gauri_Nath and password Password@123 having access to the db:-
CREATE DATABASE gauri_nath;
CREATE USER 'gauri_Nath'@'localhost' IDENTIFIED BY 'HnE*i#GvMg}A@123';
GRANT CREATE, ALTER, DROP, INSERT, UPDATE, INDEX, DELETE, SELECT, REFERENCES, RELOAD on *.* TO 'gauri_Nath'@'localhost' WITH GRANT OPTION;
FLUSH PRIVILEGES;

2.
create table: -
CREATE TABLE contact (
    id INT AUTO_INCREMENT PRIMARY KEY,
    name VARCHAR(100) NOT NULL,
    email VARCHAR(100) NOT NULL,
    mobile VARCHAR(20),
    subject VARCHAR(255),
    message TEXT
);

insert into feedback_ins(name,message) values ('$name','$message')

optional if messed up:
delete user from mysql:
DROP USER 'gauri_nath'@'localhost';


3. use gauri_nath;
4. created table contact; verify table with: desc contact;

CREATE TABLE feedback_ins (
    id INT AUTO_INCREMENT PRIMARY KEY,
    name VARCHAR(100) NOT NULL,
    message TEXT NOT NULL
);

