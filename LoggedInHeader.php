<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Header</title>
</head>
<body>

        <span>Current User </span><?php echo "<b>{$_SESSION["username"]}</b>"?><br>
        <span>Password </span><?php echo "<b>{$_SESSION["password"]}</b>"?><br>
        <span>Mobile Number </span><?php echo "<b>{$_SESSION["mobileNumber"]}</b>"?><br>

        <table>
            <tr><td>Student Name</td><td><?php echo "<b>{$_SESSION["studentName"]}</b>"?></td></tr>
            <tr><td>Mobile Number</td><td><?php echo "<b>{$_SESSION["mobileNumber"]}</b>"?></td></tr>
            <tr><td>Email</td><td><?php echo "<b>{$_SESSION["email"]}</b>"?></td></tr>
            <tr><td>Course</td><td><?php echo "<b>{$_SESSION["course"]}</b>"?></td></tr>
            <tr><td>Year</td><td><?php echo "<b>{$_SESSION["year"]}</b>"?></td></tr>
        </table>
</body>
</html>