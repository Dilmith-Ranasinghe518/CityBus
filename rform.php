<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
<link rel="stylesheet" href="css/rstyle.css">
  </head>
  <body background="images/reservation.jpg">
<div class="container">
        <h2>EDIT RESERVATION DETAILS</h2>
        <form method="post" action="rupdate.php">
          Reserve ID<input type="text" name="rid"><br><br><br>
          E-mail Address <input type="text" name="remail"><br><br><br>
          Contact No <input type="text" name="rcontact"><br><br><br>
          Date and Time<input type="datetime-local" name="rdatetime"><br><br><br>
          
          Type<br><select name="rtype">
                        <option value="ac">A/C</option>
                        <option value="non-ac">Non A/C</option>
                        </select><br><br><br>
            Number of Seats<input type="number" name="rseats" min="0"><br><br><br>
          <input type="submit" value="update">
        </form>
    </div>
<div class="container">
        <h2>DELETE DETAILS</h2>
        <form method="post" action="rdelete.php">
        Reserve ID<input type="text" name="rid">
    <input type="submit" value="Delete">
        
        </form>
</div>
<center>
    <a href="rread.php" class="btns" style="background-color: green; color: white; padding: 10px 20px; border-radius: 5px; text-decoration: none;">View</a>
</center>


</body>
</html>