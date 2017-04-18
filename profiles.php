<!DOCTYPE html>

<!-- NB: add comments, sort formatting! -->

<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Login Page</title>
    <link rel="stylesheet" type="text/css" href="Resources/CSS/styleSheet.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Rakkas|Quicksand">

</head>

<body>

<main>
    <div class="profiles">
        <br/>
        <img style="vertical-align: top; display: inline; height: 75px; width: 300px" src="Resources/Images/Robert_Gordon_University.png" alt="Logo"><br/>
        <br/>
        <div style="position: absolute; top: 10px; right: 10px; height: 145px;">

            <span>Username: </span><?php echo "<b>{$_SESSION["username"]}</b>"?><br>
            <span>CustomerID </span><?php echo "<b>{$_SESSION["CustomerID"]}</b>"?>


            <?php

            include("dbConnect.php");

             $sql = "SELECT * FROM userProfiles where {$_SESSION["username"]} = userProfiles.username";
             echo "<th>User name</th>";
             $result = $link->query($sql);   //Execute query
             $row = mysqli_fetch_array($result);
             echo"<tr>";
             echo "<td>".$row['username']. "</td>";
             echo "<td>this is loading</td>";
             echo "<td></td>";
             echo "<td></td>";
            ?>
        </div>