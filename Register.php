
<!DOCTYPE html>

<!-- NB: add comments, sort formatting! -->

<html lang="en">
    <head>
        <meta charset="UTF-8">
        <title>Registration Page</title>
        <link rel="stylesheet" type="text/css" href="Assets/style.css">
        <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Rakkas|Quicksand">

    </head>


    <body>

    <?php
    include("Header.php");
    ?>


    <main>

        <div class="container">
            <h2>Create Account</h2>
            <form action="RegisterUser.php" method="post" autocomplete="off">
                <input type="text" name="username" placeholder="Username" onfocus="this.placeholder=''" onblur="this.placeholder='Username'" required/>
                <input type="email" name="email" placeholder="Email Address" onfocus="this.placeholder=''" onblur="this.placeholder='Email Address'" required/>
                <input type="password" name="password" placeholder="Password" onfocus="this.placeholder=''" onblur="this.placeholder='Password'" required/>
                <input type="tel" name="phone" placeholder="Mobile Number" onfocus="this.placeholder=''" onblur="this.placeholder='Mobile Number'" required/>
                <br><br>
                <input class="inputButton" type="submit" name="submit" value="Create Your Account"/>
            </form>

            <p>Already have an account? <a href="login.php">Click here</a> to login</p>
        </div>

    </main>

    </body>

    <footer>
        <br>
        <div class="container">
            <p>&copy; 2017 textbookexchange.com</p>
        </div>
    </footer>

</html>