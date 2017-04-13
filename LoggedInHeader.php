<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Header</title>
</head>
<body>

<header style="display: inline;" >

    <div style="text-align: center;">

        <div style="display: inline">
            <h1 style="display: inline">Textbook</h1>
        </div>

        <img style="vertical-align: top; display: inline; height: 150px; width: 200px" class="logo centered" src="Assets/Logo.png" alt="Logo">

        <div style="display: inline">
            <h1 style="display: inline; vertical-align: bottom;">Exchange</h1>
        </div>

    </div>

    <div style="position: absolute; top: 10px; right: 10px; height: 145px;">

        <span>Username: </span><?php echo "<b>{$_SESSION["username"]}</b>"?><br>
        <span>Account Number: </span><?php echo "<b>{$_SESSION["CustomerID"]}</b>"?>

    </div>

</header>

</body>
</html>