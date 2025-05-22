<!--Dilmith-->
<?php

require 'config.php';

$ID=$_POST["did"];

$sql="DELETE FROM drivers WHERE ID='$ID'";

if($con->query($sql))
{
    echo "Deleted";

}

else {
    echo "Not success";
}







?>