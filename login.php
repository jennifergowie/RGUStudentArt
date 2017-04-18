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
    <div class="bg">
        <br/>
        <img style="vertical-align: top; display: inline; height: 75px; width: 300px" src="Resources/Images/Robert_Gordon_University.png" alt="Logo"><br/>
        <br/>

        <form action="LoginValidation.php" method="post">

            <h2>Welcome to RGU Artist</h2>

        <input type="username" name="username" placeholder="User Name" onfocus="this.placeholder=''" onblur="this.placeholder='Matriculation Number'" required><br>
        <input type="password" name="password" placeholder="Password" onfocus="this.placeholder=''" onblur="this.placeholder='Password'" required><br>
        <button class="inputButton" type="submit">Login</button><br/>
        <span><input type="checkbox" checked="checked">Keep me logged in</span><br/>

        <div class="container">
            <br>
            <span>Forgotten you password? Click <a href="PasswordReset.php">here</a></span>
            <br/>
            <br/>
            <span>Don't have an account? Click <a href="Register.php">here</a> to register</span>
            <?php
            include("resources/HeaderandFooterSections/RGUArtistFooterSection.php");
            ?>

        </div>
        </div>


        </main>
    </body>

</html>