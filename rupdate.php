<?php
    
    require 'config.php';

    $reserveID=$_POST["rid"];
    $reserveEmail=$_POST["remail"];
    $reserveContact=$_POST["rcontact"];
    $reserveDatetime=$_POST["rdatetime"];
    $reserveType=$_POST["rtype"];
    $reserveSeats=$_POST["rseats"];

if(empty($reserveID)||empty($reserveEmail)||empty($reserveContact )||empty($reserveDatetime)||empty($reserveType)||empty($reserveSeats))
{
    echo "All required";
}
else{

    $sql="UPDATE reservation1 SET Email='$reserveEmail', Contact='$reserveContact', datetime='$reserveDatetime', type='$reserveType', NoOfSeats='$reserveSeats' WHERE ReserveID='$reserveID'";

    if($con->query($sql))
    {
        echo "updated";
    }
    else{
        echo "not updated";
    }

}

?>