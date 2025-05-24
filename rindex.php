<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>RESERVATION FORM</title>
    <link rel="stylesheet" href="./css/rstyle.css">
  </head>

<body background="images/reservation.jpg">
      <!-- includeing header using php -->
      <?php include "./header.php" ?>
<fieldset>
      <div class="dropdown">
          <label for="from">From:</label>
          <select id="from" name="from" >
              <option value="Nugegoda">Nugegoda</option>
              <option value="Kadawata">Kadawata</option>
              <option value="Maharagama">Maharagama</option>
              <option value="Kaduwela">Kaduwela</option>
              <option value="Malabe">Malabe</option>
              <option value="Kiribathgoda">Kiribathgoda</option>
              <option value="Kalaniya">Kalaniya</option>
          </select>
      </div>
        <div class="dropdown">
        <label for="to">To:</label>
          <select id="to" name="to">
              <option value="Colombo">Colombo</option>
              <option value="Kandy">Kandy</option>
              <option value="Kurunagala">Kurunagala</option>
              <option value="Galle">Galle</option>
              <option value="Gampaha">Gampaha</option>
              <option value="Jaffna">Jaffna</option>
              <option value="Polonnaruwa">Polonnaruwa</option>
          </select>
        </div>
  </fieldset>


<div class="container">
        <h2>RESERVATION FORM</h2>
        <form method="post" action="rinsert.php">
          Reserve ID<input type="text"  disabled><br><br><br>
          E-mail Address <input type="text" name="remail"><br><br><br>
          Contact No <input type="text" name="rcontact"><br><br><br>
          Date and Time<input type="datetime-local" name="rdatetime"><br><br><br>
          
          Type<br><select name="rtype">
                        <option value="ac">A/C</option>
                        <option value="non-ac">Non A/C</option>
                        </select><br><br><br>
            Number of Seats<input type="number" name="rseats" min="0"><br><br><br>
          <input type="Submit"> <input type="Reset">
        </form>
</div>
<br><br>

<!-- includeing footer using php -->
<?php include "./footer.php" ?>
</body>
</html>
