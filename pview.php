<!--Akalanka-->
<!DOCTYPE html>
<html lang="en">
<head>
<link rel="stylesheet" href="./css/pregister.css">
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PASSENGER DETAILS</title>
</head>
<body style="background-color: lightblue;">
<?php
include 'config.php';

$sql = "SELECT Id, firstname, lastname FROM passengern";
$result = $con->query($sql);

echo "<h2><center>PASSENGER DETAILS</center></h2>";

if ($result->num_rows > 0) {
    echo "<table style='width: 100%; border-collapse: collapse;'>";
    echo "<thead>";
    echo "<tr>";
    echo "<th style='padding: 8px; text-align: left; background-color: blue;'>ID</th>";
    echo "<th style='padding: 8px; text-align: left; background-color: blue;'>First Name</th>";
    echo "<th style='padding: 8px; text-align: left; background-color: blue;'>Last Name</th>";
    echo "</tr>";
    echo "</thead>";
    echo "<tbody>";
    while ($row = $result->fetch_assoc()) {
        echo "<tr>";
        echo "<td style='padding: 8px; text-align: left; border-bottom: 1px solid #ddd;'>" . $row["Id"] . "</td>" . "<td style='padding: 8px; text-align: left; border-bottom: 1px solid #ddd;'>" . $row["firstname"] . "</td>" . "<td style='padding: 8px; text-align: left; border-bottom: 1px solid #ddd;'>" . $row["lastname"] . "</td>";
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
<center>
    <a href="admin\dashboard.php">
        <button style="display: inline-block; padding: 10px 20px; background-color: blue; color: white; border: none; border-radius: 5px; cursor: pointer;">
            Go Back
        </button>
    </a>
</center>

</body>
</html>

