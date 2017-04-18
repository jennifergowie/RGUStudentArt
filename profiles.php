<!DOCTYPE html>

<!-- NB: add comments, sort formatting! -->

<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Login Page</title>
    <link rel="stylesheet" type="text/css" href="Resources/CSS/styleSheet.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Rakkas|Quicksand">

    <div class="newUserbg">
        <br/>
        <img style="vertical-align: top; display: inline; height: 75px; width: 300px" src="Resources/Images/Robert_Gordon_University.png" alt="Logo">
        <h2>Create New Account</h2>
            <form action="UploadProfile.php" method="post" autocomplete="off">
            <input type="username" name="username" placeholder="Username" onfocus="this.placeholder=''" onblur="this.placeholder='Username'" required/>
            <input type="email" name="email" placeholder="Email Address" onfocus="this.placeholder=''" onblur="this.placeholder='Email Address'" required/>
            <input type="password" name="password" placeholder="Password" onfocus="this.placeholder=''" onblur="this.placeholder='Password'" required/>
            <input type="tel" name="phone" placeholder="Mobile Number" onfocus="this.placeholder=''" onblur="this.placeholder='Mobile Number'" required/>
            <input type="StudentName" name="StudentName" placeholder="Student Name" onfocus="this.placeholder=''" onblur="this.placeholder='StudentName'" required/>
            <input type="Course" name="Course" placeholder="Course" onfocus="this.placeholder=''" onblur="this.placeholder='Course'" required/>
            <input type="Year" name="Year" placeholder="Year" onfocus="this.placeholder=''" onblur="this.placeholder='Year'" required/>
            <br><br>
            <input class="inputButton" type="submit" name="submit" value="Create your profile"/>
        </form>
    </div>

    </main>

    </body>

</html>