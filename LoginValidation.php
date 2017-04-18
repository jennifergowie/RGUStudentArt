<?php

session_start(); // Start Session

if(empty($_POST) or empty($_POST["username"]) or empty($_POST["password"]))  //if post is emtpy anywhere then don't allow login
{
    destroySession();
}

include("dbConnect.php");    //Establish database connection

$username=$_POST["username"]; //Get username that has been entered
$password=$_POST["password"]; //Get password that has been entered

$sqlPassword = "SELECT Password FROM users WHERE UserName = '".$username."'"; //Setup SQL query to get password from username
$userPasswordArray = $link->query($sqlPassword);  //Execute query to get password from username

$sqlCustomerID = "SELECT CustomerID  FROM users WHERE UserName = '".$username."'"; //Setup SQL query to get CustomerID from username
$userCustomerIDArray = $link->query($sqlCustomerID);  //Execute query to get CustomerID from username

$sqlStudentName = "SELECT StudentName  FROM userprofiles WHERE UserName = '".$username."'"; //Setup SQL query to get CustomerID from username
$StudentName = $link->query($sqlStudentName);

$userPassword = getSingleValueFromDatabaseArray($userPasswordArray); //Get password from database array
$userID= getSingleValueFromDatabaseArray($userCustomerIDArray); //Get CustomerID from database array



if(checkPassword($password,$userPassword)) //Check if password is correct and act accordingly
{

    $_SESSION["username"]=$username;
    $_SESSION["emailaddress"]=$password;
    $_SESSION["StudentName"]=$StudentName;
    header("location: /Home.php");
    exit();
}

else
{
    destroySession();
}

$link->close(); //Close  database link

function getSingleValueFromDatabaseArray($dbArray) //Function to get password from database array
{

    foreach ($dbArray as $key => $val)
    {
        foreach ($val as $value)
        {
            $output= $value;
        }
    }

    return $output;

}

function checkPassword($password, $userPassword) // Function to cehck input password against password in database
{


   if($password==$userPassword)
    {
        return True;
    }

    else
    {
        return false;
    }
}


function destroySession()

{
    session_unset();
    session_destroy();
    header("location: login.php");
    exit();

}


?>