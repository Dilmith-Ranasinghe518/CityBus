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
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Bus Departure Time Guidance</title>
  <link rel="stylesheet" href="./css/schedule.css">
</head>
<body>
  <!-- includeing header using php -->
  <?php include "./header.php" ?>
    <div class="schtable"></div>

    <table>
    <div class="capt">
        <caption><h1 id="busShedule">Bus Departure Time Guidance</h1><span id="currentDate"></span></caption>
    </div>
    <tr>
        <th>Estimated Time</th>
        <th>From</th>
        <th>To</th>
        <th>Bus No</th>
        <th>Route No</th>
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
            </tr>";
        }
    } else {
        echo "<tr><td colspan='5'>No records found</td></tr>";
    }
    ?>

</table>
</div>
<script src="js/schedule.js"></script>

<br><br><br><br>

<!-- includeing footer using php -->
<?php include "./footer.php" ?>
</body>

</html>

