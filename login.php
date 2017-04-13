<!DOCTYPE html>

<!-- NB: add comments, sort formatting! -->

<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Login Page</title>
    <link rel="stylesheet" type="text/css" href="Assets/style.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Rakkas|Quicksand">

</head>

    <body>

<?php
include("Header.php");
?>

    <main style="max-width: 400px">

        <form action="LoginValidation.php" method="post">
                <h2>Welcome to Textbook Exchange</h2>
                <input type="text" name="username" placeholder="Username" onfocus="this.placeholder=''" onblur="this.placeholder='Username'" required><br>
                <input type="password" name="password" placeholder="Password" onfocus="this.placeholder=''" onblur="this.placeholder='Password'" required><br>
                <button class="inputButton" type="submit">Login</button>
                <br/>


            <div class="container">
                <!-- <button type="button" class="cancelbutton">Cancel</button><br> -->
                <br>
                <span>Forgotten you password? Click <a href="PasswordReset.php">here</a>.</span>
                <br><br>
                <span>Don't have an account? Click <a href="Register.php">here</a> to register.</span>
            </div>
        </form>

    </main>

    </body>

    <footer>
        <div class="container">
            <br>
            <p>&copy; 2017 textbookexchange.com</p>
        </div>
    </footer>

</html>
