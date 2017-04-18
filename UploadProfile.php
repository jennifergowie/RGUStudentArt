<?php

session_start(); // Start Session

include("dbConnect.php");    //Establish database connection

$username=$_POST["username"]; //Get username that has been entered
$emailAddress=$_POST["email"]; //Get email address that has been entered
$password=$_POST["password"]; //Get password that has been entered
$mobileNumber=$_POST["phone"]; //Get mobile number that has been entered
$StudentName =$_POST["StudentName"];
$Course = $_POST["Course"];
$Year = $_POST["Year"];


$sql = "INSERT INTO userprofiles (UserName, EmailAddress, Password, MobileNumber,StudentName,Course,Year) VALUES ('".$username."','".$emailAddress."','".$password."', '".$mobileNumber."', '".$StudentName."', '".$Course."', '".$Year."')";
$link->query($sql);


echo $username;
echo $emailAddress;
echo $password;
echo $mobileNumber;
echo $StudentName;
echo $Course;
echo $Year;

$_SESSION["username"]=$username;
header("location: ProfileUploadedSuccess.php");