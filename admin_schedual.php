<!--Yelani-->
<?php

ini_set('display_errors', 1);


$servername = "localhost";
$username = "root";
$password = "";
$database = "iwtbus";

$conn = mysqli_connect($servername, $username, $password, $database);

if(!$conn){
    die("Connection failed: ".mysqli_connect_error());
}



?>




<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Bus Departure Time Guidance</title>
  <link rel="stylesheet" href="css/schedule.css">
</head>
<body>
    <div class="schtable"></div>

    <table>
    <div class="capt">
        <caption><h1 id="busSchedule">Bus Departure Time Guidance</h1><span id="currentDate"></span></caption>
    </div>
    <tr>
        <th>Estimated Time</th>
        <th>From</th>
        <th>To</th>
        <th>Bus No</th>
        <th>Route No</th>
        <th>Action</th>
    </tr>

    <?php 
    $sql = "SELECT * FROM scedule"; // Check if "scedule" is the correct table name
    $result = mysqli_query($conn, $sql);

    if(mysqli_num_rows($result) > 0){
        while($row = mysqli_fetch_assoc($result)){
            echo "<tr>
                <td>".$row['estTime']."</td>
                <td>".$row['from']."</td>
                <td>".$row['to']."</td>
                <td>".$row['Bus_No']."</td>
                <td>".$row['Route_No']."</td>
                <td>
                  <a href='edit_schedule.php?id=".$row['SchelduleID']."'>Edit</a>
                  <a href='delete_schedule.php?id=".$row['SchelduleID']."'>Delete</a>
                </td>
            </tr>";
        }
    } else {
        echo "<tr><td colspan='5'>No records found</td></tr>";
    }
    ?>

</table>
</div>
<script src="schedule.js"></script>
<center>
    <a href="admin\dashboard.php">
        <button style="display: inline-block; padding: 10px 20px; background-color: blue; color: white; border: none; border-radius: 5px; cursor: pointer;">
            Go Back
        </button>
    </a>
</center>
</body>
</html>
