
<?php

$con= new mysqli("localhost","root","","iwtbus");

if($con->connect_error){

    die ("connection failed".$con->connect_error);
}


?>