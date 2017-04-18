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
            <?php
            include("LoggedInHeader.php");
            include("dbConnect.php");

             $sql = "SELECT * FROM userprofiles where {$_SESSION["username"]} = userprofiles.username";
             echo "<th>User name</th>";
             $result = $link->query($sql);   //Execute query
             $row = mysqli_fetch_array($result);
             echo"<tr>";
             echo "<td>".$row['username']."</td>";
             echo "<td></td>";
             echo "<td></td>";
             echo "<td></td>";
            ?>
        </div>