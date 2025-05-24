<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>BUS DETAILS</title>
</head>
<body >

<?php
include 'config.php';

$sql = "SELECT busid, busno, bustype FROM bus";
$result = $con->query($sql);

echo "<h2><center>BUS DETAILS</center></h2>";

if ($result->num_rows > 0) {
    echo "<table style='width: 100%; border-collapse: collapse;'>";
    echo "<thead>";
    echo "<tr>";
    echo "<th style='padding: 8px; text-align: left; background-color: gray;'>BUS ID</th>";
    echo "<th style='padding: 8px; text-align: left; background-color: gray;'>BUS NUMBER</th>";
    echo "<th style='padding: 8px; text-align: left; background-color: gray;'>BUS TYPE</th>";
    echo "</tr>";
    echo "</thead>";
    echo "<tbody>";
    while ($row = $result->fetch_assoc()) {
        echo "<tr>";
        echo "<td style='padding: 8px; text-align: left; border-bottom: 1px solid #ddd;'>" . $row["busid"] . "</td>" . "<td style='padding: 8px; text-align: left; border-bottom: 1px solid #ddd;'>" . $row["busno"] . "</td>" . "<td style='padding: 8px; text-align: left; border-bottom: 1px solid #ddd;'>" . $row["bustype"] . "</td>";
        echo "</tr>";
    }
    echo "</tbody>";
    echo "</table>";
} 
else {
    echo "No result";
}

$con->close();

?>
<img src="http:./images/bcru.jpg" alt=" photo">
<center>
    <a href="admin/dashboard.php">
        <button style="display: inline-block; padding: 10px 20px; background-color: blue; color: white; border: none; border-radius: 5px; cursor: pointer;">
            Go Back
        </button>
    </a>
</center>
</body>
</html>