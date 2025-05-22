<!--Dilmith-->
<?php

require 'config.php';

$driID=$_POST["did"];
$driName=$_POST["dname"];
$driUsername=$_POST["usern"];
$driPassword=$_POST["dpass"];
$driContact=$_POST["dcontact"];
$driEmail=$_POST["demail"];
$driBusNo=$_POST["busno"];
$driStartdestination=$_POST["starting"];
$driEnddestination=$_POST["destination"];
$driTime=$_POST["time"];
$sql="INSERT INTO drivers VALUES ('$driID','$driName','$driUsername','$driPassword','$driContact','$driEmail','$driBusNo','$driStartdestination','$driEnddestination','$driTime')";

if($con->query($sql))
{
    echo "Insert Successful";
}

else {
    echo "Error".$con->error;
}
 $con->close();

?>