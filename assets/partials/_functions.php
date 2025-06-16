<?php
    function db_connect()
    {
        $servername = 'localhost';
        $username = 'root';
        $password = '';
        $database = 'iwtbus';

        $conn = mysqli_connect($servername, $username, $password, $database);
        return $conn;
    }

    function exist_user($conn, $username)
    {
        $sql = "SELECT * FROM users WHERE user_name='$username'";
        
        $result = mysqli_query($conn, $sql);
        $num = mysqli_num_rows($result);
        if($num)
            return true;
        return false;
    }

    function get_from_table($conn, $table, $primaryKey, $pKeyValue, $toget)
    {
        $sql = "SELECT * FROM $table WHERE $primaryKey='$pKeyValue'";
        $result = mysqli_query($conn, $sql);
        $row = mysqli_fetch_assoc($result);

        if($row)
        {
            return $row["$toget"];
        }
        return false;
    }
?>