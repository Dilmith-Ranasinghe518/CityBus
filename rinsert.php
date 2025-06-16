<?php
    require 'config.php';
    
    $reserveEmail=$_POST["remail"];
    $reserveContact=$_POST["rcontact"];
    $reserveDatetime=$_POST["rdatetime"];
    $reserveType=$_POST["rtype"];
    $reserveSeats=$_POST["rseats"];

    $sql="INSERT INTO reservation1 VALUES ('',  '$reserveEmail', '$reserveContact', '$reserveDatetime', '$reserveType', '$reserveSeats' )";

    if($con->query($sql)) {
        echo "Insert successful";
    } else {
        echo "Error: " . $sql . "<br>" . $con->error;
    }

    $con->close();
?>
