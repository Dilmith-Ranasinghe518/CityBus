<!--Dilmith-->
<html lang="en">
    <head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./css/indexxxcss.css">
</head>
<body>
  <fieldset>
     <legend><b> Driver Info</b> </legend>
     <form method="post" action="insertx.php">
       ID: <input type="text" name="did" readonly><br>
       Username:<input type="text" name="usern"><br>
       Password: <input type="password" name="dpass"><br>
       Name: <input type="text"name="dname"><br>
       Contact: <input type="text" name="dcontact"><br>
       Email: <input type="text" name="demail"><br>
       Bus No: <input type="text" name="busno"><br>
       Starting from: <input type="text" name="starting"><br>
       Destination:<input type="text" name="destination"><br>
       Time: <input type="text" name="time"><br>

       <br><input type="submit">  <input type="reset">

</form>




</fieldset>
<center>
    <a href="readx.php" class="btns" style="background-color: green; color: white; padding: 10px 20px; border-radius: 5px; text-decoration: none;">View</a>
</center>
</body>
</html>