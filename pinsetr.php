<!--Akalanka-->
<?php
require 'config.php';

if(isset($_POST["ufname"], $_POST["ulname"], $_POST["uuname"], $_POST["ucontact"])) {
    $pfname=$_POST["ufname"];
    $plname=$_POST["ulname"];
    $puuname=$_POST["uuname"];
    $pucontact=$_POST["ucontact"];
    

    if(empty($pfname) || empty($plname) || empty($puuname) || empty($pucontact)) {
        echo "Please fill in all required fields.";
    } else {
        $sql="INSERT INTO passengern (firstname, lastname, username, contact) VALUES ('$pfname','$plname','$puuname','$pucontact')";

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
