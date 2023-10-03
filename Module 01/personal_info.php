<?php

/*
Task 1: Personal Information Page
Create a PHP file named personal_info.php that displays your personal information using variables and the echo statement. 
Include your name, age, country, and a brief introduction.
*/

$firstName = "Anjum";
$middleName = "Hasan";
$lastName = "Reza"; 

$fullName = sprintf("%s %s %s",$firstName,$middleName,$lastName);

// echo $fullName; 

// echo PHP_EOL;




$age = 35;
$county = "Bangladesh";
$grettings = "As-salamu-waliku";
$homeDistrict = "Mymensingh";
$birthPlace = "Shankipara";
$profession = "Computer Engineer";
$degree = "BSc in Computer Science & Engineering";
$universityName = "United International University";
$universityDistrict = "Dhaka";
$firstJobRoll = "System Support Engineer";
$firstOfficeName = "Soft Link Group";
$firstOfficeDistrict ="Dhaka"; 





$introduction = printf("{$grettings}, as you already know that my name is {$fullName}, 
I am from {$homeDistrict}, born and raised in {$birthPlace}, {$homeDistrict}. Now-a-days I reside in {$birthPlace}, {$homeDistrict} and have a family of 5. 
To pursue my passion for {$profession}, I went on to pursue {$degree} from the {$universityName} of {$universityDistrict}. 
I began my career by interning as a {$firstJobRoll} in {$firstOfficeName}, {$firstOfficeDistrict}, during the final year of my {$degree} program. ");



echo $introduction;
