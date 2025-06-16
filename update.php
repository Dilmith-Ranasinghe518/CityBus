<!--Dilmith-->
<?php

require 'config.php';

$ID=$_POST["did"];
$Name=$_POST["dname"];
$Username=$_POST["usern"];
$Password=$_POST["dpass"];
$Contact=$_POST["dcontact"];
$Email=$_POST["demail"];
$BusNo=$_POST["busno"];
$Startdestination=$_POST["starting"];
$Enddestination=$_POST["destination"];
$Time=$_POST["time"];

if(empty($Name)||empty($Contact)||empty($Email)||empty($BusNo)||empty($Startdestination)||empty($Enddestination)||empty($Time))
{
    echo "All Required";
}

else{
    $sql="UPDATE drivers set Name='$Name',Username='$Username',Password='$Password',Contact='$Contact',Email='$Email',BusNo='$BusNo',Startdestination='$Startdestination',Enddestination='$Enddestination',Time='$Time' WHERE ID='$ID' ";
   
    if($con->query($sql))
    {
        echo "Updated";
    }

    else{
        echo "Not Updated";
    }
}

?>