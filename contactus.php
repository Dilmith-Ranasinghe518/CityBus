<!--Yelani-->
<?php




$servername = "localhost";
$username = "root";
$password = "";
$database = "iwtbus";

$conn = mysqli_connect($servername, $username, $password, $database);

if(!$conn){
    die("Connection failed: ".mysqli_connect_error());
}




if(isset($_POST['submit'])){
    $name = $_POST['FullName'];
    $salutation = $_POST['Salutation'];
    $email = $_POST['Email'];
    $telephone = $_POST['Telephone'];
    $message = $_POST['Message'];
    

    $sql = "INSERT INTO ContactRequest (FullName, Salutation, Email, Telephone, Message) VALUES ('$name', '$salutation', '$email', '$telephone', '$message')";
    $result = mysqli_query($conn, $sql);
    if($result){
        echo "<script>alert('Your request has been submitted successfully!')</script>";
    }else{ 
        echo "<script>alert('Failed to submit your request!')</script>";
    }
}

?>



<!DOCTYPE html>
<html>
<head>
    <meta charset='utf-8'>
    <title>Contact us</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css">
    <link rel="stylesheet" href="./css/contactus.css">

</head>
<body>
        <!-- includeing header using php -->
        <?php include "./header.php" ?>
    <div class="topic">
    <hr>
    <h1>CONTACT US</h1>
    <hr>
    </div>
     <br><br>
     <div class="info">
    <table>
        <tr>
            <th><i class="fa fa-map-marker" aria-hidden="true"></i> Location</th>
            <th><i class="fa fa-phone" aria-hidden="true"></i>telephone</th>
            <th><i class="fa fa-envelope" aria-hidden="true"></i>E-mail</th>

        </tr>
        <tr>
            <td>City Bus,<br>
                ABC Building <br>
                Maradana Rd, <br>
                colombo 10.
                </td>
             <td>   +94 123456789<br>
                +94 987654321
             </td>

             <td>
                <a href="citybus@gmail.com">citybus@gmail.com</a>
                </td>

      </tr>

        </table>
        </div>
        <br><br><br>



    <div class="container" >
        <form action="" method="POST">
            <input type="text" id="Full name" name="FullName" placeholder="Full Name">
            <select id="Salutation" name="Salutation">
                <option value ="Salutation">Salutation</option>
                <option value ="Mr.">Mr.</option>
                <option value ="Ms.">Ms.</option>
                <option value ="Dr.">Dr.</option>
                <option value ="prof.">Prof.</option>
                <option value ="rev.">rev.</option>
                </select>
                

            <input type="email" id="email" name="Email" placeholder="E-mail">
            <input type="tel" id="telephone" name="Telephone" placeholder="telephone"><br>
            <textarea name="Message" placeholder="Describe your needs..."></textarea><br>
            <br><input type="submit" name="submit" value="submit " id="button" >
            </form>
    </div>
    <br><br>
</body>
<?php include "./footer.php" ?>
</html>