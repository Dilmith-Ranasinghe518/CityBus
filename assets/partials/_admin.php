<?php
require '_functions.php';

$sql="SELECT user_id,user_fullname,user_name,user_password,user_created FROM users";

$result=$conn->query($sql);

if($result->num_rows>0)
{
    while($row=$result->fetch_assoc())
    {
        echo $row["user_id"]." ".$row["user_fullname"]." "["user_name"]." ".$row["user_password"]." ".$row["user_created"]."<br>";
    }
}
else
{
    echo "No Results";
}

$con->close();

?>