<!--Akalanka-->
<html lang="en">

<head>
<meta charset="UTF-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<link rel="stylesheet" href="./css/pregister.css">
</head>


<body>

    <!-- includeing header using php -->
    <?php include "./header.php" ?>

<br><br><br><br>

<h2><center>Insert Passenger Details</center> </h2>
<fieldset class=form>


<form  method="post"  action="pinsetr.php" >
    <h1>user information</h1>
    
Id <br><input type="text" name="uid" readonly ><br><br><br>
 First name <br><input type="text "name="ufname" ><br><br><br>
 Last name <br><input type="text"name="ulname"><br><br><br>
 User name <br><input type="text" name="uuname" ><br><br><br>
 Contact <br><input type="text" name="ucontact"><br><br><br>


<input type="Submit" class=btns> <input type="Reset" class=btns>

</form>
<script>alert("Personal details form is loading")</script>

</fieldset>
<br><br><br><br>

<!-- includeing header using php -->
<?php include "./footer.php" ?>
</body>

</html>