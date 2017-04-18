<?php

//This is the directory where images will be saved
$target = "images/";
$target = $target . basename( $_FILES['photo']);

//This retrieves all the other information from the form
$pic=($_FILES['photo']);

include ("dbConnect.php");
//Writes the information to the database
mysql_query("INSERT INTO 'Images' VALUES ('$pic')") ;

//Writes the photo to the server
if(move_uploaded_file($_FILES['photo']['tmp_name'], $target))
{

    //Tells you if it is all ok
    echo "The file ". basename( $_FILES['uploadedfile']['name']). " has been uploaded, and your information has been added to the directory";
}
else {

    //Gives an error if it is not ok
    echo "Sorry chum, there was a problem uploading your file.";
}
?>