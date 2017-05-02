<?php include("SessionCheck.php");?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Personal Account</title>
    <link rel="stylesheet" type="text/css" href="../Resources/CSS/styleSheet.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Rakkas|Quicksand">
</head>

<body>

<header style="display: inline">
    <div class="bg">
        <br/>
        <center><img style="vertical-align: top; display: inline; height: 75px; width: 300px" src="../Resources/Images/Robert_Gordon_University.png" alt="Logo"><br/>
            <br/>

            <nav style="margin-top: 5px">
                <ul>
                    <li><a href="../redunantfiles/UpdateAccount.php" class="centered"><img height="50" width="50" class="navBarIcon centered"
                                                                                           src="../Resources/Images/clematis.png" alt="LogoutIcon">Update Profile</a></li>

                    <li><a href="../UploadProfilePicture/fileupload.php" class="centered"><img height="50" width="50" class="navBarIcon centered"
                    src="../Resources/Images/clematis.png" alt="LogoutIcon">Change Profile Picture</a></li>

                    <li><a href="../UploadUserImages/fileupload.php" class="centered"><img height="50" width="50" class="navBarIcon centered"
                    src="../Resources/Images/clematis.png" alt="LogoutIcon">Upload Image</a></li>

                    <li><a href="../DeleteProfile/DeleteUser.php" class="centered"><img height="50" width="50" class="navBarIcon centered"
                    src="../Resources/Images/clematis.png" alt="LogoutIcon">Delete Profile</a></li>

                    <li><a href="Options.php" class="centered"><img height="50" width="50" class="navBarIcon centered"
                    src="../Resources/Images/clematis.png" alt="LogoutIcon">Return to Menu</a></li>
                </ul>

                <?php
                    include("../Resources/HeaderandFooterSections/RGUArtistFooterSection.php");
                ?>