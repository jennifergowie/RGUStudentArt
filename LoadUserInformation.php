<?php
session_start();

include("dbConnect.php");

$username=$_POST["username"];

$sql = "SELECT * userprofiles WHERE username = userprofiles.username";
$link->query($sql);