<?php

session_start(); // Start Session

include("dbConnect.php");    //Establish database connection

$username=$_POST["username"]; //Get username that has been entered
$emailAddress=$_POST["email"]; //Get email address that has been entered
$password=$_POST["password"]; //Get password that has been entered
$mobileNumber=$_POST["phone"]; //Get mobile number that has been entered
$name = $_POST["name"];
$course =$POST["course"];
$courseyear =$POST["year"];

$sql = "INSERT INTO usersprofiles (UserName, EmailAddress, Password, MobileNumber,StudentName,Course,CourseYear)VALUES ('".$username."','".$emailAddress."','".$password."', '".$mobileNumber."', '".$name."', '".$course."', '".$courseyear."')";
$link->query($sql);

echo $username;
echo $emailAddress;
echo $password;
echo $mobileNumber;
echo $name;
echo $course;
echo $courseyear;

header("location: ProfileUploadedSuccess.php");