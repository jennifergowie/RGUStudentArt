<?php

session_start(); // Start Session

include("dbConnect.php");    //Establish database connection

$username=$_POST["username"]; //Get username that has been entered
$emailAddress=$_POST["email"]; //Get email address that has been entered
$password=$_POST["password"]; //Get password that has been entered
$mobileNumber=$_POST["phone"]; //Get mobile number that has been entered

$sql = "INSERT INTO users (UserName, EmailAddress, Password, MobileNumber) VALUES ('".$username."','".$emailAddress."','".$password."', '".$mobileNumber."')";
$link->query($sql);

echo $username;
echo $emailAddress;
echo $password;
echo $mobileNumber;

header("location: RegisterSuccess.php");