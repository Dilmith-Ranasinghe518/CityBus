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

$sql = "DELETE FROM `scedule` WHERE SchelduleID = $schedualId";
$result = mysqli_query($conn, $sql);

if($result){
    header("Location: admin_schedual.php");
}else{
    echo "Failed to delete the record";
}

?>