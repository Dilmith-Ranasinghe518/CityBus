<?php

require 'config.php';


    $sql="SELECT ReserveID,Email,datetime,type,NoOfSeats FROM reservation1";
    $result=$con->query($sql);

    if($result->num_rows>0)
    {
    echo "<table border='1' style='border-collapse: collapse; width: 100%;'>";
    echo "<thead>";
    echo "<tr>";
        echo "<th style='padding: 10px; text-align: left; background-color:#FFFF00  '>ReserveID</th>";
        echo "<th style='padding: 10px; text-align: left; background-color:#FFFF00 ; border: 1px solid #ddd;'>Email</th>";
        echo "<th style='padding: 10px; text-align: left; background-color:#FFFF00; border: 1px solid #ddd;'>Datetime</th>";
        echo "<th style='padding: 10px; text-align: left; background-color:#FFFF00; border: 1px solid #ddd;'>Type</th>";
        echo "<th style='padding: 10px; text-align: left; background-color:#FFFF00; border: 1px solid #ddd;'>NoOfSeats</th>";
    echo "</tr>";
    echo "</thead>";
    echo "<tbody>";


    while($row=$result->fetch_assoc()) 
    {
    echo "<tr>";
        echo "<td style='padding: 10px; border: 1px solid #ddd; background-color: #FFFFCC;'>" .$row["ReserveID"]."</td>";
        echo "<td style='padding: 10px; border: 1px solid #ddd; background-color: #FFFFCC;'>" .$row["Email"]."</td>";
        echo "<td style='padding: 10px; border: 1px solid #ddd; background-color: #FFFFCC;'>" .$row["datetime"]."</td>";
        echo "<td style='padding: 10px; border: 1px solid #ddd; background-color: #FFFFCC;'>" .$row["type"]."</td>";
        echo "<td style='padding: 10px; border: 1px solid #ddd; background-color: #FFFFCC;'>" .$row["NoOfSeats"]."</td>";
    }
    
        
echo"</table>";
    }

    else
    {
        echo "No Results";
    }

    $con->close();

?>

<center>
    <a href="admin\dashboard.php">
        <button style="display: inline-block; padding: 10px 20px; background-color: blue; color: white; border: none; border-radius: 5px; cursor: pointer;">
            Go Back
        </button>
    </a>
</center>