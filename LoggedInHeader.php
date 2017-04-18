<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Header</title>
</head>
<body>
    <div style="position: absolute; top: 10px; right: 10px; height: 145px;">
        <span>Current User </span><?php echo "<b>{$_SESSION["username"]}</b>"?><br>
        <span>Student Name </span><?php echo "<b>{$_SESSION["emailaddress"]}</b>"?><br>
    </div>

</header>

</body>
</html>