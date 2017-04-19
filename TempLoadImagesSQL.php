<?php
include("dbConnect.php");
$sqlPassword = "SELECT pic FROM Images[0]";
$image = $link->query($sqlPassword);
echo '<img src="data:image/jpeg;base64,'.base64_encode($image->load()) .'" />';
