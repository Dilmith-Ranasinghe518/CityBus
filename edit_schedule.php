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

$schedualId = $_GET['id'];

//update php
if(isset($_POST['submit'])){

    $estTime = $_POST['estTime'];
    $from = $_POST['from'];
    $to = $_POST['to'];
    $Bus_No = $_POST['Bus_No'];
    $Route_No = $_POST['Route_No'];
    $City_No = $_POST['City_No'];

    $sql = "UPDATE `scedule` SET estTime='$estTime', `from`='$from', `to`='$to', Bus_No='$Bus_No', Route_No='$Route_No', City_No='$City_No' WHERE SchelduleID = $schedualId";
    $result = mysqli_query($conn, $sql);

    if($result){
        echo "<script>alert('Record updated successfully');</script>";
    }else{
        echo "Error updating record: ".mysqli_error($conn);
    }
}

?>




<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Bus Departure Time Guidance</title>
  <link rel="stylesheet" href="css/contactUs.css">
  <link rel="stylesheet" href="css/shedule.css">

</head>
<body>

  <section>
  <div class="container" style="margin-top: 125px;">
        <form action="" method="POST">

            <input type="text" class="textinput" name="estTime" placeholder="estimated Time">
            <input type="text" class="textinput" name="from" placeholder="from">
            <input type="text" class="textinput" name="to" placeholder="to">
            <input type="text" class="textinput" name="Bus_No" placeholder="Bus Number">
            <input type="text" class="textinput" name="Route_No" placeholder="Route Numebr">
            <input type="text" class="textinput" name="City_No" placeholder="City No">
            <br><br>
            <br><input type="submit" name="submit" value="edit" class="btn" id="button">
        </form>
    </div>
  </section>

<script src="schedule.js"></script>

</body>
</html>
