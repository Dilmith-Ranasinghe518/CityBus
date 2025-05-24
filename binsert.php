<?php
require 'config.php';

// Check if all other required fields are provided
if(isset($_POST["bno"], $_POST["btype"])) {
    $busno=$_POST["bno"];
    $bustype=$_POST["btype"];
    
    // Check if any required field is empty
    if(empty($busno) || empty($bustype)) {
        echo "Please fill in all the required details.";
    } else {
        $sql="INSERT INTO bus (busno, bustype) VALUES ('$busno','$bustype')";

        if($con->query($sql)){
            echo "Insert successful";
        } else {
            echo "Error: ".$con->error;
        }
    }
} else {
    echo "Please provide all required fields.";
}

$con->close();
?>
