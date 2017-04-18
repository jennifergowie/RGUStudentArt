<?php

session_start(); // Start Session

include("dbConnect.php");    //Establish database connection

$image= $_POST["photo"];
$sql = "INSERT INTO Images (pic) VALUES ('".$image."')";
$link->query($sql);

header("location: ProfileUploadedSuccess.php");