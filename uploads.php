<?php
include("SessionCheck.php");

if(isset($_POST['upload']) && $_FILES['userfile']['size'] > 0)
{
    $userName = $_SESSION["username"];
    $fileName = $_FILES['userfile']['name'];
    $tmpName  = $_FILES['userfile']['tmp_name'];
    $fileSize = $_FILES['userfile']['size'];
    $fileType = $_FILES['userfile']['type'];

    $fp      = fopen($tmpName, 'r');
    $content = fread($fp, filesize($tmpName));
    $content = addslashes($content);
    fclose($fp);

    if(!get_magic_quotes_gpc())
    {
        $fileName = addslashes($fileName);
    }
    include 'dbConnect.php';
    //include 'library/opendb.php';

    $sql = "INSERT INTO profilepictures (userName, name, size, type, content ) ".
        "VALUES ('$username','$fileName', '$fileSize', '$fileType', '$content')";

    $result = $link->query($sql);// or die('Error, query failed');

    //mysql_query($query) or die('Error, query failed');
    //include 'library/closedb.php';

    echo "<br>File $fileName uploaded<br>";
}
?>