<?php

require 'config.php';

$Id=$_POST["bid"];

$sql="DELETE FROM bus WHERE busid='$Id'";

if($con->query($sql)){

    echo "DELETED";
}
else {
    echo "NOT";
}
?>