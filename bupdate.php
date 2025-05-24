<?php

require 'config.php';

print_r($_POST);

$id = isset($_POST["bid"]) ? $_POST["bid"] : "";
$bnumber = isset($_POST["bno"]) ? $_POST["bno"] : "";
$bty = isset($_POST["btype"]) ? $_POST["btype"] : "";

if(empty($id) || empty($bnumber) || empty($bty)) {
    echo "ALL REQUIRED";
} else {
   
    $sql = "UPDATE bus SET busno=?, bustype=? WHERE busid=?";
    $stmt = $con->prepare($sql);

    if($stmt) {
        
        $stmt->bind_param("ssi", $bnumber, $bty,  $id);

        
        if($stmt->execute()) {
           
            echo "Updated";
        } else {
            echo "Not Updated";
        }
    } else {
        echo "Failed to prepare statement";
    }
    
    $stmt->close();
    $con->close();
}
?>
