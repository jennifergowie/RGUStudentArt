<?php
include("../AdminFiles/SessionCheck.php");
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
    include '../AdminFiles/dbConnect.php';

    echo "$userName";

    $sql = "INSERT INTO UserImages (userName, name, size, type, content ) ".
        "WHERE userName = $userName".
        "VALUES ('$userName','$fileName', '$fileSize', '$fileType', '$content')";


    $result = $link->query($sql);
    echo "<br>Profile Picture $fileName has been uploaded<br>";

}

?>