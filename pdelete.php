<!--Akalanka-->
<?php

require 'config.php';

$Id=$_POST["uid"];

$sql="DELETE FROM passengern WHERE Id='$Id'";

if($con->query($sql)){

    echo "DELETED";
}
else {
    echo "NOT";
}




?>