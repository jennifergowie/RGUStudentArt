<?php

session_start(); // Start Session

include("dbConnect.php");    //Establish database connection

$image= $_POST["photo"];
$sql = "INSERT INTO images (pic) VALUES ('".$image."')";
$link->query($sql);
echo $image;


