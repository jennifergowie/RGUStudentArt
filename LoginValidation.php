<?php

session_start(); // Start Session

if(empty($_POST) or empty($_POST["username"]) or empty($_POST["password"]))
{
    destroySession();
}

    include("dbConnect.php");    //Establish database connection

    $username=$_POST["username"]; //Get username that has been entered
    $password=$_POST["password"]; //Get password that has been entered

    $sqlPassword = "SELECT Password FROM users WHERE UserName = '".$username."'";
    $userPasswordArray = $link->query($sqlPassword);
    $userPassword = convertToStringToDisplay($userPasswordArray);

    $studentNameQuery = "SELECT StudentName FROM userprofiles WHERE UserName = '".$username."'";
    $studentNameinfo = $link->query($studentNameQuery);
    $studentName = convertToStringToDisplay($studentNameinfo);

    $emailAddressQuery = "SELECT EmailAddress FROM userprofiles WHERE UserName = '".$username."'";
    $emailAddressInfo = $link->query($emailAddressQuery);
    $emailAddress = convertToStringToDisplay($emailAddressInfo);

    $sqlMobileNumberQuery = "SELECT MobileNumber FROM userprofiles WHERE UserName = '".$username."'"; //Setup SQL query to get CustomerID from username
    $mobileNumberInfo = $link->query($sqlMobileNumberQuery);
    $mobileNumber =convertToStringToDisplay($mobileNumberInfo);

    $sqlCourseQuery = "SELECT Course FROM userprofiles WHERE UserName = '".$username."'"; //Setup SQL query to get CustomerID from username
    $courseInfo = $link->query($sqlCourseQuery);
    $course =convertToStringToDisplay($courseInfo);

    $sqlYearQuery = "SELECT Year FROM userprofiles WHERE UserName = '".$username."'"; //Setup SQL query to get CustomerID from username
    $yearInfo = $link->query($sqlYearQuery);
    $year =convertToStringToDisplay($yearInfo);

    if(passwordCompare($password,$userPassword)){
        $_SESSION["username"]=$username;
        $_SESSION["password"]=$password;
        $_SESSION["studentName"]=$studentName;
        $_SESSION["email"]=$emailAddress;
        $_SESSION["mobileNumber"]=$mobileNumber;
        $_SESSION["course"]=$course;
        $_SESSION["year"]=$year;
        header("location: /Home.php");
        exit();
    }

    else {
        destroySession();
    }

$link->close();

function convertToStringToDisplay($items)
//for this http://php.net/manual/en/control-structures.foreach.php was referenced.
{
    foreach ($items as $key => $val)
    {
        foreach ($val as $value)
        {
            $output= $value;
        }
    }

    return $output;

}

function passwordCompare($password, $enteredPassword){
    //returns true if the passwords match
    if($password==$enteredPassword)
    {
        return true;
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