<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
<link rel="stylesheet" href="./css/bus.css">
</head>
<body>

<fieldset  class=form>

<h2>EDIT BUS DETAILS</h2>

<form  method="post"  action="bupdate.php" >
Bus Id<br><input type="text" name="bid"  ><br><br><br>
Bus number<br><input type="text "name="bno" ><br><br><br>
Bus type <br><input type="text"name="btype"><br><br><br>
<input type="submit" value="update"  class=btns>

</form>

</fieldset>
<fieldset class=form>

<h2>DELETE BUS DETAILS</h2>

<form  method="post"  action="bdelete.php" >
Id <br><input type="text" name="bid" ><br><br><br>

<input type="submit" value="Delete" class=btnss>
</form>

</fieldset>

<center>
    <a href="admin\dashboard.php">
        <button style="display: inline-block; padding: 10px 20px; background-color: blue; color: white; border: none; border-radius: 5px; cursor: pointer;">
            Go Back
        </button>
    </a>
</center>
<center>
<a href="bread.php" class="btns">View</a>
<center>

</body>

</html>