<?php include("SessionCheck.php");?>

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
//include("LoggedInHeader.php");
//include("GetUserAccount.php");
?>

<main>

    <div class="container">
        <h2>Account Information</h2>

        <form action="GetUserAccount.php" method="post" autocomplete="off">
            <table>

                <tr>
                    <th>Username</th>
                    <th><input readonly type="text" name="username" value="<?php echo$userName?>" id="usernameInput" required/></th>
                    <th> </input></th>

                </tr>

                <tr>
                    <th>Email Address</th>
                    <th><input readonly type="email" name="email" value="<?php echo$emailAddress?>" id="emailInput" required/></th>

                </tr>

                <tr>
                    <th>Password</th>
                    <th><input readonly type="password" name="password" value="******" id="passwordInput" required/></th>
                </tr>

                <tr>
                    <th>Mobile Number</th>
                    <th><input readonly type="tel" name="phone" value="<?php echo $mobileNumber?>" id="mobileInput" required/></th>
                </tr>

                <br><br>

            </table>

            <input id="usernameEditButton" type="button" onclick="accountUpdate()" class='inputButton' value='Edit'>

            <input style="display:none ;" class="inputButton" type="submit" name="submit" value="Confirm Details" id="confirmButton"/>

        </form>


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

<script>

    function accountUpdate()

    {
        var confirmPassword = window.prompt("Please confirm your password in order to edit your account.");

        if(confirmPassword=="<?php echo $password?>")
        {
            document.getElementById("usernameInput").readOnly = false;
            document.getElementById("emailInput").readOnly = false;
            document.getElementById("passwordInput").readOnly = false;
            document.getElementById("mobileInput").readOnly = false;

            document.getElementById("usernameEditButton").style.display="none";
            document.getElementById("confirmButton").style.display="";

            alert("Password Confirmed. You can now edit your account details.");

        }

        else
        {
            alert("Password incorrect");
        }

    }

</script>