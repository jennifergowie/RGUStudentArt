<?php include("SessionCheck.php");?>

<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>HomePage</title>
    <link rel="stylesheet" type="text/css" href="Resources/CSS/styleSheet.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Quicksand">
</head>

<body>



<main>
    <h2>Welcome RGU Student Art</h2>

    <?php
    include("LoggedInHeader.php");
    ?>
    
    <h4>Please click <a href="profiles.php">here </a> to edit/review your personal profile</h4>
    <h4>Please click <a href="ProfilePicture.php">here </a> to upload a profile picture</h4>
    <h4>Please click <a href="slideshow.php"> here </a> to edit/add a slide show</h4>
    <h4>Please click <a href="profiles.php"> here</a> to view other profiles</h4>
</main>



</body>


</html>

