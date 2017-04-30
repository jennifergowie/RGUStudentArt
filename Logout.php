<?php

session_start();
session_unset();
session_destroy();

?>

<!DOCTYPE html>

<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Logout</title>
    <link rel="stylesheet" type="text/css" href="Resources/CSS/styleSheet.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Rakkas|Quicksand">
</head>


<body>

<?php
include("Resources/HeaderandFooterSections/RGUArtistHeader.php");
?>

<div style="text-align: center">
    <h2>You are logged out</h2>
    <h2>Thanks for RGU Student Art</h2>
    <span>Click to <a href="login.php">login</a> again</span>

    <?php
    include("resources/HeaderandFooterSections/RGUArtistFooterSection.php");
    ?>
</div>
</body>

</footer>

</html>