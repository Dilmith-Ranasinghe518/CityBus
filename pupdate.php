<!--Akalanka-->
<?php

require 'config.php';

// Debugging: Print out the received POST data
print_r($_POST);

$id = isset($_POST["uid"]) ? $_POST["uid"] : "";
$pfirst = isset($_POST["ufname"]) ? $_POST["ufname"] : "";
$plast = isset($_POST["ulname"]) ? $_POST["ulname"] : "";
$pusername = isset($_POST["uuname"]) ? $_POST["uuname"] : "";
$pcontact = isset($_POST["ucontact"]) ? $_POST["ucontact"] : "";


if(empty($id) || empty($pfirst) || empty($plast) || empty($pusername) || empty($pcontact)) {
    echo "ALL REQUIRED";
} else {
    // Prepare the SQL statement using a prepared statement to prevent SQL injection
    $sql = "UPDATE passengern SET firstname=?, lastname=?, username=?, contact=? WHERE Id=?";
    $stmt = $con->prepare($sql);

    if($stmt) {
        // Bind parameters to the statement
        $stmt->bind_param("ssssi", $pfirst, $plast, $pusername, $pcontact,  $id);

        // Execute the statement
        if($stmt->execute()) {
           
            echo "Updated";
        } else {
            echo "Not Updated";
        }
    } else {
        echo "Failed to prepare statement";
    }
    

    // Close the statement and the connection
    $stmt->close();
    $con->close();
}
?>
